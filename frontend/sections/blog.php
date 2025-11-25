<?php
include '../config/connection.php';
$qBlogs = "SELECT * FROM blogs";
$result = mysqli_query($connect, $qBlogs) or die(mysqli_error($connect));
?>
<!-- blog Section -->
<section id="blog" class="services section">

    <!-- Blog Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Blog</h2>
        <p>"Kumpulan project web, animasi, dan dokumentasi karya saya. Selamat mengeksplorasi!"</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <?php while ($item = $result->fetch_object()): ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card position-relative z-1 h-100">
                    <div class="service-icon">
                        <img src="../storages/blog/<?= $item->image ?>" alt="gambar" class="img-fluid">
                    </div>
                    <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                    <h3>
                        <a href="service-details.html">
                            <?= $item->tittle ?>
                        </a>
                    </h3>
                    <p>
                        <?= $item->description ?>
                    </p>
                </div>
                
            </div>
        <?php endwhile; ?>
        </div>

    </div>

</section>
<!-- end blog Section -->