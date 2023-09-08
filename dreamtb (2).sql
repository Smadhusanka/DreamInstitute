-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 11:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dreamtb`
--

CREATE TABLE `dreamtb` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ComformPassword` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dreamtb`
--

INSERT INTO `dreamtb` (`id`, `fullname`, `address`, `school`, `age`, `grade`, `gender`, `subject`, `contact`, `UserName`, `Password`, `ComformPassword`, `userType`) VALUES
(1, '', '', '', '', '', '', '', '', 'admin', 'admin123', 'admin123', 'admin'),
(2, 'shakila', 'anuradhapura', 'whc', '21', '13', 'male', 'Technology', '0716436132', 'shakilaM', 'sm123', 'sm123', 'user'),
(3, 'pavindhu madhuranga', 'nelubawa Anuradhapura', 'whc', '19', '13', 'male', 'Commerce', '0776254778', 'pavi12', 'pavi12@', 'pavi12@', 'user'),
(4, 'shalani nimantha', 'kahatagasdhihiliya anuradhapura', 'kahatagasdhigiliya college', '19', '13', 'female', 'Maths', '0773642578', '12shala', '12shala@', '12shala@', 'user'),
(5, 'malidhu', 'pothanegama', 'pothanrgamacollege', '19', '13', 'male', 'Bio', '0173245698', 'malidhu', '1234', '1234', 'user'),
(6, ' ', ' ', ' ', '19', '12', 'female', 'Art', '1111111111', 'asd', 'asd', 'asd', 'user'),
(7, '  maheesha bandara', ' thissamawatha,pothanegama', ' pothanegama college', '19', '13', 'male', 'Bio', '0712453694', 'mahesha', '123#', '123#', 'user'),
(8, 'sahan udhana', 'nochchitagama,anuradhapura', 'nochchiyagama college', '18', '12', 'male', 'Technology', '0713256987', 'sahan', 's12@', 's12@', 'user'),
(9, 'udari kulathunga', 'thabuththegama', 'thabuththegama college', '21', '13', 'female', 'Commerce', '0775689663', 'udari12', 'u12#', 'u12#', 'user'),
(10, 'shakila', 'pothanegama', 'whc', '19', '13', 'male', 'Technology', '0714562558', 'shaki', 'shaki12', 'shaki12', 'user'),
(11, 'shanika shanika', 'no.30 nochchiyagama', 'nochchiyagama college', '21', '13', 'female', 'Bio', '0712356690', 'shanika', 'sha@', 'sha@', 'user'),
(12, 'shakila', 'pothanegama', 'whc', '21', '13', 'male', 'Technology', '0712365440', 'shakila', '123', '123', 'user'),
(13, 'kasun', 'maharagama', 'maharagama college', '21', '12', 'male', 'Bio', '0712369552', 'kasun', 'kasun12@', 'kasun12@', 'user'),
(14, 'ruwan nishantha', 'katugasthota', 'katugastota college', '20', '13', 'male', 'Commerce', '0712546998', 'ruwan', 'ruwan#', 'ruwan#', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dreamtb`
--
ALTER TABLE `dreamtb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dreamtb`
--
ALTER TABLE `dreamtb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
