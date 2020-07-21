-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 02:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelasku2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailaddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `emailaddress`, `telnumber`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ali Arsa', 'Arsa', 'aliarsa48@gmail.com', '081347554765', '1212121ksjaks sakjsa', '2020-05-05 18:31:43', '2020-05-05 18:31:43'),
(2, 'Ali', 'Arsa', 'aliarsa48@gmail.com', '081347554765', 'Coba', '2020-05-05 19:08:41', '2020-05-05 19:08:41'),
(3, 'Ali', 'Arsa', 'aliarsa48@gmail.com', '081347554765', 'tes', '2020-06-05 01:26:05', '2020-06-05 01:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('Pengembangan Web','Database','Jaringan','Desain','Marketing') COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `kuota` int(3) NOT NULL,
  `kuotaterisi` int(11) DEFAULT '0',
  `jumlahpertemuan` int(3) NOT NULL,
  `price` int(11) NOT NULL,
  `status` enum('active','non-active','expired','menunggu verifikasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pertemuanke` int(11) DEFAULT '0',
  `statuspencairan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `teacher_id`, `title`, `description`, `category`, `thumbnail`, `start_date`, `end_date`, `start_time`, `end_time`, `kuota`, `kuotaterisi`, `jumlahpertemuan`, `price`, `status`, `link`, `pertemuanke`, `statuspencairan`, `created_at`, `updated_at`) VALUES
(2, 2, 'Mahir Photoshop', 'Belajar Photoshop dari Dasar hingga Mahir', 'Desain', '3.jpg', '2020-04-07', '2020-04-15', '03:33:00', '04:44:00', 30, 20, 8, 155000, 'active', 'fb.com', 2, '', '2020-04-24 06:18:00', '2020-05-27 04:36:12'),
(3, 2, 'Membuat Game Sederhana', 'Belajar Membuat Game Komputer Sederhana', 'Desain', '1.jpg', '2020-04-13', '2020-04-14', '19:08:00', '12:09:00', 25, 1, 15, 250000, 'active', 'zoom.com', 1, '', '2020-04-24 07:08:44', '2020-05-27 04:32:17'),
(6, 1, 'React untuk Pemula', 'Belajar Framework React untuk Pemula', 'Pengembangan Web', '2.jpg', '2020-05-20', '2020-05-20', '00:12:00', '15:23:00', 50, 20, 6, 250000, 'active', 'buildwithangga.com', 3, 'selesai', '2020-05-07 05:02:01', '2020-05-30 22:23:50'),
(7, 1, 'Basis Data Tingkat Lanjut', 'Basis Data Untuk Mengerti Query bro...', 'Database', '1589374738_doctor-mask-clipart.jpg', '2020-05-08', '2020-05-12', '01:13:00', '23:21:00', 20, 8, 6, 300000, 'non-active', NULL, 3, 'menunggu', '2020-05-13 04:58:58', '2020-05-30 21:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodeunik` bigint(20) NOT NULL,
  `kodetagihan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buktipembayaran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`id`, `course_id`, `student_id`, `kodeunik`, `kodetagihan`, `buktipembayaran`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '4', 8, '4-2', '1589716512_353f7c0e1c12766294e1b7917a2ed0c0.jpg', 'aktif', '2020-05-15 21:59:08', '2020-05-18 21:09:03'),
(2, 3, '4', 12, '4-3', '1589785935_128c8f59-a4df-4c49-a638-b4e93a91498b.jpg', 'aktif', '2020-05-17 22:37:50', '2020-05-27 04:32:16'),
(3, 6, '4', 24, '4-6', '1589875042_undraw_QA_engineers_dg5p.png', 'aktif', '2020-05-18 23:54:03', '2020-05-18 23:58:12'),
(4, 1, '4', 4, '4-1', '1589875026_fc203973ce42e63a7fac0e457948219c.jpg', 'aktif', '2020-05-18 23:56:41', '2020-05-26 19:26:32'),
(5, 1, '5', 5, '5-1', '1589978438_MerlionPark-01-854x540.jpg', 'aktif', '2020-05-20 04:40:17', '2020-05-20 04:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_23_020809_courses', 1),
(5, '2020_05_04_064639_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(15) NOT NULL,
  `course_id` int(15) NOT NULL,
  `cat` enum('bab','subbab') NOT NULL,
  `judul` varchar(200) NOT NULL,
  `bab` varchar(200) NOT NULL,
  `subbab` varchar(200) DEFAULT NULL,
  `filemodule` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `total` int(100) NOT NULL,
  `bank` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `norek` int(50) NOT NULL,
  `buktipencairan` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `teacher_id`, `course_id`, `total`, `bank`, `nama`, `norek`, `buktipencairan`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 0, 'Bankaltim', 'Ali Arsa', 14212121, '1590903269_kurikulum.png', '2020-05-30 05:32:29', '2020-05-30 21:34:29'),
(4, 1, 6, 10200000, 'BRI', 'Ozi', 12345, '1590903269_kurikulum.png', '2020-05-30 22:23:50', '2020-05-30 22:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `bio` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `avatar`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pemateri', 'teacher1@kelasku.com', NULL, '$2y$10$0Gl6/Jz7U.NclUEXtVWvmezUQB0QJVHbkbd7GQwpSwI7hc1Xq.wV2', 'pengajar', '1591113201_1.jpg', 'Web Developer', NULL, '2020-04-24 05:45:01', '2020-06-02 07:53:21'),
(2, 'Pemateri 2', 'teacher2@kelasku.com', NULL, '$2y$10$Vp76CbG.IjHgGfT38OrQqeJO.fnRfyR6ezfSdzG9MyK7qhu6UfpAG', 'pengajar', 'default.jpg', '', NULL, '2020-04-24 05:45:53', '2020-04-24 05:45:53'),
(3, 'Admin', 'admin@kelasku.com', NULL, '$2y$10$0n8D2tYJasWypYFnFABXdeyL2E9wxtkHIP0k1rQUQp1PhjbPTpGN.', 'admin', 'default.jpg', '', NULL, '2020-04-24 05:46:37', '2020-04-24 05:46:37'),
(4, 'Murid 1', 'student@kelasku.com', NULL, '$2y$10$G76qOx4YJQXwaNJ6epwkx.a5rMGOh02.l5pK7rGolO4tZxckNwJai', 'murid', 'default.jpg', '', NULL, '2020-04-27 21:16:08', '2020-04-27 21:16:08'),
(5, 'Fahrul Fahrozi', 'student2@kelasku.com', NULL, '$2y$10$gSfVi4hyAKIzvOkYtAi1Ce1eMKV31zTJ6SIfdy/XfbBpQknjZR5am', 'murid', 'default.jpg', '', NULL, '2020-05-13 07:35:18', '2020-05-13 07:35:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
