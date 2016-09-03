<?php 
include("inner.tpl");
function ShowContent($title)
{
?>
<div id="content_area">


<?php 
$country = $_POST['country'];
$state = $_POST['state'];
$pinnum = $_POST['pinnum'];
$shptyp = $_POST['shptyp'];
$shpname = $_POST['shpname'];
$district = $_POST['district'];

 $shpcat = $_POST['shpcat'];
   $n        = count($shpcat);
   $i        = 0;
   while ($i < $n)
   {
      $shopcats .=$shpcat[$i].', ';
      $i++;
   }
   
$qry=mysql_query("select storename,address,phone,location  from stores where country='$country' or state='$state' or pincode='$pinnum' or pincode='$district' or storename like '%$shpname%'  and shpstat=1 ");
$noofres = mysql_num_rows ($qry); 

if ($noofres == 0) {
?>
<div class="errorinfodiv"> Sorry Your search found <?php echo $noofres;  ?> results <a href="roc-distributers.php"><img src="images/back.png" border="0" /></a></div>
<?php 
}
else if ($noofres >= 1) {
?>
<div class="successinfodiv"> Your search found <?php echo $noofres;  ?> results </div>
<br />
<br />
<table width="99%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#557B24" style="border-collapse:collapse; margin-bottom:100px;">
    <tr>
      <td width="42" align="left" valign="middle" background="images/bg.jpg" bgcolor="#EFEFEF" ><strong>No.</strong></td>
      <td width="695" align="left" valign="middle" background="images/bg.jpg" bgcolor="#EFEFEF" ><strong>Name &amp; Address</strong></td>
      <td width="307" align="left" valign="middle" background="images/bg.jpg" bgcolor="#EFEFEF" ><strong>Phone</strong></td>
      <td width="457" align="left" valign="middle" background="images/bg.jpg" bgcolor="#EFEFEF" ><strong>Location</strong></td>
    </tr>
    <?php 
$tyu=1;
while($qrys=mysql_fetch_array($qry))
{
?>
    <tr>
      <td align="left" valign="top"><?php echo $tyu;  ?></td>
      <td align="left" valign="top" ><h2><?php echo strtoupper($qrys['storename']); ?></h2>
          <?php echo "<br>"; echo nl2br($qrys['address']);  ?></td>
      <td align="left" valign="top"><?php echo $qrys['phone'];  ?></td>
      <td align="left" valign="top"><?php echo $qrys['location'];  ?></td>
    </tr>
    <?php $tyu++; } } ?>
  </table>
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
return "Distribution Centers | Reality Opportunity Club";
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