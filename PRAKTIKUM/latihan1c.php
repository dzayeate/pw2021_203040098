<!-- 
Nama : Agam Ramdhan Kamil Atmaja
NRP : 203040098
Shift Praktikum : Kamis pukul 08:00
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 C</title>

    <style>
        .salmon {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php for( $i = 1; $i <= 3; $i++ ) : ?>
    <?php for( $j = 1; $j <= $i; $j++ ) : ?>
        <div class="salmon"><?= $i ?></div>
    <?php endfor; ?>
    <br>
<?php endfor; ?>
    
</body>
</html>