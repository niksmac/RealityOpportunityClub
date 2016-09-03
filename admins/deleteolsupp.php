<?php
include("../connect/session.php");
$id=$_GET['id'];
mysql_query("delete from olsupplier  where id='$id'");
header('Location:'."viewolsupplier.php?olp");
?>