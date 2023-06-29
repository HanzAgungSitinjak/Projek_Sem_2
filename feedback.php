<?php
include "koneksi_laman.php";

$nama=$_POST["nama"];
$comment=$_POST["comment"];
$tanggal=date("Y-m-d");


  $hasil=mysqli_query($koneksi, "INSERT INTO feedback(nama_user,komentar,tanggal) VALUES('$nama','$comment','$tanggal')");

  if ($hasil){
    header('location: about_us.php');
  }
  else 
  {
	echo "<script>
				alert('proses gagal !');
				document.location='about_us.php';
		  </script>";
  }

?>