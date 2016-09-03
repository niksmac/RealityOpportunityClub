<?php 
include("../connect/session.php");

   $approcid = $_POST['approcid'];
   $shopname = $_POST['shopname'];
   $Address = $_POST['Address'];
   $shoptin = $_POST['shoptin'];
   $country = $_POST['country'];
   $state = $_POST['state'];
   $District = $_POST['District'];
   $location = $_POST['location'];
   $Pin = $_POST['Pin'];
   $othrcat = $_POST['othrcat'];
   
   $shpcat = $_POST['shpcat'];
   $n        = count($shpcat);
   $i        = 0;
   while ($i < $n)
   {
      $shopcats .=$shpcat[$i].', ';
      $i++;
   }

	$q = "select MAX(id) from stores";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$ShpIDNew=$data[0]+1;
	
	mysql_query ("INSERT INTO  stores (storename ,tinnumber ,address ,pincode ,country ,state ,district ,location ,grade ,docr, shpstat, mem_id)VALUES (  '$shopname',  '$shoptin',  '$Address',  '$Pin',    '$country',  '$state',  '$District',   '$location',  '3', '$shopcats',0,'$approcid')");			
	
	$_SESSION['shauth']=0;
	echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Succes !!</title>  <link href='../css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-3);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='successmsg' > <div><strong>Operation Success <br/>  Your Shop will appear online after approval </strong> <br/>   Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html>";
	
?>