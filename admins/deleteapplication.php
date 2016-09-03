<?php
include("../connect/session.php");

$id=$_GET['id'];
$qry=mysql_query("select * from careers where id='$id'");
while($fry=mysql_fetch_array($qry))
{
if($fry['photos']!="")
{
$ph=$fry['photos'];
$path="../careers/received/".$fry['photos'];
unlink($path);
}

if($fry['resume']!="")
{
$ph=$fry['resume'];
$path="../careers/received/".$fry['resume'];
unlink($path);
}

}
mysql_query("delete from careers  where id='$id'");

header('Location:'."jobapplication.php?yes");
?>