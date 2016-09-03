<?php include("sessioncode.php");$shopid = $_SESSION['shplogin']; ?><title>Change Password</title>
<script language="javascript" type="text/javascript">
function validateform1(name)
{
if(name.elements['usrid'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['usrid'].focus();
return false;
}
if(name.elements['oldpass'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['oldpass'].focus();
return false;
}
if(name.elements['pass1'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['pass1'].focus();
return false;
}
if(name.elements['pass2'].value.length<1)
{
alert("Thi  Field Cannot be Blank");
name.elements['pass2'].focus();
return false;
}
if (document.getElementById('pass2').value != document.getElementById('pass1').value)
{
alert("New Passwords fields doesn't match !!");
name.elements['pass2'].value="";
name.elements['pass1'].value="";
name.elements['pass1'].focus();
return false;
}

}
</script>


<link href="css/screen.css" rel="stylesheet" type="text/css" />
<table width="850" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><a href="index.php" title="home page"> <img src="images/logo.png" alt="logo" class="logo" border="0" /></a></td>
  </tr>
  <tr>
    <td><table width="850" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="189" align="left" valign="top"><div align="right">
          <?php include("shpmenu.php"); ?>
        </div></td>
        <td width="655" align="left" valign="top"><form id="passchnge" name="passchnge" method="post" action="changepass_code.php"><table width="400" border="0" cellpadding="3" cellspacing="0">
          <tr>
            <td width="17">&nbsp;</td>
            <td width="120">&nbsp;</td>
            <td width="145">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>SHOP ID </td>
            <td><?php echo $shopid; ?>
                <input name="usrid" type="hidden" id="usrid" value="<?php echo $shopid; ?>" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Old Password </td>
            <td><input name="oldpass" type="password" id="oldpass" size="10" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>New Password </td>
            <td><input name="pass1" type="password" id="pass1" value="" size="10" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Retype New Password </td>
            <td><input name="pass2" type="password" id="pass2" size="10" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit" onclick="return validateform1(passchnge)" />
                <input type="reset" name="Submit2" value="Reset" /></td>
          </tr>
        </table></form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
