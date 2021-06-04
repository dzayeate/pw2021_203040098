<?php
  require "../php/functions.php";
  $mahasiswa = cari($_GET['keyword']);
  ?>

<button class="btn btn-info"><a href="php/login.php" style="text-decoration: none; color: black;">Masuk ke halaman admin</a></button>
    <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0" style="background-color: #edf2f4;">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>


    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['img']; ?>"></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>