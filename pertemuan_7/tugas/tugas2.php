<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
            animation: fadeInUp 1s ease-out;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: center;
            animation: fadeIn 1.5s ease-out;
        }

        li {
            margin: 10px;
            font-size: 1.2em;
            color: #555;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            background-color: #4caf50;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        a:hover {
            background-color: #45a049;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <h1>Selamat Datang, <?= $_POST["nama"] ?></h1>
    <ul>
        <li><?= $_POST["nim"] ?></li>
        <li><?= $_POST["email"] ?></li>
        <li><?= $_POST["jurusan"] ?></li>
        <li><?= $_POST["alamat"] ?></li>
        <a href="tugas1.php">Kembali Ke awal</a>
    </ul>
</body>

</html>