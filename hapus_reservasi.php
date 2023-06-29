<?php 

include('koneksi_laman.php');

$id = $_GET['id'];

$hapus= mysqli_query($koneksi, "DELETE FROM reservasi WHERE id_reservasi='$id'");

if($hapus)
	header('location: booking.php');
else
	echo "Hapus data gagal";

 ?>