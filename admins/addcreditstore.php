<?php 
include("../connect/session.php"); 

 $store=$_POST['store'];
 $crval=$_POST['crval'];

mysql_query("insert into stor_credit (stor_id,crval,crdates) values ('$store','$crval',NOW())");


$sde = mysql_query("select id from stor_credit_sum where stor_id = '$store'");
if (mysql_num_rows($sde) == 0 )
mysql_query("insert into stor_credit_sum (stor_id,crval,crlimit) values ('$store','$crval','$limit')");
else
mysql_query("update  stor_credit_sum set crval = crval+$crval where stor_id = '$store' ");



header("Location:"."addcredits.php?st=1&yes=1");
?>