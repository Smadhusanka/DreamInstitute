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

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`) VALUES
(1, 'shakila', 'this is good website'),
(2, 'santha', 'greate'),
(3, '@@@@@@@@@', '@@@@@@'),
(4, '111111111', '!!#@'),
(5, '11111111111', '!!!!!!!!!!!!!'),
(6, 'assssss', '!!!!!!!!!!!!@'),
(7, 'sad', '\r\n'),
(8, 'as', ' '),
(9, ' ', ' \r\n'),
(10, '  ', '      '),
(11, 'shakia', 'good'),
(12, 'kavi', 'wowww'),
(13, 'balu', 'good'),
(14, 'madu', 'thank for you'),
(15, 'shakila', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `stafftb`
--

CREATE TABLE `stafftb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subjectStream` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `contactNumber` varchar(15) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ComformPassword` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL DEFAULT 'teacher'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stafftb`
--

INSERT INTO `stafftb` (`id`, `name`, `subjectStream`, `subject`, `description`, `contactNumber`, `UserName`, `Password`, `ComformPassword`, `userType`) VALUES
(1, '', '', '', '', '', 'admin', 'admin123', 'admin123', 'admin'),
(2, 'Mr.Madura Perera', 'Art', 'Buddhism', '(B.A. (University of Sri Jayawardenapura)M.A - Sinhala (University of Kelaniya), M.A - Buddhist Studies (University of Kelaniya)', '0774569875', 'Perera', 'Perera123', 'Perera123', 'teacher'),
(3, 'Mr.Saman Wijesekara', 'Art', 'Communication & Media Studies', '[B. CO. SP. (SRI JAYAWARDANAPURA), WRI & COM. P.G. DIP (USJP),<br> EDU. P. G. DIP (EDUCATION) (COLOMBO)]', '0785253654', 'Wijesekara', 'Wijesekara', 'Wijesekara123', 'teacher'),
(4, 'Mis.Nipun Wijayathilaka', 'Art', 'Geography', '(BA. (SP). MA. UNIVERSITY OF KELANIYA)', '0712541236', 'Wijayathilaka', 'Wijayathilaka123', 'Wijayathilaka123', 'teacher'),
(5, 'Mr.Ruwan Maliyadda', 'Art', 'Logic and Scientific Method', '(BA. (SP). USJP PGDE.OUSL SLTS UNIVERSITY OF SRI JAYAWARDANAPURA)', '0778946544', 'Maliyadda', 'Maliyadda123', 'Maliyadda123', 'teacher'),
(6, 'Mr.Anura B Ekenayeka', 'Art', 'Political Science', '(BA sp university of peradeniya)', '0762548796', 'Ekenayeka', 'Ekenayeka123', 'Ekenayeka123', 'teacher'),
(7, 'Mr.Asanka Samith Hettihewa', 'Art', 'Sinhala', '(B.A DIP MASS COMMUNICATION DIP. BUDDHISM DIP. LIBRARY & INFO SCIENCE)', '0712457982', 'Hettihewa', 'Hettihewa123', 'Hettihewa123', 'teacher'),
(8, 'Mr.Saman Wijesekara', 'Art', 'Economics', '[B. CO. SP. (SRI JAYAWARDANAPURA), WRI & COM. P.G. DIP (USJP),EDU. P. G. DIP (EDUCATION) (COLOMBO)]', '0785241458', 'Wijesekara', 'Wijesekara123', 'Wijesekara123', 'teacher'),
(9, 'Mis.Nipuni Wijayathilaka', 'Art', 'Geography', 'Mis.Nipuni Wijayathilaka(Bachelor of Arts (Special) Geography)', '0714674879', 'Wijayathilaka', 'Wijayathilaka123', 'Wijayathilaka123', 'teacher'),
(10, 'Mr.Thisira Kumara Aththidiya', 'Art', 'History', '(BA. (SP). MA. UNIVERSITY OF KELANIYA)', '0774548765', 'Aththidiya', 'Aththidiya123', 'Aththidiya123', 'teacher'),
(11, 'Mr.Dummindha Pathirana', 'Bio', 'Agriculture', '(B.Sc Agri/Dip BM)', '0736549874', 'Pathirana', 'Pathirana123', 'Pathirana123', 'teacher'),
(12, 'Mr.Menaka Weerasuriya', 'Bio', 'Bio System Technology', '(BSc. Agri (Sp) | Specialized in crop science | Faculty of Agriculture | University of Ruhuna)', '0218746847', 'Weerasuriya', 'Weerasuriya123', 'Weerasuriya123', 'teacher'),
(13, 'Mr.Roshan Lakmal Wijesinghe', 'Bio', 'Biology', '(BAMS – AYURVEDIC MEDICINE AND SURGERY UNIVERSITY OF COLOMBO)', '0618718759', 'Wijesinghe', 'Wijesinghe123', 'Wijesinghe123', 'teacher'),
(14, 'Mr.L.H. Anushka Indunil', 'Bio', 'Chemistry', '(MBBS (UG) UNIVERSITY OF COLOMBO – FACULTY OF MEDICINE)', '6454876867', ' Indunil', ' Indunil123', ' Indunil123', 'teacher'),
(15, 'Mr.Dulanjaya C. Gunawardana', 'Bio', 'Physics', '(BSC. (HONS). ENGINEERING UNIVERSITY OF MORATUWA)', '0714852659', 'Gunawardana', 'Gunawardana123', 'Gunawardana123', 'teacher'),
(16, 'Mr.Thilina Piyatissa', 'Bio', 'Science for Technology', 'BSc [USJP], PG Degree [Reading - USJP])', '7987968472', 'Piyatissa', 'Piyatissa123', 'Piyatissa123', 'teacher'),
(17, 'Mr.L.H. Anushka Indunil', 'Maths', 'Chemistry', '(MBBS (UG) UNIVERSITY OF COLOMBO – FACULTY OF MEDICINE)', '7981254526', 'Anushka', 'Anushka123', 'Anushka123', 'teacher'),
(18, 'Mr.Srihan Mapitigama', 'Maths', 'Combine Mathematics', '(BSC. (HONS). ENGINEERING UNIVERSITY OF MORATUWA)', '8749878785', 'Mapitigama', 'Mapitigama123', 'Mapitigama123', 'teacher'),
(19, 'Mr.R.D.P. Sachithra', 'Maths', 'Higher Mathematics', '(BSC. DIP IN IT UNIVERSITY OF KELANIYA)', '6787686177', 'Sachithra', 'Sachithra123', 'Sachithra123', 'teacher'),
(20, 'Mr.Dulanjaya C. Gunawardana', 'Maths', 'Physics', '(BSC. (HONS). ENGINEERING UNIVERSITY OF MORATUWA)', '9884954624', 'Gunawardana', 'Gunawardana123', 'Gunawardana123', 'teacher'),
(21, 'Mr.Sudath Rohana', 'Commerce', 'Accounting', '(B. COM (SPECIAL) CGPM (DIP) HRM (DIP) UNIVERSITY OF KELANIYA)', '9787897736', 'Rohana', 'Rohana123', 'Rohana123', 'teacher'),
(22, 'Mr.Saman Wijesekara', 'Commerce', 'Business', '(B. CO. SP. (SRI JAYAWARDANAPURA), WRI & COM. P.G. <br>DIP (USJP), EDU. P. G. DIP (EDUCATION) (COLOMBO))', '9817984689', 'Wijesekara', 'Wijesekara123', 'Wijesekara123', 'teacher'),
(23, 'Mr.Dulanjaya C. Gunawardana', 'Commerce', 'Studies Economics', '(BSC. (HONS). ENGINEERING UNIVERSITY OF MORATUWA)', '9648197848', 'Dulanjaya', 'Dulanjaya123', 'Dulanjaya123', 'teacher'),
(24, 'Mr.Saman Wijesekara', 'Commerce', 'Statistics Business', '(B. CO. SP. (SRI JAYAWARDANAPURA), WRI & COM. P.G.DIP (USJP), EDU. P. G. DIP (EDUCATION) (COLOMBO))', '2021360565', 'Saman', 'Saman123', 'Saman123', 'teacher'),
(25, 'Mr.Dummindha Pathirana', 'Technology', 'Agro Technology', '(B.Sc Agri/Dip BM)', '6147687853', 'Dummindha', 'Dummindha123', 'Dummindha123', 'teacher'),
(26, 'Mr.Pubudu Liyanage', 'Technology', 'Engineering Technology', '(B Eng (Hons) in Mechanical Engineering)', '4719869187', 'Liyanage', 'Liyanage123', 'Liyanage123', 'teacher'),
(27, 'Mr.Danilka Nishan', 'Technology', 'General Information Technology', '(Bsc. Physical ICT j\'pura (ug), Bsc (honurs) in computer science (ug)', '6979458588', 'Nishan', 'Nishan123', 'Nishan123', 'teacher'),
(28, 'Mr.Danilka Nishan', 'Technology', 'Information & Communication Technology', 'Bsc. Physical ICT j\'pura (ug), Bsc (honurs) in computer science (ug)', '6978866666', 'Danilka', 'Danilka1234', 'Danilka1234', 'teacher'),
(29, 'Mr.Kashyapa Weliwatta', 'Art', 'Art', '(BVA (SP)-UNIVERSITY OF COLOMBO MA.UNIVERSITY OF KELANIYA)', '0712365558', 'Weliwatta', 'Weliwatta123', 'Weliwatta123', 'teacher'),
(30, 'shakila madhusanka', 'Technology', 'Ict', 'ICT degree', '0712356998', 'shaki', 'shaki12@', 'shaki12@', 'teacher'),
(31, 'ss', 'Art', 'Art', 'ss', '2222222222', 'aa', 'aa', 'aa', 'teacher'),
(32, 'pubuditha kashshapa', 'Technology', 'Ict', 'ICT degree', '0715869980', 'pubuditha', 'pu12#', 'pu12#', 'teacher'),
(33, 'kapila kumara', 'Maths', 'CombineMathematics', 'maths degree', '0772354556', 'kapila', 'kapila12', 'kapila12', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dreamtb`
--
ALTER TABLE `dreamtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafftb`
--
ALTER TABLE `stafftb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dreamtb`
--
ALTER TABLE `dreamtb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stafftb`
--
ALTER TABLE `stafftb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
