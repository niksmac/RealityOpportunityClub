    <!-- [template css] begin -->
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="css/960.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" /> 
    <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <!-- [template css] end -->
<script language="javascript"type="text/javascript">
function validateform(name)
{
name.onsubmit=function()
{
if (name.elements['txtuname'].value.length<1) 
{
alert ("Your ROC ID expected Here");
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
.style1 {color: #FF0000}
.style2 {color: #EAEAEA}
-->
    </style>
    <form id="form1" name="form1" method="post" target="_parent" action="shoplogin_code.php">
<table width="550" border="0" align="center" cellpadding="3" cellspacing="0" >

<?php if (isset($_GET['cer'])) {  ?>
        
<tr>
  <td height="53">&nbsp;</td>
  <td><?php echo "<div class=\"error\">Error Human Verification Failed !!!.</div>"; ?></td>
  </tr>
<?php } ?>
<?php if (isset($_GET['fail'])) {  ?>
        
<tr>
  <td height="53">&nbsp;</td>
  <td><?php echo "<div class=\"error\">Wrong Credentials Please Retry !!!.</div>"; ?></td>
  </tr>
<?php } ?>
  
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td width="12%">&nbsp;</td>
              <td><input name="txtuname" type="text" class="text name" id="txtuname" onfocus="if (this.value=='SHOP ID') this.value='';" onblur="if (this.value=='') this.value='SHOP ID';" value="SHOP ID" size="12" /> 
                <span class="style1">*</span></td>
    </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="txtpwd" type="password" class="text name" id="txtpwd" onfocus="if (this.value=='PASSWORD') this.value='';" onblur="if (this.value=='') this.value='PASSWORD';" value="PASSWORD" size="12" />
              <span class="style1">*</span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td width="66%"><input name="number" type="text" class="text name" id="number" onfocus="if (this.value=='Human Varification') this.value='';" onblur="if (this.value=='') this.value='Human Varification';" value="Human Varification" size="5" />
              <span class="style1">*</span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><img src="../captcha.php" width="75" height="25" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="button" type="submit" class="button" id="button" onclick="validateform(form1)" value="login to my shop" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
</form>