<?php

include "koneksi.php";

if (isset($_POST["name"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $koneksi->query($sql);


    if ($result->num_rows > 0) {
        echo "berhasil";
    } else {
        echo "gagal";
    }

    // echo "$username $password";
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

    <h3>Masuk Akun</h3>
    <form action="login.php" method="post" style="margin-top: 20px;">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" name="name">Masuk</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>

</html>