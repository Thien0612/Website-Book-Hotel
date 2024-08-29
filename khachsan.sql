-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khachsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiethoadon` int(10) NOT NULL,
  `id_hoadon` int(10) NOT NULL,
  `id_phong` int(10) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `Sdt` int(10) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `NgayDen` date NOT NULL,
  `NgayDi` date NOT NULL,
  `SoPhong` int(10) NOT NULL,
  `ThanhTien` varchar(20) NOT NULL,
  `pttt` varchar(50) DEFAULT NULL,
  `capnhat` varchar(5) NOT NULL,
  `dichvu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_chitiethoadon`, `id_hoadon`, `id_phong`, `HoTen`, `Sdt`, `DiaChi`, `NgayDen`, `NgayDi`, `SoPhong`, `ThanhTien`, `pttt`, `capnhat`, `dichvu`) VALUES
(85, 316, 1, 'Tôi là User1', 383647281, 'Đồng Tháp', '2024-08-09', '2024-08-11', 1, '1000000', 'momo atm', '0', 'Đưa đón khách tại sân bay, tàu ga, Dịch vụ dọn phòng hàng ngày'),
(86, 317, 12, 'Tôi là User1', 383647281, 'Đồng Tháp', '2024-08-14', '2024-08-15', 1, '5000000', 'cod', '0', 'Đưa đón khách tại sân bay, tàu ga, Dịch vụ thư tín, Dịch vụ Spa, Dịch vụ quay Camera và chụp ảnh, Dịch vụ cho thuê văn phòng, Đưa đón khách tại sân bay, tàu ga'),
(87, 318, 12, 'Tôi là User2', 123456789, 'Hà Nội', '2024-08-23', '2024-08-25', 1, '5000000', 'cod', '0', 'Đưa đón khách tại sân bay, tàu ga, Dịch vụ giặt là, Dịch vụ quay Camera và chụp ảnh, Bar và Nhà hàng'),
(88, 319, 6, 'Tôi là User2', 123456789, 'Hà Nội', '2024-08-30', '2024-09-04', 1, '1200000', 'cod', '0', 'Dịch vụ dọn phòng hàng ngày, Dịch vụ cho thuê văn phòng'),
(89, 320, 11, 'Tôi là User3', 293781639, 'Vĩnh Long', '2024-09-12', '2024-09-13', 1, '10000000', 'cod', '0', 'Đưa đón khách tại sân bay, tàu ga, Dịch vụ quay Camera và chụp ảnh, Hồ bơi'),
(90, 321, 2, 'Tôi là User4', 383647281, 'TPHCM', '2024-08-31', '2024-09-02', 1, '900000', 'cod', '0', 'Đưa đón khách tại sân bay, tàu ga, Dịch vụ giặt là'),
(91, 322, 5, 'Tôi là User5', 372819282, 'Vĩnh Long', '2024-09-05', '2024-09-06', 2, '2400000', 'momo atm', '0', 'Đưa đón khách tại sân bay, tàu ga, Phòng gym, Dịch vụ quay Camera và chụp ảnh'),
(92, 323, 7, 'Tôi là User5', 372819282, 'Vĩnh Long', '2024-08-16', '2024-08-17', 1, '2000000', 'cod', '0', 'Dịch vụ Spa, Phòng gym');

-- --------------------------------------------------------

--
-- Table structure for table `chitietloaiphong`
--

CREATE TABLE `chitietloaiphong` (
  `id_chitietloaiphong` int(10) NOT NULL,
  `id_loaiphong` int(10) NOT NULL,
  `Tenphong` varchar(50) NOT NULL,
  `Giuong` varchar(20) NOT NULL,
  `MayGiat` varchar(10) NOT NULL DEFAULT 'Yes',
  `MaySay` varchar(10) NOT NULL DEFAULT 'Yes',
  `MayLanh` varchar(10) NOT NULL DEFAULT 'Yes',
  `MayChieu` varchar(10) NOT NULL DEFAULT 'Yes',
  `PhongTamRieng` varchar(10) NOT NULL DEFAULT 'Yes',
  `PhongLamViec` varchar(10) NOT NULL DEFAULT 'Yes',
  `PhongHop` varchar(10) NOT NULL DEFAULT 'Yes',
  `Minibar` varchar(10) NOT NULL DEFAULT 'Yes',
  `Wifi` varchar(10) NOT NULL DEFAULT 'Yes',
  `TV` varchar(10) NOT NULL DEFAULT 'Yes',
  `BanLamViec` varchar(10) NOT NULL DEFAULT 'Yes',
  `TuSat` varchar(10) NOT NULL DEFAULT 'Yes',
  `TuLanh` varchar(10) NOT NULL DEFAULT 'Yes',
  `PhongTiepKhach` varchar(10) NOT NULL DEFAULT 'Yes',
  `Bep` varchar(10) NOT NULL DEFAULT 'Yes',
  `PhongAn` varchar(10) NOT NULL DEFAULT 'Yes',
  `BanCong` varchar(10) NOT NULL DEFAULT 'Yes',
  `Sofa` varchar(10) NOT NULL DEFAULT 'Yes',
  `Capnhatgannhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietloaiphong`
--

INSERT INTO `chitietloaiphong` (`id_chitietloaiphong`, `id_loaiphong`, `Tenphong`, `Giuong`, `MayGiat`, `MaySay`, `MayLanh`, `MayChieu`, `PhongTamRieng`, `PhongLamViec`, `PhongHop`, `Minibar`, `Wifi`, `TV`, `BanLamViec`, `TuSat`, `TuLanh`, `PhongTiepKhach`, `Bep`, `PhongAn`, `BanCong`, `Sofa`, `Capnhatgannhat`) VALUES
(1, 1, 'Superior Double', 'Đôi', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'Yes', '2023-10-22 03:45:16'),
(2, 1, 'Superior Twin', 'đơn (x2)', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'Yes', '2023-10-22 03:45:16'),
(3, 2, 'Deluxe Double', 'Đôi', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'Yes', '2023-10-22 03:45:16'),
(4, 2, 'Deluxe Twin', 'đơn (x2)', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'Yes', '2023-10-22 03:45:16'),
(5, 3, 'Premier Deluxe Double', 'Đôi', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'Yes', '2023-10-22 03:45:16'),
(6, 3, 'Premier Deluxe Twin', 'đơn (x2)', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'Yes', '2023-10-22 03:45:16'),
(7, 4, 'Executive Suite', 'Đôi Cỡ King', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', '2023-10-22 03:45:16'),
(8, 5, 'Premier Grand View', 'Đôi Cỡ King', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', '2023-10-22 03:45:16'),
(9, 6, 'Presidential Suite', 'Đôi Cỡ King', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2023-10-22 03:45:16'),
(10, 7, 'Family Room', 'Đôi (x3)', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2023-10-22 03:45:16'),
(11, 5, 'test test ', 'Đôi Cỡ King', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2023-10-22 13:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `datphong`
--

CREATE TABLE `datphong` (
  `id_datphong` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL,
  `NgayLapHoaDon` datetime NOT NULL,
  `TongTien` varchar(20) NOT NULL,
  `id_ttdp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datphong`
--

INSERT INTO `datphong` (`id_datphong`, `id_khachhang`, `NgayLapHoaDon`, `TongTien`, `id_ttdp`) VALUES
(316, 17, '2024-08-07 11:27:57', '1000000', 5),
(317, 17, '2024-08-07 11:32:59', '5000000', 3),
(318, 18, '2024-08-07 19:01:41', '5000000', 5),
(319, 18, '2024-08-07 19:02:40', '1200000', 3),
(320, 19, '2024-08-07 19:04:53', '10000000', 6),
(321, 20, '2024-08-07 19:07:59', '900000', 6),
(322, 21, '2024-08-07 19:17:20', '2400000', 3),
(323, 21, '2024-08-07 19:20:08', '2000000', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `Hoten` varchar(100) NOT NULL,
  `Sdt` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `NoiDung` varchar(1000) NOT NULL,
  `NgayGui` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_lienhe`, `id_user`, `Hoten`, `Sdt`, `Email`, `DiaChi`, `NoiDung`, `NgayGui`) VALUES
(5, 17, 'User1', 123456789, 'user1@gmail.com', 'Đồng Tháp', 'Tôi cần biết thêm các dịch vụ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `id_loaiphong` int(10) NOT NULL,
  `loaiphong` varchar(50) NOT NULL,
  `thoigiancapnhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`id_loaiphong`, `loaiphong`, `thoigiancapnhat`) VALUES
(1, 'Superior', '2023-10-22 03:35:28'),
(2, 'Deluxe', '2023-10-22 03:35:28'),
(3, 'Premier Deluxe', '2023-10-22 03:35:28'),
(4, 'Executive Suite', '2023-10-22 03:35:28'),
(5, 'Premier Grand View', '2023-10-22 03:35:28'),
(6, 'Presidential Suite', '2023-10-22 03:35:28'),
(7, 'Family Room', '2023-10-22 03:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id_phanhoi` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL,
  `id_phong` int(10) NOT NULL,
  `NoiDung` varchar(100) NOT NULL,
  `NgayDang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`id_phanhoi`, `id_khachhang`, `id_phong`, `NoiDung`, `NgayDang`) VALUES
(19, 17, 1, 'Phòng sạch sẽ, thoáng mát', '2024-08-07 10:32:11'),
(20, 19, 11, 'Phòng đầy đủ tiện nghi', '2024-08-07 18:04:24'),
(21, 21, 5, 'Phòng sạch sẽ, thoáng mát', '2024-08-07 18:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id_phong` int(10) NOT NULL,
  `id_chitietloaiphong` int(10) NOT NULL,
  `TongSoPhong` int(10) NOT NULL,
  `TieuDe` varchar(100) NOT NULL,
  `MoTa` varchar(10000) NOT NULL,
  `SucChua` int(10) NOT NULL,
  `DienTich` varchar(10) NOT NULL,
  `Gia` varchar(10) NOT NULL,
  `Anh1` varchar(100) NOT NULL,
  `Anh2` varchar(100) NOT NULL,
  `Anh3` varchar(100) NOT NULL,
  `Anh4` varchar(100) NOT NULL,
  `Anh5` varchar(100) NOT NULL,
  `id_trangthai` int(10) NOT NULL,
  `Capnhatgannhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id_phong`, `id_chitietloaiphong`, `TongSoPhong`, `TieuDe`, `MoTa`, `SucChua`, `DienTich`, `Gia`, `Anh1`, `Anh2`, `Anh3`, `Anh4`, `Anh5`, `id_trangthai`, `Capnhatgannhat`) VALUES
(1, 1, 4, 'SUPERIOR DOUBLE', 'Phòng Superior double thiết kế sang trọng, tiện nghi, yên tĩnh,  01 giường ngủ lớn 1m8 x 2m. Diện tích phòng 24m2. Phòng nằm mở tầng 2. Có phòng tắm đứng vòi sen. Phòng ngủ được thiết kế hiện đại, trang thiết bị sang trọng, không gian rộng rãi, thoáng mát, sạch sẽ và ấm cúng. Tất cả các phòng đều có cửa sổ nhìn ra thành phố chắc chắn sẽ đem lại cảm giác thỏa mái cho chuyến công tác và kỳ nghỉ của quý khách.', 2, '24', '1.000.000', 'phong1-1.jpg', 'phong1-2.jpg', 'phong1-3.jpg', 'phong1-4.jpg', 'phong1-5.jpg', 2, '2024-08-07 03:31:36'),
(2, 1, 4, 'SUPERIOR DOUBLE', 'Phòng Superior double thiết kế sang trọng, tiện nghi, yên tĩnh,  01 giường ngủ lớn 1m8 x 2m. Diện tích phòng 22m2. Phòng nằm ở tầng 2. Có phòng tắm đứng vòi sen. Phòng ngủ được thiết kế hiện đại, trang thiết bị sang trọng, không gian rộng rãi, thoáng mát, sạch sẽ và ấm cúng. Tất cả các phòng đều có cửa sổ nhìn ra thành phố chắc chắn sẽ đem lại cảm giác thỏa mái cho chuyến công tác và kỳ nghỉ của quý khách.', 2, '22', '900.000', 'phong1-1.jpg', 'phong1-2.jpg', 'phong1-3.jpg', 'phong1-4.jpg', 'phong1-5.jpg', 2, '2024-08-07 11:07:59'),
(3, 2, 4, 'SUPERIOR TWIN', 'Phòng Superior twin thiết kế sang trọng, tiện nghi, yên tĩnh, gồm 2 giường ngủ đơn. Phòng nằm ở tầng 3. Diện tích phòng 24m2. Phòng 2 giường đơn được bố trí trong một không gian ấm cúng và thoáng đãng với đầy đủ tiện nghi cần thiết. Quý khách sẽ cảm nhận được sự thoải mái và ấm cúng cùng với kỳ nghỉ gia đình của mình.', 2, '24', '1.000.000', 'phong2-1.jpg', 'phong2-2.jpg', 'phong2-3.jpg', 'phong2-4.jpg', 'phong2-5.jpg', 2, '2024-08-07 03:31:36'),
(4, 2, 4, 'SUPERIOR TWIN', 'Phòng Superior twin thiết kế sang trọng, tiện nghi, yên tĩnh, gồm 2 giường ngủ đơn. Diện tích phòng 22m2. Phòng nằm ở tầng 3. Phòng 2 giường đơn được bố trí trong một không gian ấm cúng và thoáng đãng với đầy đủ tiện nghi cần thiết. Quý khách sẽ cảm nhận được sự thoải mái và ấm cúng cùng với kỳ nghỉ gia đình của mình.', 2, '22', '900.000', 'phong2-1.jpg', 'phong2-2.jpg', 'phong2-3.jpg', 'phong2-4.jpg', 'phong2-5.jpg', 2, '2024-08-07 03:31:36'),
(5, 3, 5, 'DELUXE DOUBLE', 'Sự bắt mắt, sang trọng và ấm cúng của căn phòng rộng. Ánh sáng và cách bài trí ấm cúng sẽ tạo cảm giác thân thiết như trong căn nhà của bạn. Phòng nằm ở tầng 4. Loại phòng này có luôn cả phòng khách sẽ giúp bạn có thể tổ chức 1 cuộc họp hay 1 cuộc gặp gỡ ngay tai căn phòng ấm cúng của mình, cùng với không gian rộng rãi cho nhiều các mục đích sử dụng khác nhau dù để nghỉ hay thư giãn', 2, '32', '1.200.000', 'phong3-1.jpg', 'phong3-2.jpg', 'phong3-3.jpg', 'phong3-4.jpg', 'phong3-5.jpg', 2, '2024-08-07 11:19:43'),
(6, 4, 5, 'DELUXE TWIN', 'Sự bắt mắt, sang trọng và ấm cúng của căn phòng rộng. Ánh sáng và cách bài trí ấm cúng sẽ tạo cảm giác thân thiết như trong căn nhà của bạn. Phòng nằm ở tầng 4. Diện tích 32m2 và có 2 giường đơn riêng biệt, phù hợp cho với cặp đôi bạn bè đi du lịch. Loại phòng này có luôn cả phòng khách sẽ giúp bạn có thể tổ chức 1 cuộc họp hay 1 cuộc gặp gỡ ngay tai căn phòng ấm cúng của mình, cùng với không gian rộng rãi cho nhiều các mục đích sử dụng khác nhau dù để nghỉ hay thư giãn', 2, '32', '1.200.000', 'phong4-1.jpg', 'phong4-2.jpg', 'phong4-3.jpg', 'phong6-4.jpg', 'phong4-5.jpg', 2, '2024-08-07 11:22:22'),
(7, 5, 3, 'PREMIER DELUXE DOUBLE', 'Tất cả các phòng có diện tích 40-45m2, hướng biển và thành phố, có ban công, bàn làm việc rộng rãi, nội thất tươi sáng và thiết bị hiện đại như tivi 43 inch, wifi internet, minibar, bình nấu nước điện, két sắt, trà và cà phê, nước đóng chai, dép trong phòng, áo choàng tắm. Giường đôi. Size giường 1.8mx2m ', 2, '45', '2.000.000', 'phong5-1.jpg', 'phong5-2.jpg', 'phong5-3.jpg', 'phong5-4.jpg', 'phong5-5.jpg', 2, '2024-08-07 11:20:08'),
(8, 6, 3, 'PREMIER DELUXE DOUBLE', 'Tất cả các phòng có diện tích 40-45m2, hướng biển và thành phố, có ban công, bàn làm việc rộng rãi, nội thất tươi sáng và thiết bị hiện đại như tivi 43 inch, wifi internet, minibar, bình nấu nước điện, két sắt, trà và cà phê, nước đóng chai, dép trong phòng, áo choàng tắm. 2 giường đơn. Size giường 1.8mx2m ', 2, '45', '2.000.000', 'phong6-1.jpg', 'phong6-2.jpg', 'phong6-3.jpg', 'phong6-4.jpg', 'phong6-5.jpg', 2, '2023-12-17 23:58:37'),
(9, 7, 4, 'EXECUTIVE SUITE', 'Phòng Executive Suite có diện tích phòng 65m², nằm trên 2 tầng là 5 và 6. Tiện nghi hiện đại, phòng khách sang trọng, phòng tắm rộng rãi và phòng ngủ riêng mang đến trải nghiệm thư giãn đẳng cấp.', 2, '55', '5.000.000', 'phong7-1.jpg', 'phong7-2.jpg', 'phong7-3.jpg', 'phong7-4.jpg', 'phong7-5.jpg', 2, '2023-12-17 23:57:24'),
(10, 8, 5, 'PREMIER GRAND VIEW', 'Các phòng nổi bật với sự sang trọng và chi tiết hơn, gần đây đã được tân trang lại theo tiêu chuẩn cao. Du khách sẽ được tận hưởng không gian rộng rãi 55m2 với những nét vẽ nghệ thuật chu đáo trong phòng và phòng tắm đầy đủ tiện nghi với vòi sen hoặc bồn tắm. Tất cả các phòng đều có Smart Tivi kết nối internet. Nằm trên tầng 7 - 8.', 2, '55', '7.000.000', 'phong8-1.jpg', 'phong8-2.jpg', 'phong8-3.jpg', 'phong8-4.jpg', 'phong8-5.jpg', 2, '2023-12-19 12:05:58'),
(11, 9, 3, 'PRESIDENTIAL SUITE', 'Phòng Presidential Suite (Phòng Tổng Thống) có diện tích 136m2 có bài trí sang trọng bậc nhất trong khách sạn, giường ngủ king-size với nệm Sealy công nghệ Posturepedic, menu thay đổi gối ngủ và phòng khách riêng biệt với TV Samsung màn hình phẳng 65 inch. Có phòng vệ sinh dành cho khách và ban công mở ra được khung cảnh phía Nhà Hát Thành Phố ấn tượng. Phòng tắm được trang bị bộ sữa tắm, rửa mặt thuộc dòng sản phẩm cao cấp Black của thương hiệu Appelles nổi tiếng và các vật dụng vệ sinh cá nhân thân thiện với môi trường. Phòng có đi kèm với quyền sử dụng khu vực Signature Lounge, với các đặc quyền gồm: bữa sáng tự chọn, sử dụng đồ uống không cồn và rượu vang sủi trong ngày, và sử dụng đồ uống có cồn kèm ăn nhẹ tự chọn vào buổi tối.', 2, '136', '10.000.000', 'phong9-1.jpg', 'phong9-2.jpg', 'phong9-3.jpg', 'phong9-4.jpg', 'phong9-5.jpg', 2, '2024-08-07 11:04:53'),
(12, 10, 5, 'FAMILY ROOM', 'Phòng Family đúng như tên gọi đã nói lên đặc điểm nổi bậc nhất của căn phòng. Phòng được bố trí sẵn 3 giường lớn dành cho 6 người lớn. Nếu có đông người hơn nữa bạn có thể kê thêm tối đa được một giường lớn (1,6 mét) hoặc 2 giường nhỏ (1,2 mét) nữa để phù hợp với số lượng thành viên trong gia đình mình mong muốn được ở chung với nhau. Vì thế sức chứa của phòng có thể lên đến 6 người lớn.\r\n\r\nBạn có thể đễ dàng chỉ vài bước chân là di chuyển đến biển và hồ bơi trong bán kính 3 phút đi bộ. Tất cả những gì bạn cần làm là thư giãn tại những ghế nằm dài của hồ bơi hay bãi cát ngoài bờ biển, ngắm nhìn những cơn sóng hay dành trọn vẹn những giờ phút thu giãn tận hưởng cùng với gia đình thân yêu.', 6, '55', '5.000.000', 'phong10-1.jpg', 'phong10-2.jpg', 'phong10-3.jpg', 'phong10-4.jpg', 'phong10-5.jpg', 2, '2024-08-07 11:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `trangthaidatphong`
--

CREATE TABLE `trangthaidatphong` (
  `id_ttdp` int(10) NOT NULL,
  `ttdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthaidatphong`
--

INSERT INTO `trangthaidatphong` (`id_ttdp`, `ttdp`) VALUES
(1, 'Đã hết hạn'),
(2, 'Đã xác nhận thanh toán'),
(3, 'Đã hủy'),
(4, 'Đã đặt'),
(5, 'Đang chờ được duyệt'),
(6, 'Đã được duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `trangthaiphong`
--

CREATE TABLE `trangthaiphong` (
  `id_trangthaiphong` int(10) NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthaiphong`
--

INSERT INTO `trangthaiphong` (`id_trangthaiphong`, `trangthai`) VALUES
(1, 'Đã Đặt'),
(2, 'Đã Sẵn Sàng'),
(3, 'Chưa Sẵn Sàng'),
(4, 'Đang Sửa Chữa'),
(5, 'Đang Dọn Dẹp');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai_user`
--

CREATE TABLE `trangthai_user` (
  `id_trangthaiuser` int(10) NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthai_user`
--

INSERT INTO `trangthai_user` (`id_trangthaiuser`, `trangthai`) VALUES
(1, 'Đang hoạt động'),
(2, 'Không hoạt động'),
(3, 'Vô hiệu hóa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `id_user_type` int(10) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sdt` int(10) NOT NULL,
  `Diachi` varchar(100) NOT NULL,
  `NgaySinh` date NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `id_trangThai` int(10) NOT NULL,
  `NgayTao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CapNhatLanCuoi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_user_type`, `Ten`, `Fullname`, `Email`, `Sdt`, `Diachi`, `NgaySinh`, `Pass`, `Anh`, `id_trangThai`, `NgayTao`, `CapNhatLanCuoi`) VALUES
(16, 1, 'Admin', 'Tôi là admin', 'admin@gmail.com', 384271929, 'Vĩnh Long', '2002-12-06', 'admin@123', 'phivan.jpeg', 1, '2024-08-07 03:10:59', '2024-08-07 03:10:59'),
(17, 3, 'User1', 'Tôi là User1', 'user1@gmail.com', 383647281, 'Đồng Tháp', '2002-02-08', 'user1@123', 'chibi1.jpg', 1, '2024-08-07 03:26:22', '2024-08-07 03:26:22'),
(18, 3, 'User2', 'Tôi là User2', 'user2@gmail.com', 123456789, 'Hà Nội', '2012-12-06', 'user2@123', 'chibi2.png', 1, '2024-08-07 10:56:38', '2024-08-07 10:56:38'),
(19, 3, 'User3', 'Tôi là User3', 'user3@gmail.com', 293781639, 'Vĩnh Long', '2024-08-07', 'user3@123', 'chibi3.png', 1, '2024-08-07 11:06:07', '2024-08-07 11:06:07'),
(20, 3, 'User4', 'Tôi là User4', 'user4@gmail.com', 383647281, 'TPHCM', '2024-08-07', 'user4@123', 'chibi4.png', 1, '2024-08-07 11:07:02', '2024-08-07 11:07:02'),
(21, 3, 'User5', 'Tôi là User5', 'user5@gmail.com', 372819282, 'Vĩnh Long', '2002-12-06', 'user5@123', 'test.png', 3, '2024-08-07 11:25:32', '2024-08-07 11:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id_user_type` int(10) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id_user_type`, `usertype`) VALUES
(1, 'admin'),
(2, 'nhân viên'),
(3, 'khách hàng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethoadon`),
  ADD KEY `fk_cthd_hd` (`id_hoadon`),
  ADD KEY `fk_cthd_p` (`id_phong`);

--
-- Indexes for table `chitietloaiphong`
--
ALTER TABLE `chitietloaiphong`
  ADD PRIMARY KEY (`id_chitietloaiphong`),
  ADD KEY `fk_ctlp_lp` (`id_loaiphong`);

--
-- Indexes for table `datphong`
--
ALTER TABLE `datphong`
  ADD PRIMARY KEY (`id_datphong`),
  ADD KEY `fk_dp_ttdp` (`id_ttdp`),
  ADD KEY `fk_dp_users` (`id_khachhang`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`),
  ADD KEY `fk_lh_user` (`id_user`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`id_loaiphong`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id_phanhoi`),
  ADD KEY `fk_ph_kh` (`id_khachhang`),
  ADD KEY `fk_ph_phong` (`id_phong`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`),
  ADD KEY `fk_p_ctlp` (`id_chitietloaiphong`),
  ADD KEY `fk_p_ttp` (`id_trangthai`);

--
-- Indexes for table `trangthaidatphong`
--
ALTER TABLE `trangthaidatphong`
  ADD PRIMARY KEY (`id_ttdp`);

--
-- Indexes for table `trangthaiphong`
--
ALTER TABLE `trangthaiphong`
  ADD PRIMARY KEY (`id_trangthaiphong`);

--
-- Indexes for table `trangthai_user`
--
ALTER TABLE `trangthai_user`
  ADD PRIMARY KEY (`id_trangthaiuser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_usertype` (`id_user_type`),
  ADD KEY `fk_user_trangthai` (`id_trangThai`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id_user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiethoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `chitietloaiphong`
--
ALTER TABLE `chitietloaiphong`
  MODIFY `id_chitietloaiphong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `datphong`
--
ALTER TABLE `datphong`
  MODIFY `id_datphong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `id_loaiphong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id_phanhoi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `trangthaidatphong`
--
ALTER TABLE `trangthaidatphong`
  MODIFY `id_ttdp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trangthaiphong`
--
ALTER TABLE `trangthaiphong`
  MODIFY `id_trangthaiphong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trangthai_user`
--
ALTER TABLE `trangthai_user`
  MODIFY `id_trangthaiuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id_user_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `fk_cthd_hd` FOREIGN KEY (`id_hoadon`) REFERENCES `datphong` (`id_datphong`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cthd_p` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietloaiphong`
--
ALTER TABLE `chitietloaiphong`
  ADD CONSTRAINT `fk_ctlp_lp` FOREIGN KEY (`id_loaiphong`) REFERENCES `loaiphong` (`id_loaiphong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datphong`
--
ALTER TABLE `datphong`
  ADD CONSTRAINT `fk_dp_ttdp` FOREIGN KEY (`id_ttdp`) REFERENCES `trangthaidatphong` (`id_ttdp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dp_users` FOREIGN KEY (`id_khachhang`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD CONSTRAINT `fk_lh_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `fk_ph_kh` FOREIGN KEY (`id_khachhang`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ph_phong` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `fk_p_ctlp` FOREIGN KEY (`id_chitietloaiphong`) REFERENCES `chitietloaiphong` (`id_chitietloaiphong`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_ttp` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthaiphong` (`id_trangthaiphong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_trangthai` FOREIGN KEY (`id_trangThai`) REFERENCES `trangthai_user` (`id_trangthaiuser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_usertype` FOREIGN KEY (`id_user_type`) REFERENCES `user_type` (`id_user_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
