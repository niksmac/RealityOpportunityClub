<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<?php $id=$_GET['id']; ?>
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
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{
if(name.elements['st_grade'].value >= 5)
{
alert("Stores Cannot have Grade larger than 4");
name.elements['st_grade'].focus();
document.getElementById("st_grade").value="";
return false;
}
return true;
}
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
      <?php 
$qry=mysql_query("select * from olsupplier where id='$id'");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
?>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top"><form id="form1" name="form1" method="post" action="editolsupp_code.php?id=<?php echo $id; ?>">
  <table width="600" border="0" cellpadding="3" cellspacing="0" class="Contents">
    <tr>
      <td width="142">&nbsp;</td>
      <td width="227">&nbsp;</td>
      <td width="213">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Store Id</strong></td>
      <td align="left" valign="top"><input name="store_id" type="text" id="store_id" value="<?php echo $qrys['suppl_id']; ?>" size="20" /></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Password</strong></td>
      <td align="left" valign="top"><input type="text" name="passwd" id="passwd" value="<?php echo $qrys['passwd']; ?>"/></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Store Name</strong></td>
      <td align="left" valign="top"><input name="storename" type="text" id="storename" value="<?php echo $qrys['Name']; ?>" size="35" />
        <span class="errtxt">        *</span></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Address</strong></td>
      <td align="left" valign="top"><textarea name="adderss" cols="35" rows="5" id="adderss"><?php echo $qrys['Address']; ?></textarea></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle" class="successtxt">&nbsp;</td>
      <td align="center" valign="middle" class="successtxt"><?php if (isset($_GET['yes'])) { ?>
        <marquee behavior="slide">
        New Store Added Successfully
        </marquee>
      <?php }?></td>
      <td align="center" valign="middle" class="successtxt">&nbsp;</td>
    </tr>
  </table>
</form>
<?php }?>&nbsp;</td>
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
