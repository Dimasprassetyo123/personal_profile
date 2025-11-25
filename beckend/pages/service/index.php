<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';

    $qServices = "SELECT * FROM services";
    $result = mysqli_query($connect, $qServices) or die(mysqli_error($connect)); 
?>

<!--content about-->
   <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Service</h5>
                <a href="./create.php" class="btn btn-primary"><i class="bi bi-plus-lg"> Tambah Data</i></a>
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-capitalize">
                                <th>No</th>
                                <th>Ikon</th>
                                <th>Pekerjaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                while($item =$result->fetch_object()):
                            ?>
                            <tr>
                                 <td><?= $no?></td>
                                  <td>
                                    <i class="<?= $item->icon ?>" style="font-size:2rem"></i>
                                  </td>
                                <td><?=$item->job?></td>
                                <td>
                                    <a href="./edit.php?id=<?= $item->id?>" class="btn btn-warning"><i class="bi bi-pen-fill"> Edit</i></a>
                                    <a href="../../action/service/destroy.php?id=<?= $item->id?>" class="btn btn-danger" 
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