<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wira Sukma Saputra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../tugas/style.css">
</head>

<body>
    <?php
    // cek apakah tombol submit sudah di tekan atau belum
    if (isset($_POST["submit"])) {
        // cek username & password
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            // jika benar, redirect ke halaman admin
            header("Location: tugas4.php");
            exit;
        } else {
            // jika salah, tampilkan pesan kesalahan
            $error = true;
        }
    }
    ?>

    <!-- Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounder-5 p-3 bg-white shadow box-area">
            <!-- Left -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-item-center flex-column-end left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="../tugas/images/1.png" alt="Wira Sukma Saputra" class="image-fluid" style="width: 380px; margin-top: 20px;">
                    <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: bold;">Be Verivied</p>
                    <small class="text-white text-wrap text-center" style="width: 17rem;">Wira Sukma Saputra</small>
                </div>
            </div>
            <!-- Right -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center p-4">
                    <div class="header-text mb-4">
                        <h2>Hello, Wira</h2>
                        <p>We are great english speakers</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control-lg bg-light fs-6" style="width: 500px;" placeholder="Emaill Address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control-lg bg-light fs-6" style="width: 500px;" placeholder="Password">
                    </div>
                    <form action="tugas4.php" method="post" class="input-group mb-6 d-flex justify-content-between">
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary "><small>Remember Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot Password</a></small>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="submit">Login</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="../tugas/images/google.png" alt="google" style="width: 20px;"><small class="me-2">Sign In With Google</small></button>
                        </div>
                        <div class="row">
                            <small>Don't Have Account? <a href="#">Sign Up</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password Salah!</p>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>