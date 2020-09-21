-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 11:48 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zagrino_db_1398`
--

-- --------------------------------------------------------

--
-- Table structure for table `zgr_accounts`
--

CREATE TABLE `zgr_accounts` (
  `accounts_id` int(11) NOT NULL,
  `account_fn` text,
  `account_ln` text,
  `account_pass` text,
  `account_email` text,
  `account_mobile` text NOT NULL,
  `account_tell` text,
  `account_codemeli` text,
  `account_codeposti` text,
  `account_address` text,
  `ostan_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `account_active_code` text,
  `account_avatar` text,
  `account_sex` int(11) DEFAULT NULL,
  `account_age` int(11) DEFAULT NULL,
  `account_about` text,
  `register_date` text,
  `update_date` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_accounts`
--

INSERT INTO `zgr_accounts` (`accounts_id`, `account_fn`, `account_ln`, `account_pass`, `account_email`, `account_mobile`, `account_tell`, `account_codemeli`, `account_codeposti`, `account_address`, `ostan_id`, `city_id`, `state_id`, `account_active_code`, `account_avatar`, `account_sex`, `account_age`, `account_about`, `register_date`, `update_date`) VALUES
(1, 'محمد', 'سيف', '$2y$10$NCf9s1Cs8RR9GqiddgrLAOXIz7qjjFZxZXHIp.5KmDIyQTWBtnZ3y', 'dsd', '09192183440', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '', NULL, NULL, NULL, '1588753827', '');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_ads`
--

CREATE TABLE `zgr_ads` (
  `ads_id` int(11) NOT NULL,
  `postion_id` int(11) NOT NULL,
  `ads_title` text NOT NULL,
  `ads_img` text NOT NULL,
  `ads_link` text NOT NULL,
  `price_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `register_date` text NOT NULL,
  `days` int(11) NOT NULL,
  `expire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_ads`
--

INSERT INTO `zgr_ads` (`ads_id`, `postion_id`, `ads_title`, `ads_img`, `ads_link`, `price_id`, `state_id`, `register_date`, `days`, `expire`) VALUES
(1, 2, 'sdsss', '824c9-chrysanthemum.jpg', 'saddsd', 0, 1, '1587279808', 20, ''),
(2, 2, 'dsdsd', 'd1629-jellyfish.jpg', 'dsdsd', 0, 1, '1587279861', 20, '1587366276'),
(3, 3, '', '1b37e-tulips.jpg', 'dsds', 0, 4, '1587281485', 20, '1589009501');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi`
--

CREATE TABLE `zgr_agahi` (
  `agahi_id` int(11) NOT NULL,
  `accounts_id` int(11) DEFAULT NULL,
  `ostan_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `agahi_title` text,
  `agahi_sazeman_title` text,
  `agahi_hoghoghi_or_haghighi` int(11) DEFAULT NULL,
  `tarefe_id` int(11) DEFAULT NULL,
  `agahi_cate_id` int(11) DEFAULT NULL,
  `agahi_sub_cate_id` int(11) DEFAULT NULL,
  `agahi_des` text,
  `agahi_tell` text,
  `agahi_latitude` text,
  `agahi_longitude` text,
  `agahi_cond_tag_id` int(11) DEFAULT NULL,
  `agahi_address` text,
  `agahi_full_des` text,
  `agahi_email` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
  `price_id` text,
  `state_id` int(11) DEFAULT NULL,
  `agahi_state_kala_id` int(11) DEFAULT NULL,
  `register_date` text,
  `update_date` text,
  `days` int(11) NOT NULL,
  `expire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi`
--

INSERT INTO `zgr_agahi` (`agahi_id`, `accounts_id`, `ostan_id`, `city_id`, `agahi_title`, `agahi_sazeman_title`, `agahi_hoghoghi_or_haghighi`, `tarefe_id`, `agahi_cate_id`, `agahi_sub_cate_id`, `agahi_des`, `agahi_tell`, `agahi_latitude`, `agahi_longitude`, `agahi_cond_tag_id`, `agahi_address`, `agahi_full_des`, `agahi_email`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `price_id`, `state_id`, `agahi_state_kala_id`, `register_date`, `update_date`, `days`, `expire`) VALUES
(1, 1, 30, 421, '<p>\n	عنوان این آگهی تست می باشد</p>\n', '<p>\n	عنوان این آگهی تست می باشد</p>\n', NULL, NULL, 1, 1, '<p>\n	عنوان این آگهی تست می باشد</p>\n', '<p>\n	عنوان این آگهی تست می باشد</p>\n', '33.89621114574323', '48.750954837035195', 1, '<p>\n	عنوان این آگهی تست می باشد</p>\n', '<p>\n	عنوان این آگهی تست می باشد</p>\n', '<p>\n	عنوان این آگهی تست می باشد</p>\n', 'c4e58-12127-lighthouse.jpg', '633f9-61b90-flower-729514_1280.jpg', '6adb5-17c59-jellyfish.jpg', 'afd30-9d5a2-penguins.jpg', 'caa99-c32ea-summer-192179_1280.jpg', 'caa99-c32ea-summer-192179_1280.jpg', NULL, 3, NULL, '1600429424', NULL, 30, '1603021556');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_amlak`
--

CREATE TABLE `zgr_agahi_amlak` (
  `agahi_amlak_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `amlak_cate_id` int(11) NOT NULL,
  `amlak_tag_id` int(11) NOT NULL,
  `amlak_cond_tag_id` int(11) NOT NULL,
  `amlak_price` text NOT NULL,
  `amlak_des` text NOT NULL,
  `amlak_bonga_title` text NOT NULL,
  `amlak_agahi_dahande` text NOT NULL,
  `amlak_sanad_state` text NOT NULL,
  `amlak_mizan_malekiat` text NOT NULL,
  `amlak_metraj` text NOT NULL,
  `amlak_sanad_type` text NOT NULL,
  `amlak_full_des` text NOT NULL,
  `amlak_ejare_price` text NOT NULL,
  `amlak_rahn_price` text NOT NULL,
  `amlak_count_room` text NOT NULL,
  `amlak_tabaghe` text NOT NULL,
  `amlak_parking` text NOT NULL,
  `amlak_emtiaz` text NOT NULL,
  `amlak_anbari` text NOT NULL,
  `amlak_asansor` text NOT NULL,
  `amlak_address` text NOT NULL,
  `amlak_lat` text NOT NULL,
  `amlak_long` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  `register_date` text NOT NULL,
  `update_date` text NOT NULL,
  `expire` text NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_amlak`
--

INSERT INTO `zgr_agahi_amlak` (`agahi_amlak_id`, `accounts_id`, `ostan_id`, `city_id`, `amlak_cate_id`, `amlak_tag_id`, `amlak_cond_tag_id`, `amlak_price`, `amlak_des`, `amlak_bonga_title`, `amlak_agahi_dahande`, `amlak_sanad_state`, `amlak_mizan_malekiat`, `amlak_metraj`, `amlak_sanad_type`, `amlak_full_des`, `amlak_ejare_price`, `amlak_rahn_price`, `amlak_count_room`, `amlak_tabaghe`, `amlak_parking`, `amlak_emtiaz`, `amlak_anbari`, `amlak_asansor`, `amlak_address`, `amlak_lat`, `amlak_long`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `state_id`, `price_id`, `register_date`, `update_date`, `expire`, `days`) VALUES
(1, 1, 4, 61, 2, 0, 0, '60000000000', 'املاك', 'املاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاك', 'املاك', 'املاك', 'املاك', 'املاك', 'املاك', '<p>\n	املاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاك</p>\n', '300000', '2222222', '6', '5', 'دارد', 'برق آب گاز تلفن', 'داذد', 'دارد', '<p>\n	املاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاك</p>\n', '', '', '8b6fd-tulips.jpg', '358ce-penguins.jpg', '7d633-beautiful-701678_1280.jpg', '71f44-jellyfish.jpg', '59562-chrysanthemum.jpg', 'b4b13-hydrangeas.jpg', 3, 0, '1587800383', '', '1590392476', 30);

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_car`
--

CREATE TABLE `zgr_agahi_car` (
  `agahi_car_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `agahi_car_title` text NOT NULL,
  `car_cate_id` int(11) DEFAULT NULL,
  `car_sub_cate_id` int(11) DEFAULT NULL,
  `car_tag_id` int(11) DEFAULT NULL,
  `car_cond_tag_id` int(11) DEFAULT NULL,
  `agahi_car_price` text,
  `agahi_car_full_des` text,
  `agahi_car_tell` text,
  `agahi_car_address` text,
  `agahi_car_year` text,
  `car_type_id` int(11) DEFAULT NULL,
  `car_body_id` int(11) DEFAULT NULL,
  `agahi_car_karked` text,
  `car_state_id` int(11) DEFAULT NULL,
  `car_sokht_id` int(11) DEFAULT NULL,
  `agahi_car_pelak` text,
  `agahi_car_color` int(11) DEFAULT NULL,
  `agahi_car_body_des` text,
  `agahi_car_motor_des` text,
  `register_date` text NOT NULL,
  `update_date` text NOT NULL,
  `agahi_car_lat` text NOT NULL,
  `agahi_car_long` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
  `price_id` int(11) DEFAULT NULL,
  `agahi_rule_check` tinyint(1) DEFAULT NULL,
  `expire` text,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_cate`
--

CREATE TABLE `zgr_agahi_cate` (
  `agahi_cate_id` int(11) NOT NULL,
  `agahi_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_cate`
--

INSERT INTO `zgr_agahi_cate` (`agahi_cate_id`, `agahi_cate_title`) VALUES
(1, 'وسايل الكتريكي');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_cond_tag`
--

CREATE TABLE `zgr_agahi_cond_tag` (
  `agahi_cond_tag_id` int(11) NOT NULL,
  `agahi_cond_tag_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_cond_tag`
--

INSERT INTO `zgr_agahi_cond_tag` (`agahi_cond_tag_id`, `agahi_cond_tag_title`) VALUES
(1, 'فوری');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_images`
--

CREATE TABLE `zgr_agahi_images` (
  `agahi_image_id` int(11) NOT NULL,
  `agahi_id` int(11) NOT NULL,
  `agahi_image_url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_message`
--

CREATE TABLE `zgr_agahi_message` (
  `message_id` int(11) NOT NULL,
  `agahi_id` int(11) NOT NULL,
  `message_email` text NOT NULL,
  `message_text` text NOT NULL,
  `message_mobile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_state_kala`
--

CREATE TABLE `zgr_agahi_state_kala` (
  `agahi_state_kala_id` int(11) NOT NULL,
  `agahi_state_kala_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_state_kala`
--

INSERT INTO `zgr_agahi_state_kala` (`agahi_state_kala_id`, `agahi_state_kala_title`) VALUES
(1, 'در حال فروش');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_sub_cate`
--

CREATE TABLE `zgr_agahi_sub_cate` (
  `agahi_sub_cate_id` int(11) NOT NULL,
  `agahi_cate_id` int(11) NOT NULL,
  `agahi_sub_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_sub_cate`
--

INSERT INTO `zgr_agahi_sub_cate` (`agahi_sub_cate_id`, `agahi_cate_id`, `agahi_sub_cate_title`) VALUES
(1, 1, 'رايانه');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_tarefe`
--

CREATE TABLE `zgr_agahi_tarefe` (
  `agahi_tarefe_id` int(11) NOT NULL,
  `agahi_tarefe_title` text NOT NULL,
  `agahi_tarefe_price` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_tarefe`
--

INSERT INTO `zgr_agahi_tarefe` (`agahi_tarefe_id`, `agahi_tarefe_title`, `agahi_tarefe_price`) VALUES
(1, 'تعرفه نمایش', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_amlak_cate`
--

CREATE TABLE `zgr_amlak_cate` (
  `amlak_cate_id` int(11) NOT NULL,
  `amlak_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_amlak_cate`
--

INSERT INTO `zgr_amlak_cate` (`amlak_cate_id`, `amlak_cate_title`) VALUES
(1, 'آپارتمان'),
(2, 'ويلايي');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_amlak_cond_tag`
--

CREATE TABLE `zgr_amlak_cond_tag` (
  `amlak_cond_tag_id` int(11) NOT NULL,
  `amlak_cond_tag_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_amlak_tag`
--

CREATE TABLE `zgr_amlak_tag` (
  `amlak_tag_id` int(11) NOT NULL,
  `amlak_tag_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_body`
--

CREATE TABLE `zgr_car_body` (
  `car_body_id` int(11) NOT NULL,
  `car_body_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_cate`
--

CREATE TABLE `zgr_car_cate` (
  `car_cate_id` int(11) NOT NULL,
  `car_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_cond_tag`
--

CREATE TABLE `zgr_car_cond_tag` (
  `car_cond_tag_id` int(11) NOT NULL,
  `car_cond_tag_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_sokht`
--

CREATE TABLE `zgr_car_sokht` (
  `car_sokht_id` int(11) NOT NULL,
  `car_sokht_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_state`
--

CREATE TABLE `zgr_car_state` (
  `car_state_id` int(11) NOT NULL,
  `car_state_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_sub_cate`
--

CREATE TABLE `zgr_car_sub_cate` (
  `car_sub_cate_id` int(11) NOT NULL,
  `car_cate_id` int(11) NOT NULL,
  `car_sub_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_tag`
--

CREATE TABLE `zgr_car_tag` (
  `car_tag_id` int(11) NOT NULL,
  `car_tag_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_type`
--

CREATE TABLE `zgr_car_type` (
  `car_type_id` int(11) NOT NULL,
  `car_type_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_category`
--

CREATE TABLE `zgr_category` (
  `category_id` int(11) NOT NULL,
  `category_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_city`
--

CREATE TABLE `zgr_city` (
  `city_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_city`
--

INSERT INTO `zgr_city` (`city_id`, `ostan_id`, `city_title`) VALUES
(1, 1, 'تبريز'),
(2, 1, 'كندوان'),
(3, 1, 'بندر شرفخانه'),
(4, 1, 'مراغه'),
(5, 1, 'ميانه'),
(6, 1, 'شبستر'),
(7, 1, 'مرند'),
(8, 1, 'جلفا'),
(9, 1, 'سراب'),
(10, 1, 'هاديشهر'),
(11, 1, 'بناب'),
(12, 1, 'كليبر'),
(13, 1, 'تسوج'),
(14, 1, 'اهر'),
(15, 1, 'هريس'),
(16, 1, 'عجبشير'),
(17, 1, 'هشترود'),
(18, 1, 'ملكان'),
(19, 1, 'بستان آباد'),
(20, 1, 'ورزقان'),
(21, 1, 'اسكو'),
(22, 1, 'آذر شهر'),
(23, 1, 'قره آغاج'),
(24, 1, 'ممقان'),
(25, 1, 'صوفیان'),
(26, 1, 'ایلخچی'),
(27, 1, 'خسروشهر'),
(28, 1, 'باسمنج'),
(29, 1, 'سهند'),
(30, 2, 'اروميه'),
(31, 2, 'نقده'),
(32, 2, 'ماكو'),
(33, 2, 'تكاب'),
(34, 2, 'خوي'),
(35, 2, 'مهاباد'),
(36, 2, 'سر دشت'),
(37, 2, 'چالدران'),
(38, 2, 'بوكان'),
(39, 2, 'مياندوآب'),
(40, 2, 'سلماس'),
(41, 2, 'شاهين دژ'),
(42, 2, 'پيرانشهر'),
(43, 2, 'سيه چشمه'),
(44, 2, 'اشنويه'),
(45, 2, 'چایپاره'),
(46, 2, 'پلدشت'),
(47, 2, 'شوط'),
(48, 3, 'اردبيل'),
(49, 3, 'سرعين'),
(50, 3, 'بيله سوار'),
(51, 3, 'پارس آباد'),
(52, 3, 'خلخال'),
(53, 3, 'مشگين شهر'),
(54, 3, 'مغان'),
(55, 3, 'نمين'),
(56, 3, 'نير'),
(57, 3, 'كوثر'),
(58, 3, 'كيوي'),
(59, 3, 'گرمي'),
(60, 4, 'اصفهان'),
(61, 4, 'فريدن'),
(62, 4, 'فريدون شهر'),
(63, 4, 'فلاورجان'),
(64, 4, 'گلپايگان'),
(65, 4, 'دهاقان'),
(66, 4, 'نطنز'),
(67, 4, 'نايين'),
(68, 4, 'تيران'),
(69, 4, 'كاشان'),
(70, 4, 'فولاد شهر'),
(71, 4, 'اردستان'),
(72, 4, 'سميرم'),
(73, 4, 'درچه'),
(74, 4, 'کوهپایه'),
(75, 4, 'مباركه'),
(76, 4, 'شهرضا'),
(77, 4, 'خميني شهر'),
(78, 4, 'شاهين شهر'),
(79, 4, 'نجف آباد'),
(80, 4, 'دولت آباد'),
(81, 4, 'زرين شهر'),
(82, 4, 'آران و بيدگل'),
(83, 4, 'باغ بهادران'),
(84, 4, 'خوانسار'),
(85, 4, 'مهردشت'),
(86, 4, 'علويجه'),
(87, 4, 'عسگران'),
(88, 4, 'نهضت آباد'),
(89, 4, 'حاجي آباد'),
(90, 4, 'تودشک'),
(91, 4, 'ورزنه'),
(92, 6, 'ايلام'),
(93, 6, 'مهران'),
(94, 6, 'دهلران'),
(95, 6, 'آبدانان'),
(96, 6, 'شيروان چرداول'),
(97, 6, 'دره شهر'),
(98, 6, 'ايوان'),
(99, 6, 'سرابله'),
(100, 7, 'بوشهر'),
(101, 7, 'تنگستان'),
(102, 7, 'دشتستان'),
(103, 7, 'دير'),
(104, 7, 'ديلم'),
(105, 7, 'كنگان'),
(106, 7, 'گناوه'),
(107, 7, 'ريشهر'),
(108, 7, 'دشتي'),
(109, 7, 'خورموج'),
(110, 7, 'اهرم'),
(111, 7, 'برازجان'),
(112, 7, 'خارك'),
(113, 7, 'جم'),
(114, 7, 'کاکی'),
(115, 7, 'عسلویه'),
(116, 7, 'بردخون'),
(117, 8, 'تهران'),
(118, 8, 'ورامين'),
(119, 8, 'فيروزكوه'),
(120, 8, 'ري'),
(121, 8, 'دماوند'),
(122, 8, 'اسلامشهر'),
(123, 8, 'رودهن'),
(124, 8, 'لواسان'),
(125, 8, 'بومهن'),
(126, 8, 'تجريش'),
(127, 8, 'فشم'),
(128, 8, 'كهريزك'),
(129, 8, 'پاكدشت'),
(130, 8, 'چهاردانگه'),
(131, 8, 'شريف آباد'),
(132, 8, 'قرچك'),
(133, 8, 'باقرشهر'),
(134, 8, 'شهريار'),
(135, 8, 'رباط كريم'),
(136, 8, 'قدس'),
(137, 8, 'ملارد'),
(138, 9, 'شهركرد'),
(139, 9, 'فارسان'),
(140, 9, 'بروجن'),
(141, 9, 'چلگرد'),
(142, 9, 'اردل'),
(143, 9, 'لردگان'),
(144, 9, 'سامان'),
(145, 10, 'قائن'),
(146, 10, 'فردوس'),
(147, 10, 'بيرجند'),
(148, 10, 'نهبندان'),
(149, 10, 'سربيشه'),
(150, 10, 'طبس مسینا'),
(151, 10, 'قهستان'),
(152, 10, 'درمیان'),
(153, 11, 'مشهد'),
(154, 11, 'نيشابور'),
(155, 11, 'سبزوار'),
(156, 11, 'كاشمر'),
(157, 11, 'گناباد'),
(158, 11, 'طبس'),
(159, 11, 'تربت حيدريه'),
(160, 11, 'خواف'),
(161, 11, 'تربت جام'),
(162, 11, 'تايباد'),
(163, 11, 'قوچان'),
(164, 11, 'سرخس'),
(165, 11, 'بردسكن'),
(166, 11, 'فريمان'),
(167, 11, 'چناران'),
(168, 11, 'درگز'),
(169, 11, 'كلات'),
(170, 11, 'طرقبه'),
(171, 11, 'سر ولایت'),
(172, 12, 'بجنورد'),
(173, 12, 'اسفراين'),
(174, 12, 'جاجرم'),
(175, 12, 'شيروان'),
(176, 12, 'آشخانه'),
(177, 12, 'گرمه'),
(178, 12, 'ساروج'),
(179, 13, 'اهواز'),
(180, 13, 'ايرانشهر'),
(181, 13, 'شوش'),
(182, 13, 'آبادان'),
(183, 13, 'خرمشهر'),
(184, 13, 'مسجد سليمان'),
(185, 13, 'ايذه'),
(186, 13, 'شوشتر'),
(187, 13, 'انديمشك'),
(188, 13, 'سوسنگرد'),
(189, 13, 'هويزه'),
(190, 13, 'دزفول'),
(191, 13, 'شادگان'),
(192, 13, 'بندر ماهشهر'),
(193, 13, 'بندر امام خميني'),
(194, 13, 'اميديه'),
(195, 13, 'بهبهان'),
(196, 13, 'رامهرمز'),
(197, 13, 'باغ ملك'),
(198, 13, 'هنديجان'),
(199, 13, 'لالي'),
(200, 13, 'رامشیر'),
(201, 13, 'حمیدیه'),
(202, 13, 'دغاغله'),
(203, 13, 'ملاثانی'),
(204, 13, 'شادگان'),
(205, 13, 'ویسی'),
(206, 14, 'زنجان'),
(207, 14, 'ابهر'),
(208, 14, 'خدابنده'),
(209, 14, 'كارم'),
(210, 14, 'ماهنشان'),
(211, 14, 'خرمدره'),
(212, 14, 'ايجرود'),
(213, 14, 'زرين آباد'),
(214, 14, 'آب بر'),
(215, 14, 'قيدار'),
(216, 15, 'سمنان'),
(217, 15, 'شاهرود'),
(218, 15, 'گرمسار'),
(219, 15, 'ايوانكي'),
(220, 15, 'دامغان'),
(221, 15, 'بسطام'),
(222, 16, 'زاهدان'),
(223, 16, 'چابهار'),
(224, 16, 'خاش'),
(225, 16, 'سراوان'),
(226, 16, 'زابل'),
(227, 16, 'سرباز'),
(228, 16, 'نيكشهر'),
(229, 16, 'ايرانشهر'),
(230, 16, 'راسك'),
(231, 16, 'ميرجاوه'),
(232, 17, 'شيراز'),
(233, 17, 'اقليد'),
(234, 17, 'داراب'),
(235, 17, 'فسا'),
(236, 17, 'مرودشت'),
(237, 17, 'خرم بيد'),
(238, 17, 'آباده'),
(239, 17, 'كازرون'),
(240, 17, 'ممسني'),
(241, 17, 'سپيدان'),
(242, 17, 'لار'),
(243, 17, 'فيروز آباد'),
(244, 17, 'جهرم'),
(245, 17, 'ني ريز'),
(246, 17, 'استهبان'),
(247, 17, 'لامرد'),
(248, 17, 'مهر'),
(249, 17, 'حاجي آباد'),
(250, 17, 'نورآباد'),
(251, 17, 'اردكان'),
(252, 17, 'صفاشهر'),
(253, 17, 'ارسنجان'),
(254, 17, 'قيروكارزين'),
(255, 17, 'سوريان'),
(256, 17, 'فراشبند'),
(257, 17, 'سروستان'),
(258, 17, 'ارژن'),
(259, 17, 'گويم'),
(260, 17, 'داريون'),
(261, 17, 'زرقان'),
(262, 17, 'خان زنیان'),
(263, 17, 'کوار'),
(264, 17, 'ده بید'),
(265, 17, 'باب انار/خفر'),
(266, 17, 'بوانات'),
(267, 17, 'خرامه'),
(268, 17, 'خنج'),
(269, 17, 'سیاخ دارنگون'),
(270, 18, 'قزوين'),
(271, 18, 'تاكستان'),
(272, 18, 'آبيك'),
(273, 18, 'بوئين زهرا'),
(274, 19, 'قم'),
(275, 5, 'طالقان'),
(276, 5, 'نظرآباد'),
(277, 5, 'اشتهارد'),
(278, 5, 'هشتگرد'),
(279, 5, 'كن'),
(280, 5, 'آسارا'),
(281, 5, 'شهرک گلستان'),
(282, 5, 'اندیشه'),
(283, 5, 'كرج'),
(284, 5, 'نظر آباد'),
(285, 5, 'گوهردشت'),
(286, 5, 'ماهدشت'),
(287, 5, 'مشکین دشت'),
(288, 20, 'سنندج'),
(289, 20, 'ديواندره'),
(290, 20, 'بانه'),
(291, 20, 'بيجار'),
(292, 20, 'سقز'),
(293, 20, 'كامياران'),
(294, 20, 'قروه'),
(295, 20, 'مريوان'),
(296, 20, 'صلوات آباد'),
(297, 20, 'حسن آباد'),
(298, 21, 'كرمان'),
(299, 21, 'راور'),
(300, 21, 'بابك'),
(301, 21, 'انار'),
(302, 21, 'کوهبنان'),
(303, 21, 'رفسنجان'),
(304, 21, 'بافت'),
(305, 21, 'سيرجان'),
(306, 21, 'كهنوج'),
(307, 21, 'زرند'),
(308, 21, 'بم'),
(309, 21, 'جيرفت'),
(310, 21, 'بردسير'),
(311, 22, 'كرمانشاه'),
(312, 22, 'اسلام آباد غرب'),
(313, 22, 'سر پل ذهاب'),
(314, 22, 'كنگاور'),
(315, 22, 'سنقر'),
(316, 22, 'قصر شيرين'),
(317, 22, 'گيلان غرب'),
(318, 22, 'هرسين'),
(319, 22, 'صحنه'),
(320, 22, 'پاوه'),
(321, 22, 'جوانرود'),
(322, 22, 'شاهو'),
(323, 23, 'ياسوج'),
(324, 23, 'گچساران'),
(325, 23, 'دنا'),
(326, 23, 'دوگنبدان'),
(327, 23, 'سي سخت'),
(328, 23, 'دهدشت'),
(329, 23, 'ليكك'),
(330, 24, 'گرگان'),
(331, 24, 'آق قلا'),
(332, 24, 'گنبد كاووس'),
(333, 24, 'علي آباد كتول'),
(334, 24, 'مينو دشت'),
(335, 24, 'تركمن'),
(336, 24, 'كردكوي'),
(337, 24, 'بندر گز'),
(338, 24, 'كلاله'),
(339, 24, 'آزاد شهر'),
(340, 24, 'راميان'),
(341, 25, 'رشت'),
(342, 25, 'منجيل'),
(343, 25, 'لنگرود'),
(344, 25, 'رود سر'),
(345, 25, 'تالش'),
(346, 25, 'آستارا'),
(347, 25, 'ماسوله'),
(348, 25, 'آستانه اشرفيه'),
(349, 25, 'رودبار'),
(350, 25, 'فومن'),
(351, 25, 'صومعه سرا'),
(352, 25, 'بندرانزلي'),
(353, 25, 'كلاچاي'),
(354, 25, 'هشتپر'),
(355, 25, 'رضوان شهر'),
(356, 25, 'ماسال'),
(357, 25, 'شفت'),
(358, 25, 'سياهكل'),
(359, 25, 'املش'),
(360, 25, 'لاهیجان'),
(361, 25, 'خشک بيجار'),
(362, 25, 'خمام'),
(363, 25, 'لشت نشا'),
(364, 25, 'بندر کياشهر'),
(365, 26, 'خرم آباد'),
(366, 26, 'ماهشهر'),
(367, 26, 'دزفول'),
(368, 26, 'بروجرد'),
(369, 26, 'دورود'),
(370, 26, 'اليگودرز'),
(371, 26, 'ازنا'),
(372, 26, 'نور آباد'),
(373, 26, 'كوهدشت'),
(374, 26, 'الشتر'),
(375, 26, 'پلدختر'),
(376, 27, 'ساري'),
(377, 27, 'آمل'),
(378, 27, 'بابل'),
(379, 27, 'بابلسر'),
(380, 27, 'بهشهر'),
(381, 27, 'تنكابن'),
(382, 27, 'جويبار'),
(383, 27, 'چالوس'),
(384, 27, 'رامسر'),
(385, 27, 'سواد كوه'),
(386, 27, 'قائم شهر'),
(387, 27, 'نكا'),
(388, 27, 'نور'),
(389, 27, 'بلده'),
(390, 27, 'نوشهر'),
(391, 27, 'پل سفيد'),
(392, 27, 'محمود آباد'),
(393, 27, 'فريدون كنار'),
(394, 28, 'اراك'),
(395, 28, 'آشتيان'),
(396, 28, 'تفرش'),
(397, 28, 'خمين'),
(398, 28, 'دليجان'),
(399, 28, 'ساوه'),
(400, 28, 'سربند'),
(401, 28, 'محلات'),
(402, 28, 'شازند'),
(403, 29, 'بندرعباس'),
(404, 29, 'قشم'),
(405, 29, 'كيش'),
(406, 29, 'بندر لنگه'),
(407, 29, 'بستك'),
(408, 29, 'حاجي آباد'),
(409, 29, 'دهبارز'),
(410, 29, 'انگهران'),
(411, 29, 'ميناب'),
(412, 29, 'ابوموسي'),
(413, 29, 'بندر جاسك'),
(414, 29, 'تنب بزرگ'),
(415, 29, 'بندر خمیر'),
(416, 29, 'پارسیان'),
(417, 29, 'قشم'),
(418, 30, 'همدان'),
(419, 30, 'ملاير'),
(420, 30, 'تويسركان'),
(421, 30, 'نهاوند'),
(422, 30, 'كبودر اهنگ'),
(423, 30, 'رزن'),
(424, 30, 'اسدآباد'),
(425, 30, 'بهار'),
(426, 31, 'يزد'),
(427, 31, 'تفت'),
(428, 31, 'اردكان'),
(429, 31, 'ابركوه'),
(430, 31, 'ميبد'),
(431, 31, 'طبس'),
(432, 31, 'بافق'),
(433, 31, 'مهريز'),
(434, 31, 'اشكذر'),
(435, 31, 'هرات'),
(436, 31, 'خضرآباد'),
(437, 31, 'شاهديه'),
(438, 31, 'حمیدیه شهر'),
(439, 31, 'سید میرزا'),
(440, 31, 'زارچ');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_eghamatgah`
--

CREATE TABLE `zgr_eghamatgah` (
  `eghamatgah_id` int(11) NOT NULL,
  `accounts_id` text NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `eghamatgah_title` text NOT NULL,
  `eghamatgah_des` text NOT NULL,
  `eghamatgah_tabaghe` int(11) NOT NULL,
  `eghamatgah_type` text NOT NULL,
  `eghamatgah_otagh` int(11) NOT NULL,
  `eghamatgah_conditions` text NOT NULL,
  `eghamatgah_takht` int(11) NOT NULL,
  `eghamatgah_tahvil` text NOT NULL,
  `eghamatgah_takhlie` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `logo` text NOT NULL,
  `eghamatgah_address` text NOT NULL,
  `eghamatgah_telephone` text NOT NULL,
  `jobs_service_id` int(11) NOT NULL,
  `map_latitude` text NOT NULL,
  `map_longitude` text NOT NULL,
  `eghamatgah_email` text NOT NULL,
  `price_id` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `register_date` text NOT NULL,
  `update_date` text NOT NULL,
  `days` int(11) NOT NULL,
  `expire` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_events`
--

CREATE TABLE `zgr_events` (
  `events_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `events_owner` text NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `events_title` text NOT NULL,
  `events_dec` text NOT NULL,
  `events_start` text NOT NULL,
  `events_finish` text NOT NULL,
  `events_type_id` int(11) NOT NULL,
  `events_run_id` int(11) NOT NULL,
  `events_capacity` text NOT NULL,
  `events_level_id` int(11) NOT NULL,
  `events_pro_dec` text NOT NULL,
  `events_conditons` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `events_logo` text NOT NULL,
  `events_poster` text NOT NULL,
  `events_clip` text NOT NULL,
  `events_link_site` text NOT NULL,
  `events_email` text NOT NULL,
  `events_instagram` text NOT NULL,
  `events_address` text NOT NULL,
  `map_latitude` text NOT NULL,
  `map_longitude` text NOT NULL,
  `register_date` text NOT NULL,
  `update_date` text NOT NULL,
  `price_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `expire` text NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_events_level`
--

CREATE TABLE `zgr_events_level` (
  `events_level_id` int(11) NOT NULL,
  `events_level_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_events_run`
--

CREATE TABLE `zgr_events_run` (
  `events_run_id` int(11) NOT NULL,
  `events_run_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_events_run`
--

INSERT INTO `zgr_events_run` (`events_run_id`, `events_run_title`) VALUES
(1, 'حضوري'),
(2, 'غير حضوري');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_events_type`
--

CREATE TABLE `zgr_events_type` (
  `events_type_id` int(11) NOT NULL,
  `events_type_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_events_type`
--

INSERT INTO `zgr_events_type` (`events_type_id`, `events_type_title`) VALUES
(1, 'سازماني');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_footer_menu`
--

CREATE TABLE `zgr_footer_menu` (
  `footer_menu_id` int(11) NOT NULL,
  `footer_menu_title` text NOT NULL,
  `footer_menu_link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_footer_menu`
--

INSERT INTO `zgr_footer_menu` (`footer_menu_id`, `footer_menu_title`, `footer_menu_link`) VALUES
(1, 'همكاري با زاگرينو', 'http://localhost/zagrino/Index'),
(2, 'قوانين و مقررات', 'http://localhost/zagrino/Index'),
(4, 'سوالات متداول', 'http://localhost/zagrino/Index'),
(5, 'راهنماي استفاده از خدمات', 'http://localhost/zagrino/Index'),
(6, 'تعرفه تبليغات', 'http://localhost/zagrino/Index');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_gardeshgari`
--

CREATE TABLE `zgr_gardeshgari` (
  `gardeshgari_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `gardeshgari_title` text NOT NULL,
  `gardeshgari_des` text NOT NULL,
  `gardeshgari_ghedmat` text NOT NULL,
  `gardeshgari_creator` text NOT NULL,
  `gardeshgari_conditons` text NOT NULL,
  `gardeshgari_best_time` text NOT NULL,
  `gardeshgari_need_time_view` text NOT NULL,
  `gardeshgari_address` text NOT NULL,
  `jobs_service_id` int(11) NOT NULL,
  `map_latitude` text NOT NULL,
  `map_longitude` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `register_date` text NOT NULL,
  `update_date` text NOT NULL,
  `price_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `expire` text NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_groups`
--

CREATE TABLE `zgr_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_groups`
--

INSERT INTO `zgr_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_jobs`
--

CREATE TABLE `zgr_jobs` (
  `jobs_id` int(11) NOT NULL,
  `jobs_cate_id` int(11) NOT NULL,
  `jobs_sub_cate_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `jobs_title` text,
  `jobs_shobe` text,
  `jobs_content` text,
  `jobs_feature` text,
  `jobs_work_titme` text,
  `jobs_mobile` text,
  `jobs_tell` text,
  `jobs_fax` text,
  `jobs_email` text,
  `jobs_code_posti` text,
  `jobs_website` text,
  `jobs_instagram` text,
  `jobs_telegram` text,
  `jobs_whatsapp` text,
  `jobs_facebook` text,
  `jobs_tw` text,
  `jobs_pinterest` text,
  `jobs_youtube` text,
  `jobs_address` text,
  `jobs_latitude` text,
  `jobs_longitude` text,
  `jobs_count_namayandegi` int(11) DEFAULT NULL,
  `jobs_count_namayandegi_in_city` int(11) DEFAULT NULL,
  `jobs_sharayet` text,
  `jobs_list_service` text,
  `jobs_service_id` int(11) DEFAULT NULL,
  `jobs_mojavez` text,
  `jobs_video` text,
  `register_date` text,
  `update_date` text,
  `jobs_logo` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `jobs_shoar` text,
  `price_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `expire` text NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_jobs`
--

INSERT INTO `zgr_jobs` (`jobs_id`, `jobs_cate_id`, `jobs_sub_cate_id`, `accounts_id`, `ostan_id`, `city_id`, `jobs_title`, `jobs_shobe`, `jobs_content`, `jobs_feature`, `jobs_work_titme`, `jobs_mobile`, `jobs_tell`, `jobs_fax`, `jobs_email`, `jobs_code_posti`, `jobs_website`, `jobs_instagram`, `jobs_telegram`, `jobs_whatsapp`, `jobs_facebook`, `jobs_tw`, `jobs_pinterest`, `jobs_youtube`, `jobs_address`, `jobs_latitude`, `jobs_longitude`, `jobs_count_namayandegi`, `jobs_count_namayandegi_in_city`, `jobs_sharayet`, `jobs_list_service`, `jobs_service_id`, `jobs_mojavez`, `jobs_video`, `register_date`, `update_date`, `jobs_logo`, `img1`, `img2`, `img3`, `img4`, `jobs_shoar`, `price_id`, `state_id`, `expire`, `days`) VALUES
(37, 7, 6, 1, 0, 0, 'كاشي كاري', 'كاشي و سراميك كريمي', NULL, NULL, '<p>\n	20</p>\n', NULL, NULL, NULL, NULL, NULL, NULL, 'ds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>\n	33.89621114574323</p>\n', '<p>\n	48.750954837035195</p>\n', 0, 0, NULL, NULL, NULL, NULL, '<p></p>', NULL, '1600335904', 'b6fec417673efb8a5bfb8a12eaa8362d.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', NULL, NULL, 1, '1', 10),
(38, 0, 0, 1, 0, 0, 'ghghgh', 'كاشي و سراميك كريمي', '', '', '20', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '33.89621114574323', '48.750954837035195', 0, 0, '', NULL, NULL, '', '<p></p>', NULL, 'شنبه, ۱۰ خرداد ۱۳۹۹', 'b6fec417673efb8a5bfb8a12eaa8362d.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', NULL, 0, 1, '1', 0),
(39, 7, 6, 1, 3, 2, 'dsdsadsad', 'كاشي و سراميك كريميds', 'سلام', 'سلام', 'سلام', '09192183440', '08133235664', '', 'seif4847@gmail.com', '', '', '', '', '', '', '', '', '', NULL, '33.89621114574323', '48.750954837035195', 0, 0, '', NULL, NULL, '', '<p></p>', NULL, 'شنبه, ۱۰ خرداد ۱۳۹۹', 'b6fec417673efb8a5bfb8a12eaa8362d.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', NULL, 0, 1, '1', 0),
(40, 7, 5, 1, 2, 32, '6666', 'كاشي و سراميك كريميds', 'سلام', 'dsd', '20dsd', 'sds', 'ds', 'dsd', 'ds', 'ds', 'dsd', 'dsd', 'sdd', 'dsd', 'dsd', 'dsd', 'dsds', 'sddsd', 'dsd', '33.89621114574323', '48.750954837035195', 333, 33, 'dsdsds', 'dsdsd', 1, '', '<p></p>', 'یکشنبه, ۱۱ خرداد ۱۳۹۹', 'یکشنبه, ۱۱ خرداد ۱۳۹۹', 'b6fec417673efb8a5bfb8a12eaa8362d.jpg', 'digikala.png', 'a3ea1db8d76cdfe8ad265ec698640927.jpg', '635a8407dba385478294126520888bc8.jpg', '7f011227c2efd8e38264624ae7683806.jpg', 'sdsdsd', 2, 1, '1', 45),
(41, 6, 10, 1, 18, 270, 'كاشي كاري', 'كاشي و سراميك كريميdsdsadsadsa', '<p>\n	sdsdsdsكاشي كاري</p>\n', '<p>\n	كاشي كاري</p>\n', '<p>\n	كاشي كاري</p>\n', '0813 322 3907', '08137591', '08137591', 'corssis248@gmail.com', '6591953977', 'وب سايت', 'dasd', 'dasd', 'واتساپ', 'فيسبوك', 'توِيتر', 'پينترست', 'يوتوب', '<p>\n	كاشي كاري</p>\n', '33.89621114574323', '48.750954837035195', NULL, 845035, NULL, NULL, NULL, NULL, NULL, '1600335947', '1600338828', '6bc03-1.png', 'bf55e-1.png', NULL, NULL, NULL, 'تبلغ ما كيفيت ماست', NULL, 3, '1602928019', 30);

-- --------------------------------------------------------

--
-- Table structure for table `zgr_jobs_cate`
--

CREATE TABLE `zgr_jobs_cate` (
  `jobs_cate_id` int(11) NOT NULL,
  `jobs_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_jobs_cate`
--

INSERT INTO `zgr_jobs_cate` (`jobs_cate_id`, `jobs_cate_title`) VALUES
(1, 'خدماتی'),
(2, 'خوراکی ومواد غذایی'),
(3, 'بهداشتی درمانی'),
(4, 'فروشگاه ها  و مراکز خرید'),
(5, 'تفریحی ورزشی'),
(6, 'دفاتر  و شرکت ها'),
(7, 'آموزشگاه ها'),
(8, 'خدمات آنلاین شهری'),
(9, 'صنعت و معدن');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_jobs_service`
--

CREATE TABLE `zgr_jobs_service` (
  `jobs_service_id` int(11) NOT NULL,
  `jobs_service_title` text NOT NULL,
  `jobs_service_ico` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_jobs_service`
--

INSERT INTO `zgr_jobs_service` (`jobs_service_id`, `jobs_service_title`, `jobs_service_ico`) VALUES
(1, 'اينترنت رايگان', ''),
(2, 'سيستم كنترل دما', '');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_jobs_sub_cate`
--

CREATE TABLE `zgr_jobs_sub_cate` (
  `jobs_sub_cate_id` int(11) NOT NULL,
  `jobs_cate_id` int(11) NOT NULL,
  `jobs_sub_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_jobs_sub_cate`
--

INSERT INTO `zgr_jobs_sub_cate` (`jobs_sub_cate_id`, `jobs_cate_id`, `jobs_sub_cate_title`) VALUES
(1, 7, 'کامپیوتر'),
(2, 7, 'گلسازی'),
(3, 7, 'آرایش'),
(4, 7, 'خط و نقاشی'),
(5, 7, 'رانندگی'),
(6, 7, 'زبان'),
(7, 7, 'علمی/ کنکور'),
(8, 7, 'فنی'),
(9, 7, 'موسیقی'),
(10, 6, 'بيمه ايران');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_kala`
--

CREATE TABLE `zgr_kala` (
  `kala_id` int(11) NOT NULL,
  `accounts_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `ostan_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `kala_title` text,
  `kala_des` text,
  `kala_price` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
  `register_date` text,
  `update_date` text,
  `state_id` int(11) DEFAULT NULL,
  `expire` text,
  `days` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_login_attempts`
--

CREATE TABLE `zgr_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_menu`
--

CREATE TABLE `zgr_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_title` text NOT NULL,
  `menu_link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_menu`
--

INSERT INTO `zgr_menu` (`menu_id`, `menu_title`, `menu_link`) VALUES
(1, 'صفحه نخست', 'http://localhost/zagrino/Index');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_newspaper`
--

CREATE TABLE `zgr_newspaper` (
  `newspaper_id` int(11) NOT NULL,
  `newspaper_title` text NOT NULL,
  `newspaper_text` text NOT NULL,
  `newspaper_img` text NOT NULL,
  `newspaper_date` text NOT NULL,
  `days` int(11) NOT NULL,
  `expire` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_offers`
--

CREATE TABLE `zgr_offers` (
  `offers_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `kala_id` int(11) NOT NULL,
  `offers_type` int(11) NOT NULL,
  `offers_percent` int(11) NOT NULL,
  `register_date` text NOT NULL,
  `update_date` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `expire` text NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_ostan`
--

CREATE TABLE `zgr_ostan` (
  `ostan_id` int(11) NOT NULL,
  `ostan_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_ostan`
--

INSERT INTO `zgr_ostan` (`ostan_id`, `ostan_title`) VALUES
(1, 'آذربايجان شرقي'),
(2, 'آذربايجان غربي'),
(3, 'اردبيل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ايلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال بختياري'),
(10, 'خراسان جنوبي'),
(11, 'خراسان رضوي'),
(12, 'خراسان شمالي'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سيستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوين'),
(19, 'قم'),
(20, 'كردستان'),
(21, 'كرمان'),
(22, 'كرمانشاه'),
(23, 'كهكيلويه و بويراحمد'),
(24, 'گلستان'),
(25, 'گيلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مركزي'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'يزد');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_pay`
--

CREATE TABLE `zgr_pay` (
  `pay_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `authority` text NOT NULL,
  `mobile` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `pay_date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_postion`
--

CREATE TABLE `zgr_postion` (
  `postion_id` int(11) NOT NULL,
  `postion_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_postion`
--

INSERT INTO `zgr_postion` (`postion_id`, `postion_title`) VALUES
(1, 'بالا سايت'),
(2, 'سمت راست'),
(3, 'سمت چپ'),
(4, 'پايين سايت');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_price`
--

CREATE TABLE `zgr_price` (
  `price_id` int(11) NOT NULL,
  `price_amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_rel_eghamat_service`
--

CREATE TABLE `zgr_rel_eghamat_service` (
  `rel_eghamat_service_id` int(11) NOT NULL,
  `eghamatgah_id` int(11) NOT NULL,
  `jobs_service_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_rel_jobs_service`
--

CREATE TABLE `zgr_rel_jobs_service` (
  `rel_jobs_service_id` int(11) NOT NULL,
  `jobs_id` int(11) NOT NULL,
  `jobs_service_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_rel_jobs_service`
--

INSERT INTO `zgr_rel_jobs_service` (`rel_jobs_service_id`, `jobs_id`, `jobs_service_id`) VALUES
(6, 40, 2),
(5, 40, 1),
(7, 40, 1),
(8, 40, 2),
(9, 40, 2),
(10, 40, 2),
(11, 40, 1),
(12, 40, 2),
(13, 40, 1),
(14, 40, 2);

-- --------------------------------------------------------

--
-- Table structure for table `zgr_secend_menu`
--

CREATE TABLE `zgr_secend_menu` (
  `smenu_id` int(11) NOT NULL,
  `smenu_title` text NOT NULL,
  `smenu_link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_secend_menu`
--

INSERT INTO `zgr_secend_menu` (`smenu_id`, `smenu_title`, `smenu_link`) VALUES
(1, 'صفحه', 'http://localhost/zagrino/admin/Smenu/index/add'),
(2, 'بانك مشاغل', 'http://localhost/zagrino/admin/Smenu/index/add'),
(3, 'تخفيفات', 'http://localhost/zagrino/admin/Smenu/index/add'),
(4, 'آگهي و نيازمندي ها', 'http://localhost/zagrino/admin/Smenu/index/add'),
(5, 'رويداد ها', 'http://localhost/zagrino/admin/Smenu/index/add'),
(6, 'بازارچه', 'http://localhost/zagrino/admin/Smenu/index/add'),
(7, 'خدمات گردشگري', 'http://localhost/zagrino/admin/Smenu/index/add'),
(8, 'بانك رسانه ها و خدمات اجتماعي', 'http://localhost/zagrino/admin/Smenu/index/add'),
(9, 'نظر سنجي', 'http://localhost/zagrino/admin/Smenu/index/add');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_shop`
--

CREATE TABLE `zgr_shop` (
  `shop_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `jobs_id` int(11) NOT NULL,
  `shop_title` text,
  `shop_address` text,
  `shop_banner` text,
  `shop_cate_id` int(11) DEFAULT NULL,
  `shop_sub_cate_id` int(11) DEFAULT NULL,
  `shop_phone` text,
  `shop_des` text,
  `map_latitude` text,
  `map_longitude` text,
  `register_date` text,
  `update_date` text,
  `state_id` int(11) DEFAULT NULL,
  `expire` text,
  `days` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_shop_cate`
--

CREATE TABLE `zgr_shop_cate` (
  `shop_cate_id` int(11) NOT NULL,
  `shop_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_shop_sub_cate`
--

CREATE TABLE `zgr_shop_sub_cate` (
  `shop_sub_cate_id` int(11) NOT NULL,
  `shop_cate_id` int(11) NOT NULL,
  `shop_sub_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_show_time`
--

CREATE TABLE `zgr_show_time` (
  `agahi_show_time_id` int(11) NOT NULL,
  `agahi_show_time_title` text NOT NULL,
  `agahi_show_time_val` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_show_time`
--

INSERT INTO `zgr_show_time` (`agahi_show_time_id`, `agahi_show_time_title`, `agahi_show_time_val`) VALUES
(1, 'يك ماهه', '30'),
(2, 'دو ماهه', '60'),
(3, 'سه ماهه', '90'),
(4, 'يكساله', '365');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_site`
--

CREATE TABLE `zgr_site` (
  `site_id` int(11) NOT NULL,
  `site_title` text NOT NULL,
  `site_des` text NOT NULL,
  `site_keywords` text NOT NULL,
  `site_logo` text NOT NULL,
  `site_icon` text NOT NULL,
  `site_btn_one_title` text NOT NULL,
  `site_btn_one_link` text NOT NULL,
  `site_btn_one_ico` text NOT NULL,
  `site_btn_two_title` text NOT NULL,
  `site_btn_two_link` text NOT NULL,
  `site_btn_two_ico` text NOT NULL,
  `site_ads_text` text NOT NULL,
  `police_text` text NOT NULL,
  `API_KEY_ZARINPAL` text NOT NULL,
  `API_KEY_KAVENEGAR` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_site`
--

INSERT INTO `zgr_site` (`site_id`, `site_title`, `site_des`, `site_keywords`, `site_logo`, `site_icon`, `site_btn_one_title`, `site_btn_one_link`, `site_btn_one_ico`, `site_btn_two_title`, `site_btn_two_link`, `site_btn_two_ico`, `site_ads_text`, `police_text`, `API_KEY_ZARINPAL`, `API_KEY_KAVENEGAR`) VALUES
(1, 'زاگرينو', 'توضيحات زاگرينو', 'تخفيف, گروهي', 'd293e-.jpg', '', 'فروشگاه', 'http://localhost/zagrino/Index', '3ec90-soroush.png', 'انجمن', 'http://localhost/zagrino/Index', '5bb51-ita_icon.png', '', '<p style="text-align: right;">\n	این هشدار تست می باشد</p>\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_slider`
--

CREATE TABLE `zgr_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_link` text NOT NULL,
  `slider_img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_slider`
--

INSERT INTO `zgr_slider` (`slider_id`, `slider_link`, `slider_img`) VALUES
(5, 'http://localhost/zagrino/admin/Slider/index/add', '35600-3.jpg'),
(4, 'http://localhost/zagrino/admin/Slider/index/add', 'bc2b4-1.0.jpg'),
(6, 'http://localhost/zagrino/admin/Slider/index/add', 'e7f6b-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_state`
--

CREATE TABLE `zgr_state` (
  `state_id` int(11) NOT NULL,
  `state_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_state`
--

INSERT INTO `zgr_state` (`state_id`, `state_title`) VALUES
(1, 'معمولي'),
(2, 'ويژه'),
(3, 'فعال'),
(4, 'منقضي شده'),
(5, 'پرداخت شده'),
(6, 'پرداخت نشده'),
(7, 'معلق'),
(8, 'در دست بررسي');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_takhfif`
--

CREATE TABLE `zgr_takhfif` (
  `takhfif_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `jobs_id` int(11) DEFAULT NULL,
  `takhfif_title` text NOT NULL,
  `percent` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `takhfif_type_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `register_date` text NOT NULL,
  `update_date` text NOT NULL,
  `price_id` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `expire` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_takhfif_type`
--

CREATE TABLE `zgr_takhfif_type` (
  `takhfif_type_id` int(11) NOT NULL,
  `takhfif_type_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_text`
--

CREATE TABLE `zgr_text` (
  `text_id` int(11) NOT NULL,
  `text_title` text NOT NULL,
  `text_link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_text`
--

INSERT INTO `zgr_text` (`text_id`, `text_title`, `text_link`) VALUES
(1, 'متن متحرک زاگرس زوم با ارائه خدمات برندینگ ، حامی و معرف کسب و کار شماست', 'http://localhost/zagrino/admin/Text/index/add'),
(2, 'محمد سيف برنامه نويس و طراح سايت زاگرينو', 'http://localhost/zagrino/admin/Text/index/add');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_tour`
--

CREATE TABLE `zgr_tour` (
  `tour_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `tour_type` text,
  `tour_title` text,
  `tour_des` text,
  `tour_mabda` text,
  `tour_maghsad` text,
  `tour_start` text,
  `tour_finish` text,
  `tour_vasile` text,
  `tour_count_night` text,
  `tour_takht` int(11) DEFAULT NULL,
  `tour_number` text,
  `tour_address` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
  `map_latitude` text,
  `map_longitude` text,
  `eghamatgah_email` text,
  `price_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `register_date` text,
  `update_date` text,
  `days` int(11) DEFAULT NULL,
  `expire` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_users`
--

CREATE TABLE `zgr_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_users`
--

INSERT INTO `zgr_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1600529853, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_users_groups`
--

CREATE TABLE `zgr_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_users_groups`
--

INSERT INTO `zgr_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zgr_accounts`
--
ALTER TABLE `zgr_accounts`
  ADD PRIMARY KEY (`accounts_id`);

--
-- Indexes for table `zgr_ads`
--
ALTER TABLE `zgr_ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `zgr_agahi`
--
ALTER TABLE `zgr_agahi`
  ADD PRIMARY KEY (`agahi_id`);

--
-- Indexes for table `zgr_agahi_amlak`
--
ALTER TABLE `zgr_agahi_amlak`
  ADD PRIMARY KEY (`agahi_amlak_id`);

--
-- Indexes for table `zgr_agahi_car`
--
ALTER TABLE `zgr_agahi_car`
  ADD PRIMARY KEY (`agahi_car_id`);

--
-- Indexes for table `zgr_agahi_cate`
--
ALTER TABLE `zgr_agahi_cate`
  ADD PRIMARY KEY (`agahi_cate_id`);

--
-- Indexes for table `zgr_agahi_cond_tag`
--
ALTER TABLE `zgr_agahi_cond_tag`
  ADD PRIMARY KEY (`agahi_cond_tag_id`);

--
-- Indexes for table `zgr_agahi_images`
--
ALTER TABLE `zgr_agahi_images`
  ADD PRIMARY KEY (`agahi_image_id`);

--
-- Indexes for table `zgr_agahi_message`
--
ALTER TABLE `zgr_agahi_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `zgr_agahi_state_kala`
--
ALTER TABLE `zgr_agahi_state_kala`
  ADD PRIMARY KEY (`agahi_state_kala_id`);

--
-- Indexes for table `zgr_agahi_sub_cate`
--
ALTER TABLE `zgr_agahi_sub_cate`
  ADD PRIMARY KEY (`agahi_sub_cate_id`);

--
-- Indexes for table `zgr_agahi_tarefe`
--
ALTER TABLE `zgr_agahi_tarefe`
  ADD PRIMARY KEY (`agahi_tarefe_id`);

--
-- Indexes for table `zgr_amlak_cate`
--
ALTER TABLE `zgr_amlak_cate`
  ADD PRIMARY KEY (`amlak_cate_id`);

--
-- Indexes for table `zgr_amlak_cond_tag`
--
ALTER TABLE `zgr_amlak_cond_tag`
  ADD PRIMARY KEY (`amlak_cond_tag_id`);

--
-- Indexes for table `zgr_amlak_tag`
--
ALTER TABLE `zgr_amlak_tag`
  ADD PRIMARY KEY (`amlak_tag_id`);

--
-- Indexes for table `zgr_car_body`
--
ALTER TABLE `zgr_car_body`
  ADD PRIMARY KEY (`car_body_id`);

--
-- Indexes for table `zgr_car_cate`
--
ALTER TABLE `zgr_car_cate`
  ADD PRIMARY KEY (`car_cate_id`);

--
-- Indexes for table `zgr_car_cond_tag`
--
ALTER TABLE `zgr_car_cond_tag`
  ADD PRIMARY KEY (`car_cond_tag_id`);

--
-- Indexes for table `zgr_car_sokht`
--
ALTER TABLE `zgr_car_sokht`
  ADD PRIMARY KEY (`car_sokht_id`);

--
-- Indexes for table `zgr_car_state`
--
ALTER TABLE `zgr_car_state`
  ADD PRIMARY KEY (`car_state_id`);

--
-- Indexes for table `zgr_car_sub_cate`
--
ALTER TABLE `zgr_car_sub_cate`
  ADD PRIMARY KEY (`car_sub_cate_id`);

--
-- Indexes for table `zgr_car_tag`
--
ALTER TABLE `zgr_car_tag`
  ADD PRIMARY KEY (`car_tag_id`);

--
-- Indexes for table `zgr_car_type`
--
ALTER TABLE `zgr_car_type`
  ADD PRIMARY KEY (`car_type_id`);

--
-- Indexes for table `zgr_category`
--
ALTER TABLE `zgr_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `zgr_city`
--
ALTER TABLE `zgr_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `zgr_eghamatgah`
--
ALTER TABLE `zgr_eghamatgah`
  ADD PRIMARY KEY (`eghamatgah_id`);

--
-- Indexes for table `zgr_events`
--
ALTER TABLE `zgr_events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `zgr_events_level`
--
ALTER TABLE `zgr_events_level`
  ADD PRIMARY KEY (`events_level_id`);

--
-- Indexes for table `zgr_events_run`
--
ALTER TABLE `zgr_events_run`
  ADD PRIMARY KEY (`events_run_id`);

--
-- Indexes for table `zgr_events_type`
--
ALTER TABLE `zgr_events_type`
  ADD PRIMARY KEY (`events_type_id`);

--
-- Indexes for table `zgr_footer_menu`
--
ALTER TABLE `zgr_footer_menu`
  ADD PRIMARY KEY (`footer_menu_id`);

--
-- Indexes for table `zgr_gardeshgari`
--
ALTER TABLE `zgr_gardeshgari`
  ADD PRIMARY KEY (`gardeshgari_id`);

--
-- Indexes for table `zgr_groups`
--
ALTER TABLE `zgr_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zgr_jobs`
--
ALTER TABLE `zgr_jobs`
  ADD PRIMARY KEY (`jobs_id`);

--
-- Indexes for table `zgr_jobs_cate`
--
ALTER TABLE `zgr_jobs_cate`
  ADD PRIMARY KEY (`jobs_cate_id`);

--
-- Indexes for table `zgr_jobs_service`
--
ALTER TABLE `zgr_jobs_service`
  ADD PRIMARY KEY (`jobs_service_id`);

--
-- Indexes for table `zgr_jobs_sub_cate`
--
ALTER TABLE `zgr_jobs_sub_cate`
  ADD PRIMARY KEY (`jobs_sub_cate_id`);

--
-- Indexes for table `zgr_kala`
--
ALTER TABLE `zgr_kala`
  ADD PRIMARY KEY (`kala_id`);

--
-- Indexes for table `zgr_login_attempts`
--
ALTER TABLE `zgr_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zgr_menu`
--
ALTER TABLE `zgr_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `zgr_newspaper`
--
ALTER TABLE `zgr_newspaper`
  ADD PRIMARY KEY (`newspaper_id`);

--
-- Indexes for table `zgr_offers`
--
ALTER TABLE `zgr_offers`
  ADD PRIMARY KEY (`offers_id`);

--
-- Indexes for table `zgr_ostan`
--
ALTER TABLE `zgr_ostan`
  ADD PRIMARY KEY (`ostan_id`);

--
-- Indexes for table `zgr_pay`
--
ALTER TABLE `zgr_pay`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `zgr_postion`
--
ALTER TABLE `zgr_postion`
  ADD PRIMARY KEY (`postion_id`);

--
-- Indexes for table `zgr_price`
--
ALTER TABLE `zgr_price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `zgr_rel_eghamat_service`
--
ALTER TABLE `zgr_rel_eghamat_service`
  ADD PRIMARY KEY (`rel_eghamat_service_id`);

--
-- Indexes for table `zgr_rel_jobs_service`
--
ALTER TABLE `zgr_rel_jobs_service`
  ADD PRIMARY KEY (`rel_jobs_service_id`);

--
-- Indexes for table `zgr_secend_menu`
--
ALTER TABLE `zgr_secend_menu`
  ADD PRIMARY KEY (`smenu_id`);

--
-- Indexes for table `zgr_shop`
--
ALTER TABLE `zgr_shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `zgr_shop_cate`
--
ALTER TABLE `zgr_shop_cate`
  ADD PRIMARY KEY (`shop_cate_id`);

--
-- Indexes for table `zgr_shop_sub_cate`
--
ALTER TABLE `zgr_shop_sub_cate`
  ADD PRIMARY KEY (`shop_sub_cate_id`);

--
-- Indexes for table `zgr_show_time`
--
ALTER TABLE `zgr_show_time`
  ADD PRIMARY KEY (`agahi_show_time_id`);

--
-- Indexes for table `zgr_site`
--
ALTER TABLE `zgr_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `zgr_slider`
--
ALTER TABLE `zgr_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `zgr_state`
--
ALTER TABLE `zgr_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `zgr_takhfif`
--
ALTER TABLE `zgr_takhfif`
  ADD PRIMARY KEY (`takhfif_id`);

--
-- Indexes for table `zgr_takhfif_type`
--
ALTER TABLE `zgr_takhfif_type`
  ADD PRIMARY KEY (`takhfif_type_id`);

--
-- Indexes for table `zgr_text`
--
ALTER TABLE `zgr_text`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `zgr_tour`
--
ALTER TABLE `zgr_tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `zgr_users`
--
ALTER TABLE `zgr_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zgr_users_groups`
--
ALTER TABLE `zgr_users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zgr_accounts`
--
ALTER TABLE `zgr_accounts`
  MODIFY `accounts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_ads`
--
ALTER TABLE `zgr_ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zgr_agahi_amlak`
--
ALTER TABLE `zgr_agahi_amlak`
  MODIFY `agahi_amlak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_agahi_car`
--
ALTER TABLE `zgr_agahi_car`
  MODIFY `agahi_car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_agahi_cate`
--
ALTER TABLE `zgr_agahi_cate`
  MODIFY `agahi_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_agahi_cond_tag`
--
ALTER TABLE `zgr_agahi_cond_tag`
  MODIFY `agahi_cond_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_agahi_images`
--
ALTER TABLE `zgr_agahi_images`
  MODIFY `agahi_image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_agahi_message`
--
ALTER TABLE `zgr_agahi_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `zgr_agahi_state_kala`
--
ALTER TABLE `zgr_agahi_state_kala`
  MODIFY `agahi_state_kala_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_agahi_sub_cate`
--
ALTER TABLE `zgr_agahi_sub_cate`
  MODIFY `agahi_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_agahi_tarefe`
--
ALTER TABLE `zgr_agahi_tarefe`
  MODIFY `agahi_tarefe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_amlak_cate`
--
ALTER TABLE `zgr_amlak_cate`
  MODIFY `amlak_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgr_amlak_cond_tag`
--
ALTER TABLE `zgr_amlak_cond_tag`
  MODIFY `amlak_cond_tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_amlak_tag`
--
ALTER TABLE `zgr_amlak_tag`
  MODIFY `amlak_tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_body`
--
ALTER TABLE `zgr_car_body`
  MODIFY `car_body_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_cate`
--
ALTER TABLE `zgr_car_cate`
  MODIFY `car_cate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_cond_tag`
--
ALTER TABLE `zgr_car_cond_tag`
  MODIFY `car_cond_tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_sokht`
--
ALTER TABLE `zgr_car_sokht`
  MODIFY `car_sokht_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_state`
--
ALTER TABLE `zgr_car_state`
  MODIFY `car_state_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_sub_cate`
--
ALTER TABLE `zgr_car_sub_cate`
  MODIFY `car_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_tag`
--
ALTER TABLE `zgr_car_tag`
  MODIFY `car_tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_type`
--
ALTER TABLE `zgr_car_type`
  MODIFY `car_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_category`
--
ALTER TABLE `zgr_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_events`
--
ALTER TABLE `zgr_events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_events_level`
--
ALTER TABLE `zgr_events_level`
  MODIFY `events_level_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_events_run`
--
ALTER TABLE `zgr_events_run`
  MODIFY `events_run_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgr_events_type`
--
ALTER TABLE `zgr_events_type`
  MODIFY `events_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_footer_menu`
--
ALTER TABLE `zgr_footer_menu`
  MODIFY `footer_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `zgr_gardeshgari`
--
ALTER TABLE `zgr_gardeshgari`
  MODIFY `gardeshgari_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_groups`
--
ALTER TABLE `zgr_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgr_jobs`
--
ALTER TABLE `zgr_jobs`
  MODIFY `jobs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `zgr_jobs_cate`
--
ALTER TABLE `zgr_jobs_cate`
  MODIFY `jobs_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `zgr_jobs_service`
--
ALTER TABLE `zgr_jobs_service`
  MODIFY `jobs_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgr_jobs_sub_cate`
--
ALTER TABLE `zgr_jobs_sub_cate`
  MODIFY `jobs_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `zgr_kala`
--
ALTER TABLE `zgr_kala`
  MODIFY `kala_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_login_attempts`
--
ALTER TABLE `zgr_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_menu`
--
ALTER TABLE `zgr_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_newspaper`
--
ALTER TABLE `zgr_newspaper`
  MODIFY `newspaper_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_offers`
--
ALTER TABLE `zgr_offers`
  MODIFY `offers_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_pay`
--
ALTER TABLE `zgr_pay`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_postion`
--
ALTER TABLE `zgr_postion`
  MODIFY `postion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zgr_price`
--
ALTER TABLE `zgr_price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_rel_eghamat_service`
--
ALTER TABLE `zgr_rel_eghamat_service`
  MODIFY `rel_eghamat_service_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_rel_jobs_service`
--
ALTER TABLE `zgr_rel_jobs_service`
  MODIFY `rel_jobs_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `zgr_secend_menu`
--
ALTER TABLE `zgr_secend_menu`
  MODIFY `smenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `zgr_shop`
--
ALTER TABLE `zgr_shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_shop_cate`
--
ALTER TABLE `zgr_shop_cate`
  MODIFY `shop_cate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_shop_sub_cate`
--
ALTER TABLE `zgr_shop_sub_cate`
  MODIFY `shop_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_show_time`
--
ALTER TABLE `zgr_show_time`
  MODIFY `agahi_show_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zgr_site`
--
ALTER TABLE `zgr_site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_slider`
--
ALTER TABLE `zgr_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `zgr_state`
--
ALTER TABLE `zgr_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `zgr_takhfif`
--
ALTER TABLE `zgr_takhfif`
  MODIFY `takhfif_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_takhfif_type`
--
ALTER TABLE `zgr_takhfif_type`
  MODIFY `takhfif_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_text`
--
ALTER TABLE `zgr_text`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgr_tour`
--
ALTER TABLE `zgr_tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_users`
--
ALTER TABLE `zgr_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_users_groups`
--
ALTER TABLE `zgr_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `zgr_users_groups`
--
ALTER TABLE `zgr_users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `zgr_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `zgr_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
