<?php 
include('index.tpl');

function getTitle()
{
echo 'ROC Main Joinigs';
}

function ShowContent($rocuname)
{
include('../lib/function_lib.php');
$DirRefID=$_POST['DirRefID'];
$leg=$_POST['leg'];

if ( ($DirRefID == "" ) || ($leg == ""))
{
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Error !!</title>  <link href='css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-2);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='errormsg' > <div><strong>Error Found </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html>";
}
if ($leg=='L')
$ret="LEFT";
else if ($leg=='R')
$ret="RIGHT";
$form_token = uniqid();
$_SESSION['form_token'] = $form_token;
?>
<script language="JavaScript" src="../js/ajax.js"></script> 
<script language="JavaScript" src="../js/jsfunctions.js"></script> 
<link href="../css/user.css" rel="stylesheet" type="text/css" />

<form id="mform" name="mform" method="post" action="addnewmember_code.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><h1>&nbsp;&nbsp;New Joiners Details</h1></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellpadding="4" cellspacing="0" background="images/appback.jpg"  style="background-repeat:no-repeat;">
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td colspan="2" align="left" valign="top"><input name="leg" type="hidden" id="leg" value="<?php echo $leg; ?>" />
            <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" /></td>
          </tr>
        <tr>
          <td width="11" align="left" valign="top">&nbsp;</td>
          <td width="2" align="left" valign="top">&nbsp;</td>
          <td width="169" align="left" valign="top">Ref: Id
            <input type="hidden" name="RefID" id="RefID" value="<?php echo $DirRefID; ?>" /></td>
          <td colspan="2" align="left" valign="top"><?php echo $DirRefID; ?></td>
          </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >Name</td>
          <td colspan="2" align="left" valign="top" ><?php echo getreqfield($DirRefID,"Name"); ?></td>
          </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >Placement</td>
          <td colspan="2" align="left" valign="top" ><?php echo $ret; ?></td>
          </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td colspan="3" align="left" valign="top" >&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td colspan="3" align="left" valign="top" ><h2>Joinig Key</h2></td>
        </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >Key</td>
          <td colspan="2" align="left" valign="top" ><input type="text" name="joinkey" id="joinkey" title="Key" onblur="getScriptPage2('output_divsth','joinkey')" /> </td>
        </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td colspan="2" align="left" valign="top"  ><span id="output_divsth" class="redtext">Joining Key is Case Sensitive</span></td>
          </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td colspan="3" align="left" valign="top" ><h2>Login Info.</h2></td>
        </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >Password</td>
          <td colspan="2" align="left" valign="top" ><input name="passone" type="password" id="passone" size="25" /></td>
          </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >Retype Password</td>
          <td colspan="2" align="left" valign="top" ><input name="passtwo" type="password" id="passtwo" size="25" /></td>
          </tr>
        <tr>
          <td align="left" valign="top" > <h2>&nbsp;</h2></td>
          <td align="left" valign="top" >&nbsp;</td>
          <td colspan="3" align="left" valign="top" ><h2>Personal Info. </h2></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">Name</td>
          <td colspan="2" align="left" valign="top"><input name="Name" type="text" id="Name" size="30"  /></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">Email</td>
          <td colspan="2" align="left" valign="top"><input name="Email" type="text" id="Email" size="33" /></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">Gender</td>
          <td colspan="2" align="left" valign="top"><select name="Gender" id="Gender">
            <option value="">- select -</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">Marital Status</td>
          <td colspan="2" align="left" valign="top"><select name="MarStatus" id="MarStatus">
            <option value="">- select -</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
          </select></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">Date of Birth</td>
          <td colspan="2" align="left" valign="top"><input type="text" name="birthDate" id="birthDate" /></td>
        </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >Occupation</td>
          <td colspan="2" align="left" valign="top" ><input name="Occupation" type="text" id="Occupation" /></td>
        </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >Father/Husbands Name</td>
          <td colspan="2" align="left" valign="top" ><input name="FoHName" type="text" id="FoHName" size="30" /></td>
          </tr>
        <tr>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td align="left" valign="top" >&nbsp;</td>
          <td colspan="2" align="left" valign="top" >&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">Electoral Card No.</td>
          <td colspan="2" align="left" valign="top"><input name="ECNo" type="text" id="ECNo" size="30" /></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">PAN Card No.</td>
          <td colspan="2" align="left" valign="top"><input name="PanNo" type="text" id="PanNo" size="30" /></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td colspan="3" align="left" valign="top"><h2>Contact Info.</h2></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top"><span >Mob.</span></td>
          <td colspan="2" align="left" valign="top"><span >
            <input name="Mobile" type="text" id="Mobile" maxlength="10" />
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top"><span >Phone</span></td>
          <td colspan="2" align="left" valign="top"><span >
            <input name="Phone" type="text" id="Phone" />
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">Address</td>
          <td colspan="2" align="left" valign="top"><textarea name="Address" cols="30" rows="3" id="Address" ></textarea></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">Country</td>
          <td colspan="2" align="left" valign="top"><select name="Country" id="Country" tabindex="7" onchange="getScriptPage3('output_divst3','country')">
              <option value=""   >Select One</option>
              <option value="Afghanistan"  >Afghanistan</option>
              <option value="Aland Islands"   >Aland Islands</option>
              <option value="Albania"   >Albania</option>
              <option value="Algeria"   >Algeria</option>
              <option value="American Samoa"   >American Samoa</option>
              <option value="Andorra"   >Andorra</option>
              <option value="Angola"   >Angola</option>
              <option value="Anguilla"   >Anguilla</option>
              <option value="Antarctica"   >Antarctica</option>
              <option value="Argentina"   >Argentina</option>
              <option value="Armenia"   >Armenia</option>
              <option value="Aruba"   >Aruba</option>
              <option value="Australia"   >Australia</option>
              <option value="Austria"   >Austria</option>
              <option value="Azerbaijan"   >Azerbaijan</option>
              <option value="Bahamas"   >Bahamas</option>
              <option value="Bahrain"   >Bahrain</option>
              <option value="Bangladesh"   >Bangladesh</option>
              <option value="Barbados"   >Barbados</option>
              <option value="Belarus"   >Belarus</option>
              <option value="Belgium"   >Belgium</option>
              <option value="Belize"   >Belize</option>
              <option value="Benin"   >Benin</option>
              <option value="Bermuda"   >Bermuda</option>
              <option value="Bhutan"   >Bhutan</option>
              <option value="Bolivia"   >Bolivia</option>
              <option value="Botswana"   >Botswana</option>
              <option value="Bouvet Island&lt;"   >Bouvet Island</option>
              <option value="Brazil"   >Brazil</option>
              <option value="Brunei"   >Brunei</option>
              <option value="Bulgaria"   >Bulgaria</option>
              <option value="Burkina Faso"   >Burkina Faso</option>
              <option value="Burundi"   >Burundi</option>
              <option value="Cambodia"   >Cambodia</option>
              <option value="Cameroon"   >Cameroon</option>
              <option value="Canada"   >Canada</option>
              <option value="Cape Verde"   >Cape Verde</option>
              <option value="Cayman Islands"   >Cayman Islands</option>
              <option value="Chad"   >Chad</option>
              <option value="Chile"   >Chile</option>
              <option value="China"   >China</option>
              <option value="Colombia"   >Colombia</option>
              <option value="Union of the Comoros"   >Union of the Comoros</option>
              <option value="Congo"   >Congo</option>
              <option value="Cook Islands"   >Cook Islands</option>
              <option value="Costa Rica"   >Costa Rica</option>
              <option value="Croatia"   >Croatia</option>
              <option value="Cuba"   >Cuba</option>
              <option value="Cyprus"   >Cyprus</option>
              <option value="Czech Republic"   >Czech Republic</option>
              <option value="Republic of Congo">Republic of Congo</option>
              <option value="Denmark"   >Denmark</option>
              <option value="Disputed Territory"   >Disputed Territory</option>
              <option value="Djibouti"   >Djibouti</option>
              <option value="Dominica"   >Dominica</option>
              <option value="Dominican Republic"   >Dominican Republic</option>
              <option value="East Timor"   >East Timor</option>
              <option value="Ecuador"   >Ecuador</option>
              <option value="Egypt"   >Egypt</option>
              <option value="El Salvador"   >El Salvador</option>
              <option value="Equatorial Guinea"   >Equatorial Guinea</option>
              <option value="Eritrea"   >Eritrea</option>
              <option value="Estonia"   >Estonia</option>
              <option value="Ethiopia"   >Ethiopia</option>
              <option value="Falkland Islands"   >Falkland Islands</option>
              <option value="Faroe Islands"   >Faroe Islands</option>
              <option value="Fiji"   >Fiji</option>
              <option value="Finland"   >Finland</option>
              <option value="France"   >France</option>
              <option value="French Guyana"   >French Guyana</option>
              <option value="French Polynesia"   >French Polynesia</option>
              <option value="Gabon"   >Gabon</option>
              <option value="Gambia"   >Gambia</option>
              <option value="Georgia"   >Georgia</option>
              <option value="Germany"   >Germany</option>
              <option value="Ghana"   >Ghana</option>
              <option value="Gibraltar"   >Gibraltar</option>
              <option value="Greece"   >Greece</option>
              <option value="Greenland"   >Greenland</option>
              <option value="Grenada"   >Grenada</option>
              <option value="Guadeloupe"   >Guadeloupe</option>
              <option value="Guam"   >Guam</option>
              <option value="Guatemala"   >Guatemala</option>
              <option value="Guinea"   >Guinea</option>
              <option value="Guinea-Bissau"   >Guinea-Bissau</option>
              <option value="Guyana"   >Guyana</option>
              <option value="Haiti"   >Haiti</option>
              <option value="Honduras"   >Honduras</option>
              <option value="Hong Kong"   >Hong Kong</option>
              <option value="Hungary"   >Hungary</option>
              <option value="Iceland"   >Iceland</option>
              <option value="India" selected="selected">India</option>
              <option value="Indonesia"   >Indonesia</option>
              <option value="Iran"   >Iran</option>
              <option value="Iraq"   >Iraq</option>
              <option value="Ireland"   >Ireland</option>
              <option value="Israel"   >Israel</option>
              <option value="Italy"   >Italy</option>
              <option value="Ivory Coast"   >Ivory Coast</option>
              <option value="Jamaica"   >Jamaica</option>
              <option value="Japan"   >Japan</option>
              <option value="Jordan"   >Jordan</option>
              <option value="Kazakhstan"   >Kazakhstan</option>
              <option value="Kenya"   >Kenya</option>
              <option value="Kiribati"   >Kiribati</option>
              <option value="Kuwait"   >Kuwait</option>
              <option value="Kyrgyz Republic"   >Kyrgyz Republic</option>
              <option value="Laos"   >Laos</option>
              <option value="Latvia"   >Latvia</option>
              <option value="Lebanon"   >Lebanon</option>
              <option value="Lesotho"   >Lesotho</option>
              <option value="Liberia"   >Liberia</option>
              <option value="Libya"   >Libya</option>
              <option value="Liechtenstein"   >Liechtenstein</option>
              <option value="Lithuania"   >Lithuania</option>
              <option value="Luxembourg"   >Luxembourg</option>
              <option value="Macau"   >Macau</option>
              <option value="Macedonia"   >Macedonia</option>
              <option value="Madagascar"   >Madagascar</option>
              <option value="Malawi"   >Malawi</option>
              <option value="Malaysia"   >Malaysia</option>
              <option value="Maldives"   >Maldives</option>
              <option value="Mali"   >Mali</option>
              <option value="Malta"   >Malta</option>
              <option value="Marshall Islands"   >Marshall Islands</option>
              <option value="Martinique"   >Martinique</option>
              <option value="Mauritania"   >Mauritania</option>
              <option value="Mauritius"   >Mauritius</option>
              <option value="Mayotte"   >Mayotte</option>
              <option value="Mexico"   >Mexico</option>
              <option value="Moldova"   >Moldova</option>
              <option value="Monaco"   >Monaco</option>
              <option value="Mongolia"   >Mongolia</option>
              <option value="Montserrat"   >Montserrat</option>
              <option value="Morocco"   >Morocco</option>
              <option value="Mozambique"   >Mozambique</option>
              <option value="Myanmar"   >Myanmar</option>
              <option value="Namibia"   >Namibia</option>
              <option value="Nauru"   >Nauru</option>
              <option value="Nepal"   >Nepal</option>
              <option value="Netherlands"   >Netherlands</option>
              <option value="New Caledonia"   >New Caledonia</option>
              <option value="New Zealand"   >New Zealand</option>
              <option value="Nicaragua"   >Nicaragua</option>
              <option value="Niger"   >Niger</option>
              <option value="Nigeria"   >Nigeria</option>
              <option value="Niue"   >Niue</option>
              <option value="Norfolk Island"   >Norfolk Island</option>
              <option value="North Korea"   >North Korea</option>
              <option value="Norway"   >Norway</option>
              <option value="Oman"   >Oman</option>
              <option value="Pakistan"   >Pakistan</option>
              <option value="Palau"   >Palau</option>
              <option value="Panama"   >Panama</option>
              <option value="Papua New Guinea"   >Papua New Guinea</option>
              <option value="Paraguay"   >Paraguay</option>
              <option value="Peru"   >Peru</option>
              <option value="PhilipPines"   >PhilipPines</option>
              <option value="Pitcairn Islands"   >Pitcairn Islands</option>
              <option value="Poland"   >Poland</option>
              <option value="Portugal"   >Portugal</option>
              <option value="Puerto Rico"   >Puerto Rico</option>
              <option value="Qatar"   >Qatar</option>
              <option value="Reunion"   >Reunion</option>
              <option value="Romania"   >Romania</option>
              <option value="Russia"   >Russia</option>
              <option value="Rwanda"   >Rwanda</option>
              <option value="Saint Lucia"   >Saint Lucia</option>
              <option value="Samoa"   >Samoa</option>
              <option value="San Marino"   >San Marino</option>
              <option value="Sao Tome and Principe"   >Sao Tome and Principe</option>
              <option value="Saudi Arabia"   >Saudi Arabia</option>
              <option value="Senegal"   >Senegal</option>
              <option value="Seychelles"   >Seychelles</option>
              <option value="Sierra Leone"   >Sierra Leone</option>
              <option value="Singapore"   >Singapore</option>
              <option value="Slovakia"   >Slovakia</option>
              <option value="Slovenia"   >Slovenia</option>
              <option value="Solomon Islands"   >Solomon Islands</option>
              <option value="so"   >Somalia</option>
              <option value="za"   >South Africa</option>
              <option value="gs"   >South Georgia</option>
              <option value="kr"   >South Korea</option>
              <option value="es"   >Spain</option>
              <option value="pi"   >Spratly Islands</option>
              <option value="lk"   >Sri Lanka</option>
              <option value="sd"   >Sudan</option>
              <option value="sr"   >Suriname</option>
              <option value="sz"   >Swaziland</option>
              <option value="se"   >Sweden</option>
              <option value="ch"   >Switzerland</option>
              <option value="sy"   >Syria</option>
              <option value="tw"   >Taiwan</option>
              <option value="tj"   >Tajikistan</option>
              <option value="tz"   >Tanzania</option>
              <option value="th"   >Thailand</option>
              <option value="tg"   >Togo</option>
              <option value="tk"   >Tokelau</option>
              <option value="to"   >Tonga</option>
              <option value="tt"   >Trinidad and Tobago</option>
              <option value="tn"   >Tunisia</option>
              <option value="tr"   >Turkey</option>
              <option value="tm"   >Turkmenistan</option>
              <option value="tc"   >Turks and Caicos Islands</option>
              <option value="tv"   >Tuvalu</option>
              <option value="ug"   >Uganda</option>
              <option value="ua"   >Ukraine</option>
              <option value="United Arab Emirates"   >United Arab Emirates</option>
              <option value="United Kingdom"   >United Kingdom</option>
              <option value="xd"   >United Nations Neutral Zone</option>
              <option value="United States"   >United States</option>
              <option value="uy"   >Uruguay</option>
              <option value="vi"   >US Virgin Islands</option>
              <option value="uz"   >Uzbekistan</option>
              <option value="vu"   >Vanuatu</option>
              <option value="va"   >Vatican City</option>
              <option value="ve"   >Venezuela</option>
              <option value="vn"   >Vietnam</option>
              <option value="wf"   >Wallis and Futuna Islands</option>
              <option value="eh"   >Western Sahara</option>
              <option value="ye"   >Yemen</option>
              <option value="zm"   >Zambia</option>
              <option value="zw"   >Zimbabwe</option>
              <option value="rs"   >Serbia</option>
              <option value="me"   >Montenegro</option>
          </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">State</td>
          <td colspan="2" align="left" valign="top"><span class="output-div-container"><span id="output_divst3">
            <select name="State" >
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala" selected="selected">Kerala</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Orissa">Orissa</option>
              <option value="Pondicherry">Pondicherry</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttaranchal">Uttaranchal</option>
              <option value="West Bengal">West Bengal</option>
            </select>
          </span></span></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>District</td>
          <td colspan="2"><input name="District" type="text" id="District" size="30" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>PIN Code</td>
          <td colspan="2"><input name="Pin" type="text" id="Pin" size="20" maxlength="6" class="jsvalidate_digits" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" ><h2>Nominee Details</h2></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Nominee Name</td>
          <td colspan="2"><input name="NomName" type="text" id="NomName"  size="30" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Relation with Nominee</td>
          <td colspan="2"><input name="NomRel" type="text" id="NomRel" size="30" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Human Verification</td>
          <td width="182"><img src="../includes/gcaptcha.php" width="150" height="75" id="gcaptcha"  /></td>
          <td width="396"><input name="captcha" type="text" id="captcha" size="5" style="width:100px; height:50px; text-align:center; font-size:10pt; font-style:normal; " />
            <br />
            <a href="#" onclick="document.getElementById('gcaptcha').src = '../includes/gcaptcha.php'" >Can't Read ?</a></td>
          </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2"><span class="submit"><input type="submit" name="Submit" value="Submit" id="send" /></span>
              <span class="reset"><input type="reset" name="Submit2" value="Reset" /></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<?php 
}
?>
<script type="text/javascript" src="../js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="../js/ajax.js" charset="utf-8"></script>
<script type="text/javascript" >
$(document).ready(function(){
// ====================================================== //

var jVal = {



	'Name' : function() {
	
		$('body').append('<div id="NameInfo" class="info"></div>');
		
		var NameInfo = $('#NameInfo');
		var ele = $('#Name');
		var pos = ele.offset();
		
		NameInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				NameInfo.removeClass('correct').addClass('error').html('&larr; Enter Your name Here').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				NameInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	

	'birthDate' : function (){
		
		$('body').append('<div id="birthInfo" class="info"></div>');

		var birthInfo = $('#birthInfo');
		var ele = $('#birthDate');
		var pos = ele.offset();
		
		birthInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$/i;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				birthInfo.removeClass('correct').addClass('error').html('&larr; type in date in correct format like dd-mm-yyyy').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				birthInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}	
	},
	
	'Mobile' : function() {
	
		$('body').append('<div id="MobileInfo" class="info"></div>');
		
		var MobileInfo = $('#MobileInfo');
		var ele = $('#Mobile');
		var pos = ele.offset();
		
		MobileInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /\d{10}/i;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				MobileInfo.removeClass('correct').addClass('error').html('&larr; Your 10 Digit mobile number').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				MobileInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},

	
	
	'Address' : function() {
	
		$('body').append('<div id="AddressInfo" class="info"></div>');
	
		var AddressInfo = $('#AddressInfo');
		var ele = $('#Address');
		var pos = ele.offset();
		
		AddressInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 30) {
			jVal.errors = true;
				AddressInfo.removeClass('correct').addClass('error').html('&larr; Write your full address!').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				AddressInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	
	'District' : function() {
	
		$('body').append('<div id="DistrictInfo" class="info"></div>');
		
		var DistrictInfo = $('#DistrictInfo');
		var ele = $('#District');
		var pos = ele.offset();
		
		DistrictInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				DistrictInfo.removeClass('correct').addClass('error').html('&larr; Enter Your District Here').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				DistrictInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	
	'Pin' : function() {
	
		$('body').append('<div id="PinInfo" class="info"></div>');
	
		var PinInfo = $('#PinInfo');
		var ele = $('#Pin');
		var pos = ele.offset();
		
		PinInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		var patt = /[0-9]{6}/;
		
		if(!patt.test(ele.val())) {
			jVal.errors = true;
				PinInfo.removeClass('correct').addClass('error').html('&larr; Pin Number is a 6 Digit Number eg; 6860006').show();
				ele.removeClass('normal').addClass('wrong');					
		} else {
				PinInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	
	
	'NomName' : function() {
	
		$('body').append('<div id="NomNameInfo" class="info"></div>');
		
		var NomNameInfo = $('#NomNameInfo');
		var ele = $('#NomName');
		var pos = ele.offset();
		
		NomNameInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				NomNameInfo.removeClass('correct').addClass('error').html('&larr; Enter Your Nominee name Here').show();
				ele.removeClass('normal').addClass('wrong');				
		} else {
				NomNameInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	
	
	'captcha' : function() {
	
		$('body').append('<div id="captchaInfo" class="info"></div>');
	
		var captchaInfo = $('#captchaInfo');
		var ele = $('#captcha');
		var pos = ele.offset();
		
		captchaInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				captchaInfo.removeClass('correct').addClass('error').html('&larr; Write the characters in the image').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				captchaInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	
	'ECNo' : function() {
	
		$('body').append('<div id="ECNoInfo" class="info"></div>');
	
		var ECNoInfo = $('#ECNoInfo');
		var ele = $('#ECNo');
		var pos = ele.offset();
		
		ECNoInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				ECNoInfo.removeClass('correct').addClass('error').html('&larr; Your Voters ID Card number ?').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				ECNoInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},

	'passtwo' : function() {
	
		$('body').append('<div id="passtwoInfo" class="info"></div>');
	
		var passtwoInfo = $('#passtwoInfo');
		var ele = $('#passtwo');
		var pos = ele.offset();
		
		passtwoInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 3) {
			jVal.errors = true;
				passtwoInfo.removeClass('correct').addClass('error').html('&larr; 3 Charecters minimum').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				passtwoInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},
	'Gender' : function() {
	
		$('body').append('<div id="GenderInfo" class="info"></div>');
	
		var GenderInfo = $('#GenderInfo');
		var ele = $('#Gender');
		var pos = ele.offset();
		
		GenderInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 4) {
			jVal.errors = true;
				GenderInfo.removeClass('correct').addClass('error').html('&larr; Select Gender').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				GenderInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	
	'MarStatus' : function() {
	
		$('body').append('<div id="MarStatusInfo" class="info"></div>');
	
		var MarStatusInfo = $('#MarStatusInfo');
		var ele = $('#MarStatus');
		var pos = ele.offset();
		
		MarStatusInfo.css({
			top: pos.top-3,
			left: pos.left+ele.width()+15
		});
		
		if(ele.val().length < 4) {
			jVal.errors = true;
				MarStatusInfo.removeClass('correct').addClass('error').html('&larr; Choose from list').show();
				ele.removeClass('normal').addClass('wrong').css({'font-weight': 'normal'});		
		} else {
				MarStatusInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
		}
	},	
	
	'sendIt' : function (){
		if(!jVal.errors) {
			$('#mform').submit();
		}
	}
};

// ====================================================== //

$('#send').click(function (){
	var obj = $.browser.webkit ? $('body') : $('html');
	obj.animate({ scrollTop: $('#mform').offset().top }, 750, function (){
		jVal.errors = false;
		jVal.Name();
		jVal.birthDate();
		jVal.Mobile();
		jVal.Address();
		jVal.District();
		jVal.Pin();
		jVal.NomName();
		jVal.captcha();
		jVal.ECNo();
		jVal.passtwo();
		jVal.Gender();
		jVal.MarStatus();
		jVal.sendIt();
	});
	return false;
});
$('#Name').change(jVal.Name);
$('#birthDate').change(jVal.birthDate);
$('#Mobile').change(jVal.Mobile);
$('#Address').change(jVal.Address);
$('#District').change(jVal.District);
$('#Pin').change(jVal.Pin);
$('#NomName').change(jVal.NomName);
$('#ECNo').change(jVal.ECNo);
$('#captcha').change(jVal.captcha);
$('#passtwo').change(jVal.passtwo);
$('#Gender').change(jVal.Gender);
$('#MarStatus').change(jVal.MarStatus);
// ====================================================== //
});
</script>

<script type="text/javascript">
function getScriptPage3(div_id,content_id)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
     		http.open("GET", "othercountry.php?content=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
			}	
function getpage(div_id,content_id)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
			http.open("GET", "refidval.php?content=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
		}
</script>