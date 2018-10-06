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

CREATE TABLE `specializationarea` (
  `AREA_ID` int(10) NOT NULL,
  `AREA_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `specializationarea`
  ADD PRIMARY KEY (`AREA_ID`);

ALTER TABLE `specializationarea`
  MODIFY `AREA_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;


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