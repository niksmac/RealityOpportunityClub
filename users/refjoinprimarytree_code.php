<?php 

include("../connect/session.php");

$refprimaryid = $_POST['refpid'];
$side = $_POST['side'];
$noref = $_POST['noref'];

$exp_p = substr($refprimaryid,0,1);
$refpid = substr($refprimaryid,1);


if ($noref == "roc")
{
$refpid = "1000000";
$side = "L";
$exp_p = "p";
}

//echo $refpid; echo "<br>";



$_SESSION['refpid'] = $refpid;
$_SESSION['side'] = $side;




if ($exp_p == "p")
{
$keyid = $_SESSION['keyid'];
header('Location:'."reqrocform.php?token=eDr45YBRty");
}

else
{
$keyid = $_SESSION['keyid'];
mysql_query("update primarytreekey set keystat=0 where id='$keyid' ");
header('Location:'."roc-primaryjoinings.php?token=y4rt45fDs6iDS");
}

?>