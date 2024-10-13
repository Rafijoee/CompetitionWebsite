-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2024 at 04:00 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itclagi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `payment_code`, `created_at`, `updated_at`) VALUES
(1, 'ICT Scientific Paper', '01', '2024-04-20 04:38:46', '2024-04-20 04:38:46'),
(2, 'ICT Business Plan', '02', '2024-04-20 04:38:46', '2024-04-20 04:38:46'),
(3, 'Software Development', '03', '2024-04-20 04:38:46', '2024-04-20 04:38:46'),
(4, 'UX Design ', '04', '2024-04-20 04:38:46', '2024-04-20 04:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `member_id` bigint UNSIGNED NOT NULL,
  `tempalate_id` bigint UNSIGNED NOT NULL,
  `certificate_patch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_templates`
--

CREATE TABLE `certificate_templates` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `stage_id` bigint UNSIGNED NOT NULL,
  `template_patch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Apa sih ITC 2024 itu?', 'IT Convert atau yang biasa dikenal sebagai ITC merupakan perlombaan berbayar dengan fokus pada bidang IT dan berskala nasional.', NULL, NULL),
(2, 'Apa tujuan dilaksanakannya kegiatan ITC 2024?', 'Kegiatan ITC bertujuan sebagai wadah untuk mahasiswa di seluruh Indonesia yang tertarik dalam perlombaan di bidang IT dan memiliki ide-ide inovatif untuk menguji ide-ide mereka secara intensif.', NULL, NULL),
(3, 'Ada berapa perlombaan dalam ITC 2024?', 'Terdapat 4 bidang dalam ITC yaitu ICT Business Plan, ICT Scientific Paper, Software Development, dan UX Design.', NULL, NULL),
(4, 'Apakah ada tema khusus dalam perlombaan ITC ini?', 'Tema dalam perlombaan ITC 2024 kali ini yaitu \"Retrospective: The Journey of Technology for The Future\". Untuk selengkapnya bisa dilihat di dalam rulebook.', NULL, NULL),
(5, 'Kapan waktu pelaksanaannya ITC 2024?', 'Kegiatan ITC 2024 dilaksanakan pada 29 Juni 2024 hingga 28 September 2024.', NULL, NULL),
(6, 'Bagaimana tahap-tahap dari ITC 2024?', 'Tahap 1 : TM juri tahap 1 : 22 - 23 Juni 2024, Pengumpulan Tahap 1: 29 Juni - 29 Juli 2024, Penjurian tahap 1 : 29 Juli - 7 Agustus 2024. Tahap 2 : TM juri tahap 2 : 22 - 23 Juni 2024, Pengumpulan Tahap 2 : 12 - 30 Agustus 2024, Penjurian tahap 2 : 30 Agustus - 7 September 2024. Tahap Final : TM juri final : 15 - 16 Agustus 2024, Pengumpulan PPT untuk presentasi Tahap Final : 12 - 21 September 2024, Presentasi final : 28 September 2024.', NULL, NULL),
(7, 'Apakah pendaftaran ITC 2024 dipungut biaya?', 'Pendaftaran ITC gratis ya. untuk informasi selengkapnya bisa cek pada mekanisme pada link berikut ini ya https://docs.google.com/document/d/1cdyP6c_bZTsQ2y-ymCQSlPUgsI2jh0G5kloL8pz_pSQ/edit?usp=sharing', NULL, NULL),
(8, 'Bagaimana cara mendaftar ITC 2024?', 'Pendaftaran dilakukan melalui Website ITC. Untuk link tutorial pendaftarannya menyusul (on progress).', NULL, NULL),
(9, 'Apakah perlombaan ITC 2024 hanya boleh diikuti mahasiswa di Universitas Jember saja?', 'Tidak, ITC merupakan lomba nasional yang bisa diikuti oleh mahasiswa di seluruh Indonesia yang tertarik di bidang IT.', NULL, NULL),
(10, 'Apakah template proposal sudah disediakan dan kapan dibagikan?', 'Sudah, template akan disediakan oleh panitia dan untuk pembagian template sesuai dengan jadwal di website.', NULL, NULL),
(11, 'Apa hubungannya ITC dengan Picture?', 'ITC merupakan perlombaan tingkat nasional yang diselenggarakan oleh Himpunan Mahasiswa Sistem Informasi Fakultas Ilmu Komputer Universitas Jember dan Picture merupakan serangkaian seminar tentang pemanfaatan teknologi yang ada dan didukung oleh berkembangnya pengelolaan informasi, sehingga dapat memperluas wawasan, menunjang kesuksesan dan memotivasi diri agar dapat terus produktif.', NULL, NULL),
(12, 'Dalam satu tim terdiri dari berapa orang?', 'Satu tim terdiri dari maksimal 3 orang dengan 1 mahasiswa menjadi ketua tim.', NULL, NULL),
(13, 'Bagaimana syarat dan ketentuan untuk lomba nya?', 'Syarat dan ketentuan dijelaskan pada Rulebook yang tertera sesuai dengan pembagian perbidangnya.', NULL, NULL),
(14, 'Apakah boleh peserta mendaftar lomba untuk beberapa bidang sekaligus?', 'Bisa, selama tidak menjadi ketua tim lebih dari satu bidang lomba.', NULL, NULL),
(15, 'Bagaimana jika peserta tidak ada/ belum memiliki KTM?', 'Dapat digantikan dengan menyertakan surat pernyataan KTM dari perguruan tinggi masing-masing atau melampirkan scan KRS semester yang ditempuh saat ini.', NULL, NULL),
(16, 'Kapan akun dianggap sudah terverifikasi?', 'Ketika tim bisa memiliki akun di website resmi IT CONVERT, dan status terverifikasi terdapat pada halaman Dashboard.', NULL, NULL),
(17, 'Bagaimana jika institusi saya tidak terdaftar saat akan melakukan pendaftaran tim?', 'Peserta/perwakilan tim yang bersangkutan bisa menghubungi panitia melalui CP yang tertera dengan menyebutkan nama institusinya.', NULL, NULL),
(18, 'Bagaimana sistem penilaian dan penjurian pada ITC 2024?', 'Sistem penilaian dan penjurian pada ITC 2024 dilakukan oleh tim juri yang terdiri dari para profesional dan ahli di bidang IT. Kriteria penilaian mencakup aspek-aspek yang telah dijelaskan pada rolebook, untuk informasi selengkapnya dapat cek rolebooknya ya.', NULL, NULL),
(19, 'Apakah peserta diwajibkan hadir secara offline pada tahap final presentasi ITC 2024?', 'Untuk final presentasi dilaksanakan secara online, jadi tidak wajib hadir secara offline. Akan tetapi jika mau kumpul secara offline bersama anggota tim diperbolehkan dengan syarat kondusif dan internet lancar.', NULL, NULL),
(20, 'Apa saja benefit yang didapat ketika mengikuti kegiatan ITC 2024?', 'Tentu banyak benefit yang bisa didapatkan diantaranya: Pengalaman yang berkesan, Mendapatkan banyak relasi, Penghargaan berupa sertifikat, trophy, dan uang juara, Menambah soft skill di bidang IT, Meningkatkan motivasi dan prestasi.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `love_letters`
--

CREATE TABLE `love_letters` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `stage_id` bigint UNSIGNED NOT NULL,
  `love_letter_patch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_role` enum('ketua','anggota') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `team_id`, `full_name`, `universitas`, `active_certificate`, `member_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(76, 55, 'Satria Belva Nararya 222', 'Universitas Jember', 'TIMTAM/active/g2Q5pzz8ZxnvR6BKrtHHHpQVCjg3mKytU7Q2GcSZ.pdf', 'ketua', '2024-07-03 04:34:21', '2024-07-03 05:10:23', NULL),
(77, 55, 'Rafi Jauhari', 'Universitas Jember', 'TIMTAM/active/XHgYUBNqQsM5XXka7EFRSD0W2GITjVJsaxEyhukY.pdf', 'anggota', '2024-07-03 04:34:21', '2024-07-03 05:10:23', NULL),
(78, 56, 'asd', 'Universitas Jember', 'coba@gmail.com/active/hJePwYtDGXtaszW40vSUhUOVfXDYXahEvIg50fQI.pdf', 'ketua', '2024-07-05 03:01:28', '2024-07-05 04:10:22', NULL),
(79, 56, 'fasfa', 'Universitas Jember', 'coba@gmail.com/active/Ges5fXemn15aWoIMkg4lH91nucZcrV8ky3qnuLvw.pdf', 'anggota', '2024-07-05 03:01:28', '2024-07-05 04:10:22', NULL),
(80, 57, 'Satria Belva Nararya', 'Universitas Jember', 'Test Tim/active/XOC67SLk3F0oy9imiT34HE1ZXY6BbKq42KkLsXaH.pdf', 'ketua', '2024-07-08 02:32:11', '2024-07-08 02:32:11', NULL),
(81, 57, 'Rafi Jauhari', 'Universitas Jember', 'Test Tim/active/e41vhhXDlhj9MD9HQToVAEtTBRHPQU1lIvgEFb3d.pdf', 'anggota', '2024-07-08 02:32:11', '2024-07-08 02:32:11', NULL),
(82, 58, 'Rafi jauhari', 'Universitas Jember', 'rafi/active/2SdHtYH2nybQZRbPY1HtxnD86ovzAjdJrYSKQfue.pdf', 'ketua', '2024-07-12 05:00:35', '2024-07-12 05:02:03', NULL),
(83, 58, 'Rafi Jauhari', 'Universitas Jember', 'rafi/active/jETeGRtICQus2EyGI5qnHIsWO3IsIlvLBAG7hQGL.pdf', 'anggota', '2024-07-12 05:00:35', '2024-07-12 05:02:03', NULL),
(84, 59, 'anggota 1', 'Universitas Jember', 'rtes/active/8UBggfA9EhXmaLPLT2SI5JTVChGAjPtBPNsj4MI0.pdf', 'ketua', '2024-07-18 06:18:23', '2024-07-18 06:19:56', NULL),
(85, 59, 'anggota 2', 'Universitas Jember', 'rtes/active/tkdlTmxypLgelGWxLw54JSv0gDV24FWCa2JMxYZX.pdf', 'anggota', '2024-07-18 06:18:23', '2024-07-18 06:19:56', NULL),
(86, 59, 'anggota 3', 'Universitas Jember', 'rtes/active/5ojDeywkJtrdKpQUdei8XAsXb1scx6Ojd7gQI5kK.pdf', 'ketua', '2024-07-18 06:19:56', '2024-07-18 06:19:56', NULL),
(87, 60, 'KTI', 'KTI', 'KTI/active/m001l1fVpPGRlErtVEWO1TzLto8HXwbkDuxxHCHo.pdf', 'ketua', '2024-07-21 06:02:53', '2024-07-21 06:02:53', NULL),
(88, 60, 'KTI', 'KTI', 'KTI/active/v2yIQb5pg7xlemUQ88Gmq3EGgFmpuPuJj2Yzo003.pdf', 'anggota', '2024-07-21 06:02:53', '2024-07-21 06:02:53', NULL),
(89, 61, 'Busplan', 'Busplan', 'Busplan/active/lNtB6Gqwl2s88ah8nOhkFDqqsQUP0Z2mAnB0mzIw.pdf', 'ketua', '2024-07-21 06:40:33', '2024-07-21 06:40:33', NULL),
(90, 61, 'Busplan', 'Busplan', 'Busplan/active/hti0H77JvhFXi1m53rCJBhOSkVr2A7ablCRW0O2M.pdf', 'anggota', '2024-07-21 06:40:33', '2024-07-21 06:40:33', NULL),
(91, 62, 'Ux Design', 'UxDesign', 'uxdesign/active/eyDaNSqstLnyTM4kyZkQowsZoOLQS2oBFNjgn2s2.pdf', 'ketua', '2024-07-21 06:41:49', '2024-07-21 06:41:49', NULL),
(92, 62, 'Ux Design', 'UxDesign', 'uxdesign/active/DGVYjxJfOXljytHriUKkWdeGBdjEnDT1rhvt3TA3.pdf', 'anggota', '2024-07-21 06:41:49', '2024-07-21 06:41:49', NULL),
(93, 63, 'ux', 'ux', 'ux/active/Ak9EoUmnKEsjEZlHDLi4ujBpGt6SJiho31Wp9c2y.pdf', 'ketua', '2024-07-21 06:43:54', '2024-07-21 06:43:54', NULL),
(94, 63, 'ux', 'ux', 'ux/active/Ehyuq18YRcU54QddpcbGGu5eYdCZgBQrJE4N14jZ.pdf', 'anggota', '2024-07-21 06:43:54', '2024-07-21 06:43:54', NULL),
(97, 65, 'as', 'Unjem', 'tes download/active/as_active_certificate.pdf', 'ketua', '2024-07-25 03:21:17', '2024-07-25 03:21:17', NULL),
(98, 65, 'sa', 'Unjem', 'tes download/active/sa_active_certificate.pdf', 'anggota', '2024-07-25 03:21:17', '2024-07-25 03:21:17', NULL),
(99, 66, 'as', 'as', 'busplan@gmail.com/active/hLJfndZXDayYrKqM17CjjoWIrTZF9ziQQvWUghYR.pdf', 'ketua', '2024-09-04 00:29:31', '2024-09-04 00:29:31', NULL),
(100, 66, 'as', 'as', 'busplan@gmail.com/active/XWs4rl8YK3vJXzYaX5eDFs82OHr9xnieZzgsC2et.pdf', 'anggota', '2024-09-04 00:29:31', '2024-09-04 00:29:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_11_153429_create_categories_table', 1),
(6, '2024_03_11_153430_create_rule_books_table', 1),
(7, '2024_03_11_153431_create_submissions_types_table', 1),
(8, '2024_03_11_153432_create_stages_table', 1),
(9, '2024_03_11_153433_create_submission_details_table', 1),
(10, '2024_03_11_153434_create_universities_table', 1),
(11, '2024_03_11_153435_create_teams_table', 1),
(12, '2024_03_11_153436_create_members_table', 1),
(13, '2024_03_11_153437_create_love_letters_table', 1),
(14, '2024_03_11_153438_create_payments_table', 1),
(15, '2024_03_11_153439_create_team_submissions_table', 1),
(16, '2024_03_11_153440_create_team_submissions_details_table', 1),
(17, '2024_03_11_153441_create_certificate_templates_table', 1),
(18, '2024_03_11_153442_create_certificates_table', 1),
(19, '2024_03_15_162703_create_permission_tables', 1),
(20, '2024_05_19_120942_add_path', 2),
(21, '2024_06_28_072359_create_f_a_q_s_table', 3),
(22, '2024_07_08_092549_remove_column_ktm__from_table_name', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `stage_id` bigint UNSIGNED NOT NULL,
  `payment_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('verified','unverified') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `team_id`, `stage_id`, `payment_path`, `status`, `created_at`, `updated_at`) VALUES
(27, 55, 2, 'paymentsub2/TIMTAM_2.png', 'verified', '2024-08-29 23:38:39', '2024-08-29 23:39:35'),
(28, 55, 3, 'paymentsub2/TIMTAM_3.jpeg', 'verified', '2024-09-09 05:10:53', '2024-09-09 05:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-04-20 04:40:23', '2024-04-20 04:40:23'),
(2, 'ksk', 'web', '2024-04-20 04:40:23', '2024-04-20 04:40:23'),
(3, 'participant', 'web', '2024-04-20 04:40:23', '2024-04-20 04:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rule_books`
--

CREATE TABLE `rule_books` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `stage_id` bigint UNSIGNED NOT NULL,
  `rule_book_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE `stages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`id`, `name`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Stage 1', 'Stage 1 IT Convert', 1, '2024-04-20 04:40:33', '2024-04-20 04:40:33'),
(2, 'Stage 2', 'Stage 2 IT Convert', 1, '2024-04-20 04:40:33', '2024-04-20 04:40:33'),
(3, 'Stage 3', 'Stage 3 IT Convert', 1, '2024-04-20 04:40:33', '2024-04-20 04:40:33'),
(4, 'Stage 1', 'Stage 1 IT Convert', 2, '2024-06-14 03:59:58', '2024-06-13 17:00:00'),
(5, 'Stage 2', 'Stage 2 IT Convert', 2, '2024-07-06 04:00:33', '2024-06-14 04:01:20'),
(6, 'Stage 3', 'Stage 3 IT Convert', 2, '2024-07-14 04:01:55', '2024-06-14 04:02:09'),
(7, 'Stage 1', 'Stage 1 IT Convert', 3, '2024-06-14 04:02:24', '2024-06-14 04:02:24'),
(8, 'Stage 2', 'Stage 2 IT Convert', 3, '2024-06-14 04:02:24', '2024-06-14 04:02:24'),
(9, 'Stage 3', 'Stage 3 IT Convert', 3, '2024-06-14 04:04:30', '2024-06-14 04:04:30'),
(10, 'Stage 1', 'Stage 1 IT Convert', 4, '2024-06-14 04:04:30', '2024-06-14 04:04:30'),
(11, 'Stage 2', 'Stage 2 IT Convert', 4, '2024-06-14 04:05:50', '2024-06-14 04:05:50'),
(12, 'Stage 3 IT Convert', 'Stage 3 IT Convert', 4, '2024-06-14 04:06:17', '2024-06-14 04:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `submissions_types`
--

CREATE TABLE `submissions_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('img','pdf','link') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submissions_types`
--

INSERT INTO `submissions_types` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'proposal', 'pdf', '2024-04-20 04:50:41', '2024-04-20 04:50:41'),
(2, 'prototype', 'link', '2024-04-20 04:50:41', '2024-04-20 04:50:41'),
(3, 'video', 'link', '2024-04-20 04:50:41', '2024-04-20 04:50:41'),
(4, 'ppt', 'pdf', '2024-04-20 04:50:41', '2024-04-20 04:50:41'),
(5, 'source code', 'link', '2024-04-20 04:50:41', '2024-04-20 04:50:41'),
(6, 'poster', 'img', '2024-04-20 04:50:41', '2024-04-20 04:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `submission_details`
--

CREATE TABLE `submission_details` (
  `id` bigint UNSIGNED NOT NULL,
  `submissions_type_id` bigint UNSIGNED NOT NULL,
  `stage_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stage_id` bigint UNSIGNED NOT NULL,
  `verified_status` enum('verified','unverified') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `total_members` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `phone`, `team_name`, `stage_id`, `verified_status`, `category_id`, `total_members`, `created_at`, `updated_at`) VALUES
(55, 17, '085179916463', 'TIMTAM', 3, 'verified', 1, 2, '2024-07-03 04:34:21', '2024-09-09 05:10:42'),
(56, 19, '085179916463', 'coba@gmail.com', 5, 'verified', 2, 2, '2024-07-05 03:01:27', '2024-09-04 00:28:33'),
(57, 20, '081230666004', 'Test Tim', 2, 'verified', 1, 2, '2024-07-08 02:32:10', '2024-08-30 00:01:59'),
(58, 21, '085179916463', 'rafi', 1, 'unverified', 1, 3, '2024-07-12 05:00:35', '2024-07-12 05:02:03'),
(59, 22, '085179916463', 'rtes', 1, 'unverified', 1, 3, '2024-07-18 06:18:23', '2024-07-18 06:18:58'),
(60, 23, '085179916463', 'KTI', 1, 'unverified', 1, 2, '2024-07-21 06:02:53', '2024-07-21 06:02:53'),
(61, 24, '085179916463', 'Busplan', 4, 'unverified', 2, 2, '2024-07-21 06:40:33', '2024-07-21 06:40:33'),
(62, 25, '085179916463', 'uxdesign', 1, 'verified', 4, 2, '2024-07-21 06:41:49', '2024-07-21 06:42:05'),
(63, 26, '08123066004', 'ux', 12, 'verified', 4, 2, '2024-07-21 06:43:54', '2024-07-21 07:01:36'),
(65, 27, '085156832317', 'tes download', 1, 'unverified', 1, 2, '2024-07-25 03:21:17', '2024-07-25 03:21:17'),
(66, 28, '085179916463', 'busplan@gmail.com', 5, 'verified', 2, 2, '2024-09-04 00:29:31', '2024-09-04 00:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `team_submissions`
--

CREATE TABLE `team_submissions` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `stage_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `path_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_submissions`
--

INSERT INTO `team_submissions` (`id`, `team_id`, `stage_id`, `created_at`, `updated_at`, `path_1`, `path_2`, `path_3`) VALUES
(1, 55, 2, NULL, '2024-09-09 05:12:41', 'submission1/ICT Scientific Paper/TIMTAM_ITC2024_3_UXDESIGN_Testing UX Design Rabu 26 Juni_Meningkatkan Pengalaman Pengguna di Aplikasi E-Commerce melalui Desain UX yang Inovatif.zip', NULL, 'final/ICT Scientific Paper/1725883961_TIMTAM_dummy.zip'),
(23, 56, 1, '2024-07-05 03:01:28', '2024-07-30 06:38:17', 'submission1/ICT Business Plan/coba@gmail.com_dummy.zip', NULL, NULL),
(24, 57, 1, '2024-07-08 02:32:11', '2024-07-08 02:32:11', NULL, NULL, NULL),
(25, 58, 1, '2024-07-12 05:00:35', '2024-07-12 05:00:35', NULL, NULL, NULL),
(26, 59, 1, '2024-07-18 06:18:23', '2024-07-18 06:18:23', NULL, NULL, NULL),
(27, 60, 1, '2024-07-21 06:02:53', '2024-07-21 06:02:53', NULL, NULL, NULL),
(28, 61, 4, '2024-07-21 06:40:33', '2024-07-21 06:40:33', NULL, NULL, NULL),
(29, 62, 10, '2024-07-21 06:41:49', '2024-07-21 06:41:49', NULL, NULL, NULL),
(30, 63, 10, '2024-07-21 06:43:54', '2024-07-21 06:43:54', NULL, NULL, NULL),
(32, 65, 1, '2024-07-25 03:21:17', '2024-07-25 03:21:17', NULL, NULL, NULL),
(33, 66, 4, '2024-09-04 00:29:31', '2024-09-04 00:30:07', 'submission1/ICT Business Plan/busplan@gmail.com_dummy.zip', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_submissions_details`
--

CREATE TABLE `team_submissions_details` (
  `id` bigint UNSIGNED NOT NULL,
  `team_submissions_id` bigint UNSIGNED NOT NULL,
  `submissions_type_id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint UNSIGNED NOT NULL,
  `university_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@itc.com', NULL, '$2y$12$1MJQZWCGevRijJvpUoarj.Zutg2BmpYI3GQDKmLRWNbt.hK3KMT8K', NULL, '2024-04-20 04:52:52', '2024-04-20 04:52:52'),
(2, 'ksk', 'ksk@itc.com', NULL, '$2y$12$Oyne.TEnUAFRSbskR.EXyuXsvFkhloMPeAuUrJW.52pFYoxADTQRy', NULL, '2024-04-20 04:52:52', '2024-04-20 04:52:52'),
(3, 'participant', 'participant@itc.com', NULL, '$2y$12$RkE8WmIyoP2DdtivUuUa8OnWQapNuzII/07vQUBwCNy8.KgCho7KS', NULL, '2024-04-20 04:52:52', '2024-04-20 04:52:52'),
(17, 'Rafi Jauhari', 'user@gmail.com', NULL, '$2y$12$.ocWtxcxXf6b2K.M4Ro/DOrdFw.kqtUb/qMAgsoKULPubqvCSpWzC', NULL, '2024-06-28 03:17:35', '2024-06-28 03:17:35'),
(18, 'tes', 'testing@gmail.com', NULL, '$2y$12$ykkvkvBHOPwDRa2sUOSzlOgmah5RmOS7oqbopRZIOZ2K3fjqdDXW.', NULL, '2024-07-05 01:53:00', '2024-07-05 01:53:00'),
(19, 'coba@gmail.com', 'coba@gmail.com', NULL, '$2y$12$EO7ChR8fD2EeBlSWySNZLOqLXXLpnmu2nl4g2Bncbg6Tf.Zbp7QUG', NULL, '2024-07-05 03:00:41', '2024-07-05 03:00:41'),
(20, 'Testing', 'testing123@gmail.com', NULL, '$2y$12$JSlmGUHx9Xd4i8cS0bepqu3UNqvSfecw0YqVOWKnFH04vvsNpIQiy', NULL, '2024-07-08 02:30:13', '2024-07-08 02:30:13'),
(21, 'rafi', 'rafi@gmail.com', NULL, '$2y$12$NNxP0OrdB60swTR19J36rO7TlyoAqsZt97YCVXYeu4HjmDgKUkd3S', NULL, '2024-07-12 05:00:11', '2024-07-12 05:00:11'),
(22, 'coba', 'coba1@gmail.com', NULL, '$2y$12$aNaDy/WQQy.hkSvHCnWuheCfmdmLrPDX1R0iaJBKB35rzv1vz3RMq', NULL, '2024-07-18 06:17:42', '2024-07-18 06:17:42'),
(23, 'tes', 'tes11@gmail.com', NULL, '$2y$12$qv0gwNM7gzz1ZDCV.d4dW.fKo3LwjoxBuMHT4hBzz9ayuYUmkV/Ua', NULL, '2024-07-21 06:02:07', '2024-07-21 06:02:07'),
(24, 'Busplan', 'user12@gmail.com', NULL, '$2y$12$.RNlNa5kaMOUF5Ck8L8rB.HYWe213ypyngnqp33C/wbTAJu1QilRi', NULL, '2024-07-21 06:40:00', '2024-07-21 06:40:00'),
(25, 'uxdesign', 'user13@gmail.com', NULL, '$2y$12$JZcQzYUNk73FL9SLnVAo1OQyoOZSq097bXYfMbrmtE4dFeqVKhAFK', NULL, '2024-07-21 06:41:19', '2024-07-21 06:41:19'),
(26, 'Ux', 'ux@gmail.com', NULL, '$2y$12$5UNLYPS092Brn4RzwFlUY.UdHL0pACH7PQR8TM0lQUMII5glWBNHu', NULL, '2024-07-21 06:42:47', '2024-07-21 06:42:47'),
(27, 'tes download', 'tesdownload@gmail.com', NULL, '$2y$12$if6X/bW5pEyZW8/hkwBTHOX/4Day9KkPQS0KjzrZCd7csQhHGs/v2', NULL, '2024-07-25 03:13:01', '2024-07-25 03:13:01'),
(28, 'busplan@gmail.com', 'busplan@gmail.com', NULL, '$2y$12$RZiLM9dtLIt0MCw5fqr8TeYH40mW4gbg/X8th60V3eRTPcxa4KCp6', NULL, '2024-09-04 00:28:59', '2024-09-04 00:28:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_member_id_foreign` (`member_id`),
  ADD KEY `certificates_tempalate_id_foreign` (`tempalate_id`);

--
-- Indexes for table `certificate_templates`
--
ALTER TABLE `certificate_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificate_templates_category_id_foreign` (`category_id`),
  ADD KEY `certificate_templates_stage_id_foreign` (`stage_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_letters`
--
ALTER TABLE `love_letters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `love_letters_team_id_foreign` (`team_id`),
  ADD KEY `love_letters_stage_id_foreign` (`stage_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_team_id_foreign` (`team_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_team_id_foreign` (`team_id`),
  ADD KEY `payments_stage_id_foreign` (`stage_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `rule_books`
--
ALTER TABLE `rule_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rule_books_category_id_foreign` (`category_id`),
  ADD KEY `rule_books_stage_id_foreign` (`stage_id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stages_category_id_foreign` (`category_id`);

--
-- Indexes for table `submissions_types`
--
ALTER TABLE `submissions_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission_details`
--
ALTER TABLE `submission_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submission_details_submissions_type_id_foreign` (`submissions_type_id`),
  ADD KEY `submission_details_stage_id_foreign` (`stage_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_foreign` (`user_id`),
  ADD KEY `teams_stage_id_foreign` (`stage_id`),
  ADD KEY `teams_category_id_foreign` (`category_id`);

--
-- Indexes for table `team_submissions`
--
ALTER TABLE `team_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_submissions_team_id_foreign` (`team_id`),
  ADD KEY `team_submissions_stage_id_foreign` (`stage_id`);

--
-- Indexes for table `team_submissions_details`
--
ALTER TABLE `team_submissions_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_submissions_details_team_submissions_id_foreign` (`team_submissions_id`),
  ADD KEY `team_submissions_details_submissions_type_id_foreign` (`submissions_type_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_templates`
--
ALTER TABLE `certificate_templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `love_letters`
--
ALTER TABLE `love_letters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rule_books`
--
ALTER TABLE `rule_books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `submissions_types`
--
ALTER TABLE `submissions_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submission_details`
--
ALTER TABLE `submission_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `team_submissions`
--
ALTER TABLE `team_submissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `team_submissions_details`
--
ALTER TABLE `team_submissions_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `certificates_tempalate_id_foreign` FOREIGN KEY (`tempalate_id`) REFERENCES `tempalates` (`id`);

--
-- Constraints for table `certificate_templates`
--
ALTER TABLE `certificate_templates`
  ADD CONSTRAINT `certificate_templates_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `certificate_templates_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`);

--
-- Constraints for table `love_letters`
--
ALTER TABLE `love_letters`
  ADD CONSTRAINT `love_letters_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`),
  ADD CONSTRAINT `love_letters_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

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
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`),
  ADD CONSTRAINT `payments_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rule_books`
--
ALTER TABLE `rule_books`
  ADD CONSTRAINT `rule_books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `rule_books_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`);

--
-- Constraints for table `stages`
--
ALTER TABLE `stages`
  ADD CONSTRAINT `stages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `submission_details`
--
ALTER TABLE `submission_details`
  ADD CONSTRAINT `submission_details_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`),
  ADD CONSTRAINT `submission_details_submissions_type_id_foreign` FOREIGN KEY (`submissions_type_id`) REFERENCES `submissions_types` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `teams_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`),
  ADD CONSTRAINT `teams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `team_submissions`
--
ALTER TABLE `team_submissions`
  ADD CONSTRAINT `team_submissions_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`),
  ADD CONSTRAINT `team_submissions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `team_submissions_details`
--
ALTER TABLE `team_submissions_details`
  ADD CONSTRAINT `team_submissions_details_submissions_type_id_foreign` FOREIGN KEY (`submissions_type_id`) REFERENCES `submissions_types` (`id`),
  ADD CONSTRAINT `team_submissions_details_team_submissions_id_foreign` FOREIGN KEY (`team_submissions_id`) REFERENCES `team_submissions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
