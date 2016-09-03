<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin'];?>
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
<script type="text/javascript" src="../javascripts/top_up-min.js"></script> 
<script language="JavaScript" type="text/javascript">
function deleteuser(id)
{
if(confirm('Are you Sure to delete this user'))
window.location.href="deleteuser.php?id=" + id;
}
</script>
<script language="JavaScript" type="text/javascript">
function activateuser(id)
{
if(confirm('Are you Sure to Activate '))
window.location.href="activateuser.php?id=" + id;
}
</script>
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
        <td width="76%" align="left" valign="top"><a href="top"></a></td>
      </tr>
      <tr>
        <td height="66" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form id="form1" name="form1" method="post" action="">
          <table width="650" border="1" cellpadding="4" cellspacing="0" bordercolor="#06315B" style="border-collapse:collapse;">
            <tr>
              <td height="33" colspan="7"><h3><strong>ROC Members</strong></h3></td>
            </tr>
            <tr>
              <td width="23" height="24" class="ContentBlue"><strong>No </strong></td>
              <td width="16" class="ContentBlue">&nbsp;</td>
              <td width="159" class="ContentBlue"><strong>Name</strong></td>
              <td width="186" class="ContentBlue"><strong>Address</strong></td>
              <td width="80" class="ContentBlue"><strong>User Id</strong> </td>
              <td width="74" class="ContentBlue"><strong>Through</strong></td>
            </tr>
            <?php 
		  $er=1;
$qryh=mysql_query("select AutoID,ActStatus,Name,Address,MemberID,Password,TrackID from members ");
while($qrysh=mysql_fetch_array($qryh))
{
$iid=$qrysh['AutoID'];
$act_status=$qrysh['ActStatus'];
?>
            <tr>
              <td height="26"><?php echo $er; ?></td>
              <td><a href="javascript:void(0)"
onclick="window.open('viewmem.php?mid=<?php echo $qrysh['MemberID']; ?>',
'welcome','width=310,menubar=yes,status=yes')" ><img src="images/line_popup_ico.gif" alt="Details" width="16" height="12" border="0" /></a></td>
              <td><?php echo $qrysh['Name']; ?></td>
              <td><?php echo $qrysh['Address']; ?></td>
              <td><a href="allocatehere.php?id=<?php echo $qrysh['MemberID']; ?>&mem" class="redlinks"><?php echo $qrysh['MemberID']; ?></a><a href="allocatehere.php?id=<?php echo $qrysh['MemberID']; ?>&mem" class="redlinks"></a></td>
              <td><?php echo $qrysh['TrackID']; ?></td>
            </tr>
            <?php if ($er%10 == 0) { ?>
            <tr>
              <td height="26" colspan="6" align="right"><a href="#top">TOP</a></td>
              </tr>
            <?php 
			}
		  $er++;
		  }
		  ?>
          </table>
                </form>
        </td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top"></td>
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
