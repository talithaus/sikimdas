<?php
session_start();
unset($_SESSION['adminn']);
unset($_SESSION['login']);
session_destroy();
header("Location:Beranda.php");
?>