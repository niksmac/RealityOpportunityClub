<?php 
include("../connect/session.php");



$rocid=$_POST['rocid'];
$kitval=$_POST['kitval'];



$qrtyh=mysql_query("select kit_pur_inc from ol_products where prod_code = '$kitval' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$kit_pur_inc =$qraysjh['kit_pur_inc'];
}



mysql_query(" INSERT INTO ol_kit_pur_det (roc_id, kit_name, max_inc, inc_acq, pur_date) VALUES ('$rocid', '$kitval', '$kit_pur_inc', 0, curdate()) ");

header("Location:"."kitpurchase.php?kip");
?>