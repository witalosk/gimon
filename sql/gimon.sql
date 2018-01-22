-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 1 朁E22 日 09:37
-- サーバのバージョン： 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gimon`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gimon`
--

CREATE TABLE `gimon` (
  `id` int(11) NOT NULL,
  `destination` bigint(255) UNSIGNED NOT NULL,
  `ipaddress` varchar(32) COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- テーブルのデータのダンプ `gimon`
--

INSERT INTO `gimon` (`id`, `destination`, `ipaddress`, `text`, `created_at`) VALUES
(4, 705023631789678593, '::1', 'Hello', '2018-01-22 11:24:01'),
(6, 705023631789678592, '::1', 'ねみい', '2018-01-22 17:06:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `screen_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `blocklist` text COLLATE utf8_bin,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `name`, `screen_name`, `blocklist`, `created_at`, `updated_at`) VALUES
(705023631789678592, '夢幻のういた', 'witamast', NULL, '2018-01-22 11:20:14', '2018-01-22 17:15:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gimon`
--
ALTER TABLE `gimon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gimon`
--
ALTER TABLE `gimon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
