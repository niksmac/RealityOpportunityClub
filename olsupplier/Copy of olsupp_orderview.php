<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olsupplogin'];
$kk = $_GET['g'];
$qrtyh=mysql_query("select suppl_id,Name,Address  from olsupplier where suppl_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$suppl_id =$qraysjh['suppl_id'];
$Name =$qraysjh['Name'];
$Address = $qraysjh['Address'];
}

switch ($kk)
{
case 0 : 

	$qrtyh=mysql_query("select billno from ol_bills where supp_id = '$uname' and ord_stat = '$kk'  ");
	while($qraysjh=mysql_fetch_array($qrtyh))
	{
	$billno =$qraysjh['billno'];
	}
	
	$qrtyh=mysql_query("select * from ol_bills where supp_id = '$uname' and ord_stat = '$kk' ");
	$stsrring = '<a href="javascript:void(0)" onclick="window.open(\'orderstatus.php?bilno='.$billno.'\',\'welcome\',\'width=310,height=300,menubar=yes,status=yes\')" >SEND</a>';
	$msg = 'Booked';
	break;
case 1 :
	$stsrring = '<div class="notokdiv">Cancelled</div>';
	$qrtyh=mysql_query("select * from ol_bills where supp_id = '$uname' and ord_stat = '$kk' ");
	$msg = 'Cancelled';
	break;

case 2 :
	$stsrring = '<div class="okdiv">Intransit</div>';
	$qrtyh=mysql_query("select * from ol_bills where supp_id = '$uname' and ord_stat = '$kk' ");
	$msg = 'Intransit';
	break;
case 3 :
	$stsrring = '<div class="delvdiv">Delivered</div>';
	$qrtyh=mysql_query("select * from ol_bills where supp_id = '$uname' and ord_stat = '$kk' ");
	$msg = 'Delivered';
	break;
case 4 :
	$stsrring = '<div class="okdiv">Delivered</div>';
	$qrtyh=mysql_query("select * from ol_bills where supp_id = '$uname' and ord_stat in (0,1,2,3) ");
	$msg = 'All';
	break;	
}


?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td><h1>Orders <?php echo $msg; ?></h1></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td width="5%" height="41" bgcolor="#EBEBEB"><strong>No</strong></td>
        <td width="26%" bgcolor="#EBEBEB"><strong>DETAILS</strong></td>
        <td width="28%" bgcolor="#EBEBEB"><strong>MEMBER </strong></td>
        <td width="16%" bgcolor="#EBEBEB"><strong>PRODUCT</strong></td>
        <td width="7%" bgcolor="#EBEBEB"><strong>Selling Price</strong></td>
        <td width="5%" bgcolor="#EBEBEB"><strong>Supplier Price</strong></td>
        <td width="5%" bgcolor="#EBEBEB"><strong>Qty</strong></td>
        <td width="8%" bgcolor="#EBEBEB"><strong>Status</strong></td>
      </tr>
      <?php 
	  $slno = 1;

while($qraysjh=mysql_fetch_array($qrtyh))
{
$billno =$qraysjh['billno'];
$shopid =$qraysjh['shopid'];
$prodid =$qraysjh['prodid'];
$prodqty = $qraysjh['prodqty'];
$memid = $qraysjh['memid'];
$bill_address = $qraysjh['bill_address'];
$bill_date = $qraysjh['bill_date'];
$order_no = $qraysjh['order_no'];
$ord_stat = $qraysjh['ord_stat'];

$qfrtyh=mysql_query("select supp_price,prod_name,mem_price from ol_products where prod_code = '$prodid' ");
while($qrdaygsjh=mysql_fetch_array($qfrtyh))
{
$supp_price =$qrdaygsjh['supp_price'];
$mem_price =$qrdaygsjh['mem_price'];
$prod_name =$qrdaygsjh['prod_name'];
}

if ($kk == 4)
{
switch ($ord_stat)
{
case 0 : 
	$stsrring = '<div class="notokdiv">Booked</div>';
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
}

?>
<form  id="ordrfrm" name="ordrfrm" action="ordrstat.php?bilno=<?php echo $billno; ?>" method="post">
        <tr>
          <td align="left" valign="top"><?php echo $slno; ?></td>
          <td align="left" valign="top"><table width="95%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td> Order No</td>
              <td>:</td>
              <td><?php echo $order_no; ?></td>
            </tr>
            <tr>
              <td width="41%">Shop </td>
              <td width="2%">:</td>
              <td width="57%"><strong><?php echo $shopid; ?></strong></td>
            </tr>
            <tr>
              <td>Date </td>
              <td>:</td>
              <td><?php echo $bill_date; ?></td>
            </tr>
          </table>
            <br /></td>
          <td align="left" valign="top"><strong><?php echo $memid; ?></strong><br />
            <?php echo $bill_address; ?></td>
          <td align="left" valign="top"><?php echo $prodid; ?><br /><?php echo $prod_name; ?></td>
          <td align="left" valign="top"><?php echo $mem_price * $prodqty; ?></td>
          <td align="left" valign="top"><?php echo $supp_price * $prodqty; ?></td>
          <td align="left" valign="top"><?php echo $prodqty; ?></td>
          <td align="left" valign="top"><?php echo $stsrring; ?></td>
        </tr>
        </form>
      <?php $slno++;} ?>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>


<?php
}
?>