<?php 
session_start();
$login = $_SESSION['sblogin'];
if($login!=1) 
header("Location:"."index.php");
else { 
include("../connect/dbs.php");
$con = mysql_connect($host,$user,$password);
mysql_select_db($database,$con ) or die('could not connect to the database');
}
?>