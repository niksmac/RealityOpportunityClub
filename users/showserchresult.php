<?php 
include ("../connect/session.php");
$gid = $_GET['gid'];

if ($_SESSION['srlog'] != 1)
{
?>
<link href="../css/user.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style4 {color: #CCCCCC}
-->
</style>
<div class="errorinfodiv">Authentication Failed</div>

<?php

exit(); 
}

?>
<link href="ropclub.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #ECE9D8; font-weight: bold; }
-->
</style>


<?php 

$jfj=mysql_query("select MemberID,Name,Address from members where MemberID='$gid' or Name like '%$gid%' or Address like '%$gid%'");

$wrew = mysql_num_rows ($jfj);
if ($wrew >= 1)
{

?>
<table width="90%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#339900"  style="border-collapse:collapse; margin-bottom:200px;">
  <tr>
    <td width="55" bgcolor="#009933" ><h2 class="style4">Sl No</h2></td>
    <td width="170" bgcolor="#009933" ><h2 class="style4">Member ID</h2></td>
    <td width="625" bgcolor="#009933" ><h2 class="style4">Name</h2></td>
    <td width="213" bgcolor="#009933" ><h2 class="style4">Mobile</h2></td>
    <td width="289" bgcolor="#009933" ><h2 class="style4">Address</h2></td>
  </tr>
  <?php 
  $nos = 1;
$jfj=mysql_query("select MemberID,Name,Address,Mobile from members where MemberID='$gid' or Name like '%$gid%' or Address like '%$gid%'");

$wrew = mysql_num_rows ($jfj);
while($sdfsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfsdfa['MemberID'];
$Name=$sdfsdfa['Name'];
$Address=$sdfsdfa['Address'];
$Mobile=$sdfsdfa['Mobile'];
?>
  <tr>
    <td><?php echo $nos; ?>&nbsp;</td>
    <td><?php echo $mmbr_id; ?></td>
    <td><?php echo $Name; ?></td>
    <td><?php echo $Mobile; ?></td>
    <td><?php echo $Address; ?></td>
  </tr>
  <?php  $nos++; } ?>
</table>


<?php  }
else 
{
?>
<div class="errorinfodiv">Sorry No Matching Data Found !!!</div>
<?php } ?>