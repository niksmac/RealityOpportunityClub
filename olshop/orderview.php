<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olshplogin'];
$st = $_GET['k'];

switch ($st)
{
case 0 : 
	//$stsrring = '<a href="javascript:cancelorder('.$billno.')" > Cancel </a>';
	//$stsrring = '<div class="yellowdiv" onclick="window.open("orderstatus.php?bilno='.$billno.'","welcome","width=310,height=300,menubar=yes,status=yes" )">Waiting</div>';
	$stsrring = '<div class="yellowdiv">Waiting</div>';
	$msg = 'Waiting';
	break;
case 1 :
	$stsrring = '<div class="notokdiv">Cancelled</div>';
	$qrtyh=mysql_query("select * from ol_bills where shopid = '$uname' and ord_stat='$st' ");
	$msg = 'Cancelled';
	break;

case 2 :
	$qrtyh=mysql_query("select billno from ol_bills where shopid = '$uname' and ord_stat = '$st'  ");
	while($qraysjh=mysql_fetch_array($qrtyh))
	{
	$billno =$qraysjh['billno'];
	}
	$stsrring = '<a href="javascript:void(0)" onclick="window.open(\'orderstatus.php?bilno='.$billno.'\',\'welcome\',\'width=310,height=300,menubar=yes,status=yes\')" >RECEIVE</a>';
	$qrtyh=mysql_query("select * from ol_bills where shopid = '$uname' and ord_stat='$st' ");
	$msg = 'Intransit';
	break;
case 3 :
	$stsrring = '<div class="delvdiv">Delivered</div>';
	$qrtyh=mysql_query("select * from ol_bills where shopid = '$uname' and ord_stat='$st' ");
	$msg = 'Delivered';
	break;
case 4 :
	$qrtyh=mysql_query("select * from ol_bills where shopid = '$uname' and ord_stat in (0,1,2,3) ");
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
    <td align="left" valign="top">
    
    
    <?php 
	$yesno = mysql_num_rows($qrtyh);
	
	if ($yesno != 0 )
	{
	
	?>
    
    
    <table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td width="2%" height="41" bgcolor="#EBEBEB"><strong>No</strong></td>
        <td width="14%" bgcolor="#EBEBEB"><strong>Order No</strong></td>
        <td width="25%" bgcolor="#EBEBEB"><strong>MEMBER </strong></td>
        <td width="21%" bgcolor="#EBEBEB"><strong>PRODUCT</strong></td>
        <td width="10%" bgcolor="#EBEBEB"><strong>UNIT PRICE</strong></td>
        <td width="6%" bgcolor="#EBEBEB"><strong>Qty</strong></td>
        <td width="9%" bgcolor="#EBEBEB"><strong>Your Price</strong></td>
        <td width="13%" bgcolor="#EBEBEB"><strong>ROC Price</strong></td>
        <td width="13%" bgcolor="#EBEBEB"><strong>STATUS</strong></td>
      </tr>
      <?php 
	  $slno = 1;
	  

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


$qfrtyh=mysql_query("select dist_price,prod_name from ol_products where prod_code = '$prodid' ");
while($qrdaygsjh=mysql_fetch_array($qfrtyh))
{
$supp_price =$qrdaygsjh['dist_price'];
$prod_name =$qrdaygsjh['prod_name'];
}

$myprice = $supp_price * $prodqty;
$unitprice = $myprice / $prodqty;


if ($st == 4) { 
			switch ($ord_stat)
			{
			case 0 : 
				$stsrring = '<div class="yellowdiv">Waiting</div>';
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
        <tr>
          <td align="left" valign="top"><?php echo $slno; ?></td>
          <td align="left" valign="top"><strong><?php echo $order_no; ?></strong><br />
            <?php echo $bill_date; ?></td>
          <td align="left" valign="top"><?php echo $memid; ?><br />
          <?php echo $bill_address; ?></td>
          <td align="left" valign="top"><?php echo $prodid; ?><br /><?php echo $prod_name; ?></td>
          <td align="left" valign="top"><?php echo $unitprice; ?></td>
          <td align="left" valign="top"><?php echo $prodqty; ?></td>
          <td align="left" valign="top"><?php echo $myprice; ?></td>
          <td align="left" valign="top"><?php echo $bill_amt; ?></td>
          <td align="left" valign="top"><?php echo $stsrring; ?></td>
        </tr>
      <?php $slno++;} ?>
    </table>
    
    <?php }
	
	else 
	echo '<div class="notokdiv"> Sorry No '.$msg.' Orders </div>';
	?>
    
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
<?php } ?>