<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "personal_profile";

    // Membuat koneksi database
    $connect = mysqli_connect( $hostname, $username, $password, $database);
    
    // Cek koneksi
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>