<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_203040098") or die("Database Salah!");
    $result = mysqli_query($conn, "SELECT * FROM item_dota_2");
    return $conn;
}

function query ($sql) 
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql") or die( mysqli_error($conn));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_item = htmlspecialchars($data['nama_item']);
    $rarity = htmlspecialchars($data['rarity']);
    $jenis = htmlspecialchars($data['jenis']);
    $tahun_rilis = htmlspecialchars($data['tahun_rilis']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO item_dota_2
              VALUES
              ('', '$gambar', '$nama_item', '$jenis', '$rarity', '$tahun_rilis', '$harga')
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM item_dota_2 WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama_item = htmlspecialchars($data['nama_item']);
    $jenis = htmlspecialchars($data['jenis']);
    $rarity = htmlspecialchars($data['rarity']);
    $tahun_rilis = htmlspecialchars($data['tahun_rilis']);
    $harga = htmlspecialchars($data['harga']);

    $queryubah = "UPDATE item_dota_2
                    SET
                    gambar = '$gambar',
                    nama_item = '$nama_item',
                    jenis = '$jenis',
                    rarity = '$rarity',
                    tahun_rilis = '$tahun_rilis',
                    harga = '$harga'
					WHERE id = '$id' ";
    mysqli_query($conn, $queryubah) or die($conn);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM item_dota_2
            WHERE
            gambar LIKE '%$keyword%' OR
                    nama_item LIKE '%$keyword%' OR
                    rarity LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username Already Exist!');
            </script>";
        return false;
    }

    //enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
