<?php 
include("../connect/session.php"); 
ini_set("precision", "2");

$close_no=3;
$precloseno = $close_no - 1 ;

$slno=1;
$jfj=mysql_query("select MemberID,Name,Address,District, Pin,ActStatus from members where MemberID in (10009,10010,10101,10012,10014,10250,10569,10590,10007,11136,11137,10251,10005,10020,10605,10903,10157,10145,10377,10166,10586,10104,10328,)");
while($sdfmsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfmsdfa['MemberID'];
$nameofcust=$sdfmsdfa['Name'];
$Address=$sdfmsdfa['Address'];
$District=$sdfmsdfa['District'];
$Pin=$sdfmsdfa['Pin'];
$ActStatus=$sdfmsdfa['ActStatus'];

$dfdgfgs=mysql_query("select *  from pilastclosing where MemberID='$mmbr_id' and CloseNo = '$close_no'  ");
while($sdfsxccdfa=mysql_fetch_array($dfdgfgs))
{
$SelfBV=$sdfsxccdfa['SelfBV'];
$AsideBV=$sdfsxccdfa['AsideBV'];
$BsideBV=$sdfsxccdfa['BsideBV'];
$SelfPI=$sdfsxccdfa['SelfPI'];
$AsidePI=$sdfsxccdfa['AsidePI'];
$BsidePI=$sdfsxccdfa['BsidePI'];
$TotalBVTillLastClosing=$sdfsxccdfa['TotalBVTillLastClosing'];
$percetagePossition=$sdfsxccdfa['percetagePossition'];
$Asidepercetage=$sdfsxccdfa['Asidepercetage'];
$bsidePercentage=$sdfsxccdfa['bsidePercentage'];
}


$dfdgfgs=mysql_query("select totrefbv  from accstmntnikamts  where memid='$mmbr_id'  ");
while($sdfsxccdfa=mysql_fetch_array($dfdgfgs))
{
$REFBV=$sdfsxccdfa['totrefbv'];
}


$qrsyh=mysql_query("select amt_bal from paymenthistory  where mmbr_id = '$mmbr_id'  ");
while($qryssdsh=mysql_fetch_array($qrsyh))
{
$amt_ball +=$qryssdsh['amt_bal'];
}

$qryh=mysql_query("select ref_income,roy_income from closings_last where mmbr_id = '$mmbr_id' ");
while($qrysh=mysql_fetch_array($qryh))
{
$ref_income=$qrysh['ref_income'];
$roy_income=$qrysh['roy_income'];
}

$ssdgsdfs=mysql_query("select primaryid from primarytree where memid='$mmbr_id' ");
while($tdyisdyui=mysql_fetch_array($ssdgsdfs))
{
$primaryid =$tdyisdyui['primaryid'];

		$ssdgsfs=mysql_query("select amt from primaryacc where pid='$primaryid' ");
		while($tyisdyui=mysql_fetch_array($ssdgsfs))
		{
		$primaryincomee = $tyisdyui['amt'];
		}
$primryncme += $primaryincomee;		
}

$grossincome = $ref_income + $roy_income + $TotalBVTillLastClosing + $primryncme + $REFBV + $amt_ball; 

	if ($grossincome >= 2500) {
		$tds = $grossincome * (10/100);
		$serchrg = $grossincome * (5/100);
	}
	else { 
		$tds = 0;
		$serchrg = $grossincome * (5/100);
	}
	
	if ($ActStatus == 1 ) {
		$othrded = 0;
		$totded = $tds + $serchrg + $othrded;
		$netpayout = $grossincome - $totded;
		
	}
	else if ($ActStatus == 0 ) {
		$othrded = $grossincome / 2;
		$totded = $tds + $serchrg + $othrded;
		$netpayout = $grossincome - $totded;
	}

mysql_query ("INSERT INTO  `accstmntnikhil` (`MemId` ,`Name` ,`ActSts` ,`ColeNo` ,`SelfBV` ,`AsideBV` ,`BsideBV` ,`percetagePossition` ,`Asidepercetage` ,`bsidePercentage` ,`SelfPI` ,`AsidePI` ,`BsidePI` ,`TotalBVTillLastClosing` ,`REFBV` ,`grossinc` ,`tds` ,`serchrg` ,`othrs` ,`carryfwd` ,`netincome`, plbinc) VALUES ('$mmbr_id',  '$nameofcust', '$ActStatus', '$close_no',  '$SelfBV',  '$AsideBV',  '$BsideBV',  '$percetagePossition',  '$Asidepercetage',  '$bsidePercentage',  '$SelfPI',  '$AsidePI',  '$BsidePI',  '$TotalBVTillLastClosing',  '$REFBV',  '$grossincome',  '$tds',  '$serchrg',  '$othrded',  '$amt_ball',  '$netpayout', '$primryncme' );");


$slno ++;
$mmbr_id ='$nbsp';
$Address ='$nbsp';
$nameofcust = '$nbsp';
$SelfBV = 0;
$BsideBV = 0;
$AsideBV = 0;
$ref_income = 0;
$roy_income = 0;
$TotalBVTillLastClosing = 0;
$REFBV = 0;
$primryncme = 0;
$primaryincomee = 0;
$amt_ball = 0;
$tds = 0;
$serchrg = 0;
$othrded = 0;
$netpaybl = 0;
$netpayout = 0;
$grossincome = 0;
$totded = 0;
$ActStatus = '';

} 
?>
