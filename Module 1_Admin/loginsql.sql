
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `loginadmin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`username`, `password`) VALUES
('robin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `loginfacco`
--

CREATE TABLE `loginfacco` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginfacco`
--

INSERT INTO `loginfacco` (`username`, `password`) VALUES
('bad', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `loginfacsv`
--

CREATE TABLE `loginfacsv` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginfacsv`
--

INSERT INTO `loginfacsv` (`username`, `password`) VALUES
('afiq', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `logininssv`
--

CREATE TABLE `logininssv` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logininssv`
--

INSERT INTO `logininssv` (`id`, `username`, `password`) VALUES
(1, 'gan', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `loginstudent`
--

CREATE TABLE `loginstudent` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginstudent`
--

INSERT INTO `loginstudent` (`username`, `password`) VALUES
('su', '123456');

-- --------------------------------------------------------

