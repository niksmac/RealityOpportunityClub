<?php 





if (mysql_num_rows(mysql_query("select * from royalty")) == 0)

{
	mysql_query("insert into royalty (mmbr_id,lefts,lefts ) values('1021/PMI','NA','NA')");
}

else


{
	
	
	
$qryh=mysql_query("select * from royalty where lefts='NA' or rights='NA' ");
while($qrysh=mysql_fetch_array($qryh))
{
$indref=$qrysh['mmbr_id'];
$lefts=$qrysh['lefts'];
$rights=$qrysh['rights'];
break;
}


if ($lefts=='NA') 
{
$pathsnew = $oldpaths * 2;
$reslt = mysql_query( "update child_status set lefts='$data1',lefts='$pathsnew' where mmbr_id='$indref' and lefts='NA' ");
if (mysql_affected_rows() == true )
{
mysql_query("insert into royalty (mmbr_id,lefts,rights ) values('$data1','NA','NA')");

}

}
else if ($rights=='NA') 
{
$pathsnew = ($oldpaths * 2) + 1;
$er =mysql_query("update child_status set rights='$data1',rights='$pathsnew' where mmbr_id='$indref' and rights='NA'");
if (mysql_affected_rows() == true )
{
mysql_query("insert into royalty (mmbr_id,lefts,rights ) values('$data1','NA','NA')");
}
} 


}
?>