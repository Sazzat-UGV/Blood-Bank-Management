-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 06:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(255) NOT NULL,
  `admin_fname` varchar(255) NOT NULL,
  `admin_lname` varchar(255) NOT NULL,
  `admin_dob` date NOT NULL,
  `admin_blood_group` varchar(255) NOT NULL,
  `admin_phn` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_street` varchar(255) NOT NULL,
  `admin_city` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_photo` varchar(255) NOT NULL,
  `admin_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_fname`, `admin_lname`, `admin_dob`, `admin_blood_group`, `admin_phn`, `admin_email`, `admin_street`, `admin_city`, `admin_pass`, `admin_photo`, `admin_role`) VALUES
(1, 'Sazzat ', 'Hossen', '2000-09-03', 'O+', '01755805553', 'asikulislamsazzat@gmail.com', 'Nobogram Road', 'Barisal', '12011016', 'IMG_20210201_144309.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `donor_id` int(255) NOT NULL,
  `donor_fname` varchar(255) NOT NULL,
  `donor_lname` varchar(255) NOT NULL,
  `donor_dob` date NOT NULL,
  `donor_blood_group` varchar(255) NOT NULL,
  `donor_phone` varchar(255) NOT NULL,
  `donor_email` varchar(255) NOT NULL,
  `donor_street` varchar(255) NOT NULL,
  `donor_city` varchar(255) NOT NULL,
  `donor_last_donation` date NOT NULL,
  `donor_profile` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`donor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `donor_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
