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
        <td align="left" valign="top"><table width="99%" border="1" cellpadding="4" cellspacing="1" bordercolor="#00CCFF" class="Contents">
          <tr>
            <td width="30" height="39" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>No.</strong></td>
            <td width="157" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>Store Name</strong></td>
            <td width="135" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>ID</strong></td>
            <td width="114" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>Password</strong></td>
            <td width="137" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>Action</strong></td>
          </tr>
          <?php 
$qry=mysql_query("select * from olsupplier order by id asc");
$er=1;
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
$store_id=$qrys['suppl_id'];
?>
          <tr>
            <td align="left" valign="top"><?php echo $er; ?></td>
            <td align="left" valign="top"><?php echo $qrys['Name']; ?></td>
            <td align="left" valign="top"><?php echo $qrys['suppl_id']; ?></td>
            <td align="left" valign="top"><?php echo $qrys['passwd']; ?></td>
            <td align="left" valign="top"><a href="editolsupp.php?id=<?php echo $id; ?>&amp;olp" class="redlinks">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE<br />
              </a><a href="olsuppbookings.php?id=<?php echo $store_id; ?>&amp;olp" class="redlinks">BOOKINGS</a><a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks"><br />
              </a><a href="olsuppaccountss.php?id=<?php echo $store_id; ?>&amp;olp" class="redlinks">ACCOUNT</a><a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks"><br />
            </a></td>
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

<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deleteolsupp.php?id=" + id;
}
</script>