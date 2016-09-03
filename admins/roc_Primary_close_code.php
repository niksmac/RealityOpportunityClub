<?php include("../connect/session.php");

$ssdgfs=mysql_query("select memid,kittype,leftid,rightid,level,primaryid,kittype from primarytree where primaryid='$memid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$memidk = $tyiyui['memid'];
$kittype = $tyiyui['kittype'];
$leftid = $tyiyui['leftid'];
$rightid = $tyiyui['rightid'];
$level = $tyiyui['level'];
$primaryid = $tyiyui['primaryid'];
$kittype = $tyiyui['kittype'];
}





?>

