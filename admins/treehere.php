<script type="text/javascript" src="jquery-1.2.2.pack.js"></script>
<style type="text/css">
.ajaxtooltip{
position: absolute; /*leave this alone*/
display: none; /*leave this alone*/
width: 200px;
left: 0; /*leave this alone*/
top: 0; /*leave this alone*/
background: #FDE3B3;
border: 1px solid #FF6600;
border-width: 1px 1px 1px 1px;
padding: 5px;
}
</style>
<script type="text/javascript" src="ajaxtooltip.js"> </script>
<?php 
$users=10001;
if(isset($_GET['id']))
{
$usersk=$_GET['id'];
$users=$usersk;
}

$qry=mysql_query("select * from members where MemberID='$users' ");
while($qrys=mysql_fetch_array($qry))
{
$Gender=$qrys['Gender'];
$MemberID=$qrys['MemberID'];
$ID=$qrys['MemberID'];

if ($MemberID=="10001")
$photo="<img src='images/Ganapathy-Murugan.jpg' border='0' />";
if ($MemberID!="10001" && $Gender=="Male")
$photo="<img src='images/maleuser.JPG' width='50' height='50' border='0' />";
else if ($MemberID!="10001" && $Gender=="Female")
$photo="<img src='images/femaleuser.jpg' width='50' height='50' border='0' />";


$LChildID=0;
$RChildID=0;

$ssdgfs=mysql_query("select * from childstatus where ParentID='$ID' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$LChildID =$tyiyui['LChildID'];
$RChildID =$tyiyui['RChildID'];
}

}

$qrtry=mysql_query("select * from members where MemberID='$LChildID' ");
while($qryser=mysql_fetch_array($qrtry))
{
$gender1=$qryser['Gender'];
$MemberID1=$qryser['MemberID'];
}
$erqry=mysql_query("select * from members where MemberID='$RChildID' ");
while($qrrwyks=mysql_fetch_array($erqry))
{
$gender2=$qrrwyks['Gender'];
$MemberID2=$qrrwyks['MemberID'];
}


$photo1="<img src='images/default.png' width='50' height='50' border='0' />";
if ($gender1=="Male")
$photo1="<img src='images/maleuser.JPG' width='50' height='50' border='0' />";
else if ($gender1=="Female")
$photo1="<img src='images/femaleuser.jpg' width='50' height='50' border='0' />";

$photo2="<img src='images/default.png' width='50' height='50' border='0' />";
if ($gender2=="Male")
$photo2="<img src='images/maleuser.JPG' width='50' height='50' border='0' />";
else if ($gender2=="Female")
$photo2="<img src='images/femaleuser.jpg' width='50' height='50' border='0' />";
?>
<link href="default.css" rel="stylesheet" type="text/css" />

<table width="600" border="0" cellpadding="0" cellspacing="0" style="margin-bottom:100px;">
  <tr>    <td colspan="7" align="center" valign="middle"><a href="editmember.php?id=<?php echo $users; ?>" title="ajax:getdetails.php?id=<?php echo $users; ?>" ><?php echo $photo; ?><br /><?php echo $users; ?></a> | <a href="allocatehere.php?id=<?php echo $users; ?>">Allocate</a></td>
  </tr>
  <tr>
    <td colspan="6" align="center" valign="middle"><img src="images/legs.jpg" border="0" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><a href="editmember.php?id=<?php echo ($MemberID1); ?>" title="ajax:getdetails.php?id=<?php echo $MemberID1; ?>"><?php echo $photo1; ?><br />
    <?php echo $MemberID1; ?></a> | <a href="allocatehere.php?id=<?php echo $MemberID1; ?>">Allocate</a></td>
    <td colspan="4" align="center" valign="middle"><a href="editmember.php?id=<?php echo ($MemberID2); ?>" title="ajax:getdetails.php?id=<?php echo $MemberID2; ?>"><?php echo $photo2; ?><br /> 
    <?php echo $MemberID2; ?></a> | <a href="allocatehere.php?id=<?php echo $MemberID2; ?>">Allocate</a></td>
  </tr>

<?php 

$ssdgtyfs=mysql_query("select * from childstatus where ParentID='$LChildID' ");
while($tyirtyui=mysql_fetch_array($ssdgtyfs))
{
$LChildIDk =$tyirtyui['LChildID'];
$RChildIDm =$tyirtyui['RChildID'];
}


$qrtrtyy=mysql_query("select * from members where MemberID='$LChildIDk' ");
while($qrysreer=mysql_fetch_array($qrtrtyy))
{
$gender3=$qrysreer['Gender'];
$MemberID3=$qrysreer['MemberID'];
}

$photo3="<img src='images/default.png' width='50' height='50' border='0' />";
if ($gender3=="Male")
$photo3="<img src='images/maleuser.JPG' width='50' height='50' border='0' />";
else if ($gender3=="Female")
$photo3="<img src='images/femaleuser.jpg' width='50' height='50' border='0' />";



$erqryrtfg=mysql_query("select * from members where MemberID='$RChildIDm' ");
while($qrrwdfyks=mysql_fetch_array($erqryrtfg))
{
$gender4=$qrrwdfyks['Gender'];
$MemberID4=$qrrwdfyks['MemberID'];
}
$photo4="<img src='images/default.png' width='50' height='50' border='0' />";
if ($gender4=="Male")
$photo4="<img src='images/maleuser.JPG' width='50' height='50' border='0' />";
else if ($gender4=="Female")
$photo4="<img src='images/femaleuser.jpg' width='50' height='50' border='0' />";


$LChildIDs=0;
$RChildIDs=0;


$trtyet=mysql_query("select * from childstatus where ParentID='$RChildID' ");
while($rtet=mysql_fetch_array($trtyet))
{
$LChildIDs =$rtet['LChildID'];
$RChildIDs =$rtet['RChildID'];
}


$lgjkhg=mysql_query("select * from members where MemberID='$LChildIDs' ");
while($mtyvb=mysql_fetch_array($lgjkhg))
{
$gender5=$mtyvb['Gender'];
$MemberID5=$mtyvb['MemberID'];
}
$photo5="<img src='images/default.png' width='50' height='50' border='0' />";
if ($gender5=="Male")
$photo5="<img src='images/maleuser.JPG' width='50' height='50' border='0' />";
else if ($gender5=="Female")
$photo5="<img src='images/femaleuser.jpg' width='50' height='50' border='0' />";


$beskg=mysql_query("select * from members where MemberID='$RChildIDs' ");
while($bwindgh=mysql_fetch_array($beskg))
{
$gender6=$bwindgh['Gender'];
$MemberID6=$bwindgh['MemberID'];
}
$photo6="<img src='images/default.png' width='50' height='50' border='0' />";
if ($gender6=="Male")
$photo6="<img src='images/maleuser.JPG' width='50' height='50' border='0' />";
else if ($gender6=="Female")
$photo6="<img src='images/femaleuser.jpg' width='50' height='50' border='0' />";

?>
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="images/legs.jpg" width="171" border="0" /></td>
    <td colspan="2" align="center" valign="middle"><img src="images/legs.jpg" width="171" border="0" /></td>
  <tr>
    <td width="149" align="center" valign="middle"><a href="editmember.php?id=<?php echo ($MemberID3); ?>" title="ajax:getdetails.php?id=<?php echo $MemberID3; ?>"><?php echo $photo3; ?><br /> <?php echo $MemberID3; ?></a> | <a href="allocatehere.php?id=<?php echo $MemberID3; ?>">Allocate</a></td>
    
    <td width="151" align="center" valign="middle"><a href="editmember.php?id=<?php echo ($MemberID4); ?>" title="ajax:getdetails.php?id=<?php echo $MemberID4; ?>"><?php echo $photo4; ?><br /><?php echo $MemberID4; ?></a> | <a href="allocatehere.php?id=<?php echo $MemberID4; ?>">Allocate</a></td>
    
   <td width="148" align="center" valign="middle"><a href="editmember.php?id=<?php echo ($MemberID5); ?>" title="ajax:getdetails.php?id=<?php echo $MemberID5; ?>"><?php echo $photo5; ?><br /><?php echo $MemberID5; ?></a> | <a href="allocatehere.php?id=<?php echo $MemberID5; ?>">Allocate</a></td>
   
    <td width="152" align="center" valign="middle"><a href="editmember.php?id=<?php echo ($MemberID6); ?>" title="ajax:getdetails.php?id=<?php echo $MemberID6; ?>"><?php echo $photo6; ?><br /><?php echo $MemberID6; ?></a> | <a href="allocatehere.php?id=<?php echo $MemberID6; ?>">Allocate</a></td>
</table>
