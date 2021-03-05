<?php
// Pertemuan 7 - PHP Dasar
// Agam Ramdhan Kamil Atmaja - 203040098
// Sintaks PHP

// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040098",
		"nama" => "AGAM RAMDHAN KAMIL ATMAJA",
		"email" => "dzayeate@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "team.png"
	],
	[
		"nama" => "HERVIN FAKHRUL MAHARDIKA", 
		"nrp" => "203040097",
		"email" => "Hervin665@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "team.png"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>