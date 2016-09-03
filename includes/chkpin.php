<?php 
include("../connect/connect.php");
$av_uname=$_GET['content']; 
$qry=mysql_query("select joinkey from joinig_keys  where BINARY joinkey='$av_uname' and stat = 0");
if (mysql_num_rows($qry) == 1) 
{
?>
<span class="correct">&radic; Valid&nbsp;&nbsp;</span>
<?php 
}
else if (mysql_num_rows($qry) == 0) { 
?>
<span class="wrongnik">&larr; PIN may Incorrect or Used !</span>
<?php 
}

?>