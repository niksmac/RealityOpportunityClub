<?php
include("../connect/session.php");
$id=$_GET['id'];

$qry=mysql_query("select * from stores where id='$id' ");
while($qrys=mysql_fetch_array($qry))
{
$storename =$qrys['storename'];
}
mysql_query("delete from stores  where id='$id'");

$qryk=mysql_query("select * from issueddetails  where store='$storename'");
while($qrysk=mysql_fetch_array($qryk))
{
mysql_query("delete from issueddetails  where store='$storename'");
}
header('Location:'."viewstores.php?st=1");
?>