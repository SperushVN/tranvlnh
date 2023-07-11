-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 20, 2022 lúc 01:20 AM
-- Phiên bản máy phục vụ: 10.5.12-MariaDB
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id15425858_tranvlnh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `license`
--

CREATE TABLE `license` (
  `id` int(11) NOT NULL,
  `key_tool` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_tool` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_expired` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `license`
--

INSERT INTO `license` (`id`, `key_tool`, `name_tool`, `time_expired`) VALUES
(23, '044F688270D0CF66C766C8AB5B95C542', 'abc', '2022-06-29 22:19:01'),
(24, 'a', 'a', '2022-06-17 22:26:45');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `license`
--
ALTER TABLE `license`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
