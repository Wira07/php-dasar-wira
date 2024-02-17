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
    // $Gambar = htmlspecialchars($data["Gambar"]); // Sebaiknya jangan gunakan htmlspecialchars untuk nama file gambar

    $Gambar = upload();
    if(!$Gambar) {
        return false;
    }

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

function upload() {

    $namaFile = $_FILES['Gambar']['name'];
    $ukuranFile = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmpName = $_FILES['Gambar']['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if (!$error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Yang Anda upload bukan gambar!');k
            </script>";
        return false;
    }

    // Cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // Generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
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