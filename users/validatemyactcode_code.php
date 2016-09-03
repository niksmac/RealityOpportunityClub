<?php 
include("sessioncode.php");
$uname=$_SESSION['uname'];
$akey1 = $_POST['akey1'];
$akey2 = $_POST['akey2'];
$akey3 = $_POST['akey3'];
$akey4 = $_POST['akey4'];
$actkey = $akey1."-".$akey2."-".$akey3."-".$akey4."-";
$qrfy=mysql_query("select id from selfactivation where BINARY actkey = '$actkey'  ");
$cnsdgsdfg = mysql_num_rows($qrfy);
if ($cnsdgsdfg == 1)
{
mysql_query("update members set ActStatus=1,DOA='NOW()' where MemberID = '$uname' ");
mysql_query("update selfactivation set memid='$uname',usdstat=1, usddate=NOW() where BINARY actkey = '$actkey' ");
header('Location:'."userhome.php?token=y4rt45fDs6iDS");
}
else 
header('Location:'."activatemyself.php?fail");
?>