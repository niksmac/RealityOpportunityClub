<?php

$mob = $_GET['mob'];
$key = $_GET['key'];
	$meses = "Hi Your Primary Plan Secret Key : $key.";
	$messages = urlencode($meses);
	file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsmsnew1&sender=ROC&to=$mob&message=$messages");
	
header('Location:'."ptreekeygen.php");
	
?>