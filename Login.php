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

    <title>Form Login User</title>

    <!--CSS-->
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
      margin-left:25%;
      margin-right:10%; 
      width:50%;
            }
  .judul{
      text-align: center; 
      font-family: impact;
  }
  .gallery {
    border: 1px solid #ccc;
    width: 10%;
  }
    </style>
 </head>
 <body background = "assets/img/bg3.png">
 <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #4682B4">
  <img style="width: 3%; color:white;" src="assets/img/atom.png">
  <a class="navbar-brand" href="Beranda.php" style="font-family:impact;">SI KIMDAS</a>
  
  
</nav>
<div class="content">
<h1 class="judul">User Log In</h1>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Email or Username</label>
                <input type="text" name="username" class="form-control" placeholder="Email or Username">
            </div>
         <div class="form-group">
             <label>Password</label>
             <input type="password" name="password" class="form-control" placeholder="Password">
         </div>
         <center>
            <button type="submit" name="login" class="btn btn-primary">Log In</button>
         </center>
        </form>
        
        
        <?php
  include 'koneksi.php';

  if(isset($_POST['login'])){
    if(strlen($_POST['username'])){
      if(strlen($_POST['password'])){
        $username = $_POST['username'];
        $query = "SELECT * FROM user WHERE username='$username' OR email='$username'";
        $result = mysqli_query($kon,$query);
        // jika data gagal diambil maka akan tampil error berikut
        if(!$result){
          die ("Query Error: ".mysqli_errno($kon).
             " - ".mysqli_error($kon));
        }
        // mengambil data dari database
        $data = mysqli_fetch_assoc($result);
        if(!empty($data)){
          if(password_verify($_POST['password'],$data['password'])){
            session_start();
            $_SESSION["user"]=$username;
            header("Location: Menu.php");
          }
          else{
            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
            echo "Password Salah </div>";
          }
        }
        else{
          echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
          echo "Username Tidak Ditemukan </div>";
        }
      }
      else{
        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
        echo "Password Tidak Boleh Kosong </div>";
      }
    }
    else{
      echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
      echo "Username Tidak Boleh Kosong </div>";
    }
  }
?>
<div class="dropdown-divider"></div>
        <form action="Sinkronisasi_Email.php">
            <button type="submit" class="btn btn-link right-block">Lupa password?</button>
        </form>
        
        <center><form action="Beranda.php">
            <button class="btn my-2 my-sm-0" type="submit" style="background-color : navy; color : white;font-family:arial;">Kembali</button>
                </form></center>
    </div>
</div>


  <!--Footer-->
  <div class="footer text-center text-black mt-4" style="font-family:impact;">
      <div class=" card-footer">
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
    </body>
    </html>