-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 01:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`PASSWORD`, `EMAIL`) VALUES
('7815696ecbf1c96e6894b779456d330e', 'amisha@gmail.com'),
('7815696ecbf1c96e6894b779456d330e', 'asdadad@sdfsfsf'),
('900150983cd24fb0d6963f7d28e17f72', 'asdhk@gmail.com'),
('900150983cd24fb0d6963f7d28e17f72', 'askjdhskajdh@gmaill.com'),
('902fbdd2b1df0c4f70b4a5d23525e932', 'dinithi@gmail.com'),
('7815696ecbf1c96e6894b779456d330e', 'er@gmail.com'),
('202cb962ac59075b964b07152d234b70', 'fhsofh@gmail.com'),
('7815696ecbf1c96e6894b779456d330e', 'fjhgg@dfgdg'),
('202cb962ac59075b964b07152d234b70', 'sfvkjhskjshj@jhskjfkgjk'),
('7815696ecbf1c96e6894b779456d330e', 'shaM@gmail.com'),
('900150983cd24fb0d6963f7d28e17f72', 'user@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `COMMENT_ID` int(11) NOT NULL,
  `COMMENT_SUBJECT` varchar(250) NOT NULL,
  `COMMENT_CONTENT` text,
  `COMMENT_STATUS` int(1) NOT NULL,
  `COMMENT_TO` varchar(50) NOT NULL,
  `COMMENT_FROM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialization_areas`
--

CREATE TABLE `specialization_areas` (
  `SPECIALIZATION_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialization_areas`
--

INSERT INTO `specialization_areas` (`SPECIALIZATION_NAME`) VALUES
('Artificial Neural Networks'),
('Computer Architecture &\r\nEngineering'),
('Computer Graphics and Vision'),
('Computer Networks'),
('Data Science'),
('Embedded Systems'),
('Enterprise application\r\ndevelopment'),
('Grid Computing'),
('Human-Computer Interaction'),
('Information Systems Security'),
('IT Project management'),
('Operating systems'),
('Software Engineering'),
('Software Verification and Quality Assurance');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERNAME`, `PASSWORD`, `EMAIL`) VALUES
('director', '900150983cd24fb0d6963f7d28e17f72', 'director@gmail.com'),
('operator', '900150983cd24fb0d6963f7d28e17f72', 'operator@gmail.com'),
('SAR', '900150983cd24fb0d6963f7d28e17f72', 'sar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
