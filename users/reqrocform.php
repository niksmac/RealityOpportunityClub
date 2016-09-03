<?php 
include('index.tpl');

function getTitle()
{
echo 'New Joiners ROC ID';
}

function ShowContent($rocuname)
{
?>

 <form id="ptreeformgh" name="ptreeformgh" method="post" action="joinprimarytree_code.php">
                    <table width="800" border="0" align="center" cellpadding="5" cellspacing="0">
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="210">Referral's Primary ID </td>
                        <td width="570"><span ><strong>:</strong></span>&nbsp;<?php echo "P".$_SESSION['refpid']; ?>&nbsp;</td>
                      </tr>
                        <?php 
						if ($_SESSION['side'] == "L")
						$sid = "Left";
						else if ($_SESSION['side'] == "R")
						$sid = "Right";
						?>
                      <tr>
                        <td>Side Selected</td>
                        <td><span ><strong>:&nbsp;</strong></span><?php echo $sid; ?></td>
                        </tr>
                      <tr>
                        <td>New Joiner's ROC ID</td>
                        <td><span ><strong>:</strong></span>
                          <input name="rocid" type="text"  id="rocid" size="12" title="New Joiner's ROC ID" onkeyup="javascript:validateid('idval_div','rocid')" /></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><label class="submit"><input type="submit" id="send" value="Submit"  /></label></td>
                        </tr>
                    </table>
</form>
<?php 
}

function isValid($memid)
{
	$ssdgfsgf=mysql_query("select MemberID from members where MemberID='$memid' ");
	$cnt = mysql_num_rows ($ssdgfsgf);
	if($cnt == 1)
	return true;
	else 
	return false;
}
?>
<script type="text/javascript" src="../js/jquery.min.js" charset="utf-8"></script>

<script type="text/javascript" >
$(document).ready(function(){
// ====================================================== //

var jVal = {
	'rocid' : function() {
	
		$('body').append('<div id="rocidInfo" class="info"></div>');
		
		var rocidInfo = $('#rocidInfo');
		var ele = $('#rocid');
		var pos = ele.offset();
		
		rocidInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		var valll = ele.val();
		if(ele.val().length < 5) {
		jVal.errors = true;
				rocidInfo.removeClass('correct').addClass('error').html('&larr; The Given ID Seems to be Incorrect!').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				rocidInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
		

	},
	
	'send' : function (){
		if(!jVal.errors) {
			$('#ptreeformgh').submit();
		}
	}
};

// ====================================================== //

$('#send').click(function (){
	var obj = $.browser.webkit ? $('body') : $('html');
	obj.animate({ scrollTop: $('#ptreeformgh').offset().top }, 550, function (){
		jVal.errors = false;
		jVal.rocid();
		jVal.send();
	});
	return false;
});

$('#rocid').change(jVal.rocid);
// ====================================================== //
});
</script>
