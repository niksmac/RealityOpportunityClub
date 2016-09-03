<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?><link href="colours.css" rel="stylesheet" type="text/css" />
<table width="600" border="1" cellpadding="3" cellspacing="0" bordercolor="#F1F1F1" class="Contents">

  <tr>
    <td height="86" colspan="6" class="Headings"><div align="center">
      <p>ROP Club<br />
        Stock Report <?php echo date('d-m-Y'); ?><br />
      </p>
      </div></td>
  </tr>
  <tr>
    <td width="24" align="left" valign="middle" class="Headings"><strong>No.</strong></td>
    <td width="133" align="left" valign="middle" class="Headings"><strong>Item Name</strong></td>
    <td width="55" align="left" valign="middle" class="Headings"><strong>MRP</strong></td>
    <td width="98" align="left" valign="middle" class="Headings"><strong>In Stock</strong></td>
    <td width="95" align="left" valign="middle" class="Headings">BV</td>
    <td width="133" align="left" valign="middle" class="Headings">Total Amount</td>
  </tr>  <?php 
  $i=1;
$hjg=mysql_query("select distinct cat_id from itemsnew ");
while($sdgfs=mysql_fetch_array($hjg))
{
$cat_id=$sdgfs['cat_id'];
?>
  <tr>
    <td colspan="6" align="left" valign="middle" bgcolor="#DDF9FF" class="ContentBold"><?php echo $cat_id; ?></td>
  </tr>
  <?php 
$dfgodgh=mysql_query("select distinct brandname from itemsnew where cat_id='$cat_id' ");
while($gdgdfgd=mysql_fetch_array($dfgodgh))
{
$brandname=$gdgdfgd['brandname'];
?>
  <tr>
    <td colspan="6" align="left" valign="middle" class="successtxt"><u><strong><?php echo $brandname; ?></strong></u></td>
  </tr>
<?php 
$er=1;
$qry=mysql_query("select * from itemsnew where cat_id='$cat_id' and brandname='$brandname'");
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
$prdct_id=$qrys['prdct_id'];
$quantity=$qrys['quantity'];
$bv[$i]=$qrys['bv'];

?>
  <tr>
    <td align="left" valign="middle"><?php echo $er; ?></td>
    <td align="left" valign="middle"><?php echo $qrys['itemsname']; ?></td>
    <td align="left" valign="middle"><?php echo $qrys['mrp']; ?></td>
    <td align="left" valign="middle"><?php echo $quantity; ?></td>
    <td align="left" valign="middle"><?php echo $bvs[$i]=$qrys['bv'] * $quantity; ?></td>
    <td align="left" valign="middle"><?php echo $tot[$i]=$qrys['mrp'] * $quantity; ?></td>
  </tr>  <?php $er++; $i++; }  } ?>
  <?php } ?>
  <tr>
    <td height="92" colspan="6" align="left" valign="middle" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" align="left" valign="middle" class="ContentBold"><span class="Headings">Grand Total</span></td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="middle" class="ContentBold">&nbsp;</td>
    <td align="left" valign="middle" class="ContentBold">BV</td>
    <td align="left" valign="middle" class="ContentBold">&nbsp;</td>
    <td align="left" valign="middle" class="ContentBold">Amount</td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="middle" class="Headings">&nbsp;</td>
    <td align="left" valign="middle" ><?php echo $wer=array_sum($bvs);?></td>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle"><?php echo "Rs. ".$wer=array_sum($tot)." /-";?></td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="middle" class="Headings">&nbsp;</td>
    <td align="left" valign="middle" >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
</table>
