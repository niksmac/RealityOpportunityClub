// Create a self-invoking anonymous function. That way, 
// we're free to use the jQuery dollar symbol anywhere within.
(function($) {

// We name our plugin "newscroll". When creating our function, 
// we'll allow the user to pass in a couple of parameters.
$.fn.newsScroll = function(options) {
	
	// For each item in the wrapped set, perform the following. 
	return this.each(function() {	
	  
		var
		  // Caches this - or the ul widget(s) that was passed in.
		  //  Saves time and improves performance.
		  $this = $(this), 
		  
		  // If the user doesn't pass in parameters, we'll use this object. 
		  defaults = {
		  	speed: 400, // How quickly should the items scroll?
		  	delay: 3000, // How long a rest between transitions?
		  	list_item_height: $this.children('li').outerHeight() // How tall is each list item? If this parameter isn't passed in, jQuery will grab it.
	     },
	      // Create a new object that merges the defaults and the 
	      // user's "options".  The latter takes precedence.
		  settings = $.extend({}, defaults, options);
		 
	  // This sets an interval that will be called continuously.
	  setInterval(function() {
	  	    // Get the very first list item in the wrapped set.
	  	    $this.children('li:first')
	  	    		// Animate it
	  	    		.animate({ 
	  	    			marginTop : '-' + settings.list_item_height, // Shift this first item upwards.
	  	    		   opacity: 'hide' }, // Fade the li out.
	  	    		   
	  	    		   // Over the course of however long is 
	  	    		   // passed in. (settings.speed)
	  	    		   settings.speed, 
	  	    		   
	  	    		   // When complete, run a callback function.
	  	    		   function() {
	  	    		   	
	  	    		   	// Get that first list item again. 
	  	 					$this.children('li:first')
	  	 					     .appendTo($this) // Move it the very bottom of the ul.
	  	 					     
	  	 					     // Reset its margin top back to 0. Otherwise, 
	  	 					     // it will still contain the negative value that we set earlier.
	  	 					     .css('marginTop', 0) 
	  	 					     .fadeIn(300); // Fade in back in.
  		 			  }
 	 			  ); // end animate
 	  }, settings.delay); // end setInterval
	  });
}

})(jQuery);

