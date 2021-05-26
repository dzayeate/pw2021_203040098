<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['id'];
$itemdota2 = query("SELECT * FROM item_dota_2 WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'admin.php';
                 </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Ubah Item</title>
  <style>
    .textform {
      font-weight: bold;
    }

    .inputform {
      border-radius: 10px;
      width: 400px;
    }

    h3 {
      width: 300px;
      height: 100px;
      padding: 15px;
      margin: 20px;
      background-image: linear-gradient(to right, #ba181b, #e5383b, #d90429);
      border-radius: 15px;

    }
  </style>
</head>

<body style="background-image:linear-gradient(to right, #0b090a, #a4161a, #e5383b); ">
  <center>
    <h3>Form Ubah Data Item Dota 2</h3>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $itemdota2['id']; ?>">

      <div class="textform">
        <label for="gambar">Gambar :</label>
        <br>
        <input class="inputform" type="text" name="gambar" id="gambar" required value="<?= $itemdota2['gambar']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="nama_item">Nama Item :</label>
        <br>
        <input class="inputform" type="text" name="nama_item" id="nama_item" required value="<?= $itemdota2['nama_item']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="jenis">Jenis :</label>
        <br>
        <input class="inputform" type="text" name="jenis" id="jenis" required value="<?= $itemdota2['jenis']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="rarity">Rarity :</label>
        <br>
        <input class="inputform" type="text" name="rarity" id="rarity" required value="<?= $itemdota2['rarity']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="tahun_rilis">Tahun Rilis :</label>
        <br>
        <input class="inputform" type="text" name="tahun_rilis" id="tahun_rilis" required value="<?= $itemdota2['tahun_rilis']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="harga">Harga :</label>
        <br>
        <input class="inputform" type="text" name="harga" id="harga" required value="<?= $itemdota2['harga']; ?>">
      </div>
      <br>
      <button class="btn btn-success" type="submit" name="ubah">Ubah Data!</button>
      <button class="btn btn-primary" type="sumbit"><a href="admin.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </form>
  </center>
</body>

</html>