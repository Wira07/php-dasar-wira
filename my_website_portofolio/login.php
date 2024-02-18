<?php

include 'functions.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Sukma Saputra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../my_website_portofolio/plugins/fontawesome-free/css/style.css">
</head>

<body>

    <!-- Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- Left -->
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column-end left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="../my_website_portofolio/gambar/5.jpeg" alt="Wira Sukma Saputra" class="img-fluid" style="width: 380px; margin-top: 20px;">
                    <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: bold;">Be Verified</p>
                    <small class="text-white text-wrap text-center" style="width: 17rem;">Wira Sukma Saputra</small>
                </div>
            </div>
            <!-- Right -->
            <div class="col-md-6">
                <div class="row align-items-center p-4">
                    <div class="header-text mb-4">
                        <h2>Hello, Wira</h2>
                        <p>We are great English speakers</p>
                    </div>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <label for="Username" class="form-label">Username</label>
                            <input type="Username" id="Username" class="form-control" style="width: 500px;" placeholder="Username" name="username">
                        </div>
                        <div class="input-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" style="width: 500px;" placeholder="Password" name="password">
                        </div>
                        <div class="input-group mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div class="forgot ms-auto">
                                <small><a href="#">Forgot Password</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" name="login">Login</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="../pertemuan_5/images/google.png" alt="google" style="width: 20px;"><small class="me-2">Sign In With Google</small></button>
                        </div>
                        <div class="row">
                            <small>Don't Have Account? <a href="#">Sign Up</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>