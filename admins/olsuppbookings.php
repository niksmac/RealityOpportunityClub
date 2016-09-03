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
        <td align="left" valign="top" class="ContentBlue" ><table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" style="border-collapse:collapse;">
          <tr>
            <td width="5%" height="41" bgcolor="#EBEBEB"><strong>No</strong></td>
            <td width="7%" bgcolor="#EBEBEB"><strong>Order No</strong></td>
            <td width="15%" bgcolor="#EBEBEB"><strong>MEMBER </strong></td>
            <td width="9%" bgcolor="#EBEBEB"><strong>PRODUCT</strong></td>
            <td width="9%" bgcolor="#EBEBEB"><strong>Suppiler Price</strong></td>
            <td width="8%" bgcolor="#EBEBEB"><strong>Retailer Price </strong></td>
            <td width="10%" bgcolor="#EBEBEB"><strong>ROC Price</strong></td>
            <td width="11%" bgcolor="#EBEBEB"><strong>Qty</strong></td>
            <td width="11%" bgcolor="#EBEBEB"><strong>Bill Amt</strong></td>
            <td width="15%" bgcolor="#EBEBEB"><strong>STATUS</strong></td>
          </tr>
          <?php 
  $id = $_GET['id'];
	  $slno = 1;
$qrtyh=mysql_query("select order_no, billno,shopid,prodid,prodqty,memid,bill_address,bill_date,ord_stat,bill_amt from ol_bills where supp_id = '$id' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$order_no =$qraysjh['order_no'];
$billno =$qraysjh['billno'];
$shopid =$qraysjh['shopid'];
$prodid =$qraysjh['prodid'];
$prodqty = $qraysjh['prodqty'];
$memid = $qraysjh['memid'];
$bill_address = $qraysjh['bill_address'];
$bill_date = $qraysjh['bill_date'];
$ord_stat = $qraysjh['ord_stat'];
$bill_amt = $qraysjh['bill_amt'];
switch ($ord_stat)
{
case 0 : 
	$stsrring = '<a href="#" title="Go to Shop Acc to cancel this Order" > Cancel </a>';
	break;
case 1 :
	$stsrring = '<div class="notokdiv">Cancelled</div>';
	break;

case 2 :
	$stsrring = '<div class="okdiv">Intransit</div>';
	break;
case 3 :
	$stsrring = '<div class="delvdiv">Delivered</div>';
	break;
}

$qfrtyh=mysql_query("select supp_price,dist_price,mem_price from ol_products where prod_code = '$prodid' ");
while($qrdaygsjh=mysql_fetch_array($qfrtyh))
{
$supp_price =$qrdaygsjh['supp_price'];
$dist_price =$qrdaygsjh['dist_price'];
$mem_price =$qrdaygsjh['mem_price'];
}


?>
          <tr>
            <td align="left" valign="top"><?php echo $slno; ?></td>
            <td align="left" valign="top"><strong><?php echo $order_no; ?></strong><br /></td>
            <td align="left" valign="top"><?php echo $memid; ?></td>
            <td align="left" valign="top"><?php echo $prodid; ?></td>
            <td align="left" valign="top"><?php echo $supp_price; ?></td>
            <td align="left" valign="top"><?php echo $dist_price; ?>&nbsp;</td>
            <td align="left" valign="top"><?php echo $mem_price; ?></td>
            <td align="left" valign="top"><?php echo $prodqty; ?></td>
            <td align="left" valign="top"><?php echo $bill_amt; ?></td>
            <td align="left" valign="top"><?php echo $stsrring; ?></td>
          </tr>
          <?php $slno++;} ?>
        </table>        <p>&nbsp;</p></td>
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
