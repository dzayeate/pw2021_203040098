<?php 
$pemainBola = [
    [
        "nama"=>"Cristiano Ronaldo",
        "club"=>"Juventus",
        "jumlah main"=>100,
        "jumlah gol"=>76,
        "jumlah assist"=>30
    ],
    [
        "nama"=>"Lionel Messi",
        "club"=>"Barcelona",
        "jumlah main"=>120,
        "jumlah gol"=>80,
        "jumlah assist"=>12
    ],
    [
        "nama"=>"Luca Modric",
        "club"=>"Real Madrid",
        "jumlah main"=>87,
        "jumlah gol"=>12,
        "jumlah assist"=>48
    ],
    [
        "nama"=>"Mohammad Salah",
        "club"=>"Liverpool",
        "jumlah main"=>90,
        "jumlah gol"=>103,
        "jumlah assist"=>8
    ],
    [
        "nama"=>"Neymar Jr",
        "club"=>"Paris Saint Germain",
        "jumlah main"=>109,
        "jumlah gol"=>56,
        "jumlah assist"=>15
    ],
    [
        "nama"=>"Sadio Mane",
        "club"=>"Liverpool",
        "jumlah main"=>63,
        "jumlah gol"=>30,
        "jumlah assist"=>70
    ],
    [
        "nama"=>"Zlatan Ibrahimovic",
        "club"=>"Ac Milan",
        "jumlah main"=>100,
        "jumlah gol"=>10,
        "jumlah assist"=>12
    ]
];

$totalMain = 0;
$totalGol = 0;
$totalAssist = 0;
for($i=0; $i<count($pemainBola); $i++){
    $totalMain += $pemainBola[$i]["jumlah main"];
    $totalGol += $pemainBola[$i]["jumlah gol"];
    $totalAssist += $pemainBola[$i]["jumlah assist"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d 203040098</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php foreach ($pemainBola as $urutan => $pemain) : ?>
            <tr>
                <td><?= $urutan+1; ?></td>
                <td><?= $pemain["nama"]; ?></td>
                <td><?= $pemain["club"]; ?></td>
                <td><?= $pemain["jumlah main"]; ?></td>
                <td><?= $pemain["jumlah gol"]; ?></td>
                <td><?= $pemain["jumlah assist"]; ?></td>
            </tr>
        <?php endforeach; ?>
        <tr style="font-weight:bold">
            <td>#</td>
            <td colspan="2" style="text-align: center;">Jumlah</td>
            <td><?= $totalMain; ?></td>
            <td><?= $totalGol; ?></td>
            <td><?= $totalAssist; ?></td>
        </tr>
    </table>
</body>
</html>