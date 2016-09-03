<?php include("../connect/session.php"); $uname=$_SESSION['uname']; 
$chk_no="";
$amt_isued="";
$amt_bal="";
$deductions="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="none" />
<title>Administrator | Payment History</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>
<link href="colours.css" rel="stylesheet" type="text/css" />
<link href="../ropclub.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="66" height="185" align="left" valign="top"><img id="mlm_01" src="images/mlm_01.jpg" width="66" height="185" alt="" /></td>
    <td width="838" height="185" align="left" valign="top" background="images/mlm_13.jpg"><?php include("banner.php"); ?></td>
    <td width="76" height="185" align="left" valign="top"><img id="mlm_03" src="images/mlm_03.jpg" width="76" height="185" alt="" /></td>
  </tr>
  <tr>
    <td width="66" height="700" align="left" valign="top" background="images/mlm_07.jpg">&nbsp;</td>
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><table width="100%" border="1" cellpadding="6" cellspacing="0" bordercolor="#06315B" class="ropcontents" style="border-collapse:collapse; margin-bottom:100px;">

          <tr>
            <td height="52" colspan="8" bgcolor="#06315B"><h3 class="headgreen"><strong>Payment History</strong></h3></td>
          </tr>
          <tr>
            <td height="25" colspan="8" bgcolor="#06315B" class="ContentBlue"><h3 class="headgreen"><strong><?php $q = "select MAX(close_no) from closings";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$next_close_no=$data[0]; echo $next_close_no;?></strong></h3></td>
            </tr>
          <tr>
            <td width="20" height="25" class="ContentBlue"><strong>No</strong></td>
            <td width="54" class="ContentBlue"><strong>ID</strong></td>
            <td width="92" class="ContentBlue"><strong>Name</strong></td>
            <td width="74" class="ContentBlue"><strong>Net Payable</strong></td>
            <td width="85" class="ContentBlue"><strong>Amount</strong></td>
            <td width="69" class="ContentBlue"><strong>Balance</strong></td>
            <td width="104" class="ContentBlue"><strong>Cheque No</strong></td>
            <td width="41" class="ContentBlue">&nbsp;</td>
          </tr>
<?php 

	$result = mysql_query("select MAX(close_no) from closings");
	$data = mysql_fetch_array($result);
	$l_close_no=$data[0];
	
$slno=1;
$qryh=mysql_query("select mmbr_id,net_payable from closings_last where net_payable!='0'  order by net_payable desc ");
while($qrysh=mysql_fetch_array($qryh))
{
$mmbr_id=$qrysh['mmbr_id'];
$net_payable=$qrysh['net_payable'];

$qrreyh=mysql_query("select Name from members where MemberId='$mmbr_id' ");
while($qrsdsdysh=mysql_fetch_array($qrreyh))
{
$Name=$qrsdsdysh['Name'];
}

$payfetch=mysql_query("select * from paymenthistory  where mmbr_id='$mmbr_id' and close_no='$l_close_no' ");
while($payarray=mysql_fetch_array($payfetch))
{
$chk_no=$payarray['chk_no'];
$amt_isued=$payarray['amt_isued'];
$amt_bal=$payarray['amt_bal'];
$deductions=$payarray['deductions'];
}

$bgcol = "#FFE6FF";
if($slno%2 == 0)
$bgcol = "#D5F7FF";

?>    

<form id="frm" name="frm" action="paymnt_det_code.php?id=<?php echo $slno; ?>" method="post">      
          <tr bgcolor="<?php echo $bgcol ?>">
            <td height="26" ><?php echo $slno; ?></td>
            <td ><?php echo $mmbr_id; ?> <input type="hidden" name="mid<?php echo $slno; ?>" id="mid<?php echo $slno; ?>" value="<?php echo $mmbr_id; ?>"/></td>
            <td ><?php echo $Name;?><input type="hidden" name="name<?php echo $slno; ?>" id="name<?php echo $slno; ?>" value="<?php echo $Name; ?>"/></td>
            <td ><?php echo $net_payable; ?><input type="hidden" name="actamt<?php echo $slno; ?>" id="actamt<?php echo $slno; ?>" value="<?php echo $net_payable; ?>"/></td>
            <td ><?php if ($amt_isued == "") {?> <input name="amt<?php echo $slno; ?>" type="text" id="amt<?php echo $slno; ?>" size="6" /><?php } else { echo $amt_isued; }?></td>
            <td ><?php if ($amt_bal == "") {?> <input name="bal<?php echo $slno; ?>" type="text" id="bal<?php echo $slno; ?>" readonly="readonly" size="6" value="<?php echo $net_payable; ?>" /><?php } else { echo $amt_bal; }?></td>
            <td ><?php if ($chk_no == "") {?> <input name="chkno<?php echo $slno; ?>" type="text" id="chkno<?php echo $slno; ?>" size="10" /><?php } else { echo $chk_no; }?></td>
            <td ><?php if (($chk_no == "")&& ($amt_bal == "") && ($amt_isued == "")) {?><input type="submit" name="Submit" id="button" value="GO" /><?php } else echo "done";?></td>
          </tr>
</form>
<?php 
$slno++;
$chk_no="";
$amt_isued="";
$amt_bal="";
$deductions="";
 } ?>        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
<tr></tr>
    </table></td>
    <td width="76" height="700" align="left" valign="top" background="images/mlm_09.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td width="66" height="58" align="left" valign="top"><img id="mlm_10" src="images/mlm_10.jpg" width="66" height="58" alt="" /></td>
    <td width="838" height="58" align="left" valign="top" background="images/mlm_14.jpg">&nbsp;</td>
    <td width="76" height="58" align="left" valign="top"><img id="mlm_12" src="images/mlm_12.jpg" width="76" height="58" alt="" /></td>
  </tr>
</table>
</body>
</html>
