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
<script type="text/javascript" src="../javascripts/top_up-min.js"></script> 

<script language="javascript" type="text/javascript">
function validateme(name)
{
rocformk.onsubmit=function()
{

if(name.elements['rocroyal'].value.length<1)
{
alert("This field cannot be empty !");
name.elements['rocroyal'].focus();
return false;
}

return true;
}
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
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><table width="99%" border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td height="45" colspan="4" align="center" valign="middle"><a  href="javascript:void(0)" onclick="window.open('royaltyoptns.php?id=<?php echo "ROC" ?>',
'welcome','width=300,height=500,menubar=yes,status=yes')"><img src="../images/royaltyroclogo.jpg" width="37" height="39" border="0" /></a></td>
            <td height="45" align="center" valign="middle">&nbsp;</td>
            <td height="45" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="33" colspan="6"><h3><strong>ROC Members</strong></h3></td>
          </tr>
          <tr>
            <td width="22" height="25" class="ContentBlue"><strong>No </strong></td>
            <td width="202" class="ContentBlue"><strong>Name</strong></td>
            <td width="111" class="ContentBlue"><strong>Phone</strong></td>
            <td width="110" class="ContentBlue"><strong>User Id</strong></td>
            <td width="110" class="ContentBlue">&nbsp;</td>
          </tr>
          <?php 
		  $er=1;
$qryh=mysql_query("select MemberID,ActStatus,Phone,Name from members where ActStatus=1 order by Name asc ");
while($qrysh=mysql_fetch_array($qryh))
{
$MemberID=$qrysh['MemberID'];
$act_status=$qrysh['ActStatus'];
?>
          <tr>
            <td height="26"><?php echo $er; ?></td>
            <td><a href="javascript:void(0)"
onclick="window.open('royaltyoptns.php?id=<?php echo $qrysh['MemberID']; ?>',
'welcome','width=300,height=500,menubar=yes,status=yes')" ><?php echo $qrysh['Name']; ?></a></td>
            <td><?php echo $qrysh['Phone']; ?></td>
            <td><a href="javascript:void(0)"
onclick="window.open('royaltyoptns.php?id=<?php echo $qrysh['MemberID']; ?>',
'welcome','width=300,height=500,menubar=yes,status=yes')"  ><?php echo $qrysh['MemberID']; ?></a></td>
            <td>&nbsp;</td>
          </tr>
          <?php 
		  $er++;
		  }
		  ?>
        </table>          
        <p>&nbsp;</p></td>
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
