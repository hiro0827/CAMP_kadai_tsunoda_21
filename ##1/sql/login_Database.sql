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
-- Database: `login_Database`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `User_Data`
--

CREATE TABLE `User_Data` (
  `id` int(12) NOT NULL COMMENT '管理ID',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ユーザ名',
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'パスワード'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `User_Data`
--

INSERT INTO `User_Data` (`id`, `name`, `password`) VALUES
(10, 'test', '$2y$10$bxv4UjaZdgXEPHkSk1K/C.firFPRO8R.KUQGlmlrc7ePEEG6Q0MDu'),
(11, 'test', '$2y$10$F0i/bMPqLHgTzudrz8VV6.i5C70RPShOrBrqNT0TGp4aAjczXnc26'),
(12, 'test', '$2y$10$8yevlumJba7yzFZzigzU.OnsNHB4fgJPYRmgQL.gzQfohe5FC9yGe'),
(13, 'test', '$2y$10$rkr9oQ1vsaif2AfecIJUxe3/NALPCKRKCZghCilBJ/YjPK2zfmZUK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User_Data`
--
ALTER TABLE `User_Data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User_Data`
--
ALTER TABLE `User_Data`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT COMMENT '管理ID', AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
