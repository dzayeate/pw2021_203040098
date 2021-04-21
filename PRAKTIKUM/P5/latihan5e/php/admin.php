<!-- 
Nama : Agam Ramdhan Kamil Atmaja
NRP : 203040098
Shift Praktikum : Kamis pukul 08:00
-->

<?php
// menghubungkan dengan file php lainnya
require 'functions.php';
if (isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE
              nrp LIKE '%$keyword%' OR
              nama LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%'");

  } else {
      $mahasiswa = query("SELECT * FROM mahasiswa");
  }

// melakukan query
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Cari!</button>
      </form>

<div class="add">
    <a href="php/tambah.php"><button>Tambah Data</button></a>
</div>

<table border="1" cellpadding="13" cellspacing="0">
    <tr>
    <th>#</th>
    <th>opsi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
	<?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="php/ubah.php?id=<?= $mhs['id'] ?>"><button>Ubah</button></a>
            <a href="php/hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
        </td>
        <td><img src="../latihan5a/assets/img/<?= $mhs['img']; ?>" alt=""></td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>