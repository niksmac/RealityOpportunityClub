<?php
include("../connect/session.php");
$id=$_GET['id'];
$qry=mysql_query("select * from splproducts where id='$id'");
while($fry=mysql_fetch_array($qry))
{
if($fry['photo']!="")
{
$ph=$fry['photo'];
$path="../special/".$fry['photo'];
if ($ph!="default.jpg")
unlink($path);
}
}
mysql_query("delete from splproducts  where id='$id'");
header('Location:'."viewsplpro.php?spl=1");
?>