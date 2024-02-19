<?php
session_start();

include 'functions.php';

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}


if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
} else {
    $mahasiswa = query("SELECT * FROM mahasiswa");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Sukma Saputra</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }

        .btn-custom {
            margin-bottom: 20px;
            border-radius: 10px;
            transition: 1s;
        }

        .btn-custom:hover {
            background-color: red;
            color: white;
        }

        .img-thumbnail {
            width: 50px;
            height: 50px;
        }

        /* Gaya untuk header tabel */
        .table thead th {
            background-color: #343a40;
            /* Warna latar belakang */
            color: white;
            /* Warna teks */
            border-color: #454d55;
            /* Warna border */
        }

        /* Gaya untuk tombol aksi */
        .action-btns a {
            margin-right: 5px;
            color: #fff;
            /* Warna teks */
        }

        .action-btns a:hover {
            text-decoration: none;
            /* Hapus garis bawah saat hover */
        }

        /* Gaya untuk baris tabel */
        .table tbody tr:hover {
            background-color: #f5f5f5;
            /* Warna latar belakang saat hover */
        }

        /* Mengatur margin bawah tabel */
        table {
            margin-bottom: 0;
            animation: table 1s;
        }

        @keyframes table {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Mahasiswa</h1>
        <a class="btn btn-primary btn-custom mb-3" href="logout.php">Logout</a>

        <a class="btn btn-primary btn-custom mb-3" href="tambah.php">Tambah Data Mahasiswa</a>
        <form class="mb-3" action="" method="post">
            <div class="input-group col-auto">
                <input type="text" class="form-control w-auto" placeholder="Cari Mahasiswa..." name="keyword">
                <button class="btn btn-outline-secondary" type="submit" name="cari">Cari</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Prodi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $row) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td class="d-flex align-items-center">
                                <a href="edit.php?id=<?= $row["id"] ?>" class="btn btn-warning btn-sm ms-1">Edit</a>
                                <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger btn-sm ms-1">Delete</a>
                            </td>
                            <td><img src="gambar/<?= $row["Gambar"]; ?>" alt="Gambar Mahasiswa" class="img-thumbnail"></td>
                            <td><?= $row["Nama"] ?></td>
                            <td><?= $row["Nim"] ?></td>
                            <td><?= $row["Email"] ?></td>
                            <td><?= $row["Alamat"] ?></td>
                            <td><?= $row["Kelas"] ?></td>
                            <td><?= $row["Prodi"] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-mfdV3XeF6vEZ8m3NF6n2f2rNJGsLvH0i92CB50sv5K7Md0g2v2Wdr2Wp9BCH0iy9" crossorigin="anonymous"></script>
</body>

</html>