<?php
$qAbouts = "SELECT * FROM abouts";
$result = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));
$item = $result->fetch_object();
?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div>
          <div class="brand-logo">
            <div class="w-100 d-flex flex-column align-items-center justify-content-center" style="padding:16px 0;">
              <a href="#" class="text-nowrap logo-img">
                <img src="../../../storages/about/<?= $item->image ?>" alt="Gambar" width="100" height="100" alt="" style="border-radius:50%; object-fit:cover; box-shadow:0 4px 12px rgba(0,0,0,0.69); border:3px solid #0099ff; display:block; margin:auto;">
              </a>
            </div>
            <div class="h3 text-center">
              <?= $item->name ?>
            </div>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">

              <li class="sidebar-item">
                <a class="sidebar-link" href="../dashboard/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="../about/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-info-square"></i>
                  </span>
                  <span class="hide-menu">Abouts</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="../blog/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-pencil"></i>
                  </span>
                  <span class="hide-menu">Blogs</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="../contact/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-phone"></i>
                  </span>
                  <span class="hide-menu">Contacts</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="../project/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-apps"></i>
                  </span>
                  <span class="hide-menu">Projects</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="../resume/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-text"></i>
                  </span>
                  <span class="hide-menu">Resumes</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="../service/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-server"></i>
                  </span>
                  <span class="hide-menu">Services</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="../skill/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-tools"></i>
                  </span>
                  <span class="hide-menu">Skills</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="../socmed/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-brand-instagram"></i>
                  </span>
                  <span class="hide-menu">Sosmed</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->