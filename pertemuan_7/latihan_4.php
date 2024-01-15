<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (isset($_POST["submit"])) : ?>
        <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    
    



    <form action="latihan_5.php" method="post">
        Masukan Nama : <input type="text" name="nama">
        <br><br>
        Masukan NRP : <input type="text" name="nrp">
        <br><br>
        Masukan Email : <input type="text" name="email">
        <br><br>
        Masukan Jurusan : <input type="text" name="jurusan">
        <br><br>
        Masukan Gambar : <input type="text" name="gambar">
        <br><br>
        Masukan Fakultas : <input type="text" name="fakultas">
        <br><br>
        Masukan Jenis Kelamin : <input type="text" name="jenis_kelamin">
        <br><br>
        Masukan Alamat : <input type="text" name="alamat">
        <br><br>
        Masukan No. Telepon : <input type="text" name="no_telepon">
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>