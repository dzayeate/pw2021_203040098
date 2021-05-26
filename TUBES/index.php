<?php

require 'php/functions.php';

$item = query("SELECT * FROM item_dota_2")
?>

<html>

<head>
    <title>DOTA 2</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleCindex.css" type="text/css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-image:linear-gradient(to right, #0b090a, #a4161a, #e5383b);">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#4682B4;">
        <a class="navbar-brand" href="#" class="material-icons" style="font-family: 'Pacifico', cursive; font-weight:bold; font-size: 30px;">DOTA 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href=https://www.instagram.com/letmerestalittle/>Instagram </a> </li> </ul> <a class="btn btn-outline-danger my-2 my-sm-0" href="php/login.php" role="button" style="font-weight:bold; color: black;">Login</a>
        </div>
    </nav>

    <center>
        <div style="background-image:linear-gradient(to right, #0b090a, #a4161a, #e5383b);" class="jumbotron">
            <h1 style="font-family: 'Pacifico', cursive;">Selamat Datang</h1>
            <hr class="my-4">
        </div>
    </center>

    <section class="home mt-4" id="home">
        <div class="container">
            <hr class="my-4">
            <div class="row">
                <?php foreach ($item as $barang) : ?>
                    <div class="col">
                        <div class="card m-3" style="width: 18rem;">
                            <img class="img-responsive" class="card-img-top" src="assets/img/<?= $barang['gambar'] ?>" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?= $barang['nama_item']; ?></h4>
                                <a class="btn btn-outline-primary my-2 my-sm-0" href="php/detail.php?id=<?= $barang['id'] ?>">
                                    <h5>Lihat Detail</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <br>
    <!-- FOOTER -->
    <div class="" style="background-color:#d3d3d3; width: 100%; padding: 20px;">
        <p style="text-align: center; font-weight:bold; font-size:x-large; ">Agam Ramdhan Kamil Atmaja &copy; 2021 | 203040098</p>
    </div>
</body>

</html>