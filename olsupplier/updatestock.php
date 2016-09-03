<?php 
include("../connect/olsuppsession.php");
$id = $_GET['id'];
$newstk = $_POST['newstk'];

mysql_query (" update ol_products set pro_stock = pro_stock + $newstk where id = '$id' ");
header('Location:'."olsupp_suppproducts.php");
?>