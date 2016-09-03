<?php 
include("../connect/session.php"); 
$mobno = $_POST['mobno'];

$qry=mysql_query("select pinno from pintbl ");
while($sdfsdfa=mysql_fetch_array($qry))
{
$pinno=$sdfsdfa['pinno'];
}


if (strlen ($mobno) == 10)
{
$meses = "Hello Your PIN : $pinno -Thank You.";
$messages = urlencode($meses);
file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsms&sender=ROC&to=$mobno&message=$messages");
}

header('Location:'."miscfns.php?snd&no=$mobno");
?>