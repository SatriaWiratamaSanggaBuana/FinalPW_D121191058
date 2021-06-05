<?php

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'mahasiswa');
}

function query($query)
{
    $db = koneksi();

    $result = mysqli_query($db, $query);

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
    $conn = koneksi();

    $nama = htmlspecialchars($data['Nama']);
    $nim = htmlspecialchars($data['NIM']);
    $jurusan = htmlspecialchars($data['Jurusan']);
    $alamat = htmlspecialchars($data['Alamat']);

    $query = "INSERT INTO
            biodata
          VALUES
          (null, '$nama', '$nim', '$jurusan', '$alamat');
        ";

    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
