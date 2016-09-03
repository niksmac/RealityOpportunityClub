<?php 
include("../connect/session.php");
$av_uname=$_GET['content']; 
?>

<select name="brandname" id="brandname"  onchange="getScriptPage5('output_divst5','brandname','cat_id')">
  <option selected="selected">- select -</option>
<?php 
$qry=mysql_query("select * from brands where cat_id='$av_uname' order by brandname asc");
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
  <option value="<?php echo $qrys['brandname']; ?>" ><?php echo $qrys['brandname']; ?></option>
  <?php } ?>
</select>
