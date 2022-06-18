-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 01:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `make_up`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keyword` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `part` int(11) NOT NULL,
  `name_en` text COLLATE utf8_persian_ci NOT NULL,
  `keyword_en` text COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`, `keyword`, `part`, `name_en`, `keyword_en`, `img`) VALUES
(1, 'برند 1', 0, '', 1, 'Sneaker for Sports', '', 'AF-Include/theme/img/category/c1.jpg'),
(2, 'برند.1', 1, '', 1, 'Sneaker for Sports', '', 'AF-Include/theme/img/category/c2.jpg'),
(3, 'برند.2', 4, '', 1, 'Sneaker for Sports', '', 'AF-Include/theme/img/category/c4.jpg'),
(4, 'برند2', 0, '', 1, 'Sneaker for Sports', '', 'AF-Include/theme/img/category/c3.jpg'),
(5, 'برند 1', 0, '', 2, 'Sneaker for Sports', '', 'AF-Include/theme/img/category/c1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `web` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_persian_ci NOT NULL,
  `stat` int(11) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL DEFAULT '0',
  `reply` int(11) NOT NULL DEFAULT '0',
  `part` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `name_en` text COLLATE utf8_persian_ci NOT NULL,
  `message_en` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `web`, `message`, `stat`, `post_id`, `reply`, `part`, `time`, `user_id`, `name_en`, `message_en`) VALUES
(1, 'فرجام', '', NULL, 'سلام', 1, 1, 0, 1, '2019-05-26 09:55:15', NULL, 'farjam', 'salam'),
(2, 'فرجام', '', NULL, 'سلام', 1, 0, 1, 1, '2019-05-26 09:55:23', NULL, 'farjam', 'salam'),
(3, 'فرجام', '', NULL, 'سلام', 0, 2, 0, 1, '2019-05-13 13:38:40', NULL, 'farjam', 'salam'),
(4, 'فرجام', '', NULL, 'سلام', 1, 1, 0, 2, '2019-05-26 09:41:26', NULL, 'farjam', 'salam'),
(5, 'فرجام', '', NULL, 'سلام', 0, 2, 0, 2, '2019-05-22 08:32:06', NULL, 'farjam', 'salam'),
(6, 'فرجام', '', NULL, 'سلام', 1, 0, 4, 2, '2019-05-29 16:34:35', NULL, 'farjam', 'salam'),
(8, 'فرجام', '', NULL, 'سلام', 1, 2, 2, 2, '2020-05-24 21:32:00', NULL, 'farjam', 'salam'),
(11, 'ali', 'email@email.com', NULL, 'slm', 1, 1, 0, 2, '2019-05-29 16:43:40', NULL, '', ''),
(12, 'ali', 'email@email.com', NULL, 'salam', 0, 1, 0, 2, '2019-05-29 20:31:26', NULL, '', ''),
(19, 'ali', 'email@email.com', NULL, 'slm', 1, 1, 0, 1, '2019-06-30 13:31:20', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `sabject` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `mor_text` longtext COLLATE utf8_persian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `autor` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `keyword` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `category` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `title_en` text COLLATE utf8_persian_ci NOT NULL,
  `text_en` text COLLATE utf8_persian_ci NOT NULL,
  `more_text_en` longtext COLLATE utf8_persian_ci NOT NULL,
  `keyword_en` varchar(500) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `mor_text` longtext COLLATE utf8_persian_ci,
  `autor` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keyword` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `video` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `img` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `category` int(11) NOT NULL,
  `title_en` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `text_en` text COLLATE utf8_persian_ci NOT NULL,
  `more_text_en` longtext COLLATE utf8_persian_ci NOT NULL,
  `keyword_en` varchar(500) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `text`, `mor_text`, `autor`, `time`, `keyword`, `video`, `img`, `category`, `title_en`, `text_en`, `more_text_en`, `keyword_en`) VALUES
(1, 'عنوان 1', 'متن 1', 'ادامه 1', 'فرجام', '2019-05-19 13:06:07', 'متن_پست', NULL, 'AF-Include/theme/img/blog/main-blog/m-blog-1.jpg', 1, 'title 1', 'text 1', 'more text 1', 'text_post'),
(2, 'عنوان 2', 'متن 2', 'ادامه 2', 'حمید رضا', '2019-05-29 16:00:50', 'متن_پست', NULL, 'AF-Include/theme/img/blog/main-blog/m-blog-1.jpg', 1, 'title 2', 'text 2', 'more text 2', 'text_post');

-- --------------------------------------------------------

--
-- Table structure for table `prodect`
--

CREATE TABLE `prodect` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `gallery` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `about` text COLLATE utf8_persian_ci NOT NULL,
  `pescrintion` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `foni_detail` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `autor` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `keyword` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `about_en` longtext COLLATE utf8_persian_ci NOT NULL,
  `keyword_en` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `attr` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `views` int(11) NOT NULL,
  `text_en` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `prodect`
--

INSERT INTO `prodect` (`id`, `name`, `price`, `discount`, `cat_id`, `amount`, `img`, `gallery`, `about`, `pescrintion`, `foni_detail`, `time`, `autor`, `keyword`, `name_en`, `about_en`, `keyword_en`, `text`, `attr`, `views`, `text_en`) VALUES
(1, 'ادیداس', 100, 0, 1, 4, 'AF-Include/theme/img/product/p1.jpg', '', 'محصول 1', '', '', '2019-05-13 13:31:07', '', '', 'adidass', 'addidas New Hammer sole for Sports person', '', 'درباره محصول', '', 0, 'about product'),
(2, 'ادیداس', 100, 150, 2, 4, 'AF-Include/theme/img/product/p2.jpg', '', 'محصول 2', '', '', '2019-05-13 13:31:10', '', '', 'adidass', 'addidas New Hammer sole for Sports person', '', 'درباره محصول', '', 0, 'about product'),
(3, 'ادیداس', 100, 150, 3, 4, 'AF-Include/theme/img/product/p3.jpg', '', 'محصول 3', '', '', '2019-05-13 13:31:12', '', '', 'adidass', 'addidas New Hammer sole for Sports person', '', 'درباره محصول', '', 0, 'about product'),
(4, 'ادیداس', 100, 150, 4, 4, 'AF-Include/theme/img/product/p4.jpg', '', 'محصول 4', '', '', '2019-05-13 13:31:22', '', '', 'adidass', 'addidas New Hammer sole for Sports person', '', 'درباره محصول', '', 0, 'about product'),
(5, 'ادیداس', 100, 150, 0, 4, 'AF-Include/theme/img/product/p5.jpg', '', 'محصول 5', '', '', '2019-05-13 13:31:26', '', '', 'adidass', 'addidas New Hammer sole for Sports person', '', 'درباره محصول', '', 0, 'about product'),
(7, 'ادیداس', 100, 150, 0, 4, 'AF-Include/theme/img/product/p5.jpg', '', 'محصول 6', '', '', '2019-05-13 13:31:26', '', '', 'adidass', 'addidas New Hammer sole for Sports person', '', 'درباره محصول', '', 0, 'about product'),
(8, 'ادیداس', 100, 150, 0, 0, 'AF-Include/theme/img/product/p5.jpg', '', 'محصول 6', '', '', '2019-06-15 16:06:47', '', '', 'adidass', 'addidas New Hammer sole for Sports person', '', 'درباره محصول', '', 0, 'about product');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `catId` int(11) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `sampleId` int(11) NOT NULL DEFAULT '0',
  `img` varchar(500) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_persian_ci,
  `slider` varchar(500) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `keywords` varchar(700) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_persian_ci,
  `productDescription` text COLLATE utf8mb4_persian_ci NOT NULL,
  `virtualDescription` text COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'account detail - send after buy to buyer',
  `price` varchar(12) COLLATE utf8mb4_persian_ci NOT NULL,
  `discount` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `fare` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '0' COMMENT '0 : with seller , more than 0 : with buyer',
  `offer` longtext COLLATE utf8mb4_persian_ci NOT NULL,
  `vip` int(11) NOT NULL COMMENT '...',
  `sentTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'array(code,text)',
  `vipDone` int(11) NOT NULL COMMENT '....',
  `vipAgent` int(11) NOT NULL COMMENT '....',
  `sold` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'timestamp (sale date)',
  `feedback` text COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'Sales Survey'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `parentid` int(11) NOT NULL DEFAULT '0',
  `description` varchar(1000) COLLATE utf8mb4_persian_ci NOT NULL,
  `keywords` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `formField` text COLLATE utf8mb4_persian_ci NOT NULL,
  `sample` tinyint(1) NOT NULL DEFAULT '0',
  `virtual` tinyint(1) NOT NULL DEFAULT '0',
  `shortLink` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `sentTime` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `img`, `parentid`, `description`, `keywords`, `formField`, `sample`, `virtual`, `shortLink`, `sentTime`, `author`) VALUES
(9, 'محصولات پیشفرض', 'HK-Content/upload/productCat/1565087046.jpg', 0, 'no description', 'قرمز,آبی', 'O:8:\"stdClass\":5:{s:6:\"field1\";O:8:\"stdClass\":8:{s:4:\"type\";s:5:\"color\";s:4:\"name\";s:5:\"color\";s:5:\"label\";s:26:\"رنگ مورد علاقه\";s:11:\"placeholder\";s:21:\"انتخاب کنید\";s:5:\"value\";s:0:\"\";s:5:\"regex\";s:0:\"\";s:7:\"message\";s:0:\"\";s:7:\"require\";b:0;}s:6:\"field2\";O:8:\"stdClass\":8:{s:4:\"type\";s:6:\"button\";s:4:\"name\";s:4:\"fuck\";s:5:\"label\";s:27:\"if you want to fuck , click\";s:11:\"placeholder\";s:0:\"\";s:5:\"value\";s:11:\"fuck button\";s:5:\"regex\";s:0:\"\";s:7:\"message\";s:0:\"\";s:7:\"require\";b:0;}s:6:\"field3\";O:8:\"stdClass\":8:{s:4:\"type\";s:4:\"date\";s:4:\"name\";s:8:\"bornDate\";s:5:\"label\";s:19:\"تاریخ تولد\";s:11:\"placeholder\";s:49:\"تاریخ تولد خود را وارد کنید\";s:5:\"value\";s:0:\"\";s:5:\"regex\";s:0:\"\";s:7:\"message\";s:0:\"\";s:7:\"require\";b:0;}s:6:\"field4\";O:8:\"stdClass\":8:{s:4:\"type\";s:6:\"number\";s:4:\"name\";s:6:\"number\";s:5:\"label\";s:26:\"عدد مورد علاقه\";s:11:\"placeholder\";s:17:\"وارد کنید\";s:5:\"value\";s:2:\"13\";s:5:\"regex\";s:0:\"\";s:7:\"message\";s:0:\"\";s:7:\"require\";b:0;}s:6:\"field5\";O:8:\"stdClass\":8:{s:4:\"type\";s:4:\"text\";s:4:\"name\";s:4:\"name\";s:5:\"label\";s:33:\"نام و نام خانوادگی\";s:11:\"placeholder\";s:63:\"نام و نام خانوادگی خود را وارد کنید\";s:5:\"value\";s:0:\"\";s:5:\"regex\";s:0:\"\";s:7:\"message\";s:0:\"\";s:7:\"require\";b:1;}}', 1, 1, 'محصولات-پیشفرض', '1565527613', 1),
(10, 'دسته اجباری', 'HK-Content/upload/productCat/1565101501.jpg', 0, 'توضیحات است بلی', 'قرمز', 'O:8:\"stdClass\":1:{s:6:\"field1\";O:8:\"stdClass\":8:{s:4:\"type\";s:4:\"date\";s:4:\"name\";s:4:\"date\";s:5:\"label\";s:19:\"تاریخ تولد\";s:11:\"placeholder\";s:26:\"تاریخو وارد کن\";s:5:\"value\";s:0:\"\";s:5:\"regex\";s:0:\"\";s:7:\"message\";s:0:\"\";s:7:\"require\";b:0;}}', 0, 0, 'دسته-اجباری', '1565252863', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sample_product`
--

CREATE TABLE `sample_product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `catId` int(11) NOT NULL,
  `keywords` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_persian_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_persian_ci NOT NULL,
  `author` int(11) NOT NULL,
  `sentTime` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sample_product`
--

INSERT INTO `sample_product` (`id`, `title`, `img`, `catId`, `keywords`, `description`, `value`, `author`, `sentTime`) VALUES
(1, 'تست json', 'HK-Content/upload/product/2019/08/1565188161.jpg', 10, 'قرمز', 'توضیح تست', 'O:8:\"stdClass\":2:{s:6:\"field1\";O:8:\"stdClass\":3:{s:5:\"label\";s:20:\"متن اجباری;\";s:5:\"value\";s:13:\"متن تست\";s:4:\"name\";s:7:\"reqText\";}s:6:\"field2\";O:8:\"stdClass\":3:{s:5:\"label\";s:20:\"تاریخ تولد;\";s:5:\"value\";s:0:\"\";s:4:\"name\";s:4:\"date\";}}', 1, '1565188161'),
(2, 'تست json', 'HK-Content/upload/product/2019/08/1565188197.jpg', 10, 'قرمز', 'توضیح تست', 'O:8:\"stdClass\":2:{s:6:\"field1\";O:8:\"stdClass\":3:{s:5:\"label\";s:20:\"متن اجباری;\";s:5:\"value\";s:13:\"متن تست\";s:4:\"name\";s:7:\"reqText\";}s:6:\"field2\";O:8:\"stdClass\":3:{s:5:\"label\";s:20:\"تاریخ تولد;\";s:5:\"value\";s:0:\"\";s:4:\"name\";s:4:\"date\";}}', 1, '1565188197');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `value` longtext COLLATE utf8_persian_ci NOT NULL,
  `value_en` longtext COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `value`, `value_en`) VALUES
(1, 'site_title', 'فروشگاه', 'shop'),
(2, 'site_banner', 'اخبار نایک', 'Nike New'),
(3, 'site_banner_2', 'کالکشن', 'Collection'),
(4, 'site_banner_about', 'متن شما', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et\r\n										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.'),
(5, 'footer_about_title', 'درباره ما', 'about us'),
(6, 'footer_about_text', 'متن شما', 'your text'),
(7, 'footer_contact', 'a:4:{s:8:\"facebook\";s:16:\"http://cr77.com/\";s:6:\"google\";s:15:\"http://cr7.com/\";s:7:\"twitter\";s:14:\"http://cr.com/\";s:8:\"telegram\";s:16:\"http://ccr7,com/\";}', 'a:4:{s:8:\"facebook\";s:16:\"http://cr77.com/\";s:6:\"google\";s:15:\"http://cr7.com/\";s:7:\"twitter\";s:14:\"http://cr.com/\";s:8:\"telegram\";s:16:\"http://ccr7,com/\";}'),
(8, 'footer_contact_title', 'ما را دنبال کنید ', 'follow us'),
(9, 'footer_img', 'a:5:{s:4:\"img1\";s:27:\"AF-Content/Theme/img/i1.jpg\";s:4:\"img2\";s:27:\"AF-Content/Theme/img/i2.jpg\";s:4:\"img3\";s:27:\"AF-Content/Theme/img/i3.jpg\";s:4:\"img4\";s:27:\"AF-Content/Theme/img/i4.jpg\";s:4:\"img5\";s:27:\"AF-Content/Theme/img/i5.jpg\";}', 'a:5:{s:4:\"img1\";s:27:\"AF-Content/Theme/img/i1.jpg\";s:4:\"img2\";s:27:\"AF-Content/Theme/img/i2.jpg\";s:4:\"img3\";s:27:\"AF-Content/Theme/img/i3.jpg\";s:4:\"img4\";s:27:\"AF-Content/Theme/img/i4.jpg\";s:4:\"img5\";s:27:\"AF-Content/Theme/img/i5.jpg\";}'),
(10, 'footer_instragram', 'اینستاگرام ما', 'instragram feed'),
(11, 'category_title', 'دسته بندی ها', 'categories'),
(12, 'category_banner', 'صفحه دسته بندی های فروشگاه', 'shop category page'),
(13, 'footer_News', 'خبرنامه', 'Newsletter'),
(14, 'product_title', 'محصولات', 'Product Details Page'),
(15, 'Deals', 'تخفیف هفته', 'Deals of the Week');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `part` int(11) NOT NULL,
  `importance` enum('1','2','3') COLLATE utf8mb4_persian_ci NOT NULL COMMENT '1 : low , 2 : medium ,3 : high',
  `star` tinyint(1) NOT NULL DEFAULT '0',
  `reply` int(11) NOT NULL DEFAULT '0',
  `sender` int(11) NOT NULL,
  `sentTime` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_persian_ci NOT NULL,
  `attachment` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '1' COMMENT '0 : close , 1 : open',
  `viewed` enum('0','1') COLLATE utf8mb4_persian_ci NOT NULL COMMENT '0 : unread , 1 : read',
  `reciever` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `title`, `part`, `importance`, `star`, `reply`, `sender`, `sentTime`, `text`, `attachment`, `status`, `viewed`, `reciever`, `deleted`) VALUES
(4, 'as safsa ', 7, '1', 0, 0, 0, '1564165059', '<p>as as as as</p>\n', '', '1', '0', 1, 0),
(5, 'تست برای ضمیمه', 6, '2', 1, 0, 0, '1564165141', '<p>سلام این تست برای بررسی صحت عملکرد بخش ضمیمه است&nbsp;</p>\n', '', '1', '0', 1, 0),
(7, 'تست برای ضمیمه', 6, '2', 0, 0, 0, '1564165281', '<p>سلام این تست برای بررسی صحت عملکرد بخش ضمیمه است&nbsp;</p>\n', '', '1', '0', 1, 0),
(8, 'موضوع برای تست است ', 7, '1', 1, 0, 1, '1564165419', '<p>سلام این متن صرفا برای تست ضمیمه است&nbsp;</p>\n', '', '1', '0', 0, 0),
(9, 'موضوع برای تست است ', 7, '1', 0, 0, 0, '1564165433', '<p>سلام این متن صرفا برای تست ضمیمه است&nbsp;</p>\n', '', '1', '0', 1, 0),
(10, 'موضوع برای تست است ', 7, '1', 0, 0, 0, '1564165455', '<p>سلام این متن صرفا برای تست ضمیمه است&nbsp;</p>\n', '', '1', '0', 1, 0),
(11, 'برای تست میباشد', 7, '1', 1, 0, 0, '1564165529', '<p>اره اره&nbsp;</p>\n', '', '1', '0', 1, 0),
(12, 'برای تست میباشد', 7, '1', 0, 0, 0, '1564165546', '<p>اره اره&nbsp;</p>\n', '', '1', '0', 1, 0),
(13, 'برای تست میباشد', 7, '1', 1, 0, 0, '1564166662', '<p>اره اره&nbsp;</p>\n', '', '1', '0', 1, 0),
(17, '', 0, '1', 0, 13, 0, '1564482212', 'گوه نخور', '', '1', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `support_part`
--

CREATE TABLE `support_part` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `support_part`
--

INSERT INTO `support_part` (`id`, `name`, `color`) VALUES
(6, 'فنی', ''),
(7, 'تست رنگ', '#ff80c0'),
(8, 'گرافیک', '#8080ff');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `l_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `avatar` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `contact` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `stat` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `about` varchar(500) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `l_name`, `email`, `password`, `mobile`, `avatar`, `contact`, `stat`, `img`, `about`) VALUES
(2, 'حمید رضا', 'کوچک زاده', 'hamid@hamid.com', '122112', 0, '', '', 0, '', 'درباره نویسنده');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `privilage_id` int(11) NOT NULL DEFAULT '0',
  `mobile` varchar(11) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `melli_code` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_persian_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_persian_ci NOT NULL,
  `sex` int(11) NOT NULL DEFAULT '1' COMMENT '1 : Boy , 2 : girl',
  `birthday` text COLLATE utf8mb4_persian_ci NOT NULL,
  `tell` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `ostan` varchar(150) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `city` varchar(150) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `state` int(5) NOT NULL DEFAULT '1' COMMENT '0 : active , 1 : deactiive , 2 : Block',
  `about` text COLLATE utf8mb4_persian_ci NOT NULL,
  `skill` text COLLATE utf8mb4_persian_ci,
  `addresses` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `bank_accounts` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `offers` longtext CHARACTER SET utf8 COLLATE utf8_persian_ci,
  `admin` int(11) NOT NULL DEFAULT '0' COMMENT '0: regular user',
  `agent_vip` int(11) NOT NULL DEFAULT '0',
  `user_type` int(11) NOT NULL COMMENT '0 : user , 1 : agent',
  `user_vip` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `account` text COLLATE utf8mb4_persian_ci,
  `register_time` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `active_code` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `this_login` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `last_login` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `degree1` int(11) NOT NULL DEFAULT '0' COMMENT 'user permisson , seprate permissons bu comma',
  `degree2` int(11) NOT NULL DEFAULT '0',
  `change_password` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `change_password2` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `privilage_id`, `mobile`, `melli_code`, `avatar`, `first_name`, `last_name`, `father_name`, `password`, `sex`, `birthday`, `tell`, `ostan`, `city`, `state`, `about`, `skill`, `addresses`, `bank_accounts`, `offers`, `admin`, `agent_vip`, `user_type`, `user_vip`, `account`, `register_time`, `active_code`, `this_login`, `last_login`, `degree1`, `degree2`, `change_password`, `change_password2`) VALUES
(1, 'admin', 'hr.kz1378@gmail.com', 1, NULL, '', 'uploads/avatars/5b1772f540ba8.jpeg', 'حمیدرضا', 'کوچک زاده', 'Ebrahim', '6d730c1a25d774d830682dddd18fd47e0574944bfa92bb9a26f58537eebd4db4d92a95509ae10e73593ad8a3719cf15fdf4ca2cd9512684b45be05ae739a807c', 1, '', '', NULL, NULL, 0, '', NULL, '', '', NULL, 1, 0, 0, '', NULL, '', '', '1565523458', '1565503365', 1, 0, NULL, NULL),
(4, 'user', 'test@test.com', 0, NULL, '0312059639', 'uploads/avatars/5b1772f540ba8.jpeg', 'یاسر', 'راستی', 'Ebrahim', '6d730c1a25d774d830682dddd18fd47e0574944bfa92bb9a26f58537eebd4db4d92a95509ae10e73593ad8a3719cf15fdf4ca2cd9512684b45be05ae739a807c', 1, '', '', 'البرز', 'کرج', 0, '', NULL, '', '', NULL, 0, 0, 0, '0', NULL, '', '', '1563266227', '1563266227', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_privilage`
--

CREATE TABLE `users_privilage` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `permission` longtext COLLATE utf8mb4_persian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users_privilage`
--

INSERT INTO `users_privilage` (`id`, `name`, `permission`) VALUES
(1, 'مدیر کل', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vip`
--

CREATE TABLE `vip` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `day` varchar(3) COLLATE utf8mb4_persian_ci NOT NULL,
  `telegram` tinyint(4) NOT NULL DEFAULT '0',
  `slider` tinyint(4) NOT NULL DEFAULT '0',
  `price` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `comission` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `type` enum('product','agent') COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci,
  `sentTime` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `author` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `vip`
--

INSERT INTO `vip` (`id`, `name`, `img`, `day`, `telegram`, `slider`, `price`, `comission`, `type`, `description`, `sentTime`, `author`) VALUES
(1, 'تست 2', 'img', '5', 0, 1, '4', '35', 'agent', 'description', '1563266227', '1'),
(2, 'تست', '', '12', 0, 1, '12', '0', 'product', 'توضیحات', '1563467676', '1'),
(3, 'تست', '', '12', 0, 1, '12', '0', 'product', 'توضیحات', '1563467692', '1'),
(4, 'تست عه', '', '12', 1, 0, '135', '0', 'product', 'توضیح', '1563467749', '1'),
(5, 'تست عه', '', '12', 1, 0, '135', '0', 'product', 'توضیح', '1563467782', '1'),
(6, 'تست آخر', '', '12', 0, 1, '123', '0', 'product', 'توضیح', '1563467845', '1'),
(7, 'نام', '', '22', 0, 0, '230', '12', 'agent', 'description', '1563525726', '1'),
(8, 'نام', '', '22', 0, 0, '230', '12', 'agent', 'description', '1563609492', '1'),
(9, 'طلایی', '', '365', 1, 0, '12000', '2', 'agent', '', '1563624428', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodect`
--
ALTER TABLE `prodect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shortLink` (`shortLink`);

--
-- Indexes for table `sample_product`
--
ALTER TABLE `sample_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_part`
--
ALTER TABLE `support_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `melli_code` (`melli_code`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `users_privilage`
--
ALTER TABLE `users_privilage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prodect`
--
ALTER TABLE `prodect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
