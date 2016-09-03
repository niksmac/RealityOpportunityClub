<?php 
include("sessioncode.php");

$shopid = $_SESSION['shplogin'];

for ($i=1;$i<=5;$i++)
{
$rocid = $_POST['rocid'.$i];
if ( ! isValidId ($rocid))

header('Location:'."bvbilling.php?err");
}

$bvremaing = $_POST['bvremaing'];
for ($i=1;$i<=5;$i++)
{
$rocid = $_POST['rocid'.$i];
$bv = $_POST['bv'.$i];
if ($rocid != "")
{
mysql_query ("insert into bvthruweb (shopid, memid, bv, datentim) values ('$shopid', '$rocid', '$bv', NOW() )");
mysql_query("update   stor_credit_sum set crval = '$bvremaing' where stor_id = '$shopid' ");
}
$rocid = "";
}


function isValidId ($memid)
{
$sp_res = mysql_query("select MemberID from members where MemberID='$memid' ");
$noss = mysql_num_rows ($sp_res);
if ($noss == 0)
return false;
else
return true;
}

header('Location:'."bvbilling.php?s");
//header('Location:'."confirmbilling.php");

?>