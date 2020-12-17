-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 05:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(255) UNSIGNED NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `date`, `content`, `link`) VALUES
(1, '2020-10-12 13:10:28', 'Screening exam for 2020/2021 section is currently scheduled for 25th October 2020. Pick up your form at the school or click this link to apply.', 'https://facebook.com'),
(2, '2020-12-09 18:23:46', 'Hello, a new announcement. This is why we should not be posting shor annoucement', ''),
(3, '2020-12-09 18:25:13', 'Hello, a new announcement. This is why we should not be posting shor annoucement', ''),
(4, '2020-12-09 20:43:17', 'A new announcement that is really long and is still going', ''),
(5, '2020-12-09 23:34:08', 'A new announcement that is really long and is still going on with this', ''),
(6, '2020-12-09 23:38:22', 'A new announcement that is really long and is still going on with this', ''),
(7, '2020-12-10 15:00:06', 'A new announcement that is really long and is still going on with this', ''),
(8, '2020-12-10 15:01:33', 'A new announcement that is really long and is still going on with this', ''),
(9, '2020-12-10 15:01:37', 'A new announcement that is really long and is still going on with this', 'http://twiiter'),
(10, '2020-12-17 15:31:58', 'Recently, we had expereinced a flood that damaged our school properties, but we have been able to get back up gradually. You can view the updates on our Facebook page', 'https://facebook.com/faithmodelonitsha');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'new',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `phone_number`, `status`, `date`) VALUES
(2, 'Paul', '07061988188', 'new', '2020-10-12 13:04:24'),
(3, 'Emma', '07069988881', 'new', '2020-10-12 13:32:17'),
(4, 'Peter', '08139268221', 'new', '2020-10-16 17:37:45'),
(5, 'Paul', '07061988188', 'new', '2020-12-17 12:46:06'),
(6, 'Paul', '07061988188', 'new', '2020-12-17 12:56:07'),
(7, 'Paul', '07061540102', 'new', '2020-12-17 13:00:12'),
(8, 'Paul', '07061540102', 'new', '2020-12-17 13:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `value`) VALUES
(1, 'admin_password', 'b0f87b32ed154f00121515aea47d8713');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
