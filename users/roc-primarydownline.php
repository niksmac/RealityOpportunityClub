<?php 
include('index.tpl');

function getTitle()
{
echo 'Primary Downline';
}

function ShowContent($rocuname)
{
?>


<table width="95%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="4" align="center" valign="middle" ><label class="submit"><input type="button" onclick="javascript:showside('idval_div','C')" value="Downline Complete"></label></td>
  </tr>
  <tr>
    <td width="729" align="center" valign="middle" ><label class="submit"><input type="button" onclick="javascript:showside('idval_div','L','')" value="Left Side Only"></label></td>
    <td width="736" align="center" valign="middle" ><label class="submit"><input type="button" onclick="javascript:showside('idval_div','R','')" value="Right Side Only"></label></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle" >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle" ><div class="successinfodiv">Newest member will be first.</div></td>
  </tr>
</table>
<p>&nbsp;</p>
<div id="printReady"><span class="output-div-container"><span id="idval_div">
  <?php include("mydownlineprimary.php"); ?>
</span></span></div>
<?php 
}

?>
<script type="text/javascript" language="javascript">
function showside(div_id,o,fld)
{
			subject_id = div_id;
			var side=o;	
			if (side == "R")
     		http.open("GET", "mydownlinep-right.php?sr=" + fld ,  true);
			else if (side == "L")
			http.open("GET", "mydownlinep-left.php?sr=" + fld , true);
			else if (side == "C")
			http.open("GET", "mydownlineprimary.php" , true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
}
</script>