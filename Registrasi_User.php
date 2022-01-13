<!doctype html>
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author">
    <meta name="description">
    <meta name="keyword">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Form Registrasi User</title>

    <!--CSS-->
  <style>
    div.footer{
    position:relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #4682B4;
    color: black;
    text-align: center;
    }
  </style>
</head>
<body background = "assets/img/bg3.png">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #4682B4">
  <img style="width: 3%; color:white;" src="assets/img/atom.png">
  <a class="navbar-brand" href="Beranda.php" style="font-family:impact;">SI KIMDAS</a>
</nav>
    

    <!--Form-->
    <div class="container-md mt-3" style="margin: auto">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <div class="card" style="width: 25rem;">
            <div class="card-body">
            <h1 class="mt-2" style=" text-align: center; font-family:impact">User Register</h1>
              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <input type="username" class="form-control" name="username">
                </div>
                  <div class="form-row">
                    <div class="col">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" class="form-control" name="pass">
                    </div>
                    <div class="col">
                      <label for="exampleInputPassword1">Confirm Password</label>
                      <input type="password" class="form-control" name="confirmpassword">
                    </div>
                  </div>
                <input type="submit" name="signup" class="btn btn-primary col mt-2" value="Sign Up"></input>
                
                <?php
  include 'koneksi.php';

  if(isset($_POST['signup'])){
    if(strlen($_POST['nama'])){
      if(strlen($_POST['email'])){
        if(strpos($_POST['email'],"@")){
          if(strlen($_POST['username'])){
            if (preg_match('~[0-9]+~', $_POST['pass']) && (preg_match('/[A-Z]/', $_POST['pass']) && (preg_match('/[a-z]/', $_POST['pass'])))) {
              if($_POST['confirmpassword']==$_POST['pass']){  
                $username = $_POST['username'];
                $query = "SELECT username FROM user WHERE username='$username'";
                $result = mysqli_query($kon, $query);
                // jika data gagal diambil maka akan tampil error berikut
                if(!$result){
                  die ("Query Error: ".mysqli_errno($kon).
                     " - ".mysqli_error($kon));
                }
                // mengambil data dari database
                $data = mysqli_fetch_assoc($result);
                  // apabila data tidak ada pada database maka akan dijalankan perintah ini
                   if (empty($data)) {  
                     $hashed = password_hash($_POST['pass'],PASSWORD_DEFAULT);
                     $insert = mysqli_query($kon, "INSERT INTO `user` (`username`,`nama_user`,`email`,`password`)
                               VALUES ('".$_POST['username']."','".$_POST['nama']."','".$_POST['email']."','".$hashed."')");
                     if($insert){ 
                         $status = 'success'; 
                         $statusMsg = "Registrasi Berhasil."; 
                         echo "<script>window.location='Login.php';</script>";
                      }
                      else{ 
                             $statusMsg = "Registrasi Gagal, Silakan Coba Lagi."; 
                      }
                      echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
                         echo "$statusMsg </div>";
                         
                  }
                  else{
                    echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
                    echo "Username Tidak Tersedia</div>";
                  }
              }
              else{
                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
                echo "Password Tidak Sama</div>";
              }
            }
            else{
              echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
              echo "Password Harus Terdiri dari Angka, Huruf Besar dan Huruf Kecil</div>";
            }
          }
          else{
            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
            echo "Username Tidak Boleh Kosong</div>";
          }
        }
        else{
          echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
          echo "Email Tidak Valid</div>";
        }
      }
      else{
        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
        echo "Email Tidak Boleh Kosong</div>";
      }
    }
    else{
      echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
      echo "Nama Tidak Boleh Kosong </div>";
    }
  }
?> 
                
                <a href="Login.php">Log In</a>  
</form> 
<center><form action="Beranda.php"><button class="btn my-2 my-sm-0" type="submit" style="background-color : navy; color : white;font-family:arial;">Kembali</button></form></center>
      
              
            </div>
          </div>
        </div>
      <div class="col-sm">
      </div>
    </div>
    </div>
    </div>
    </div>
        


    <!--Footer-->
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