<?php
$mahasiswa = [
    [
        "nama" => "Wira Sukma Saputra",
        "nrp" => "173040034",
        "email" => "rizkymuh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Daftar Dosen.png"
    ],
    [
        "nama" => "Agum Pratama",
        "nrp" => "173041034",
        "email" => "rizkyyusuf98@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Daftar Dosen.png"
    ],
    [
        "nama" => "Neno Arisma",
        "nrp" => "173040014",
        "email" => "rizkyrizki123@hotmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Daftar Dosen.png"
    ],
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Sukma Saputra</title>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li><?= $mhs["nama"]; ?></li>
        <ul>
            <li>
                <a href="latihan_3.php?nama=<?= $mhs["nama"]; ?>
                &nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>">
                    <?= $mhs["nama"]; ?></a>
                <a href="latihan_3.php?nama=<?= $mhs["nama"]; ?>"></a>
            </li>
        </ul>
    <?php endforeach; ?>


</body>

</html>