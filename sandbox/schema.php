<?php

include("session.php");
// database constants
// make sure the information is correct


define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "roc-forclosing");

// connection to the database 
$dbhandle = mysql_connect(DB_SERVER, DB_USER, DB_PASS) 
   or die("Unable to connect to MySQL"); 

// select a database to work with 
$selected = mysql_select_db(DB_NAME, $dbhandle) 
   or die("Could not select examples"); 

// return all available tables 
$result_tbl = mysql_query( "SHOW TABLES FROM ".DB_NAME, $dbhandle ); 

$tables = array(); 
while ($row = mysql_fetch_row($result_tbl)) { 
   $tables[] = $row[0]; 
} 

$output = "<?xml version=\"1.0\" ?>\n"; 
$output .= "<schema>"; 

// iterate over each table and return the fields for each table
foreach ( $tables as $table ) { 
   $output .= "<table name=\"$table\">"; 
   $result_fld = mysql_query( "SHOW FIELDS FROM ".$table, $dbhandle ); 

   while( $row1 = mysql_fetch_row($result_fld) ) {
      $output .= "<field name=\"$row1[0]\" type=\"$row1[1]\"";
      $output .= ($row1[3] == "PRI") ? " primary_key=\"yes\" />" : " />";
   } 

   $output .= "</table>"; 
} 

$output .= "</schema>"; 

// tell the browser what kind of file is come in
header("Content-type: text/xml"); 
// print out XML that describes the schema
echo $output; 

// close the connection 
mysql_close($dbhandle); 
?>