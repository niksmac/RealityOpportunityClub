<?php 
include("../connect/session.php"); 
$newbv=$_POST['newbv'];
mysql_query("update ol_bv set bv_val=bv_val+'$newbv' ");
header("Location:"."bvol.php");
?>