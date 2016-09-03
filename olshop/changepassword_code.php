<?php 
include("../connect/olsuppsession.php");


$oldpass = $_POST['oldpass'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$qry=mysql_query("select store_id from olshops where store_id='$uname' and pass='$oldpass' ");
$cnt = mysql_num_rows($qry);

if ($cnt == 1)
{
mysql_query("update olshops set  pass='$pass2' where suppl_id='$uname' ");
header('Location:'."shopchangepassword.php?y");
}

else if ($cnt == 0)
{
mysql_query("update olshops set  pass='$pass2' where suppl_id='$uname' ");
header('Location:'."shopchangepassword.php?n");
}


?>