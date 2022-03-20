/*
 *   Copyright (c) 2022 
 *   All rights reserved.
 */
-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 02:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
`classID` int(11) NOT NULL,
  `className` varchar(45) DEFAULT NULL,
  `classDesc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classID`, `className`, `classDesc`) VALUES
(1, 'One', 'Class One');

-- --------------------------------------------------------

--
-- Table structure for table `classsubject`
--

CREATE TABLE IF NOT EXISTS `classsubject` (
`subjectID` int(11) NOT NULL,
  `class_classID` int(11) NOT NULL,
  `coreSubject_coreSubID` int(11) NOT NULL,
  `teacherInfo_teacherID` int(11) NOT NULL,
  `section_sectionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classteacher`
--

CREATE TABLE IF NOT EXISTS `classteacher` (
`classTeacherID` int(11) NOT NULL,
  `class_classID` int(11) NOT NULL,
  `section_sectionID` int(11) NOT NULL,
  `teacherInfo_teacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coresubject`
--

CREATE TABLE IF NOT EXISTS `coresubject` (
`coreSubID` int(11) NOT NULL,
  `coreSubName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `userType` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `userType`) VALUES
(1, 'admin', 'admin', NULL),
(2, 'sumon', '123st', NULL),
(3, 'mainul', '123', NULL),
(4, 'Arbe', '123456', 'modatetor');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `mtCT1` varchar(45) DEFAULT NULL,
  `mtCT2` varchar(45) DEFAULT NULL,
  `mtCT3` varchar(45) DEFAULT NULL,
  `mtCTavg` varchar(45) DEFAULT NULL,
  `ftCT1` varchar(45) DEFAULT NULL,
  `ftCT2` varchar(45) DEFAULT NULL,
  `ftCT3` varchar(45) DEFAULT NULL,
  `ftCTavg` varchar(45) DEFAULT NULL,
  `midTerm` varchar(45) DEFAULT NULL,
  `finalTerm` varchar(45) DEFAULT NULL,
  `mtFTavg` varchar(45) DEFAULT NULL,
  `classSubject_subjectID` int(11) NOT NULL,
  `stuInfo_stuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
`sectionID` int(11) NOT NULL,
  `sectionName` varchar(45) DEFAULT NULL,
  `sectionDesc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionID`, `sectionName`, `sectionDesc`) VALUES
(2, 'B', 'One B (Boys)');

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE IF NOT EXISTS `stuinfo` (
`stuID` int(11) NOT NULL,
  `regID` varchar(45) DEFAULT NULL,
  `admissionDate` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `shift` varchar(45) DEFAULT NULL,
  `rollNo` varchar(45) DEFAULT NULL,
  `fName` varchar(45) DEFAULT NULL,
  `mName` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `preAddress` varchar(45) DEFAULT NULL,
  `perAddress` varchar(45) DEFAULT NULL,
  `mobileNo` varchar(45) DEFAULT NULL,
  `guarName` varchar(45) DEFAULT NULL,
  `guarMobileNo` varchar(45) DEFAULT NULL,
  `guarAddress` varchar(45) DEFAULT NULL,
  `guar2Name` varchar(45) DEFAULT NULL,
  `guar2MobileNo` varchar(45) DEFAULT NULL,
  `guar2Address` varchar(45) DEFAULT NULL,
  `class_classID` int(11) NOT NULL,
  `section_sectionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE IF NOT EXISTS `teacherinfo` (
`teacherID` int(11) NOT NULL,
  `teacherName` varchar(45) DEFAULT NULL,
  `fName` varchar(45) DEFAULT NULL,
  `mName` varchar(45) DEFAULT NULL,
  `preAddress` varchar(45) DEFAULT NULL,
  `perAddress` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobileNo` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `doj` varchar(45) DEFAULT NULL,
  `openSalary` varchar(45) DEFAULT NULL,
  `subPreference` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`teacherID`, `teacherName`, `fName`, `mName`, `preAddress`, `perAddress`, `email`, `mobileNo`, `gender`, `religion`, `dob`, `doj`, `openSalary`, `subPreference`) VALUES
(4, '', 'Mainul', 'Hassan', 'Lal Khan Bazar', 'Lohagara', 'mainulhassan.facebook@gmail.com', '01830153119', 'Male', 'Islam', '2016/04/13', '2016/04/13', '1000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
 ADD PRIMARY KEY (`classID`);

--
-- Indexes for table `classsubject`
--
ALTER TABLE `classsubject`
 ADD PRIMARY KEY (`subjectID`), ADD KEY `fk_subject_class_idx` (`class_classID`), ADD KEY `fk_subject_coreSubject1_idx` (`coreSubject_coreSubID`), ADD KEY `fk_classSubject_teacherInfo1_idx` (`teacherInfo_teacherID`), ADD KEY `fk_classSubject_section1_idx` (`section_sectionID`);

--
-- Indexes for table `classteacher`
--
ALTER TABLE `classteacher`
 ADD PRIMARY KEY (`classTeacherID`), ADD KEY `fk_classTeacher_class1_idx` (`class_classID`), ADD KEY `fk_classTeacher_section1_idx` (`section_sectionID`), ADD KEY `fk_classTeacher_teacherInfo1_idx` (`teacherInfo_teacherID`);

--
-- Indexes for table `coresubject`
--
ALTER TABLE `coresubject`
 ADD PRIMARY KEY (`coreSubID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
 ADD KEY `fk_result_classSubject1_idx` (`classSubject_subjectID`), ADD KEY `fk_result_stuInfo1_idx` (`stuInfo_stuID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`sectionID`);

--
-- Indexes for table `stuinfo`
--
ALTER TABLE `stuinfo`
 ADD PRIMARY KEY (`stuID`), ADD KEY `fk_stuInfo_class1_idx` (`class_classID`), ADD KEY `fk_stuInfo_section1_idx` (`section_sectionID`);

--
-- Indexes for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
 ADD PRIMARY KEY (`teacherID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
MODIFY `classID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `classsubject`
--
ALTER TABLE `classsubject`
MODIFY `subjectID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `classteacher`
--
ALTER TABLE `classteacher`
MODIFY `classTeacherID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coresubject`
--
ALTER TABLE `coresubject`
MODIFY `coreSubID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
MODIFY `sectionID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stuinfo`
--
ALTER TABLE `stuinfo`
MODIFY `stuID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
MODIFY `teacherID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `classsubject`
--
ALTER TABLE `classsubject`
ADD CONSTRAINT `fk_classSubject_section1` FOREIGN KEY (`section_sectionID`) REFERENCES `section` (`sectionID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_classSubject_teacherInfo1` FOREIGN KEY (`teacherInfo_teacherID`) REFERENCES `teacherinfo` (`teacherID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_subject_class` FOREIGN KEY (`class_classID`) REFERENCES `class` (`classID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_subject_coreSubject1` FOREIGN KEY (`coreSubject_coreSubID`) REFERENCES `coresubject` (`coreSubID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `classteacher`
--
ALTER TABLE `classteacher`
ADD CONSTRAINT `fk_classTeacher_class1` FOREIGN KEY (`class_classID`) REFERENCES `class` (`classID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_classTeacher_section1` FOREIGN KEY (`section_sectionID`) REFERENCES `section` (`sectionID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_classTeacher_teacherInfo1` FOREIGN KEY (`teacherInfo_teacherID`) REFERENCES `teacherinfo` (`teacherID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
ADD CONSTRAINT `fk_result_classSubject1` FOREIGN KEY (`classSubject_subjectID`) REFERENCES `classsubject` (`subjectID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_result_stuInfo1` FOREIGN KEY (`stuInfo_stuID`) REFERENCES `stuinfo` (`stuID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stuinfo`
--
ALTER TABLE `stuinfo`
ADD CONSTRAINT `fk_stuInfo_class1` FOREIGN KEY (`class_classID`) REFERENCES `class` (`classID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_stuInfo_section1` FOREIGN KEY (`section_sectionID`) REFERENCES `section` (`sectionID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
