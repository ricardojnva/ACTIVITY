-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 10:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Add_Person` (IN `Input_Last_Name` VARCHAR(30), IN `Input_First_Name` VARCHAR(30), IN `Input_Middle_Name` VARCHAR(30), IN `Input_Extension_Name` VARCHAR(6), IN `Input_Sex` CHAR(6), IN `Input_Birth_Date` DATE, IN `Input_Age` INT(2), IN `Input_Home_Address` VARCHAR(75), IN `Input_Civil_Status` VARCHAR(12), IN `Input_Religion` VARCHAR(20), IN `Input_Nationality` VARCHAR(20), IN `Input_Boarding_Address` VARCHAR(75), IN `Input_Contact_Number` CHAR(11), IN `Input_Email_Address` VARCHAR(25))   BEGIN
    
    	INSERT INTO `person` (`Last_Name`, `First_Name`,`Middle_Name`, `Extension_Name`, `Sex`,
                              `Birth_Date`, `Age`, `Home_Address`, `Civil_Status`, `Religion`, `Nationality`, `Boarding_Address`,
                              `Contact_Number`, `Email_Address`) VALUES(Input_Last_Name,Input_First_Name,Input_Middle_Name,
                                                                       Input_Extension_Name,Input_Sex,Input_Birth_Date,Input_Age,
Input_Home_Address,Input_Civil_Status,Input_Religion,Input_Nationality,
Input_Boarding_Address,Input_Contact_Number,Input_Email_Address);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Person_Id` int(9) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Middle_Name` varchar(30) NOT NULL,
  `Extension_Name` varchar(6) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Age` int(2) NOT NULL,
  `Home_Address` varchar(75) NOT NULL,
  `Civil_Status` varchar(12) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Boarding_Address` varchar(75) NOT NULL,
  `Contact_Number` char(11) NOT NULL,
  `Email_Address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_Id`, `Last_Name`, `First_Name`, `Middle_Name`, `Extension_Name`, `Sex`, `Birth_Date`, `Age`, `Home_Address`, `Civil_Status`, `Religion`, `Nationality`, `Boarding_Address`, `Contact_Number`, `Email_Address`) VALUES
(13, 'Ric', 'Jan', '', '', 'M', '0000-00-00', 0, '', 'Single', '', '', '', '', ''),
(16, 'ric', '', '', '', 'M', '0000-00-00', 0, '', 'Single', '', '', '', '', ''),
(17, 'Ricardo', '', 'O.', 'Gwapa', 'M', '2023-09-28', 21, 'Barsat East', 'Single', 'Filipino', 'Roman Catholic', 'Barsat East', '+6390575161', 'janevaricardo513@gmail.co'),
(18, 'Ricardo', '', 'Tamo', 'Gwapa', 'F', '2023-09-05', 21, 'Barsat East', 'Single', 'Filipino', 'Roman Catholic', 'Barsat East', '+6390575161', 'janevaricardo513@gmail.co'),
(19, 'Tamo', '', 'Ricardo', 'Gwapa', 'M', '2023-09-05', 0, 'Barsat West', 'Single', 'Filipino', 'Roman Catholic', 'Barsat East', '+6390575161', 'janevaricardo513@gmail.co'),
(20, 'DELACRUZ', '', 'A.', 'Jr.', 'M', '2023-09-20', 21, 'Barsat East', 'Single', 'Filipino', 'Roman Catholic', 'Barsat East', '+6390575161', 'janevaricardo513@gmail.co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Person_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `Person_Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
