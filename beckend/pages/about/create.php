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
                    Tambah Data About
                </h5>
            </div>
            <div class="card-body">
                <form action="../../action/about/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukan Nama Anda..." required>
                    </div>

                    <div class="mb-3">
                        <label for="bornInput" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="born" class="form-control" id="bornInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="zip_codeInput" class="form-label">Kode Pos</label>
                        <input type="number" name="zip_code" class="form-control" id="zip_codeInput" placeholder="Masukan Kode Post...." required>
                    </div>

                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="emaiInput" placeholder="Masukan Email...." required>
                    </div>

                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">No.Telpon</label>
                        <input type="text" name="phone" class="form-control" id="phoneInput" placeholder="Masukan No Phone...." required>
                    </div>

                    <div class="mb-3">
                        <label for=total_projectInput" class="form-label">Total Projek</label>
                        <input type="text" name="total_project" class="form-control" id="total_projectInput" placeholder="Masukan Total Projek...." required>
                    </div>

                    <div class="mb-3">
                        <label for="workInput" class="form-label">Pekerjaan Sekarang</label>
                        <input type="text" name="work" class="form-control" id="workInput" placeholder="Pekerjaan sekaarang" required>
                    </div>

                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Alamat</label>
                        <textarea name="address" class="form-control" placeholder="Masukan Alamat...." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Pilih Gambar</label>
                        <input type="file" name="image" class="form-control" id="imageInput" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="tombol"><i class="bi bi-arrow-down-circle-fill"> Simpan</i></button>
                    <a href="./index.php" class="btn btn-secondary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>