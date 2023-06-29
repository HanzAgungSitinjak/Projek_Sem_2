<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/logocafe.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>D'barans cafe</title>
    <style>
      body{
        background-color: #FEFAE0;
        background-repeat: no-repeat;
        background-size:cover;
      }
      .feedback{
        display: flex;
        background-color: white;
        padding: 10px;
        justify-content: space-around;
      }
      textarea{
        width: 450px; 
        height:200px;
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
          top: 0px;
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
          top: 73px;
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
      .section-01 img{
        width:100%;
        height:60%;
      }
      .section-01 p{
        margin: 3px;
        padding: 3px;
      }
      .section-01{
        font-size: 1.4vh;
        color: green;
        display: inline;
      }
      .section-02{
        font-size: 1.4vh;
        color: green;
        display: inline;
        margin: 0;
        padding: 0;
      }
      .section-02 .maps{
        width:100%;
        height:60%;
        margin: 0;
        padding: 0;
      }
      .section-02 p{
        padding: 5px;
        border-left-style: none;
      }
      .section-03{
        font-size: 1.4vh;
        color: green;
      }
      .section-03 img{
       position: absolute;
       width: 18%;
       height: 20%;
       left: -140px;
       top: 890px;
      }
      .section-03 .text{
        font-size: 1.4vh;
        color: white;
        border-left-style: none;
        margin: 0;
        margin-left: 60px;
        padding: 0;
      }
      .feedback{
        display: grid;
        width: 100%;
        font-size: 1.2vh;
      }
      .form_comment{
        width: 250px;
      }
      .form_comment h4{
        font-size: 1.4vh;
      }
      .text h3{
        font-size: 1.3vh;
      }
      textarea{
        width: 200px; 
        height:50px;
      }
    }
      </style>
    </head>
  <body>
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
      <img src="images/logocafe.png">
      <div class="nav-bar">

          <ul class="nav-links">
          <li class="upward"><a href="index.php">Home</a></li>
                <li class="center"><a href="menu_unvalid.php">Menu</a></li>
                <li class="center"><a href="valid.php">Order</a></li>
                <li class="center"><a href="reservasi_unvalid.php">Reservasi</a></li>
                <li class="center"><a href="about_us_unvalid.php">About us</a></li>
          </ul>
      </div>
    </div>
    <hr>
    <div class="section">
      <div class="section-01">
        <img src="images/Asset 2.png"></img>
        <p>    D’barans cafe adalah sebuah UMKM di kabupaten Toba yang menyediakan berbagai menu makanan dan minuman yang sesuai dengan masakan Nusantara. Ayam lada hitam menjadi menu andalan yang paling diminati di D’barans cafe, selain makanan berat tersedia juga cemilan dan minumam menarik yang bisa dinikmati seluruh kalangan usia. Cafe yang berdiri sejak 2016 ini selalu mengikuti perkembangan selera customer dimana interior cafe yang instagramable menjadi salah satu daya tarik bagi pelanggan terutama bagi kaum anak muda</p>
      </div><br>
      <div class="section-02">
      <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.519909388246!2d99.06478591470282!3d2.329932698301931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e045d22a592f3%3A0x7d9788dca20312e1!2sD&#39;barans%20Cafe!5e0!3m2!1sid!2sid!4v1653115935413!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>D'barans cafe terletak di Jl. Gereja, Lumban Dolok Haume Bange, Kec. Balige, Toba, Sumatera Utara. Letak dari cafe ini terbilang cukup strategis karena dekat dengan jalan pusat pasar balige. Dapat ditempuh dengan berjalan kaki dari simpang Rumah Sakit HKBP selama 10 sampai 15 menit atau sekitar 6 menit jika menggunakan kendaraan.</p>
        
      </div><br>
      <div class="section-03">
        <img src="images/owner.png"></a>
        <div class="text">
          <p>Pemilik D’barans cafe adalah ibu Marintan Sibarani.</p>
          <p>Waktu operasi D’barans cafe :</p>
          <li>Senin – Jumat : 13.00 – 20.00WIB</li>
          <li>Sabtu		: 10.00 -23.00 WIB</li>
          <li>Minggu  	: 15.00 – 23.00 WIB</li></div>
      </div>
     </div><br>
     <div class="feedback">
       <div class="text" style="margin: auto;">
       <h3> "Berikanlah saran sebenar-benarnya,<br> agar kami bisa meningkatkan pelayanan kami."</h3>
       </div>
       
     <div class="form_comment" style="padding: 15px 10px 15px 10px; background-color: #606C38;">
     <div class="box_form" style="background-color:white; padding: 15px;">
     <form method="post" action="valid.php">
        <h4 style="color: #606C38;">Nama :</h4>
        <input type="text" name="nama" placeholder="Masukan nama anda!!"><br><br>
        <h4 style="color: #606C38;">Pendapat anda :</h4>
        <textarea name="comment"></textarea><br>
        <button type="submit" name="upload">Submit</button>
      </form>
     </div>
     <br><hr size="1" style="background-color: #FEFAE0; width: 75%;margin: auto;"><br>
        <div id="box_comment" style=" background-color: rgb(255, 255, 255);padding: 10px;width:100%; height: 300px; overflow: auto;">
            <?php
            require_once 'koneksi_laman.php';

            $ambil = mysqli_query($koneksi, "SELECT * FROM feedback");
            while ($feed = $ambil->fetch_assoc()) { ?>
              <h5 style="color :#606C38;"><?php echo $feed["nama_user"]?></h5>
              <div class="cont_feed" style="background-color:white; color: black;">
              <?php echo $feed["komentar"]?>
              </div><hr style="size:1;">

            <?php } ?>
            
        </div>
      </div>
     </div><br>
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
    