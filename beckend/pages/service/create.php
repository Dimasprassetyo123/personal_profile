<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<!-- content -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h5>Tambah Service</h5>
      </div>
      <div class="card-body">
        <form action="../../action/service/store.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="iconInput" class="form-label">Icon</label>
            <input type="text" name="icon" id="iconInput" class="form-control" placeholder="Masukkan icon service..." required>
          </div>
          <div class="mb-3">
            <label for="jobInput" class="form-label">Job</label>
            <input type="text" name="job" id="jobInput" class="form-control" placeholder="Masukkan nama service..." required>
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