<?php 
include("../connect/connect.php");

mysql_query ("truncate table memberbv");

$query = "SELECT  MemberID FROM members "; 	 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
$memid = $row['MemberID'];

		$quettry = "SELECT  SUM(bv) FROM bvthruweb where  memid='$memid' "; 	 
		$ressult = mysql_query($quettry) or die(mysql_error());
		while($rowdd = mysql_fetch_array($ressult))
		{
			$sum_bv = $rowdd['SUM(bv)'];		
		}
		
		//echo "1&nbsp;$sum_bv<br>";
	
mysql_query ("insert into memberbv (memberid, bv) values ('$memid', '$sum_bv') ");		
		
}

//echo "Done";

?>