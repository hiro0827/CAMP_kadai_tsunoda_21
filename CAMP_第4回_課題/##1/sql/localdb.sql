-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2019 年 2 月 14 日 15:35
-- サーバのバージョン： 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localdb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `bbs_table`
--

CREATE TABLE `bbs_table` (
  `id` int(12) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `bbs_table`
--

INSERT INTO `bbs_table` (`id`, `name`, `comment`, `date`) VALUES
(11, '1', '1', '2019-02-12 21:26:23'),
(12, '1', '1', '2019-02-12 21:26:26'),
(13, '1', '1', '2019-02-12 21:26:30'),
(14, '', '', '2019-02-12 23:38:22'),
(15, 'テスト', '長い文字でもそれなりに入ってる！！！！！！！！！！！！！！！！', '2019-02-14 00:38:43'),
(16, 'テスト', 'スクロールしたい・・・', '2019-02-14 00:39:05'),
(17, 'test', 'あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ', '2019-02-14 01:46:31'),
(18, 'test', 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト', '2019-02-14 01:47:01'),
(19, 'test', 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト', '2019-02-14 01:47:01'),
(20, 'test', 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト', '2019-02-14 01:47:01'),
(21, 'test', 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト', '2019-02-14 01:47:01'),
(22, 'test', 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト', '2019-02-14 01:47:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bbs_table`
--
ALTER TABLE `bbs_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bbs_table`
--
ALTER TABLE `bbs_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
