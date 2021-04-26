<?php 
require 'functions.php';

$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <form class="form" action="" method="post">
                <input type="hidden" name="id" value="<?=$mhs['id']; ?>">

                
        <ul>
            <li>
                <label for="nrp">NRP :</label><br>
                <input type="text" name="nrp" id="nrp" required value="<?=$mhs['nrp']; ?>"><br><br>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required value="<?=$mhs['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="email">Email :</label><br>
                <input type="text" name="email" id="email" required value="<?=$mhs['email']; ?>"><br><br>
            </li>
            <li>
                <label for="jurusan">jurusan :</label><br>
                <select name="jurusan" id="jurusan" required value="<?=$mhs['jurusan']; ?>">
                    <option value="">---------- Pilih Jurusan ----------</option>
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
                        <input type="file" name="img" id="img" required value="<?=$mhs['img']; ?>"><br>
                    </div>
                </div>
            </li>
            <br>
            <br><br><button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>