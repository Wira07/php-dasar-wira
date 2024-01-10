<?php
$mahasiswa = [
    [
        "nama" => "Rizky",
        "nrp" => "173040034",
        "email" => "rizkymuh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Daftar Dosen.png"
    ],
    [
        "nama" => "Rizky",
        "nrp" => "173040034",
        "email" => "rizkyyusuf98@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Daftar Dosen.png"
    ],
    [
        "nama" => "Rizky",
        "nrp" => "173040034",
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
    <title>Document</title>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="../pertemuan_7/gambar/<?= $mhs[" gambar"]; ?>"></li>
            <li></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>php</li>
        <li><?php ?></li>
        <li><?php ?></li>
        <li>php</li>
    </ul>
    
</body>
</html>