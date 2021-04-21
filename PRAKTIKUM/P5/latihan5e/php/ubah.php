<?php

require 'functions.php';
    
$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


?>

<h3>Form Ubah Data Mahasiswa</h3>
<form action="" method="POST">
    <ul>
        <li>
            <input type="hidden" name="id" id="id" value="<?= $mhs['id']; ?>">
        </li>
        <li>
            <label for="img">Gambar :</label><br>
            <input type="file" name="img" id="img" ><br><br>
        </li>
        <li>
            <label for="nrp">NRP :</label><br>
            <input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp']; ?>"><br><br>
        </li>
        <li>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']; ?>"><br><br>
        </li>
        <li>
            <label for="email">Email :</label><br>
            <input type="email" name="email" id="email" required value="<?= $mhs['email']; ?>"><br><br>
        </li>
        <li>
            <label for="jurusan">Jurusan :</label><br>
            <select name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']; ?>">
                <option value="">--------------- Pilih Jurusan ---------------</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Fakultas Kedokteran Gigi">Fakultas Kedokteran Gigi</option>
                <option value="Keperawatan">Keperawatam</option>
                <option value="Teknik & Manajemen Industri">Teknik & Manajemen Industri</option>
                <option value="Teknik Pangan">Teknik Pangan</option>
                <option value="Perancangan Wilayah Kota">Perancangan Wilayah Kota</option>
            </select>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

<?php

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = '../index.php';
                </script>";
    }
}
?>