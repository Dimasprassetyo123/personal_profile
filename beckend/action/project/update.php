<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $title = escapeString($_POST['title']);
    $job = escapeString($_POST['job']);
    $description = escapeString(($_POST['description']));
    $category = escapeString(($_POST['category']));

    $imageNew = $project->image;
    $storages = "../../../storages/project/";

    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';
        if (!empty($project->image) && file_exists($storages . $project->image)) {
            unlink($storages . $project->image);
        }
        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }
    // update data sesuai id
    $qUpdate = "UPDATE projects SET job='$job', title='$title', category='$category', description='$description', image='$imageNew' WHERE id='$id'";
    // update ke databases
    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {  // kirim ke databases

        // kalau berhasil muncul komen berikut
        echo "
            <script>
                alert('Data berhasil diubah');
                window.location.href='../../pages/project/index.php';
            </script>
        ";
    } else {
        // jika tidak muncul komen berikut
        echo "
            <script>
                alert('Data gagal di ubah');
                window.location.href='../../pages/project/create.php';
            </script>
        ";
    }
}
