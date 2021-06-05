<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$b = query("SELECT * FROM biodata WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li>Nama :<?= $b['Nama']; ?></li>
        <li>NIM :<?= $b['NIM']; ?></li>
        <li>Jurusan:<?= $b['Jurusan']; ?></li>
        <li>Alamat :<?= $b['Alamat']; ?></li>
        <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>

</html>