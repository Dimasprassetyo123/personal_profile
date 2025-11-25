 <?php
    include '../config/connection.php';

    $qAbouts = "SELECT * FROM abouts";
    $result = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));
    $item = $result->fetch_object();
    ?>
 <!-- home -->
 <section id="hero" class="hero section">

     <div class="background-elements">
         <div class="bg-circle circle-1"></div>
         <div class="bg-circle circle-2"></div>
     </div>

     <div class="hero-content">

         <div class="container">
             <div class="row align-items-center">

                 <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                     <div class="hero-text">
                         <h1><span class="accent-text">Portofolio</span></h1>
                         <h2><?=$item->name?></</h2>
                         <p class="lead">I'm a <span class="typed" data-typed-items="Web Developer, SISWA SMKN 3 BANJAR, Berusia 17 tahun, Asal Langensari"></span></p>
                         <p class="description"><?=$item->description?></p>

                         <div class="hero-actions">
                             <a href="#project" class="btn btn-primary">Lihat Projek Saya</a>
                             <a href="#contact" class="btn btn-outline">Kirim Pesan</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                     <div class="hero-visual">
                         <div class="profile-container">
                             <div class="profile-background"></div>
                             <img src="../storages/about/<?= $item->image ?>"  alt="Alexander Chen" class="profile-image">
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>

 </section>
 <!-- akhir home -->