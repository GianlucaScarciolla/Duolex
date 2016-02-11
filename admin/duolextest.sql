-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 11. Feb 2016 um 20:55
-- Server-Version: 10.1.9-MariaDB
-- PHP-Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `duolextest`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mainadmin_menu`
--

CREATE TABLE `mainadmin_menu` (
  `m_menu_id` int(2) NOT NULL,
  `m_menu_name` varchar(20) NOT NULL,
  `m_menu_link` varchar(50) NOT NULL,
  `m_menu_icon` varchar(50) NOT NULL,
  `m_menu_section` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `mainadmin_menu`
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
(64, 'Settings', '#', 'fi-database', 4),
(65, 'Settings', '#', '', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subadmin_menu`
--

CREATE TABLE `subadmin_menu` (
  `s_menu_id` int(2) NOT NULL,
  `m_menu_id` int(2) NOT NULL,
  `s_menu_name` varchar(20) NOT NULL,
  `s_menu_link` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `subadmin_menu`
--

INSERT INTO `subadmin_menu` (`s_menu_id`, `m_menu_id`, `s_menu_name`, `s_menu_link`) VALUES
(6, 0, 'Workboard', '#'),
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

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `mainadmin_menu`
--
ALTER TABLE `mainadmin_menu`
  ADD PRIMARY KEY (`m_menu_id`);

--
-- Indizes für die Tabelle `subadmin_menu`
--
ALTER TABLE `subadmin_menu`
  ADD PRIMARY KEY (`s_menu_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `mainadmin_menu`
--
ALTER TABLE `mainadmin_menu`
  MODIFY `m_menu_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT für Tabelle `subadmin_menu`
--
ALTER TABLE `subadmin_menu`
  MODIFY `s_menu_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
