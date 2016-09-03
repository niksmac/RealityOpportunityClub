<?php 

//ini_set (query_cache_type, 1);

$host="localhost";
$user="root";
$password="";
$database="rocfromserver2601";

$rocconnect = mysql_connect("$host","$user","$password");
mysql_select_db("$database") or die('could not connect to the database');


$qry=mysql_query("select ParentID from childstatus ");
while($sdfsdfa=mysql_fetch_array($qry))
{
$ParentID=$sdfsdfa['ParentID'];


$qryy=mysql_query("select ID from childstatus where LChildID = '$ParentID' or RChildID = '$ParentID'");

if (mysql_num_rows ($qryy) > 1 )
{
//echo $ParentID. "<br>";

$qffry=mysql_query("select ParentID,LChildID,RChildID from childstatus where LChildID = '$ParentID'  or RChildID = '$ParentID'");
while($sdddfsdfa=mysql_fetch_array($qffry))
{
$ParentID=$sdddfsdfa['ParentID'];
$LChildID=$sdddfsdfa['LChildID'];
$RChildID=$sdddfsdfa['RChildID'];

//echo $ParentID . " - " . $LChildID. " - " .$RChildID. " <br>" ;

}



}




}


print_r ( mysql_query(" show variables like '%realpath_cache_size%' ") );

?>