<?php
// mengkoneksikan database yang diinginkan
$db = mysqli_connect('localhost', 'root', '', 'mahasiswa');
//membuat query
$return = mysqli_query($db, "SELECT * FROM biodata");
//masukkan dalam bentuk array
$rows = [];
while ($row = mysqli_fetch_assoc($return)) {
    $rows[] = $row;
}

//simpan dalam bentuk variabel
$biodata = $rows
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h3>Daftar mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        <?php $i = 1;
        foreach ($biodata as $b) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $b['Nama']; ?></td>
                <td><?= $b['NIM']; ?></td>
                <td><?= $b['Jurusan']; ?></td>
                <td><?= $b['Alamat']; ?></td>
            </tr>
        <?php endforeach; ?>


    </table>

</body>

</html>