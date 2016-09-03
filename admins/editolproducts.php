<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; 

$id = $_GET['id'];

$qrtyh=mysql_query("select *  from ol_products where id = '$id' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$prod_code =$qraysjh['prod_code'];
$prod_name =$qraysjh['prod_name'];
$mrp = $qraysjh['mrp'];
$dist_price = $qraysjh['dist_price'];
$mem_price = $qraysjh['mem_price'];
$pro_stock = $qraysjh['pro_stock'];
$photo = $qraysjh['photo'];
$roc_bv = $qraysjh['roc_bv'];
$supp_id = $qraysjh['supp_id'];
$supp_price = $qraysjh['supp_price'];
$roc_bv = $qraysjh['roc_bv'];
$photo = $qraysjh['photo'];
}
?>
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
        <td align="left" valign="top"><form action="editolprod_code.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="95%" border="0" cellspacing="0" cellpadding="4">
            <tr>
              <td width="27%" class="Contents">Product Code</td>
              <td width="55%" class="Contents"><input type="text" name="procode" id="procode" value="<?php echo $prod_code ?>" /></td>
              <td width="18%" rowspan="7" align="left" valign="top" class="Contents"><img src="../olproducts/<?php echo $photo; ?>" alt="<?php echo $prod_name; ?>" width="100" style="border:1px dotted #99CC66;" /></td>
            </tr>
            <tr>
              <td class="Contents">Product Name</td>
              <td class="Contents"><input type="text" name="proname" id="proname" value="<?php echo $prod_name ?>" /></td>
              </tr>
            <tr>
              <td class="Contents">Supplier</td>
              <td class="Contents"><select name="supplier" id="supplier">
                <option selected="selected" value="<?php echo $supp_id; ?>"><?php echo $supp_id; ?></option>
                <?php 
$qry=mysql_query("select suppl_id,Name from olsupplier order by Name asc");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
                <option value="<?php echo $qrys['suppl_id']; ?>" ><?php echo $qrys['Name']; ?></option>
                <?php } ?>
              </select></td>
              </tr>
            <tr>
              <td class="Contents">Supplier Price</td>
              <td class="Contents"><input name="suppprice" type="text" id="suppprice" size="10" value="<?php echo $supp_price; ?>" /></td>
              </tr>
            <tr>
              <td class="Contents">MRP</td>
              <td class="Contents"><input name="mrp" type="text" id="mrp" size="10" value="<?php echo $mrp; ?>" /></td>
              </tr>
            <tr>
              <td class="Contents">Retailer Price </td>
              <td class="Contents"><input name="retval" type="text" id="retval" size="10"  value="<?php echo $dist_price; ?>"/></td>
              </tr>
            <tr>
              <td class="Contents">ROC Price</td>
              <td class="Contents"><input name="rocprice" type="text" id="rocprice" size="10" value="<?php echo $mem_price; ?>" /></td>
              </tr>
            <tr>
              <td class="Contents">Stock</td>
              <td class="Contents"><input name="stock" type="text" id="stock" size="10"  value="<?php echo $pro_stock; ?>"/></td>
              <td class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td class="Contents">BV</td>
              <td class="Contents"><input name="bv" type="text" id="bv" size="10" value="<?php echo $roc_bv; ?>" /></td>
              <td class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td class="Contents">Photo</td>
              <td class="Contents"><input type="file" name="fileField" id="fileField" /></td>
              <td class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td class="Contents">&nbsp;</td>
              <td class="Contents">&nbsp;</td>
              <td class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td class="Contents">&nbsp;</td>
              <td class="Contents"><input type="submit" name="button" id="button" value="Submit" />
                <input type="reset" name="button2" id="button2" value="Reset" /></td>
              <td class="Contents">&nbsp;</td>
            </tr>
          </table>
                </form>
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
