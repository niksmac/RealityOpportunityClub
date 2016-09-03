<?php 
include('index.tpl');

function getTitle()
{
echo 'Your PIN and Password';
}

function ShowContent($rocuname)
{
?>
<form id="ppform" name="ppform" method="post" action="pinchk.php">
                  <table width="500" border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr>
                      <td width="100" height="107" align="left" valign="middle">&nbsp;</td>
                      <td width="192" align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <?php if ($_GET['token'])  { ?>
                    <tr>
                      <td colspan="2" align="center" valign="middle" ><div class="errorinfodiv">Your Key or PIN Seems to be invalid</div></td>
                    </tr>
                    <?php } ?>
                    
                    <tr>
                      <td align="left" valign="middle">PIN No</td>
                      <td align="left" valign="middle"><input name="pinno" type="text"  id="pinno" size="10" title="Your PIN" /></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Secret Key</td>
                      <td align="left" valign="middle"><input name="pass" type="password"  id="pass" size="10" title="Secret Key" /></td>
                    </tr>                 
                    <tr>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle"><label class="submit"><input type="submit" id="send" value="Continue" /></label></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
  </table>
</form>
<?php 
}

?>

<script type="text/javascript" src="../js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" >
$(document).ready(function(){
// ====================================================== //

var jVal = {
	'pinno' : function() {
	
		$('body').append('<div id="pinnoInfo" class="info"></div>');
		
		var pinnoInfo = $('#pinnoInfo');
		var ele = $('#pinno');
		var pos = ele.offset();
		
		pinnoInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /\d{3}/;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				pinnoInfo.removeClass('correct').addClass('error').html('&larr; PIN No Seems to be incorrect !!').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				pinnoInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	'pass' : function() {
	
		$('body').append('<div id="passInfo" class="info"></div>');
	
		var passInfo = $('#passInfo');
		var ele = $('#pass');
		var pos = ele.offset();
		
		passInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /\w{7}/;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				passInfo.removeClass('correct').addClass('error').html('&larr; Key Seems to be incorrect !!').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				passInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	
	

	
	'send' : function (){
		if(!jVal.errors) {
			$('#ppform').submit();
		}
	}
};

// ====================================================== //

$('#send').click(function (){
	var obj = $.browser.webkit ? $('body') : $('html');
	obj.animate({ scrollTop: $('#ppform').offset().top }, 550, function (){
		jVal.errors = false;
		jVal.pinno();
		jVal.pass();
		jVal.send();
	});
	return false;
});

$('#pinno').change(jVal.pinno);
$('#pass').change(jVal.pass);
// ====================================================== //
});
</script>
