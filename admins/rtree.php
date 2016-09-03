<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	font-size: 8.5pt;
	color: #1F770F;
}
h1 {
	font-size: 14pt;
	color: #FF3333;
}
a {
	font-size: 9pt;
	color: #42E22A;
}
a:hover {
	color: #FF0033;
}
a:visited {
	color: #42E22A;
}
a:active {
	color: #42E22A;
}
body {
	background-color: #FFFFFF;
}
-->
</style>

<?php 
include("../connect/session.php");
require_once("function_lib.php");

if(isset($_GET['id']))
$pnode=$_GET['id'];
else 
$pnode=1;

//showtree($pnode);
//echo "My 3rd Upline - ";echo $thirdtop = takethreetop($pnode);
//echo "<br>";echo "<br>";

//echo "3rd Upline ";echo $lastid = takethreetop($lastidonlevel);echo "<br>";

	$result = mysql_query("select MAX(levels) from royalty");
	$data = mysql_fetch_array($result);
	$runninglevel=$data[0];

echo "Running Level - ";			echo $runninglevel;	echo "<br>";
echo "My Level - "; 				echo $mylevel = getmylevel($pnode);	echo "<br>";
echo "Variable - ";					echo $c_val = $runninglevel - $mylevel;echo "<br>";
echo "New Upline - ";				echo $newupline = pickupline($mylevel,$c_val );echo "<br>";
echo "Last Id on running level - ";	echo $lastid = lastidonlevel($runninglevel);echo "<br>";echo "<br>";

echo $frsttop = (int) ($lastid / 2);echo "<br>";
echo $scndtop = (int) ($frsttop / 2);echo "<br>";
echo $thirdtop = (int) ($scndtop / 2);echo "<br>";

if ($newupline == 0)
showtree($thirdtop);
else if ($newupline == 1)
showtree($scndtop);
else if ($newupline == 2)
showtree($frsttop);
else if ($newupline == 3)
showtree($frsttop);
else if ($newupline == 4)
showtree($pnode);

function showtree($newupline)
{
?>
<table width="600" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF" class="Contents">
  <tr>
    <td colspan="8" align="center" valign="middle"><?php echo showid($topids); echo "<br>".shownames($topids);echo "<br>".showlink($topids); ?></td>
  </tr>
  <tr>
    <td colspan="8" align="center" valign="middle"><img src="images/legs1.jpg" width="252" /></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($topids));  $left1=$lefts;echo showid($left1);  echo "<br>".shownames($left1); echo "<br>".showlink($left1);?></td>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($topids)); $right1=$rights;echo showid($right1);  echo "<br>".shownames($right1);echo "<br>".showlink($right1);?></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><img src="images/legs1.jpg" width="132" /></td>
    <td colspan="4" align="center" valign="middle"><img src="images/legs1.jpg" width="132" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($left1));  $left2=$lefts;echo showid($left2);  echo "<br>".shownames($left2);echo "<br>".showlink($left2);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($left1));  $right2=$rights;echo showid($right2);  echo "<br>".shownames($right2);echo "<br>".showlink($right2);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($right1));  $left3=$lefts;echo showid($left3);  echo "<br>".shownames($left3);echo "<br>".showlink($left3);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($right1));  $right3=$rights;echo showid($right3);  echo "<br>".shownames($right3);echo "<br>".showlink($right3);?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="images/legss.jpg" width="100" height="28" /></td>
    <td colspan="2" align="center" valign="middle"><img src="images/legss.jpg" width="100" height="28" /></td>
    <td colspan="2" align="center" valign="middle"><img src="images/legss.jpg" width="100" height="28" /></td>
    <td colspan="2" align="center" valign="middle"><img src="images/legss.jpg" width="100" height="28" /></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><?php extract(getchilds($left2));  $left4=$lefts;echo showid($left4); echo "<br>".shownames($left4);echo "<br>".showlink($left4);?></td>
    <td align="center" valign="middle"><?php extract(getchilds($left2));  $right4=$rights;echo showid($right4); echo "<br>".shownames($right4);echo "<br>".showlink($right4);?></td>
    <td align="center" valign="middle"><?php extract(getchilds($right2));  $left5=$lefts;echo showid($left5); echo "<br>".shownames($left5);echo "<br>".showlink($left5);?></td>
    <td align="center" valign="middle"><?php extract(getchilds($right2));  $right5=$rights;echo showid($right5); echo "<br>".shownames($right5);echo "<br>".showlink($right5);?></td>
    
    <td align="center" valign="middle"><?php extract(getchilds($left3));  $left6=$lefts; echo showid($left6);echo "<br>".shownames($left6);echo "<br>".showlink($left6);?></td>
    <td align="center" valign="middle"><?php extract(getchilds($left3));  $right6=$rights;echo showid($right6); echo "<br>".shownames($right6);echo "<br>".showlink($right6);?></td>
    <td align="center" valign="middle"><?php extract(getchilds($right3));  $left7=$lefts;echo showid($left7); echo "<br>".shownames($left7);echo "<br>".showlink($left7);?></td>
    <td align="center" valign="middle"><?php extract(getchilds($right3));  $right7=$rights;echo showid($right7); echo "<br>".shownames($right7);echo "<br>".showlink($right7);?></td>
  </tr>
  <?php if(isset($_GET['id'])) { ?>
  <tr>
    <td height="28" colspan="8" align="center" valign="middle" bgcolor="#FDFFFF"><a href="javascript:history.back(-1)">BACK</a></td>
  </tr>
  <?php }?>
</table>
<?php 
}
?>