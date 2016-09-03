function IO(U, V) {//LA MOD String Version. A tiny ajax library.  by, DanDavis
 var X = !window.XMLHttpRequest ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest();
 X.open(V ? 'PUT' : 'GET', U, false );
 X.setRequestHeader('Content-Type', 'text/html')
 X.send(V ? V : '');
return X.responseText;}
var collection=IO("list.php").split(/\r?\n/g);