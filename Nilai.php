<?php

    include 'auth.php';



    $query = "SELECT * FROM materi WHERE kode_materi=(SELECT kode_materi FROM kuis WHERE id_kuis='".$_GET['id_kuis']."')";

    $result = mysqli_query($kon, $query);

    $namaMateri = mysqli_fetch_assoc($result);



    $nilai = 0;

    $query1 = "SELECT * FROM latihansoal WHERE  id_kuis='".$_GET['id_kuis']."'";

    $result1 = mysqli_query($kon, $query1);

    mysqli_data_seek($result1,0);

    while($dataNilai = mysqli_fetch_assoc($result1)){

        $query2 = "SELECT * FROM jawaban WHERE id_jawaban='".$_GET[$dataNilai['id_soal']]."'";

        $result2 = mysqli_query($kon, $query2);

        mysqli_data_seek($result2,0);

        $dataNilai2 = mysqli_fetch_assoc($result2);

        if($dataNilai2['status']==1){

            $nilai++;

        }

    }

    $nilai = $nilai/(count($dataNilai2)+1) * 100;



    $insert = mysqli_query($kon, "INSERT INTO `nilai` (`id_nilai`, `username`, `id_kuis`, `nilai`, `waktu_pengerjaan`)

                      VALUES (NULL, '".$_SESSION['user']."', '".$_GET['id_kuis']."', '".$nilai."', CURRENT_TIME())");

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



    <title>Form Nilai</title>



    <!--CSS-->

    <style>

      div.footer{

      left: 0;

      bottom: 0;

      width: 100%;

      background-color: #4682B4;

      color: black;

      text-align: center;

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





    <h1 class="mt-2" style="color: white; text-align: center;">Form Nilai</h1>



    <!--Form-->

    <div class="container-md" style="margin: auto;">

      <div class="row">

        <div class="col-sm">

        </div>

        <div class="col-sm">

          <div class="card" style="width: 45rem;">

            <div class="card-body">

                <form>

                    <div class="form-group row">

                        <label for="staticNama" class="col-sm-2 col-form-label">Nama</label>

                        <div class="col-sm-10">

                          <input type="text" readonly class="form-control-plaintext" id="staticNama" value="<?php echo $data['nama_user']?>">

                        </div>

                    </div>

                    <div class="form-group row">

                      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>

                      <div class="col-sm-10">

                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data['email']?>">

                      </div>

                    </div>

                    <div class="form-group row">

                        <label for="staticUsername" class="col-sm-2 col-form-label">Materi</label>

                        <div class="col-sm-10">

                          <input type="text" readonly class="form-control-plaintext" id="staticUsername" value="<?php echo $namaMateri['nama_materi']?>">

                        </div>

                    </div>

                    <div class="form-group row">

                        <label for="staticWaktu" class="col-sm-2 col-form-label">Tanggal</label>

                        <div class="col-sm-10">

                          <input type="text" readonly class="form-control-plaintext" id="staticWaktu" value="<?php setlocale (LC_ALL, 'IND'); echo strftime("%A, %d %B %Y");?>">

                        </div>

                    </div>

                </form>

                <?php

                if ($nilai >= 80){

                echo "<div class=\"alert alert-success mt-2\" role=\"alert\" style=\"text-align: center;\">";

                echo "<h5 class=\"alert-heading\">Congratulation!</h5>";

                }

                else if ($nilai >= 60){

                echo "<div class=\"alert alert-warning mt-2\" role=\"alert\" style=\"text-align: center;\">";

                echo "<h5 class=\"alert-heading\">Well Done!</h5>";

                  }

                else{

                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";

                echo "<h5 class=\"alert-heading\">Done!</h5>";

                }

                ?>

                    <h3><?php echo $nilai; ?>%</h3>

                    <hr>

                    <?php

                    if ($nilai >= 80){

                    echo "<p class=\"mb-0\">Kamu berhasil meraih nilai terbaik dalam materi ini!<br></p>";

                    }

                    else if ($nilai >= 60){

                    echo "<p class=\"mb-0\">Kamu berhasil menyelesaikan kuis materi ini!<br></p>";

                    }

                    else{

                    echo "<p class=\"mb-0\">Tenang, kamu bisa mengulangi kuis ini lagi!<br></p>";

                    }

                    ?>

                    <p class="mb-0 mt-3"><i>"Hiduplah seolah engkau mati besok. Belajarlah seolah engkau hidup selamanya."</i> Mahatma Gandhi</p>

                  </div>

                  <div class="form-row">

                    <div class="col">

                    <form action="Menu.php">

                        <button type="submit" class="btn btn-primary col mt-2" >Kembali ke Menu</button>

                    </form>

                    </div>

                    <div class="col">

                    <?php 

                    $temp=$_GET['id_kuis'];

                    echo "<form method=\"post\" action=\"Kuis.php?id=$temp\">";?>

                        <button type="submit" class="btn btn-primary col mt-2" >Ulangi kuis</button>

                    </form>

                    </div>

                  </div>

            </div>

          </div>

        </div>

      <div class="col-sm">

      </div>

    </div>

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