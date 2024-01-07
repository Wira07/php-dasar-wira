<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Boxicon CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fontawome CSS -->
    <link rel="stylesheet" href="../pertemuan_6/fontawesome-free-6.5.1-web/css/all.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../pertemuan_6/admin.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Selamat Datang Admin | Universitas Kuningan</a>

            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="icon ms-4">
                <h5>
                    <i class='bx bxs-envelope me-3' data-toggle="tooltip" title="Surat Masuk"></i>
                    <i class='bx bxs-bell-plus me-3' data-toggle="tooltip" title="Surat Masuk"></i>
                    <i class='bx bx-log-out me-3' data-toggle="tooltip" title="Surat Masuk"></i>
                </h5>
            </div>
        </div>
        </div>
    </nav>
    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 px-3 pt-4">
            <ul class="nav flex-column mx-3 mb-5" style="font-size: 13px;">
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="#"><i class='bx bxs-dashboard mx-2'></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <hr class="border-top my-3">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class='bx bxs-user-circle mx-2'></i>Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <hr class="border-top my-3">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa-solid fa-chalkboard-user mx-2"></i>Daftar Dosen</a>
                </li>
                <li class="nav-item">
                    <hr class="border-top my-3">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa-solid fa-address-book mx-2"></i>Daftar Pegawai</a>
                </li>
                <li class="nav-item">
                    <hr class="border-top my-3">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa-solid fa-calendar-days mx-2"></i>Jadwal Kuliah</a>
                </li>
                <li class="nav-item">
                    <hr class="border-top my-3">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-4">
            <h3><i class='bx bxs-dashboard mx-2'></i> Dashboard</h3>
            <hr>
            <div class="row text-white">
                <div class="card bg-info mx-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <h5 class="card-title">Jumlah Mahasiswa</h5>
                        <div class="display-4 fw-bold">3500</div>
                        <a href="" style="text-decoration: none;">
                            <p class="card-text text-white">Lihat Detail <i class="fa-solid fa-angles-right mx-2"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="../pertemuan_6/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>