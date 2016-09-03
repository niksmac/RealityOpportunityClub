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

<script type="text/javascript" >

function validateform1(name)
{
form1.onsubmit=function()
{

if(name.elements['rocid'].value.length<1)
{
name.elements['rocid'].focus();
alert ("Mandatory !!");
return false;
}


return true;
}
}
</script>

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript"  language="javascript">

function hjfghjf(div_id,content_id)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			if (num.length == 0) return false;
			myRand=parseInt(Math.random()*99999999);
			var dt = new Date( ).valueOf();
     		http.open("GET", "usrdetails.php?Myrand="+myRand+"&content=" + escape(num) + "?dt=" + escape(dt), true);
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
        <td align="left" valign="top" class="ContentBlue" ><form id="form1" name="form1" method="post" action="ptreekey_code.php">
          <!--<table width="500" border="0" cellpadding="5" cellspacing="0" class="Contents" style="border:thin; border: #0A0A0A;">
            <tr>
              <td colspan="2"><strong class="Headings">Key Generation</strong></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
              <td width="63">ROC ID</td>
              <td width="417"><input name="rocid" type="text" id="rocid" size="10" onkeyup="javascript:hjfghjf('dghsdfsgdfg','rocid')"  onmouseout="javascript:hjfghjf('dghsdfsgdfg','rocid')"/></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><span class="output-div-container"><span id="dghsdfsgdfg"></span></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Generate" onclick="validateform1(form1)" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>-->
          <table width="500" border="0" cellpadding="5" cellspacing="0" class="Contents" style="border:thin; border: #0A0A0A;">
            <tr>
              <td colspan="2"><strong class="Headings">Key Generation</strong></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><a href="ptreekeylist.php?pm&content=A" class="redlinks">View List</a></td>
              </tr>
              <tr>
              <td width="63">Kit Type</td>
              <td width="417"><select name="kittype" id="kittype">
              
                <option value="A">2x500ml Noni Rs 1200</option>
                <option value="B">Ozone Disinfector Rs 2200</option>
                <option value="C">Energizer Rs 1700</option>
                <?php  
			  $i=3;
$alphabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); 
$qryfh=mysql_query("select kitname from primarytreekit where id > 3 order by id asc ");
while($qryshf=mysql_fetch_array($qryfh)){
$kitname=$qryshf['kitname'];
?>
<option value="<?php echo $alphabet[$i]; ?>"><?php echo $kitname; ?></option>
<?php  $i++; } ?>

              </select>
              </td>
              </tr>
            <tr>
              <td>Nos</td>
              <td><input name="noof" type="text" id="noof" size="5" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Generate" onclick="validateform1(form1)" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
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
