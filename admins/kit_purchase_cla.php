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
        <td align="left" valign="top" class="ContentBlue" ><form id="kipfundfrm" name="kipfundfrm" method="post" action="dividekitpurchaseinc_code.php">
          <table width="80%" border="0" cellspacing="0" cellpadding="4">
            <tr>
              <td width="28%">&nbsp;</td>
              <td width="72%">&nbsp;</td>
            </tr>
            <tr>
              <td>Fund This time</td>
              <td><input type="text" name="kipfund" id="kipfund" class="jsrequired" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Submit" /></td>
            </tr>
          </table>
                </form>
                
                
                <?php if (isset($_GET['accc'])) { ?>
                
                <table width="80%" border="1" cellspacing="0" cellpadding="4">
            <tr>
              <td width="6%">No</td>
              <td width="20%">ROC ID</td>
              <td width="35%">Amt</td>
              <td width="39%">Date</td>
            </tr>
<?php $no = 1; $qrtyh=mysql_query("select * from ol_kit_pur_acc ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$roc_id =$qraysjh['roc_id'];
$amt =$qraysjh['amt'];
$dates =$qraysjh['dates'];
 ?>          
            <tr>
              <td><?php echo $no;  ?></td>
              <td><?php echo $roc_id;  ?></td>
              <td><?php echo $amt;  ?></td>
              <td><?php echo $dates;  ?></td>
            </tr>
      <?php $no++; } ?>      
            
          </table>
          <?php  } ?>
        </td>
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
