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
        <td align="left" valign="top" class="ContentBlue" ><table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#06315B" style="border-collapse:collapse;">
          <tr>
            <td width="5%" bgcolor="#CBFAF5">No.</td>
            <td width="8%" bgcolor="#CBFAF5">ROC ID</td>
            <td width="34%" bgcolor="#CBFAF5">KEY</td>
            <td width="9%" bgcolor="#CBFAF5">STATUS</td>
            <td width="22%" bgcolor="#CBFAF5">Issue Date</td>
            <td width="22%" bgcolor="#CBFAF5">Used Date</td>
          </tr>
<?php 
$slno = 1;
 $qry=mysql_query("select memid,actkey,isudate,keytype,usdstat,usddate from selfactivation ");
while($qrys=mysql_fetch_array($qry))
{
$memid=$qrys['memid'];
$actkey=$qrys['actkey'];
$isudate=$qrys['isudate'];
$keytype=$qrys['keytype'];
$usdstat=$qrys['usdstat'];
$usddate=$qrys['usddate'];
?>
          <tr>
            <td><?php echo $slno; ?></td>
            <td><?php echo $memid; ?></td>
            <td><?php echo $actkey; ?></td>
            <td><?php echo $usdstat; ?></td>
            <td><?php echo $isudate; ?></td>
            <td><?php echo $usddate; ?></td>
          </tr>
		  <?php $slno++; } ?>
        </table>          
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
