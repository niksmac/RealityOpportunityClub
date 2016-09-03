<?php include("../connect/session.php"); 
$id=$_GET['id'];?>
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
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{
if(name.elements['updtstk'].value.length<1)
{
alert("Please fill all the fields");
name.elements['updtstk'].focus();
return false;
}
}
return true;
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
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="82" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form id="form1" name="form1" method="post" action="updatestk_code.php?id=<?php echo $id; ?>">
          <table width="400" border="0" cellpadding="5" cellspacing="0" class="Contents">
<?php 
$qry=mysql_query("select * from itemsnew where id='$id' ");
while($qrys=mysql_fetch_array($qry))
{
$quantity=$qrys['quantity'];
$itemsname=$qrys['itemsname'];
}
?>
            <tr>
              <th colspan="2" align="left" valign="middle" scope="col"><p>Name :<?php echo $itemsname; ?></p>
                <p>In Hand : <?php echo $quantity; ?></p>                </th>
              </tr>
            <tr>
              <th width="45" align="left" valign="middle" scope="col">Nos</th>
              <th width="335" align="left" valign="middle" scope="col"><input name="updtstk" type="text" id="updtstk" size="9" /><input type="hidden" name="qty" value="<?php echo $quantity; ?>" id="qty" /></th>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row">&nbsp;</th>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row">&nbsp;</th>
              <td align="left" valign="middle"><input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
                <input type="reset" name="button2" id="button2" value="Reset" /></td>
            </tr>
          </table>
                </form>
        </td>
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
