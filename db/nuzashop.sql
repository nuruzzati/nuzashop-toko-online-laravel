-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Apr 2024 pada 13.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuzashop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `foto_kategori`) VALUES
(11, 'hoodie', 'hd.jpg'),
(12, 'crewneck', 'cn.jpg'),
(13, 'jacket denim', 'jd.jpg'),
(14, 'varsity jacket', 'vjtt.jpg'),
(15, 'sweater', 'rawr.jpg'),
(16, ' flannel shirt', 'fs.jpg'),
(21, 'celana kargo', 'ck.jpg'),
(22, 'turtleneck', 'tt.jpg'),
(23, 'polo shirt', 'pl.jpg'),
(24, 'bomber jacket', 'bjj.jpg'),
(25, 'buble jacket', 'buble.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2024_02_05_064944_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nuruzzati000@gmail.com', '$2y$10$rZ6fKDINbJIQDSYKrqpqyevAlsFLftxNESXRISpiDHFoHcOm5JOs2', '2024-01-19 18:23:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `telepon_pelanggan` varchar(20) NOT NULL,
  `foto_pelanggan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `email_pelanggan`, `telepon_pelanggan`, `foto_pelanggan`) VALUES
(1, 'Nuza Nadenta', 'nuza123@gmail.com', '0895384290', 'nuza.jpg'),
(2, 'Fariq Albi', 'albi123@gmail.com', '0887657654', 'fariq.jpg'),
(3, 'faisal', 'faisal@gmail.com', '0895384290', 'faisal.jpg'),
(4, 'sitikhoti', 'siti@gmail.com', '0887657654', 'siti.jpg'),
(5, 'Eka pratama', 'eka@gmail.com', '0895384290', 'eka.jpg'),
(6, 'Pepen efendi', 'pepen123@gmail.com', '0887657654', 'pepen.jpg'),
(7, 'asep saepudin', 'asep@gmail.com', '0895384290', 'asep.jpg'),
(8, 'nuraeni', 'nuraeni@gmail.com', '0887657654', 'nuraeni.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `pelanggan_id`, `tanggal_pembelian`, `total_pembelian`) VALUES
(1, 1, '2023-11-01', 50000),
(2, 2, '2023-11-01', 70000),
(3, 3, '2023-11-01', 50000),
(4, 4, '2023-11-01', 70000),
(5, 5, '2023-11-01', 50000),
(6, 6, '2023-11-01', 70000),
(7, 7, '2023-11-01', 50000),
(8, 8, '2023-11-01', 70000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `title`, `sub`, `slug`, `body`, `created_at`, `updated_at`) VALUES
(1, 'judul post pertama', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'post-pertama', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perferendis vitae consequuntur voluptatum sapiente, ipsam veniam atque at quibusdam, quas doloremque quam ducimus adipisci hic, beatae praesentium. Asperiores maxime voluptatem atque, quidem facere suscipit nemo consectetur perspiciatis quos quia autem exercitationem reiciendis pariatur tempora. Accusamus voluptate omnis molestias corrupti fugiat maxime a adipisci eaque, cupiditate ab nobis quidem totam hic obcaecati. Unde impedit repudiandae tempore dicta facere veniam odit minima eum obcaecati, quae nisi quas aut corrupti eos quod error enim commodi ratione consectetur autem molestias modi tenetur illo. Itaque eos inventore soluta. Eaque, quis? Necessitatibus minima quo fuga amet.', NULL, NULL),
(2, 'judul post kedua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'post-kedua', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perferendis vitae consequuntur voluptatum sapiente, ipsam veniam atque at quibusdam, quas doloremque quam ducimus adipisci hic, beatae praesentium. Asperiores maxime voluptatem atque, quidem facere suscipit nemo consectetur perspiciatis quos quia autem exercitationem reiciendis pariatur tempora. Accusamus voluptate omnis molestias corrupti fugiat maxime a adipisci eaque, cupiditate ab nobis quidem totam hic obcaecati. Unde impedit repudiandae tempore dicta facere veniam odit minima eum obcaecati, quae nisi quas aut corrupti eos quod error enim commodi ratione consectetur autem molestias modi tenetur illo. Itaque eos inventore soluta. Eaque, quis? Necessitatibus minima quo fuga amet.', NULL, NULL),
(3, 'judul post ketiga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'post-ketiga', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perferendis vitae consequuntur voluptatum sapiente, ipsam veniam atque at quibusdam, quas doloremque quam ducimus adipisci hic, beatae praesentium. Asperiores maxime voluptatem atque, quidem facere suscipit nemo consectetur perspiciatis quos quia autem exercitationem reiciendis pariatur tempora. Accusamus voluptate omnis molestias corrupti fugiat maxime a adipisci eaque, cupiditate ab nobis quidem totam hic obcaecati. Unde impedit repudiandae tempore dicta facere veniam odit minima eum obcaecati, quae nisi quas aut corrupti eos quod error enim commodi ratione consectetur autem molestias modi tenetur illo. Itaque eos inventore soluta. Eaque, quis? Necessitatibus minima quo fuga amet.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(30, 14, 'crewneck santuy', 189000, 1000, '1705798329.jpg', 'crewneck grdt for unisex', 133),
(32, 14, 'varsity jacket  ', 499000, 1000, 'varsity2.webp', 'varsity jacket for unisex ', 100),
(33, 14, 'varsity jaket', 457000, 1000, '1705798282.webp', 'jacket denim for unisex', 200),
(39, 14, 'Varsity', 399999, 1000, '1705808228.webp', 'wOw', 800),
(40, 11, 'hoodie one man', 399999, 1000, 'a.jpg', 'wOw', 800),
(41, 11, 'hoodie one man', 399999, 1000, 'a.jpg', 'wOw', 800),
(42, 11, 'hoodie one man', 399999, 1000, 'a.jpg', 'wOw', 800),
(43, 11, 'hoodie', 329000, 2000, '1705808377.jpg', 'sfdgfbg', 13243),
(44, 12, 'crewneck kece ', 329000, 2000, 'cn.jpg', 'sfdgfbg', 13243),
(45, 12, 'crewneck kece ', 329000, 2000, 'cn.jpg', 'sfdgfbg', 13243),
(46, 12, 'crewneck kece ', 329000, 2000, 'cn.jpg', 'sfdgfbg', 13243),
(47, 12, 'Crewneck', 499000, 1000, '1705808272.jpg', 'kece', 2332),
(48, 13, 'jacket denim', 499000, 1000, 'c.webp', 'kece', 2332),
(49, 13, 'jacket denim', 499000, 1000, 'c.webp', 'kece', 2332),
(50, 13, 'jacket denim', 499000, 1000, 'c.webp', 'kece', 2332),
(51, 13, 'jaket denim', 298999, 1000, '1705808514.webp', 'ini sweater anget', 34567),
(52, 15, 'sweater bule', 298999, 1000, 'd.webp', 'ini sweater anget', 34567),
(53, 15, 'sweater bule', 298999, 1000, 'd.webp', 'ini sweater anget', 34567),
(56, 15, 'sweater bule', 298999, 1000, 'd.webp', 'ini sweater anget', 34567),
(59, 15, 'sweater', 555050, 1000, '1705808416.webp', 'keren bgt nieh om', 21345656),
(60, 16, 'flanel shirt keren', 555050, 1000, 'e.jpg', 'keren bgt nieh om', 21345656),
(61, 16, 'flanel shirt keren', 555050, 1000, 'e.jpg', 'keren bgt nieh om', 21345656),
(62, 16, 'flanel shirt keren', 555050, 1000, 'e.jpg', 'keren bgt nieh om', 21345656),
(64, 16, 'flanel shirt keren', 555050, 1000, 'e.jpg', 'keren bgt nieh om', 21345656),
(65, 11, 'hoodie one one', 399000, 1000, 'a.jpg', 'keren nieh', 1000),
(66, 11, 'hoodie one one', 199000, 1200, 'a.jpg', 'keren nieh om', 132),
(67, 26, 'kameja', 345000, 1000, '1705808461.jpg', 'keren nieh om', 1324),
(78, 26, 'kemeja', 123000, 34567, '1705769905.jpg', 'ini kemeja', 1234),
(79, 26, 'kameja flanel wow', 321000, 45678, '1705769929.jpg', 'dfghjk', 123),
(80, 26, 'kameja kotak', 1234000, 45678, '1705769985.jpg', 'dfghj', 123),
(81, 26, 'kameja xyx', 548000, 123, '1705770011.jpg', 'dfghjkl', 123),
(83, 13, 'ftygh', 123000, 4567, '1706684140.png', 'drfghj', 1313);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nuza tampan', 'nuruzzati000@gmail.com', NULL, '$2y$10$m//3.n/xbNpjBEff.Vn8/elXYe737/PAXeIyY24m.j8ocy8fClkme', NULL, '2024-01-15 18:19:46', '2024-01-15 18:19:46'),
(2, 'Jiilan', 'palviablacksec@gmail.com', NULL, '$2y$10$3Qp0VDvJjUMTvsQ9kT9Pj.axvkP.fhwXD0bUJotSvFEwvTB6O1ZRa', NULL, '2024-01-20 02:15:30', '2024-01-20 02:15:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
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
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
