<?php 
include('index.tpl');

function getTitle()
{
echo 'Royalty ID Details';
}

function ShowContent($rocuname)
{
$nodk = $_GET['nod'];
$slno = $_GET['id'];
?>
<a href="roc-rclubstats.php" class="menulink"><img src="img/backbtn.jpg" width="129" height="44" border="0" /></a>
<table width="98%" border="1" align="center" cellpadding="6" cellspacing="0" style="margin-bottom:100px; border-collapse:collapse;" >
  <tr >
    <td width="13%" bgcolor="#DFF4DF"><strong>Hit Date</strong></td>
    <td width="47%" bgcolor="#DFF4DF"><strong>Amount</strong></td>
  </tr>
<?php 
$ssdgfs=mysql_query("select * from royalty where rocref = '$nodk'  ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$rocref =$tyiyui['rocref'];
$lefts =$tyiyui['lefts'];
$rights =$tyiyui['rights'];
$reb_ref =$tyiyui['reb_ref'];
$noofrebs =$tyiyui['noofrebs'];
$dates =$tyiyui['dates'];
$newbrdsid = $rocref;
$dgdfg=  $noofrebs;
for ($i=1; $i<=3;$i++)
{	$newbrdsid = ($newbrdsid * 2) + 1; }

$reb_ref = $newbrdsid +1 ;
shownodes ($reb_ref);
}
?>
</table>
<?php 
}
function shownodes ($nodk)
{
$slno =1;
$ssdgfs=mysql_query("select * from royalty where rocref = '$nodk'  ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$rocref =$tyiyui['rocref'];
$lefts =$tyiyui['lefts'];
$rights =$tyiyui['rights'];
$dates =$tyiyui['dates'];
}
if (mysql_num_rows ($ssdgfs) != 0)
{
?>
  <tr>
    <td><?php echo $dates; ?></td>
    <td><?php //echo $rocref; ?>
      1000 /-</td>
  </tr>
  <?php 
}

else
{
?>
  <tr>
    <td colspan="2" align="center" valign="middle">Sorry ! No Royalty Hit There...</td>
  </tr>
  <?php 
}
$dgdfg-=1;
} 
?>