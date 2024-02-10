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
    $Nama = $data["Nama"];
    $Nim = $data["Nim"];
    $Email = $data["Email"];
    $Alamat = $data["Alamat"];
    $Kelas = $data["Kelas"];
    $Prodi = $data["Prodi"];
    $Gambar = $data["Gambar"];

    $query = "INSERT INTO mahasiswa VALUES ('', '$Nama', '$Nim', '$Email', '$Alamat', '$Kelas', '$Prodi', '$Gambar')";
    mysqli_query($con, $query);

}
?>