<?php 
include("inner.tpl");
function ShowContent($title)
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
$qry=mysql_query("select * from pdoductdescription ");
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
          <?php   echo nl2br(substr ($description,0,200)); ?>
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
      <td align="left" valign="middle">&nbsp;</td>
    </tr>
  </table>
</div>
<?php 
}
function getTitle()
{
return "Products | Reality Opportunity Club";
}
function showMeta()
{
$qry=mysql_query("select name from pdoductdescription ");
while($qrys=mysql_fetch_array($qry))
{
$name .=$qrys['name'].', ';
}
$meta = '<meta name="description" content="To reach out the horizon of a customer controlled market, where exploitation by unwanted middlemen and misdirecting advertisements are avoided or curbed. The customers get bespoke products and the Member-Distributors get their due benefits for linking ROC products."/>
<meta name="keywords" content="Products, Reality Opportunity Club, '.$name.'  "/>';
return $meta;
}
?>