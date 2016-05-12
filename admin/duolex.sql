-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 09:47 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duolex`
--

-- --------------------------------------------------------

--
-- Table structure for table `mainadmin_menu`
--

CREATE TABLE IF NOT EXISTS `mainadmin_menu` (
  `m_menu_id` int(2) NOT NULL,
  `m_menu_name` varchar(20) NOT NULL,
  `m_menu_link` varchar(200) NOT NULL,
  `m_menu_icon` varchar(50) NOT NULL,
  `m_menu_section` int(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainadmin_menu`
--

INSERT INTO `mainadmin_menu` (`m_menu_id`, `m_menu_name`, `m_menu_link`, `m_menu_icon`, `m_menu_section`) VALUES
(0, 'Home', '#', 'fi-home', 1),
(1, 'Statistics', '#', 'fi-graph-trend', 1),
(20, 'Pages', '#', 'fi-page-multiple', 2),
(21, 'Media', '#', 'fi-thumbnails', 2),
(40, 'Blog', '#', 'fi-pencil', 3),
(41, 'Posts', '#', 'fi-paperclip', 3),
(42, 'Comments', '#', 'fi-comment', 3),
(60, 'Design', '#', 'fi-paint-bucket', 4),
(61, 'Plugins', '#', 'fi-widget', 4),
(62, 'Tools', '#', 'fi-wrench', 4),
(63, 'Users', '#', 'fi-torsos-female-male', 4),
(64, 'Settings', '#', 'fi-database', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_menu`
--

CREATE TABLE IF NOT EXISTS `subadmin_menu` (
  `s_menu_id` int(2) NOT NULL,
  `m_menu_id` int(2) NOT NULL,
  `s_menu_name` varchar(20) NOT NULL,
  `s_menu_link` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin_menu`
--

INSERT INTO `subadmin_menu` (`s_menu_id`, `m_menu_id`, `s_menu_name`, `s_menu_link`) VALUES
(6, 0, 'Workboard', 'includes/workboard.php'),
(7, 20, 'All Pages', '#'),
(8, 20, 'Add New', '#'),
(9, 41, 'All Posts', '#'),
(10, 41, 'Add New', '#'),
(11, 41, 'Categories', '#'),
(12, 60, 'Themes', '#'),
(13, 63, 'All Users', '#'),
(14, 63, 'Add New', '#'),
(15, 63, 'My Profil', '#'),
(16, 64, 'Admin Menus', '#');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `loginname` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mainadmin_menu`
--
ALTER TABLE `mainadmin_menu`
  ADD PRIMARY KEY (`m_menu_id`);

--
-- Indexes for table `subadmin_menu`
--
ALTER TABLE `subadmin_menu`
  ADD PRIMARY KEY (`s_menu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mainadmin_menu`
--
ALTER TABLE `mainadmin_menu`
  MODIFY `m_menu_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `subadmin_menu`
--
ALTER TABLE `subadmin_menu`
  MODIFY `s_menu_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
