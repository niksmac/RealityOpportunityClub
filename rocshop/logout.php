<?php
session_start();
unset($_SESSION['shlogin']);
unset($_SESSION['shplogin']);
mysql_close($rocconnect);
header('Location:'."index.php?out");

?>