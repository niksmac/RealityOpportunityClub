<?php 
include('index.tpl');

function getTitle()
{
echo 'ROC Main Joinigs';
}

function ShowContent($rocuname)
{
?>
<form id="form1" name="form1" method="post" action="joiningforms.php">
<table width="99%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF" >
  <tr>
    <td colspan="2" align="left" valign="top" ><h1>Make Joings to ROC</h1></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" ><iframe src="terms.html" frameborder="0" width="800" height="300"></iframe></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td width="20" align="left" valign="top" ><label for="chk" ><input type="checkbox" name="chk" onclick="javascript:apply()" />
    </label></td>
    <td width="1483" align="left" valign="top" >I have read and agree the Terms and Conditions</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="submit"><input type="submit" name="Submit" value="Proceed to Joining" disabled="disabled"  /></label></td>
  </tr>
</table>
</form>
<?php 
}
?>
<script type="text/javascript">
function apply()
{
  document.form1.Submit.disabled=true;
  if(document.form1.chk.checked==true)
  {
    document.form1.Submit.disabled=false;
  }
  if(document.form1.chk.checked==false)
  {
    document.form1.Submit.enabled=false;
  }
}
</script>