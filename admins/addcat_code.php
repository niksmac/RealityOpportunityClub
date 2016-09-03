<?php 
include("../connect/session.php"); 
$catname=$_POST['catname'];

mysql_query("insert into category (catname) values ('$catname')");

header("Location:"."addcategory.php?stng=1&yes=1");
?>