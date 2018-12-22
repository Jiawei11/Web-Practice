-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-12-22 12:52:05
-- 伺服器版本: 10.1.37-MariaDB
-- PHP 版本： 5.6.39

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
  `news_title` varchar(255) NOT NULL,
  `news_img` varchar(255) NOT NULL,
  `news_summary` varchar(255) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_coin` varchar(255) NOT NULL,
  `news_link` varchar(255) NOT NULL,
  `news_version` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_img`, `news_summary`, `news_date`, `news_coin`, `news_link`, `news_version`) VALUES
(8, 'TEST', 'Penguins.jpg', 'TEST', '2018-12-19 15:47:43', '200', 'http://google.com.tw', 'TEST'),
(10, 'title', 'desert.jpg', 'summary', '2018-12-22 11:34:12', '123', 'google', '測試版型3'),
(11, 'title', 'desert.jpg', 'summary', '2018-12-22 11:34:31', '123', 'google', '測試版型3');

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
(5, 'admin', '2018-12-13 07:17:42', '成功', '登入'),
(6, 'admin', '2018-12-19 10:03:06', '成功', '登入'),
(7, 'admin', '2018-12-22 11:29:30', '成功', '登入');

-- --------------------------------------------------------

--
-- 資料表結構 `version`
--

CREATE TABLE `version` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `col1` varchar(255) NOT NULL,
  `col2` varchar(255) NOT NULL,
  `col3` varchar(255) NOT NULL,
  `col4` varchar(255) NOT NULL,
  `col5` varchar(255) NOT NULL,
  `col6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `version`
--

INSERT INTO `version` (`id`, `title`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`) VALUES
(15, '測試版型3', '發佈日期', '費用', '相關連結', '商品簡介', '相片', '商品名稱');

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
-- 資料表索引 `version`
--
ALTER TABLE `version`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表 AUTO_INCREMENT `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表 AUTO_INCREMENT `version`
--
ALTER TABLE `version`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
