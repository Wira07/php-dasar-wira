<?php
$con = mysqli_connect("localhost", "root", "", "my_portofolio");

// ambil data dari table user
$mahasiswa = query("SELECT * FROM user");

function query($query)
{
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function register($data)
{
    global $con;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($con, $data["password"]);
    $password2 = mysqli_real_escape_string($con, $data["confirm_password"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($con, "SELECT username FROM user WHERE username = '$username'");
    
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }

    // Cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
            </script>";
        return false;
    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // Buat query untuk menambahkan data ke database
    $query = "INSERT INTO user VALUES ('', '$username', '$password')";
    mysqli_query($con, $query);

    // Setelah pengguna berhasil mendaftar, redirect ke index.php
    if(mysqli_affected_rows($con) > 0) {
        header("Location: login.php");
        exit;
    } else {
        echo "<script>
                alert('Gagal mendaftar!');
            </script>";
        return false;
    }
}


?>
