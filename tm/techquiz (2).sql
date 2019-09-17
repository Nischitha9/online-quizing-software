-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 31, 2019 at 03:44 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

DROP TABLE IF EXISTS `account_details`;
CREATE TABLE IF NOT EXISTS `account_details` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `phone_no` double NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`name`, `password`, `email_id`, `phone_no`, `admin`) VALUES
('sri', '8877', '', 0, 0),
('shashankaaa', '1234', 'dsgfdhgfcgf@gamil.co', 786744533, 0),
('rak', '12345', 'gfshgj@gmail.com', 12345678, 0),
('ram', '324567', 'hjchajshjh@fgfyfyuxf', 23456, 0),
('sri', '8877', 'iamchotusri@gmail.co', 8800880088, 0),
('sriram', '1', 'ram@1', 2345678, 1),
('Sanjay', 'san', 'sanjays0410@gmail.co', 8123333516, 0),
('shashank', '12345', 'shashnk@gmail.com', 4337656546, 0),
('ram', '1234', 'sriramgn0@gmail.com', 9686628025, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

DROP TABLE IF EXISTS `questions_table`;
CREATE TABLE IF NOT EXISTS `questions_table` (
  `quiz_name` varchar(20) NOT NULL,
  `number` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `correct_answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`quiz_name`, `number`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
('cricket', 1, 'Who has scored the most runs in a single First-class innings?', 'brian lara', 'dhoni', 'all of these', 'none of these', 1),
('cricket', 2, 'Dizzy is the nickname of what Australian player?', 'jason', 'bret lee', 'all of these', 'none of these', 1),
('cricket', 3, 'Which of the following countries won the final of the triangular cricket series held in durban in februarry 1997 ?', 'south africa', 'india', 'all of these', 'none of these', 1),
('cricket', 4, 'Former Australian captain Allan Border was sometimes known as \"Captain Grumpy\". What was his other nickname?', 'ab', 'bc', 'all of these', 'none of these', 1),
('cricket', 5, 'Which was the 1st non Test playing country to beat India in an international match?', 'sri lanka', 'pakistan', 'all of these', 'none of these', 1),
('cricket', 6, 'Who is the leading wicket taker in the history of Test cricket?', 'shane warne', ' sri ram', 'all of these', 'none of these', 1),
('cricket', 7, 'Where did the 1st ODI match was played in India?', 'ahmedabad', 'bangalore', 'all of these', 'none of these', 1),
('cricket', 8, 'Former Australian captain Mark Taylor has had several nicknames over his playing career. Which of the following was NOT one of them??', 'stumpy', 'bumpy', 'all of these', 'none of these', 1),
('cricket', 9, 'Which player has scored the most runs in a single Test innings?', 'brian lara', 'kohli', 'all of these', 'none of these', 1),
('cricket', 10, 'Who was the 1st ODI captain for India?', 'ajith', 'kohli', 'all of these', 'none of these', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_details`
--

DROP TABLE IF EXISTS `quiz_details`;
CREATE TABLE IF NOT EXISTS `quiz_details` (
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(200) NOT NULL,
  `no_of_questions` int(11) NOT NULL,
  `enable` int(11) NOT NULL,
  `set_time` int(11) NOT NULL,
  PRIMARY KEY (`quiz_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_details`
--

INSERT INTO `quiz_details` (`quiz_id`, `quiz_name`, `no_of_questions`, `enable`, `set_time`) VALUES
(1, 'cricket', 7, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_participants`
--

DROP TABLE IF EXISTS `quiz_participants`;
CREATE TABLE IF NOT EXISTS `quiz_participants` (
  `name` varchar(20) NOT NULL,
  `quiz_name` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `attempt` int(11) NOT NULL,
  `submit` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `datetime1` datetime NOT NULL,
  `time1` int(11) NOT NULL,
  PRIMARY KEY (`name`,`quiz_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_participants`
--

INSERT INTO `quiz_participants` (`name`, `quiz_name`, `time`, `date`, `attempt`, `submit`, `score`, `datetime`, `datetime1`, `time1`) VALUES
('ram', 'cricket', '09:14:26', '2019-07-31', 1, 0, 0, '2019-07-31 09:14:26', '2019-07-31 09:14:26', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
