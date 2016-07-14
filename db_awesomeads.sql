-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jun 2016 pada 06.18
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_awesomeads`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `type` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `issues` int(3) NOT NULL,
  `ad_content` text NOT NULL,
  `words` int(5) NOT NULL,
  `note` text,
  `cost` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payment` char(2) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ads`
--

INSERT INTO `ads` (`id`, `type`, `name`, `phone`, `email`, `issues`, `ad_content`, `words`, `note`, `cost`, `total`, `payment`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'adas asdasd as asd asd asd as d', 8, NULL, 13000, 104000, 'CH', 1, '2016-06-14 23:30:35', '2016-06-14 23:30:35'),
(2, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah bedebah ', 48, NULL, 13000, 624000, 'PP', 1, '2016-06-14 23:32:14', '2016-06-14 23:32:14'),
(3, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'asdasd ad asda asa asdqweq ', 5, NULL, 13000, 65000, 'PP', 1, '2016-06-15 00:34:22', '2016-06-15 00:34:22'),
(4, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'asd asd sa dsa d asd as das d as das d as dsa d asd sa d', 18, NULL, 13000, 234000, 'PP', 1, '2016-06-15 11:53:58', '2016-06-15 11:53:58'),
(5, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'asd asd sa dsa d asd as das d as das d as dsa d asd sa d', 18, NULL, 13000, 234000, 'PP', 1, '2016-06-15 12:02:21', '2016-06-15 12:02:21'),
(6, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'asd asd sa dsa d asd as das d as das d as dsa d asd sa d', 18, NULL, 13000, 234000, 'PP', 1, '2016-06-15 12:11:42', '2016-06-15 12:11:42'),
(7, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'asd as asdasdasd', 3, NULL, 13000, 39000, 'PP', 1, '2016-06-15 12:22:21', '2016-06-15 12:22:21'),
(8, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'qwe qwe wqe wq wq wqe wq', 7, NULL, 13000, 91000, 'PP', 1, '2016-06-15 12:32:57', '2016-06-15 12:32:57'),
(9, 1, 'Hendra Wijaya', '85737353569', 'wijaya.imd@gmail.com', 1, 'gfhf fgh gh', 3, NULL, 13000, 39000, 'PP', 1, '2016-06-15 12:37:23', '2016-06-15 12:37:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ads_type`
--

CREATE TABLE `ads_type` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ads_type`
--

INSERT INTO `ads_type` (`id`, `label`, `description`, `created_at`, `updated_at`) VALUES
(1, 'BUSINESS & SERVICES', 'Business & Services are for businesses and individuals seeking customers for their services. Business & Services cost Rp 13,000 per word including tax.', '2016-06-14 05:42:33', NULL),
(2, 'EMPLOYEES WANTED', 'Employment Ads – Employment Wanted are for individuals looking for jobs. All Employment Ads are listed under the header of Bali Advertiser Employment Ads. Employment Ads – Employment Wanted cost Rp 18,000 per word including tax.', '2016-06-14 05:42:51', NULL),
(3, 'EMPLOYMENT ADS', 'Employment Ads – Employees Wanted are for businesses and individuals looking for workers. All Employment Ads are listed under the header of Bali Advertiser Employment Ads. Employment Ads – Employees Wanted cost Rp 20,000 per word including tax.', '2016-06-14 05:43:21', NULL),
(4, 'HELLO ADS', 'Hello Ads offer the chance to look for new friends. All ads are grouped together under the header of Hello Ads. Bali Advertiser reserves the right to refuse or edit any ad for publication in the Hello Ads Section. Hello Ads cost Rp 13,000 per word including tax.', '2016-06-14 05:44:02', NULL),
(5, 'PET PARADE ADS', 'All ads for selling pets are listed under the header of Pet Parade. All ads are grouped in this section either as a line [word] ad or a photo ad. For placing a line ad, please click below. For placing a photo ad please contact us for information. Ads for pets to Give Away, Wanted, Lost or Found are free of charge.', '2016-06-14 05:44:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `design`
--

CREATE TABLE `design` (
  `id` int(11) NOT NULL,
  `id_ads` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `design`
--

INSERT INTO `design` (`id`, `id_ads`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, '2LDr2KGcY4c.jpg', '2016-06-14 23:32:14', '2016-06-14 23:32:14'),
(2, 2, '2liez8sdVtc.jpg', '2016-06-14 23:32:14', '2016-06-14 23:32:14'),
(3, 2, '2tWpkmqFtcL.jpg', '2016-06-14 23:32:14', '2016-06-14 23:32:14'),
(4, 3, '36V5kCY64np.jpg', '2016-06-15 00:34:22', '2016-06-15 00:34:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `based` char(2) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `price`
--

INSERT INTO `price` (`id`, `type`, `based`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'WC', 13000, '2016-06-14 08:23:06', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@mail.com', '$2y$10$YFx7N1qutoX/R8VdMR9hq.2KgPQKYDHEWqUZsq9sDrnqm4aiUIbdW', 'FPpYpYqozR8v4oNeC8jKN0D3B3EALcujQ68jAu8cTzjHx1PB5FD6YhRIaflD', '2016-06-11 08:03:00', '2016-06-11 08:04:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_type`
--
ALTER TABLE `ads_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ads_type`
--
ALTER TABLE `ads_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
