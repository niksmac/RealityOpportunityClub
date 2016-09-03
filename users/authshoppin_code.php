<?php
include("../connect/session.php");

$pinno=addslashes($_POST['pinno']);

$qry=mysql_query("select pinno from pintbl_shp where pinno='$pinno'");
$fary=mysql_num_rows($qry);

if($fary==1)
{
$_SESSION['shauth']=1;
header('Location:'."roc-shopapplication.php");
}
else
{
$_SESSION['shauth']=0;
header('Location:'."shopauth.php?err");
}
?>