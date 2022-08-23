-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2022 at 07:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CreatorSummit`
--

-- --------------------------------------------------------

--
-- Table structure for table `Nomination`
--

CREATE TABLE `Nomination` (
  `Name` text DEFAULT NULL,
  `PresentAddress` text DEFAULT NULL,
  `PermanentAddress` text DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` text DEFAULT NULL,
  `CreatingContentSince` text DEFAULT NULL,
  `ContentCategory` text DEFAULT NULL,
  `PrimaryPlatform` text DEFAULT NULL,
  `CategorySocialMedia` text DEFAULT NULL,
  `PrimaryLink` text DEFAULT NULL,
  `SecondaryPlatform` text DEFAULT NULL,
  `SecondaryLink` text DEFAULT NULL,
  `Profile` varchar(200) DEFAULT NULL,
  `Reach` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Nomination`
--

INSERT INTO `Nomination` (`Name`, `PresentAddress`, `PermanentAddress`, `Mobile`, `Email`, `DOB`, `Gender`, `CreatingContentSince`, `ContentCategory`, `PrimaryPlatform`, `CategorySocialMedia`, `PrimaryLink`, `SecondaryPlatform`, `SecondaryLink`, `Profile`, `Reach`) VALUES
('chetan', 'fasdf', 'adsfdsaf', 299999999, 'dsafdsfsdf', '2022-08-11', 'sadfasdfsdf', 'asfdfsdf', 'sdfads', 'sdafdsaf', 'sadfsdf', 'sadfadsf', 'sdfadsf', 'sdafasdf', 'sdfadsf.pdf', 'asdfasdf'),
('Deafult', 'Pragati  Nagar', 'Totewar Layout', 123412412, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'Female', '213', 'Education', 'Twitter', 'Macro Influencer', 'safd', 'Instagram', 'sdaf', '', 'Word of Mouth'),
('Deafult', 'Pragati  Nagar', 'Totewar Layout', 123412412, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'Female', '213', 'Education', 'Twitter', 'Macro Influencer', 'safd', 'Instagram', 'sdaf', '', 'Word of Mouth'),
('', 'Pragati  Nagar', 'Totewar Layout', 123412412, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'Female', '213', 'Education', 'Twitter', 'Macro Influencer', 'safd', 'Instagram', 'sdaf', '', 'Word of Mouth'),
('', 'Pragati  Nagar', 'Totewar Layout', 123412412, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'Female', '213', 'Education', 'Twitter', 'Macro Influencer', 'safd', 'Instagram', 'sdaf', '', 'Word of Mouth'),
('', 'Pragati  Nagar', 'Totewar Layout', 123412412, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'Female', '213', 'Education', 'Twitter', 'Macro Influencer', 'safd', 'Instagram', 'sdaf', '', 'Word of Mouth'),
('', 'Pragati  Nagar', 'Totewar Layout', 123412412, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'Female', '213', 'Education', 'Twitter', 'Macro Influencer', 'safd', 'Instagram', 'sdaf', '', 'Word of Mouth'),
('default', 'Pragati  Nagar', 'Totewar Layout', 123412412, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'Female', '213', 'Education', 'Twitter', 'Macro Influencer', 'safd', 'Instagram', 'sdaf', '', 'Word of Mouth'),
('default', 'Pragati  Nagar', 'Totewar Layout', 123412412, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'Female', '213', 'Education', 'Twitter', 'Macro Influencer', 'safd', 'Instagram', 'sdaf', '', 'Word of Mouth'),
('', 'Pragati Nagar', 'Pragati Nagar', 33332234, 'werweqr@mg.cw', '2022-07-31', 'Female', '332', 'Technology', 'Facebook', 'Macro Influencer', 'asdfsd', 'Facebook', '5ggfd', 'PH301_Tutorial_2.pdf', 'Word of Mouth'),
('', 'Pragati  Nagar', 'Totewar Layout', 9864, 'chetanchinchulkar.1802@gmail.com', '2022-08-09', 'Other', '766', 'Education', 'Facebook', 'Micro Influencer', '6677', 'Instagram', 'sdfsd', 'PH301_Tutorial_2.pdf', 'Word of Mouth'),
('', 'Pragati  Nagar', 'Totewar Layout', 9864, 'chetanchinchulkar.1802@gmail.com', '2022-08-09', 'Other', '766', 'Education', 'Facebook', 'Micro Influencer', '6677', 'Instagram', 'sdfsd', 'PH301_Tutorial_2.pdf', 'Word of Mouth'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Totewar Layout', 3251325, 'chetanchinchulkar.1802@gmail.com', '2022-08-08', 'Select Gender', '231', 'Technology', 'Facebook', 'Macro Influencer', 'nbgf', 'Instagram', 'sdfsdaf', 'PH301_Tutorial_2.pdf', 'Digital Advertisement'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Totewar Layout', 234234, 'chetanchinchulkar.1802@gmail.com', '2022-08-09', 'Select Gender', '', 'Select Content Category', 'Select Primary Platform', 'Select Social Media Category', '', 'Select Secondary Platform', '', '', 'Select Where Did You Hear About Us'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Totewar Layout', 234234, 'chetanchinchulkar.1802@gmail.com', '2022-08-09', 'Select Gender', '', 'Select Content Category', 'Select Primary Platform', 'Select Social Media Category', '', 'Select Secondary Platform', '', '', 'Select Where Did You Hear About Us'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Totewar Layout', 234234, 'chetanchinchulkar.1802@gmail.com', '2022-08-09', 'Select Gender', '', 'Select Content Category', 'Select Primary Platform', 'Select Social Media Category', '', 'Select Secondary Platform', '', '', 'Select Where Did You Hear About Us'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Totewar Layout', 234234, 'chetanchinchulkar.1802@gmail.com', '2022-08-09', 'Select Gender', '', 'Select Content Category', 'Select Primary Platform', 'Select Social Media Category', '', 'Select Secondary Platform', '', '', 'Select Where Did You Hear About Us'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Totewar Layout', 98754315, 'chetanchinchulkar.1802@gmail.com', '2022-08-03', 'Female', '2020', 'Technology', 'Twitter', 'Macro Influencer', ',,', 'Others', '...', 'Colour Codes.jpg', 'Word of Mouth');

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `Name` text DEFAULT NULL,
  `PresentAddress` text DEFAULT NULL,
  `PermanentAddress` text DEFAULT NULL,
  `Occupation` text DEFAULT NULL,
  `Organization` text DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Reason` text DEFAULT NULL,
  `FeeStatus` text DEFAULT NULL,
  `TransactionID` int(11) DEFAULT NULL,
  `TransactionDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`Name`, `PresentAddress`, `PermanentAddress`, `Occupation`, `Organization`, `Mobile`, `Email`, `DOB`, `Reason`, `FeeStatus`, `TransactionID`, `TransactionDate`) VALUES
('Chetan Chinchulkar', 'Pragati  Nagar', 'Pragati  Nagar', 'Student', '', 2352315, 'chetanchinchulkar.1802@gmail.com', '2022-07-31', 'sdafsadfs', 'Not Paid', 1235231, '2022-08-02'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Totewar Layout', 'Working Professional', '', 234, 'chetanchinchulkar.1802@gmail.com', '2022-08-04', 'dsafdsf', 'Not Paid', 2341324, '2022-08-04'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Pragati  Nagar', 'Student', 'iitg', 2352315, 'chetanchinchulkar.1802@gmail.com', '2022-07-31', 'sdafsadfs', 'Not Paid', 1235231, '2022-08-02'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Pragati  Nagar', 'Student', 'sdafds', 21312, 'chetanchinchulkar.1802@gmail.com', '2022-08-03', '23dsfadf', 'Paid', 23144, '2022-08-04'),
('Chetan Chinchulkar', 'Pragati  Nagar', 'Totewar Layout', 'Student', 'II', 9876, 'chetanchinchulkar.1802@gmail.com', '2022-08-02', '8YG', 'Not Paid', 98765, '2022-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password_hash` varchar(256) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `username`, `password_hash`, `usertype`) VALUES
(1, 'admin', 'admin', '$2y$10$JaJBAf4yC5ITT.3.N9/m0.Zz7GXTGvoLlEDPdyeht6Y2SmqbgbjQy', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
