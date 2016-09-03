<?php
include_once("config.php");
//------------------------------------------------------------------------------------------------
// RECUPERO IL VALORE DI TUTTI I DATI INVIATI DALL'UTENTE
//------------------------------------------------------------------------------------------------


$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];



$str_ind_ip = $_SERVER['REMOTE_ADDR'];

$subject="Email from Shop";
$email = "support@ropclub.com" ;
$mailto=$email;
$mailfrom = "www.ropclub.com : ";
$http_referrer = getenv( "HTTP_REFERER" );
$messageproper = "Name : ".$visitor."<br><br>Email : ". $visitormail . "<br><br> Message : ". $notes ;

			$from= 'info@ropclub.com' ;
			$headers = "From: " . "ROC Shop Owner" . "<" . "$from" . ">\n";
			$headers .= "User-Agent: Mail/1.0.0\n";
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "X-Sender: <" . "$mailto" . ">\n";
			$headers .= "Return-Path: <" . "$mailto" . ">\n";
			$headers .= "Error-To: <" . "$mailto" . ">\n";
			$headers .= "Content-Type: text/html;charset=utf-8\n";
			$headers .= "Content-Transfer-Encoding: 8bit\n";
			$headers .= "X-Priority: 3 (Normal)\n";
			$headers .= "Importance: Normal\n";
			
if (!@mail($mailto, $subject, $messageproper,$headers)) {
	echo "<div class=\"error\">Have been some problems sending the email.</div>";
} else {
    echo "<div class=\"success\">The email has been sent successfully.</div>";
}
?>