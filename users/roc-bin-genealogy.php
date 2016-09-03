<?php 
include('index.tpl');

function getTitle()
{
echo 'Geneology';
}

function ShowContent($rocuname)
{
if(isset($_GET['id']))
{
$rocunamec= bindec ($_GET['id']);
}
else 
$rocunamec=$rocuname;

$rocuname = intval ($rocunamec);

include("lib/function_lib.php");
?>
<table width="700" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF" class="Contents" style="margin-bottom:100px;">
  <tr>
    <td colspan="8" align="center" valign="middle"><?php echo showid($rocuname); echo "<br>".shownames($rocuname);echo "<br>".showlink($rocuname); ?></td>
  </tr>
  <tr>
    <td colspan="8" align="center" valign="middle"><img src="img/legs1.jpg" width="252" /></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($rocuname));  $left1=$lefts;echo showid($left1);  echo "<br>".shownames($left1); echo "<br>".showlink($left1);?></td>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($rocuname)); $right1=$rights;echo showid($right1);  echo "<br>".shownames($right1);echo "<br>".showlink($right1);?></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><img src="img/legs1.jpg" width="148" height="12" /></td>
    <td colspan="4" align="center" valign="middle"><img src="img/legs1.jpg" width="148" height="12" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($left1));  $left2=$lefts;echo showid($left2);  echo "<br>".shownames($left2);echo "<br>".showlink($left2);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($left1));  $right2=$rights;echo showid($right2);  echo "<br>".shownames($right2);echo "<br>".showlink($right2);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($right1));  $left3=$lefts;echo showid($left3);  echo "<br>".shownames($left3);echo "<br>".showlink($left3);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($right1));  $right3=$rights;echo showid($right3);  echo "<br>".shownames($right3);echo "<br>".showlink($right3);?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="img/legs2.jpg" width="75" height="7" /></td>
    <td colspan="2" align="center" valign="middle"><img src="img/legs2.jpg" width="75" height="7" /></td>
    <td colspan="2" align="center" valign="middle"><img src="img/legs2.jpg" width="75" height="7" /></td>
    <td colspan="2" align="center" valign="middle"><img src="img/legs2.jpg" width="75" height="7" /></td>
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
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  <?php if(isset($_GET['id'])) { 
  
  ?>
  
  <?php }?>
</table>


<?php 
}
?>
