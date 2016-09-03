<?php 
include("../connect/session.php"); 

$mid=$_GET['mid'];

session_start();
$_SESSION['login']=1;
$_SESSION['uname']=$mid;
header('Location:'."../users/index.php");
?>