function clearme()
{
document.getElementById("ropid").value="";
}


function validateme(frm)
{
frm.onsubmit=function()
{
if(frm.elements['qtype'].value.length<1)
{
alert("Select your Query type");
frm.elements['qtype'].focus();
return false;
}
if(frm.elements['name'].value.length<1)
{
alert("You should enter your name");
frm.elements['name'].focus();
return false;
}

var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = frm.elements['email'].value;
if(reg.test(address) == false) {
alert('Invalid Email Address');
frm.elements['email'].focus();
frm.elements['email'].value="";
return false;
}	
if(frm.elements['message'].value.length<1)
{
alert("Please type your message");
frm.elements['message'].focus();
return false;
}
if(document.form1.number.value==0)
{
alert("Human Verification Failed ! \nPlease try again");
document.form1.number.focus();
return false;
}
return true;
}
}

function getScriptPage(div_id,content_id)
{
subject_id = div_id;
num=document.getElementById(content_id).value;
var strChar;
var blnResult = true;
if (num.length == 0) return false;
http.open("GET", "includes/idvals.php?content=" + escape(num), true);
http.onreadystatechange = handleHttpResponse;
http.send(null);
}

function getScriptPage2(div_id,content_id)
{
subject_id = div_id;
num=document.getElementById(content_id).value;
var strChar;
var blnResult = true;
if (num.length == 0) return false;
http.open("GET", "../includes/chkpin.php?content=" + escape(num), true);
http.onreadystatechange = handleHttpResponse;
http.send(null);
}