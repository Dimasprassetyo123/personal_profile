<?php
include_once '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    // Validate inputs exist before using them
    if (!isset($_POST['skill']) || !isset($_POST['percent'])) {
        die("Required fields are missing");
    }

    $skill = escapeString($_POST['skill']);
    $percent = intval($_POST['percent']); // Ensure this is an integer

    // Validate the percentage is between 0-100
    if ($percent < 0 || $percent > 100) {
        die("Percentage must be between 0 and 100");
    }

    // Make sure $id is properly set (should come from your show.php or form)
    if (!isset($id) || !is_numeric($id)) {
        die("Invalid ID");
    }

    // Use prepared statements to prevent SQL injection
    $qUpdate = "UPDATE skills SET skill=?, percent=? WHERE id=?";
    $stmt = mysqli_prepare($connect, $qUpdate);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sii", $skill, $percent, $id);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo "
                <script>
                    alert('Data berhasil diubah');
                    window.location.href='../../pages/skill/index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal diubah: " . mysqli_error($connect) . "');
                    window.location.href='../../pages/skill/update.php?id=$id';
                </script>
            ";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "
            <script>
                alert('Prepared statement failed');
                window.location.href='../../pages/skill/update.php?id=$id';
            </script>
        ";
    }
}