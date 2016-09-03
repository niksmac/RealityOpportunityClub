<?php 
include("../connect/session.php"); 
$cat_id=$_POST['cat_id'];
$brandname=$_POST['brandname'];
$id=$_GET['id'];
mysql_query("update brands set cat_id='$cat_id',brandname='$brandname' where id='$id' ");
header("Location:"."addbrands.php?stng=1&yes=1");
?>