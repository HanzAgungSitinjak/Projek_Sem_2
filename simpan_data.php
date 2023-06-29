<?php
include "koneksi_laman.php";

$username=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$jenis_kelamin=$_POST["gender"];
$alamat=$_POST["address"];
$hp=$_POST["phone"];
$status=$_POST["status"];

  $hasil=mysqli_query($koneksi, "INSERT INTO user (username,password,email,jenis_kelamin,alamat,hp,status) values ('$username','$password','$email','$jenis_kelamin','$alamat','$hp','$status')");

  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='index.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='register.php';
		  </script>";
  }

?>