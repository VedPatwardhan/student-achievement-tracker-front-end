-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 03:52 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(15) NOT NULL,
  `Full_Name` varchar(500) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Full_Name`, `Email`, `Mobile`, `Password`) VALUES
('AD001', 'Sourav Patil', 'souravpatil1859@gmail.com', 9422473089, 'sourav123');

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE `arts` (
  `UID` varchar(50) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Art_Type` varchar(20) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Venue` varchar(20) NOT NULL,
  `Achievements` varchar(30) NOT NULL,
  `Date_Arts` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`UID`, `ID`, `Art_Type`, `Description`, `Venue`, `Achievements`, `Date_Arts`) VALUES
('ART-5e7b0c306da2a', 'C2K17105728', 'Drawing', 'Abstract Art', 'Mumbai', 'Participation', '2019-12-13'),
('ART-5e9fd1d9e9769', 'E2K18105578', 'Sculpture', 'Live Sculpture', 'Delhi', 'Participation', '2018-05-12'),
('ART-5e9fd282c94d7', 'E2K18105578', 'Painting', 'Abstract Art', 'Pune', 'Winner', '2019-02-09'),
('ART-5e9fd3db96b5d', 'I2K19102167', 'Singing', 'Solo', 'Mumbai', 'Participation', '2018-04-12'),
('ART-5ef4e86c0002f', 'C2K17105709', 'Acting', 'Solo performer in play', 'Pune', 'Participation', '2020-03-20'),
('ART-5f0ad6f09e4f2', 'C2K17105728', 'Drawing', 'Abstract Art', 'Pune', 'Winner ', '2020-07-03'),
('ART-5f0bfae0c3e8b', 'C2K17105728', 'Acting', 'Solo', 'Pune', 'Participation', '2020-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `ID` varchar(10) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Designation` varchar(15) NOT NULL,
  `Class` varchar(5) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`ID`, `Full_Name`, `Designation`, `Class`, `Department`, `Email`, `Mobile`, `Password`) VALUES
('001', 'Dr. Prahlad Kulkarni ', 'Principal', '', '', 'principal@pict.edu', 9876543210, 'ptk123'),
('37', 'Rajesh Ingale', 'HOD', '', 'Computer', 'rajeshingale@gmail.com', 8698035547, 'rji123');

-- --------------------------------------------------------

--
-- Table structure for table `competitive`
--

CREATE TABLE `competitive` (
  `UID` varchar(50) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Event` varchar(20) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Venue` varchar(30) NOT NULL,
  `Achievements` varchar(30) NOT NULL,
  `Date_comp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competitive`
--

INSERT INTO `competitive` (`UID`, `ID`, `Event`, `Description`, `Venue`, `Achievements`, `Date_comp`) VALUES
('CMP-5e7b3d7ac5f45', 'C2K17105728', 'Manipal Hackathon', '36 hour coding competition', 'Manipal', 'Winner ', '2020-03-06'),
('CMP-5e9fd2fc38e63', 'E2K18105578', 'Hackathon', 'Online Coding Competition', 'Hackathon Website', 'Participation', '2019-06-11'),
('CMP-5e9fd55899b72', 'I2K19102167', 'HackerEarth ', '36 hour coding competition', 'HackerEarth Website', 'Winner ', '2019-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `UID` varchar(50) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`UID`, `ID`, `Type`, `Name`, `size`) VALUES
('ART-5e7b0c306da2a', 'C2K17105728', 'Arts', 'ErEQMu0.jpg', 260925),
('ART-5e9fd1d9e9769', 'E2K18105578', 'Arts', 'Captain-Broken-Shield-iPhone-Wallpaper.jpg', 190180),
('ART-5e9fd282c94d7', 'E2K18105578', 'Arts', 'dmernoil.jpg', 84127),
('ART-5ef4e86c0002f', 'C2K17105709', 'Arts', 'Transformers-poster-32.jpg', 709118),
('ART-5f0ad6f09e4f2', 'C2K17105728', 'Arts', 'dmernoil.jpg', 84127),
('ART-5f0bfae0c3e8b', 'C2K17105728', 'Arts', 'dmernoil.jpg', 84127),
('CMP-5e7b3d7ac5f45', 'C2K17105728', 'Comp', '25076d2e051cd04740674adbbf33165c.jpg', 280811),
('PROF-C2K17105709', 'C2K17105709', 'Profile', 'Sourav_Patil11.jpg', 63394),
('PROF-C2K17105726', 'C2K17105726', 'Profile', 'Iron Man by Ultraraw26.jpg', 129963),
('PROF-C2K17105728', 'C2K17105728', 'Profile', 'piyush.jpg', 17308),
('PROF-C2K17105766', 'C2K17105766', 'Profile', '420IWNk.jpg', 376123),
('Proj-5f199303ead46', 'C2K17105728', 'Project', 'PtJTQRt.jpg', 959532),
('SP-5e7896751386f', 'C2K17105728', 'Sports', 'IoT_based_smart_traffic_signal_monitoring_system_u (1).pdf', 436905),
('SP-5e79bc4a55fdc', 'C2K17105728', 'Sports', 'Concepts_11.pdf', 77194),
('SP-5e7a104d9582c', 'C2K17105728', 'Sports', 'img_inc.png', 152202),
('SP-5e7de51d74388', 'C2K17105709', 'Sports', '5Lty3d3.jpg', 38872),
('SP-5e80cfb28f70d', 'I2K17102180', 'Sports', '4-29.jpg', 103501),
('SP-5e80cfd213c8f', 'I2K17102180', 'Sports', 'Captain-Broken-Shield-iPhone-Wallpaper.jpg', 190180),
('SP-5e9fdc104aa09', 'C2K17105728', 'Sports', '4-29.jpg', 103501),
('SP-5f086b748a965', 'C2K17105728', 'Sports', 'Request Letter for TNP.docx', 12751),
('SP-5f0ee5321fc2f', 'C2K17105728', 'Sports', 'dmernoil.jpg', 84127),
('SP-5f7f36a8e1e63', 'C2K17105728', 'Sports', 'transformers-5-cartel32233.jpg', 950821),
('SW-5e7b39bfe621e', 'C2K17105728', 'Social', 'instructions.docx', 14104);

-- --------------------------------------------------------

--
-- Table structure for table `forma`
--

CREATE TABLE `forma` (
  `UID` varchar(30) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Activity` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `State` varchar(200) NOT NULL,
  `Sponsor` varchar(100) NOT NULL,
  `Date_time` date NOT NULL,
  `Participants` int(11) NOT NULL,
  `Coordinator` varchar(150) NOT NULL,
  `Remarks` varchar(300) NOT NULL,
  `Filename` varchar(500) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forma`
--

INSERT INTO `forma` (`UID`, `ID`, `Activity`, `Title`, `State`, `Sponsor`, `Date_time`, `Participants`, `Coordinator`, `Remarks`, `Filename`, `Currentdate`) VALUES
('SP-5f749f439aacc', '37', 'seminar', 'first', 'nashik', 'picct', '2019-08-23', 129, 'Rahul', 'session was success', '', '2020-10-03'),
('SP-5f74eaf87462d', '37', 'Seminar', 'Artificial Intelligence', 'pune', 'pict', '2019-10-10', 190, 'ramesh', 'session was success', 'C:\\xampp\\tmp\\php32CA.tmp', '2020-10-02'),
('SP-5f74eb54e3a1b', '37', 'assaddqd', 'aas', 'qwdas', 'picct', '2019-09-09', 21, 'piyush', 'good', 'g1.jpg', '2020-10-05'),
('SP-5f74ec63912d7', '37', 'assaddqd', 'aas', 'qwdas', 'ds', '2019-12-12', 20, 'as', 'djasm', 'uploads/37/formA/SP-5f74ec63912d7', '2020-09-12'),
('SP-5f74ecce5a64b', '37', 'a', 'n', 'aa', 'as', '2019-12-12', 21, 'jf', 'dd', 'uploads/37/formA/g1.jpg', '2020-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `formb`
--

CREATE TABLE `formb` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Activity` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Speaker` varchar(60) NOT NULL,
  `Date_time` date NOT NULL,
  `Participants` int(11) NOT NULL,
  `Remarks` varchar(400) NOT NULL,
  `Filename` varchar(400) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `formc`
--

CREATE TABLE `formc` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Organiser` varchar(60) NOT NULL,
  `Date_time` date NOT NULL,
  `Staff` varchar(60) NOT NULL,
  `Sponsorship` varchar(60) NOT NULL,
  `Filename` varchar(400) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formc`
--

INSERT INTO `formc` (`UID`, `ID`, `Title`, `Type`, `Organiser`, `Date_time`, `Staff`, `Sponsorship`, `Filename`, `Currentdate`) VALUES
('SP-5f777c79a0cb0', '37', 'Artificial Intelligence', 'open', 'asea', '2019-12-12', 'rahul c', 'NIL', 'g1.jpg', '2020-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `formd`
--

CREATE TABLE `formd` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Collab` varchar(200) NOT NULL,
  `Date_time` date NOT NULL,
  `Remark` varchar(500) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formd`
--

INSERT INTO `formd` (`UID`, `ID`, `Name`, `Collab`, `Date_time`, `Remark`, `Filename`, `Currentdate`) VALUES
('SP-5f77812bcd857', '37', 'PICT', 'Joint colab', '2020-01-01', 'session was success', 'g1.jpg', '2020-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `forme`
--

CREATE TABLE `forme` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Investment` varchar(50) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  `Filename` varchar(60) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forme`
--

INSERT INTO `forme` (`UID`, `ID`, `Name`, `Title`, `Investment`, `Remarks`, `Filename`, `Currentdate`) VALUES
('SP-5f7785e19a26a', '37', 'PICT', 'Artificial Intelligence', '10', 'profit', 'g1.jpg', '2020-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `formf`
--

CREATE TABLE `formf` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Sponsor` varchar(100) NOT NULL,
  `Support` varchar(200) NOT NULL,
  `Grant_money` varchar(100) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Filename` varchar(60) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formf`
--

INSERT INTO `formf` (`UID`, `ID`, `Name`, `Sponsor`, `Support`, `Grant_money`, `Year`, `Filename`, `Currentdate`) VALUES
('SP-5f78c8204a0ae', '37', 'PICT', 'pict', 'money', '12200', '2019', 'g1.jpg', '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `formg`
--

CREATE TABLE `formg` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Grantname` varchar(100) NOT NULL,
  `Authority` varchar(60) NOT NULL,
  `Period` varchar(60) NOT NULL,
  `OrderNo` varchar(40) NOT NULL,
  `Date_time` date NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `Filename` varchar(60) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formg`
--

INSERT INTO `formg` (`UID`, `ID`, `Name`, `Grantname`, `Authority`, `Period`, `OrderNo`, `Date_time`, `Amount`, `Filename`, `Currentdate`) VALUES
('SP-5f78cf052de77', '37', 'Piyush Gulhane', 'bas', 'self', '1 yr', 'asd', '2019-11-11', '12322', 'g1.jpg', '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `formh`
--

CREATE TABLE `formh` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Activity` varchar(200) NOT NULL,
  `Finance` varchar(100) NOT NULL,
  `Count1` varchar(60) NOT NULL,
  `Filename` varchar(60) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formh`
--

INSERT INTO `formh` (`UID`, `ID`, `Year`, `Course`, `Activity`, `Finance`, `Count1`, `Filename`, `Currentdate`) VALUES
('SP-5f78d6d4e1cfe', '37', '2019', 'Science', 'Seminar', '1000', '1212', 'g1.jpg', '2020-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `formi`
--

CREATE TABLE `formi` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Client` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Amount` varchar(60) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formi`
--

INSERT INTO `formi` (`UID`, `ID`, `Name`, `Client`, `Title`, `Amount`, `Filename`, `Currentdate`) VALUES
('SP-5f798fcbef665', '37', 'Piyush Gulhane', 'sourav', 'Artificial Intelligence', '1001', 'g1.jpg', '2020-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `formj`
--

CREATE TABLE `formj` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Publish` varchar(60) NOT NULL,
  `Patent_Grant` varchar(60) NOT NULL,
  `License` varchar(60) NOT NULL,
  `Amount` varchar(60) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formj`
--

INSERT INTO `formj` (`UID`, `ID`, `Name`, `Title`, `Publish`, `Patent_Grant`, `License`, `Amount`, `Filename`, `Currentdate`) VALUES
('SP-5f79958c82fb6', '37', 'Piyush Gulhane', 'Artificial Intelligence', 'yes 2019', 'yes 2020', 'yes 2020', '10011', 'g1.jpg', '2020-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `formk`
--

CREATE TABLE `formk` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Publisher` varchar(100) NOT NULL,
  `Date_Pub` date NOT NULL,
  `Copy` varchar(60) NOT NULL,
  `Link` varchar(200) NOT NULL,
  `Isbn` varchar(40) NOT NULL,
  `Filename` varchar(200) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formk`
--

INSERT INTO `formk` (`UID`, `ID`, `Name`, `Title`, `Publisher`, `Date_Pub`, `Copy`, `Link`, `Isbn`, `Filename`, `Currentdate`) VALUES
('SP-5f799acd37ffd', '37', 'Piyush Gulhane', 'Artificial Intelligence', 'nashik', '2018-12-12', 'hard', 'asdasd', '12321', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `forml`
--

CREATE TABLE `forml` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Journal` varchar(200) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `Volume` varchar(50) NOT NULL,
  `Page` varchar(60) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `Isbn` varchar(60) NOT NULL,
  `Publisher` varchar(100) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forml`
--

INSERT INTO `forml` (`UID`, `ID`, `Name`, `Title`, `Journal`, `Level`, `Volume`, `Page`, `Year`, `Isbn`, `Publisher`, `Filename`, `Currentdate`) VALUES
('SP-5f79a132b45b3', '37', 'Piyush Gulhane', 'Artificial Intelligence', 'ieee', 'national', '1', '1001', '2019', '1233', 'nashik', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formm`
--

CREATE TABLE `formm` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Sanction` varchar(100) NOT NULL,
  `Fund` varchar(40) NOT NULL,
  `Duration` varchar(60) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `Major` varchar(60) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formm`
--

INSERT INTO `formm` (`UID`, `ID`, `Name`, `Faculty`, `Title`, `Sanction`, `Fund`, `Duration`, `Amount`, `Major`, `Filename`, `Currentdate`) VALUES
('SP-5f79a7f598223', '37', 'Piyush Gulhane', 'Comp', 'Artificial Intelligence', '123 20/08/2019', 'rahul', '2 months', '12331', 'major', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formn`
--

CREATE TABLE `formn` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Achievement` varchar(200) NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formn`
--

INSERT INTO `formn` (`UID`, `ID`, `Name`, `Achievement`, `Remark`, `Filename`, `Currentdate`) VALUES
('SP-5f79ab3d641f0', '37', 'PICT', 'winner 12', 'good', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formo`
--

CREATE TABLE `formo` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Achievement` varchar(200) NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `Filename` varchar(60) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formo`
--

INSERT INTO `formo` (`UID`, `ID`, `Name`, `Class`, `Achievement`, `Remark`, `Filename`, `Currentdate`) VALUES
('SP-5f79ae3b12c63', '37', 'Piyush Gulhane', 'BE-2', 'winneras', 'good', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formp`
--

CREATE TABLE `formp` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formp`
--

INSERT INTO `formp` (`UID`, `ID`, `Department`, `Description`, `Filename`, `Currentdate`) VALUES
('SP-5f79b17b6551b', '37', 'Computer', 'dddasasdasdasdsadsa', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formq`
--

CREATE TABLE `formq` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Participants` varchar(50) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Participant_name` varchar(60) NOT NULL,
  `Prize` varchar(60) NOT NULL,
  `Level` varchar(60) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formq`
--

INSERT INTO `formq` (`UID`, `ID`, `Name`, `Participants`, `Duration`, `Participant_name`, `Prize`, `Level`, `Filename`, `Currentdate`) VALUES
('SP-5f79b6dd367f1', '37', 'Piyush Gulhane', '2312', '3 days', '', '1', '4', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formr`
--

CREATE TABLE `formr` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `Students` varchar(60) NOT NULL,
  `Date_visit` date NOT NULL,
  `Coordinator` varchar(100) NOT NULL,
  `Filename` varchar(60) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formr`
--

INSERT INTO `formr` (`UID`, `ID`, `Name`, `Purpose`, `Students`, `Date_visit`, `Coordinator`, `Filename`, `Currentdate`) VALUES
('SP-5f79bbe926165', '37', 'Piyush Gulhane', 'jkn', '2312', '2020-02-12', 'Rahul', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FDP` varchar(200) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `Topic` varchar(200) NOT NULL,
  `Date_time` date NOT NULL,
  `Organizer` varchar(400) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`UID`, `ID`, `Name`, `FDP`, `Level`, `Topic`, `Date_time`, `Organizer`, `Filename`, `Currentdate`) VALUES
('SP-5f79c0d465774', '37', 'Piyush Gulhane', 'asdsadas2', '21', 'asaeeaea12', '1970-01-01', 'piyush', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formt`
--

CREATE TABLE `formt` (
  `UID` varchar(40) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Organizer` varchar(100) NOT NULL,
  `Participants` varchar(200) NOT NULL,
  `Duration` varchar(60) NOT NULL,
  `Prize` varchar(60) NOT NULL,
  `Remark` varchar(400) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `Currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formt`
--

INSERT INTO `formt` (`UID`, `ID`, `Name`, `Organizer`, `Participants`, `Duration`, `Prize`, `Remark`, `Filename`, `Currentdate`) VALUES
('SP-5f79c60635ae5', '37', 'Piyush Gulhane', 'piyush', '2312', '3 days', '12', 'session was success', 'g1.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `project_competition`
--

CREATE TABLE `project_competition` (
  `UID` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `Domain` varchar(200) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Guide` varchar(200) NOT NULL,
  `Sponsor` varchar(200) NOT NULL,
  `Achievement` varchar(100) NOT NULL,
  `Venue` varchar(200) NOT NULL,
  `Date_Proj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_competition`
--

INSERT INTO `project_competition` (`UID`, `ID`, `Title`, `Domain`, `Type`, `Description`, `Guide`, `Sponsor`, `Achievement`, `Venue`, `Date_Proj`) VALUES
('Proj-5f199303ead46', 'C2K17105728', 'Traffic Monitoring System', 'Machine Learning', 'Software', '  App', 'Prof. P. P. Joshi ', 'Apex Meditech', 'Winner ', 'PICT,Pune', '2020-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `social_work`
--

CREATE TABLE `social_work` (
  `UID` varchar(50) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Nature_of_work` varchar(20) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Associated_org` varchar(40) NOT NULL,
  `Venue` varchar(30) NOT NULL,
  `Date_SW` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_work`
--

INSERT INTO `social_work` (`UID`, `ID`, `Nature_of_work`, `Description`, `Associated_org`, `Venue`, `Date_SW`) VALUES
('SW-5e7b39bfe621e', 'C2K17105728', 'Tree Planation', '1000 tree plantation', 'PICT NGO', 'Taljai,Pune', '2018-06-13'),
('SW-5e9fd31dd793e', 'E2K18105578', 'Tree Planation', '1000 tree plantation', 'PICT NGO', 'Taljai,Pune', '2018-11-23'),
('SW-5e9fd52ad4fee', 'I2K19102167', 'Help at Old age home', 'interaction with people', 'PICT NGO', 'Pune', '2019-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `UID` varchar(50) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Sports_Name` varchar(20) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Venue` varchar(20) NOT NULL,
  `Achievements` varchar(30) NOT NULL,
  `Date_Sports` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`UID`, `ID`, `Sports_Name`, `Description`, `Venue`, `Achievements`, `Date_Sports`) VALUES
('SP-5e7896751386f', 'C2K17105728', 'BasketBall', 'one -day Tournament', 'Kolkata', 'Winner', '2020-03-14'),
('SP-5e7a104d9582c', 'C2K17105728', 'BasketBall', '1 Match', 'Pune', 'Participation', '2020-03-12'),
('SP-5e7de51d74388', 'C2K17105709', 'Football', 'One Match', 'England', 'Runner up', '2020-03-03'),
('SP-5e807ab4ea105', 'C2K17105709', 'Cricket', 'One-day 3 matches', 'Pune', 'Winner', '2020-03-21'),
('SP-5e80cfb28f70d', 'I2K17102180', 'Football', '2 matches', 'London', 'Participation', '2020-03-18'),
('SP-5e80cfd213c8f', 'I2K17102180', 'Squash', 'Duet', 'Manipal', 'Runner up', '2020-03-11'),
('SP-5e9fd34284147', 'E2K18105578', 'Badminton', 'Duet', 'Pune', 'Runner up', '2019-05-15'),
('SP-5e9fd48ecd9ca', 'I2K19102167', 'Volleyball', '3 Matches', 'Pune', 'Winner ', '2019-09-21'),
('SP-5f086b748a965', 'C2K17105728', 'Football', 'One-Match', 'England', 'Runner up', '2020-07-03'),
('SP-5f0ee5321fc2f', 'C2K17105728', 'Football', '1 Match', 'London', 'Participation', '2020-07-02'),
('SP-5f7f36a8e1e63', 'C2K17105728', 'Squash', 'Duet', 'Pune', 'Winner ', '2019-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` varchar(15) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Rollno` int(11) NOT NULL,
  `Year` varchar(5) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Full_Name`, `Class`, `Rollno`, `Year`, `Department`, `DOB`, `Email`, `Mobile`, `Address`, `Password`) VALUES
('C2K17105575', 'Santosh Rajendra Palande', 'TE2', 31245, 'TE', 'Computer', '1999-09-17', 'santoshpalande45@gmail.com', 8805144965, 'Shirdi', 'santosh123'),
('C2K17105709', 'Sourav Santosh Patil', 'TE2', 31248, 'TE', 'Computer', '1999-05-18', 'sourru1999@gmail.com', 9423051999, 'A3-503 Shimmer N Shine, Hingane Khurd, Sinhgad Road, Pune', 'sourav123'),
('C2K17105726', 'Samar Vinod Patil', 'SE7', 21732, 'SE', 'Computer', '2000-11-18', 'souravpatil1859@gmail.com', 9422473089, 'A3 503, Shimmer N Shine', 'samar123'),
('C2K17105728', 'Piyush Manoj Gulhane', 'TE2', 31249, 'TE', 'Computer', '1999-07-01', 'piyushgulhane150@gmail.com', 8698035547, 'Nashik', 'piyush123'),
('C2K18105727', 'Rutuja Kawade', 'SE2', 21234, 'SE', 'Computer', '2000-02-09', 'rutuja@gmail.com', 9698035547, 'Kolhapur', 'rutuja123'),
('C2K19105714', 'Samarth Pawar', 'FE9', 11942, 'FE', 'Computer', '2001-06-19', 'samarth@gmail.com', 9423051789, 'Hingne Khurd, SinhgadRoad,', 'samarth123'),
('E2K18105578', 'Harsh Patil', 'SE6', 32657, 'SE', 'ENTC', '2000-07-25', 'harsh@gmail.com', 9845244943, 'Sinhgad Road, A3-503', 'harsh123'),
('I2K17102180', 'Sahil Naphade', 'TE7', 32711, 'TE', 'IT', '1999-07-13', 'sahil@gmail.com', 8698035547, 'amaravati', 'sahil123'),
('I2K17102412', 'Mohit Arora', 'TE10', 33205, 'TE', 'IT', '1999-02-10', 'mohit@gmail.com', 8007347723, 'ahmednagar', 'mohit123'),
('I2K19102167', 'Vishal Dane', 'FE2', 13212, 'FE', 'IT', '2001-10-24', 'vishal@gmail.com', 7350014868, 'Satara', 'vishal123');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `ID` varchar(15) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_temp`
--

CREATE TABLE `stu_temp` (
  `ID` varchar(15) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Rollno` int(11) NOT NULL,
  `Year` varchar(5) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `arts`
--
ALTER TABLE `arts`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `competitive`
--
ALTER TABLE `competitive`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `forma`
--
ALTER TABLE `forma`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formb`
--
ALTER TABLE `formb`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formc`
--
ALTER TABLE `formc`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formd`
--
ALTER TABLE `formd`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `forme`
--
ALTER TABLE `forme`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formf`
--
ALTER TABLE `formf`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formg`
--
ALTER TABLE `formg`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formh`
--
ALTER TABLE `formh`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formi`
--
ALTER TABLE `formi`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formj`
--
ALTER TABLE `formj`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formk`
--
ALTER TABLE `formk`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `forml`
--
ALTER TABLE `forml`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formm`
--
ALTER TABLE `formm`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formn`
--
ALTER TABLE `formn`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formo`
--
ALTER TABLE `formo`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formp`
--
ALTER TABLE `formp`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formq`
--
ALTER TABLE `formq`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formr`
--
ALTER TABLE `formr`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `formt`
--
ALTER TABLE `formt`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `project_competition`
--
ALTER TABLE `project_competition`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `social_work`
--
ALTER TABLE `social_work`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arts`
--
ALTER TABLE `arts`
  ADD CONSTRAINT `arts_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `competitive`
--
ALTER TABLE `competitive`
  ADD CONSTRAINT `competitive_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_competition`
--
ALTER TABLE `project_competition`
  ADD CONSTRAINT `project_competition_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social_work`
--
ALTER TABLE `social_work`
  ADD CONSTRAINT `social_work_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sports`
--
ALTER TABLE `sports`
  ADD CONSTRAINT `sports_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
