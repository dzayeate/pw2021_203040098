<!-- 
    NAMA : Agam Ramdhan Kamil Atm
    NPM : 203040098
    Kelas : C
    Github : https://github.com/dzayeate
    MataKuliah : Pemrograman Web
 -->

 <?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = 'admin.php';
          </script>";
} else {
   echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = 'admin.php';
        </script>";
}
?>