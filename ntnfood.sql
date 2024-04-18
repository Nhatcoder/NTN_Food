-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2024 lúc 06:12 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_monan` int(11) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`id_binhluan`, `noidung`, `id_nguoidung`, `id_monan`, `ngaybinhluan`) VALUES
(177, 'alooooooooooo', 44, 19, '2023-12-10'),
(178, 'alooo', 44, 23, '2024-01-21'),
(179, 'ngon không mọi người ơi', 44, 23, '2024-01-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`) VALUES
(17, 'Nước súp'),
(18, 'Pizza'),
(19, 'Burger'),
(20, 'Cơm'),
(21, 'Nộm'),
(22, 'Mỳ, Bún'),
(23, 'Đồ uống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_tintuc`
--

CREATE TABLE `tbl_danhmuc_tintuc` (
  `id_danhmuc_tintuc` int(11) NOT NULL,
  `ten_danhmuc_tintuc` varchar(100) NOT NULL,
  `phuluc_danhmuc_tintuc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_tintuc`
--

INSERT INTO `tbl_danhmuc_tintuc` (`id_danhmuc_tintuc`, `ten_danhmuc_tintuc`, `phuluc_danhmuc_tintuc`) VALUES
(9, 'Top 10 món ăn ngon nhất', 'Thơm ngon khó cưỡng'),
(10, 'Giảm giá 20%', 'Giảm giá sốc'),
(11, 'Món ăn mùa hallowen', 'Tràn ngập không khí lễ hội'),
(12, 'Best seller tháng 10', 'Món ăn được ưa thích nhất tháng 10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_diachinhanhang`
--

CREATE TABLE `tbl_diachinhanhang` (
  `id_diachi` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `id_nguoidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_diachinhanhang`
--

INSERT INTO `tbl_diachinhanhang` (`id_diachi`, `hoten`, `diachi`, `email`, `sodienthoai`, `id_nguoidung`) VALUES
(23, 'Trần Văn Nhật2', 'Ở đâu ?', 'nhatabc270@gmail.com', '0367360710', 40),
(36, 'Admin', 'Ở đâu ?', 'nhatcaca2004@gmail.com', '0987654321', 44),
(39, 'Hồng Nhung', 'Địa chỉ mới Đình Thôn', 'nhungnthph31148@fpt.edu.vn', '0975553123', 36),
(40, 'Trần Văn Nhật', 'Ở đâu ?', 'Nhat@gmail.com', '0987654321', 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `id_giohang` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `ngaymua` datetime NOT NULL,
  `id_trangthai` int(11) NOT NULL,
  `loai_thanhtoan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`id_giohang`, `id_nguoidung`, `ma_donhang`, `ngaymua`, `id_trangthai`, `loai_thanhtoan`) VALUES
(108, 36, 4697, '2023-11-28 17:54:48', 4, 'Vnpay'),
(109, 36, 6833, '2023-11-28 18:04:43', 4, 'Tiền mặt'),
(110, 36, 8524, '2023-11-28 18:06:47', 4, 'Tiền mặt'),
(111, 36, 2330, '2023-11-28 18:08:52', 4, 'Tiền mặt'),
(114, 36, 9991, '2023-11-28 15:58:05', 4, 'Tiền mặt'),
(115, 36, 2839, '2023-11-28 18:17:26', 4, 'Tiền mặt'),
(116, 36, 8544, '2023-11-28 19:56:25', 4, 'Tiền mặt'),
(117, 36, 6067, '2023-11-28 19:58:50', 4, 'Tiền mặt'),
(118, 36, 6353, '2023-11-28 20:04:57', 4, 'Tiền mặt'),
(120, 36, 799, '2023-11-28 20:13:40', 4, 'Tiền mặt'),
(121, 36, 9446, '2023-11-28 20:14:07', 4, 'Tiền mặt'),
(122, 36, 1633, '2023-11-28 21:11:35', 4, 'Tiền mặt'),
(123, 36, 7978, '2023-11-28 23:25:22', 4, 'Tiền mặt'),
(125, 36, 3769, '2023-11-28 23:34:14', 4, 'Tiền mặt'),
(126, 36, 6726, '2023-11-28 23:34:37', 4, 'Tiền mặt'),
(127, 36, 3848, '2023-11-28 23:35:11', 4, 'Tiền mặt'),
(128, 36, 6805, '2023-11-28 23:54:09', 4, 'Tiền mặt'),
(129, 36, 2695, '2023-11-28 23:58:51', 4, 'Tiền mặt'),
(131, 36, 4707, '2023-11-29 00:07:01', 4, 'Tiền mặt'),
(132, 36, 2177, '2023-11-29 00:20:27', 4, 'Tiền mặt'),
(133, 36, 2299, '2023-11-29 00:32:13', 4, 'Tiền mặt'),
(134, 36, 5284, '2023-11-29 12:51:47', 4, 'Tiền mặt'),
(135, 36, 4587, '2023-11-29 15:01:35', 4, 'Tiền mặt'),
(179, 36, 6078, '2023-12-10 13:46:14', 3, 'Tiền mặt'),
(180, 36, 9234, '2023-12-10 13:47:59', 5, 'Vnpay'),
(181, 36, 5598, '2023-12-10 17:17:50', 4, 'MomoATM'),
(182, 44, 1250, '2024-01-21 23:43:57', 1, 'Tiền mặt'),
(183, 44, 9380, '2024-02-07 18:19:16', 1, 'Tiền mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon_chitiet`
--

CREATE TABLE `tbl_hoadon_chitiet` (
  `id_donhang_chitiet` int(11) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `id_monan` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon_chitiet`
--

INSERT INTO `tbl_hoadon_chitiet` (`id_donhang_chitiet`, `ma_donhang`, `id_monan`, `soluongmua`) VALUES
(104, 7320, 17, 1),
(105, 7320, 15, 1),
(106, 7159, 19, 1),
(107, 7159, 15, 1),
(108, 7159, 16, 1),
(109, 5543, 17, 1),
(110, 5543, 16, 1),
(111, 8167, 17, 2),
(112, 8167, 16, 1),
(113, 7084, 19, 1),
(114, 7084, 16, 1),
(115, 7084, 23, 1),
(116, 7229, 19, 1),
(117, 8725, 17, 1),
(118, 9284, 19, 1),
(119, 9284, 17, 1),
(120, 9284, 15, 1),
(121, 1062, 17, 15),
(122, 1062, 19, 6),
(123, 5895, 17, 7),
(124, 5895, 16, 1),
(125, 5895, 15, 7),
(126, 5895, 23, 21),
(127, 5895, 19, 59),
(128, 1460, 19, 3),
(129, 1460, 17, 4),
(130, 8191, 17, 10),
(131, 8191, 19, 3),
(132, 6749, 17, 10),
(133, 6749, 19, 12),
(134, 4377, 19, 1),
(135, 9663, 16, 1),
(136, 6518, 17, 4),
(137, 6518, 16, 6),
(138, 2999, 17, 4),
(139, 2999, 16, 9),
(140, 8068, 16, 6),
(141, 8068, 17, 9),
(142, 1360, 17, 1),
(143, 1360, 16, 1),
(144, 5837, 15, 5),
(145, 5837, 16, 5),
(146, 3188, 16, 6),
(147, 3188, 15, 5),
(148, 2025, 16, 2),
(149, 2025, 15, 2),
(150, 9597, 17, 4),
(151, 9597, 16, 4),
(152, 2334, 17, 7),
(153, 9623, 17, 10),
(154, 6991, 16, 11),
(155, 5742, 17, 8),
(156, 2417, 16, 2),
(157, 1273, 17, 3),
(158, 1273, 16, 4),
(159, 1043, 15, 1),
(160, 5612, 15, 4),
(161, 9311, 16, 4),
(162, 1467, 16, 1),
(163, 6275, 17, 4),
(164, 6275, 15, 4),
(165, 4493, 19, 2),
(166, 4493, 17, 4),
(167, 229, 25, 4),
(168, 229, 24, 3),
(169, 8341, 23, 4),
(170, 8341, 19, 5),
(171, 8341, 17, 1),
(172, 8341, 16, 3),
(173, 9515, 19, 10),
(174, 9515, 16, 12),
(175, 9515, 15, 10),
(176, 8916, 17, 1),
(177, 8916, 16, 1),
(178, 6558, 16, 3),
(179, 5918, 17, 3),
(180, 5918, 16, 7),
(181, 1492, 25, 10),
(182, 4697, 17, 2),
(183, 4697, 16, 4),
(184, 4697, 15, 5),
(185, 6833, 16, 2),
(186, 6833, 15, 2),
(187, 8524, 17, 1),
(188, 8524, 16, 1),
(189, 8524, 15, 1),
(190, 2330, 25, 1),
(191, 2330, 24, 1),
(192, 2839, 17, 4),
(193, 8544, 15, 1),
(194, 8544, 16, 1),
(195, 6067, 19, 1),
(196, 6353, 17, 1),
(197, 799, 17, 1),
(198, 799, 16, 1),
(199, 9446, 23, 2),
(200, 1633, 17, 1),
(201, 7978, 16, 3),
(202, 7978, 15, 3),
(203, 3769, 16, 1),
(204, 3769, 15, 1),
(205, 6726, 23, 1),
(206, 3848, 17, 1),
(207, 6805, 15, 1),
(208, 6805, 25, 2),
(209, 2695, 17, 1),
(210, 2695, 16, 1),
(211, 1514, 17, 1),
(212, 1514, 16, 1),
(213, 4707, 24, 1),
(214, 4707, 16, 1),
(215, 4707, 17, 1),
(216, 2177, 23, 2),
(217, 2299, 19, 1),
(218, 5284, 16, 10),
(219, 5284, 17, 1),
(220, 4587, 19, 6),
(221, 7676, 17, 2),
(222, 166, 17, 1),
(223, 166, 16, 2),
(224, 166, 15, 3),
(225, 3007, 16, 3),
(226, 3007, 17, 2),
(227, 5312, 16, 3),
(228, 5312, 17, 3),
(229, 7203, 19, 1),
(230, 7203, 16, 1),
(231, 9674, 17, 2),
(232, 9674, 16, 1),
(233, 2434, 16, 1),
(234, 7392, 15, 1),
(235, 8315, 17, 1),
(236, 8315, 16, 1),
(237, 7324, 17, 2),
(238, 6026, 17, 1),
(239, 6026, 25, 4),
(240, 2134, 25, 2),
(241, 4163, 15, 1),
(242, 5250, 17, 1),
(243, 5250, 24, 1),
(244, 5250, 15, 1),
(245, 2847, 19, 4),
(246, 2847, 17, 4),
(247, 2847, 16, 4),
(248, 2847, 15, 4),
(249, 2847, 37, 3),
(250, 2847, 39, 11),
(251, 3617, 19, 4),
(252, 3617, 17, 4),
(253, 3617, 16, 3),
(254, 3617, 15, 4),
(255, 3617, 37, 3),
(256, 3617, 39, 11),
(257, 2231, 19, 1),
(258, 2231, 26, 5),
(259, 2231, 51, 1),
(260, 7851, 19, 1),
(261, 7851, 37, 1),
(262, 7851, 49, 3),
(263, 3373, 37, 8),
(264, 3373, 39, 1),
(265, 3373, 50, 1),
(266, 3373, 50, 1),
(267, 8145, 37, 1),
(268, 8145, 39, 6),
(269, 8145, 39, 6),
(270, 8996, 16, 7),
(271, 9053, 23, 5),
(272, 9053, 46, 5),
(273, 9053, 47, 5),
(274, 9053, 48, 5),
(275, 9053, 49, 5),
(276, 2936, 19, 5),
(277, 2936, 17, 5),
(278, 2936, 16, 5),
(279, 2936, 46, 1),
(280, 5005, 19, 1),
(281, 5005, 16, 2),
(282, 5005, 17, 1),
(283, 8930, 25, 2),
(284, 5606, 24, 1),
(285, 5606, 46, 1),
(286, 5606, 47, 1),
(287, 5606, 48, 1),
(288, 5606, 49, 1),
(289, 6033, 22, 1),
(290, 6033, 16, 1),
(291, 6033, 15, 1),
(292, 6033, 47, 1),
(293, 6033, 49, 1),
(294, 3041, 17, 3),
(295, 3041, 46, 3),
(296, 3041, 47, 3),
(297, 3041, 48, 3),
(298, 3041, 49, 2),
(299, 3373, 16, 6),
(300, 3373, 15, 1),
(301, 3373, 46, 1),
(302, 3373, 48, 1),
(303, 4940, 23, 5),
(304, 4940, 46, 1),
(305, 4940, 47, 1),
(306, 4940, 48, 1),
(307, 4940, 49, 1),
(308, 4940, 17, 1),
(309, 6490, 17, 2),
(310, 6490, 16, 3),
(311, 6112, 25, 2),
(312, 6112, 46, 1),
(313, 6112, 48, 1),
(314, 6396, 16, 1),
(315, 6180, 19, 1),
(316, 3986, 17, 1),
(317, 3986, 23, 1),
(318, 3986, 46, 1),
(319, 3986, 47, 1),
(320, 3986, 48, 1),
(321, 3986, 49, 1),
(322, 3986, 16, 1),
(323, 4693, 16, 1),
(324, 2636, 17, 9),
(325, 2636, 46, 2),
(326, 2636, 47, 2),
(327, 2636, 48, 2),
(328, 2636, 49, 2),
(329, 2636, 16, 1),
(330, 6610, 16, 1),
(331, 6610, 46, 1),
(332, 6610, 48, 1),
(333, 1602, 15, 1),
(334, 1602, 46, 1),
(335, 1602, 47, 1),
(336, 1602, 48, 1),
(337, 1602, 49, 1),
(338, 2747, 16, 2),
(339, 2747, 17, 3),
(340, 6078, 16, 3),
(341, 6078, 15, 1),
(342, 9234, 17, 1),
(343, 9234, 15, 3),
(344, 5598, 17, 2),
(345, 5598, 15, 1),
(346, 5598, 22, 1),
(347, 1250, 16, 2),
(348, 9380, 19, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `hoten_lienhe` varchar(255) NOT NULL,
  `email_lienhe` varchar(255) NOT NULL,
  `sdt_lienhe` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `hoten_lienhe`, `email_lienhe`, `sdt_lienhe`, `noidung`, `trangthai`) VALUES
(3, 'Lại là Nhật đây', 'nhatcaca2004@gmail.com', '0987654321', 'Em muốn hỏi là bạn admin có người yêu chưa ?😍', 1),
(4, 'Nhật đây', 'vanh61466@gmail.com', '0987654321', 'alooooo123 zô', 1),
(5, '   Nhật ơi', 'nhatabc270@gmail.com', '0987654321', 'Cho mình hỏi tý Nhật có ny chưa cậu ơi 😘😘😘😘😍', 1),
(6, '   Nhật ơi', 'vanh61466@gmail.com', '0367360710', 'Cho hỏi đường vào tim admin 😅😂😘😘😍', 1),
(7, 'Trùm bom hàng', 'nhatabc270@gmail.com', '0367360710', 'Cho em hỏi em bom hàng web này 2 lần rồi\r\nem bom thêm phát nữa có được không ạ', 1),
(8, 'nhat', 'Nhat@gmail.com', '0987654321', 'okok', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_monan`
--

CREATE TABLE `tbl_monan` (
  `id_monan` int(11) NOT NULL,
  `ten_monan` varchar(255) NOT NULL,
  `gia_monan` int(11) NOT NULL,
  `anh_monan` varchar(100) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `mota_monan` text NOT NULL,
  `noibat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_monan`
--

INSERT INTO `tbl_monan` (`id_monan`, `ten_monan`, `gia_monan`, `anh_monan`, `id_danhmuc`, `mota_monan`, `noibat`) VALUES
(15, 'Pizza', 150000, '1699692151_pic1.jpg', 18, 'Ngon bổ rẻ', 30),
(16, 'Cơm ngon', 20000, '1699692277_pic2.jpg', 20, 'ngon\r\n', 30),
(17, 'Nộm xà lách', 80000, '1699692350_pic3.jpg', 21, 'ngon\r\n', 10),
(19, 'Sủi cảo', 100000, '1699702402_pic4.jpg', 22, 'ngon', 30),
(21, 'Mỳ ống', 59000, '1699764884_menu1.jpg', 22, 'Ngon bổ rẻ', 1),
(22, 'Oreo lắc', 30000, '1699765053_menu2.jpg', 18, 'ngon', 1),
(23, 'Canh cá xay', 150000, '1699765111_menu3.jpg', 17, 'ngon', 1),
(24, 'Pizza', 190000, '1699765135_menu4.jpg', 18, 'ngon', 1),
(25, 'Burger', 70000, '1699769499_menu5.jpg', 19, 'ngon', 1),
(26, 'Thịt nướng cà leo', 110000, '1699769645_menu6.jpg', 21, 'ngon', 1),
(46, '7up', 10000, '1701542013_7Up-Can.jpg', 23, '', 2),
(47, 'PepSi', 15000, '1701542054_Pepsi-Can.jpg', 23, '', 2),
(48, 'Trà chanh', 17000, '1701542074_Lipton.jpg', 23, '', 2),
(49, 'Trà đào', 20000, '1701542142_Peach-Tea.jpg', 23, 'Ngon', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `id_nguoidung` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `vaitro` int(1) NOT NULL,
  `anh_taikhoan` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`id_nguoidung`, `hoten`, `sodienthoai`, `email`, `matkhau`, `vaitro`, `anh_taikhoan`, `diachi`) VALUES
(36, 'Hồng Nhung', '0975553123', 'nhungnthph31148@fpt.edu.vn', '123', 0, '1702190496_avt_nu.jpg', 'Địa chỉ mới'),
(40, 'Trần Văn Nhật', '0367360710', 'nhatabc270@gmail.com', '123', 0, '1702190521_avt_nhat.jpg', 'Ở đâu ?'),
(44, 'Admin', '0987654321', 'nhatcaca2004@gmail.com', 'Admin@123', 1, '1702190567_admin.jpg', 'Ở đâu ?'),
(46, 'Trần Văn Nhật', '0987654321', 'Nhat@gmail.com', 'Nhat@123456', 0, 'avt.jpg', 'Ở đâu ?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `doanhthu` bigint(20) NOT NULL,
  `donhang` int(11) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `doanhthu`, `donhang`, `soluongban`) VALUES
(1, '2023-09-13', 4532450, 34, 57),
(2, '2023-10-05', 2000441, 2, 54),
(3, '2023-10-04', 432532, 5, 4),
(18, '2023-11-16', 45456, 12, 57),
(19, '2023-11-10', 200044, 2, 54),
(20, '2023-11-23', 1045501, 12, 41),
(34, '2023-11-29', 1298900, 5, 11),
(35, '2023-11-30', 2250000, 7, 38),
(36, '2023-12-02', 1080000, 8, 14),
(37, '2023-12-03', 0, 1, 0),
(38, '2023-12-04', 790000, 2, 8),
(39, '2023-12-10', 340000, 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `ten_tintuc` varchar(100) NOT NULL,
  `mota_tintuc` text NOT NULL,
  `id_danhmuc_tintuc` int(11) NOT NULL,
  `anh_tintuc` varchar(100) NOT NULL,
  `motangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id_tintuc`, `ten_tintuc`, `mota_tintuc`, `id_danhmuc_tintuc`, `anh_tintuc`, `motangan`) VALUES
(1, 'Cá thu sốt cam', 'Hương vị thơm ngon của cá thu chiên hoà quyện cùng vị chua ngọt tươi mát từ những trái cam tươi sẽ tạo ra một sự ', 9, '1700667761_IMG-20211124-153901-8419-1637811442.jpg', 'Đọc hay nắm'),
(2, 'Há cảo hấp nhân tôm', 'Những chiếc bánh há cảo nhân tôm thịt ú nu với lớp vỏ trắng trong, hấp dẫn ăn kèm tương ớt, rau răm.', 9, '1700667829_248416356-603732071065135-8494-6725-3188-1637810034.jpg', 'Đọc hay nắm'),
(3, 'Cháo gà', 'Chuyên mục Hà Nội ngày lạnh ăn gì không thể nào thiếu được món cháo gà nóng hổi vừa thổi vừa ăn được bạn ơi. Từng miếng cháo đậm đà tròn vị sẽ khiến bạn thấy cực kì ấm lòng đấy. ', 12, '1700668087_30-mon-ngon-nuc-long-nhat-dinh-phai-an-khi-toi-ha-noi-phan-3-1-1024x768.webp', 'Đọc hay nắm'),
(4, 'Súp bí đỏ mạng nhện', ' Món súp bí đỏ quen thuộc trong bữa cơm hàng ngày nay biến tấu với nhiều loại gia vị thơm ngon, bổ dưỡng, mang đậm bản sắc phương Tây. Súp bí đỏ cũng là món ăn truyền thống, không thể thiếu trong các bữa tiệc Halloween.', 12, '1700668212_23-768x512.png', 'Đọc hay nắm'),
(5, 'Thạch trái cây huyết tương', 'Lấy màu đỏ đặc trưng của Halloween làm chủ đạo, món tráng miệng này rùng rợn theo một cách riêng. Thạch trái cây đỏ thẫm với bóng ma sóng sánh trên mặt kích thích sự tò mò khám phá của thực khách.', 11, '1700668282_Thach-trai-cay-huyet-tuong-Halloween-768x512.webp', 'Đọc hay nắm'),
(6, 'Pizza ma quái', 'Món bánh với nổi bật với màu đỏ cam của sốt cà chua cùng hình dáng một hồn ma màu trắng được làm từ phô mai mozzarella béo ngon hấp dẫn. Lớp bánh mì ăn cùng có vị giòn thơm chấm ăn kèm tương ớt, đồ chua hay dưa leo đều rất cuốn.', 11, '1700668495_banh-pizza-dau-lau-thumbnail-1.jpg', 'Đọc hay nắm'),
(7, 'Chum thuốc ma thuật', 'Kẹo ngọt :chum thuốc ma thuật', 11, '1700668519_chum-thuoc-ma-thuat-thumbnail.jpg', 'Đọc hay nắm'),
(8, 'Ớt cuộn xác ướp', 'Mang hình dáng quả ớt đặc trưng nhưng được chế biến và hóa thân thành xác ướp đẹp mắt và cũng không kém phần đáng yêu.', 9, '1700668625_ot-cuon-xac-uop-thumbnail.jpg', 'Đọc hay nắm'),
(9, 'Phở bò', 'Món ăn được vinh danh nhiều nhất trên các bài báo, tạp chí, kênh truyền hình,…', 9, '1700669099_pho-bo-ivivu.jpeg', 'Đọc hay nắm'),
(10, 'Gỏi cuốn', 'Gỏi cuốn là món ăn Việt Nam từng được lọt vào “Top 50 món ăn ngon nhất thế giới do kênh CNN bình chọn”. Gỏi cuốn được làm từ những nguyên liệu đơn giản như: bánh tráng, thịt heo, tôm, giá, bún, rau sống,… Tất cả được gói bởi lớp bánh tráng dẻo mềm bên ngoài.', 9, '1700669181_gỏi-cuốn-ivivu1.jpg', 'Đọc hay nắm'),
(11, 'Bánh xèo', 'Bánh xèo là món bánh từng được vinh danh tại lễ hội dân gian Mỹ năm 2007 được kênh truyền hình CNN khen ngợi. Bánh xèo với vỏ bánh giòn rụm, vàng ươm, bên trong có đủ các loại nhân: tôm, thịt, giá, củ hũ khóm,… Bánh xèo thường được ăn kèm với rau sống, phần nước mắm chua ngọt.', 9, '1700669302_bánh-xèo-ivivu.jpg', 'Đọc hay nắm'),
(12, 'tôm chiên giòn', 'Tôm chiên giòn đơn giản, là một trong những món ngon mỗi ngày dễ làm, thường được dùng nhiều tại các buổi tiệc, liên hoan, họp mặt hay bữa cơm gia đình . Thịt tôm mềm xốp, dễ tiêu hóa, giàu đạm, kali, phốt pho, magiê, i-ốt, vitamin A nên được xem là thực phẩm dinh dưỡng, rất thích hợp cho người già, trẻ em và người suy nhược cơ thể.', 9, '1700669560_Buoc-6-Thanh-pham-1-2236-1658735331.jpg', 'Đọc hay nắm'),
(13, 'Magic Cookie Bar', 'Magic Cookie Bar – thanh bánh qui diệu kỳ là loại bánh cổ điển là món ngon mỗi ngày thường được dùng làm món tráng miệng và xuất hiện trong các bữa tiệc của nhiều nước châu Âu.', 9, '1700669642_magic-cookie-bar.jpg', ''),
(14, 'Món ăn truyền thống các nước dịp Noel', 'Gà tây, bánh pudding, bánh gừng truyền thống hoặc hải sản nướng uống kèm với rượu vang là những món ăn yêu thích của người dân các nước trong ngày lễ quan trọng nhất của người Thiên chúa giáo.', 10, '1700994223_hovach.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_trangthai`
--

CREATE TABLE `tbl_trangthai` (
  `id_trangthai` int(11) NOT NULL,
  `tentrangthai` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_trangthai`
--

INSERT INTO `tbl_trangthai` (`id_trangthai`, `tentrangthai`) VALUES
(1, 'Đơn mới'),
(2, 'Đã chuẩn bị hàng'),
(3, 'Đang giao hàng'),
(4, 'Giao hàng thành công'),
(5, 'Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(255) NOT NULL,
  `ma_donhang` varchar(255) NOT NULL,
  `vnp_bankcode` varchar(255) NOT NULL,
  `vnp_banktrano` varchar(255) NOT NULL,
  `vnp_cardtype` varchar(255) NOT NULL,
  `vnp_oderinfo` varchar(255) NOT NULL,
  `vnp_paydate` varchar(255) NOT NULL,
  `vnp_tmncode` varchar(255) NOT NULL,
  `vnp_transactionno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id_vnpay`, `vnp_amount`, `ma_donhang`, `vnp_bankcode`, `vnp_banktrano`, `vnp_cardtype`, `vnp_oderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`) VALUES
(16, '100000000', '7229', 'NCB', 'VNP14188859', 'ATM', 'Thanh tóa đơn hàng đặt tại NTN Food', '20231120143119', 'ULHKCVCB', '14188859'),
(17, '840000', '8068', 'NCB', 'VNP14197570', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124155043', 'ULHKCVCB', '14197570'),
(18, '850000', '5837', 'NCB', 'VNP14197709', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124163636', 'ULHKCVCB', '14197709'),
(19, '870000', '3188', 'NCB', 'VNP14197753', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124164941', 'ULHKCVCB', '14197753'),
(20, '340000', '2025', 'NCB', 'VNP14197951', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124181622', 'ULHKCVCB', '14197951'),
(21, '400000', '9597', 'NCB', 'VNP14198457', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124232325', 'ULHKCVCB', '14198457'),
(22, '100000', '8916', 'NCB', 'VNP14199607', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231125145810', 'ULHKCVCB', '14199607'),
(23, '990000', '4697', 'NCB', 'VNP14206810', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231128175440', 'ULHKCVCB', '14206810'),
(24, '220000', '3007', 'NCB', 'VNP14208890', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231129153245', 'ULHKCVCB', '14208890'),
(25, '300000', '5312', 'NCB', 'VNP14209111', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231129164831', 'ULHKCVCB', '14209111'),
(26, '360000', '6026', 'NCB', 'VNP14213735', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231201133128', 'ULHKCVCB', '14213735'),
(27, '212000', '1602', 'NCB', 'VNP14220983', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231206003027', 'ULHKCVCB', '14220983'),
(28, '530000', '9234', 'NCB', 'VNP14232683', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231210134754', 'ULHKCVCB', '14232683');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `fk_kh_bl` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_tintuc`
--
ALTER TABLE `tbl_danhmuc_tintuc`
  ADD PRIMARY KEY (`id_danhmuc_tintuc`);

--
-- Chỉ mục cho bảng `tbl_diachinhanhang`
--
ALTER TABLE `tbl_diachinhanhang`
  ADD PRIMARY KEY (`id_diachi`),
  ADD KEY `fk_dc_tk` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `fk_gh_nd` (`id_nguoidung`),
  ADD KEY `fk_tt_bill` (`id_trangthai`);

--
-- Chỉ mục cho bảng `tbl_hoadon_chitiet`
--
ALTER TABLE `tbl_hoadon_chitiet`
  ADD PRIMARY KEY (`id_donhang_chitiet`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_monan`
--
ALTER TABLE `tbl_monan`
  ADD PRIMARY KEY (`id_monan`),
  ADD KEY `fk_ma_dm` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`id_tintuc`),
  ADD KEY `fk_tintuc` (`id_danhmuc_tintuc`);

--
-- Chỉ mục cho bảng `tbl_trangthai`
--
ALTER TABLE `tbl_trangthai`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- Chỉ mục cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_tintuc`
--
ALTER TABLE `tbl_danhmuc_tintuc`
  MODIFY `id_danhmuc_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_diachinhanhang`
--
ALTER TABLE `tbl_diachinhanhang`
  MODIFY `id_diachi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon_chitiet`
--
ALTER TABLE `tbl_hoadon_chitiet`
  MODIFY `id_donhang_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_monan`
--
ALTER TABLE `tbl_monan`
  MODIFY `id_monan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_trangthai`
--
ALTER TABLE `tbl_trangthai`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD CONSTRAINT `fk_kh_bl` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_taikhoan` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_diachinhanhang`
--
ALTER TABLE `tbl_diachinhanhang`
  ADD CONSTRAINT `fk_dc_tk` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_taikhoan` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `fk_gh_nd` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_taikhoan` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tt_bill` FOREIGN KEY (`id_trangthai`) REFERENCES `tbl_trangthai` (`id_trangthai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_monan`
--
ALTER TABLE `tbl_monan`
  ADD CONSTRAINT `fk_ma_dm` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);

--
-- Các ràng buộc cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD CONSTRAINT `fk_tintuc` FOREIGN KEY (`id_danhmuc_tintuc`) REFERENCES `tbl_danhmuc_tintuc` (`id_danhmuc_tintuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
