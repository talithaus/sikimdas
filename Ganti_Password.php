<?php

  include 'auth.php';

?>



<!doctype html>

<html lang="en">

<head>

     <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author">

    <meta name="description">

    <meta name="keyword">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <!-- Fontawesome CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />



    <title>SIKIMDAS</title>

  <style>

      div.footer{

      position:fixed;

      left: 0;

      bottom: 0;

      width: 100%;

      background-color: #4682B4;

      color: black;

      text-align: center;

    }

    body, html {

      height: 100%;

      margin: 0;

      font-family: Arial, Helvetica, sans-serif;

    }



    * {

      box-sizing: border-box;

    }

    .judul{

      font-family: impact;

    }

    .shad{

      box-shadow: 0 6px 20px 0 yellow;

    }

    .shad:hover{

      box-shadow: 0 6px 20px 0 orange;

    }

    .content {

        background: #fbfbfb;

        border-radius: 8px;

        margin-bottom:10%;

        margin-top:5%;

        margin-left:10%;

        margin-right:10%; 

        z-index: -1;

      }

    .judul{

        text-align: center; 

        font-family: impact;

    }



    .card {

      -webkit-border-radius: 3px;

      -moz-border-radius: 3px;

      border-radius: 3px;

      background: #fff;

    }

    .card-4 {

      background: #fff;

      -webkit-border-radius: 10px;

      -moz-border-radius: 10px;

      border-radius: 10px;

      -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);

      -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);

      box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);

    }

    .card-4 .card-body {

      padding: 57px 65px;

      padding-bottom: 65px;

    }

    .title {

      font-size: 30px;

      color: #525252;

      font-weight: 400;

      margin-bottom: 40px;

    }

    /* ==========================================================================

      #FORM

      ========================================================================== */

      input {

      outline: none;

      margin: 0;

      border: none;

      -webkit-box-shadow: none;

      -moz-box-shadow: none;

      box-shadow: none;

      width: 100%;

      font-size: 14px;

      font-family: inherit;

    }

    .input-group {

      position: relative;

      margin-bottom: 22px;

    }

    .border{

      border: black;

    }

    .input--style-4 {

      line-height: 40px;

      background: #fafafa;

      -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);

      -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);

      box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);

      -webkit-border-radius: 5px;

      -moz-border-radius: 5px;

      border-radius: 5px;

      padding: 0 20px;

      font-size: 16px;

      color: #666;

      -webkit-transition: all 0.4s ease;

      -o-transition: all 0.4s ease;

      -moz-transition: all 0.4s ease;

      transition: all 0.4s ease;

    }



    .input--style-4::-webkit-input-placeholder {

      /* WebKit, Blink, Edge */

      color: #666;

    }



    .input--style-4:-moz-placeholder {

      /* Mozilla Firefox 4 to 18 */

      color: #666;

      opacity: 1;

    }



    .input--style-4::-moz-placeholder {

      /* Mozilla Firefox 19+ */

      color: #666;

      opacity: 1;

    }



    .input--style-4:-ms-input-placeholder {

      /* Internet Explorer 10-11 */
      color: #666;

    }



    .input--style-4:-ms-input-placeholder {

      /* Microsoft Edge */

      color: #666;

    }



    .label {

      font-size: 20px;

      color: #555;

      text-transform: capitalize;

      display: block;

      margin-bottom: 5px;

    }

    .row {

      display: -webkit-box;

      display: -webkit-flex;

      display: -moz-box;

      display: -ms-flexbox;

      display: flex;

      -webkit-flex-wrap: wrap;

      -ms-flex-wrap: wrap;

      flex-wrap: wrap;

    }



    .row-space {

      -webkit-box-pack: justify;

      -webkit-justify-content: space-between;

      -moz-box-pack: justify;

      -ms-flex-pack: justify;

      justify-content: space-between;

    }

    .col-2 {

      width: -webkit-calc((100% - 30px) / 2);

      width: -moz-calc((100% - 30px) / 2);

      width: calc((100% - 30px) / 2);

    }



    /* ==========================================================================

      #BUTTON

      ========================================================================== */

      .btn {

      display: inline-block;

      line-height: 50px;

      padding: 0 50px;

      -webkit-transition: all 0.4s ease;

      -o-transition: all 0.4s ease;

      -moz-transition: all 0.4s ease;

      transition: all 0.4s ease;

      cursor: pointer;

      font-size: 18px;

      color: #fff;

      font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;

      background: #4272d7;

    }

    .p-t-15 {

      padding-top: 15px;

    }

    .btn--radius {

      -webkit-border-radius: 3px;

      -moz-border-radius: 3px;

      border-radius: 3px;

    }



    .btn--radius-2 {

      -webkit-border-radius: 5px;

      -moz-border-radius: 5px;

      border-radius: 5px;

    }



  </style>

</head>

<body background = "assets/img/bg1.png">

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #4682B4">

  	<img style="width: 3%; color:white;" src="assets/img/atom.png">

  <a class="navbar-brand" href="#" style="font-family:impact;">SI KIMDAS</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="font-family:arial;">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item active">

        <a class="nav-link" href="Menu.php">Menu<span class="sr-only">(current)</span></a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="Daftar_Materi.php">Materi</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="Daftar_Kuis.php">Kuis</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="Tabel_Periodik.php">Tabel Periodik</a>

      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0" method="get" action="Search.php">

      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">

      <button class="btn my-2 my-sm-0" type="submit" style="background-color : navy; color : white;">Search</button>

    </form>

      <div class="navbar-nav ml-auto">

        <a class="nav-link" href="Kelola_Profil.php" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['user']?></a> 

      </div>

      <div class="navbar-nav">

        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">LOG OUT</a> 

      </div>

  </div>

</nav>



<div class="content">

  <div class="card card-4">

    <div class="card-body">

      <h2 class="title">Ganti Password</h2>

      <form method="post" enctype="multipart/form-data">

        <div class="input-group">

          <label class="label">Old Password</label>

          <input class="input--style-4" type="text" name="oldPassword">

        </div>

        <div class="input-group">

          <label class="label">New Password</label>

          <input class="input--style-4" type="text" name="newPassword">

        </div>

        <div class="input-group">

          <label class="label">Confirm New Password</label>

          <input class="input--style-4" type="text" name="confirmNewPassword">

        </div>

        <div class="p-t-15">

          <input class="btn btn--radius-2 btn--blue" name="update" type="submit" value="OK"></input>

        </div>

<?php

  if(isset($_POST['update'])){

    if(strlen($_POST['oldPassword'])){

      if(strlen($_POST['newPassword'])){

        if (preg_match('~[0-9]+~', $_POST['newPassword']) && (preg_match('/[A-Z]/', $_POST['newPassword']) && (preg_match('/[a-z]/', $_POST['newPassword'])))) {

          if($_POST['newPassword']==$_POST['confirmNewPassword']){

            if(password_verify($_POST['oldPassword'],$data['password'])){

              $newPassword = password_hash($_POST['newPassword'],PASSWORD_DEFAULT);

              $insert = mysqli_query($kon,"UPDATE `user` SET `password`='$newPassword' WHERE `username`='".$data['username']."'");

              if($insert){ 

                $status = 'success'; 

                $statusMsg = "Update Password Berhasil."; 

              }

              else{ 

                      $statusMsg = "Update Password Gagal, Silakan Coba Lagi."; 

              }

                  echo "$statusMsg";

            }

            else{ 

              echo"<div class=\"alert alert-danger mt-2\" role=\"alert\" >";

              echo "Password Lama Salah</div>"; }

          }

          else{ 

            echo"<div class=\"alert alert-danger mt-2\" role=\"alert\" >";

            echo "Konfirmasi Password Baru Salah</div>";}

        }

        else{

          echo"<div class=\"alert alert-danger mt-2\" role=\"alert\" >";

          echo "Password Harus Terdiri dari Angka, Huruf Besar dan Huruf Kecil</div>";}

      }

      else{ 

        echo"<div class=\"alert alert-danger mt-2\" role=\"alert\" >";

        echo "Password Baru Tidak Boleh Kosong</div>";}

    }

    else{ 

      echo"<div class=\"alert alert-danger mt-2\" role=\"alert\" >";

      echo "Password Lama Tidak Boleh Kosong</div>";}

  }

?>

      </form>

    <center><form action="Kelola_Profil.php"><button class="btn my-2 my-sm-0" type="submit" style="background-color : navy; color : white;font-family:arial;">Kembali</button></form></center>

       

</div>



<div class="footer text-center text-black" style="font-family:impact;">

        <div class=" card-footer container">

        Kelompok 4 TEK 3B P2 | copyright &copy; 2020

        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    -->

  </body>

</html>