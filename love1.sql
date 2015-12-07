-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 11:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `love1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `collegename` varchar(50) NOT NULL,
  `collegeid` varchar(50) NOT NULL,
  `loginid` int(10) NOT NULL,
  `profilepic` varchar(51) NOT NULL,
  `collegelogo` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `collegename`, `collegeid`, `loginid`, `profilepic`, `collegelogo`) VALUES
(1, 'sunny', 'sunny@gmail.com', 'btkit', 'bt123', 1, '', 'sdasdasdadas'),
(2, 'prakhar', 'abc@123.com', 'gh', 'gh123', 2, '', ''),
(3, 'ghfh', 'mbjh', 'mhgjh', 'jjh', 9, 'hgjh', 'mbjh'),
(4, 'tappu123', 'tappu1234', 'tapuqwe', 'asdf', 23, '', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
`id` int(11) NOT NULL,
  `classname` varchar(50) NOT NULL,
  `classteacher` varchar(50) NOT NULL,
  `collegeid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `classname`, `classteacher`, `collegeid`) VALUES
(1, 'one', 'saklani', 'bt123');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
`id` int(11) NOT NULL,
  `examname` varchar(50) NOT NULL,
  `examdate` date NOT NULL,
  `note` text NOT NULL,
  `examfile` varchar(56) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `examname`, `examdate`, `note`, `examfile`) VALUES
(1, 'DSUC', '2015-12-23', 'fgbfgbdfvxcvm xcnvkjxh j,s ,mn mb jxm vm,xhkvdfv', 'jkhksjisfvervf');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
`id` int(11) NOT NULL,
  `sectionname` varchar(50) NOT NULL,
  `classid` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `sectionname`, `classid`) VALUES
(1, 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `collegeid` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `profilepic` varchar(50) NOT NULL,
  `loginid` int(10) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `type`, `collegeid`, `address`, `phone`, `profilepic`, `loginid`, `emailid`) VALUES
(1, 'vishal kumar', 'chutiya', 'bt123', 'randi', 123123123, 'jbdifyguieryh', 6, 'asdew@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `adress` text NOT NULL,
  `classid` int(10) NOT NULL,
  `section` varchar(50) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `collegeid` varchar(50) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `profilepic` varchar(54) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `dob`, `gender`, `religion`, `email`, `phone`, `adress`, `classid`, `section`, `roll_no`, `collegeid`, `loginid`, `profilepic`) VALUES
(1, 'pankaj', '2015-12-02', 'male', 'hindu', 'asdf@gmail.com', 231356468, 'ugotehgoihtihxnbifebgfuengbjbvmdfnbfvjxvk,xcbvkdfbndkvxbdmfvhksrt', 1, '1', 120, 'bt123', '5', 'kuhgkuhi');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`id` int(11) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `subjectteacher` varchar(50) NOT NULL,
  `classid` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectname`, `subjectteacher`, `classid`) VALUES
(1, 'DAA', 'Bhawana', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `collegeid` varchar(50) NOT NULL,
  `collage_name` varchar(50) NOT NULL,
  `login-id` int(40) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `profilepic` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `collegeid`, `collage_name`, `login-id`, `phone`, `profilepic`) VALUES
(1, 'tappu', 'asd@gmail.com', 'bt123', 'btkit', 3, 6363524125, 0),
(2, 'chutiya', 'a12@gmail.com', 'gh123', 'gh', 4, 4521524125, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `collegeid` varchar(50) NOT NULL,
  `flag` int(10) NOT NULL,
  `profilepic` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `collegeid`, `flag`, `profilepic`) VALUES
(1, 'sunny@gmail.com', '123456', 'bt123', 1, ''),
(2, 'abc@123.com', '123456', 'gh123', 1, ''),
(3, 'asd@gmail.com', '123456', 'bt123', 2, 'csdcscsc'),
(4, 'a12@gmail.com', '123456', 'gh123', 2, 'dsfsdv'),
(5, 'asdf@gmail.com', '123456', 'bt123', 4, 'gdged'),
(6, 'asdew@gmail.com', '123456', 'bt123', 3, 'fsgs'),
(7, 'hiii', '$2y$10$RUroBpRwNs2luxr0.ukQVuhgQP5Jwy2lcCE/Cpz/tBJ', '', 0, ''),
(8, 'hello', '$2y$10$FUSUZ3rxdJA6Pti6uO6b7ukFWJuI1F.gllWBaul5ieE', '', 1, ''),
(9, 'pankaj@gmail.com', '$2y$10$yjdcQSn/e.JCjZdFphtIke8sguDqHe2QTLgsmZiL9fi6X2CCG2zNW', '', 1, ''),
(10, 'ajeet@yahoo.com', 'asdf', 'adfe', 1, ''),
(13, 'akanshagagwar914@gmail.com', 'asdf', 'adfe', 1, ''),
(14, 'agrawal@gmfsail.com', 'awer', 'adfe', 1, ''),
(15, 'rahul223@gmail', '$2y$10$u384SxkjUz8BFIvjequwQOIA/LngcIE01PBCMHKz.ne6K6u1Lpydq', 'adfesdf', 1, ''),
(16, 'asdwewrt', '$2y$10$tWdc8bvoJbco9u0JgO12COJUaeIN1Bl5jmfk9cVmfkmUSLDpcW.di', 'kjsdfkal', 1, ''),
(17, 'akanshagagwarg914@gmail.com', '$2y$10$M.Jx/SBJoHjIElWnMeJOiuqtGxzE0aDgRL.VzDNIxgJM1X/EvpaV6', 'adfesdf', 1, ''),
(18, 'amar1@gmail.com', '$2y$10$fsloKYuYRz5U3cmVPdLafehp5g3X2K9.U4q1z7NuU4BJ2xh/NC.ry', 'aswqee', 1, ''),
(19, 'qwert@hjsakk', '$2y$10$grxozKCJ6NlZ1CQtAV2fJu0O18WHLOHHhHDfGkZunPI.7t48hDWHe', 'ajskdhkj', 1, ''),
(20, 'safasffffff', '$2y$10$8Pqh0IoE9m2M3dOnAQUNQugseGiv4L6c3r5ooBuSzzzAL2x8cOTEu', 'sdas', 1, ''),
(21, 'tappu@sdf', '$2y$10$2iyQBfPWBU82AT6u11i8veYSH4lN0E.00/5RN68KS5Hy7bD5DiSom', 'asdee', 1, ''),
(22, 'tappu24', '$2y$10$ef1zepRuSJTB.3BBPk52g.mMX7PEL8rk3Imw7OchhJFtSG/Kn1N4K', 'aswe', 1, ''),
(23, 'tappu1234', '$2y$10$XaZ.biLbxOpfkiHVl5mqi.YchSODpuAjpSsxahaun6r5iXJk4ZVT.', 'asdf', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `loginid` (`loginid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
