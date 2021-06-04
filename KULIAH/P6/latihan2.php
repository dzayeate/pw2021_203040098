<?php
// Pertemuan 6 - PHP Dasar
// Agam Ramdhan Kamil Atmaja - 203040098
// Sintaks PHP 

// $mahasiswa = [
// ["Agam Ramdhan Kamil Atmaja", "203040098", "dzayetae@gmail.com", "Teknik Informatika"],
// ["203040097", "Hervin665", "Hervin665@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[	
		"nrp" => "203040098",
		"nama" => "Agam Ramdhan Kamil Atmaja",
		"email" => "dzayetae@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "team.png"
	],
	[
		"nama" => "Doddy Ferdiansyah", 
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>