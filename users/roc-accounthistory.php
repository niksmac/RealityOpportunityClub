<?php 
include('index.tpl');

function getTitle()
{
echo 'Account History ';
}

function ShowContent($rocuname)
{
?>
<table width="99%" border="1" cellpadding="4" cellspacing="0" bordercolor="#B2B2B2" style="background-color:White;border-color:#B2B2B2;border-width:1px;border-style:None;border-collapse:collapse; margin-bottom:100px;">
  <tr>
    <td width="4%" bgcolor="#F5F5F5" class="greentext"><strong>No.</strong></td>
    <td width="65%" bgcolor="#F5F5F5" class="greentext"><strong>Closing Date</strong></td>
    <td width="31%" bgcolor="#F5F5F5" class="greentext"><strong>Details</strong></td>
  </tr>
  <?php 
$slno=1;
$qrzyh=mysql_query("select DOJ from members where MemberID = '$rocuname' ");
while($qrssysh=mysql_fetch_array($qrzyh))
{
$DOJ=$qrssysh['DOJ'];
}


$qryh=mysql_query("select * from closings where close_date > '$DOJ' ");
while($qrysh=mysql_fetch_array($qryh))
{
$close_no=$qrysh['close_no'];
$close_date=$qrysh['close_date'];
?>
  <tr>
    <td><?php echo $slno; ?></td>
    <td><?php echo $close_date; ?></td>
    <td><a href="acchistorypagewise.php?clno=<?php echo $close_no; ?>"><img src="img/history.JPG" alt="Details" width="21" height="25" border="0" /></a></td>
    <?php $slno++; } ?>
  </tr>
</table>
<?php 
}
?>