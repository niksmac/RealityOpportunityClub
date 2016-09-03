<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olshplogin'];
$qrtyh=mysql_query("select balamt from olshops_acc where olshopid = '$uname'  ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$balamt =$qraysjh['balamt'];
}

$qrtyh=mysql_query("select store_id  from olshops where store_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$store_id =$qraysjh['store_id'];
}

$q = "select MAX(billno) from ol_bills where shopid = '$store_id' ";
$result = mysql_query($q);
$data = mysql_fetch_array($result);
$newbillno=$data[0]+1;


?>
<script src="js/ajax_functions.js"></script>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td width="100%"><h1>Product Order Form</h1></td>
  </tr>
 <?php if (isset($_GET['f']) ) { ?> 
  <div class="notokdiv">Insufficient Balance in Account !!! </div>
  <?php } else if (isset($_GET['s']) ) { ?>
  <div class="okdiv">Order Success !!! </div>
  <?php } ?>
  <tr>
    <td><form id="prodorder" name="prodorder" method="post" action="addolproductstobill.php">
      <table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
        <tr>
          <td colspan="2" align="left"><strong>Order No: </strong>&nbsp;<?php echo $store_id.'BKG'.$newbillno; ?> <input type="hidden" name="orderno" id="orderno" value="<?php echo $store_id.'BKG'.$newbillno; ?>" /></td>
          <td align="right">Balance Amount
            <input name="shpbal" type="text" id="shpbal" value="<?php echo $balamt; ?>" size="7" readonly="readonly" style="background-color: #999900; color:#EEEEEE;" /></td>
          <td align="left">&nbsp;</td>
          </tr>
        <tr>
          <td colspan="4" align="center" valign="middle"><hr /></td>
        </tr>
        <tr>
          <td colspan="4"><table width="50%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td width="36%" align="left" valign="top"><strong>ROC ID
                  <input type="text" size="10" value="" id="rocid" name="rocid" onblur="getiddetails(this.value)"  />
              </strong></td>
              <td width="64%" align="left" valign="top"><div id="iddetails"></div></td>
            </tr>

          </table></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4"><hr /></td>
          </tr>
        <tr>
          <td><strong>Product Code</strong></td>
          <td><strong>Qty</strong></td>
          <td><strong>Unit Price </strong></td>
          <td><strong>Line Total</strong></td>
          </tr>
        <tr>
          <td width="15%">
			<input type="text" size="10" id="inputString" name="inputString" onkeyup="lookup(this.value);" onblur="fill();"  />			
			<div class="suggestionsBox" id="suggestions" style="display: none;"><img src="img/upArrow.png" style="position: relative; top: -12px; left: 30px;" /><div class="suggestionList" id="autoSuggestionsList"></div></div>            </td>
          <td width="19%"><input type="text" size="6" id="prodqty" name="prodqty" onkeyup="populate()"  /></td>
          <td width="58%"><input type="text" id="unitprice" size="6" name="unitprice" readonly="readonly"  /></td>
          <td width="8%"><input type="text" size="6" id="linetotal" name="linetotal" readonly="readonly"   /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label class="submit"><input type="submit" name="button" id="button" value="Order Now" onclick="return validateform()" /></label>
            <label class="reset"><input type="reset" name="button2" id="button2" value="Clear Form" /></label></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
      </table>
        </form>    </td>
  </tr>
</table>
<?php
}
?>
<script type="text/javascript" src="js/jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("rpc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	function fill(thisValue) {
		$('#inputString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
	}
	
	function lookupp(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#rocidlist').hide();
		} else {
			$.post("lookuproc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#rocidlist').show();
					$('#rocidlistList').html(data);
				}
			});
		}
	} // lookup
	function fillroc(thisValue) {
		$('#rocid').val(thisValue);
		setTimeout("$('#rocidlist').hide();", 200);
	}
	
	
function populate()
{

	
var drop= new Array();
var prodcode = document.getElementById("inputString").value;
var qty = document.getElementById("prodqty").value;
var window_url="product_populate.php?prodcode="+prodcode+"&qty="+qty;
	var http = null; 
	var res;
	if(window.XMLHttpRequest)  http = new XMLHttpRequest(); 
	else 
	   if (window.ActiveXObject)  http = new ActiveXObject("Microsoft.XMLHTTP"); 
		  http.onreadystatechange = function()
		  { 
			if(http.readyState == 4)
			{
			   if(http.status == 200)
			   {
				 if (http.responseText!="")
				 {
					res=http.responseText;

					if (res.indexOf("Failed")==-1)

					{
					
						if (res == "Error")
						{
						alert ("No such Item or Item Out of Stock");
						document.getElementById("inputString").value="";
						document.getElementById("prodqty").value="";
						document.getElementById("linetotal").value="";
						document.getElementById("unitprice").value="";
						}
						else 
						{
							var spl= new Array();
							spl=res.split("*");
							document.getElementById("linetotal").value=spl[0];
							document.getElementById("unitprice").value=spl[1];
						}
		
					}

					else
					{
						alert("Unable to Attach");
					}								

				  }
				  else
	    		   {
					alert("No response");
					}
				}
				else alert("Error code " + http.status);
			}
		  }
		http.open("GET",window_url,true); 
		http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
		http.send(null);
}



function validateform()
{
	if (document.getElementById("rocid").value.length < 5 )
	{
	document.getElementById("rocid").focus();
	document.getElementById('rocid').style.backgroundColor = 'yellow';
	return false;
	}
	
	if (document.getElementById("inputString").value.length < 3 )
	{
	document.getElementById("inputString").focus();
	document.getElementById('rocid').style.backgroundColor = 'white';
	document.getElementById('inputString').style.backgroundColor = 'yellow';
	return false;
	}
	
	if (document.getElementById("prodqty").value.length < 1 )
	{
	document.getElementById("prodqty").focus();
	document.getElementById('prodqty').style.backgroundColor = 'white';
	document.getElementById('prodqty').style.backgroundColor = 'yellow';
	return false;
	}
	
	var shpbal = document.getElementById("shpbal").value;
	var bilamt = document.getElementById("linetotal").value;
	var diff = shpbal - bilamt;
	if( diff < 0 )
	{
	alert("Insufficient Balance");
/*	document.getElementById("inputString").value="";
	document.getElementById("prodqty").value="";
	document.getElementById("linetotal").value="";
	document.getElementById("unitprice").value="";*/
	document.getElementById('rocid').style.backgroundColor = 'white';
	document.getElementById('linetotal').style.backgroundColor = 'yellow';
	document.getElementById('shpbal').style.backgroundColor = 'yellow';
	return false;
	}
	
	
}
</script>
