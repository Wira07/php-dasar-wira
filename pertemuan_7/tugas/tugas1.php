<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin-top: 300px;
        margin-bottom: 300px;
    }

    img {
        width: 50%;
        height: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 150px;
        margin: auto;
        border-radius: 50px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

<body>

    <form method="post" action="tugas2.php">
        <img src="https://i.pinimg.com/564x/2b/b5/45/2bb5457d792451c80ed2e128b0804577.jpg" alt="gambar">
        Masukan Nama :
        <input type="text" name="nama">
        <br><br>
        Masukan NIM :
        <input type="text" name="nim">
        <br><br>
        Masukan Email :
        <input type="text" name="email">
        <br><br>
        Masukan Jurusan :
        <input type="text" name="jurusan">
        <br><br>
        Masukan Alamat :
        <input type="text" name="alamat">
        <button type="submit" name="submit">Kirim!!</button>
    </form>
</body>

</html>