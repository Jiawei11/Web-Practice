-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-12-13 08:52:02
-- 伺服器版本: 10.1.36-MariaDB
-- PHP 版本： 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `web`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL DEFAULT '一般使用者'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `name`, `user`, `pwd`, `rank`) VALUES
(0, '管理者', 'admin', '1234', '管理者'),
(1, 'User', 'User', '1234', '一般使用者');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `new_title` varchar(255) NOT NULL,
  `new_css` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `new_title`, `new_css`) VALUES
(3, 'test', 'span{font-size:200px;color:#00ffff;}'),
(4, 'test2', 'span{font-size:120px;color:#000000;background-color:#ff0000;}');

-- --------------------------------------------------------

--
-- 資料表結構 `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `records`
--

INSERT INTO `records` (`id`, `user`, `time`, `result`, `action`) VALUES
(1, 'admin', '2018-12-10 18:37:28', '成功', '登入'),
(2, 'admin', '2018-12-10 18:37:51', '失敗', '登入'),
(3, 'admin', '2018-12-10 19:16:51', '成功', '登入'),
(4, 'admin', '2018-12-13 07:03:35', '成功', '登入'),
(5, 'admin', '2018-12-13 07:17:42', '成功', '登入');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
