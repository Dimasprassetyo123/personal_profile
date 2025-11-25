<?php
    include '../../app.php';

    session_start();
    // Hapus semua session
    session_unset();
    session_destroy();

    echo "<script>
        alert('Anda telah logout');
        window.location.href='../../pages/user/login.php'; // redirect ke halaman login
    </script>";
?>