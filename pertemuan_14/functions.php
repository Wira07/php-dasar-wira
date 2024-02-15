<?php
$con = mysqli_connect("localhost", "root", "", "fkom_uniku");

// ambil data dari table mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
// $result = mysqli_query($con, "SELECT * FROM mahasiswa");

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

function Tambah($data)
{
    global $con;
    $Nama = htmlspecialchars($data["Nama"]);
    $Nim = htmlspecialchars($data["Nim"]);
    $Email = htmlspecialchars($data["Email"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $Kelas = htmlspecialchars($data["Kelas"]);
    $Prodi = htmlspecialchars($data["Prodi"]);
    $Gambar = htmlspecialchars($data["Gambar"]);

    // Cek apakah NIM sudah ada di database
    $result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE Nim = '$Nim'");
    if(mysqli_num_rows($result) > 0) {
        // Jika NIM sudah ada, beri pesan kesalahan atau lakukan tindakan lain sesuai kebutuhan aplikasi
        return false; // Mengembalikan false untuk menunjukkan bahwa operasi tambah gagal
    } else {
        // Jika NIM belum ada, lanjutkan operasi tambah data
        $query = "INSERT INTO mahasiswa VALUES ('', '$Nama', '$Nim', '$Email', '$Alamat', '$Kelas', '$Prodi', '$Gambar')";
        mysqli_query($con, $query);
        return mysqli_affected_rows($con);
    }

    // $query = "INSERT INTO mahasiswa VALUES ('', '$Nama', '$Nim', '$Email', '$Alamat', '$Kelas', '$Prodi', '$Gambar')";
    // mysqli_query($con, $query);

    // return mysqli_affected_rows($con);
}

function hapus($id)
{
    global $con;
    mysqli_query($con, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($con);
}

function Edit($data)
{
    global $con;
    $id = $data["id"];
    $Nama = htmlspecialchars($data["Nama"]);
    $Nim = htmlspecialchars($data["Nim"]);
    $Email = htmlspecialchars($data["Email"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $Kelas = htmlspecialchars($data["Kelas"]);
    $Prodi = htmlspecialchars($data["Prodi"]);
    $Gambar = htmlspecialchars($data["Gambar"]); // Sebaiknya jangan gunakan htmlspecialchars untuk nama file gambar

     // Cek apakah NIM sudah ada di database selain data yang akan diedit
     $result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE Nim = '$Nim' AND id != $id");
     if(mysqli_num_rows($result) > 0) {
         // Jika NIM sudah ada, beri pesan kesalahan atau lakukan tindakan lain sesuai kebutuhan aplikasi
         return false; // Mengembalikan false untuk menunjukkan bahwa operasi edit gagal
     } else {
         // Jika NIM belum ada, lanjutkan operasi edit data
            $query = "UPDATE mahasiswa SET
                        Nama = '$Nama',
                        Nim = '$Nim',
                        Email = '$Email',
                        Alamat = '$Alamat',
                        Kelas = '$Kelas',
                        Prodi = '$Prodi',
                        Gambar = '$Gambar'
                        WHERE id = $id
                        ";
            mysqli_query($con, $query);
            return mysqli_affected_rows($con);
        }

    // Perbaikan kueri SQL dengan menggunakan tanda kutip untuk string dan mengakses variabel $id
    $query = "UPDATE mahasiswa SET
                Nama = '$Nama',
                Nim = '$Nim',
                Email = '$Email',
                Alamat = '$Alamat',
                Kelas = '$Kelas',
                Prodi = '$Prodi',
                Gambar = '$Gambar'
                WHERE id = $id
                ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE
                Nama LIKE '%$keyword%' OR
                Nim LIKE '%$keyword%' OR
                Email LIKE '%$keyword%' OR
                Alamat LIKE '%$keyword%' OR
                Kelas LIKE '%$keyword%' OR
                Prodi LIKE '%$keyword%'
                ";
    return query($query);
}

?>