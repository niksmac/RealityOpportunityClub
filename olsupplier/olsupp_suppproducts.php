<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olsupplogin'];
?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td width="100%"><h1>Product List</h1></td>
  </tr>
  <tr>
    <td><table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td width="6%" height="41" bgcolor="#EBEBEB"><strong>No</strong></td>
        <td width="13%" bgcolor="#EBEBEB"><strong>Product Code </strong></td>
        <td width="28%" bgcolor="#EBEBEB"><strong>Product Name </strong></td>
        <td width="13%" bgcolor="#EBEBEB"><strong>MRP</strong></td>
        <td width="13%" bgcolor="#EBEBEB"><strong>Supplier  Price </strong></td>
        <td width="9%" bgcolor="#EBEBEB"><strong>ROC Price</strong></td>
        <td width="18%" bgcolor="#EBEBEB"><strong>Stock</strong></td>
      </tr>
      <?php 
	  $slno = 1;
	  $qrtyh=mysql_query("select id,prod_code,prod_name,mrp,dist_price,mem_price,pro_stock,supp_price  from ol_products where supp_id = '$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$id =$qraysjh['id'];
$prod_code =$qraysjh['prod_code'];
$prod_name =$qraysjh['prod_name'];
$mrp = $qraysjh['mrp'];
$dist_price = $qraysjh['dist_price'];
$mem_price = $qraysjh['mem_price'];
$pro_stock = $qraysjh['pro_stock'];
$supp_price = $qraysjh['supp_price'];
?>
<form action="updatestock.php?id=<?php echo $id; ?>" method="post">
      <tr>
        <td align="left" valign="top"><?php echo $slno; ?></td>
        <td align="left" valign="top"><?php echo $prod_code; ?></td>
        <td align="left" valign="top"><?php echo $prod_name; ?></td>
        <td align="left" valign="top"><?php echo $mrp; ?></td>
        <td align="left" valign="top"><?php echo $supp_price; ?></td>
        <td align="left" valign="top"><?php echo $mem_price; ?></td>
        <td align="left" valign="top"><?php if ($pro_stock == 0) echo '<div class="notokdiv" title="Not in Stock">Not in Stock</div>'; else echo $pro_stock.'+ <input name="newstk" type="text" id="newstk" size="4" />'; ?>          </td>
      </tr>
</form>      
      <?php $slno++;} ?>

    </table></td>
  </tr>
</table>


<?php
}
?>