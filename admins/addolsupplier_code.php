<?php 
include("../connect/session.php"); 


$suppid=$_POST['suppid'];
$passswd=$_POST['passswd'];
$name=$_POST['name'];
$address=$_POST['address'];

mysql_query("insert into olsupplier (suppl_id, Name, Address, passwd ) values ('$suppid', '$name', '$address','$passswd')");


if (strlen ($phone) == 10)
{
//$meses = "Hi $ownername, Your Shop has been registered with  Reality Opportunity Club. Shop ID : $store_id Password : $store_id. Visit www.ropclub.com/shop. ";
$messages = urlencode($meses);
//file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsmsnew1&sender=ROC&to=$phone&message=$messages");
}


header("Location:"."viewolsupplier.php?olp");
?>