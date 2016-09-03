<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>ROP Club : Administrator</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>
<link href="colours.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" >

function validateform1(name)
{
smsform.onsubmit=function()
{

if(name.elements['mobno'].value.length!=10)
{
name.elements['mobno'].focus();
alert (validatePhone(mobno));
return false;
}


return true;
}
}

function validatePhone(fld) {
    var error = "";
	//var fldlen = 0;
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');     
	var fldlen = fld.value.length;
		
   if (fldlen == 0  ) {
        error = "You didn't enter a phone number.\n";
        //fld.style.background = 'Yellow';
    } else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters.\n";
        //fld.style.background = 'Yellow';
    } else if (!(stripped.length == 10)) {
        error = "The phone number is the wrong length.\n";
        //fld.style.background = 'Yellow';
    } 
    return error;
}

</script>
</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="66" height="185" align="left" valign="top"><img id="mlm_01" src="images/mlm_01.jpg" width="66" height="185" alt="" /></td>
    <td width="838" height="185" align="left" valign="top" background="images/mlm_13.jpg"><?php include("banner.php"); ?></td>
    <td width="76" height="185" align="left" valign="top"><img id="mlm_03" src="images/mlm_03.jpg" width="76" height="185" alt="" /></td>
  </tr>
  <tr>
    <td width="66" height="700" align="left" valign="top" background="images/mlm_07.jpg">&nbsp;</td>
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form id="form1" name="form1" method="post" action="changecode.php">
          <table width="300" border="0" cellpadding="5" cellspacing="0" class="Contents" style="border:thin; border: #0A0A0A;">
            <tr>
              <td colspan="2"><strong class="Headings">Search Authentication</strong></td>
              </tr>
              <?php 
$qry=mysql_query("select pinno from pintbl ");

while($sdfsdfa=mysql_fetch_array($qry))
{
$pinno=$sdfsdfa['pinno'];
}
?>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
              <td width="65">Old Code</td>
              <td width="215"><?php echo $pinno; ?>&nbsp;</td>
            </tr>
            <tr>
              <td>New Code</td>
              <td><input type="text" name="newoinno" id="newoinno" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Change" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form>
          <form id="smsform" name="smsform" method="post" action="sendsms_code.php">
            <table width="500" border="0" cellpadding="5" cellspacing="0" class="ContentBlue">
              <tr>
                <td width="43">&nbsp;</td>
                <td width="237">Send Authentication code</td>
              </tr>
              <tr>
                <td>Mob No</td>
                <td><input name="mobno" type="text" id="mobno" value="" size="30" maxlength="10" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="button2" id="button2" value="Submit" onclick="validateform1(smsform)"/></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            </form>
          <p>&nbsp;</p>
          <p>
            <?php if (isset ($_GET['snd'])) { ?> 
</p>
          <p class="successtxt">SMS containig PIN has been sent to <?php echo $_GET['no']?></p>
          <?php } ?>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
    <td width="76" height="700" align="left" valign="top" background="images/mlm_09.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td width="66" height="58" align="left" valign="top"><img id="mlm_10" src="images/mlm_10.jpg" width="66" height="58" alt="" /></td>
    <td width="838" height="58" align="left" valign="top" background="images/mlm_14.jpg">&nbsp;</td>
    <td width="76" height="58" align="left" valign="top"><img id="mlm_12" src="images/mlm_12.jpg" width="76" height="58" alt="" /></td>
  </tr>
</table>
</body>
</html>
