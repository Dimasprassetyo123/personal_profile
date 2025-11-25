<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-image">
                            <img src="../storages/about/<?= $item->image ?>" alt="Profile Image" class="img-fluid">
                        </div>
                        <div class="profile-badge">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                    </div>

                    <div class="profile-content">
                        <h3><?= $item->name ?></h3>
                        <p class="profession">Web Developer</p>

                        <div class="contact-links">
                            <a href="mailto:marcus@example.com" class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <?= $item->email ?>
                            </a>
                            <a href="tel:+15551234567" class="contact-item">
                                <i class="bi bi-telephone"></i>
                                <?= $item->phone ?>
                            </a>
                            <a href="#" class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                <?= $item->address ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                <div class="about-content">
                    <div class="section-header">
                        <span class="badge-text">Get to Know Me</span>
                        <h2>Pengalaman Saya</h2>
                    </div>

                    <div class="description">
                        <p><?= $item->description ?></p>

                    </div>

                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">
                                <?php
                                $totalProjects = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM projects"))['total'];
                                ?>
                                <?= $totalProjects ?>
                            </div>
                            <div class="stat-label">Total Projects</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">
                                <?php
                                $totalBlogs = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM blogs"))['total'];
                                ?>
                                <?= $totalBlogs ?>
                            </div>
                            <div class="stat-label">Total Blog</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">
                                <?php
                                $totalSkills = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM skills"))['total'];
                                ?>
                                <?= $totalSkills ?>
                            </div>
                            <div class="stat-label">Total Skill </div>
                        </div>
                    </div>

                    <div class="cta-section">
                        <a href="https://drive.google.com/file/d/14hqI8W3fzbGlrf0C1qH_ptotlM_gLAUp/view?usp=drive_link" class="btn btn-primary">
                            <i class="bi bi-download"></i>
                            Download Resume
                        </a>
                        <!-- <a href="#" class="btn btn-outline">
                            <i class="bi bi-chat-dots"></i>
                            Let's Talk
                        </a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Akhir About Section -->