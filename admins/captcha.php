<?php
session_start();
$RandomStr = md5(microtime());
$ResultStr = substr($RandomStr,0,5);
$NewImage =imagecreatefromjpeg("images/imgg.jpg");
$LineColor = imagecolorallocate($NewImage,233,239,239);
$TextColor = imagecolorallocate($NewImage, 255, 255, 255);
$lin1 = rand (00,99);
$lin2 = rand (33,55);
imageline($NewImage,1,1,40,$lin1,$LineColor);
imageline($NewImage,1,100,$lin2,0,$LineColor);
imageline($NewImage,1,$lin1,$lin2,5,$LineColor);
imagestring($NewImage, 5, 20, 10, $ResultStr, $TextColor);
$_SESSION['key'] = $ResultStr;
header("Content-type: image/jpeg");
imagejpeg($NewImage);
?>
