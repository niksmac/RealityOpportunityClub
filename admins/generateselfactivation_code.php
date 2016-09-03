<?php 
include("../connect/session.php");

$typ = $_POST['typee'];
$noof = $_POST['noof'];

$key = "";

for ($j=1; $j<=$noof ;$j++)
{
for ($i=1; $i<=4;$i++)
{
$key.= generatePassword ()."-";
}
mysql_query ("insert into  selfactivation ( keytype, actkey, isudate) values ('$typ', '$key', NOW()) ");
echo $key."<br>";
$key = "";
}


//

function generatePassword($length=5, $strength=4) {
	$vowels = 'aeuy';
	$consonants = 'bdYghGjmQnLHJMpqDTRJsPXtvBz';
	if ($strength & 1) {
		$consonants .= 'BDGHJLMNPQRSTVWXZ';
	}
	if ($strength & 2) {
		$vowels .= "AEUY";
	}
	if ($strength & 4) {
		$consonants .= '23456789';
	}
	if ($strength & 8) {
		$consonants .= '@#$%';
	}
 
	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}

?>

