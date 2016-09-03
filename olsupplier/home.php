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
    <td width="16%" align="left" valign="top"><strong>Supplier  ID</strong></td>
    <td width="1%" align="left" valign="top"><strong>:</strong></td>
    <td width="83%" align="left" valign="top"><?php echo $uname; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Name</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $Name; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Address</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $Address; ?></td>
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