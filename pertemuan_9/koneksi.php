<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "wira_admin";

    $koneksi = mysqli_connect($hostname, $username, $password, $database);

    
    // $result = mysqli_query($koneksi, "SELECT * FROM wira_admin");
    // var_dump($result);

    if($koneksi->connect_error) {
        echo "koneksi berhasi";
        die("error");
    }
?>
