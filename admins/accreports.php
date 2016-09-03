<?php include("../connect/session.php"); $uname=$_SESSION['uname']; ?>
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
</style>
<link href="colours.css" rel="stylesheet" type="text/css" />
</head>

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
        <td align="left" valign="top" class="ContentBlue" ><table width="60%" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td colspan="4"><strong>Royalty Summary</strong></td>
            </tr>
          <tr>
            <td colspan="4" class="successtxt"><hr /></td>
            </tr>
          <tr>
            <td colspan="2" class="successtxt">Debit</td>
            <td width="18%" class="successtxt">Credit</td>
            <td width="19%" class="successtxt">Balance</td>
          </tr>
          <?php $oyrttcbv=mysql_query("select * from  rocroyaltycapitalsummary  ");
while($meerci=mysql_fetch_array($oyrttcbv))
{ 
$debits =$meerci['debits'];$credits =$meerci['credits'];$balance =$meerci['balance'];
}?>
          <tr>
            <td colspan="2"><?php echo $debits; ?>&nbsp;</td>
            <td><?php echo $credits; ?></td>
            <td><?php echo $balance; ?></td>
          </tr>

          <tr>
            <td colspan="4"><hr /></td>
          </tr>
          <tr>
            <?php /*?><td colspan="4"><strong>Member Account Summary</strong></td>
            </tr>
          <tr>
            <td colspan="2">Referal Income</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <?php $credits = 0;$puioui=mysql_query("select credits from  memberaccdetail  ");
while($fgfgf=mysql_fetch_array($puioui))
{ 
$credits =$credits + $fgfgf['credits'];
}
$roccredits = 0;
$rtrfgt=mysql_query("select credits from  memberaccdetail where MemberId='0'  ");
while($fgfergf=mysql_fetch_array($rtrfgt))
{ 
$roccredits =$roccredits + $fgfergf['credits'];
}

?>
          <tr>
            <td width="43%" class="successtxt">Particular</td>
            <td width="20%" class="successtxt"><span class="successtxt">Debit</span></td>
            <td class="successtxt"><span class="successtxt">Credit</span></td>
            <td class="successtxt"><span class="successtxt">Balance</span></td>
          </tr>
          <tr>
            <td>Referal Income</td>
            <td><?php echo $credits; ?>&nbsp;</td>
            <td><?php echo $roccredits; ?></td>
            <td><?php echo $bal = $credits - $roccredits; ?></td><?php */?>
          </tr>
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
