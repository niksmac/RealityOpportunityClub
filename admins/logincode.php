<?php
session_start();


$key=substr($_SESSION['key'],0,5);
$number = $_POST['number'];
if ($key == $number) 
{

include ('../connect/connect.php');

$con = mysql_connect($host,$user,$password);
mysql_select_db($database,$con ) or die('could not connect to the database');

$_SESSION['user']=$_POST['txtuname'];

$uname=$_POST['txtuname'];
$pwdd=$_POST['txtpwd'];

$pwd = md5($pwdd);

$string = ereg_replace("'", "", $pwd);



$qry=mysql_query("select count(*) from admin where uname='$uname' and pwd='$string'");
$fary=mysql_fetch_array($qry);
if($fary[0]==1)
{
$_SESSION['login']=1;
$_SESSION['adminlogin']=$uname;
header('Location:'."indexhome.php");
}
else

{
$_SESSION['login']=0;
header('Location:'."index.php?noLogin=1");
}
}

else 
{
$_SESSION['login']=0;
header('Location:'."index.php?cer=1");

}

?>