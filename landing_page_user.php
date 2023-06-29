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
    <link rel="icon" type="image/png" href="images/logocafe.png">
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
    margin: 0 28px;
    margin-left: 2%;
  }
  .nav-links li a{
    position: relative;
    color: #606C38;
    font-size: 20px;
    font-weight: 500;
    padding: 6px 0;
    text-decoration: none;
  }
  
    </style>
</head>
<body style="background-color: #606C38;">
    <div class="header">
    <img src="images/logocafe.png">
        <nav class="navbar">
            <div class="nav-bar">
            <ul class="nav-links">
                <li class="upward"><a href="landing_page_user.php">Home</a></li>
                <li class="center"><a href="menu.php">Menu</a></li>
                <li class="center"><a href="pesanan_pembeli.php">Order</a></li>
                <li class="center"><a href="reservasi.php">Reservasi</a></li>
                <li class="center"><a href="about_us.php">About us</a></li>
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
            <button><a href="about_us.php">Selengkapnya</a></button>
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
                <p>D'barans cafe menyediakan<br>
                tempat yang bersih dan suasana
                <br>yang tenang.</p>
            </div>
        </div>
        <div class="benefit-02">
        <img src="images/tea.png">
            <div class="text">
            <h4>Bahan yang berkualitas.</h4>
                <p>D'barans cafe menyediakan<br>
                tempat yang bersih dan suasana
                <br>yang tenang.</p>
            </div>
        </div>
        <div class="benefit-03">
            <img src="images/tea.png">
            <div class="text">
            <h4>Pelayanan yang ramah.</h4>
                <p>D'barans cafe menyediakan<br>
                tempat yang bersih dan suasana
                <br>yang tenang.</p>
            </div>
        </div>
    </div>
    <div class="container-03">
    <div class="img-support-scd">
            <img src="images/Asset 1.png">
    </div>
    <div class="text">
            <h1>Selamat datang di<br>D'barans Cafe.</h1>
            <h3>"Pikiran yang cerdas berasal dari perut sehat". </h3><br>
            <button>Selengkapnya</button>
        </div>
    </div>
    <div class="galeri">
        <hr>
        <div class="gallery-stc">
            <h3>Galeri</h3>
        </div>
        <div class="box-gallery">
          <div class="container-05">
            <div class="row mt-3">
            <?php
      require_once 'koneksi_laman.php';
      
      // ambil semua data dari database
      $stmt = mysqli_query($koneksi, "SELECT * FROM upload");
      
      // tampilkan data
      while ($r = $stmt->fetch_assoc()) {
        
          echo "<img style='width: 530px; height: 300px;margin: 10px 20px 10px 38px; border-style: solid; border-color:#B9802B' src='gambar/" . $r['gambar'] . "'>";
      }
    ?>      
             </div> 
          </div>
        </div>
       </div>
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