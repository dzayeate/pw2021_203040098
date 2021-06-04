<!-- 
    NAMA : Agam Ramdhan Kamil Atm
    NPM : 203040098
    Kelas : C
    Github : https://github.com/dzayeate
    MataKuliah : Pemrograman Web
 -->

 <?php 
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>