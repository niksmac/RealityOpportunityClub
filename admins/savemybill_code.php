<?php 
include("../connect/session.php");
$cstname=$_POST['cstname'];
$nametoprint=$_POST['nametoprint'];
$address=$_POST['address'];
$email=$_POST['email'];
$invoicenos=$_POST['invoicenos'];
$billdate=$_POST['billdate'];
$ordernos=$_POST['ordernos'];
$nik=$_POST['nik'];

mysql_query("insert into bills(billno,displayname,billdate,storeid) values ('$invoicenos','$nametoprint','$billdate','$cstname')");

for($i=1; $i<=$nik; $i++)
{
$prdct_id=$_POST['prdct_id'].$i;
$qtys=$_POST['qtys'].$i;
$itmname=$_POST['itmname'].$i;
//$itm_btch=$_POST['itm_btch'].$i;
//$itm_unitprice=$_POST['itm_unitprice'].$i;
//$itm_txrate=$_POST['itm_txrate'].$i;
//$itm_val=$_POST['itm_val'].$i;
//$itm_txamt=$_POST['itm_txamt'].$i;
//$itm_bv=$_POST['itm_bv'].$i;
$lntotals=$_POST['lntotals'].$i;

$qryfh=mysql_query("select * from itemsnew where prdct_id='$prdct_id'");
while($qryshf=mysql_fetch_array($qryfh)){
$itemsname=$qryshf['itemsname'];
$batchno=$qryshf['batchno'];
$mrp=$qryshf['mrp'];
$taxrate=$qryshf['taxrate'];
$id=$qryshf['id'];
$bv=$qryshf['bv'];
$netbv=$bv*$numkk;
$retyty=$mrp*$numkk;
$divider=$taxrate+100;
$act_va=$mrp/$divider*100;
$tx_amt=$mrp-$act_va;
$fnval=$numkk*round($act_va,2);
$fntax=$numkk*round($tx_amt,2);
}
mysql_query("insert into bill_details (bilno, itemsname,batchno, taxrate, netbv, act_va,tx_amt) values ('$invoicenos','$itemsname',  '$batchno','$taxrate', '$netbv', '$fnval', '$fntax')");
}
header("Location:"."viewmybills.php");
?>