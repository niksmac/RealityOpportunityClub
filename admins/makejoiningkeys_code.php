<?php 
include("../connect/session.php"); 

$howm=$_POST['howm'];
$forwhom=$_POST['forwhom'];

function make_seed() {
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}

for ($j=1; $j<=$howm ;$j++)
{
$password_length = 6;
srand(make_seed());
$alfa = "234LZXC589qwertUPASyupasdfghjkzx67cvbnmQWERTYDFGHJKVBNM";
$token = "";
for($i = 0; $i < $password_length; $i ++) {
  $token .= $alfa[rand(0, strlen($alfa))];
}    

mysql_query("insert into joinig_keys (joinkey, forwhom,gendate, usedby, stat) values ('$token', '$forwhom',curdate(),'Never Used', 0)");

}




header("Location:"."joiningkeys.php?msc&n=$howm&s");
?>