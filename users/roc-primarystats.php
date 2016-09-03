<?php 
include('index.tpl');

function getTitle()
{
echo 'Primary Tree';
}

function ShowContent($rocuname)
{
?>
<table width="100%" border="1" cellpadding="6" cellspacing="0" bordercolor="#339933"  style="margin-bottom:100px; border-collapse:collapse; border-color:#336633;">
  <tr>
    <td bgcolor="#DFF4DF"><strong>No.</strong></td>
    <td bgcolor="#DFF4DF"><strong>Primary ID</strong></td>
    <td align="center" valign="middle" bgcolor="#DFF4DF"><strong>VIEW TREE</strong></td>
    <td align="center" valign="middle" bgcolor="#DFF4DF"><strong>LEFT POINTS</strong></td>
    <td width="90" align="center" valign="middle" bgcolor="#DFF4DF"><strong>RIGHT POINTS</strong></td>
    <td width="98" align="center" valign="middle" bgcolor="#DFF4DF"><strong>PAIR POINTS</strong></td>
    <td width="83" align="center" valign="middle" bgcolor="#DFF4DF"><strong>PAID POINTS</strong></td>
  </tr>
  <?php 
$slno=1;
$ssdgfs=mysql_query("select primaryid from primarytree where memid='$rocuname' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$primaryid =$tyiyui['primaryid'];


$ssdgsfs=mysql_query("select pid,l_count,r_count,pairs,amt_bal,amt,cf from primaryacc where pid='$primaryid' ");
while($tyisdyui=mysql_fetch_array($ssdgsfs))
{
$pid =$tyisdyui['pid'];
$l_count =$tyisdyui['l_count'];
$r_count =$tyisdyui['r_count'];
$pairs =$tyisdyui['pairs'];
$amt_bal =$tyisdyui['amt_bal'];
$amt =$tyisdyui['amt'];
$cf =$tyisdyui['cf'];
$pairs =$tyisdyui['pairs'];
}
?>
  <tr>
    <td width="26"><?php echo $slno; ?></td>
    <td width="77"><?php echo "P".$primaryid; ?>&nbsp;</td>
    <td width="92" align="center" valign="middle"><a href="primaryplantre.php?id=<?php echo "P".$primaryid; ?>&amp;f=<?php echo $pairs; ?>" title="View tree of <?php echo "P".$primaryid;  ?>" ><img src="img/collection_plus_on.jpg" alt="Current Position" width="21" height="21" border="0" /></a></td>
    <td width="83" align="center" valign="middle"><?php echo $l_count; ?></td>
    <td align="center" valign="middle"><?php echo $r_count; ?></td>
    <td align="center" valign="middle"><?php echo $pairs; ?></td>
    <td align="center" valign="middle">0</td>
  </tr>
  <?php  $slno++;} ?>
</table>
<?php 
}

?>