<?php

include 'functions.php';

// $con = mysqli_connect("localhost", "root", "", "wira_sukma_saputra");
if (isset($_POST["submit"])) {
    if (mysqli_affected_rows($con) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
        echo "<br>";
        echo mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Sukma Saputra</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 400px;
        /* Merubah lebar maksimum container */
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    form ul {
        list-style: none;
        padding: 0;
    }

    form li {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }

    form label {
        width: 80px;
        /* Merubah lebar label */
        text-align: right;
        margin-right: 10px;
    }

    form input[type="text"] {
        flex: 1;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
        max-width: 250px;
        /* Merubah lebar maksimum input */
    }

    form button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        margin-left: 20px;
        cursor: pointer;
        align-self: flex-end;
        /* Menggeser tombol ke ujung form */
    }

    form button:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama">
            </li>
            <li>
                <label for="Nim">Nim : </label>
                <input type="text" name="Nim" id="Nim">
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="text" name="Email" id="Email">
            </li>
            <li>
                <label for="Alamat">Alamat : </label>
                <input type="text" name="Alamat" id="Alamat">
            </li>
            <li>
                <label for="Kelas">Kelas : </label>
                <input type="text" name="Kelas" id="Kelas">
            </li>
            <li>
                <label for="Prodi">Prodi : </label>
                <input type="text" name="Prodi" id="Prodi">
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="text" name="Gambar" id="Gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>