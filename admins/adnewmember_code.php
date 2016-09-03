<?php 
include("sql/sessioncode.php");
session_start();
$key=substr($_SESSION['key'],0,5);
$number = $_POST['number'];
if($number!=$key)
{
echo "<html><head><title>ROP Club :: Error</title><script>function update(){history.back(-2);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center>
      <table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Error: Human verification Failed !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
}
else if($number==$key)
{
$users=$_POST['refid'];
$name=$_POST['name']; 
$address=$_POST['address']; 
$occupation=$_POST['occupation'];
$country=$_POST['country'];
$state=$_POST['state'];
$phone=$_POST['phone'];
$ecno=$_POST['ecno'];
$pans=$_POST['pans'];
$nomname=$_POST['nomname'];
$nomrel=$_POST['nomrel'];
$fhsname=$_POST['fhsname'];
$indref=$_POST['refid'];
$leg=$_POST['leg'];
$gender=$_POST['sex'];
$dob=$_POST['dd']."-".$_POST['mm']."-".$_POST['yy'];

function createRandomPassword() {
$chars = "QWERTYUIOPASDFGHJKLZXCVBNM";
srand((double)microtime()*1000000);
$i = 0;
$pass = '' ;
while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}
$password = createRandomPassword();


$stat=0;
$act_status=0;
$q = "select MAX(id) from members";
$result = mysql_query($q);
$data = mysql_fetch_array($result);
$datas=$data[0]+1;
$data1=$datas;


mysql_query("insert into members (name,address,state, country, occupation,phone, act_status, mmbr_id, uname,ref_id, nomname, nomrel, fhsname,dob,ecno,pans,mmbr_pass,gender ) values ('$name', '$address','$state','$country', '$occupation','$phone','$act_status', '$data1', '$data1','$users', '$nomname', '$nomrel','$fhsname','$dob','$ecno','$pans', '$password', '$gender')");

mysql_query("insert into child_status (ref_id,l_child_id,r_dhild_id ) values('$data1','NA','NA')");

$oytcbv=mysql_query("select * from child_status where ref_id='$users' ");
while($meci=mysql_fetch_array($oytcbv))
{ 
echo "Left ".$l_child_id=$meci['l_child_id'];
echo "<br>";
echo "Right ".$r_dhild_id =$meci['r_dhild_id'];
echo "<br>";
}

$q = "select MAX(id) from child_status";
$result = mysql_query($q);
$data = mysql_fetch_array($result);
$datas=$data[0];

if ($l_child_id=='NA'  && $leg=='L' )
{
mysql_query("update child_status set l_child_id ='$data1' where ref_id='$indref'");
}


else if ( $r_dhild_id=='NA' && $leg=='R' )
{
mysql_query("update child_status set r_dhild_id ='$data1' where ref_id='$indref'");
}
//-------------
else if ($l_child_id!='NA' && $leg=='L' )
{
for($i=1; $i<=$datas; $i++)
{
$qrykh=mysql_query("select * from child_status where ref_id='$l_child_id' ");
while($qrysgh=mysql_fetch_array($qrykh))
{
$freelt=$qrysgh['ref_id']; 
$l_child_id=$qrysgh['l_child_id'];
}
if ($l_child_id=='NA')
break;
}
mysql_query("update child_status set r_dhild_id='$data1' where ref_id='$freelt'");
//-------------
}


//-------------

else if ($r_dhild_id!='NA' && $leg=='R' )
{
for($i=1; $i<=$datas; $i++)
{
$qryk=mysql_query("select * from child_status where ref_id='$r_dhild_id' ");
while($qrysg=mysql_fetch_array($qryk))
{
$freert=$qrysg['ref_id']; 
$r_dhild_id=$qrysg['l_child_id'];
}
if ($r_dhild_id=='NA')
break;
}
mysql_query("update child_status set l_child_id ='$data1' where ref_id='$freert'");
//-------------
}

//-------------------------
header("Location:"."newlyadded.php?id=$data1&pass=$password");
}
?>