<?php


###############################
#---------- Uncomment While Closing -----------------
#header('Location:'."../index.php?cls");
#############################


session_start();

include("../connect.php");

$_SESSION['user']=$_POST['txtuname'];
$uname=$_POST['txtsuname'];
$pwd=$_POST['txtspwd'];

$key=substr($_SESSION['key'],0,5);
$number = $_POST['number'];


	$Password = htmlentities($pwd, ENT_QUOTES);
	$qry=mysql_query("select store_id from stores where store_id='$uname' and pass='$Password'");
	$fary=mysql_num_rows($qry);
	if($fary==1)
		{
			$_SESSION['shlogin']=1;
			$_SESSION['shplogin']=$uname;
			header('Location:'."shophome.php");
		}
	else
		{
			$_SESSION['shlogin']=0;
			header('Location:'."index.php?fail");
		}

?>