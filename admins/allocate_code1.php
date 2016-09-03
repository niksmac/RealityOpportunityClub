<?php 
include("../connect/session.php"); 
$MemberID = $_GET['id'];
$Name=$_POST['name']; 
$Phone=$_POST['Phone'];
$ECNo=$_POST['ECNo'];
$PanNo=$_POST['PanNo'];
$Mobile=$_POST['Mobile'];
$Phone=$_POST['Phone'];

mysql_query("update  members set Name='$Name', Phone='$Phone', ECNo='$ECNo', PanNo='$PanNo', Mobile='$Mobile' where MemberID='$MemberID' ");
?>

<script type="text/javascript" language="javascript">
alert ('Success');
window.close();
</script>