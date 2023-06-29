 <?php 

include('koneksi_laman.php');

$id = $_GET['id'];

$edit= mysqli_query($koneksi, "UPDATE pemesanan SET keterangan='pembayaran selesai' WHERE id_pemesanan='$id'");

if($edit)
	echo "<script>
	alert('Apakah proses pembayaran ini telah selesai?');
	document.location='pesanan.php';
	</script>";
else
	echo "Perubahan status gagal";
 ?>