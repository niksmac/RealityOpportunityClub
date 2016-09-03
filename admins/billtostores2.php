<link href="colours.css" rel="stylesheet" type="text/css" />
<link href="colours.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="screen" href="styles/vlaCal-v2.1.css" type="text/css" />
<link rel="stylesheet" media="screen" href="styles/vlaCal-v2.1-LostMobiles_cal.css" type="text/css" />
<link href="LostMobilesIndia.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jslib/mootools-1.2-core.js"></script>
<script type="text/javascript" src="jslib/vlaCal-v2.1.js"></script>
<script type="text/javascript">
		window.addEvent('domready', function() { 
		new vlaDatePicker('exampleIV-B', { style: 'LostMobiles_cal', offset: { x: 0, y: 0 } });
		});	
</script>
<script type="text/javascript" src="ajax.js"></script>


<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{

if(name.elements['cstname'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['cstname'].focus();
return false;
}
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = name.elements['email'].value;
   	if(reg.test(address) == false) 
	{
    alert('Invalid Email Address');
	name.elements['email'].focus();
    return false;
 	}
return true;
}
}
</script>



<script type="text/javascript">
function getScriptPagex(div_id,content_id1)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id1).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
     		http.open("GET", "newrows.php?erty=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
		}
function calcprices(div_id,productid,quty,myloop)
		{	
			subject_id = div_id;
			var strChar;
   			var blnResult = true;
			var numyy=document.getElementById(productid).value;
			var numkk=document.getElementById(quty).value;
			var loopvar=document.getElementById(myloop).value;
			if (numyy.length == 0)
			{
			alert ("Select Item First!!");
			return false;
			}
			http.open("GET", "itmdetails.php?numyy=" + escape(numyy) + "&numkk=" + escape(numkk) + "&loopvar=" + escape(loopvar), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
		}
		
function get_total(div_id)
		{	
			subject_id = div_id;
			var strChar;
   			var blnResult = true;
			
			alert ("Select Item First!!");
			
			http.open("GET", "get_total.php", true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
		}
</script>
<script type="text/javascript" language="JavaScript">
function checkForm() {
answer = true;
if (siw && siw.selectingSomething)
	answer = false;
return answer;
}//
</script>


<script type="text/javascript" language="JavaScript" src="./sample_data.js"></script> <!-- WICK STEP 2: DEFINE COLLECTION ARRAY THAT HOLDS DATA -->
<script type="text/javascript" language="JavaScript" src="./wick.js"></script> <!-- WICK STEP 3: INSERT WICK LOGIC -->

<link rel="stylesheet" type="text/css" href="./wick.css" />
<form id="form1" name="form1" method="post" action="savemybill_code.php">
  <table border="0" cellpadding="0" cellspacing="0" bordercolor="#AFAFAF">
  <tr>
    <th scope="col"><table width="630" height="328" style="border:1px solid #D7F7FF;" cellpadding="0" cellspacing="0" class="Contents">
      <tr>
        <td width="307" height="176" align="left" valign="top"><table width="97%" border="0" cellpadding="3" cellspacing="0" class="Contents">
            <tr>
              <td width="17%" align="left" valign="top">Sold To</td>
              <td width="58%" align="left" valign="top"><input name="cstname" type="text" id="cstname" class="wickEnabled" size="20" wrap="virtual"/></td>
              <td width="25%" align="left" valign="top">
<?php $MaxID = mysql_query("SELECT MAX(billno) FROM `bills`");
$MaxID = mysql_fetch_array($MaxID, MYSQL_BOTH);
$invoicenos = $MaxID[0]+1; ?></td>
            </tr>
            
            <tr>
              <td align="left" valign="top">Name</td>
              <td colspan="2" align="left" valign="top"><input type="text" name="nametoprint" id="nametoprint" /></td>
            </tr>
            <tr>
              <td height="112" align="left" valign="top">Address</td>
              <td height="112" colspan="2" align="left" valign="top"><textarea name="address" cols="25" rows="6" id="address"></textarea></td>
            </tr>
            <tr>
              <td height="25" align="left" valign="top">email</td>
              <td height="25" colspan="2" align="left" valign="top"><input name="email" type="text" id="email" size="30" /></td>
            </tr>
        </table></td>
        <td width="305" align="left" valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="Contents">
              <tr>
                <td colspan="2" align="center" valign="middle" class="ContentBold">INVOICE</td>
              </tr>
              <tr>
                <td width="35%">Invoice No.</td>
                <td width="65%"><input name="invoicenos" type="text" id="invoicenos" value="<?php echo $invoicenos; ?>" size="10" readonly="readonly" /></td>
              </tr>
              <tr>
                <td>Date</td>
                <td><input name="billdate" type="text" class="inputbox" id="exampleIV-B" size="15" tabindex="2"/></td>
              </tr>
              <tr>
                <td>Order</td>
                <td><input type="text" name="ordernos" id="ordernos" /></td>
              </tr>
                </table></td>
        </tr>
      <tr>
        <td height="36" colspan="2" align="left" valign="top"><table width="389" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td>How Many Items
                <input name="nik" type="text" id="nik" size="3" onkeyup="javscript:getScriptPagex('output_divstx','nik')" /></td>
              </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top" height="0"><span class="output-div-container"><span id="output_divstx"></span></span></td>
      </tr>
      <tr>
        <td height="25" colspan="2" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" colspan="2" align="left" valign="top"><input type="submit" name="button7" id="button7" value="SAVE" onclick="validateform1(form1)" />
          <input type="reset" name="button8" id="button8" value="Reset" /></td>
      </tr>
    </table></th>
  </tr>
</table>
</form>