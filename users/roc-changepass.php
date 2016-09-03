<?php 
include('index.tpl');

function getTitle()
{
echo 'Change Password';
}

function ShowContent($rocuname)
{
?>
<form id="passchnge" name="passchnge" method="post" action="changepass_code.php">
          <table width="500" border="0" align="center" cellpadding="3" cellspacing="0">
            <tr>
              <td width="120" height="79">&nbsp;</td>
              <td width="145">&nbsp;</td>
            </tr>
            <tr>
              <td>User ID </td>
              <td><?php echo $rocuname; ?>
              <input name="usrid" type="hidden" id="usrid" value="<?php echo $rocuname; ?>" /></td>
            </tr>
            <tr>
              <td>Old Password </td>
              <td><input name="oldpass" type="password" id="oldpass" size="10" /></td>
            </tr>
            <tr>
              <td>New Password </td>
              <td><input name="pass1" type="password" id="pass1" value="" size="10" /></td>
            </tr>
            <tr>
              <td>Retype New Password </td>
              <td><input name="pass2" type="password" id="pass2" size="10" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label class="submit"><input type="submit" name="Submit" value="Submit" onclick="return validateform1(passchnge)" /></label>
                <label class="reset"><input type="reset" name="Submit2" value="Reset" /></label></td>
            </tr>
  </table>
</form>
<?php 
}

?>

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