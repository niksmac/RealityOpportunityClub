<?php 
//$host = "117.206.46.146";
//$user = "nikfrm$local1";
//$password = "nik@110006";
//$database = "rop5latest";
if ($_SERVER['HTTP_HOST'] == '127.0.0.1')
{
$opts['hn'] = 'localhost';
$opts['un'] = 'root';
$opts['pw'] = '';
$opts['db'] = 'roc-forclosing';
}
else {
$host="ropclub.com";
$user="rocman1147";
$password="mandm72";
$database="rop5latest";

$opts['hn'] = 'ropclub.com';
$opts['un'] = 'rocman1147';
$opts['pw'] = 'mandm72';
$opts['db'] = 'rop5latest';
}

//session_destroy();

?>