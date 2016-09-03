//Ajax Tooltip script: By JavaScript Kit: http://www.javascriptkit.com
//Last update (July 10th, 08'): Modified tooltip to follow mouse, added Ajax "loading" message.

var ajaxtooltip={
	fadeeffect: [true, 10], //enable Fade? [true/false, duration_milliseconds]
	useroffset: [10, 10], //additional x and y offset of tooltip from mouse cursor, respectively
	loadingHTML: '<div style="font-style:italic"><img src="loading.gif"/> Collecting Data...</div>',

	positiontip:function($tooltip, e){
		var docwidth=(window.innerWidth)? window.innerWidth-15 : ajaxtooltip.iebody.clientWidth-15
		var docheight=(window.innerHeight)? window.innerHeight-18 : ajaxtooltip.iebody.clientHeight-15
		var twidth=$tooltip.get(0).offsetWidth
		var theight=$tooltip.get(0).offsetHeight
		var tipx=e.pageX+this.useroffset[0]
		var tipy=e.pageY+this.useroffset[1]
		tipx=(e.clientX+twidth>docwidth)? tipx-twidth-(2*this.useroffset[0]) : tipx //account for right edge
		tipy=(e.clientY+theight>docheight)? tipy-theight-(2*this.useroffset[0]) : tipy //account for bottom edge
		$tooltip.css({left: tipx, top: tipy})
	},

	showtip:function($tooltip, e){
		if (this.fadeeffect[0])
			$tooltip.hide().fadeIn(this.fadeeffect[1])
		else
			$tooltip.show()
	},

	hidetip:function($tooltip, e){
		if (this.fadeeffect[0])
			$tooltip.fadeOut(this.fadeeffect[1])
		else
			$tooltip.hide()
	}

}

jQuery(document).ready(function(){
	ajaxtooltip.iebody=(document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
	var tooltips=[] //array to contain references to all tooltip DIVs on the page
	$('*[@title^="ajax:"]').each(function(index){ //find all links with "title=ajax:" declaration
		this.titleurl=jQuery.trim(this.getAttribute('title').split(':')[1]) //get URL of external file
		this.titleposition=index+' pos' //remember this tooltip DIV's position relative to its peers
		tooltips.push($('<div class="ajaxtooltip"></div>').appendTo('body'))
		var $target=$(this)
		$target.removeAttr('title')
		$target.hover(
			function(e){ //onMouseover element
				var $tooltip=tooltips[parseInt(this.titleposition)]
				if (!$tooltip.get(0).loadsuccess){ //first time fetching Ajax content for this tooltip?
					$tooltip.html(ajaxtooltip.loadingHTML).show()
					$tooltip.load(this.titleurl, '', function(){
						ajaxtooltip.positiontip($tooltip, e)
						ajaxtooltip.showtip($tooltip, e)
						$tooltip.get(0).loadsuccess=true
					})

				}
				else{
					ajaxtooltip.positiontip($tooltip, e)
					ajaxtooltip.showtip($tooltip, e)
				}
			},
			function(e){ //onMouseout element
				var $tooltip=tooltips[parseInt(this.titleposition)]
				ajaxtooltip.hidetip($tooltip, e)		
			}
		)
		$target.bind("mousemove", function(e){
			var $tooltip=tooltips[parseInt(this.titleposition)]
			ajaxtooltip.positiontip($tooltip, e)
		})
	})
})