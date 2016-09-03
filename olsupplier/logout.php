<?php
session_start();
unset($_SESSION['olsupplogin']);
$osuplogin = 0; 
header('Location:'."index.php?out");
?>