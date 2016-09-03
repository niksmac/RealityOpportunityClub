<?php 
include("session.php");

$result = " SELECT  * FROM closingpicalcs "; 	 


if (mysql_num_rows($result)>0) {
    //loop thru the field names to print the correct headers
    $i = 0;

    while ($i < mysql_num_fields($result)) {
        $out .= "<th bgcolor='#CFCFCF'><font size=2>". mysql_field_name($result, $i) . "</font></th>";
        $i++;
    }
    echo "</tr>";

    //display the data
    while ($rows = mysql_fetch_array($result,MYSQL_ASSOC)) {
        $out .= "<tr>";
        foreach ($rows as $colName=>$data) {
            if($colName == 'keyname'){
                doStuff();
            }else{
                $out .= "<td bgcolor='#DCDCDC'><font size=2>". $data . "</font></td>";
            }
        }
    }
}
	
	?>