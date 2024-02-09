<?php
include 'functions.php'; // Jika ada file functions.php yang berisi definisi fungsi query, pastikan untuk memuatnya di sini.
$mahasiswa = query("SELECT * FROM mahasiswa");
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
            height: 30vh;
            margin-left: 50px;
            flex-direction: column;
        }

        a {
            text-decoration: none;
        }

        h1 {
            margin-left: 50px;
        }

        button {
            margin-bottom: 20px;
            padding: 10px;
            color: white;
            border: none;
            background-color: #4CAF50;
            border-radius: 10px;
            transition: 1s;
        }

        button:hover {
            background-color: blueviolet;
            color: white;
        }
    </style>

</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <button><a href="tambah.php">Tambah Data Mahasiswa</a></button>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Prodi</th>
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
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>