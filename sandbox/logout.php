<?php 
session_start();
unset($_SESSION['sblogin']);
header("Location:"."index.php");
?>