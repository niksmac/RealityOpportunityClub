<?php 
include('index.tpl');

function getTitle()
{
echo 'Royalty Tree Geneology';
}

function ShowContent($rocuname)
{
include('lib/function_lib_royalty.php');
$pnode=$_GET['id'];

$result = mysql_query("select MAX(levels) from royalty");
$data = mysql_fetch_array($result);
$runninglevel=$data[0];
	
$mylevel = getmylevel($pnode);	
$myc_val = $runninglevel - $mylevel;
$c_val = 3 - $myc_val;	

if ($c_val > 0 && $c_val <= 4)
{
$newparent = pickparent($pnode,$c_val );
showtree($newparent);
}
else if ($c_val == 0)
{
	showtree($pnode);
}
else 
{
	$newrebid = findlastrebirth($pnode);
	if (mysql_num_rows(mysql_query("select id from royalty where rocref = '$newrebid' ")) > 0)
	{
	?>
	<script type="text/javascript">
	var myRand=parseInt(Math.random()*99999999);
	document.location.href='roc-royalty-genealogy.php?<?php echo md5(time()); ?>&id=<?php echo $newrebid ?>&key=<?php echo md5(time()); ?>'
	</script>
	<?php
	}
}
}


function showtree($topids)
{
?>

<table width="600" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF" class="Contents" style="margin-bottom:100px;">
  <tr>
    <td colspan="8" align="right" valign="middle"><a href="roc-rclubstats.php" class="menulink"><img src="img/backbtn.jpg" width="129" height="44" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="8" align="center" valign="middle"><?php echo showid($topids); echo "<br>".shownames($topids);echo "<br>".showlink($topids); ?></td>
  </tr>
  <tr>
    <td colspan="8" align="center" valign="middle"><img src="img/legs1.jpg" width="252" /></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($topids));  $left1=$lefts;echo showid($left1);  echo "<br>".shownames($left1); echo "<br>".showlink($left1);?></td>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($topids)); $right1=$rights;echo showid($right1);  echo "<br>".shownames($right1);echo "<br>".showlink($right1);?></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><img src="img/legs1.jpg" width="167" height="14" /></td>
    <td colspan="4" align="center" valign="middle"><img src="img/legs1.jpg" width="167" height="14" /></td>
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
</table>
<?php 
}
?>
