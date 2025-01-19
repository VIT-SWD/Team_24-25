-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 05:47 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swd`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_slots` int(5) NOT NULL,
  `m_cnt` int(5) NOT NULL,
  `f_cnt` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`a_id`, `a_name`, `a_slots`, `m_cnt`, `f_cnt`) VALUES
(1, 'Aatmabodh 2022-23', 2000, 1000, 1000);
-- (1, 'Saarthi', 70, 36, 30),
-- (2, 'Utkarsh', 190, 90, 100),
-- (3, 'Go Green', 0, 0, 0),
-- (4, 'Udaan', 70, 30, 40),
-- (5, 'Aavishkar', 50, 0, 0),
-- (6, 'Animal Rescue', 0, 0, 0),
-- (7, 'Swaccha Pune', 0, 0, 0),
-- (8, 'Night Petroling', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`a_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
