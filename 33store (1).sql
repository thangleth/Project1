-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2024 lúc 10:16 AM
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
-- Cơ sở dữ liệu: `33store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `iddm` int(11) NOT NULL,
  `tendm` varchar(255) NOT NULL,
  `imgdm` varchar(255) NOT NULL,
  `hienthi` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`iddm`, `tendm`, `imgdm`, `hienthi`) VALUES
(1, 'Bóng đá', 'trend7.jpg', 0),
(2, 'Thời trang', 'trend1.jpg', 1),
(3, 'Chạy bộ', 'trend2.jpg', 1),
(4, 'Bóng rổ', 'trend3.jpg', 1),
(5, 'Tập luyện', 'trend4.jpg', 1),
(6, 'Dép', 'trend5.jpg', 1),
(7, 'Phụ kiện', 'trend6.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `receipt_name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` tinyint(4) NOT NULL,
  `amount` float NOT NULL,
  `status_payment` tinyint(1) NOT NULL,
  `status_delivery` tinyint(1) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `imgsp` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `giagoc` float NOT NULL,
  `noibat` tinyint(1) NOT NULL,
  `iddm` int(11) NOT NULL,
  `ngaytao` date NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`idsp`, `tensp`, `imgsp`, `soluong`, `gia`, `giagoc`, `noibat`, `iddm`, `ngaytao`, `view`) VALUES
(1, 'ADIDAS YEEZY BOOST 350 V2 \"BLUE TINT\"', 'ADIDAS YEEZY BOOST 350.jpg', 4, 4950000, 0, 1, 2, '2024-05-22', 0),
(2, 'NIKE PEGASUS TURBO NEXT NATURE PURE PLATINUM BRIGHT CRIMSON', 'NIKE PEGASUS TURBO.jpg', 3, 4500000, 0, 1, 3, '2024-05-19', 1),
(3, 'NIKE KYRIE INFINITY CNY (2022)', 'NIKE KYRIE INFINITY CNY (2022).jpg', 12, 3850000, 0, 1, 4, '2024-05-08', 1),
(4, 'SALOMON ACS PRO LAPIS BLUE', 'SALOMON ACS PRO LAPIS BLUE.jpg', 14, 3700000, 0, 1, 5, '2024-05-13', 1),
(5, 'NIKE AIR FORCE 1 LOW \'07 SE JUST DO IT SUMMIT WHITE TEAM RED (W)', 'NIKE AIR FORCE 1 LOW \'07.jpg', 12, 3520000, 0, 0, 2, '2024-05-15', 0),
(6, 'WMNS NIKE AIR MAX 97 OG SILVER BULLET (2022)', 'WMNS NIKE AIR MAX 97 OG SILVER BULLET (2022).jpg', 32, 6380000, 0, 0, 2, '2024-05-10', 0),
(7, 'NIKE AIR FORCE 1 LOW 07 QS VALENTINE\'S DAY LOVE LETTER', 'NIKE AIR FORCE 1 LOW 07 QS VALENTINE\'S DAY LOVE LETTER.jpg', 31, 4840000, 0, 0, 2, '2024-05-05', 0),
(8, 'NIKE SB DUNK LOW BLUE RASPBERRY', 'NIKE SB DUNK LOW BLUE RASPBERRY.jpg', 12, 4180000, 0, 0, 2, '2024-05-17', 0),
(9, 'WMNS AIR JORDAN 1 LOW PANDA (2023)', 'WMNS AIR JORDAN 1 LOW PANDA (2023).jpg', 23, 3630000, 0, 0, 2, '2024-05-13', 54),
(10, 'NIKE AIR FORCE 1 LV8 NEXT NATURE SUN CLUB', 'NIKE AIR FORCE 1 LV8 NEXT NATURE SUN CLUB.jpg', 32, 3650000, 0, 0, 2, '2024-05-17', 12),
(11, 'NIKE DUNK LOW RETRO WHITE GREY', 'NIKE DUNK LOW RETRO WHITE GREY.jpg', 32, 2750000, 0, 0, 2, '2024-05-28', 45),
(12, 'AIR JORDAN 4 RETRO MILITARY BLUE 2024', 'AIR JORDAN 4 RETRO MILITARY BLUE 2024.jpg', 14, 2650000, 0, 0, 2, '2024-05-13', 13),
(13, 'NIKE WMNS AIR FORCE 1 LOW \'07 ESSENTIAL WHITE GREEN PAISLEY', 'NIKE WMNS AIR FORCE 1 LOW \'07 ESSENTIAL WHITE GREEN PAISLEY.jpg', 34, 3300000, 0, 0, 2, '2024-05-28', 23),
(14, 'Nike Mercurial Vapor 15 Elite', 'soccer1.png', 31, 2300000, 0, 0, 1, '2024-05-05', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `img_user` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iduser`, `name`, `user_name`, `password`, `email`, `phone`, `img_user`, `address`, `role`) VALUES
(3, 'thang', 'thang123', '$2y$10$o0QGWrueppX951U1mh6m9eyf1xWfagKKzLQhKQsJvK2/TAk7PM3f.', 'leethang090@gmail.com', 0, '', '', 1),
(4, 'quy', 'quy456', '$2y$10$zM7jX4lr6fdIyb8WpP/3aurKFaJh1GmIzaBLsOeDy7zrve5CZVmHC', 'quy@gmail.com', 0, '', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`iddm`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_oders_detail` (`orders_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `FK_SANPHAM_DANHMUC` (`iddm`);

--
-- Chỉ mục cho bảng `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_img_product` (`idsp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `iddm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_oders_detail` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_SANPHAM_DANHMUC` FOREIGN KEY (`iddm`) REFERENCES `category` (`iddm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `FK_img_product` FOREIGN KEY (`idsp`) REFERENCES `product` (`idsp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
