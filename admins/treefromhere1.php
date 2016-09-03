<?php 
include("../connect/session.php"); 
$uname=$_GET['id'];
$qry=mysql_query("select * from members where mmbr_id='$uname' ");
while($qrys=mysql_fetch_array($qry))
{
$mmbr_id=$qrys['mmbr_id'];

$ssdgfs=mysql_query("select * from child_status where ref_id='$mmbr_id' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$l_child_id =$tyiyui['l_child_id'];
$r_dhild_id =$tyiyui['r_dhild_id'];
}

}
?>
<link href="default.css" rel="stylesheet" type="text/css" />

<table width="600" border="0" cellpadding="0" cellspacing="0">
  <tr>    <td colspan="7" align="center" valign="middle"><img src="images/leftusr.JPG" border="0" /><br />
    <a href="geneologynext.php?id=<?php echo $mmbr_id; ?>&stng=1" class="bluetetx"><?php echo $mmbr_id; ?></a>&nbsp;&brvbar;&nbsp;<a href="allocatehere.php?id=<?php echo $mmbr_id; ?>&stng=1">Allocate</a></td>
  </tr>
  <tr>
    <td colspan="6" align="center" valign="middle"><img src="images/legs.jpg" border="0" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="images/leftusr.JPG" border="0" /><br /><a href="geneologynext.php?id=<?php echo $l_child_id; ?>&stng=1" class="bluetetx"><?php echo $l_child_id; ?></a>&nbsp;&brvbar;&nbsp;<a href="allocatehere.php?id=<?php echo $l_child_id; ?>&stng=1">Allocate</a></td>
    <td colspan="4" align="center" valign="middle"><img src="images/user.JPG" border="0" /><br /> <a href="geneologynext.php?id=<?php echo $r_dhild_id; ?>&stng=1" class="bluetetx"><?php echo $r_dhild_id; ?></a>&nbsp;&brvbar;&nbsp;<a href="allocatehere.php?id=<?php echo $r_dhild_id; ?>&stng=1">Allocate</a></td>
  </tr>

<?php 
$ssdgtyfs=mysql_query("select * from child_status where ref_id='$l_child_id' ");
while($tyirtyui=mysql_fetch_array($ssdgtyfs))
{
$l_child_idk =$tyirtyui['l_child_id'];
$r_dhild_idk =$tyirtyui['r_dhild_id'];
}

$trtyet=mysql_query("select * from child_status where ref_id='$r_dhild_id' ");
while($rtet=mysql_fetch_array($trtyet))
{
$l_child_ids =$rtet['l_child_id'];
$r_dhild_ids =$rtet['r_dhild_id'];
}

?>
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="images/legs.jpg" width="184" border="0" /></td>
    <td colspan="2" align="center" valign="middle"><img src="images/legs.jpg" width="184" border="0" /></td>
  <tr>
    <td width="161" align="center" valign="middle"><img src="images/leftusr.JPG" border="0" /><br /><a href="geneologynext.php?id=<?php echo $l_child_idk; ?>&stng=1" class="bluetetx"><?php echo $l_child_idk; ?></a>&nbsp;&brvbar;&nbsp;<a href="allocatehere.php?id=<?php echo $l_child_idk; ?>&stng=1">Allocate</a></td>
    <td width="163" align="center" valign="middle"><img src="images/user.JPG" border="0" /><br /><a href="geneologynext.php?id=<?php echo $r_dhild_idk; ?>&stng=1" class="bluetetx"><?php echo $r_dhild_idk; ?></a>&nbsp;&brvbar;&nbsp;<a href="allocatehere.php?id=<?php echo $r_dhild_idk; ?>&stng=1">Allocate</a></td>

   <td width="161" align="center" valign="middle"><img src="images/leftusr.JPG" border="0" /><br /><a href="geneologynext.php?id=<?php echo $l_child_ids; ?>&stng=1" class="bluetetx"><?php echo $l_child_ids; ?></a>&nbsp;&brvbar;&nbsp;<a href="allocatehere.php?id=<?php echo $l_child_ids; ?>&stng=1">Allocate</a></td>
    <td width="163" align="center" valign="middle"><img src="images/user.JPG" border="0" /><br /><a href="geneologynext.php?id=<?php echo $r_dhild_ids; ?>&stng=1" class="bluetetx"><?php echo $r_dhild_ids; ?></a>&nbsp;&brvbar;&nbsp;<a href="allocatehere.php?id=<?php echo $r_dhild_ids; ?>&stng=1">Allocate</a></td>
</table>
