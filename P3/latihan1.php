<?php
// Pengulangan
// Agam Ramdhan Kamil Atmaja - 203040098
// for, while, do.. while, foreach (pengulangan khusus array)

for( $i = 0; $i < 5; $i++) {
    echo "Hello World! <br>";
}

$i = 0;
while( $i < 5 ) {
    echo "Hello World! <br>";
$i++;
}

do {
    echo "Hello World! <br>";
$i++;
} while( $i < 5 );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    
    </style>
</head>
<body>

    <table border="1" cellpadding = "10" cellspacing="0">
        <?php
            for( $i = 1; $i <= 3; $i++) {
                echo "<tr>";
                for( $j = 1; $j <= 5; $j++ ) {
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    
        <br>

    <table border="1" cellpadding = "10" cellspacing="0">
        <?php for( $i = 1; $i <= 3; $i++ ) { ?>
            <tr>
                <?php for( $j = 1; $j <= 5; $j++ ) { ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <br>

    <table border="1" cellpadding = "10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) { ?>
            <tr class="warna-baris">
                <?php for( $j = 1; $j <= 5; $j++ ) { ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if ( $i % 2 == 1 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j"?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>        
    </table>

</body>
</html>