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
            background-color: #fbfbfb;
            border-radius: 8px;
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
        <a class="nav-link" href="Kelola.Profil.php" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['user']?></a> 
      </div>
      <div class="navbar-nav">
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">LOG OUT</a> 
      </div>
  </div>
</nav>

<?php

  if (isset($_GET['keywords'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $keywordsUp = ucfirst($_GET["keywords"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tabelperiodik WHERE simbol='$keywordsUp'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='Tabel_Periodik.php';</script>";
       }
  }   
?>

<div style="float:left; min-width:40%; margin-top: 5%;">
<center>
<div class="card mb-3 shad" style="max-width: 18rem;">
  <div class="card-header" style="background-color:pink;">
  <p style= "float:left; padding-left:10px; font-size:32px; font-family:times new roman; "><?php echo $data['nomor_atom'];?></p>
  <p style= "float:right; padding-right:10px; font-size:32px; font-family:times new roman;"><?php echo $data['nomor_massa'];?></p>
  </div>
  <div class="card-body" style="background-color:mediumaquamarine;">
    <p class="card-title" style="text-align:center; font-family:times new roman; font-size:120px;"><?php echo $data['simbol'];?></p>
  </div>
  <div class="card-footer" style="background-color:pink;">
      <p style="text-align:center; font-size:32px;; font-family:times new roman"><?php echo $data['nama_unsur'];?></p>
  </div>
  </div>
  </center>
</div>

    <div class="content" style="float:left; min-width:20%; margin-top: 5%; margin-bottom: 10%; font-family:times new roman; font-size:16px ">
    <table class="table">
  <thead style="background-color:plum;">
    <tr>
      <th scope="col">Nama Unsur</th>
      <th scope="col">Simbol</th>
      <th scope="col">Nomor Massa</th>
      <th scope="col">Nomor Atom </th>
      <th scope="col">Golongan </th>
      <th scope="col">Periode </th>
      <th scope="col">Sifat</th>
    </tr>
  </thead>
  <tbody style="background-color:lightblue;">
    <tr>
      <td><?php echo $data['nama_unsur'];?></td>
      <td><?php echo $data['simbol'];?></td>
      <td><?php echo $data['nomor_massa'];?></td>
      <td><?php echo $data['nomor_atom'];?></td>
      <td><?php echo $data['golongan'];?></td>
      <td><?php echo $data['periode'];?></td>
      <td><?php echo $data['sifat'];?></td>
    </tr>
    <tr>
  </table>

<form class="form-inline d-flex justify-content-center md-form form-sm" style="padding-bottom: 2%;" action="Detail_Unsur.php">
  <button style="background-color: pink;"><i class="fa fa-search" aria-hidden="true" style="color: magenta;"></i>Cari</button>
  <input class="form-control form-control-sm ml-3 w-75" name="keywords" type="text" placeholder="Cari detail unsur lain. Contoh : Mg"
    aria-label="Search">
</form>
<div style="padding-bottom:2%;">
  <center><form action="Tabel_Periodik.php"><button class="btn my-2 my-sm-0" type="submit" style="background-color : navy; color : white;font-family:arial;">Kembali ke Tabel Periodik Unsur</button></form></center>
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