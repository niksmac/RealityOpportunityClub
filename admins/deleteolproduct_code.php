<?php
include("../connect/session.php");
$id=$_GET['id'];

$qry=mysql_query("select photo from ol_products where id='$id' ");
while($qrys=mysql_fetch_array($qry))
{
$photo =$qrys['photo'];
}
unlink ("../olproducts/".$photo);
mysql_query("delete from ol_products  where id='$id'");


header('Location:'."viewolproducts.php?pol");
?>