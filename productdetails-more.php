<?php 
include("inner.tpl");

function ShowContent($id)
{
?>
<div id="content_area">
  <table width="99%" border="0" cellpadding="5" cellspacing="0" class="ContentBold">
    <tr>
      <td align="left" valign="middle" >&nbsp;</td>
      <td align="left" valign="middle">&nbsp;</td>
    </tr>
    <?php 
	$id = $_GET['id'];
$rwerq=1;
$qry=mysql_query("select * from pdoductdescription where id = '$id'");
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
$name=$qrys['name'];
$description=$qrys['description'];
$more=$qrys['more'];
?>
    <tr>
      <td width="22" align="left" valign="middle" class="boldOrange"><?php echo $rwerq; ?></td>
      <td width="489" align="left" valign="middle"><a href="productdetails-more.php?id=<?php echo $id; ?>"  class="redlink"><?php echo $name; ?></a></td>
    </tr>
    <tr>
      <td align="left" valign="middle" >&nbsp;</td>
      <td align="left" valign="middle"><div align="justify">
        <?php   echo nl2br($description); ?>
        ... </div></td>
    </tr>
    <tr>
      <td align="left" valign="middle" >&nbsp;</td>
      <td align="left" valign="middle">&nbsp;</td>
    </tr>
    <?php $rwerq++; } ?>
    <tr>
      <td align="left" valign="middle" >&nbsp;</td>
      <td align="left" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="middle" >&nbsp;</td>
      <td align="left" valign="middle"></td>
    </tr>
  </table>
</div>
<?php 
}
function getTitle()
{
$id = $_GET['id'];
$qry=mysql_query("select name from pdoductdescription where id = '$id'");
while($qrys=mysql_fetch_array($qry))
{
$name=$qrys['name'];
}
return "Product Details | $name | Reality Opportunity Club";
}
function showMeta()
{
$id = $_GET['id'];
$qry=mysql_query("select name,description from pdoductdescription where id = '$id'");
while($qrys=mysql_fetch_array($qry))
{
$name=$qrys['name'];
$description=$qrys['description'];
}
$metadesc = substr ($description, 0, 200);
$meta = '<meta name="description" content="'.$metadesc.'"/>
<meta name="keywords" content="Product Details, Reality Opportunity Club, PROC kit, '.$name.'"/>';
return $meta;
}
?>