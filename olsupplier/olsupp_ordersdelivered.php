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

$qrtyh=mysql_query("select billno from ol_bills where supp_id = '$uname' and ord_stat = 3 ");
$cnt = mysql_num_rows($qrtyh);
?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td><h1> Orders Delivered</h1></td>
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
        <td width="5%" height="41" bgcolor="#EBEBEB"><strong>No</strong></td>
        <td width="19%" bgcolor="#EBEBEB"><strong>SHOP</strong></td>
        <td width="8%" bgcolor="#EBEBEB"><strong>MEMBER </strong></td>
        <td width="10%" bgcolor="#EBEBEB"><strong>PRODUCT</strong></td>
        <td width="13%" bgcolor="#EBEBEB"><strong>UNIT PRICE</strong></td>
        <td width="5%" bgcolor="#EBEBEB"><strong>Qty</strong></td>
        <td width="13%" bgcolor="#EBEBEB"><strong>Your Price</strong></td>
        <td width="27%" bgcolor="#EBEBEB"><strong>STATUS</strong></td>
      </tr>
      <?php 
	  
	  
	  $slno = 1;
$qrtyh=mysql_query("select billno,shopid,prodid,prodqty,memid,bill_address,bill_date from ol_bills where supp_id = '$uname' and ord_stat = 3 ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$billno =$qraysjh['billno'];
$shopid =$qraysjh['shopid'];
$prodid =$qraysjh['prodid'];
$prodqty = $qraysjh['prodqty'];
$memid = $qraysjh['memid'];
$bill_address = $qraysjh['bill_address'];
$bill_date = $qraysjh['bill_date'];

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
          <td align="left" valign="top"><strong><?php echo $shopid; ?></strong><br />
          <?php echo $bill_address; ?></td>
          <td align="left" valign="top"><?php echo $memid; ?></td>
          <td align="left" valign="top"><?php echo $prodid; ?></td>
          <td align="left" valign="top"><?php echo $unitprice; ?></td>
          <td align="left" valign="top"><?php echo $prodqty; ?></td>
          <td align="left" valign="top"><?php echo $myprice; ?></td>
          <td align="left" valign="top"><div class="okdiv">Delivered</div></td>
        </tr>
      <?php $slno++;}  ?>
    </table>
    
    <?php } else { ?>    
    <div class="okdiv"><br />
      There are no  Orders Delivered<br />
      <br />
</div>
  <?php } ?>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>


<?php
}
?>