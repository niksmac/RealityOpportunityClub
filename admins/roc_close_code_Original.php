<?php 
include("../connect/session.php");

date_default_timezone_set('Asia/Calcutta');
//$today = date('l jS \of F Y h:i:s A');

 $today = date('Y-m-d');

	$q = "select MAX(close_no) from closings";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$next_close_no=$data[0]+1;

mysql_query("insert into closings (close_no,close_date) values ('$next_close_no',curdate())");


$qryh=mysql_query("select MemberID from members  ");
while($qrysh=mysql_fetch_array($qryh))
{
 $MemberID=$qrysh['MemberID'];

if (mysql_num_rows(mysql_query("select mmbr_id from closings_last where mmbr_id='$MemberID'")) == 0)
mysql_query ("insert into closings_last (mmbr_id) values ('$MemberID')");

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

//$tot = $ref_income + $roy_income + $pur_income + $real_royalty + $real_volume_royalty + $real_bonus + $real_turnover;

$tot = $ref_income + $roy_income ;
if ($tot > 2500 )
$tds_val =  $tot * (10 / 100); 
else 
$tds_val = 0;

$ser_charge =  $tot * (5 / 100);

$net_payable = $tot - ($tds_val + $ser_charge);


// --------------  Updates --------

mysql_query ("insert into closings_full (mmbr_id,close_no,ref_income,roy_income,pur_income,real_royalty,real_volume_royalty,real_bonus,real_turnover,tds_val,ser_charge,net_payable) values ('$MemberID', '$next_close_no', '$ref_income', '$roy_income', '$pur_income', '$real_royalty', '$real_volume_royalty', '$real_bonus', '$real_turnover', '$tds_val', '$ser_charge', '$net_payable') ");

mysql_query ("update closings_last set ref_income = '$ref_income', roy_income = '$roy_income', pur_income = '$pur_income', real_royalty = '$real_royalty',real_volume_royalty  = '$real_volume_royalty ',real_bonus  = '$real_bonus ',real_turnover  = '$real_turnover ',tds_val  = '$tds_val ',ser_charge  = '$ser_charge ', net_payable  = '$net_payable ' where mmbr_id='$MemberID' ");

//break;
}
header("Location:"."roc-closings.php?done");

?>