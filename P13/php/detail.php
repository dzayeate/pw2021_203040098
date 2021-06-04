<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style rel="stylesheet" href="style.css" ></style>
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>

  <ul>
    <li><img src="../img/<?= $mhs['img']; ?>" alt="" width="200px"></li>
    <li>NRP : <?= $mhs['nrp']; ?></li>
    <li>Nama : <?= $mhs['nama']; ?></li>
    <li>Email : <?= $mhs['email']; ?></li>
    <li>Jurusan : <?= $mhs['jurusan']; ?></li>
    <li><button><a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a></button> | <button><a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></button></li>
    <li><a href="../index.php">Kembali ke Daftar Mahasiswa</a></li>
  </ul>
</body>
</html>