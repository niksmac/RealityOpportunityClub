function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}


//1 start 

var iddetails;
function getiddetails(sponserid) 
{
iddetails=GetXmlHttpObject()
if (iddetails==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
//alert('insede');
var url="getiddetails.php"
url=url+"?sponserid="+sponserid+"&sid="+Math.random();
//alert(url);
iddetails.onreadystatechange=stateChanged5
iddetails.open("POST",url,true)
iddetails.send(null)
}

function stateChanged5() 
{ 
if (iddetails.readyState==4 || iddetails.readyState=="complete")
 { 
 document.getElementById("iddetails").innerHTML=iddetails.responseText 
 } 
 else {
document.getElementById("iddetails").innerHTML='<div ><img src="img/heart.gif"/>Please Wait ...</div>' 
}
}

// 1 End 


