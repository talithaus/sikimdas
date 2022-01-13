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
  <body background = "assets/img/bg1.png">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #4682B4">
  	<img style="width: 3%; color:white;" src="assets/img/atom.png">
  <a class="navbar-brand" href="Menu.php" style="font-family:impact;">SI KIMDAS</a>
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
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
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
<h1 class="judul">Menu</h1>
<div class="card-group">
  <div class="card">
  <a href="Daftar_Materi.php">
    <img src="assets/img/menumateri.jpeg" class="card-img-top" alt="">
    </a>
    <div class="card-footer">
      <a href="Daftar_Materi.php"><h5 class="card-title" style="text-align:center;">Daftar Materi</h5></a>
      </div>
  </div>
  <div class="card">
  <a href="Daftar_Kuis.php">
    <img src="assets/img/menukuis.jpeg" class="card-img-top" alt="">
    </a>
    <div class="card-footer">
    <a href="Daftar_Kuis.php"><h5 class="card-title" style="text-align:center;">Daftar Kuis</h5></a>
      </div>
  </div>
  <div class="card">
  <a href="Tabel_Periodik.php">
    <img src="assets/img/menuperiodik.jpeg" class="card-img-top" alt="">
    </a>
    <div class="card-footer">
    <a href="Tabel_Periodik.php"><h5 class="card-title" style="text-align:center;">Tabel Periodik Unsur</h5></a>
      </div>
  </div>
</div>
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