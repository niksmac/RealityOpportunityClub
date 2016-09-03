<?php 
include("../connect/session.php");
$numyy=$_GET['numyy'];
$numkk=$_GET['numkk'];
$loopvar=$_GET['loopvar'];
$qryfh=mysql_query("select * from itemsnew where prdct_id='$numyy'");
while($qryshf=mysql_fetch_array($qryfh))
{
$itemsname=$qryshf['itemsname'];
$batchno=$qryshf['batchno'];
$mrp=$qryshf['mrp'];
$taxrate=$qryshf['taxrate'];
$id=$qryshf['id'];
$bv=$qryshf['bv'];
$netbv=$bv*$numkk;
$retyty=$mrp*$numkk;
$divider=$taxrate+100;
$act_va=$mrp/$divider*100;
$tx_amt=$mrp-$act_va;
}
?>
<link href="colours.css" rel="stylesheet" type="text/css" />

<table border="1" cellpadding="2" cellspacing="1" bordercolor="#CCCCCC">
  <tr>
    <th class="ContentBlue" scope="col">Item Name</th>
    <th class="ContentBlue" scope="col">Batch Number</th>
    <th class="ContentBlue" scope="col">Unit Price</th>
    <th class="ContentBlue" scope="col">Tax Rate</th>
    <th class="ContentBlue" scope="col">Value</th>
    <th class="ContentBlue" scope="col">Tax Amt.</th>
    <th class="ContentBlue" scope="col">BV</th>
    <th class="ContentBlue" scope="col">MRP</th>
  </tr>
  <tr>
    <th width="50" scope="col"><?php echo $itemsname; ?></th>
    <th width="50" scope="col"><?php echo $batchno; ?></th>
    <th width="50" scope="col"><?php echo $mrp; ?></th>
    <th width="50" scope="col"><?php echo $taxrate; ?></th>
    <th width="50" scope="col"><?php echo $numkk*round($act_va,2); ?></th>
    <th width="50" scope="col"><?php echo $numkk*round($tx_amt,2); ?></th>
    <th width="50" scope="col"><?php echo $netbv; ?></th>
    <th width="50" scope="col"><input name="lntotals<?php echo $loopvar; ?>" type="text" value="<?php echo $retyty; ?>" size="1" id="lntotals<?php echo $loopvar; ?>" /></th>
  </tr>
</table>
