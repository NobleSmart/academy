-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 10:05 PM
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
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Classes';

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `course_id`, `instructor_id`, `start_date`, `end_date`, `location`) VALUES
(1, 3, 1, '2019-05-01', '2019-05-31', 'Sterling'),
(2, 5, 2, '2019-05-01', '2019-05-31', 'Sterling'),
(3, 6, 3, '2019-06-01', '0000-00-00', 'Alexandria'),
(4, 7, 1, '2019-07-01', '2019-07-31', 'Sterling'),
(5, 8, 2, '2019-08-01', '2019-08-31', 'Alexandria'),
(6, 9, 3, '2019-09-01', '0000-00-00', 'Sterling'),
(9, 37, 1, '2019-05-15', '2019-05-31', 'Annandale');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `credit` int(11) DEFAULT NULL,
  `description` text,
  `cost` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `title`, `credit`, `description`, `cost`) VALUES
(1, 'ITP  100', 'Software Design', NULL, NULL, NULL),
(2, 'ITP  100', 'Software Design', NULL, NULL, NULL),
(3, 'ITP  112', 'Visual Basic.NET I', NULL, NULL, NULL),
(4, 'ITP  120', 'JAVA Programming I', NULL, NULL, NULL),
(5, 'ITP  130', 'C Programming I', NULL, NULL, NULL),
(6, 'ITP  132', 'C++ Programming I', NULL, NULL, NULL),
(7, 'ITP  136', 'C# Programming I', NULL, NULL, NULL),
(8, 'ITP  137', 'Programming IOS Devices', NULL, NULL, NULL),
(9, 'ITP  165', 'Gaming and Simulation', NULL, NULL, NULL),
(10, 'ITP  170', 'Project Management', NULL, NULL, NULL),
(11, 'ITP  193', 'Studies in', NULL, NULL, NULL),
(12, 'ITP  195', 'Topics In', NULL, NULL, NULL),
(13, 'ITP  196', 'On-Site Training in', NULL, NULL, NULL),
(14, 'ITP  197', 'Cooperative Education', NULL, NULL, NULL),
(15, 'ITP  198', 'Seminar & Project', NULL, NULL, NULL),
(16, 'ITP  199', 'Supervised Study', NULL, NULL, NULL),
(17, 'ITP  220', 'Java Programming II', NULL, NULL, NULL),
(18, 'ITP  225', 'Web Scripting Languages', NULL, NULL, NULL),
(19, 'ITP  226', 'Mobile Java Development', NULL, NULL, NULL),
(20, 'ITP  227', 'Advanced Android Application Development', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat risus, aliquet in dapibus id, tristique vitae ex. Quisque sed fringilla nisi, non sollicitudin nibh. Integer non massa ac elit sagittis auctor. Nulla nec leo at metus dictum cursus. Quisque malesuada nec nulla convallis dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sagittis mauris lectus, a ullamcorper nunc efficitur quis. Duis porttitor risus vitae magna dictum accumsan. Quisque congue dictum libero eget ultricies. Nulla facilisi. Vivamus lacinia, nibh in lacinia finibus, nisl magna maximus erat, quis vestibulum augue tortor a ante. Nullam laoreet id erat congue pharetra.', 1500),
(21, 'ITP  230', 'C Programming II', NULL, NULL, NULL),
(22, 'ITP  234', 'Visual C++ Programming', NULL, NULL, NULL),
(23, 'ITP  236', 'C# Programming II', NULL, NULL, NULL),
(24, 'ITP  244', 'ASP.NET- Server Side Programming', NULL, NULL, NULL),
(25, 'ITP  246', 'Internet Devel. II: Server-Side JAVA', NULL, NULL, NULL),
(26, 'ITP  251', 'System Analysis and Design', NULL, NULL, NULL),
(27, 'ITP  270', 'Programming For Cybersecurity', NULL, NULL, NULL),
(28, 'ITP  293', 'Studies in', NULL, NULL, NULL),
(29, 'ITP  296', 'On-Site Training in', NULL, NULL, NULL),
(30, 'ITP  297', 'Cooperative Education', NULL, NULL, NULL),
(31, 'ITP  298', 'Seminar & Project', NULL, NULL, NULL),
(32, 'ITD  110', 'Web Page Design I', NULL, NULL, NULL),
(33, 'ITD  132', 'Structured Query Language', NULL, NULL, NULL),
(34, 'ITD  134', 'PL/SQL Programming', NULL, NULL, NULL),
(35, 'ITD  193', 'Studies in', NULL, NULL, NULL),
(36, 'ITD  196', 'On-Site Training in', NULL, NULL, NULL),
(37, 'ITD  197', 'Cooperative Education', NULL, NULL, NULL),
(38, 'ITD  198', 'Seminar & Project', NULL, NULL, NULL),
(39, 'ITD  199', 'Supervised Study', NULL, NULL, NULL),
(40, 'ITD  210', 'Web Page Design II', NULL, NULL, NULL),
(41, 'ITD  252', 'Database Backup and Recovery', NULL, NULL, NULL),
(42, 'ITD  256', 'Advanced Database Management', 2, 'Pellentesque porttitor lorem ultricies ante consequat pharetra. Maecenas convallis at felis eu posuere. Pellentesque ultrices diam dui, sed malesuada nibh luctus ut. Nunc quis rutrum diam. In mollis, nisl sit amet blandit lobortis, orci neque ullamcorper nisi, nec lacinia diam risus ut est. Ut semper vehicula odio, at hendrerit erat fringilla sed. Praesent id scelerisque odio, et ultrices lectus. Curabitur scelerisque convallis eros eu mattis. Donec placerat nisl nec gravida aliquet. Etiam efficitur odio ac nibh euismod efficitur. Cras ornare ultricies nisl. Cras sit amet sapien quis nibh luctus tempus sed a augue. Maecenas iaculis gravida dignissim. In dolor dui, mattis vitae maximus vel, finibus non sapien.', 1000),
(43, 'ITD  258', 'Database Performance and Tuning', NULL, NULL, NULL),
(44, 'ITD  260', 'Data Modeling and Design', NULL, NULL, NULL),
(45, 'ITD  293', 'Studies in', NULL, NULL, NULL),
(46, 'ITD  296', 'On-Site Training in', NULL, NULL, NULL),
(47, 'ITD  297', 'Cooperative Education', NULL, NULL, NULL),
(48, 'ITD  298', 'Seminar & Project', NULL, NULL, NULL),
(49, 'ITD  299', 'Supervised Study', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL COMMENT 'PK instructor',
  `fname` varchar(250) NOT NULL COMMENT 'First Name',
  `lname` varchar(250) NOT NULL COMMENT 'Last Name',
  `email` varchar(250) NOT NULL COMMENT 'Email'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Instructors';

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `fname`, `lname`, `email`) VALUES
(1, 'Bruce', 'Wayne', 'batman@gmail.com'),
(2, 'Clark', 'Kent', 'superman@dccomics.com'),
(3, 'Peter', 'Parker', 'spiderman@marvelcomics.com'),
(4, 'Tony', 'Stark', 'ironman@avengers.com');

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
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `dob`, `street`, `city`, `state`, `zip`, `phone`, `email`, `password`) VALUES
(1, 'George', 'Washington', '1998-06-01', '1 Washington St', 'Mt Vernon', 'VA', 23456, '', 'georgewashington@mtvernon.com', ''),
(2, 'Abraham', 'Lincoln', '1999-01-01', '1 Lincoln Pl', 'Chicago', 'IL', 56789, '', 'abelincoln@potus.com', ''),
(3, 'John', 'Adams', '0000-00-00', '1 Washington St', 'Mt Vernon', 'VA', 23456, '', 'johnadams@whitehouse.gov', ''),
(4, 'James', 'Monroe', '0000-00-00', '1 Monroe St', 'Charlottesville', 'VA', 23456, '', 'jamesmonroe@whitehouse.gov', ''),
(5, 'Thomas', 'Jefferson', '0000-00-00', '1 Monticello St', 'Charlottesville', 'VA', 23456, '', 'tjefferson@whitehouse.gov', ''),
(6, 'Jimmy', 'Carter', '0000-00-00', '1 Monticello St', 'Atlanta', 'GA', 23456, '', 'jcarter@whitehouse.gov', ''),
(7, 'George', 'Bush', '0000-00-00', '1 Papa Bush St', 'Houston', 'TX', 23456, '', 'ghbush@whitehouse.gov', ''),
(8, 'Bill', 'Clinton', '0000-00-00', '1 Monticello St', 'Little Rock', 'AR', 23456, '', 'clinton@whitehouse.gov', ''),
(9, 'George W', 'Bush', '0000-00-00', '1 Dubya St', 'Houston', 'TX', 23456, '', 'gwbush@whitehouse.gov', ''),
(10, 'Barack', 'Obama', '0000-00-00', '1 Monticello St', 'Chicago', 'IL', 23456, '', 'barack@whitehouse.gov', '71681a7163bf3313db4cb8f1761bca37'),
(11, 'Donald', 'Trump', '0000-00-00', '1 Monticello St', 'New York', 'NY', 23456, '', 'orange@whitehouse.gov', ''),
(12, 'Gerald', 'Ford', '0000-00-00', NULL, NULL, NULL, NULL, '', 'ford@whitehouse.gov', '70d493fb37d3b3ef3a36baf81a5c3552');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_courseID` (`course_id`),
  ADD KEY `FK_instructorID` (`instructor_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK instructor', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK Student', AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `FK_courseID` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `FK_instructorID` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
