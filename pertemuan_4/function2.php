<?php

function salam($nama = "Wira Sukma Saputra", $waktu = "Shubuh")
{
    return "Selamat $nama, $waktu";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= salam("hujan", "Pagi") ?></h1>
</body>

</html>