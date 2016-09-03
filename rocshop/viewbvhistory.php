<?php include("sessioncode.php"); ?><title>HOME</title>
<link href="css/screen.css" rel="stylesheet" type="text/css" />
<table width="850" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><a href="index.php" title="home page"> <img src="images/logo.png" alt="logo" class="logo" border="0" /></a></td>
  </tr>
  <tr>
    <td><table width="850" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="189"><div align="right">
          <?php include("shpmenu.php"); ?>
        </div></td>
        <td width="655"><div id="printReady"><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#9A9A9A" style="border-collapse:collapse;">
          <tr>
            <td width="3%" bgcolor="#DADADA"><strong>No</strong></td>
            <td width="73%" bgcolor="#DADADA"><strong>Date</strong></td>
            <td width="24%" bgcolor="#DADADA"><strong>BV</strong></td>
          </tr>
          <?php 
				$sdf = 1;
				$bvsum = 0;
				$uname = $_SESSION['shplogin'];
$qrtyh=mysql_query("select crval,crdates  from stor_credit where stor_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$crval =$qraysjh['crval'];
$crdates =$qraysjh['crdates'];
$bvsum = $bvsum + $crval;
?>
          <tr>
            <td><?php echo $sdf; ?></td>
            <td><?php echo $crdates; ?></td>
            <td><?php echo $crval; ?></td>
          </tr>
          <?php $sdf ++; } ?>
          <tr>
            <td colspan="2"><strong>Total BV </strong></td>
            <td><strong><?php echo $bvsum; ?></strong></td>
          </tr>
        </table></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
