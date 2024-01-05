<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function salam($waktu = "Datang", $nama = "Admin")
    {
        return "Selamat $waktu, $nama!";
    }
    echo salam("Pagi");  // Selamat Pagi, Admin!
    echo "<br>";
    echo salam("Siang", "Wira"); // Selamat Siang, Wira!
    echo "<br>";
    echo salam("Malam", "Sukma"); // Selamat Malam, Sukma!
    ?>

    <h1>
        <= salam(); ?>
    </h1>
</body>

</html>