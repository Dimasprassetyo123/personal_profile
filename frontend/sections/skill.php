<!-- Skills Section -->
<?php
include '../config/connection.php';

// Query untuk frontend skills (HTML, CSS)
$frontendQuery = "SELECT * FROM skills WHERE skill IN ('HTML', 'CSS') ORDER BY FIELD(skill, 'HTML', 'CSS')";
$frontendResult = mysqli_query($connect, $frontendQuery);

// Query untuk backend skills (Laravel, PHP)
$backendQuery = "SELECT * FROM skills WHERE skill IN ('Laravel', 'PHP') ORDER BY FIELD(skill, 'Laravel', 'PHP')";
$backendResult = mysqli_query($connect, $backendQuery);
?>

<section id="skills" class="skills section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>"Kombinasi keterampilan front-end dan back-end yang saya kuasai, dikembangkan melalui pembelajaran intensif dan penerapan langsung dalam proyek nyata."</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <!-- Front-end Development (HTML, CSS) -->
            <div class="col-lg-6">
                <div class="skills-category" data-aos="fade-up" data-aos-delay="200">
                    <h3>Front-end Development</h3>
                    <div class="skills-animation">
                        <?php while ($item = $frontendResult->fetch_object()): ?>
                            <div class="skill-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4><?= $item->skill ?></h4>
                                    <span class="skill-percentage"><?= $item->percent ?>%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                        aria-valuenow="<?= $item->percent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

            <!-- Back-end Development (Laravel, PHP) -->
            <div class="col-lg-6">
                <div class="skills-category" data-aos="fade-up" data-aos-delay="300">
                    <h3>Back-end Development</h3>
                    <div class="skills-animation">
                        <?php while ($item = $backendResult->fetch_object()): ?>
                            <div class="skill-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4><?= $item->skill ?></h4>
                                    <span class="skill-percentage"><?= $item->percent ?>%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                        aria-valuenow="<?= $item->percent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>