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
<link href="../shop/css/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/datepicker.js"></script>
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
        <td align="left" valign="top" class="ContentBlue" ><table width="99%" border="1" cellpadding="3" cellspacing="0" bordercolor="#06315B" style="border-collapse:collapse;">
          <tr>
            <td height="33" colspan="5"><form id="form1" name="form1" method="post" action="memberstoday.php?mem&srch">
              <table width="400" border="1" cellpadding="3" cellspacing="0" bordercolor="#9A9A9A" style="border-collapse:collapse;">
                <tr>
                  <td width="51">From</td>
                  <td width="114"><input name="ADate" type="text" id="ADate" onclick="displayDatePicker('ADate', false, 'ymd', '-');" size="10" value="<?php echo $dat1; ?>"/></td>
                  <td width="87">To</td>
                  <td width="114"><input name="ADate2" type="text" id="ADate2" onclick="displayDatePicker('ADate2', false, 'ymd', '-');" value="<?php echo $dat2; ?>" size="10"/></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                  <td colspan="2"><input type="submit" name="button" id="button" value="Filter" onclick="return validatepfilter(filter)" /></td>
                </tr>
              </table>
                          </form>
              </td>
          </tr>
          <tr>
            <td height="33" colspan="5"><h3><strong>Todays Joinings - <?php echo $today = date ("Y-m-d");?> </strong></h3></td>
          </tr>
          <tr>
            <td width="24" height="29" class="ContentBlue"><strong>No </strong></td>
            <td width="16" class="ContentBlue">&nbsp;</td>
            <td width="340" class="ContentBlue"><strong>Name</strong></td>
            <td width="41" class="ContentBlue"><strong>Mobile</strong></td>
            <td width="71" class="ContentBlue"><strong>User Id</strong> </td>
            </tr>
          <?php 
		 if (isset($_GET['today']))
		 $today = date ("Y-m-d");
		  $er=1;
		  
		  if (isset ($_GET['srch']))
				{
				$dat1 = $_POST['ADate']." 00:00:00";
				$dat2 = $_POST['ADate2']." 00:00:00";
				$qrdyh=mysql_query("select MemberID,Name,Mobile,MemberID  from members where DOJ between '$dat1' and '$dat2' order by MemberID asc ");
				}
				else
				{
				$qrdyh=mysql_query("select MemberID,Name,Mobile,MemberID  from members where DOJ='$today' order by MemberID asc ");
				}
				
				
while($qrysh=mysql_fetch_array($qrdyh))
{
?>
          <tr>
            <td height="26"><?php echo $er; ?></td>
            <td><a href="javascript:void(0)"
onclick="window.open('viewmem.php?mid=<?php echo $qrysh['MemberID']; ?>',
'welcome','width=310,menubar=yes,status=yes')" ><img src="images/line_popup_ico.gif" alt="Details" width="16" height="12" border="0" /></a></td>
            <td><?php echo $qrysh['Name']; ?></td>
            <td><?php echo $qrysh['Mobile']; ?></td>
            <td><?php echo $qrysh['MemberID']; ?></td>
            </tr>
          <?php 
		  $er++;
		  }
		  ?>
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
