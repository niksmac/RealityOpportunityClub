<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; 
$rocid=$_POST['rocid'];
$phone=$_POST['phone'];
?>
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
        <td align="left" valign="top" class="ContentBlue" ><table width="600" border="0" cellspacing="0" cellpadding="5" style="margin-bottom:50px;">
          <tr>
            <td width="111" class="ContentBold">ROC ID </td>
            <td width="211" class="ContentBold">NAME</td>
            <td width="96" class="ContentBold">STATUS</td>
            <td width="142" class="ContentBold">ACTION</td>
          </tr>
		  
<?php 
//$oyrttcbv=mysql_query("select * from members where mmbr_id='$rocid' or phone like '$phone%' ");

$oyrttcbv=mysql_query("select * from members where mmbr_id='$rocid' ");
while($meerci=mysql_fetch_array($oyrttcbv))
{ 
$name =$meerci['name'];
$act_status =$meerci['act_status'];
$name =$meerci['name'];
$mmbr_id =$meerci['mmbr_id'];
$ret="NOT ACTIVE";
if ($act_status==1)
$ret="ACTIVE";
?>		  
          <tr>
            <td><?php echo $mmbr_id; ?>&nbsp;</td>
            <td><?php echo $name; ?>&nbsp;</td>
            <td><?php echo $ret; ?>&nbsp;</td>
            <td><p><a href="allocatehere.php?id=<?php echo $mmbr_id; ?>&stng=1" class="redlinks">EDIT</a> / <a href="deletemember.php?id=<?php echo $mmbr_id; ?>" class="redlinks">DELETE</a> / <a href="viewmember.php?id=<?php echo $mmbr_id; ?>" class="redlinks">VIEW</a> </p>
              </td>
          </tr>
<?php } ?>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table> </td>
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
