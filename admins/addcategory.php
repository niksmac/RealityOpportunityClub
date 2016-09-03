<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
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
<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deletecategory.php?id=" + id;
}
</script>

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
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200" height="25" align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td width="200" height="109" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" bordercolor="#DADADA"><form action="addcat_code.php" method="post" name="form1" id="form1">
            <table width="400" border="0" cellpadding="3" cellspacing="0" class="Contents">
              <tr>
                <td height="36" colspan="3" class="Headings">ADD CATEGORY</td>
              </tr>
              <tr>
                <td width="107">Category Name</td>
                <td width="255"><input type="text" name="catname" id="catname" /></td>
                <td width="20">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="successtxt"><?php if (isset($_GET['yes'])) { ?>
                    <marquee>
                      New Category Added Successfully
                    </marquee>
                    <?php }?>
                  &nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="button" id="button" value="Submit" onclick="validateform1(form1)"/>
                    <input type="reset" name="button2" id="button2" value="Reset" /></td>
                <td>&nbsp;</td>
              </tr>
            </table>
        </form>
            <table width="450" border="1" cellpadding="3" cellspacing="1" bordercolor="#E0E0E0" class="Contents">
              <tr>
                <td width="14%" height="28" bordercolor="#E0E0E0" bgcolor="#E0E0E0" class="ContentBold">Sl. No.</td>
                <td width="53%" bordercolor="#E0E0E0" bgcolor="#E0E0E0" class="ContentBold">Category Name</td>
                <td width="33%" bordercolor="#E0E0E0" bgcolor="#E0E0E0" class="ContentBold">Action</td>
              </tr>
              <?php 
			$er=1;
$qry=mysql_query("select * from category order by catname asc");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
              <tr>
                <td height="29"><?php echo $er; ?></td>
                <td><?php echo $qrys['catname']; ?></td>
                <td><a href="editcategory.php?id=<?php echo $id; ?>&amp;stng=1" class="redlinks">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE</a></td>
              </tr>
              <?php $er++; }?>
          </table></td>
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
