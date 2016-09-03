<?php 

$host="www.ropclub.com";
$user="rocman1147";
$password="mandm72";
$database="rop5latest";

mysql_connect("$host","$user","$password");
mysql_select_db("$database") or die(mysql_error());


date_default_timezone_set('Asia/Calcutta');


//echo date('d-m / h:i A');

backup_tables($host,$user,$password,$database);


/* backup the db OR just a table */
function backup_tables($host,$user,$pass,$name,$tables = '*')
{
	$today = date('d-m / h:i A');
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($name,$link);
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		//$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//save file
	$handle = fopen('../db_backup/db-backup-'.time().'-'.'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
}


echo "<html><head><title>ROP Club :: Success</title><script>function update(){history.back(-1);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center>
      <table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Taking Backup!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
?>