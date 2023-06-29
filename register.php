<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="validation/dist/js/Validator.js"></script>
    <link rel="icon" type="image/png" href="images/logocafe.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Halaman Registrasi</title>
    <style>
      .container span img{
        position: absolute;
        top: -500px;
      }
      @media screen and (max-width:680px){
      .container span{
        display: flex;
        justify-content: center;
      }
      .container span img{
        
        position: static;
        width: 180px;
        height: 50px;
        
      }
      .container{
        padding: 10px;
      }
      form{
        padding: 5px;
      }
    }
    </style>
  </head>
  <body>
  <?php
        include('form.php');
        $frm=new formBuilder;      
    ?> 

  <div class="container">
  <span><img src="images/logocafe.png"></span>
    <h3 class="text-center mt-3 mb-5">HALAMAN REGISTRASI</h3>
    <center><p>Sudah memiliki akun?? Silahkan <a href="login.php">login</a></p></center>
    <div class="card p-5 mb-5">
    <form method="POST" action="simpan_data.php" id="form1">
        <label for="name">Nama Lengkap</label>
        <div class="form-group"> 
            <input name="name" type="text" placeholder="Masukan Nama lengkap Anda" class="form-control">
            <?php $frm->validate("name",array("required","label"=>"Name","regexp"=>"name")); ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <label for="password">Password</label>
        <div class="form-group">
            <input name="password" type="password" placeholder="Masukan Password" class="form-control">
            <?php $frm->validate("password",array("required","label"=>"Password","min"=>"4")); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <label for="email">E-mail</label>
      <div class="form-group"> 
        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan E-mail Anda">
        <?php $frm->validate("email",array("required","label"=>"Email","email")); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <label for="jk">Jenis Kelamin</label><br>
      <div class="form-group">
        <select name="gender" class="form-control">
            <option value>...</option>
            <option>Pria</option>
            <option>Wanita</option>
        </select>
        <?php $frm->validate("gender",array("required","label"=>"Gender")); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
   
      <label for="rumah">Alamat</label>
        <div class="form-group">  
          <input type="text" class="form-control" id="address" name="address" placeholder="Masukan Alamat">
          <?php $frm->validate("address",array("required","label"=>"address","regexp"=>"address")); ?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group">
          <label for="sts">Status Registrasi</label>
          <select id="sts" class="form-control" name="status">
            <option selected>user</option>
          </select>
      </div>
      <label for="telp">No. Telephone</label>
        <div class="form-group">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="xxxx-xxxxxxxx">
          <?php $frm->validate("phone",array("required","label"=>"phone","regexp"=>"phone"));  ?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
      
        
      <button type="register" name="submit" class="btn btn-primary">Register</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </form>
  </div>
  </div>
    <script>
        <?php $frm->applyvalidations("form1");?>
    </script>
</body>
</html>

    
  