<?php 
include("../connect/session.php");
$pinno = $_POST['pinno'];
$pass = $_POST['pass'];

$id = substr($pinno,2);
$_SESSION['keyid'] = $id;

$kityp = substr($pass,0,1);

	$rtyry=mysql_query("select incentive from primarytreekit where ident='$kityp' ");
	while($sdfrsf=mysql_fetch_array($rtyry))
		{ 
		 $incentive=$sdfrsf['incentive'];
		}

$_SESSION['kityp'] = $incentive;

$rtcyry=mysql_query("select id from primarytreekey where id='$id' and unqkey='$pass' and keystat = 0 and actsts = 1 ");
$tyufg = mysql_num_rows($rtcyry);
if ($tyufg == 1)
{
//mysql_query("update primarytreekey set keystat=1 where id='$id' and unqkey='$pass' and actsts = 1");
header('Location:'."ptreeeusrfrm.php?token=y4rt45fDs6iDS&$urltoken");
}
else
header('Location:'."primaryjoiningforms.php?token=y4rt4i5EJiDS&$urltoken");
?>
