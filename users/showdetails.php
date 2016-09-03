<link href="../css/user.css" rel="stylesheet" type="text/css" />
<?php 
include("../connect/session.php"); 
$cid=$_GET['cid'];
$sp_res = mysql_query(" select Name from members where MemberID='$cid' ");
$dfgsdfg=mysql_num_rows($sp_res);
if ($dfgsdfg != 0)
{
while($sfetch=mysql_fetch_array($sp_res))
{
$Name=$sfetch['Name'];
}
echo "<div class='ajaxmsgyes' > <div>";
echo "<b><font color=green>Valid ID</font></b> <br><br>";
echo "Name    : ".$Name;echo "<br>";
echo "</div></div>";
}

else 
{
 	echo "<div class='ajaxmsgno' > <div><b><font color=red>Invailid ID</font></b></div></div>";	
	//echo "<img src='images/invalid.png' width='48' height='48' border='0' />"
}
?>