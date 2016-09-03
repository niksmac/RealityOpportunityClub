<?php 
include("session.php");
include('../connect/connect.php');

$jfsddffdj=mysql_query("select MemberID,ActStatus from members ");
while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
{
$mmbr_id=$ssddtfsdfga['MemberID'];
$act_status =$ssddtfsdfga['ActStatus'];

$close_no = 3;
$precloseno = $close_no - 1 ;



$dfdgfgs=mysql_query("select SelfBV,AsideBV,BsideBV,SelfPI, AsidePI, BsidePI, TotalBVTillLastClosing, REFBV, percetagePossition, SelfBV  from pilastclosing where MemberID='$mmbr_id' and CloseNo = '$close_no'  ");
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
$REFBV=$sdfsxccdfa['REFBV'];
}

$nrbv = $SelfBV * (7 / 100);

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
while($tdyisdyui=mysql_fetch_array($ssdgsdfs)) {
$primaryid =$tdyisdyui['primaryid'];

		$ssdgsfs=mysql_query("select amt from primaryacc where pid='$primaryid' ");
		while($tyisdyui=mysql_fetch_array($ssdgsfs)) {
		$primaryincomee = $tyisdyui['amt'];
		}
$primryncme += $primaryincomee;		
}

$grossincome = $ref_income + $roy_income + $TotalBVTillLastClosing + $primryncme + $REFBV + $amt_ball + $nrbv;

  if ($grossincome >= 2500) {
  $tds = $grossincome * (10/100);
  $serchrg = $grossincome * (5/100);
  }
  else { 
  $tds = 0;
  $serchrg = $grossincome * (5/100);
  }
  
  $netpay = $grossincome - $totded;
  
  
  if ($act_status == 1 ) {
  $netpayy = $netpay;
  $othrded = 0;
  }
  else  {
  $netpayy = $netpay / 2;
  $othrded = $netpayy;
  }
  $totded = $tds + $serchrg + $othrded;
  $netpaybl = $grossincome - $totded;







mysql_query("INSERT INTO  acc_stmnt_final (close_no ,mem_id ,ref_inc ,roy_inc ,pur_inc ,plb_inc ,carry_lc ,gross_inc ,tds ,ser_chg ,othrs ,tot_ded ,net_pay, ref_bv_inc, self_rbv)VALUES ( '$close_no',  '$mmbr_id',  '$ref_income',  '$roy_income',  '$TotalBVTillLastClosing',  '$primryncme',  0,  '$grossincome',  '$tds',  '$serchrg',  '$othrded',  '$totded',  '$netpaybl',  '$REFBV', '$nrbv') ");

$ref_income = 0; $roy_income = 0; $TotalBVTillLastClosing = 0; $primryncme = 0; $grossincome = 0; $tds = 0; $serchrg = 0; $othrded = 0; $totded = 0;  $netpaybl = 0; $grossincome = 0; 
$netpay = 0; $grossincome = 0; $netpayy = 0; $primryncme = 0;$REFBV = 0; $amt_ball = 0; $othrded = 0; $netpayy = 0;$netpay = 0;


}
?>