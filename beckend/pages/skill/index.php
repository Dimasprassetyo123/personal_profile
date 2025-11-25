<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';

    $qSkills = "SELECT * FROM skills";
    $result = mysqli_query($connect, $qSkills) or die(mysqli_error($connect)); 
?>

<!--content about-->
   <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel skill</h5>
                <a href="./create.php" class="btn btn-primary"><i class="bi bi-plus-lg"> Tambah Data</i></a>
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Skill</th>
                                <th>Persent</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                while($item =$result->fetch_object()):
                            ?>
                            <tr class="text-capitalize">
                                 <td><?= $no?></td>
                                 <td><?=$item->skill?></td>
                                 <td><?=$item->percent?></td>
                                 <td>

                                    <a href="./edit.php?id=<?= $item->id?>" class="btn btn-warning"><i class="bi bi-pen-fill"> Edit</i></a>
                                    <a href="../../action/skill/destroy.php?id=<?= $item->id?>" class="btn btn-danger" 
                                    onclick="return confirm('Apakah Anda Yakin')"><i class="bi bi-trash3-fill"> Hapus</i></a>
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
   </div>
   <?php
    include '../../partials/footer.php';
    include '../../partials/script.php';
    ?>