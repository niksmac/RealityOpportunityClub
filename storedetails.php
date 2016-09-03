<?php 
include("inner.tpl");
function ShowContent($title)
{
$id = $_GET['id'];
?>
<div id="content_area"><br />
<br />
<br />
<div class="tableouter">
<table width="90%" border="0" align="center" cellpadding="5" cellspacing="0" bordercolor="#557B24" style="border-collapse:collapse; margin-bottom:100px;">
<?php 
$tyu=1;
$qry=mysql_query("select storename,address,phone,location,ownername,district  from stores where id = '$id'  ");
while($qrys=mysql_fetch_array($qry))
{
?>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td width="173" align="left" valign="top"><strong>Name</strong></td>
      <td width="1197" align="left" valign="top"><?php echo strtoupper($qrys['storename']); ?></td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Owner Name</strong></td>
      <td align="left" valign="top"><?php echo strtoupper($qrys['ownername']); ?></td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Address</strong></td>
      <td align="left" valign="top"><?php echo nl2br($qrys['address']);  ?></td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Disrict </strong></td>
      <td align="left" valign="top"><?php echo nl2br($qrys['district']);  ?></td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Phone</strong></td>
      <td align="left" valign="top"><?php echo $qrys['phone'];  ?></td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Location</strong></td>
      <td align="left" valign="top"><?php echo $qrys['location'];  ?></td>
    </tr>

    <?php $tyu++; } ?>
  </table>
  </div>
  <br />
<br />
<br />
<br />
<br />
<br />

</div>
<?php 
}
function getTitle()
{
$id = $_GET['id'];
$qry=mysql_query("select storename  from stores where id = '$id' ");
while($qrys=mysql_fetch_array($qry))
{
$strname = $qrys['storename'];
}

return "Distribution Centers | ".$strname." | Reality Opportunity Club";
}
function showMeta()
{
$qry=mysql_query("select storename  from stores where id <> 9 ");
while($qrys=mysql_fetch_array($qry))
{
$strname .= $qrys['storename'].', ';
}

$meta = '<meta name="description" content="Reality Opportunity Club '.$strname.'"/>
<meta name="keywords" content="Distribution Centers, Reality Opportunity Club, '.$strname.'  "/>';
return $meta;
}
?>