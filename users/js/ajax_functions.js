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

var cache;
function CheckLegs(sponserid) 
{
cache=GetXmlHttpObject()
if (cache==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
//alert('insede');
var url="checklegs.php"
url=url+"?sponserid="+sponserid+"&sid="+Math.random();
//alert(url);
cache.onreadystatechange=stateChanged5
cache.open("POST",url,true)
cache.send(null)
}

function stateChanged5() 
{ 
if (cache.readyState==4 || cache.readyState=="complete")
 { 
 document.getElementById("cache").innerHTML=cache.responseText 
 } 
 else {
document.getElementById("cache").innerHTML='<div ><img src="heart.gif"/>Please Wait ...</div>' 
}
}

// 1 End 