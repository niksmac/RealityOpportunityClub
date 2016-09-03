<?php 
include("../connect/session.php"); 
$newoinno = $_POST['newoinno'];
mysql_query ("update pintbl set pinno = '$newoinno' ");
header('Location:'."miscfns.php");
?>