<?php 
session_start();
include("../connect/connect.php");

//$today = date('l jS \of F Y h:i:s A');

 $today = date('Y-m-d');

	$q = "select MAX(close_no) from closings";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$next_close_no=$data[0]+1;

//mysql_query("insert into closings (close_no,close_date) values ('$next_close_no',curdate())");


$qryh=mysql_query("select MemberID from members ");
while($qrysh=mysql_fetch_array($qryh))
{
$MemberID=$qrysh['MemberID'];

// --------------  Ref. Inc --------
$query = "SELECT  SUM(credits) FROM memberaccdetail where  MemberId='$MemberID' and descriptn = 'Ref. Inc' and dates > '2010-07-20'  "; 	 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
$ref_income = $row['SUM(credits)'];
}
// --------------  Royalty Hit --------
$querys = "SELECT  SUM(credits) FROM memberaccdetail where  MemberId='$MemberID' and descriptn = 'Royalty Hit' and dates > '2010-07-20' "; 	 
$results = mysql_query($querys) or die(mysql_error());
while($rows = mysql_fetch_array($results))
{
$roy_income = $rows['SUM(credits)'];
}



rightBvSum($MemberID);
leftBvSum($MemberID);
$purchaseinc = calculatePI($MemberID);

//mysql_query ("INSERT INTO  closings_values (close_no ,mem_id ,ref_inc ,roy_inc ,pur_inc ,plb_inc ,refbv_inc ,real_roy_inc ,real_vol_roy ,real_bonus ,real_tunovr ,carryfwd ,gross_inc)VALUES (  '$next_close_no',  '$MemberID',  '$ref_income',  '$roy_income',  '',  '',  '',  '',  '',  '',  '',  '',  '')");
break;
}


########################
function calculatePI($MemberID)
{
	$selfbv = selfbvsum($MemberID);
	$mySelfbv = getPIperVal($selfbv);
	$Asidebv = getPIperVal($_SESSION['bvl']);
	$Bsidebv = getPIperVal($_SESSION['bvr']);
	

}


function getPIperVal($bvval)
{
	if ($bvval <= 1500) {
	$bvval = $bvval * (5/100)
	}
	else if ( (($bvval > 1500)) && ($selfbv <= 3000) )  {
	$bvval = $bvval * (7/100)
	}
	else if ( (($bvval > 3000)) && ($selfbv <= 6000) )  {
	$bvval = $bvval * (10/100)
	}
	else if ( (($bvval > 6000)) && ($selfbv <= 12000) )  {
	$bvval = $bvval * (13/100)
	}
	else if ( (($bvval > 12000)) && ($selfbv <= 25000) )  {
	$bvval = $bvval * (15/100)
	}
	else if ( (($bvval > 25000)) && ($selfbv <= 50000) )  {
	$bvval = $bvval * (17/100)
	}
	else if ( (($bvval > 50000)) && ($selfbv <= 100000) )  {
	$bvval = $bvval * (19/100)
	}
	else if ( (($bvval > 100000)) && ($selfbv <= 200000) )  {
	$bvval = $bvval * (21/100)
	}
	else if ( (($bvval > 200000)) && ($selfbv <= 300000) )  {
	$bvval = $bvval * (23/100)
	}
	else if ( (($bvval > 300000)) && ($selfbv <= 400000) )  {
	$bvval = $bvval * (25/100)
	}
	
	return $bvval;
}


function selfbvsum($MemberID)
{
		$querys = "SELECT  SUM(bv) FROM bvthruweb where  MemberIdmemid'$MemberID' "; 	 
		$results = mysql_query($querys) or die(mysql_error());
		while($rows = mysql_fetch_array($results))
		{
		$selfbv = $rows['SUM(bv)'];
		}
		return $selfbv;
}
##################
function rightBvSum($rocuname)
{
$_SESSION['bvr'] = 0;
$qwerty=mysql_query("select RChildID from childstatus where ParentID='$rocuname' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$RChildID=$huibc['RChildID'];
}
mychilds($RChildID);
showme($RChildID);
}


function showme($usrid)
{
$fgh=mysql_query("select bv from bvafterclose where memberid='$usrid' ");
while($tyuty=mysql_fetch_array($fgh)) { 
$lastbvv = $tyuty['bv'];}
$mybvsum = $lastbvv + 0; 
totalSideBv($mybvsum);
}

function totalSideBv($bv)
{
$_SESSION['bvr'] += $bv;
}

function mychilds($uname)
{
	
$qwerty=mysql_query("select LChildID,RChildID from childstatus where ParentID='$uname' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$LChildID=$huibc['LChildID'];
$RChildID=$huibc['RChildID'];

if ($LChildID != 0){
mychilds($LChildID);
showme($LChildID);
}

if ($RChildID != 0){
mychilds($RChildID);
showme($RChildID);
}
}

}

################

function leftBvSum($rocuname)
{
$_SESSION['bvl'] = 0;

$qwerty=mysql_query("select LChildID from childstatus where ParentID='$rocuname' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$LChildID=$huibc['LChildID'];
}
mychildss($LChildID);
showmee($LChildID);
}


function showmee($usrid)
{
$fgh=mysql_query("select bv from bvafterclose where memberid='$usrid' ");
while($tyuty=mysql_fetch_array($fgh)) { 
$lastbvv = $tyuty['bv'];
}
$mybvsumm = $lastbvv + 0; 
totalSideBvv($mybvsumm);
}

function totalSideBvv($bv)
{
$_SESSION['bvl'] += $bv;
}


function mychildss($uname)
{
	
$qwerty=mysql_query("select LChildID,RChildID from childstatus where ParentID='$uname' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$LChildID=$huibc['LChildID'];
$RChildID=$huibc['RChildID'];

if ($LChildID != 0){
mychildss($LChildID);
showmee($LChildID);
}

if ($RChildID != 0){
mychildss($RChildID);
showmee($RChildID);
}
}

}
##############


?>