-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 10:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL COMMENT 'PK Student',
  `first_name` varchar(50) NOT NULL COMMENT 'First Name',
  `last_name` varchar(50) NOT NULL COMMENT 'Last Name',
  `dob` date NOT NULL COMMENT 'DOB',
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) VALUES
(1, 'George', 'Washington', '1998-06-01', '1 Washington St', 'Mt Vernon', 'VA', 23456, '', 'georgewashington@mtvernon.com'),
(2, 'Abraham', 'Lincoln', '1999-01-01', '1 Lincoln Pl', 'Chicago', 'IL', 56789, '', 'abelincoln@potus.com'),
(3, 'John', 'Adams', '0000-00-00', '1 Washington St', 'Mt Vernon', 'VA', 23456, '', 'johnadams@whitehouse.gov'),
(4, 'James', 'Monroe', '0000-00-00', '1 Monroe St', 'Charlottesville', 'VA', 23456, '', 'jamesmonroe@whitehouse.gov'),
(5, 'Thomas', 'Jefferson', '0000-00-00', '1 Monticello St', 'Charlottesville', 'VA', 23456, '', 'tjefferson@whitehouse.gov'),
(6, 'Jimmy', 'Carter', '0000-00-00', '1 Monticello St', 'Atlanta', 'GA', 23456, '', 'jcarter@whitehouse.gov'),
(7, 'George', 'Bush', '0000-00-00', '1 Papa Bush St', 'Houston', 'TX', 23456, '', 'ghbush@whitehouse.gov'),
(8, 'Bill', 'Clinton', '0000-00-00', '1 Monticello St', 'Little Rock', 'AR', 23456, '', 'clinton@whitehouse.gov'),
(9, 'George W', 'Bush', '0000-00-00', '1 Dubya St', 'Houston', 'TX', 23456, '', 'gwbush@whitehouse.gov'),
(10, 'Barack', 'Obama', '0000-00-00', '1 Monticello St', 'Chicago', 'IL', 23456, '', 'barack@whitehouse.gov');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK Student', AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
