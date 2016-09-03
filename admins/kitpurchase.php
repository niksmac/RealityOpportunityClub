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
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form id="confirmkitpurchase" name="confirmkitpurchase" method="post" action="confirmkitpurchase_code.php">
          <table width="80%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td width="22%">ROC ID </td>
              <td width="78%"><input type="text" name="rocid" id="rocid" class="jsrequired"  /></td>
            </tr>
            <tr>
              <td>KIT </td>
              <td><select name="kitval" id="kitval" class="select-notfirst">
                <option >- select -</option>
                <?php $qrtyh=mysql_query("select prod_code, kit_pur_inc from ol_products where prod_code REGEXP '^KIT' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$prod_code = $qraysjh['prod_code'];
$kit_pur_inc = $qraysjh['kit_pur_inc'];
?>

<option value="<?php echo $prod_code; ?>"><?php echo $prod_code.' - '.$kit_pur_inc; ?></option>
<?php } ?>
              </select>              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Confirm Purchase" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
                </form>
                <table width="80%" border="1" cellpadding="4" cellspacing="0" bordercolor="#06315B">
            <tr>
              <td width="5%" height="24" bgcolor="#CCCCCC"><strong>No</strong></td>
              <td width="12%" bgcolor="#CCCCCC"><strong>ROC ID</strong></td>
              <td width="19%" bgcolor="#CCCCCC"><strong>KIT NAME</strong></td>
              <td width="17%" bgcolor="#CCCCCC"><strong>KP INC.</strong></td>
              <td width="17%" bgcolor="#CCCCCC"><strong>INC ACQ</strong></td>
              <td width="30%" bgcolor="#CCCCCC"><strong>PUR DATE</strong></td>
            </tr>
            
             <?php $no=1; $qrtyh=mysql_query("select * from ol_kit_pur_det  ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$roc_id = $qraysjh['roc_id'];
$kit_name = $qraysjh['kit_name'];
$max_inc = $qraysjh['max_inc'];
$inc_acq = $qraysjh['inc_acq'];
$pur_date = $qraysjh['pur_date'];
?>


            <tr>
              <td><?php echo $no; ?></td>
               <td><?php echo $roc_id; ?></td>
              <td><?php echo $kit_name; ?></td>
              <td><?php echo $max_inc; ?></td>
              <td><?php echo $inc_acq; ?> &nbsp;&nbsp; <a href="#">more</a></td>
              <td><?php echo $pur_date; ?></td>
            </tr>
            <?php $no++; } ?>
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
