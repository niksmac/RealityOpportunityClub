<?php 
include("../connect/session.php"); 

$procode = $_POST['procode'];
$proname = $_POST['proname'];
$supplier = $_POST['supplier'];
$suppprice = $_POST['suppprice'];
$mrp = $_POST['mrp'];
$retval = $_POST['retval'];
$rocprice = $_POST['rocprice'];
$stock = $_POST['stock'];
$bv = $_POST['bv'];


$file1=$_FILES['files']['name'];
if($file1!=""){
$ext= strtolower(substr(strrchr($file1,"."),1));
$elen= strlen($ext);
$flen= strlen($file1);
$slen= $flen-$elen-1;
$sname= substr($file1,0,$slen);
$photo=$sname.".".$ext; }
move_uploaded_file($_FILES["files"]["tmp_name"],"../olproducts/".$photo);

mysql_query ("INSERT INTO  ol_products (supp_id ,prod_code ,prod_name ,supp_price ,mrp ,dist_price ,mem_price ,pro_stock ,roc_bv ,photo)VALUES ('$supplier',  '$procode',  '$proname', '$suppprice', '$mrp',  '$retval',  '$rocprice',  '$stock',  '$bv',  '$photo')");
header('Location:'."viewolproducts.php?pol");
?>