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
                <h5>Edit Data Project</h5>
            </div>
            <div class="card-body">
                <?php include '../../action/project/show.php'; ?>

                <form action="../../action/project/update.php?id=<?= $project->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <img src="../../../storages/project/<?= $project->image ?>" alt="Gambar" width="100px" height="100" class="mb-3">
                        <input type="file" name="image" class="form-control" id="imageInput">
                    </div>

                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control" id="titleInput"
                            placeholder="Masukan Judul Project..." required
                            value="<?= htmlspecialchars($project->title) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="job" class="form-control" id="jobInput"
                            placeholder="Masukan Pekerjaan..." required
                            value="<?= htmlspecialchars($project->job) ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="category" aria-label="Default" required value="<?= $projects->category ?>">
                            <option disabled <?= empty($project->category) ? 'selected' : '' ?>>
                                Pilih Kategori
                            </option>
                            <option value="multimedia" <?= ($project->category == 'multimedia') ? 'selected' : '' ?>>
                                Multimedia
                            </option>
                            <option value="prestasi" <?= ($project->category == 'prestasi') ? 'selected' : '' ?>>
                                Prestasi
                            </option>
                            <option value="programing" <?= ($project->category == 'programing') ? 'selected' : '' ?>>
                                Programing
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" id="descriptionInput"
                            rows="5" required><?= htmlspecialchars($project->description) ?></textarea>
                    </div>


                    <div class="mt-4">
                        <button type="submit" class="btn btn-success" name="tombol">
                            <i class="bi bi-pen-fill"></i> Edit
                        </button>
                        <a href="./index.php" class="btn btn-primary">
                            <i class="bi bi-box-arrow-left"></i> Kembali
                        </a>
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