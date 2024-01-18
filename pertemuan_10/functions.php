<?php
$con = mysqli_connect("localhost", "root", "", "wira_sukma_saputra");
// ambil data dari table mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

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
?>