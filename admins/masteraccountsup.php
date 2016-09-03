<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>ROP Club : Administrator</title>
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
</style></head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
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
        <td align="left" valign="top"><table width="60%" cellspacing="1" class="tablesorter">
          <thead>
            <tr>
              <th width="50" height="41" align="left" bgcolor="#EBEBEB"><strong> No</strong></th>
              <th width="150" align="left" bgcolor="#EBEBEB"><strong>Date</strong></th>
              <th width="38%" align="left" bgcolor="#EBEBEB"><strong>Particulars</strong></th>
              <th width="150" align="right" bgcolor="#EBEBEB"><strong>Credit</strong></th>
              <th width="150" align="right" bgcolor="#EBEBEB"><strong>Debit</strong></th>
            </tr>
          </thead>
          <tbody>
            <?php 
			$supid = $_GET['id'];
$slno = 1;
$qrtyh=mysql_query("select ac_date,particulars,debits,credits  from olsupp_acc_det where supp_id = '$supid' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ac_date =$qraysjh['ac_date'];
$particulars =$qraysjh['particulars'];
$debits = $qraysjh['debits'];
$credits = $qraysjh['credits'];
?>
            <tr>
              <td width="50"><?php echo $slno; ?>&nbsp;</td>
              <td width="150"><?php echo $ac_date; ?>&nbsp;</td>
              <td><?php echo $particulars; ?>&nbsp;</td>
              <td width="150" align="right"><?php echo $credits; ?></td>
              <td width="150" align="right"><?php echo $debits; ?></td>
            </tr>
            <?php 
$tdebits += $debits;
$tcredits += $credits;
$slno++;
} 
?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4" align="left">Balance</th>
              <th width="150" align="right"><?php echo $bal = $tcredits - $tdebits ?></th>
            </tr>
          </tfoot>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
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
