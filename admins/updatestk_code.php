<?php 
include("../connect/session.php"); 
$updtstk=$_POST['updtstk'];
$qty=$_POST['qty'];
$id=$_GET['id'];
$fnstk=$updtstk+$qty;

mysql_query("update itemsnew  set quantity='$fnstk' where id='$id' ");
header("Location:"."viewitems.php?itm=1");
?>