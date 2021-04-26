<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
    <link rel="stylesheet" href="../css/style2.css">    

</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form class="form" action="" method="post" style="background-color: #97a3a3;">
        <ul>
            <li>
                <label for="nrp">NRP :</label><br>
                <input type="text" name="nrp" id="nrp" required><br><br>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="email">Email :</label><br>
                <input type="text" name="email" id="email" required><br><br>
            </li>
            <li>
                <label for="jurusan">jurusan :</label><br>
                <select class="browser-default" name="jurusan" id="jurusan" required>
                    <option value="" disabled selected>---------- Pilih Jurusan ----------</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                    <option value="PWK">PWK</option>
                    <option value="Kedokteran Gigi">Kedokteran Gigi</option>
                </select>
            </li>
            <br>
            <li>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="img" id="img" required><br>
                    </div>
                </div>
            </li>
            <br>
            <br><br><button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>

