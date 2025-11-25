<?php
session_start();
include '../../app.php'; // koneksi database

// cek form sudah di submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = escapeString($_POST['username']);
    $email = escapeString($_POST['email']);
    $password = $_POST['password'];

    // cek apakah email dan password sesuai
    $cekQuery = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $cekQuery);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['admin_logged_in'] = true;
        echo "<script>
                alert('Register berhasil, silahkan login');
                window.location.href='../../pages/user/login.php';
            </script>";
        exit();
    }

    // hash password = fungsi konversi data password ke sandi encrypt
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    // simpan data pengguna baru
    $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashPassword')";
    if (mysqli_query($connect, $insertQuery)) {
        echo "<script>
                alert('Registrasi berhasil');
                window.location.href='../../pages/user/login.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal register');
                window.location.href='../../pages/user/register.php';
            </script>";
    }
}
