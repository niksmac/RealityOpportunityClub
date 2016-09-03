<?php 
include ("connect/connect.php");
include ("lib/function_lib.php");

$rocuname = make_safe($_POST['rocuname']);
$pwd = make_safe($_POST['pwd']);

###############################
#---------- Uncomment While Closing -----------------
#header('Location:'."memberlogin.php?cls");
#############################

$qry=mysql_query("select MemberID from members where MemberID='$rocuname' and Password='$pwd'");
$fary=mysql_num_rows($qry);
if($fary==1)
{
session_start();
$_SESSION['login']=1;
$_SESSION['uname']=$rocuname;
header('Location:'."users/index.php");
}
else
{
session_start();
$_SESSION['login']=0;
header('Location:'."memberlogin.php");
}



?>