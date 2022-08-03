-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-08-03 05:10:33
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `resume_portfolio`
--

CREATE TABLE `resume_portfolio` (
  `id` int(16) NOT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_portfolio`
--

INSERT INTO `resume_portfolio` (`id`, `title`, `img`, `demo`, `github`, `sh`) VALUES
(1, 'calendar1', './img/portfolio/calendar1.png', 'http://220.128.133.15/s1110205/HW_CalenderWork/', 'https://github.com/jimwu0614/PHP_CalenderHomework', 1),
(2, 'calendar2', './img/portfolio/calendar2.png', 'http://220.128.133.15/s1110205/HW_CalenderWork/', 'https://github.com/jimwu0614/PHP_CalenderHomework', 1),
(3, 'vote', './img/portfolio/vote.png', 'http://220.128.133.15/s1110205/HW_VoteWork_220/', 'https://github.com/jimwu0614/HomeWork_VoteSys', 1),
(4, 'c_level_quiz1', './img/portfolio/c_level_quiz1.png', 'http://220.128.133.15/s1110205/c_level_quiz1/', 'https://github.com/jimwu0614/HTML_middle_exam_selfpra', 1),
(5, 'navbar', './img/portfolio/navbar.png', 'http://220.128.133.15/s1110205/JS_selfPractise/aside/aside.html', 'https://github.com/jimwu0614/JS_selfPractise/tree/main/aside', 1),
(6, 'calculator', './img/portfolio/calculator.png', 'http://220.128.133.15/s1110205/JS_selfPractise/calculator/calculator.html', 'https://github.com/jimwu0614/JS_selfPractise/tree/main/calculator', 1),
(7, 'dumb', './img/portfolio/dumb.png', 'http://220.128.133.15/s1110205/JS_selfPractise/dumb/dumb.html', 'https://github.com/jimwu0614/JS_selfPractise/tree/main/dumb', 1),
(8, 'timeline', './img/portfolio/timeline.png', 'http://220.128.133.15/s1110205/JS_selfPractise/timeline/timeline.html', 'https://github.com/jimwu0614/JS_selfPractise/tree/main/timeline', 1),
(9, 'toggle_card', './img/portfolio/toggle_card.png', 'http://220.128.133.15/s1110205/JS_selfPractise/card/card.html', 'https://github.com/jimwu0614/JS_selfPractise/tree/main/card', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_portfolio`
--
ALTER TABLE `resume_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_portfolio`
--
ALTER TABLE `resume_portfolio`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
