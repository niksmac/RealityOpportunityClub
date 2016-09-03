<?php 
include("../connect/session.php"); 
$storename=$_POST['storename'];
$ownername=$_POST['ownername'];
$adderss=$_POST['adderss'];
$pincode=$_POST['pincode'];
$phone=$_POST['phone'];
$st_grade=$_POST['st_grade'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
$panchayth=$_POST['panchayth'];
$location=$_POST['location'];
$tinnumber=$_POST['tinnumber'];

$MaxID = mysql_query("SELECT MAX(Id) FROM `olshops`");
$MaxID = mysql_fetch_array($MaxID, MYSQL_BOTH);
$str_id = $MaxID[0]+1;
$docr =(date("d-m-Y"));
$store_id=$_POST['store_id'];

mysql_query("insert into olshops (storename, ownername, address, pincode, phone, country,state,district, panchayth, location, store_id, tinnumber, grade,uname, pass,docr) values ('$storename', '$ownername', '$adderss','$pincode','$phone', '$country', '$state','$district', '$panchayth', '$location', '$store_id','$tinnumber', '$st_grade', '$store_id','$store_id','$docr')");


if (strlen ($phone) == 10)
{
$meses = "Hi $ownername, Your Shop has been registered with  Reality Opportunity Club. Shop ID : $store_id Password : $store_id. Visit www.ropclub.com/shop. ";
$messages = urlencode($meses);
//file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsmsnew1&sender=ROC&to=$phone&message=$messages");
}


header("Location:"."viewolshops.php?ol");
?>