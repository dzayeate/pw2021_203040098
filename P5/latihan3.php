<?php
// Agam Ramdhan Kamil Atmaja - 203040098
$mahasiswa = [
    ["Agam Ramdhan", "203040098", "Teknik Informatika", "203040098@mail.unpas.ac.id"],
    ["Yoga Bagja Ramadhan", "203040112", "Teknik Informatika", "203040112@mail.unpas.ac.id"],
    ["Hervin Fakhrul", "203040097", "Teknik Informatika", "203040097@mail.unpas.ac.id"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>