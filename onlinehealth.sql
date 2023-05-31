-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 08:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinehealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `SerialNo.` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `YourMassage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`SerialNo.`, `Name`, `Email`, `Subject`, `YourMassage`) VALUES
(9, 'Nipa', 'nipa@gmail.com', 'MRI', 'I want to change my report, please update.'),
(10, 'Lifat', 'lifat@hotmail.com', 'DENGUE', 'I want to change my report. Please update.'),
(11, 'Abir', 'abir@gmail.com', 'XRAY', 'I have added new report, Please Update.');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `SerialNo` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `RelationshipStatus` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Address` text NOT NULL,
  `Image` varchar(70) NOT NULL,
  `PhoneNo` varchar(14) NOT NULL,
  `NID` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`SerialNo`, `Name`, `Email`, `Gender`, `RelationshipStatus`, `DOB`, `Address`, `Image`, `PhoneNo`, `NID`) VALUES
(1, 'Nishal', 'nishal@gmail.com', 'Male', 'Single', '2022-02-02', 'Dhaka', '../Images/nishal@gmail.com.jpg', '01987124931', '7358130255'),
(2, 'Hossain', 'hossain@gmail.com', 'Male', 'Single', '2022-08-08', 'Mohammadpur', '../Images/hossain@gmail.com.jpg', '01797105274', '7358130266'),
(17, 'nipa', 'nipa@gmail.com', 'Female', 'Single', '2000-01-01', '15/A, DIN NATH SEN ROAD', '../Images/nipa@gmail.com.jpg', '01533386213', '346757886543'),
(18, 'Lifat', 'lifat@hotmail.com', 'Male', 'Single', '2000-03-22', 'Mohammadpur, Dhaka-1207.', '../Images/lifat@hotmail.com.png', '01613226118', '243344553656543'),
(19, 'Abir', 'abir@gmail.com', 'Male', 'Married', '2000-09-13', 'West Dhanmondi, Dhaka.', '../Images/abir@gmail.com.png', '01303542116', '74897095092485809');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `SerialNo` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ReportHeadline` varchar(70) NOT NULL,
  `ReportDate` date NOT NULL,
  `ReportDetails` longtext NOT NULL,
  `ReportFile` text NOT NULL,
  `DeletionStatus` int(3) NOT NULL DEFAULT 0,
  `RecordedOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`SerialNo`, `Email`, `ReportHeadline`, `ReportDate`, `ReportDetails`, `ReportFile`, `DeletionStatus`, `RecordedOn`) VALUES
(1, 'nishal@gmail.com', 'CITY SCAN', '2022-08-19', 'POSITIVE', 'Files/nishal@gmail.com2022-08-19MRI.sql', 0, '2022-08-19 06:59:41'),
(3, 'nishal@gmail.com', 'COVID-19', '2022-08-02', 'NEGATIVE', 'Files/nishal@gmail.com2022-08-02COVID-19.jpg', 0, '2022-08-31 09:57:18'),
(12, 'lifat@hotmail.com', 'DENGUE', '2022-03-01', 'Positive', 'Files/lifat@hotmail.com2022-03-01DENGUE.txt', 0, '2023-05-02 15:50:16'),
(13, 'abir@gmail.com', 'XRAY', '2022-06-06', 'Negative. ', 'Files/abir@gmail.com2022-06-06XRAY.txt', 0, '2023-05-02 15:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SerialNo` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `UserRole` varchar(50) NOT NULL DEFAULT 'General',
  `Status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SerialNo`, `Email`, `Password`, `FirstName`, `UserRole`, `Status`) VALUES
(1, 'admin@healthdata.com', 'admin', 'admin', 'Admin', 'Approved'),
(2, 'snova@gmail.com', '1234', 'nova', 'General', 'Approved'),
(16, 'nipa@gmail.com', '1234', 'nipa', 'General', 'Approved'),
(17, 'lifat@hotmail.com', '1234', 'Lifat', 'General', 'Approved'),
(18, 'abir@gmail.com', '1234', 'Abir', 'General', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`SerialNo.`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`SerialNo`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SerialNo`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `SerialNo.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
