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
    <td colspan="3"><h1><?php echo $storename; ?></h1></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top"><strong>Store ID</strong></td>
    <td width="1%" align="left" valign="top"><strong>:</strong></td>
    <td width="83%" align="left" valign="top"><?php echo $uname; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Name</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $storename; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Address</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $address; ?><br /><?php echo $state; ?><br /><?php echo $district; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Phone</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $phone; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Owner </strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $ownername; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Balance Amount</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $balamt; ?> /-</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
<?php
}
?>