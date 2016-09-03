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


//2 Start 

var binclose;
function close_bin() 
{
binclose=GetXmlHttpObject()
if (binclose==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
//alert('insede');
var url="refreshdb1.php"
url=url+"?sid="+Math.random();
//alert(url);
binclose.onreadystatechange=stateChanged6
binclose.open("POST",url,true)
binclose.send(null)
}

function stateChanged6() 
{ 
if (binclose.readyState==4 || binclose.readyState=="complete")
 { 
 document.getElementById("binclose").innerHTML=binclose.responseText 
 } 
 else {
document.getElementById("binclose").innerHTML='<div ><img src="heart.gif"/>Please Wait ...</div>' 
}
}

// 2 End

//2 Start 

var tenmat;
function close_tenmat() 
{
tenmat=GetXmlHttpObject()
if (tenmat==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
//alert('insede');
var url="tenmatrixclose_code.php"
url=url+"?sid="+Math.random();
//alert(url);
tenmat.onreadystatechange=stateChanged7
tenmat.open("POST",url,true)
tenmat.send(null)
}

function stateChanged7() 
{ 
if (tenmat.readyState==4 || tenmat.readyState=="complete")
 { 
 document.getElementById("tenmat").innerHTML=tenmat.responseText 
 } 
 else {
document.getElementById("tenmat").innerHTML='<div ><img src="heart.gif"/>Please Wait ...</div>' 
}
}

// 2 End