<?php 
include("../connect/session.php");
$av_uname=$_GET['content']; 
?>
<link href="colours.css" rel="stylesheet" type="text/css" />
<?php 
$qry=mysql_query("select * from itemsnew where batchno='$av_uname' ");
$fsd=mysql_num_rows($qry);
if($fsd==0)
{
?>
<span class="successtxt">Batch No. Available !!</span>
<?php } else { ?>
<span class="errtxt">Sorry Batch No. Existing !! </span>
<?php } ?>
