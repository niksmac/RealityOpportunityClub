<?php 
include('index.tpl');

function getTitle()
{
echo 'Royalty Club Statistics';
}

function ShowContent($rocuname)
{
?>
<table width="100%" border="1" cellpadding="6" cellspacing="0" bordercolor="#339933"  style="margin-bottom:100px; border-collapse:collapse; border-color:#336633;">
  <tr>
    <td bgcolor="#DFF4DF"><strong>No.</strong></td>
    <td bgcolor="#DFF4DF"><strong>Rebirths</strong></td>
    <td align="center" valign="middle" bgcolor="#DFF4DF"><strong>Achieved Rebirths</strong></td>
    <td width="140" align="center" valign="middle" bgcolor="#DFF4DF"><strong>Current Position </strong></td>
    <td width="94" align="center" valign="middle" bgcolor="#DFF4DF"><strong>Hisory</strong></td>
  </tr>
  <?php 
$slno=1;
$ssdgfs=mysql_query("select * from royalty where mmbr_id='$rocuname' and reb_ref ='F' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$rocref =$tyiyui['rocref'];
$lefts =$tyiyui['lefts'];
$rights =$tyiyui['rights'];
$reb_ref =$tyiyui['reb_ref'];
$noofrebs =$tyiyui['noofrebs'];
$oiuy = $rocref;

//$ssdgasdffs=mysql_num_rows (mysql_query("select * from royalty where mmbr_id='$uname' and reb_ref REGEXP '^$rocref' "));


for ($i=0; $i<$noofrebs;$i++)
{	

for ($j=0; $j<4;$j++)
{
$oiuy = ($oiuy * 2) + 1; 
}

$mrt = mysql_num_rows (mysql_query("select id from royalty where rocref='$oiuy' "));
if ($mrt == 0 )
break;
}

?>
  <tr>
    <td width="27"><?php echo $slno; ?></td>
    <td width="155"><?php echo $noofrebs-1; ?> Rebirths Left</td>
    <td width="123" align="center" valign="middle"><?php echo $i; ?></td>
    <td align="center" valign="middle"><a href="roc-royalty-genealogy.php?id=<?php echo $rocref; ?>"><img src="img/collection_plus_on.jpg" alt="Current Position" width="21" height="21" border="0" /></a>&nbsp;&nbsp;&nbsp;</td>
    <td align="center" valign="middle"><a href="nodehistory.php?nod=<?php echo $rocref; ?>&amp;id=<?php echo $slno; ?>"><img src="img/history.JPG" alt="History" width="21" height="25" border="0" /></a></td>
  </tr>
  <?php $slno++;} ?>
</table>
<?php 
}

?>