<?php 
include("../connect/session.php");
$name=$_POST['name'];
$idno=$_POST['idno'];
$cat_id=$_POST['cat_id'];
$brandname=$_POST['brandname'];
$mname=$_POST['mname'];
$mweb=$_POST['mweb'];
$mphone=$_POST['mphone'];
$mrktval=$_POST['mrktval'];
$rocval=$_POST['rocval'];
$dp=$_POST['dp'];
$bv=$_POST['bv'];
$photo=$_POST['photo'];


if($_FILES['files']['name']) {
	list($file,$error) = upload('files','../special/','jpeg,gif,png,jpg');
	if($error) print $error;
}


mysql_query("insert into splproducts(name,idno,cat_id,brandname,mname,mweb,mphone,mrktval,rocval,dp,bv,photo)values ('$name', '$idno', '$cat_id', '$brandname', '$mname', '$mweb', '$mphone', '$mrktval', '$rocval', '$dp', '$bv','$file')");



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


header("Location:"."viewsplpro.php?spl=1&yes=1");
?>