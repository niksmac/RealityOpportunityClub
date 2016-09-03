<?php
include("../connect/session.php");

$pinno=addslashes($_POST['pinno']);

$qry=mysql_query("select pinno from pintbl where pinno='$pinno'");
$fary=mysql_num_rows($qry);

if($fary==1)
{
$_SESSION['srlog']=1;
header('Location:'."showmemsearch.php");
}
else
{
header('Location:'."memsearchad.php?err");
}
?>