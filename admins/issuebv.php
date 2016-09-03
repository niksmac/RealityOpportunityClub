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

if(name.elements['store'].value.length<1)
{

alert("This Field cannot be Blank");
name.elements['store'].focus();
return false;
}

if(name.elements['bvs'].value.length<1)
{
alert("This Field cannot be Blank");
name.elements['bvs'].focus();
return false;
}
return true;
}
}
function getScriptPage3(div_id,content_id)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			
			var strChar;
   			var blnResult = true;

   			if (num.length == 0) return false;
     		http.open("GET", "totbvstill.php?content=" + escape(num), true);
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
        <td width="76%" align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" ><form id="form1" name="form1" method="post" action="issuebv_code.php">
          <table width="450" border="0" cellpadding="3" cellspacing="0" class="Contents">
            <tr>
              <td width="124" align="left" valign="top">Store</td>
              <td width="314" align="left" valign="top"><select name="store" id="store" onchange="javscript:getScriptPage3('output_divst3','store')">
                <option selected="selected">- select -</option>
                <?php 
$qry=mysql_query("select * from stores order by storename asc");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
                <option value="<?php echo $qrys['storename']; ?>" ><?php echo $qrys['storename']." - ".$qrys['store_id']; ?></option>
                <?php } ?>
              </select></td>
              </tr>
            <tr>
              <td align="left" valign="top">BV</td>
              <td align="left" valign="top"><input name="bvs" type="text" id="bvs" value="0" size="10" />
              <span class="output-div-container"><span id="output_divst3"></span></span></td>
            </tr>
            <tr>
              <td align="left" valign="top">Reason(If any)</td>
              <td align="left" valign="top">
                <textarea name="reasons" cols="30" rows="4" id="reasons">Not Specified !</textarea>
              </td>
              </tr>
            <tr>
              <td align="left" valign="top" class="Contents">&nbsp;</td>
              <td align="left" valign="top" class="Contents"><p>
                <label>
                  <input name="ACT" type="radio" id="RadioGroup1_0" value="A" checked="checked" />
                  ADD</label>
                <label>
                  <input type="radio" name="ACT" value="S" id="RadioGroup1_1" />
                  SUBTRACT</label>
                <br />
              </p></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top"><?php if(isset($_GET['yes'])) echo "<font color=red >BV Distributed</font> "; ?></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
                <input type="reset" name="button2" id="button2" value="Reset" /></td>
              </tr>
          </table>
                </form>
        </td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top"></td>
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
