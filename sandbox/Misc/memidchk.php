<?php 
include("../connect/connect.php");



	$rtyry=mysql_query("select ParentID from childstatus  ");
	while($sdfrsf=mysql_fetch_array($rtyry))
		{ 
		$ParentID=$sdfrsf['ParentID'];
		
					$rtydry=mysql_query("select MemberID from members where MemberID='$ParentID' ");
					while($sdfrsdsf=mysql_fetch_array($rtydry))
					{ 
					$MemberID=$sdfrsdsf['MemberID'];
					if ($ParentID == $MemberID)  echo $ParentID.' => '.$MemberID.'<br>'; else echo "Error";
					}
		
		
		}
		
		
		
?>