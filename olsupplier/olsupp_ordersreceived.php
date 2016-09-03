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

?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td><h1>Pending Orders</h1></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td width="5%" height="41" bgcolor="#EBEBEB"><strong>No</strong></td>
        <td width="27%" bgcolor="#EBEBEB"><strong>DETAILS</strong></td>
        <td width="33%" bgcolor="#EBEBEB"><strong>MEMBER </strong></td>
        <td width="12%" bgcolor="#EBEBEB"><strong>PRODUCT</strong></td>
        <td width="7%" bgcolor="#EBEBEB"><strong>UNIT PRICE</strong></td>
        <td width="3%" bgcolor="#EBEBEB"><strong>Qty</strong></td>
        <td width="5%" bgcolor="#EBEBEB"><strong>Your Price</strong></td>
        <td width="8%" bgcolor="#EBEBEB"><strong>ACTION</strong></td>
      </tr>
      <?php 
	  $slno = 1;
$qrtyh=mysql_query("select * from ol_bills where supp_id = '$uname' and ord_stat = 0 ");
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
$qfrtyh=mysql_query("select supp_price from ol_products where prod_code = '$prodid' ");
while($qrdaygsjh=mysql_fetch_array($qfrtyh))
{
$supp_price =$qrdaygsjh['supp_price'];
}
$myprice = $supp_price * $prodqty;
$unitprice = $myprice / $prodqty;

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
          <td align="left" valign="top"><?php echo $prodid; ?></td>
          <td align="left" valign="top"><?php echo $unitprice; ?></td>
          <td align="left" valign="top"><?php echo $prodqty; ?></td>
          <td align="left" valign="top"><?php echo $myprice; ?></td>
          <td align="left" valign="top"><a href="javascript:void(0)" onclick="window.open('orderstatus.php?bilno=<?php echo $billno; ?>','welcome','width=310,height=300,menubar=yes,status=yes')" ><input name="" type="button" value="SEND" /></a></td>
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