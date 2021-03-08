<?php
    $jawabanIsset = "Isset adalah = untuk menentukan apakah suatu variabel sudah terdevinisi nilainya atau belum. Akan menghasilkan true jika variabel terdifinisi dan false ketika variabel kosong atau tidak terdeifinisi <br><br>";
    $jawabanEmpty = "Empty adalah = untuk menentukan apakah suatu variabel itu kosong/tidak terdefinisi atau belum. Akan menghasilkan false jika variabel terdifinisi dan true ketika variabel kosong atau tidak terdeifinis";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>