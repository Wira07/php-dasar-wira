<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Sukma Saputra</title>
    <style>
        ul {
            margin: 50px auto;
        }

        img {
            width: 10%;
            height: 10%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            text-align: center;
            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa Aktif</h1>
    <ul>
        <li><img src="../pertemuan_7/gambar/wira.jpeg" alt=""></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["nrp"] ?></li>
        <li><?= $_GET["email"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
        <li><?= $_GET["gambar"] ?></li>
        <li>Fakultas Ilmu Komputer Universitas Kuningan</li>
        <a href="latihan_2.php"><button>Kembali ke daftar mahasiswa</button></a>
        <!-- <li><a href="latihan_2.php">Kembali ke daftar mahasiswa</a></li> -->
    </ul>
</body>

</html>