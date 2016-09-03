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

<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure to DELETE this Application ?'))
window.location.href="deleteapplication.php?id=" + id;
}
</script>


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
        <td height="154" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><table width="99%" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td height="54" colspan="7" class="Headings"><?php if (isset($_GET['yes'])) { ?>Selected Application Deleted Successfully <?php } else { ?>Applications Received<?php }?></td>
            </tr>
          <tr>
            <td width="4%" height="45" align="left" valign="top" class="successtxt"><u><strong>No.</strong></u></td>
            <td width="24%" align="left" valign="top" class="successtxt"><u><strong>Name</strong></u></td>
            <td width="14%" align="left" valign="top" class="successtxt"><u><strong>Address</strong></u></td>
            <td width="23%" align="left" valign="top" class="successtxt"><u><strong>Phone</strong></u></td>
            <td width="11%" align="left" valign="top" class="successtxt"><u><strong>Photo</strong></u></td>
            <td width="16%" align="left" valign="top" class="successtxt"><u><strong>Resume</strong></u></td>
            <td width="8%" align="left" valign="top" class="successtxt"><strong>DELETE</strong></td>
          </tr>
<?php 
$qry=mysql_query("select * from careers order by id asc");
$er=1;
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
          <tr>
            <td height="29" align="left" valign="top"><?php echo $er; ?></td>
            <th align="left" valign="top"><a href="jobapplicationfull.php?id=<?php echo $id; ?>" class="tu_iframe_800x800"><?php echo $names=$qrys['names']; ?></a></th>
            <td align="left" valign="top"><?php echo $paddress=nl2br($qrys['paddress']); ?></td>
            <td align="left" valign="top"><?php echo $mobiles=$qrys['mobiles']; ?></td>
            <td align="left" valign="top"><a href="asktodownload.php?file=<?php echo "../careers/received/".$names=$qrys['photos']; ?>" class="redlinks">DOWNLOAD</a></td>
            <td align="left" valign="top"><a href="asktodownload.php?file=<?php echo "../careers/received/".$names=$qrys['resume']; ?>" class="redlinks">DOWNLOAD</a></td>
            <td align="left" valign="top"><a href="javascript:deletethis(<?php echo $id; ?>)"><img src="images/cancel.png" width="16" height="16" border="0" /></a></td>
          </tr>
<?php $er++; } ?>
        </table>   </td>
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
