<link href="colours.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ajax.js"></script>
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{
if(name.elements['cat_id'].value.length<1){
alert("Please fill all the fields");
name.elements['cat_id'].focus();
return false;
}
if(name.elements['brandname'].value.length<1){
alert('Please fill all the fields');
name.elements['brandname'].focus();
return false;}
if(name.elements['gr1'].value.length<1){
alert('Please fill all the fields');
name.elements['gr1'].focus();
return false;}
if(name.elements['gr2'].value.length<1){
alert('Please fill all the fields');
name.elements['gr2'].focus();
return false;}
if(name.elements['gr3'].value.length<1){
alert('Please fill all the fields');
name.elements['gr3'].focus();
return false;}
if(name.elements['gr4'].value.length<1){
alert('Please fill all the fields');
name.elements['gr4'].focus();
return false;}
if(name.elements['itemsname'].value.length<1){
alert('Please fill all the fields');
name.elements['itemsname'].focus();
return false;
}if(name.elements['price'].value.length<1){
alert('Please fill all the fields');
name.elements['price'].focus();
return false;}
if(name.elements['taxrte'].value.length<1){
alert('Please fill all the fields');
name.elements['taxrte'].focus();
return false;}
if(name.elements['batchno'].value.length<1){
alert('Please fill all the fields');
name.elements['batchno'].focus();
return false;
}if(name.elements['bv'].value.length<1){
alert('Please fill all the fields');
name.elements['bv'].focus();
return false;}

if(name.elements['taxrte'].value='NA'){
myOption = -1;
for (i=name.taxcat.length-1; i > -1; i--) {
if (name.taxcat[i].checked) {
myOption = i; i = -1;
}
}
if (myOption == -1) {
alert("Select The Tax category");
return false;
}
}
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
<form action="addnewitems_code.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><table width="555" border="0" cellpadding="4" cellspacing="0" class="Contents">
  <tr>
    <td colspan="2" align="left" valign="top"><strong>ADD NEW ITEMS</strong></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td width="101" align="left" valign="top">Category<span class="errtxt">*</span></td>
    <td width="290" align="left" valign="top"><select name="cat_id" id="cat_id" onchange="getScriptPage3('output_divst3','cat_id')">
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
    <td align="left" valign="top">Brand<span class="errtxt">*</span></td>
    <td align="left" valign="top"><span class="output-div-container"><span id="output_divst3"><select name="brandname" id="brandname"><option selected="selected">- select -</option></select>
      <span class="errtxt">*</span></span></span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Item Name<span class="errtxt">*</span></td>
    <td align="left" valign="top">
      <input type="text" name="itemsname" id="itemsname" />
      <span class="errtxt">*</span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Item ID</td>
    <td align="left" valign="top"><input type="text" name="manid" id="manid" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Quantity</td>
    <td align="left" valign="top"><input name="quantity" type="text" id="quantity" size="10" />
      <span class="errtxt">*</span> </td>
  </tr>
  <tr>
    <td align="left" valign="top">MRP</td>
    <td align="left" valign="top"><input name="mrp" type="text" id="mrp" size="10" />
      In Rs.<span class="errtxt">*</span> </td>
  </tr>
  <tr>
    <td align="left" valign="top">Distributers Price (DP)<span class="errtxt">*</span></td>
    <td align="left" valign="top"><input name="dp" type="text" id="dp" size="10" /> 
      &nbsp;In Rs.<span class="errtxt">*</span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Price To Stores</td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <th align="left" valign="middle" scope="col">Grade 1*</th>
        <th align="left" valign="middle" scope="col">Grade 2*</th>
        <th align="left" valign="middle" scope="col">Grade3*</th>
        <th align="left" valign="middle" scope="col">Grade 4*</th>
      </tr>
      <tr>
        <th align="left" valign="middle" scope="row"><input name="gr1" type="text" id="gr1" size="6" /></th>
        <td align="left" valign="middle"><input name="gr2" type="text" id="gr2" size="6" /></td>
        <td align="left" valign="middle"><input name="gr3" type="text" id="gr3" size="6" /></td>
        <td align="left" valign="middle"><input name="gr4" type="text" id="gr4" size="6" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">Description</td>
    <td align="left" valign="top"><textarea name="descr" cols="30" rows="4" id="descr">Not Specified </textarea></td>
    </tr>
  <tr>
    <td align="left" valign="top">Batch No<span class="errtxt">*</span></td>
    <td align="left" valign="top"><input type="text" name="batchno" id="batchno" />
      <span class="errtxt">*</span>&nbsp;&nbsp;&nbsp;<span class="output-div-container"><span id="output_divst4"></span></span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Business Volume (BV)<span class="errtxt">*</span></td>
    <td align="left" valign="top"><input type="text" name="bv" id="bv" onfocus="getScriptPage4('output_divst4','batchno')" />
      <span class="errtxt">*</span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Tax Category </td>
    <td align="left" valign="top"><input type="radio" name="taxcat" id="radio" value="0" />
      0% 
      <input type="radio" name="taxcat" id="radio2" value="4" />
      4% 
      <input type="radio" name="taxcat" id="radio3" value="12.5" />
      12.5%</td>
  </tr>
  <tr>
    <td align="left" valign="top">Tax Rate<span class="errtxt">*</span></td>
    <td align="left" valign="top"><input name="taxrte" type="text" id="taxrte" value="NA" size="10" />
      ( % )<span class="errtxt">*</span></td>
  </tr>
  <tr>
    <td align="left" valign="top">Thumbnail</td>
    <td align="left" valign="top"><input type="file" name="files" id="files" /></td>
    </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
      <input type="reset" name="button2" id="button2" value="Reset" />    </td>
    </tr>
</table>
</form>