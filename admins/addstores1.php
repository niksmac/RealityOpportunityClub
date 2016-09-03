<script type="text/javascript" src="ajax.js"></script>
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{
if(name.elements['storename'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['storename'].focus();
return false;
}


myOption = -1;
for (i=name.st_grade.length-1; i > -1; i--) {
if (name.st_grade[i].checked) {
myOption = i; i = -1;
}
}
if (myOption == -1) {
alert("Select The Grade of This Store");
return false;
}



if(name.elements['ownername'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['ownername'].focus();
return false;
}
if(name.elements['phone'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['phone'].focus();
return false;
}
if(name.elements['pincode'].value.length<1 || name.elements['pincode'].value.length<6)
{
alert("Error Occured Reasons can be \n\n+ This Field Cannot be Blank \n+ A Normal PIN Number consists of 6 Numerical Values");
name.elements['pincode'].focus();
return false;
}
return true;
}
}
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
</script>
<link href="colours.css" rel="stylesheet" type="text/css" />
<form id="form1" name="form1" method="post" action="addstores_code.php">
  <table width="600" border="0" cellpadding="3" cellspacing="0" class="Contents">
    <tr>
      <td width="142">&nbsp;</td>
      <td width="244">&nbsp;</td>
      <td width="196">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" class="Contents"><strong>Store Id</strong></td>
      <td align="left" valign="top"><input name="store_id" type="text" id="store_id" size="20" /></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Store Name</strong></td>
      <td align="left" valign="top"><input name="storename" type="text" id="storename" size="35" />
        <span class="errtxt">        *</span></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Grade<span class="errtxt">*</span></strong></td>
      <td align="left" valign="top"><p>
        <label>
          <input type="radio" name="st_grade" value="1" id="RadioGroup1_0" />
          Grade 1</label>
        <br />
        <label>
          <input type="radio" name="st_grade" value="2" id="RadioGroup1_1" />
          Grade 2</label>
        <br />
        <label>
          <input type="radio" name="st_grade" value="3" id="RadioGroup1_2" />
          Grade 3</label>
        <br />
        <label>
          <input type="radio" name="st_grade" value="4" id="RadioGroup1_3" />
          Grade 4</label>
        <br />
      </p></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Owner Name</strong></td>
      <td align="left" valign="top"><input name="ownername" type="text" id="ownername" size="35" />
        <span class="errtxt">*</span></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>TIN Number</strong></td>
      <td align="left" valign="top" class="errtxt"><input name="tinnumber" type="text" id="tinnumber" size="35" /></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Phone</strong></td>
      <td align="left" valign="top" class="errtxt"><input name="phone" type="text" id="phone" size="20" />
        *</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Country</strong></td>
      <td align="left" valign="top"><select name="country" id="country" class="" tabindex="7" onchange="getScriptPage3('output_divst3','country')">
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
        <option value="Antigua and Barbuda"   >Antigua and Barbuda</option>
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
        <option value="Bosnia and Herzegovina"   >Bosnia and Herzegovina</option>
        <option value="Botswana"   >Botswana</option>
        <option value="Bouvet Island&lt;"   >Bouvet Island</option>
        <option value="Brazil"   >Brazil</option>
        <option value="British Indian Ocean Territory"   >British Indian Ocean Territory</option>
        <option value="British Virgin Islands"   >British Virgin Islands</option>
        <option value="Brunei"   >Brunei</option>
        <option value="Bulgaria"   >Bulgaria</option>
        <option value="Burkina Faso"   >Burkina Faso</option>
        <option value="Burundi"   >Burundi</option>
        <option value="Cambodia"   >Cambodia</option>
        <option value="Cameroon"   >Cameroon</option>
        <option value="Canada"   >Canada</option>
        <option value="Cape Verde"   >Cape Verde</option>
        <option value="Cayman Islands"   >Cayman Islands</option>
        <option value="Central African Republic"   >Central African Republic</option>
        <option value="Chad"   >Chad</option>
        <option value="Chile"   >Chile</option>
        <option value="China"   >China</option>
        <option value="Christmas Island"   >Christmas Island</option>
        <option value="Cocos (Keeling) Islands"   >Cocos (Keeling) Islands</option>
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
        <option value="Federated States of Micronesia"   >Federated States of Micronesia</option>
        <option value="Fiji"   >Fiji</option>
        <option value="Finland"   >Finland</option>
        <option value="France"   >France</option>
        <option value="French Guyana"   >French Guyana</option>
        <option value="French Polynesia"   >French Polynesia</option>
        <option value="French Southern Territories"   >French Southern Territories</option>
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
        <option value="Heard Island and McDonald Islands"   >Heard Island and McDonald Islands</option>
        <option value="Honduras"   >Honduras</option>
        <option value="Hong Kong"   >Hong Kong</option>
        <option value="Hungary"   >Hungary</option>
        <option value="Iceland"   >Iceland</option>
        <option value="India" selected="selected">India</option>
        <option value="Indonesia"   >Indonesia</option>
        <option value="Iran"   >Iran</option>
        <option value="Iraq"   >Iraq</option>
        <option value="Iraq-Saudi Arabia Neutral Zone"   >Iraq-Saudi Arabia Neutral Zone</option>
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
        <option value="Netherlands Antilles"   >Netherlands Antilles</option>
        <option value="New Caledonia"   >New Caledonia</option>
        <option value="New Zealand"   >New Zealand</option>
        <option value="Nicaragua"   >Nicaragua</option>
        <option value="Niger"   >Niger</option>
        <option value="Nigeria"   >Nigeria</option>
        <option value="Niue"   >Niue</option>
        <option value="Norfolk Island"   >Norfolk Island</option>
        <option value="North Korea"   >North Korea</option>
        <option value="Northern Mariana Islands"   >Northern Mariana Islands</option>
        <option value="Norway"   >Norway</option>
        <option value="Oman"   >Oman</option>
        <option value="Pakistan"   >Pakistan</option>
        <option value="Palau"   >Palau</option>
        <option value="Occupied Palestinian Territories"   >Occupied Palestinian Territories</option>
        <option value="Panama"   >Panama</option>
        <option value="Papua New Guinea"   >Papua New Guinea</option>
        <option value="Paraguay"   >Paraguay</option>
        <option value="Peru"   >Peru</option>
        <option value="Philippines"   >Philippines</option>
        <option value="Pitcairn Islands"   >Pitcairn Islands</option>
        <option value="Poland"   >Poland</option>
        <option value="Portugal"   >Portugal</option>
        <option value="Puerto Rico"   >Puerto Rico</option>
        <option value="Qatar"   >Qatar</option>
        <option value="Reunion"   >Reunion</option>
        <option value="Romania"   >Romania</option>
        <option value="Russia"   >Russia</option>
        <option value="Rwanda"   >Rwanda</option>
        <option value="Saint Helena and Dependencies"   >Saint Helena and Dependencies</option>
        <option value="Saint Kitts &amp; Nevis">Saint Kitts &amp; Nevis</option>
        <option value="Saint Lucia"   >Saint Lucia</option>
        <option value="Saint Pierre and Miquelon"   >Saint Pierre and Miquelon</option>
        <option value="Saint Vincent and the Grenadines"   >Saint Vincent and the Grenadines</option>
        <option value="Samoa"   >Samoa</option>
        <option value="San Marino"   >San Marino</option>
        <option value="Sao Tome and Principe"   >Sao Tome and Principe</option>
        <option value="Saudi Arabia"   >Saudi Arabia</option>
        <option value="Senegal"   >Senegal</option>
        <option value="Seychelles"   >Seychelles</option>
        <option value="Sierra Leone"   >Sierra Leone</option>
        <option value="Singapore"   >Singapore</option>
        <option value="sk"   >Slovakia</option>
        <option value="si"   >Slovenia</option>
        <option value="sb"   >Solomon Islands</option>
        <option value="so"   >Somalia</option>
        <option value="za"   >South Africa</option>
        <option value="gs"   >South Georgia</option>
        <option value="kr"   >South Korea</option>
        <option value="es"   >Spain</option>
        <option value="pi"   >Spratly Islands</option>
        <option value="lk"   >Sri Lanka</option>
        <option value="sd"   >Sudan</option>
        <option value="sr"   >Suriname</option>
        <option value="sj"   >Svalbard and Jan Mayen Islands</option>
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
        <option value="ae"   >United Arab Emirates</option>
        <option value="uk"   >United Kingdom</option>
        <option value="xd"   >United Nations Neutral Zone</option>
        <option value="us"   >United States</option>
        <option value="um"   >United States Minor Outlying Islands</option>
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
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>State</strong></td>
      <td align="left" valign="top"><span class="output-div-container"><span id="output_divst3"><select name="state">
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar and Jharkhand">Bihar and Jharkhand</option>
        <option value="Delhi &amp; NCR">Delhi &amp; NCR</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala" selected="selected">Kerala</option>
        <option value="Madhya Pradesh &amp; Chhattisgarh">Madhya Pradesh &amp; Chhattisgarh</option>
        <option value="Maharashtra and Goa ">Maharashtra and Goa </option>
        <option value="Orissa">Orissa</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Tamil Nadu ">Tamil Nadu </option>
        <option value="UP">UP</option>
        <option value="West Bengal">West Bengal </option>
      </select></span></span></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>District</strong></td>
      <td align="left" valign="top"><input type="text" name="district" id="district" /></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Panchayath</strong></td>
      <td align="left" valign="top"><input name="panchayth" type="text" id="panchayth" size="25" /></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Location</strong></td>
      <td align="left" valign="top"><input name="location" type="text" id="location" size="25" /></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>Address</strong></td>
      <td align="left" valign="top"><textarea name="adderss" cols="35" rows="5" id="adderss"></textarea></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong>PIN Code</strong></td>
      <td align="left" valign="top" class="errtxt"><input name="pincode" type="text" id="pincode" size="20" />
        *</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" onclick="javascript:validateform1(form1)" />
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle" class="successtxt">&nbsp;</td>
      <td align="center" valign="middle" class="successtxt"><?php if (isset($_GET['yes'])) { ?>
        <marquee behavior="slide">
        New Store Added Successfully
        </marquee>
      <?php }?></td>
      <td align="center" valign="middle" class="successtxt">&nbsp;</td>
    </tr>
  </table>
</form>
