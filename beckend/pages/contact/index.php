<?php
include "../../partials/header.php";
include "../../partials/sidebar.php";
include "../../partials/navbar.php";

$qcontacts = "SELECT * FROM contacts";
$result = mysqli_query(mysql: $connect, query: $qcontacts) or die(mysqli_error(mysql: $connect));

?>

<!-- content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Contact</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subjek</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($item = $result->fetch_object()):
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $item->name ?></td>
                                    <td><?= $item->email ?></td>
                                    <td><?= $item->subjects ?></td>
                                    <td><?= $item->massage ?></td>

                                    <td>
                                        <a href="../../action/contact/destroy.php?id=<?= $item->id ?>" class="btn btn-danger"
                                            oneclick="return confirm ('Apakah anda yakin?')">Hapus</a>
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
include "../../partials/script.php";
include "../../partials/footer.php";
?>