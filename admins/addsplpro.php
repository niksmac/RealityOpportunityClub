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
<link href="colours.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ajax.js"></script>
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{

if(name.elements['name'].value.length<1){
alert('Please fill all the fields');
name.elements['name'].focus();
return false;}

if(name.elements['cat_id'].value.length<1){
alert("Please fill all the fields");
name.elements['cat_id'].focus();
return false;
}
if(name.elements['brandname'].value.length<1){
alert('Please fill all the fields');
name.elements['brandname'].focus();
return false;}
if(name.elements['mname'].value.length<1){
alert('Please fill all the fields');
name.elements['mname'].focus();
return false;}
if(name.elements['mphone'].value.length<1){
alert('Please fill all the fields');
name.elements['mphone'].focus();
return false;}
if(name.elements['mrktval'].value.length<1){
alert('Please fill all the fields');
name.elements['mrktval'].focus();
return false;}
if(name.elements['rocval'].value.length<1){
alert('Please fill all the fields');
name.elements['rocval'].focus();
return false;
}if(name.elements['dp'].value.length<1){
alert('Please fill all the fields');
name.elements['dp'].focus();
return false;}
if(name.elements['bv'].value.length<1){
alert('Please fill all the fields');
name.elements['bv'].focus();
return false;}


return true;
}
}
function getScriptPage3(div_id,content_id)		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
     		http.open("GET", "brands.php?content=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);		
			}
function getScriptPage4(div_id,content_id)		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
     		http.open("GET", "betchavail.php?content=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);		
			}
</script>
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
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form action="specialpro_code.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="450" border="0" cellpadding="4" cellspacing="0" class="Contents">
            <tr>
              <td width="134">&nbsp;</td>
              <td width="304">&nbsp;</td>
              </tr>
            <tr>
              <td>Name</td>
              <td><input type="text" name="name" id="name" />
                <span class="errtxt">*</span></td>
              </tr>
            <tr>
              <td>Category</td>
              <td><select name="cat_id" id="cat_id" onchange="getScriptPage3('output_divst3','cat_id')">
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
              </select>
                <span class="errtxt">*</span></td>
            </tr>
            <tr>
              <td>Sub Category</td>
              <td><span class="output-div-container"><span id="output_divst3"><select name="brandname" id="brandname"><option selected="selected">- select -</option></select>
      <span class="errtxt">*</span></span></span>              </td>
            </tr>
            <tr>
              <td>Manufacturers Name</td>
              <td><input name="mname" type="text" id="mname" value="Meera Homes" size="30" />
                <span class="errtxt">*</span></td>
            </tr>
            <tr>
              <td>Manufacturers web</td>
              <td><input name="mweb" type="text" id="mweb" value="http://www.meerahomes.com/" size="45" /></td>
            </tr>
            <tr>
              <td>Contact No.</td>
              <td><input name="mphone" type="text" id="mphone" value="Ph: +91 - 484 - 4058808, 4058809" />
                <span class="errtxt">*</span></td>
            </tr>
            <tr>
              <td>Market Value</td>
              <td><input name="mrktval" type="text" id="mrktval" size="15" />
                <span class="errtxt">*</span></td>
            </tr>
            <tr>
              <td>ROC Value</td>
              <td><input name="rocval" type="text" id="rocval" size="15" />
                <span class="errtxt">*</span></td>
            </tr>
            <tr>
              <td>DP</td>
              <td><input name="dp" type="text" id="dp" value="-" size="15" />
                <span class="errtxt">*</span></td>
            </tr>
            <tr>
              <td>BV</td>
              <td><input name="bv" type="text" id="bv" size="15" />
                <span class="errtxt">*</span></td>
            </tr>
            <tr>
              <td>Photo</td>
              <td><input type="file" name="files" id="files" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
                <input type="reset" name="button2" id="button2" value="Reset" /></td>
            </tr>
          </table>
        </form>          <p>&nbsp;</p></td>
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
