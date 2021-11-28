-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2021 pada 17.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `category`, `slug_category`, `images`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Anime', '', 'assets/gallery/9HHz9cOThvVGy20kTNvhjfFplAr12MDpo8h9J3bN.png', NULL, '2021-11-27 07:02:54', '2021-11-27 07:02:54'),
(2, 'Anime', '', 'assets/gallery/Zful4n2DuyCOUkPg0Dlhd4w5LKtjVkQLAIjz7paq.png', NULL, '2021-11-27 07:05:15', '2021-11-27 07:05:15'),
(3, 'Anime', '', 'assets/category/503tZcUi6nA7noAydhnOp2xlQmE9c8TGhaCwSfLV.png', '2021-11-27 07:18:05', '2021-11-27 07:06:50', '2021-11-27 07:18:05'),
(4, 'Anime', '', 'assets/category\\public', '2021-11-27 07:18:00', '2021-11-27 07:10:57', '2021-11-27 07:18:00'),
(5, 'Anime', '', 'assets/category\\$imagename', '2021-11-27 07:17:45', '2021-11-27 07:12:08', '2021-11-27 07:17:45'),
(6, 'Anime', '', 'assets/category/XgGh4hiRnBYkLu4D9cupQ1dVxu4V0sz544CE8KHT.png', '2021-11-27 07:17:40', '2021-11-27 07:15:31', '2021-11-27 07:17:40'),
(7, 'Anime', 'anime', 'assets/category/fPkTDwX134FoWgWvTSsf06dXbUJKw1oA7OWZNtk3.png', '2021-11-27 07:51:58', '2021-11-27 07:26:50', '2021-11-27 07:51:58'),
(8, 'Anime', 'anime', 'assets/category/K3v64JtxN5depGtnpLvTVfoziEdcvQDXxjOJRLSt.png', '2021-11-27 07:51:55', '2021-11-27 07:29:48', '2021-11-27 07:51:55'),
(9, 'Anime', 'anime', 'assets/category/OftFInf0VDvYAHSAbLJyGETl7pm0i0gpzKw5OKG4.png', '2021-11-27 07:51:49', '2021-11-27 07:30:55', '2021-11-27 07:51:49'),
(10, 'Anime', 'anime', 'assets/category/TD0QyZA9aSwyjLfERpkdsAypycaZLf7RzE7ANQIx.png', '2021-11-27 07:51:44', '2021-11-27 07:32:11', '2021-11-27 07:51:44'),
(11, 'Anime', 'anime', 'public/assets/category/eRPP623XzrVYV27zSSUfoR6tp8iXXpvFykZko2Gb.png', '2021-11-27 07:51:39', '2021-11-27 07:44:20', '2021-11-27 07:51:39'),
(12, 'Anime', 'anime', 'assets/category/XXMYgwMGY5STwTAeM2b9s40TO9G1aheMMaTWaNWX.png', '2021-11-27 07:51:35', '2021-11-27 07:45:47', '2021-11-27 07:51:35'),
(13, 'Anime', 'anime', 'D:\\web\\video\\public\\assets/images\\LxZgOzObNoxa8HgrCPC4gwERxS1PxSjouoWVn2IR.png', '2021-11-27 08:16:36', '2021-11-27 07:52:09', '2021-11-27 08:16:36'),
(14, 'Anime', 'anime', 'D:\\web\\video\\public\\assets/category\\sjNh8dwbFJ4kqULZzJqJBV4adlfoADYvebAd5W6c.png', '2021-11-27 08:16:33', '2021-11-27 07:57:34', '2021-11-27 08:16:33'),
(15, 'Anime', 'anime', 'assets/category/UYe2CVf3ox0dMy2tbRcdhPqyKlnsfQeao7SHMKf8.png', '2021-11-27 08:16:29', '2021-11-27 08:12:03', '2021-11-27 08:16:29'),
(16, 'Anime', 'anime', 'assets/category/SDEYlqQpbiZGVme0DMWt262JUYhUwt6RiNz9MQXq.png', '2021-11-27 08:16:30', '2021-11-27 08:13:35', '2021-11-27 08:16:30'),
(17, 'Anime', 'anime', 'assets/gallery/2pa00B7M1CpPVA91ufXoTYm89HCohJP2hxMsiduv.png', '2021-11-27 08:16:23', '2021-11-27 08:15:09', '2021-11-27 08:16:23'),
(18, 'Anime', 'anime', 'assets/category/mxW81qWjelyZCeF6aDhnUiSIjfZc5dNw1MO0iUdZ.png', '2021-11-27 08:16:26', '2021-11-27 08:15:57', '2021-11-27 08:16:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_videos`
--

CREATE TABLE `detail_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_videos`
--

INSERT INTO `detail_videos` (`id`, `categories_id`, `title`, `slug`, `about`, `images`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Naruto', 'naruto', 'Ini Video Tentang Naruto dan kawan-kawan', 'assets/thumbnails/ZX5AsAw23IOQiFs2MQcNCsbNi4cCd6e1BR4QJShj.jpg', NULL, '2021-11-27 23:21:17', '2021-11-27 23:39:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_videos_id` int(11) NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `detail_videos_id`, `video`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/gallery/tVxe74nP8uXyVb0nnfxZGYTNDV7azeN4Kynu7vT4.mp4', NULL, '2021-11-28 00:07:57', '2021-11-28 00:07:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_26_062129_add_roles_field_to_users_table', 1),
(6, '2021_11_26_063619_create_categories_table', 2),
(7, '2021_11_26_064912_create_detail_videos_table', 2),
(8, '2021_11_26_142313_create_galleries_table', 2),
(9, '2021_11_26_142658_create_transactions_table', 2),
(10, '2021_11_28_143537_add_username_field_to_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_videos_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `detail_videos_id`, `users_id`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'PENDING', NULL, '2021-11-28 08:53:32', '2021-11-28 08:53:32'),
(2, 1, 2, 'PENDING', NULL, '2021-11-28 08:54:01', '2021-11-28 08:54:01'),
(3, 1, 2, 'PENDING', NULL, '2021-11-28 08:54:47', '2021-11-28 08:54:47'),
(4, 1, 2, 'PENDING', NULL, '2021-11-28 08:54:58', '2021-11-28 08:54:58'),
(5, 1, 2, 'PENDING', NULL, '2021-11-28 08:55:48', '2021-11-28 08:55:48'),
(6, 1, 2, 'PENDING', NULL, '2021-11-28 08:56:11', '2021-11-28 08:56:11'),
(7, 1, 2, 'PENDING', NULL, '2021-11-28 08:56:36', '2021-11-28 08:56:36'),
(8, 1, 2, 'PENDING', NULL, '2021-11-28 08:58:22', '2021-11-28 08:58:22'),
(9, 1, 2, 'PENDING', NULL, '2021-11-28 08:58:56', '2021-11-28 08:58:56'),
(10, 1, 2, 'PENDING', NULL, '2021-11-28 08:59:27', '2021-11-28 08:59:27'),
(11, 1, 2, 'PENDING', NULL, '2021-11-28 09:01:11', '2021-11-28 09:01:11'),
(12, 1, 2, 'PENDING', NULL, '2021-11-28 09:01:33', '2021-11-28 09:01:33'),
(13, 1, 2, 'PENDING', NULL, '2021-11-28 09:01:46', '2021-11-28 09:01:46'),
(14, 1, 2, 'PENDING', NULL, '2021-11-28 09:02:04', '2021-11-28 09:02:04'),
(15, 1, 2, 'PENDING', NULL, '2021-11-28 09:02:17', '2021-11-28 09:02:17'),
(16, 1, 2, 'PENDING', NULL, '2021-11-28 09:02:42', '2021-11-28 09:02:42'),
(17, 1, 2, 'PENDING', NULL, '2021-11-28 09:03:01', '2021-11-28 09:03:01'),
(18, 1, 2, 'PENDING', NULL, '2021-11-28 09:06:43', '2021-11-28 09:06:43'),
(19, 1, 2, 'PENDING', NULL, '2021-11-28 09:09:16', '2021-11-28 09:09:16'),
(20, 1, 2, 'PENDING', NULL, '2021-11-28 09:09:56', '2021-11-28 09:09:56'),
(21, 1, 2, 'PENDING', NULL, '2021-11-28 09:10:47', '2021-11-28 09:10:47'),
(22, 1, 2, 'PENDING', NULL, '2021-11-28 09:11:35', '2021-11-28 09:11:35'),
(23, 1, 2, 'PENDING', NULL, '2021-11-28 09:15:38', '2021-11-28 09:15:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'admin', 'admin@admin', NULL, '$2y$10$hWGUGunDlcKuqfruT2iJ..9m4NNFOTfs2fTDFHj722oRPbzPIdWO6', NULL, '2021-11-26 21:59:17', '2021-11-26 21:59:17', 'ADMIN', 'admin'),
(2, 'rief', 'rief@gmail.com', NULL, '$2y$10$1beKOM2siD63sCOU0vglmeLhBUlSQb.Oynd2TfDJHLBsPOMNRW7Z6', NULL, '2021-11-28 07:45:35', '2021-11-28 07:45:35', 'USER', 'rief');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_videos`
--
ALTER TABLE `detail_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `detail_videos`
--
ALTER TABLE `detail_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
