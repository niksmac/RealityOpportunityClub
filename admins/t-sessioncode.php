<?php 
session_start();
$login=$_SESSION['login'];
if($login!=1)
header("Location:"."index.php");
$localhost="localhost";
$user="admin";
$password="admin";
$database="ucpnewone";
//$localhost="localhost";
//$user="a345dmin";
//$password="admin543";
//$database="ucpnewone";
mysql_connect("$localhost","$user","$password");
mysql_select_db("$database") or die('could not connect to the database');
?>