<?php

include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

// Get counts for dashboard stats
$totalProjects = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM projects"))['total'];
$totalBlogs = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM blogs"))['total'];
$totalSkills = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM skills"))['total'];

// Get latest 5 contacts
$contactsQuery = mysqli_query($connect, "SELECT * FROM contacts ORDER BY id DESC LIMIT 5");
?>


<!--content selamat datang-->
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .dashboard-card {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .welcome-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        .welcome-card::before {
            content: "";
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            transform: rotate(30deg);
        }

        .stat-card {
            border-left: 4px solid;
            border-radius: 10px;
        }

        .stat-card.projects {
            border-left-color: #4e73df;
        }

        .stat-card.blogs {
            border-left-color: #1cc88a;
        }

        .stat-card.skills {
            border-left-color: #f6c23e;
        }

        .stat-icon {
            font-size: 2rem;
            opacity: 0.3;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        .contact-table {
            border-radius: 15px;
            overflow: hidden;
        }

        .contact-table thead {
            background: linear-gradient(to right, #4b6cb7, #182848);
            color: white;
        }

        .badge-pill {
            border-radius: 10rem;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
        }

        .text-underline-hover {
            text-decoration: none;
        }

        .text-underline-hover:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Welcome Card -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card welcome-card p-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h1 class="fw-bold mb-2">SELAMAT DATANG</h1>
                                <p class="mb-0 fs-5">Di Halaman Dashboard Admin</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <i class="mdi mdi-chart-bar stat-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <!-- Projects Card -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-card stat-card projects h-100">
                    <div class="card-body position-relative">
                        <h6 class="text-uppercase text-gray-700 mb-2">Total Project</h6>
                        <h2 class="mb-0"><?= $totalProjects ?></h2>
                        <i class="mdi mdi-briefcase-check stat-icon text-primary"></i>
                        <div class="mt-3">
                            <a href="../projects/index.php" class="text-primary text-underline-hover small">
                                Lihat Semua Project <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blogs Card -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-card stat-card blogs h-100">
                    <div class="card-body position-relative">
                        <h6 class="text-uppercase text-gray-700 mb-2">Total Blog</h6>
                        <h2 class="mb-0"><?= $totalBlogs ?></h2>
                        <i class="mdi mdi-book-open stat-icon text-success"></i>
                        <div class="mt-3">
                            <a href="../blogs/index.php" class="text-success text-underline-hover small">
                                Lihat Semua Blog <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Card -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-card stat-card skills h-100">
                    <div class="card-body position-relative">
                        <h6 class="text-uppercase text-gray-700 mb-2">Total Skill</h6>
                        <h2 class="mb-0"><?= $totalSkills ?></h2>
                        <i class="mdi mdi-code-braces stat-icon text-warning"></i>
                        <div class="mt-3">
                            <a href="../skills/index.php" class="text-warning text-underline-hover small">
                                Lihat Semua Skill <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Contacts -->
        <div class="row">
            <div class="col-12">
                <div class="card dashboard-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Kontak Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive contact-table">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subjek</th>
                                        <th>Pesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (mysqli_num_rows($contactsQuery) > 0): ?>
                                        <?php $counter = 1; ?>
                                        <?php while ($contact = mysqli_fetch_assoc($contactsQuery)): ?>
                                            <tr>
                                                <td><?= $counter ?></td>
                                                <td><?= htmlspecialchars($contact['name']) ?></td>
                                                <td>
                                                    <a href="mailto:<?= htmlspecialchars($contact['email']) ?>" class="text-primary">
                                                        <?= htmlspecialchars($contact['email']) ?>
                                                    </a>
                                                </td>
                                                <td><?= htmlspecialchars($contact['subjects']) ?></td>
                                                <td>
                                                    <?= htmlspecialchars($contact['massage']) ?>
                                                </td>
                                                <td>
                                                    <a href="../../action/contact/destroy.php?id=<?= $item->id ?>" class="btn btn-danger"
                                                        oneclick="return confirm ('Apakah anda yakin?')">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php $counter++; ?>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7" class="text-center py-4">Tidak ada data kontak</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--content selamat datang end-->
    <?php
    include '../../partials/footer.php';
    include '../../partials/script.php';
    ?>