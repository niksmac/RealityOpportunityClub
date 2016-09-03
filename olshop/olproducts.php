<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olshplogin'];
?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td width="100%"><h1>Product List</h1></td>
  </tr>
  <tr>
    <td>
    
    
<table width="700" height="70" cellspacing="1" class="tablesorter">
   <thead>
      <tr>
        <th width="5%" height="41" bgcolor="#EBEBEB"><strong> No</strong></th>
        <th width="18%" bgcolor="#EBEBEB"><strong>Product Code </strong></th>
        <th width="17%" bgcolor="#EBEBEB"><strong>Product Name </strong></th>
        <th width="8%" bgcolor="#EBEBEB"><strong>MRP</strong></th>
        <th width="10%" bgcolor="#EBEBEB"><strong>Shop  Price </strong></th>
        <th width="11%" bgcolor="#EBEBEB"><strong>ROC Price</strong></th>
        <th width="10%" bgcolor="#EBEBEB">BV</th>
        <th width="6%" bgcolor="#EBEBEB">BP</th>
        <th width="15%" bgcolor="#EBEBEB"><strong>Stock</strong></th>
      </tr>
    </thead>
 
      <tbody>
<?php 
$slno = 1;
$qrtyh=mysql_query("select prod_code,prod_name,mrp,dist_price,mem_price,pro_stock,roc_bv, roc_bp  from ol_products ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$prod_code =$qraysjh['prod_code'];
$prod_name =$qraysjh['prod_name'];
$mrp = $qraysjh['mrp'];
$dist_price = $qraysjh['dist_price'];
$mem_price = $qraysjh['mem_price'];
$pro_stock = $qraysjh['pro_stock'];
$roc_bv = $qraysjh['roc_bv'];
$roc_bv = $qraysjh['roc_bp'];
?>
      <tr>
        <td><?php echo $slno; ?>&nbsp;</td>
        <td><?php echo $prod_code; ?>&nbsp;</td>
        <td><?php echo $prod_name; ?>&nbsp;</td>
        <td><?php echo $mrp; ?>&nbsp;</td>
        <td><?php echo $dist_price; ?>&nbsp;</td>
        <td><?php echo $mem_price; ?>&nbsp;</td>
        <td><?php echo $roc_bv; ?></td>
        <td><?php echo $roc_bv; ?></td>
        <td><?php if ($pro_stock == 0) echo '<div class="notokdiv" title="Not in Stock">Not in Stock</div>'; else echo '<div class="okdiv" title="AVAILABLE">AVAILABLE</div>'; ?>&nbsp;</td>
      </tr>
<?php $slno++;} ?>
</tbody>
    </table></td>
  </tr>
  <tr>
    <td>
<!--    <div id="pager" class="pager">

	<form>

		<img src="img/first.png" class="first"/>
		<img src="img/prev.png" class="prev"/>
		<input type="text" class="pagedisplay" size="6"/>
		<img src="img/next.png" class="next"/>
		<img src="img/last.png" class="last"/>
		<select class="pagesize" style="width:50px;">

			<option selected="selected"  value="10">10</option>

			<option value="20">20</option>

			<option value="30">30</option>

			<option  value="40">40</option>

		</select>

	</form>

</div>-->
</td>
  </tr>
</table>


<?php
}
?>

<!--<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.pager.js"></script>
	<script type="text/javascript">
	$(function() {
		$("table")
			.tablesorter({widthFixed: true, widgets: ['zebra']})
			.tablesorterPager({container: $("#pager")});
	});
	</script>-->