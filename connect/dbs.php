<?php 
if ($_SERVER['HTTP_HOST'] == '127.0.0.1')
{
$host="127.0.0.1";
$user="root";
$password="";
$database="roc08042011";
}
else {
$host="ropclub.com";
$user="rocman1147";
$password="mandm72";
$database="rop5latest";
}


ini_set("error_reporting", "false");  
//session_destroy();
//error_reporting(E_ALL|E_STRCT);  
?>