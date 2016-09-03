<?php 
session_start();
include("inner.tpl");
function ShowContent($title)
{
$cat="NULL";
$cat=$_GET['cat'];
if ($cat == "Manager")
$style = "Should be experienced in office administration.";
else if ($cat == "Accountant")
$style = "Must be a commerce Graduate and minimum 2 Year experience in similar jobs.";
else if ($cat == "Receptionist")
$style = "May have pleasent personality.";
else if ($cat == "Office Assistant")
$style = "Should be graduate and able to discharge all routine works.";
else if ($cat == "Driver")
$style = "Should have a minimum 1 Year experience in marketing side.";
?>
<div id="content_area">

<script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/careervalidate.js" charset="utf-8"></script>

  <form action="getmyapplication_code.php" method="post" enctype="multipart/form-data" name="career" id="career" autocomplete="off">
  <table width="765" border="0" cellpadding="4" cellspacing="0" >
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Post Applied for </td>
      <td colspan="2" align="left" valign="top"><?php echo $cat; ?>&nbsp;
        <input type="hidden" name="hdn" id="hdn" value="<?php echo $cat; ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top"><?php echo $style; ?></td>
    </tr>
    <tr>
      <td width="64" align="left" valign="top">&nbsp;</td>
      <td width="221" align="left" valign="top">Name</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="names" id="names" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Permenent Address</td>
      <td colspan="2" align="left" valign="top"><textarea name="paddress" rows="3" id="paddress"></textarea></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">District</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="distrct" id="distrct" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">PIN Code.</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="pinnos" id="pinnos" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Date of Birth</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="birthDate" id="birthDate" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Phone No.</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="phones" id="phones" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Mobile</td>
      <td colspan="2" align="left" valign="top"><input name="mobiles" type="text" id="mobiles" maxlength="10" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Email</td>
      <td colspan="2" align="left" valign="top"><input name="emails" type="text" id="emails" size="35" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Sex</td>
      <td colspan="2" align="left" valign="top"><select name="sex" id="sex">
        <option>- select -</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>    
        </td>
    </tr>
    
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Marital Status</td>
      <td colspan="2" align="left" valign="top"><select name="mstats" id="mstats">
        <option>- select -</option>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
            </select></td>
    </tr>
    
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Educational Qualifications</td>
      <td colspan="2" align="left" valign="top"><textarea name="eduql" rows="3" id="eduql"></textarea></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Experience In Detail</td>
      <td colspan="2" align="left" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td align="left" valign="top">Explain Duties and Responsibilities</td>
          </tr>
        <tr>
          <td width="5%" align="left" valign="top"><textarea name="exper" cols="50" rows="6" id="exper"></textarea></td>
          </tr>

      </table></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Expected Salary</td>
      <td colspan="2" align="left" valign="top"><input type="text" name="sal_exp" id="sal_exp" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Photo </td>
      <td colspan="2" align="left" valign="top"><input type="file" name="photos" id="photos" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Resume (Optional)</td>
      <td colspan="2" align="left" valign="top"><input type="file" name="resume" id="resume" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">Human Verification</td>
      <td width="114" align="left" valign="top"><img src="includes/gcaptcha.php"  width="150" height="80" id="gcaptcha"/></td>
      <td width="334" align="left" valign="top"><input name="captcha" type="text" id="captcha" size="5" style="width:100px; height:50px; text-align:center; font-size:10pt; font-style:normal; " />
        <br />
        <a href="#" onclick="document.getElementById('gcaptcha').src = 'includes/gcaptcha.php'" >Can't Read ?</a></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top"><label class="submit"> <input type="submit" value="Submit" id="send"  /></label>
      <label class="reset"><input type="reset" name="button2" id="button2" value="Reset" /></label></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</div>
<?php 
}

function getTitle()
{
$cat=$_GET['cat'];
return "Career | $cat | Reality Opportunity Club";
}
function showMeta()
{
$cat=$_GET['cat'];
$meta = '<meta name="description" content="Imagine having the resources to influence tomorrow\'s reality - today. People whose ideas can make a difference."/>
<meta name="keywords" content="Career, Reality Opportunity Club, '.$cat.'"/>';
return $meta;
}
?>