<?php 
include("../connect/olsuppsession.php");
$bilno = $_GET['bno'];
$courdetails = $_POST['courdetails'];
mysql_query (" update ol_bills set ord_stat=2,cour_det='$courdetails' where billno = '$bilno' ");
?>
<script type="text/javascript" language="javascript">
alert ('Success');
window.close();
</script>