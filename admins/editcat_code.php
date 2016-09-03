<?php 
include("../connect/session.php"); 
$catname=$_POST['catname'];
$id=$_GET['id'];
mysql_query("update category set catname='$catname' where id='$id' ");
header("Location:"."addcategory.php?stng=1&yes=1");
?>