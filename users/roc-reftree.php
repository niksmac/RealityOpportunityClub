<?php 
include('index.tpl');

function getTitle()
{
$rocuname = $_SESSION['uname'];
$qry=mysql_query("select Name from members where MemberID='$rocuname'");
while($qrys=mysql_fetch_array($qry))
{
$Name=$qrys['Name'];
}
echo 'Referral Treee | '.$Name;
}

function ShowContent($rocuname)
{
?>
<br />
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF" >
  <tr>
    <td align="left" valign="top" ><h2>Referral Treee</h2></td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" ><?php include("view_ref_tree.php"); ?></td>
  </tr>
</table>    
<?php 
}

?>