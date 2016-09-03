<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olsupplogin'];
$qrtyh=mysql_query("select suppl_id,Name,Address  from olsupplier where suppl_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$suppl_id =$qraysjh['suppl_id'];
$Name =$qraysjh['Name'];
$Address = $qraysjh['Address'];
}
?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td><h1>Change Password</h1></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top"><?php if (isset($_GET['y'])) { ?><div class="okdiv" >Password Changed</div><?php } else if (isset($_GET['n'])) { ?><div class="notokdiv" >Password Cannot Be Changed</div><?php }?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><form id="form1" name="form1" method="post" action="changepassword_code.php">
      <table width="60%" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <td width="31%">Current Password</td>
          <td width="69%"><input type="text" name="oldpass" id="oldpass" /></td>
        </tr>
        <tr>
          <td>New Password</td>
          <td><input type="password" name="pass1" id="pass1" /></td>
        </tr>
        <tr>
          <td>Retype New Password</td>
          <td><input type="password" name="pass2" id="pass2" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label class="submit"><input type="submit" name="button" id="button" value="Submit" onclick="return validate()" /></label>
            <label class="reset"><input type="reset" name="button2" id="button2" value="Reset" /></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
        </form>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>


<?php
}
?>

<script language="JavaScript">

<!--

function validate()

{

if(form1.elements['oldpass'].value.length<1)
{
alert("This Field Cannot be Blank");
form1.elements['oldpass'].focus();
return false;
}


if(form1.elements['pass1'].value.length<1)
{
alert("This Field Cannot be Blank");
form1.elements['pass1'].focus();
return false;
}

if(form1.elements['pass2'].value.length<1)
{
alert("This Field Cannot be Blank");
form1.elements['pass2'].focus();
return false;
}

var ps1 = document.getElementById("pass2").value;
var ps2 = document.getElementById("pass1").value;

if(ps1 != ps2)
{
alert("New Password Must be Same");
document.getElementById("pass1").value = '';
document.getElementById("pass2").value = '';
form1.elements['pass1'].focus();
return false;
}

}

//-->

</script> 