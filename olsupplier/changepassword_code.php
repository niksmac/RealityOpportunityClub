<?php 
include("../connect/olsuppsession.php");


$oldpass = $_POST['oldpass'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$qry=mysql_query("select id from olsupplier where suppl_id='$uname' and passwd='$oldpass' ");
$cnt = mysql_num_rows($qry);

if ($cnt == 1)
{
mysql_query("update olsupplier set  passwd='$pass2' where suppl_id='$uname' ");
header('Location:'."olsupp_passchange.php?y");
}

else if ($cnt == 0)
{
mysql_query("update olsupplier set  passwd='$pass2' where suppl_id='$uname' ");
header('Location:'."olsupp_passchange.php?n");
}


?>