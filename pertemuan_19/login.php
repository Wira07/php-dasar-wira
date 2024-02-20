<?php
session_start();  // Starting Session

include 'functions.php';

// cek cookie
// if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true') {
//     $_SESSION['login'] = true;
// }

if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true') {
    // $_SESSION['login'] = true;
    $id = $_COOKIE['zokiin'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($con, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}


if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['Password'])) {
            // set session
            $_SESSION["login"] = true;
            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('zokiin', $row['id'], time() + (86400 * 30), '/'); // expired dalam 30 hari
                setcookie('key', hash('sha256', $row['username']), time() + (86400 * 30), '/' );
                // setcookie('login', 'true', time() + 60);
            }
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wira07 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Silahkan Login </b>Wira07</a>
        </div>
        <!-- /.login-logo -->
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger text-center" role="alert">
                Username atau Password salah
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body login-card-body">
                <div class="logo-login text-center">
                    <a href=""><img src="https://i.pinimg.com/736x/c3/5d/26/c35d26d4694c379de137772659a40124.jpg" alt="Your Image" style="max-width: 150px;"></a>
                    <p class="text-lg">Selamat Datang</p>
                </div>
                <!-- Form Login -->
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <p class="mb-1">
                    <a href="">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.php" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>