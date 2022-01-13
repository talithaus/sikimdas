<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'auth.php';
if (isset($_GET['id'])) {
// ambil nilai id dari url dan disimpan dalam variabel $id
$kodeKuis = ($_GET["id"]);

// menampilkan data dari database yang mempunyai id=$id
$query1 = "SELECT * FROM kuis WHERE id_kuis='$kodeKuis'";
$query2 = "SELECT * FROM latihansoal WHERE  id_kuis='$kodeKuis'";
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
      position:relative;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #4682B4;
      color: black;
      text-align: center;
    }
    .judul{
      font-family: impact;
      color:white;
    }
    .shad{
      box-shadow: 0 6px 20px 0 yellow;
    }
    .shad:hover{
      box-shadow: 0 6px 20px 0 orange;
    }
    .tengah{
        margin-left:8%;
    }
    .content {
        background: #fbfbfb;
        border-radius: 8px; 
        width:65%;
        /* vertical-align:left; */
        font-family:arial;
        font-size:16px;
        border: 3px solid mediumpurple;
        margin-bottom: 10px;
    }
    .nomor{
        background: #fbfbfb;
        border-radius: 8px;
        text-align:center;
        float:left;
        width:5%;
        margin-right:2%;
        margin-left:12%;
        font-family:arial;
        font-size:16px;
        border: 3px solid indigo;
    }

    .qnav{
        background: #fbfbfb;
        border-radius: 8px;
        width:28%;
        float:left;
        margin-right:2%;
        text-align:center;
    }
    .judul{
        text-align: center; 
        font-family: impact;
        margin:5% 0 5% 0;
    }
    .gallery {
      border: 1px solid #ccc;
      width: 10%;
    }
    .m-15{
      margin:15px
    }


</style>
  </head>
  <body background = "assets/img/bg1.png">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #4682B4">
  <img style="width: 3%; color:white;" src="assets/img/atom.png">
  <a class="navbar-brand" href="#" style="font-family:impact;">SI KIMDAS</a>
  
  
  </nav>

<div class="container">
    <h1 class="judul"><?php echo $data1['nama_kuis']; ?></h1>
</div>

<?php
        $no=1;
        echo "<form action=\"Nilai.php?\">";
        echo "<input class=\"form-check-input\" type=\"hidden\" name='id_kuis' value='".$kodeKuis."'>";
        mysqli_data_seek($result2,0);
        while($data2 = mysqli_fetch_assoc($result2)){
          $temp = $data2['id_soal'];
          echo "<div class=\"form-group nomor\">";
          echo $no++;
          echo "</div>";
          echo "<div class=\"container content\">";
          echo "<div class=form-group>";
          echo "<p>".$data2['pertanyaan']."</p>";
          echo "</div>";
          $query3 = "SELECT * FROM jawaban WHERE  id_soal='$temp'";
          $result3 = mysqli_query($kon, $query3);
          while($data3=mysqli_fetch_assoc($result3)){
            echo "<div class=form-group>";
            echo "<div class=\"form-check form-check-inline\">";
            echo "<input class=\"form-check-input\" type=\"radio\" name='".$data3['id_soal']."' value='".$data3['id_jawaban']."'>";
            echo "<label class=\"form-check-label\">".$data3['jawaban']."</label>";
          echo "</div>";
          echo "</div>";
        }
        echo "</div>";
      }
        echo "<div class=\"container\">";
        echo "<div class=\"col m-15\">";
        echo "<center><button type=\"submit\" style=\"width:20%;\" class=\"btn btn-primary col mt-2\">Submit</button></center>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
        ?>

<!-- <form action="proses_quiz.php">
        <div class="form-group nomor">
            1
        </div>
        <div class="container content">
            <div class=form-group>
                <p>Hukum kekekalan massa disebut juga ...</p>
            </div>
            <div class=form-group>
                <div class='form-check form-check-inline'>
                    <input class='form-check-input' type="radio" name='option' value='A'>Hukum Lavoisier</div>
            </div>
            <div class=form-group>
                <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='option' value='A'>Hukum Avogadro</div>
            </div>
            <div class=form-group>
                <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='option' value='A'>Hukum Gay Lusaac</div>
            </div>
            <div class=form-group>
                <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='option' value='A'>Hukum Dalton</div>
            </div>
        </div>
</form> -->


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