<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['uname']);
mysql_close($con);
header('Location:'."../index.php?out");
?>