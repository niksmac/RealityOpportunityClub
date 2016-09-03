<?php 
include("session.php");
include('../connect/connect.php');

$close_no = 3;

$dfdgfgs=mysql_query("select MemberID  from members  ");
while($sdfsxdccdfa=mysql_fetch_array($dfdgfgs))
{
$MemberID=$sdfsxdccdfa['MemberID'];

			$dfdgfkkgs=mysql_query("select SelfBV  from pilastclosing where MemberID='$MemberID' and CloseNo = '$close_no'  ");
			while($sdfsppfa=mysql_fetch_array($dfdgfkkgs))
			{
			$SelfBV=$sdfsppfa['SelfBV'];
			}

$nrbv = $SelfBV * (7 / 100);

mysql_query("update acc_stmnt_final set self_rbv =  '$nrbv' where mem_id = '$MemberID' and close_no = '$close_no' ");
			
}


?>