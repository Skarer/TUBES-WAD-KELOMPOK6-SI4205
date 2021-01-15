-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2021 pada 16.31
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `attedances`
--

CREATE TABLE `attedances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `mata_pelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `attedances`
--

INSERT INTO `attedances` (`id`, `nis`, `nama`, `kelas`, `tanggal`, `mata_pelajaran`, `absen`, `created_at`, `updated_at`) VALUES
(9, '1202202158', 'Adelri Muhammad', '12-IPA3', '2021-01-12', 'Pkn', 'Hadir', '2021-01-12 00:38:27', '2021-01-12 00:38:27'),
(10, '1202202160', 'Randy Ferdiawan', '12-IPA1', '2021-01-13', 'Kimia', 'Hadir', '2021-01-12 00:39:04', '2021-01-12 00:39:04'),
(11, '1202202171', 'Suci Fitri', '12-IPA2', '2021-01-13', 'Fisika', 'Tidak Hadir', '2021-01-12 00:39:59', '2021-01-12 00:39:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mata_pelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `kelas`, `hari`, `jam_mulai`, `jam_selesai`, `mata_pelajaran`, `created_at`, `updated_at`) VALUES
(7, '12-IPA1', 'Senin', '06:45', '08:30', 'Matematika', '2021-01-12 00:43:57', '2021-01-12 00:43:57'),
(8, '12-IPA2', 'Pilih', '09:45', '10:30', 'Pilih', '2021-01-12 00:44:30', '2021-01-12 01:18:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_berakhir` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama`, `deskripsi`, `kategori`, `tanggal`, `jam_mulai`, `jam_berakhir`, `tempat`, `created_at`, `updated_at`) VALUES
(6, 'open hey', 'aaaaaaaaaaaaaaaaaaaaa', 'online', '2021-01-12', '12:16:00', '10:16:00', 'Google Meet', '2021-01-10 19:16:23', '2021-01-11 22:10:41'),
(7, 'Jumat Berkah', 'Ayo berbagi kebaikan', 'offline', '2021-01-14', '07:11:00', '15:11:00', 'Masjid Al-Jafar', '2021-01-11 22:11:25', '2021-01-12 00:37:38');

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
-- Struktur dari tabel `join`
--

CREATE TABLE `join` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_12_27_010545_create_scores_table', 1),
(5, '2020_12_28_043412_create_courses_table', 1),
(6, '2021_01_03_022846_create_students_table', 1),
(7, '2021_01_03_041044_create_attedances_table', 1),
(8, '2021_01_09_050648_create_events_table', 1),
(9, '2021_01_09_122433_create_profilgurus_table', 1),
(10, '2021_01_14_134332_create_join_table', 2),
(11, '2021_01_14_134938_create_peserta_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('suci@gmail.com', '$2y$10$RkdRi2vMJDztIeziS.rh0.qIzUmHdyJhA/EZXM0iV3FbX9NnO3BKq', '2021-01-10 19:36:52'),
('deles@gmail.com', '$2y$10$6dRzeBjIQ6bPYGeIzUiUruDJSa7ceTgJJXpxVkf5.Yyk2GfQzKcsy', '2021-01-10 19:37:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaevent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `kelas`, `nis`, `namaevent`, `created_at`, `updated_at`) VALUES
(1, 'Adelri', '12-IPA2', '120218222', 'Jumat Berkah', '2021-01-14 07:50:20', '2021-01-14 07:50:20'),
(3, 'Adelri', '12-IPA2', '12222222', 'Jumat Berkah', '2021-01-14 08:20:35', '2021-01-14 08:20:35'),
(4, 'Deles', '12-IPA3', '12222222', 'Open Hey', '2021-01-14 08:21:44', '2021-01-14 08:21:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilgurus`
--

CREATE TABLE `profilgurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mata_pelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `scores`
--

INSERT INTO `scores` (`id`, `nis`, `nama`, `mata_pelajaran`, `nilai_uts`, `nilai_uas`, `created_at`, `updated_at`) VALUES
(9, '1202202158', 'Adelri', 'B.Inggris', '80', '90', '2021-01-12 00:41:18', '2021-01-12 00:41:18'),
(10, '1202202158', 'Adelri', 'Geografi', '80', '90', '2021-01-12 00:41:48', '2021-01-12 00:41:48'),
(11, '1202202160', 'Randy Ferdiawan', 'Matematika', '80', '90', '2021-01-12 00:42:13', '2021-01-12 00:42:13'),
(12, '1202202160', 'Randy Ferdiawan', 'B.Inggris', '80', '50', '2021-01-12 00:42:34', '2021-01-12 00:42:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `user`, `name`, `nis`, `ttl`, `alamat`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'siswa', 'Siswa', '111', '2021-01-13', 'bandung', 'suci@gmail.com', NULL, 'sucicantik', NULL, '2021-01-10 09:26:19', '2021-01-10 10:27:40'),
(7, 'guru', 'Guru', '1199', '2021-01-20', 'jakarta', 'guru@gmail.com', NULL, '$2y$10$tRipLHH/Hl/6VLmIwFzga.uWOLM2ta764Dk3rW0x4GizThycE9OJG', NULL, '2021-01-10 09:56:41', '2021-01-10 09:56:41'),
(8, 'siswa', 'Adelri Jo', '1202184219', '2000-03-11', 'Jakarta', 'adelri@gmail.com', NULL, '$2y$10$iZKQecMIMuepExQGM3TYl.I2ZToIVgeqRch6AREtfHmo56VFtWMdS', NULL, '2021-01-10 18:12:19', '2021-01-12 01:22:48'),
(9, 'guru', 'Deles', '1', '2021-01-17', 'lalalala', 'deles@gmail.com', NULL, '$2y$10$qlIDtukRZ39dkx4EbiimDOV.gq2VpekXHmVv0Li2Q8D6PZ9XABwUe', NULL, '2021-01-10 18:13:47', '2021-01-10 18:13:47'),
(10, 'siswa', 'Ziran', '12345', '2021-01-13', 'bandung', 'adelrim@gmail.com', NULL, '$2y$10$v3IKIe/urEXTMI56nVatVeuRV4SOUwwgO/6cJSmlGYo2TEXS1iIie', NULL, '2021-01-11 21:30:48', '2021-01-11 21:30:48'),
(11, 'guru', 'Cool Guy', '1202184219', '1985-03-12', 'Cimahi', 'cool@gmail.com', NULL, '$2y$10$tatTcbEcIEAzNFTqplVEMOmTI0/q4TzWbF2r3o9xJn.MGs1dBon6C', NULL, '2021-01-12 00:57:02', '2021-01-12 00:57:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `attedances`
--
ALTER TABLE `attedances`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `join`
--
ALTER TABLE `join`
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
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profilgurus`
--
ALTER TABLE `profilgurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT untuk tabel `attedances`
--
ALTER TABLE `attedances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `join`
--
ALTER TABLE `join`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profilgurus`
--
ALTER TABLE `profilgurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
