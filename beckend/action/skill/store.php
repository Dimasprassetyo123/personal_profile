<?php
include '../../app.php';

if (isset($_POST['tombol'])){
    $skill = escapeString($_POST['skill']);
    $percent = (int)$_POST['percent'];

    $qInsert = "INSERT INTO skills(skill, percent) VALUES('$skill', '$percent')";
    if (mysqli_query($connect, $qInsert)) {
        echo "<script>alert('Data berhasil ditambahkan');\n window.location.href = '../../pages/skill/index.php';\n </script>\n ";
    } else {
        echo "<script>alert('Data gagal ditambah'); window.location.href = '../../pages/skill/create.php';</script>";
    }
}
?>