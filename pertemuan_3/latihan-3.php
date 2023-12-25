<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Sukma Saputra</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
            font-weight: bold;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <?php
    $hari = array("Wira", "Sukma", "Saputra");
    echo "<br>";
    $bulan = ["Januari", "Februari", "Maret"];
    $wira = [100, "Text", true];
    var_dump($hari);
    print_r($bulan);
    // menampilkan element pada array
    echo $bulan[0]
    ?>

    <?php
    $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    ?>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?> </div>
    <?php endforeach; ?>
</body>

</html>