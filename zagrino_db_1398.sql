-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2020 at 11:25 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `zgr_accounts`;
CREATE TABLE IF NOT EXISTS `zgr_accounts` (
  `accounts_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_fn` text,
  `account_ln` text,
  `account_username` text,
  `account_pass` text,
  `account_email` text,
  `account_mobile` text NOT NULL,
  `account_tell` text,
  `account_codemeli` text,
  `account_codeposti` text,
  `account_address` text,
  `ostan_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `account_state` int(11) DEFAULT NULL,
  `account_reg_date` text,
  `account_up_date` text,
  `state_id` int(11) DEFAULT NULL,
  `account_active_code` text,
  `account_avatar` text,
  `account_map_latitude` text,
  `account_map_longitude` text,
  `account_sex` int(11) DEFAULT NULL,
  `account_age` int(11) DEFAULT NULL,
  `account_about` text,
  `account_level` int(11) DEFAULT NULL,
  PRIMARY KEY (`accounts_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_accounts`
--

INSERT INTO `zgr_accounts` (`accounts_id`, `account_fn`, `account_ln`, `account_username`, `account_pass`, `account_email`, `account_mobile`, `account_tell`, `account_codemeli`, `account_codeposti`, `account_address`, `ostan_id`, `city_id`, `account_state`, `account_reg_date`, `account_up_date`, `state_id`, `account_active_code`, `account_avatar`, `account_map_latitude`, `account_map_longitude`, `account_sex`, `account_age`, `account_about`, `account_level`) VALUES
(1, 'محمد', 'سيف', 'mseif', '258456', 'seif4847@gmail.com', '09192183440', '09192183440', '3950171533', '6591953977', '09192183440', 1, 1, 1, 'شنبه, ۱۶ فروردین ۱۳۹۹', 'شنبه, ۱۶ فروردین ۱۳۹۹', 1, '09192183440', '20135-beautiful-701678_1280.jpg', '09192183440', '09192183440', 1, 1, '09192183440', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zgr_ads`
--

DROP TABLE IF EXISTS `zgr_ads`;
CREATE TABLE IF NOT EXISTS `zgr_ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `postion_id` int(11) NOT NULL,
  `ads_img` text NOT NULL,
  `ads_link` text NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi`
--

DROP TABLE IF EXISTS `zgr_agahi`;
CREATE TABLE IF NOT EXISTS `zgr_agahi` (
  `agahi_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `agahi_hoghoghi_or_haghighi` int(11) NOT NULL,
  `agahi_sazeman_title` text NOT NULL,
  `tarefe_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `agahi_title` text NOT NULL,
  `agahi_reg_date` date NOT NULL,
  `agahi_update_date` date NOT NULL,
  `state_id` int(11) NOT NULL,
  `agahi_cate_id` int(11) DEFAULT NULL,
  `agahi_sub_cate_id` int(11) DEFAULT NULL,
  `agahi_des` text,
  `agahi_tell` text,
  `agahi_latitude` text,
  `agahi_longitude` text,
  `agahi_tag_conditions_id` int(11) DEFAULT NULL,
  `agahi_address` text,
  `agahi_tag_id` int(11) DEFAULT NULL,
  `agahi_price` text,
  `agahi_full_des` text NOT NULL,
  `agahi_email` text NOT NULL,
  `agahi_state_kala_id` int(11) NOT NULL,
  PRIMARY KEY (`agahi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi`
--

INSERT INTO `zgr_agahi` (`agahi_id`, `accounts_id`, `ostan_id`, `city_id`, `agahi_hoghoghi_or_haghighi`, `agahi_sazeman_title`, `tarefe_id`, `show_id`, `agahi_title`, `agahi_reg_date`, `agahi_update_date`, `state_id`, `agahi_cate_id`, `agahi_sub_cate_id`, `agahi_des`, `agahi_tell`, `agahi_latitude`, `agahi_longitude`, `agahi_tag_conditions_id`, `agahi_address`, `agahi_tag_id`, `agahi_price`, `agahi_full_des`, `agahi_email`, `agahi_state_kala_id`) VALUES
(0, 1, 0, 0, 0, '', 0, 0, '', '0000-00-00', '0000-00-00', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_amlak`
--

DROP TABLE IF EXISTS `zgr_agahi_amlak`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_amlak` (
  `agahi_amlak_id` int(11) NOT NULL AUTO_INCREMENT,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `amlak_cate_id` int(11) NOT NULL,
  `amlak_sub_cate_id` int(11) NOT NULL,
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
  `amlak_date_register` text NOT NULL,
  `amlak_date_update` text NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`agahi_amlak_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_car`
--

DROP TABLE IF EXISTS `zgr_agahi_car`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_car` (
  `agahi_car_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `agahi_rule_check` tinyint(1) DEFAULT NULL,
  `agahi_car_date_register` text NOT NULL,
  `agahi_car_date_update` text NOT NULL,
  `agahi_car_lat` text NOT NULL,
  `agahi_car_long` text NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`agahi_car_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_cate`
--

DROP TABLE IF EXISTS `zgr_agahi_cate`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_cate` (
  `agahi_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `agahi_cate_title` text NOT NULL,
  PRIMARY KEY (`agahi_cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_cate`
--

INSERT INTO `zgr_agahi_cate` (`agahi_cate_id`, `agahi_cate_title`) VALUES
(1, 'وسايل الكتريكي');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_cond_tag`
--

DROP TABLE IF EXISTS `zgr_agahi_cond_tag`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_cond_tag` (
  `agahi_cond_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `agahi_cond_tag_title` text NOT NULL,
  PRIMARY KEY (`agahi_cond_tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_images`
--

DROP TABLE IF EXISTS `zgr_agahi_images`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_images` (
  `agahi_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `agahi_id` int(11) NOT NULL,
  `agahi_image_url` text NOT NULL,
  PRIMARY KEY (`agahi_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_show_time`
--

DROP TABLE IF EXISTS `zgr_agahi_show_time`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_show_time` (
  `agahi_show_time_id` int(11) NOT NULL AUTO_INCREMENT,
  `agahi_show_time_title` text NOT NULL,
  `agahi_show_time_val` text NOT NULL,
  PRIMARY KEY (`agahi_show_time_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_state_kala`
--

DROP TABLE IF EXISTS `zgr_agahi_state_kala`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_state_kala` (
  `agahi_state_kala_id` int(11) NOT NULL AUTO_INCREMENT,
  `agahi_state_kala_title` text NOT NULL,
  PRIMARY KEY (`agahi_state_kala_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_sub_cate`
--

DROP TABLE IF EXISTS `zgr_agahi_sub_cate`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_sub_cate` (
  `agahi_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `agahi_cate_id` int(11) NOT NULL,
  `agahi_sub_cate_title` text NOT NULL,
  PRIMARY KEY (`agahi_sub_cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_sub_cate`
--

INSERT INTO `zgr_agahi_sub_cate` (`agahi_sub_cate_id`, `agahi_cate_id`, `agahi_sub_cate_title`) VALUES
(1, 1, 'رايانه');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_tag`
--

DROP TABLE IF EXISTS `zgr_agahi_tag`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_tag` (
  `agahi_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `agahi_tag_title` text NOT NULL,
  PRIMARY KEY (`agahi_tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_tarefe`
--

DROP TABLE IF EXISTS `zgr_agahi_tarefe`;
CREATE TABLE IF NOT EXISTS `zgr_agahi_tarefe` (
  `agahi_tarefe_id` int(11) NOT NULL AUTO_INCREMENT,
  `agahi_tarefe_title` text NOT NULL,
  `agahi_tarefe_price` text NOT NULL,
  PRIMARY KEY (`agahi_tarefe_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_amlak_cate`
--

DROP TABLE IF EXISTS `zgr_amlak_cate`;
CREATE TABLE IF NOT EXISTS `zgr_amlak_cate` (
  `amlak_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `amlak_cate_title` text NOT NULL,
  PRIMARY KEY (`amlak_cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `zgr_amlak_cond_tag`;
CREATE TABLE IF NOT EXISTS `zgr_amlak_cond_tag` (
  `amlak_cond_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `amlak_cond_tag_title` text NOT NULL,
  PRIMARY KEY (`amlak_cond_tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_amlak_sub_cate`
--

DROP TABLE IF EXISTS `zgr_amlak_sub_cate`;
CREATE TABLE IF NOT EXISTS `zgr_amlak_sub_cate` (
  `amlak_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `amlak_cate_id` int(11) NOT NULL,
  `amlak_sub_cate_title` text NOT NULL,
  PRIMARY KEY (`amlak_sub_cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_amlak_tag`
--

DROP TABLE IF EXISTS `zgr_amlak_tag`;
CREATE TABLE IF NOT EXISTS `zgr_amlak_tag` (
  `amlak_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `amlak_tag_title` text NOT NULL,
  PRIMARY KEY (`amlak_tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_body`
--

DROP TABLE IF EXISTS `zgr_car_body`;
CREATE TABLE IF NOT EXISTS `zgr_car_body` (
  `car_body_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_body_title` text NOT NULL,
  PRIMARY KEY (`car_body_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_cate`
--

DROP TABLE IF EXISTS `zgr_car_cate`;
CREATE TABLE IF NOT EXISTS `zgr_car_cate` (
  `car_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_cate_title` text NOT NULL,
  PRIMARY KEY (`car_cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_cond_tag`
--

DROP TABLE IF EXISTS `zgr_car_cond_tag`;
CREATE TABLE IF NOT EXISTS `zgr_car_cond_tag` (
  `car_cond_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_cond_tag_title` text NOT NULL,
  PRIMARY KEY (`car_cond_tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_sokht`
--

DROP TABLE IF EXISTS `zgr_car_sokht`;
CREATE TABLE IF NOT EXISTS `zgr_car_sokht` (
  `car_sokht_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_sokht_title` text NOT NULL,
  PRIMARY KEY (`car_sokht_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_state`
--

DROP TABLE IF EXISTS `zgr_car_state`;
CREATE TABLE IF NOT EXISTS `zgr_car_state` (
  `car_state_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_state_title` text NOT NULL,
  PRIMARY KEY (`car_state_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_sub_cate`
--

DROP TABLE IF EXISTS `zgr_car_sub_cate`;
CREATE TABLE IF NOT EXISTS `zgr_car_sub_cate` (
  `car_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_cate_id` int(11) NOT NULL,
  `car_sub_cate_title` text NOT NULL,
  PRIMARY KEY (`car_sub_cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_tag`
--

DROP TABLE IF EXISTS `zgr_car_tag`;
CREATE TABLE IF NOT EXISTS `zgr_car_tag` (
  `car_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_tag_title` text NOT NULL,
  PRIMARY KEY (`car_tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_type`
--

DROP TABLE IF EXISTS `zgr_car_type`;
CREATE TABLE IF NOT EXISTS `zgr_car_type` (
  `car_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type_title` text NOT NULL,
  PRIMARY KEY (`car_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_category`
--

DROP TABLE IF EXISTS `zgr_category`;
CREATE TABLE IF NOT EXISTS `zgr_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_city`
--

DROP TABLE IF EXISTS `zgr_city`;
CREATE TABLE IF NOT EXISTS `zgr_city` (
  `city_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_title` text NOT NULL,
  PRIMARY KEY (`city_id`)
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
-- Table structure for table `zgr_footer_menu`
--

DROP TABLE IF EXISTS `zgr_footer_menu`;
CREATE TABLE IF NOT EXISTS `zgr_footer_menu` (
  `footer_menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `footer_menu_title` text NOT NULL,
  `footer_menu_link` text NOT NULL,
  PRIMARY KEY (`footer_menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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
-- Table structure for table `zgr_groups`
--

DROP TABLE IF EXISTS `zgr_groups`;
CREATE TABLE IF NOT EXISTS `zgr_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `zgr_jobs`;
CREATE TABLE IF NOT EXISTS `zgr_jobs` (
  `jobs_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `jobs_map_latitude` text,
  `jobs_map_longitude` text,
  `jobs_count_namayandegi` int(11) DEFAULT NULL,
  `jobs_count_namayandegi_in_city` int(11) DEFAULT NULL,
  `jobs_sharayet` text,
  `jobs_list_service` text,
  `jobs_service_id` int(11) DEFAULT NULL,
  `jobs_mojavez` text,
  `jobs_video` text,
  `jobs_register_date` text,
  `jobs_update_date` text,
  `state_id` int(11) DEFAULT NULL,
  `jobs_logo` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `jobs_shoar` text,
  `jobs_price` text,
  `expire` text NOT NULL,
  PRIMARY KEY (`jobs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_jobs`
--

INSERT INTO `zgr_jobs` (`jobs_id`, `jobs_cate_id`, `jobs_sub_cate_id`, `accounts_id`, `ostan_id`, `city_id`, `jobs_title`, `jobs_shobe`, `jobs_content`, `jobs_feature`, `jobs_work_titme`, `jobs_mobile`, `jobs_tell`, `jobs_fax`, `jobs_email`, `jobs_code_posti`, `jobs_website`, `jobs_instagram`, `jobs_telegram`, `jobs_whatsapp`, `jobs_facebook`, `jobs_tw`, `jobs_pinterest`, `jobs_youtube`, `jobs_address`, `jobs_map_latitude`, `jobs_map_longitude`, `jobs_count_namayandegi`, `jobs_count_namayandegi_in_city`, `jobs_sharayet`, `jobs_list_service`, `jobs_service_id`, `jobs_mojavez`, `jobs_video`, `jobs_register_date`, `jobs_update_date`, `state_id`, `jobs_logo`, `img1`, `img2`, `img3`, `img4`, `jobs_shoar`, `jobs_price`, `expire`) VALUES
(9, 7, 1, 1, 26, 368, 'تست مي باشد', 'تست مي باشد', '<p>\n	12111111111111111111111111111111111111111111</p>\n', NULL, NULL, '09192183440', '08133237591', '08133237591', 'seif4847@gmail.com', '6591953977', 'takfile.com', 'dfsf', 'fdsf', 'fsdf', 'fdsfd', 'dfs', 'df', 'dsf', '<p>\n	fdsfsdfdsfsdfsdfsdfds</p>\n', NULL, NULL, 5, 2, '<p>\n	121212</p>\n', '<p>\n	212121</p>\n', NULL, '<p>\n	212121212</p>\n', NULL, NULL, NULL, 1, '81811-.jpg', '', '', '', '', '121212121212', '21212121212', '0000-00-00 00:00:00'),
(10, 6, 10, 1, 3, 50, 'شغل ويژه', 'نام شعبه', '<p>\n	<span font-size:=\"\" font-weight:=\"\" helvetica=\"\" style=\"color: rgb(51, 51, 51); font-family: iranyekanwebregular, \" text-align:=\"\">توضيح شغل</span></p>\n', '<div class=\"form-group jobs_feature_form_group\" style=\"box-sizing: border-box; text-align: right; margin-bottom: 15px; margin-right: -15px; margin-left: -15px;\">\n	<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 1067px;\">\n		<div class=\"form-group row \" style=\"box-sizing: border-box; margin-right: -15px; margin-left: -15px; margin-bottom: 15px;\">\n			<label class=\"control-label text-left col-md-2 padding-0\" style=\"box-sizing: border-box; font-weight: 700; display: inline-block; max-width: 100%; margin-bottom: 0px; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 177.828px; padding-top: 7px; margin-top: 0px; direction: rtl !important;\">Jobs feature</label></div>\n	</div>\n</div>\n<div class=\"form-group jobs_work_titme_form_group\" style=\"box-sizing: border-box; text-align: right; margin-bottom: 15px; margin-right: -15px; margin-left: -15px;\">\n	<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 1067px;\">\n		<div class=\"form-group row \" style=\"box-sizing: border-box; margin-right: -15px; margin-left: -15px; margin-bottom: 15px;\">\n			<div class=\"col-md-10\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 889.156px;\">\n				&nbsp;</div>\n		</div>\n	</div>\n</div>\n<p>\n	&nbsp;</p>\n', '<p>\n	<span font-size:=\"\" font-weight:=\"\" helvetica=\"\" style=\"color: rgb(51, 51, 51); font-family: iranyekanwebregular, \" text-align:=\"\">ساعت كاري</span></p>\n', 'موبايل', 'تلفن ثابت', 'فكس', 'ايميل', 'كدپستي', 'وب سايت', 'اينستاگرام', 'تلگرام', 'واتساپ', 'فيسبوك', 'توِيتر', 'پينترست', 'يوتوب', '<p>\n	<span font-size:=\"\" font-weight:=\"\" helvetica=\"\" style=\"color: rgb(51, 51, 51); font-family: iranyekanwebregular, \" text-align:=\"\">آدرس</span></p>\n', 'latitude', 'longitude', 0, 0, '<p>\n	<span font-size:=\"\" font-weight:=\"\" helvetica=\"\" style=\"color: rgb(51, 51, 51); font-family: iranyekanwebregular, \" text-align:=\"\">شرايط فروش</span></p>\n', '<p>\n	<span font-size:=\"\" font-weight:=\"\" helvetica=\"\" style=\"color: rgb(51, 51, 51); font-family: iranyekanwebregular, \" text-align:=\"\">ليست خدمات و سرويس</span></p>\n', NULL, '<p>\n	<span font-size:=\"\" font-weight:=\"\" helvetica=\"\" style=\"color: rgb(51, 51, 51); font-family: iranyekanwebregular, \" text-align:=\"\">مجوز ها</span></p>\n', '98ae9-wildlife.wmv', NULL, NULL, 2, '68627-desert.jpg', '', '', '', '', '8شعار', 'قيمت', '0000-00-00 00:00:00'),
(11, 6, 10, 1, 26, 368, 'شغل تست مي باشد', 'حلوا شكري', '\r\n	توليد بهترين و با كيفيت ترين حلوا شكري بروجرد\r\n', '<p>\n	توليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجرد</p>\n', '<p>\n	ساعت كاري از ساعت 8 صبح تا 12 ظهر و از ساعت 15 تا 20 عصر اين شعبه فعال مي باشد</p>\n', '09192183440', '08133237591', '08133237591', 'seif4847@gmail.com', '6591953977', 'zagrino.com', 'zagrino', 'zagrino', 'zagrino', 'zagrino', 'zagrino', 'zagrino', 'zagrino', '<p>\n	بلوار كربلا</p>\n', '<p>\n	1154544564</p>\n', '<p>\n	56456456456456</p>\n', 3, 2, '<p>\n	نقدي</p>\n', '<p>\n	توليد حلوا شكري</p>\n', NULL, '<p>\n	غذا و دارو</p>\n', 'd4237-wildlife.wmv', 'یکشنبه, ۱۷ فروردین ۱۳۹۹', NULL, 2, '547de-chrysanthemum.jpg', '', '', '', '', 'تبلغ ما كيفيت ماست', 'متنوع', '0000-00-00 00:00:00'),
(12, 6, 10, 1, 26, 368, 'شغل تست مي باشد', 'حلوا شكري', '\r\n	توليد بهترين و با كيفيت ترين حلوا شكري بروجرد\r\n', '<p>\n	توليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجردتوليد بهترين و با كيفيت ترين حلوا شكري بروجرد</p>\n', '<p>\n	ساعت كاري از ساعت 8 صبح تا 12 ظهر و از ساعت 15 تا 20 عصر اين شعبه فعال مي باشد</p>\n', '09192183440', '08133237591', '08133237591', 'seif4847@gmail.com', '6591953977', 'zagrino.com', 'zagrino', 'zagrino', 'zagrino', 'zagrino', 'zagrino', 'zagrino', 'zagrino', '<p>\n	بلوار كربلا</p>\n', '<p>\n	1154544564</p>\n', '<p>\n	56456456456456</p>\n', 3, 2, '<p>\n	نقدي</p>\n', '<p>\n	توليد حلوا شكري</p>\n', NULL, '<p>\n	غذا و دارو</p>\n', 'd4237-wildlife.wmv', 'یکشنبه, ۱۷ فروردین ۱۳۹۹', NULL, 2, '547de-chrysanthemum.jpg', '', '', '', '', 'تبلغ ما كيفيت ماست', 'متنوع', '0000-00-00 00:00:00'),
(13, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '0000-00-00 00:00:00'),
(14, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '0000-00-00 00:00:00'),
(15, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '0000-00-00 00:00:00'),
(16, 1, 1, 1, 1, 1, 'fdgdgfdgfd', 'fdgdgfdgfd', 'fdgdgfdgfd', NULL, 'fdgdgfdgfd', 'fdgdgfdgfd', 'fdgdgfdgfd', 'fdgdgfdgfd', 'fdgdgfdgfd', 'fdgdgfdgfd', NULL, 'fdgdgfdgfd', 'fdgdgfdgfd', NULL, NULL, NULL, NULL, NULL, 'fdgdgfdgfd', NULL, NULL, 12, 112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'fdgdgfdgfd', NULL, '0000-00-00 00:00:00'),
(17, 2, 2, 1, 2, 2, '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '', NULL, '1'),
(18, 2, 2, 1, 2, 2, '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '', NULL, '1'),
(19, 3, 7, 1, 7, 7, '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '', NULL, '1'),
(20, 1, 7, 1, 7, 7, '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '', NULL, '1'),
(21, 1, 7, 1, 7, 7, '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '', NULL, '1'),
(22, 2, 7, 1, 7, 7, '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '<p>You did not select a file to upload.</p>', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_jobs_cate`
--

DROP TABLE IF EXISTS `zgr_jobs_cate`;
CREATE TABLE IF NOT EXISTS `zgr_jobs_cate` (
  `jobs_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `jobs_cate_title` text NOT NULL,
  PRIMARY KEY (`jobs_cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `zgr_jobs_service`;
CREATE TABLE IF NOT EXISTS `zgr_jobs_service` (
  `jobs_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `jobs_service_title` text NOT NULL,
  `jobs_service_ico` text NOT NULL,
  PRIMARY KEY (`jobs_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_jobs_service`
--

INSERT INTO `zgr_jobs_service` (`jobs_service_id`, `jobs_service_title`, `jobs_service_ico`) VALUES
(1, 'اينترنت رايگان و نامحدود لابي', ''),
(2, 'سيستم كنترل دما', '');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_jobs_sub_cate`
--

DROP TABLE IF EXISTS `zgr_jobs_sub_cate`;
CREATE TABLE IF NOT EXISTS `zgr_jobs_sub_cate` (
  `jobs_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `jobs_cate_id` int(11) NOT NULL,
  `jobs_sub_cate_title` text NOT NULL,
  PRIMARY KEY (`jobs_sub_cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

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
-- Table structure for table `zgr_login_attempts`
--

DROP TABLE IF EXISTS `zgr_login_attempts`;
CREATE TABLE IF NOT EXISTS `zgr_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_menu`
--

DROP TABLE IF EXISTS `zgr_menu`;
CREATE TABLE IF NOT EXISTS `zgr_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` text NOT NULL,
  `menu_link` text NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_menu`
--

INSERT INTO `zgr_menu` (`menu_id`, `menu_title`, `menu_link`) VALUES
(1, 'صفحه نخست', 'http://localhost/zagrino/Index');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_newspaper`
--

DROP TABLE IF EXISTS `zgr_newspaper`;
CREATE TABLE IF NOT EXISTS `zgr_newspaper` (
  `newspaper_id` int(11) NOT NULL AUTO_INCREMENT,
  `newspaper_title` text NOT NULL,
  `newspaper_text` text NOT NULL,
  `newspaper_img` text NOT NULL,
  `newspaper_date` text NOT NULL,
  PRIMARY KEY (`newspaper_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_ostan`
--

DROP TABLE IF EXISTS `zgr_ostan`;
CREATE TABLE IF NOT EXISTS `zgr_ostan` (
  `ostan_id` int(11) NOT NULL,
  `ostan_title` text NOT NULL,
  PRIMARY KEY (`ostan_id`)
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
-- Table structure for table `zgr_postion`
--

DROP TABLE IF EXISTS `zgr_postion`;
CREATE TABLE IF NOT EXISTS `zgr_postion` (
  `postion_id` int(11) NOT NULL AUTO_INCREMENT,
  `postion_title` text NOT NULL,
  PRIMARY KEY (`postion_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_rel_jobs_service`
--

DROP TABLE IF EXISTS `zgr_rel_jobs_service`;
CREATE TABLE IF NOT EXISTS `zgr_rel_jobs_service` (
  `rel_jobs_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `jobs_id` int(11) NOT NULL,
  `jobs_service_id` int(11) NOT NULL,
  PRIMARY KEY (`rel_jobs_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_rel_jobs_service`
--

INSERT INTO `zgr_rel_jobs_service` (`rel_jobs_service_id`, `jobs_id`, `jobs_service_id`) VALUES
(6, 9, 2),
(5, 9, 1),
(7, 10, 1),
(8, 10, 2),
(9, 11, 2),
(10, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `zgr_secend_menu`
--

DROP TABLE IF EXISTS `zgr_secend_menu`;
CREATE TABLE IF NOT EXISTS `zgr_secend_menu` (
  `smenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `smenu_title` text NOT NULL,
  `smenu_link` text NOT NULL,
  PRIMARY KEY (`smenu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

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
-- Table structure for table `zgr_site`
--

DROP TABLE IF EXISTS `zgr_site`;
CREATE TABLE IF NOT EXISTS `zgr_site` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_site`
--

INSERT INTO `zgr_site` (`site_id`, `site_title`, `site_des`, `site_keywords`, `site_logo`, `site_icon`, `site_btn_one_title`, `site_btn_one_link`, `site_btn_one_ico`, `site_btn_two_title`, `site_btn_two_link`, `site_btn_two_ico`, `site_ads_text`) VALUES
(1, 'زاگرينو', 'توضيحات زاگرينو', 'تخفيف, گروهي', 'd293e-.jpg', '', 'فروشگاه', 'http://localhost/zagrino/Index', '3ec90-soroush.png', 'انجمن', 'http://localhost/zagrino/Index', '5bb51-ita_icon.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_slider`
--

DROP TABLE IF EXISTS `zgr_slider`;
CREATE TABLE IF NOT EXISTS `zgr_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_link` text NOT NULL,
  `slider_img` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `zgr_state`;
CREATE TABLE IF NOT EXISTS `zgr_state` (
  `state_id` int(11) NOT NULL,
  `state_title` text NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_state`
--

INSERT INTO `zgr_state` (`state_id`, `state_title`) VALUES
(1, 'معمولي'),
(2, 'ويژه');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_takhfif`
--

DROP TABLE IF EXISTS `zgr_takhfif`;
CREATE TABLE IF NOT EXISTS `zgr_takhfif` (
  `takhfif_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `takhfif_title_kasbokar` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `takhfif_dalil` text NOT NULL,
  `takhfif_title` text NOT NULL,
  `takhfif_monasebat` text NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `takhfif_group` text NOT NULL,
  `takhfif_type` text NOT NULL,
  `takhfif_bazgasht_taviz` int(11) NOT NULL,
  `takhfif_adam_asalt` int(11) NOT NULL,
  `takhfif_tozihat_zemanat` text NOT NULL,
  `takhfif_sent_another_city` int(11) NOT NULL,
  `takhfif_tahodat_ersal_kala` text NOT NULL,
  `takhfif_tazmin_sod_moshtari` int(11) NOT NULL,
  PRIMARY KEY (`takhfif_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zgr_text`
--

DROP TABLE IF EXISTS `zgr_text`;
CREATE TABLE IF NOT EXISTS `zgr_text` (
  `text_id` int(11) NOT NULL AUTO_INCREMENT,
  `text_title` text NOT NULL,
  `text_link` text NOT NULL,
  PRIMARY KEY (`text_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_text`
--

INSERT INTO `zgr_text` (`text_id`, `text_title`, `text_link`) VALUES
(1, 'متن متحرک زاگرس زوم با ارائه خدمات برندینگ ، حامی و معرف کسب و کار شماست', 'http://localhost/zagrino/admin/Text/index/add'),
(2, 'محمد سيف برنامه نويس و طراح سايت زاگرينو', 'http://localhost/zagrino/admin/Text/index/add');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_users`
--

DROP TABLE IF EXISTS `zgr_users`;
CREATE TABLE IF NOT EXISTS `zgr_users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_users`
--

INSERT INTO `zgr_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1586580383, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_users_groups`
--

DROP TABLE IF EXISTS `zgr_users_groups`;
CREATE TABLE IF NOT EXISTS `zgr_users_groups` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_users_groups`
--

INSERT INTO `zgr_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zgr_users_groups`
--
ALTER TABLE `zgr_users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `zgr_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `zgr_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
