<?php 
include("../connect/session.php");
$qryfh=mysql_query("select * from stores");
while($qryshf=mysql_fetch_array($qryfh))
{
echo $store_id=$qryshf['store_id']."\n";
}
?>