<?php 
include("../connect/session.php");
$con=$_GET['content'];
?>
<?php if ($con!='in') { ?><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<input name="state" type="text" id="state" value="Nil -" />
<?php 
}
?>
<?php if ($con=='in')
{
 ?>
<select name="state">
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar and Jharkhand">Bihar and Jharkhand</option>
  <option value="Delhi &amp; NCR">Delhi &amp; NCR</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
  <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Madhya Pradesh &amp; Chhattisgarh">Madhya Pradesh &amp; Chhattisgarh</option>
  <option value="Maharashtra and Goa ">Maharashtra and Goa </option>
  <option value="Orissa">Orissa</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Tamil Nadu ">Tamil Nadu </option>
  <option value="UP">UP</option>
  <option value="West Bengal">West Bengal </option>
</select> 
<?php 
}
?>