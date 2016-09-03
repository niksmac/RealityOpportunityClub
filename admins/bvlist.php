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
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
</head>
<?php if ($_POST) 
{
 $frms = $_POST['frms'];
 $tos = $_POST['tos'];

$rtre = substr ($frms, 0, 10);
list ($day, $month, $yer) = split ('-',$rtre ); 
echo $dates = $yer."-".$month."-".$day;


}?>
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
        <td height="66" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" >
          <table width="99%" border="1" cellpadding="4" cellspacing="0" bordercolor="#06315B" style="border-collapse:collapse; margin-bottom:100px;">
            <tr>
              <td height="33" colspan="5"><h3><strong>BV ACCOUNT</strong></h3></td>
            </tr>
            <tr>
              <td height="60" colspan="5" class="ContentBlue"><form id="form1" name="form1" method="post" action=""><table width="300" border="0" cellspacing="0" cellpadding="5">
                <tr>
                  <td>From</td>
                  <td><input name="frms" type="text" id="demo1" onclick="javascript:NewCal('demo1','ddmmyyyy',true,24)" size="25" maxlength="25" />
                    <a href="javascript:NewCal('demo1','ddmmyyyy',true,24)"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" /></a></td>
                </tr>
                <tr>
                  <td>To</td>
                  <td><input name="tos" type="text" id="demo2" onclick="javascript:NewCal('demo2','ddmmyyyy',true,24)" size="25" maxlength="25" />
                    <a href="javascript:NewCal('demo2','ddmmyyyy',true,24)"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" /></a></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="button" id="button" value="Filter" /></td>
                </tr>
              </table>
              </form></td>
              </tr>
            <tr>
              <td width="23" height="25" class="ContentBlue"><strong>No </strong></td>
              <td width="82" class="ContentBlue"><strong>User Id</strong></td>
              <td width="243" class="ContentBlue"><strong>Name</strong></td>
              <td width="42" class="ContentBlue"><strong>BV</strong></td>
              <td width="189" class="ContentBlue"><strong>Date</strong></td>
              </tr>
            <?php 
		  $er=1;
$qryh=mysql_query("select * from  storebv ");
while($qrysh=mysql_fetch_array($qryh))
{
$MemberID=$qrysh['MemberID'];
$BV=$qrysh['BV'];
$dates=$qrysh['dates'];


$qrsyjh=mysql_query("select Name from  members where MemberID='$MemberID' ");
while($qrydfsh=mysql_fetch_array($qrsyjh))
{
$Name=$qrydfsh['Name'];
}

?>
            <tr>
              <td height="26"><?php echo $er; ?></td>
              <td><?php echo $qrysh['MemberID']; ?></td>
              <td><?php echo $Name; ?></td>
              <td><?php echo $qrysh['BV']; ?></td>
              <td><?php echo $qrysh['dates']; ?></td>
              </tr>
            <?php 
		  $er++;
		  }
		  ?>
          </table>
                
        </td>
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
