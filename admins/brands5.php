<?php 
include("../connect/session.php");
$av_uname=$_GET['content']; 
$av_undfe=$_GET['brnds']; 
$qry=mysql_query("select * from itemsnew where cat_id='$av_undfe' and brandname='$av_uname'");
$chk=mysql_num_rows($qry);
if ($chk>=1)
{
?>
<link href="colours.css" rel="stylesheet" type="text/css" />

<select name="items" id="items">
  <option selected="selected">- select -</option>
  <?php 
$qry=mysql_query("select * from itemsnew where cat_id='$av_undfe' and brandname='$av_uname'");
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
  <option value="<?php echo $qrys['itemsname']; ?>" ><?php echo $qrys['itemsname']; ?></option>
  <?php } ?>
</select>
<?php }
else if ($chk==0)
{
?>
<span class="errtxt">No Item In This Category</span>
<?php } ?>