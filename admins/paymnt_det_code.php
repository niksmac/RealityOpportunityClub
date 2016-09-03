<?php 
include("../connect/session.php");
$id=$_GET['id'];

	$result = mysql_query("select MAX(close_no) from closings");
	$data = mysql_fetch_array($result);
	$l_close_no=$data[0];
	
$qryh=mysql_query("select close_date from closings where close_no='$l_close_no'");
while($qrysh=mysql_fetch_array($qryh))
{
$close_date=$qrysh['close_date'];
}

$mmbr_id=$_POST['mid'.$id];
$actamt=$_POST['actamt'.$id];
$chkno=$_POST['chkno'];
$amt=$_POST['amt'.$id];

$bal = $actamt - $amt;

if ($bal >= 0)
{
mysql_query("insert into paymenthistory (mmbr_id, close_no, chk_no, issue_date, amt_isued, amt_bal) values ('$mmbr_id', '$l_close_no', '$chkno', curdate(), '$amt', '$bal') ");
?>
<script type="text/javascript" language="javascript">
history.go(-1);
</script>
<?php
//header("Location:"."paymenthistory.php?acc&yes");
}
else
 header("Location:"."paymenthistory.php?acc&no");

?>