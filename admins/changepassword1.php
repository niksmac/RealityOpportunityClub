<script language="JavaScript" type="text/javascript">
function validateForm(oForm)
 {
 	oForm.onsubmit = function() //
 	{
 		if(oForm.elements['uplace'].value.length<1)
               	{

 			alert("You cannot leave the  userplace field empty");
			oForm.elements['uplace'].focus();
 		return false;
 		}
 		if(oForm.elements['oldpwd'].value.length<1)
		               	{
		 			alert("You cannot leave the Oldpassword  field empty");

					oForm.elements['oldpwd'].focus();

		 			return false;
 		}
 		if(oForm.elements['newpwd'].value.length<1)
		               	{
		 			alert("You cannot leave the Newpassword  field empty");
				oForm.elements['newpwd'].focus();
		 			return false;
 		}
if(oForm.elements['cnewpwd'].value.length<1)
		               	{
		 			alert("You cannot leave the Confirmpassword  field empty");
				oForm.elements['cnewpwd'].focus();
		 			return false;
 		}
if(oForm.elements['cnewpwd'].value!=oForm.elements['newpwd'].value)
{

        alert("Retype new password");

        oForm.elements['cnewpwd'].value="";

        oForm.elements['newpwd'].value="";

		oForm.elements['newpwd'].focus();

	 			return false;

}
return true;
 }
 }
 </script>
<link href="colours.css" rel="stylesheet" type="text/css">
<form place="changepassword" method="post" action="changepassword_code.php" name="dfgdf"  >
            <table width="435" height="220" border="0" align="left" cellpadding="0" cellspacing="0" class="Contents">
        <tr>
              <td height="27" align="center" >&nbsp;</td>
            </tr>
            <tr>
              <td width="431" height="191" align="center" valign="top" >

                <table border="0" align="center" cellpadding="3" cellspacing="0" bordercolor="#111111" class="Contents" id="AutoNumber6" style="border-collapse: collapse">

                  <tr>
                    <td align="left" valign="middle" class="nik1">Login Id </td>
                    <td align="left" valign="middle"><input name="uname" type="text" id="uname" size="28" class="jsrequired" ></td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" class="nik1">Old 
                      
                      Password</td>
                    <td align="left" valign="middle"><INPUT name="oldpwd" type="password"id="oldpwd" tabindex="2" SIZE="30" place="oldpwd" vlaue="" class="jsrequired" ></td>
                  </tr>

                  <tr>

                    <td width="143" align="left" valign="middle" class="nik1">New 

                      Password</td>

                    <td width="188" align="left" valign="middle"><INPUT name="newpwd" type="password"id="newpwd" tabindex="3" SIZE="30" place="newpwd" vlaue="" class="jsrequired" ></td>
                  </tr>

                  <tr>

                    <td align="left" valign="middle" class="nik1">Confirm 

                      Password</td>

                    <td align="left" valign="middle"><INPUT place="cnewpwd" vlaue="" SIZE="30"tabindex="4" type="password" class="jsrequired" ></td>
                  </tr>

                  <tr>
                    <td align="center">&nbsp;</td>
                    <td align="left">&nbsp;</td>
                  </tr>
                  <tr>

                    <td align="center">&nbsp;</td>
                    <td align="left"><input name="Submit" type="submit" class="newsplace" tabindex="9" onClick="validateForm(changepasswird)" value="Change Password" place="B1"></td>
                  </tr>

                  <tr>

                    <td colspan="2" align="center">
  <?php
    $fl=0;
	if(isset($_GET['fl']))
	$fl=$_GET['fl'];
	if($fl==1)
	{
	?>
<span class="successtxt">Password Changed Successfully </span><br>
	<?php
	}
	else if($fl==2)
	{
	?>  
<span class="errtxt">Sorry Password Cannot be changed !!! </span>
    <?php }?>
   </td>
              </tr>
              </table></td>
            </tr>
  </table>
</form>	