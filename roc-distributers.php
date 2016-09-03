<?php 
include("inner.tpl");
function ShowContent($title)
{
?>
<div id="content_area">
<script  src="js/jquery1.js" type="text/javascript"></script>
<script type="text/javascript">
      $(document).ready(function(){
	  $('#content1').hide();
   			$('a').click(function(){
			$('#content1').show('slow');
   });
   $('a#close').click(function(){
   		$('#content1').hide('slow');
		})
 	  });
</script>

  <table width="99%" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="15%" align="left" valign="top"><div class="tableouter"><form action="shopsearchres.php" method="post" name="shopsearch" id="shopsearch">
  
    <table width="95%" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td><h2>Search Shops</h2></td>
      </tr>
      <tr>
        <td width="25%"><select name="country" id="country" class="" tabindex="7">
          <option value="" selected="selected"   >Select Country</option>
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
          <option value="Botswana"   >Botswana</option>
          <option value="Bouvet Island&lt;"   >Bouvet Island</option>
          <option value="Brazil"   >Brazil</option>
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
          <option value="Chad"   >Chad</option>
          <option value="Chile"   >Chile</option>
          <option value="China"   >China</option>
          <option value="Christmas Island"   >Christmas Island</option>
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
          <option value="India">India</option>
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
          <option value="Netherlands Antilles"   >Netherlands Antilles</option>
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
          <option value="Saint Lucia"   >Saint Lucia</option>
          <option value="Samoa"   >Samoa</option>
          <option value="San Marino"   >San Marino</option>
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
        <td><select name="state">
        <option value="" selected="selected">Select State</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar and Jharkhand">Bihar and Jharkhand</option>
          <option value="Delhi &amp; NCR">Delhi &amp; NCR</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala" >Kerala</option>
          <option value="Madhya Pradesh &amp; Chhattisgarh">Madhya Pradesh &amp; Chhattisgarh</option>
          <option value="Maharashtra and Goa ">Maharashtra and Goa </option>
          <option value="Orissa">Orissa</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Tamil Nadu ">Tamil Nadu </option>
          <option value="UP">UP</option>
          <option value="West Bengal">West Bengal </option>
        </select></td>
        </tr>
      <tr>
        <td>
          <select name="district" size="1">
     <option selected="selected" >- District -</option>      
    <option value="Alappuzha">Alappuzha</option>
    <option value="Ernakulam">Ernakulam</option>
    <option value="Idukki">Idukki</option>
    <option value="Kannur">Kannur</option>
    <option value="Kasaragode">Kasaragode</option>
    <option value="Kollam">Kollam</option>
    <option value="Kottayam">Kottayam</option>
    <option value="Kozhikode">Kozhikode</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Malappuram">Malappuram</option>
    <option value="Palakkad">Palakkad</option>
    <option value="Pathanamthitta">Pathanamthitta</option>
    <option value="Thrissur">Thrissur</option>
    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    <option value="Wynad">Wynad</option>

  </select>

</td>
      </tr>
      <tr>
        <td><input name="pinnum" type="text" id="pinnum" value="PIN CODE" onclick="this.value=''" /></td>
      </tr>
      
      <tr>
        <td><input name="shpname" type="text" id="shpname" value="SHOP NAME" onclick="this.value=''" /></td>
      </tr>
      <tr>
        <td><div align="right"><a href="#" id="click" class="morelink">Advanced</a></div></td>
      </tr>
      <tr>
        <td>
<div id="content1" style="width:220px;">
<table width="200" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="20"><input type="checkbox" name="shpcat[]" value="Provision Store" id="Provision Store" /></td>
            <td width="186">Provision Store</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="shpcat[]" value="Furniture" id="Furniture" /></td>
            <td>Furniture</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="shpcat[]" value="Travels" id="Travels" /></td>
            <td>Travels</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="shpcat[]" value="Hotel [Food]" id="Hotel [Food]" /></td>
            <td>Hotel [Food]</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="shpcat[]" value="Footwares" id="Footwares" /></td>
            <td>Footwares</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="shpcat[]" value="Jewellery" id="Jewellery" /></td>
            <td>Jewellery</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="Home Appliances" value="Home Appliances" id="Home Appliances" /></td>
            <td>Home Appliances</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="Electrinics" value="Electrinics" id="Electrinics" /></td>
            <td>Electronics</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="Studio" value="Studio" id="Studio" /></td>
            <td>Studio</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="Ladies &amp; Fancy Store" value="Ladies &amp; Fancy Store" id="Ladies &amp; Fancy Store" /></td>
            <td>Ladies &amp; Fancy Store</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="Gift" value="Gift" id="Gift" /></td>
            <td>Gift</td>
            </tr>
          <tr>
            <td><input type="checkbox" name="Textiles" value="Textiles" id="Textiles" /></td>
            <td>Textiles</td>
            </tr>
          <tr>
            <td colspan="2"><a href="#" id="close" class="morelink" >Close</a></td>
            </tr>
        </table>
        </div>  </td>
      </tr>
      
      <tr>
        <td><label class="submit"><input type="submit" name="button"  value="Search" id="send" /></label>
          <label class="reset"><input type="reset" name="button2" value="Reset" /></label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
</form></td>
      <td width="85%" align="left" valign="top"><table width="99%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#557B24" style="border-collapse:collapse; margin-bottom:100px;">
        <tr>
          <td width="42" align="left" valign="middle" background="images/bg.jpg" bgcolor="#EFEFEF" ><strong>No.</strong></td>
          <td width="695" align="left" valign="middle" background="images/bg.jpg" bgcolor="#EFEFEF" ><strong>Name &amp; Address</strong></td>
          <td width="307" align="left" valign="middle" background="images/bg.jpg" bgcolor="#EFEFEF" ><strong>Phone</strong></td>
          <td width="457" align="left" valign="middle" background="images/bg.jpg" bgcolor="#EFEFEF" ><strong>Location</strong></td>
        </tr>
        <?php 
$tyu=1;
$qry=mysql_query("select storename,address,phone,location  from stores where  shpstat=1 ");
while($qrys=mysql_fetch_array($qry))
{
?>
        <tr>
          <td align="left" valign="top"><?php echo $tyu;  ?></td>
          <td align="left" valign="top" ><h2><?php echo strtoupper($qrys['storename']); ?></h2>
              <?php echo "<br>"; echo nl2br($qrys['address']);  ?></td>
          <td align="left" valign="top"><?php echo $qrys['phone'];  ?></td>
          <td align="left" valign="top"><?php echo $qrys['location'];  ?></td>
        </tr>
        <?php $tyu++; } ?>
      </table></td>
    </tr>
  </table>
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
return "Distribution Centers | Reality Opportunity Club";
}
function showMeta()
{
$qry=mysql_query("select storename  from stores where id <> 9 ");
while($qrys=mysql_fetch_array($qry))
{
$strname .= $qrys['storename'].', ';
}

$meta = '<meta name="description" content="Reality Opportunity Club '.$strname.'"/>
<meta name="keywords" content="Distribution Centers, Reality Opportunity Club, '.$strname.'  "/>';
return $meta;
}
?>
<script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/serchvalidate.js" charset="utf-8"></script>