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



<script language="JavaScript" type="text/javascript">
function deleteit(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deleteaccline.php?id=" + id;
}
</script>


<script type="text/javascript" language="javascript">
function CalcBalance()
{
var totcr = document.getElementById("totcr").value;
var totdr = document.getElementById("totdr").value;

var cbal = totcr - totdr;


var crdit = document.getElementById("crdit").value;
var debt = document.getElementById("debt").value;

var nbal = Number(cbal) + Number(crdit) - Number(debt);

document.getElementById("bal").value = nbal;

}
</script>

<link href="colours.css" rel="stylesheet" type="text/css" />
</head>

<body onload="CalcBalance()">
<?php 
date_default_timezone_set('Asia/Kolkata');
$stid = $_GET['id'];
$qrtyh=mysql_query("select ownername,storename,address,pincode,credits,grade,store_id  from stores where id='$stid' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$grade =$qraysjh['grade'];
$ownername =$qraysjh['ownername'];
$storename =$qraysjh['storename'];
$address = $qraysjh['address'];
$pincode = $qraysjh['pincode'];
$credits = $qraysjh['credits'];
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
        <td align="left" valign="top" class="ContentBlue" >
          <table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td colspan="2"><hr /></td>
              </tr>
            <tr>
              <td width="21%">Name </td>
              <td width="79%"><?php echo $storename; ?>&nbsp;</td>
              </tr>
            <tr>
              <td>Store ID </td>
              <td><?php echo $store_id; ?></td>
              </tr>
            <tr>
              <td colspan="2">
              <hr><form id="strcc" name="strcc" method="post" action="storeaccount_code.php?id=<?php echo $store_id; ?>&fgg=<?php echo $stid ?>"><table width="100%" border="0" cellspacing="0" cellpadding="3">
                <tr>
                  <td width="5%" height="38" align="left" valign="middle"><strong>No</strong></td>
                  <td width="34%" align="left" valign="middle"><strong>Particulars</strong></td>
                  <td width="18%" align="left" valign="middle"><strong>Credit</strong></td>
                  <td width="17%" align="left" valign="middle"><strong>Debit</strong></td>
                  <td width="16%" align="left" valign="middle"><strong>Balance</strong></td>
                  <td width="10%" align="left" valign="middle">&nbsp;</td>
                </tr>
<?php 
$slno = 1;
$totcr = 0;
$totdr = 0;
$qrtyh=mysql_query("select id,ac_date,particulars,debits,credits,balance  from store_account  where stor_id='$store_id' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$id =$qraysjh['id'];
$ac_date =$qraysjh['ac_date'];
$particulars =$qraysjh['particulars'];
$debits =$qraysjh['debits'];
$credits =$qraysjh['credits'];
$balance =$qraysjh['balance'];
?>                
                <tr>
                  <td align="left" valign="middle"><?php echo $slno; ?></td>
                  <td align="left" valign="middle"><?php echo $particulars; ?></td>
                  <td align="left" valign="middle"><?php echo $credits; ?></td>
                  <td align="left" valign="middle"><?php echo $debits; ?></td>
                  <td align="left" valign="middle"><?php echo $balance; ?></td>
                  <td align="left" valign="middle"><a href="javascript:deleteit(<?php echo $id; ?>)">x</a></td>
                </tr>
 <?php $slno++;$totcr = $totcr + $credits; $totdr = $totdr + $debits; } ?>  
                <tr>
                  <td height="4" colspan="6" align="left" valign="middle">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
                  </tr>
                  <input name="totcr" id="totcr" type="hidden" value="<?php echo $totcr; ?>" /><input name="totdr" id="totdr" type="hidden" value="<?php echo $totdr; ?>" />
                <tr>
                  <td align="left" valign="middle"><?php echo $slno; ?></td>
                  <td align="left" valign="middle"><input type="text" name="particlur" id="particlur" class="jsrequired" /></td>
                  <td align="left" valign="middle"><input name="crdit" type="text" id="crdit" onkeyup="CalcBalance()" value="0" size="6"  class="jsvalidate_digits"/></td>
                  <td align="left" valign="middle"><input name="debt" type="text" id="debt" onkeyup="CalcBalance()" value="0" size="6" class="jsvalidate_digits"/></td>
                  <td align="left" valign="middle"><input name="bal" type="text" id="bal" size="6" value="<?php echo $balance; ?>" readonly="readonly" class="jsvalidate_digits"/></td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td colspan="5" align="left" valign="middle"><?php echo $today = date("Y-m-j g:H:s");    ?></td>
                  </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td colspan="4" align="left" valign="middle"><input type="submit" name="button" id="button" value="Submit" style="height:30px;" />
                    <input type="reset" name="button2" id="button2" value="Reset" style="height:30px;"/></td>
                  </tr>
              </table>
              </form>  </td>
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
