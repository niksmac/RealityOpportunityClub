<?php 
include('index.tpl');

function getTitle()
{
echo 'Primary Tree';
}

function ShowContent($rocuname)
{
$pnode = "p1000000";
if(isset($_GET['id']))
$pnode=$_GET['id'];

$exp_p = substr($pnode,0,1);
$refpid = substr($pnode,1);

$pnode = "";
if(isset($_GET['f']))
{
$points=$_GET['f'];
if ($points <= 1800)
{
     $extr = "";
	 $str = 1800 - $points;
	 $rew = "Rs 50000/- or motor bike";
	 $msg = $extr. "You need ". $str . " Points to Achieve Your next LIFETIME REWARD of ". $rew;
}
else if ($points <= 8000)
{
	 $extr = "Congratulations for achieving a Rs 50000/- or motor bike";
	 $str = 8000 - $points;
	 $rew = "Rs 300000/- or CAR";
	 $msg = $extr. "You need ". $str . " Points to Achieve Your next LIFETIME REWARD of ". $rew;
}

else if ($points <= 25000)
{	
	 $extr = "Congratulations for achieving a Rs 300000/- or CAR";
	 $str = 25000 - $points;
	 $rew = "Rs 800000/- or CAR";
	 $msg = $extr. "You need ". $str . " Points to Achieve Your next LIFETIME REWARD of ". $rew;
}
else if ($points <= 100000)
{
	 $extr = "Congratulations for achieving a Rs 800000/- or CAR";
	 $str = 100000 - $points;
	 $rew = "Rs 3000000/- or Flat";
	 $msg = $extr. "You need ". $str . " Points to Achieve Your next LIFETIME REWARD of ". $rew;
}
else 
{
	 $extr = "";
	 $str = "";
	 $msg = "You have achieved all Lifetime rewards from ROC";
}
	
}


?>
<table width="800" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF"  style="margin-bottom:100px;">
  <?php  if(isset($_GET['f'])) { ?>
  <tr>
    <td height="58" colspan="8" align="center" valign="middle"><div class="successinfodiv" ><?php echo $msg; ?> </div></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="8" align="center" valign="middle"><?php echo "<br>".shownames($refpid);echo "<br>".showlink($refpid); ?></td>
  </tr>
  <tr>
    <td colspan="8" align="center" valign="middle"><img src="img/legs1.jpg" width="252" height="22" /></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($refpid));  $left1=$leftid; echo "<br>".shownames($left1); echo "<br>".showlink($left1);?></td>
    <td colspan="4" align="center" valign="middle"><?php extract(getchilds($refpid)); $right1=$rightid;  echo "<br>".shownames($right1);echo "<br>".showlink($right1);?></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><img src="img/legs1.jpg" width="172" height="15" /></td>
    <td colspan="4" align="center" valign="middle"><img src="img/legs1.jpg" width="172" height="15" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($left1));  $left2=$leftid;  echo "<br>".shownames($left2);echo "<br>".showlink($left2);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($left1));  $right2=$rightid;  echo "<br>".shownames($right2);echo "<br>".showlink($right2);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($right1));  $left3=$leftid; echo "<br>".shownames($left3);echo "<br>".showlink($left3);?></td>
    <td colspan="2" align="center" valign="middle"><?php extract(getchilds($right1));  $right3=$rightid;  echo "<br>".shownames($right3);echo "<br>".showlink($right3);?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="img/legs2.jpg" width="75" /></td>
    <td colspan="2" align="center" valign="middle"><img src="img/legs2.jpg" width="75" /></td>
    <td colspan="2" align="center" valign="middle"><img src="img/legs2.jpg" width="75" /></td>
    <td colspan="2" align="center" valign="middle"><img src="img/legs2.jpg" width="75" /></td>
  </tr>
  <tr>
    <td width="67" align="center" valign="middle"><?php extract(getchilds($left2));  $left4=$leftid; echo "<br>".shownames($left4);echo "<br>".showlink($left4);?></td>
    <td width="70" align="center" valign="middle"><?php extract(getchilds($left2));  $right4=$rightid; echo "<br>".shownames($right4);echo "<br>".showlink($right4);?></td>
    <td width="70" align="center" valign="middle"><?php extract(getchilds($right2));  $left5=$leftid; echo "<br>".shownames($left5);echo "<br>".showlink($left5);?></td>
    <td width="67" align="center" valign="middle"><?php extract(getchilds($right2));  $right5=$rightid; echo "<br>".shownames($right5);echo "<br>".showlink($right5);?></td>
    <td width="70" align="center" valign="middle"><?php extract(getchilds($left3));  $left6=$leftid;  echo "<br>".shownames($left6);echo "<br>".showlink($left6);?></td>
    <td width="67" align="center" valign="middle"><?php extract(getchilds($left3));  $right6=$rightid; echo "<br>".shownames($right6);echo "<br>".showlink($right6);?></td>
    <td width="70" align="center" valign="middle"><?php extract(getchilds($right3));  $left7=$leftid; echo "<br>".shownames($left7);echo "<br>".showlink($left7);?></td>
    <td width="71" align="center" valign="middle"><?php extract(getchilds($right3));  $right7=$rightid;echo "<br>".shownames($right7);echo "<br>".showlink($right7);?></td>
  </tr>
</table>
<?php 
}

function getchilds($parent)
{

$leftid="0";$rightid="0";
$ssdgfs=mysql_query("select leftid,rightid from primarytree where primaryid='$parent' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$leftid = $tyiyui['leftid'];
$rightid = $tyiyui['rightid'];
}
return compact('leftid', 'rightid');
}




function showlink($newid)
{
if ($newid == "0")
$myvar = "<img src='img/green-fade.JPG' alt='Yet to be Join'  width='48' height='56' border='0' />";
else
$myvar = "<a href='".curPageName()."?id=p$newid' title='ajax:getdetailsk.php?id=$newid'><img src='img/green.jpg' alt='$newid'  width='48' height='56' border='0' /></a>";
return $myvar;
}

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

function shownames($memid)
{
$Name = "";
$ssdgfs=mysql_query("select memid from primarytree where primaryid='$memid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$memidk =$tyiyui['memid'];
}

$ssdgfsgf=mysql_query("select Name from members where MemberID='$memidk' ");
while($tyivyfui=mysql_fetch_array($ssdgfsgf))
{
$Name =$tyivyfui['Name'];
}
return $Name;
}




function showid($memid)
{
$noms ="0";
$ssdggfs=mysql_query("select memid from primarytree where memid='$memid' ");
while($tyiyui=mysql_fetch_array($ssdggfs))
{
$memidk =$tyiyui['memid'];
}
if (mysql_num_rows ($ssdggfs) == 0)
return $noms;
else 
return $memidk;
}

?>