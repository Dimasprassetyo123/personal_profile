<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qProjects = "SELECT * FROM projects";
$result = mysqli_query($connect, $qProjects) or die(mysqli_error($connect));
?>

<!--content about-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Project</h5>
                <a href="./create.php" class="btn btn-primary"><i class="bi bi-plus-lg"> Tambah Data</i></a>
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Pekerjaan</th>
                                <th>Description</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($item = $result->fetch_object()):
                            ?>
                                <tr class="text-capitalize">
                                    <td><?= $no ?></td>
                                    <td>
                                        <img src="../../../storages/project/<?= $item->image ?>"
                                            alt="Gambar" width="100px" height="100">
                                    </td>
                                    <td><?= $item->title ?></td>
                                    <td><?= $item->job ?></td>
                                    <td><?= $item->description ?></td>
                                    <td><?= $item->category ?></td>
                                    <td>
                                        <div class="d-grid gap-2" style="min-width: 120px;">
                                            <!-- Edit Button -->
                                            <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pen-fill"></i> Edit
                                            </a>

                                            <!-- Delete Button -->
                                            <a href="../../action/project/destroy.php?id=<?= $item->id ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda Yakin?')">
                                                <i class="bi bi-trash3-fill"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    include '../../partials/footer.php';
    include '../../partials/script.php';
    ?>