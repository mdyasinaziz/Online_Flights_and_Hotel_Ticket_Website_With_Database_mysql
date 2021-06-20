-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 08:50 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airplanedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `userflight`
--

CREATE TABLE `userflight` (
  `email` varchar(30) NOT NULL,
  `fromcity` varchar(30) NOT NULL,
  `tocity` varchar(30) NOT NULL,
  `depdate` varchar(30) NOT NULL,
  `retdate` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userflight`
--

INSERT INTO `userflight` (`email`, `fromcity`, `tocity`, `depdate`, `retdate`, `type`) VALUES
('veronicagomes199821@gmail.com', 'Dhaka, Bangladesh', 'San Franciso, California', '8/11/2019', '8/21/2019', 'Round Trip');

-- --------------------------------------------------------

--
-- Table structure for table `userflightticket`
--

CREATE TABLE `userflightticket` (
  `email` varchar(30) NOT NULL,
  `tickclass` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userflightticket`
--

INSERT INTO `userflightticket` (`email`, `tickclass`, `number`) VALUES
('veronicagomes199821@gmail.com', 'Premium', '2');

-- --------------------------------------------------------

--
-- Table structure for table `userhotel`
--

CREATE TABLE `userhotel` (
  `email` varchar(30) NOT NULL,
  `hotelname` varchar(200) NOT NULL,
  `children` varchar(30) NOT NULL,
  `fromdate` varchar(30) NOT NULL,
  `todate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userhotelcount`
--

CREATE TABLE `userhotelcount` (
  `hotelname` varchar(200) NOT NULL,
  `hotelseat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userhotelcount`
--

INSERT INTO `userhotelcount` (`hotelname`, `hotelseat`) VALUES
('Al Bandar Rotana-Creek (4.6?), Dubai', 50),
('The Oberoi (4.5?), Dubai', 50),
('Hyatt Regency Sydney (4.3?), Sydney', 50),
('Meriton Suites Carter Street (4.4?), Sydney', 50),
('Meriton Suites Carter Street (4.4?), London', 50),
('The Strand Palace Hotel (3.8?), London', 50),
('citizenM New York Bowery (4.7?), New York', 50),
('The Ludlow Hotel (4.7?), New York', 50),
('Hotel Continental (4.5?), Oslo', 50),
('The Thief (4.5?), Oslo', 50),
('Hyatt Regency Paris Etoile (4.2?), Paris', 50),
('Motel One Paris-Porte Dorée (4.5?), Paris', 50),
('Hotel Nikko San Francisco (4.4?), San Francisco', 50),
('Loews Regency San Francisco (4.7?), San Francisco', 50),
('The Tokyo Station Hotel (4.4?), Tokyo', 50),
('Tokyo Bay Tokyu Hotel (4.4?), Tokyo', 50),
('Rome Glam Hotel (4.5?), Rome', 50),
('The Liberty Boutique Hotel (4.8?), Rome', 50),
('Bellagio las vegas (4.6?), Las Vegas', 50),
('Trump International Hotel Las Vegas (4.3?), Las Vegas', 50);

-- --------------------------------------------------------

--
-- Table structure for table `userhotelticket`
--

CREATE TABLE `userhotelticket` (
  `email` varchar(30) NOT NULL,
  `roomclass` varchar(30) NOT NULL,
  `roomno` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` varchar(14) NOT NULL,
  `addr` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `lname`, `email`, `phoneno`, `addr`, `password`) VALUES
('Veronica', 'Jessica', 'veronicagomes199821@gmail.com', '+8801781500854', 'Farmgate', '6969'),
('Yasin', 'Abir', 'mdyasinaziz7@gmail.com', '+8801781500854', 'H-38,R-27,Rupnagar R', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
