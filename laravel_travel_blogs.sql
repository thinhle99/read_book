-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 13, 2021 lúc 05:09 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_travel_blogs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_post`
--

CREATE TABLE `category_post` (
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category_post`
--

INSERT INTO `category_post` (`id_category`, `title`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Kinh nghiệm phượt', 1, NULL, NULL),
(2, 'Dụng cụ phượt', 1, NULL, NULL),
(3, 'Cẩm nang phượt', 1, NULL, NULL),
(9, 'Ẩm thực', 1, NULL, NULL),
(10, 'Khách sạn', 1, NULL, NULL),
(11, 'Tin tức du lịch', 1, NULL, NULL),
(12, 'Danh lam trong ngoài nước', 1, NULL, NULL),
(13, 'Bụi', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_13_161638_category_post', 2),
(5, '2021_01_13_161908_post', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ngodinhhuan07@gmail.com', '$2y$10$ZX1lkGZn47A.Inm9vLVB9uSADZgdArhZwzcnM6ht3LjBkQy4u6ymy', '2021-04-11 10:46:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` bigint(20) UNSIGNED NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `image_post` varchar(100) NOT NULL,
  `content_post` longtext NOT NULL,
  `summary_post` text NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `status_post` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `title_post`, `image_post`, `content_post`, `summary_post`, `id_category`, `status_post`, `created_at`, `updated_at`) VALUES
(3, 'Khám phá Công Viên Chủ Đề Vinwonders Phượt Phú Quốc, chơi trò chơi miễn phí, tắm công viên nước', '1610695591_vinwonder-phu-quoc-13.jpg', '<p>Sẽ c&oacute; một v&agrave;i đ&aacute;nh gi&aacute; kh&aacute;ch quan để cho bạn c&oacute; một c&aacute;i nh&igrave;n tổng thế nhất về nơi n&agrave;y. Th&ecirc;m nữa c&oacute; một v&agrave;i địa điểm tham quan gần đ&oacute; m&igrave;nh c&oacute; để link trong b&agrave;i viết c&aacute;c bạn nhớ đọc th&ecirc;m nh&eacute;. N&agrave;o c&ugrave;ng điểm qua xem&nbsp;<strong>Vinwonders Ph&uacute; Quốc</strong>&nbsp;c&oacute; g&igrave; hấp dẫn</p>\r\n\r\n<h2>C&ocirc;ng vi&ecirc;n chủ đề lớn nhất Việt Nam, h&agrave;ng đầu Ch&acirc;u &Aacute;</h2>\r\n\r\n<p>Chuyến đi n&agrave;y m&igrave;nh đi chung với&nbsp;<strong>Vườn th&uacute; Safari</strong>, n&ecirc;n theo kinh nghiệm nếu bạn n&agrave;o muốn đi chung 2 địa điểm n&agrave;y th&igrave; n&ecirc;n gh&eacute; Safari trước ( buổi s&aacute;ng) rồi h&atilde;y qua&nbsp;<strong>Vinwonders</strong>&nbsp;(buổi chiều tiện đi c&ocirc;ng vi&ecirc;n nước lu&ocirc;n).</p>\r\n\r\n<p><img alt=\"cổng vào Vinwonders Phú Quốc\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/vinwonder-phu-quoc-1.jpg\" style=\"height:673px; width:1000px\" /></p>\r\n\r\n<p><strong>Vinwonders Ph&uacute; Quốc</strong>&nbsp;được đầu tư v&agrave; quản l&yacute; của tập đo&agrave;n&nbsp;<strong>VinGroup</strong>. L&agrave; c&ocirc;ng vi&ecirc;n chủ đ&ecirc;̀ lớn nh&acirc;́t Vi&ecirc;̣t Nam, quy m&ocirc; hàng đ&acirc;̀u Ch&acirc;u Á. Bạn sẽ c&oacute; những trải nghiệm th&uacute; vị tại đ&acirc;y như:</p>\r\n\r\n<ul>\r\n	<li>Chi&ecirc;m ngưỡng 12 n&ecirc;̀n văn minh nh&acirc;n loại từ c&ocirc;̉ chí kim!</li>\r\n	<li>KHÁM PHÁ 06 ph&acirc;n khu với hơn 100 hoạt đ&ocirc;̣ng giải trí si&ecirc;u đ&ocirc;̣c lạ</li>\r\n	<li>Giải nhiệt tại c&ocirc;ng vi&ecirc;n nước lớn nh&acirc;́t Đ&ocirc;ng Nam Á</li>\r\n	<li>CHINH PHỤC 20 trò chơi mạo hi&ecirc;̉m khủng nh&acirc;́t hành tinh .</li>\r\n</ul>\r\n\r\n<p><img alt=\"vinwonders\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/vinwonder-phu-quoc-2.jpg\" style=\"height:673px; width:1000px\" /></p>\r\n\r\n<p>d&atilde;y nh&agrave; ch&acirc;u &acirc;u trước cổng</p>\r\n\r\n<p>Quảng c&aacute;o sơ sơ vậy th&ocirc;i, do c&ograve;n kh&aacute; mới v&agrave; đang được x&acirc;y dựng th&ecirc;m v&agrave;i hạng mục n&ecirc;n c&ograve;n kh&aacute; &iacute;t c&acirc;y cối. Đi cũng kh&aacute; l&agrave; nắng, nhớ mang theo n&oacute;n hoặc d&ugrave; nha c&aacute;c bạn.</p>\r\n\r\n<h3>I/ C&aacute;ch Di Chuyển Đến VINWONDERS Ph&uacute; Quốc ?</h3>\r\n\r\n<p>Nhắc đến đ&acirc;y m&igrave;nh phải n&oacute;i r&otilde; cho bạn biết về vị tr&iacute; của n&oacute; để tiện bề sắp xếp lịch tr&igrave;nh. Vinwonders nằm ở Ph&iacute;a Bắc Đảo Ph&uacute; Quốc, cũng c&aacute;ch kha kh&aacute; xa trung t&acirc;m Dương Đ&ocirc;ng tầm khoảng 25km lựn. V&agrave; c&ocirc;ng vi&ecirc;n n&agrave;y cũng kh&aacute; l&agrave; rộng lớn c&oacute; thể bạn sẽ phải mất khoảng một buổi để kh&aacute;m ph&aacute; hết chỗ n&agrave;y</p>\r\n\r\n<p><img alt=\"vinwonders\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/vinwonder-phu-quoc-14.jpg\" style=\"height:673px; width:1000px\" /></p>\r\n\r\n<p>C&oacute; 3 c&aacute;ch di chuyển đến&nbsp;<strong>Vinwonders Ph&uacute; Quốc</strong>&nbsp;đ&oacute; l&agrave;: Đi xe BUS của Vin ( miễn ph&iacute; d&agrave;nh cho kh&aacute;ch tham quan đ&atilde; mua v&eacute;) , đi taxi hoặc thu&ecirc; một chiếc xe m&aacute;y. N&oacute;i đến chuyện kiếm phương tiện di chuyển l&agrave; xe m&aacute;y, m&igrave;nh sẽ giới thiệu cho bạn một chỗ m&agrave; m&igrave;nh hay thu&ecirc;, giao xe ngay tại s&acirc;n bay lu&ocirc;n : xem&nbsp;<a href=\"https://phuot3mien.com/dia-diem-cho-thue-xe-may-o-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>tại đ&acirc;y</strong></a></p>\r\n\r\n<p>C&ograve;n đường đi th&igrave; bạn cứ chạy thẳng 1 l&egrave;o đường DT45 l&agrave; đến, đường nhựa tha hồ m&agrave; v&iacute;t ga. Hoặc xem tr&ecirc;n maps m&igrave;nh để b&ecirc;n dưới nh&eacute;</p>\r\n\r\n<h3>II/ Bảng gi&aacute; v&eacute; Vinwonders Ph&uacute; Quốc, v&agrave; c&aacute;ch mua v&eacute; Online gi&aacute; rẻ</h3>\r\n\r\n<p>Đợt m&igrave;nh đi mua v&eacute; Online tr&ecirc;n KKday v&agrave; mua theo combo cả Safari lu&ocirc;n. Ưu điểm khi mua v&eacute; Vinwonders online</p>\r\n\r\n<ul>\r\n	<li>Tiện lợi nhanh ch&oacute;ng, x&aacute;c thực v&eacute; ngay sau khi thanh to&aacute;n, v&eacute; điện tử sẽ gửi về email cho bạn</li>\r\n	<li>Kh&ocirc;ng cần phải sếp h&agrave;ng mệt mỏi</li>\r\n	<li>Gi&aacute; Online lu&ocirc;n rẻ hơn so với mua trực tiếp ( cam đoan )</li>\r\n</ul>\r\n\r\n<p>&Agrave; lưu &yacute;: v&eacute; v&agrave;o cổng đ&atilde; bao gồm tr&ograve; chơi v&agrave; c&ocirc;ng vi&ecirc;n nước, v&agrave;o chơi thoải m&aacute;i khỏi sợ tốn tiền nha</p>', '<p>Trong chuyến&nbsp;<strong>du lịch bụi Ph&uacute; Quốc</strong>&nbsp;vừa rồi, m&igrave;nh c&oacute; gh&eacute; qua&nbsp;<strong>Vinwonders</strong>&nbsp;v&agrave; Safari. Nay rảnh rảnh note lại v&agrave;i d&ograve;ng cho c&aacute;c bạn tham khảo về một trong những địa điểm n&ecirc;n gh&eacute; tại Ph&uacute; Quốc. Được xem l&agrave; c&ocirc;ng vi&ecirc;n chủ đề đầu tư lớn nhất Việt Nam, với nhiều hạng mục tr&ograve; chơi giải tr&iacute; hấp dẫn.</p>', 12, 1, NULL, NULL),
(6, 'Sang Hòn Thơm Phú Quốc phía Nam Đảo, một thiên đường nghỉ dưỡng đúng nghĩa', '1610697051_bai 24.jpg', '<p>H&ograve;n Thơm thuộc Quần đảo An Thới nằm chung với&nbsp;12 h&ograve;n đảo nhỏ to kh&aacute;c nhau ở ph&iacute;a Nam Ph&uacute; Quốc. L&agrave; những h&ograve;n đảo c&ograve;n giữ nguy&ecirc;n n&eacute;t hoang sơ với b&atilde;i c&aacute;t trắng tại B&atilde;i Tr&agrave;o. Rất l&yacute; &hellip;y</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-350px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>H&ograve;n Thơm thuộc Quần đảo An Thới nằm chung với&nbsp;12 h&ograve;n đảo nhỏ to kh&aacute;c nhau ở ph&iacute;a Nam Ph&uacute; Quốc. L&agrave; những h&ograve;n đảo c&ograve;n giữ nguy&ecirc;n n&eacute;t hoang sơ với b&atilde;i c&aacute;t trắng tại B&atilde;i Tr&agrave;o. Rất l&yacute; &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-230px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 3, 1, NULL, NULL),
(7, 'Suối Đá Bàn Phú Quốc, địa điểm tắm sưới và party cuối tuần khá lý tưởng', '1610697003_bai23.jpg', '<p>Du lịch Ph&uacute; Quốc&nbsp;t&ocirc;i đ&atilde; c&oacute; nhiều trải nghiệm kh&aacute; th&uacute; vị, từ Bắc Đảo đến Nam Đảo, b&agrave;i n&agrave;y m&igrave;nh xin chia sẻ một địa điểm theo m&igrave;nh cũng kh&aacute; th&uacute; vị ch&oacute; bạn kh&aacute;m ph&aacute;. Nơi c&oacute; những &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-278px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Du lịch Ph&uacute; Quốc&nbsp;t&ocirc;i đ&atilde; c&oacute; nhiều trải nghiệm kh&aacute; th&uacute; vị, từ Bắc Đảo đến Nam Đảo, b&agrave;i n&agrave;y m&igrave;nh xin chia sẻ một địa điểm theo m&igrave;nh cũng kh&aacute; th&uacute; vị ch&oacute; bạn kh&aacute;m ph&aacute;. Nơi c&oacute; những &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-258px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 3, 1, NULL, NULL),
(8, 'Gợi ý cho bạn quán đồ Thái ở Phú Quốc khá ngon mà mình đã từng ghé', '1610696973_bai21.jpg', '<p>Vi vu ở Ph&uacute; Quốc cũng gọi l&agrave; m&ograve;n ch&acirc;n, hải sản cũng đ&atilde; nếm đủ loại đủ vị, một ng&agrave;y đẹp trời nổi hứng th&egrave;m đồ ăn th&aacute;i. L&ecirc;n google search m&agrave; t&igrave;m m&atilde;i kh&ocirc;ng ra, n&oacute; cứ chỉ &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-561px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Vi vu ở Ph&uacute; Quốc cũng gọi l&agrave; m&ograve;n ch&acirc;n, hải sản cũng đ&atilde; nếm đủ loại đủ vị, một ng&agrave;y đẹp trời nổi hứng th&egrave;m đồ ăn th&aacute;i. L&ecirc;n google search m&agrave; t&igrave;m m&atilde;i kh&ocirc;ng ra, n&oacute; cứ chỉ &hellip;</p>', 1, 1, NULL, NULL),
(9, 'Khám phá Công Viên Chủ Đề Vinwonders Phú Quốc, chơi trò chơi miễn phí, tắm công viên nước', '1610696928_bai20.jpg', '<p>Trong chuyến du lịch bụi Ph&uacute; Quốc vừa rồi, m&igrave;nh c&oacute; gh&eacute; qua Vinwonders v&agrave; Safari. Nay rảnh rảnh note lại v&agrave;i d&ograve;ng cho c&aacute;c bạn tham khảo về một trong những địa điểm n&ecirc;n gh&eacute; tại Ph&uacute; Quốc. Được &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-295px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Trong chuyến du lịch bụi Ph&uacute; Quốc vừa rồi, m&igrave;nh c&oacute; gh&eacute; qua Vinwonders v&agrave; Safari. Nay rảnh rảnh note lại v&agrave;i d&ograve;ng cho c&aacute;c bạn tham khảo về một trong những địa điểm n&ecirc;n gh&eacute; tại Ph&uacute; Quốc. Được &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-180px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1, 1, NULL, NULL),
(10, 'Gợi ý quán bánh khọt 75 Vũng Tàu, có hải sản tươi sống giá cả hợp lý', '1610696901_bai19.jpg', '<p>Đến với vũng t&agrave;u dịp cuối tuần, ngo&agrave;i việc tận hưởng kh&ocirc;ng kh&iacute; biển m&agrave; bạn c&ograve;n được thưởng thức nhiều m&oacute;n ngon tại tp biển xinh đẹp n&agrave;y như: Lẩu c&aacute; đuối, hải sản tươi sống, v&agrave; đặc biệt &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-288px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Đến với vũng t&agrave;u dịp cuối tuần, ngo&agrave;i việc tận hưởng kh&ocirc;ng kh&iacute; biển m&agrave; bạn c&ograve;n được thưởng thức nhiều m&oacute;n ngon tại tp biển xinh đẹp n&agrave;y như: Lẩu c&aacute; đuối, hải sản tươi sống, v&agrave; đặc biệt &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-338px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1, 1, NULL, NULL),
(11, 'Tham quan Nhà Tù Phú Quốc, nghe kể về cuộc đào thoát trốn ngục li kỳ', '1610696879_bai18.jpg', '<p>Chuyến tham quan Nh&agrave; t&ugrave; Ph&uacute; Quốc ( hay Nh&agrave; Lao C&acirc;y Dừa ) vừa rồi của m&igrave;nh kh&aacute; l&agrave; th&uacute; vị khi được nghe thuyết minh nhiều điều về nơi đ&acirc;y. Nơi giam giữ t&ugrave; nh&acirc;n ch&iacute;nh trị v&agrave; &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-317px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Chuyến tham quan Nh&agrave; t&ugrave; Ph&uacute; Quốc ( hay Nh&agrave; Lao C&acirc;y Dừa ) vừa rồi của m&igrave;nh kh&aacute; l&agrave; th&uacute; vị khi được nghe thuyết minh nhiều điều về nơi đ&acirc;y. Nơi giam giữ t&ugrave; nh&acirc;n ch&iacute;nh trị v&agrave; &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-245px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 2, 1, NULL, NULL),
(12, 'Thăm Chùa Hộ Quốc ở Phú Quốc thế tựa sơn hướng thủy, view ngắm đường chân trời', '1610696792_bai17.jpg', '<p>Ch&ugrave;a Hộ Quốc (hay thiền viện Tr&uacute;c L&acirc;m Hộ Quốc) c&oacute; vị tr&iacute; rất đặc biệt lưng tựa n&uacute;i, mặt hướng biển. Được x&acirc;y dựng theo lối kiến tr&uacute;c thời nh&agrave; L&yacute; v&agrave; nh&agrave; Trần, bao gồm c&aacute;c hạng mục: &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-313px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Ch&ugrave;a Hộ Quốc (hay thiền viện Tr&uacute;c L&acirc;m Hộ Quốc) c&oacute; vị tr&iacute; rất đặc biệt lưng tựa n&uacute;i, mặt hướng biển. Được x&acirc;y dựng theo lối kiến tr&uacute;c thời nh&agrave; L&yacute; v&agrave; nh&agrave; Trần, bao gồm c&aacute;c hạng mục: &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-313px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 2, 1, NULL, NULL),
(13, 'Dinh Cậu Phú Quốc, địa chỉ tham quan tâm linh ngay Dương Đông view biển', '1610696768_bai15.jpg', '<p>Dinh Cậu một địa điểm tham quan t&acirc;m linh bạn kh&ocirc;ng thể bỏ lỡ khi đến với Ph&uacute; Quốc. Bạn chỏ cần d&agrave;nh tầm khoảng 30 ph&uacute;t đến 1 tiếng để tham quan hết nơi đ&acirc;y. Kết hợp đi chợ &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-310px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Dinh Cậu một địa điểm tham quan t&acirc;m linh bạn kh&ocirc;ng thể bỏ lỡ khi đến với Ph&uacute; Quốc. Bạn chỏ cần d&agrave;nh tầm khoảng 30 ph&uacute;t đến 1 tiếng để tham quan hết nơi đ&acirc;y. Kết hợp đi chợ &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-324px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 12, 1, NULL, NULL),
(14, 'Mình mới đi Bãi Sao Phú Quốc xong nói chung đẹp đó… Nên ghé !!!', '1610696720_bai13.jpg', '<p>Đến với Sunset Sanato Beach Club b&ecirc;n B&atilde;i Trường, nơi bạn c&oacute; thể ngắm ho&agrave;ng h&ocirc;n ngay tại biển, Chill nhẹ nh&agrave;ng tại qu&aacute;n bar ngay bờ biển HOT nhất Ph&uacute; Quốc. Kh&ocirc;ng những thế, Sunset Sanato Beach Club được &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-431px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Đến với Sunset Sanato Beach Club b&ecirc;n B&atilde;i Trường, nơi bạn c&oacute; thể ngắm ho&agrave;ng h&ocirc;n ngay tại biển, Chill nhẹ nh&agrave;ng tại qu&aacute;n bar ngay bờ biển HOT nhất Ph&uacute; Quốc. Kh&ocirc;ng những thế, Sunset Sanato Beach Club được &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-320px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 2, 1, NULL, NULL),
(15, 'Mình mới đi Bãi Sao Phú Quốc xong nói chung đẹp đó… Nên ghé !!!', '1610696690_bai12.jpg', '<p>Lạc bước sang B&atilde;i Sao Ph&uacute; Quốc lượn lờ dạo b&ecirc;n bờ biển, v&agrave; chia sẻ lại những g&igrave; m&igrave;nh thấy v&agrave; biết. N&oacute; l&agrave; một khu b&atilde;i tắm nằm ở ph&iacute;a Đ&ocirc;ng Nam thuộc An Thới của huyện đảo &hellip;</p>', '<p>Lạc bước sang B&atilde;i Sao Ph&uacute; Quốc lượn lờ dạo b&ecirc;n bờ biển, v&agrave; chia sẻ lại những g&igrave; m&igrave;nh thấy v&agrave; biết. N&oacute; l&agrave; một khu b&atilde;i tắm nằm ở ph&iacute;a Đ&ocirc;ng Nam thuộc An Thới của huyện đảo &hellip;</p>', 9, 1, NULL, NULL),
(16, 'Trải nghiệm Công Viên Nước Hòn Thơm | Aquatopia Water Park, xịn xò nhất Đông Nam Á', '1610696638_bai 11.jpg', '<p>C&ocirc;ng vi&ecirc;n nước H&ograve;n Thơm Aquatopia được đầu tư bởi tập đo&agrave;n Sun Group bắt đầu hoạt động v&agrave;o 28/12/2019 tại H&ograve;n Thơm l&agrave; c&ocirc;ng vi&ecirc;n nước theo chủ đề hiện đại nhất đ&ocirc;ng nam &aacute;. C&ugrave;ng với việc đi &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-299px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>C&ocirc;ng vi&ecirc;n nước H&ograve;n Thơm Aquatopia được đầu tư bởi tập đo&agrave;n Sun Group bắt đầu hoạt động v&agrave;o 28/12/2019 tại H&ograve;n Thơm l&agrave; c&ocirc;ng vi&ecirc;n nước theo chủ đề hiện đại nhất đ&ocirc;ng nam &aacute;. C&ugrave;ng với việc đi &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-266px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 9, 1, NULL, NULL),
(17, 'Chia sẻ kinh nghiệm đi Vinpearl Safari Phú Quốc trong ngày chi tiết A-Z, đi ghẹo giò', '1610696504_bai9.jpg', '<p>Safari Ph&uacute; Quốc, vườn th&uacute; hoang d&atilde; v&agrave; b&aacute;n hoang d&atilde; lớn nhất Việt Nam. Một trong những địa điểm m&agrave; bạn n&ecirc;n gh&eacute; khi đến với Ph&uacute; Quốc, bởi nơi đ&acirc;y c&oacute; rất nhiều động vật hoang d&atilde; v&agrave; &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-268px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Safari Ph&uacute; Quốc, vườn th&uacute; hoang d&atilde; v&agrave; b&aacute;n hoang d&atilde; lớn nhất Việt Nam. Một trong những địa điểm m&agrave; bạn n&ecirc;n gh&eacute; khi đến với Ph&uacute; Quốc, bởi nơi đ&acirc;y c&oacute; rất nhiều động vật hoang d&atilde; v&agrave; &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-369px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 9, 1, NULL, NULL),
(18, 'Tham quan Nhà Thùng Nước Nắm Phú Quốc, nghề làm nước mắm truyền thống', '1610696447_bai10.jpg', '<p>Nh&agrave; th&ugrave;ng nước mắm Ph&uacute; Quốc l&agrave; một trong những n&eacute;t đặc trưng, một ng&agrave;nh nghề truyền thống tại Đảo Ngọc với bao đời l&agrave;m nghề. V&agrave; hiện nay được ph&aacute;t triển, cải tiến theo hơi hướng cho kh&aacute;ch tham &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-314px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Nh&agrave; th&ugrave;ng nước mắm Ph&uacute; Quốc l&agrave; một trong những n&eacute;t đặc trưng, một ng&agrave;nh nghề truyền thống tại Đảo Ngọc với bao đời l&agrave;m nghề. V&agrave; hiện nay được ph&aacute;t triển, cải tiến theo hơi hướng cho kh&aacute;ch tham &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-248px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 10, 1, NULL, NULL),
(19, 'Nhà bè Cây Sao Phú Quốc, nghỉ dưỡng và ăn hải sản với phiên bản Maldives Việt Nam', '1610696423_bai8.jpg', '<p>Safari Ph&uacute; Quốc, vườn th&uacute; hoang d&atilde; v&agrave; b&aacute;n hoang d&atilde; lớn nhất Việt Nam. Một trong những địa điểm m&agrave; bạn n&ecirc;n gh&eacute; khi đến với Ph&uacute; Quốc, bởi nơi đ&acirc;y c&oacute; rất nhiều động vật hoang d&atilde; v&agrave; &hellip;y</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-166px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Safari Ph&uacute; Quốc, vườn th&uacute; hoang d&atilde; v&agrave; b&aacute;n hoang d&atilde; lớn nhất Việt Nam. Một trong những địa điểm m&agrave; bạn n&ecirc;n gh&eacute; khi đến với Ph&uacute; Quốc, bởi nơi đ&acirc;y c&oacute; rất nhiều động vật hoang d&atilde; v&agrave; &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-245px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 10, 1, NULL, NULL),
(20, 'Du Lịch Phú Quốc tự túc !! Mình xin chia sẻ kinh nghiệm, lịch trình, chỗ tham quan A-Z', '1610696404_bai7.jpg', '<p>Sau bao lần lăn lộn ăn nằm tại Đảo Ph&uacute; Quốc, m&igrave;nh xin chia sẻ kinh nghiệm du lịch Ph&uacute; Quốc tự t&uacute;c của m&igrave;nh bằng những trải nghiệm thực tế nhất. Từ luồn l&aacute;ch Ph&iacute;a Nam Đảo đến tận &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-344px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Sau bao lần lăn lộn ăn nằm tại Đảo Ph&uacute; Quốc, m&igrave;nh xin chia sẻ kinh nghiệm du lịch Ph&uacute; Quốc tự t&uacute;c của m&igrave;nh bằng những trải nghiệm thực tế nhất. Từ luồn l&aacute;ch Ph&iacute;a Nam Đảo đến tận &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-330px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 10, 1, NULL, NULL),
(21, 'Thăm Hội Quán Dương Thương phía sau có sân bóng rổ chụp hình siêu so deep', '1610696356_bai5.jpg', '<p>C&ugrave;ng m&igrave;nh tham quan v&agrave; t&igrave;m hiểu về Hội qu&aacute;n Dương Thương ở Hội An, n&oacute; l&agrave; một trong những hội qu&aacute;n l&acirc;u đời nhất Hội An, được x&acirc;y dựng từ năm 1741 với sự đ&oacute;ng g&oacute;p tiền của của &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-260px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>C&ugrave;ng m&igrave;nh tham quan v&agrave; t&igrave;m hiểu về Hội qu&aacute;n Dương Thương ở Hội An, n&oacute; l&agrave; một trong những hội qu&aacute;n l&acirc;u đời nhất Hội An, được x&acirc;y dựng từ năm 1741 với sự đ&oacute;ng g&oacute;p tiền của của &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-303px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 11, 1, NULL, NULL),
(22, 'Review chuyến Đi Bộ Dưới Biển lặn ngắm san hô ở Công Viên Namaste Phú Quốc', '1610696318_bai6.jpg', '<p>Trời quơ !! M&igrave;nh vừa c&oacute; chuyến đi kh&aacute;m ph&aacute; lặn ngắm san h&ocirc; v&agrave; trải nghiệm Sea Walker tại c&ocirc;ng vi&ecirc;n san h&ocirc; Namaste Ph&uacute; Quốc ( n&oacute;i n&ocirc;m na cho dễ hiểu l&agrave; đi bộ dưới biển lặn &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-486px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Trời quơ !! M&igrave;nh vừa c&oacute; chuyến đi kh&aacute;m ph&aacute; lặn ngắm san h&ocirc; v&agrave; trải nghiệm Sea Walker tại c&ocirc;ng vi&ecirc;n san h&ocirc; Namaste Ph&uacute; Quốc ( n&oacute;i n&ocirc;m na cho dễ hiểu l&agrave; đi bộ dưới biển lặn &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-430px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 11, 1, NULL, NULL),
(23, 'Thăm Trại Chó Phú Quốc, bất ngờ về tập quán của nó và xem đua chó', '1610696246_bai4.jpg', '<p><a href=\"https://phuot3mien.com/trai-cho-phu-quoc.html\" rel=\"bookmark\">Thăm Trại Ch&oacute; Ph&uacute; Quốc, bất ngờ về tập qu&aacute;n của n&oacute; v&agrave; xem đua ch&oacute;</a></p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-414px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Trại ch&oacute; Thanh Nga &ndash; Trung T&acirc;m Bảo Tồn Ch&oacute; Ph&uacute; Quốc, một địa điểm m&agrave; m&igrave;nh nghĩ đ&aacute;ng để bạn gh&eacute; qua tham quan một lần khi đến với Ph&uacute; Quốc. Thật sự lu&ocirc;n, đ&acirc;y l&agrave; một nơi kh&aacute; &hellip;</p>', 11, 1, NULL, NULL),
(24, 'Suối Đá Bàn Phú Quốc, địa điểm tắm sưới và party cuối tuần khá lý tưởng', '1610696211_bai2.jpg', '<p>Du lịch Ph&uacute; Quốc&nbsp;t&ocirc;i đ&atilde; c&oacute; nhiều trải nghiệm kh&aacute; th&uacute; vị, từ Bắc Đảo đến Nam Đảo, b&agrave;i n&agrave;y m&igrave;nh xin chia sẻ một địa điểm theo m&igrave;nh cũng kh&aacute; th&uacute; vị ch&oacute; bạn kh&aacute;m ph&aacute;. Nơi c&oacute; những &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-180px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '<p>Du lịch Ph&uacute; Quốc&nbsp;t&ocirc;i đ&atilde; c&oacute; nhiều trải nghiệm kh&aacute; th&uacute; vị, từ Bắc Đảo đến Nam Đảo, b&agrave;i n&agrave;y m&igrave;nh xin chia sẻ một địa điểm theo m&igrave;nh cũng kh&aacute; th&uacute; vị ch&oacute; bạn kh&aacute;m ph&aacute;. Nơi c&oacute; những &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-114px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 12, 1, NULL, NULL),
(25, 'Ghé Ocsen Beach Bar & Club dịp Noel, làm ly Cocktail, nghe nhạc và hút bóng', '1610696125_bai1.jpg', '<h1>Gh&eacute; Ocsen Beach Bar &amp; Club dịp Noel, l&agrave;m ly Cocktail, nghe nhạc v&agrave; h&uacute;t b&oacute;ng</h1>\r\n\r\n<p>Dựt c&aacute;i T&iacute;t, c&acirc;u c&aacute;i view vậy th&ocirc;i, chứ chỉ l&agrave;m một ly Cocktail nghe nhạc Chill Chill dịp Noel ở&nbsp;<strong>Ocsen Beach Bar &amp; Club</strong>, chứ kh&ocirc;ng c&oacute; h&uacute;t b&oacute;ng. M&agrave; ra đ&oacute; thấy hầu như ai cũng h&uacute;t, m&igrave;nh kh&ocirc;ng nghiện c&aacute;i loại đ&oacute; chỉ l&agrave; muốn trải nghiệm kh&ocirc;ng k&yacute; Noel. Một kỷ niệm kh&aacute; vui trong chuyến&nbsp;<a href=\"https://phuot3mien.com/du-lich-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>du lịch Ph&uacute; Quốc</strong>&nbsp;</a>tự t&uacute;c của m&igrave;nh.</p>\r\n\r\n<p>N&agrave;o l&agrave; xem m&uacute;a lửa, xem bọn T&acirc;y n&oacute; quẩy banh n&oacute;c, nghe DJ chơi nhạc, rồi đến vụ rớt ch&igrave;a kh&oacute;a xe, Hehe. N&oacute;i chung l&agrave;&nbsp;<strong>Ocsen Beach Bar &amp; Club</strong>&nbsp;kh&aacute; ph&ugrave; hợp d&agrave;nh cho c&aacute;c bạn n&agrave;o th&iacute;ch s&ocirc;i động, địa điểm ngắm ho&agrave;ng h&ocirc;n v&agrave; quẩy kh&aacute; vui tại&nbsp;<strong>B&atilde;i Trường Ph&uacute; Quốc</strong>.</p>\r\n\r\n<p><img alt=\"ocsen beach bar &amp; club\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/ocsen-beach-bar-club-6.jpg\" style=\"height:808px; width:1200px\" /></p>\r\n\r\n<p>Xem diễn m&uacute;a lửa ngay biển</p>\r\n\r\n<p>Nội Dung Ch&iacute;nh</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://phuot3mien.com/ocsen-beach-bar-club.html#ocsen-beach-bar-club-co-dong-khong\">Ocsen Beach Bar &amp; Club c&oacute; đ&ocirc;ng kh&ocirc;ng ?</a></li>\r\n	<li><a href=\"https://phuot3mien.com/ocsen-beach-bar-club.html#gia-ca-cac-thuc-uong\">Gi&aacute; cả c&aacute;c thức uống</a></li>\r\n	<li><a href=\"https://phuot3mien.com/ocsen-beach-bar-club.html#nghe-nhac-dj-va-xem-bieu-dien-mua-lua\">Nghe nhạc DJ v&agrave; xem biểu diễn m&uacute;a lửa</a></li>\r\n	<li><a href=\"https://phuot3mien.com/ocsen-beach-bar-club.html#danh-gia-cam-quan-ve-ocsen-beach-bar-club\">Đ&aacute;nh Gi&aacute; cảm quan về Ocsen Beach Bar &amp; Club</a></li>\r\n</ul>\r\n\r\n<h2><strong>Ocsen Beach Bar &amp; Club c&oacute; đ&ocirc;ng kh&ocirc;ng ?</strong></h2>\r\n\r\n<p>T&ocirc;i thề n&oacute; đ&ocirc;ng d&atilde; man rợ, c&oacute; t&igrave;m hiểu sơ tr&ecirc;n mạng th&igrave; đến kh&ocirc;ng c&oacute; tốn v&eacute; nhưng l&uacute;c đến đ&ocirc;ng qu&aacute; thu tiền v&eacute; v&agrave;o cửa 200k/2 người. Kh&aacute;ch ra ra v&agrave;o v&agrave;o tấp nập, c&oacute; một đoạn đi đ&ocirc;ng thấy đứng đợi hồi l&acirc;u nản qu&aacute; về lu&ocirc;n.</p>\r\n\r\n<p>Chủ yếu đến đ&acirc;y 90% l&agrave; kh&aacute;ch T&acirc;y, v&agrave;o c&aacute;c dịp lễ th&igrave; bọn T&acirc;y n&oacute; chịu chơi kinh. Bikini t&egrave; le, uống bia v&agrave; nhẩy ngay tại quầy, nhạc sập s&igrave;nh c&aacute;c kiểu, tạo n&ecirc;n một kh&ocirc;ng kh&oacute; Noel cũng kh&aacute; l&agrave; x&ocirc;m. May Việt Nam m&igrave;nh kiểm so&aacute;t dịch tương đối tốt, n&ecirc;n c&oacute; chỗ cho bọn n&oacute; quẩy.</p>\r\n\r\n<p><strong>BẠN KH&Ocirc;NG N&Ecirc;N BỎ LỠ !!!!</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://phuot3mien.com/du-lich-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Du lịch bụi Ph&uacute; Quốc, cực chi tiết ch&iacute;nh m&igrave;nh trải nghiệm</strong></a></li>\r\n</ul>\r\n\r\n<p>Bước qua quầy l&agrave; tới b&atilde;i biển, thề kh&aacute;ch ngồi k&iacute;n m&iacute;t. M&agrave; đợt n&agrave;y l&agrave; l&uacute;c thủy triều l&ecirc;n, n&ecirc;n cũng bị mất nhiều diện t&iacute;ch để kh&aacute;ch ngồi th&agrave;nh ra n&oacute; thiếu chỗ.</p>\r\n\r\n<p>Do di trễ qu&aacute; n&ecirc;n cũng kh&ocirc;ng c&oacute; ngắm được ho&agrave;ng h&ocirc;n n&ecirc;n hơi tiếc, để dịp sau quay lại trải nghiệm tiếp. Buổi chiều th&igrave; chụp h&igrave;nh mới đẹp chứ buổi tối kh&ocirc;ng c&oacute; đền n&ecirc;n chẳng chụp được g&igrave;.</p>\r\n\r\n<p><img alt=\"ocsen beach bar &amp; club\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/ocsen-beach-bar-club-1.jpg\" style=\"height:808px; width:1200px\" /></p>\r\n\r\n<p><img alt=\"ocsen beach bar &amp; club\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/ocsen-beach-bar-club.jpg\" style=\"height:808px; width:1200px\" /></p>\r\n\r\n<p><img alt=\"ocsen beach bar &amp; club\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/ocsen-beach-bar-club-5.jpg\" style=\"height:808px; width:1200px\" /></p>\r\n\r\n<p>Mỗi tội l&agrave; c&oacute; muỗi, n&oacute; ch&iacute;ch xưng mập m&igrave;nh lu&ocirc;n, ngồi g&atilde;i mệt th&iacute; b&agrave;</p>\r\n\r\n<p>Địa chỉ: Hẻm 118 hoặc Hẻm 124 Trần Hưng Đạo, Dương Đ&ocirc;ng, Ph&uacute; Quốc (đối diện bảo t&agrave;ng Cội Nguồn) &ndash; Gần trung t&acirc;m Dương Đ&ocirc;ng</p>\r\n\r\n<p>Xem th&ecirc;m một v&agrave;i địa điểm gần Ocsen Beach Bar &amp; Club cho bạn tham khảo</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://phuot3mien.com/bun-quay-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Ăn B&uacute;n Quậy Kiến X&acirc;y ở Dương Đ&ocirc;ng</strong></a></li>\r\n	<li><a href=\"https://phuot3mien.com/dinh-cau-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Dinh Cậu Ph&uacute; Quốc, chụp h&igrave;nh sống ảo kh&aacute; ok</strong></a></li>\r\n	<li><a href=\"https://phuot3mien.com/cho-dem-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Dạo chợ đ&ecirc;m Ph&uacute; Quốc, mua qu&agrave;, ăn hải sản</strong></a></li>\r\n	<li><a href=\"https://phuot3mien.com/trai-cho-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Thăm trại ch&oacute; Thanh Nga Ph&uacute; Quốc, gần Dương Đ&ocirc;ng</strong></a></li>\r\n</ul>\r\n\r\n<h2>Gi&aacute; cả c&aacute;c thức uống</h2>\r\n\r\n<p>Gi&aacute; n&oacute;i chung l&agrave; kh&ocirc;ng qu&aacute; mắc nha c&aacute;c tềnh y&ecirc;u, do m&igrave;nh ăn tối rồi n&ecirc;n kh&ocirc;ng c&oacute; gọi đồ ăn. Đến những chỗ ăn chơi như n&agrave;y m&agrave; ngay dịp lễ nữa th&igrave; chắc cũng ok, ko đến nỗi.</p>\r\n\r\n<p>M&igrave;nh thấy b&agrave;n n&agrave;o cũng gọi b&igrave;nh shisa để h&uacute;t, mỗi người một quả b&oacute;ng để ph&ecirc; pha. H&egrave;n chi mấy bạn th&iacute;ch quẩy đều m&ograve; ra đ&acirc;y để bung lụa.</p>\r\n\r\n<p><img alt=\"ocsen beach bar &amp; club\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/ocsen-beach-bar-club-2.jpg\" style=\"height:808px; width:1200px\" /></p>\r\n\r\n<p>Mấy bạn Batender pha chế cũng chuy&ecirc;n nghiệp, vừa đứng order vừa xem mấy bạn đ&oacute; biểu diễn</p>\r\n\r\n<ul>\r\n	<li><strong>Cocktail: 140k</strong></li>\r\n	<li><strong>StrongBow : 60k</strong></li>\r\n	<li><strong>B&oacute;ng với Shisa: kh&ocirc;ng biết gi&aacute;</strong></li>\r\n</ul>\r\n\r\n<p>Giờ mở cửa: 4h chiều đến 1h s&aacute;ng</p>\r\n\r\n<p><strong>Đọc th&ecirc;m đi c&aacute;c bạn ơi:</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://phuot3mien.com/suoi-da-ban-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Suối Đ&aacute; B&agrave;n, chụp h&igrave;nh sống ảo ở c&acirc;y cầu gỗ</strong></a></li>\r\n	<li><a href=\"https://phuot3mien.com/di-bo-duoi-bien-o-cong-vien-san-ho-namaste-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Đi bộ dưới biển ở Namaste !!! HOT HOT</strong></a></li>\r\n	<li><a href=\"https://phuot3mien.com/chua-ho-quoc-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Ch&ugrave;a Hộ Quốc Ph&uacute; Quốc</strong></a></li>\r\n	<li><a href=\"https://phuot3mien.com/vinpearl-safari-phu-quoc.html\" rel=\"noopener\" target=\"_blank\"><strong>Đi Safari Ph&uacute; Quốc, v&agrave;o ngắm th&uacute;, xem chim diễn xiếc</strong></a></li>\r\n</ul>\r\n\r\n<h2>Nghe nhạc DJ v&agrave; xem biểu diễn m&uacute;a lửa</h2>\r\n\r\n<p>L&uacute;c m&igrave;nh đi tầm 9h tối, vừa v&agrave;o chừng 20 30p l&agrave; được xem mấy tiết mục biểu diễn Xiếc m&uacute;a lửa cũng vui vui. Tạo n&ecirc;n kh&ocirc;ng kh&iacute; s&ocirc;i động ở ngay tại&nbsp;<strong>Ocsen Beach Bar &amp; Club</strong>, n&agrave;o l&agrave; tiết mục tập thể m&uacute;a bao đều, rồi đến tết mục m&uacute;a đơn, m&igrave;nh c&oacute; quay lại c&aacute;c bạn c&oacute; thể xem thử</p>\r\n\r\n<p>Tiết mục m&igrave;nh thấy đặc sắc nhất chắc l&agrave; quay v&ograve;ng lửa, mấy bạn m&uacute;a đi ra ph&iacute;a s&aacute;t biển. Mồi lửa v&agrave;o dụng cụ m&uacute;a v&agrave; quay tr&ograve;n, n&oacute; giống như kiểu que di&ecirc;m ph&aacute;o b&ocirc;ng, quay c&aacute;i n&oacute; bắn ra đẹp thấy m&ecirc;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"348\" src=\"https://www.youtube.com/embed/PwU7lR4f1MA?feature=oembed\" title=\"Múa lửa tại Ocsen Beach Bar\" width=\"618\"></iframe></p>\r\n\r\n<p>Một số hoạt động vui chơi ở&nbsp;<strong>Ocsen Beach Bar &amp; Club</strong>&nbsp;cho bạn tham khảo</p>\r\n\r\n<ul>\r\n	<li>Show m&uacute;a lửa h&agrave;ng tối l&uacute;c 21h30</li>\r\n	<li>Đốt lửa trại l&uacute;c 22h3015</li>\r\n	<li>Combo b&oacute;ng, rượu mạnh, shisha v&agrave; bia</li>\r\n	<li>Đồ ăn &Acirc;u v&agrave; &Aacute; v&agrave; đồ nhậu BBQ phục vụ đến 23h00</li>\r\n</ul>\r\n\r\n<p>Th&ecirc;m nữa c&oacute; 3 khu vực cho bạn ngồi:</p>\r\n\r\n<ul>\r\n	<li>Ngồi tr&ecirc;n ghế m&uacute;t lười ngay biển</li>\r\n	<li>Khu vực quầy ba, c&oacute; b&agrave;n bida</li>\r\n	<li>Khu vực g&aacute;c lửng, b&agrave;n gỗ ngồi tr&ecirc;n cao view rộng</li>\r\n</ul>\r\n\r\n<p><img alt=\"ocsen beach bar &amp; club\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/ocsen-beach-bar-club-7.jpg\" style=\"height:808px; width:1200px\" /></p>\r\n\r\n<h2>Đ&aacute;nh Gi&aacute; cảm quan về Ocsen Beach Bar &amp; Club</h2>\r\n\r\n<p>Kh&ocirc;ng gian c&oacute; nhiều view sống ảo hơn (so với c&aacute;c qu&aacute;n tương tự m&igrave;nh từng đi), nhạc hay (1 điểm cộng kh&aacute; lớn), v&agrave; tối cuối tuần c&ograve;n c&oacute; đốt lửa.</p>\r\n\r\n<p>Tổng quang phong c&aacute;ch 50% t&acirc;y 50% việt . View đẹp ho&agrave;ng h&ocirc;n xuất sắc lu&ocirc;n khỏi b&agrave;n c&atilde;i</p>\r\n\r\n<p>Nước ph&ugrave; hợp gi&aacute; tiền.</p>\r\n\r\n<p>Đi sớm sớm th&igrave; bạn sẽ chọn được vị tr&iacute; đẹp để ngồi hơn, t&igrave;m c&aacute;c g&oacute;c chụp h&igrave;nh sống ảnh th&igrave; khỏi b&agrave;n</p>\r\n\r\n<p><img alt=\"ocsen beach bar &amp; club\" src=\"https://phuot3mien.com/wp-content/uploads/2021/01/ocsen-beach-bar-club-8.jpg\" style=\"height:808px; width:1200px\" /></p>\r\n\r\n<p>Ảnh : ocsen</p>\r\n\r\n<p>Đến với Ph&uacute; Quốc, nếu bạn muốn t&igrave;m một địa điểm để chill. Th&igrave; loại h&igrave;nh c&aacute;c qu&aacute;n Bar l&agrave; sự lựa chọn tuyệt vời, v&agrave; Ocsen Beach Bar &amp; Club l&agrave; sự lựa chọn nổi bật hơn. Thật sự rất xứng đ&aacute;ng l&agrave; nơi để chill c&ugrave;ng bạn b&egrave;, nếu thấy hữu &iacute;ch th&igrave; chia sẻ cho bạn b&egrave; nh&eacute;</p>', '<p>Dựt c&aacute;i T&iacute;t, c&acirc;u c&aacute;i view vậy th&ocirc;i, chứ chỉ l&agrave;m một ly Cocktail nghe nhạc Chill Chill dịp Noel ở Ocsen Beach Bar &amp; Club, chứ kh&ocirc;ng c&oacute; h&uacute;t b&oacute;ng. M&agrave; ra đ&oacute; thấy hầu như ai cũng h&uacute;t, &hellip;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-240px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 11, 1, NULL, NULL),
(26, 'Di lịch bụi mệt vãi cái lồn ra phải ko các bạn ???', '1618282938_1610696404_bai7.jpg', '<p>Di lịch bụi mệt v&atilde;i c&aacute;i lồn ra phải ko c&aacute;c bạn ???</p>', '<p>Di lịch bụi mệt v&atilde;i c&aacute;i lồn ra phải ko c&aacute;c bạn ???</p>', 13, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đình Huân', 'ngodinhhuan@gmail.com', NULL, '$2y$10$RRlZUQ3LTqhyfs/N1IdY4ekYISL3OHamXQdlCGrHmCRY84joV8qI2\r\n', NULL, '2021-01-13 03:51:14', '2021-01-13 03:51:14'),
(2, 'Ngo Dinh Huan', 'ngodinhhuan07@gmail.com', NULL, '$2y$10$wK2HG/rNzA3U3reJ.yCuS.SnxkNSCqcOmyy.gwnMmIVAEpDd3Ip86', 'GEq62NNeFFdIZ48b00t3uz8By1ZscPMf1VL7ZyeIUEbGxCzf0MWHVZlLQhpC', '2021-04-12 20:00:49', '2021-04-12 20:00:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id_category` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
