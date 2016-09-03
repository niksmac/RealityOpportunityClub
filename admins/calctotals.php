<?php 
include("../connect/session.php");
$tyu=$_GET['tyu'];
$khjgh=$_GET['khjgh'];
$mytaxs=$_GET['mytaxs'];
$loopvar=$_GET['loopvar'];
echo $ln_tot = ($tyu * $khjgh);
?>
<input type="hidden" name="linetotal<?php echo $loopvar; ?>" id="linetotal<?php echo $loopvar; ?>" value="<?php echo $ln_tot; ?>" />
