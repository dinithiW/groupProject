-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 03:03 PM
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
-- Table structure for table `any_other_qualifications`
--

CREATE TABLE `any_other_qualifications` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `INSTITUTION` varchar(200) NOT NULL,
  `DEPLOMA` varchar(200) NOT NULL,
  `DURAION` varchar(10) NOT NULL,
  `YEAR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('900150983cd24fb0d6963f7d28e17f72', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `basic_personal_details`
--

CREATE TABLE `basic_personal_details` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(200) NOT NULL,
  `POSTAL_ADDRESS` varchar(200) NOT NULL,
  `PERMANENT_ADDRESS` varchar(300) NOT NULL,
  `NIC` varchar(200) NOT NULL,
  `CITIZENSHIP_NAME` varchar(100) NOT NULL,
  `PERSONAL_EMAIL` varchar(100) NOT NULL,
  `OFFICE_EMAIL` varchar(200) NOT NULL,
  `MOBILE_NUMBER` varchar(200) NOT NULL,
  `HOME_NUMBER` varchar(20) NOT NULL,
  `OFFICE_NUMBER` varchar(20) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `CIVIL_STATUS` varchar(10) NOT NULL,
  `CITIZENSHIP` varchar(10) NOT NULL,
  `DATE_OF_BIRTH` varchar(10) NOT NULL,
  `POST_APPLY_FOR` varchar(200) NOT NULL,
  `DEGREE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `count_for_probationary_lectures`
--

CREATE TABLE `count_for_probationary_lectures` (
  `count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `count_for_senior_lectures`
--

CREATE TABLE `count_for_senior_lectures` (
  `count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `higher_educational_details`
--

CREATE TABLE `higher_educational_details` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `UNIVERSITY` varchar(200) NOT NULL,
  `FROM` varchar(10) NOT NULL,
  `TO` varchar(10) NOT NULL,
  `DEGREE_OBTAINED` varchar(200) NOT NULL,
  `DURATION` varchar(10) NOT NULL,
  `CLASS` varchar(10) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `INDEX_NO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interview_panel`
--

CREATE TABLE `interview_panel` (
  `ID` int(11) NOT NULL,
  `PANEL_ID` varchar(255) NOT NULL,
  `FNAME` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `CONTACT_NUMBER` varchar(10) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_panel`
--

INSERT INTO `interview_panel` (`ID`, `PANEL_ID`, `FNAME`, `LNAME`, `EMAIL`, `GENDER`, `CONTACT_NUMBER`, `DESIGNATION`, `ADDRESS`) VALUES
(1, 'din0', 'Dinithi', 'Wickramaratne', 'diniwic654654k124@gmail.com', 'female', '7154648940', 'sadasd', '23/4,Rev.S.Mahinda Mawatha,Ratmalana'),
(2, 'din1', 'Dinithi', 'Wickramaratne', 'dinssd234fsdfdfiwick124@gmail.com', 'male', '7154164894', 'sdfsf', '23/4,Rev.S.Mahinda Mawatha,Ratmalana'),
(3, 'kan0', 'Kaneel', 'Dias', 'kaneeldias@gmail.com', 'male', '0771952226', '545545dfgdg', 'dfghydhdhdhdhdh,Mount Lavinia'),
(4, 'saj3', 'Sajila', 'Wickramaratne', 'saji@gmail.com', 'female', '7154648945', 'sdfsdf', '23/4,Rev.S.Mahinda Mawatha,Ratmalana');

-- --------------------------------------------------------

--
-- Table structure for table `language_proficiency`
--

CREATE TABLE `language_proficiency` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `WORK_SINHALA` varchar(100) NOT NULL,
  `WORK_ENGLISH` varchar(100) NOT NULL,
  `WORK_TAMIL` varchar(100) NOT NULL,
  `TEACH_SINHALA` varchar(100) NOT NULL,
  `TEACH_ENGLISH` varchar(100) NOT NULL,
  `TEACH_TAMIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_fields`
--

CREATE TABLE `other_fields` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `EXPERIENCE` text NOT NULL,
  `RESEARCH` text NOT NULL,
  `OTHER_INFORMS` text NOT NULL,
  `DATE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professional_qualifications`
--

CREATE TABLE `professional_qualifications` (
  `APPLICANT_ID` varchar(10) NOT NULL,
  `INSTITUTION` varchar(200) NOT NULL,
  `FROM` varchar(10) NOT NULL,
  `TO` varchar(10) NOT NULL,
  `DURATION` varchar(10) NOT NULL,
  `TYPE_OF_QUALIFICATION` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referees`
--

CREATE TABLE `referees` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `DESIGNATION` varchar(200) NOT NULL,
  `ADDRESS` varchar(300) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `CONTACT_NO` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondary_educational_details`
--

CREATE TABLE `secondary_educational_details` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `SCHOOL_NAME` varchar(200) NOT NULL,
  `FROM` varchar(10) NOT NULL,
  `TO` varchar(10) NOT NULL,
  `EXAMINATION_PASSED` varchar(200) NOT NULL,
  `YEAR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(20, 'optional 5');

-- --------------------------------------------------------

--
-- Table structure for table `specialization_areas`
--

CREATE TABLE `specialization_areas` (
  `SPECIALIZATION_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialization_area_for_applicant`
--

CREATE TABLE `specialization_area_for_applicant` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `SPECIFICATION_AREA_ID` varchar(100) NOT NULL,
  `SPECIFICATION_AREA_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `USER_TYPE` varchar(255) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERNAME`, `PASSWORD`, `USER_TYPE`, `NAME`) VALUES
('diniwic654654k124@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Dinithi Wickramaratne'),
('diniwick124@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Dinithi Wickramaratne'),
('diniwicksdfsdfsfssdf124@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Dinithi Wickramaratne'),
('diniwiwerck124@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Dinithi Wickramaratne'),
('dinsdfiwick124@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Dinithi Wickramaratne'),
('dinssd234fsdfdfiwick124@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Dinithi Wickramaratne'),
('dinssdfsdfdfiwick124@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Dinithi Wickramaratne'),
('director@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Director', 'Director Director'),
('kaneeldias@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Kaneel Dias'),
('operator@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'MA', 'Operator Opz'),
('saji@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Panel', 'Sajila Wickramaratne'),
('sar@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'SAR', 'Sar Sar');

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
-- Indexes for table `file_upload_links`
--
ALTER TABLE `file_upload_links`
  ADD PRIMARY KEY (`LINK_ID`);

--
-- Indexes for table `interview_panel`
--
ALTER TABLE `interview_panel`
  ADD PRIMARY KEY (`ID`,`PANEL_ID`,`EMAIL`),
  ADD KEY `FK_Panel` (`EMAIL`);

--
-- Indexes for table `specializationarea`
--
ALTER TABLE `specializationarea`
  ADD PRIMARY KEY (`AREA_ID`);

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
--
-- AUTO_INCREMENT for table `file_upload_links`
--
ALTER TABLE `file_upload_links`
  MODIFY `LINK_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `interview_panel`
--
ALTER TABLE `interview_panel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `specializationarea`
--
ALTER TABLE `specializationarea`
  MODIFY `AREA_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `interview_panel`
--
ALTER TABLE `interview_panel`
  ADD CONSTRAINT `FK_Panel` FOREIGN KEY (`EMAIL`) REFERENCES `users` (`USERNAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
