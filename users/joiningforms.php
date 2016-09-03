<?php 
include('index.tpl');

function getTitle()
{
echo 'ROC Main Joinigs';
}

function ShowContent($rocuname)
{
?>

<form id="jnnggg" name="jnnggg" method="post" action="showform.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><h1>Referrer Details</h1></td>
    </tr>
    <tr>
      <td><table width="650" border="0" align="center" cellpadding="4" cellspacing="0" style="background-repeat:no-repeat;">
        <tr>
          <td height="57">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="200" rowspan="7"><span class="output-div-container"><span id="idval_div"></span></span>&nbsp;</td>
        </tr>
        <tr>
          <td width="1">&nbsp;</td>
          <td width="63">&nbsp;</td>
          <td width="144">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Referrer ID </td>
          <td><input name="DirRefID" type="text" id="DirRefID" value="<?php echo $rocuname; ?>" class="input" onblur="javascript:validateid('idval_div','DirRefID')" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Placement</td>
          <td><label>
            <input type="radio" name="leg" value="L" id="leg_0" onclick="javascript:validateid('idval_div','DirRefID')" />
            Left</label>
              <label>
              <input type="radio" name="leg" value="R" id="leg_1" onclick="javascript:validateid('idval_div','DirRefID')"/>
                Right</label>
              <span class="style2">*</span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label class="submit"><input type="submit" name="Submit" value="Continue" onclick="javascript:Validate(jnnggg)" /></label>
              <label class="reset"><input type="reset" name="Submit2" value="Reset" /></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<?php 
}
?>
<script type="text/javascript" language="javascript">

function validateid(div_id,o)
{
			subject_id = div_id;
			var o=document.getElementById(o).value;
   			if (o.length == 0) return false;
			var myRand = Math.random();
     		http.open("GET", "showdetails.php?myRand&cid=" + escape(o), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
}

function Validate(frm)
{
jnnggg.onsubmit=function()
{
	
myOption = -1;
for (i=jnnggg.leg.length-1; i > -1; i--) {
if (jnnggg.leg[i].checked) {
myOption = i; i = -1;
}
}
if (myOption == -1) {
alert("Which Leg you want to Join");
return false;
}	
return true;
}
}
		
</script>
