-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 01:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phuocstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `days` date NOT NULL,
  `id_products` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `nums` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `id_users`, `days`, `id_products`, `size`, `nums`, `status`) VALUES
(13, 3, '2018-08-10', 16, 35, 2, 'ÄÃ£ giao hÃ ng'),
(14, 3, '2018-08-10', 16, 39, 5, 'ÄÃ£ nháº­n Ä‘Æ¡n hÃ ng'),
(15, 1, '2018-09-10', 23, 35, 1, 'ÄÃ£ giao hÃ ng');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `order`, `hide`) VALUES
(1, 'Má»›i vá»', 1, 0),
(2, 'GiÃ y Nam', 2, 0),
(3, 'GiÃ y Ná»¯', 3, 0),
(4, 'Phá»¥ Kiá»‡n', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `subject`, `content`, `status`) VALUES
(1, 'Pháº£n há»“i vá» nhÃ¢n viÃªn', '<p>qu&aacute; tá»‡</p>\r\n', 'ÄÃ£ xá»­ lÃ½ thÃ´ng tin.'),
(2, 'Pháº£n há»“i vá» sáº£n pháº©m', '<p>tuyá»‡t vá»i ^^</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>a</td>\r\n			<td>a</td>\r\n		</tr>\r\n		<tr>\r\n			<td>a</td>\r\n			<td>a</td>\r\n		</tr>\r\n		<tr>\r\n			<td>a</td>\r\n			<td>a</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'ÄÃ£ xá»­ lÃ½ thÃ´ng tin.'),
(3, 'Pháº£n há»“i vá» nhÃ¢n viÃªn', '<p><strong>Há»c thuyáº¿t vá» Nh&agrave; nÆ°á»›c cá»§a Chá»§ nghÄ©a M&aacute;c-L&ecirc;nin</strong>&nbsp;hay c&ograve;n gá»i l&agrave;&nbsp;<strong>L&yacute; luáº­n vá» Nh&agrave; nÆ°á»›c v&agrave; Ph&aacute;p luáº­t cá»§a Chá»§ nghÄ©a M&aacute;c- L&ecirc; nin</strong>&nbsp;l&agrave; há»‡ thá»‘ng nhá»¯ng kiáº¿n thá»©c cá»§a&nbsp;<a href="https://vi.wikipedia.org/wiki/Ch%E1%BB%A7_ngh%C4%A9a_Marx-Lenin">chá»§ nghÄ©a M&aacute;c-L&ecirc;nin</a>&nbsp;vá» nhá»¯ng&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Quy_lu%E1%BA%ADt&amp;action=edit&amp;redlink=1">quy luáº­t</a>&nbsp;ph&aacute;t sinh, ph&aacute;t triá»ƒn Ä‘áº·c th&ugrave;, nhá»¯ng Ä‘áº·c t&iacute;nh chung v&agrave; biá»ƒu hiá»‡n quan trá»ng nháº¥t cá»§a&nbsp;<strong><a href="https://vi.wikipedia.org/wiki/Nh%C3%A0_n%C6%B0%E1%BB%9Bc">nh&agrave; nÆ°á»›c</a></strong>&nbsp;n&oacute;i chung v&agrave;&nbsp;<a href="https://vi.wikipedia.org/wiki/Nh%C3%A0_n%C6%B0%E1%BB%9Bc_X%C3%A3_h%E1%BB%99i_ch%E1%BB%A7_ngh%C4%A9a">nh&agrave; nÆ°á»›c X&atilde; há»™i chá»§ nghÄ©a</a>&nbsp;n&oacute;i ri&ecirc;ng.<a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-1">[1]</a>&nbsp;Táº­p trung v&agrave;o ph&acirc;n t&iacute;ch nguá»“n gá»‘c v&agrave; báº£n cháº¥t cá»§a nh&agrave; nÆ°á»›c, L&yacute; luáº­n cá»§a nhá»¯ng ngÆ°á»i M&aacute;c-x&iacute;t Ä‘i s&acirc;u nghi&ecirc;n cá»©u vá» nh&agrave; nÆ°á»›c má»™t c&aacute;ch tá»•ng thá»ƒ nhá»¯ng váº¥n Ä‘á» chung nháº¥t vá» báº£n cháº¥t, chá»©c nÄƒng, vai tr&ograve; cá»§a nh&agrave; nÆ°á»›c, h&igrave;nh thá»©c nh&agrave; nÆ°á»›c, bá»™ m&aacute;y nh&agrave; nÆ°á»›c v&agrave; l&agrave;m s&aacute;ng tá» má»‘i quan há»‡ giá»¯a c&aacute;c bá»™ pháº­n trong&nbsp;<a href="https://vi.wikipedia.org/wiki/Ki%E1%BA%BFn_tr%C3%BAc_th%C6%B0%E1%BB%A3ng_t%E1%BA%A7ng">thÆ°á»£ng táº§ng kiáº¿n tr&uacute;c</a>&nbsp;<a href="https://vi.wikipedia.org/wiki/Ch%C3%ADnh_tr%E1%BB%8B">ch&iacute;nh trá»‹</a>-<a href="https://vi.wikipedia.org/wiki/Lu%E1%BA%ADt_ph%C3%A1p">ph&aacute;p l&yacute;</a>&nbsp;vá»›i c&aacute;c&nbsp;<a href="https://vi.wikipedia.org/wiki/T%E1%BB%95_ch%E1%BB%A9c_x%C3%A3_h%E1%BB%99i">tá»• chá»©c x&atilde; há»™i</a>, giá»¯a nh&agrave; nÆ°á»›c vá»›i&nbsp;<a href="https://vi.wikipedia.org/wiki/C%C3%A1_nh%C3%A2n">c&aacute; nh&acirc;n</a>. Theo quan Ä‘iá»ƒm cá»§a Chá»§ nghÄ©a M&aacute;c-L&ecirc;nin th&igrave; nh&agrave; nÆ°á»›c thá»±c cháº¥t l&agrave; má»™t tá»• chá»©c Ä‘áº·c biá»‡t cá»§a&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Quy%E1%BB%81n_l%E1%BB%B1c_ch%C3%ADnh_tr%E1%BB%8B&amp;action=edit&amp;redlink=1">quyá»n lá»±c ch&iacute;nh trá»‹</a>, má»™t bá»™ m&aacute;y chuy&ecirc;n l&agrave;m nhiá»‡m vá»¥ cÆ°á»¡ng cháº¿ v&agrave; thá»±c hiá»‡n chá»©c nÄƒng&nbsp;<a href="https://vi.wikipedia.org/wiki/Qu%E1%BA%A3n_l%C3%BD">quáº£n l&yacute;</a>&nbsp;Ä‘áº·c biá»‡t nháº±m duy tr&igrave; tráº­t tá»±&nbsp;<a href="https://vi.wikipedia.org/wiki/X%C3%A3_h%E1%BB%99i">x&atilde; há»™i</a>, thá»±c hiá»‡n má»¥c Ä‘&iacute;ch báº£o vá»‡ Ä‘á»‹a vá»‹ cá»§a&nbsp;<a href="https://vi.wikipedia.org/wiki/Giai_c%E1%BA%A5p">giai cáº¥p</a>&nbsp;thá»‘ng trá»‹ trong x&atilde; há»™i.</p>\r\n\r\n<p>Nhá»¯ng ná»™i dung cÆ¡ báº£n ban Ä‘áº§u vá» há»c thuyáº¿t n&agrave;y Ä‘Æ°á»£c pháº£n &aacute;nh th&ocirc;ng qua t&aacute;c pháº©m: &quot;<em><a href="https://vi.wikipedia.org/w/index.php?title=Ngu%E1%BB%93n_g%E1%BB%91c_c%E1%BB%A7a_gia_%C4%91%C3%ACnh,_ch%E1%BA%BF_%C4%91%E1%BB%99_s%E1%BB%9F_h%E1%BB%AFu_v%C3%A0_c%E1%BB%A7a_nh%C3%A0_n%C6%B0%E1%BB%9Bc&amp;action=edit&amp;redlink=1">Nguá»“n gá»‘c cá»§a gia Ä‘&igrave;nh, cháº¿ Ä‘á»™ sá»Ÿ há»¯u v&agrave; cá»§a nh&agrave; nÆ°á»›c</a></em>&quot; cá»§a&nbsp;<a href="https://vi.wikipedia.org/wiki/Friedrich_Engels">Ph.Ä‚ng-ghen</a>. Qua t&aacute;c pháº©m n&agrave;y, Ä‚ng-ghen Ä‘&atilde; ph&acirc;n t&iacute;ch c&aacute;c váº¥n Ä‘á» vá»&nbsp;<a href="https://vi.wikipedia.org/wiki/Gia_%C4%91%C3%ACnh">gia Ä‘&igrave;nh</a>, nguá»“n gá»‘c cá»§a giai cáº¥p v&agrave; cá»§a nh&agrave; nÆ°á»›c v&agrave; nhá»¯ng quy luáº­t tiáº¿p tá»¥c ph&aacute;t triá»ƒn v&agrave; biáº¿n Ä‘á»•i sau n&agrave;y cá»§a ch&uacute;ng. Ph.Ä‚ng-ghen Ä‘&atilde; chá»‰ ra ráº±ng nh&agrave; nÆ°á»›c chá»‰ ra Ä‘á»i á»Ÿ má»™t giai Ä‘oáº¡n&nbsp;<a href="https://vi.wikipedia.org/wiki/L%E1%BB%8Bch_s%E1%BB%AD">lá»‹ch sá»­</a>&nbsp;nháº¥t Ä‘á»‹nh cá»§a x&atilde; há»™i tr&ecirc;n cÆ¡ sá»Ÿ xuáº¥t hiá»‡n cháº¿ Ä‘á»™ tÆ° há»¯u v&agrave; gáº¯n liá»n vá»›i n&oacute; l&agrave; sá»± ph&acirc;n chia x&atilde; há»™i th&agrave;nh c&aacute;c giai cáº¥p Ä‘á»‘i kh&aacute;ng, &ocirc;ng cÅ©ng luáº­n chá»©ng vá» t&iacute;nh cháº¥t giai cáº¥p v&agrave; t&iacute;nh&nbsp;<a href="https://vi.wikipedia.org/wiki/L%E1%BB%8Bch_s%E1%BB%AD">lá»‹ch sá»­</a>&nbsp;cá»§a nh&agrave; nÆ°á»›c, l&agrave;m s&aacute;ng tá» chá»©a nÄƒng gia cáº¥p cÆ¡ báº£n cá»§a nh&agrave; nÆ°á»›c.<a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-2">[2]</a>&nbsp;Sau Ä‘&oacute; l&yacute; luáº­n n&agrave;y Ä‘Æ°á»£c nhá»¯ng ngÆ°á»i&nbsp;<a href="https://vi.wikipedia.org/wiki/Ch%E1%BB%A7_ngh%C4%A9a_Marx">M&aacute;c-x&iacute;t</a>&nbsp;tiáº¿p tá»¥c ph&aacute;t triá»ƒn v&agrave; ho&agrave;n thiá»‡n trong Ä‘iá»u kiá»‡n má»›i. L&yacute; luáº­n vá» nh&agrave; nÆ°á»›c v&agrave; ph&aacute;p luáº­t l&agrave; má»™t m&ocirc;n há»c báº¯t buá»™c trong chÆ°Æ¡ng tr&igrave;nh há»c&nbsp;<a href="https://vi.wikipedia.org/wiki/%C4%90%E1%BA%A1i_h%E1%BB%8Dc">Äáº¡i há»c</a>&nbsp;Ä‘á»‘i vá»›i c&aacute;c ng&agrave;nh khoa há»c x&atilde; há»™i nhÆ° Luáº­t há»c, ch&iacute;nh trá»‹, h&agrave;nh ch&iacute;nh,&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Khoa_h%E1%BB%8Dc_x%C3%A3_h%E1%BB%99i_v%C3%A0_nh%C3%A2n_v%C4%83n&amp;action=edit&amp;redlink=1">khoa há»c x&atilde; há»™i v&agrave; nh&acirc;n vÄƒn</a>&nbsp;á»Ÿ c&aacute;c TrÆ°á»ng Äáº¡i há»c táº¡i&nbsp;<a href="https://vi.wikipedia.org/wiki/Vi%E1%BB%87t_Nam">Viá»‡t Nam</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Má»¥c lá»¥c</h2>\r\n\r\n<ul>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Ngu%E1%BB%93n_g%E1%BB%91c">1Nguá»“n gá»‘c</a>\r\n\r\n	<ul>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#S%E1%BB%B1_ra_%C4%91%E1%BB%9Di">1.1Sá»± ra Ä‘á»i</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Nguy%C3%AAn_nh%C3%A2n_tr%E1%BB%B1c_ti%E1%BA%BFp">1.2Nguy&ecirc;n nh&acirc;n trá»±c tiáº¿p</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#H%C3%ACnh_th%E1%BB%A9c_xu%E1%BA%A5t_hi%E1%BB%87n">1.3H&igrave;nh thá»©c xuáº¥t hiá»‡n</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#B%E1%BA%A3n_ch%E1%BA%A5t_giai_c%E1%BA%A5p">2Báº£n cháº¥t giai cáº¥p</a></li>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#%C4%90%E1%BA%B7c_tr%C6%B0ng">3Äáº·c trÆ°ng</a>\r\n	<ul>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Qu%E1%BA%A3n_l%C3%BD_d%C3%A2n_c%C6%B0_theo_l%C3%A3nh_th%E1%BB%95">3.1Quáº£n l&yacute; d&acirc;n cÆ° theo l&atilde;nh thá»•</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Thi%E1%BA%BFt_l%E1%BA%ADp_quy%E1%BB%81n_l%E1%BB%B1c_c%C3%B4ng_c%E1%BB%99ng">3.2Thiáº¿t láº­p quyá»n lá»±c c&ocirc;ng cá»™ng</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Thu%E1%BA%BF_kh%C3%B3a">3.3Thuáº¿ kh&oacute;a</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Ch%E1%BB%A9c_n%C4%83ng">4Chá»©c nÄƒng</a>\r\n	<ul>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Th%E1%BB%91ng_tr%E1%BB%8B_v%C3%A0_x%C3%A3_h%E1%BB%99i">4.1Thá»‘ng trá»‹ v&agrave; x&atilde; há»™i</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#%C4%90%E1%BB%91i_n%E1%BB%99i_v%C3%A0_%C4%91%E1%BB%91i_ngo%E1%BA%A1i">4.2Äá»‘i ná»™i v&agrave; Ä‘á»‘i ngoáº¡i</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Ki%E1%BB%83u_nh%C3%A0_n%C6%B0%E1%BB%9Bc">5Kiá»ƒu nh&agrave; nÆ°á»›c</a>\r\n	<ul>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Nh%C3%A0_n%C6%B0%E1%BB%9Bc_Chi%E1%BA%BFm_h%E1%BB%AFu_n%C3%B4_l%E1%BB%87">5.1Nh&agrave; nÆ°á»›c Chiáº¿m há»¯u n&ocirc; lá»‡</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Nh%C3%A0_n%C6%B0%E1%BB%9Bc_Phong_ki%E1%BA%BFn">5.2Nh&agrave; nÆ°á»›c Phong kiáº¿n</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Nh%C3%A0_n%C6%B0%E1%BB%9Bc_T%C6%B0_s%E1%BA%A3n">5.3Nh&agrave; nÆ°á»›c TÆ° sáº£n</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Chuy%C3%AAn_ch%C3%ADnh_v%C3%B4_s%E1%BA%A3n">5.4Chuy&ecirc;n ch&iacute;nh v&ocirc; sáº£n</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Nh%C3%A0_n%C6%B0%E1%BB%9Bc_v%C3%B4_s%E1%BA%A3n">5.5Nh&agrave; nÆ°á»›c v&ocirc; sáº£n</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Nh%C3%A0_n%C6%B0%E1%BB%9Bc_x%C3%A3_h%E1%BB%99i_ch%E1%BB%A7_ngh%C4%A9a">6Nh&agrave; nÆ°á»›c x&atilde; há»™i chá»§ nghÄ©a</a>\r\n	<ul>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#B%E1%BA%A3n_ch%E1%BA%A5t,_ch%E1%BB%A9c_n%C4%83ng">6.1Báº£n cháº¥t, chá»©c nÄƒng</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Nhi%E1%BB%87m_v%E1%BB%A5">6.2Nhiá»‡m vá»¥</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#T%C6%B0_t%C6%B0%E1%BB%9Fng_H%E1%BB%93_Ch%C3%AD_Minh">7TÆ° tÆ°á»Ÿng Há»“ Ch&iacute; Minh</a>\r\n	<ul>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_d%C3%A2n,_do_d%C3%A2n_v%C3%A0_v%C3%AC_d%C3%A2n">7.1Nh&agrave; nÆ°á»›c cá»§a d&acirc;n, do d&acirc;n v&agrave; v&igrave; d&acirc;n</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Ph%C3%A1p_quy%E1%BB%81n">7.2Ph&aacute;p quyá»n</a></li>\r\n		<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#X%C3%A2y_d%E1%BB%B1ng_%C4%91%E1%BB%99i_ng%C5%A9_c%C3%A1n_b%E1%BB%99,_c%C3%B4ng_ch%E1%BB%A9c">7.3X&acirc;y dá»±ng Ä‘á»™i ngÅ© c&aacute;n bá»™, c&ocirc;ng chá»©c</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Tham_kh%E1%BA%A3o">8Tham kháº£o</a></li>\r\n	<li><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#Ch%C3%BA_th%C3%ADch">9Ch&uacute; th&iacute;ch</a></li>\r\n</ul>\r\n\r\n<h2>Nguá»“n gá»‘c[<a href="https://vi.wikipedia.org/w/index.php?title=H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin&amp;veaction=edit&amp;section=1">sá»­a</a>&nbsp;|&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin&amp;action=edit&amp;section=1">sá»­a m&atilde; nguá»“n</a>]</h2>\r\n\r\n<p>Lá»‹ch sá»­ cho tháº¥y kh&ocirc;ng pháº£i khi n&agrave;o x&atilde; há»™i cÅ©ng c&oacute; nh&agrave; nÆ°á»›c. Trong x&atilde; há»™i nguy&ecirc;n thuá»·, do&nbsp;<a href="https://vi.wikipedia.org/wiki/Kinh_t%E1%BA%BF">kinh táº¿</a>&nbsp;c&ograve;n tháº¥p k&eacute;m, chÆ°a c&oacute; sá»± ph&acirc;n h&oacute;a giai cáº¥p, cho n&ecirc;n chÆ°a c&oacute; nh&agrave; nÆ°á»›c. Äá»©ng Ä‘áº§u c&aacute;c&nbsp;<a href="https://vi.wikipedia.org/wiki/Th%E1%BB%8B_t%E1%BB%99c">thá»‹ tá»™c</a>&nbsp;v&agrave;&nbsp;<a href="https://vi.wikipedia.org/wiki/B%E1%BB%99_l%E1%BA%A1c">bá»™ láº¡c</a>&nbsp;l&agrave; c&aacute;c&nbsp;<a href="https://vi.wikipedia.org/wiki/T%E1%BB%99c_tr%C6%B0%E1%BB%9Fng">tá»™c trÆ°á»Ÿng</a>&nbsp;(hay&nbsp;<a href="https://vi.wikipedia.org/wiki/T%E1%BB%99c_ch%E1%BB%A7">tá»™c chá»§</a>) do nhá»¯ng ngÆ°á»i d&acirc;n á»Ÿ Ä‘&oacute; báº§u ra, quyá»n lá»±c cá»§a nhá»¯ng ngÆ°á»i Ä‘á»©ng Ä‘áº§u thuá»™c vá» uy t&iacute;n v&agrave;&nbsp;<a href="https://vi.wikipedia.org/wiki/%C4%90%E1%BA%A1o_%C4%91%E1%BB%A9c">Ä‘áº¡o Ä‘á»©c</a>, viá»‡c Ä‘iá»u chá»‰nh c&aacute;c&nbsp;<a href="https://vi.wikipedia.org/wiki/Quan_h%E1%BB%87_x%C3%A3_h%E1%BB%99i">quan há»‡ x&atilde; há»™i</a>&nbsp;Ä‘Æ°á»£c thá»±c hiá»‡n báº±ng nhá»¯ng quy táº¯c chung, nhá»¯ng táº­p qu&aacute;n trong cá»™ng Ä‘á»“ng. Trong tay há» kh&ocirc;ng c&oacute; v&agrave; kh&ocirc;ng cáº§n má»™t c&ocirc;ng cá»¥ cÆ°á»¡ng bá»©c Ä‘áº·c biá»‡t n&agrave;o.</p>\r\n\r\n<h3>Sá»± ra Ä‘á»i[<a href="https://vi.wikipedia.org/w/index.php?title=H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin&amp;veaction=edit&amp;section=2">sá»­a</a>&nbsp;|&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin&amp;action=edit&amp;section=2">sá»­a m&atilde; nguá»“n</a>]</h3>\r\n\r\n<p>Ph.Ä‚ng-ghen Ä‘&atilde; m&ocirc; táº£ sá»± ra Ä‘á»i cá»§a nh&agrave; nÆ°á»›c tr&ecirc;n cÆ¡ sá»Ÿ sá»± tan r&atilde; cá»§a cháº¿ Ä‘á»™ thá»‹ tá»™c. Theo Ä‘&oacute; x&atilde; há»™i lo&agrave;i ngÆ°á»i qua qu&aacute; tr&igrave;nh ph&aacute;t triá»ƒn Ä‘&atilde; dáº«n Ä‘áº¿n sá»± ph&aacute;t triá»ƒn kh&ocirc;ng ngá»«ng cá»§a&nbsp;<a href="https://vi.wikipedia.org/wiki/L%E1%BB%B1c_l%C6%B0%E1%BB%A3ng_s%E1%BA%A3n_xu%E1%BA%A5t">lá»±c lÆ°á»£ng sáº£n xuáº¥t</a>. V&agrave;o thá»i cá»• Ä‘áº¡i Ä‘&atilde; diá»…n ra ba láº§n ph&acirc;n&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=C%C3%B4ng_lao_%C4%91%E1%BB%99ng_x%C3%A3_h%E1%BB%99i&amp;action=edit&amp;redlink=1">c&ocirc;ng lao Ä‘á»™ng x&atilde; há»™i</a>.</p>\r\n\r\n<p><a href="https://vi.wikipedia.org/wiki/T%E1%BA%ADp_tin:Lamb_-_no_docking.jpg"><img alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Lamb_-_no_docking.jpg/200px-Lamb_-_no_docking.jpg" style="height:133px; width:200px" /></a></p>\r\n\r\n<p>ChÄƒn nu&ocirc;i t&aacute;ch khá»i trá»“ng trá»t l&agrave; Ä‘&ograve;n báº©y cho kinh táº¿ v&agrave; h&igrave;nh th&agrave;nh máº§m má»‘ng tÆ° há»¯u</p>\r\n\r\n<ul>\r\n	<li>Láº§n ph&acirc;n c&ocirc;ng thá»© nháº¥t,&nbsp;<a href="https://vi.wikipedia.org/wiki/Ng%C3%A0nh_ch%C4%83n_nu%C3%B4i">chÄƒn nu&ocirc;i</a>&nbsp;Ä‘&atilde; trá»Ÿ th&agrave;nh má»™t ng&agrave;nh kinh táº¿ Ä‘á»™c láº­p v&agrave; t&aacute;ch ra khá»i&nbsp;<a href="https://vi.wikipedia.org/wiki/Tr%E1%BB%93ng_tr%E1%BB%8Dt">trá»“ng trá»t</a>, tá»« Ä‘&acirc;y máº§m má»‘ng cá»§a cháº¿ Ä‘á»™&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=T%C6%B0_h%E1%BB%AFu&amp;action=edit&amp;redlink=1">tÆ° há»¯u</a>ph&aacute;t triá»ƒn v&agrave; &quot;<a href="https://vi.wikipedia.org/w/index.php?title=Gia_%C4%91%C3%ACnh_c%C3%A1_th%E1%BB%83&amp;action=edit&amp;redlink=1">gia Ä‘&igrave;nh c&aacute; thá»ƒ</a>&nbsp;Ä‘&atilde; trá»Ÿ th&agrave;nh má»™t lá»±c lÆ°á»£ng Ä‘ang Ä‘e dá»a thá»‹ tá»™c&quot;<a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-3">[3]</a></li>\r\n	<li>Láº§n ph&acirc;n c&ocirc;ng thá»© hai,&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Th%E1%BB%A7_c%C3%B4ng_nghi%E1%BB%87p&amp;action=edit&amp;redlink=1">thá»§ c&ocirc;ng nghiá»‡p</a>&nbsp;t&aacute;ch ra khá»i&nbsp;<a href="https://vi.wikipedia.org/wiki/N%C3%B4ng_nghi%E1%BB%87p">n&ocirc;ng nghiá»‡p</a>, láº§n ph&acirc;n c&ocirc;ng n&agrave;y dáº«n Ä‘áº¿n h&igrave;nh th&agrave;nh bÆ°á»›c Ä‘áº§u&nbsp;<a href="https://vi.wikipedia.org/wiki/Ch%E1%BA%BF_%C4%91%E1%BB%99_n%C3%B4_l%E1%BB%87">cháº¿ Ä‘á»™ n&ocirc; lá»‡</a>&nbsp;vá»›i sá»‘ lÆ°á»£ng n&ocirc; lá»‡ ng&agrave;y c&agrave;ng tÄƒng v&agrave;&nbsp;<em>há» bá»‹ Ä‘áº©y Ä‘i l&agrave;m viá»‡c á»Ÿ ngo&agrave;i&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=%C4%90%E1%BB%93ng_ru%E1%BB%99ng&amp;action=edit&amp;redlink=1">Ä‘á»“ng ruá»™ng</a>&nbsp;v&agrave; trong xÆ°á»Ÿng thá»£, th&agrave;nh tá»«ng Ä‘o&agrave;n mÆ°á»i ngÆ°á»i, ngÆ°á»i hai ngÆ°á»i má»™t</em><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-4">[4]</a>&nbsp;Ä‘iá»u Ä‘&oacute; cho tháº¥y sá»± ph&acirc;n h&oacute;a x&atilde; há»™i,&nbsp;<a href="https://vi.wikipedia.org/wiki/Ph%C3%A2n_t%E1%BA%A7ng_x%C3%A3_h%E1%BB%99i">ph&acirc;n táº§ng x&atilde; há»™i</a>&nbsp;s&acirc;u sáº¯c.</li>\r\n	<li>Láº§n ph&acirc;n c&ocirc;ng thá»© ba, sáº£n xuáº¥t t&aacute;ch báº¡ch vá»›i trao Ä‘á»•i dáº«n Ä‘áº¿n sá»± xuáº¥t hiá»‡n cá»§a táº§ng lá»›p&nbsp;<a href="https://vi.wikipedia.org/wiki/Th%C6%B0%C6%A1ng_gia">thÆ°Æ¡ng nh&acirc;n</a>,&nbsp;<em>láº§n Ä‘áº§u ti&ecirc;n xuáº¥t hiá»‡n má»™t giai cáº¥p tuy kh&ocirc;ng tham gia sáº£n xuáº¥t má»™t t&yacute; n&agrave;o nhÆ°ng láº¡i chiáº¿m to&agrave;n bá»™ quyá»n l&atilde;nh Ä‘áº¡o sáº£n xuáº¥t v&agrave; báº¯t nhá»¯ng ngÆ°á»i sáº£n xuáº¥t phá»¥ thuá»™c v&agrave;o m&igrave;nh vá» máº·t kinh táº¿&hellip; v&agrave; b&oacute;c lá»™t cáº£ hai, má»™t giai cáº¥p m&agrave; lá»‹ch sá»­ lo&agrave;i ngÆ°á»i trÆ°á»›c Ä‘&oacute; chÆ°a há» biáº¿t Ä‘áº¿n</em>.<a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-5">[5]</a></li>\r\n</ul>\r\n\r\n<p>Qua ba láº§n ph&acirc;n c&ocirc;ng lao Ä‘á»™ng n&agrave;y cho tháº¥y&nbsp;<a href="https://vi.wikipedia.org/wiki/L%E1%BB%B1c_l%C6%B0%E1%BB%A3ng_s%E1%BA%A3n_xu%E1%BA%A5t">lá»±c lÆ°á»£ng sáº£n xuáº¥t</a>&nbsp;ph&aacute;t triá»ƒn dáº«n Ä‘áº¿n nÄƒng suáº¥t&nbsp;<a href="https://vi.wikipedia.org/wiki/Lao_%C4%91%E1%BB%99ng">lao Ä‘á»™ng</a>&nbsp;tÄƒng,&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=C%E1%BB%A7a_c%E1%BA%A3i&amp;action=edit&amp;redlink=1">cá»§a cáº£i</a>&nbsp;l&agrave;m ra ng&agrave;y c&agrave;ng nhiá»u, v&agrave; dáº«n Ä‘áº¿n c&oacute; cá»§a cáº£i dÆ° thá»«a k&egrave;m theo Ä‘&oacute; l&agrave; sá»± t&iacute;ch trá»¯, Ä‘á»“ng thá»i xuáº¥t hiá»‡n má»™t bá»™ pháº­n chiáº¿n Ä‘oáº¡t cá»§a cáº£i dÆ° thá»«a Ä‘&oacute; (do náº¯m quyá»n quáº£n l&yacute;, cai quáº£n) hoáº·c gi&agrave;u l&ecirc;n nhá» t&iacute;ch trá»¯,&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=%C4%90%E1%BA%A7u_c%C6%A1&amp;action=edit&amp;redlink=1">Ä‘áº§u cÆ¡</a>&nbsp;tá»« Ä‘&acirc;y Ä‘&atilde; c&oacute; sá»±&nbsp;<em>ph&acirc;n h&oacute;a gi&agrave;u ngh&egrave;o</em>, giá»¯a ngÆ°á»i c&oacute; cá»§a v&agrave; ngÆ°á»i kh&ocirc;ng c&oacute; cá»§a, sá»± ph&acirc;n h&oacute;a gi&agrave;u ngh&egrave;o n&agrave;y dáº«n Ä‘áº¿n hiá»‡n tÆ°á»£ng&nbsp;<em>ph&acirc;n táº§ng x&atilde; há»™i</em>, ph&acirc;n chia th&agrave;nh c&aacute;c táº§ng lá»›p kh&aacute;c nhau tá»« Ä‘&oacute; dáº«n Ä‘áº¿n&nbsp;<em>ph&acirc;n chia giai cáº¥p</em>&nbsp;Ä‘á»“ng thá»i v&agrave; k&eacute;o theo xuáº¥t hiá»‡n m&acirc;u thuáº«n giai cáº¥p v&agrave; Ä‘iá»u kh&ocirc;ng tr&aacute;nh khá»i l&agrave; Ä‘áº¥u tranh giai cáº¥p, l&uacute;c n&agrave;y nh&agrave; nÆ°á»›c Ä‘&atilde; c&oacute; tiá»n Ä‘á» r&otilde; r&agrave;ng cho sá»± ra Ä‘á»i cá»§a m&igrave;nh.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&ldquo;</td>\r\n			<td><em>C&aacute;i&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=T%E1%BA%ADp_qu%C3%A1n&amp;action=edit&amp;redlink=1">táº­p qu&aacute;n</a>&nbsp;giao cho nhá»¯ng chá»©c vá»¥ cá»§a thá»‹ tá»™c cho má»™t sá»‘ gia Ä‘&igrave;nh nháº¥t Ä‘á»‹nh Ä‘&atilde; biáº¿n th&agrave;nh má»™t c&aacute;i quyá»n kh&ocirc;ng thá»ƒ chá»‘i c&atilde;i cá»§a nhá»¯ng gia Ä‘&igrave;nh Ä‘&oacute; Ä‘Æ°á»£c Ä‘áº£m nhiá»‡m chá»©c vá»¥ áº¥y, báº±ng nhá»¯ng gia Ä‘&igrave;nh áº¥y c&ograve;n máº¡nh vá»‹ gi&agrave;u c&oacute; ná»¯a, há» báº¯t Ä‘áº§u táº­p há»£p nhau láº¡i b&ecirc;n ngo&agrave;i thá»‹ tá»™c cá»§a há» th&agrave;nh má»™t giai cáº¥p ri&ecirc;ng biá»‡t, c&oacute; Ä‘áº·c quyá»n, ráº±ng nh&agrave; nÆ°á»›c vá»«a má»›i ra Ä‘á»i Ä‘&atilde; thá»«a nháº­n nhá»¯ng tham vá»ng áº¥y cá»§a há»</em></td>\r\n			<td>&rdquo;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="3"><cite>&mdash;&thinsp;<a href="https://vi.wikipedia.org/wiki/Friedrich_Engels">Ph.Ä‚ng-ghen</a><a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-6">[6]</a></cite></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Lá»±c lÆ°á»£ng sáº£n xuáº¥t ph&aacute;t triá»ƒn Ä‘&atilde; dáº«n Ä‘áº¿n sá»± ra Ä‘á»i cháº¿ Ä‘á»™ tÆ° há»¯u v&agrave; tá»« Ä‘&oacute; x&atilde; há»™i ph&acirc;n chia th&agrave;nh c&aacute;c giai cáº¥p Ä‘á»‘i kh&aacute;ng v&agrave; cuá»™c Ä‘áº¥u tranh giai cáº¥p kh&ocirc;ng thá»ƒ Ä‘iá»u ho&agrave; Ä‘Æ°á»£c xuáº¥t hiá»‡n. Äiá»u Ä‘&oacute; dáº«n Ä‘áº¿n nguy cÆ¡ c&aacute;c giai cáº¥p cháº³ng nhá»¯ng ti&ecirc;u diá»‡t láº«n nhau m&agrave; c&ograve;n ti&ecirc;u diá»‡t lu&ocirc;n cáº£ x&atilde; há»™i, táº¡o ra má»™t t&igrave;nh tráº¡ng loáº¡n láº¡c há»—n Ä‘á»™n. X&atilde; há»™i l&uacute;c n&agrave;y Ä‘&ograve;i há»i pháº£i c&oacute; má»™t tá»• chá»©c má»›i Ä‘á»§ sá»©c dáº­p táº¯t cuá»™c xung Ä‘á»™t c&ocirc;ng khai giá»¯a c&aacute;c giai cáº¥p áº¥y, hoáº·c c&ugrave;ng láº¯m l&agrave; Ä‘á»ƒ l&agrave;m cho cuá»™c Ä‘áº¥u tranh giai cáº¥p diá»…n ra trong lÄ©nh vá»±c kinh táº¿, dÆ°á»›i má»™t h&igrave;nh thá»©c gá»i l&agrave; há»£p ph&aacute;p v&agrave; Ä‘á»ƒ tháº£m hoáº¡ Ä‘&oacute; kh&ocirc;ng diá»…n ra, má»™t cÆ¡ quan quyá»n lá»±c Ä‘áº·c biá»‡t Ä‘&atilde; ra Ä‘á»i v&agrave; Ä‘&oacute; ch&iacute;nh l&agrave; nh&agrave; nÆ°á»›c.&nbsp;<em>Tá»« nhu cáº§u pháº£i kiá»m cháº¿ sá»± Ä‘á»‘i láº­p cá»§a c&aacute;c giai cáº¥p, l&agrave;m cho cuá»™c Ä‘áº¥u tranh cá»§a nhá»¯ng giai cáº¥p c&oacute; quyá»n lá»£i vá» kinh táº¿ máº«u thuáº«n nhau Ä‘&oacute; kh&ocirc;ng Ä‘i Ä‘áº¿n chá»— ti&ecirc;u diá»‡t láº«n nhau v&agrave; ti&ecirc;u diá»‡t lu&ocirc;n cáº£ x&atilde; há»™i&hellip; v&agrave; giá»¯a cho sá»± xung Ä‘á»™t Ä‘&oacute; nÄƒm trong v&ograve;ng tráº­t tá»±</em>.<a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-7">[7]</a></p>\r\n\r\n<p>V&agrave; nhÆ° váº­y l&agrave; Nh&agrave; nÆ°á»›c Ä‘&atilde; xuáº¥t hiá»‡n má»™t c&aacute;ch kh&aacute;ch quan, n&oacute; l&agrave; sáº£n pháº©m cá»§a má»™t x&atilde; há»™i Ä‘&atilde; ph&aacute;t triá»ƒn Ä‘áº¿n má»™t giai Ä‘oáº¡n nháº¥t Ä‘á»‹nh, n&oacute; kh&ocirc;ng pháº£i l&agrave; má»™t quyá»n lá»±c tá»« b&ecirc;n ngo&agrave;i &aacute;p Ä‘áº·t v&agrave; x&atilde; há»™i m&agrave; l&agrave; má»™t lá»±c lÆ°á»£ng náº£y sinh tá»« x&atilde; há»™i, má»™t lá»±c lÆ°á»£ng tá»±a há»“ nhÆ° Ä‘á»©ng tr&ecirc;n x&atilde; há»™i, c&oacute; nhiá»‡m vá»¥ l&agrave;m dá»‹u bá»›t sá»± xung Ä‘á»™t v&agrave; giá»¯ cho sá»± xung Ä‘á»™t Ä‘&oacute; náº±m trong v&ograve;ng tráº­t tá»±.<a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-8">[8]</a>&nbsp;Nh&agrave; nÆ°á»›c Ä‘áº§u ti&ecirc;n trong lá»‹ch sá»­ l&agrave;&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Nh%C3%A0_n%C6%B0%E1%BB%9Bc_Chi%E1%BA%BFm_h%E1%BB%AFu_n%C3%B4_l%E1%BB%87&amp;action=edit&amp;redlink=1">nh&agrave; nÆ°á»›c Chiáº¿m há»¯u n&ocirc; lá»‡</a>, xuáº¥t hiá»‡n trong cuá»™c Ä‘áº¥u tranh kh&ocirc;ng Ä‘iá»u ho&agrave; giá»¯a giai cáº¥p&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Ch%E1%BB%A7_n%C3%B4&amp;action=edit&amp;redlink=1">chá»§ n&ocirc;</a>&nbsp;v&agrave; giai cáº¥p&nbsp;<a href="https://vi.wikipedia.org/wiki/N%C3%B4_l%E1%BB%87">n&ocirc; lá»‡</a>. Tiáº¿p Ä‘&oacute; l&agrave;&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Nh%C3%A0_n%C6%B0%E1%BB%9Bc_Phong_ki%E1%BA%BFn&amp;action=edit&amp;redlink=1">Nh&agrave; nÆ°á»›c Phong kiáº¿n</a>,&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Nh%C3%A0_n%C6%B0%E1%BB%9Bc_T%C6%B0_s%E1%BA%A3n&amp;action=edit&amp;redlink=1">Nh&agrave; nÆ°á»›c TÆ° sáº£n</a>&nbsp;v&agrave; sau c&ugrave;ng l&agrave;&nbsp;<a href="https://vi.wikipedia.org/wiki/Nh%C3%A0_n%C6%B0%E1%BB%9Bc_X%C3%A3_h%E1%BB%99i_ch%E1%BB%A7_ngh%C4%A9a">Nh&agrave; nÆ°á»›c X&atilde; há»™i chá»§ nghÄ©a</a>.</p>\r\n\r\n<h3>Nguy&ecirc;n nh&acirc;n trá»±c tiáº¿p[<a href="https://vi.wikipedia.org/w/index.php?title=H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin&amp;veaction=edit&amp;section=3">sá»­a</a>&nbsp;|&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin&amp;action=edit&amp;section=3">sá»­a m&atilde; nguá»“n</a>]</h3>\r\n\r\n<p>Nguy&ecirc;n nh&acirc;n trá»±c tiáº¿p cá»§a sá»± xuáº¥t hiá»‡n nh&agrave; nÆ°á»›c l&agrave;&nbsp;<em>m&acirc;u thuáº«n giai cáº¥p kh&ocirc;ng thá»ƒ Ä‘iá»u ho&agrave; Ä‘Æ°á»£c</em>.&nbsp;<a href="https://vi.wikipedia.org/wiki/Vladimir_Ilyich_Lenin">V.I.L&ecirc;nin</a>&nbsp;nháº­n Ä‘á»‹nh:&nbsp;<em>Nh&agrave; nÆ°á»›c l&agrave; sáº£n pháº©m v&agrave; biá»ƒu hiá»‡n cá»§a nhá»¯ng m&acirc;u thuáº«n giai cáº¥p kh&ocirc;ng thá»ƒ Ä‘iá»u ho&agrave; Ä‘Æ°á»£c. Báº¥t cá»© á»Ÿ Ä‘&acirc;u, há»… l&uacute;c n&agrave;o v&agrave; chá»«ng n&agrave;o m&agrave;, vá» máº·t kh&aacute;ch quan, nhá»¯ng m&acirc;u thuáº«n giai cáº¥p kh&ocirc;ng thá»ƒ Ä‘iá»u ho&agrave; Ä‘Æ°á»£c, th&igrave; nh&agrave; nÆ°á»›c xuáº¥t hiá»‡n. V&agrave; ngÆ°á»£c láº¡i: sá»± tá»“n táº¡i cá»§a nh&agrave; nÆ°á»›c chá»©ng tá» ráº±ng nhá»¯ng m&acirc;u thuáº«n giai cáº¥p l&agrave; kh&ocirc;ng thá»ƒ Ä‘iá»u ho&agrave; Ä‘Æ°á»£c</em>.<a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-9">[9]</a>&nbsp;Nh&agrave; nÆ°á»›c chá»‰ ra Ä‘á»i, tá»“n táº¡i trong má»™t giai Ä‘oáº¡n nháº¥t Ä‘á»‹nh cá»§a sá»± ph&aacute;t triá»ƒn x&atilde; há»™i v&agrave; sáº½ máº¥t Ä‘i khi nhá»¯ng cÆ¡ sá»Ÿ tá»“n táº¡i cá»§a n&oacute; kh&ocirc;ng c&ograve;n ná»¯a.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&ldquo;</td>\r\n			<td><em>Chá»‰ khi n&agrave;o x&atilde; há»™i kh&ocirc;ng c&ograve;n giai cáº¥p Ä‘á»‘i kh&aacute;ng v&agrave; giai cáº¥p n&oacute;i chng th&igrave; l&uacute;c Ä‘&oacute; nh&agrave; nÆ°á»›c má»›i biáº¿n máº¥t. Sá»± ti&ecirc;u vong cá»§a nh&agrave; nÆ°á»›c l&agrave; qu&aacute; tr&igrave;nh l&acirc;u d&agrave;i, chá»‰ c&oacute; tháº¿ há»‡ nhá»¯ng ngÆ°á»i lá»›n l&ecirc;n trong Ä‘iá»u kiá»‡n lá»‹ch sá»­ má»›i, tá»©c l&agrave; bÆ°á»›c qu&aacute; Ä‘á»™ tá»« chá»§ nghÄ©a x&atilde; há»™i l&ecirc;n&nbsp;<a href="https://vi.wikipedia.org/wiki/Ch%E1%BB%A7_ngh%C4%A9a_c%E1%BB%99ng_s%E1%BA%A3n">chá»§ nghÄ©a cá»™ng sáº£n</a>&nbsp;má»›i h&igrave;nh dung Ä‘Æ°á»£c sá»± ti&ecirc;u vong cá»§a nh&agrave; nÆ°á»›c&hellip;. khi nh&agrave; nÆ°á»›c tá» ra tháº­t sá»± l&agrave; Ä‘áº¡i biá»ƒu cá»§a to&agrave;n x&atilde; há»™i, nh&acirc;n danh x&atilde; há»™i nÄƒm quyá»n sá»Ÿ há»¯u vá» c&aacute;c tÆ° liá»‡u sáº£n xuáº¥t, viá»‡c quáº£n l&yacute; ngÆ°á»i Ä‘Æ°á»£c thay báº±ng quáº£n l&yacute; c&aacute;c qu&aacute; tr&igrave;nh sáº£n xuáº¥t, l&uacute;c Ä‘&oacute; má»›i c&oacute; thá»ƒ Ä‘Æ°a bá»™ m&aacute;y nh&agrave; nÆ°á»›c xáº¿p v&agrave;o&nbsp;<a href="https://vi.wikipedia.org/wiki/Vi%E1%BB%87n_b%E1%BA%A3o_t%C3%A0ng">viá»‡n báº£o t&agrave;ng</a>&nbsp;Ä‘á»“ cá»•, b&ecirc;n cáº¡nh c&aacute;i xa k&eacute;o sá»£i v&agrave; c&aacute;i&nbsp;<a href="https://vi.wikipedia.org/wiki/R%C3%ACu">r&igrave;u</a>&nbsp;Ä‘á»“ng</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'ÄÃ£ xá»­ lÃ½ thÃ´ng tin.'),
(4, 'Pháº£n há»“i vá» cá»­a hÃ ng', '<p>V&agrave; nhÆ° váº­y l&agrave; Nh&agrave; nÆ°á»›c Ä‘&atilde; xuáº¥t hiá»‡n má»™t c&aacute;ch kh&aacute;ch quan, n&oacute; l&agrave; sáº£n pháº©m cá»§a má»™t x&atilde; há»™i Ä‘&atilde; ph&aacute;t triá»ƒn Ä‘áº¿n má»™t giai Ä‘oáº¡n nháº¥t Ä‘á»‹nh, n&oacute; kh&ocirc;ng pháº£i l&agrave; má»™t quyá»n lá»±c tá»« b&ecirc;n ngo&agrave;i &aacute;p Ä‘áº·t v&agrave; x&atilde; há»™i m&agrave; l&agrave; má»™t lá»±c lÆ°á»£ng náº£y sinh tá»« x&atilde; há»™i, má»™t lá»±c lÆ°á»£ng tá»±a há»“ nhÆ° Ä‘á»©ng tr&ecirc;n x&atilde; há»™i, c&oacute; nhiá»‡m vá»¥ l&agrave;m dá»‹u bá»›t sá»± xung Ä‘á»™t v&agrave; giá»¯ cho sá»± xung Ä‘á»™t Ä‘&oacute; náº±m trong v&ograve;ng tráº­t tá»±.<a href="https://vi.wikipedia.org/wiki/H%E1%BB%8Dc_thuy%E1%BA%BFt_v%E1%BB%81_Nh%C3%A0_n%C6%B0%E1%BB%9Bc_c%E1%BB%A7a_Ch%E1%BB%A7_ngh%C4%A9a_M%C3%A1c-L%C3%AAnin#cite_note-8">[8]</a>&nbsp;Nh&agrave; nÆ°á»›c Ä‘áº§u ti&ecirc;n trong lá»‹ch sá»­ l&agrave;&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Nh%C3%A0_n%C6%B0%E1%BB%9Bc_Chi%E1%BA%BFm_h%E1%BB%AFu_n%C3%B4_l%E1%BB%87&amp;action=edit&amp;redlink=1">nh&agrave; nÆ°á»›c Chiáº¿m há»¯u n&ocirc; lá»‡</a>, xuáº¥t hiá»‡n trong cuá»™c Ä‘áº¥u tranh kh&ocirc;ng Ä‘iá»u ho&agrave; giá»¯a giai cáº¥p&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Ch%E1%BB%A7_n%C3%B4&amp;action=edit&amp;redlink=1">chá»§ n&ocirc;</a>&nbsp;v&agrave; giai cáº¥p&nbsp;<a href="https://vi.wikipedia.org/wiki/N%C3%B4_l%E1%BB%87">n&ocirc; lá»‡</a>. Tiáº¿p Ä‘&oacute; l&agrave;&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Nh%C3%A0_n%C6%B0%E1%BB%9Bc_Phong_ki%E1%BA%BFn&amp;action=edit&amp;redlink=1">Nh&agrave; nÆ°á»›c Phong kiáº¿n</a>,&nbsp;<a href="https://vi.wikipedia.org/w/index.php?title=Nh%C3%A0_n%C6%B0%E1%BB%9Bc_T%C6%B0_s%E1%BA%A3n&amp;action=edit&amp;redlink=1">Nh&agrave; nÆ°á»›c TÆ° sáº£n</a>&nbsp;v&agrave; sau c&ugrave;ng l&agrave;&nbsp;<a href="https://vi.wikipedia.org/wiki/Nh%C3%A0_n%C6%B0%E1%BB%9Bc_X%C3%A3_h%E1%BB%99i_ch%E1%BB%A7_ngh%C4%A9a">Nh&agrave; nÆ°á»›c X&atilde; há»™i chá»§ nghÄ©a</a>.</p>\r\n', 'ÄÃ£ xá»­ lÃ½ thÃ´ng tin.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `id_cate`, `detail`, `img`, `hide`) VALUES
(2, 'Giày PS 01', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^\r\nBảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (1).jpg', 0),
(3, 'Giày PS 01', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (1).jpg', 0),
(4, 'Giày PS 02', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (2).jpg', 0),
(5, 'Giày PS 03', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (3).jpg', 0),
(6, 'Giày PS 04', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (4).jpg', 0),
(7, 'Giày PS 05', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (5).jpg', 0),
(8, 'Giày PS 06', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (6).jpg', 0),
(9, 'Giày PS 07', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (7).jpg', 0),
(10, 'Giày PS 08', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (8).jpg', 0),
(11, 'Giày PS 09', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (9).jpg', 0),
(12, 'Giày PS 10', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (10).jpg', 0),
(13, 'Giày PS 11', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (11).jpg', 0),
(14, 'Giày PS 12', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (12).jpg', 0),
(15, 'Giày PS 13', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (13).jpg', 0),
(16, 'Giày PS 14', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (14).jpg', 0),
(17, 'Giày PS 15', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (15).jpg', 0),
(18, 'Giày PS 16', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (16).jpg', 0),
(19, 'Giày PS 17', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (17).jpg', 0),
(20, 'Giày PS 18', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (18).jpg', 0),
(21, 'Giày PS 19', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (19).jpg', 0),
(22, 'Giày PS 20', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (20).jpg', 0),
(23, 'Giày PS 21', 150000, 1, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (21).jpg', 0),
(24, 'Giày PS 01', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (1).jpg', 0),
(25, 'Giày PS 02', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (2).jpg', 0),
(26, 'Giày PS 03', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (3).jpg', 0),
(27, 'Giày PS 04', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (4).jpg', 0),
(28, 'Giày PS 05', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (5).jpg', 0),
(29, 'Giày PS 06', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (6).jpg', 0),
(30, 'Giày PS 07', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (7).jpg', 0),
(31, 'Giày PS 08', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (8).jpg', 0),
(32, 'Giày PS 09', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (9).jpg', 0),
(33, 'Giày PS 10', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (10).jpg', 0),
(34, 'Giày PS 11', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (11).jpg', 0),
(35, 'Giày PS 12', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (12).jpg', 0),
(36, 'Giày PS 13', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (13).jpg', 0),
(37, 'Giày PS 14', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (14).jpg', 0),
(38, 'Giày PS 15', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (15).jpg', 0),
(39, 'Giày PS 16', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (16).jpg', 0),
(40, 'Giày PS 17', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (17).jpg', 0),
(41, 'Giày PS 18', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (18).jpg', 0),
(42, 'Giày PS 19', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (19).jpg', 0),
(43, 'Giày PS 20', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (20).jpg', 0),
(44, 'Giày PS 21', 150000, 2, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (21).jpg', 0),
(45, 'Giày PS 01', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (1).jpg', 0),
(46, 'Giày PS 02', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (2).jpg', 0),
(47, 'Giày PS 03', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (3).jpg', 0),
(48, 'Giày PS 04', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (4).jpg', 0),
(49, 'Giày PS 05', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (5).jpg', 0),
(50, 'Giày PS 06', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (6).jpg', 0),
(51, 'Giày PS 07', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (7).jpg', 0),
(52, 'Giày PS 08', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (8).jpg', 0),
(53, 'Giày PS 09', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (9).jpg', 0),
(54, 'Giày PS 10', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (10).jpg', 0),
(55, 'Giày PS 11', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (11).jpg', 0),
(56, 'Giày PS 12', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (12).jpg', 0),
(57, 'Giày PS 13', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (13).jpg', 0),
(58, 'Giày PS 14', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (14).jpg', 0),
(59, 'Giày PS 15', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (15).jpg', 0),
(60, 'Giày PS 16', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (16).jpg', 0),
(61, 'Giày PS 17', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (17).jpg', 0),
(62, 'Giày PS 18', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (18).jpg', 0),
(63, 'Giày PS 19', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (19).jpg', 0),
(64, 'Giày PS 20', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (20).jpg', 0),
(65, 'Giày PS 21', 150000, 3, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (21).jpg', 0),
(66, 'Giày PS 01', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (1).jpg', 0),
(67, 'Giày PS 02', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (2).jpg', 0),
(68, 'Giày PS 03', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (3).jpg', 0),
(69, 'Giày PS 04', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (4).jpg', 0),
(70, 'Giày PS 05', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (5).jpg', 0),
(71, 'Giày PS 06', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (6).jpg', 0),
(72, 'Giày PS 07', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (7).jpg', 0),
(73, 'Giày PS 08', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (8).jpg', 0),
(74, 'Giày PS 09', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (9).jpg', 0),
(75, 'Giày PS 10', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (10).jpg', 0),
(76, 'Giày PS 11', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (11).jpg', 0),
(77, 'Giày PS 12', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (12).jpg', 0),
(78, 'Giày PS 13', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (13).jpg', 0),
(79, 'Giày PS 14', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (14).jpg', 0),
(80, 'Giày PS 15', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (15).jpg', 0),
(81, 'Giày PS 16', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (16).jpg', 0),
(82, 'Giày PS 17', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (17).jpg', 0),
(83, 'Giày PS 18', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (18).jpg', 0),
(84, 'Giày PS 19', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (19).jpg', 0),
(85, 'Giày PS 20', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (20).jpg', 0),
(86, 'Giày PS 21', 150000, 4, 'Đây là đôi giày chất lượng và đẹp ^^Bảo hành trọn đời toàn cầu, dù bạn là ai và bạn đi đến đâu :)', 'giay (21).jpg', 0),
(92, 'Sáº£n pháº©m má»›i', 123000, 1, '<p>Trong sá»‘ c&aacute;c &ocirc;ng lá»›n trong l&agrave;ng gi&agrave;y thá»ƒ thao, kh&ocirc;ng thá»ƒ kh&ocirc;ng ká»ƒ t&ecirc;n Adidas &ndash;&nbsp;G&atilde; khá»•ng lá»“ Ä‘áº¿n tá»« Äá»©c v&agrave; cÅ©ng l&agrave; h&atilde;ng gi&agrave;y thá»ƒ thao Ä‘á»©ng thá»© hai tháº¿ giá»›i vá» doanh thu.. Ä&atilde; c&oacute; thá»i Ä‘iá»ƒm Adidas tá» ra tá»¥t háº­u so vá»›i c&aacute;c h&atilde;ng gi&agrave;y thá»ƒ thao kh&aacute;c nhÆ° Nike, Under Armour Inc&hellip; NhÆ°ng hiá»‡n táº¡i h&atilde;ng Ä‘ang c&oacute;&nbsp;sá»± phá»¥c há»“i vá»›i nhá»¯ng máº«u gi&agrave;y má»›i Ä‘Æ°á»£c ra máº¯t nhÆ° :&nbsp;NMD, Tubular, Ultraboost v&agrave; Alphabounce.</p>\r\n\r\n<ul>\r\n	<li><a href="https://ngstore.com.vn/adidas-dat-ky-vong-vao-nhung-mau-giay-moi/">Adidas-dat-ky-vong-vao-nhung-mau-giay-moi</a></li>\r\n</ul>\r\n\r\n<h2>Lá»‹ch sá»­ thÆ°Æ¡ng hiá»‡u Adidas</h2>\r\n\r\n<p>Tiá»n th&acirc;n l&agrave; c&ocirc;ng ty&nbsp;Gebruder Dassler Schuhfabrik, thanh láº­p nÄƒm 1924 bá»Ÿi hai anh em nh&agrave; Dassler. Nhá» há»£p Ä‘á»“ng t&agrave;i trá»£ cho VÄV Ä‘iá»n kinh ngÆ°á»i Má»¹ gá»‘c Phi&nbsp;Jesse Owens, danh tiáº¿ng cá»§a hai anh em nh&agrave; Dassler l&ecirc;n nhu diá»u gáº·p gi&oacute;. TrÆ°á»›c tháº¿ chiáº¿n thá»© hai, c&ocirc;ng ty cá»§a hai anh em nh&agrave; Dassler lu&ocirc;n b&aacute;n Ä‘Æ°á»£c hÆ¡n&nbsp;<em>200.000</em>&nbsp;Ä‘&ocirc;i má»—i nÄƒm.</p>\r\n\r\n<p>Khi chiáº¿n tranh tháº¿ giá»›i thá»© hai diá»…n ra, do c&oacute; nhiá»u quan Ä‘iá»ƒm báº¥t Ä‘á»“ng, Ä‘iá»u Ä‘&oacute; áº£nh hÆ°á»Ÿng ráº¥t nhiá»u Ä‘áº¿n c&ocirc;ng ty, hai anh em nh&agrave; Dassler t&aacute;ch th&agrave;nh 2 c&ocirc;ng ty ri&ecirc;ng. NÄƒm 1948, Rudoft th&agrave;nh láº­p c&ocirc;ng ty Ruda, sau n&agrave;y Ä‘á»•i t&ecirc;n thÆ°Æ¡ng hiá»‡u Puma. C&ograve;n Adoft Ä‘á»•i t&ecirc;n c&ocirc;ng ty cÅ© th&agrave;nh Adidas tá»« nÄƒm 1949. Tuy l&agrave; hai anh em nhÆ°ng há» kinh doanh Ä‘á»™c láº­p v&agrave; lu&ocirc;n trá»Ÿ th&agrave;nh Ä‘á»‘i thá»§ cá»§a nhau tr&ecirc;n thá»‹ trÆ°á»ng.</p>\r\n\r\n<h2>Logo cá»§a Adidas</h2>\r\n\r\n<p>Tá»« nÄƒm 1949 Ä‘áº¿n nay, Adidas c&oacute; 3 logo. Táº¥t cáº£ Ä‘á»u c&oacute; Ä‘iá»ƒm chung l&agrave; 3 sá»c m&agrave;u Ä‘en v&agrave; Ä‘áº¿n nay Ä‘áº·c trÆ°n Ä‘&oacute; lu&ocirc;n cho kh&aacute;ch h&agrave;ng biáº¿t Ä‘Æ°á»£c sáº£n pháº©m Ä‘&oacute; tá»« Adidas.</p>\r\n\r\n<p><img alt="Giá»›i thiá»‡u vá» thÆ°Æ¡ng hiá»‡u giÃ y thá»ƒ thao Adidas" src="https://ngstore.com.vn/wp-content/uploads/2017/06/main-qimg-2d989cda11e5a7ee48d5db1b55155ae0-c.jpeg" style="height:134px; width:560px" /></p>\r\n\r\n<p>Logo Ä‘áº§u ti&ecirc;n Ä‘Æ°á»£c c&ocirc;ng bá»‘ v&agrave;o nÄƒm 1967. Vá»›i biá»ƒu tÆ°á»£ng Ä‘Æ¡n giáº£n l&agrave; 3 sá»c m&agrave;u Ä‘en song song. Nhá» biá»ƒu tÆ°á»£ng g&acirc;y áº¥n tÆ°á»£ng ngay tá»« c&aacute;i nh&igrave;n Ä‘áº§u ti&ecirc;n, thÆ°Æ¡ng hiá»‡u Adidas Ä‘Æ°á»£c biáº¿t Ä‘áº¿n tr&ecirc;n to&agrave;n tháº¿ giá»›i.</p>\r\n\r\n<p>NÄƒm 1971, Adidas thay Ä‘á»•i logo cá»§a m&igrave;nh báº±ng má»™t kiá»ƒu logo ho&agrave;n to&agrave;n má»›i. Thay báº±ng biá»ƒu tÆ°á»£ng 3 sá»c Ä‘Æ¡n giáº£n l&agrave; logo 3 l&aacute; &ndash; The trefoil. Logo Ä‘Æ°á»£c thiáº¿t káº¿ bá»Ÿi ch&iacute;nh vá»‹ CEO cá»§a c&ocirc;ng ty. Hiá»‡n nay, logo n&agrave;y Ä‘Æ°á»£c d&ugrave;ng tr&ecirc;n nhá»¯ng sáº£n pháº©m thá»i trang Adidas Original cá»§a h&atilde;ng.</p>\r\n\r\n<p>NÄƒm 1990, má»™t láº§n ná»¯a Adidas Ä‘á»•i logo. Váº«n h&igrave;nh áº£nh 3 sá»c Ä‘en quen thuá»™c nhÆ°ng Ä‘Æ°á»£c xáº¿p th&agrave;nh h&igrave;nh tam gi&aacute;c. Adidas Ä‘&atilde; giáº£i th&iacute;ch cho biá»ƒu tÆ°á»£ng n&agrave;y ráº±ng, h&igrave;nh tam gi&aacute;c nhÆ° ngá»n n&uacute;i, Ä‘á»ƒ Ä‘áº¡t Ä‘Æ°á»£c vinh quan trong thá»ƒ thao th&igrave; váº­n Ä‘á»™ng vi&ecirc;n cáº§n vÆ°á»£t qua bao kh&oacute; khÄƒn tr&ecirc;n con Ä‘Æ°á»ng áº¥y. Logo n&agrave;y xuáº¥t hiá»‡n tr&ecirc;n táº¥t cáº£ sáº£n pháº©m cá»§a h&atilde;ng.</p>\r\n\r\n<h2>Thá»i k&igrave; ho&agrave;ng kim cá»§a Adidas</h2>\r\n\r\n<p>Nhá»¯ng tháº­p ni&ecirc;n cá»§a tháº¿ ká»‰ 20, Adidas l&agrave; thÆ°Æ¡ng hiá»‡u thá»ƒ thao h&agrave;ng Ä‘áº§u Ä‘á»™c chiáº¿m thá»‹ trÆ°á»ng&nbsp;<em>gi&agrave;y thá»ƒ thao tháº¿ giá»›i</em>. Tháº¿ máº¡nh cá»§a Adidas l&agrave; sáº£n xuáº¥t gi&agrave;y Ä‘iá»n kinh, gi&agrave;y Ä‘&aacute; b&oacute;ng v&agrave; gi&agrave;y b&oacute;ng rá»•.</p>\r\n\r\n<p>Vá»‹ tr&iacute; Ä‘á»™c t&ocirc;n tr&ecirc;n thá»‹ trÆ°á»ng gi&agrave;y cá»§a Adidas kh&ocirc;ng c&ograve;n cháº¯c cháº¯n khi xuáº¥t hiá»‡n thÆ°Æ¡ng hiá»‡u Nike. Chá»‰ trong thá»i gian ngáº¯n, Nike Ä‘&atilde; so&aacute;n ng&ocirc;i cá»§a Adidas vá»›i tá»‘c Ä‘á»™ ph&aacute;t triá»ƒn ch&oacute;ng máº·t.</p>\r\n\r\n<h2>C&ocirc;ng nghá»‡ ti&ecirc;u biá»ƒu</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>C&ocirc;ng nghá»‡ BOOST</h3>\r\n\r\n	<p><img alt="Giá»›i thiá»‡u vá» thÆ°Æ¡ng hiá»‡u giÃ y thá»ƒ thao Adidas" src="https://ngstore.com.vn/wp-content/uploads/2017/06/Boost-800x382.jpg" style="height:382px; width:800px" /></p>\r\n\r\n	<p>Ra máº¯t v&agrave;o nÄƒm 2013, c&ocirc;ng nghá»‡ BOOST l&agrave; sá»± Ä‘á»™t ph&aacute; cá»§a&nbsp;<em>gi&agrave;y thá»ƒ thao</em>. C&ocirc;ng nghá»‡ n&agrave;y khiáº¿n cho Ä‘áº¿ gi&agrave;y &ecirc;m &aacute;i chÆ°a tá»«ng c&oacute;, Ä‘em láº¡i tráº£i nghiá»‡m &ldquo;tr&ecirc;n m&acirc;y&rdquo; cho kh&aacute;ch h&agrave;ng. Má»›i Ä‘&acirc;y nháº¥t, Adidas Ä‘&atilde; cho ra l&ograve; BOOST&trade; tháº¿ há»‡ thá»© hai vá»›i nhá»¯ng cáº£i tiáº¿n vÆ°á»£t báº­c, há»©a háº¹n táº¡o ra má»™t tráº£i nghiá»‡m ho&agrave;n háº£o hÆ¡n ná»¯a .</p>\r\n	</li>\r\n	<li>\r\n	<h3>C&ocirc;ng nghá»‡ Springblade</h3>\r\n\r\n	<p><img alt="Giá»›i thiá»‡u vá» thÆ°Æ¡ng hiá»‡u giÃ y thá»ƒ thao Adidas" src="https://ngstore.com.vn/wp-content/uploads/2017/06/untitled-2144563-685x400.png" style="height:400px; width:685px" /></p>\r\n\r\n	<p>Springblade l&agrave; má»™t loáº¡i gi&agrave;y c&oacute; kháº£ nÄƒng co gi&atilde;n nhá» sá»­ dá»¥ng 16 lÆ°á»¡i Ä‘&agrave;n há»“i Ä‘Æ°á»£c l&agrave;m báº±ng 1 loáº¡i nhá»±a polymer Ä‘á»™c quyá»n gáº¯n&nbsp;á»Ÿ máº·t Ä‘áº¿ gi&uacute;p táº¡o ra 1 lá»±c Ä‘áº©y báº¡n tiáº¿n vá» ph&iacute;a trÆ°á»›c. Cháº¥t liá»‡u n&agrave;y Ä‘á»§ má»m Ä‘á»ƒ kh&ocirc;ng g&acirc;y kh&oacute; chá»‹u cho ngÆ°á»i Ä‘i nhÆ°ng váº«n Ä‘áº£m báº£o Ä‘á»™ bá»n Ä‘á»ƒ kh&ocirc;ng gi&ograve;n vá»¡.</p>\r\n\r\n	<p>Springblade há»©a háº¹n sáº½ Ä‘em láº¡i c&ocirc;ng dá»¥ng nhiá»u nháº¥t cho nhá»¯ng váº­n Ä‘á»™ng vi&ecirc;n c&oacute; khuynh hÆ°á»›ng sá»­ dá»¥ng pháº§n trÆ°á»›c cá»§a ch&acirc;n nhiá»u hÆ¡n, do c&aacute;c Ä‘áº¿ nhá»±a Ä‘Æ°á»£c thiáº¿t káº¿ Ä‘á»ƒ táº¡o lá»±c Ä‘áº©y vá» ph&iacute;a trÆ°á»›c. Ngo&agrave;i ra, n&oacute; cÅ©ng kh&ocirc;ng Ä‘Æ°á»£c thiáº¿t káº¿ tá»‘i Æ°u cho sá»­ dá»¥ng trong c&aacute;c Ä‘iá»u kiá»‡n Ä‘Æ°á»ng m&ograve;n, gá»“ ghá» m&agrave; ph&ugrave; há»£p vá»›i Ä‘Æ°á»ng cháº¡y c&oacute; Ä‘á»‹a h&igrave;nh báº±ng pháº³ng.</p>\r\n	</li>\r\n	<li>\r\n	<h3>Primeknit</h3>\r\n\r\n	<p>Primeknit l&agrave; c&ocirc;ng nghá»‡ Ä‘Æ°á»£c ra máº¯t Ä‘á»ƒ cáº¡nh tranh trá»±c tiáº¿p vá»›i Nike Flyknit. C&ocirc;ng nghá»‡ n&agrave;y cÅ©ng dá»±a tr&ecirc;n nguy&ecirc;n l&yacute; táº¡o ra cáº¥u tr&uacute;c th&acirc;n gi&agrave;y liá»n máº¡ch c&aacute;ch dá»‡t c&aacute;c sá»£i len Ä‘áº·c biá»‡t.</p>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<h3>C&ocirc;ng nghá»‡ kh&aacute;c</h3>\r\n	</li>\r\n</ul>\r\n\r\n<p>Äá»ƒ trá»±c tiáº¿p cáº¡nh tranh vá»›i Nike, Adidas lu&ocirc;n biáº¿t cáº­p nháº­t xu hÆ°á»›ng v&agrave; cáº£i tiáº¿n n&oacute;. Adidas miCoach l&agrave; má»™t v&iacute; dá»¥ Ä‘iá»ƒn h&igrave;nh. Ä&acirc;y l&agrave; má»™t kÄ© thuáº­t ti&ecirc;n tiáº¿n Ä‘Æ°á»£c l&agrave;m ra Ä‘á»ƒ cáº¡nh tranh vá»›i c&ocirc;ng nghá»‡ Nike+. C&ocirc;ng nghá»‡ miCoach n&agrave;y sáº½ theo d&otilde;i v&agrave; Ä‘&aacute;nh gi&aacute; qu&aacute; tr&igrave;nh táº­p luyá»‡n cá»§a VÄV<strong>.</strong></p>\r\n\r\n<p>Sá»± trá»Ÿ láº¡i máº¡nh máº½ cá»§a Adidas c&ugrave;ng vá»›i viá»‡c c&aacute;c&nbsp;<em>h&atilde;ng gi&agrave;y thá»ƒ thao</em>&nbsp;lu&ocirc;n cáº£i tiáº¿n c&ocirc;ng nghá»‡ cá»§a m&igrave;nh th&igrave; nhá»¯ng kh&aacute;ch h&agrave;ng sáº½ c&oacute; th&ecirc;m nhá»¯ng sáº£n pháº©m ho&agrave;n háº£o hÆ¡n khi lá»±a chá»n mua h&agrave;ng. H&atilde;y Ä‘áº¿n ngay vá»›i&nbsp;<a href="https://ngstore.com.vn/">NG Store</a>&nbsp;v&agrave; lá»±a chá»n ngay cho m&igrave;nh má»™t Ä‘&ocirc;i&nbsp;<strong>gi&agrave;y thá»ƒ thao Adidas</strong>&nbsp;Ä‘áº³ng cáº¥p.</p>\r\n', '964468058c3179712698d42891821a4aCapture.PNG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE IF NOT EXISTS `subscribes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `status`) VALUES
(3, 'hongphuoc123456@gmail.com', 'ÄÃ£ xá»­ lÃ½ thÃ´ng tin.'),
(5, 'phuoccute@gmail.com', 'ÄÃ£ xá»­ lÃ½ thÃ´ng tin.'),
(6, 'aaaaaaa@gmail.com', 'ÄÃ£ xá»­ lÃ½ thÃ´ng tin.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `phone`, `email`, `address`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Hồng Phước', '01277260261', 'hongphuoc2597@gmail.com', 'Tp. HCM', 1),
(3, 'phuoccute', 'e10adc3949ba59abbe56e057f20f883e', 'PhÆ°á»›c Cute', '01277260261', 'hongphuoc123456@gmail.com', '236/2 Tháº¡nh BÃ¬nh\r\n236B', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
