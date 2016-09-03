<?php 
include("../connect/session.php"); 

$kipfund=$_POST['kipfund'];

$MaxID = mysql_query("SELECT id FROM  ol_kit_pur_det");
$tot_mem = mysql_num_rows($MaxID);

$thstime_amt = $kipfund / $tot_mem;

$qrtyh=mysql_query("select roc_id, max_inc, inc_acq from ol_kit_pur_det where stat = 0 ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$roc_id = $qraysjh['roc_id'];
$max_inc = $qraysjh['max_inc'];
$inc_acq = $qraysjh['inc_acq'];

$new_inc_acq = $inc_acq + $thstime_amt;
	
		if ($inc_acq <= $new_inc_acq)
		{
		mysql_query("insert into ol_kit_pur_acc (roc_id, amt, dates) values ('$roc_id', '$thstime_amt', curdate() )");
		mysql_query("update  ol_kit_pur_det set inc_acq=inc_acq+'$thstime_amt' where roc_id= '$roc_id'");
		}
		else 
		{
		$thstime_amt = $max_inc;
		mysql_query("insert into ol_kit_pur_acc (roc_id, amt, dates) values ('$roc_id', '$thstime_amt', curdate() )");
		mysql_query("update  ol_kit_pur_det set inc_acq=inc_acq+'$thstime_amt', stat = 1 where roc_id= '$roc_id'");
		}
		
$new_inc_acq = 0;
}


header("Location:"."kit_purchase_cla.php?kip&accc");
?>