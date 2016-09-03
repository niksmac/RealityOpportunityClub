<?php 
include("../connect/session.php"); 
$cat_id=$_POST['cat_id'];
$brandname=$_POST['brandname'];
mysql_query("insert into brands (brandname,cat_id) values ('$brandname','$cat_id')");
header("Location:"."addbrands.php?stng=1");
?>