<?php  
include('koneksi_laman.php');
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/indeks.css">
    <title>D'barans cafe</title>
    <style>
          .nav-links{
    display: flex;
    justify-content: center;
    background: #ffffff;
    padding: 20px 15px;
    width: 100%;
}
  .nav-links li{
    list-style: none;
    margin: 0 20px;
    margin-left: 1%;
  }
  .nav-links li a{
    position: relative;
    color: #606C38;
    font-size: 20px;
    font-weight: 500;
    padding: 6px 0;
    text-decoration: none;
  }
  .container-03 button a{
    text-decoration: none;
    color: #825D16;
  }
  .container-03 button a:hover{
    text-decoration: none;
    color: white;
  }
    </style>
</head>
<body style="background-color: #606C38;">
    <div class="header">
    <img src="images/logocafe.png">
        <nav class="navbar">
        <div class="nav-bar">
                <ul class="nav-links">
                  <li class="upward"><a href="landing_page_admin.php">Home</a></li>
                  <li class="center"><a href="daftar_menu.php">Menu</a></li>
                  <li class="center"><a href="pesanan.php">Transaksi</a></li>
                  <li class="center"><a href="booking.php">Reservasi</a></li>
                  <li class="center"><a href="about_us_admin.php">About Us</a></li>
                </ul>
            </div>
            <a class="toggler-navbar">
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </nav>
            <div class="sidebar"> 
            <ul>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </div>
            
    </div>
    
    <div class="container-01">
        <div class="text">
            <h1>Selamat datang di<br>D'barans Cafe.</h1>
            <h3>"" Masalah itu seperti gula yang diaduk dalam secangkir ""</h3>
            <h3> kopi semakin lama mengaduk dan terus larut akan menjadi manis</h3>
            <h3>pada setiap teguknya.</h3><br>
            <button><a href="about_us_admin.php">Selengkapnya</a></button>
        </div>
        <div class="img-support">
            <img src="images/set01.png">
        </div>
    </div>
    <div class="container-02">
        <div class="benefit-01">
        <img src="images/tea.png">
            <div class="text">
                <h4>Tempat yang nyaman.</h4>
                
            </div>
        </div>
        <div class="benefit-02">
        <img src="images/tea.png">
            <div class="text">
            <h4>Bahan yang berkualitas.</h4>
                
            </div>
        </div>
        <div class="benefit-03">
            <img src="images/tea.png">
            <div class="text">
            <h4>Pelayanan yang ramah.</h4>
                
            </div>
        </div>
    </div>
    <div class="container-03">
    <div class="img-support-scd">
            <img src="images/Asset 1.png">
    </div>
    <div class="text">
            <h1>Selamat datang di<br>D'barans Cafe.</h1>
            <h3>"Pikiran yang cerdas berasal dari perut sehat". </h3>
            <h3>Ayo buat pesananmu . </h3><br>
            <button ><a href="daftar_menu.php">Selengkapnya</a></button>
        </div>
    </div>
    <div class="galeri">
        <hr>
        <div class="gallery-stc">
            <h3>Galeri</h3>
        </div>
              <div class="box-gallery">
                <div class="container">
                <div class="row mt-3">
                    <form style="width:700px;" method="post" enctype="multipart/form-data">
                      <div>
                        <label for="gambar">Pilih gambar yang akan diupload</label><br>
                        <input type="file" name="gambar" required=""><br>
                      </div>
                      <div><br>
                        <button type="submit" name="upload">Upload</button>
                      </div><br>
                    </form><br>
                    
                    <?php
                      require_once 'koneksi_laman.php';
                      if(isset($_POST['upload'])) {
                        $gambar = $_FILES['gambar']['name'];
                        $source = $_FILES['gambar']['tmp_name'];
                        $folder = './gambar/';
                        move_uploaded_file($source, $folder.$gambar); // memindahkan file gambar
                        
                          // jalankan query insert
                          $query = "INSERT INTO upload (gambar) VALUES ('$gambar')";
                          $hasil = mysqli_query($koneksi, $query);
                        
                          if($hasil) {
                            echo "<script>alert('Data berhasil disimpan')</script>";
                            
                        } else {
                        echo "<script>alert('Data gagal disimpan')</script>";
                        header('Location:landing_page_admin.php');
                        }}
                      ?>

                      <?php
                      include ('koneksi_laman.php');
                        $result = mysqli_query($koneksi, 'SELECT * FROM upload');
                        
                      ?>
                    <?php foreach($result as $key) : ?>
                    <div class="col-md-6 mt-2" >
                      <div class="card brder-dark" style="padding:10px; width: 495px; height:350px;margin: 20px;">
                        <img style="width: 450px; height: 250px;" src="gambar/<?php echo $key['gambar'] ?>" class="card-img-top" ><br>
                        <a href="hapus_foto.php?id=<?php echo $key['id']  ?>" class="btn btn-danger btn-sm btn-block text-light">HAPUS</a>
                      </div><br>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div><br>
       <div class="footer">
       <?php
       include('footer.php');
       ?>
       </div>
       
</body>
<script>
      document.getElementsByClassName("toggler-navbar")[0].addEventListener("click", toogleClass);

        function toogleClass() {
        document.getElementsByClassName("hamburger-menu")[0].classList.toggle('open')
        document.getElementsByClassName("sidebar")[0].classList.toggle('open')
}
    </script>
</html>
  <?php } ?>


