<?php 
include("database.php");
mysql_connect("$localhost","$user","$password");
mysql_select_db("$database") or die('could not connect to the database');
$uname=$_SESSION['adminlogin'];
$hjg=mysql_query("select * from  stores where store_id='$uname' ");
while($sdgfs=mysql_fetch_array($hjg))
{
$storename=$sdgfs['storename'];
$tinnumber=$sdgfs['tinnumber'];
$grade=$sdgfs['grade'];
}
?>