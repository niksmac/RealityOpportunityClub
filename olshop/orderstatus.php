<link href="css/olshop.css" rel="stylesheet" type="text/css" />
<?php 
include("../connect/olsuppsession.php");
$bilno = $_GET['bilno'];
$qrtyh=mysql_query("select billno,shopid,prodid,prodqty,memid,bill_address,bill_date,order_no,cour_det from ol_bills where billno = '$bilno' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$billno =$qraysjh['billno'];
$shopid =$qraysjh['shopid'];
$prodid =$qraysjh['prodid'];
$order_no =$qraysjh['order_no'];
$bill_address =$qraysjh['bill_address'];
$cour_det =$qraysjh['cour_det'];
}

?>

<form id="form1" name="form1" method="post" action="setdelivery.php?bno=<?php echo $billno; ?>">
<table width="95%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Order No : <?php echo $order_no; ?></td>
  </tr>
  <tr>
    <td>Bill Address : <?php echo $bill_address; ?></td>
  </tr>
  <tr>
    <td><?php echo $cour_det; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="19%"><input type="checkbox" name="chk" onclick="javascript:apply()" />
    <label for="chk" >Received</label>   </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit" id="Submit" value="Submit" disabled="disabled" /></td>
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