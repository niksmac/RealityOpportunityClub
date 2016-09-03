<?php
session_start();
unset($_SESSION['olshplogin']);
$_SESSION['ologin']=0;
header('Location:'."index.php?out");
?>