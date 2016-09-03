<?php





###############################
#---------- Uncomment While Closing -----------------
#  header('Location:'."../memberlogin.php?cls");
#############################


if(isset($_GET['adm']))
{
	session_start();
	$_SESSION['shlogin']=1;
	$_SESSION['shplogin']=$_GET['u'];
	header('Location:'."shophome.php");
}

else 

{




session_start();

include("../connect/connect.php");

$_SESSION['user']=$_POST['txtuname'];
$uname=$_POST['txtuname'];
$pwd=$_POST['txtpwd'];

$key=substr($_SESSION['key'],0,5);
$number = $_POST['number'];

if ($key == $number) 
{

	$Password = htmlentities($pwd, ENT_QUOTES);
	$qry=mysql_query("select store_id from stores where store_id='$uname' and pass='$Password'");
	$fary=mysql_num_rows($qry);
	if($fary==1)
		{
			$_SESSION['shlogin']=1;
			$_SESSION['shplogin']=$uname;
			header('Location:'."shophome.php");
		}
	else
		{
			$_SESSION['shlogin']=0;
			header('Location:'."index.php?fail");
		}

}

else
header('Location:'."index.php?cer");

}

?>