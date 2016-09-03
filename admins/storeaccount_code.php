<?php 
include("../connect/session.php"); 

$strid = $_GET['id'];
$dfg = $_GET['fgg'];
$particlur = $_POST['particlur'];
$debt = $_POST['debt'];
$crdit = $_POST['crdit'];
$bal = $_POST['bal'];

mysql_query("insert into store_account (stor_id, ac_date, particulars, debits, credits, balance) values ('$strid', NOW(), '$particlur', '$debt','$crdit','$bal')");

header("Location:"."storeaccount.php?id=$dfg");

?>