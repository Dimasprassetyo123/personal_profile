<?php
// header
include 'partials/header.php';

?>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column justify-content-center">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <!--- sidebar-->
        <?php include 'partials/sidebar.php' ?>

    </header>

    <main class="main">

        <?php
        // home
        include 'sections/home.php';
        ?>

        <?php
        // aboute
        include 'sections/aboute.php';
        ?>

        <?php
        // blog
        include 'sections/blog.php';
        ?>

        <?php
        // service
        include 'sections/service.php';
        ?>

        <?php
        // skill
        include 'sections/skill.php';
        ?>

        <?php
        // resume
        include 'sections/resume.php';
        ?>


        <?php
        // project
        include 'sections/project.php';
        ?>

        <?php
        // kontsk
        include 'sections/contact.php';
        ?>

        <?php
        include 'partials/footer.php';
        ?>
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
    <?php
    include 'partials/script.php';
    ?>

</body>

</html>