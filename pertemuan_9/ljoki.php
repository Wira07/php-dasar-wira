<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "wira_admin");
    $ambil = mysqli_query($conn, "SELECT * FROM wira admin");
    ?>
</body>

</html>