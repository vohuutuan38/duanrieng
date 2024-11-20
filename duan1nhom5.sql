-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2024 lúc 07:06 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1nhom5`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bienthe`
--

CREATE TABLE `bienthe` (
  `ma_bien_the` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `mau_sac` varchar(50) NOT NULL,
  `so_luong` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bienthe`
--

INSERT INTO `bienthe` (`ma_bien_the`, `ma_san_pham`, `mau_sac`, `so_luong`) VALUES
(64, 16, 'black', 9),
(65, 16, 'blue', 9),
(68, 12, 'black', 10),
(69, 12, 'white', 10),
(70, 12, 'yellow', 10),
(71, 13, 'black', 10),
(72, 13, 'yellow', 10),
(73, 18, 'black', 12),
(74, 18, 'white', 12),
(75, 15, 'black', 9),
(76, 15, 'yellow', 9),
(77, 19, 'black', 4),
(78, 19, 'white', 4),
(79, 19, 'yellow', 4),
(80, 19, 'blue', 4),
(81, 14, 'black', 2),
(82, 14, 'white', 2),
(83, 20, 'yellow', 12),
(84, 20, 'blue', 12),
(85, 21, 'white', 34),
(86, 21, 'yellow', 34),
(87, 22, 'black', 12),
(88, 22, 'yellow', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_binh_luan` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) DEFAULT NULL,
  `ma_san_pham` int(11) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `danh_gia` enum('1','2','3','4','5') NOT NULL DEFAULT '5',
  `ngay_binh_luan` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ma_binh_luan`, `ma_nguoi_dung`, `ma_san_pham`, `noi_dung`, `danh_gia`, `ngay_binh_luan`) VALUES
(1, 1, 12, 'quá hay', '3', '2024-11-16 03:16:07'),
(2, 1, 12, 'hahahahaa', '5', '2024-11-16 03:32:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_chi_tiet_don_hang` int(11) NOT NULL,
  `ma_don_hang` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `mau_sac` varchar(50) DEFAULT NULL,
  `thanh_tien` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ma_chi_tiet_don_hang`, `ma_don_hang`, `ma_san_pham`, `ten_san_pham`, `so_luong`, `gia`, `mau_sac`, `thanh_tien`) VALUES
(1, 5, 16, 'iphone 13', 1, 13000000.00, 'black', 13000000.00),
(2, 5, 13, 'iphone xs', 2, 13000000.00, 'black', 26000000.00),
(3, 6, 13, 'iphone xs', 2, 13000000.00, 'yellow', 26000000.00),
(4, 7, 15, 'iphone 11', 1, 16500000.00, 'black', 16500000.00),
(5, 8, 22, 'iphone 15', 1, 24000000.00, 'black', 24000000.00),
(6, 9, 19, 'SamSung galaxy j4', 1, 12000000.00, 'black', 12000000.00),
(7, 9, 18, 'Iphone 14', 1, 21000000.00, 'black', 21000000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `ma_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(100) NOT NULL,
  `mo_ta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`ma_danh_muc`, `ten_danh_muc`, `mo_ta`) VALUES
(1, 'iphone', 'iphone 16gh'),
(2, 'Samsung', 'đến từ hàn quốc'),
(3, 'Huawei', 'iphone 16gh nini');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ma_don_hang` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) DEFAULT NULL,
  `ngay_dat` timestamp NULL DEFAULT current_timestamp(),
  `tong_tien` decimal(15,2) NOT NULL,
  `trang_thai` enum('Chờ xử lý','Đang giao','Hoàn thành','Hủy') DEFAULT 'Chờ xử lý',
  `pttt` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ma_don_hang`, `ma_nguoi_dung`, `ngay_dat`, `tong_tien`, `trang_thai`, `pttt`) VALUES
(5, 11, '2024-11-19 10:36:34', 39030000.00, 'Chờ xử lý', 1),
(6, 11, '2024-11-19 11:13:05', 26030000.00, 'Hoàn thành', 1),
(7, 11, '2024-11-19 21:08:52', 16530000.00, 'Hủy', 1),
(8, 11, '2024-11-19 21:09:14', 24030000.00, 'Hoàn thành', 0),
(9, 10, '2024-11-19 23:51:59', 33030000.00, 'Chờ xử lý', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `anh_dai_dien` varchar(255) DEFAULT NULL,
  `so_dien_thoai` varchar(15) DEFAULT NULL,
  `dia_chi` text DEFAULT NULL,
  `ngay_dang_ky` timestamp NULL DEFAULT current_timestamp(),
  `loai_nguoi_dung` enum('KhachHang','NhanVien') NOT NULL,
  `trang_thai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nguoi_dung`, `ten`, `email`, `mat_khau`, `anh_dai_dien`, `so_dien_thoai`, `dia_chi`, `ngay_dang_ky`, `loai_nguoi_dung`, `trang_thai`) VALUES
(1, 'võ hữu tuấn', 'vohuutuan04@gmail.com', '1', 'iphone-13-1-2.jpg', '0799123089', 'phu do', '2024-11-15 15:18:20', 'KhachHang', 1),
(10, 'Võ Hữu Tuấn', 'vohuumanhepu@gmail.com', '$2y$10$.SsW7GFuNw8f59eQ8C1mfO8Is2Qpy2QOSfrwohHDbo6o14uyq0rm2', 'iphone-15-128gb-hong-2.jpg', '079999999', 'hà tĩnh', '2024-11-18 14:06:07', 'NhanVien', 1),
(11, 'tuaias', 'tuanvhph38029@fpt.edu.vn', '$2y$10$.6eBBXFb.7mcyKTmBDLE/OAww.GUedlaXBwXl7OxwpoUOAoFR5d/2', 'iphone-11-trang-5-1-org.png', '0799123089', 'phú đô', '2024-11-18 14:21:51', 'KhachHang', 1),
(13, 'vo huu tuans21', 'Manhcuonght96@gmail.com', '$2y$10$HxZVxJEGvCBGpNLm7KQLFONPVeBZy3M5xyZ517wdJXryWr7fnsPjO', 'iphone-11-den-1-1-1-org.png', '07991230890', 'phú đô', '2024-11-19 02:08:23', 'KhachHang', 1),
(14, 'vo huu tuans', 'vohuumanhepu1@gmail.com', '$2y$10$kloUO8SnSfeE2B2GnX4xgu8AlKOyvec7808xBZWW33Zt1NrrZhCte', 'iphone-11-trang-1-2-org.png', '07991230890', 'phú đô', '2024-11-19 02:16:13', 'KhachHang', 1),
(15, 'vo huu tuans', 'vohason@gmail.com', '$2y$10$YZ8p1rQrqBOrtOdbF1H3k.w.6QQs/p.N35x6DvNWexIPbWPxJeGvS', 'iphone-15-128gb-xanh-2.jpg', '0799123089', 'phú đo', '2024-11-20 02:40:36', 'KhachHang', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(100) NOT NULL,
  `anh_san_pham` varchar(255) DEFAULT NULL,
  `gia` decimal(15,2) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `ma_danh_muc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ma_san_pham`, `ten_san_pham`, `anh_san_pham`, `gia`, `mo_ta`, `ma_danh_muc`) VALUES
(12, 'iphone 8', 'iphone-14-plus-trang-1.jpg', 13000000.00, 'ádasda', 1),
(13, 'iphone xs', 'iphone-15-den-1.jpg', 13000000.00, 'hahahaa', 1),
(14, 'SamSung galaxy fold 2', 'samsung-galaxy-s23-ultra-1-2.jpg', 21000000.00, 'huuhhu', 2),
(15, 'iphone 11', 'iphone-14-plus-ti-1.jpg', 16500000.00, 'hahaahahaa', 1),
(16, 'iphone 13', 'iphone-14-plus-den-1.jpg', 13000000.00, 'hahaaa', 1),
(18, 'Iphone 14', 'iphone-14-pro-max-purple-1.jpg', 21000000.00, 'quá ngonn', 1),
(19, 'SamSung galaxy j4', 'samsung-galaxy-a15-5g-xanh-den-1.jpg', 12000000.00, 'hahshsha', 2),
(20, 'huaweiband9', 'samsung-galaxy-s23-ultra-kem-1-1.jpg', 11000000.00, 'ádasd', 3),
(21, 'huaweiband10', 'samsung-galaxy-s23-ultra-xanh-1.jpg', 9000000.00, 'ádasdas', 3),
(22, 'iphone 15', 'iphone-15-den-1.jpg', 24000000.00, 'iphoen 121', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bienthe`
--
ALTER TABLE `bienthe`
  ADD PRIMARY KEY (`ma_bien_the`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_binh_luan`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ma_chi_tiet_don_hang`),
  ADD KEY `ma_don_hang` (`ma_don_hang`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`ma_danh_muc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_don_hang`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD KEY `ma_danh_muc` (`ma_danh_muc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bienthe`
--
ALTER TABLE `bienthe`
  MODIFY `ma_bien_the` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ma_chi_tiet_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `ma_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bienthe`
--
ALTER TABLE `bienthe`
  ADD CONSTRAINT `bienthe_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`ma_san_pham`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoi_dung`) ON DELETE SET NULL,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`ma_san_pham`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`ma_don_hang`) REFERENCES `donhang` (`ma_don_hang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`ma_san_pham`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoi_dung`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danhmucsanpham` (`ma_danh_muc`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
