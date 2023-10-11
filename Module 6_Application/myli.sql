-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 05:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myli`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `Admin_ID` varchar(7) NOT NULL,
  `Coordinator_ID` varchar(7) NOT NULL,
  `Stu_ID` varchar(7) NOT NULL,
  `FacSV_ID` varchar(7) NOT NULL,
  `InsSV_ID` varchar(7) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Phonenum` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`Admin_ID`, `Coordinator_ID`, `Stu_ID`, `FacSV_ID`, `InsSV_ID`, `Admin_Name`, `Admin_Phonenum`) VALUES
('A13411', 'C14522', 'CB19022', 'FS00001', 'IS00001', 'Muhammad Alif bin Zulkarnain', '0136713425');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Comp_ID` varchar(7) NOT NULL,
  `Stu_ID` varchar(7) NOT NULL,
  `FacSV_ID` varchar(7) NOT NULL,
  `Comp_Name` varchar(50) NOT NULL,
  `Comp_NoTel` varchar(11) NOT NULL,
  `Comp_Email` varchar(50) NOT NULL,
  `Comp_Address` varchar(100) NOT NULL,
  `Comp_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Comp_ID`, `Stu_ID`, `FacSV_ID`, `Comp_Name`, `Comp_NoTel`, `Comp_Email`, `Comp_Address`, `Comp_Password`) VALUES
('', '', '', 'ABC', '0194301615', 'anita1998mda@gmail.com', '', ''),
('C19008', 'CD18008', 'F19009', 'PRESOFT (M) SDN. BHD.', '60380682556', 'sales@presoft.com.my', 'No 2A-1, Jalan Puteri 2/5, Bandar Puteri, 47100 Puchong, Selangor, Malaysia.', '1233'),
('C19009', 'CD18009', 'F19001', 'Averis Sdn. Bhd.', '60327858888', 'averis_enquiries@averis.biz', 'Level 5, Tower 2, Avenue 5, Bangsar South City, No:8 Jalan Kerinchi, 59200 Kuala Lumpur Malaysia.', '1234'),
('C19010', 'CD18010', 'F19002', 'Brunsfield Management Services Sdn Berhad', '60377269898', 'bgoc@brunsfield.com', 'No 8 Jalan Wan Kadir 4, Off Jalan Damansara, Taman Tun Dr Ismail, 60000 Kuala Lumpur, Malaysia.', '1235'),
('C19011', 'CD18011', 'F19003', 'Cardbiz Solutions Sdn Bhd', '60378903000', 'sales@cardbiz.com.my', 'No.8 Jalan Damansara, Empire City, PJU 8, 47820 Petaling Jaya, Selangor Darul Ehsan, Malaysia.', '1236'),
('C19012', 'CD18012', 'F19004', 'HIERO7 (M) SDN. BHD', '-', '@nettium.net', 'Unit 13A-09, Jalan Stesen Sentral 2, 50470 Kuala Lumpur, Federal Territory of Kuala Lumpur.', '1237'),
('C19013', 'CD18013', 'F19005', 'DOREMi Services & Rental Sdn. Bhd.', '1800883983', 'online@doremi.com.my', 'DOREMi Services & Rental Sdn Bhd, Jalan Batu Estate, Off Jalan Segambut, 51200 Kuala Lumpur.', '1238'),
('C19014', 'CD18014', 'F19006', 'Kridentia Tech Sdn. Bhd.', '6086886888', 'contact@kridentia.com', 'Unit 3-45, Blok 4811, CBD Perdana 2, Jalan Perdana, Cyber 12, 63000, Cyberjaya, Selangor, Malaysia.', '1239'),
('C19015', 'CD18015', 'F19007', 'Theta Service Partner Sdn. Bhd.', '60327154248', 'info@thetasp.com', '03-08, Level 3, Tower A, Avenue 3 Bangsar South, No. 8 Jalan Kerinchi, 59200 Kuala Lumpur, Malaysia.', '1230'),
('C19016', 'CD18016', 'F19008', 'PULSY Technology Sdn. Bhd.', '60383244801', 'PULSY4U@PULSY.io', 'Malaysia Global Innovation and Creativity Centre, Block 3730, Persiaran Apec, Cyberjaya 63000, Selan', '1240'),
('C19017', 'CD18017', 'F19009', 'BizAid Technologies Sdn Bhd.', '60322018899', 'cktan@mybizaid.net', 'BizAid Technologies Sdn Bhd, C-11-4,5,6, Wisma Goshen, Plaza Pantai, No.5 Jalan 4/83A, 59200 Kuala L', '1241'),
('Comp_ID', '', '', 'Interprice', '0194301615', 'anita1998mda@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `facultycoordinator`
--

CREATE TABLE `facultycoordinator` (
  `Coordinator_ID` varchar(7) NOT NULL,
  `FacSV_ID` varchar(7) NOT NULL,
  `Coordinator_Address` varchar(100) NOT NULL,
  `Coordinator_Notel` varchar(11) NOT NULL,
  `Coordinator_Email` varchar(50) NOT NULL,
  `Coordinator_Age` int(11) NOT NULL,
  `Coordinator_IC` varchar(20) NOT NULL,
  `Coordinator_Name` varchar(50) NOT NULL,
  `Coordinator_Faculty` varchar(50) NOT NULL,
  `Coordinator_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultycoordinator`
--

INSERT INTO `facultycoordinator` (`Coordinator_ID`, `FacSV_ID`, `Coordinator_Address`, `Coordinator_Notel`, `Coordinator_Email`, `Coordinator_Age`, `Coordinator_IC`, `Coordinator_Name`, `Coordinator_Faculty`, `Coordinator_Password`) VALUES
('C14522', 'FS00001', 'NO 21 Jalan Kampung Baru, Kuantan Pahang', '0124561788', 'hilmi4@gmail.com', 43, '780711067833', 'Ahmad Hilmi bin Jaafar', 'Computing Faculty', '123');

-- --------------------------------------------------------

--
-- Table structure for table `facultysupervisor`
--

CREATE TABLE `facultysupervisor` (
  `Stu_ID` varchar(7) NOT NULL,
  `FacSV_Name` varchar(50) NOT NULL,
  `FacSV_ID` varchar(7) NOT NULL,
  `FacSV_NoTel` varchar(11) NOT NULL,
  `FacSV_Email` varchar(50) NOT NULL,
  `FacSV_Faculty` varchar(50) NOT NULL,
  `FacSV_Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultysupervisor`
--

INSERT INTO `facultysupervisor` (`Stu_ID`, `FacSV_Name`, `FacSV_ID`, `FacSV_NoTel`, `FacSV_Email`, `FacSV_Faculty`, `FacSV_Position`) VALUES
('CB19011', 'Mohd Kasim bin Jalaludin', 'FS11345', '0199782411', 'kasim876@gmail.com', 'Computing Faculty', 'Staff'),
('CB19022', 'Siti Maisarah binti Abdul Rahman', 'FS12300', '01124523142', 'maisarah@gmail.com', 'Computing Faculty', 'Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `industrysupervisor`
--

CREATE TABLE `industrysupervisor` (
  `Stu_ID` varchar(7) NOT NULL,
  `InsSV_Name` varchar(50) NOT NULL,
  `InsSV_ID` varchar(7) NOT NULL,
  `InsSV_NoTel` varchar(11) NOT NULL,
  `InsSV_Email` varchar(50) NOT NULL,
  `InsSV_Department` varchar(50) NOT NULL,
  `Comp_ID` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industrysupervisor`
--

INSERT INTO `industrysupervisor` (`Stu_ID`, `InsSV_Name`, `InsSV_ID`, `InsSV_NoTel`, `InsSV_Email`, `InsSV_Department`, `Comp_ID`) VALUES
('CB19022', 'Mohd Amin bin Zulkarnain', 'IS12300', '01124523142', 'amin2@gmail.com', 'Communication and Multimedia', 'C0001'),
('CB19011', 'Nur Haslinda binti Rosli', 'IS12310', '0199782411', 'has21@gmail.com', 'Communication and Networking', 'C0002');

-- --------------------------------------------------------

--
-- Table structure for table `internshipstudent`
--

CREATE TABLE `internshipstudent` (
  `Stu_ID` varchar(7) NOT NULL,
  `Stu_Password` varchar(7) NOT NULL,
  `Admin_ID` varchar(7) NOT NULL,
  `Coordinator_ID` varchar(7) NOT NULL,
  `Stu_Name` varchar(50) NOT NULL,
  `Stu_IC` varchar(15) NOT NULL,
  `Stu_Faculty` varchar(50) NOT NULL,
  `Stu_Programme` varchar(50) NOT NULL,
  `Stu_NoTel` varchar(12) NOT NULL,
  `Stu_Email` varchar(50) NOT NULL,
  `Stu_Address` varchar(200) NOT NULL,
  `CS_ID` varchar(7) NOT NULL,
  `CS_Password` varchar(10) NOT NULL,
  `Comp_Selection` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internshipstudent`
--

INSERT INTO `internshipstudent` (`Stu_ID`, `Stu_Password`, `Admin_ID`, `Coordinator_ID`, `Stu_Name`, `Stu_IC`, `Stu_Faculty`, `Stu_Programme`, `Stu_NoTel`, `Stu_Email`, `Stu_Address`, `CS_ID`, `CS_Password`, `Comp_Selection`) VALUES
('', '', '', '', 'NIK', '', '', '', '0194301615', 'anita1998mda@gmail.com', '', '', '', ''),
('CB19030', '1240', '', '', 'AIN MUTAQORROBIN BIN MUHAMMAD FADZIL', '', '', '', '01153122122', 'ainmutaqorrabin@gmail.com', '', 'CB19030', '1240', 'Averis Sdn. Bhd.'),
('CB19033', '1243', '', '', 'NURSUHAIDA BINTI SUHAIMI', '', '', '', '01137512383', 'nsuhaidasuhaimi23@gmail.com', '', 'CB19033', '1243', 'Kridentia Tech Sdn. Bhd.'),
('CB19034', '1238', '', '', 'AFIQ DANIAL BIN NOORAZAM', '', '', '', '0174890307', 'afiq_danial7203@hotmail.com', '', 'CB19034', '1238', 'DOREMi Services & Rental Sdn. Bhd.'),
('CB19043', '1239', '', '', 'BADRI HILMI BIN MAMAT', '', '', '', '0189093408', 'vixity00@gmail.com', '', 'CB19043', '1239', 'Cardbiz Solutions Sdn Bhd'),
('CD18008', '1234', '', '', 'NIK ANITA BINTI NIK MA', '980902035306', '', '', '0194301615', 'anita1998mda@gmail.com', '', 'CD18008', '1234', 'HIERO7 (M) SDN. BHD'),
('CD19063', '1241', '', '', 'GAN PAO LING', '', '', '', '0126772755', 'minnieganpanda@gmail.com', '', 'CD19063', '1241', 'BizAid Technologies Sdn Bhd.');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `Stu_ID` varchar(7) NOT NULL,
  `LogDate` date NOT NULL,
  `LogDay` varchar(10) NOT NULL,
  `LogActivity` text NOT NULL,
  `Comments` text DEFAULT NULL,
  `Marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`Stu_ID`, `LogDate`, `LogDay`, `LogActivity`, `Comments`, `Marks`) VALUES
('CB19022', '2021-06-03', 'Thursday', 'Visit company', 'Excellent', 0),
('CB19022', '2021-06-04', 'Friday', 'Visit company', 'Fair', 0),
('CB19022', '2021-06-07', 'Monday', 'Visit company', 'Good', 0),
('CB19022', '2021-06-08', 'Tuesday', 'Visit company', 'Fair', 0),
('CB19022', '2021-06-09', 'Wednesday', 'Visit company', 'Good', 0),
('CB19022', '2021-06-14', 'Thursday', '123', NULL, NULL),
('CB19022', '2021-06-16', 'Friday', 'Module', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_ID` varchar(7) NOT NULL,
  `Stu_ID` varchar(7) NOT NULL,
  `Comp_ID` varchar(7) NOT NULL,
  `Mid_Mark` int(11) DEFAULT NULL,
  `End_Mark` int(11) DEFAULT NULL,
  `List_Stu_Applied` int(11) DEFAULT NULL,
  `List_Comp_Applied` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_ID`, `Stu_ID`, `Comp_ID`, `Mid_Mark`, `End_Mark`, `List_Stu_Applied`, `List_Comp_Applied`) VALUES
('R00001', 'CB19022', 'C00001', 34, 56, 100, 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Comp_ID`);

--
-- Indexes for table `facultycoordinator`
--
ALTER TABLE `facultycoordinator`
  ADD PRIMARY KEY (`Coordinator_ID`);

--
-- Indexes for table `facultysupervisor`
--
ALTER TABLE `facultysupervisor`
  ADD PRIMARY KEY (`FacSV_ID`);

--
-- Indexes for table `industrysupervisor`
--
ALTER TABLE `industrysupervisor`
  ADD PRIMARY KEY (`InsSV_ID`);

--
-- Indexes for table `internshipstudent`
--
ALTER TABLE `internshipstudent`
  ADD PRIMARY KEY (`Stu_ID`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`LogDate`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
