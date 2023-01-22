-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 06:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cibilscore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `loanbk`
--

CREATE TABLE `loanbk` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pan_no` int(30) NOT NULL,
  `mobile_no` int(30) NOT NULL,
  `loan_id` int(30) NOT NULL,
  `loan_type` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `percent` int(30) NOT NULL,
  `interest` int(12) NOT NULL,
  `duemonth` int(30) NOT NULL,
  `monthly` int(23) NOT NULL,
  `date_time` varchar(12) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loanbk2`
--

CREATE TABLE `loanbk2` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pan_no` int(30) NOT NULL,
  `mobile_no` int(30) NOT NULL,
  `loan_id` int(30) NOT NULL,
  `loan_type` varchar(12) NOT NULL,
  `amount` int(30) NOT NULL,
  `penalty` int(12) NOT NULL,
  `interest` int(30) NOT NULL,
  `due_month` int(30) NOT NULL,
  `monthly` int(23) NOT NULL,
  `date_time` int(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loanbk3`
--

CREATE TABLE `loanbk3` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pan_no` int(30) NOT NULL,
  `mobile_no` int(30) NOT NULL,
  `loan_id` int(30) NOT NULL,
  `loan_type` varchar(12) NOT NULL,
  `amount` int(12) NOT NULL,
  `penalty` int(12) NOT NULL,
  `interest` int(30) NOT NULL,
  `due_month` int(30) NOT NULL,
  `monthly` int(23) NOT NULL,
  `date_time` int(33) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loanbk`
--
ALTER TABLE `loanbk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanbk2`
--
ALTER TABLE `loanbk2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanbk3`
--
ALTER TABLE `loanbk3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loanbk`
--
ALTER TABLE `loanbk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loanbk2`
--
ALTER TABLE `loanbk2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loanbk3`
--
ALTER TABLE `loanbk3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
