<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'auth_admin.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $kodeSubMateri = ($_GET["id"]);
    $kodeMateri = substr($kodeSubMateri,0,3);

    // menampilkan data dari database yang mempunyai id=$id
    $query1 = "SELECT * FROM materi WHERE kode_materi='$kodeMateri'";
    $query2 = "SELECT * FROM submateri WHERE kode_submateri='$kodeSubMateri'";
    $result1 = mysqli_query($kon, $query1);
    $result2 = mysqli_query($kon, $query2);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result1){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    if(!$result2){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data1 = mysqli_fetch_assoc($result1);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data1)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
    $data2 = mysqli_fetch_assoc($result2);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data2)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
      }         
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
        padding:50px;
              }
    .judul{
        text-align: center; 
        font-family: impact;
    }
    .subjudul{
        padding-top: 2%;
        font-family: times new roman;
    }
    .penjelasan{
        text-align: justify;
        font-family: Times new roman;
    }
    pre{
      height:100px;
    }
    </style>
</head>
<body background = "assets/img/bg1.png">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #4682B4">
  	<img style="width: 3%; color:white;" src="assets/img/atom.png">
  <a class="navbar-brand" href="CUD_Submateri.php" style="font-family:impact;">SI KIMDAS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="navbar-nav ml-auto">
        <a class="nav-link" href="Kelola_Profil.php" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['adminn']?></a> 
      </div>
      <div class="navbar-nav">
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">LOG OUT</a> 
      </div>
  </div>
</nav>

<div class="content">
<h1 class="judul"><?php echo $data1['nama_materi']; ?></h1>
<center><img style="width:80%;" src='data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data1['gbr_materi']); ?>'></center>
<div class="container">
<h2 class="subjudul"><?php echo $data2['nama_submateri']; ?></h2>
<div class="container">
<center><img style="width:60%;" src='data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data2['gbr_submateri']); ?>'></center>
<div class="penjelasan" >
<p><?php echo $data2['isi_submateri']?></p>
</div>
</div>
</div>
         <center>
         <form method="post" action="CUD_Submateri.php">
            <button type="submit" name="login" class="btn btn-primary">Kembali</button>
          </form>
         </center>
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