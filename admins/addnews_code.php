<?php 
include("../connect/session.php");
$captn=$_POST['captn'];
$descr=$_POST['descr'];
$t=time();
$dates =(date("D F d Y",$t)); 
mysql_query("insert into newsss (captn,descr,dates) values ('$captn','$descr','$dates')");
header("Location:"."addnews.php?stng=1&yes");
?>