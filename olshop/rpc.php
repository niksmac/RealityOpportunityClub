<?php 
include("../connect/olsession.php"); 
$queryString = $_POST['queryString'];
$qrtyh=mysql_query("select prod_name,prod_code  from ol_products where prod_code like '%$queryString%' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$prod_name =$qraysjh['prod_name'];
$prod_code =$qraysjh['prod_code'];
echo '<li onClick="fill(\''.$prod_code.'\');">'.$prod_name.'</li>';
}
?>

