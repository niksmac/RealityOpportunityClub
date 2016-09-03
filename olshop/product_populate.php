<?php 
include("../connect/olsession.php");
$prodcode=$_GET['prodcode'];
$qty=$_GET['qty'];

//$customer_name=$_GET['customer_name'];
//$c_phonenumber=$_GET['c_phonenumber'];
//$c_address=$_GET['c_address'];

$sp_res = mysql_query(" select pro_stock,dist_price from  ol_products where prod_code='$prodcode'  ");
while($sfetch=mysql_fetch_array($sp_res))
{
$pro_stock=$sfetch['pro_stock'];
$dist_price=$sfetch['dist_price'];
}

$linetotal = $qty * $dist_price;

if (($pro_stock < $qty) || ($pro_stock == 0))
echo "Error";
else
echo $linetotal."*".$dist_price;
?>