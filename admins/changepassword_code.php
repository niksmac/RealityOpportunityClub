<?php
session_start();
$login=$_SESSION['login'];
if($login!=1)
header('Location:'."index.php");
include ("./dbs.php");

mysql_connect("$host","$user","$password");
mysql_select_db("$database") or die('could not connect to the database');

$uname=$_POST['uname'];
$oldpwdd=$_POST['oldpwd'];
$newpwdd=$_POST['newpwd'];

$oldpwd = md5($oldpwdd);
$newpwd = md5($newpwdd);
$qry=mysql_query("select count(*) from admin where uname='$uname' and pwd='$oldpwd'" );
$fry=mysql_fetch_array($qry);
if($fry[0]>0)
{
 mysql_query("update admin set pwd='$newpwd' where uname='$uname' and pwd='$oldpwd' ");
 $f=1;
 }
 else
$f=2;
 header("Location:"."changepass.php?fl=$f");
?>