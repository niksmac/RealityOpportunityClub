<?php 
include("../connect/session.php");
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>ROP Club : Administrator</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>
<link href="colours.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="66" height="185" align="left" valign="top"><img id="mlm_01" src="images/mlm_01.jpg" width="66" height="185" alt="" /></td>
    <td width="838" height="185" align="left" valign="top" background="images/mlm_13.jpg"><?php include("banner.php"); ?></td>
    <td width="76" height="185" align="left" valign="top"><img id="mlm_03" src="images/mlm_03.jpg" width="76" height="185" alt="" /></td>
  </tr>
  <tr>
    <td width="66" height="700" align="left" valign="top" background="images/mlm_07.jpg">&nbsp;</td>
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="ContentBlue" >
      <tr>
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><table width="100%" border="1" cellpadding="3" cellspacing="1" bordercolor="#00CCFF" class="Contents">
          <?php 
$hjg=mysql_query("select * from itemsnew where id='$id' ");
while($sdgfs=mysql_fetch_array($hjg))
{
$cat_id=$sdgfs['cat_id'];
$itid=$sdgfs['id'];
$path="../products/".$sdgfs['photo'];
?>
          <tr>
            <td height="54" colspan="2" bgcolor="#BBF1FF" class="ContentBold"><?php echo $sdgfs['prdct_id']; ?></td>
            <td height="54" bgcolor="#BBF1FF" class="ContentBold"><a href="edititems.php?id=<?php echo $id; ?>&amp;itm=1" class="redlinks">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE</a></td>
            </tr>
           <tr>
             <td class="ContentBold">Category</td>
             <td class="ContentBold"><?php echo $sdgfs['cat_id']; ?></td>
             <td width="25%" rowspan="10" ><img src="<?php echo $path; ?>" width="150" border="0"/></td>
             </tr>
           <tr>
             <td class="ContentBold">Product</td>
            <td class="ContentBold"><?php echo $sdgfs['brandname']; ?> - <?php echo $sdgfs['itemsname']; ?></td>
            </tr>
          <tr>
            <td width="15%" class="ContentBold">Description</td>
            <td width="60%" class="ContentBold"><?php echo $sdgfs['descr']; ?></td>
            </tr>
          <tr>
            <td class="ContentBold">BV Value</td>
            <td class="ContentBold"><?php echo $sdgfs['bv']; ?></td>
            </tr>
          <tr>
            <td class="ContentBold">Tax Rate</td>
            <td class="ContentBold"><?php echo $sdgfs['taxrate']; ?></td>
          </tr>
          
          <tr>
            <td class="ContentBold">MRP </td>
            <td class="ContentBold"><?php echo $sdgfs['mrp']; ?></td>
          </tr>
          <?php 
$hjsdsg=mysql_query("select * from itm_prices where itmid='$itid' ");
while($gfhd=mysql_fetch_array($hjsdsg))
{
$dp=$gfhd['dp'];
}
?>
          <tr>
            <td class="ContentBold">DP</td>
            <td class="ContentBold"><?php echo $dp; ?>&nbsp;</td>
          </tr>
          <tr>
            <td class="ContentBold">Price to Stores</td>
            <td class="ContentBold"><table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="#FFFFFF">
            
              <tr>
                <th align="left" valign="middle" scope="col"><u>Grade 1</u></th>
                <th align="left" valign="middle" scope="col"><u>Grade 2</u></th>
                <th align="left" valign="middle" scope="col"><u>Grade 3</u></th>
                <th align="left" valign="middle" scope="col"><u>Grade 4</u></th>
              </tr>
<?php 
$hjsdsg=mysql_query("select * from itm_prices where itmid='$itid' ");
while($gfhd=mysql_fetch_array($hjsdsg))
{
$gr1=$gfhd['gr1'];
?>
              <tr>
                <th align="left" valign="middle" scope="row"><?php echo $gfhd['gr1']; ?></th>
                <td align="left" valign="middle"><?php echo $gfhd['gr2']; ?></td>
                <td align="left" valign="middle"><?php echo $gfhd['gr3']; ?></td>
                <td align="left" valign="middle"><?php echo $gfhd['gr4']; ?></td>
              </tr>
<?php } ?> 
            </table></td>
          </tr>
          

          <?php } ?>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
    <td width="76" height="700" align="left" valign="top" background="images/mlm_09.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td width="66" height="58" align="left" valign="top"><img id="mlm_10" src="images/mlm_10.jpg" width="66" height="58" alt="" /></td>
    <td width="838" height="58" align="left" valign="top" background="images/mlm_14.jpg">&nbsp;</td>
    <td width="76" height="58" align="left" valign="top"><img id="mlm_12" src="images/mlm_12.jpg" width="76" height="58" alt="" /></td>
  </tr>
</table>
</body>
</html>
