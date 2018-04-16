-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 14 Décembre 2016 à 13:17
-- Version du serveur: 5.1.37
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `dangkydetai`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `loginname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `adm_macb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adm_donvi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `admin_user`
--

INSERT INTO `admin_user` (`loginname`, `password`, `role`, `adm_macb`, `name`, `adm_donvi`) VALUES
('admin', '123456', 3, 'GV001', 'Nguyễn Admin', 'DV01');

-- --------------------------------------------------------

--
-- Structure de la table `giangvien`
--

CREATE TABLE IF NOT EXISTS `giangvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `gv_macb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gv_donvi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gv_detai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `giangvien`
--

INSERT INTO `giangvien` (`id`, `loginname`, `password`, `role`, `gv_macb`, `name`, `gv_donvi`, `gv_detai`) VALUES
(3, 'namnh', 'namnhuet', 1, 'namnh', 'TS.Nguyễn Hà Nam', 'Trường ĐH Công nghệ', 'Phát triển ứng dụng trên nền Twitter'),
(4, 'hungpn', 'hungpnuet', 1, 'hungpn', 'TS.Phạm Ngọc Hùng', 'Trường ĐH Công nghệ', 'Tìm hiểu lập trình EPGA trên công cụ Quaztus'),
(5, 'khanhtv', 'khanhtvuet', 1, 'khanhtv', 'ThS.Tô Văn Khánh', 'Trường ĐH Công nghệ', 'Tìm hiểu các kỹ thuật cắt chương trình'),
(6, 'hieuvd', 'hieuvduet', 1, 'hieuvd', 'TS.Võ Đình Hiếu', 'Trường ĐH Công nghệ', 'Ứng dụng Spee Explore cho kiểm thử tự động phần mềm'),
(7, 'hailh', 'hailhuet', 1, 'hailh', 'ThS.Lê Hồng Hải', 'Trường ĐH Công nghệ', 'Xây dựng ứng dụng sử dụng ngôn ngữ Ocaml'),
(8, 'thanhnt', 'thanhntuet', 1, 'thanhnt', 'TS.Nguyễn Trí Thành', 'Trường ĐH Công nghệ', 'Trích chọn quan điểm trong văn bản'),
(9, 'admin', 'hoannuet', 1, 'hoann', 'TS.Nguyễn Ngọc Hóa', 'Trường ĐH Công nghệ', 'Ứng dụng nhận dạng mặt người trọng thực tại tăng cường'),
(10, 'hanhdp', 'hanhdpuet', 1, 'hanhdp', 'ThS.Dư Phương Hạnh', 'Trường ĐH Công nghệ', 'Tìm hiểu các phương pháp đánh chỉ mục trong cơ sở dữ liệu không gian'),
(11, 'trangnt', 'trangntuet', 1, 'trangnt', 'ThS.Nguyễn Thu Trang', 'Viện KH&CN Việt Nam', 'Phát triển ứng dụng song song với bộ xử lý đồ họa GPM'),
(12, 'chaunh', 'chaunhuet', 1, 'chaunh', 'TS.Nguyễn Hải Châu', 'Trường ĐH Công nghệ', 'Phát triển ứng dụng ERP trong quản lý y tế'),
(13, 'hainn', 'hainnuet', 1, 'hainn', 'ThS.Nguyễn Nam Hải', 'Viện KH&CN Việt Nam', 'Xây dựng ứng dụng cung cấp thông tin hỗ trợ sản phẩm');

-- --------------------------------------------------------

--
-- Structure de la table `sinhvien`
--

CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `sv_masv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_khoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_chuongtrinhdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gv_id` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `loginname`, `password`, `role`, `sv_masv`, `name`, `sv_email`, `sv_khoa`, `sv_chuongtrinhdt`, `gv_id`, `status`) VALUES
(5, '14030475', 'phucnh', 2, '14030475', 'Nguyễn Hồng Phúc', '14030475@vnu.edu.vn', 'QH-2014', 'CLC', 3, 1),
(4, '14050689', 'anvv', 2, '14050689', 'Nguyễn Văn An', '14050689@vnu.edu.vn', 'QH-2014', 'CLC', 0, 0),
(6, '14010321', 'toanvh', 2, '14010321', 'Võ Huy Toàn', '14010321@vnu.edu.vn', 'QH-2014', 'CLC', 0, 0),
(7, '14020378', 'huylv', 2, '14020378', 'Lê Văn Huy', '14020378@vnu.edu.vn', 'QH-2014', 'CLC', 0, 0),
(8, '14020321', 'anhlt', 2, '14020321', 'Lê Thị Ánh', '14020321@vnu.edu.vn', 'QH-2014', 'Chuẩn', 0, 0),
(9, '14030245', 'chinhnt', 2, '14030245', 'Nguyễn Thị Chinh', '14030245@vnu.edu.vn', 'QH-2014', 'Chuẩn', 0, 0),
(10, '14020589', 'namnh', 2, '14020589', 'Nguyễn Hồng Nam', '14020589@vnu.edu.vn', 'QH-2014', 'Chuẩn', 0, 0),
(11, '14020456', 'anhnv', 2, '14020456', 'Ngô Văn Anh', '14020456@vnu.edu.vn', 'QH-2014', 'Chuẩn', 0, 0),
(12, '14052134', 'bacdd', 2, '14052134', 'Đỗ Đường Bắc', '14052134@vnu.edu.vn', 'QH-2014', 'Chuẩn', 0, 0);
