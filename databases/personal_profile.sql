-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2025 at 05:07 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `born` date NOT NULL,
  `address` text NOT NULL,
  `zip_code` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `total_project` int NOT NULL,
  `work` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `born`, `address`, `zip_code`, `email`, `phone`, `total_project`, `work`, `image`, `description`) VALUES
(8, 'Dimas Prassetyo', '2008-03-11', 'Langensari RT2 RW3 Kota Banjar', 1111, 'dimas@gmail.com', '+62 895392823488', 9, 'Pelajar', '1754626557.png', 'Saya berasal dari Langensari, Banjar, dan tinggal di Dusun Sukahurip. Sebagai seorang pelajar, saya berusaha untuk terus berkembang, belajar hal baru, dan meningkatkan keterampilan agar bisa bermanfaat bagi lingkungan sekitar.');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `date`, `author`, `tittle`, `description`) VALUES
(3, '1754542125.png', '2025-07-26', 'Dimas Prassetyo', 'Web Geleri', 'Saya membuat web geleri jual ipon'),
(4, '1754616152.png', '2025-08-08', 'Dimas Prassetyo', 'Love Animasi', 'Animasi jedag jedug love '),
(5, '1754616804.png', '2025-08-08', 'Dimas Prassetyo', 'Web Geleri Projec Saya', 'Web ini untuk menyimpan foto projrct project saya yang lama');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjects` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subjects`, `massage`) VALUES
(4, 'muhamad', 'dimas@gmail.com', 'aa', 'kontol'),
(5, 'Dimas Prassetyo', 'dimas@gmail.com', 'aa', 'iii');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `job`, `description`, `category`) VALUES
(8, '1754627199.png', 'Web Geleri', 'Pelajar', 'Web ini menggunakan php dan template boostrap\r\n', 'programing'),
(10, '1754627751.png', 'Perpustakaan', 'Pelajar SMKN 3 BANJAR', 'Crud berjudul perpustakaan menggunakan laravel', 'prestasi'),
(11, '1754628067.png', 'Portofolio', 'Pelajar SMKN 3 BANJAR', 'Portofolio ini tentang data diri saya ', 'prestasi'),
(12, '1754635093.png', 'Web Geleri', 'Pelajar SMKN 3 BANJAR', 'Web ini di khususkan untuk menyimpan projek\" saya', 'multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint NOT NULL,
  `date` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `date`, `job`, `place`, `description`) VALUES
(1, '2020-2023', 'SMPN 4 Banjar', 'Asal saya Dari Langensari RT2 RW3 Kec: Langensari Kota Banjar', 'Lulusan Dari SMPN 4 BANJAR'),
(2, '2023-2025', 'Pelajar SMKN 3 BANJAR', 'Langensari', 'Pelajar '),
(3, '2025-2026', 'PKL (Praktek Kerja Lapangan)', 'Asal saya Dari Langensari RT2 RW3 Kec: Langensari Kota Banjar', 'Belajar Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `icon` text NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `job`) VALUES
(3, 'bi bi-facebook', 'pelajar'),
(4, 'bi bi-instagram', 'pelajar');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint NOT NULL,
  `skill` varchar(255) NOT NULL,
  `percent` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percent`) VALUES
(2, 'CSS', 85),
(3, 'HTML', 87),
(4, 'Laravel', 100),
(5, 'PHP', 78);

-- --------------------------------------------------------

--
-- Table structure for table `socmeds`
--

CREATE TABLE `socmeds` (
  `id` bigint NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `socmeds`
--

INSERT INTO `socmeds` (`id`, `icon`, `link`) VALUES
(5, 'bi bi-whatsapp', 'iiiiii'),
(6, 'bi bi-facebook', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(6, 'Dimas', 'dimas@gmail.com', '$2y$10$9yMd8ez88fCI18cepTrFwOXmTpAHTZHl.9b8UOK18h/1GBBmVLGG2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmeds`
--
ALTER TABLE `socmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socmeds`
--
ALTER TABLE `socmeds`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
