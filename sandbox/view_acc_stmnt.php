<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-weight: bold; }
-->
</style>
<table width="60%" border="1" cellpadding="3" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse;">
  <tr>
    <td width="4%" bgcolor="#666666"><span class="style3">No.</span></td>
    <td width="16%" bgcolor="#666666"><span class="style3">ROC ID</span></td>
    <td width="42%" bgcolor="#666666"><span class="style3">Name </span></td>
    <td width="17%" bgcolor="#666666"><span class="style3">Address </span></td>
    <td width="21%" bgcolor="#666666"><span class="style3">Amount </span></td>
  </tr>

<?php 
include("session.php");
include('../connect/connect.php');

$no = 1;

$querhhy = "SELECT  mem_id,net_pay FROM acc_stmnt_final where  close_no = 4 order by net_pay desc"; 	 
$resuslt = mysql_query($querhhy) or die(mysql_error());
while($rfow = mysql_fetch_array($resuslt))
{
$mem_id = $rfow['mem_id'];
$net_pay = $rfow['net_pay'];


			$jfsddffdj=mysql_query("select Name, Address from members where MemberID = '$mem_id' limit 1 ");
			while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
			{
			$Name=$ssddtfsdfga['Name'];
			$Address=$ssddtfsdfga['Address'];
			}
			
?>			

  <tr>
    <td><?php echo $no; ?>&nbsp;</td>
    <td><?php echo $mem_id; ?></td>
    <td><?php echo $Name; ?></td>
    <td><?php echo $Address; ?></td>
    <td><?php echo $net_pay; ?></td>
  </tr>

<?php 
$no++;
}

?>
</table>
