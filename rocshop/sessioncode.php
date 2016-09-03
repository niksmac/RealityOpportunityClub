<?php 
ini_set('date.timezone', 'Asia/Calcutta');
session_start();
$login=$_SESSION['shlogin'];
if($login!=1)
header("Location:"."index.php?exp");
include("../connect/connect.php");
$rocconnect = mysql_connect("$host","$user","$password");
mysql_select_db("$database") or die( mysql_error());
$urltoken = md5(microtime());
?>