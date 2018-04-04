-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 07:47 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `logid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `email_id`, `status`, `logid`) VALUES
(8, 'thushara', 'abc@ab.com', 1, 2),
(10, 'sania', 'sania@gmail.com', 1, 91),
(12, 'athu', 'athu@gmail.com', 1, 93),
(13, 'me', 'me@gmail.com', 1, 95),
(14, 'Rony Tom', 'ronytomasdf@gmail.com', 1, 96),
(15, 'amalkjose', 'amalkjose.mail@gmail.com', 1, 97),
(17, 'Thushara Thirumeni', 'onlinesoftwaremart@gmail.com', 1, 99),
(18, 'amalkjose', 'info@amalkjose.com', 1, 100),
(19, 'surya', 'suryas@mca.ajce.in', 1, 101);

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `did` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `language` varchar(20) NOT NULL,
  `previous` varchar(130) NOT NULL,
  `status` varchar(10) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `logid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`did`, `name`, `age`, `gender`, `address`, `phone`, `email_id`, `language`, `previous`, `status`, `photo`, `logid`) VALUES
(5, 'Thushara Thirumeni', '1995-09-28', 'female', 'sreevilas muttappallyp.o 40', 2147483647, 'thusharathirumeni@gmail.com', 'python', 'photo/15084752131508218548dynamic-star-rating-with-php-and-jquery (1).zip', '1', 'photo/1508475213368190,xcitefun-birthday-brother-love.jpg', 79);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `doid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`doid`, `sid`, `cid`, `time`) VALUES
(1, 937, 8, '2017-11-23 09:41:55'),
(2, 937, 8, '2017-11-23 09:44:01'),
(3, 937, 8, '2017-11-23 11:18:28'),
(4, 937, 8, '2017-11-23 14:16:30'),
(5, 936, 8, '2017-11-24 09:44:46'),
(6, 937, 8, '2017-11-24 09:45:55'),
(7, 937, 14, '2018-01-25 06:35:13'),
(8, 1, 14, '2018-01-25 06:35:43'),
(9, 937, 17, '2018-01-30 03:56:03'),
(10, 1, 17, '2018-01-30 03:56:21'),
(11, 937, 17, '2018-01-30 03:57:34'),
(12, 1, 17, '2018-01-30 03:57:55'),
(13, 936, 8, '2018-01-30 04:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `downloading`
--

CREATE TABLE `downloading` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloading`
--

INSERT INTO `downloading` (`id`, `name`) VALUES
(1, 'C:/xampp/htdocs/software/photo/1507880917DIF.docx');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email_id` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` int(50) NOT NULL,
  `language` varchar(30) NOT NULL,
  `experiance` varchar(30) NOT NULL,
  `logid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `age`, `gender`, `address`, `email_id`, `photo`, `status`, `phone`, `language`, `experiance`, `logid`) VALUES
(1, 'admin', '0000-00-00', 'male', 'admin', 'fd', 'photo/1508490331', 1, 11111, 'admin', 'admin', 1),
(26, 'Thushara Thirumenii', '2017-09-27', 'female', 'thusharathirumeni sreevilasam 686510', 'thusharathi', 'photo/1508489672368190,xcitefun-birthday-brother-love.jpg', 1, 2147483647, 'Andoid', '2', 74);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `cid`, `sid`, `message`, `date`, `time`, `status`) VALUES
(3, 8, 937, 'good', '0000-00-00 00:00:00', '2017-11-23 16:44:28', '1'),
(4, 8, 937, 'goodone', '0000-00-00 00:00:00', '2017-11-23 16:44:24', '1'),
(5, 8, 937, 'aws', '0000-00-00 00:00:00', '2017-11-23 16:44:05', '1'),
(6, 8, 937, 'bad', '0000-00-00 00:00:00', '2018-01-30 08:24:25', '1'),
(7, 8, 937, 'good', '0000-00-00 00:00:00', '2018-01-30 08:24:20', '1'),
(8, 8, 937, 'its good', '0000-00-00 00:00:00', '2018-01-30 08:24:15', '1'),
(9, 8, 940, 'Hello, Good sw..', '0000-00-00 00:00:00', '2018-03-29 16:39:37', '1'),
(10, 14, 1, 'very good', '0000-00-00 00:00:00', '2018-01-25 06:36:29', '1'),
(17, 17, 937, 'hshsh', '0000-00-00 00:00:00', '2018-01-30 08:24:29', '1'),
(21, 17, 937, 'good', '0000-00-00 00:00:00', '2018-03-29 16:25:47', '1');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `lid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `language` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `logid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `apstatus` varchar(10) NOT NULL,
  `account_varify` tinyint(4) DEFAULT '0',
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `username`, `password`, `email`, `user_type`, `apstatus`, `account_varify`, `status`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.coom', 'a', 'a', 0, '1'),
(2, 'customer', 'b39f008e318efd2bb988d724a161b61c6909677f', 'athiragopinath@mca.ajce.in', 'c', 'a', 1, '0'),
(74, 'employee', 'emp', 'thusharathirumeni@gmail.com', 'e', 'a', 0, '1'),
(79, 'developer', '3dacbce532ccd48f27fa62e993067b3c35f094f7', 'athiragopinath@mca.ajce.in', 'd', 'a', 0, '1'),
(91, 'sni', 'b39f008e318efd2bb988d724a161b61c6909677f', 'sania@gmail.com', 'c', 'a', 1, '1'),
(93, 'athu', 'b39f008e318efd2bb988d724a161b61c6909677f', 'athu@gmail.com', 'c', 'a', 1, '1'),
(94, 'employee@gmail.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', 'employee@gmail.com', 'e', 'a', 0, '1'),
(95, 'me', 'b39f008e318efd2bb988d724a161b61c6909677f', 'me@gmail.com', 'c', 'a', 0, '1'),
(96, 'rony', 'b39f008e318efd2bb988d724a161b61c6909677f', 'ronytomasdf@gmail.com', 'c', 'a', 0, '1'),
(97, 'amalu', 'b39f008e318efd2bb988d724a161b61c6909677f', 'amalkjose.mail@gmail.com', 'c', 'a', 1, '1'),
(99, 'thushara', 'b39f008e318efd2bb988d724a161b61c6909677f', 'onlinesoftwaremart@gmail.com', 'c', 'a', 1, '1'),
(100, 'amal', 'b39f008e318efd2bb988d724a161b61c6909677f', 'info@amalkjose.com', 'c', 'a', 1, '1'),
(101, 'surya', 'b39f008e318efd2bb988d724a161b61c6909677f', 'suryas@mca.ajce.in', 'c', 'a', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `user_id`, `otp`) VALUES
(2, 90, 91740),
(4, 98, 34518),
(5, 91, 975526);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `byte` varchar(50) NOT NULL DEFAULT '32',
  `os` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestid`, `name`, `price`, `cid`, `time`, `status`, `byte`, `os`, `description`, `phone`) VALUES
(4, 'video', 100, 99, 1, 1, '64-bit', 'linux', '', '8547610839'),
(5, 'time', 0, 99, 1, 0, '32-bit', 'windows', 'time managing', '8547610839'),
(6, 'time', 0, 99, 1, 1, '32-bit', 'windows', 'time managing', '8547610839'),
(7, 'qwerty', 100, 99, 3, 2, '64-bit', 'windows', 'qwert', '8547610839'),
(9, 'thushara Thirumeni', 2000, 99, 3, 0, '32-bit', 'linux', 'mk', '7894561237'),
(10, 'thushara Thirumeni', 2000, 99, 3, 0, '64-bit', 'windows', 'sjakj', '7012848331'),
(11, 'thushara Thirumeni', 2000, 99, 1, 0, '32-bit', 'linux', 'sdjaskdhkjahk', '8596958549'),
(12, 'g', 2000, 99, 3, 0, '32-bit', 'windows', 'dxd', '9744578066'),
(13, 'Photoshop', 200, 99, 3, 1, '64-bit', 'mac', 'qwqeqweqwe', '7012848331');

-- --------------------------------------------------------

--
-- Table structure for table `supload`
--

CREATE TABLE `supload` (
  `sid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `software` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `byte` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supload`
--

INSERT INTO `supload` (`sid`, `did`, `eid`, `sname`, `software`, `category`, `os`, `price`, `byte`, `size`, `time`, `lastupdate`, `description`, `status`) VALUES
(1, 5, 1, 'windows', 'photo/151133677615084752131508218548dynamic-star-rating-with-php-and-jquery (1).zip', 'os', 'windows', 100, '64-bit', '35', '2018-03-28 05:04:16', '2018-03-28 05:04:16', 'windows8.1', '1'),
(936, 5, 26, 'windows', 'photo/151133677615084752131508218548dynamic-star-rating-with-php-and-jquery (1).zip', 'os', 'windows', 0, '32-bit', '55mb', '2018-03-28 05:04:36', '2018-03-28 05:04:36', 'windows 7 zip file', '1'),
(937, 5, 1, 'ubuntu', 'photo/151133677615084752131508218548dynamic-star-rating-with-php-and-jquery (1).zip', 'os', 'linux', 0, '64-bit', '32bit', '2018-03-28 05:04:43', '2018-03-28 05:04:43', 'ubuntu ', '1'),
(938, 0, 1, 'Redhat', 'photo/15221312831508218548dynamic-star-rating-with-php-and-jquery (3).zip', 'os', 'linux', 10, '32-bit', '3194', '2018-03-28 05:03:43', '2018-03-28 05:03:43', 'ubuntu ', 'u'),
(939, 0, 1, 'Redhat', 'photo/15221313651508218548dynamic-star-rating-with-php-and-jquery (3).zip', 'os', 'linux', 10, '64-bit', '3194', '2018-03-28 05:03:50', '2018-03-28 05:03:50', 'ubuntu ', 'u'),
(940, 0, 1, 'amal', 'photo/15221313872110_blue_brown.zip', 'accounting', 'windows', 10, '64-bit', '204956', '2018-03-27 06:16:27', '2018-03-27 06:16:27', 'kali the hacking partner', 'u'),
(941, 5, 1, 'amal', 'photo/15221314342110_blue_brown.zip', 'accounting', 'windows', 2800, '32-bit', '204956', '2018-03-27 06:17:14', '2018-03-27 06:17:14', 'kali the hacking partner', 'u'),
(942, 5, 1, 'ubuntu', 'photo/152213154415084620031508218548dynamic-star-rating-with-php-and-jquery (1) (1).zip', 'os', 'windows', 2800, '32-bit', '3194', '2018-03-27 06:53:28', '2018-03-27 06:53:28', 'ubuntu ', '1'),
(943, 5, 1, 'qwerty', 'photo/15221330191508218548dynamic-star-rating-with-php-and-jquery (1).zip', 'accounting', 'windows', 100, '64-bit', '3194', '2018-03-27 08:19:37', '2018-03-27 08:19:37', 'qwert', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `logid` (`logid`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`did`),
  ADD KEY `logid` (`logid`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`doid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `downloading`
--
ALTER TABLE `downloading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `logid` (`logid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestid`);

--
-- Indexes for table `supload`
--
ALTER TABLE `supload`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `status` (`sid`),
  ADD KEY `did` (`did`),
  ADD KEY `supload_ibfk_1` (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `doid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `downloading`
--
ALTER TABLE `downloading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `supload`
--
ALTER TABLE `supload`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=944;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`logid`) REFERENCES `login` (`logid`);

--
-- Constraints for table `developer`
--
ALTER TABLE `developer`
  ADD CONSTRAINT `developer_ibfk_1` FOREIGN KEY (`logid`) REFERENCES `login` (`logid`);

--
-- Constraints for table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `download_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `download_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `supload` (`sid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`logid`) REFERENCES `login` (`logid`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `supload` (`sid`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`);

--
-- Constraints for table `supload`
--
ALTER TABLE `supload`
  ADD CONSTRAINT `supload_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
