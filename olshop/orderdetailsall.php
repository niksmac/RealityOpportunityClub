<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olshplogin'];
$qrtyh=mysql_query("select ownername,storename,address,pincode,credits,state,district,phone, store_id  from olshops where store_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ownername =$qraysjh['ownername'];
$storename =$qraysjh['storename'];
$address = $qraysjh['address'];
$pincode = $qraysjh['pincode'];
$credits = $qraysjh['credits'];
$state = $qraysjh['state'];
$district = $qraysjh['district'];
$phone = $qraysjh['phone'];
$store_id = $qraysjh['store_id'];
}
$qrtryh=mysql_query("select balamt  from olshops_acc  where olshopid='$uname' ");
while($qrsaahysjh=mysql_fetch_array($qrtryh))
{
$balamt =$qrsaahysjh['balamt'];
}
?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td><h1>Orders Intransit</h1></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td width="9%" height="41" bgcolor="#EBEBEB"><strong>No</strong></td>
        <td width="11%" bgcolor="#EBEBEB"><strong>Order No</strong></td>
        <td width="23%" bgcolor="#EBEBEB"><strong>MEMBER </strong></td>
        <td width="14%" bgcolor="#EBEBEB"><strong>PRODUCT</strong></td>
        <td width="17%" bgcolor="#EBEBEB"><strong>UNIT PRICE</strong></td>
        <td width="9%" bgcolor="#EBEBEB"><strong>Qty</strong></td>
        <td width="17%" bgcolor="#EBEBEB"><strong>Your Price</strong></td>
        <td width="17%" bgcolor="#EBEBEB"><strong>DETAILS</strong></td>
        <td width="17%" bgcolor="#EBEBEB"><strong>DELIVERED</strong></td>
      </tr>
      <?php 
	  $slno = 1;
$qrtyh=mysql_query("select order_no, billno,shopid,prodid,prodqty,memid,bill_address,bill_date,ord_stat,cour_det from ol_bills where shopid = '$uname' and ord_stat = 2 ");
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
$cour_det = $qraysjh['cour_det'];


$qfrtyh=mysql_query("select supp_price from ol_products where prod_code = '$prodid' ");
while($qrdaygsjh=mysql_fetch_array($qfrtyh))
{
$supp_price =$qrdaygsjh['supp_price'];
}
$myprice = $supp_price * $prodqty;
$unitprice = $myprice / $prodqty;

?>
        <tr>
          <td align="left" valign="top"><?php echo $slno; ?></td>
          <td align="left" valign="top"><strong><?php echo $order_no; ?></strong><br /></td>
          <td align="left" valign="top"><?php echo $memid; ?><br />
          <?php echo $bill_address; ?></td>
          <td align="left" valign="top"><?php echo $prodid; ?></td>
          <td align="left" valign="top"><?php echo $unitprice; ?></td>
          <td align="left" valign="top"><?php echo $prodqty; ?></td>
          <td align="left" valign="top"><?php echo $myprice; ?></td>
          <td align="left" valign="top"><?php echo $cour_det; ?></td>
          <td align="left" valign="top"><a href="javascript:void(0)" onclick="window.open('orderstatus.php?bilno=<?php echo $billno; ?>','welcome','width=310,height=300,menubar=yes,status=yes')" ><input name="" type="button" value="STATUS" /></a></td>
        </tr>
      <?php $slno++;} ?>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
<?php } ?>
<script language="JavaScript" type="text/javascript">
function cancelorder(id)
{
if(confirm('Are you Sure to Cancel this Order?'))
window.location.href="cancelorder.php?id=" + id;
}
</script>