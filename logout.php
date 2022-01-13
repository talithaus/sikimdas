<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['login']);
session_destroy();
header("Location:Beranda.php");
?>