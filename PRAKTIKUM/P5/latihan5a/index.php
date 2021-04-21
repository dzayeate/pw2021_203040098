<!-- 
Nama : Agam Ramdhan Kamil Atmaja
NRP : 203040098
Shift Praktikum : Kamis pukul 08:00
-->

<?php
    include 'php/admin.php';
    $mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5A</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php foreach ($mahasiswa as $mhs) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $mhs['id'] ?>">
                <?= $mhs["nama"] ?>
            </a>
        </p>
    <?php endforeach; ?>
</body>
</html>