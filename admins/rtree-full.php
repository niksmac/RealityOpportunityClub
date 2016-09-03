<?php 
include("../connect/session.php");

if(isset($_GET['id']))
$pnode=$_GET['id'];
else 
$pnode=1;
showtree($pnode);
?>

<?php 
function showtree($topids)
{
?>
<link href="colours.css" rel="stylesheet" type="text/css" />

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
<?php 
function getchilds($parent)
{
$lefts='NA';$rights='NA';
$ssdgfs=mysql_query("select lefts,rights from royalty where rocref='$parent' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$lefts =$tyiyui['lefts'];
$rights =$tyiyui['rights'];
}
return compact('lefts', 'rights');
}

function showlink($newid)
{
$mylink = $_SERVER['PHP_SELF'];

if ($newid !='NA')
{
$ssdgfs=mysql_query("select mmbr_id from royalty where rocref='$newid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_idk =$tyiyui['mmbr_id'];
}

if ($mmbr_idk == "ROC")
$myvar = "<a href='$mylink?id=$newid'><img src='images/royaltyroclogo.jpg' alt='ROC ' border='0' /></a>";
else
$myvar = "<a href='$mylink?id=$newid'><img src='images/green.jpg'  width='48' height='56' border='0' /></a>";
}
else 

$myvar = "<img src='images/green-fade.JPG' width='48' height='56' border='0' />";

return $myvar;
}

function shownames($mmbrid)
{

$ssdgfs=mysql_query("select mmbr_id from royalty where rocref='$mmbrid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_idk =$tyiyui['mmbr_id'];
}

$ssdgfsgf=mysql_query("select Name from members where MemberID='$mmbr_idk' ");
while($tyiyfui=mysql_fetch_array($ssdgfsgf))
{
$Name =$tyiyfui['Name'];
}

return $Name;
}

function showid($mmbrid)
{
	$ssdgfs=mysql_query("select mmbr_id from royalty where rocref='$mmbrid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_idk =$tyiyui['mmbr_id'];
}
return $mmbr_idk;
}


function getpath($parent)
{

$ssdgfs=mysql_query("select paths from royalty where mmbr_id='$parent' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$paths =$tyiyui['paths'];
}
return $paths;
}

function lastidonlevel($runninglevel)
{
$ssdgfs=mysql_query("select mmbr_id from royalty where levels='$runninglevel' and id=(select max(id) from royalty) ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_id =$tyiyui['mmbr_id'];
}
return $mmbr_id;
}


function getmylevel($mmbrid)
{
$ssdgfs=mysql_query("select levels from royalty where mmbr_id='$mmbrid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mylevel =$tyiyui['levels'];
}
return $mylevel;
}

function getparentid($runninglevel)
{
$ssdgfs=mysql_query("select mmbr_id from royalty where levels='$runninglevel' and id=(select max(id) from royalty) ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_id =$tyiyui['mmbr_id'];
}
return $mmbr_id;
}



function pickupline($mylevel,$c_val)
{

$mylevel = $mylevel / (pow (2,$c_val));
$myupline = (int) $mylevel;
return $myupline;
}


function createRandomPassword() {
$chars = "QWERTYUIOPASDFGHJKLZXCVBNMZ";
srand((double)microtime()*1000000);
$i = 1;
$pass = '' ;
while ($i <= 5) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}
?>
