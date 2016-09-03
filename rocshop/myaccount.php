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
      <table width="100%" border="0" cellspacing="0" cellpadding="4">
                <tr>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                </tr>
                <tr>
                  <td width="7%" class="graytext">&nbsp;</td>
                  <td width="20%" class="graytext">Total BV Left</td>
                  <td width="2%" class="graytext">:</td>
                  <td width="71%" class="graytext"><?php echo $crval; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">Credit Limit </td>
                  <td class="graytext">:</td>
                  <td class="graytext"><?php echo $crlimit; ?></td>
                </tr>
                <tr>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                </tr>
                
                <tr>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                  <td class="graytext">[<a href="viewbvhistory.php" class="nik_link">HISTORY</a>]</td>
                </tr>
              </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
