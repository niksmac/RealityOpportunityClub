<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; 
$ropid=$_GET['id']; 

if ($ropid=="")
{
	
	echo "<html><head><title>ROP Club :: Error</title><script>function update(){history.back(-2);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Error: Invalid User ID Given!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Exiting ... Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
		
}
else 
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>ROP Club : Administrator</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>
<link href="colours.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {color: #FF3333}
-->
</style>
<script type="text/javascript" language="javascript">


function clearme(tag)
{
document.getElementById(tag).value="";
}

function Validate(frm)
{
frm.onsubmit=function()
{
	if(frm.elements['name'].value.length<1)
	 {
 	alert("You cannot leave the  name field empty");
	frm.elements['name'].focus();
 	return false;
 	}
	if(frm.elements['Phone'].value.length<1)
	 {
 	alert("You cannot leave the  Phone field empty");
	frm.elements['Phone'].focus();
 	return false;
 	}
	
	if( (frm.elements['ECNo'].value.length<1) && (frm.elements['PanNo'].value.length<1) )
	 {
 	alert("Either Electrol No card or PAN number is Mandatory");
 	return false;
 	}
		
return true;
}
}
		
</script>

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript">
function getScriptPageh(div_id,content_id)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
     		http.open("GET", "av_unames.php?content=" + escape(num), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
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
function getScriptPage2(div_id,content_id,pwd2)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			nums=document.getElementById(pwd2).value;
			var strChar;
   			var blnResult = true;
   			if (num.length == 0) return false;
			http.open("GET", "pwdmatch.php?content=" + escape(num) + "&offset=" + nums , true);
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


<script type="text/javascript">
function applyt()
{
  if(document.getElementById('prerefid').readonly=="readonly")
  {
  alert ();
    document.form1.prerefid.readonly="";
  }

}
</script>
</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="66" height="185" align="left" valign="top"><img id="mlm_01" src="images/mlm_01.jpg" width="66" height="185" alt="" /></td>
    <td width="838" height="185" align="left" valign="top" background="images/mlm_13.jpg"><?php include("banner.php"); ?></td>
    <td width="76" height="185" align="left" valign="top"><img id="mlm_03" src="images/mlm_03.jpg" width="76" height="185" alt="" /></td>
  </tr>
  <tr>
    <td width="66" height="700" align="left" valign="top" background="images/mlm_07.jpg">&nbsp;</td>
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form action="allocate_code.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="547" border="0" cellpadding="5" cellspacing="0" class="Contents">
            <tr>
              <td height="37" align="left" valign="top" class="ContentBold">Basic Info.</td>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
<?php 
$trthjgjyet=mysql_query("select * from members where MemberID='$ropid' ");
while($rtsdset=mysql_fetch_array($trthjgjyet))
{
$RefID =$rtsdset['RefID'];
$Name =$rtsdset['Name'];
$ECNo =$rtsdset['ECNo'];
$PanNo =$rtsdset['PanNo'];
$Address =$rtsdset['Address'];
$NomName =$rtsdset['NomName'];
$NomRel =$rtsdset['NomRel'];
$DOB =$rtsdset['DOB'];
$DOB =$rtsdset['DOB'];
$Email =$rtsdset['Email'];
$Password =$rtsdset['Password'];
$Occupation =$rtsdset['Occupation'];
$Phone =$rtsdset['Phone'];
$Mobile =$rtsdset['Mobile'];
$Pin =$rtsdset['Pin'];
$FoHName =$rtsdset['FoHName'];
$Gender =$rtsdset['Gender'];
$District =$rtsdset['District'];
$MarStatus =$rtsdset['MarStatus'];
$ActStatus =$rtsdset['ActStatus'];
$PrePoint =$rtsdset['PrePoint'];
$PreRefPoint =$rtsdset['PreRefPoint'];
$PreRefID =$rtsdset['PreRefID'];
$BankAccNo =$rtsdset['BankAccNo'];
}


$oiuy=mysql_query("select * from members where MemberID='$PreRefID' ");
while($jhg=mysql_fetch_array($oiuy))
{
$PreRefPoints =$jhg['PreRefPoint'];
}
?>




            <tr>
              <td align="left" valign="top">Ref: Id</td>
              <td align="left" valign="top"><input type="text" name="RefID" id="RefID" value="<?php echo $RefID; ?>" /></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td width="140" align="left" valign="top">Users ROP Id</td>
              <td width="237" align="left" valign="top"><input type="text" name="MemberID" id="MemberID" value="<?php echo $ropid; ?>" readonly="readonly" /></td>
              <td width="146" align="left" valign="top"><span class="output-div-container"><span id="idver"></span></span></td>
            </tr>

            <tr>
              <td height="39" colspan="3" align="left" valign="top" class="ContentBold">Login Details</td>
            </tr>
            <tr>
              <td align="left" valign="top">Password</td>
              <td align="left" valign="top"><input name="pass1" type="text" id="pass1" value="<?php echo $Password; ?>" /></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="36" colspan="3" align="left" valign="top" class="ContentBold">Personal Info </td>
            </tr>
            <tr>
              <td align="left" valign="top">Name</td>
              <td align="left" valign="top"><input name="name" type="text" id="name" size="30"  value="<?php echo $Name; ?>"/></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top" bgcolor="#E0FCF9">Bank Acc No.</td>
              <td align="left" valign="top" bgcolor="#E0FCF9"><input name="accno" type="text" id="accno" size="30"  value="<?php echo $BankAccNo; ?>"/></td>
              <td align="left" valign="top" bgcolor="#E0FCF9">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">Email</td>
              <td align="left" valign="top"><input name="Email" type="text" id="Email" size="30"  value="<?php echo $Email; ?>"/></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">Gender</td>
              <td align="left" valign="top"><label>
			  <?php if ($Gender=="Male") { ?>
                <input name="Gender" type="radio" id="leg_4" value="Male" checked="checked" />
			
                Male </label>
                  <label>
                  <input type="radio" name="Gender" value="Female" id="leg_5" />
				  	<?php }else if ($Gender=="Female") { ?>
					<input name="Gender" type="radio" id="leg_4" value="Male"  />
			
                Male </label>
                  <label>
                  <input type="radio" name="Gender" value="Female" id="leg_5" checked="checked"/>
				  <?php } ?>
					
                    Female</label></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">Marital Status</td>
              <td align="left" valign="top"><label></label><label>
                <input name="MarStatus" type="text" id="MarStatus"  size="20" value="<?php echo $MarStatus; ?>" />
              </label></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">Date of Birth</td>
              <td align="left" valign="top"><input name="DOB" type="text" id="DOB"  size="20" value="<?php echo $DOB; ?>" /></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top" class="Contents">Nominee Name</td>
              <td align="left" valign="top" class="Contents"><input name="NomName" type="text" id="NomName"  size="30" value="<?php echo $NomName; ?>" /></td>
              <td align="left" valign="top" class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top" class="Contents">Relation with Nominee</td>
              <td align="left" valign="top" class="Contents"><input name="NomRel" type="text" id="NomRel"  size="30" value="<?php echo $NomRel; ?>" /></td>
              <td align="left" valign="top" class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top" class="Contents">Father/Husbands Name</td>
              <td align="left" valign="top" class="Contents"><input name="FoHName" type="text" id="FoHName"  size="30" value="<?php echo $FoHName; ?>"/></td>
              <td align="left" valign="top" class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top" class="Contents">Occupation</td>
              <td align="left" valign="top" class="Contents"><input name="Occupation" type="text" id="Occupation" value="<?php echo $Occupation; ?>"/></td>
              <td align="left" valign="top" class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top" class="Contents">Phone</td>
              <td align="left" valign="top" class="Contents"><input name="Phone" type="text" id="Phone"value="<?php echo $Phone; ?>" /></td>
              <td align="left" valign="top" class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top" class="Contents">Mobile.</td>
              <td align="left" valign="top" class="Contents"><input name="Mobile" type="text" id="Mobile" value="<?php echo $Mobile; ?>"/></td>
              <td align="left" valign="top" class="Contents">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">Electral Card No.</td>
              <td align="left" valign="top"><input name="ECNo" type="text" id="ECNo" size="30" value="<?php echo $ECNo; ?>"/></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">PAN Card No.</td>
              <td align="left" valign="top"><input name="PanNo" type="text" id="PanNo" size="30" value="<?php echo $PanNo; ?>"/></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">Address</td>
              <td align="left" valign="top"><textarea name="Address" rows="3" id="Address"><?php echo $Address; ?></textarea></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">Country</td>
              <td align="left" valign="top"><select name="Country" id="Country" tabindex="7" onchange="getScriptPage3('output_divst3','Country')">
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
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">State</td>
              <td align="left" valign="top"><span class="output-div-container"><span id="output_divst3">
                <select name="State">
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
                </select>
              </span></span></td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td>District</td>
              <td><input name="District" type="text" id="District" size="30" value="<?php echo $District; ?>"/></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Pin</td>
              <td><input name="Pin" type="text" id="Pin" size="30" value="<?php echo $Pin; ?>"/></td>
              <td>&nbsp;</td>
            </tr>

            <tr>
              <td>Activate </td>
              <td colspan="2">
			  <?php if ($ActStatus==1) { ?>
               <input name="ActStatus" type="radio" id="leg_4" value="1" checked="checked" />Yes 
				<input type="radio" name="ActStatus" value="0" id="leg_5" />No<br />

                <?php }else if ($ActStatus==0) { ?>
					<input name="ActStatus" type="radio" id="leg_4" value="1"  />
					Yes 
					<input type="radio" name="ActStatus" value="0" id="leg_5" checked="checked"/>
					No
				  <?php } ?>				 </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2"><input type="submit" name="Submit" value="Submit" onclick="Validate(form1)" />
                <input type="reset" name="Submit2" value="Reset" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
          </table>
                                </form>       </td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
    <td width="76" height="700" align="left" valign="top" background="images/mlm_09.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td width="66" height="58" align="left" valign="top"><img id="mlm_10" src="images/mlm_10.jpg" width="66" height="58" alt="" /></td>
    <td width="838" height="58" align="left" valign="top" background="images/mlm_14.jpg">&nbsp;</td>
    <td width="76" height="58" align="left" valign="top"><img id="mlm_12" src="images/mlm_12.jpg" width="76" height="58" alt="" /></td>
  </tr>
</table>
<?php 
}
?>
</body>
</html>
