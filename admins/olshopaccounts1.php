<link href="colours.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deletestores.php?id=" + id;
}
</script>
<table width="99%" border="1" cellpadding="4" cellspacing="1" style="border-collapse:collapse;" >
  <thead>
    <tr>
      <th width="156" height="41" align="left" bgcolor="#EBEBEB"><strong> No</strong></th>
      <th width="297" align="left" bgcolor="#EBEBEB"><strong>Date</strong></th>
      <th width="540" align="left" bgcolor="#EBEBEB"><strong>Particulars</strong></th>
      <th width="257" align="right" bgcolor="#EBEBEB"><strong>Credit</strong></th>
      <th width="257" align="right" bgcolor="#EBEBEB"><strong>Debit</strong></th>
    </tr>
  </thead>
  <tbody>
    <?php 
	$id = $_GET['id'];
$slno = 1;
$qrtyh=mysql_query("select ac_date,particulars,debits,credits  from olshops_acc_det where stor_id = '$id' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ac_date =$qraysjh['ac_date'];
$particulars =$qraysjh['particulars'];
$debits = $qraysjh['debits'];
$credits = $qraysjh['credits'];
?>
    <tr>
      <td width="156"><?php echo $slno; ?>&nbsp;</td>
      <td width="297"><?php echo $ac_date; ?>&nbsp;</td>
      <td><?php echo $particulars; ?>&nbsp;</td>
      <td width="257" align="right"><?php echo $credits; ?></td>
      <td width="257" align="right"><?php echo $debits; ?></td>
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
      <th width="257" align="right"><?php echo $bal = $tcredits - $tdebits ?></th>
    </tr>
  </tfoot>
</table>
