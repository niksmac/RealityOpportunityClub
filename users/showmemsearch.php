<?php 
include('index.tpl');

function getTitle()
{
echo 'Search Here !!';
}

function ShowContent($rocuname)
{
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="89">&nbsp;</td>
    <td width="391">&nbsp;</td>
  </tr>
  <tr>
    <td>Search Term</td>
    <td><input type="text" name="srchitm" id="srchitm" />
      &nbsp;
    <label class="submit">  <input type="submit" name="button" id="button" value="Search" onclick="showresult('showresult','srchitm')" /></label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="geninfo">Type ID no, Name or Part of Address.</td>
  </tr>
</table>
<span id="showresult"></span>
<?php 
}

?>
<script type="text/javascript" >
function showresult(div_id,content_id)		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
     		http.open("GET", "showserchresult.php?gid=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);		
			}
            
</script>