-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 06:57 PM
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
-- Database: `munyeshuri_system_dbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_tbl`
--

CREATE TABLE `acc_tbl` (
  `id` int(9) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `passwd` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_tbl`
--

INSERT INTO `acc_tbl` (`id`, `username`, `passwd`, `Email`, `usertype`, `CreatedDate`) VALUES
(1, 'GAHUZAMIRYANGO', 'jado', 'gahuzaj12@gmail.com', 'localuser', '2023-03-12 14:46:27'),
(2, 'GAHUZAMIRYANGO', 'okello', 'gahuzaj12@gmail.com', 'localuser', '2023-03-12 16:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `passwd` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passwd`, `Email`, `CreatedDate`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '2023-03-14 20:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Emmy', 'jado@gmail.com', 'we need developer');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(9) NOT NULL,
  `coursename` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `image`, `CreatedDate`) VALUES
(1, 'Web design', NULL, '2023-03-15 07:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Empo_id` int(9) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Empo_id`, `firstname`, `password`, `Email`, `telephone`, `CreatedDate`) VALUES
(1, 'okello', 'okello', 'jado@gmail.com', '0784332503', '2023-03-12 16:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(9) NOT NULL,
  `trimester` varchar(20) DEFAULT NULL,
  `academic` varchar(10) DEFAULT NULL,
  `facult` varchar(5) DEFAULT NULL,
  `course` varchar(12) DEFAULT NULL,
  `STUD_ID` int(12) DEFAULT NULL,
  `fname` varchar(12) DEFAULT NULL,
  `lname` varchar(12) DEFAULT NULL,
  `gender` varchar(12) DEFAULT NULL,
  `Test` varchar(12) DEFAULT NULL,
  `Exam` varchar(12) DEFAULT NULL,
  `Total` varchar(12) DEFAULT NULL,
  `Empo_id` int(12) DEFAULT NULL,
  `InsertedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `trimester`, `academic`, `facult`, `course`, `STUD_ID`, `fname`, `lname`, `gender`, `Test`, `Exam`, `Total`, `Empo_id`, `InsertedDate`) VALUES
(1, 'Trimester I', '2018-2019', 'SOD', 'web developm', 3, 'RUREMA', 'Jules', 'Male', '37', '39', '56.5', 0, '2023-03-12 12:37:57'),
(2, 'Trimester I', '2018-2019', 'SOD', 'web developm', 1, 'GAHUZAMIRYAN', 'de DIEU', 'Male', '40', '40', '80', 0, '2023-03-12 12:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STUD_ID` int(9) NOT NULL,
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(10) DEFAULT NULL,
  `Gender` varchar(5) DEFAULT NULL,
  `Orgins` varchar(12) DEFAULT NULL,
  `Guardian_Names` varchar(12) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `InsertedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STUD_ID`, `Firstname`, `Lastname`, `Gender`, `Orgins`, `Guardian_Names`, `image`, `InsertedDate`) VALUES
(1, 'GAHUZAMIRYANGO', 'de DIEU', 'Male', 'BYUMBA', 'PERE', 'image', '2023-03-11 08:20:41'),
(2, 'BUGINGO', 'Emmanuel', 'Male', 'RUBAVU', 'PAPA', '1678383752.jpg', '2023-03-11 11:31:56'),
(3, 'RUREMA', 'Jules', 'Male', 'RUBAVU', 'PAPA', '1678382751.JPG', '2023-03-11 11:33:02'),
(4, 'HIRWA', 'Valantin', 'Male', 'MUHANGA', 'Anick', '1678383507.jpg', '2023-03-11 16:43:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_tbl`
--
ALTER TABLE `acc_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Empo_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STUD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_tbl`
--
ALTER TABLE `acc_tbl`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Empo_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STUD_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
