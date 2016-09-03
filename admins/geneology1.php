<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="-1"/>
<script type="text/javascript" src="js/jquery-1.2.2.pack.js"></script>
<style type="text/css">
.ajaxtooltip{
position: absolute; /*leave this alone*/
display: none; /*leave this alone*/
width: 300px;
left: 0; /*leave this alone*/
top: 0; /*leave this alone*/
padding: 5px;
}
</style>
<script type="text/javascript" src="js/ajaxtooltip.js"> </script>
<?php 
require_once("lib/function_lib.php");
$uname=10001;

if(isset($_GET['id']))
$pnode=$_GET['id'];
else 
$pnode=$uname;

showtree($pnode);

function showtree($topids)
{
?>
<table width="600" border="0" align="center" cellpadding="3" cellspacing="0" class="Contents" style="margin-bottom:100px;">
  <tr>
    <td colspan="8" align="center" valign="middle"><?php echo showid($topids); echo "<br>".shownames($topids);echo "<br>".showlink($topids); ?></td>
  </tr>
  <tr>
    <td colspan="8" align="center" valign="middle"><img src="../users/img/legs1.jpg" width="252" /></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($topids));  $left1=$lefts;echo showid($left1);  echo "<br>".shownames($left1); echo "<br>".showlink($left1);?></td>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($topids)); $right1=$rights;echo showid($right1);  echo "<br>".shownames($right1);echo "<br>".showlink($right1);?></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><img src="../users/img/legs1.jpg" width="164" height="13" /></td>
    <td colspan="4" align="center" valign="middle"><img src="../users/img/legs1.jpg" width="164" height="13" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($left1));  $left2=$lefts;echo showid($left2);  echo "<br>".shownames($left2);echo "<br>".showlink($left2);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($left1));  $right2=$rights;echo showid($right2);  echo "<br>".shownames($right2);echo "<br>".showlink($right2);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($right1));  $left3=$lefts;echo showid($left3);  echo "<br>".shownames($left3);echo "<br>".showlink($left3);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($right1));  $right3=$rights;echo showid($right3);  echo "<br>".shownames($right3);echo "<br>".showlink($right3);?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="../users/img/legs1.jpg" width="102" height="8" /></td>
    <td colspan="2" align="center" valign="middle"><img src="../users/img/legs1.jpg" width="102" height="8" /></td>
    <td colspan="2" align="center" valign="middle"><img src="../users/img/legs1.jpg" width="102" height="8" /></td>
    <td colspan="2" align="center" valign="middle"><img src="../users/img/legs1.jpg" width="102" height="8" /></td>
  </tr>
  <tr>
    <td width="67" align="center" valign="middle"><?php extract(getchilds($left2));  $left4=$lefts;echo showid($left4); echo "<br>".shownames($left4);echo "<br>".showlink($left4);?></td>
    <td width="70" align="center" valign="middle"><?php extract(getchilds($left2));  $right4=$rights;echo showid($right4); echo "<br>".shownames($right4);echo "<br>".showlink($right4);?></td>
    <td width="70" align="center" valign="middle"><?php extract(getchilds($right2));  $left5=$lefts;echo showid($left5); echo "<br>".shownames($left5);echo "<br>".showlink($left5);?></td>
    <td width="67" align="center" valign="middle"><?php extract(getchilds($right2));  $right5=$rights;echo showid($right5); echo "<br>".shownames($right5);echo "<br>".showlink($right5);?></td>
    
    <td width="70" align="center" valign="middle"><?php extract(getchilds($left3));  $left6=$lefts; echo showid($left6);echo "<br>".shownames($left6);echo "<br>".showlink($left6);?></td>
    <td width="67" align="center" valign="middle"><?php extract(getchilds($left3));  $right6=$rights;echo showid($right6); echo "<br>".shownames($right6);echo "<br>".showlink($right6);?></td>
    <td width="70" align="center" valign="middle"><?php extract(getchilds($right3));  $left7=$lefts;echo showid($left7); echo "<br>".shownames($left7);echo "<br>".showlink($left7);?></td>
    <td width="71" align="center" valign="middle"><?php extract(getchilds($right3));  $right7=$rights;echo showid($right7); echo "<br>".shownames($right7);echo "<br>".showlink($right7);?></td>
  </tr>
  <?php if(isset($_GET['id'])) { ?>
  <tr>
    <td height="28" colspan="8" align="center" valign="middle" bgcolor="#FDFFFF"><a href="geneology.php?id=<?php echo PickMyParent($topids); ?>" class="redlink">TOP</a></td>
  </tr>
  <?php }?>
</table>
<?php 
}

function PickMyParent($memid)
{
$ssdgfs=mysql_query("select P_ParentID from childstatus where ParentID='$memid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$P_ParentID =$tyiyui['P_ParentID'];
}
return $P_ParentID;
}
?>