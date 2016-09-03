<?php 
session_start();
$login = $_SESSION['login'];
if($login!=1) 
header("Location:"."../index.php?exp");
else { 
include("dbs.php");
$con = mysql_connect($host,$user,$password);
mysql_select_db($database,$con ) or die('could not connect to the database');
$rocuname = $_SESSION['uname'];
}
?>