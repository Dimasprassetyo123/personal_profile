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
                    Detail Data About
                </h5>
            </div>
            <div class="card-body">
                <?php
                include '../../action/about/show.php';
                ?>
                <form>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" value="<?= $about->name ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="bornInput" class="form-label">Tenggal Lahir</label>
                        <input type="date" class="form-control" value="<?= $about->born ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="zip_kodeInput" class="form-label">Kode Post</label>
                        <input type="number" class="form-control" value="<?= $about->zip_code ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" value="<?= $about->email ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">No.Telpon</label>
                        <input type="text" class="form-control" value="<?= $about->phone ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for=total_projectInput" class="form-label">Total Projek</label>
                        <input type="text" class="form-control" value="<?= $about->total_project ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="workInput" class="form-label">Pekerjaan Sekarang</label>
                        <input type="text" class="form-control" value="<?= $about->work ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Alamat</label>
                        <textarea class="form-control" rows="5" disabled><?= $about->address ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="5"><?= $about->description ?></textarea>
                    </div>

                    <div class="mb-3">
                        <h6>Gambar</h6>
                        <<img class="w-25" src="../../../storages/about/<?= $about->image ?>" alt="">
                    </div>
                    <a href="index.php" class="btn btn-primary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>