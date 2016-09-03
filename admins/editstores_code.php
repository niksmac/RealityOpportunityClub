<?php 
include("../connect/session.php"); 
$id=$_GET['id'];
$storename=$_POST['storename'];
$ownername=$_POST['ownername'];
$adderss=$_POST['adderss'];
$pincode=$_POST['pincode'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
$panchayth=$_POST['panchayth'];
$location=$_POST['location'];
$tinnumber=$_POST['tinnumber'];
$st_grade=$_POST['st_grade'];
$store_id=$_POST['store_id'];
$passwd=$_POST['passwd'];
mysql_query("update stores set storename='$storename', ownername='$ownername', address='$adderss', pincode='$pincode', phone='$phone',country='$country', district='$district', state='$state', panchayth='$panchayth',location='$location', tinnumber='$tinnumber', grade='$st_grade', store_id='$store_id',pass = '$passwd'  where id='$id'");

header("Location:"."viewstores.php?st=1");
?>