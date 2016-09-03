<?php 
include('index.tpl');

function getTitle()
{
echo 'Purchase Details ';
}

function ShowContent($rocuname)
{

$qrtyh=mysql_query("select bv  from bvthruweb where memid='$rocuname'");
$yesorno = mysql_num_rows($qrtyh);
if ( $yesorno == 0)
{
echo "<div class='errorinfodiv'>No Purchase from ROC</div>";
}
else if ( $yesorno != 0)
{
if (isset ($_GET['srch']))
{
$dat1 = $_POST['ADate'];
$dat2 = $_POST['ADate2'];
}
else
{
$dat1 = "";
$dat2 = "";
}
?>
<script type="text/javascript" src="js/datepicker.js"></script>
<form method="post" name="filter" id="filter" action="roc-purchasedetails.php?srch" >
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0" bordercolor="#9A9A9A" style="border-collapse:collapse;">

<tr>
<td width="37">From</td>
<td width="133"><input name="ADate" type="text" id="ADate" onclick="displayDatePicker('ADate', false, 'ymd', '-');" size="10" value="<?php echo $dat1; ?>"/></td>
<td width="26">To</td>
<td width="180"><input name="ADate2" type="text" id="ADate2" onclick="displayDatePicker('ADate2', false, 'ymd', '-');" value="<?php echo $dat2; ?>" size="10"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><label class="submit"><input type="submit" name="button" id="button" value="Filter" onclick="return validatepfilter(filter)" /></label></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="4">&nbsp;</td>
</tr>
</table>
</form>

<table width="99%" border="1" align="center" cellpadding="4" cellspacing="0" bordercolor="#B2B2B2" style="background-color:White;border-color:#B2B2B2;border-width:1px;border-style:None;border-collapse:collapse; margin-bottom:100px;">
<tr>
<td width="5%" bgcolor="#F5F5F5" class="greentext"><strong>No.</strong></td>
<td width="54%" bgcolor="#F5F5F5" class="greentext"><strong>Store ID</strong></td>
<td width="32%" bgcolor="#F5F5F5" class="greentext"><strong>Date</strong></td>
<td width="9%" bgcolor="#F5F5F5" class="greentext"><strong>BV</strong></td>
</tr>
<?php } function getStoreName($strId)
{
$qrstdyh=mysql_query("select storename  from stores where store_id='$strId' ");
while($qrsaysjh=mysql_fetch_array($qrstdyh))
{
$storename =$qrsaysjh['storename'];
}
return ($storename);
} 
$slno=1;
if (isset ($_GET['srch']))
{
$dat1 = $_POST['ADate']." 00:00:00";
$dat2 = $_POST['ADate2']." 00:00:00";
$qrtyh=mysql_query("select bv,datentim,shopid  from bvthruweb where memid='$uname' and datentim between '$dat1' and '$dat2'");
}
else
{
$qrtyh=mysql_query("select bv,datentim,shopid  from bvthruweb where memid='$rocuname' ");
}
while($qraysjh=mysql_fetch_array($qrtyh))
{
$bv =$qraysjh['bv'];
$datentim =$qraysjh['datentim'];
$shopid =$qraysjh['shopid'];
$bvsum = $bvsum + $bv;
?>
<tr>
<td ><?php echo $slno; ?>&nbsp;</td>
<td ><?php echo $shopid; ?> (<?php echo getStoreName($shopid); ?>)&nbsp;</td>
<td >&nbsp;<?php echo $datentim; ?></td>
<td ><?php echo $bv; ?>&nbsp;</td>
<?php 
$shopid = "";$slno++; 

?>
</tr>
<tr>
<td colspan="3" ><strong>Total</strong></td>
<td ><strong><?php echo $bvsum; ?></strong></td>
</tr>
</table>
<?php 
}
}

?>
