<?php
    include 'koneksi.php';
    session_start();
    if(!isset($_SESSION["user"])) header("Location: Login.php");

    $username = $_SESSION["user"];
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($kon,$query);
    $data = mysqli_fetch_assoc($result);
?>