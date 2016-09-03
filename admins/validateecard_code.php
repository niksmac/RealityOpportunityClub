<?php 
include("../connect/session.php"); 

$memid = $_POST['memid'];

$ecno = $_POST['ecno'];
$PanNo = $_POST['panno'];
$mob = $_POST['mob'];

$dgds = mysql_query ("select id from proofvalidation where memid ='$memid' ");

if (mysql_num_rows ($dgds) == 0 )
mysql_query ("insert into proofvalidation (memid, ecard, pancard, mobile) values ('$memid', '$ecno', '$PanNo', '$mob') ");
else
mysql_query ("update  proofvalidation   set ecard='$ecno', pancard='$PanNo', mobile='$mob'  where memid ='$memid' ");
?>
<script type="text/javascript" language="javascript">
history.go(-1);
</script>