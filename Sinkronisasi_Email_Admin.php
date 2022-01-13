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
            }
  .highlight{
      text-align: center; 
      font-family: impact;
      font-size:80px;
  }
  .judul{
      margin-top:5%;
      text-align: justify; 
      font-family: arial;
      font-size:25px;
      text-align:center;
  }
  .gallery {
    border: 1px solid #ccc;
    width: 10%;
  }

  </style>
</head>
  </style>
  </head>
  <body background = "assets/img/bg3.png">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #4682B4">
  <img style="width: 3%; color:white;" src="assets/img/atom.png">
  <a class="navbar-brand" href="#" style="font-family:impact;">SI KIMDAS</a>
  
  
  </nav>

  <div class="content" style="padding:3%;">
    <div class="container">
        <h3 style="font-family:Arial; text-align:center;"> Lupa Password? </h3>
        <form method="post">
            <div class="form-group">
                <input type="text" name="email" style="border-radius:100px;" class="form-control" placeholder="Masukkan email yang terdaftar">
            </div>
            
            <!--jika email sudah terdaftar, langsung diarahkan ke halaman reset password -->
            <button type="submit" name="reset" class="btn btn-primary btn-user btn-block" style="border-radius:100px;">Reset Password</button>
         <div class="dropdown-divider">
         </div>

<?php
  include 'koneksi.php';

  if(isset($_POST['reset'])){
    $query = "SELECT * FROM admin WHERE email_admin='".$_POST['email']."'";
    $result = mysqli_query($kon,$query);
    $data = mysqli_fetch_assoc($result);
    $row = mysqli_num_rows($result);
    if($row==0){
      echo "<div class=\"alert alert-danger mt-2\" role=\"alert\">";
      echo "<a style=\"font-family:Arial;\">Email belum terdaftar</a>";
      echo "</div>";
    }
    else{
      header("Location: Reset_Password_Admin.php?id=".$data['id_admin']."");
      // $to = $_POST['email'];
      // $subject = 'Password Recovery';
      // $message = "TEST";

      // $mail = new PHPMailer; 
 
      // $mail->isSMTP();                      // Set mailer to use SMTP 
      // // $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
      // $mail->Host = gethostbyname('smtp.gmail.com');
      // $mail->SMTPAuth = true;               // Enable SMTP authentication 
      // $mail->Username = 'ricardoandra17@gmail.com';   // SMTP username 
      // $mail->Password = 'gmail@adr';   // SMTP password 
      // // $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
      // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      // $mail->Port = 465;                    // TCP port to connect to 
      
      // // Sender info 
      // $mail->setFrom('ricardoandra17@gmail.com', 'Webmaster Sikimdas'); 
      // // $mail->addReplyTo('reply@codexworld.com', 'CodexWorld'); 
      
      // // Add a recipient 
      // $mail->addAddress($to); 
      
      // //$mail->addCC('cc@example.com'); 
      // //$mail->addBCC('bcc@example.com'); 
      
      // // Set email format to HTML 
      // $mail->isHTML(true); 
      
      // // Mail subject 
      // $mail->Subject = $subject; 
      
      // // Mail body content 
      // $bodyContent = '<h1>SiKimDas Password Recovery</h1>'; 
      // $bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>'; 
      // $mail->Body    = $bodyContent; 
      
      // // Send email 
      // if(!$mail->send()) { 
      //     echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
      // } else { 
      //     echo 'Message has been sent.'; 
      // }
    }
  }
?>

         </form>
         <!--tampilkan jika email tidak terdaftar -->
         <form action="Login_Admin.php">
            <button type="submit" class="btn btn-link right-block">Kembali ke Halaman Log In</button>
        </form>
        
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