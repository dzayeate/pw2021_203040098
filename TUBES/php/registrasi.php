<?php 
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
      echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
          </script>";
  } else {
      echo "<script>
                alert('Registrasi Gagal!');
          </script>";
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
  <title>Sign Up</title>

  <style>
    #card {

      border-radius: 10px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 350px;
      margin: 6rem auto 8.1rem auto;
      width: 350px;
    }

    #card-content {
      padding: 20px 44px;
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

<body style="background-image:linear-gradient(to right, #ba181b, #e5383b, #d90429); ">
  <form action="" method="post">


<div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>Sign Up</h2>
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

          <button class="btn btn-success" type="submit" style="margin: 10px;" name="register">Sign Up</button>

        </div>
      </div>

  </form>
</body>

</html>