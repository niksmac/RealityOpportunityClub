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

<?php 
$id= $_GET['id'];

$qrtyh=mysql_query("select *  from stores where id='$id' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
///$id =$qraysjh['id'];
$grade =$qraysjh['grade'];
$ownername =$qraysjh['ownername'];
$storename =$qraysjh['storename'];
$address = $qraysjh['address'];
$pincode = $qraysjh['pincode'];
$credits = $qraysjh['credits'];
$phone = $qraysjh['phone'];
$store_id = $qraysjh['store_id'];
}


?>
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
        <td align="left" valign="top" class="ContentBlue" ><table width="100%" border="0" cellspacing="0" cellpadding="4">
          <tr>
            <td colspan="2" align="left" valign="middle"><strong><?php echo $storename; ?>&nbsp;-&nbsp;<?php echo $ownername; ?></strong></td>
            </tr>
          <tr>
            <td colspan="2" align="left" valign="middle"><span class="graytext"><?php echo nl2br($address); ?><br />
<?php echo $phone; ?><br />
</span></td>
            </tr>
          <tr>
            <td align="right" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" align="right" valign="middle">1</td>
            <td width="90%" align="left" valign="middle"><a href="viewbvhistory.php?id=<?php echo $store_id; ?>&st=1" class="redlinks">BV Credit History</a></td>
          </tr>
          <tr>
            <td align="right" valign="middle">2</td>
            <td align="left" valign="middle"><a href="bvsalehistory.php?id=<?php echo $store_id; ?>&st=1" class="redlinks">BV Sale History</a></td>
          </tr>
          <tr>
            <td align="right" valign="middle">3</td>
            <td align="left" valign="middle"><a href="storeaccount.php?id=<?php echo $id; ?>&st=1" class="redlinks">Account</a></td>
          </tr>
          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
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
