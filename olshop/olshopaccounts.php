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
    <td><h1>Accounts</h1></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top"><table width="60%" cellspacing="1" class="tablesorter">
      <thead>
        <tr>
          <th width="50" height="41" align="left" bgcolor="#EBEBEB"><strong> No</strong></th>
          <th width="150" align="left" bgcolor="#EBEBEB"><strong>Date</strong></th>
          <th width="38%" align="left" bgcolor="#EBEBEB"><strong>Particulars</strong></th>
          <th width="150" align="right" bgcolor="#EBEBEB"><strong>Credit</strong></th>
          <th width="150" align="right" bgcolor="#EBEBEB"><strong>Debit</strong></th>
          </tr>
      </thead>
      <tbody>
        <?php 
$slno = 1;
$qrtyh=mysql_query("select ac_date,particulars,debits,credits  from olshops_acc_det where stor_id = '$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ac_date =$qraysjh['ac_date'];
$particulars =$qraysjh['particulars'];
$debits = $qraysjh['debits'];
$credits = $qraysjh['credits'];
?>
        <tr>
          <td width="50"><?php echo $slno; ?>&nbsp;</td>
          <td width="150"><?php echo $ac_date; ?>&nbsp;</td>
          <td><?php echo $particulars; ?>&nbsp;</td>
          <td width="150" align="right"><?php echo $credits; ?></td>
          <td width="150" align="right"><?php echo $debits; ?></td>
          </tr>
<?php 
$tdebits += $debits;
$tcredits += $credits;
$slno++;
} 
?>
      </tbody>
      <tfoot>
      <tr>
          <th colspan="4" align="left">Balance</th>
          <th width="150" align="right"><?php echo $bal = $tcredits - $tdebits ?></th>
        </tr>
        </tfoot>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
<?php
}
?>