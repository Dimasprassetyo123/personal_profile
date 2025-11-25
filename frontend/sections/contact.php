<?php
include '../config/connection.php';

$qAbout = "SELECT * FROM abouts";
$result = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
$item = $result->fetch_object();
?>
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>"Punya pertanyaan atau ingin bekerja sama? Tinggalkan pesan, dan saya akan menghubungi Anda segera!"</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
                <div class="info-box">
                    <h3>Contact Info</h3>
                    <p>"Jangan ragu untuk menghubungi saya melalui informasi di bawah ini. Mari berbicara tentang proyek, ide, atau kesempatan kolaborasi!".</p>

                    <form action=""> </form>
                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="content">
                            <h4>Our Location</h4>
                            <p><?= $item->address ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="content">
                            <h4>Phone Number</h4>
                            <p><?= $item->phone ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>Email Address</h4>
                            <p><?= $item->email ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form">
                    <h3>Message</h3>
                    <p>"Silakan isi form berikut atau hubungi langsung via email/telepon. Saya akan merespons secepat mungkin!".</p>

                    <form action="action/contact/create_contact.php" method="post">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="subjects" placeholder="Subject" required="">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="massage" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn" name="tombol">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

</section>