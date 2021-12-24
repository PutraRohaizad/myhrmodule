-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2021 at 08:30 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarthr`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_read` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_create` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `title`, `subject`, `table_name`, `primary_key`, `page_read`, `page_create`, `page_update`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'Admin', 'admin', 'id', 'yes', 'yes', 'yes', '2021-07-05 07:34:28', '2021-07-05 07:34:28'),
(6, 'Organization', 'Organization', 'organization', 'id', 'yes', 'yes', 'yes', '2021-07-05 07:41:05', '2021-07-05 07:41:05'),
(17, 'Management', 'Management', 'management', 'id', 'yes', 'yes', 'yes', '2021-07-05 07:46:45', '2021-07-05 07:46:45'),
(19, 'HR', 'HR', 'hr', 'id', 'yes', 'yes', 'yes', '2021-07-05 08:06:29', '2021-07-05 08:06:29'),
(20, 'Finance', 'Finance', 'finance', 'id', 'yes', 'yes', 'yes', '2021-07-05 16:56:01', '2021-07-05 16:56:01'),
(25, 'Leave', 'Leave', 'leave', 'id', 'yes', 'yes', 'yes', '2021-07-05 21:35:23', '2021-07-05 21:35:23'),
(26, 'IT', 'IT', 'it', 'id', 'yes', 'yes', 'yes', '2021-07-10 00:04:11', '2021-07-10 00:04:11'),
(30, 'Engineering', 'Engineering', 'engineering', 'id', 'yes', 'yes', 'yes', '2021-07-10 00:52:01', '2021-07-10 00:52:01'),
(39, 'Projects', 'Projects', 'projects', 'id', 'yes', 'yes', 'yes', '2021-07-11 22:55:25', '2021-07-11 22:55:25'),
(40, 'Tasks', 'Tasks', 'tasks', 'id', 'yes', 'yes', 'yes', '2021-07-11 22:55:25', '2021-07-11 22:55:25'),
(41, 'Boards', 'Boards', 'boards', 'id', 'yes', 'yes', 'yes', '2021-07-11 22:55:25', '2021-07-11 22:55:25'),
(44, 'Module1', 'Module1', 'module1', 'id', 'yes', 'yes', 'yes', '2021-07-15 01:57:25', '2021-07-15 01:57:25'),
(45, 'Module2', 'Module2', 'module2', 'id', 'yes', 'yes', 'yes', '2021-07-15 01:57:25', '2021-07-15 01:57:25'),
(46, 'Admininistarion', 'Admininistarion', 'admininistarion', 'id', 'yes', 'yes', 'yes', '2021-07-22 23:27:56', '2021-07-22 23:27:56'),
(48, 'Role', 'Role', 'role', 'id', 'yes', 'yes', 'yes', '2021-09-13 23:32:41', '2021-09-13 23:32:41'),
(49, 'avs', 'avs', 'avs', 'id', 'yes', 'yes', 'yes', '2021-09-30 20:05:28', '2021-09-30 20:05:28');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lpktn_admins`
--

CREATE TABLE `lpktn_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UserEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `l_p_ktn_users`
--

CREATE TABLE `l_p_ktn_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UserEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `parent_id`, `active`, `route`, `icon`, `orderBy`, `created_at`, `updated_at`) VALUES
(53, 'Menu', 0, 0, 'menu.index', 'la-dashboard', 0, NULL, '2021-07-05 08:33:16'),
(54, 'Admin', 0, 0, 'admin.list', 'la-dashboard', 0, '2021-07-05 07:34:28', '2021-07-05 08:08:03'),
(99, 'Projects', 0, 1, '', 'la-cube', 0, '2021-07-11 22:55:24', '2021-07-11 22:55:24'),
(100, 'Projects', 99, 1, 'projects.list', 'la-cube', 0, '2021-07-11 22:55:25', '2021-07-11 22:55:25'),
(101, 'Tasks', 99, 1, 'tasks.list', 'la-cube', 0, '2021-07-11 22:55:25', '2021-07-11 22:55:25'),
(102, 'Boards', 99, 1, 'boards.list', 'la-cube', 0, '2021-07-11 22:55:25', '2021-07-11 22:55:25'),
(107, 'Organization', 0, 0, '', 'la-cube', 0, '2021-07-15 01:46:39', '2021-07-15 01:46:50'),
(111, 'Admininistarion', 0, 1, 'admininistarion.list', 'la-dashboard', 0, '2021-07-22 23:27:56', '2021-07-22 23:27:56'),
(113, 'Role', 0, 1, 'role.list', 'la-cube', 0, '2021-09-13 23:32:41', '2021-09-13 23:32:41'),
(114, 'avs', 0, 0, 'avs.list', 'la-dashboard', 0, '2021-09-30 20:05:28', '2021-09-30 20:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_06_27_151601_create_crud_table', 2),
(4, '2021_06_28_020008_create_menus_table', 3),
(5, '2021_06_28_020008_create_menu_table', 4),
(6, '2021_06_28_024243_create_menus_table', 5),
(7, '2014_10_12_100000_create_password_resets_table', 6),
(8, '2021_07_23_064111_create_permission_tables', 6),
(9, '2021_07_19_085905_create_module1s_table', 7),
(10, '2021_07_19_090913_create_module2s_table', 7),
(11, '2021_07_19_090932_create_module3s_table', 7),
(12, '2021_07_19_090949_create_module4s_table', 7),
(13, '2021_07_19_091006_create_module5s_table', 7),
(14, '2021_07_19_091022_create_module6s_table', 7),
(15, '2021_07_22_000737_create_test_questions_table', 7),
(16, '2021_07_22_001702_create_lpktn_admins_table', 7),
(17, '2021_07_22_153604_create_user_questions_table', 7),
(18, '2021_07_22_161020_create_l_p_ktn_users_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\User', 2),
(3, 'App\\User', 3),
(4, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module1s`
--

CREATE TABLE `module1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkboxpass` tinyint(1) NOT NULL DEFAULT 0,
  `checkboxfail` tinyint(1) NOT NULL DEFAULT 0,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module2s`
--

CREATE TABLE `module2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkboxpass` tinyint(1) NOT NULL DEFAULT 0,
  `checkboxfail` tinyint(1) NOT NULL DEFAULT 0,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module3s`
--

CREATE TABLE `module3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkboxpass` tinyint(1) NOT NULL DEFAULT 0,
  `checkboxfail` tinyint(1) NOT NULL DEFAULT 0,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module4s`
--

CREATE TABLE `module4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkboxpass` tinyint(1) NOT NULL DEFAULT 0,
  `checkboxfail` tinyint(1) NOT NULL DEFAULT 0,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module5s`
--

CREATE TABLE `module5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkboxpass` tinyint(1) NOT NULL DEFAULT 0,
  `checkboxfail` tinyint(1) NOT NULL DEFAULT 0,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module6s`
--

CREATE TABLE `module6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkboxpass` tinyint(1) NOT NULL DEFAULT 0,
  `checkboxfail` tinyint(1) NOT NULL DEFAULT 0,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `description` varchar(11) DEFAULT NULL,
  `file` int(11) DEFAULT NULL,
  `leader` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'User', 'web', '2021-07-23 00:32:22', '2021-07-23 00:32:22'),
(4, 'Admin', 'web', '2021-07-23 00:32:22', '2021-07-23 00:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_questions`
--

CREATE TABLE `test_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@cara.com.my', NULL, '$2y$10$RLduRVUFR5T1bHlvSjQIcuRHPPn.YVxkRgWrfwBAR4YUivm5RvYpe', NULL, '2021-07-19 08:14:05', '2021-07-23 00:57:20', 4),
(2, 'diana', 'diana@gmail.com', NULL, '$2y$10$2KdcvqDvL6LC48PVekn3QerpWN7wB3DRZSuhMsLABCtVV9fWTvEX2', NULL, '2021-07-19 08:28:47', '2021-07-23 00:57:54', 3),
(3, 'dedede', 'dee@gmail.com', NULL, '$2y$10$T2g3N/JD8auecwrXzp2TxethG44ybGxyje3Ht8vrZHbmDIq3.6Cxe', NULL, '2021-07-23 01:01:38', '2021-07-23 01:01:38', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testcase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teststep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warcouncils`
--

CREATE TABLE `warcouncils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lpktn_admins`
--
ALTER TABLE `lpktn_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `l_p_ktn_users`
--
ALTER TABLE `l_p_ktn_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `module1s`
--
ALTER TABLE `module1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module2s`
--
ALTER TABLE `module2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module3s`
--
ALTER TABLE `module3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module4s`
--
ALTER TABLE `module4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module5s`
--
ALTER TABLE `module5s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module6s`
--
ALTER TABLE `module6s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `test_questions`
--
ALTER TABLE `test_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_questions`
--
ALTER TABLE `user_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warcouncils`
--
ALTER TABLE `warcouncils`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lpktn_admins`
--
ALTER TABLE `lpktn_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `l_p_ktn_users`
--
ALTER TABLE `l_p_ktn_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `module1s`
--
ALTER TABLE `module1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module2s`
--
ALTER TABLE `module2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module3s`
--
ALTER TABLE `module3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module4s`
--
ALTER TABLE `module4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module5s`
--
ALTER TABLE `module5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module6s`
--
ALTER TABLE `module6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test_questions`
--
ALTER TABLE `test_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warcouncils`
--
ALTER TABLE `warcouncils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
