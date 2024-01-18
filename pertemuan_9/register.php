<?php
include "koneksi.php";

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

    if ($koneksi->query($sql)) {
        echo "berhasil";
    } else {
        echo "gagal";
    }
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

    <?php include "layout/header.html" ?>
    <h3>Daftar Sekarang</h3>

    <form action="register.php" method="post" style="margin-top: 20px;">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Usernane">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" name="register">Daftar</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>

</html>