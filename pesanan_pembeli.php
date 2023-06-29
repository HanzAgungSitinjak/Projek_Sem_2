<?php  
include('koneksi_laman.php');
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>
<?php 
if(empty($_SESSION["pesanan"]) OR !isset($_SESSION["pesanan"]))
{
  echo "<script>alert('Pesanan kosong, Silahkan Pesan dahulu');</script>";
  echo "<script>location= 'menu.php'</script>";
}
?>

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
    <link rel="stylesheet" type="text/css" href="css/pesanan.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <style>
       .burger{
        position: absolute;
        top:-500px;
      }
      .copyright{
        margin-top: 150px;
        
      }
      @media screen and (max-width:680px){
      .nav{
        position: absolute;
        top: -500px;
      }
      .burger{
        position: relative;
        top:-90px;
        
      }
        .navbar {
          width: 100%;
          height: auto;
          margin: 0;
          padding: 10px;
          background: #FEFAE0;
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
          background: #c17604;
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
          color: white;
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
          background: #606C38;
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
      .copyright{
        font-size: 1.3vh;
        bottom: 0px;
      }
      .text-center{
        margin-top: 90px;
      }
      table th{
        font-size: 1vh;
      }
      table td{
        font-size: 0.9vh;
      }
      .option{
        margin-bottom: 279px;
      }
      .form-control{
        position: absolute;
        opacity:0;
        left: -5000px;
      }
    }
    </style>
    <title>D'barans cafe</title>
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
          <li class="upward"><a href="landing_page_user.php">Home</a></li>
          <li class="center"><a href="menu.php">Menu</a></li>
          <li class="center"><a href="pesanan_pembeli.php">Daftar Pesanan</a></li>
          <li class="center"><a href="reservasi.php">Reservasi</a></li>
          <li class="center"><a href="about_us.php">About Us</a></li>
          <li class="center"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    </div>
      <div class="nav">
          <ul class="nav-links">
            <li class="center"><a href="landing_page_user.php">Home</a></li>
            <li class="center"><a href="menu.php">Menu</a></li>
            <li class="upward"><a href="pesanan_pembeli.php">Daftar Pesanan</a></li>
            <li class="center"><a href="reservasi.php">Reservasi</a></li>
            <li class="center"><a href="about_us.php">About Us</a></li>
            <li class="center"><a href="logout.php">Logout</a></li>
          </ul>
      </div>
    </div>
  <!-- Menu -->
    <div class="container">
      <div class="judul-pesanan mt-5">
       
        <h3 class="text-center font-weight-bold">PESANAN ANDA</h3>
        
      </div><br><hr class="line"><br>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subharga</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
            <?php $nomor=1; ?>
            <?php $totalbelanja = 0; ?>
            <?php foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) : ?>

            <?php 
              include('koneksi_laman.php');
              $ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
              $pecah = $ambil -> fetch_assoc();
              $subharga = $pecah["harga"]*$jumlah;
            ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah["nama_menu"]; ?></td>
            <td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
            <td><?php echo $jumlah; ?></td>
            <td>Rp. <?php echo number_format($subharga); ?></td>
            <td>
              <a href="hapus_pesanan.php?id_menu=<?php echo $id_menu ?>" class="badge badge-danger">Hapus</a>
            </td>
          </tr>
            <?php $nomor++; ?>
            <?php $totalbelanja+=$subharga; ?>
            <?php endforeach ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="5">Total Belanja</th>
            <th colspan="2">Rp. <?php echo number_format($totalbelanja) ?></th>
          </tr>
        </tfoot>
      </table><br>
      <?php
        include('form.php');
        $frm=new formBuilder;      
      ?>
      <div>
        <form method="POST" id="form1">
        <div>
          <h4 style="color: white;">Nama Pemesan</h4>
        <input type="text" class="form-control" placeholder="Nama Pemesan" name="name">
        <?php $frm->validate("name",array("required","label"=>"Name","regexp"=>"name")); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div><br>
        <h4 style="color: white;">Nomor Meja</h4>
        <select name="table" class="form-control">
            <option selected>Pilih nomor meja</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            </select>
      </div>
      <br>
      <h4 style="color: white;">Catatan Pemesan</h4>
      <textarea name="note">Kosongkan jika tidak perlu</textarea>
      
      <select name="status" class="form-control" style="position: absolute;opacity:0;left: -5000px;">
        <option>Belum bayar</option>
      </select>
     
 
      <div class="option">
        <a href="menu.php" class="btn btn-primary btn-sm">Tambah pesanan</a>
        <button class="btn btn-success btn-sm" name="konfirm">Konfirmasi Pesanan</button>
      </div>
      </form>        

      <?php 
      if(isset($_POST['konfirm'])) {
        $tanggal= date("Y-m-d h:i:sa");
        $table =$_POST['table'];
        $catatan =$_POST['note'];
        $status=$_POST['status'];

       
          // Menyimpan data ke tabel pemesanan
          $customer =$_POST['name'];
         
          $insert = mysqli_query($koneksi, "INSERT INTO pemesanan (total_belanja, pemesan,tanggal, nomor_meja, catatan, keterangan) VALUES ('$totalbelanja','$customer','$tanggal', '$table', '$catatan', '$status')");

          // Mendapatkan ID barusan
          $id_terbaru = $koneksi->insert_id;
          
          // Menyimpan data ke tabel pemesanan produk
          foreach ($_SESSION["pesanan"] as $id_menu => $jumlah)
          {
            $insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_pemesanan, id_menu, jumlah, pemesan, nomor_meja, catatan, keterangan) 
              VALUES ('$id_terbaru', '$id_menu', '$jumlah', '$customer', '$table', '$catatan', '$status')");
          }          

          // Mengosongkan pesanan
          unset($_SESSION["pesanan"]);

          // Dialihkan ke halaman nota
          echo "<script>alert('Pemesanan Sukses!');</script>";
          echo "<script>location= 'menu.php'</script>";
      }
      ?>
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
<?php } ?>