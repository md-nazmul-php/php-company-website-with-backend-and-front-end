-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 03:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `username`, `password`) VALUES
(1, 'kamrul', '123'),
(2, 'alomgir', '123');

-- --------------------------------------------------------

--
-- Table structure for table `all_menu`
--

CREATE TABLE `all_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_url` varchar(200) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_menu`
--

INSERT INTO `all_menu` (`menu_id`, `menu_name`, `menu_url`, `status`) VALUES
(6, 'Home', 'front-end/header.php', ''),
(7, 'Service', '', 'submenu'),
(8, 'Contact', 'http://localhost/deshonlineit/', ''),
(9, 'Price', 'http://localhost/deshonlineit/', ''),
(10, 'About', 'http://localhost/deshonlineit', '');

-- --------------------------------------------------------

--
-- Table structure for table `all_package`
--

CREATE TABLE `all_package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(20) NOT NULL,
  `package_title` varchar(50) NOT NULL,
  `package_price` float(9,2) NOT NULL,
  `package_type` varchar(20) NOT NULL,
  `package_description` varchar(500) NOT NULL,
  `package_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_package`
--

INSERT INTO `all_package` (`package_id`, `package_name`, `package_title`, `package_price`, `package_type`, `package_description`, `package_url`) VALUES
(1, 'Free', 'Free', 0.00, 'monthly', 'Select Theme<br>\r\nInstall Theme<br>\r\nSelect Hosting Plane', 'http://localhost/deshonlineit'),
(3, 'Business', 'Business', 55.00, 'Fiext', 'Top page <br> 10 page <br>Mini pagace <br> aldkfhalfh <br>l aldkfj ldkfj', 'http://localhost/deshonlineit/'),
(4, 'Developer', 'Developer', 200.00, 'Month', 'Front<br>Formk<br>Contactk<br>lkadjf k<br>lkadjf k<br>', 'http://localhost/deshonlineit/'),
(5, 'Ultimate', 'Ultimate', 1400.00, 'Year', 'Front page <br>\r\nLigal<br>\r\nldkfjldfj<br>\r\nldkfjlheio<br>\r\niyuywuy<br>\r\nyuoiopiopo<br>', 'http://localhost/deshonlineit');

-- --------------------------------------------------------

--
-- Table structure for table `all_service`
--

CREATE TABLE `all_service` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_description` varchar(500) NOT NULL,
  `service_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_service`
--

INSERT INTO `all_service` (`service_id`, `service_title`, `service_description`, `service_url`) VALUES
(1, 'Se', 'add_service add_service add_service add_service add_service add_service', 'http://localhost/deshonlineit/back-end/add-service.php'),
(2, 'kladfjadkladfjadklad', 'Service URL <strong> The best </strong> the is therkij aldkhfn adlkfh ', 'http://localhost/deshonlineit/back-end/add-service.php'),
(3, 'WDddd', 'Wlkdajf ', 'http://localhost/deshonlineit/back-end/---'),
(4, 'Vi', 'Video  Video  Video  Video  Video  Video  Video  ', 'Video  Video  Video  Video  '),
(5, 'kh', 'jhgfedsiytedr iyted ytfd outfyr ', 'http://localhost/deshonlineit/'),
(13, 'eeeeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeee', 'eeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `home_slide`
--

CREATE TABLE `home_slide` (
  `id` int(11) NOT NULL,
  `slide_title` varchar(200) NOT NULL,
  `slide_description` varchar(400) NOT NULL,
  `read_more` varchar(200) NOT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slide`
--

INSERT INTO `home_slide` (`id`, `slide_title`, `slide_description`, `read_more`, `status`) VALUES
(1, 'Play With Application', 'We are the skillful team, ready to play within your web application. Your web application will be made with high quality protection and latest design', 'http://localhost/deshonlineit', 'active'),
(2, 'Wordpress Design', 'Have skillful team and ready to make Wordpress application. Your web application will be made with high quality protection and latest design', 'http://localhost/deshonlineit', NULL),
(3, 'Portfolio Website', 'We are ready to make HIGH QUALITY and LATEST Portfolio website for you. So you can submit your CV anywhere through the WEBSITE.', 'http://localhost/deshonlineit', NULL),
(4, 'One Page Application', 'We are making One page website (Static and Dynamic). Always we are providing top quality services. Because Have a strong team with skillful person.', 'http://localhost/deshonlineit', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_info`
--

CREATE TABLE `package_info` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_info`
--

INSERT INTO `package_info` (`id`, `title`, `description`) VALUES
(1, 'Pricing', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `picture_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_info`
--

CREATE TABLE `service_info` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_info`
--

INSERT INTO `service_info` (`id`, `title`, `description`) VALUES
(1, 'Services', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `site_title`
--

CREATE TABLE `site_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_title`
--

INSERT INTO `site_title` (`id`, `title`) VALUES
(1, 'Desh Online IT'),
(2, 'sfg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `submenu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `submenu_name` varchar(50) DEFAULT NULL,
  `submenu_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`submenu_id`, `menu_name`, `submenu_name`, `submenu_url`) VALUES
(11, 'Service', 'Web Design', 'http://localhost/deshonlineit/'),
(12, 'Service', 'Web w', 'http://localhost/deshonlineit/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `all_menu`
--
ALTER TABLE `all_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `all_package`
--
ALTER TABLE `all_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `all_service`
--
ALTER TABLE `all_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `home_slide`
--
ALTER TABLE `home_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_info`
--
ALTER TABLE `package_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_info`
--
ALTER TABLE `service_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_title`
--
ALTER TABLE `site_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`submenu_id`,`menu_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `all_menu`
--
ALTER TABLE `all_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `all_package`
--
ALTER TABLE `all_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `all_service`
--
ALTER TABLE `all_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `home_slide`
--
ALTER TABLE `home_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `package_info`
--
ALTER TABLE `package_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_info`
--
ALTER TABLE `service_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_title`
--
ALTER TABLE `site_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
