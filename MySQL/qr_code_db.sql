-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 10:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `instructor_name` varchar(255) DEFAULT NULL,
  `signin_time` time DEFAULT NULL,
  `signout_time` time DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `student_id`, `instructor_name`, `signin_time`, `signout_time`, `date`, `created_at`, `updated_at`) VALUES
(1, '2024-29-05', NULL, '19:00:56', '20:38:32', '2024-05-28', '2024-05-28 11:00:56', '2024-05-28 12:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(68, '2014_10_12_000000_create_users_table', 1),
(69, '2014_10_12_100000_create_password_resets_table', 1),
(70, '2019_08_19_000000_create_failed_jobs_table', 1),
(71, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(72, '2024_05_16_121030_add_year_level_and_status_to_users_table', 1),
(73, '2024_05_16_150431_add_deleted_at_column_to_users_table', 1),
(74, '2024_05_17_110444_add_qr_code_to_users_table', 1),
(75, '2024_05_26_165858_add_profile_picture_and_stats_to_users_table', 1),
(76, '2024_05_27_094804_create_logs_table', 1),
(77, '2024_05_28_190622_make_student_id_nullable_in_logs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `userType` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `job_status` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `guardian_relationship` varchar(255) DEFAULT NULL,
  `guardian_phone_number` varchar(255) DEFAULT NULL,
  `guardian_email` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `year_level` varchar(255) DEFAULT NULL,
  `stats` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `qr_code` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userType`, `student_id`, `course`, `department`, `status`, `job_status`, `email`, `email_verified_at`, `password`, `phone_number`, `birthday`, `address`, `gender`, `profile_picture`, `guardian_name`, `guardian_relationship`, `guardian_phone_number`, `guardian_email`, `remember_token`, `created_at`, `updated_at`, `year_level`, `stats`, `deleted_at`, `qr_code`) VALUES
(1, '', 'admin', NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$Intkw/PPbv61q5D2LzrK9O31hnQR5Akd17.p4wFd1itedJjUR7RvG', '1', '1111-11-11', 'Admin Street', NULL, 'public/instructor/profile_pictures/4v65oFviYlxcZ0NqrC5JAubVZ9bJgtnHr9LqYTXS.png', NULL, NULL, NULL, NULL, NULL, '2024-05-28 10:05:28', '2024-05-28 10:05:28', NULL, NULL, NULL, NULL),
(2, 'Ryan Balisi', 'instructor', NULL, NULL, 'Computer Studies', 'Married', 'Full Time', 'ryanbalisi@gmail.com', NULL, '$2y$10$SDNHxJhmvxXOGL/1EVUJweDMy3blYmBc3TSrdb/epg5FijLByCosW', '0987654321', '2222-02-22', 'St. Peters College', NULL, 'public/instructor/profile_pictures/E9qVNu63wseu1LMMBaPGgzQOpB5MQYo2wpnqLGRK.jpg', NULL, NULL, NULL, NULL, NULL, '2024-05-28 10:06:32', '2024-05-28 10:09:05', NULL, NULL, NULL, 'qrcode/2.png'),
(3, 'Mark Jordan Ugtong', 'student', '2022-00752', 'BSIT', NULL, NULL, NULL, 'markjordanugtong.202200752@gmail.com', NULL, '$2y$10$8EsHEfo/lO2I5l.CRMzdWORO/DcPyKSMOcf7A5vXpOrS/FDTIn4xe', '09562676206', '2003-05-08', 'Zone 1, Nonucan Overton Bridge', 'male', 'storage/public/students/profile_pictures/Ml0DG3gL8GBoYEwFkALRFeB7bQJ5ZUkIGsootYPq.jpg', 'Lyn', 'Mom', '09979930178', 'lynbaguio@gmail.com', NULL, '2024-05-28 10:07:17', '2024-05-28 10:08:33', '2nd Year', 'Not-Enrolled', NULL, 'qrcode/3.png'),
(4, 'Sherie Darlene Barila', 'student', '2024-29-05', 'BSIT', NULL, NULL, NULL, 'sherie@gmail.com', NULL, '$2y$10$ak0LlnYRat.ssAs9n0fymu0uwO4CfInwQYNLgf5xhrIxPpHyycL/G', '01234567890', '1998-05-25', 'Palao', 'female', 'storage/public/students/profile_pictures/1BHS6D1wtMS44T10tOlZOfwsNpmMS2j9yLFpx8up.jpg', 'My', 'Mom', '0987654321', 'shiparents@gmail.com', NULL, '2024-05-28 10:08:14', '2024-05-28 10:08:44', '2nd Year', 'Enrolled', NULL, 'qrcode/4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `users_status_unique` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
