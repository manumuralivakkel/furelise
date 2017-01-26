-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 09:00 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `furelise`
--

-- --------------------------------------------------------

--
-- Table structure for table `furelise_admin_master`
--

CREATE TABLE IF NOT EXISTS `furelise_admin_master` (
  `admin_master_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_master_name` varchar(50) DEFAULT NULL,
  `admin_master_password` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `admin_master_address` text,
  `admin_master_address_ar` text NOT NULL,
  `map` text NOT NULL,
  `admin_master_email` varchar(50) DEFAULT NULL,
  `career_email` varchar(500) NOT NULL,
  `fb_link` varchar(250) NOT NULL,
  `admin_master_phone` varchar(50) DEFAULT NULL,
  `admin_master_mob` varchar(50) DEFAULT NULL,
  `admin_master_status` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`admin_master_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `furelise_admin_master`
--

INSERT INTO `furelise_admin_master` (`admin_master_id`, `admin_master_name`, `admin_master_password`, `first_name`, `last_name`, `admin_master_address`, `admin_master_address_ar`, `map`, `admin_master_email`, `career_email`, `fb_link`, `admin_master_phone`, `admin_master_mob`, `admin_master_status`) VALUES
(1, 'admin', 'admin', 'admin', '', 'Kuwait . Kuwait City . Fahad Alsalem St\r\nPanasonic Tower . 4th Floor . Office 9<br><br>\r\nP.O.Box      184 Mishref 40152 Kuwait<br>\r\nTelephone  +965 22240141/2<br>\r\nFax           +965 22240143        ', 'الكويت. مدينة الكويت. فهد السالم شارع \r\nبرج باناسونيك. الطابق 4th. مكتب 9<br><br>\r\nصندوق بريد 184 مشرف 40152 الكويت<br>\r\n\r\n\r\nالهاتف  +965 2/2240141<br>\r\nالفاكس           +965 22240143', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1738.6277045545069!2d47.96447425522759!3d29.36280993138154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smiskan%2C+Abu+Bakr+Street%2C+Kuwait+City%2C+Al+Asimah%2C+Kuwait!5e0!3m2!1sen!2sin!4v1405156815515', 'help@anathothonline.com', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `furelise_banner`
--

CREATE TABLE IF NOT EXISTS `furelise_banner` (
  `mm_banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `name_arabic` varchar(500) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `description` text,
  `image_thumb` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `bimage` varchar(250) NOT NULL,
  `priority` int(2) DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET latin1 DEFAULT '1',
  PRIMARY KEY (`mm_banner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `furelise_banner`
--

INSERT INTO `furelise_banner` (`mm_banner_id`, `name`, `name_arabic`, `pos`, `description`, `image_thumb`, `image`, `bimage`, `priority`, `status`) VALUES
(74, 'home', '', 'home', NULL, 'icon_pro_74.jpg', 'pro_74.jpg', 'bimage_74.jpg', NULL, '1'),
(75, 'About Mission', '', 'abtm', NULL, 'icon_pro_75.jpg', 'pro_75.jpg', 'bimage_75.jpg', NULL, '1'),
(76, 'About Values', '', 'abtv', NULL, 'icon_pro_76.jpg', 'pro_76.jpg', 'bimage_76.jpg', NULL, '1'),
(77, 'Services', '', 'serv', NULL, 'icon_pro_77.jpg', 'pro_77.jpg', 'bimage_77.jpg', NULL, '1'),
(78, 'Conact', '', 'cont', NULL, 'icon_pro_78.jpg', 'pro_78.jpg', 'bimage_78.jpg', NULL, '1'),
(79, 'Footer', '', 'foot', NULL, 'icon_pro_79.jpg', 'pro_79.jpg', 'bimage_79.jpg', NULL, '1'),
(80, 'Sewage Water Disposal', 'التخلص من مياه الصرف الصحي', 'foot', NULL, 'icon_pro_80.jpg', 'pro_80.jpg', 'bimage_80.png', NULL, '1'),
(81, 'Footer', '', 'foot', NULL, 'icon_pro_81.jpg', 'pro_81.jpg', 'bimage_81.png', NULL, '1'),
(82, 'Chemicals Handling & Storage.', 'التعامل مع المواد الكيميائية و تخزينها', 'bann', NULL, 'icon_pro_82.jpg', 'pro_82.jpg', 'bimage_82.jpg', NULL, '1'),
(83, 'Oil & Gas Industry Projects.', 'مشاريع صناعة الغاز و النفط', 'bann', NULL, 'icon_pro_83.jpg', 'pro_83.jpg', 'bimage_83.jpg', NULL, '1'),
(89, 'Sewage Water Disposal', 'التخلص من مياه الصرف الصحي', 'bann', NULL, 'icon_pro_89.jpg', 'pro_89.jpg', 'bimage_89.jpg', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `furelise_career`
--

CREATE TABLE IF NOT EXISTS `furelise_career` (
  `mm_career_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(250) NOT NULL,
  `job_title_ar` varchar(11250) NOT NULL,
  `job_description` longtext,
  `job_description_ar` longtext NOT NULL,
  `vacancy` int(11) NOT NULL,
  `post_date` varchar(11) NOT NULL,
  `mm_career_status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mm_career_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `furelise_clients`
--

CREATE TABLE IF NOT EXISTS `furelise_clients` (
  `mm_clients_id` int(200) NOT NULL AUTO_INCREMENT,
  `title` text,
  `pdate` varchar(50) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `description` text,
  `image_thumb` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `bimage` varchar(500) NOT NULL,
  `bimage_thumb` varchar(500) NOT NULL,
  `priority` int(2) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`mm_clients_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `furelise_contact`
--

CREATE TABLE IF NOT EXISTS `furelise_contact` (
  `mm_contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(225) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `member_id` int(50) DEFAULT NULL,
  `product_id` int(50) NOT NULL,
  `pdate` varchar(300) CHARACTER SET latin1 NOT NULL,
  `status` enum('1','0') DEFAULT '1',
  `approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`mm_contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `furelise_gallery`
--

CREATE TABLE IF NOT EXISTS `furelise_gallery` (
  `mm_gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(200) NOT NULL,
  `parent_id` int(200) NOT NULL,
  `mm_gallery_title` varchar(500) DEFAULT NULL,
  `mm_gallery_title_arabic` varchar(500) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `description` text,
  `image_thumb` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `bimage` varchar(250) NOT NULL,
  `priority` int(2) DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET latin1 DEFAULT '1',
  PRIMARY KEY (`mm_gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `furelise_gallery`
--

INSERT INTO `furelise_gallery` (`mm_gallery_id`, `menu_id`, `parent_id`, `mm_gallery_title`, `mm_gallery_title_arabic`, `pos`, `description`, `image_thumb`, `image`, `bimage`, `priority`, `status`) VALUES
(87, 0, 0, 'Manu a', 'Manu a', '0', '0', '0', 'gallery_87.jpg', '0', 0, '1'),
(88, 0, 1, 'Monu', 'Monu', '', NULL, 'icon_pro_88.jpg', 'pro_88.jpg', 'bimage_88.jpg', NULL, '1'),
(89, 0, 1, 'Sanu', 'Sanu', '', NULL, 'icon_pro_89.jpg', 'pro_89.jpg', 'bimage_89.jpg', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `furelise_menu`
--

CREATE TABLE IF NOT EXISTS `furelise_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `mm_user_id` int(5) NOT NULL,
  `parent_id` varchar(100) NOT NULL,
  `priority` int(20) NOT NULL,
  `template_id` varchar(200) NOT NULL,
  `url` varchar(500) NOT NULL,
  `link_title` text NOT NULL,
  `link_title_ar` text NOT NULL,
  `link_page` varchar(500) NOT NULL,
  `target` int(5) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`menu_id`),
  UNIQUE KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `furelise_menu`
--

INSERT INTO `furelise_menu` (`menu_id`, `mm_user_id`, `parent_id`, `priority`, `template_id`, `url`, `link_title`, `link_title_ar`, `link_page`, `target`, `status`) VALUES
(1, 0, '0', 1, '', '', 'Menu First', 'Menu First', '', 1, 1),
(2, 0, '0', 2, 'page.content.php', '0', 'Menu Second', 'Menu Second', '0', 0, 1),
(3, 0, '1', 2, '', '', 'Submenu First', 'Submenu First', '', 1, 1),
(4, 0, '2', 1, '', '', 'Submenu second', 'Submenu second', '', 1, 1),
(5, 0, '1', 1, '', '', 'Submenu First', 'Submenu First', '', 1, 1),
(7, 0, '0', 3, 'page.content.php', '0', 'Menu Third', 'Menu Third', '0', 0, 1),
(8, 0, '7', 1, 'page.content.php', '0', 'test ', 'test ', '0', 0, 1),
(9, 0, '0', 4, 'index.php', '0', 'Hello', 'Hello', '0', 0, 1),
(10, 0, '0', 5, 'index.php', '0', 'Test', 'Test', '0', 0, 0),
(11, 0, '0', 6, 'index.php', '0', 'manu', 'manu', '0', 0, 1),
(12, 0, '0', 7, 'page.content.php', '0', 'Test Today', 'Test Today', '0', 0, 1),
(13, 0, '0', 0, 'index.php', '0', 'zzzzzzzzz', 'zzzzzzzzz', '0', 0, 1),
(14, 0, '1', 0, 'index.php', '0', 'ssssssssssssssaaaa', 'sssssssssssss', '0', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `furelise_news`
--

CREATE TABLE IF NOT EXISTS `furelise_news` (
  `mm_news_id` int(11) NOT NULL AUTO_INCREMENT,
  `mm_news_title` varchar(250) NOT NULL,
  `mm_news_content` longtext,
  `image` varchar(225) DEFAULT NULL,
  `post_date` varchar(11) NOT NULL,
  `mm_news_status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mm_news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `furelise_news`
--

INSERT INTO `furelise_news` (`mm_news_id`, `mm_news_title`, `mm_news_content`, `image`, `post_date`, `mm_news_status`) VALUES
(20, 'Venenatis et dolor sed', '<p>\r\n	Duis vel libero volutpat, consectetur purus sed, aliquet libero. Quisque mauris augue, venenatis et dolor sed, dapibus posuere lorem. Cras malesuada, lacus quis facilisis auctor, nisi dolor pharetra dolor, pulvinar ultricies nibh erat quis turpis.</p>\r\n<p>\r\n	&nbsp;</p>\r\n', NULL, '22-04-2014', '1'),
(22, 'Venenatis et dolor sed', '<p>\r\n	Duis vel libero volutpat, consectetur purus sed, aliquet libero. Quisque mauris augue, venenatis et dolor sed, dapibus posuere lorem. Cras malesuada, lacus quis facilisis auctor, nisi dolor pharetra dolor, pulvinar ultricies nibh erat quis turpis.</p>\r\n', NULL, '23-04-2014', '1'),
(23, 'Venenatis et dolor sedaa', '<p>\r\n	Duis vel libero volutpat, consectetur purus sed, aliquet libero. Quisque mauris augue, venenatis et dolor sed, dapibus posuere lorem. Cras malesuada, lacus quis facilisis auctor, nisi dolor pharetra dolor, pulvinar ultricies nibh erat quis turpis.</p>\r\n', NULL, '23-04-2014', '1');

-- --------------------------------------------------------

--
-- Table structure for table `furelise_page`
--

CREATE TABLE IF NOT EXISTS `furelise_page` (
  `mm_page_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(200) NOT NULL,
  `mm_page_text` varchar(100) NOT NULL,
  `mm_page_text_arabic` varchar(100) NOT NULL,
  `mm_page_title` varchar(250) NOT NULL,
  `mm_page_title_arabic` varchar(250) NOT NULL,
  `mm_page_content` longtext,
  `mm_page_content_arabic` longtext,
  `mm_page_url` varchar(250) DEFAULT 'displayContent.php',
  `image` varchar(500) DEFAULT NULL,
  `map` varchar(500) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mm_page_id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `furelise_page`
--

INSERT INTO `furelise_page` (`mm_page_id`, `menu_id`, `mm_page_text`, `mm_page_text_arabic`, `mm_page_title`, `mm_page_title_arabic`, `mm_page_content`, `mm_page_content_arabic`, `mm_page_url`, `image`, `map`, `status`) VALUES
(1, 1, '0', '0', 'Test 1', 'Test', '<p>\r\n	Test</p>\r\n', '<p>\r\n	Test</p>\r\n', '0', '0', '0', '1'),
(2, 1, '0', '0', 'Test 2', 'Test m', '<p>\r\n	Test m</p>\r\n', '<p>\r\n	Test m</p>\r\n', '0', 'pages_2.jpg', '0', '1'),
(3, 1, '0', '0', 'test 3', 'test', '<p>\r\n	test</p>\r\n', '<p>\r\n	test</p>\r\n', '0', '0', '0', '1'),
(4, 1, '0', '0', 'test 4', 'test', '<p>\r\n	test</p>\r\n', '<p>\r\n	test</p>\r\n', '0', 'pages_4.jpg', '0', '1'),
(5, 1, '0', '0', 'test 5', 'test', '<p>\r\n	test</p>\r\n', '<p>\r\n	test</p>\r\n', '0', 'pages_5.jpg', '0', '1'),
(6, 1, '0', '0', 'test 6', 'test', '<p>\r\n	test</p>\r\n', '<p>\r\n	test</p>\r\n', '0', 'pages_6.jpg', '0', '1'),
(7, 3, '0', '0', 'Test 7', 'Test 7', '<p>\r\n	Test 7</p>\r\n', '<p>\r\n	Test 7</p>\r\n', '0', 'page_7.jpg', '0', '1'),
(14, 1, '0', '0', 'test 8', 'test 8', '<p>\r\n	test 8</p>\r\n', '<p>\r\n	test 8</p>\r\n', '0', 'page_14.jpg', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `furelise_page_templates`
--

CREATE TABLE IF NOT EXISTS `furelise_page_templates` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `priority` int(20) NOT NULL,
  `url` varchar(500) NOT NULL,
  `link_title` text NOT NULL,
  `link_title_ar` text NOT NULL,
  `link_page` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`template_id`),
  UNIQUE KEY `pageLink_id` (`template_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `furelise_page_templates`
--

INSERT INTO `furelise_page_templates` (`template_id`, `parent_id`, `priority`, `url`, `link_title`, `link_title_ar`, `link_page`, `status`) VALUES
(1, 0, 0, 'index.php', 'Home', '', '', 1),
(2, 0, 0, 'page.content.php', 'Content page', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `furelise_permissions`
--

CREATE TABLE IF NOT EXISTS `furelise_permissions` (
  `page_permission_id` int(200) NOT NULL AUTO_INCREMENT,
  `mm_user_id` int(200) NOT NULL,
  `menu_id` int(200) DEFAULT NULL,
  `section_id` int(200) DEFAULT NULL,
  `status` int(200) NOT NULL,
  PRIMARY KEY (`page_permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `furelise_product`
--

CREATE TABLE IF NOT EXISTS `furelise_product` (
  `mm_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_cat_id` int(150) DEFAULT NULL,
  `name` varchar(500) NOT NULL,
  `name_ar` varchar(500) NOT NULL,
  `parent_id` int(150) DEFAULT NULL,
  `general_description` text,
  `general_description_ar` text,
  `mm_product_code` varchar(250) NOT NULL,
  `mm_product_price` double NOT NULL,
  `priority` int(150) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `fimage` varchar(250) DEFAULT NULL,
  `fimage_home` varchar(250) DEFAULT NULL,
  `fimage_cart` varchar(250) DEFAULT NULL,
  `fimage_thumb` varchar(250) DEFAULT NULL,
  `language` int(4) NOT NULL,
  PRIMARY KEY (`mm_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `furelise_projects`
--

CREATE TABLE IF NOT EXISTS `furelise_projects` (
  `mm_projects_id` int(200) NOT NULL AUTO_INCREMENT,
  `title` text,
  `type` varchar(150) NOT NULL,
  `consultant` varchar(500) NOT NULL,
  `owner` varchar(500) NOT NULL,
  `contractor` varchar(500) NOT NULL,
  `edate` varchar(150) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `description` text,
  `image_thumb` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `bimage` varchar(500) NOT NULL,
  `bimage_thumb` varchar(500) NOT NULL,
  `priority` int(50) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`mm_projects_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `furelise_sections`
--

CREATE TABLE IF NOT EXISTS `furelise_sections` (
  `section_id` int(200) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL,
  `section_icon` varchar(500) NOT NULL,
  `section_link` varchar(800) NOT NULL,
  `section_name` varchar(800) NOT NULL,
  `status` varchar(800) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `furelise_services`
--

CREATE TABLE IF NOT EXISTS `furelise_services` (
  `mm_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `mm_service_text` varchar(100) NOT NULL,
  `mm_service_title` varchar(250) NOT NULL,
  `mm_service_title_arabic` varchar(1000) NOT NULL,
  `mm_service_content` longtext,
  `mm_service_content_arabic` text NOT NULL,
  `mm_service_url` varchar(250) DEFAULT 'displayContent.php',
  `image_thumb` varchar(250) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `mm_service_status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mm_service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `furelise_services`
--

INSERT INTO `furelise_services` (`mm_service_id`, `mm_service_text`, `mm_service_title`, `mm_service_title_arabic`, `mm_service_content`, `mm_service_content_arabic`, `mm_service_url`, `image_thumb`, `image`, `mm_service_status`) VALUES
(1, '', 'Sewage Water Disposal', 'التخلص من مياه الصرف الصحي', '<p>\r\n	With our guidance, Miskan aims to ensure sustainable development and a high quality of living for present and future generations in Kuwait.</p>\r\n<p>\r\n	We aim to be recognized as one of the best firms amongst Kuwait and the Gulf region, where we will work to achieve a clean and sustainable environment.</p>\r\n<p>\r\n	Miskan is committed to provide high-quality and cost-effective environmental consultation by building strong long-term relations with our partners. We serve our society with excellence and passion. We will protect Kuwait&#39;s environment, promote safer working conditions and exceed your expectations.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	With our guidance, Miskan aims to ensure sustainable development and a high quality of living for present and future generations in Kuwait.</p>\r\n<p>\r\n	We aim to be recognized as one of the best firms amongst Kuwait and the Gulf region, where we will work to achieve a clean and sustainable environment.</p>\r\n<p>\r\n	Miskan is committed to provide high-quality and cost-effective environmental consultation by building strong long-term relations with our partners. We serve our society with excellence and passion. We will protect Kuwait&#39;s environment, promote safer working conditions and exceed your expectations.</p>\r\n<p>\r\n	With our guidance, Miskan aims to ensure sustainable development and a high quality of living for present and future generations in Kuwait.</p>\r\n<p>\r\n	We aim to be recognized as one of the best firms amongst Kuwait and the Gulf region, where we will work to achieve a clean and sustainable environment.</p>\r\n<p>\r\n	Miskan is committed to provide high-quality and cost-effective environmental consultation by building strong long-term relations with our partners. We serve our society with excellence and passion. We will protect Kuwait&#39;s environment, promote safer working conditions and exceed your expectations.</p>\r\n', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: pfont; font-size: 16px; background-color: rgb(246, 245, 245);">مع توجيهنا، يهدف مسكان لضمان التنمية المستدامة وذات الجودة العالية من المعيشة للأجيال الحالية والمستقبلية في الكويت. ونحن نهدف إلى أن يعترف به كواحد من أفضل الشركات وسط الكويت ومنطقة الخليج، حيث سنعمل على تحقيق بيئة نظيفة ومستدامة.</span></p>\r\n<p>\r\n	&nbsp;ونحن نهدف إلى أن يعترف به كواحد من أفضل الشركات وسط الكويت ومنطقة الخليج، حيث سنعمل على تحقيق بيئة نظيفة ومستدامة.</p>\r\n<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: pfont; font-size: 16px; background-color: rgb(246, 245, 245);">تلتزم مسكان لتقديم خدمات عالية الجودة وفعالة من حيث التكلفة و الاستشارة البيئية من خلال بناء علاقات قوية طويلة الأمد مع شركائنا. نحن نخدم مجتمعنا بتميز و شغف. سنحمي البيئة الكويتية، ونعزز ظروف عمل أكثر أماناً تفوق توقعاتك.</span></p>\r\n', 'displayContent.php', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `furelise_settings`
--

CREATE TABLE IF NOT EXISTS `furelise_settings` (
  `mm_settings_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `mailed_email` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `phone` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `facebook` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `twitter` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `quick_links` varchar(500) CHARACTER SET latin1 NOT NULL,
  `nsdate` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nedate` varchar(100) CHARACTER SET latin1 NOT NULL,
  `vsdate` varchar(100) CHARACTER SET latin1 NOT NULL,
  `vedate` varchar(100) CHARACTER SET latin1 NOT NULL,
  `rdate` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`mm_settings_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `furelise_settings`
--

INSERT INTO `furelise_settings` (`mm_settings_id`, `mailed_email`, `phone`, `facebook`, `twitter`, `quick_links`, `nsdate`, `nedate`, `vsdate`, `vedate`, `rdate`) VALUES
(1, 'test', 'tet', 'tet', 'tet', 'ett', '09-04-2015', '09-04-2016', '09-04-2016', '09-04-2015', '09-04-2015');

-- --------------------------------------------------------

--
-- Table structure for table `furelise_user_master`
--

CREATE TABLE IF NOT EXISTS `furelise_user_master` (
  `mm_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `mm_user_name` varchar(50) DEFAULT NULL,
  `mm_user_password` text,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `mm_user_address` text,
  `mm_user_address_ar` text NOT NULL,
  `map` text NOT NULL,
  `mm_user_email` varchar(50) DEFAULT NULL,
  `career_email` varchar(500) NOT NULL,
  `fb_link` varchar(250) NOT NULL,
  `mm_user_phone` varchar(50) DEFAULT NULL,
  `mm_user_mob` varchar(50) DEFAULT NULL,
  `mm_user_status` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`mm_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `furelise_user_master`
--

INSERT INTO `furelise_user_master` (`mm_user_id`, `mm_user_name`, `mm_user_password`, `first_name`, `last_name`, `mm_user_address`, `mm_user_address_ar`, `map`, `mm_user_email`, `career_email`, `fb_link`, `mm_user_phone`, `mm_user_mob`, `mm_user_status`) VALUES
(1, 'admin', '6fcedb09bb0eacfdd608b601e21385e78cda26e72b3136652ac6ec7c103851ce0c505183da4692a8c433071deb90a2e7eca1ca51ae8272f190485955e8b18a85', 'admin', '', 'Kuwait . Kuwait City . Fahad Alsalem St\r\nPanasonic Tower . 4th Floor . Office 9<br><br>\r\nP.O.Box      184 Mishref 40152 Kuwait<br>\r\nTelephone  +965 22240141/2<br>\r\nFax           +965 22240143        ', 'الكويت. مدينة الكويت. فهد السالم شارع \r\nبرج باناسونيك. الطابق 4th. مكتب 9<br><br>\r\nصندوق بريد 184 مشرف 40152 الكويت<br>\r\n\r\n\r\nالهاتف  +965 2/2240141<br>\r\nالفاكس           +965 22240143', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1738.6277045545069!2d47.96447425522759!3d29.36280993138154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smiskan%2C+Abu+Bakr+Street%2C+Kuwait+City%2C+Al+Asimah%2C+Kuwait!5e0!3m2!1sen!2sin!4v1405156815515', 'help@anathothonline.com', '', '', '', '', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
