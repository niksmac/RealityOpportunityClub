function validateptreeform(name)
{
document.getElementById('rocid1').style.backgroundColor = 'white';
document.getElementById('rocid2').style.backgroundColor = 'white';
document.getElementById('rocid3').style.backgroundColor = 'white';
document.getElementById('rocid4').style.backgroundColor = 'white';
document.getElementById('rocid5').style.backgroundColor = 'white';
document.getElementById('bvremaing').style.backgroundColor = 'white';


if ( (name.elements['rocid1'].value.length<1) && (name.elements['rocid2'].value.length<1) && (name.elements['rocid3'].value.length<1) )
{
document.getElementById('rocid1').style.backgroundColor = 'yellow';
name.elements['rocid1'].focus();
return false;
}


if ( (name.elements['rocid1'].value.length>1) && (name.elements['bv1'].value.length<1) )
{
document.getElementById('rocid1').style.backgroundColor = 'yellow';
alert("Please check the form for errors !!");
name.elements['rocid1'].focus();
return false;
}
if ( (name.elements['rocid2'].value.length>1) && (name.elements['bv2'].value.length<1) )
{
document.getElementById('rocid2').style.backgroundColor = 'yellow';
alert("Please check the form for errors !!");
name.elements['rocid2'].focus();
return false;
}
if ( (name.elements['rocid3'].value.length>1) && (name.elements['bv3'].value.length<1) )
{
document.getElementById('rocid3').style.backgroundColor = 'yellow';
alert("Please check the form for errors !!");
name.elements['rocid3'].focus();
return false;
}
if ( (name.elements['rocid4'].value.length>1) && (name.elements['bv4'].value.length<1) )
{
document.getElementById('rocid4').style.backgroundColor = 'yellow';
alert("Please check the form for errors !!");
name.elements['rocid4'].focus();
return false;
}
if ( (name.elements['rocid5'].value.length>1) && (name.elements['bv5'].value.length<1) )
{
document.getElementById('rocid5').style.backgroundColor = 'yellow';
alert("Please check the form for errors !!");
name.elements['rocid5'].focus();
return false;
}



}
/*

eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('t s(0){5.8(\'9\').7.6=\'b\';5.8(\'i\').7.6=\'b\';5.8(\'j\').7.6=\'b\';5.8(\'q\').7.6=\'b\';5.8(\'p\').7.6=\'b\';5.8(\'u\').7.6=\'b\';d((0.2[\'9\'].3.4<1)&&(0.2[\'i\'].3.4<1)&&(0.2[\'j\'].3.4<1)){5.8(\'9\').7.6=\'e\';0.2[\'9\'].f();a c}d((0.2[\'9\'].3.4<1)&&(0.2[\'r\'].3.4<1)){5.8(\'9\').7.6=\'e\';n("l h g o k m !!");0.2[\'9\'].f();a c}d((0.2[\'i\'].3.4>1)&&(0.2[\'x\'].3.4<1)){5.8(\'i\').7.6=\'e\';n("l h g o k m !!");0.2[\'i\'].f();a c}d((0.2[\'j\'].3.4>1)&&(0.2[\'z\'].3.4<1)){5.8(\'j\').7.6=\'e\';n("l h g o k m !!");0.2[\'j\'].f();a c}d((0.2[\'q\'].3.4>1)&&(0.2[\'y\'].3.4<1)){5.8(\'q\').7.6=\'e\';n("l h g o k m !!");0.2[\'q\'].f();a c}d((0.2[\'p\'].3.4>1)&&(0.2[\'v\'].3.4<1)){5.8(\'p\').7.6=\'e\';n("l h g o k m !!");0.2[\'p\'].f();a c}a w}',36,36,'name||elements|value|length|document|backgroundColor|style|getElementById|rocid1|return|white|false|if|yellow|focus|the|check|rocid2|rocid3|for|Please|errors|alert|form|rocid5|rocid4|bv1|validateptreeform|function|bvremaing|bv5|true|bv2|bv4|bv3'.split('|'),0,{}))

*/