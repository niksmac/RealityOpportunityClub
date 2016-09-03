<?php include("../connect/session.php"); 
$uname=$_SESSION['adminlogin'];
$id=$_GET['id'];
$content=$_GET['content'];
mysql_query ("update primarytreekey set actsts=1 where id = '$id'");
header('Location:'."ptreekeylist.php?content=$content&pm");
?>
