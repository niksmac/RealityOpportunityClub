<?php include("sessioncode.php"); ?><title>Bill BV</title>
<script type="text/javascript" src="bvformval.js"></script>
<script type="text/javascript"  language="javascript">
function validateid(div_id,o)
{
			subject_id = div_id;
			var o=document.getElementById(o).value;
   			if (o.length == 0) return false;
			myRand=parseInt(Math.random()*99999999);
     		http.open("GET", "showdetails.php?myRand&cid=" + escape(o), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
}
 </script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" language="javascript" src="js/scriptaculous/lib/prototype.js"></script> 
<script type="text/javascript" language="javascript" src="js/scriptaculous/src/scriptaculous.js"></script> 
<script type="text/javascript" language="javascript" src="js/jsvalidateone.js"></script>
<script type="text/javascript" >


function CalandCheckCrLimit()
{

totbv = document.getElementById("totbv").value;
credlimit = document.getElementById("creditlimit").value;

var bva = document.getElementById("bv1");
var bvs = document.getElementById("bv2");
var bvd = document.getElementById("bv3");
var bvf = document.getElementById("bv4");
var bvg = document.getElementById("bv5");


billbv = (Number(bva.value) + Number(bvs.value)+Number(bvd.value)+Number(bvf.value)+Number(bvg.value)) ;
bvrest = (Number(totbv) - Number(billbv));

//alert (billbv);
//alert("billbv"+billbv)
//alert("bvrest"+bvrest)

document.getElementById("bvremaing").value = bvrest;

if (bvrest <= credlimit)
{
document.getElementById('bvremaing').style.backgroundColor = 'yellow';
alert ('You have to maintain credit limit in your account '+ credlimit);
document.forms[0].reset();
}


}
</script>


<link href="css/screen.css" rel="stylesheet" type="text/css" />
<table width="850" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><a href="index.php" title="home page"> <img src="images/logo.png" alt="logo" class="logo" border="0" /></a></td>
  </tr>
  <tr>
    <td><table width="850" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="189" align="left" valign="top"><div align="right">
          <?php include("shpmenu.php"); ?>
        </div></td>
        <td width="655" align="left" valign="top"><?php if (isset ($_GET['err'])) { ?>  
<table width="100%" border="0" cellpadding="5" cellspacing="0" bordercolor="#929292" style="border-collapse:collapse;">
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle"><span class="style1">Errors Found in form Please check and try again </span></td>
    </tr>
  <tr>
    <td align="center" valign="middle">Click <a href="bvbilling.php">HERE</a> to try again</td>
  </tr>
</table>
<?php }  else { 
$uname = $_SESSION['shplogin'];
$qrdy=mysql_query("select crval,crlimit from stor_credit_sum where stor_id = '$uname'");
while($qrydds=mysql_fetch_array($qrdy))
{
$crval=$qrydds['crval'];
$crlimit=$qrydds['crlimit'];
}
$crval = $crval + 0;
$crlimit = $crlimit + 0;
if ($crval != 0)
{
?>
<form id="bvform" name="bvform" method="post" action="updatebv_code.php" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="69%" height="37" align="right">BV Remainig </td>
    <td width="31%"><input name="bvremaing" type="text" id="bvremaing" value="<?php echo $crval; ?>" size="6" /></td>
  </tr>
</table>

        <table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#929292" style="border-collapse:collapse;">
                <tr>
                  <td width="7%" bgcolor="#F7F7F7"><strong>Sl No</strong></td>
                  <td width="9%" bgcolor="#F7F7F7"><strong>ROC ID</strong></td>
                  <td width="66%" bgcolor="#F7F7F7"><strong>Name</strong>
                    <input type="hidden" name="totbv" id="totbv" value="<?php echo $crval; ?>"  />
                  <input type="hidden" name="creditlimit" id="creditlimit" value="<?php echo $crlimit; ?>"  />
                  </td>
                  <td width="18%" bgcolor="#F7F7F7"><strong>BV</strong></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><input name="rocid1" type="text" id="rocid1" size="8" onkeyup="javascript:validateid('idval_div1','rocid1')" /></td>
                  <td align="left" valign="top"><span class="output-div-container"><span class="title" id="idval_div1"></span></span></td>
                  <td align="left" valign="top"><input name="bv1" type="text" id="bv1" size="3" onkeyup="javascript:CalandCheckCrLimit()" /></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><input name="rocid2" type="text" id="rocid2" size="8" onkeyup="javascript:validateid('idval_div2','rocid2')" /></td>
                  <td align="left" valign="top"><span class="output-div-container"><span id="idval_div2"></span></span></td>
                  <td align="left" valign="top"><input name="bv2" type="text" id="bv2" size="3" onkeyup="javascript:CalandCheckCrLimit()"/></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><input name="rocid3" type="text" id="rocid3" size="8" onkeyup="javascript:validateid('idval_div3','rocid3')" /></td>
                  <td align="left" valign="top"><span class="output-div-container"><span id="idval_div3"></span></span></td>
                  <td align="left" valign="top"><input name="bv3" type="text" id="bv3" size="3" onkeyup="javascript:CalandCheckCrLimit()"/></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><input name="rocid4" type="text" id="rocid4" size="8" onkeyup="javascript:validateid('idval_div4','rocid4')" /></td>
                  <td align="left" valign="top"><span class="output-div-container"><span id="idval_div4"></span></span></td>
                  <td align="left" valign="top"><input name="bv4" type="text" id="bv4" size="3" onkeyup="javascript:CalandCheckCrLimit()"/></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><input name="rocid5" type="text" id="rocid5" size="8" onkeyup="javascript:validateid('idval_div5','rocid5')" /></td>
                  <td align="left" valign="top"><span class="output-div-container"><span id="idval_div5"></span></span></td>
                  <td align="left" valign="top"><input name="bv5" type="text" id="bv5" size="3" onkeyup="javascript:CalandCheckCrLimit()"/></td>
                </tr>
              </table>
              <table width="100%" border="0" cellpadding="5" cellspacing="0" bordercolor="#929292" style="border-collapse:collapse;">

                <tr >
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td align="left" valign="top" >&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td width="5%">&nbsp;</td>
                  <td width="65%">&nbsp;</td>
                  <td width="10%" align="left" valign="top"><input type="submit" name="button" id="button" value="Submit" onclick="return validateptreeform(bvform)" class="submit_action" /></td>
                  <td width="20%" align="left" valign="top"><input type="reset" name="button2" id="button2" value="Reset" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>
              </table>
            </form>
          <?php } 
		  else 
		  echo "<br><br><br><span class = 'errtext'>There is no sufficient BV in account to perform billing.</span>";} ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
