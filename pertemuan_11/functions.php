<?php
$con = mysqli_connect("localhost", "root", "", "wira_sukma_saputra");

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

    $query = "INSERT INTO mahasiswa VALUES ('', '$Nama', '$Nim', '$Email', '$Alamat', '$Kelas', '$Prodi', '$Gambar')";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function hapus($id)
{
    global $con;
    mysqli_query($con, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($con);
}



?>