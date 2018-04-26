-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2016 at 01:27 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `safaritours`
--
CREATE DATABASE IF NOT EXISTS `safaritours` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `safaritours`;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_people` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arrival_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `package_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hotel_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `address`, `phone`, `number_of_people`, `country`, `arrival_date`, `departure_date`, `confirmed`, `package_id`, `created_at`, `updated_at`, `hotel_category`) VALUES
(8, 'Priya', 'priy@gmail.com', 'kathandu', '887879879', '2', 'nepal', '2015-11-24', '2015-11-26', 1, 19, '2015-11-19 15:44:15', '2016-01-06 07:34:08', '5 star'),
(9, 'Loknath guragain', 'loke@gmail.com', 'lokanthali', '908980980', '5', 'Nepal', '2015-11-22', '2015-11-28', 1, 17, '2015-11-21 11:18:32', '2015-11-25 07:16:05', '5 star');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` tinyint(4) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `file_name_thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file_name`, `status`, `title`, `order`, `description`, `created_at`, `updated_at`, `file_name_thumb`) VALUES
(7, 'uploads/banners/originals/1447959359.banner1.jpg', 1, 'New banner for site', 5, '<p>Nice banner</p>\r\n', '2015-11-19 13:10:59', '2015-11-19 13:10:59', 'uploads/banners/thumbnails/1447959359.banner1.jpg'),
(8, 'uploads/banners/originals/1447959389.banner2.jpg', 1, 'again a banner', 7, '<p>Very good banner</p>\r\n', '2015-11-19 13:11:29', '2015-11-19 13:11:29', 'uploads/banners/thumbnails/1447959389.banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_06_23_100116_create_tbl_admin_users', 1),
('2015_06_23_100253_create_tbl_user_types', 1),
('2015_06_23_100650_create_tbl_user_roles_permissions', 1),
('2015_06_23_100849_create_tbl_permissions', 1),
('2015_06_24_193214_add_remember_token_tbl_admin_users', 1),
('2015_06_25_052850_add_permission_route', 1),
('2015_08_20_171330_pages', 2),
('2015_08_20_175532_create_gallery_table', 3),
('2015_08_23_033853_add_thumb_file_to_gallery_table', 4),
('2015_08_23_083326_create_packages_table', 5),
('2015_11_17_202836_create_foreign_packages_table', 6),
('2015_11_19_050702_create_bookings_table', 7),
('2015_11_19_052032_add_hotel_category_to_bookings', 8),
('2015_11_19_055437_create_package_category', 9),
('2015_11_19_060802_add_package_type_to_packages_table', 10),
('2015_11_19_095405_add_is_featured_in_package', 11),
('2015_11_19_160131_add_description_to_package_category_table', 12),
('2015_11_19_160542_create_news_table', 13),
('2015_11_19_160738_create_testimonials_table', 14),
('2015_11_19_160937_create_services_table', 15),
('2015_11_19_211539_update_service_detail_services', 16);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_detail`, `created_at`, `updated_at`) VALUES
(1, 'Qatar Airways', '<p>Qatar airways have done some good things and this has been fantastic for them in nepal</p>\r\n', '2015-11-19 11:28:15', '2015-11-19 11:57:21'),
(2, 'Nepal Airlines', '<p>Nepal airline have started a flight in mahendranagar</p>\r\n', '2015-11-19 11:28:44', '2015-11-19 11:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package_description` text COLLATE utf8_unicode_ci NOT NULL,
  `package_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `per_person_fare` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `large_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `package_category` int(11) NOT NULL,
  `is_featured` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `package_description`, `package_time`, `per_person_fare`, `large_image`, `thumb_image`, `created_at`, `updated_at`, `package_category`, `is_featured`) VALUES
(17, 'Chitwan Tour', '<p>Nice tour package</p>\r\n', '4 days 5 nights', '1000', 'uploads/packages/originals/1447965364.site-banner-2.jpg', 'uploads/packages/thumbnails/1447965364.site-banner-2.jpg', '2015-11-19 14:51:04', '2015-11-21 11:13:19', 6, '1'),
(18, 'New mankamana tour', '<p>Mankamana tour</p>\r\n', '5 days 6 nights', '4000', 'uploads/packages/originals/1447965408.scene.jpg', 'uploads/packages/thumbnails/1447965408.scene.jpg', '2015-11-19 14:51:49', '2015-11-21 11:11:51', 5, '1'),
(19, 'Hongkong tour package', '<p>nice tour</p>\r\n', '6 days 7 nights', '10000', 'uploads/packages/originals/1447965449.scene.jpg', 'uploads/packages/thumbnails/1447965449.scene.jpg', '2015-11-19 14:52:29', '2015-11-21 11:11:41', 7, '0');

-- --------------------------------------------------------

--
-- Table structure for table `package_category`
--

CREATE TABLE IF NOT EXISTS `package_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `package_category`
--

INSERT INTO `package_category` (`id`, `package_name`, `created_at`, `updated_at`, `category_description`) VALUES
(5, 'Mankamana tour package', '2015-11-19 14:44:10', '2015-11-19 14:44:44', '<p>This is manakamana tour</p>\r\n'),
(6, 'Suklaphata tour package', '2015-11-19 14:44:29', '2015-11-19 14:44:29', '<p>This is suklaphata</p>\r\n'),
(7, 'Hongkong tour package', '2015-11-19 14:45:18', '2015-11-19 14:45:18', '<p>Hongkong is beautiful</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Home', '<p>This is home page and bla bla bla</p>\r\n', '0000-00-00 00:00:00', '2015-08-20 12:03:52'),
(2, 'aboutus', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mollis in dolor ac molestie. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis turpis quis ante dapibus lacinia. Fusce lacinia quis dolor vitae euismod. Etiam pretium suscipit varius. In feugiat, lorem eu sagittis viverra, ante neque pulvinar nisi, sit amet tincidunt ante sem at erat. Nam pulvinar gravida ipsum, nec dapibus libero lacinia at. Sed vestibulum in sem ut elementum. Nam in felis nec risus mattis finibus vel at tortor. Vivamus in tristique enim. Nam sagittis quam at laoreet tempor.</p>\r\n\r\n<p>Vivamus pellentesque nulla eu nulla dapibus fringilla maximus eu orci. Curabitur consectetur dolor quis scelerisque ultricies. Sed sagittis porta lacinia. Fusce sed mattis mauris. Integer feugiat posuere sem, ut ornare arcu. Donec sed nisi justo. Cras at ante lacus.</p>\r\n\r\n<p>Nullam bibendum semper neque, in tincidunt orci elementum posuere. Aliquam imperdiet velit in mauris faucibus lobortis. Proin pretium tincidunt convallis. Donec et consectetur augue. Morbi vitae aliquet lectus. Vestibulum ac dolor in urna interdum luctus nec et orci. Proin sodales, leo quis tincidunt mollis, eros quam mattis urna, quis condimentum felis erat id tortor.</p>\r\n\r\n<p>Curabitur condimentum ante nisi, a semper dui condimentum in. Sed pulvinar diam non elit consequat, et tempus lorem ullamcorper. Nunc ac mi non ante accumsan tristique. In maximus dui id justo tempor, a egestas elit efficitur. Curabitur augue tellus, placerat nec malesuada vitae, maximus vel ex. Sed auctor nisi id posuere consequat. Duis bibendum accumsan velit, ut aliquet felis gravida eget. Mauris sed ligula non nisl blandit condimentum sit amet eget neque. Nulla elementum facilisis ex, a porta lorem. Proin tempus id magna egestas finibus. Nullam posuere id tellus sit amet euismod. Sed posuere metus vel dui lacinia, at ornare nisl mollis. Integer vel orci lacus. Praesent ac sem congue, ultrices nulla et, mollis libero. Suspendisse pellentesque tellus ut velit sagittis dignissim. Proin id finibus enim.</p>\r\n\r\n<p>Vivamus faucibus ante id eros maximus, sit amet gravida libero maximus. Nam hendre</p>\r\n\r\n<p>rit consequat lorem, eu cursus elit rhoncus ac. Donec pharetra, lectus efficitur venenatis aliquet, ligula ex porta lectus, quis porta nunc dui eu est. Vivamus nec felis ut velit venenatis cursus. Mauris fringilla convallis magna, eu scelerisque nisi ullamcorper at. Praesent aliquet turpis eget accumsan semper. Nulla suscipit, erat ac pharetra pharetra, justo tellus auctor eros, ut pharetra ligula turpis in metus. Aenean porta pretium purus a ullamcorper. Integer et lacus facilisis lacus dignissim efficitur. Pellentesque eget sem sapien. Phasellus tortor nisi, tincidunt sit amet accumsan ac, interdum vel mi. Vestibulum quis eleifend nibh, id aliquet dolor. Nunc aliquet posuere posuere.</p>\r\n', '0000-00-00 00:00:00', '2015-08-26 00:00:54'),
(3, 'contactus', 'Contact Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mollis in dolor ac molestie. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis turpis quis ante dapibus lacinia. Fusce lacinia quis dolor vitae euismod. Etiam pretium suscipit varius. In feugiat, lorem eu sagittis viverra, ante neque pulvinar nisi, sit amet tincidunt ante sem at erat. Nam pulvinar gravida ipsum, nec dapibus libero lacinia at. Sed vestibulum in sem ut elementum. Nam in felis nec risus mattis finibus vel at tortor. Vivamus in tristique enim. Nam sagittis quam at laoreet tempor.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mollis in dolor ac molestie. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis turpis quis ante dapibus lacinia. Fusce lacinia quis dolor vitae euismod. Etiam pretium suscipit varius. In feugiat, lorem eu sagittis viverra, ante neque pulvinar nisi, sit amet tincidunt ante sem at erat. Nam pulvinar gravida ipsum, nec dapibus libero lacinia at. Sed vestibulum in sem ut elementum. Nam in felis nec risus mattis finibus vel at tortor. Vivamus in tristique enim. Nam sagittis quam at laoreet tempor.</p>\r\n', '0000-00-00 00:00:00', '2015-08-26 00:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_detail` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_detail`, `created_at`, `updated_at`) VALUES
(1, 'Rent a Car Nepal', '<p>We are from nepal.&nbsp;We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.We are from nepal.</p>\r\n', '2015-11-19 10:51:45', '2015-11-19 15:40:33'),
(2, 'Hotel Reservations', '<p>Lorem ipsum dolor sit amet, affert sanctus deleniti mel et. Cum at sint deserunt, ad quis denique nec, pri te laoreet assentior. Hinc vituperata in sed, ea nam malorum legimus. Gubergren posidonium qui no, ad option regione lucilius eum. Duo blandit constituam cu, ne veritus admodum quaerendum usu, mei ut delenit delicata. Ex est omnes omnesque lucilius.</p>\r\n\r\n<p>Enim labitur minimum ius no, detraxit efficiendi eloquentiam id pri. Ex ius posse delenit indoctum, alienum lucilius te eos. Vix ei euismod percipitur, id erat invidunt antiopam vix, ut probo munere ullamcorper mea. Esse molestiae vel ea, nec ea voluptatum dissentiunt. An error primis qui, ea sed utroque splendide elaboraret, ne est quaeque expetendis. Ridens malorum officiis sed ut, cu sed alia regione.</p>\r\n\r\n<p>Veri erroribus referrentur id nec, sea ei commune atomorum accommodare. Omnis errem est in, facilisi consequat ex vis. Mea ne dicit lucilius efficiendi, zril persecuti at pro, audiam antiopam qui ei. Ad errem constituam mea. An affert offendit necessitatibus usu, cum eu quot ridens imperdiet, mel latine aliquip virtute no. His ut doming meliore petentium, equidem dolores pri te.</p>\r\n\r\n<p>Vim ut percipitur necessitatibus, ad fugit saepe prompta mel. Duo doming senserit ex. Ut odio vidisse ancillae his, cu mei commodo consulatu, ut facilisis explicari quaerendum eos. Ut mea reque nullam gubergren, tractatos sadipscing eu mei, sint prodesset signiferumque in usu.</p>\r\n\r\n<p>Case elitr qualisque vix id. Semper complectitur ius ad, cum regione maiorum appellantur cu. Ne mel aperiri disputando, eu quo erant inimicus. Soleat atomorum dissentias et vis, assum eirmod alterum has ex.</p>\r\n', '2015-11-19 10:54:14', '2015-11-19 15:41:27'),
(3, 'Hunting in Nepal', '<p>NIce hunting in nepal</p>\r\n', '2015-11-19 10:54:33', '2015-11-19 10:54:33'),
(5, 'Nepal Expedition', '<p>This is nepal expedition</p>\r\n', '2015-11-19 10:57:06', '2015-11-19 10:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `user_name`, `password`, `email`, `code`, `user_type_id`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Admin', '$2y$10$MBudpYC0.IUHNQhz0EgbwuxyOlVvtgI8xJ3wCGvZsAB1zIPr./sUC', 'contact.me.manoz@gmail.com', NULL, '1', '0000-00-00 00:00:00', '2016-01-06 07:34:18', '6VhEnydnckV6Htf6tZrIDBndCQyxG0iaVSXom3H7H9046vGAJd1J2HT1JTmc'),
(2, 'AgentBirendra', '$2y$10$0ca4ca0q0T/0.UR0X8YaXeTVX7q5Mh0DzpY2V2BKHfSBTIpMXOksi', 'birendra_malla5@yahoo.com', NULL, '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'Laxmi', '$2y$10$lODq7hkfQy6ZLASpi8OTkuqNOROt044N4LZ45lGFWlAWcJGSvWz3K', 'laxmi@hotmail.com', NULL, '2', '0000-00-00 00:00:00', '2015-11-19 13:48:12', 'KUfT98aO4HgluKKdHmu4yFnXuPdQGfJHABNafE3BplUCRzayp43YW6qIQDTY'),
(5, 'jagdish', '$2y$10$RX7nNPmrkMnaME/4PfboO.xkcZit0UXOEq9ZD8yhU8A6P9TgaA/QK', 'jagdish@gmail.com', NULL, '2', '0000-00-00 00:00:00', '2015-11-19 08:52:44', '3nG8WziJOWZ3gxNdvfa7KwwccaLjVq6MJqas8T6Heskvx3fyUONM9XoTBJzt'),
(6, 'keshab', '$2y$10$WVm.6H4MGv87C1lHjMnY0.EDr2aMURRG7cDyYXn8lWTUWYHcS/NOe', 'keshab@hotmail.com', NULL, '2', '0000-00-00 00:00:00', '2015-11-25 07:17:33', 'WMe6CE5j7hS0nMMz00Js6rNw3q5UEAYcDhqUStRVF4Wp6wGANBErolfHpOqJ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permissions`
--

CREATE TABLE IF NOT EXISTS `tbl_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(11) NOT NULL,
  `permission_route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`id`, `permission_code`, `permission_name`, `display_order`, `permission_route`) VALUES
(1, 'admin_users', 'Users', 1, 'admin_users'),
(2, 'pages_management', 'Pages', 2, 'pages'),
(3, 'gallery_management', 'Banners', 3, 'gallery'),
(4, 'manage_packages', 'Packages', 4, 'packages'),
(6, 'manage_services', 'Services', 6, 'manage_services'),
(7, 'manage_testimonials', 'Testimonials', 7, 'manage_testimonials'),
(8, 'manage_news', 'News', 8, 'manage_news'),
(9, 'manage_feedbacks', 'Feedbacks', 9, 'manage_feedbacks'),
(10, 'manage_bookings', 'Bookings', 10, 'manage_bookings'),
(11, 'manage_package_category', 'Package Category', 11, 'manage_package_category');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_roles_permissions`
--

CREATE TABLE IF NOT EXISTS `tbl_user_roles_permissions` (
  `user_type_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user_roles_permissions`
--

INSERT INTO `tbl_user_roles_permissions` (`user_type_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(2, 2),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_types`
--

CREATE TABLE IF NOT EXISTS `tbl_user_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user_types`
--

INSERT INTO `tbl_user_types` (`id`, `user_type`) VALUES
(1, 'Admin'),
(2, 'Agent');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `testimonial_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `author`, `country`, `testimonial_detail`, `created_at`, `updated_at`) VALUES
(1, 'Manoj Joshi', 'Nepal', '<p>We have so many amazing memories from our time in Nepal. It goes without saying that the mountain scenery was beautiful and we were incredibly lucky.</p>\r\n', '2015-11-19 11:13:32', '2015-11-19 12:19:46'),
(2, 'Rakesh Joshi', 'Nepal', '<p>We have so many amazing memories from our time in Nepal. It goes without saying that the mountain scenery was beautiful and we were incredibly lucky.</p>\r\n', '2015-11-19 11:14:13', '2015-11-19 12:19:57'),
(3, 'Mike Tyson', 'England', '<p>We have so many amazing memories from our time in Nepal. It goes without saying that the mountain scenery was beautiful and we were incredibly lucky.</p>\r\n', '2015-11-19 11:14:41', '2015-11-19 12:20:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
