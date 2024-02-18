-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 10:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'superadmin', '$2y$10$NK38K2jngWHR3po5cHTnbe2ioIzkugDB02E57FUphrrsPyPZI8KSO', '2024-02-16 16:33:49', '2024-02-16 16:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `daily_diesels`
--

CREATE TABLE `daily_diesels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesin_meter` int(11) NOT NULL,
  `diesel_in` int(11) NOT NULL,
  `diesel_out` int(11) NOT NULL,
  `diesel_balance` int(11) NOT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_activities`
--

CREATE TABLE `job_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_activities`
--

INSERT INTO `job_activities` (`id`, `work_description`, `uom`, `created_at`, `updated_at`) VALUES
(1, 'Felling/Shredding 4\" Thick', 'Palm', '2024-02-16 19:44:36', '2024-02-16 19:44:36'),
(2, 'Deboling - 2M x 2M x 1.5 Pit', 'Palm', '2024-02-16 19:45:16', '2024-02-16 19:45:16'),
(3, 'Stacking / Clearing /Levelling (Undulating/Flat)', 'Ha', '2024-02-16 19:46:17', '2024-02-16 19:46:17'),
(4, 'Stacking / Clearing/ Levelling (Hilly)', 'Ha', '2024-02-16 19:46:57', '2024-02-16 19:46:57'),
(5, 'Stacking / Clearing/ Levelling', 'Point', '2024-02-16 19:47:17', '2024-02-16 19:47:17'),
(6, 'Closed End Conservation Trench to 2.4m (T) x 1.2m (B) x 1.8m (D)', 'Meter', '2024-02-16 19:47:43', '2024-02-16 19:47:43'),
(7, 'Closed End Conservation Trench to 2.4m (T) x 1.2m (B) x 1.8m (D)', 'Meter', '2024-02-16 19:48:14', '2024-02-16 19:48:14'),
(8, 'Terracing - New terrace 5m wide', 'Meter', '2024-02-16 19:48:38', '2024-02-16 19:48:38'),
(9, 'Main road (4m wide without any gravelling', 'Meter', '2024-02-16 19:49:07', '2024-02-16 19:49:07'),
(10, 'New Main Drain 4m x 3m x 2m', 'Meter', '2024-02-16 19:49:34', '2024-02-16 19:49:59'),
(11, 'New Collection Drain 2m x 2m x 1m', 'Meter', '2024-02-16 19:50:26', '2024-02-16 19:50:26'),
(12, 'New Field Drain 1m x 1m x 0.5m', 'Meter', '2024-02-16 19:50:40', '2024-02-16 19:50:40'),
(13, 'River/ Stream', 'Meter', '2024-02-16 19:50:58', '2024-02-16 19:50:58'),
(14, 'Desilting Main Drain ( 4m x 3m x 2m)', 'Meter', '2024-02-16 19:51:14', '2024-02-16 19:51:14'),
(15, 'Desilting Collection Drain ( 2m x 2m x 1m)', 'Meter', '2024-02-16 19:51:34', '2024-02-16 19:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `machinery_lists`
--

CREATE TABLE `machinery_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` int(11) NOT NULL,
  `machine_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manpowers`
--

CREATE TABLE `manpowers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` datetime NOT NULL,
  `ic_passport_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_expiry` datetime NOT NULL,
  `permit_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permit_expiry` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_transactions`
--

CREATE TABLE `mechanic_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `site_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contractor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diesel_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diesel_out` int(11) NOT NULL,
  `transfer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_05_043915_create_admins_table', 1),
(6, '2023_10_19_121401_create_projects_table', 1),
(7, '2023_10_19_121616_create_works_table', 1),
(8, '2023_10_19_121628_create_vehicles_table', 1),
(9, '2023_10_19_124331_create_project_works_table', 1),
(10, '2023_10_19_125733_create_project_work_activity_list_table', 1),
(11, '2023_11_09_192251_create_project_workers_table', 1),
(12, '2023_11_17_081006_modify_users_admin_table', 1),
(13, '2023_11_19_142828_create_project_block_works_table', 1),
(14, '2024_01_08_172607_create_manpowers_table', 1),
(15, '2024_01_08_172812_create_sites_table', 1),
(16, '2024_01_08_173033_create_site_management_table', 1),
(17, '2024_01_08_173423_create_site_activities_table', 1),
(18, '2024_01_08_173430_create_site_fuels_table', 1),
(19, '2024_01_08_173456_create_site_manpowers_table', 1),
(20, '2024_01_08_173503_create_site_machines_table', 1),
(21, '2024_01_08_175650_create_job_activities_table', 1),
(22, '2024_01_08_182746_create_operator_transactions_table', 1),
(23, '2024_01_08_182806_create_mechanic_transactions_table', 1),
(24, '2024_01_08_184436_create_site_expense_transactions_table', 1),
(25, '2024_01_08_184814_create_vehicle_expense_transactions_table', 1),
(26, '2024_01_08_184920_create_work_done_claims_table', 1),
(27, '2024_01_08_201836_create_machinery_lists_table', 1),
(28, '2024_01_08_203104_create_summary_diesels_table', 1),
(29, '2024_01_08_203124_create_daily_diesels_table', 1),
(30, '2024_01_09_155426_create_suppliers_table', 1),
(31, '2024_01_09_155718_create_worker_expense_transactions_table', 1),
(32, '2024_01_09_160254_create_operator_deductions_table', 1),
(33, '2024_01_27_161330_create_site_blocks_table', 1),
(34, '2024_01_27_175854_create_site_projects_table', 1),
(35, '2024_01_29_190223_alter_migration_add_new_column_logn_test', 1),
(36, '2024_01_30_194630_create_site_info_blocks_table', 1),
(37, '2024_01_30_194651_create_site_info_block_tasks_table', 1),
(38, '2024_02_02_112313_alter_migration_add_new_field_job_acitivity', 1),
(39, '2024_02_02_135201_alter_migration_add_new_column_activity_id', 1),
(40, '2024_02_02_142052_alter_migration_add_new_column_site_id', 1),
(41, '2024_02_02_154645_alter_migration_add_new_column_name_blocks_site_activites', 1),
(42, '2024_02_02_173312_alter_migration_add_new_column_to_site', 1),
(43, '2024_02_05_182503_create_site_info_block_infos_table', 1),
(44, '2024_02_05_204830_create_site_activity_blocks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operator_deductions`
--

CREATE TABLE `operator_deductions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_total` int(11) NOT NULL,
  `wages_total_activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduction_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduction_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_wages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operator_transactions`
--

CREATE TABLE `operator_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `month` datetime NOT NULL,
  `site_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `uom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `mesin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel` int(11) NOT NULL,
  `wages_activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_block_works`
--

CREATE TABLE `project_block_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_block_id` bigint(20) UNSIGNED NOT NULL,
  `project_worker_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_workers`
--

CREATE TABLE `project_workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_works`
--

CREATE TABLE `project_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_work_activity_list`
--

CREATE TABLE `project_work_activity_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_worker_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_start` date NOT NULL,
  `project_completed` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_gl_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `site_id`, `site_name`, `location`, `project_start`, `project_completed`, `created_at`, `updated_at`, `project_gl_code`, `project_due_date`) VALUES
(1, 'Lunduss', 'Lundu (SOP Plantation)', 'Lundu, Kuching', '2024-02-02', '2024-02-16', '2024-02-16 20:01:37', '2024-02-18 09:23:29', '300-S00134', '2025-06-10'),
(2, '123123', 'asdasd', 'asdasd', '2024-02-16', '2024-02-24', '2024-02-18 03:00:49', '2024-02-18 03:00:49', '1231212', '2024-02-18'),
(3, '12313', 'sadzc', 'sdasd', '2024-02-04', NULL, '2024-02-18 04:41:33', '2024-02-18 04:41:33', '123123', '2024-02-10'),
(4, '1231', 'asd12313', 'Mumbai', '2024-02-01', NULL, '2024-02-18 06:04:57', '2024-02-18 08:36:48', '300-S00132', '2024-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `site_activities`
--

CREATE TABLE `site_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `work_activity` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worker_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_activity_id` int(11) NOT NULL,
  `blocks` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_activities`
--

INSERT INTO `site_activities` (`id`, `site_id`, `status`, `work_activity`, `uom`, `estimate_quantity`, `worker_rate`, `contract_rate`, `created_at`, `updated_at`, `job_activity_id`, `blocks`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-16 20:14:07', '2024-02-16 20:14:07', 1, NULL),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 03:04:33', '2024-02-18 03:04:33', 3, NULL),
(11, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 08:17:18', '2024-02-18 08:17:18', 2, NULL),
(12, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 08:23:03', '2024-02-18 08:23:03', 1, NULL),
(13, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 08:23:03', '2024-02-18 08:23:03', 4, NULL),
(14, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 08:23:03', '2024-02-18 08:23:03', 5, NULL),
(15, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 08:37:34', '2024-02-18 08:37:34', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_activity_blocks`
--

CREATE TABLE `site_activity_blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `site_activity_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_activity_blocks`
--

INSERT INTO `site_activity_blocks` (`id`, `site_id`, `site_activity_id`, `block_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '2024-02-16 20:14:25', '2024-02-16 20:14:25'),
(2, 1, 1, 4, '2024-02-16 20:14:25', '2024-02-16 20:14:25'),
(3, 1, 1, 5, '2024-02-16 20:14:25', '2024-02-16 20:14:25'),
(5, 1, 1, 6, '2024-02-18 06:59:45', '2024-02-18 06:59:45'),
(6, 4, 3, 7, '2024-02-18 07:38:28', '2024-02-18 07:38:28'),
(7, 4, 4, 7, '2024-02-18 07:38:28', '2024-02-18 07:38:28'),
(8, 4, 5, 7, '2024-02-18 07:38:28', '2024-02-18 07:38:28'),
(9, 4, 3, 8, '2024-02-18 07:38:37', '2024-02-18 07:38:37'),
(10, 4, 4, 8, '2024-02-18 07:38:37', '2024-02-18 07:38:37'),
(11, 4, 5, 8, '2024-02-18 07:38:37', '2024-02-18 07:38:37'),
(12, 4, 11, 7, '2024-02-18 08:37:02', '2024-02-18 08:37:02'),
(13, 4, 11, 8, '2024-02-18 08:37:02', '2024-02-18 08:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `site_blocks`
--

CREATE TABLE `site_blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `trello_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trello_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trello_task` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_expense_transactions`
--

CREATE TABLE `site_expense_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debt` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_fuels`
--

CREATE TABLE `site_fuels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `diesel_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_fuels`
--

INSERT INTO `site_fuels` (`id`, `site_id`, `diesel_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 10000, '2024-02-16 20:16:34', '2024-02-16 20:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `site_info_blocks`
--

CREATE TABLE `site_info_blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_info_blocks`
--

INSERT INTO `site_info_blocks` (`id`, `block_name`, `created_at`, `updated_at`, `activity_id`, `site_id`) VALUES
(3, '99/03', '2024-02-16 20:13:25', '2024-02-16 20:13:25', NULL, 1),
(4, '99/06', '2024-02-16 20:13:37', '2024-02-16 20:13:37', NULL, 1),
(5, '99/07', '2024-02-16 20:13:47', '2024-02-16 20:13:47', NULL, 1),
(6, '99/08', '2024-02-16 20:13:56', '2024-02-16 20:13:56', NULL, 1),
(7, 'a', '2024-02-18 07:38:28', '2024-02-18 07:38:28', NULL, 4),
(8, 's', '2024-02-18 07:38:37', '2024-02-18 07:38:37', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `site_info_block_infos`
--

CREATE TABLE `site_info_block_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `activity_block_id` int(11) NOT NULL,
  `estimate_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worker_rate_rm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_rate_rm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_info_block_infos`
--

INSERT INTO `site_info_block_infos` (`id`, `site_id`, `block_id`, `activity_block_id`, `estimate_qty`, `worker_rate_rm`, `contract_rate_rm`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2', '2', '3', '2024-02-18 07:01:33', '2024-02-18 07:01:36'),
(2, 1, 4, 2, '2', '1', '1', '2024-02-18 07:01:37', '2024-02-18 07:01:39'),
(3, 1, 5, 3, '3', '4', '1', '2024-02-18 07:01:45', '2024-02-18 07:01:47'),
(4, 1, 6, 5, '2', '3', '4', '2024-02-18 07:02:12', '2024-02-18 07:02:14'),
(5, 4, 7, 12, '2', '2', '2', '2024-02-18 08:37:14', '2024-02-18 08:37:18'),
(6, 4, 8, 13, '1', '2', '3', '2024-02-18 08:37:15', '2024-02-18 08:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `site_info_block_tasks`
--

CREATE TABLE `site_info_block_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block_id` int(11) NOT NULL,
  `task_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_machines`
--

CREATE TABLE `site_machines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `machine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_machines`
--

INSERT INTO `site_machines` (`id`, `site_id`, `machine`, `machine_id`, `created_at`, `updated_at`) VALUES
(1, 1, '[\"1\",\"2\"]', '[\"1\"]', '2024-02-16 20:16:05', '2024-02-16 20:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `site_management`
--

CREATE TABLE `site_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_primary_id` int(11) NOT NULL,
  `project_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_information` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_manpowers`
--

CREATE TABLE `site_manpowers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supervisor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operator` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mechanic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_manpowers`
--

INSERT INTO `site_manpowers` (`id`, `site_id`, `manager`, `supervisor`, `operator`, `mechanic`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, '[\"1\"]', 'NAIM', '2024-02-16 20:15:33', '2024-02-16 20:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `site_projects`
--

CREATE TABLE `site_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_projects`
--

INSERT INTO `site_projects` (`id`, `site_id`, `project_name`, `project_value`, `project_code`, `project_info`, `created_at`, `updated_at`) VALUES
(1, 1, 'sadasd', '12', '123123', 'asdasd', '2024-02-18 03:49:48', '2024-02-18 03:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `summary_diesels`
--

CREATE TABLE `summary_diesels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_in` datetime NOT NULL,
  `date_in_supplier` int(11) NOT NULL,
  `date_in_estate` int(11) NOT NULL,
  `date_in_transfer` int(11) NOT NULL,
  `date_out` datetime NOT NULL,
  `date_out_lyk` int(11) NOT NULL,
  `date_out_transfer` int(11) NOT NULL,
  `date_out_contractor` int(11) NOT NULL,
  `date_out_week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_out_balance_forward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gl_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joined_date` date DEFAULT NULL,
  `gl_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ic_passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_expiry` date DEFAULT NULL,
  `permit_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permit_expiry` date DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone_number`, `email_verified_at`, `password`, `joined_date`, `gl_code`, `ic_passport`, `passport_expiry`, `permit_number`, `permit_expiry`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SAHDAN IBRAHIMS', 'SAHDAN', '999@gmail.com', '999', NULL, '$2y$10$TlfIVNvZCZBM77Jstu8ZJ.MdJiP2tzW3d92VRMAId2Y1BU811tLd2', '2024-02-01', '4000-20021', 'kd1234', '2025-02-04', '9980', '2025-01-08', 'OPERATOR', NULL, '2024-02-16 19:38:26', '2024-02-18 09:43:24'),
(2, 'NAIM', 'NAIM', 'dkdk@gmail.com', '9980', NULL, '$2y$10$qdIpYCRMER5ONScVV2PBs.1VAg1lLRldvAiCFYRjCSJ/WNgHhsjoC', '2024-02-01', '400-S0010', 'iito90', '2025-06-18', 'fff', '2024-02-29', 'MECHANIC', NULL, '2024-02-16 19:41:04', '2024-02-16 19:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_capacity` int(11) NOT NULL,
  `gl_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `vehicle_id`, `model`, `type`, `fuel_type`, `fuel_capacity`, `gl_code`, `created_at`, `updated_at`) VALUES
(1, 'LYK221', 'LYK221', 'PC-28', 'BULLDOZER', 'DIESEL', 200, 'GL-0098', '2024-02-16 19:42:48', '2024-02-16 19:42:48'),
(2, 'LYK223', 'LYK223', 'EX200-5', 'EXCAVATOR', 'DIESEL', 200, 'GL-9908', '2024-02-16 19:43:30', '2024-02-16 19:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_expense_transactions`
--

CREATE TABLE `vehicle_expense_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debt` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `worker_expense_transactions`
--

CREATE TABLE `worker_expense_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_date` datetime NOT NULL,
  `tax_date` datetime NOT NULL,
  `ref_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_dr` int(11) NOT NULL,
  `local_cr` int(11) NOT NULL,
  `local_balance` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_done_claims`
--

CREATE TABLE `work_done_claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom` int(11) NOT NULL,
  `claim_quantity` int(11) NOT NULL,
  `contract_qty` int(11) NOT NULL,
  `claim_to_date_qty` int(11) NOT NULL,
  `payment_receive_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `daily_diesels`
--
ALTER TABLE `daily_diesels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_activities`
--
ALTER TABLE `job_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machinery_lists`
--
ALTER TABLE `machinery_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manpowers`
--
ALTER TABLE `manpowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanic_transactions`
--
ALTER TABLE `mechanic_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator_deductions`
--
ALTER TABLE `operator_deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator_transactions`
--
ALTER TABLE `operator_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_block_works`
--
ALTER TABLE `project_block_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_workers`
--
ALTER TABLE `project_workers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_works`
--
ALTER TABLE `project_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_work_activity_list`
--
ALTER TABLE `project_work_activity_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_activities`
--
ALTER TABLE `site_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_activity_blocks`
--
ALTER TABLE `site_activity_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_blocks`
--
ALTER TABLE `site_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_expense_transactions`
--
ALTER TABLE `site_expense_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_fuels`
--
ALTER TABLE `site_fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info_blocks`
--
ALTER TABLE `site_info_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info_block_infos`
--
ALTER TABLE `site_info_block_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info_block_tasks`
--
ALTER TABLE `site_info_block_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_machines`
--
ALTER TABLE `site_machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_management`
--
ALTER TABLE `site_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_manpowers`
--
ALTER TABLE `site_manpowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_projects`
--
ALTER TABLE `site_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_diesels`
--
ALTER TABLE `summary_diesels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_vehicle_id_unique` (`vehicle_id`);

--
-- Indexes for table `vehicle_expense_transactions`
--
ALTER TABLE `vehicle_expense_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker_expense_transactions`
--
ALTER TABLE `worker_expense_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_done_claims`
--
ALTER TABLE `work_done_claims`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_diesels`
--
ALTER TABLE `daily_diesels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_activities`
--
ALTER TABLE `job_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `machinery_lists`
--
ALTER TABLE `machinery_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manpowers`
--
ALTER TABLE `manpowers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mechanic_transactions`
--
ALTER TABLE `mechanic_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `operator_deductions`
--
ALTER TABLE `operator_deductions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operator_transactions`
--
ALTER TABLE `operator_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_block_works`
--
ALTER TABLE `project_block_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_workers`
--
ALTER TABLE `project_workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_works`
--
ALTER TABLE `project_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_work_activity_list`
--
ALTER TABLE `project_work_activity_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_activities`
--
ALTER TABLE `site_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `site_activity_blocks`
--
ALTER TABLE `site_activity_blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `site_blocks`
--
ALTER TABLE `site_blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_expense_transactions`
--
ALTER TABLE `site_expense_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_fuels`
--
ALTER TABLE `site_fuels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_info_blocks`
--
ALTER TABLE `site_info_blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_info_block_infos`
--
ALTER TABLE `site_info_block_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_info_block_tasks`
--
ALTER TABLE `site_info_block_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_machines`
--
ALTER TABLE `site_machines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_management`
--
ALTER TABLE `site_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_manpowers`
--
ALTER TABLE `site_manpowers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_projects`
--
ALTER TABLE `site_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `summary_diesels`
--
ALTER TABLE `summary_diesels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_expense_transactions`
--
ALTER TABLE `vehicle_expense_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `worker_expense_transactions`
--
ALTER TABLE `worker_expense_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_done_claims`
--
ALTER TABLE `work_done_claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
