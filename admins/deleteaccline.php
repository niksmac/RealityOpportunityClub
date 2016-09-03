<?php
include("../connect/session.php");

$id=$_GET['id'];

mysql_query("delete from store_account  where id='$id'");
header('Location:'."viewstores.php?st=1");
?>