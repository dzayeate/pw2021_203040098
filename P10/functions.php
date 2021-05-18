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

function tambah($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $img = htmlspecialchars($data["img"]);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email   = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // query insert data
    $query = "INSERT INTO mahasiswa
              VALUES
              (null, '$img', '$nama', '$nrp', '$email', '$jurusan');
              ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}