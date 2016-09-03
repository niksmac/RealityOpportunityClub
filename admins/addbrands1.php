<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>MLM</title>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deletebrands.php?id=" + id;
}
</script>
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{

if(name.elements['cat_id'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['cat_id'].focus();
return false;
}
if(name.elements['brandname'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['brandname'].focus();
return false;
}
return true;
}
}
</script>

<link href="colours.css" rel="stylesheet" type="text/css" />
</head>

<body background="images/1.jpg" style="background-attachment:fixed;">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#010101" background="images/background.jpg" style="background-repeat:no-repeat; background-position:center;">
  <tr>
    <td width="950" height="150" align="left" valign="top"><?php include("banner.php"); ?></td>
  </tr>
  <tr>
    <td width="950" height="600" align="left" valign="top"><table width="950" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200" height="25" align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td width="200" height="109" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top"><form name="form1" method="post" action="addbrands_code.php"><table width="500" border="0" cellpadding="3" cellspacing="0" class="Contents">
          <tr>
            <td height="35" colspan="3"><strong class="Headings">ADD BRANDS</strong></td>
            </tr>
          <tr>
            <td width="172">Category</td>
            <td width="154"><select name="cat_id" id="cat_id">
            <option selected="selected">- select -</option>
            <?php 
$qry=mysql_query("select * from category order by catname asc");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
<option value="<?php echo $qrys['catname']; ?>" ><?php echo $qrys['catname']; ?></option>
<?php } ?>
            </select></td>
            <td width="156">&nbsp;</td>
          </tr>
          <tr>
            <td>Items</td>
            <td><input type="text" name="brandname" id="brandname" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
              <input type="reset" name="button2" id="button2" value="Reset" /></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="Contents">
          <?php 

$hjg=mysql_query("select distinct cat_id from brands");
while($sdgfs=mysql_fetch_array($hjg))
{
$cat_id=$sdgfs['cat_id'];
?>
            <tr>
              <td height="20" colspan="3" bgcolor="#F1F1F1" class="Headings"><?php echo $cat_id; ?></td>
              </tr>
            <tr>
              <td width="14%" height="21" class="ContentBold">Sl. No.</td>
              <td width="36%" class="ContentBold">Category Name</td>
              <td width="50%" class="ContentBold">Action</td>
            </tr>
            <?php 
			$er=1;
$qry=mysql_query("select * from brands where cat_id='$cat_id'");
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
            <tr>
              <td height="20"><?php echo $er; ?></td>
              <td height="20"><?php echo $qrys['brandname']; ?></td>
              <td height="20"><a href="editbrands.php?id=<?php echo $id; ?>&amp;stng=1" class="redlinks">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE</a></td>
            </tr>
            <?php $er++; } } ?>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="950" height="50" align="left" valign="top"><?php include("footer.php"); ?></td>
  </tr>
</table>
</body>
</html>
