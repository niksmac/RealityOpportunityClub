<?php 
include('index.tpl');

function getTitle()
{
$rocuname = $_SESSION['uname'];
$qry=mysql_query("select Name from members where MemberID='$rocuname'");
while($qrys=mysql_fetch_array($qry))
{
$Name=$qrys['Name'];
}
echo 'Welcome '.$Name;
}

function ShowContent($rocuname)
{
?>
<form id="acfrm" name="acfrm" method="post" action="validatemyactcode_code.php">
                  <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                      <?php if (isset($_GET['fail'])) { ?>
                    <div class="errorinfodiv">Your Activation Key Seems to be Invalid Please Retry.</div>
                     <?php } ?>
                    <tr>
                      <td colspan="7" align="center" valign="middle">Type your Activation key </td>
                      </tr>
                    <tr>
                      <td align="center" valign="middle">&nbsp;</td>
                      <td align="center" valign="middle">&nbsp;</td>
                      <td align="center" valign="middle">&nbsp;</td>
                      <td align="center" valign="middle">&nbsp;</td>
                      <td align="center" valign="middle">&nbsp;</td>
                      <td align="center" valign="middle">&nbsp;</td>
                      <td align="center" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center" valign="middle"><input name="akey1" type="text" id="akey1" size="6" maxlength="5" /></td>
                      <td align="center" valign="middle">-</td>
                      <td align="center" valign="middle"><input name="akey2" type="text" id="akey2" size="6" maxlength="5" /></td>
                      <td align="center" valign="middle">-</td>
                      <td align="center" valign="middle"><input name="akey3" type="text" id="akey3" size="6" maxlength="5" /></td>
                      <td align="center" valign="middle">-</td>
                      <td align="center" valign="middle"><input name="akey4" type="text" id="akey4" size="6" maxlength="5" /></td>
                      </tr>
                    <tr>
                      <td colspan="7" align="right" valign="middle" class="geninfo"><span class="orangetext">* </span>The Key is Case Sensitive</td>
                    </tr>
                    <tr>
                      <td colspan="7" align="center" valign="middle"><label class="submit"><input type="submit" name="button" id="button" value="Activate" onclick="return validateme(acfrm);" /></label></td>
                      </tr>
                    <tr>
                      <td colspan="7" align="center" valign="middle">&nbsp;</td>
                    </tr>
                  </table>
                                </form>
<?php 
}

?>

<script type="text/javascript" language="javascript">
function validateme(frm)
{
	if(frm.elements['akey1'].value.length<5)
	{
	document.getElementById('akey1').style.backgroundColor = 'yellow';
	frm.elements['akey1'].focus();
 	return false;
 	} 
	if(frm.elements['akey2'].value.length<5)
	{
 	document.getElementById('akey2').style.backgroundColor = 'yellow';
	frm.elements['akey2'].focus();
 	return false;
 	}	
	if(frm.elements['akey3'].value.length<5)
	{
 	document.getElementById('akey3').style.backgroundColor = 'yellow';
	frm.elements['akey3'].focus();
 	return false;
 	}
	
	if(frm.elements['akey4'].value.length<5)
	{
 	document.getElementById('akey4').style.backgroundColor = 'yellow';
	frm.elements['akey4'].focus();
 	return false;
 	}

}
</script>
