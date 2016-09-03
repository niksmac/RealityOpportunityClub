<?php 
include("../connect/session.php");
$qryfh=mysql_query("select Mobile,Name from members");
while($qryshf=mysql_fetch_array($qryfh))
{
$Mobile=$qryshf['Mobile']."\n";
echo $Mobile;
}
?>