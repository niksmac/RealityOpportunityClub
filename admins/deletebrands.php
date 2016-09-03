<?php
include("../connect/session.php");

$id=$_GET['id'];

mysql_query("delete from brands  where id='$id'");
header('Location:'."addbrands.php?stng=1");
?>