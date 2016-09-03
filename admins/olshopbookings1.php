
<script language="JavaScript" type="text/javascript">
function cancelorder(id)
{
if(confirm('Are you Sure ?'))
window.location.href="cancelorder.php?id=" + id;
}
</script>

<table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" style="border-collapse:collapse;">
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
$qrtyh=mysql_query("select order_no, billno,shopid,prodid,prodqty,memid,bill_address,bill_date,ord_stat,bill_amt from ol_bills where shopid = '$id' ");
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
	$stsrring = '<a href="javascript:cancelorder('.$billno.')" > Cancel </a>';
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
</table>
