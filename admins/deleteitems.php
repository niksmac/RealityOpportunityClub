<?php
include("../connect/session.php");
$id=$_GET['id'];
$qry=mysql_query("select * from itemsnew where id='$id'");
while($fry=mysql_fetch_array($qry))
{
if($fry['photo']!="")
{
$ph=$fry['photo'];
$path="../products/".$fry['photo'];
if ($ph!="default.jpg")
unlink($path);
}
}
mysql_query("delete from itemsnew  where id='$id'");
header('Location:'."viewitems.php?itm=1");
?>