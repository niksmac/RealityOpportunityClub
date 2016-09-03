<?php 
session_start();
$osuplogin = $_SESSION['olshplogin'];
if($osuplogin!=1) 
header("Location:"."../index.php?exp");
else { 
include("dbs.php");
$con = mysql_connect($host,$user,$password);
mysql_select_db($database,$con ) or die('could not connect to the database');
}
$uname = $_SESSION['olsupplogin'];
?>