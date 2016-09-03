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
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script type="text/javascript" src="../print.js"></script>
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
        <td align="left" valign="top" class="ContentBlue" ><table width="99%" border="1" cellpadding="4" cellspacing="0" bordercolor="#06315B" style="border-collapse:collapse;">
          <tr>
            <td height="33"><h3><strong>ROC Members</strong></h3> <form name="form" id="form">
              <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
              <option value="showwhatineed.php&mem"> - select - </option>
                <option value="showwhatineed.php?fld=Name&mem">Name</option>
                <option value="showwhatineed.php?fld=Address&mem">Address</option>
                <option value="showwhatineed.php?fld=Mobile&mem">Mobile</option>
              </select>
            <?php if (isset ($_GET['fld']) ) echo $_GET['fld']; ?></form></td>
            <td align="center" valign="middle"><a href="javascript:void(printSpecial())" title="Print Section"><img src="../images/print.png" alt="PRINT" border="0" /></a><br />
            
</td>
          </tr>

          </table>
 <div id="printReady">         
          <table width="99%" border="1" cellpadding="4" cellspacing="0" bordercolor="#06315B" style="border-collapse:collapse;">          <tr>
            <td width="24" height="25" class="ContentBlue"><strong>No </strong></td>
            <td width="16" class="ContentBlue">&nbsp;</td>
            <td width="171" class="ContentBlue"><strong>Name</strong></td>
            <td width="153" class="ContentBlue"><strong><?php if (isset ($_GET['fld']) ) echo $_GET['fld'];  else echo "Name"; ?></strong></td>
          </tr>
<?php 
$er=1;


if (isset ($_GET['fld']) ) { 
$fld = $_GET['fld'];
$qstdr = "select ".$fld.",MemberID,Name from members order by ".$fld. " asc";
$qryh=mysql_query($qstdr);
}
else {
$fld = "Name";
$qstdr = "select Name,MemberID,Name from members ";
$qryh=mysql_query($qstdr);
}
while($qrysh=mysql_fetch_array($qryh))
{
$Name = $qrysh['Name'];
$fields = $qrysh[$fld];
?>
          <tr>
            <td height="26"><?php echo $er; ?></td>
            <td><a href="javascript:void(0)"
onclick="window.open('viewmem.php?mid=<?php echo $qrysh['MemberID']; ?>',
'welcome','width=310,menubar=yes,status=yes')" ><img src="images/line_popup_ico.gif" alt="Details" width="16" height="12" border="0" /></a></td>
            <td><?php echo $Name; ?></td>
            <td><?php echo nl2br($fields); ?></td>
            </tr>
          <?php 
		  $er++;
		  }
		  ?>
        </table>
   </div>     
        
        
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
