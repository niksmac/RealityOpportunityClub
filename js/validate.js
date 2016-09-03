$(document).ready(function(){
// ====================================================== //

var jVal = {
	'name' : function() {
	
		$('body').append('<div id="nameInfo" class="info"></div>');
		
		var nameInfo = $('#nameInfo');
		var ele = $('#name');
		var pos = ele.offset();
		
		nameInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				nameInfo.removeClass('correct').addClass('error').html('&larr; Enter Your name Here').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				nameInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	

	'phone' : function() {
	
		$('body').append('<div id="phoneInfo" class="info"></div>');
		
		var phoneInfo = $('#phoneInfo');
		var ele = $('#phone');
		var pos = ele.offset();
		
		phoneInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /\d{10}/i;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				phoneInfo.removeClass('correct').addClass('error').html('&larr; type phone number in correct format').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				phoneInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	
	'email' : function() {
	
		$('body').append('<div id="emailInfo" class="info"></div>');
	
		var emailInfo = $('#emailInfo');
		var ele = $('#email');
		var pos = ele.offset();
		
		emailInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /^.+@.+[.].{2,}$/i;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				emailInfo.removeClass('correct').addClass('error').html('&larr; give me a valid email adress, ok?').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				emailInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	
	'message' : function() {
	
		$('body').append('<div id="messageInfo" class="info"></div>');
	
		var messageInfo = $('#messageInfo');
		var ele = $('#message');
		var pos = ele.offset();
		
		messageInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 20) {
			jVal.errors = true;
				messageInfo.removeClass('correct').addClass('error').html('&larr; come on, tell me a little bit more!').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				messageInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	'sendIt' : function (){
		if(!jVal.errors) {
			$('#jform').submit();
		}
	}
};

// ====================================================== //

$('#send').click(function (){
	var obj = $.browser.webkit ? $('body') : $('html');
	obj.animate({ scrollTop: $('#jform').offset().top }, 750, function (){
		jVal.errors = false;
		jVal.name();
		jVal.phone();
		jVal.email();
		jVal.message();
		jVal.sendIt();
	});
	return false;
});

$('#name').change(jVal.name);
$('#phone').change(jVal.phone);
$('#email').change(jVal.email);
$('#message').change(jVal.message);

// ====================================================== //
});