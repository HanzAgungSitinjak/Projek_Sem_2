<?php
include 'koneksi_laman.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/logocafe.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login_page</title>
    <style>
      body{
        background-image: url('images/cafe.png');
        background-repeat: no-repeat;
        background-size:cover;
      }
      @media screen and (max-width:680px){
      body{
          background-color: #925a16e4;
          background-image: none;
          
      }
      .container{
        width: 80%;
        margin: 200px 0px 0px 35px;
      }
      .box-login{
        margin: 20px 5px;
      }
      .container span img{
        width: 90%;
        height: 70%;
        margin-top: -45%;
        margin-left: 4.5%;
        padding-top: 2%;
      }
}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="box-login">
        <span><img src="images/logocafe.png"></span>
        <form method="POST" action="">
        <div class="container-box">
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="Masukkan E-mail" name="email">
              </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                </div>
                <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
            </div>
          </div>
          <div class="mb-3" >
            <small><a href="register.php" class="text-dark">Belum Punya Akun ? Buat Akun Anda !</a></small>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
          <button type="reset" name="reset" class="btn btn-danger">RESET</button>
          </form>
        </div>
      </div>
      
      <?php 
      if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $hasil = mysqli_fetch_array($cek_data);
        $status = $hasil['status'];
        $login_user = $hasil['email'];
        $row = mysqli_num_rows($cek_data);

          if ($row > 0) {
              session_start();   
              $_SESSION['login_user'] = $login_user;

              if ($status == 'admin') {
                header('location: landing_page_admin.php');
              }elseif ($status == 'user') {
                header('location: landing_page_user.php'); 
              }
          }else{
            echo "<script>alert('Akun belum terdaftar');</script>";
            echo "<script>location= 'index.php'</script>";
          }
      }
     ?>
  </div>
    
  </body>