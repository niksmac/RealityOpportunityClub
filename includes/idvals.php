<?php 
include("../connect/connect.php");
$av_uname=$_GET['content']; 
if ($av_uname=="Guest" || $av_uname=="")
{
?>
<link href="ropclub.css" rel="stylesheet" type="text/css" />
<span class="correct"><strong> Proceed as Guest !</strong></span>
<?php 
}
else if ($av_uname!="Guest")
{
$qry=mysql_query("select MemberID from members  where MemberID='$av_uname'");
if (mysql_num_rows($qry) >= 1) 
{
?>
<span class="correct"><strong> &radic; Valid&nbsp;&nbsp;</strong></span>
<?php 
}
else if (mysql_num_rows($qry) == 0) { 
?>
<span class="wrong"><strong> &larr; Invalid ID !</strong></span>
<?php 
}
}
?>