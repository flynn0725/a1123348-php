-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-05-01 18:00:53
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `hw`
--

-- --------------------------------------------------------

--
-- 資料表結構 `hw`
--

CREATE TABLE `hw` (
  `no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `hw`
--

INSERT INTO `hw` (`no`, `name`, `email`, `photo`) VALUES
(1, '詹栢誠', 'ryan940725@gmail.com', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUUExMWFhUXGRoaGBgYFxobFxgXHRgaGhsXG'),
(2, '詹栢誠', 'ryan940725@gmail.com', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUUExMWFhUXGRoaGBgYFxobFxgXHRgaGhsXG'),
(3, '詹栢誠', 'candychen911@gmail.com', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUUExMWFhUXGRoaGBgYFxobFxgXHRgaGhsXG'),
(4, '詹栢誠', 'candychen911@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(5, '詹栢誠', 'candychen911@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(6, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(7, '', '', ''),
(8, '', '', ''),
(9, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(10, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(11, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(12, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(13, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(14, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(15, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(16, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(22, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(23, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(24, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(25, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(26, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(27, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(28, '詹栢誠', 'candychen911@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(29, '詹栢誠', 'candychen911@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(30, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg'),
(31, '詹栢誠', 'ryan940725@gmail.com', 'https://imgs.cwgv.com.tw/pic/2019-01-04-1546594009.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `hw`
--
ALTER TABLE `hw`
  ADD PRIMARY KEY (`no`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `hw`
--
ALTER TABLE `hw`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
