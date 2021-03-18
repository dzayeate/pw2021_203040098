<?php 
$pemainBola = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Saleh" => "Liverpool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c 203040098</title>
    <style>
        .table {
            font-size: 15px;
            border: 2px solid black;
            padding: 10px;
            width: 30%;
            font-family: arial;
        }
    </style>
</head>
<body>
    <div class="table">
        <h3>Daftar pemain bola terkenal dan clubnya</h3>
        <table>
            <?php foreach($pemainBola as $pBola => $club) : ?>
                <td><b><?= $pBola; ?></b></td>
                <td>:</td>
                <td><?= $club; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    
</body>
</html>