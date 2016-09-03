<?php 
include("../connect/session.php"); 
$id=$_GET['id'];
$store_id=$_POST['store_id'];
$passwd=$_POST['passwd'];
$storename=$_POST['storename'];
$adderss=$_POST['adderss'];
mysql_query("update olsupplier set Name='$storename', passwd='$passwd', Address='$adderss', suppl_id='$store_id'  where id='$id'");
header("Location:"."viewolsupplier.php?olp");
?>