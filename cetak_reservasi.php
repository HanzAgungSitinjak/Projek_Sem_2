<?php 
    include('koneksi_laman.php');
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/logocafe.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>D'Barans cafe</title>
    <style>
      body{
        background-color: #FEFAE0;
        background-repeat: no-repeat;
        background-size:cover;
      }
      tbody, tfoot{
        background-color: white;
        color: rgb(14, 74, 14);
      }
      .tabel-data{
          margin-left: 30px;
          padding:20px;
      }
      .tabel-data,tr,td{
          background-color: #ffffff00;
          width: 400px;
      }
      .dot{
          background-color: #ffffff00;
          width: 50px;
          margin: 0px 6px 0px 6px;    
      }
      .signature{
          display: flex;
          justify-content: space-between;
          text-align:center;
          color:#fefefe00;
      }
      .h1{
          color:#fefefe00;
      }
      
    </style>
  </head>
  <body>
  <!-- Menu -->
  <div class="container">
      <div class="judul-pesanan mt-5">
       
        <h3 class="text-center font-weight-bold">D'BARANS CAFE</h3>
        <h5 class="text-center font-weight-bold">Jl. Gereja, Lumban Dolok Haume Bange,<br> Kec. Balige, Toba, Sumatera Utara. <h5>
        <h5 class="text-center font-weight-bold"><h5>
        
      </div><br><hr>
     <?php 
        $ambil = $koneksi->query("SELECT * FROM reservasi 
        WHERE reservasi.id_reservasi='$_GET[id]'");
     ?>
    <?php while ($pecah=$ambil->fetch_assoc()) { ?>
         
    
    <p class="text-right font-weight-bold"><?php echo $pecah["tanggal_pemesanan"]?></p>
    <br><p>Yth. Ibu/Bapak selaku owner dari</p>
    <p>D'Barans cafe</p>
    <p>Sumatera Utara</p>
    <br>
    <br>
    <p>Dengan hormat,<br>Saya yang bernama<?php echo $pecah["username"]?> hendak memesan sebagian tempat yang berlokasi di D'Barans cafe. Dikarenakan
    saya selaku pemesan ingin mengadakan acara <?php echo $pecah["event"]?> bersama keluarga/teman saya. Oleh sebab itu saya ingin memesan sebagian tempat di D'Barans cafe.<br></p>
    <div class="tabel-data">
    <table border="0">
        <tr>
            <td>Atas nama</td>
            <td class="dot">:</td>
            <td><?php echo $pecah["username"]?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td class="dot">:</td>
            <td><?php echo $pecah["alamat"]?></td>
        </tr>
        <tr>
            <td>Tanggal acara</td>
            <td class="dot">:</td>
            <td><?php echo $pecah["tanggal_event"]?></td>
        </tr>
    </table>
    </div><br>
          <p>Kami mohon kerja sama pihak D'Barans cafe agar mengkonfirmasi surat ini. Sehingga apabila
              ada hal hal yang perlu saya selesaikan, dapat segera saya tindaklanjuti.
          </p>
          <p>Atas perhatian dan kerjasama Saudara, kami ucapkan terima kasih.</p><br>
          <div class="signature">
              <table>
                <tr>
                    <td>Hormat kami</td>
                </tr>
                <tr>
                    <td><h1 class="h1">j</h1></td>
                </tr>
                <tr>
                    <td>Costumer</td>
                </tr>
                <tr>
                    <td><?php echo $pecah["username"]?></td>
                </tr>
              </table>
              <table>
                <tr>
                    <td>Pihak cafe</td>
                </tr>
                <tr>
                    <td><h1 class="h1">j</h1></td>
                </tr>
                <tr>
                    <td>Owner D'Barans cafe</td>
                </tr>
                <tr>
                    <td>Marintan Sibarani </td>
                </tr>
              </table>
          </div>
          
    <?php } ?>
        <br>
        <br>
      <form method="POST" action="">
        <a href="booking.php" class="btn btn-success btn-sm">Kembali</a>
      </form>  
      <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
    <script>
		window.print();
	</script>
  </body>
</html>
<?php } ?>
     