<?php 
include("session.php");
include("../connect/connect.php");


@mysql_query (" truncate table  `bvafterclose` ");	

$rtydry=mysql_query("select MemberID from members  ");
while($sdfrsdsf=mysql_fetch_array($rtydry))
{ 
$memid=$sdfrsdsf['MemberID'];

	$rtyry=mysql_query("select sum(bv) from bvthruweb where memid = '$memid'   ");
	while($sdfrsf=mysql_fetch_array($rtyry))
	{ 
	$sumbv=$sdfrsf['sum(bv)'];
	}
	if ($sumbv == '') $sumbv = 0;	
	
	
	$rtkdyry=mysql_query("select bv from memberbv where memberid = '$memid'   ");
	while($sdfrsgggf=mysql_fetch_array($rtkdyry))
	{ 
	$prebv=$sdfrsgggf['bv'];
	}
	if ($prebv == '') $prebv = 0;	
	$curbv = $sumbv - $prebv;
	$rounded = round($curbv, 2); 
	
if ($rounded != 0)	
mysql_query (" insert into bvafterclose (memberid, bv) values ('$memid', '$rounded' ) ");	

$curbv == 0;
$sumbv == 0;
$prebv == 0;
$rounded == 0;

}
		
		
?>