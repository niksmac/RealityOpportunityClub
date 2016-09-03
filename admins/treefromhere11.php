<?php 
$users=$_GET['id'];
$qry=mysql_query("select * from members where mmbr_id='$users' ");
while($qrys=mysql_fetch_array($qry))
{
$mmbr_id=$qrys['mmbr_id'];

$ssdgfs=mysql_query("select * from child_status where ref_id='$mmbr_id' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$l_child_id =$tyiyui['l_child_id'];
$r_dhild_id =$tyiyui['r_dhild_id'];
}
?>
<link href="default.css" rel="stylesheet" type="text/css" />

<link href="colours.css" rel="stylesheet" type="text/css" />
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="501" align="right" valign="middle">&nbsp;</td>
    <td width="84" align="center" valign="middle"><a href="javascript:history.go(-1);" class="forumlinks">BACK</a></td>
    <td width="15" align="right" valign="middle">&nbsp;</td>
  </tr>
</table>
<table width="600" border="0" cellpadding="0" cellspacing="0">
  <tr>    <td colspan="7" align="center" valign="middle"><img src="images/user copy.jpg" /><br />
<a href="geneologynext.php?id=<?php echo $mmbr_id; ?>&stng=1"class="bluetetx"><?php echo $mmbr_id; ?></a></td>
  </tr>
  <tr>
    <td colspan="6" align="center" valign="middle"><img src="images/legs.jpg" width="283" height="30" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><?php $ssdgfs=mysql_query("select * from members where mmbr_id='$l_child_id' ");
while($tyiyui=mysql_fetch_array($ssdgfs)) { $name  =$tyiyui['name'];$mmbr_id_l1 =$tyiyui['mmbr_id']; ?><img src="images/leftusr.JPG" /><br />
    <a href="geneologynext.php?id=<?php echo $mmbr_id_l1; ?>" class="bluetetx"><?php echo $mmbr_id_l1; } ?></a></td>
    <td colspan="4" align="center" valign="middle"><?php $ssdgfs=mysql_query("select * from members where mmbr_id='$r_dhild_id' ");
while($tyiyui=mysql_fetch_array($ssdgfs)) { $name  =$tyiyui['name']; $mmbr_id_r1 =$tyiyui['mmbr_id'];?>
    <img src="images/user.JPG" /><br /> <a href="geneologynext.php?id=<?php echo $mmbr_id_r1; ?>"class="bluetetx"><?php echo $mmbr_id_r1; } ?></a></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="images/legs.jpg" width="148" height="31" /></td>
    <td colspan="2" align="center" valign="middle"><img src="images/legs.jpg" width="145" height="31" /></td>
  <tr>
    <td width="161" align="center" valign="middle"><?php $ssdgfs=mysql_query("select * from child_status where ref_id='$mmbr_id_l1' ");
while($tyiyui=mysql_fetch_array($ssdgfs)) { $l_child_id =$tyiyui['l_child_id']; $r_dhild_id =$tyiyui['r_dhild_id'];  ?><?php $ssdgfs=mysql_query("select * from members where mmbr_id='$l_child_id' ");
while($tyiyui=mysql_fetch_array($ssdgfs)) { $name  =$tyiyui['name'];$mmbr_id_l1 =$tyiyui['mmbr_id']; ?>
    <img src="images/leftusr.JPG" /><br /><a href="geneologynext.php?id=<?php echo $mmbr_id_l1; ?>"class="bluetetx"><?php echo $mmbr_id_l1; } ?></a></td>
    <td width="163" align="center" valign="middle"><?php $ssdgfs=mysql_query("select * from members where mmbr_id='$r_dhild_id' ");
while($tyiyui=mysql_fetch_array($ssdgfs)) { $name  =$tyiyui['name'];$mmbr_id_l1 =$tyiyui['mmbr_id']; ?>
    <img src="images/user.JPG" /><br /><a href="geneologynext.php?id=<?php echo $mmbr_id_l1; ?>"class="bluetetx"><?php echo $mmbr_id_l1; } }?></a></td>

   <td width="161" align="center" valign="middle"><?php $ssdgfs=mysql_query("select * from child_status where ref_id='$mmbr_id_r1' ");
while($tyiyui=mysql_fetch_array($ssdgfs)) { $l_child_id =$tyiyui['l_child_id']; $r_dhild_id =$tyiyui['r_dhild_id'];  ?><?php $ssdgfs=mysql_query("select * from members where mmbr_id='$l_child_id' ");
while($tyiyui=mysql_fetch_array($ssdgfs)) { $name  =$tyiyui['name'];$mmbr_id_l1 =$tyiyui['mmbr_id']; ?>
    <img src="images/leftusr.JPG" /><br /><a href="geneologynext.php?id=<?php echo $mmbr_id_l1; ?>"class="bluetetx"><?php echo $mmbr_id_l1; } ?></a></td>
    <td width="163" align="center" valign="middle"><?php $ssdgfs=mysql_query("select * from members where mmbr_id='$r_dhild_id' ");
while($tyiyui=mysql_fetch_array($ssdgfs)) { $name  =$tyiyui['name'];$mmbr_id_l1 =$tyiyui['mmbr_id']; ?>
    <img src="images/user.JPG" /><br /><a href="geneologynext.php?id=<?php echo $mmbr_id_l1; ?>"class="bluetetx"><?php echo $mmbr_id_l1; } }?></a></td>
</table>
<?php }?>
