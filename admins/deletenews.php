<?php
include("../connect/session.php");
$id=$_GET['id'];

$qry=mysql_query("select * from newsss where id='$id' ");
while($qrys=mysql_fetch_array($qry))
{
$storename =$qrys['storename'];
}
mysql_query("delete from newsss  where id='$id'");


header('Location:'."addnews.php?stng=1&del");
?>