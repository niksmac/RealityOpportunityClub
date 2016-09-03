<?php
include("../connect/session.php");

$id=$_GET['id'];

mysql_query("delete from category  where id='$id'");
header('Location:'."addcategory.php?stng=1");
?>