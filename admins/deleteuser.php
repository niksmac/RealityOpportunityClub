<?php
session_start();
$login=$_SESSION['login'];
include("../connect/session.php");
mysql_connect("$localhost","$user","$password");
mysql_select_db("$database") or die("could not connect to the database");
$id=$_GET['id'];
mysql_query("delete from members where MemberID='$id'");
?>
<script type="text/javascript">
alert ("User Deleted");
window.location = "activatemembers.php"
</script>
