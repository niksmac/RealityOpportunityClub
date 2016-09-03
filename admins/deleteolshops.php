<?php
include("../connect/session.php");
$id=$_GET['id'];


mysql_query("delete from olshops  where id='$id'");

header('Location:'."viewolshops.php?ol");
?>