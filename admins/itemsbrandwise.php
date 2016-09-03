<?php 
include("../connect/session.php");
$itms=$_GET['itms'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>United Customers Programme</title>
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
        <td align="left" valign="top" ><table width="100%" border="1" cellpadding="3" cellspacing="1" bordercolor="#00CCFF" class="Contents"><tr>
            <td height="29" colspan="5" bgcolor="#BBF1FF" class="ContentBold"><?php echo $itms; ?></td>
          </tr>
          <tr>
            <td width="5%" height="21" class="ContentBold"><strong>Sl. No.</strong></td>
            <td width="46%" class="ContentBold"><strong>Item Name</strong></td>
            <td width="14%" class="ContentBold">Tax Rate</td>
            <td width="14%" class="ContentBold"><strong>MRP</strong></td>
            <td width="21%" class="ContentBold"><strong>Action</strong></td>
          </tr>
<?php 
$er=1;
$qry=mysql_query("select * from itemsnew where brandname='$itms'");
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
          <tr>
            <td height="20"><?php echo $er; ?></td>
            <td height="20"><a href="itemdetails.php?id=<?php echo $id; ?>&itm=1"><?php echo $qrys['itemsname']; ?></a></td>
            <td><?php echo $qrys['taxrate']; ?> %</td>
            <td><?php echo $qrys['mrp']; ?></td>
            <td height="20"><a href="edititems.php?id=<?php echo $id; ?>&amp;itm=1" class="redlinks">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE</a></td>
          </tr>
          <?php $er++; ?>
          <?php } ?>
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