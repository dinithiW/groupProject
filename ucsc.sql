DROP DATABASE ucsc;
CREATE DATABASE ucsc;
CREATE TABLE `applicants` (
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `comments` (
  `COMMENT_ID` int(11) NOT NULL,
  `COMMENT_SUBJECT` varchar(250) NOT NULL,
  `COMMENT_CONTENT` text,
  `COMMENT_STATUS` int(1) NOT NULL,
  `COMMENT_TO` varchar(50) NOT NULL,
  `COMMENT_FROM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `specialization_areas` (
  `SPECIALIZATION_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `users` (
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `applicants`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `specialization_areas`
--
ALTER TABLE `specialization_areas`
  ADD PRIMARY KEY (`SPECIALIZATION_NAME`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USERNAME`);
  
  ALTER TABLE `comments`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT;
  
  INSERT INTO `users` (`USERNAME`, `PASSWORD`, `EMAIL`) VALUES
('director', 'abc', 'director@gmail.com'),
('operator', 'abc', 'operator@gmail.com'),
('SAR', 'abc', 'sar@gmail.com');




-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 03:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucsc`
--

--
-- Database: `ucsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `specializationarea`
--

CREATE TABLE `specializationarea` (
  `AREA_ID` int(10) NOT NULL,
  `AREA_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specializationarea`
--

INSERT INTO `specializationarea` (`AREA_ID`, `AREA_NAME`) VALUES
(1, 'Software Engineering'),
(2, 'Information Systems Security,'),
(3, 'Computer Networks'),
(4, 'Grid Computing'),
(5, 'Artificial Neural Networks'),
(6, 'Human-Computer Interaction'),
(7, 'Data Science'),
(8, 'Embedded Systems'),
(9, 'Operating systems'),
(10, 'Software Verification and Quality Assurance'),
(11, 'Enterprise application\r\ndevelopment'),
(12, 'IT Project management'),
(13, 'Computer Graphics and Vision'),
(19, 'Computer Architecture & Engineering'),
(20, 'optional 5'),
(21, 'optional 7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `specializationarea`
--
ALTER TABLE `specializationarea`
  ADD PRIMARY KEY (`AREA_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `specializationarea`
--
ALTER TABLE `specializationarea`
  MODIFY `AREA_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 03:43 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_upload_links`
--

CREATE TABLE `file_upload_links` (
  `LINK_ID` int(10) NOT NULL,
  `LINK_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_upload_links`
--

INSERT INTO `file_upload_links` (`LINK_ID`, `LINK_NAME`) VALUES
(9, 'scanned document 1'),
(10, 'scanned document 2'),
(11, 'scanned document 3'),
(12, 'scanned document 4'),
(13, 'scanned document 5'),
(14, 'scanned document 6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_upload_links`
--
ALTER TABLE `file_upload_links`
  ADD PRIMARY KEY (`LINK_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_upload_links`
--
ALTER TABLE `file_upload_links`
  MODIFY `LINK_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
