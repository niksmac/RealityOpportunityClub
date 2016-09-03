<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login | Reality Opportunity Club</title>
 <link rel="shortcut icon" href="images/favicon.ico" />
<meta name="robots" content="index,follow">
<script type="text/javascript">
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof rocOnload!='function'){rocOnload=func;}else{var oldonload=rocOnload;rocOnload=function(){oldonload();func();}}};
function s(id,pos){g(id).left=pos+'px';}
function g(id){return document.getElementById(id).style;}
function shake(id,a,d){c=a.shift();s(id,c);if(a.length>0){setTimeout(function(){shake(id,a,d);},d);}else{try{g(id).position='static';roc_attempt_focus();}catch(e){}}}
addLoadEvent(function(){ var p=new Array(15,30,15,0,-15,-30,-15,0);p=p.concat(p.concat(p));var i=document.forms[0].id;g(i).position='relative';shake(i,p,20);});
</script>
<link href="css/colors-fresh.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/login.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/screen.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.style1 {color: #CCCCCC}
-->
</style></head>
<body class="login" screen_capture_injected="true">
<?php if (isset ($_GET['cls'])) { ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div class="errorinfodiv"><strong><br /> Login Blocked Due to Closing</strong> <br /> Sorry for inconvenience<br /><br /> 
<a href="http://www.ropclub.com/" class="normlink"><font color="#CC0000">RETURN TO HOME</font></a> | <a href="roc-onlineproducts.php" class="normlink"><font color="#CC0000">ONLINE PRODUCTS</font></a> | <a href="contact-roc.php" class="normlink"><font color="#CC0000">CONTACT US</font></a><br /> 
<br /> </div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<?php 
} 

else 
{
?>
<div align="center"><br />
<br />
<br />
<br />

<form name="loginform" id="loginform" action="rocmemberlogin.php" method="post" style="left: 0px; width:300px; ">
	<p>
		<label>
		<div align="left">ROC ID<br>
		  <input type="text" name="rocuname" id="rocuname" class="input" value="" size="20" tabindex="10">
		</div>
	  </label>
	</p>
	<p>
		<label>
		<div align="left">PASSWORD<br>
		  <input type="password" name="pwd" id="pwd" class="input" value="" size="20" tabindex="20">
		</div>
	  </label>
	</p>
	<p class="submit">
		<input type="submit" name="roc-submit" id="roc-submit" class="button-primary" value="Log In" tabindex="100">
	</p>
</form>
</div>
<?php } ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />





<script type="text/javascript">
function roc_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('rocuname');
d.value = '';
d.focus();
} catch(e){}
}, 200);
}

if(typeof rocOnload=='function')rocOnload();
</script>