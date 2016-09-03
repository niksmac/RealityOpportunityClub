<?php 
include("../connect/session.php"); 
$strid = $_GET['stid'];
$crlimit = $_POST['cred_limit'];
mysql_query("update  stor_credit_sum set crlimit = '$crlimit' where stor_id = '$strid' ");
?>
<script type="text/javascript" language="javascript">
self.close ();
</script>