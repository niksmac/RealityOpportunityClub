<title>Products</title><style type="text/css">
<!--

body,td,th {
	font-family: Tahoma;
	font-size: 9pt;
	page-break-after:always;
}
.break { page-break-after: always; }
P.pagebreakhere {page-break-before: always}

-->
</style><table width="800" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td height="25" colspan="5" align="center" valign="middle"><h2>ONLINE PRODUCTS</h2></td>
  </tr>
    <tr>
    <td colspan="5" align="center" valign="middle"><img src="../images/divider.jpg" border="0"  /></td>
  </tr>
  
  
  <?php 
 include("../connect/connect.php");
 $brrr = 1;
$qrtyh=mysql_query("select prod_code,prod_name,mrp,mem_price,photo,roc_bv  from ol_products ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$prod_code =$qraysjh['prod_code'];
$prod_name =$qraysjh['prod_name'];
$mrp = $qraysjh['mrp'];
$mem_price = $qraysjh['mem_price'];
$photo = $qraysjh['photo'];
$roc_bv = $qraysjh['roc_bv'];
?>
  <tr>
    <td width="13%" rowspan="5" align="center" valign="top"><img src="../olproducts/<?php echo $photo; ?>" alt="<?php echo $prod_name; ?>" width="100" height="100" style="border:1px dotted #99CC66;" /></td>
    <td width="16%" align="left" valign="top"><strong>Product Code </strong></td>
    <td width="2%" align="left" valign="top"><strong>:</strong></td>
    <td colspan="2" align="left" valign="top"><?php echo $prod_code; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Product Name</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td colspan="2" align="left" valign="top"><?php echo $prod_name; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>MRP</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td colspan="2" align="left" valign="top"><?php echo $mrp; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>ROC Price</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td colspan="2" align="left" valign="top"><?php echo $mem_price; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>BV</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td width="17%" align="left" valign="top"><?php echo $roc_bv; ?></td>
    <td width="52%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle"><img src="../images/divider.jpg" border="0"  /></td>
  </tr>
 <?php 
 $divv = $brrr % 8; 
 if( $divv == 0) echo '<br style="page-break-before: always" />';
 $brrr++; 
 } 
 ?>
</table>
