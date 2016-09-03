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
window.location.href="deleteolproduct_code.php?id=" + id;
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
        <td align="left" valign="top"><table width="99%" border="0" align="center" cellpadding="2" cellspacing="0">
          <?php 
 
$qrtyh=mysql_query("select id,prod_code,prod_name,mrp,dist_price,mem_price,pro_stock,photo,roc_bv  from ol_products ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$id =$qraysjh['id'];
$prod_code =$qraysjh['prod_code'];
$prod_name =$qraysjh['prod_name'];
$mrp = $qraysjh['mrp'];
$dist_price = $qraysjh['dist_price'];
$mem_price = $qraysjh['mem_price'];
$pro_stock = $qraysjh['pro_stock'];
$photo = $qraysjh['photo'];
$roc_bv = $qraysjh['roc_bv'];
?>
          <?php /*?><img src="timthumb.php?src=olproducts/<?php echo $photo; ?>&h=150&w=150" alt="<?php echo $prod_name; ?>" style="border:1px dotted #99CC66;"><?php */?>
          <tr>
            <td width="17%" rowspan="6" align="center" valign="middle" class="Contents"><img src="../olproducts/<?php echo $photo; ?>" alt="<?php echo $prod_name; ?>" width="100" style="border:1px dotted #99CC66;" /></td>
            <td width="32%" align="left" valign="top" class="Contents"><strong>Product Code </strong></td>
            <td width="1%" align="left" valign="top" class="Contents"><strong>:</strong></td>
            <td colspan="2" align="left" valign="top" class="Contents"><?php echo $prod_code; ?></td>
          </tr>
          <tr>
            <td align="left" valign="top" class="Contents"><strong>Product Name</strong></td>
            <td align="left" valign="top" class="Contents"><strong>:</strong></td>
            <td colspan="2" align="left" valign="top" class="Contents"><?php echo $prod_name; ?></td>
          </tr>
          <tr>
            <td align="left" valign="top" class="Contents"><strong>MRP</strong></td>
            <td align="left" valign="top" class="Contents"><strong>:</strong></td>
            <td colspan="2" align="left" valign="top" class="Contents"><?php echo $mrp; ?></td>
          </tr>
          <tr>
            <td align="left" valign="top" class="Contents"><strong>ROC Price</strong></td>
            <td align="left" valign="top" class="Contents"><strong>:</strong></td>
            <td colspan="2" align="left" valign="top" class="Contents"><?php echo $mem_price; ?></td>
          </tr>
          <tr>
            <td align="left" valign="top" class="Contents"><strong>BV</strong></td>
            <td align="left" valign="top" class="Contents"><strong>:</strong></td>
            <td align="left" valign="top" class="Contents"><?php echo $roc_bv; ?></td>
            <td align="left" valign="top" class="Contents">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top" class="Contents"><strong>Availability</strong></td>
            <td align="left" valign="top" class="Contents"><strong>:</strong></td>
            <td width="34%" align="left" valign="top" class="Contents"><?php if ($pro_stock == 0) echo '<div class="notokdiv" title="Not in Stock">Not in Stock</div>'; else echo '<div class="okdiv" title="In Stock">Available</div>'; ?></td>
            <td width="16%" align="left" valign="top" class="Contents">&nbsp;</td>
          </tr>
          
          <tr>
            <td colspan="5" align="center" valign="middle"><a href="editolproducts.php?id=<?php echo $id; ?>&pol" class="redlinks">EDIT</a> / <a href="javascript:deleteit(<?php echo $id; ?>)" class="redlinks">DELETE</a></td>
          </tr>
          <tr>
            <td colspan="5" align="center" valign="middle"><img src="../images/divider.jpg" width="600" height="6" /></td>
          </tr>
          <?php } ?>
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
