<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: php/login.php");
  exit;
}

require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari di klik
if(isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href=" style.css">
</head>

<body>

  <button><a href="php/logout.php">Logout</a></button>
  <h3>Daftar Mahasiswa</h3>

  <button><a href="php/tambah.php" style="text-decoration: none; color: black;">Tambah Data Mahasiswa</a></button>
  <br>
  <br>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>

  <div class="container">
  <button class="btn btn-info"><a href="php/login.php" style="text-decoration: none; color: black;">Masuk ke halaman admin</a></button>
    <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0" style="background-color: #edf2f4;">
      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>

      <?php if(empty($mahasiswa)) : ?>
        <tr>
          <td colspan="4">
            <p>Data tidak ditemukan!!</p>
          </td>
        </tr>
      <?php endif; ?>
        <?php $i = 1;
        foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td><?=$i; ?></td>
            <td><img src="img/<?=$mhs["img"]; ?>" ></td>
            <td><?=$mhs["nama"]; ?></td>
            <td>
              <button><a href="php/detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a></button>
            </td>
          </tr>
          <?php $i++; ?>

        <?php endforeach; ?>
    </table>
  </div>


<script src="js/script.js"></script>

</body>
</html>