<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olshplogin'];

$qrtyh=mysql_query("select ownername,storename,address,pincode,credits,state,district,phone, store_id  from olshops where store_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ownername =$qraysjh['ownername'];
$storename =$qraysjh['storename'];
$address = $qraysjh['address'];
$pincode = $qraysjh['pincode'];
$credits = $qraysjh['credits'];
$state = $qraysjh['state'];
$district = $qraysjh['district'];
$phone = $qraysjh['phone'];
$store_id = $qraysjh['store_id'];
}

?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td><h1>Print Orders</h1></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top">
 <div class="okdiv">   
    <form id="pform" name="pform" method="post" action="olprintorder.php?p">
      <table width="80%" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <td width="13%">ROC ID</td>
          <td width="20%"><input name="rocid" type="text" id="rocid" size="10" /></td>
          <td width="10%">Date</td>
          <td width="40%"><input type="text" name="datepicker" id="datepicker"  /></td>
          <td width="17%"><label class="reset"><input type="submit" name="button" id="button" value="Submit" onclick="return validateform()" /></label></td>
        </tr>
      </table>
        </form>
   </div>     
    </td>
  </tr>
  
  <?php 
if (isset($_GET['p'])) 
{ 
$rocid = $_POST['rocid'];
$datepicker = $_POST['datepicker'];
$pieces = explode(",", $datepicker);


$dfsdf = mysql_query("select memid,bill_address from ol_bills where shopid = '$uname' and memid='$rocid' and bill_date > '$pieces[0]' and bill_date < '$pieces[1]'");	

if (mysql_num_rows($dfsdf) != 0 )
{
$qrtyh=mysql_query("select memid,bill_address from ol_bills where shopid = '$uname' and memid='$rocid' and bill_date > '$pieces[0]' and bill_date < '$pieces[1]'");	
while($qraysjh=mysql_fetch_array($qrtyh))
{
$memid =$qraysjh['memid'];
$bill_address =$qraysjh['bill_address'];
}
?>
  <tr>
    <td align="left" valign="top"><a href="javascript:void(printSpecial())"><img src="img/print-app.gif" width="32" height="30" border="0" /></a></td>
  </tr>
  <tr>
    <td align="left" valign="top"><div id="printReady"> <style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	font-size: 9pt;
	color: #202020;
}
h5 {
	font-size: 12pt;
	color: #2E2E2E;
}
-->
</style><div class="tableouter">
      <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
        <tr>
          <td width="50%" align="left" valign="top"> <h2><img src="img/roclogo.png" width="250" height="55" /><br />
            Online Retailer - <?php echo $uname; ?></h2></td>
          <td width="50%" align="right" valign="top"><br /><strong><?php echo $storename; ?></strong><br /><?php echo $address; ?></td>
        </tr>
        <tr>
          <td colspan="2" align="left" valign="top"><hr /></td>
          </tr>
        <tr>
          <td align="left" valign="top"><table width="250" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="69" align="left" valign="top">ROC ID </td>
              <td width="169" align="left" valign="top"><?php echo $memid; ?></td>
            </tr>
            
            <tr>
              <td align="left" valign="top">Address</td>
              <td align="left" valign="top"><?php echo $bill_address; ?></td>
            </tr>
          </table></td>
          <td align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="left" valign="top"><table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#E6E6E6" style="border-collapse:collapse;">
            <tr>
              <td width="3%" height="36" bgcolor="#EEEEEE"><strong>No</strong></td>
              <td width="9%" bgcolor="#EEEEEE"><strong>Order No.</strong></td>
              <td width="28%" bgcolor="#EEEEEE"><strong>Order Date</strong></td>
              <td width="35%" bgcolor="#EEEEEE"><strong>Product</strong></td>
              <td width="4%" align="right" bgcolor="#EEEEEE"><strong>Qty</strong></td>
              <td width="14%" align="right" bgcolor="#EEEEEE"><strong>Unit Price</strong></td>
              <td width="7%" align="right" bgcolor="#EEEEEE"><strong>Amount</strong></td>
              </tr>
            
            <?php 
			
$rocid = $_POST['rocid'];
$datepicker = $_POST['datepicker'];
$cnnnt = 1;
$qrdtyh=mysql_query("select * from ol_bills where shopid = '$uname' and memid='$rocid' and bill_date > '$pieces[0]' and bill_date < '$pieces[1]'");	
while($qrsaysjh=mysql_fetch_array($qrdtyh))
{
$order_no =$qrsaysjh['order_no'];
$billno =$qrsaysjh['billno'];
$shopid =$qrsaysjh['shopid'];
$prodid =$qrsaysjh['prodid'];
$prodqty = $qrsaysjh['prodqty'];
$memid = $qrsaysjh['memid'];
$bill_address = $qrsaysjh['bill_address'];
$bill_date = $qrsaysjh['bill_date'];
$ord_stat = $qrsaysjh['ord_stat'];
$bill_amt = $qrsaysjh['bill_amt'];

$qfrtyh=mysql_query("select mem_price,prod_name from ol_products where prod_code = '$prodid' ");
while($qrdaygsjh=mysql_fetch_array($qfrtyh))
{
$mem_price =$qrdaygsjh['mem_price'];
$prod_name =$qrdaygsjh['prod_name'];
}

?>
            <tr>
              <td><?php echo $cnnnt; ?></td>
              <td><?php echo $order_no; ?></td>
              <td><?php echo $bill_date; ?></td>
              <td><?php echo $prodid." - ".$prod_name; ?></td>
              <td align="right"><?php echo $prodqty; ?></td>
              <td align="right"><?php echo $mem_price; ?></td>
              <td align="right"><?php echo $bill_amt; ?></td>
              </tr> 
			  
			  <?php $bill_amtt =$bill_amtt + $bill_amt; $cnnnt++; } ?>
            <tr>
              <td colspan="6"><strong>Total</strong></td>
              <td align="right"><?php echo $bill_amtt; ?></td>
            </tr>
           
            
          </table></td>
          </tr>
        <tr>
          <td colspan="2" align="left" valign="top">&nbsp;</td>
        </tr>
      </table>
    </div>
</div></td>
  </tr>
  
  <?php } 
  
  else 
  {
  echo '<br /><br /><div class="notokdiv"> Sorry No Orders Found !! </div>';
  }
  
  }
  
  
  
  
  ?>
</table>
<?php } ?>
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.7.1.custom.min.js"></script>
		<script type="text/javascript" src="js/daterangepicker.jQuery.js"></script>
		<link rel="stylesheet" href="css/ui.daterangepicker.css" type="text/css" />
		<link rel="stylesheet" href="css/redmond/jquery-ui-1.7.1.custom.css" type="text/css" title="ui-theme" />
<script type="text/javascript" language="javascript" src="js/print.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#datepicker").daterangepicker();
  });
  
  
function validateform()
{

if(pform.elements['rocid'].value.length<5)
{
pform.elements['datepicker'].style.background = 'white';
pform.elements['rocid'].style.background = 'yellow';
pform.elements['rocid'].focus();
return false;
}

if(pform.elements['datepicker'].value.length<1)
{
pform.elements['rocid'].style.background = 'white';
pform.elements['datepicker'].style.background = 'yellow';
pform.elements['datepicker'].focus();
return false;
}


}
</script>