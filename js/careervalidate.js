$(document).ready(function(){
// ====================================================== //

var jVal = {
	'names' : function() {
	
		$('body').append('<div id="nameInfo" class="info"></div>');
		
		var nameInfo = $('#nameInfo');
		var ele = $('#names');
		var pos = ele.offset();
		
		nameInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 6) {
			jVal.errors = true;
				nameInfo.removeClass('correct').addClass('error').html('&larr; Your Name Here ').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				nameInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	
	'paddress' : function() {
	
		$('body').append('<div id="paddressInfo" class="info"></div>');
	
		var paddressInfo = $('#paddressInfo');
		var ele = $('#paddress');
		var pos = ele.offset();
		
		paddressInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 30) {
			jVal.errors = true;
				paddressInfo.removeClass('correct').addClass('error').html('&larr; come on, Type your address here').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				paddressInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	'pinnos' : function() {
	
		$('body').append('<div id="pinnosInfo" class="info"></div>');
	
		var pinnosInfo = $('#pinnosInfo');
		var ele = $('#pinnos');
		var pos = ele.offset();
		
		pinnosInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /[0-9]{6}/;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				pinnosInfo.removeClass('correct').addClass('error').html('&larr; Pin Number is a 6 Digit Number eg; 6860006').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				pinnosInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	

	
	'distrct' : function() {
	
		$('body').append('<div id="distrctInfo" class="info"></div>');
		
		var distrctInfo = $('#distrctInfo');
		var ele = $('#distrct');
		var pos = ele.offset();
		
		distrctInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 6) {
			jVal.errors = true;
				distrctInfo.removeClass('correct').addClass('error').html('&larr; District Name').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				distrctInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	
	
	'birthDate' : function (){
		
		$('body').append('<div id="birthInfo" class="info"></div>');

		var birthInfo = $('#birthInfo');
		var ele = $('#birthDate');
		var pos = ele.offset();
		
		birthInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$/i;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				birthInfo.removeClass('correct').addClass('error').html('&larr; type in date in correct format like dd-mm-yyyy').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				birthInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}	
	},
		
	'emails' : function() {
	
		$('body').append('<div id="emailsInfo" class="info"></div>');
	
		var emailsInfo = $('#emailsInfo');
		var ele = $('#emails');
		var pos = ele.offset();
		
		emailsInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /^.+@.+[.].{2,}$/i;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				emailsInfo.removeClass('correct').addClass('error').html('&larr; give me a valid emails adress, ok?').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				emailsInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	'exper' : function() {
	
		$('body').append('<div id="experInfo" class="info"></div>');
	
		var experInfo = $('#experInfo');
		var ele = $('#exper');
		var pos = ele.offset();
		
		experInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 15) {
			jVal.errors = true;
				experInfo.removeClass('correct').addClass('error').html('&larr; Describe your Experience Here.').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				experInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	'eduql' : function() {
	
		$('body').append('<div id="eduqlInfo" class="info"></div>');
	
		var eduqlInfo = $('#eduqlInfo');
		var ele = $('#eduql');
		var pos = ele.offset();
		
		eduqlInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 20) {
			jVal.errors = true;
				eduqlInfo.removeClass('correct').addClass('error').html('&larr; Educational Qualifications Here.').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				eduqlInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	
	'captcha' : function() {
	
		$('body').append('<div id="captchaInfo" class="info"></div>');
	
		var captchaInfo = $('#captchaInfo');
		var ele = $('#captcha');
		var pos = ele.offset();
		
		captchaInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				captchaInfo.removeClass('correct').addClass('error').html('&larr; Write the characters in the image').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				captchaInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	'sendIt' : function (){
		if(!jVal.errors) {
			$('#career').submit();
		}
	}
};

// ====================================================== //

$('#send').click(function (){
	var obj = $.browser.webkit ? $('body') : $('html');
	obj.animate({ scrollTop: $('#career').offset().top }, 550, function (){
		jVal.errors = false;
		jVal.names();
		jVal.paddress();
		jVal.distrct();
		jVal.pinnos();
		jVal.birthDate();
		jVal.emails();
		jVal.exper();
		jVal.eduql();
		jVal.captcha();
		jVal.sendIt();
	});
	return false;
});

$('#names').change(jVal.names);
$('#paddress').change(jVal.paddress);
$('#distrct').change(jVal.distrct);
$('#pinnos').change(jVal.pinnos);
$('#birthDate').change(jVal.birthDate);
$('#emails').change(jVal.emails);
$('#exper').change(jVal.exper);
$('#eduql').change(jVal.eduql);
$('#captcha').change(jVal.captcha);
// ====================================================== //
});