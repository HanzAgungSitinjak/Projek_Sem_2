<?php
        require_once 'koneksi_laman.php';
        $sql = mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username'");
        $cek=mysqli_num_rows($sql);
        if($cek==0){
            echo 
            "<script>
                alert('Anda harus login !');
                document.location='index.php';
            </script>";
        }
    ?>