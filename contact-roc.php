<?php 
include("inner.tpl");
function ShowContent($title)
{
?>
<div id="content_area">
<script language="JavaScript" src="js/ajax.js"></script> 
<script language="JavaScript" src="js/jsfunctions.js"></script> 

<script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/validate.js" charset="utf-8"></script>


<form action="feedbacksubmit.php" method="post" name="jform" id="jform">
  <table width="100%" border="0" cellpadding="4" cellspacing="0" background="images/contactROC.jpg" style="background-repeat:no-repeat; background-position:bottom;" >
    <tr>
      <td align="left" valign="top" scope="col">&nbsp;</td>
      <td colspan="2" align="left" valign="top" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td width="303" align="left" valign="top" scope="col">ROC ID</td>
      <td colspan="2" align="left" valign="top" scope="col"><input name="ropid" type="text" id="ropid" onMouseOut="getScriptPage('output_divsth','ropid')" value="Guest" size="10" onclick="clearme()" />
      &nbsp;<span id="output_divsth">If you're a Member</span>      </td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">Type of your Query</td>
      <td colspan="2" align="left" valign="top"><select name="qtype" id="qtype" onfocus="getScriptPage('output_divsth','ropid')">
      <option selected="selected">- select -</option>
      <option value="Activation Request">Activation Request</option>
      <option value="Product Enquiry">Product Enquiry</option>
      <option value="Show Intrest">Show Intrest in ROC</option>
      <option value="Lost Password">Lost Password</option>
      <option value="Others">Others</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">Name</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="name" id="name" /> </td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">Phone</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="phone" id="phone" /></td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">Email</td>
      <td colspan="2" align="left" valign="top"><input name="email" type="text" id="email" size="30" /></td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">Post Office</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="po" id="po" /></td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">District</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="dstrct" id="dstrct" /></td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">Your Query</td>
      <td colspan="2" align="left" valign="top"><textarea name="message" cols="35" rows="4" id="message"></textarea></td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">Human Verification</td>
      <td width="190" align="left" valign="middle"><img src="includes/gcaptcha.php" width="150" height="80" id="gcaptcha"></td>
      <td width="1017" align="left" valign="middle"><input name="captcha" type="text" id="captcha" size="5" style="width:100px; height:50px; text-align:center; font-size:15pt; font-style:bold; color:#009900; " >
        <br />
        <a href="#" onclick="document.getElementById('gcaptcha').src = 'includes/gcaptcha.php'" >Can't Read ?</a></td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">&nbsp;</td>
      <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">&nbsp;</td>
      <td colspan="2" align="left" valign="top"></td>
    </tr>
    <tr>
      <td align="left" valign="top" scope="row">&nbsp;</td>
      <td colspan="2" align="left" valign="top"><span class="submit">
<input type="submit" value="Submit" id="send" /></span>
        &nbsp;
      <span class="reset"> <input type="reset" value="Reset" /> </span></td>
    </tr>
  </table>
</form>
<br />
<br />
<br />
<br />
<br />
<br />

</div>
<?php 
}
function getTitle()
{
return "Contact ROC | Reality Opportunity Club";
}
function showMeta()
{
$meta = '
<meta name="description" content="Reality Opportunity Club Enquiries, questions, information? Not hesitate to contact ROC."/>
<meta name="keywords" content="Contact ROC, Reality Opportunity Club, ROC Kottayam Kerala India, 686006, +914812311147, "/>';
return $meta;
}
?>