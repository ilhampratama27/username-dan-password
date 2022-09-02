<?php session_start(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
<div class="global-container">
  <div class="card register-form">
    <h3 class="text-center mt-3"><b>LOGIN</b></h3>
    <p class="text-center">please login to go to the website</p>
    <div class="card-body"> 
    <?php
      if (isset($_SESSION['gagal_login'])) {
          echo '<div class="alert alert-danger" role="alert">';
          echo '';
          echo '<b>';
          echo $_SESSION['gagal_login_Maaf'];
          echo '</b>';
          echo ' ';
          echo $_SESSION['gagal_login'];
          echo '</div> ';
          session_unset();
      }
    ?>
      <form action="login.php" method="POST">
        <div class="form-group">
          <label  class="mb-2">Username*</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username Anda">
        </div>
        <div class="form-group mt-4">
          <label for="exampleInputPassword1" class="mb-2">Password*</label>
          <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password Anda">
        </div>
        <div>
          <h6 class="mt-3">Belum Memiliki Akun?<a href="v_register.php">Daftar Sekarang</a></h6>
        </div>
        <div class="d-grid">
          <button type="submit" name="login" class="border radius btn btn-primary btn-block mt-4"><b>Login</b></button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>