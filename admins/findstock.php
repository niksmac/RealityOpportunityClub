<link href="colours.css" rel="stylesheet" type="text/css" />
<?php 
include("../connect/session.php");
$av_uname=$_GET['content']; 
$quants=$_GET['store']; 
$qry=mysql_query("select * from itemsnew where itemsname='$av_uname'");
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
$qty=$qrys['quantity'];
}
$df=$qty-$quants;
echo "Currently ".$qty." In Stock";
?>
<br />
<?php
if ($df>=0)
{
?>
<input name="inhand" type="hidden" value="<?php echo $df; ?>" />
<span class="successtxt" >After this operation <strong><?php echo $df; ?></strong> In Hand</span>
<?php 
}
else  if ($df < 0)
{
?>
<span class="errtxt" >Unable to process due to Insufficient Stock</span>
<?php } ?>
