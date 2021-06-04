<?php
function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw_tubes_203040098");
}
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya satu data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function upload()
{
    $nama_file = $_FILES['img']['name'];
    $tipe_file = $_FILES['img']['type'];
    $ukuran_file = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmp_file = $_FILES['img']['tmp_name'];


    // ketika tidak ada gambar yang dipilih
    if($error == 4) {
        // echo "<script>
        //         alert('pilih gambar terlebih dahulu!!');
        //     </script>";
        return 'nofoto.png'; 
    }



    // cek ekstensi file
    $daftar_img = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if(!in_array($ekstensi_file, $daftar_img)) {
        echo "<script>
                alert('yang anda pilih bukan gambar!!');
            </script>";
        return false;
    }

    // cek tipe file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('yang anda pilih bukan gambar!!');
            </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb

    if($ukuran_file > 5000000) {
        echo "<script>
                alert('ukuran terlalu besar!!');
            </script>";
        return false;
    }

    // lolos pengecekan 
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

    return $nama_file_baru; 



}


function tambah($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    // $img = htmlspecialchars($data['img']);

    // upload gambar
    $img = upload();
    if (!$img) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$img', '$nrp', '$nama', '$email', '$jurusan')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function hapus($id) 
 {
    $conn = koneksi();

    // menghapus gambar di folder img
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
    if ($mhs['img'] != 'nofoto.png') {
        unlink('../img/' . $mhs['img']);
    }


    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $id = $data['id'];
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $img_lama = htmlspecialchars($data['img_lama']);

    $img = upload();
    if (!$img) {
        return false;
    }

    if($img == 'nofoto.png') {
        $img = $img_lama;
    }

    // query update data
    $query ="UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                img = '$img'
             WHERE id = $id";
                
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function cari($keyword) 
{
    $conn =  koneksi();

    $query = "SELECT * FROM mahasiswa 
                WHERE nama LIKE '%$keyword%'";
    
    $result =  mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek dulu username
    if($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if(password_verify($password, $user['password'])) {

            
        // set session
        $_SESSION['login'] = true;

        header("Location: ../index.php");
        exit;
        }
            return [
                "error" => true,
                'pesan' => 'username / Password Salah!'
            ];
        
    }
        

}

function registrasi($data) 
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    if(empty($username) || empty($password1) || empty($password2) ) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    } 

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('username sudah terdaftar!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika password < 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
                alert('password terlalu pendek');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}