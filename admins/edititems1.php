<link href="colours.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ajax.js"></script>
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{
if(name.elements['cat_id'].value.length<1)
{
alert("Please fill all the fields");
name.elements['cat_id'].focus();
return false;
}
if(name.elements['brandname'].value.length<1)
{
alert('Please fill all the fields');
name.elements['brandname'].focus();
return false;
}
if(name.elements['itemsname'].value.length<1)
{
alert('Please fill all the fields');
name.elements['itemsname'].focus();
return false;
}
if(name.elements['price'].value.length<1)
{
alert('Please fill all the fields');
name.elements['price'].focus();
return false;
}
if(name.elements['batchno'].value.length<1)
{
alert('Please fill all the fields');
name.elements['batchno'].focus();
return false;
}
if(name.elements['bv'].value.length<1)
{
alert('Please fill all the fields');
name.elements['bv'].focus();
return false;
}
return true;
}
}
function getScriptPage3(div_id,content_id,ert)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			
			var strChar;
   			var blnResult = true;

   			if (num.length == 0) return false;
     		http.open("GET", "brands1.php?content=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
			
			
			}
</script>
<form id="form1" name="form1" method="post" action="editnewitems_code.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
<table width="500" border="0" cellpadding="3" cellspacing="0" class="Contents">
<?php 
$qry=mysql_query("select * from itemsnew where id='$id'");
while($qrys=mysql_fetch_array($qry))
{
$itid=$qrys['id'];
$brandname=$qrys['brandname'];
$path="../products/".$qrys['photo'];
?>
  <tr>
    <td width="141" align="left" valign="top">Category</td>
    <td width="347" align="left" valign="top"><select name="cat_id" id="cat_id" onchange="getScriptPage3('output_divst3','cat_id','$brandname')">
      <option selected="selected" value="<?php echo $qrys['cat_id']; ?>"><?php echo $qrys['cat_id']; ?></option>
      <?php 
$qrfsdy=mysql_query("select * from category order by catname asc");
while($gjghj=mysql_fetch_array($qrfsdy))
{
$id=$gjghj['id'];

?>
      <option value="<?php echo $gjghj['catname']; ?>" ><?php echo $gjghj['catname']; ?></option>
      <?php } ?>
    </select>
      <span class="errtxt">*</span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Brand</td>
    <td align="left" valign="top"><span class="output-div-container"><span id="output_divst3"><span class="errtxt">
      <input type="text" name="brandname" id="brandname" value="<?php echo $qrys['brandname']; ?>" />
      *</span></span></span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Item Name</td>
    <td align="left" valign="top">
      <input type="text" name="itemsname" id="itemsname" value="<?php echo $qrys['itemsname']; ?>" />
      <span class="errtxt">*</span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Item ID</td>
    <td align="left" valign="top"><input type="text" name="manid" id="manid" value="<?php echo $qrys['manid']; ?>"/></td>
  </tr>
  <tr>
    <td align="left" valign="top">MRP</td>
    <td align="left" valign="top"><input name="mrp" type="text" id="mrp" value="<?php echo $qrys['mrp']; ?>" size="10" />      
      &nbsp;In Rs.<span class="errtxt">*</span></td>
    </tr>
    <?php 
$hjsdsg=mysql_query("select * from itm_prices where itmid='$itid' ");
while($gfhd=mysql_fetch_array($hjsdsg))
{
$dp=$gfhd['dp'];

}
?>
  <tr>
    <td align="left" valign="top">DP</td>
    <td align="left" valign="top"><input name="dp" type="text" id="dp" value="<?php echo $dp; ?>" size="10" />
      <span class="errtxt">*</span></td>
  </tr>
  <tr>
    <td align="left" valign="top">Price To Stores</td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <th align="left" valign="middle" scope="col">Grade 1<span class="errtxt">*</span></th>
        <th align="left" valign="middle" scope="col">Grade 2<span class="errtxt">*</span></th>
        <th align="left" valign="middle" scope="col">Grade3<span class="errtxt">*</span></th>
        <th align="left" valign="middle" scope="col">Grade 4<span class="errtxt">*</span></th>
      </tr>
      <?php 
$hjsdsg1=mysql_query("select * from itm_prices where itmid='$itid' ");
while($gfhd1=mysql_fetch_array($hjsdsg1))
{
$gr1=$gfhd1['gr1'];

?>
      <tr>
        <th align="left" valign="middle" scope="row"><input name="gr1" type="text" id="gr1" value="<?php echo $gfhd1['gr1']; ?>" size="6" /></th>
        <td align="left" valign="middle"><input name="gr2" type="text" id="gr2" value="<?php echo $gfhd1['gr2']; ?>" size="6" /></td>
        <td align="left" valign="middle"><input name="gr3" type="text" id="gr3" value="<?php echo $gfhd1['gr3']; ?>" size="6" /></td>
        <td align="left" valign="middle"><input name="gr4" type="text" id="gr4" value="<?php echo $gfhd1['gr4']; ?>" size="6" /></td>
      </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">Description</td>
    <td align="left" valign="top"><textarea name="descr" cols="30" rows="4" id="descr"><?php echo $qrys['descr']; ?></textarea></td>
    </tr>
  <tr>
    <td align="left" valign="top">Batch No</td>
    <td align="left" valign="top"><input type="text" name="batchno" id="batchno" value="<?php echo $qrys['batchno']; ?>" />
      <span class="errtxt">*</span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Tax Rate</td>
    <td align="left" valign="top"><input name="taxrte" type="text" id="taxrte" size="10" value="<?php echo $qrys['taxrate']; ?>"/>
      <span class="errtxt">*</span></td>
  </tr>
  <tr>
    <td align="left" valign="top">Business Volume (BV)</td>
    <td align="left" valign="top"><input type="text" name="bv" id="bv" value="<?php echo $qrys['bv']; ?>" />
      <span class="errtxt">*</span></td>
    </tr>
  <tr>
    <td align="left" valign="top">Photo</td>
    <td align="left" valign="top"><input name="files" type="file" id="files" value="<?php echo $path; ?>" size="30" /></td>
    </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
      <input type="reset" name="button2" id="button2" value="Reset" />    </td>
    </tr>
</table>
</form>