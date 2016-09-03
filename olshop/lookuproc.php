<?php 
include("../connect/olsession.php"); 
$MemberID = $_POST['queryString'];
$qrtyh=mysql_query("select Name,MemberID  from members where Name like '%$MemberID%' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$MemberID = $qraysjh['MemberID'];
$Name = $qraysjh['Name'];
echo '<li onClick="fillroc(\''.$Name.'\');">'.$MemberID.'</li>';
}
?>

