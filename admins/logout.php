<?php
session_start();
unset($_SESSION['adminlogin']);
include("../sql/dbclose.php");
header('Location:'."index.php");

?>