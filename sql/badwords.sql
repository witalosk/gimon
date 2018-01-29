-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 1 朁E23 日 08:59
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
-- テーブルの構造 `badwords`
--

CREATE TABLE `badwords` (
  `id` int(11) NOT NULL,
  `degree` int(11) DEFAULT NULL COMMENT 'max 10',
  `word` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- テーブルのデータのダンプ `badwords`
--

INSERT INTO `badwords` (`id`, `degree`, `word`) VALUES
(1, 3, 'バカ'),
(2, 7, '死ね'),
(3, 7, 'しね'),
(4, 7, 'シネ'),
(5, 5, 'カス'),
(6, 4, 'hate'),
(7, 3, '馬鹿'),
(8, 2, '間抜け'),
(9, 4, 'くたばれ'),
(10, 2, 'まぬけ'),
(11, 2, 'ボケ'),
(12, 3, '変態'),
(13, 4, 'くず'),
(14, 5, 'くそ'),
(15, 5, 'クソ'),
(16, 4, 'ゴミ'),
(17, 6, 'デブ'),
(18, 4, 'ババア'),
(19, 6, 'キチガイ'),
(20, 3, 'ジジィ'),
(21, 4, 'ドジ'),
(22, 4, '阿婆擦れ'),
(23, 4, 'あばずれ'),
(24, 6, 'ハゲ'),
(25, 2, 'スケベ'),
(26, 5, '負け犬'),
(27, 6, 'ブス'),
(28, 6, 'busu'),
(29, 4, '野郎'),
(30, 7, 'きも'),
(31, 7, 'キモ'),
(32, 4, '嘘つき'),
(33, 6, '腰抜け'),
(34, 4, '弱虫'),
(35, 3, 'やぼ'),
(36, 5, 'ださ'),
(37, 3, 'ダサ'),
(38, 4, 'ずる'),
(39, 4, 'ズル'),
(40, 2, 'けち'),
(41, 6, 'チビ'),
(42, 6, 'ちび'),
(43, 6, '根性なし'),
(44, 6, '尻軽'),
(45, 3, '死'),
(46, 3, '地獄'),
(47, 7, '近寄らないで'),
(48, 3, 'くさ'),
(49, 4, '迷惑'),
(50, 5, 'ブサイク'),
(51, 5, '不細工'),
(52, 2, 'うん'),
(53, 6, 'ガイジ'),
(54, 10, '部落'),
(55, 10, '人非人'),
(56, 5, '家柄'),
(57, 5, '血筋'),
(58, 4, '身分'),
(59, 4, '過去帳'),
(60, 5, '興信所'),
(61, 5, '特殊学級'),
(62, 4, 'fuck'),
(63, 6, 'shit'),
(64, 6, 'asshole'),
(65, 6, 'bitch'),
(66, 7, 'plonker'),
(67, 6, 'hell'),
(68, 5, 'idiot'),
(69, 7, 'cunt'),
(70, 7, 'ass'),
(71, 5, 'scum'),
(72, 6, 'moron'),
(73, 6, 'lame');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badwords`
--
ALTER TABLE `badwords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badwords`
--
ALTER TABLE `badwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
