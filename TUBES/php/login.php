<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Login</title>

  <style>
    #card {

      border-radius: 10px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 400px;
      margin: 6rem auto 8.1rem auto;
      width: 350px;
    }

    #card-content {
      padding: 12px 44px;
    }

    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
    }

    .underline-title {
      background: -webkit-linear-gradient(right, #ba181b, #e5383b);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 120px;
    }
  </style>
</head>


<body style=" background-image: linear-gradient(to right, #ba181b, #e5383b, #d90429);">
  <form action="" method="post">
    <?php if (isset($error)) : ?>
      <p style="color : red; font-style: italic;">Username atau Password salah</p>
    <?php endif; ?>


    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>LOGIN</h2>
          <br>
          <div class="underline-title"></div>
          <br>
          <div>
            <label style="text-decoration: none; color: black;" for="username">Username :</label>
            <input type="text" name="username" style="border-radius: 20px;">
          </div>

          <div>
            <label style="text-decoration: none; color: black;" for="password">Password :</label>
            <input type="password" name="password" style="border-radius: 20px;">
          </div>

          <div class="remember">
            <input type="checkbox" name="remember">
            <label style="text-decoration: none; color: black;" for="remember">Remember Me</label>
          </div>

          <button class="btn btn-success" type="submit" name="submit">Login</button>

          <div class="registrasi">
            <p>Belum punya akun? Registrasi <button class="btn btn-primary" type="submit" name="submit"><a style="text-decoration: none; color: white;" href="registrasi.php">Disini</a></button></p>
          </div>
        </div>
      </div>
    </div>



  </form>

</body>

</html>