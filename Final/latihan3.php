<?php
require 'functions.php';
$biodata = query("SELECT * FROM biodata");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Keterangan</th>
        </tr>

        <?php $i = 1;
        foreach ($biodata as $b) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $b['Nama']; ?></td>
                <td><?= $b['NIM']; ?></td>
                <td>
                    <a href="detail.php?id=<?= $b['id']; ?>">lihat detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>