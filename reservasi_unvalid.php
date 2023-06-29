<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="validation/dist/js/Validator.js"></script>
    <link rel="icon" type="image/png" href="images/logocafe.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/reser.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>D'barans cafe</title>
  </head>
  <body>
  <style>
    .burger{
        position: absolute;
        top:-500px;
      }
      @media screen and (max-width:680px){
      .nav{
        position: absolute;
        top: -500px;
      }
      .burger{
        position: relative;
        top: -90px;
        
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
      .container{
        margin-top: 90px;
      }
      .copyright{
        font-size: 1.3vh;
      }
    }
  </style>
  <div class="header">
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
        <li class="upward"><a href="index.php">Home</a></li>
                <li class="center"><a href="menu_unvalid.php">Menu</a></li>
                <li class="center"><a href="valid.php">Order</a></li>
                <li class="center"><a href="reservasi_unvalid.php">Reservasi</a></li>
                <li class="center"><a href="about_us_unvalid.php">About us</a></li>
        </ul>
    </div>
    </div>

    </div>
      <div class="nav">
          <ul class="nav-links">
          <li class="upward"><a href="index.php">Home</a></li>
                <li class="center"><a href="menu_unvalid.php">Menu</a></li>
                <li class="center"><a href="valid.php">Order</a></li>
                <li class="center"><a href="reservasi_unvalid.php">Reservasi</a></li>
                <li class="center"><a href="about_us_unvalid.php">About us</a></li>
          </ul>
      </div>
    </div>

    <?php
        include('form.php');
        $frm=new formBuilder;      
    ?> 
    <div class="container">
    <h3 class="text-center mt-3 mb-5">PESAN TEMPAT</h3>
    <div class="card p-5 mb-5">
    <form method="POST" action="valid.php" id="form1">
        <label for="name">Nama Lengkap</label>
        <div class="form-group"> 
            <input name="name" type="text" placeholder="Masukan Nama lengkap Anda" class="form-control">
            <?php $frm->validate("name",array("required","label"=>"Name","regexp"=>"name")); ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <label for="tgl">Tanggal resevasi</label>
        <div class="form-group">
            
            <input type="date" class="form-control" id="tanggal" name="tanggal_event" value="DD-MM-YYYY">
        </div>
        <label for="nama">Media Sosial</label>
      <div class="form-group">
        
        <input type="text" class="form-control" id="nama" name="medsos" placeholder="Masukan akun medsos">
      </div>
  
      <label for="rumah">Alamat</label>
        <div class="form-group">  
          <input type="text" class="form-control" id="address" name="address" placeholder="Masukan Alamat">
          <?php $frm->validate("address",array("required","label"=>"address","regexp"=>"address")); ?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <label for="telp">No. Telephone</label>
        <div class="form-group">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="xxxx-xxxxxxxx">
          <?php $frm->validate("phone",array("required","label"=>"phone","regexp"=>"phone"));  ?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

      <div class="form-group ">
          <label for="sts">Event</label>
          <select id="sts" class="form-control" name="event">
            <option selected>Pilih...</option>
            <option value="Ulang Tahun">Ulang Tahun</option>
            <option value="Kumpul keluarga besar">Kumpul keluarga besar</option>
            <option value="Reunian">Reunian</option>
          </select>
        </div>
      
      <button type="register" class="btn btn-primary">Buat Pesanan</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </form>
  </div>
  </div> 

    <div class="copyright">
          <strong>Copyright</strong> <i class="far fa-copyright"></i> 2022 -  Designed by Kelompok 06 PA 2022</p>
    </div>

    <script>
        <?php $frm->applyvalidations("form1");?>
    </script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
    <script>
      document.getElementsByClassName("toggler-navbar")[0].addEventListener("click", toogleClass);

        function toogleClass() {
        document.getElementsByClassName("hamburger-menu")[0].classList.toggle('open')
        document.getElementsByClassName("sidebar")[0].classList.toggle('open')
}
    </script>
  </body>
</html>