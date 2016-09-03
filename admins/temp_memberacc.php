<?php 

include("../connect/session.php");

$rocconnect = mysql_connect("$host","$user","$password");
mysql_select_db("$database") or die('could not connect to the database');  ?>
<link href="../ropclub.css" rel="stylesheet" type="text/css" />
<table width="700" border="1" align="center" cellpadding="4" cellspacing="0" bordercolor="#990000" class="ropcontents" style="border-collapse:collapse; margin-bottom:100px; margin-top:50px; border-color:#990000;">
  <tr>
    <td width="29" bgcolor="#CCCCCC"><strong>No.</strong></td>
    <td width="70" bgcolor="#CCCCCC"><strong>Member ID</strong></td>
    <td width="180" bgcolor="#CCCCCC"><strong>Name</strong></td>
    <td width="61" bgcolor="#CCCCCC"><strong>Debit</strong></td>
    <td width="52" bgcolor="#CCCCCC"><strong>Credit</strong></td>
    <td width="59" bgcolor="#CCCCCC"><strong>Balance</strong></td>
    <td width="80" bgcolor="#CCCCCC"><strong>Deductions</strong></td>
    <td width="87" bgcolor="#CCCCCC"><strong>Net Payable</strong></td>
  </tr>
<?php 
$slno=1;
$ghjfghafsdfsdsj=mysql_query("select * from  temp_memberacc where balance!=0 order by balance desc");
while($sdssdsdtd=mysql_fetch_array($ghjfghafsdfsdsj))
		{ 
		$MemberId=$sdssdsdtd['MemberId'];
		$debits=$sdssdsdtd['debits'];
		$credits=$sdssdsdtd['credits'];
		$balance=$sdssdsdtd['balance'];
				
if ($balance > 2500 )
$tds_val =  $balance * (10 / 100); 
else 
$tds_val = 0;
$ser_charge =  $balance * (5 / 100);
$net_payable = $balance - ($tds_val + $ser_charge);


$rtyu=mysql_query("select Name from  members where MemberID='$MemberId' ");
while($lkjh=mysql_fetch_array($rtyu))
		{ 
		$Name=$lkjh['Name'];	
		}	
?>
  <tr>
    <td><?php echo $slno; ?></td>
    <td><?php echo $MemberId; ?></td>
    <td><?php echo $Name; ?></td>
    <td><?php echo $debits; ?></td>
    <td><?php echo $credits; ?></td>
    <td><?php echo $balance; ?></td>
    <td><?php echo $dedcts = $tds_val + $ser_charge; ?></td>
    <td><?php echo $net_payable; ?></td>
  </tr><?php $finamt = $finamt + $net_payable;$slno++;} ?>
  <tr>
    <td height="52" colspan="7" align="left" valign="baseline"><strong>Total</strong></td>
    <td align="left" valign="baseline"><?php echo $finamt; ?></td>
  </tr>
</table>
