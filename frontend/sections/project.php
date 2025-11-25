<?php
    $qProject = "SELECT * FROM projects";
    $result = mysqli_query($connect, $qProject) or die(mysqli_error($connect));
?>

<section id="project" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>List Project</h2>
        <p>Daftar project yang telah dibuat beserta detailnya.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row">
                <div class="col-lg-3 filter-sidebar">
                    <div class="filters-wrapper" data-aos="fade-right" data-aos-delay="150">
                        <ul class="portfolio-filters isotope-filters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <?php
                                $qCategory = mysqli_query($connect, "SELECT DISTINCT category FROM projects");
                                while($row = mysqli_fetch_object($qCategory)):
                                    $categorySlug = strtolower($row->category); // untuk class filter
                            ?>
                            <li data-filter=".filter-<?= $categorySlug ?>">
                                <?= ucfirst($row->category) ?>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <?php while ($project = $result->fetch_object()): ?>
                        <div
                            class="col-lg-6 col-md-6 portfolio-item isotope-item filter-<?= strtolower($project->category) ?>">
                            <div class="portfolio-wrap">
                                <img src="../storages/project/<?= $project->image ?>" class="img-fluid"
                                    alt="<?= htmlspecialchars($project->title) ?>" loading="lazy">
                                <div class="portfolio-info">
                                    <div class="content">
                                        <span class="category"><?= ucfirst($project->category) ?></span>
                                        <h4><?= htmlspecialchars($project->title) ?></h4>
                                        <div class="portfolio-links">
                                            <a href="../storages/project/<?= $project->image ?>" class="glightbox"
                                                title="<?= htmlspecialchars($project->title) ?>"><i
                                                    class="bi bi-plus-lg"></i></a>
                                            <a href="portfolio-details.php?id=<?= $project->id ?>"
                                                title="More Details"><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>

                    </div><!-- End Portfolio Container -->
                </div>
            </div>

        </div>

    </div>

</section>