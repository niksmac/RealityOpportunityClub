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
<script type="text/javascript" src="../shop/js/datepicker.js"></script>
</head>

<body>

<?php 
$id= $_GET['id'];

$qrtyh=mysql_query("select ownername,storename,address,pincode,credits,grade,phone,store_id  from stores where id='$id' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$grade =$qraysjh['grade'];
$ownername =$qraysjh['ownername'];
$storename =$qraysjh['storename'];
$address = $qraysjh['address'];
$pincode = $qraysjh['pincode'];
$credits = $qraysjh['credits'];
$phone = $qraysjh['phone'];
$store_id = $qraysjh['store_id'];
}


?>
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
        <td align="left" valign="top" class="ContentBlue" ><table width="100%" border="0" cellspacing="0" cellpadding="4">
          <tr>
            <td colspan="2" align="left" valign="middle"><strong><?php echo $storename; ?>&nbsp;-&nbsp;<?php echo $ownername; ?></strong></td>
            </tr>
          <tr>
            <td colspan="2" align="left" valign="middle"><span class="graytext"><?php echo nl2br($address); ?><br />
<?php echo $phone; ?><br />
</span></td>
            </tr>
          <tr>
            <td width="10%" align="right" valign="middle">&nbsp;</td>
            <td width="90%" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle"><form method="post" name="filter" id="filter" action="bvsalehistory.php?srch" >
            <?php if (isset ($_GET['srch']))
				{
				$dat1 = $_POST['ADate'];
				$dat2 = $_POST['ADate2'];
				}
				else
				{
				$dat1 = "";
				$dat2 = "";
				}
				?>
              <table width="400" border="1" cellpadding="3" cellspacing="0" bordercolor="#9A9A9A" style="border-collapse:collapse;">

 <tr>
                  <td width="88">From</td>
                  <td width="194"><input name="ADate" type="text" id="ADate" onclick="displayDatePicker('ADate', false, 'ymd', '-');" size="10" value="<?php echo $dat1; ?>"/></td>
                  <td width="194">To</td>
                  <td width="194"><input name="ADate2" type="text" id="ADate2" onclick="displayDatePicker('ADate2', false, 'ymd', '-');" value="<?php echo $dat2; ?>" size="10"/></td>
 </tr>
 <tr>
   <td colspan="2">&nbsp;</td>
   <td colspan="2"><input type="submit" name="button" id="button" value="Filter" onclick="return validatepfilter(filter)" /></td>
   </tr>
              </table></form>
              <table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#9A9A9A" style="border-collapse:collapse;">
                <?php if (isset ($_GET['srch']))
				{?>
                <tr>
                  <td colspan="5" bgcolor="#DADADA">BV Sale Between <?php echo $_POST['ADate']; ?> and <?php echo $_POST['ADate2']; ?></td>
                </tr>
                <?php } ?>
                <tr>
                  <td width="6%" bgcolor="#DADADA"><strong>No</strong></td>
                  <td width="14%" bgcolor="#DADADA"><strong>ROC ID</strong></td>
                  <td width="37%" bgcolor="#DADADA"><strong>Name</strong></td>
                  <td width="29%" bgcolor="#DADADA"><strong>Date</strong></td>
                  <td width="14%" bgcolor="#DADADA"><strong>BV</strong></td>
                </tr>
                <?php 
				$sdf = 1;
				$bvsum = 0;
				$uname = $_SESSION['shplogin'];
				if (isset ($_GET['srch']))
				{
				$dat1 = $_POST['ADate']." 00:00:00";
				$dat2 = $_POST['ADate2']." 00:00:00";
				$qrtyh=mysql_query("select memid,bv,datentim  from bvthruweb where shopid='$id' and datentim between '$dat1' and '$dat2'");
				}
				else
				{
				$qrtyh=mysql_query("select memid,bv,datentim  from bvthruweb where id='$id' ");
				}

while($qraysjh=mysql_fetch_array($qrtyh))
{
$memid =$qraysjh['memid'];
$bv =$qraysjh['bv'];
$datentim =$qraysjh['datentim'];
$bvsum = $bvsum + $bv;

$qry=mysql_query("select Name from members where MemberID='$memid' ");
while($qrys=mysql_fetch_array($qry))
{
$Name=$qrys['Name'];
}
?>
                <tr>
                  <td><?php echo $sdf; ?></td>
                  <td><?php echo $memid; ?></td>
                  <td><?php echo $Name; ?></td>
                  <td><?php echo $datentim; ?></td>
                  <td><?php echo $bv; ?></td>
                </tr>
                <?php $sdf ++; } ?>
                <tr>
                  <td colspan="4"><strong>Total BV </strong></td>
                  <td><strong><?php echo $bvsum; ?></strong></td>
                </tr>
              </table>               </td>
          </tr>
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
