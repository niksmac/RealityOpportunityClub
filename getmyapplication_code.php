<?php
session_start();
include ("lib/function_lib.php");
include ("connect/connect.php");
//echo $_SESSION['secretword'];

    if (empty($_SESSION['secretword']) || trim(strtolower($_POST['captcha'])) != $_SESSION['secretword']) 
	{
        echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Error !!</title>  <link href='css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-1);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='errormsg' > <div><strong>Error Found </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html>";
    } 
	else 
	{

			$name=htmlentities($_POST['name']); 
			$message=htmlentities($_POST['message']);
			$names=htmlentities($_POST['names']);
			$paddress=htmlentities($_POST['paddress']);
			$distrct=htmlentities($_POST['distrct']);
			$pinnos=htmlentities($_POST['pinnos']);
			$dob=htmlentities($_POST['birthDate']);
			$phones=htmlentities($_POST['phones']);
			$mobiles=htmlentities($_POST['mobiles']);
			$emails=htmlentities($_POST['emails']);
			$sex=htmlentities($_POST['sex']);
			$mstats=htmlentities($_POST['mstats']);
			$eduql=htmlentities($_POST['eduql']);
			$exper=htmlentities($_POST['exper']);
			$sal_exp=htmlentities($_POST['sal_exp']);
			$positin=htmlentities($_POST['hdn']);
			
			if($_FILES['photos']['name']) {
			list($file,$error) = upload('photos','careers/','jpeg,gif,png,jpg');
			if($error) $failed=0;
			}
			if($_FILES['resume']['name']) {
			list($filee,$error) = upload('resume','careers/','jpeg,gif,png,jpg,doc,docx,pdf,html');
			if($error) $failed=1;
			}

			mysql_query("insert into careers (names,paddress,distrct,pinnos,dob,phones,mobiles,emails,sex,mstats,eduql,exper,sal_exp,photos,resume,positin) values ('$names', '$paddress', '$distrct', '$pinnos', '$dob', '$phones', '$mobiles', '$emails', '$sex', '$mstats', '$eduql', '$exper', '$sal_exp', '$file', '$filee' , '$positin') ");
			// Insert SQL Statement 

    }

  
  
unset($_SESSION['secretword']);
	
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Succes !!</title>  <link href='css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-1);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='successmsg' > <div><strong>Operation Success </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html>";

?>
