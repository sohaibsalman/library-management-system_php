-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 11:30 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(12) NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `password`, `email`, `phone`) VALUES
('admin', 'Admin', 'admin', 'admin@lms.com', '03164141068');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` varchar(12) NOT NULL,
  `name` varchar(32) NOT NULL,
  `author` varchar(32) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `category` varchar(32) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `author`, `edition`, `category`, `status`) VALUES
('001', 'Starting out with C++', 'Tony Gaddis', '8th', 'Computer', 'yes'),
('002', 'OOP', 'Dietel', '5th', 'Computer', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE `issued_books` (
  `bookid` varchar(10) NOT NULL,
  `bookname` varchar(32) NOT NULL,
  `bookauthor` varchar(32) NOT NULL,
  `bookedition` varchar(10) NOT NULL,
  `studentrollnumber` varchar(12) NOT NULL,
  `studentname` varchar(32) NOT NULL,
  `studentsection` varchar(10) NOT NULL,
  `studentdepartement` varchar(32) NOT NULL,
  `dateofissue` date NOT NULL,
  `issuestatus` varchar(3) NOT NULL,
  `dateofreturn` date NOT NULL,
  `returnstatus` varchar(3) NOT NULL,
  `fine` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issued_history`
--

CREATE TABLE `issued_history` (
  `bookid` varchar(10) NOT NULL,
  `bookname` varchar(32) NOT NULL,
  `bookauthor` varchar(32) NOT NULL,
  `bookedition` varchar(10) NOT NULL,
  `studentrollnumber` varchar(12) NOT NULL,
  `studentname` varchar(32) NOT NULL,
  `studentsection` varchar(10) NOT NULL,
  `studentdepartement` varchar(32) NOT NULL,
  `dateofissue` date NOT NULL,
  `issuestatus` varchar(3) NOT NULL,
  `returnstatus` varchar(3) NOT NULL,
  `dateofreturn` date NOT NULL,
  `fine` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued_history`
--

INSERT INTO `issued_history` (`bookid`, `bookname`, `bookauthor`, `bookedition`, `studentrollnumber`, `studentname`, `studentsection`, `studentdepartement`, `dateofissue`, `issuestatus`, `returnstatus`, `dateofreturn`, `fine`) VALUES
('001', 'asd', 'Tony Gaddis', '8th', 'asd', 'asd', 'asd', 'Department', '2018-12-12', 'yes', 'yes', '2018-12-10', 0),
('002', 'hjsdhsd', 'Dietel', '5th', 'bitf17a055', 'shdsd', 'IT-17', 'Department', '2018-12-11', 'no', 'yes', '2018-12-12', 0),
('001', 'Starting out with C++', 'Tony Gaddis', '8th', 'bitf17a040', 'Sohaib Salman', 'IT-17', 'Information Technology', '2018-12-12', 'no', 'yes', '2018-12-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_book_request`
--

CREATE TABLE `issue_book_request` (
  `rollnumber` varchar(12) NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `bookid` varchar(10) NOT NULL,
  `bookname` varchar(32) NOT NULL,
  `departement` varchar(32) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `rollnumber` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollnumber` varchar(12) NOT NULL DEFAULT '',
  `fullname` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `section` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `departement` varchar(32) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollnumber`, `fullname`, `password`, `section`, `email`, `phone`, `departement`, `status`) VALUES
('bitf17a036', 'Ahmad Bilal', '123', 'IT-17', 'bitf17a036@pucit.edu.pk', '111', 'Information Technology', 'yes'),
('bitf17a040', 'Sohaib Salman', 'sohaib', 'IT-17', 'bitf17a040@pucit.edu.pk', '2738921', 'Information Technology', 'no'),
('bitf17a055', 'Basharart Ali', '123', 'IT-17', 'bitf17a055@pucit.edu.pk', '7267389217', 'Information Technology', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `rollnumber` varchar(12) NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `section` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `departement` varchar(32) NOT NULL,
  `status` varchar(3) NOT NULL,
  `dateofreq` date NOT NULL,
  `timeofreq` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`rollnumber`, `fullname`, `password`, `section`, `email`, `phone`, `departement`, `status`, `dateofreq`, `timeofreq`) VALUES
('bitf17a040', 'Sohaib Salman', 'sohaib', 'IT-17', 'bitf17a040@pucit.edu.pk', '7267389217', 'Information Technology', 'no', '2018-12-12', '06:11:32.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_books`
--
ALTER TABLE `issued_books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `issue_book_request`
--
ALTER TABLE `issue_book_request`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`rollnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
