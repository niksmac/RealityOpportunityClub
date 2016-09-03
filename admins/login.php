<?php
$nologin=0;
if(isset($_GET['noLogin']))
$nologin=$_GET['noLogin'];

$cer=0;
if(isset($_GET['cer']))
$cer=$_GET['cer'];

?>
<script language="javascript"type="text/javascript">
function validateform(name)
{
name.onsubmit=function()
{
if (name.elements['txtuname'].value.length<1) 
{
alert ("You should enter Username and Password");
name.elements['txtuname'].focus();
return false;
}
if (name.elements['txtpwd'].value.length<1) 
{
alert ("You should enter password");
name.elements['txtpwd'].focus();
return false;
}

if (name.elements['number'].value.length<1) 
{
alert ("Please enter the letters as you seen in the left image");
name.elements['number'].focus();
return false;
}

return true;
}
}
</script>
<style type="text/css">
<!--
.style15 {color: #FF0000}
.style16 {
	font-family: Tahoma;
	font-size: 12pt;
	color: #EEEEEE;
	font-weight: bold;
}
-->
</style>
<form id="form1" name="form1" method="post" action="logincode.php">
  <table width="457" height="220" border="1" cellpadding="4" cellspacing="1" bordercolor="#053158">
    <tr>
      <td height="49" align="left" valign="middle" bgcolor="#053158"><span class="style16">Administrator :</span></td>
    </tr>

    <tr>
      <td align="left" valign="top"><table width="339" height="130" border="0" align="center" cellpadding="2" cellspacing="0" class="style2">
        
        <tr>
          <td width="88" align="left" valign="middle">Username</td>
          <td colspan="2" align="left" valign="middle"><input name="txtuname" type="text" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle">Password</td>
          <td colspan="2" align="left" valign="middle"><input name="txtpwd" type="password" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle"></td>
          <td width="75" align="left" valign="middle"><img src="captcha.php" width="75" height="25" /></td>
          <td width="97" align="left" valign="middle"><input name="number" type="text" id="number" size="5" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle"></td>
          <td colspan="2" align="left" valign="middle"><input name="Submit" type="submit" onclick="validateform(form1)" value="Sign In" />
              <input name="Submit2" type="reset" value="Reset"  /></td>
        </tr>
        <?php
	
	if ($nologin==1)
	{
	?>
        <tr>
          <td colspan="3" align="center" valign="middle"><h5 class="style6 style15">Incorrect Username or Password !</h5></td>
        </tr>
        <?php
	}
	?>
    
    <?php
	
	if ($cer==1)
	{
	?>
        <tr>
          <td colspan="3" align="center" valign="middle"><h5 class="style6 style15">Please enter the letters as you seen in the left image!</h5></td>
        </tr>
        <?php
	}
	?>
    
      </table></td>
    </tr>
  </table>
</form>
