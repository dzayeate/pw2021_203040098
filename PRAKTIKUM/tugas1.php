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
    <title>Tugas 1</title>

</head>
<body>

<table width="230px" cellspacing="5px" cellpadding="0px" border="1px">

<?php for( $row = 1; $row <= 6; $row++ ) : ?>
    <tr>
        <?php for( $col = 1; $col <= 6; $col++ ) : ?>
            <?php $all = $row + $col; ?>
            <?php if( $all % 2 == 1 ) : ?>
                <td height=30px width=30px bgcolor=salmon></td>
            <?php else : ?>
                <td height=30px width=30px bgcolor=lightblue></td>
            <?php endif; ?>
        <?php endfor; ?> 
    </tr>
<?php endfor; ?>

</table>

</body>
</html>