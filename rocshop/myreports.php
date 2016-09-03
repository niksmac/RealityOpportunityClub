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

<script type="text/javascript" >
function CalandCheckCrLimit()
{
totbv = document.getElementById("totbv").value;
credlimit = document.getElementById("creditlimit").value;

bva = document.bvform.getElementById("bv1");
bvs = document.bvform.getElementById("bv2");
bvd = document.bvform.getElementById("bv3");
bvf = document.bvform.getElementById("bv4");
bvg = document.bvform.getElementById("bv5");


billbv = (Number(bva.value) + Number(bvs.value)+Number(bvd.value)+Number(bvf.value)+Number(bvg.value)) ;
bvrest = (Number(totbv) - Number(billbv));
//alert("billbv"+billbv)
//alert("bvrest"+bvrest)

document.getElementById("bvremaing").value = bvrest;

if (bvrest <= credlimit)
{
document.getElementById('bvremaing').style.backgroundColor = 'yellow';
alert ('You have to maintain credit limit in your account'+ credlimit);
document.forms[0].reset();
//validateid('idval_div1','');
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
        <td width="655" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="4">
          <tr>
            <td align="right" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" align="right" valign="middle">1</td>
            <td width="90%" align="left" valign="middle"><a href="viewbvhistory.php" class="nik_link">BV Credit History</a></td>
          </tr>
          <tr>
            <td align="right" valign="middle">2</td>
            <td align="left" valign="middle"><a href="bvsalehistory.php" class="nik_link">BV Sale History</a></td>
          </tr>
          
          <tr>
            <td align="right" valign="middle">3</td>
            <td align="left" valign="middle"><a href="shopaccount.php">Account</a></td>
          </tr>
          <tr>
            <td align="right" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
