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
        <td height="199" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form id="bvvv" name="bvvv" method="post" action="addolbv_code.php">
          <table width="60%" border="0" cellspacing="0" cellpadding="4">
          
          <?php 
$qry=mysql_query("select bv_val from ol_bv ");
while($qrys=mysql_fetch_array($qry))
{
$bv_val=$qrys['bv_val'];
}

?>
            <tr>
              <td width="25%">BV Current</td>
              <td width="75%"><?php echo $bv_val; ?></td>
            </tr>
            <tr>
              <td>BV</td>
              <td><?php echo $bv_val; ?> + 
                <input name="newbv" type="text" id="newbv" size="10" class="jsrequired"  /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Submit" />
                <input type="reset" name="button2" id="button2" value="Reset" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <hr />
                </form><br />
<br />

        <table width="90%" border="1" cellspacing="0" cellpadding="4" style="border-collapse:collapse;">
          
          <?php 
$qry=mysql_query("select bv_val from ol_bv ");
while($qrys=mysql_fetch_array($qry))
{
$bv_val=$qrys['bv_val'];
}

?>
            <tr>
              <td width="6%" bgcolor="#F2F2F2">No.</td>
              <td width="21%" bgcolor="#F2F2F2">OL Shop ID </td>
              <td width="20%" bgcolor="#F2F2F2">ROC  ID</td>
              <td width="21%" bgcolor="#F2F2F2">Prod ID </td>
              <td width="10%" bgcolor="#F2F2F2">BV</td>
              <td width="22%" bgcolor="#F2F2F2">Date</td>
            </tr>
<?php 
$no = 1;
$qryd=mysql_query("select * from ol_bv_detail ");
while($qrdys=mysql_fetch_array($qryd))
{
$olshop_id=$qrdys['olshop_id'];
$roc_id=$qrdys['roc_id'];
$prod_id=$qrdys['prod_id'];
$bv=$qrdys['bv'];
$bill_date=$qrdys['bill_date'];
?>            
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $olshop_id; ?></td>
              <td><?php echo $roc_id; ?></td>
              <td><?php echo $prod_id; ?></td>
              <td><?php echo $bv; ?></td>
              <td><?php echo $bill_date; ?></td>
            </tr>
<?php 
$no++;
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
