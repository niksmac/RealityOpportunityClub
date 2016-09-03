<?php 
ini_set('date.timezone', 'Asia/Calcutta');
include("dbs.php");
$con = mysql_connect($host,$user,$password);
mysql_select_db($database,$con ) or die('could not connect to the database');
?>