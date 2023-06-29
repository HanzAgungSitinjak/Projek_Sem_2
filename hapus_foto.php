<?php 

include('koneksi_laman.php');

$id_foto = $_GET['id'];

$hapus= mysqli_query($koneksi, "DELETE FROM upload WHERE id='$id_foto'");

if($hapus)
	header('location: landing_page_admin.php');
else
	echo "Hapus data gagal";
 ?>