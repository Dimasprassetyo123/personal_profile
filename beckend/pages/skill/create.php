<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>
<!--content-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Tambah Data Skill
                </h5>
            </div>
            <div class="card-body">
                <form action="../../action/skill/store.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="skillInput" class="form-label">Skill</label>
                        <input type="text" name="skill" class="form-control" id="skillInput" placeholder="Masukan Skill Anda..." required>
                    </div>

                    <div class="mb-3">
                        <label for=percentInput" class="form-label">Persen</label>
                        <input type="number" name="percent" class="form-control" id="percentInput" placeholder="Persen Skil Anda..." required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="tombol"><i class="bi bi-arrow-down-circle-fill"> Simpan</i></button>
                    <a href="index.php" class="btn btn-secondary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>