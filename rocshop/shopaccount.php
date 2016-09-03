<?php include("sessioncode.php"); ?>
<title>My Account</title>
<link href="css/screen.css" rel="stylesheet" type="text/css" />
<table width="850" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><a href="index.php" title="home page"> <img src="images/logo.png" alt="logo" class="logo" border="0" /></a></td>
  </tr>
  <tr>
    <td><table width="850" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="189" align="left" valign="top"><div align="right">
          <?php include("shpmenu.php"); ?>
        </div></td>
        <td width="655" align="left" valign="top"><?php 
			  $uname = $_SESSION['shplogin'];
			  $bvsum = 0;
$qrdy=mysql_query("select crval,crlimit from stor_credit_sum where stor_id = '$uname'");
while($qrydds=mysql_fetch_array($qrdy))
{
$crval=$qrydds['crval'];
$crlimit=$qrydds['crlimit'];
}

$crval = $crval + 0;
$crlimit = $crlimit + 0;
?>
          <table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="#999999" style="border-collapse: collapse;">
            <tr>
              <td width="7%" height="38" align="left" valign="middle"><strong>No</strong></td>
              <td width="36%" align="left" valign="middle"><strong>Particulars</strong></td>
              <td width="18%" align="left" valign="middle"><strong>Credit</strong></td>
              <td width="18%" align="left" valign="middle"><strong>Debit</strong></td>
              <td width="21%" align="left" valign="middle"><strong>Balance (INR)</strong></td>
            </tr>
            <?php 
$slno = 1;
$totcr = 0;
$totdr = 0;
$qrtyh=mysql_query("select ac_date,particulars,debits,credits,balance  from store_account  where stor_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ac_date =$qraysjh['ac_date'];
$particulars =$qraysjh['particulars'];
$debits =$qraysjh['debits'];
$credits =$qraysjh['credits'];
$balance =$qraysjh['balance'];
?>
            <tr>
              <td align="left" valign="middle"><?php echo $slno; ?></td>
              <td align="left" valign="middle"><?php echo $particulars; ?></td>
              <td align="left" valign="middle"><?php echo $credits; ?></td>
              <td align="left" valign="middle"><?php echo $debits; ?></td>
              <td align="left" valign="middle"><?php echo $balance; ?></td>
            </tr>
			<?php $slno++;$totcr = $totcr + $credits; $totdr = $totdr + $debits; } ?>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
