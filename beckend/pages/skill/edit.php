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
                    Edit Data Skill
                </h5>
            </div>
            <div class="card-body">
                <?php
                include '../../action/skill/show.php';
                ?>
                <form action="../../action/skill/update.php?id=<?= $skill->id ?>" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="skillInput" class="form-label">Skill</label>
                        <input type="text" name="skill" id="iconInput" class="form-control" placeholder="Masukkan skil anda..." required value="<?= $skill->skill ?>">
                    </div>

                    <div class="mb-3">
                        <label for="percentInput" class="form-label">Persen</label>
                        <input type="number" name="percent" min="0" max="100" id="percentInput" class="form-control" placeholder="Masukkan icon social media..." required value="<?= $skill->percent ?>">
                    </div>

                    <div class="d-flex gap-3 mt-4">
                        <button type="submit" class="btn btn-success" name="tombol"><i class="bi bi-pen-fill"> Edit</i></button>
                        <a href="./index.php" class="btn btn-primary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>