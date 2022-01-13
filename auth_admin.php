<?php
    include 'koneksi.php';
    session_start();
    if(!isset($_SESSION["adminn"])) header("Location: Login_Admin.php");

    $id_admin = $_SESSION["adminn"];
    $queryAdmin = "SELECT * FROM admin WHERE id_admin='$id_admin'";
    $resultAdmin = mysqli_query($kon,$queryAdmin);
    $data = mysqli_fetch_assoc($resultAdmin);
?>