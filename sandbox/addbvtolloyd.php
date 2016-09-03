<?php 
include("session.php");
include("../connect/connect.php");


mysql_query (" truncate table  `bvafterclose` ");	

$rtydry=mysql_query("select MemberID from members  ");
while($sdfrsdsf=mysql_fetch_array($rtydry))
{ 
$memid=$sdfrsdsf['MemberID'];

	$rtyry=mysql_query("select sum(BV) from bvthruweb where memid = '$memid'   ");
	while($sdfrsf=mysql_fetch_array($rtyry))
	{ 
	$sumbv=$sdfrsf['sum(BV)'];
	}
	
	$rtkdyry=mysql_query("select bv from memberbv where memberid = '$memid'   ");
	while($sdfrsgggf=mysql_fetch_array($rtkdyry))
	{ 
	$prebv=$sdfrsgggf['bv'];
	}
	
	$curbv = $sumbv - $prebv;
	
mysql_query (" insert into bvafterclose (memberid, bv) values ('$memid', '$curbv' ) ");	

$curbv = 0;
$sumbv = 0;
$prebv = 0;
}
		
		
?>