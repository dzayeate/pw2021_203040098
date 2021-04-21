<!-- 
Nama : Agam Ramdhan Kamil Atmaja
NRP : 203040098
Shift Praktikum : Kamis pukul 08:00
-->


<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<div class="add">
    <a href="php/tambah.php">Tambah Data</a>
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
            <a href=""><button>Ubah</button></a>
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