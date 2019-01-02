-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019-01-02 13:37:30
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
-- 資料庫： `web01`
--

-- --------------------------------------------------------

--
-- 資料表結構 `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `img`
--

INSERT INTO `img` (`id`, `name`, `date`) VALUES
(1, '1.png', '2018-12-29 20:32:20'),
(2, '2.jpg', '2018-12-29 20:32:26'),
(3, '3.jpg', '2018-12-29 20:32:20'),
(4, '4.jpg', '2018-12-29 20:32:26'),
(5, '5.png', '2018-12-29 20:32:52');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `user`, `pwd`, `date`) VALUES
(1, 'admin', '1234', '2018-12-28 18:01:40');

-- --------------------------------------------------------

--
-- 資料表結構 `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `mailbool` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phonebool` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `nxcode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rootrequest` varchar(255) NOT NULL,
  `userrequest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `msg`
--

INSERT INTO `msg` (`id`, `username`, `mail`, `mailbool`, `phone`, `phonebool`, `content`, `nxcode`, `date`, `rootrequest`, `userrequest`) VALUES
(4, 'admin', 'zxc45552222@gmail.com', '', '13412421412', '1', 'test', 'AAA111', '2019-01-02 11:31:20', '', ''),
(5, 'admin', 'zxc45552222@gmail.com', '0', '123', '0', 'test', 'AAA111', '2019-01-02 01:38:31', '', ''),
(6, 'admin', 'zxc45552222@gmail.com', '1', '123', '0', 'test', 'AAA111', '2019-01-02 01:38:41', '', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
