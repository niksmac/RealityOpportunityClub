<link href="colours.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deletebrands.php?id=" + id;
}
</script>
<script language="javascript" type="text/javascript">
function validateform1(formdrt)
{
fghdfhg.onsubmit=function()
{

if(formdrt.elements['rocid'].value.length<1)
{
alert("This Field Cannot be Blank");
formdrt.elements['rocid'].focus();
return false;
}
if(formdrt.elements['brandname'].value.length<1)
{
alert("This Field Cannot be Blank");
formdrt.elements['brandname'].focus();
return false;
}
return true;
}
}
</script>

<form id="fghdfhg" name="fghdfhg" method="post" action="search_code_new.php?stng=1">
  <hr />
  <table width="417" height="37" border="0" cellpadding="3" cellspacing="0">
    <tr>
      <td width="72" align="left" valign="middle" class="Headingswhitemain">SEARCH </td>
      <td width="315" align="left" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="middle">ROC ID </td>
      <td align="left" valign="middle"><input name="rocid" type="text" id="rocid" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Mobile No. </td>
      <td align="left" valign="middle"><input name="phone" type="text" id="phone"  /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">&nbsp;</td>
      <td align="left" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="middle">&nbsp;</td>
      <td align="left" valign="middle"><input type="submit" name="Submit" value="GO" onclick="javascript:validateform1(fghdfhg)" /></td>
    </tr>
  </table>
  <hr />
</form>
