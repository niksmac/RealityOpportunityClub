<?php 
include('index.tpl');

function getTitle()
{
echo 'Referral Primary Details';
}

function ShowContent($rocuname)
{
?>
<form id="ptreeform" name="ptreeform" method="post" action="refjoinprimarytree_code.php">
                    <table width="800" border="0" align="center" cellpadding="4" cellspacing="0">

                        <?php if ($_GET['token'])  { ?>

                        <?php } ?>
                        <tr>
                          <td height="49" align="left">&nbsp;</td>
                          <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="329" align="left">&nbsp;</td>
                          <td width="896" align="left"><input name="noref" type="checkbox" id="noref" value="roc" onclick="javascript:apply()"/></td>
                        </tr>
                        <tr>
                        <td align="left">Refferal Primary Id</td>
                          <td align="left"><input name="refpid" type="text" id="refpid" title="Refferal Primary Id" onkeyup="javascript:hjfghjf('dghsdfsgdfg','refpid')" size="15" />
                          </td>
                        </tr>
                      <tr>
                        <td align="left"></td>
                        <td align="left"></td>
                      </tr>
                      <tr>
                        <td align="left">&nbsp;</td>
                        <td align="left"><span class="output-div-container"><span id="dghsdfsgdfg"></span></span></td>
                      </tr>
                      <tr>
                        <td align="left">Side</td>
                        <td align="left"><select name="side" id="side">
                          <option selected="selected" value="ERR" >- select -</option>
                          <option value="L">Left</option>
                          <option value="R">Right</option>
                        </select>                        </td>
                      </tr>
                      
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><label class="submit"><input type="submit" name="button" id="send" value="Continue" /></label></td>
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

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript"  language="javascript">
function hjfghjf(div_id,content_id)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			if (num.length == 0) return false;
			myRand=parseInt(Math.random()*99999999);
			var dt = new Date( ).valueOf();
     		http.open("GET", "availlegss.php?Myrand="+myRand+"&content=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);		
			}
function apply()
{
  document.ptreeform.refpid.disabled=false;
  document.ptreeform.side[0].disabled = false;
  document.ptreeform.side[1].disabled = false;
  
  if(document.ptreeform.noref.checked==true)
  {
  alert ("You will be placed in the ROC Powerline \n\nClick Continue after closing this Box ");
  document.ptreeform.refpid.value="p1000000";
  document.forms['ptreeform'].elements['side'].options[0].value = 'L';
  }
  if(document.ptreeform.noref.checked==false)
  {
    document.ptreeform.refpid.enabled=true;
	document.ptreeform.side.selected = false;
  }
}
</script>
 
<script type="text/javascript" src="../js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" >
$(document).ready(function(){
// ====================================================== //

var jVal = {
	'refpid' : function() {
	
		$('body').append('<div id="refpidInfo" class="info"></div>');
		
		var refpidInfo = $('#refpidInfo');
		var ele = $('#refpid');
		var pos = ele.offset();
		
		refpidInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /^p\d{5}/;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				refpidInfo.removeClass('correct').addClass('error').html('&larr; Referral PID Should start with a P !!').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				refpidInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	'side' : function() {
	
		$('body').append('<div id="sideInfo" class="info"></div>');
	
		var sideInfo = $('#sideInfo');
		var ele = $('#side');
		var pos = ele.offset();
		
		sideInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length != 1) {
			jVal.errors = true;
				sideInfo.removeClass('correct').addClass('error').html('&larr; Select Side').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				sideInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},		
	
	

	
	'send' : function (){
		if(!jVal.errors) {
			$('#ptreeform').submit();
		}
	}
};

// ====================================================== //

$('#send').click(function (){
	var obj = $.browser.webkit ? $('body') : $('html');
	obj.animate({ scrollTop: $('#ptreeform').offset().top }, 550, function (){
		jVal.errors = false;
		jVal.refpid();
		jVal.side();
		jVal.send();
	});
	return false;
});

$('#refpid').change(jVal.refpid);
$('#side').change(jVal.side);
// ====================================================== //
});
</script>
