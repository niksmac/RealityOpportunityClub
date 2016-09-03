<?php 
include("session.php");
include('../connect/connect.php');

$close_no = 5;
$roy_income = 0;
$jfsddffdj=mysql_query("select MemberID,ActStatus from members ");
while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
{
$mmbr_id=$ssddtfsdfga['MemberID'];
$act_status =$ssddtfsdfga['ActStatus'];


$query = "SELECT  SUM(credits) FROM memberaccdetail where  MemberId='$mmbr_id' and descriptn = 'Ref. Inc' and dates >= '2011-02-26'  "; 	 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
$ref_income = $row['SUM(credits)'];
}



$querhhy = "SELECT  paid_stat,gross_inc FROM acc_stmnt_final where  mem_id='$mmbr_id' and close_no = 4 "; 	 
$resuslt = mysql_query($querhhy) or die(mysql_error());
while($rfow = mysql_fetch_array($resuslt))
{
$paid_stat = $rfow['paid_stat'];
$pre_gross_inc = $rfow['gross_inc'];
}

if ($paid_stat == 1 )
$carry_lc = 0;
else 
$carry_lc = $pre_gross_inc;


$dfdgfgs=mysql_query("select *  from closingpicalcs where mmbr_id='$mmbr_id'   ");
while($sdfsxccdfa=mysql_fetch_array($dfdgfgs))
{
$ref_bv_inc=$sdfsxccdfa['tot_refbv_inc'];
$totalpi=$sdfsxccdfa['totalpi'];
$s_bv_cm=$sdfsxccdfa['s_bv_cm'];
}

$grossincome = $totalpi + $ref_bv_inc + $ref_income + $carry_lc;

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
  $netpayblf = $grossincome - $totded;

$netpaybl = round($netpayblf,2);

mysql_query("INSERT INTO  acc_stmnt_final (close_no ,mem_id ,ref_inc ,roy_inc ,pur_inc ,plb_inc ,carry_lc ,gross_inc ,tds ,ser_chg ,othrs ,tot_ded ,net_pay, ref_bv_inc, self_rbv)VALUES ( '$close_no',  '$mmbr_id',  '$ref_income',  '$roy_income',  '$totalpi',  '$primryncme',  '$carry_lc',  '$grossincome',  '$tds',  '$serchrg',  '$othrded',  '$totded',  '$netpaybl', '$ref_bv_inc', '$s_bv_cm') ");

$ref_income = 0; $roy_income = 0; $TotalBVTillLastClosing = 0; $primryncme = 0; $grossincome = 0; $tds = 0; $serchrg = 0; $othrded = 0; $totded = 0;  $netpaybl = 0; $grossincome = 0; 
$netpay = 0; $grossincome = 0; $netpayy = 0; $primryncme = 0;$REFBV = 0; $amt_ball = 0; $othrded = 0; $netpayy = 0;$netpay = 0;$pre_gross_inc = 0;


}


?>