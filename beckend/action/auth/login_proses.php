<?php
session_start();
include '../../app.php'; // koneksi database

// cek form sudah di submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = escapeString($_POST['email']);
    $password = $_POST['password'];

    // cek apakah email dan password sesuai
    $qlogin = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $qlogin) or die(mysqli_error($connect));

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: ../../pages/dashboard/index.php');
            exit();
        } else {
            echo "<script>
                    alert('Email atau password salah');
                    window.location.href='../../pages/user/login.php';
                </script>";
        }
    } else {
        echo "<script>
                alert('Email tidak ditemukan');
                window.location.href='../../pages/user/login.php';
            </script>";
    }
}