-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 08:37 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `email`, `pass`, `gender`) VALUES
(1, 'Adnan ali', 'adnanmirza9688@gmail.com', '123', 'male'),
(2, 'shazil naveed', 'shazilnaveed@gmail.com', 'abc', 'male'),
(3, 'rana umair', 'ranaumair@gmail.com', '1234', 'male'),
(4, 'rana usman', 'ranausman@gmail.com', 'a123', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `bgimg`
--

CREATE TABLE `bgimg` (
  `id` int(11) NOT NULL,
  `pic` varchar(240) NOT NULL,
  `text` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgimg`
--

INSERT INTO `bgimg` (`id`, `pic`, `text`) VALUES
(3, 'yeray-sanchez-689835-unsplash.jpg', 'TRAVEL WITH US'),
(4, 'ken-yam-1152004-unsplash.jpg', 'TRAVEL WITH US'),
(5, 'apostolos-vamvouras-1644840-unsplash.jpg', 'TRAVEL WITH US'),
(6, 'apostolos-vamvouras-1644840-unsplash.jpg', 'TRAVEL WITH US'),
(7, 'bg_1.jpg', 'TRAVEL WITH US');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `num` int(30) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fname`, `lname`, `email`, `category`, `duration`, `city`, `country`, `date`, `num`, `status`) VALUES
(1, 'adnan', 'ali', 'ali@gmail.com', '3', '4', '1', '1', '', 0, 'unapproved'),
(3, 'mr', 'rana', 'arsal@gmail.com', 'North America', '1-15 Days Tour', 'FAISALABAD', 'PAKISTAN', '', 0, 'unapproved'),
(4, 'zain', 'usman', 'ali@gmail.com', 'South America', '1 Month Tour', 'FAISALABAD', 'PAKISTAN', '', 0, 'unapproved'),
(5, 'usman', 'rana', 'ranausman@gmail.com', 'Asia', '1-7 Days Tour', 'FAISALABAD', 'PAKISTAN', '2018-07-12', 0, 'approved'),
(6, 'adnan', 'mirza', 'ali@gmail.com', 'North America', '1 Month Tour', 'FAISALABAD', 'PAKISTAN', '2017-04-20', 0, 'approved'),
(7, 'arsalan', 'usman', 'ranausman@gmail.com', 'South America', '3 Month Tou', 'FAISALABAD', 'PAKISTAN', '2016-04-11', 0, 'approved'),
(8, 'arsalan', 'zee', 'ranausman@gmail.com', 'North America', '3 Month Tou', 'FAISALABAD', 'PAKISTAN', '2015-04-14', 0, 'approved'),
(9, 'arsalan', 'zee', 'ali@gmail.com', 'North America', '3 Month Tou', 'FAISALABAD', 'PAKISTAN', '2015-04-14', 0, 'approved'),
(10, 'adnan', 'mirza', 'shazilnaveed@gmail.com', 'South America', '3 Month Tou', 'FAISALABAD', 'PAKISTAN', '2013-04-12', 0, 'approved'),
(21, 'adnan', 'rana', 'ali@gmail.com', 'South America', '1 Month Tour', 'FAISALABAD', 'INDIA', '2019-08-07', 12345678, 'approved'),
(22, 'adnan', 'mirza', 'any@gmail.com', 'Asia', '1-7 Days Tour', 'FAISALABAD', 'PAKISTAN', '2019-09-26', 123456789, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `discountb`
--

CREATE TABLE `discountb` (
  `id` int(11) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `disprice` int(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `num` int(30) NOT NULL,
  `date` int(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discountb`
--

INSERT INTO `discountb` (`id`, `tname`, `disprice`, `duration`, `email`, `country`, `city`, `num`, `date`, `status`) VALUES
(1, '', 0, '1-15 Days Tour', 'any@gmail.com', 'PAKISTAN', 'FAISALABAD', 123456789, 2019, 'unapproved'),
(2, '', 0, '1 Month Tour', 'any@gmail.com', 'PAKISTAN', 'FAISALABAD', 1234567890, 2019, 'unapproved');

-- --------------------------------------------------------

--
-- Table structure for table `discountmenu`
--

CREATE TABLE `discountmenu` (
  `id` int(11) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(25) NOT NULL,
  `discount` varchar(30) NOT NULL,
  `dis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discountmenu`
--

INSERT INTO `discountmenu` (`id`, `pic`, `name`, `price`, `discount`, `dis`) VALUES
(11, '01-greece.jpg', 'Greece', '200$', '170$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3'),
(18, '02-rome.jpg', 'Rome', '200$', '170$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3'),
(19, '03-japan.jpg', 'Japan', '200$', '170$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3'),
(20, '04-dubai.jpg', 'Dubai', '200$', '170$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3'),
(21, '05-london.jpg', 'London', '300$', '170$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3'),
(22, 'citys0.jpg', 'Germany', '300$', '170$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3');

-- --------------------------------------------------------

--
-- Table structure for table `hotelb`
--

CREATE TABLE `hotelb` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `fathername` varchar(300) NOT NULL,
  `phone` int(30) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `bed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelb`
--

INSERT INTO `hotelb` (`id`, `fullname`, `fathername`, `phone`, `catagory`, `room`, `bed`) VALUES
(1, 'Adnan ali', ' Tariq Ali', 123456789, '5 Star', 'Big', 'Double'),
(2, 'Arsal Javad', ' Javad ', 2147483647, '2 Star', 'Medium', 'Single'),
(3, 'usman', ' ali', 123456789, '4 Star', 'Medium', 'Double'),
(4, 'haseeb', ' jogi', 123456789, '3 Star', 'Small', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `hotelmenu`
--

CREATE TABLE `hotelmenu` (
  `id` int(11) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `dis` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'hotel'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelmenu`
--

INSERT INTO `hotelmenu` (`id`, `pic`, `name`, `price`, `dis`, `status`) VALUES
(13, 'hotel-1.jpg', 'Paris', '150$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3 nights</p>', 'hotel'),
(14, 'hotel-2.jpg', 'London', '150$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3 nights</p>', 'hotel'),
(15, 'hotel-3.jpg', 'Pakistan', '300$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3 nights</p>', 'hotel'),
(16, 'hotel-4.jpg', 'India', '150$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3 nights</p>', 'hotel'),
(17, 'hotel-5.jpg', 'Dubai', '150$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3 nights</p>', 'hotel'),
(18, 'hotel-6.jpg', 'South', '150$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3 nights</p>', 'hotel');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `departure` varchar(300) NOT NULL,
  `arrival` varchar(300) NOT NULL,
  `dates` date NOT NULL,
  `passport` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `air` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `departure`, `arrival`, `dates`, `passport`, `phone`, `air`) VALUES
(1, 'Faisalabad', 'Karachi', '2019-09-04', 2147483647, 123456789, 'Fly Dubai'),
(2, 'Faisalabad', 'Karachi', '2019-09-04', 2147483647, 123456789, 'Fly Dubai');

-- --------------------------------------------------------

--
-- Table structure for table `tourmenu`
--

CREATE TABLE `tourmenu` (
  `id` int(11) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'tour'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourmenu`
--

INSERT INTO `tourmenu` (`id`, `pic`, `name`, `price`, `dis`, `status`) VALUES
(6, 'destination-1.jpg', 'Paris', '300$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3', 'tour'),
(7, 'destination-2.jpg', 'London', '300$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3', 'tour'),
(8, 'destination-3.jpg', 'England', '300$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3', 'tour'),
(9, 'destination-4.jpg', 'Austrila', '300$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3', 'tour'),
(10, 'destination-5.jpg', 'South', '300$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3', 'tour'),
(11, 'destination-6.jpg', 'Sri Lanka', '300$', '  <p>Far far away, behind the word mountains, far from the countries</p>                 <p>2 days 3', 'tour');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pnum` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `maritalStatus` text NOT NULL,
  `gender` text NOT NULL,
  `status` text NOT NULL,
  `login` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pass`, `pnum`, `dob`, `maritalStatus`, `gender`, `status`, `login`) VALUES
(12, 'adnan', 'ali', 'ali@gmail.com', 'asdf1234', '123456789', '1991-07-12', 'single', 'male', '', 'login'),
(43, 'zain', 'batti', 'hmirza96fsd@gmail.co', '1234', '123456789', '2019-11-13', 'Single', 'Male', '', ''),
(44, 'Hira', 'fatima', 'hirafatima0025@gmail', '123', '123456789', '2019-11-05', 'Single', 'Male', '', ''),
(45, 'Tariq ', 'mirza', 'ranaumair392@gmail.c', '123', '12345678', '2019-11-06', 'Single', 'Male', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bgimg`
--
ALTER TABLE `bgimg`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `discountb`
--
ALTER TABLE `discountb`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `discountmenu`
--
ALTER TABLE `discountmenu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hotelb`
--
ALTER TABLE `hotelb`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hotelmenu`
--
ALTER TABLE `hotelmenu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tourmenu`
--
ALTER TABLE `tourmenu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bgimg`
--
ALTER TABLE `bgimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `discountb`
--
ALTER TABLE `discountb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discountmenu`
--
ALTER TABLE `discountmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hotelb`
--
ALTER TABLE `hotelb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotelmenu`
--
ALTER TABLE `hotelmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tourmenu`
--
ALTER TABLE `tourmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
