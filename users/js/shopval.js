$(document).ready(function(){
// ====================================================== //

var jVal = {
	
	'approcid' : function() {
	
		$('body').append('<div id="approcidInfo" class="info"></div>');
		
		var approcidInfo = $('#approcidInfo');
		var ele = $('#approcid');
		var pos = ele.offset();
		
		approcidInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /\d{5}/i;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				approcidInfo.removeClass('correct').addClass('error').html('&larr; Your ROC ID').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				approcidInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	'shopname' : function() {
	
		$('body').append('<div id="shopnameInfo" class="info"></div>');
		
		var shopnameInfo = $('#shopnameInfo');
		var ele = $('#shopname');
		var pos = ele.offset();
		
		shopnameInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 5) {
			jVal.errors = true;
				shopnameInfo.removeClass('correct').addClass('error').html('&larr; Enter Your SHOP\'s name Here').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				shopnameInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	

	
	
	
	'Address' : function() {
	
		$('body').append('<div id="AddressInfo" class="info"></div>');
	
		var AddressInfo = $('#AddressInfo');
		var ele = $('#Address');
		var pos = ele.offset();
		
		AddressInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 30) {
			jVal.errors = true;
				AddressInfo.removeClass('correct').addClass('error').html('&larr; Write your SHOP\'s full address!').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				AddressInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	
	'District' : function() {
	
		$('body').append('<div id="DistrictInfo" class="info"></div>');
		
		var DistrictInfo = $('#DistrictInfo');
		var ele = $('#District');
		var pos = ele.offset();
		
		DistrictInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				DistrictInfo.removeClass('correct').addClass('error').html('&larr; Enter Your District Here').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				DistrictInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	
	'Pin' : function() {
	
		$('body').append('<div id="PinInfo" class="info"></div>');
	
		var PinInfo = $('#PinInfo');
		var ele = $('#Pin');
		var pos = ele.offset();
		
		PinInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /[0-9]{6}/;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				PinInfo.removeClass('correct').addClass('error').html('&larr; Pin Number is a 6 Digit Number eg; 6860006').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				PinInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	
	
	'shpcat' : function (){
	
		$('body').append('<div id="shpcatInfo" class="info"></div>');
	
		var shpcatInfo = $('#shpcatInfo');
		var ele = $('#Textiles');
		var pos = ele.offset();
		
		shpcatInfo.css({
			top: pos.top-10,
			left: pos.left+ele.width()+40
		});
		
		if($('input[name="shpcat[]"]:checked').length <= 1) {
			jVal.errors = true;
				shpcatInfo.removeClass('correct').addClass('error').html('&larr; I\'m sure you have at least two!').show();
				ele.removeClass('normal').addClass('wrong');		
		} else {
				shpcatInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}	
	},
	
	
	'sendIt' : function (){
		if(!jVal.errors) {
			$('#shpform').submit();
		}
	}
};

// ====================================================== //

$('#send').click(function (){
	var obj = $.browser.webkit ? $('body') : $('html');
	obj.animate({ scrollTop: $('#shpform').offset().top }, 750, function (){
		jVal.errors = false;
		jVal.approcid();
		jVal.shopname();
		jVal.Address();
		jVal.District();
		jVal.Pin();
		jVal.shpcat();
		jVal.sendIt();
	});
	return false;
});
$('#approcid').change(jVal.approcid);
$('#shopname').change(jVal.shopname);
$('#Address').change(jVal.Address);
$('#District').change(jVal.District);
$('#Pin').change(jVal.Pin);
$('#shpcat').change(jVal.shpcat);
// ====================================================== //
});
