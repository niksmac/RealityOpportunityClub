<?php include("sessioncode.php"); ?><title>HOME</title>
<link href="css/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/datepicker.js"></script>
    
    
<script type="text/javascript" >

function validatepfilter(name)
{

if (name.elements['ADate'].value.length<1) 
{
document.getElementById('ADate').style.backgroundColor = 'yellow';
alert("Please check the form for errors !!");
name.elements['ADate'].focus();
return false;
}

if (name.elements['ADate2'].value.length<1) 
{
document.getElementById('ADate').style.backgroundColor = 'white';
document.getElementById('ADate2').style.backgroundColor = 'yellow';
alert("Please check the form for errors !!");
name.elements['ADate2'].focus();
return false;
}
return true;

}
</script>
<table width="850" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><a href="index.php" title="home page"><img src="images/logo.png" alt="logo" class="logo" border="0" /></a></td>
  </tr>
  <tr>
    <td><table width="850" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="189" align="left" valign="top"><div align="right">
          <?php include("shpmenu.php"); ?>
        </div></td>
        <td width="655" align="left" valign="top"><form method="post" name="filter" id="filter" action="bvsalehistory.php?srch" >
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
              <div id="printReady">
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
				$qrtyh=mysql_query("select memid,bv,datentim  from bvthruweb where shopid='$uname' and datentim between '$dat1' and '$dat2'");
				}
				else
				{
				$qrtyh=mysql_query("select memid,bv,datentim  from bvthruweb where shopid='$uname' ");
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
              </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
