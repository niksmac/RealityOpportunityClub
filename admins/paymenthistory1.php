<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="none" />
<title>Administrator | Payment History</title>
<style type="text/css">
<!--
body {
	margin-left: 15px;
	margin-top: 5px;
	margin-right: 15px;
	margin-bottom: 5px;
	background-color: #FFFFFF;
}
-->
</style>

<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{

if(name.elements['chkno'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['chkno'].focus();
return false;
}

return true;
}
}
</script>



</head>

<body onLoad="if (location.href.indexOf('reload')==-1) location.replace(location.href+'?reload')">
<table width="100%" border="1" cellpadding="6" cellspacing="0" bordercolor="#06315B" class="ropcontents" style="border-collapse:collapse; margin-bottom:100px;">
  <tr>
    <td height="52" colspan="10" bgcolor="#06315B"><h3 class="headgreen"><strong>Payment History</strong></h3></td>
  </tr>
  <tr>
    <td height="25" colspan="10" bgcolor="#06315B" class="ContentBlue"><h3 class="headgreen"><strong>
      <?php 
	$q = "select MAX(close_no) from closings";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$l_close_no=$data[0]; 
	$preclose = $l_close_no - 1;
	
	
	echo 	$l_close_no;
	
	?>
    </strong></h3></td>
  </tr>
  <tr>
    <td width="20" height="25" class="ContentBlue"><strong>No</strong></td>
    <td width="54" class="ContentBlue"><strong>ID</strong></td>
    <td width="92" class="ContentBlue"><strong>Name</strong></td>
    <td width="74" class="ContentBlue"><strong>PAN</strong></td>
    <td width="74" class="ContentBlue"><strong>C/F</strong></td>
    <td width="74" class="ContentBlue"><strong>Curr.</strong></td>
    <td width="85" class="ContentBlue"><strong>Amount</strong></td>
    <td width="69" class="ContentBlue"><strong>Balance</strong></td>
    <td width="104" class="ContentBlue"><strong>Cheque No</strong></td>
    <td width="41" class="ContentBlue">&nbsp;</td>
  </tr>
  <?php 

	
$slno=1;
$qryh=mysql_query("select mmbr_id,net_payable from closings_last order by net_payable desc ");
while($qrysh=mysql_fetch_array($qryh))
{
$mmbr_id=$qrysh['mmbr_id'];
$net_payabl=$qrysh['net_payable'];


$qrreyh=mysql_query("select Name,PanNo from members where MemberId='$mmbr_id' ");
while($qrsdsdysh=mysql_fetch_array($qrreyh))
{
$Name=$qrsdsdysh['Name'];
$PanNo=$qrsdsdysh['PanNo'];
}


$payfetch=mysql_query("select net_payable from closings_full  where mmbr_id='$mmbr_id' and close_no='$preclose' ");
while($payarray=mysql_fetch_array($payfetch))
{
$prenet_payable=$payarray['net_payable'];
}

$payfetchs=mysql_query("select net_payable from closings_full  where mmbr_id='$mmbr_id' and close_no='$l_close_no' ");
while($payarrays=mysql_fetch_array($payfetchs))
{
$curnet_payable = $payarrays['net_payable'];
}


$net_payable = $prenet_payable - $curnet_payable;

$myzero = 0;


$bgcol = "#FFE6FF";
if($slno%2 == 0)
$bgcol = "#D5F7FF";

?>
  <form id="form1" name="form1" action="paymnt_det_code.php?id=<?php echo $slno; ?>" method="post">
    <tr bgcolor="<?php echo $bgcol ?>">
      <td height="26" ><?php echo $slno; ?></td>
      <td ><?php echo $mmbr_id; ?>
          <input type="hidden" name="mid<?php echo $slno; ?>" id="mid<?php echo $slno; ?>" value="<?php echo $mmbr_id; ?>"/></td>
      <td ><?php echo $Name;?>
          <input type="hidden" name="name<?php echo $slno; ?>" id="name<?php echo $slno; ?>" value="<?php echo $Name; ?>"/></td>
      <td ><?php echo $PanNo;?></td>
      <td ><?php echo $carry = $amt_bal+$myzero;  ?></td>
      <td ><?php echo $net_payable; ?>
          <input type="hidden" name="actamt<?php echo $slno; ?>" id="actamt<?php echo $slno; ?>" value="<?php echo $net_payable; ?>"/></td>
      <td ><?php if ($amt_isued == "") {?>
          <input name="amt<?php echo $slno; ?>" type="text" id="amt<?php echo $slno; ?>" value="<?php echo $net_payable+$carry ; ?>" size="6" />
          <?php } else { echo $amt_isued; }?></td>
      <td ><?php if ($amt_balcur == "") {?>
          <input name="bal<?php echo $slno; ?>" type="text" id="bal<?php echo $slno; ?>" readonly="readonly" size="6" value="<?php echo $net_payable+$carry; ?>" />
        <?php } else { echo $amt_balcur; }?></td>
      <td ><?php if ($chk_no == "") {?>
          <input name="chkno" type="text" id="chkno" size="10" />
        <?php } else { echo $chk_no; }?></td>
      <td ><?php if (($chk_no == "")&& ($amt_balcur == "") && ($amt_isued == "")) {?>
          <input type="submit" name="Submit" id="button" value="GO" />
        <?php } else echo "done";?></td>
    </tr>
  </form>
  <?php 
$slno++;
$chk_no="";
$amt_bal="";
$amt_isued="";
$amt_balcur="";
$deductions="";
$carry="";
 } ?>
</table>
</body>
</html>
