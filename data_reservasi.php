<?php
include "koneksi_laman.php";

$username=$_POST["name"];
$media=$_POST["medsos"];
$alamat=$_POST["address"];
$hp=$_POST["phone"];
$tanggal_pemesanan= date("Y-m-d h:i:sa");
$tanggal_event= $_POST['tanggal_event'];
$format = date('Y-m-d', strtotime($tanggal_event));
$event=$_POST["event"];

  $hasil=mysqli_query($koneksi, "INSERT INTO reservasi(username,media_sosial,alamat,hp,event,tanggal_pemesanan,tanggal_event) VALUES('$username','$media','$alamat','$hp','$event','$tanggal_pemesanan','$tanggal_event')");

  if ($hasil) 
  {
	echo "<script>
				alert('Proses Berhasil !');
				document.location='reservasi.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('proses gagal !');
				document.location='reservasi.php';
		  </script>";
  }

?>