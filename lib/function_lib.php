<?php 

function upload($file_id, $folder="", $types="") {
    if(!$_FILES[$file_id]['name']) return array('','No file specified');
    $file_title = $_FILES[$file_id]['name'];
    $ext_arr = split("\.",basename($file_title));
    $ext = strtolower($ext_arr[count($ext_arr)-1]); 
    $uniqer = substr(md5(uniqid(rand(),1)),0,5);
    $file_name = $uniqer . '_' . $file_title;
    $all_types = explode(",",strtolower($types));
    if($types) {
        if(in_array($ext,$all_types));
        else {
            $result = "'".$_FILES[$file_id]['name']."' is not a valid file."; 
            return array('',$result);
        }
    }
    if($folder) $folder .= '/';
    $uploadfile = $folder . $file_name;
    $result = '';
    if (!move_uploaded_file($_FILES[$file_id]['tmp_name'], $uploadfile)) {
        $result = "Cannot upload the file '".$_FILES[$file_id]['name']."'"; 
        if(!file_exists($folder)) {
            $result .= " : Folder don't exist.";
        } elseif(!is_writable($folder)) {
            $result .= " : Folder not writable.";
        } elseif(!is_writable($uploadfile)) {
            $result .= " : File not writable.";
        }
        $file_name = '';
    } else {
        if(!$_FILES[$file_id]['size']) { 
            @unlink($uploadfile);
            $file_name = '';
            $result = "Empty file found - please use a valid file."; 
        } else {
            chmod($uploadfile,0777);
        }
    }

    return array($file_name,$result);
}

function make_safe($value) 
    { 
        if(get_magic_quotes_gpc()){ 
            $value = stripslashes($value); 
        } else { 
            $value = addslashes($value); 
        } 
        return $value; 
    } 



function getreqfield($id,$fld)
{
	$qry = "select ".$fld." from members where MemberID ='$id'";
	$ssdgfs=mysql_query($qry);
	while($tyiyui=mysql_fetch_array($ssdgfs))
	{
		$fldout =$tyiyui[$fld];
	}
	
	return $fldout;
}

function shownames($memid)
{
$Name = "";
$ssdgfs=mysql_query("select memid from primarytree where primaryid='$memid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$memidk =$tyiyui['memid'];
}

$ssdgfsgf=mysql_query("select Name from members where MemberID='$memidk' ");
while($tyivyfui=mysql_fetch_array($ssdgfsgf))
{
$Name =$tyivyfui['Name'];
}
return $Name;
}

?>