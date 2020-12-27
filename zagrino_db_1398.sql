-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:12 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

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
-- Table structure for table `car_pay`
--

CREATE TABLE `car_pay` (
  `car_pay_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `agahi_car_id` int(11) NOT NULL,
  `authority` text NOT NULL,
  `mobile` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `pay_date` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `agahi_cate_id` int(11) DEFAULT NULL,
  `agahi_sub_cate_id` int(11) DEFAULT NULL,
  `agahi_des` text,
  `agahi_tell` text,
  `agahi_latitude` text,
  `agahi_longitude` text,
  `agahi_cond_tag_id` int(11) DEFAULT NULL,
  `agahi_address` text,
  `agahi_email` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
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

INSERT INTO `zgr_agahi` (`agahi_id`, `accounts_id`, `ostan_id`, `city_id`, `agahi_title`, `agahi_cate_id`, `agahi_sub_cate_id`, `agahi_des`, `agahi_tell`, `agahi_latitude`, `agahi_longitude`, `agahi_cond_tag_id`, `agahi_address`, `agahi_email`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `state_id`, `agahi_state_kala_id`, `register_date`, `update_date`, `days`, `expire`) VALUES
(21, 1, 30, 421, 'فروش پرینتر HP', 1, 1, 'کاملا سالم و بدون کارکرد', '08133245831', '33.89611', ' 48.751836', 1, 'نهاوند', 'corssis248@gmail.com', 'd23b9a3f34146df2189d3dd2314fa9b4.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 12, NULL, 'سه شنبه, ۱۸ آذر ۱۳۹۹', '0', 90, '1615233774');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_amlak`
--

CREATE TABLE `zgr_agahi_amlak` (
  `agahi_amlak_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `amlak_cate_id` int(11) DEFAULT NULL,
  `amlak_tag_id` int(11) DEFAULT NULL,
  `amlak_cond_tag_id` int(11) DEFAULT NULL,
  `amlak_price` text,
  `amlak_tell` text,
  `amlak_des` text,
  `amlak_bonga_title` text,
  `amlak_agahi_dahande` text,
  `amlak_sanad_state` text,
  `amlak_mizan_malekiat` text,
  `amlak_metraj` text,
  `amlak_sanad_type` text,
  `amlak_ejare_price` text,
  `amlak_rahn_price` text,
  `amlak_count_room` text,
  `amlak_tabaghe` text,
  `amlak_parking` text,
  `amlak_emtiaz` text,
  `amlak_anbari` text,
  `amlak_asansor` text,
  `amlak_address` text,
  `amlak_latitude` text,
  `amlak_longitude` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
  `state_id` int(11) DEFAULT NULL,
  `register_date` text,
  `update_date` text,
  `expire` text,
  `days` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_amlak`
--

INSERT INTO `zgr_agahi_amlak` (`agahi_amlak_id`, `accounts_id`, `ostan_id`, `city_id`, `amlak_cate_id`, `amlak_tag_id`, `amlak_cond_tag_id`, `amlak_price`, `amlak_tell`, `amlak_des`, `amlak_bonga_title`, `amlak_agahi_dahande`, `amlak_sanad_state`, `amlak_mizan_malekiat`, `amlak_metraj`, `amlak_sanad_type`, `amlak_ejare_price`, `amlak_rahn_price`, `amlak_count_room`, `amlak_tabaghe`, `amlak_parking`, `amlak_emtiaz`, `amlak_anbari`, `amlak_asansor`, `amlak_address`, `amlak_latitude`, `amlak_longitude`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `state_id`, `register_date`, `update_date`, `expire`, `days`) VALUES
(7, 1, 18, 270, 2, 2, 2, '60000000000', '08133245831', 'املاك', 'املاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاك', '', 'همدان', 'املاك', 'املاك', '3', '300000', '2222222', '6', '5', '1', 'برق آب گاز تلفن', '1', '1', 'edededededededededededsfdfdf', '33.896121', ' 48.749901', 'ac547655053095fcb28549a7a74c88c1.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 12, 'سه شنبه, ۱۸ آذر ۱۳۹۹', '0', '1638994988', 365),
(8, 1, 7, 100, 2, NULL, NULL, '', '08133245831', 'املاك', 'املاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاك', NULL, NULL, NULL, 'املاك', NULL, '300000', '2222222', NULL, NULL, NULL, NULL, NULL, NULL, 'edededededededededededsfdfdf', '33.896128', ' 48.749704', '01e9f656da3abb7d5df540436f8fdf19.jpg', '<p></p>', '9e83171034ddbd34f35329f94ef0edbd.jpg', '<p></p>', '<p></p>', '<p></p>', 12, 'سه شنبه, ۱۸ آذر ۱۳۹۹', '0', '1607459334', NULL),
(9, 1, 4, 63, 2, NULL, NULL, '60000000000', '08133245831', 'املاك', 'املاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاك', NULL, NULL, NULL, 'املاك', NULL, '300000', '2222222', NULL, NULL, NULL, NULL, NULL, NULL, 'edededededededededededsfdfdf', '33.896199', ' 48.750223', 'a49b4a56bc9745c51e1997e92a676acb.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 12, 'سه شنبه, ۱۸ آذر ۱۳۹۹', '0', '1608496577', 12),
(10, 1, 7, 102, 2, NULL, NULL, '60000000000', '08133245831', 'املاك', 'املاكاملاكاملاكاملاكاملاكاملاكاملاكاملاكاملاك', NULL, NULL, NULL, 'املاك', NULL, '300000', '2222222', NULL, NULL, NULL, NULL, NULL, NULL, 'edededededededededededsfdfdf', '33.896217', ' 48.748777', 'f0fa565268ab130acd001d981f6f5c78.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 12, 'سه شنبه, ۱۸ آذر ۱۳۹۹', '0', '1608496709', 12),
(11, 1, 5, 277, 1, NULL, NULL, '', '08133245831', '', 'dddddddddddddddddddd', NULL, '', '', '', NULL, '', '', '', '', NULL, '', NULL, NULL, '', '33.896203', ' 48.752068', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 12, 'چهارشنبه, ۱۹ آذر ۱۳۹۹', '0', '1610133704', 30);

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
  `agahi_car_mobile` text,
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
  `car_latitude` text NOT NULL,
  `car_longitude` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
  `price_id` int(11) DEFAULT NULL,
  `expire` text,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_car`
--

INSERT INTO `zgr_agahi_car` (`agahi_car_id`, `accounts_id`, `ostan_id`, `city_id`, `agahi_car_title`, `car_cate_id`, `car_sub_cate_id`, `car_tag_id`, `car_cond_tag_id`, `agahi_car_price`, `agahi_car_full_des`, `agahi_car_tell`, `agahi_car_mobile`, `agahi_car_address`, `agahi_car_year`, `car_type_id`, `car_body_id`, `agahi_car_karked`, `car_state_id`, `car_sokht_id`, `agahi_car_pelak`, `agahi_car_color`, `agahi_car_body_des`, `agahi_car_motor_des`, `register_date`, `update_date`, `car_latitude`, `car_longitude`, `state_id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `price_id`, `expire`, `days`) VALUES
(1, 1, 4, 63, 'dddddddddddddddddddddddddddd', 1, 1, NULL, NULL, '', 'ddddddddddddddd', 'ddddddddddddddd', '0813 322 3907', 'dddddddddddddddddddddd', 'ddddddddddddddd', 3, 1, 'dddddddddddddd', 1, 2, 'dddddddddddddddddddddddddddddddddddddd', 0, 'dddddddddddddd', 'ddddddddddd', 'پنجشنبه, ۲۰ آذر ۱۳۹۹', '0', '33.896299', ' 48.748481', 12, '96223679910365a2d8de541bb7b400c4.jpg', 'b6523f76a3041e64d59c8feea4e69ef5.jpg', '907dab51310ab32f65f2db5904cd7fe3.jpg', '<p></p>', '<p></p>', '<p></p>', NULL, '1615410070', 90);

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
(1, 'وسايل الكتريكي'),
(2, 'وسايل ');

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
  `accounts_id` int(11) NOT NULL,
  `message_email` text NOT NULL,
  `message_text` text NOT NULL,
  `message_mobile` text NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_message`
--

INSERT INTO `zgr_agahi_message` (`message_id`, `agahi_id`, `accounts_id`, `message_email`, `message_text`, `message_mobile`, `state_id`) VALUES
(16, 1, 1, 'corssis248@gmail.com', 'سلام تست می باشد', '08133223907', 0),
(17, 1, 1, 'corssis248@gmail.com', 'dsd', '0813 322 3907', 0),
(18, 1, 1, 'corssis248@gmail.com', 'dsd', '0813 322 3907', 0),
(19, 1, 1, 'corssis248@gmail.com', 'dsd', '0813 322 3907', 10);

-- --------------------------------------------------------

--
-- Table structure for table `zgr_agahi_pay`
--

CREATE TABLE `zgr_agahi_pay` (
  `agahi_pay_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `agahi_id` int(11) NOT NULL,
  `authority` text NOT NULL,
  `mobile` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `pay_date` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_agahi_pay`
--

INSERT INTO `zgr_agahi_pay` (`agahi_pay_id`, `accounts_id`, `agahi_id`, `authority`, `mobile`, `amount`, `pay_date`, `Status`) VALUES
(1, 1, 1, '000000000000000000000000000000180795', '09192183440', 1000, 'سه شنبه, ۱۱ آذر ۱۳۹۹', 'OK'),
(2, 1, 1, '000000000000000000000000000000180795', '09192183440', 1000, 'سه شنبه, ۱۱ آذر ۱۳۹۹', 'OK'),
(3, 1, 0, '000000000000000000000000000000180813', '09192183440', 1000, 'سه شنبه, ۱۱ آذر ۱۳۹۹', 'OK'),
(4, 1, 0, '000000000000000000000000000000181014', '09192183440', 1000, 'چهارشنبه, ۱۲ آذر ۱۳۹۹', 'OK'),
(5, 1, 0, '000000000000000000000000000000181015', '09192183440', 1000, 'چهارشنبه, ۱۲ آذر ۱۳۹۹', 'OK'),
(6, 1, 14, '000000000000000000000000000000181022', '09192183440', 1000, 'چهارشنبه, ۱۲ آذر ۱۳۹۹', 'OK'),
(7, 1, 16, '000000000000000000000000000000181047', '09192183440', 1000, 'چهارشنبه, ۱۲ آذر ۱۳۹۹', 'OK'),
(8, 1, 18, '000000000000000000000000000000185653', '09192183440', 1000, 'یکشنبه, ۱۶ آذر ۱۳۹۹', 'OK'),
(9, 1, 20, '000000000000000000000000000000193609', '09192183440', 4000, 'سه شنبه, ۱۸ آذر ۱۳۹۹', 'OK'),
(10, 1, 20, '000000000000000000000000000000193609', '09192183440', 4000, 'سه شنبه, ۱۸ آذر ۱۳۹۹', 'OK'),
(11, 1, 21, '000000000000000000000000000000193618', '09192183440', 4000, 'سه شنبه, ۱۸ آذر ۱۳۹۹', 'OK');

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
(1, 'دست دوم');

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
(1, 1, 'رايانه'),
(2, 2, 'رايانه');

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
-- Table structure for table `zgr_amlak_pay`
--

CREATE TABLE `zgr_amlak_pay` (
  `amlak_pay_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `agahi_amlak_id` int(11) NOT NULL,
  `authority` text NOT NULL,
  `mobile` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `pay_date` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_amlak_pay`
--

INSERT INTO `zgr_amlak_pay` (`amlak_pay_id`, `accounts_id`, `agahi_amlak_id`, `authority`, `mobile`, `amount`, `pay_date`, `Status`) VALUES
(4, 1, 11, '000000000000000000000000000000195622', '09192183440', 4000, 'چهارشنبه, ۱۹ آذر ۱۳۹۹', 'OK'),
(3, 1, 7, '000000000000000000000000000000193660', '09192183440', 4000, 'سه شنبه, ۱۸ آذر ۱۳۹۹', 'OK');

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

--
-- Dumping data for table `zgr_car_body`
--

INSERT INTO `zgr_car_body` (`car_body_id`, `car_body_title`) VALUES
(1, 'کوپه'),
(2, 'فست بک'),
(3, 'سدان'),
(4, 'شاسی‌بلند');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_cate`
--

CREATE TABLE `zgr_car_cate` (
  `car_cate_id` int(11) NOT NULL,
  `car_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_car_cate`
--

INSERT INTO `zgr_car_cate` (`car_cate_id`, `car_cate_title`) VALUES
(1, 'سایپا'),
(2, 'ایرانخودرو');

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

--
-- Dumping data for table `zgr_car_sokht`
--

INSERT INTO `zgr_car_sokht` (`car_sokht_id`, `car_sokht_title`) VALUES
(1, 'بنزین'),
(2, 'دوگانه سوز'),
(3, 'گازوئیل');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_state`
--

CREATE TABLE `zgr_car_state` (
  `car_state_id` int(11) NOT NULL,
  `car_state_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_car_state`
--

INSERT INTO `zgr_car_state` (`car_state_id`, `car_state_title`) VALUES
(1, 'صفر'),
(2, 'در حد'),
(3, 'کارکرده'),
(4, 'اوراقی');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_car_sub_cate`
--

CREATE TABLE `zgr_car_sub_cate` (
  `car_sub_cate_id` int(11) NOT NULL,
  `car_cate_id` int(11) NOT NULL,
  `car_sub_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_car_sub_cate`
--

INSERT INTO `zgr_car_sub_cate` (`car_sub_cate_id`, `car_cate_id`, `car_sub_cate_title`) VALUES
(1, 1, 'تیبا'),
(2, 2, 'پژو پاس');

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

--
-- Dumping data for table `zgr_car_type`
--

INSERT INTO `zgr_car_type` (`car_type_id`, `car_type_title`) VALUES
(1, 'سواری'),
(2, 'وانت بار'),
(3, 'تراکتور'),
(4, 'نیسان');

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
  `eghamatgah_title` text,
  `eghamatgah_des` text,
  `eghamatgah_tabaghe` int(11) DEFAULT NULL,
  `eghamatgah_type` text,
  `eghamatgah_otagh` int(11) DEFAULT NULL,
  `eghamatgah_conditions` text,
  `eghamatgah_takht` int(11) DEFAULT NULL,
  `eghamatgah_tahvil` text,
  `eghamatgah_takhlie` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
  `eghamatgah_address` text,
  `eghamatgah_telephone` text,
  `map_latitude` text,
  `map_longitude` text,
  `state_id` int(11) DEFAULT NULL,
  `register_date` text,
  `update_date` text,
  `days` int(11) DEFAULT NULL,
  `expire` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_eghamatgah`
--

INSERT INTO `zgr_eghamatgah` (`eghamatgah_id`, `accounts_id`, `ostan_id`, `city_id`, `eghamatgah_title`, `eghamatgah_des`, `eghamatgah_tabaghe`, `eghamatgah_type`, `eghamatgah_otagh`, `eghamatgah_conditions`, `eghamatgah_takht`, `eghamatgah_tahvil`, `eghamatgah_takhlie`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `eghamatgah_address`, `eghamatgah_telephone`, `map_latitude`, `map_longitude`, `state_id`, `register_date`, `update_date`, `days`, `expire`) VALUES
(1, '1', 17, 232, 'ssssssssssssssssssssss', 's', 0, 'آپارتمان', 0, 's', 0, 's', 's', '39dc51f6f6559b474859d6edc7d668a3.jpg', 'fbf14e66c472d7754e8944041dfa6ae3.jpg', '5d2629a21a5c298964fc5f6bf98f3787.jpg', '<p></p>', '<p></p>', '<p></p>', '', 's', '33.89632810960982', '48.75149248566381', 12, 'شنبه, ۲۲ آذر ۱۳۹۹', '0', 12, '1608834409'),
(2, '1', 18, 271, 'ssssssssssssssssssssss', 's', 0, 'ویلایی', 0, 's', 0, 's', 's', '639605e5708e19d4ee59c47a059ee2c6.jpg', 'd0832fade78215e8dea96b2749d9e00a.jpg', 'ead25d2eadb9f02e145cc5dc8adf0572.jpg', '<p></p>', '<p></p>', '<p></p>', '', 's', '33.89608231883708', '48.75159439559302', 12, 'شنبه, ۲۲ آذر ۱۳۹۹', '0', 12, '1608834581'),
(3, '1', 17, 261, 'ssssssssssssssssssssss', 's', 0, 'ویلایی', 0, 'ww', 0, 's', 's', 'd3957ccaf41791910e1df0260c3144a4.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 'rewewewe', '0813 322 3907', '33.89620076156388', '48.752012762670766', 12, 'شنبه, ۲۲ آذر ۱۳۹۹', '0', 60, '1612981925'),
(4, '1', 8, 121, 'ww', 'dsd', 0, 'ویلایی', 0, 's', 0, 's', 'dddddddddddddddddd', '4e2ecf60936339f52ba277969aee708e.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 'rewewewe', '0813 322 3907', '33.896227477947214', '48.74904664736307', 12, 'شنبه, ۲۲ آذر ۱۳۹۹', '0', 90, '1615574457'),
(5, '1', 17, 232, 'ww', 'dsd', 0, 'ویلایی', 0, 's', 0, 's', 'dddddddddddddddddd', '12c0c8001b3df0895a43117d94a9220a.jpg', '82bb7b6594041084ff30ac3117970b9e.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 'rewewewe', '0813 322 3907', '33.8964216169111', '48.75090784449106', 12, 'شنبه, ۲۲ آذر ۱۳۹۹', '0', 90, '1615574486'),
(6, '1', 14, 206, 'ww', 'dsd', 0, 'ویلایی', 0, 's', 0, 's', 'dddddddddddddddddd', '852ae73941dc2e15b68ad8ddc09e9ea6.jpg', 'd6faf73e8e59408c00b957e874d541bc.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 'rewewewe', '0813 322 3907', '33.896310298709544', '48.7516963055222', 12, 'شنبه, ۲۲ آذر ۱۳۹۹', '0', 90, '1615574686');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_eghamatgah_pay`
--

CREATE TABLE `zgr_eghamatgah_pay` (
  `eghamatgah_pay_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `eghamatgah_id` int(11) NOT NULL,
  `authority` text NOT NULL,
  `mobile` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `pay_date` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_eghamatgah_pay`
--

INSERT INTO `zgr_eghamatgah_pay` (`eghamatgah_pay_id`, `accounts_id`, `eghamatgah_id`, `authority`, `mobile`, `amount`, `pay_date`, `Status`) VALUES
(1, 1, 6, '000000000000000000000000000000208464', '09192183440', 4000, 'شنبه, ۲۲ آذر ۱۳۹۹', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_events`
--

CREATE TABLE `zgr_events` (
  `events_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `ostan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `events_title` text NOT NULL,
  `events_dec` text NOT NULL,
  `events_start` text NOT NULL,
  `events_finish` text NOT NULL,
  `events_type` text NOT NULL,
  `events_run` text NOT NULL,
  `events_capacity` text NOT NULL,
  `events_level` text NOT NULL,
  `events_conditons` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `events_clip` text NOT NULL,
  `events_link_site` text NOT NULL,
  `events_email` text NOT NULL,
  `events_instagram` text NOT NULL,
  `events_telegram` text NOT NULL,
  `events_address` text NOT NULL,
  `events_phone` text NOT NULL,
  `map_latitude` text NOT NULL,
  `map_longitude` text NOT NULL,
  `register_date` text NOT NULL,
  `update_date` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `expire` text NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_events`
--

INSERT INTO `zgr_events` (`events_id`, `accounts_id`, `ostan_id`, `city_id`, `events_title`, `events_dec`, `events_start`, `events_finish`, `events_type`, `events_run`, `events_capacity`, `events_level`, `events_conditons`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `events_clip`, `events_link_site`, `events_email`, `events_instagram`, `events_telegram`, `events_address`, `events_phone`, `map_latitude`, `map_longitude`, `register_date`, `update_date`, `state_id`, `expire`, `days`) VALUES
(1, 1, 7, 105, 'dsadasdas', 'dsadasdasd', 'dsadasd', 'dasdasd', 'ddasdas', 'dsadsadsad', 'dsadasd', 'dsadasd', 'sdadasd', '<p></p>', '<p></p>', '<p></p>', '523386813a7819b0cca5cde4c36628b6.jpg', '5b989b338ee7e2d60dcc45c18d5e2ac6.jpg', '9349e7955a9af9f4e8175e50d34e8087.jpg', '', 'asdasdasda', 'dasdas', 'asdsad', 'dasdas', 'dasdasd', 'dsadasd', '33.8961393139048', '48.75109557330799', 'سه شنبه, ۲ دی ۱۳۹۹', '0', 12, '1640200203', 365);

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
-- Table structure for table `zgr_events_pay`
--

CREATE TABLE `zgr_events_pay` (
  `events_pay_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `events_id` int(11) NOT NULL,
  `authority` text NOT NULL,
  `mobile` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `pay_date` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_events_pay`
--

INSERT INTO `zgr_events_pay` (`events_pay_id`, `accounts_id`, `events_id`, `authority`, `mobile`, `amount`, `pay_date`, `Status`) VALUES
(1, 1, 1, '000000000000000000000000000000236513', '09192183440', 4000, 'سه شنبه, ۲ دی ۱۳۹۹', 'OK');

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
  `gardeshgari_conditons` text NOT NULL,
  `gardeshgari_best_time` text NOT NULL,
  `gardeshgari_address` text NOT NULL,
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
  `map_latitude` text,
  `map_longitude` varchar(100) DEFAULT NULL,
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
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `jobs_shoar` text,
  `state_id` int(11) DEFAULT NULL,
  `expire` text NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_jobs`
--

INSERT INTO `zgr_jobs` (`jobs_id`, `jobs_cate_id`, `jobs_sub_cate_id`, `accounts_id`, `ostan_id`, `city_id`, `jobs_title`, `jobs_shobe`, `jobs_content`, `jobs_feature`, `jobs_work_titme`, `jobs_mobile`, `jobs_tell`, `jobs_fax`, `jobs_email`, `jobs_code_posti`, `jobs_website`, `jobs_instagram`, `jobs_telegram`, `jobs_whatsapp`, `jobs_facebook`, `jobs_tw`, `jobs_pinterest`, `jobs_youtube`, `jobs_address`, `map_latitude`, `map_longitude`, `jobs_count_namayandegi`, `jobs_count_namayandegi_in_city`, `jobs_sharayet`, `jobs_list_service`, `jobs_service_id`, `jobs_mojavez`, `jobs_video`, `register_date`, `update_date`, `jobs_logo`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `jobs_shoar`, `state_id`, `expire`, `days`) VALUES
(46, 7, 1, 1, 26, 368, 'آموزشگاه کامپیوتر البزر', 'شعبه بروجرد', '<p>\n	<span style="color: rgb(107, 112, 116);font-family: IRANSans-web;text-align: justify;font-family: IRANSans-web, serif !important;">آموزشگاه فنی و حرفه ای پایا با بیش از ۲۰ سال سابقه آموزشی و بیش از ۸۰۰٫۰۰۰ نفر ساعت آموزش عملی موفق تا سال ۲۰۲۰، مهارت آموزی و ارتقای سطح کیفی و مهارتی در زمینه آموزش نرم افزارهای پایه و اداری، آموزش طراحی سایت و برنامه نویسی، آموزش شبکه عملی و سخت افزار عملی، نرم افزارهای گرافیکی، نرم افزارهای فنی و مهندسی و... در حال خدمت رسانی به هموطنان عزیز می باشد. مدیر و موسس آموزشگاه آقای پرویز تریوه می باشند که بعنوان سرگروه اساتید برخی از دوره&zwnj;ها مانند: طراحی سایت، برنامه نویسی، مدیریت و مهارتهای اداری و سازمانی در تهران و شهرستان&zwnj;ها توسط ایشان تدریس می&zwnj;گردد. تمامی دوره&zwnj;های آموزشگاه کامپیوتر پایا دارای تضمین کیفیت آموزشی می&zwnj;باشد. همچنین بنا به درخواست متقاضی، مدرک فنی و حرفه&zwnj;ای و یا مدرک بین المللی اعطاء می&zwnj;گردد.</span></p>\n', '<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: \'IRANSans-web\'; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/icdl-core-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزشگاه ICDL و اخذ مدرک فنی حرفه ای</span></a>&nbsp;: گواهینامه یا مدرک آی سی دی ال ICDL مدرکی است معتبر و بین المللی که نشان دهنده مهارت فرد در کار با کامپیوتر میباشد. اخذ مدرک ICDL سازمان فنی حرفه ای شامل مهارت های هفتگانه بوده و شامل ICDL درجه ۲ و ICDL درجه ۱ میباشد. شرکت در دوره آموزش ICDL و هزینه اخذ مدرک icdl بسیار کم و فوری میباشد. و موجب دریافت سریع مدرک icdl میشود. مدرک icdl فنی حرفه ای قابل ترجمه رسمی میباشد و آنرا تبدیل به مدرک icdl بین المللی می نماید. آموزشگاه کامپیوتر icdl پایا دارای مجوز فنی حرفه ای میباشد. و جزو بهترین آموزشگاههای icdl تهران است.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: \'IRANSans-web\'; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/icdl-advanced-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزشگاه ICDL پیشرفته ویژه بازار کار</span></a>&nbsp;: دوره آموزش آی سی دی ال پیشرفته ICDL Advanced برای کلیه کسانی که می خواهند ICDL را تا سطح پیشرفته یاد بگیرند. جویای کار و شغل مناسب می باشند. و یا در ادارات و موسسات دولتی و غیر دولتی شاغل می باشند. و تمام افرادی که می خواهند با ثبت نام در کلاسهای دوره آموزش کاربردی ICDL حرفه ای، بصورت تضمینی و فشرده یاد بگیرند مناسب است.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: \'IRANSans-web\'; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/Word-Excel-PowerPoint-Access-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزشگاه نرم افزار های آفیس شامل آموزش ورد ، آموزش اکسل ، آموزش پاورپوینت ، آموزش اکسس ، آموزش اوت لوک</span></a>&nbsp;: دوره آموزش کاربردی نرم افزارهای Microsoft Office شامل آموزش کاربردی نرم افزار Word فشرده ، آموزش کاربردی نرم افزار Excel پیشرفته ، آموزش کاربردی نرم افزار PowerPoint سریع ، آموزش کاربردی نرم افزار Access ، آموزش کاربردی نرم افزار Outlook میکروسافت میباشد. شما می توانید با ثبت نام در کلاسهای آموزش آفیس آموزشگاه کامپیوتر پایا در کوتاهترین زمان و کمترین شهریه بصورت خصوصی و تضمینی مهارت لازم را بدست آورید. و از یکسال خدمات پشتیبانی رایگان آموزشگاه پایا بهره مند شوید.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: IRANSans-Light-web; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/ten-finger-typing-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزشگاه تایپ ده انگشتی</span></a>&nbsp;: آموزش تایپ فارسی یا آموزش تایپ انگلیسی در دنیای امروز که همه کارها با کامپیوتر انجام می شود امری مهم و اجتناب ناپذیر است. با فراگیری و کسب مهارت در کلاس آموزش تایپ ده انگشتی ، بدون نگاه کردن به کیبورد و افزایش سرعت تایپ، فرصت مناسب و چشمگیری را در کار و تحصیل و ارتباطات، نسبت به دیگران بدست خواهید آورد. شما می توانید با ثبت نام در دوره های آموزش تایپ ۱۰ انگشتی آموزشگاه کامپیوتر پایا در زمان بسیار کوتاه و بصورت تضمینی مهارت مورد نظر را کسب کنید. آموزشگاه تایپ ده انگشتی پایا در کوتاهترین زمان و کمترین شهریه ، بسیار ساده و فشرده همراه با مدرک و گواهینامه معتبر ارائه مینماید.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: IRANSans-Light-web; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/Accounting-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزشگاه حسابداری عملی با نرم افزار حسابداری هلو</span></a>&nbsp;: با شرکت در دوره فشرده آموزش نرم افزار حسابداری هلو کلیه عملیات حسابداری مانند صدور فاکتور، انبار، خرید فروش، سررسید چک ها، گزارشات متنوع و... را در زمینه حسابداری فروشگاهی یا حسابداری شرکتی یا حسابداری تولیدی در مشاغل مختلف فرا خواهید گرفت. کاربری آسان همراه با امکانات گسترده، نرم افزارهای حسابداری هلو را به پرکاربرترین نرم افزار مالی کشور تبدیل کرده است. و توجه کلیه افرادی که هیچگونه سر رشته ای در حسابداری ندارند را بخودش جلب کرده است. آموزشگاه کامپیوتر پایا آموزش حسابداری با نرم افزار هلو را در ۴ جلسه و کمترین شهریه بصورت تضمینی و پشتیبانی رایگان و همراه با گواهینامه معتبر ارائه مینماید.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: IRANSans-Light-web; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/Professional-Secretarial-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزشگاه منشیگری حرفه ای</span></a>&nbsp;: یک منشی حرفه ای فرد مورد اعتماد در امور محرمانه یا خصوصی سازمان میباشد. کسی که کار منشیگری را انجام می دهد باید از عهده وظایفی چون تنظیم برنامه روزانه ، مهارت های ارتباط تلفنی ، توانایی تنظیم و سازماندهی جلسات ، تسلط در نامه نگاری و مکاتبات اداری و بایگانی اسناد ، تنظیم انواع گزارش ها از فعالیت&zwnj;های مختلف ، کار با کامپیوتر و اینترنت ، تایپ متون ، آگاهی از اصول مدیریت و انواع شیوه های مدیریت و مهارت های سازمانی ، مهارت در ارتباطات ، اصول مالی و حسابداری ، مسئولیت پذیری و نظارت برآید. در واقع یک منشی بعنوان معاون مدیر یا دست راست مدیر شناخته می شود. آموزشگاه پایا آموزش منشی گری را در کوتاهترین زمان و کمترین شهریه بصورت تضمینی ، پشتیبانی و بازآموزی رایگان و همراه با گواهینامه معتبر ارائه مینماید. مدرس دوره آموزش منشیگری مهندس پرویز تریوه می باشد.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: IRANSans-Light-web; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/Administrative-secretary-skills-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزشگاه رییس دفتری ، آموزش مدیر دفتری ، آموزش مسئول دفتری</span></a>&nbsp;: یک رییس دفتر حرفه ای باید تجربه کار منشیگری را داشته باشد. اهم وظایف رئیس دفتری شامل مدیریت اداری و تشریفاتی سازمان ، مهارت های کار حرفه ای با کامپیوتر ، مدیریت جلسات سازمان ، درک و بکارگیری مدیریت زمان ، مدیریت تنخواه گردانی ، درک اهمیت و توانایی ایجاد رزومه کاری و.. میباشد. دوره آموزش مسئول دفتری به شما کمک میکند تا انواع روش های ارتباط با دیگران ، زبان بدن و اشاره ، پاسخگویی موثر به تلفن ها و بکارگیری عبارات جادویی در مکالمات تلفنی ، نحوه برخورد حرفه ای با مافوق و ارباب رجوع ، نحوه برنامه ریزی و اولویت بندی فعالیتهای مختلف ، رازهای جذابیت و نفوذ در دیگران را بیاموزید. طبق آمار آموزشگاه پایا، کلیه مدیران هوشمند و آینده نگر شرکت ها و موسسات برای ارتقای پرسنل تحت امر خود اقدام به ثبت نام کارمندانشان در آموزش رئیس دفتری - آموزش مدیر دفتری - آموزش مسئول دفتری می نمایند. مخاطبان دوره آموزش رئیس دفتری و مسئولین دفاتر مدیران عمدتا کسانی هستند که هم اکنون این شغل را دارند. یا بفکر ارتقای شغلی هستند. استاد دوره آموزش رییس دفتری مهندس پرویز تریوه می باشد.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: IRANSans-Light-web; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/speech-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزشگاه فن بیان و مهارتهای ارتباطی Rhetoric and Communication skills training</span></a>&nbsp;: همانطور که می دانیم امروزه داشتن تخصص، دانش و مهارت برای موفقیت الزامیست ولی کافی نیست. و اگر بلد نباشیم ارتباط خوبی با دیگران برقرار نماییم و خواسته ها، ایده ها، خدمات و توانمندیهای خود را بخوبی بیان نماییم، نتایج دلخواه و مطلوبی را نخواهیم گرفت. دوره آموزش فن بیان، سخنرانی و مهارتهای ارتباطی این امکان را به شما می دهد تا بتوانید مهارت های سخنرانی (Public Speaking and Presentation) و فن بیان (Rhetoric) و صحیح صحبت کردن (Speaking Skills) را در خود پرورش دهید. بطور خلاصه فن بیان یعنی هنر خوب حرف زدن و حرف خوب زدن است. در این دوره آموزشی تکنیکهای اعتماد به نفس و رفع خجالت و کم حرفی، تکنیکهای کاربردی فن بیان، داشتن صدایی رسا و گیرا، مدیریت ترس از سخنرانی، نحوه نوشتن متن سخنرانی، روشهای تقویت حافظه، روانشناسی مخاطبین، الگوهای رفتاری و زبان بدن (Body Language)، روش ها و مهارت های برقراری ارتباط و روابط عمومی، ایجاد ارتباط موثر و خوب در جامعه، آداب معاشرت حرفه ای، فنون کسب شخصیت کاریزماتیک یعنی جذابیت، اثرگذاری و الهام بخش بودن را در دوره فن بیان و سخنرانی و مهارتهای ارتباطی فرا می گیرید. ۸۵% عامل پیروزی افراد موفق، مهارتهای ارتباطی، نحوه صحبت کردن و هوش اجتماعی آنهاست. بنابراین فرقی نمی&zwnj;کند که شما چه شغلی دارید، جزو مدیران، منشی ها و رییس دفترها، اساتید دانشگاهها و دانشجویان، مدرسان و مربیان موسسات آموزشی، فروشندگان، بازاریابان تلفنی و حضوری، راهنمای تور گردشگری، مسئول روابط عمومی هستید و یا هر شغل دیگری داشته باشید، بدون شک به فن بیان، قدرت سخنوری و سخنرانی و به طور کلی مهارت های خوب صحبت کردن و برقراری ارتباط نیاز دارید.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: IRANSans-Light-web; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/Management-certificate-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزش مدیریت آموزشگاه و کارت مدیریت آموزشگاه فنی و حرفه ای</span></a>&nbsp;: مدیر آموزشگاه شغلی از حوزه مدیریت آموزشی است که وظایفی از قبیل برنامه ریزی آموزشی، اجرای قوانین و مقررات، نظارت بر فعالیت های آموزشی آموزشگاه، ارزشیابی دوره های در حال اجرا، مدیریت مالی آموزشگاه، رسیدگی به امور کارآموزان و کارکنان، تهیه گزارش های اداری، نظارت و اعمال مدیریت بر حسن انجام وظایف کلیه کارکنان و مربیان را در بر می گیرد. این شغل با مشاغلی از قبیل مدیریت آموزشگاه های آزاد فنی وحرفه ای مرتبط است. طبق دستورالعمل سازمان آموزش فنی و حرفه ای کشور، گذراندن دوره مدیر آموزشگاه جهت دریافت کارت مدیریت آموزشگاه الزامیست. با شرکت در دوره آموزش مهارت مدیریت آموزشگاه های فنی حرفه ای می توانید در کوتاهترین زمان موفق به گرفتن کارت مدیریت آموزشگاههای سازمان فنی و حرفه ای شوید.</p>\n<p>\n	&nbsp;</p>\n<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(77, 74, 74); font-family: IRANSans-Light-web; text-align: justify;">\n	<a class="DLINK-Light-blue-2" href="https://www.payait.com/Coaching-certificate-training.aspx" style="box-sizing: border-box; color: rgb(0, 135, 222); text-decoration-line: none; background-color: transparent; transition: all 0.5s ease-out 0s; cursor: pointer; outline: none !important;"><span style="box-sizing: border-box; font-weight: bolder;">آموزش مربیگری آموزشگاه و کارت مربیگری آموزشگاه فنی و حرفه ای</span></a>&nbsp;: شغل مربیگری آموزشگاه به مجموعه ای از وظایف و توانمندی های خاص که از یک مربی در سطح مورد نظر انتظار می رود اطلاق می شود. در حرفه مربی گری اموزشگاه حداقل توانمندی های آموزشی و حرفه ای، رفتارهای عاطفی و مهارت های غیر فنی و اخلاق حرفه ای از مربیان دوره آموزش استاندارد فنی و حرفه ای انتظار می رود. مربی آموزشگاه پس از گذراندن دوره آموزش پداگوژی عمومی باید شایستگی و توانایی انجام کار در محیط ها و شرایط گوناگون را به طور موثر و کارا برابر استاندارد سازمان فنی حرفه ای داشته باشد. مربیگری آموزشگاه فنی و حرفه ای شامل بکارگیری روش ها و فنون تدریس یا پداگوژی، بررسی و بکارگیری اهداف آموزش های فنی و حرفه ای، برنامه ریزی آموزشی، تهیه و تنظیم طرح درس، بکارگیری وسایل کمک آموزشی، اجرای دوره های آموزشی، سنجش و ارزیابی می باشد. استاندارد آموزش شایستگی روش ها و فنون تدریس (پداگوژی) برای آموزش مهارت روش وفنون تدریس، ارزشیابی و ارزیابی کارآموزان و دوره آموزشی و همچنین آیین کلاس داری و یادگیری طراحی و تدوین گردیده است. گذراندن دوره پداگوژی عمومی جهت دریافت کارت مربیگری و تدریس در آموزشگاه های فنی و حرفه ای الزامیست. با شرکت در دوره آموزش مهارت مربیگری آموزشگاه می توانید در کوتاهترین زمان موفق به کسب گواهینامه مربیگری آموزشگاه و گرفتن کارت مربیگری آموزشگاههای سازمان فنی و حرفه ای شوید.</p>\n', '<p>\n	مراجعه به آموزشگاه در ساعات&nbsp;</p>\n<p>\n	<span style="color:#ff0000;">صبح ها </span>از ساعت 8 تا 12 ظهر&nbsp;</p>\n<p>\n	<span style="color:#ff0000;">عصر ها</span> 3 الی 19</p>\n<p>\n	&nbsp;</p>\n', '09192183440', '08137591', '08137591', 'corssis248@gmail.com', '6591953977', 'https://www.payait.com/', 'payait_institute', 'Paya_IT', NULL, 'PayaIT', 'Payait1', NULL, 'https://www.youtube.com/channel/UCW3glOL5vP6rhLWWOXKHc5w/?guided_help_flow=5', '<p>\n	آدرس آموزشگاه کامپیوتر پایا: تهران، میدان توحید، خیابان ستارخان، بین باقرخان و پاتریس، پلاک ۱۹۷</p>\n', '33.89592736342627', '48.751739214966086', 1, 1, NULL, NULL, NULL, '<p>\n	<a href="https://www.payait.com/dorepic/wonderful/ICDL-learning-wonderful.jpg"><img alt="" src="https://www.payait.com/dorepic/wonderful/ICDL-learning-wonderful.jpg" style="width: 705px; height: 178px;" /></a></p>\n<p>\n	<img alt="" src="https://www.payait.com/dorepic/wonderful/C-plus-Programming-learning-wonderful.jpg" style="width: 705px; height: 178px;" /></p>\n', NULL, '1603875241', '1603997959', '6c0ef-fanni.jpg', 'a9cb5-icdl-core-training.jpg', '6e3bf-web-developer-training.jpg', '1c4ff-indesign-training.jpg', '87bec-3dmax-training.jpg', 'c419d-accounting-training.jpg', '850d5-photoshop-training.jpg', 'آموزشگاه کامپیوتر پایا با مجوز رسمی از وزارت کار و سازمان فنی و حرفه ای کشور', 3, '1606467968', 30),
(47, 7, 3, 1, 8, 125, 'dsdsadsad', 'dsadsadsa', 'ddsadsad', NULL, NULL, 'dsadsad', 'dsadasd', NULL, 'dsdasdsad', 'dsadsad', NULL, 'sdadsadsa', 'sadsad', NULL, NULL, NULL, NULL, NULL, 'dsadsad', '33.89592736342627', '48.751739214966086', 0, 0, 'dsadasd', NULL, NULL, 'dsadsadsd', 'e8f84958b11ec5cb0419840d4d857e77.mp4', 'سه شنبه, ۲ دی ۱۳۹۹', 'سه شنبه, ۲ دی ۱۳۹۹', 'd06ca04ec73a374d50053e715f56be36.png', '6bdb9b4da01b8c9bc26e969f66795072.jpg', '171953be0f1b97bb671bc8d9513142b1.jpg', '0d90ca981ac30918ec4deec9ddecb359.jpg', '2cf303b8c77d4c1e4668a59b00d1a578.jpg', 'f4a175a9d16366d2512c51d4578706bc.jpg', '8eeb169367916faabbaa8594590a11b7.jpg', 'dsdsadsa', 2, '1611259139', 30),
(48, 7, 3, 1, 5, 279, '', 'dsadasd', 'dsadasd', NULL, NULL, 'dsadasd', 'dsadasdas', NULL, 'dasdasdas', 'dsadsa', NULL, 'dsa', 'dasd', NULL, NULL, NULL, NULL, NULL, 'dsadd', '33.89593894055068', '48.75163730503691', 0, 0, 'dsadasd', NULL, NULL, 'dsadasdasd', 'e1f00be55ae9ea5a97ffbce0a61d738d.mp4', 'سه شنبه, ۲ دی ۱۳۹۹', '0', '6d8fba187c7c88819d95a977be73592a.png', 'f89d3f2326b67f1bb918e47ce45430ef.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', '<p></p>', 'dsadas', 12, '1616444001', 90);

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
-- Table structure for table `zgr_jobs_pay`
--

CREATE TABLE `zgr_jobs_pay` (
  `jobs_pay_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `jobs_id` int(11) NOT NULL,
  `authority` text NOT NULL,
  `mobile` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `pay_date` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_jobs_pay`
--

INSERT INTO `zgr_jobs_pay` (`jobs_pay_id`, `accounts_id`, `jobs_id`, `authority`, `mobile`, `amount`, `pay_date`, `Status`) VALUES
(1, 1, 0, '000000000000000000000000000000236668', '09192183440', 4000, 'سه شنبه, ۲ دی ۱۳۹۹', 'OK');

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
  `price_title` text NOT NULL,
  `price_amount` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_price`
--

INSERT INTO `zgr_price` (`price_id`, `price_title`, `price_amount`) VALUES
(1, 'آگهی ها', '1000'),
(2, 'پتل شغلی', '1000');

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
-- Table structure for table `zgr_settings`
--

CREATE TABLE `zgr_settings` (
  `set_id` int(11) NOT NULL,
  `api_name` text NOT NULL,
  `set_name` text NOT NULL,
  `set_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_settings`
--

INSERT INTO `zgr_settings` (`set_id`, `api_name`, `set_name`, `set_value`) VALUES
(1, 'زرین پال', 'merchant_id', 'c0afcfa8-7260-11e8-a56a-005056a205be'),
(2, 'کاوه نگار', 'kavenegar_api', '2F38547A5659585448792B377A6E483449332F537646393958736372442F374B');

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
  `agahi_tarefe` text NOT NULL,
  `agahi_show_time_title` text NOT NULL,
  `agahi_show_time_val` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_show_time`
--

INSERT INTO `zgr_show_time` (`agahi_show_time_id`, `agahi_tarefe`, `agahi_show_time_title`, `agahi_show_time_val`) VALUES
(1, '1000', 'يك ماهه', '30'),
(2, '2000', 'دو ماهه', '60'),
(3, '3000', 'سه ماهه', '90'),
(4, '4000', 'يكساله', '365');

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
  `API_KEY_KAVENEGAR` text NOT NULL,
  `help_agahi` text NOT NULL,
  `help_car` text NOT NULL,
  `agahi_vip_help` text NOT NULL,
  `agahi_free_help` text NOT NULL,
  `help_car_vip` text NOT NULL,
  `help_car_free` text NOT NULL,
  `show_time_free` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_site`
--

INSERT INTO `zgr_site` (`site_id`, `site_title`, `site_des`, `site_keywords`, `site_logo`, `site_icon`, `site_btn_one_title`, `site_btn_one_link`, `site_btn_one_ico`, `site_btn_two_title`, `site_btn_two_link`, `site_btn_two_ico`, `site_ads_text`, `police_text`, `API_KEY_ZARINPAL`, `API_KEY_KAVENEGAR`, `help_agahi`, `help_car`, `agahi_vip_help`, `agahi_free_help`, `help_car_vip`, `help_car_free`, `show_time_free`) VALUES
(1, 'زاگرينو', 'توضيحات زاگرينو', 'تخفيف, گروهي', 'd293e-.jpg', '', 'فروشگاه', 'http://localhost/zagrino/Index', '3ec90-soroush.png', 'انجمن', 'http://localhost/zagrino/Index', '5bb51-ita_icon.png', '', '<p style="text-align: right;">\n	این هشدار تست می باشد</p>\n', '', '', '<p>\n	راهنمای ثبت آگهی</p>\n', '<p>\n	راهنمای ثبت وسایل نقلیه</p>\n', '<div class="form-group agahi_vip_help_form_group" style="box-sizing: border-box; text-align: right; margin-bottom: 15px; margin-right: -15px; margin-left: -15px;">\n	<label class="col-sm-2 control-label" style="box-sizing: border-box; font-weight: 700; display: inline-block; max-width: 100%; margin-bottom: 0px; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 206.188px; padding-top: 7px; direction: rtl !important;">راهنمای ثبت آگهی ویژه</label></div>\n<div class="form-group agahi_free_help_form_group" style="box-sizing: border-box; text-align: right; margin-bottom: 15px; margin-right: -15px; margin-left: -15px;">\n	<div class="col-sm-10" style="box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 1031px;">\n		&nbsp;</div>\n</div>\n<p>\n	&nbsp;</p>\n', '<div class="form-group agahi_free_help_form_group" font-size:="" helvetica="" style="box-sizing: border-box; text-align: right; margin-bottom: 15px; margin-right: -15px; margin-left: -15px; color: rgb(51, 51, 51); font-family: iranyekanwebregular, ">\n	<label class="col-sm-2 control-label" style="box-sizing: border-box; font-weight: 700; display: inline-block; max-width: 100%; margin-bottom: 0px; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 206.188px; padding-top: 7px; direction: rtl !important;">راهنمای ثبت آگهی رایگان</label></div>\n<div class="form-group" font-size:="" helvetica="" style="box-sizing: border-box; text-align: right; margin-bottom: 15px; margin-right: -15px; margin-left: -15px; color: rgb(51, 51, 51); font-family: iranyekanwebregular, ">\n	&nbsp;</div>\n', 'sss', 'ddddd', 12);

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
(8, 'در دست بررسي'),
(9, 'مدیر کل'),
(10, 'خوانده نشده'),
(11, 'خوانده شده'),
(12, 'منتظر تایید');

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
  `tour_phone` text,
  `tour_address` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `img6` text,
  `map_latitude` text,
  `map_longitude` text,
  `tour_email` text,
  `state_id` int(11) DEFAULT NULL,
  `register_date` text,
  `update_date` text,
  `days` int(11) DEFAULT NULL,
  `expire` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_tour`
--

INSERT INTO `zgr_tour` (`tour_id`, `accounts_id`, `ostan_id`, `city_id`, `tour_type`, `tour_title`, `tour_des`, `tour_mabda`, `tour_maghsad`, `tour_start`, `tour_finish`, `tour_vasile`, `tour_count_night`, `tour_takht`, `tour_phone`, `tour_address`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `map_latitude`, `map_longitude`, `tour_email`, `state_id`, `register_date`, `update_date`, `days`, `expire`) VALUES
(1, 1, 3, 51, 'سیاحتی', 'fffffffffffffffffff', '<p>\n	ssssssssssssssssssssss</p>\n', 'sdsdddddddddddddddd', 'dddddddddddddddddd', 'ddddddddd', 'dddddddd', 'ddddddddddddddd', '2', 2, '0813 322 3907', '<p>\n	33.89594072168941</p>\n', 'e30c407e5dc157940a7724c4ee641f6c.jpg', '1ebf74051672e941c0185412ab7436b6.jpg', '<p></p>', '<p></p>', '<p></p>', '<p></p>', NULL, '48.75132084788833', 'corssis248@gmail.com', 12, 'جمعه, ۲۸ آذر ۱۳۹۹', '1608808080', 60, '1613474355');

-- --------------------------------------------------------

--
-- Table structure for table `zgr_tour_pay`
--

CREATE TABLE `zgr_tour_pay` (
  `tour_pay_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `authority` text NOT NULL,
  `mobile` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `pay_date` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zgr_tour_pay`
--

INSERT INTO `zgr_tour_pay` (`tour_pay_id`, `accounts_id`, `tour_id`, `authority`, `mobile`, `amount`, `pay_date`, `Status`) VALUES
(1, 1, 0, '000000000000000000000000000000222701', '09192183440', 4000, 'جمعه, ۲۸ آذر ۱۳۹۹', 'OK');

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1609095292, 1, 'Admin', 'istrator', 'ADMIN', '0');

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
-- Indexes for table `car_pay`
--
ALTER TABLE `car_pay`
  ADD PRIMARY KEY (`car_pay_id`);

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
-- Indexes for table `zgr_agahi_pay`
--
ALTER TABLE `zgr_agahi_pay`
  ADD PRIMARY KEY (`agahi_pay_id`);

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
-- Indexes for table `zgr_amlak_pay`
--
ALTER TABLE `zgr_amlak_pay`
  ADD PRIMARY KEY (`amlak_pay_id`);

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
-- Indexes for table `zgr_eghamatgah_pay`
--
ALTER TABLE `zgr_eghamatgah_pay`
  ADD PRIMARY KEY (`eghamatgah_pay_id`);

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
-- Indexes for table `zgr_events_pay`
--
ALTER TABLE `zgr_events_pay`
  ADD PRIMARY KEY (`events_pay_id`);

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
-- Indexes for table `zgr_jobs_pay`
--
ALTER TABLE `zgr_jobs_pay`
  ADD PRIMARY KEY (`jobs_pay_id`);

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
-- Indexes for table `zgr_settings`
--
ALTER TABLE `zgr_settings`
  ADD PRIMARY KEY (`set_id`);

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
-- Indexes for table `zgr_tour_pay`
--
ALTER TABLE `zgr_tour_pay`
  ADD PRIMARY KEY (`tour_pay_id`);

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
-- AUTO_INCREMENT for table `car_pay`
--
ALTER TABLE `car_pay`
  MODIFY `car_pay_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `zgr_agahi`
--
ALTER TABLE `zgr_agahi`
  MODIFY `agahi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `zgr_agahi_amlak`
--
ALTER TABLE `zgr_agahi_amlak`
  MODIFY `agahi_amlak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `zgr_agahi_car`
--
ALTER TABLE `zgr_agahi_car`
  MODIFY `agahi_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_agahi_cate`
--
ALTER TABLE `zgr_agahi_cate`
  MODIFY `agahi_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `zgr_agahi_pay`
--
ALTER TABLE `zgr_agahi_pay`
  MODIFY `agahi_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `zgr_agahi_state_kala`
--
ALTER TABLE `zgr_agahi_state_kala`
  MODIFY `agahi_state_kala_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_agahi_sub_cate`
--
ALTER TABLE `zgr_agahi_sub_cate`
  MODIFY `agahi_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT for table `zgr_amlak_pay`
--
ALTER TABLE `zgr_amlak_pay`
  MODIFY `amlak_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zgr_amlak_tag`
--
ALTER TABLE `zgr_amlak_tag`
  MODIFY `amlak_tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_body`
--
ALTER TABLE `zgr_car_body`
  MODIFY `car_body_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zgr_car_cate`
--
ALTER TABLE `zgr_car_cate`
  MODIFY `car_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgr_car_cond_tag`
--
ALTER TABLE `zgr_car_cond_tag`
  MODIFY `car_cond_tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_sokht`
--
ALTER TABLE `zgr_car_sokht`
  MODIFY `car_sokht_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zgr_car_state`
--
ALTER TABLE `zgr_car_state`
  MODIFY `car_state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zgr_car_sub_cate`
--
ALTER TABLE `zgr_car_sub_cate`
  MODIFY `car_sub_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgr_car_tag`
--
ALTER TABLE `zgr_car_tag`
  MODIFY `car_tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_car_type`
--
ALTER TABLE `zgr_car_type`
  MODIFY `car_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zgr_category`
--
ALTER TABLE `zgr_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_eghamatgah`
--
ALTER TABLE `zgr_eghamatgah`
  MODIFY `eghamatgah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `zgr_eghamatgah_pay`
--
ALTER TABLE `zgr_eghamatgah_pay`
  MODIFY `eghamatgah_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_events`
--
ALTER TABLE `zgr_events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_events_level`
--
ALTER TABLE `zgr_events_level`
  MODIFY `events_level_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_events_pay`
--
ALTER TABLE `zgr_events_pay`
  MODIFY `events_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `jobs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `zgr_jobs_cate`
--
ALTER TABLE `zgr_jobs_cate`
  MODIFY `jobs_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `zgr_jobs_pay`
--
ALTER TABLE `zgr_jobs_pay`
  MODIFY `jobs_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgr_rel_eghamat_service`
--
ALTER TABLE `zgr_rel_eghamat_service`
  MODIFY `rel_eghamat_service_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zgr_rel_jobs_service`
--
ALTER TABLE `zgr_rel_jobs_service`
  MODIFY `rel_jobs_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `zgr_secend_menu`
--
ALTER TABLE `zgr_secend_menu`
  MODIFY `smenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `zgr_settings`
--
ALTER TABLE `zgr_settings`
  MODIFY `set_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zgr_tour_pay`
--
ALTER TABLE `zgr_tour_pay`
  MODIFY `tour_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
