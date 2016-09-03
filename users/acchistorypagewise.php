<?php 
include('index.tpl');

function getTitle()
{
$clo = $_GET['clno'];
echo 'Account History | Close No '.$clo;
}

function ShowContent($rocuname)
{

				if ($rocuname != 10005) { 
				include("accstmnt_new.php"); 
				} 
				else { 
				$clo = $_GET['clno'];
				if ($clo == 3)
				include("chandraacc.php"); 
				if ($clo == 4)
				include("chandraacc_new.php"); 
				if ($clo == 5)
				include("chandraacc_5.php");
				} 

}
?>
<script type="text/javascript" src="js/print.js"></script>