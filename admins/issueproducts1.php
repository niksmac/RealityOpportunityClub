<link href="colours.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ajax.js"></script>
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{
//if(name.elements['store'].value.length<1)
//{
//alert("Please fill all the fields");
//name.elements['store'].focus();
//return false;
//}	
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
if(name.elements['items'].value.length<1)
{
alert('Please fill all the fields');
name.elements['items'].focus();
return false;
}
if(name.elements['qty'].value.length<1)
{
alert('Please fill all the fields');
name.elements['qty'].focus();
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
     		http.open("GET", "brandsk.php?content=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);			
			}
function getScriptPage5(div_id,content_id,brnd)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			nums=document.getElementById(brnd).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
     		http.open("GET", "brands5.php?content=" + escape(num) + "&brnds=" + escape(nums), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);			
			}
function getScriptPage8(div_id,content_id,strs)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			numd=document.getElementById(strs).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
     		http.open("GET", "findstock.php?content=" + escape(num) + "&store=" + escape(numd), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);			
			}	

function Disab() 
{
frm=document.forms[0]
frm.button.disabled=true
}
</script>
<form id="form1" name="form1" method="post" action="issueproduct_code.php">
  <table width="500" border="0" cellpadding="5" cellspacing="0" class="Contents">
    <tr>
      <td width="109">Select Store / Cust</td>
      <td width="371"><?php /*?><select name="store" id="store">
        <option selected="selected">- select -</option>
        <?php 
$qry=mysql_query("select * from stores order by storename asc");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
        <option value="<?php echo $qrys['store_id']; ?>" ><?php echo $qrys['storename']; ?></option>
        <?php } ?>
      </select><?php */?>
        <select name="store2" id="store2">
          <option selected="selected">- select -</option>
          <?php 
$qry=mysql_query("select * from members order by mmbr_id asc");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
?>
          <option value="<?php echo $qrys['mmbr_id']; ?>" ><?php echo $qrys['mmbr_id']; ?></option>
          <?php } ?>
        </select></td>
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
      </select></td>
    </tr>
    <tr>
      <td>Brands</td>
      <td><span class="output-div-container"><span id="output_divst3">
        <select name="brandname" id="brandname">
          <option>- select -</option>
        </select>
      </span></span></td>
    </tr>
    <tr>
      <td>Product</td>
      <td><span class="output-div-container"><span id="output_divst5">
        <select name="items" id="items">
          <option>- select -</option>
        </select>
      </span></span></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="qty" type="text" id="qty" size="8" onkeyup="getScriptPage8('output_divst8','items','qty')" />&nbsp;Nos.      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="output-div-container"><span id="output_divst8"></span></span>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
    </tr>
  </table>
  </form>
