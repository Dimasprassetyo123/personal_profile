<?php
include '../config/connection.php';

$qAbouts = "SELECT * FROM abouts";
$result_about = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));
$qResume = "SELECT * FROM resumes";
$result_resume = mysqli_query($connect, $qResume) or die(mysqli_error($connect));
$itemAbout =$result_about->fetch_object();
    
?>

<!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <p>"Rangkuman perjalanan pendidikan dan pengalaman kerja saya, menampilkan perkembangan kompetensi di bidang teknologi informasi dan pengembangan web.".</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <!-- Left column with summary and contact -->
                    <div class="col-lg-4 h-100">
                        <div class="resume-side" data-aos="fade-right" data-aos-delay="100">
                            <div class="profile-img mb-4">
                                <img src="../storages/about/<?= $itemAbout->image ?>" alt="Profile" class="img-fluid rounded">
                            </div>

                            <h3>Potret Saya</h3>
                            <p><?=$itemAbout->description?></</p>

                            <h3 class="mt-4">Contact Information</h3>
                            <ul class="contact-info list-unstyled">
                                <li><i class="bi bi-geo-alt"></i> <?=$itemAbout->address?></li>
                                <li><i class="bi bi-envelope"></i> <?=$itemAbout->email?></li>
                                <li><i class="bi bi-phone"></i> <?=$itemAbout->phone?></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right column with experience and education -->
                    <div class="col-lg-8 ps-4 ps-lg-5">
                        <!-- Experience Section -->
                        <div class="resume-section" data-aos="fade-up">
                            <h3><i class="bi bi-briefcase me-2"></i>Data Riwayat</h3>

                           <?php while ($itemResume = $result_resume->fetch_object()): ?>
                        <div class="resume-item">
                            <h4><?= $itemResume->job ?></h4>
                            <h5><?= $itemResume->date ?></h5>
                            <p class="company"><i class="bi bi-building"></i><?= $itemResume->place ?></p>
                            <ul>
                                <li><?= $itemResume->description ?></li>
                            </ul>
                        </div>
                    <?php endwhile; ?>

                        <!-- Education Section -->
                        <!-- <div class="resume-section" data-aos="fade-up" data-aos-delay="100">
                            <h3><i class="bi bi-mortarboard me-2"></i>Education</h3>

                            <div class="resume-item">
                                <h4>Master of Science in Computer Science</h4>
                                <h5>2017 - 2019</h5>
                                <p class="company"><i class="bi bi-building"></i> Stanford University</p>
                                <p>Specialized in Artificial Intelligence and Machine Learning. Graduated with honors.</p>
                            </div>

                            <div class="resume-item">
                                <h4>Bachelor of Science in Software Engineering</h4>
                                <h5>2013 - 2017</h5>
                                <p class="company"><i class="bi bi-building"></i> MIT</p>
                                <p>Dean's List all semesters. Led university's coding club.</p>
                            </div>
                        </div> -->

                        <!-- Certifications Section -->
                        <!-- <div class="resume-section" data-aos="fade-up" data-aos-delay="200">
                            <h3><i class="bi bi-award me-2"></i>Certifications</h3>

                            <div class="resume-item">
                                <h4>AWS Certified Solutions Architect - Professional</h4>
                                <h5>2023</h5>
                            </div>

                            <div class="resume-item">
                                <h4>Google Cloud Professional Architect</h4>
                                <h5>2022</h5>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>

        </section>