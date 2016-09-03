<?php 
include("sessioncode.php"); 
$cid=$_GET['cid'];

if ($cid == "")
{
echo "";
exit();
}

else 
{
$sp_res = mysql_query(" select Name from members where MemberID='$cid' ");
$dfgsdfg=mysql_num_rows($sp_res);
if ($dfgsdfg != 0)
{
while($sfetch=mysql_fetch_array($sp_res))
{
$Name=$sfetch['Name'];
}
echo "<img src='images/icn_Tick.gif' />".$Name;
}
else 
{
echo "<b><font color=red>Invailid ID</font></b>";	
}
}
?>