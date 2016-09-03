<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olsupplogin'];
$qrtyh=mysql_query("select suppl_id,Name,Address  from olsupplier where suppl_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$suppl_id =$qraysjh['suppl_id'];
$Name =$qraysjh['Name'];
$Address = $qraysjh['Address'];
}

$qrtyh=mysql_query("select billno from ol_bills where supp_id = '$uname' ");
$cnt = mysql_num_rows($qrtyh);
?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td><h1>Orders</h1></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <?php if ($cnt >= 1)
	  {?>
    
    <table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td width="2%" height="41" bgcolor="#EBEBEB"><strong>No</strong></td>
        <td width="34%" bgcolor="#EBEBEB"><strong>DETAILS</strong></td>
        <td width="22%" bgcolor="#EBEBEB"><strong>MEMBER </strong></td>
        <td width="31%" bgcolor="#EBEBEB"><strong>PRODUCT</strong></td>
        <td width="11%" bgcolor="#EBEBEB"><strong>STATUS</strong></td>
      </tr>
      <?php 
	  
	  
	  $slno = 1;
$qrtyh=mysql_query("select * from ol_bills where supp_id = '$uname'  ");
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
$intr_date = $qraysjh['intr_date'];

$qfrtyh=mysql_query("select supp_price from ol_products where prod_code = '$prodid' ");
while($qrdaygsjh=mysql_fetch_array($qfrtyh))
{
$supp_price =$qrdaygsjh['supp_price'];
}
$myprice = $supp_price * $prodqty;
$unitprice = $myprice / $prodqty;


switch ($ord_stat)
{
case 0 : 
	//$stsrring = '<a href="javascript:cancelorder('.$billno.')" > Cancel </a>';
	//$stsrring = '<div class="yellowdiv" onclick="window.open("orderstatus.php?bilno='.$billno.'","welcome","width=310,height=300,menubar=yes,status=yes" )">Waiting</div>';
	$stsrring = '<div class="yellowdiv">Waiting</div>';
	break;
case 1 :
	$stsrring = '<div class="notokdiv">Cancelled</div>';
	break;

case 2 :
	$stsrring = '<div class="okdiv">Intransit</div><br>'.$intr_date;
	break;
case 3 :
	$stsrring = '<div class="delvdiv">Delivered</div>';
	break;
}


?>
        <tr>
          <td align="left" valign="top"><?php echo $slno; ?></td>
          <td align="left" valign="top"><table width="95%" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <td> Order No</td>
                <td>:</td>
                <td><?php echo $order_no; ?></td>
              </tr>
              <tr>
                <td width="32%">Shop </td>
                <td width="1%">:</td>
                <td width="67%"><strong><?php echo $shopid; ?></strong></td>
              </tr>
              <tr>
                <td>Date </td>
                <td>:</td>
                <td><?php echo $bill_date; ?></td>
              </tr>
            </table></td>
          <td align="left" valign="top"><?php echo $memid; ?><br />
          <?php echo $bill_address; ?></td>
          <td align="left" valign="top"><table width="95%" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <td width="30%"> Code </td>
                <td width="1%">:</td>
                <td width="69%"><?php echo $prodid; ?></td>
              </tr>
              <tr>
                <td>Unit Pricce</td>
                <td>:</td>
                <td><?php echo $unitprice; ?></td>
              </tr>
              <tr>
                <td>Qty</td>
                <td>:</td>
                <td><?php echo $prodqty; ?></td>
              </tr>
              <tr>
                <td>Price</td>
                <td>:</td>
                <td><?php echo $myprice; ?></td>
              </tr>
            </table>
          <p>&nbsp;</p></td>
          <td align="left" valign="top"><?php echo $stsrring; ?></td>
        </tr>
      <?php $slno++;}  ?>
    </table>
    
    <?php } else { ?>    
    <div class="okdiv"><br />There are no cancelled Orders<br /><br />
</div>
  <?php } ?>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>


<?php
}
?>