<?php
    include '../../app.php';
    
    $qDelete = "DELETE FROM contacts WHERE id = '$contact->id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

    // cek apakah data berhasil dihapus atau tidak
    if ($result){
        echo"
        <script>
            alert('Data berhasil dihapus');
            window.location.href='../../pages/contact/index.php';
        </script>
        ";
        echo"
        <script>
            alert('Data gagal dihapus');
            window.location.href='../../pages/contact/index.php';
        </script>
        ";
    }
?>