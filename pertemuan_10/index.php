<?php
// koneksi database
include 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Sukma Saputra</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
            flex-direction: column;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        <!-- looping untuk setiap baris data -->
        <?php $i = 1; ?>

        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Delete</a>
                </td>
                <td><img src="../pertemuan_9/gambar/<?php echo $row["Gambar"]; ?>" width="50"></td>
                <td><?= $row["Nama"] ?></td>
                <td><?= $row["Nim"] ?></td>
                <td><?= $row["Email"] ?></td>
                <td><?= $row["Alamat"] ?></td>
                <td><?= $row["Prodi"] ?></td>

            </tr>
        <?php endforeach; ?>
        <?php $i++; ?>
    </table>
    
</body>

</html>