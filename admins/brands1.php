<?php 
include("../connect/session.php");
$av_uname=$_GET['content']; 
?>
<select name="brandname" id="brandname">
<?php 
$qry=mysql_query("select * from brands where cat_id='$av_uname' order by brandname asc");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
  <option value="<?php echo $qrys['brandname']; ?>" ><?php echo $qrys['brandname']; ?></option>
  <?php } ?>
</select>
