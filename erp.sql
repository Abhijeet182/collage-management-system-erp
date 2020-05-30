-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 11:29 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfaculty`
--

CREATE TABLE `addfaculty` (
  `serial_number` int(5) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `fathers_name` varchar(25) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `mother_name` varchar(25) NOT NULL,
  `dept_name` varchar(10) NOT NULL,
  `dept_id` int(5) NOT NULL,
  `experience` int(10) NOT NULL,
  `year` int(5) NOT NULL,
  `username` int(25) NOT NULL,
  `password` int(25) NOT NULL,
  `Type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfaculty`
--

INSERT INTO `addfaculty` (`serial_number`, `full_name`, `current_address`, `email_address`, `phone_number`, `dob`, `fathers_name`, `mobile_number`, `mother_name`, `dept_name`, `dept_id`, `experience`, `year`, `username`, `password`, `Type`) VALUES
(111, 'Dinesh Kumar', 'sitapur road, Lucknow', 'Dinesh@gmail.com', 989897455, '10-18-2017', 'aaaaaa', 22222, 'aaaaaaaaa', 'CS(10)', 10, 10, 18, 1810111, 102222, 'Faculty'),
(111, 'qaqaqa ss ededed', 'j-6 charu chandra puri colony bilandrapur  Gorakhp', 'abhijeetsrivastava18', 2147483647, '10-19-2017', 'sxsxsdwddwd', 956544899, 'dsdsdsdsfddffdfd', 'IT(11)', 11, 23, 18, 1811111, 2147483647, NULL),
(112, 'wwwwqaqaqaeeee ss ed', 'j-6 charu chandra puri colony bilandrapur  Gorakhp', 'abhijeetsrivastava18', 2147483647, '10-19-2017', 'sxsxsdwddwd', 956544899, 'dsdsdsdsfddffdfd', 'IT(11)', 11, 23, 18, 1811112, 2147483647, NULL),
(113, 'wwwfffffwqaqaqaeeee ', 'j-6 charu chandra puri colony bilandrapur  Gorakhp', 'abhijeetsrivastava18', 2147483647, '10-19-2017', 'sxsxsdwddwd', 956544899, 'dsdsdsdsfddffdfd', 'IT(11)', 11, 23, 18, 1811113, 2147483647, NULL),
(3, 'pravin singh', 'gomti nagar lucknow', 'pravin@gmail.com', 941546221, '20-03-1997', 'xyz', 241546000, 'abc', 'IT', 12, 3, 2018, 1810140, 104444, 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `serial_number` int(5) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `dob` int(10) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `dept_id` int(10) NOT NULL,
  `year` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`serial_number`, `full_name`, `current_address`, `email_address`, `phone_number`, `dob`, `father_name`, `mobile_number`, `mother_name`, `dept_name`, `dept_id`, `year`, `username`, `password`, `type`) VALUES
(136, 'Abhijeet srivastava', 'bbd lucknow', 'abhi@gmail.com', 1565447172, 11, 'qqqhh', 132456789, 'bbbmmm', 'CS(10)', 10, 18, '1810136', '108888', 'student'),
(400, 'abh aa ss', 'h h hhhIndia', 'abhijeetsrivastava18', 2147483647, 11, 'jk', 2147483647, 'jv', 'IT(11)', 11, 18, '1811400', '119565448999', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `blueenvelopeform`
--

CREATE TABLE `blueenvelopeform` (
  `submissionID` bigint(20) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `YOURMESSAGE` text,
  `NAME` varchar(255) DEFAULT NULL,
  `Rating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blueenvelopeform`
--

INSERT INTO `blueenvelopeform` (`submissionID`, `EMAIL`, `YOURMESSAGE`, `NAME`, `Rating`) VALUES
(3868374791918974954, 'abhijeetsrivastava182@gmail.com', 'Nothing can come close to the inspirational presence of a teacher like you in a student’s journey. You have no idea how important a role you play in shaping for a student, a brilliant destiny. Thank you.', 'Abhijeet Srivastava', '5'),
(3977860280484751221, 'amit@gmail.com', 'This is test message', 'amit', '4'),
(3977860780484310829, 'rahulamit@gmail.com', 'This is another test message', 'rahul', ''),
(3977861130484845436, 'bhimamit@gmail.com', 'This is another another test message', 'Bhim', '');

-- --------------------------------------------------------

--
-- Table structure for table `facultyfeedbackform`
--

CREATE TABLE `facultyfeedbackform` (
  `submissionID` bigint(20) NOT NULL,
  `FacultysName` varchar(255) DEFAULT NULL,
  `PleasechoosethebestanswerforeachquestionTheinstructor` varchar(255) DEFAULT NULL,
  `Comments` text,
  `YourName` varchar(255) DEFAULT NULL,
  `Selecttodaysdate` varchar(255) DEFAULT NULL,
  `StarRating` varchar(255) DEFAULT NULL,
  `Selectyourbranch` varchar(255) DEFAULT NULL,
  `Enterthemessageasitsshown` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyfeedbackform`
--

INSERT INTO `facultyfeedbackform` (`submissionID`, `FacultysName`, `PleasechoosethebestanswerforeachquestionTheinstructor`, `Comments`, `YourName`, `Selecttodaysdate`, `StarRating`, `Selectyourbranch`, `Enterthemessageasitsshown`) VALUES
(3853388572148093817, 'ddd', '', '', '', '', '', '', ''),
(3853425612149305781, 'Mr xyz', 'Strongly Agree	,Agree	,Strongly Agree	,Disagree	,Agree	,Strongly Agree	,Neutral	,Agree	,Strongly Agree	,Neutral	,Agree	,Strongly Agree	,Neutral	,Agree	,Strongly Agree	', '', 'Abhijeet', '01/11/2017', '4', 'Information Technology', ''),
(3977845710486952492, 'dinesh kumar', 'Strongly Agree ,Agree ,Strongly Agree  ,Agree ,Neutral ,Strongly Agree  ,Agree ,Neutral ,Strongly Agree  ,Neutral ,Neutral ,Agree ,Neutral ,Agree ,Neutral ', 'nice', 'abhijeet', '25/03/2018', '4', 'Information Technology', ''),
(3977852650487106932, 'Amit', 'Neutral ,Disagree  ,Disagree  ,Strongly Disagree,Disagree  ,Strongly Disagree,Disagree  ,Disagree  ,Strongly Disagree,Disagree  ,Strongly Disagree,Disagree  ,Disagree  ,Disagree  ,Strongly Disagree', 'bad', 'Abhijeet', '26/03/2018', '2', 'Computer Science', ''),
(3977854040481369038, 'Rahul', 'Neutral ,Disagree  ,Disagree  ,Strongly Disagree,Disagree  ,Strongly Disagree,Disagree  ,Disagree  ,Strongly Agree  ,Disagree  ,Strongly Disagree,Disagree  ,Disagree  ,Strongly Agree ,Strongly Disagree', 'fair', 'Abhijeet', '07/03/2018', '5', 'Electrical', '');

-- --------------------------------------------------------

--
-- Table structure for table `hodnewsedit`
--

CREATE TABLE `hodnewsedit` (
  `nu` int(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `concered` varchar(20) NOT NULL,
  `textarea` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hodnewsedit`
--

INSERT INTO `hodnewsedit` (`nu`, `name`, `date`, `concered`, `textarea`) VALUES
(9, 'Richa sharma', '2018-03-29', 'Faculty', 'In computing, plain text is the data (e.g. file contents) that represent only characters of readable material but not its graphical representation nor other objects (images, etc.). It may also include a limited number of characters that control simple arrangement of text, such as line breaks or tabulation characters.'),
(10, 'Deshna SachAN', '2018-03-03', 'Student', 'ahvdshvdsjfvdsjvdjvsd,jhvdsh'),
(11, 'Pravin Singh', '2018-03-29', 'Student', 'Hii. There  submit your assignment latest by today.'),
(12, 'Pravin Singh', '2018-03-09', 'Faculty', 'Raw data (sometimes called source data or atomic data) is data that has not been processed for use. A distinction is sometimes made between data and information to the effect that information is the end product of data processing'),
(13, 'Pravin Singh', '2018-03-09', 'Faculty', 'Raw data (sometimes called source data or atomic data) is data that has not been processed for use. A distinction is sometimes made between data and information to the effect that information is the end product of data processing'),
(14, 'Pravin Singh', '2018-03-09', 'Student', 'Please submit your assignment today.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `dtime` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text1` text,
  `text2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profileimage`
--

CREATE TABLE `profileimage` (
  `username` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `nu` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `file_upload` int(255) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`nu`, `name`, `sem`, `type`, `year`, `file_upload`, `comment`) VALUES
(1, 'shank', 'one', 'Sessional', 0, 0, 'jjndsjnjds'),
(2, 'shank', 'five', 'Semester', 0, 47001473, 'hey'),
(3, 'Abhijeet', 'two', 'Semester', 0, 51, 'asaslk'),
(4, 'shank', 'eight', 'Sessional', 0, 47001473, 'jjndsjnjds'),
(5, 'shank', 'four', 'Semester', 0, 47001473, 'hey'),
(6, 'shank', 'four', 'Semester', 0, 47001473, 'hey'),
(7, 'shank', 'four', 'Semester', 0, 47001473, 'hey'),
(8, 'nsdjndsj', 'one', 'Sessional', 0, 51, ''),
(9, 'nsdjndsj', 'one', 'Sessional', 0, 51, ''),
(10, 'nsdjndsj', 'one', 'Sessional', 0, 51, ''),
(11, 'nsdjndsj', 'one', 'Sessional', 0, 51, ''),
(12, 'nsdjndsj', 'one', 'Sessional', 0, 51, ''),
(13, 'nsdjndsj', 'one', 'Sessional', 0, 51, ''),
(14, 'nsdjndsj', 'one', 'Sessional', 0, 51, ''),
(15, 'Abhijeet', 'five', 'Sessional', 0, 47001473, 'vkf');

-- --------------------------------------------------------

--
-- Table structure for table `studentfeespayment`
--

CREATE TABLE `studentfeespayment` (
  `submissionID` bigint(20) NOT NULL,
  `year` int(2) NOT NULL,
  `Reciept` varchar(255) DEFAULT NULL,
  `StudentName` varchar(255) DEFAULT NULL,
  `StudentEmail` varchar(255) DEFAULT NULL,
  `ConfirmyourMobilenumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentfeespayment`
--

INSERT INTO `studentfeespayment` (`submissionID`, `year`, `Reciept`, `StudentName`, `StudentEmail`, `ConfirmyourMobilenumber`) VALUES
(3850159924429628614, 4, 'yes', 'abhijeet', 'abhijeet@gmail.com', '9565448999'),
(3850159924429628619, 4, 'yes', 'abhijeet', 'abhijeet@gmail.com', '9565448999'),
(3850159924429628620, 2, 'yes', 'rahul', 'rahul@gmail.com', '9415460009'),
(3850159924429628660, 2, 'yes', 'rahul', 'rahul@gmail.com', '9415460009');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `nu` int(25) NOT NULL,
  `onebyone` varchar(20) NOT NULL,
  `onebytwo` varchar(20) NOT NULL,
  `onebythree` varchar(20) NOT NULL,
  `onebyfour` varchar(20) NOT NULL,
  `twobyone` varchar(20) NOT NULL,
  `twobytwo` varchar(20) NOT NULL,
  `twobythree` varchar(20) NOT NULL,
  `twobyfour` varchar(20) NOT NULL,
  `threebyone` varchar(20) NOT NULL,
  `threebytwo` varchar(20) NOT NULL,
  `threebythree` varchar(20) NOT NULL,
  `threebyfour` varchar(20) NOT NULL,
  `fourbyone` varchar(20) NOT NULL,
  `fourbytwo` varchar(20) NOT NULL,
  `fourbythree` varchar(20) NOT NULL,
  `fourbyfour` varchar(20) NOT NULL,
  `fivebyone` varchar(20) NOT NULL,
  `fivebytwo` varchar(20) NOT NULL,
  `fivebythree` varchar(20) NOT NULL,
  `fivebyfour` varchar(20) NOT NULL,
  `six` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`nu`, `onebyone`, `onebytwo`, `onebythree`, `onebyfour`, `twobyone`, `twobytwo`, `twobythree`, `twobyfour`, `threebyone`, `threebytwo`, `threebythree`, `threebyfour`, `fourbyone`, `fourbytwo`, `fourbythree`, `fourbyfour`, `fivebyone`, `fivebytwo`, `fivebythree`, `fivebyfour`, `six`) VALUES
(1, 'L_MC', 'L_SR', 'L_MC', 'L_NCR', 'L_RTS', 'L_SR', 'L_RTS', 'L_MC', 'L_NCR', 'L_SR', 'L_MC', 'L_RTS', 'L_NCR', 'L_RTS', 'L_SR', 'L_MC', 'L_NCR', 'L_MC', 'L_RTS', 'L_SR', 'project'),
(2, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(3, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(4, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(5, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(6, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(7, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(8, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(9, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(10, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(11, 'L_SR', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(12, 'L_NCR', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(13, 'L_SR', 'L_SR', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'SEMINOR'),
(14, 'L_SR', 'L_SR', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'SEMINOR'),
(15, 'L_NCR', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(16, 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'L_NCR', 'SEMINOR'),
(17, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(19, 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'L_RTS', 'project'),
(20, 'L_SR', 'L_RTS', 'L_NCR', 'L_MC', 'L_MC', 'L_SR', 'L_RTS', 'L_MC', 'L_NCR', 'L_RTS', 'L_SR', 'L_MC', 'L_NCR', 'L_MC', 'L_RTS', 'L_SR', 'L_NCR', 'L_NCR', 'L_SR', 'L_RTS', 'project');

-- --------------------------------------------------------

--
-- Table structure for table `timetable_2`
--

CREATE TABLE `timetable_2` (
  `nu` int(25) NOT NULL,
  `onebyone` varchar(20) NOT NULL,
  `onebytwo` varchar(20) NOT NULL,
  `onebythree` varchar(20) NOT NULL,
  `onebyfour` varchar(20) NOT NULL,
  `onebyfive` varchar(20) NOT NULL,
  `onebysix` varchar(20) NOT NULL,
  `onebyseven` varchar(20) NOT NULL,
  `twobyone` varchar(20) NOT NULL,
  `twobytwo` varchar(20) NOT NULL,
  `twobythree` varchar(20) NOT NULL,
  `twobyfour` varchar(20) NOT NULL,
  `twobyfive` varchar(20) NOT NULL,
  `twobysix` varchar(20) NOT NULL,
  `twobyseven` varchar(20) NOT NULL,
  `threebyone` varchar(20) NOT NULL,
  `threebytwo` varchar(20) NOT NULL,
  `threebythree` varchar(20) NOT NULL,
  `threebyfour` varchar(20) NOT NULL,
  `threebyfive` varchar(20) NOT NULL,
  `threebysix` varchar(20) NOT NULL,
  `threebyseven` varchar(20) NOT NULL,
  `fourbyone` varchar(20) NOT NULL,
  `fourbytwo` varchar(20) NOT NULL,
  `fourbythree` varchar(20) NOT NULL,
  `fourbyfour` varchar(20) NOT NULL,
  `fourbyfive` varchar(20) NOT NULL,
  `fourbysix` varchar(20) NOT NULL,
  `fourbyseven` varchar(20) NOT NULL,
  `fivebyone` varchar(20) NOT NULL,
  `fivebytwo` varchar(20) NOT NULL,
  `fivebythree` varchar(20) NOT NULL,
  `fivebyfour` varchar(20) NOT NULL,
  `fivebyfive` varchar(20) NOT NULL,
  `fivebysix` varchar(20) NOT NULL,
  `fivebyseven` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable_2`
--

INSERT INTO `timetable_2` (`nu`, `onebyone`, `onebytwo`, `onebythree`, `onebyfour`, `onebyfive`, `onebysix`, `onebyseven`, `twobyone`, `twobytwo`, `twobythree`, `twobyfour`, `twobyfive`, `twobysix`, `twobyseven`, `threebyone`, `threebytwo`, `threebythree`, `threebyfour`, `threebyfive`, `threebysix`, `threebyseven`, `fourbyone`, `fourbytwo`, `fourbythree`, `fourbyfour`, `fourbyfive`, `fourbysix`, `fourbyseven`, `fivebyone`, `fivebytwo`, `fivebythree`, `fivebyfour`, `fivebyfive`, `fivebysix`, `fivebyseven`) VALUES
(1, 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os', 'L_os'),
(2, 'L_maths', 'L_is', 'L_automata', 'L_automata', 'L_os', 'L_mis', 'L_automata', 'L_automata', 'L_is', 'L_mis', 'L_is', 'L_os', 'L_is', 'L_is', 'L_automata', 'L_itc', 'L_automata', 'L_automata', 'L_itc', 'L_itc', 'L_mis', 'L_maths', 'L_os', 'L_os', 'L_is', 'L_is', 'L_os', 'L_is', 'L_maths', 'L_mis', 'L_mis', 'L_mis', 'L_itc', 'L_os', 'L_itc');

-- --------------------------------------------------------

--
-- Table structure for table `timetable_3`
--

CREATE TABLE `timetable_3` (
  `nu` int(25) NOT NULL,
  `onebyone` varchar(20) NOT NULL,
  `onebytwo` varchar(20) NOT NULL,
  `onebythree` varchar(20) NOT NULL,
  `onebyfour` varchar(20) NOT NULL,
  `onebyfive` varchar(20) NOT NULL,
  `onebysix` varchar(20) NOT NULL,
  `onebyseven` varchar(20) NOT NULL,
  `twobyone` varchar(20) NOT NULL,
  `twobytwo` varchar(20) NOT NULL,
  `twobythree` varchar(20) NOT NULL,
  `twobyfour` varchar(20) NOT NULL,
  `twobyfive` varchar(20) NOT NULL,
  `twobysix` varchar(20) NOT NULL,
  `twobyseven` varchar(20) NOT NULL,
  `threebyone` varchar(20) NOT NULL,
  `threebytwo` varchar(20) NOT NULL,
  `threebythree` varchar(20) NOT NULL,
  `threebyfour` varchar(20) NOT NULL,
  `threebyfive` varchar(20) NOT NULL,
  `threebysix` varchar(20) NOT NULL,
  `threebyseven` varchar(20) NOT NULL,
  `fourbyone` varchar(20) NOT NULL,
  `fourbytwo` varchar(20) NOT NULL,
  `fourbythree` varchar(20) NOT NULL,
  `fourbyfour` varchar(20) NOT NULL,
  `fourbyfive` varchar(20) NOT NULL,
  `fourbysix` varchar(20) NOT NULL,
  `fourbyseven` varchar(20) NOT NULL,
  `fivebyone` varchar(20) NOT NULL,
  `fivebytwo` varchar(20) NOT NULL,
  `fivebythree` varchar(20) NOT NULL,
  `fivebyfour` varchar(20) NOT NULL,
  `fivebyfive` varchar(20) NOT NULL,
  `fivebysix` varchar(20) NOT NULL,
  `fivebyseven` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable_3`
--

INSERT INTO `timetable_3` (`nu`, `onebyone`, `onebytwo`, `onebythree`, `onebyfour`, `onebyfive`, `onebysix`, `onebyseven`, `twobyone`, `twobytwo`, `twobythree`, `twobyfour`, `twobyfive`, `twobysix`, `twobyseven`, `threebyone`, `threebytwo`, `threebythree`, `threebyfour`, `threebyfive`, `threebysix`, `threebyseven`, `fourbyone`, `fourbytwo`, `fourbythree`, `fourbyfour`, `fourbyfive`, `fourbysix`, `fourbyseven`, `fivebyone`, `fivebytwo`, `fivebythree`, `fivebyfour`, `fivebyfive`, `fivebysix`, `fivebyseven`) VALUES
(1, 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN'),
(2, 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN', 'L_CN'),
(3, 'L_CN', 'L_CD', 'L_KDSS', 'L_CD', 'L_CD', 'L_CD', 'L_CD', 'L_CN', 'L_KDSS', 'L_IM', 'L_KDSS', 'L_IM', 'L_IM', 'L_KDSS', 'L_CN', 'L_IM', 'L_DMW', 'L_IM', 'L_SE', 'L_CD', 'L_IM', 'L_CN', 'L_SE', 'L_SE', 'L_SE', 'L_CD', 'L_SE', 'L_SE', 'L_CN', 'L_DMW', 'L_SE', 'L_DMW', 'L_DMW', 'L_DMW', 'L_DMW');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `type`) VALUES
('1810111', '102222', 'Faculty'),
('1810136', '108888', 'student'),
('1810140', '104444', 'HOD'),
('1811400', '119565448999', 'student'),
('admin', '123', 'administration');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfaculty`
--
ALTER TABLE `addfaculty`
  ADD PRIMARY KEY (`year`,`username`,`serial_number`,`email_address`);

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`serial_number`,`email_address`,`username`);

--
-- Indexes for table `blueenvelopeform`
--
ALTER TABLE `blueenvelopeform`
  ADD PRIMARY KEY (`submissionID`);

--
-- Indexes for table `facultyfeedbackform`
--
ALTER TABLE `facultyfeedbackform`
  ADD PRIMARY KEY (`submissionID`);

--
-- Indexes for table `hodnewsedit`
--
ALTER TABLE `hodnewsedit`
  ADD PRIMARY KEY (`nu`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`nu`);

--
-- Indexes for table `studentfeespayment`
--
ALTER TABLE `studentfeespayment`
  ADD PRIMARY KEY (`submissionID`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`nu`);

--
-- Indexes for table `timetable_2`
--
ALTER TABLE `timetable_2`
  ADD PRIMARY KEY (`nu`);

--
-- Indexes for table `timetable_3`
--
ALTER TABLE `timetable_3`
  ADD PRIMARY KEY (`nu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hodnewsedit`
--
ALTER TABLE `hodnewsedit`
  MODIFY `nu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `nu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `nu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `timetable_2`
--
ALTER TABLE `timetable_2`
  MODIFY `nu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timetable_3`
--
ALTER TABLE `timetable_3`
  MODIFY `nu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
