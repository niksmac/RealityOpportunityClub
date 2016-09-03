<?php 
include("../connect/session.php"); 

 $store=$_POST['store'];
 $crval=$_POST['crval'];
 $deb=$_POST['deb'];
 $particulars=$_POST['particulars'];

if ($deb == 0)
{
mysql_query("insert into olshops_acc_det (stor_id,ac_date, credits, particulars) values ('$store',now(),'$crval','$particulars')");
$sde = mysql_query("select id from olshops_acc where olshopid = '$store'");
if (mysql_num_rows($sde) == 0 )
mysql_query("insert into olshops_acc (olshopid,balamt) values ('$store','$crval')");
else
mysql_query("update  olshops_acc set balamt = balamt+$crval where olshopid = '$store' ");
}


else if ($crval == 0)
{
mysql_query("insert into olshops_acc_det (stor_id,ac_date, debits, particulars) values ('$store',now(),'$deb','$particulars')");
$sde = mysql_query("select id from olshops_acc where olshopid = '$store'");
if (mysql_num_rows($sde) == 0 )
mysql_query("insert into olshops_acc (olshopid,balamt) values ('$store','$crval')");
else
mysql_query("update  olshops_acc set balamt = balamt-$deb where olshopid = '$store' ");
}






header("Location:"."mastertrans.php?ol&m&yes=1");
?>