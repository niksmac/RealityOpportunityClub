<link href="css/olshop.css" rel="stylesheet" type="text/css" /><?php 
include("../connect/olsuppsession.php");
$bilno = $_GET['bilno'];
$qrtyh=mysql_query("select billno,shopid,prodid,prodqty,memid,bill_address,bill_date,order_no from ol_bills where billno = '$bilno' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$billno =$qraysjh['billno'];
$shopid =$qraysjh['shopid'];
$prodid =$qraysjh['prodid'];
$order_no =$qraysjh['order_no'];
$bill_address =$qraysjh['bill_address'];
}

?>

<form id="form1" name="form1" method="post" action="processoeder.php?bno=<?php echo $billno; ?>">
<table width="95%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Order No : <?php echo $order_no; ?></td>
  </tr>
  <tr>
    <td colspan="2">Bill Address : <?php echo $bill_address; ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="courdetails" cols="15" rows="3" id="courdetails">Courier Name : 
Docket No: </textarea></td>
  </tr>
  <tr>
    <td width="6%"><input type="checkbox" name="chk" onclick="javascript:apply()" /><label for="chk" >Sent</label>   </td>
    <td width="94%"><input type="submit" name="Submit" id="Submit" value="Submit" disabled="disabled" /></td>
  </tr>
</table>

</form>
<script type="text/javascript">
function apply()
{
  document.form1.Submit.disabled=true;
  if(document.form1.chk.checked==true)
  {
    document.form1.Submit.disabled=false;
  }
  if(document.form1.chk.checked==false)
  {
    document.form1.Submit.enabled=false;
  }
}


</script>