-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2016 at 01:11 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixeladmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `product` text NOT NULL,
  `r_date` date NOT NULL,
  `active_flag` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `username`, `email`, `product`, `r_date`, `active_flag`, `timestamp`) VALUES
(4, 'sam', 'hdesai@gmail.com', 'Projector', '0000-00-00', 1, '2016-03-04 11:59:27'),
(5, 'sam', 'hdesai@gmail.com', 'Nihar', '2016-03-18', 1, '2016-03-04 12:01:20'),
(6, 'sam', 'hdesai@gmail.com', 'Projector', '2016-03-05', 1, '2016-03-04 12:08:34'),
(7, 'sam', 'hdesai@gmail.com', 'Projector', '2016-03-06', 1, '2016-03-04 13:05:21'),
(8, 'sam', 'hdesai@gmail.com', 'sandip', '2015-12-31', 1, '2016-03-04 13:31:10'),
(11, 'aditya', 'Aditya', 'Seminar-Hall 1', '0000-00-00', 1, '2016-03-04 15:58:52'),
(12, 'aditya', 'Aditya', 'Seminar-Hall 1', '2016-03-09', 1, '2016-03-04 16:01:22'),
(13, 'aditya', 'Aditya', 'sandip', '0000-00-00', 1, '2016-03-04 19:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(6) NOT NULL,
  `cname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `cperson` text NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `active_flag` int(2) NOT NULL,
  `ttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `cname`, `email`, `cperson`, `contactno`, `address`, `username`, `password`, `file`, `active_flag`, `ttime`, `updated_date`) VALUES
(13, 'Softech Infosys', 'hdesai@gmail.com', 'Sunny', 8141685182, 'mnckjvbbbh', 'sam', 'desai098', 'download (1).jpg', 1, '2016-03-01 03:41:39', '2016-03-05'),
(17, 'softech Infosys', 'singalnihar@gmail.com', 'Mihir sir', 8128121441, '8th floor,Pratham Hostel,Studio Complex,', 'Softech', 'Softech', '1.jpg', 0, '2016-03-03 11:29:30', '2016-03-05'),
(18, 'Aditya', 'Aditya', 'Aditya', 746543858, 'nvjfdbjvdfjh', 'aditya', 'aditya1', '2.jpg', 0, '2016-03-04 11:25:52', '2016-03-05');

--
-- Triggers `company`
--
DELIMITER $$
CREATE TRIGGER `updated_company` BEFORE UPDATE ON `company` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `active_flag` int(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'What is this website ?', 'This website is used to do bookings and management of products and services.', 0, '2016-03-02 15:37:11', '0000-00-00 00:00:00.000000'),
(2, 'Who is the Owner ?', 'The Owner of this Website is the Group of Foundation of India ', 0, '2016-03-02 15:37:52', '0000-00-00 00:00:00.000000'),
(3, 'What Is This Website About ?', 'This Website is used to manage the Resource Management.And used to make freequent use.', 0, '2016-03-02 15:38:23', '0000-00-00 00:00:00.000000'),
(4, 'Who developed the Website ?', 'This Website is developed by Sunny desai', 0, '2016-03-02 15:46:39', '0000-00-00 00:00:00.000000'),
(5, 'How to Login', 'For Login Go To www.ResoExpo/pages-signup.php Page For Login', 0, '2016-03-02 15:47:28', '0000-00-00 00:00:00.000000'),
(6, 'how are you?', '		m xcmxcm		', 0, '2016-03-02 16:19:09', '2016-03-05 01:14:54.000000');

--
-- Triggers `faq`
--
DELIMITER $$
CREATE TRIGGER `update_faq` BEFORE UPDATE ON `faq` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `comments` varchar(60) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `subject`, `comments`, `active_flag`, `created_date`, `updated_date`) VALUES
(5, 'sunny', 'hdesai777.hd@gmail.com', 'Me', 'Hi', 0, '2016-02-28 11:43:55', '0000-00-00');

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `updated_feedback` BEFORE UPDATE ON `feedback` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `forgot_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot`
--

INSERT INTO `forgot` (`forgot_id`, `reg_id`, `token`, `email`) VALUES
(1, 0, 'ea369a66d5f13f89aada0c9586d69c', 'hdesai777.hd@gmail.com'),
(2, 0, '862586836faa76dd08a376f713a22b', 'hdesai777.hd@gmail.com'),
(3, 0, 'd55210467bbb77a4c46b8b8bd185fa', 'hdesai777.hd@gmail.com'),
(4, 0, 'ccda85ada3dc8e23cb5a0d90be21ed', '13dce098@nirmauni.ac.in'),
(5, 0, '610046e1f36b3ac1d263f0f78c43b4', '13dce098@nirmauni.ac.in'),
(6, 0, 'df34f2e56f4ef6d482daa29440bd85', '13dce098@nirmauni.ac.in'),
(7, 0, '6e29ab1be3ed61219ae4113968f5ec', 'mike@gmail.com'),
(8, 0, '673f40deaa71d981021e84ccf59066', '13dce098@nirmauni.ac.in'),
(9, 0, '8adcaf7a9fab210364b47f13dcf6fd', 'hdesai777.hd@gmail.com'),
(10, 0, '7f4cd3ec06e6fbfe57a7827e904aad', 'mike@gmail.com'),
(11, 0, 'bd9b78036486475018fa70f603862a', 'mike@gmail.com'),
(12, 0, '3b1782035503fbcd7c954c55071fc1', 'hdesai777.hd@gmail.com'),
(13, 0, 'aec3aae89105e933229cc5fbd99a81', 'hdesai777.hd@gmail.com'),
(14, 0, 'e30d2d5b36036e6b6e1781a462a532', 'hdesai777.hd@gmail.com'),
(15, 0, '05eef1655cb356eaacc9ba2a429b6b', 'mike@gmail.com'),
(16, 0, '4e9e4de6464ae75c6b8ad49137a762', 'hdesai777.hd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `image`, `title`, `active_flag`, `created_date`, `updated_date`) VALUES
(10, '11087993_ml.jpg', 'Work', 0, '2016-03-05 10:03:34', '0000-00-00'),
(11, '26912432_ml.jpg', 'Discussion', 0, '2016-03-05 10:04:01', '0000-00-00'),
(12, 'solution-small-img.jpg', 'Management', 0, '2016-03-05 10:04:15', '0000-00-00'),
(13, 'HUMAN-RESOURCE-MANAGEMENT1.jpg', 'Technology', 0, '2016-03-05 10:04:37', '0000-00-00'),
(14, '15255818_ml.jpg', 'Milestone', 0, '2016-03-05 10:04:56', '0000-00-00'),
(18, '11087993_ml.jpg', 'Home', 0, '2016-03-05 10:06:30', '0000-00-00'),
(19, 'procrastination-productivity.jpg', 'Ability', 0, '2016-03-05 10:07:49', '0000-00-00');

--
-- Triggers `gallery`
--
DELIMITER $$
CREATE TRIGGER `updated_gallery` BEFORE UPDATE ON `gallery` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(6) NOT NULL,
  `message` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `by1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `message`, `name`, `image`, `timestamp`, `by1`) VALUES
(1, 'Hi Admin', '', 'facebook.jpg', '2016-02-24 16:36:09', ''),
(2, 'Hi Admin', '', 'facebook.jpg', '2016-02-24 16:36:46', ''),
(3, 'Hi', '', 'facebook.jpg', '2016-02-24 16:47:55', ''),
(4, 'Goodbye', '', 'download.jpg', '2016-02-24 17:18:50', ''),
(5, 'Bye !!', '', 'download.jpg', '2016-02-24 17:24:09', ''),
(6, 'Please send me the email', '', 'download.jpg', '2016-02-24 17:46:02', ''),
(7, 'claass', '', 'download.jpg', '2016-02-24 17:46:21', ''),
(8, 'Hi', '', 'download.jpg', '2016-02-24 18:06:07', ''),
(9, 'How are u?', '', 'facebook.jpg', '2016-02-24 18:06:26', ''),
(10, 'hi', '', 'download.jpg', '2016-02-24 19:27:44', ''),
(11, 'hi', '', 'facebook.jpg', '2016-02-25 05:45:17', ''),
(12, 'Hi', 'sunny', 'facebook.jpg', '2016-02-25 15:46:05', ''),
(13, 'joy hi', 'sunny', 'download.jpg', '2016-02-25 15:57:06', ''),
(14, 'hi', 'sunny', 'facebook.jpg', '2016-02-25 15:58:40', ''),
(15, 'hi', 'sunny', 'download.jpg', '2016-02-25 17:24:39', ''),
(16, '', 'sunny', 'download.jpg', '2016-02-25 17:26:54', ''),
(17, 'mike are u online ?', 'mike', 'facebook.jpg', '2016-02-25 17:38:35', 'sunny'),
(18, 'hi', 'mike', 'facebook.jpg', '2016-02-27 11:37:48', 'sunny'),
(19, 'Hi', 'mike', '', '2016-02-29 12:17:17', 'desai'),
(20, 'Hi', 'John', 'download (1).jpg', '2016-03-03 08:22:30', 'sam'),
(21, 'u have fine of 300rs.', 'aditya', 'facebook.jpg', '2016-03-04 19:55:53', 'sunny'),
(22, 'hi', 'aditya', '1.jpg', '2016-03-05 10:47:03', 'sunny');

-- --------------------------------------------------------

--
-- Table structure for table `post_query`
--

CREATE TABLE `post_query` (
  `query_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `reply` text NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_query`
--

INSERT INTO `post_query` (`query_id`, `name`, `email`, `title`, `description`, `file`, `reply`, `active_flag`, `created_date`, `updated_date`) VALUES
(11, 'sunny', 'hdesai777.hd@gmail.com', 'sam', 'patel', '2.jpg', 'Hi how are u?', 0, '2016-03-02 12:14:50', '2016-03-05 10:59:20.000000'),
(13, 'sam', 'hdesai@gmail.com', 'Hi', 'How are you?', '3.jpg', ' xckm xm x x 				', 0, '2016-03-03 06:25:03', '2016-03-04 19:31:18.000000'),
(14, 'aditya', 'Aditya', 'Hi', 'Hi', '2.jpg', 'Hi', 0, '2016-03-04 18:39:13', '2016-03-05 10:24:22.000000');

--
-- Triggers `post_query`
--
DELIMITER $$
CREATE TRIGGER `updated_post_query` BEFORE UPDATE ON `post_query` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(6) NOT NULL,
  `pname` text NOT NULL,
  `product` text NOT NULL,
  `image` varchar(40) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `tdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `product`, `image`, `active_flag`, `tdate`) VALUES
(23, 'Projector', 'Toshiba', '2.jpg', 0, '2016-02-18 20:13:00'),
(32, 'sandip', 'kush', 'download.jpg', 0, '2016-02-24 15:40:04'),
(33, 'Nihar', 'Singal', '5.jpg', 0, '2016-03-03 16:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` text NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'admin', 0, '2016-02-27 11:00:43', '0000-00-00'),
(3, 'Company', 0, '2016-03-05 11:00:58', '0000-00-00');

--
-- Triggers `role`
--
DELIMITER $$
CREATE TRIGGER `updated_role` BEFORE UPDATE ON `role` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(6) NOT NULL,
  `sname` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `sname`, `image`, `time`) VALUES
(1, 'Seminar-Hall 1', 'download.jpg', '2016-03-02 16:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `reg_id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `file` varchar(30) NOT NULL,
  `active_flag` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`reg_id`, `name`, `email`, `role_id`, `username`, `password`, `file`, `active_flag`, `date`, `updated_date`) VALUES
(26, 'sunny', 'hdesai777.hd@gmail.com', 2, 'sunny', 'samdesai', '1.jpg', 0, '2016-02-19 15:29:48.727382', '2016-03-05'),
(29, 'John', 'Johndoe@gmail.com', 2, 'John', 'Jonndoe', '1.jpg', 1, '2016-03-01 10:45:19.078370', '2016-03-05'),
(30, 'John', 'Johndoe@gmail.com', 2, 'doe', 'johndoe', '1.jpg', 0, '2016-03-01 10:47:23.797443', '2016-03-02'),
(33, 'mike', 'mike@gmail.com', 1, 'mike', 'sunnydesai', '4.jpg', 0, '2016-03-01 10:55:42.466284', '2016-03-05');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `updated_users` BEFORE UPDATE ON `users` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`forgot_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `post_query`
--
ALTER TABLE `post_query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forgot`
--
ALTER TABLE `forgot`
  MODIFY `forgot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `post_query`
--
ALTER TABLE `post_query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `reg_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
