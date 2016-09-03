<?php 
include("../connect/session.php");

$store=$_POST['store'];
$bvs=$_POST['bvs'];
$reasons=$_POST['reasons'];
$ACT=$_POST['ACT'];

$qry=mysql_query("select * from directbv where storename='$store' ");
$chk=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$bvold=$qrys['bvs'];
}
if ($ACT=="A") 
{
$bvnew=$bvold + $bvs; 
}
else if ($ACT=="S") 
{
if($bvold > $bvs)
$bvsnew=$bvold-$bvs;
else if($bvold < $bvs)
$bvsnew=$bvs-$bvold;
else if($bvs == $bvold)
$bvsnew=0;
}
if ($chk==0)
{
mysql_query("insert into directbv (storename,bvs,reasons) values('$store','$bvs','$reasons')");
}
else if($chk==1)
{
$reasons=$_POST['reasons'];
mysql_query("update directbv set bvs='$bvsnew',reasons='$reasons' where storename='$store'");
}
header("Location:"."issuebv.php?isu=1&yes");
?>