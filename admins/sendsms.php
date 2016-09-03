<?php 
$message = $_POST['message'];
$mornos = $_POST['mornos'];
if ($message != "")
{
$messages = urlencode ($message);
file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsmsnew1&sender=ROC&to=$mornos&message=$messages");
header('Location:'."sms.php?msc&s");
}
else 
header('Location:'."sms.php?msc&f");
?>