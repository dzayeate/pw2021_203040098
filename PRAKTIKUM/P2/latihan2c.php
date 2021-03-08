<?php
    function tumpukanBola($tumpukan){
        for ($x = 0; $x < $tumpukan; $x++) {
            for ($j = 0; $j <= $x; $j++) {
              echo "<div class='bola'>$tumpukan</div>";
            }
            
          echo "<br>";
        } 
    }
?>
    
    <!doctype html>

    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Documents</title>
      <style>
        .bola{
            width: 50px;
            height: 50px;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            border:1px solid black;
            border-radius: 50%; 
            background: orange;
        }
      </style>
    </head>
    
    <body>
      <?php tumpukanBola(5) ?>
    </body>
    </html>
