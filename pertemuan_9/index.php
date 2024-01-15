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

    <?php
    // koneksi database
    $conn = mysqli_connect("localhost", "root", "", "wira_sukma_saputra");
    // ambil data dari table mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

    // if (!$result) {
    //     echo mysqli_error($conn);
    // }
    // ambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row() // mengembalikan array numerik
    // mysqli_fetch_assoc() // mengembalikan array associative
    // mysqli_fetch_array() // mengembalikan keduanya
    // mysqli_fetch_object() // mengembalikan object

    // while ($mhs = mysqli_fetch_assoc($result)) {
    //     var_dump($mhs);
    // }
    ?>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td>1</td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Delete</a>
                </td>
                
                <td><img src="../pertemuan_9/gambar/<?php echo $row["Gambar"]; ?>" width="50"></td>

                <td>201401001</td>
                <td>Wira Sukma Saputra</td>
                <td>wiralodrasaputra07@gmail.com</td>
                <td>Teknik Informatika</td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>