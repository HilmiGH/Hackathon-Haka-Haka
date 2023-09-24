-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Sep 2023 pada 01.37
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hakahaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` bigint(20) UNSIGNED NOT NULL,
  `nama_artikel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_artikel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date_artikel` date NOT NULL,
  `foto_artikel` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_keranjang`
--

CREATE TABLE `detail_keranjang` (
  `id_detail_keranjang` bigint(20) UNSIGNED NOT NULL,
  `id_keranjang` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `harga_produk` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_keranjang`
--

INSERT INTO `detail_keranjang` (`id_detail_keranjang`, `id_keranjang`, `nama_produk`, `jumlah_produk`, `harga_produk`, `created_at`, `updated_at`) VALUES
(1, 1, 'Produk A', 3, '100.00', '2023-09-22 06:37:40', '2023-09-22 06:37:40'),
(2, 1, 'Produk B', 2, '50.00', '2023-09-22 06:37:40', '2023-09-22 06:37:40'),
(3, 1, 'Produk C', 4, '75.00', '2023-09-22 06:37:40', '2023-09-22 06:37:40'),
(4, 2, 'Produk B', 1, '120.00', '2023-09-22 06:37:40', '2023-09-22 06:37:40'),
(5, 2, 'Produk E', 2, '80.00', '2023-09-22 06:37:40', '2023-09-22 06:37:40'),
(6, 3, 'Produk F', 2, '65.00', '2023-09-22 06:37:40', '2023-09-22 06:37:40'),
(7, 3, 'Produk A', 3, '90.00', '2023-09-22 06:37:40', '2023-09-22 06:37:40'),
(8, 4, 'Produk H', 1, '110.00', '2023-09-22 06:37:40', '2023-09-22 06:37:40'),
(9, 4, 'Produk C', 2, '70.00', '2023-08-01 06:37:40', '2023-09-22 06:37:40');

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
-- Struktur dari tabel `jadwal_workshops`
--

CREATE TABLE `jadwal_workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jadwal_workshop` bigint(20) UNSIGNED NOT NULL,
  `lokasi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_tanggal` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_pukul` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rd` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_workshops`
--

INSERT INTO `jadwal_workshops` (`id`, `jadwal_workshop`, `lokasi`, `jadwal_tanggal`, `jadwal_pukul`, `link_rd`, `created_at`, `updated_at`) VALUES
(1, 1, 'Surabaya', '20 November 2023', '10.00 WIB - 13.00 WIB', 'link_rundown_1', '2023-09-23 22:17:07', '2023-09-23 22:17:07'),
(2, 1, 'Surabaya', '21 November 2023', '09.00 WIB - 12.00 WIB', 'link_rundown_2', '2023-09-23 22:17:07', '2023-09-23 22:17:07'),
(3, 1, 'Surabaya', '22 November 2023', '14.00 WIB - 17.00 WIB', 'link_rundown_3', '2023-09-23 22:17:07', '2023-09-23 22:17:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` bigint(20) UNSIGNED NOT NULL,
  `ip_pengguna` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `ip_pengguna`, `created_at`, `updated_at`) VALUES
(1, '192.168.1.1', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(2, '192.168.1.2', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(3, '192.168.1.3', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(4, '192.168.1.4', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(5, '192.168.1.5', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(6, '192.168.1.6', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(7, '192.168.1.7', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(8, '192.168.1.8', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(9, '192.168.1.9', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(10, '192.168.1.10', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(11, '192.168.1.11', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(12, '192.168.1.12', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(13, '192.168.1.13', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(14, '192.168.1.14', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(15, '192.168.1.15', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(16, '192.168.1.16', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(17, '192.168.1.17', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(18, '192.168.1.18', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(19, '192.168.1.19', '2023-09-22 06:34:17', '2023-09-22 06:34:17'),
(20, '192.168.1.20', '2023-09-22 06:34:17', '2023-09-22 06:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_workshops`
--

CREATE TABLE `materi_workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materi_workshop` bigint(20) UNSIGNED NOT NULL,
  `judul_modul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_modul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `materi_workshops`
--

INSERT INTO `materi_workshops` (`id`, `materi_workshop`, `judul_modul`, `deskripsi_modul`, `created_at`, `updated_at`) VALUES
(5, 1, 'Pemahaman Dasar Kewirausahaan di KIM Surabaya', 'Modul ini akan memperkenalkan peserta kepada dasar-dasar kewirausahaan yang relevan dengan Kecil Menengah (KIM) di Surabaya. Ini termasuk konsep dasar, manfaat, dan tantangan dalam memulai dan mengelola bisnis di kawasan industri.', NULL, NULL),
(6, 1, 'Rencana Bisnis dan Strategi Pengembangan KIM', 'Ini adalah deskripsi Modul 2.', NULL, NULL),
(7, 1, 'Manajemen Keuangan dan Permodalan Untuk KIM', 'Ini adalah deskripsi Modul 1 untuk workshop kedua.', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_09_21_063833_create_produk_table', 2),
(7, '2023_09_21_111618_create_kategoriproduk_table', 2),
(8, '2023_09_21_114011_create_kustomisasi_table', 3),
(9, '2023_09_21_114546_create_artikel_table', 4),
(10, '2023_09_21_122324_create_keranjang_table', 4),
(11, '2023_09_21_123014_create_detail_keranjang_table', 4),
(12, '2023_09_21_123556_create_transaksi_table', 4),
(13, '2023_09_21_063833_create_produks_table', 5),
(14, '2023_09_21_160620_create_produks_table', 6),
(15, '2023_09_21_161148_create_transaksis_table', 7),
(16, '2023_09_21_161857_create_pelanggans_table', 8),
(17, '2023_09_21_165149_create_produks_table', 9),
(18, '2023_09_21_165158_create_transaksis_table', 9),
(19, '2023_09_21_165206_create_pelanggans_table', 10),
(20, '2023_09_22_061559_create_keranjang_table', 11),
(21, '2023_09_22_061842_create_transaksis_table', 12),
(22, '2023_09_22_061949_create_detail_keranjang_table', 12),
(23, '2023_09_23_030842_create_produks_table', 13),
(24, '2023_09_23_033342_create_umkms_table', 14),
(25, '2023_09_23_033806_create_produks_table', 15),
(26, '2023_09_23_050350_create_produks_table', 16),
(27, '2023_09_23_050448_create_umkms_table', 16),
(28, '2023_09_23_204241_create_materi_workshops_table', 17),
(29, '2023_09_23_204250_create_jadwal_workshops_table', 17);

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
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_pelanggan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomorhp_pelanggan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pelanggan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan_tambahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_gabung` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `email_pelanggan`, `nomorhp_pelanggan`, `alamat_pelanggan`, `catatan_tambahan`, `tanggal_gabung`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'P', 'johndoe@example.com', '0811234567', '123 Main Street, City', 'Catatan Tambahan John Doe', '2023-09-14', NULL, NULL),
(2, 'Jane Smith', 'P', 'janesmith@example.com', '0812345678', '456 Elm Avenue, Town', 'Catatan Tambahan Jane Smith', '2023-09-14', NULL, NULL),
(3, 'Alice Johnson', 'P', 'alicejohnson@example.com', '0813456789', '789 Oak Road, Village', 'Catatan Tambahan Alice Johnson', '2023-09-21', NULL, NULL),
(4, 'Michael Brown', 'P', 'michaelbrown@example.com', '0819876543', '321 Pine Lane, Suburb', 'Catatan Tambahan Michael Brown', '2023-09-21', NULL, NULL),
(5, 'William Davis', 'P', 'williamdavis@example.com', '0818765432', '654 Birch Street, Hamlet', 'Catatan Tambahan William Davis', '2023-09-21', NULL, NULL),
(6, 'Linda Wilson', 'P', 'lindawilson@example.com', '0817654321', '987 Cedar Road, County', 'Catatan Tambahan Linda Wilson', '2023-09-21', NULL, NULL),
(7, 'Robert Lee', 'P', 'robertlee@example.com', '0816543210', '234 Redwood Drive, State', 'Catatan Tambahan Robert Lee', '2023-09-21', NULL, NULL),
(8, 'Mary Evans', 'P', 'maryevans@example.com', '0815432109', '876 Spruce Avenue, Province', 'Catatan Tambahan Mary Evans', '2023-09-21', NULL, NULL),
(9, 'David Rodriguez', 'P', 'davidrodriguez@example.com', '0814321098', '567 Willow Lane, Territory', 'Catatan Tambahan David Rodriguez', '2023-09-21', NULL, NULL),
(10, 'Patricia Martinez', 'P', 'patriciamartinez@example.com', '0813210987', '123 Elm Street, District', 'Catatan Tambahan Patricia Martinez', '2023-09-21', NULL, NULL),
(11, 'Richard Hernandez', 'P', 'richardhernandez@example.com', '0812109876', '345 Oak Drive, Region', 'Catatan Tambahan Richard Hernandez', '2023-09-21', NULL, NULL),
(12, 'Susan Lopez', 'P', 'susanlopez@example.com', '0811098765', '789 Maple Road, Division', 'Catatan Tambahan Susan Lopez', '2023-09-21', NULL, NULL),
(13, 'James Gonzalez', 'P', 'jamesgonzalez@example.com', '0810987654', '345 Pine Avenue, Area', 'Catatan Tambahan James Gonzalez', '2023-09-21', NULL, NULL),
(14, 'Maria Young', 'P', 'mariayoung@example.com', '0819876543', '678 Cedar Lane, Sector', 'Catatan Tambahan Maria Young', '2023-09-21', NULL, NULL),
(15, 'John Allen', 'P', 'johnallen@example.com', '0818765432', '234 Birch Street, Zone', 'Catatan Tambahan John Allen', '2023-09-21', NULL, NULL),
(16, 'Karen Hall', 'P', 'karenhall@example.com', '0817654321', '567 Redwood Road, Precinct', 'Catatan Tambahan Karen Hall', '2023-09-21', NULL, NULL),
(17, 'Charles Walker', 'P', 'charleswalker@example.com', '0816543210', '123 Redwood Drive, Ward', 'Catatan Tambahan Charles Walker', '2023-09-21', NULL, NULL),
(18, 'Nancy Turner', 'P', 'nancyturner@example.com', '0815432109', '789 Oak Street, Municipality', 'Catatan Tambahan Nancy Turner', '2023-09-21', NULL, NULL),
(19, 'Thomas Cook', 'P', 'thomascook@example.com', '0814321098', '345 Maple Avenue, Borough', 'Catatan Tambahan Thomas Cook', '2023-09-21', NULL, NULL),
(20, 'Lisa Hill', 'L', 'lisahill@example.com', '0813210987', '678 Pine Lane, Parish', 'Catatan Tambahan Lisa Hill', '2023-09-21', NULL, NULL),
(21, 'John Smith', 'L', 'johnsmith@example.com', '0811111111', '123 Oak Street, City', 'Catatan Tambahan John Smith', '2023-09-15', NULL, NULL),
(22, 'Emily Johnson', 'L', 'emilyjohnson@example.com', '0812222222', '456 Elm Avenue, Town', 'Catatan Tambahan Emily Johnson', '2023-09-15', NULL, NULL),
(23, 'Michael Davis', 'L', 'michaeldavis@example.com', '0813333333', '789 Pine Lane, Village', 'Catatan Tambahan Michael Davis', '2023-09-12', NULL, NULL),
(24, 'Sarah Wilson', 'L', 'sarahwilson@example.com', '0814444444', '987 Cedar Road, Suburb', 'Catatan Tambahan Sarah Wilson', '2023-09-12', NULL, NULL),
(25, 'Daniel Miller', 'L', 'danielmiller@example.com', '0815555555', '234 Willow Drive, County', 'Catatan Tambahan Daniel Miller', '2023-09-12', NULL, NULL),
(26, 'Linda Martinez', 'L', 'lindamartinez@example.com', '0816666666', '567 Oak Street, State', 'Catatan Tambahan Linda Martinez', '2023-09-12', NULL, NULL),
(27, 'Robert Taylor', 'L', 'roberttaylor@example.com', '0817777777', '123 Maple Avenue, District', 'Catatan Tambahan Robert Taylor', '2023-09-11', NULL, NULL),
(28, 'Karen Clark', 'L', 'karenclark@example.com', '0818888888', '789 Pine Drive, Region', 'Catatan Tambahan Karen Clark', '2023-09-11', NULL, NULL),
(29, 'Richard Turner', 'L', 'richardturner@example.com', '0819999999', '234 Oak Lane, Division', 'Catatan Tambahan Richard Turner', '2023-09-11', NULL, NULL),
(30, 'Maria Scott', 'L', 'mariascott@example.com', '0810000000', '567 Cedar Road, Area', 'Catatan Tambahan Maria Scott', '2023-09-11', NULL, NULL),
(31, 'adhitya pratama', 'L', 'adhityapmp@gmail.com', '0811212121211221', 'jalan gebang wetan', NULL, '2023-09-22', NULL, NULL);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `id_umkm` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_produk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk` decimal(10,2) NOT NULL,
  `nomor_pemesanan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `produk_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id_produk`, `id_umkm`, `nama_produk`, `kategori_produk`, `harga_produk`, `nomor_pemesanan`, `created_at`, `updated_at`, `produk_img`) VALUES
(1, 1, 'Gelang', 'Kerajinan Tangan', '10.50', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'gelang.jpg'),
(2, 1, 'Tas', 'Kerajinan Tangan', '25.00', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'tas.jpg'),
(3, 1, 'Tali Masker', 'Kerajinan Tangan', '5.75', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'tali_masker.jpg'),
(4, 2, 'Bakso Jojon', 'Makanan', '15.99', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'bakso_jojon.jpg'),
(5, 2, 'Mie Ayam', 'Makanan', '12.75', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'mie_ayam.jpg'),
(6, 2, 'Es Teh Manis', 'Minuman', '5.50', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'es_teh_manis.jpg'),
(7, 4, 'Spion Motor', 'Perlengkapan Motor', '30.00', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'spion_motor.jpg'),
(8, 4, 'Lampu Motor', 'Perlengkapan Motor', '20.50', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'lampu_motor.jpg'),
(9, 4, 'Knalpot Motor', 'Perlengkapan Motor', '50.75', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'knalpot_motor.jpg'),
(10, 3, 'Kue Brownies', 'Makanan', '8.99', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'kue_brownies.jpg'),
(11, 3, 'Kue Tart', 'Makanan', '18.50', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'kue_tart.jpg'),
(12, 3, 'Kue Lapis', 'Makanan', '12.75', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'kue_lapis.jpg'),
(13, 5, 'Nasi Goreng', 'Makanan', '15.00', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'nasi_goreng.jpg'),
(14, 5, 'Ayam Goreng', 'Makanan', '12.50', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'ayam_goreng.jpg'),
(15, 5, 'Mie Goreng', 'Makanan', '11.75', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'mie_goreng.jpg'),
(16, 6, 'Kue Bolu', 'Makanan', '9.99', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'kue_bolu.jpg'),
(17, 6, 'Kue Keju', 'Makanan', '11.25', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'kue_keju.jpg'),
(18, 6, 'Kue Lapis', 'Makanan', '10.75', '083192925747', '2023-09-23 10:33:53', '2023-09-23 10:33:53', 'kue_lapis.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_keranjang` bigint(20) UNSIGNED NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `id_keranjang`, `total_harga`, `created_at`, `status_transaksi`) VALUES
(1, 1, '150.00', '2023-09-22 06:43:39', 'Sukses'),
(2, 2, '200.00', '2023-09-22 06:43:39', 'Sukses'),
(3, 3, '200.00', '2023-09-22 06:43:39', 'Gagal'),
(4, 4, '200.00', '2023-09-22 06:43:39', 'Sukses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkms`
--

CREATE TABLE `umkms` (
  `id_umkm` bigint(20) UNSIGNED NOT NULL,
  `nama_usaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_usaha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline_usaha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_usaha` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_izin_usaha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_usaha` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` decimal(5,2) NOT NULL,
  `jumlah_ulasan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `umkm_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `umkms`
--

INSERT INTO `umkms` (`id_umkm`, `nama_usaha`, `kategori_usaha`, `tagline_usaha`, `alamat_usaha`, `nama_pemilik`, `surat_izin_usaha`, `deskripsi_usaha`, `rating`, `jumlah_ulasan`, `created_at`, `updated_at`, `umkm_img`) VALUES
(1, 'Ledeviar Craft Indonesia', 'Kerajinan', 'Nothing is imposible', 'Jojoran Baru 3/30', 'Sri Hartinis', 'punya', 'LEDEVIAR merupakan usaha kerajinan terbaik se-indonesia.', '4.00', 100, '2023-09-22 20:43:41', '2023-09-22 20:43:41', 'LEDEVIAR.png'),
(2, 'Bakso Jojon Surabaya', 'Makanan', 'Rasanya mantap!', 'Jl. Gatot Subroto 123', 'Jojon', '1412210020468', 'Menyediakan berbagai macam bakso lezat', '4.50', 50, '2023-09-22 20:45:00', '2023-09-22 20:45:00', 'jojon.png'),
(3, 'Kue Mama Aja', 'Makanan', 'Kue enak untuk semua!', 'Jl. Ahmad Yani 45', 'Mama Aja', '1412210020469', 'Kue-kue lezat buatan Mama Aja', '4.20', 75, '2023-09-22 20:46:00', '2023-09-22 20:46:00', 'kuemama.png'),
(4, 'Bengkel Asep Motor', 'Jasa', 'Bengkel terpercaya', 'Jl. Sudirman 78', 'Asep', '1412210020470', 'Bengkel motor profesional', '4.80', 30, '2023-09-22 20:47:00', '2023-09-22 20:47:00', 'gambar 10.png'),
(5, 'Lambung Suroboyo', 'Makanan', 'Masakan Jawa khas Surabaya', 'Jl. Pahlawan 56', 'Bambang', '1412210020471', 'Restoran menyajikan masakan khas Surabaya', '4.30', 60, '2023-09-22 20:48:00', '2023-09-22 20:48:00', 'gambar 11.png'),
(6, 'Kue Resky', 'Makanan', 'Makanan', 'Jl. Diponegoro 37', 'Resky', '1412210020472', 'Kue lezat untuk setiap kesempatan', '4.60', 45, '2023-09-22 20:49:00', '2023-09-22 20:49:00', 'gambar 12(1).png');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@kana.id', NULL, '$2y$10$OSj1MszlHl.xU5do1q9.XuXEDLLT/XgQVx8FBRsupMBgNVBraasj6', '2hY62lxj5IX8dMtDtojCyNvFUpfCqDPuQN9JSRytqswY1sRdMqNOmJsCTiap', '2023-09-18 11:18:25', '2023-09-18 11:18:25'),
(2, 'Adhitya Pratama', 'admin@haka.id', NULL, '$2y$10$pxfK1zYTJDbw./td6fPck.BLYFaowWrZGL9GK4tCTHNPKxCGbvV5W', NULL, '2023-09-21 05:15:12', '2023-09-21 05:15:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `workshops`
--

CREATE TABLE `workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_workshop` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_workshop` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_workshop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi_workshop` bigint(20) UNSIGNED NOT NULL,
  `jadwal_workshop` bigint(20) UNSIGNED NOT NULL,
  `Peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kuota` int(11) NOT NULL,
  `fasilitator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `workshops`
--

INSERT INTO `workshops` (`id`, `nama_workshop`, `kategori_workshop`, `deskripsi_workshop`, `materi_workshop`, `jadwal_workshop`, `Peserta`, `Kuota`, `fasilitator`, `created_at`, `updated_at`) VALUES
(1, 'WORKSHOP STRATEGI JITU MEMAJUKAN KIM SURABAYA', 'Digitalisasi Desa', 'Peningkatan digitalisasi desa untuk pertumbuhan ekonomi lokal.', 1, 1, '1. Minimal pendidikan SMP Sederajat\n2. Berusia 18-64 tahun\n3. Memiliki akses internet yang stabil\n4. Memiliki gadget (HP dan Laptop)\n5. Memiliki ketertarikan untuk memperdalam dunia marketing', 50, 'John Doe', NULL, NULL),
(2, 'Workshop Digitalisasi Desa 2', 'Digitalisasi Desa', 'Memanfaatkan teknologi untuk desa yang lebih modern.', 2, 2, 'Pemdes ABC', 0, 'Jane Smith', NULL, NULL),
(3, 'Workshop Marketing Branding UMKM 1', 'Marketing Branding UMKM', 'Strategi pemasaran dan branding untuk UMKM.', 3, 3, 'UMKM Jaya', 0, 'Alice Johnson', NULL, NULL),
(4, 'Workshop Marketing Branding UMKM 2', 'Marketing Branding UMKM', 'Membangun merek yang kuat untuk bisnis kecil.', 4, 4, 'UMKM Makmur', 0, 'Bob Wilson', NULL, NULL),
(5, 'Workshop Digitalisasi Desa 3', 'Digitalisasi Desa', 'Teknologi untuk pembangunan desa yang berkelanjutan.', 5, 5, 'Pemdes LMN', 0, 'Eva Garcia', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `detail_keranjang`
--
ALTER TABLE `detail_keranjang`
  ADD PRIMARY KEY (`id_detail_keranjang`),
  ADD KEY `detail_keranjang_id_keranjang_foreign` (`id_keranjang`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwal_workshops`
--
ALTER TABLE `jadwal_workshops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_workshops_jadwal_workshop_foreign` (`jadwal_workshop`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `materi_workshops`
--
ALTER TABLE `materi_workshops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_workshops_materi_workshop_foreign` (`materi_workshop`);

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
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_id_keranjang_foreign` (`id_keranjang`);

--
-- Indeks untuk tabel `umkms`
--
ALTER TABLE `umkms`
  ADD PRIMARY KEY (`id_umkm`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_keranjang`
--
ALTER TABLE `detail_keranjang`
  MODIFY `id_detail_keranjang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_workshops`
--
ALTER TABLE `jadwal_workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `materi_workshops`
--
ALTER TABLE `materi_workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id_pelanggan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `umkms`
--
ALTER TABLE `umkms`
  MODIFY `id_umkm` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_keranjang`
--
ALTER TABLE `detail_keranjang`
  ADD CONSTRAINT `detail_keranjang_id_keranjang_foreign` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang` (`id_keranjang`);

--
-- Ketidakleluasaan untuk tabel `jadwal_workshops`
--
ALTER TABLE `jadwal_workshops`
  ADD CONSTRAINT `jadwal_workshops_jadwal_workshop_foreign` FOREIGN KEY (`jadwal_workshop`) REFERENCES `workshops` (`id`);

--
-- Ketidakleluasaan untuk tabel `materi_workshops`
--
ALTER TABLE `materi_workshops`
  ADD CONSTRAINT `materi_workshops_materi_workshop_foreign` FOREIGN KEY (`materi_workshop`) REFERENCES `workshops` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_id_keranjang_foreign` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang` (`id_keranjang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
