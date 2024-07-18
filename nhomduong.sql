-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2024 lúc 02:34 AM
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
-- Cơ sở dữ liệu: `nhomduong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `noidung` text DEFAULT NULL,
  `ngaybinhluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `id_sp`, `id_tk`, `noidung`, `ngaybinhluan`) VALUES
(3, 1, 4, 'Bánh mì này ngon quá anh em ơi', 'Wednesday 29th of November 2023 11:20:16 AM'),
(4, 1, 4, 'Bánh mì này ngon quá anh em ơiiiiiiiiiiiiiiiii', 'Wednesday 29th of November 2023 11:24:19 AM'),
(5, 1, 4, 'Bánh mì này ngon quá anh em ơi. Lần sau lại mua tiếp', 'Wednesday 29th of November 2023 11:25:59 AM'),
(6, 1, 4, 'Huy ăn bánh mì', 'Wednesday 29th of November 2023 11:28:38 AM'),
(7, 13, 3, 'Bánh ngọt phết', 'Wednesday 29th of November 2023 01:54:08 PM'),
(8, 9, 4, 'Sữa Ngon lắm nhé các bác', 'Thursday 30th of November 2023 05:49:33 AM'),
(9, 1, 4, 'Thằng đb ăn bánh mì', 'Friday 1st of December 2023 10:54:23 AM'),
(10, 9, 4, 'sữa này ngon', 'Wednesday 6th of December 2023 12:47:29 PM'),
(11, 9, 4, 'qabbccc', 'Wednesday 6th of December 2023 01:17:20 PM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(255) NOT NULL,
  `anh_dm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten_dm`, `anh_dm`) VALUES
(2, 'Đồ uống ', 'tra-xanh.webp'),
(11, 'Đồ ăn', 'banh-mi-nuong-kaya.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hovaten` varchar(255) DEFAULT NULL,
  `sdt_dh` int(11) NOT NULL,
  `diachi` text DEFAULT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0 COMMENT '0: ĐÃ ĐẶT HÀNG\r\n1: ĐÃ LẤY HÀNG\r\n2: ĐANG GIAO HÀNG\r\n3: ĐÃ NHẬN HÀNG\r\n4: LỊCH SỬ MUA HÀNG'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_dh`, `id_tk`, `id_sp`, `hovaten`, `sdt_dh`, `diachi`, `trangthai`) VALUES
(23, 3, 13, 'Khuất Đình Long', 328891146, 'Số 4, ngõ 33, đường Đình Rối, Đại Đồng, Thạch Thất, Hà Nội', 3),
(24, 4, 1, 'Khuất Đình Long', 328891146, 'Số 4, ngõ 33, đường Đình Rối, Đại Đồng, Thạch Thất, Hà Nội', 3),
(25, 4, 1, 'Khuất Đình Long', 328891146, 'Số 4, ngõ 33, đường Đình Rối, Đại Đồng, Thạch Thất, Hà Nội', 4),
(29, 4, 9, 'Nguyễn Ngọc Dương', 123456789, '90 từ liêm', 4),
(30, 4, 13, 'Khuất Đình Long', 328891146, 'Số 4, ngõ 33, đường Đình Rối, Đại Đồng, Thạch Thất, Hà Nội', 0),
(31, 4, 1, 'Khuất Đình Long', 328891146, 'Số 4, ngõ 33, đường Đình Rối, Đại Đồng, Thạch Thất, Hà Nội', 0),
(32, 4, 60, 'Khuất Đình Long', 328891146, 'Số 4, ngõ 33, đường Đình Rối, Đại Đồng, Thạch Thất, Hà Nội', 0),
(33, 4, 10, 'Khuất Dự án 1', 123456789, 'Số 4, ngõ 33, đường Đình Rối, Đại Đồng, Thạch Thất, Hà Nội', 0),
(34, 4, 200, 'Nguyễn Ngọc Dương', 123456789, '66 phú kiều từ liêm hà nội', 0),
(35, 4, 100, 'Nguyễn Ngọc Dương', 1234567890, '90 từ liêm', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_gh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_gh`, `id_sp`, `id_tk`) VALUES
(2, 6, 4),
(3, 6, 4),
(4, 7, 4),
(5, 5, 4),
(6, 7, 4),
(12, 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id_o` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_pro` int(11) DEFAULT NULL,
  `giamua` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `thanhtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id_o`, `id_order`, `id_pro`, `giamua`, `soluong`, `thanhtien`) VALUES
(1, 32, 9, 2, 10, 20),
(2, 32, 13, 2, 20, 40),
(3, 33, 9, 1, 10, 10),
(4, 34, 9, 20, 10, 200),
(5, 35, 9, 10, 10, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `gia` int(11) NOT NULL,
  `mota` text NOT NULL,
  `luotmua` int(11) NOT NULL DEFAULT 0,
  `luotxem` int(50) NOT NULL DEFAULT 0,
  `id_dm` int(11) NOT NULL COMMENT 'id danh mục',
  `ud` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0:không ưu đãi\r\n1:có ưu đãi',
  `giatri_ud` int(11) DEFAULT NULL COMMENT 'Giá ưu đãi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `anh`, `gia`, `mota`, `luotmua`, `luotxem`, `id_dm`, `ud`, `giatri_ud`) VALUES
(1, 'Bánh mì', 'banhmi.jpg', 20, 'Bánh m ì ngon vllllllllllll', 0, 22, 1, '0', NULL),
(9, 'Sữa', 'sua.jpg', 10, 'Sữa Cô Gái Hà Lan được làm từ nguồn nguyên liệu chọn lọc nghiêm ngặt, trải qua quy trình sản xuất và kiểm soát chất lượng theo tiêu chuẩn được quốc tế công nhận, với kinh nghiệm đúc kết hơn 145 năm qua.   Chúng tôi mong muốn mang trọn tiêu chuẩn Hà Lan qua sự tươi ngon tự nhiên và thuần khiết cho người tiêu dùng ở Việt Nam, như cách chúng tôi đã và đang làm ở hơn 100 quốc gia trên thế giới', 1, 9, 2, '1', 20),
(10, 'Bánh mì chảo', 'banh-mi-chao.jpeg', 20, 'Bánh mì chảo là món ăn buổi sáng được hầu hết mọi người ưa thích. Công thức làm bánh mì chảo đơn giản này giúp mọi người có thể làm ngay tại nhà vừa tiết kiệm thời gian mà vẫn đảm bảo độ ngon và đầy đủ dinh dưỡng cho bữa sáng. Bánh mì nóng giòn được chấm cùng cá mòi thơm lừng, mềm ngọt kèm phô mai và trứng ốp la béo ngậy khiến bạn ngất ngây luôn đấy. Đặc biệt với cách làm nước sốt bánh mì đậm đà càng giúp tăng độ hấp dẫn cho món ăn.', 0, 6, 11, '1', 30),
(13, 'Katsu Sando', 'banh-mmi-katsu-sando.jpg', 20, 'Crispys juicy pork cutlets sandwiched between soft pillowy Japanese milk bread, this Japanese Katsu Sando is a homey kind of sandwich but downright satisfying! Get over your sandwich ho-hum with this new favorite.', 0, 10, 2, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rolee` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0:user --- 1:admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `user`, `pass`, `anh`, `sdt`, `email`, `rolee`) VALUES
(1, 'longkhph3722611', '123', '', 328891146, 'longkdph32826@fpt.edu.vn', '1'),
(2, 'longkhph3722611', '12345', 'corect.png', 328891146, 'longkdph32826@fpt.edu.vn', '0'),
(3, 'long', '123', NULL, 328891146, 'long@gmail.com', '1'),
(4, 'phamhuy', '123', '', 2147483647, 'huy@gmail.com', '0'),
(7, 'duongnn', '1234', NULL, 123456789, 'Duongcc@gmail.com', '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gh`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_o`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_o` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
