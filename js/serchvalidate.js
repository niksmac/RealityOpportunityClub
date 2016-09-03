$(document).ready(function(){
// ====================================================== //

var jVal = {

	'shpname' : function() {
	
		$('body').append('<div id="shpnameInfo" class="info"></div>');
		
		var shpnameInfo = $('#shpnameInfo');
		var ele = $('#shpname');
		var pos = ele.offset();
		
		shpnameInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		if(ele.val() == "SHOP NAME" ) {
			jVal.errors = true;
				shpnameInfo.removeClass('correct').addClass('error').html('&larr; Name of the SHOP').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				shpnameInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	'sendIt' : function (){
		if(!jVal.errors) {
			$('#shopsearch').submit();
		}
	}
};

// ====================================================== //

$('#send').click(function (){
	var obj = $.browser.webkit ? $('body') : $('html');
	obj.animate({ scrollTop: $('#shopsearch').offset().top }, 750, function (){
		jVal.errors = false;
		jVal.shpname();
		jVal.sendIt();
	});
	return false;
});

$('#shpname').change(jVal.shpname);
// ====================================================== //
});