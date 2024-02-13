<?php
include 'functions.php';

if (isset($_POST["submit"])) {

    $Nama = $_POST["Nama"];
    $Nim = $_POST["Nim"];
    $Email = $_POST["Email"];
    $Alamat = $_POST["Alamat"];
    $Kelas = $_POST["Kelas"];
    $Prodi = $_POST["Prodi"];
    $Gambar = $_POST["Gambar"];

    $query = "INSERT INTO mahasiswa VALUES ('', '$Nama', '$Nim', '$Email', '$Alamat', '$Kelas', '$Prodi', '$Gambar')";
    mysqli_query($con, $query);

    if (Tambah($_POST) > 0) {
        echo "<script>
        alert('Data Gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Data Berhasil ditambahkan');
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
    <title>Form Tambah Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carousel-item img {
            max-height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .form-label {
            font-weight: bold;
        }
        
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <div id="carouselExampleControls" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="1000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.pinimg.com/564x/fc/c6/15/fcc615bdcd5734f208d5e63436ffe3ed.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/564x/97/c5/d2/97c5d2fc7e2ff589e9d09b9788e6e8fe.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/564x/40/e0/d6/40e0d65ed208dcab5b0c7958285e510c.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-2 col-form-label form-label">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" name="Nama" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nim" class="col-sm-2 col-form-label form-label">Nim:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nim" name="Nim" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="Email" name="Email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label form-label">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat" name="Alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Kelas" class="col-sm-2 col-form-label form-label">Kelas:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Kelas" name="Kelas" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Prodi" class="col-sm-2 col-form-label form-label">Prodi:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Prodi" name="Prodi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Gambar" class="col-sm-2 col-form-label form-label">Gambar:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Gambar" name="Gambar">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-rDTvHzDp/BoAxkhQDl/G0WNb+Z9hge0oG2F8bqN5H8dFuJsp7f7oZhNJtwwW1VfF" crossorigin="anonymous"></script>
</body>

</html>