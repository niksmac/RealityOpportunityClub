<?php 

######################
#
### SMS Blocked in Local 
#
######################

include("../connect/session.php");


if($_POST['form_token'] != $_SESSION['form_token'])
        {
                echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Error !!</title>  <link href='../css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-3);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='errormsg' > <div><strong>Error Found </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html> ";
        }	
			

		
if (empty($_SESSION['secretword']) || trim(strtolower($_POST['captcha'])) != $_SESSION['secretword']) 
{
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Error !!</title>  <link href='../css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-3);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='errormsg' > <div><strong>Error Found </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html> ";
}

if ( ! empty($_POST['joinkey'])) 
{
$joinkey=$_POST['joinkey'];

		$qrfy=mysql_query("select id from joinig_keys where BINARY joinkey = '$joinkey' and stat = 0 ");
		$cnsdgsdfg = mysql_num_rows($qrfy);
		if ($cnsdgsdfg != 1)
		{
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Error !!</title>  <link href='../css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-3);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='errormsg' > <div><strong>Error in Joining Key </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html> ";
		}





else 
{
	$leg=$_POST['leg'];
	$RefID=$_POST['RefID'];
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Gender=$_POST['Gender'];
	$MarStatus=$_POST['MarStatus'];
	$DOB=$_POST['birthDate'];
	$FoHName=$_POST['FoHName'];
	$Occupation=$_POST['Occupation'];
	$Phone=$_POST['Phone'];
	$Mobile=$_POST['Mobile'];
	$ECNo=$_POST['ECNo'];
	$PanNo=$_POST['PanNo'];
	$Address=$_POST['Address'];
	$Country=$_POST['Country'];
	$State=$_POST['State'];
	$District=$_POST['District'];
	$Pin=$_POST['Pin'];
	$NomName=$_POST['NomName'];
	$NomRel=$_POST['NomRel'];
	$DirRefID=$_POST['DirRefID'];
	$today = date("Y-m-d"); 
	$Password=$_POST['passtwo'];
	$ActStatus=0;
	$TrackID=$_SESSION['uname'];
	
	$q = "select MAX(MemberID) from members";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$MemberIDNew=$data[0]+1;
	
	if (strlen ($Mobile) == 10)
{
$meses = "Hi $Name welcome to Reality Opportunity Club. Your ID : $MemberIDNew Password : $Password. Make 2 referrals in 30 days to regularize your account.";
$messages = urlencode($meses);
file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsmsnew1&sender=ROC&to=$Mobile&message=$messages");
}
	
	function createRandomPassword() 
	{
		$chars = "QWERTYUIOPASDFGHJKLZXCVBNM";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
		while ($i <= 4) {
        	$num = rand() % 33;
	        $tmp = substr($chars, $num, 1);
    	    $pass = $pass . $tmp;
	        $i++;
    	}
	    return $pass;
	}	
	//$Password = createRandomPassword();
	
mysql_query("insert into members (Name, Address, State, Country, Occupation, Phone, ActStatus, MemberID, RefID, NomName, NomRel, FoHName, DOB, ECNo, PanNo,Password, Gender, TrackID, doj, Email, District, MarStatus ,Mobile, Pin ) values ('$Name', '$Address', '$State', '$Country', '$Occupation','$Phone','$ActStatus', '$MemberIDNew', '$RefID', '$NomName', '$NomRel','$FoHName', '$DOB', '$ECNo', '$PanNo', '$Password', '$Gender', '$TrackID', '$today', '$Email', '$District', '$MarStatus', '$Mobile', '$Pin')");





	$sfghfgdhgh=mysql_query("select MemberID from members where MemberID='$RefID' ");
	while($fhsd=mysql_fetch_array($sfghfgdhgh))
		{ 
		$OldID=$fhsd['MemberID'];
		}
		
	$jghjfhj=mysql_query("select id from childstatus ");
	$endd=mysql_num_rows($jghjfhj);

	$rtyry=mysql_query("select ParentID,LChildID,RChildID from childstatus where ParentID='$OldID' ");
	while($sdfrsf=mysql_fetch_array($rtyry))
		{ 
		$ParentID=$sdfrsf['ParentID'];
		$LChildID=$sdfrsf['LChildID'];
		$RChildID=$sdfrsf['RChildID'];
		}


if ($leg == "L" && $LChildID == 0)
{
	mysql_query ("update childstatus set LChildID='$MemberIDNew' where ParentID='$ParentID' ");
	$P_ParentID=$ParentID;
}
else if ($leg == "R" && $RChildID == 0)
{

	mysql_query ("update childstatus set RChildID='$MemberIDNew'  where ParentID='$ParentID' ");
	$P_ParentID=$ParentID;	
}

else if ($leg == "L" && $LChildID != 0)
{
	
	for ($i=1; $i <= $endd; $i++)
	{
	$ghjfghj=mysql_query("select ParentID,LChildID,RChildID from childstatus where ParentID='$LChildID' ");
	while($sdsd=mysql_fetch_array($ghjfghj))
		{ 
		$ParentID=$sdsd['ParentID'];
		$P_ParentID=$sdsd['ParentID'];
		$LChildID=$sdsd['LChildID'];
		if ($LChildID == 0)
		break;
		}
	
	}

	mysql_query ("update childstatus set LChildID='$MemberIDNew'  where ParentID='$ParentID' ");
	
}
else if ($leg == "R" && $RChildID != 0)
{
	for ($i=1; $i <= $endd; $i++)
	{
	$ghjfghj=mysql_query("select ParentID,LChildID,RChildID from childstatus where ParentID='$RChildID' ");
	while($sdsd=mysql_fetch_array($ghjfghj))
		{ 
		$ParentID=$sdsd['ParentID'];
		$P_ParentID=$sdsd['ParentID'];
		$RChildID=$sdsd['LChildID'];
		if ($RChildID == 0)
		break;
		}
	
	}
	mysql_query ("update childstatus set LChildID='$MemberIDNew'  where ParentID='$ParentID' ");
}	

mysql_query("insert into childstatus (ParentID,LChildID,RChildID,P_ParentID) values('$MemberIDNew',0,0,'$P_ParentID')");
mysql_query ("update joinig_keys set usedby='$MemberIDNew', stat=1  where  BINARY joinkey='$joinkey' ");


/*if (preg_match("/^([a-zA-Z0-9])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/", $Email))
file_get_contents("http://www.ropclub.com/activationmail.php?mid=$MemberIDNew");*/

unset( $_SESSION['form_token']);

header('Location:'."newlyadded.php?id=$MemberIDNew");

/*echo "<html><head><title>ROP Club :: Success</title><script>function update(){window.location='newlyadded.php?id=$MemberIDNew';}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td><table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: New Member Added !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript:history.go(-3); text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";*/
}
}

?>