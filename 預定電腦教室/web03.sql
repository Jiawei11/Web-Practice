-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019-01-11 13:29:52
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
-- 資料庫： `web03`
--

-- --------------------------------------------------------

--
-- 資料表結構 `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `classid` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `apply` varchar(255) CHARACTER SET utf32 NOT NULL DEFAULT '未審核',
  `applyer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `class`
--

INSERT INTO `class` (`id`, `classid`, `date`, `timeslot`, `purpose`, `apply`, `applyer`) VALUES
(8, '2', '2019-01-12', '第1節,第2節,第3節,第4節', '技藝班', '未審核', 'test');

-- --------------------------------------------------------

--
-- 資料表結構 `err`
--

CREATE TABLE `err` (
  `id` int(11) NOT NULL,
  `errorcount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `err`
--

INSERT INTO `err` (`id`, `errorcount`) VALUES
(1, '2');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL,
  `stop` varchar(255) NOT NULL,
  `log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `user`, `account`, `pwd`, `power`, `stop`, `log`) VALUES
(0, 'admin', 'admin', '1234', '管理者', '0', '2019-01-05 01:43:32'),
(2, 'test', 'test01', '1234', '一般使用者', '0', '2019-01-11 20:24:25'),
(1112, 'admin', 'test', '1234', '管理者', '0', '2019-01-05 01:43:32');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `err`
--
ALTER TABLE `err`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表 AUTO_INCREMENT `err`
--
ALTER TABLE `err`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
