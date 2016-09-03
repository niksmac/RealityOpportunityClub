$(document).ready(function() {

	//Custom settings
	var style_in = 'easeOutBounce';
	var style_out = 'jswing';
	var speed_in = 2000;
	var speed_out = 700;	

	//Calculation for corners
	var neg = Math.round($('.qitem').width() / 2) * (-1);
	var ht = Math.round($('.qitem').height() / 2) * (-1);
	var pos = neg * (-1);
	var het = ht * (-1);
	var out = pos * 2;
	
	$('.qitem').each(function () {
	
		url = $(this).find('a').attr('href');
		img = $(this).find('img').attr('src');
		alt = $(this).find('img').attr('img');
		
		$('img', this).remove();
		$(this).append('<div class="topLeft"></div><div class="topRight"></div><div class="bottomLeft"></div><div class="bottomRight"></div>');
		$(this).children('div').css('background-image','url('+ img + ')');

		$(this).find('div.topLeft').css({top:0, left:0, width:pos , height:het});	
		$(this).find('div.topRight').css({top:0, left:pos, width:pos , height:het});	
		$(this).find('div.bottomLeft').css({bottom:0, left:0, width:pos , height:het});	
		$(this).find('div.bottomRight').css({bottom:0, left:pos, width:pos , height:het});	

	}).hover(function () {
	
		$(this).find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out});	
		$(this).find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});	
		$(this).find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});	
		$(this).find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});	
				
	},
	
	function () {

		$(this).find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
		$(this).find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
		$(this).find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
		$(this).find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});	
	
	}).click (function () {
		
											  window.open($(this).find('a').attr('href'))
	});
	
	

});