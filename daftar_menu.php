<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/logocafe.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/daftar_menu.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>D'barans cafe</title>
    <style>
        .card-img-top{
            width: 250px;
            height: 200px;
            margin-left: 1px;
        }
        body{
            background-image: url('images/cafe.png');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .burger{
        position: absolute;
        top:-500px;
      }
      @media screen and (max-width:680px){
      .nav-bar{
        position: absolute;
        top: -500px;
      }
      .burger{
        position: static;
        top: 0px;
      }
        .navbar {
          width: 100%;
          height: auto;
          margin: 0;
          padding: 10px;
          background: #606C38;
          box-shadow: 0 0 10px gray;
          position: fixed;
          z-index: 9999;
          display: flex;
      }

      .navbar .toggler-navbar {
          margin-left: 15px;
      }
      .sidebar {
          position: fixed;
          top: 70px;
          left: 0;
          width: 270px;
          height: 100%;
          background: #FEFAE0;
          text-align: left;
          font-size: 20px;
          transform: rotate3d(0, 1, 0, 90deg);
          transform-origin: left center;
          transition: .5s;
          z-index: 9999;
      }

      .sidebar.open {
          transform: rotate3d(0, 0, 1, 0deg);
      }
      .sidebar ul{
          list-style: none;
      }

      .sidebar li:hover,
      .sidebar li.active {
          background: #0000003f;
      }

      .sidebar li a {
          color: #606C38;
          text-decoration: none;
          padding: 10px 15px;
          display: block
      }
      .hamburger-menu {
          width: 30px;
          height: 30px;
          position: relative;
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg);
          -webkit-transition: .5s ease-in-out;
          -moz-transition: .5s ease-in-out;
          -o-transition: .5s ease-in-out;
          transition: .5s ease-in-out;
          cursor: pointer;
      }

      .hamburger-menu span {
          display: block;
          position: absolute;
          height: 3px;
          width: 100%;
          background: white;
          border-radius: 9px;
          opacity: 1;
          left: 0;
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg);
          -webkit-transition: .25s ease-in-out;
          -moz-transition: .25s ease-in-out;
          -o-transition: .25s ease-in-out;
          transition: .25s ease-in-out;
      }

      .hamburger-menu span:nth-child(1) {
          top: 2.5px;
      }

      .hamburger-menu span:nth-child(2) {
          top: 11px;
      }

      .hamburger-menu span:nth-child(3) {
          top: 21px;
      }

      .hamburger-menu.open span:nth-child(1) {
          top: 15px;
          -webkit-transform: rotate(135deg);
          -moz-transform: rotate(135deg);
          -o-transform: rotate(135deg);
          transform: rotate(135deg);
      }

      .hamburger-menu.open span:nth-child(2) {
          opacity: 0;
          left: -60px;
      }

      .hamburger-menu.open span:nth-child(3) {
          top: 14px;
          -webkit-transform: rotate(-135deg);
          -moz-transform: rotate(-135deg);
          -o-transform: rotate(-135deg);
          transform: rotate(-135deg);
      }
      .brder-dark img{
        width: 325px;
        height: 200px;
      }
      .copyright{
        font-size: 1.3vh;
      }
      .container-01{
        margin-top: 100px;
      }
    }
    </style>
  </head>
  <body>
  <div class="burger">
    <nav class="navbar">
        <a class="toggler-navbar">
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
        <a class="logo" style="width: 150px;margin-right: 92px;">
        <img style="width: 150px; height: 50px;" src="images/logocafe.png">
        </a>
    </nav>
    <div class="sidebar">
        <ul>
        <li class="center"><a href="landing_page_admin.php">Home</a></li>
                  <li class="upward"><a href="daftar_menu.php">Menu</a></li>
                  <li class="center"><a href="pesanan.php">Pesanan</a></li>
                  <li class="center"><a href="booking.php">Reservasi</a></li>
                  <li class="center"><a href="about_us_admin.php">About Us</a></li>
                  <li class="center"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    </div>
  <div class="nav-bar">
                <ul class="nav-links">
                  <li class="center"><a href="landing_page_admin.php">Home</a></li>
                  <li class="upward"><a href="daftar_menu.php">Menu</a></li>
                  <li class="center"><a href="pesanan.php">Pesanan</a></li>
                  <li class="center"><a href="booking.php">Reservasi</a></li>
                  <li class="center"><a href="about_us_admin.php">About Us</a></li>
                  <li class="center"><a href="logout.php">Logout</a></li>
                </ul>
            </div>

      <div class="bar">
        <div class="container-01">
          <h1 class="display-4"><span class="font-weight-bold">D'BARANS CAFE</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda <br> 
          Enjoy Your Meal</p>
        </div>
      </div>

      <div class="container">
        <a href="tambah_menu.php" class="btn btn-success mt-3">TAMBAH DAFTAR MENU</a>
        <div class="row">

          <?php 

          include('koneksi_laman.php');

          $query = mysqli_query($koneksi, 'SELECT * FROM produk');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            

          ?>

          <?php foreach($result as $result) : ?>
              
          <div class="col-md-3 mt-4">
            <div class="card brder-dark">
              <img src="gambar/<?php echo $result['gambar'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
               <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                <a href="edit_menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn btn-success btn-sm btn-block">EDIT</a>

                <a href="hapus_menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn btn-danger btn-sm btn-block text-light">HAPUS</a>
              </div>
            </div>
          </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="copyright">
          <strong>Copyright</strong> <i class="far fa-copyright"></i> 2022 -  Designed by Kelompok 06 PA 2022</p>
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