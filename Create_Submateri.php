<?php include 'auth_admin.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SIKIMDAS</title>
  <style>
  div.footer{
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #4682B4;
  color: black;
  text-align: center;
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
.subjudul{
    padding-top: 2%;
    font-family: times new roman;
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

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="font-family:arial;">
      <div class="navbar-nav ml-auto">
        <a class="nav-link" href="Kelola_Profil_Admin.php" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['adminn']?></a> 
      </div>
      <div class="navbar-nav">
        <a class="nav-link" href="Logout_Admin.php" tabindex="-1" aria-disabled="true">LOG OUT</a> 
      </div>
  </div>
</nav>

<div class="content">
    <h1 class="judul">Create Submateri</h2>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Kode Submateri</label>
                    <input type="text" class="form-control" id="" name="kode_submateri" aria-describedby="">
                    <small class="form-text text-muted">Terdiri dari 6 karakter. 3 karakter pertama merupakan kode materi, 3 karakter terakhir merupakan nomor urut. Contoh : 1IL001</small>
                </div>
                <div class="form-group">
                    <label for="">Nama Submateri</label>
                    <input type="text" class="form-control" name="nama_submateri" id="" aria-describedby="">
                </div>
                <div class="form-group">
                    <label for="">Isi materi</label>
                    <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" rows="7" placeholder="" name="isi_submateri"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gambar</label>
                    <input type="file" class="form-control" id="" aria-describedby="" name="image">
                </div>
                <br></br>
        <center><input type="submit" name="simpan" class="btn btn-primary" style="margin-bottom:3%;" value="Simpan"></input></center>
  </form>
        <center><button type="submit" onclick="location.href='CUD_Submateri.php'" name="kembali" class="btn btn-primary" style="margin-bottom:3%;" >Kembali</button></center>
  
<?php
  if(isset($_POST['simpan'])){
    if(strlen($_POST['kode_submateri'])){
      if(strlen($_POST['kode_submateri'])>=6){
        if(strlen($_POST['nama_submateri'])){
          if(strlen($_POST['isi_submateri'])){
            if(!empty($_FILES["image"]["name"])) {
              $fileName = basename($_FILES["image"]["name"]); 
              $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
              $allowTypes = array('jpg','png','PNG','JPG','jpeg','gif'); 
              if(in_array($fileType, $allowTypes)){ 
                  $image = $_FILES['image']['tmp_name']; 
                  $imgContent = addslashes(file_get_contents($image));
              }
            }else{
              $imgContent = NULL;
            }
            $kodeMateri = substr($_POST['kode_submateri'],0,3);
            $insert = mysqli_query($kon, "INSERT INTO `submateri` (`kode_submateri`, `nama_submateri`, `isi_submateri`, `gbr_submateri`, 
            `kode_materi`, `id_admin`) VALUES ('".$_POST['kode_submateri']."', '".$_POST['nama_submateri']."', '".$_POST['isi_submateri']."', 
            '".$imgContent."', '".$kodeMateri."', '".$_SESSION['adminn']."')");

            if($insert){ 
              $status = 'success'; 
              $statusMsg = "Berhasil Dibuat."; 
           }
           else{  echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
                  $statusMsg = "Format kode submateri salah, Silakan Coba Lagi.</div>"; 
           }
              echo "<br>$statusMsg";
          }
          else{
            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
            echo "<br>Isi Submateri Tidak Boleh Kosong</div>";
          }
        }
        else{
          echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
          echo "<br>Nama Submateri Tidak Boleh Kosong </div>";
        }
      }
      else{
        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
        echo "<br>Format Kode Submateri Salah</div>";
      }
    }
    else{
      echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"text-align: center;\">";
      echo "<br>Kode Submateri Tidak Boleh Kosong</div>";
    }
  }
?>
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
    <script src="ckeditor/ckeditor.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>