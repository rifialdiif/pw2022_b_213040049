<?php

session_start();

require 'functions.php';

//cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  //ambil berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  $row = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if ($hash === hash('sha255', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

//melakukan pengecekan apkah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  //mencocokkan username dan password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha255', $row['id'], false);
      //jika remember me decentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha255', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
      if (hash('sha255', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Login</title>
  <link rel="shortcut icon" href="../assets/img/login.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
  <link rel="stylesheet" href="../css/Footer-Basic.css">
  <link rel="stylesheet" href="../css/Login-Form-Clean.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
  <div class="login-clean" style="height: 800;">
    <h2 class="text-center" style="height: 70px;margin-top: 20px; margin-bottom:20px;color:#1E90FF;font-family: Allerta, sans-serif;">
      <strong>Login Form</strong>
    </h2>
    <?php if (isset($error)) : ?>
      echo "<script>
        alert('Wrong username or Password!');
        document.location.href = 'login.php';
      </script>";
    <?php endif; ?>
    <form class="mb-5" method="post">
      <h2 class="sr-only">Login Form</h2>
      <div class="illustration">
        <i class="fas fa-user" style="color: #b8d8f3;"></i>
      </div>
      <div class="form-group">
        <label for="username" class="text" style="color:#b8d8f3;">Username :</label><br>
        <input type="text" name="username" id="username" class="form-control" autocomplete="off" style="background-color: rgb(255,255,255);">
      </div>
      <div class="form-group">
        <label for="username" class="text" style="color:#b8d8f3;">Password :</label><br>
        <input type="password" name="password" id="password" class="form-control" style="background-color: rgb(255,255,255);">
      </div>
      <div class="form-group">
        <label for="remember-me"><span>Remember me</span> <span>
            <input id="remember-me" name="remember" type="checkbox"></span></label><br>
        <input type="submit" name="submit" class="btn btn-block btn-primary btn-md" data-bs-hover-animate="pulse" value="Login" style="background-color: #1E90FF;">
      </div>
      <div id="register-link" class="text-right">
        <p class="mb-1">Don't have account?</p>
        <a href="registrasi.php">Register here</a>
      </div>
    </form>
    <footer style="margin-top:85px;">
      <p class="copyright text-center" style="opacity: 0.7;filter: brightness(150%) contrast(38%);">MaouNime © 2022</p>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bs-animation.js"></script>
</body>

</html>