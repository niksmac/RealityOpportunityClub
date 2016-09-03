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
        <td align="left" valign="top" class="ContentBlue" ><table width="474" border="1" cellpadding="4" cellspacing="1" bordercolor="#00CCFF" class="Contents">
          <tr>
            <td width="31" height="40" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">Sl. No.</td>
            <td width="111" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">Store Name</td>
            <td width="103" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">ID</td>
            <td width="84" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">PIN Code</td>
            <td width="87" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">Action</td>
            </tr>
          <?php 
		  $myzero = 0; $er=1;
$qfry=mysql_query("select * from stores where shpstat = 0 ");
while($qrhys=mysql_fetch_array($qfry))
{
$id=$qrhys['id'];
$store_id=$qrhys['store_id'];

?>
          <tr>
            <td align="left" valign="top"><?php echo $er; ?></td>
            <td align="left" valign="top"><?php echo $qrhys['storename']; ?></td>
            <td align="left" valign="top"><?php echo $qrhys['store_id']; ?></td>
            <td align="left" valign="top"><?php echo $qrhys['pincode']; ?></td>
            <td align="left" valign="top"><a href="editstore.php?id=<?php echo $id; ?>&amp;st=1" class="redlinks">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE</a></td>
            </tr>
          <?php $crval = 0; $crlimit = 0;$er++;}?>
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
