-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 11:31 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fct_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `cpass` varchar(250) NOT NULL,
  `phonenumber` int(14) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `admin_image` blob NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `pass`, `cpass`, `phonenumber`, `address`, `gender`, `admin_image`, `reg_date`) VALUES
(1, 'Jesutofunmi', 'Jesutofunmi', 'admin@gmail.com', 'admin12345', 'admin12345', 675432, 'Abj', 'Male', 0x34343130353638302d7765622d646576656c6f7065722d64657369676e2d766563746f722d696c6c757374726174696f6e2d6570732d31302d2e6a7067, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `audio_id` int(11) NOT NULL,
  `audio_title` varchar(100) NOT NULL,
  `artiste` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `audioFile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`audio_id`, `audio_title`, `artiste`, `status`, `audioFile`) VALUES
(1, 'Earth in the balance', 'AI Gore', 'Pharmaceuticals & Related Segments', '../upload/Earth in the Balance by Al Gore on Free Audio Book Download.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `barcode_no` varchar(55) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `author_2` varchar(100) NOT NULL,
  `book_pub` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `book_barcode` varchar(100) NOT NULL,
  `book_image` blob NOT NULL,
  `bstore` varchar(100) NOT NULL,
  `book_counts` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `barcode_no`, `book_title`, `author`, `author_2`, `book_pub`, `publisher_name`, `isbn`, `copyright_year`, `status`, `book_barcode`, `book_image`, `bstore`, `book_counts`, `date_added`, `remarks`) VALUES
(136, '', 'Pharmaceutics- Basic Pharmacy', 'ALEKHA K. DASH, RPH,PHD ', 'SOMNATH SINGH, PHD ', ' ', ' ', ' ', 2014, 'Pharmaceuticals & Related Segm', '', 0x2e2e2f75706c6f61642f646f7361676520706861726d2e504e47, '../upload/FASTtrack Pharmaceutics - Dosage Form and Design.pdf', 4, '2021-06-20 17:24:37', ''),
(137, '', 'Health Insurance', 'Institute of Medicine', ' ', 'National Academies Press', ' ', ' ', 2002, 'Health insurance, Health servi', '', 0x2e2e2f75706c6f61642f6865616c746820696e737572616e63652e504e47, '../upload/Health Insurance is a Family Matter (Insuring health) ( PDFDrive ).pdf', 8, '2021-06-20 18:18:19', ''),
(138, '', 'Medical Devices/Equipment Management', 'Health Service Executive', ' ', ' ', '', ' ', 2009, 'Health devices and equipments', '', 0x2e2e2f75706c6f61642f4d65646963616c20646576696365732e504e47, '../upload/hse medical devices equipment management best practice guidance.pdf', 2, '2021-06-20 18:21:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Pharmaceuticals & Related Segments'),
(2, 'Health insurance, Health services, and managed care'),
(3, 'Health devices and equipments'),
(4, 'Health care services and facilities'),
(5, 'Symptoms, diseases and prevention');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `susername` varchar(50) NOT NULL,
  `dusername` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `read` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `penalty_id` int(11) NOT NULL,
  `penalty_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `detail_action` varchar(100) NOT NULL,
  `date_transaction` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `vercode` int(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `contact` int(15) NOT NULL,
  `preferred_cat` varchar(250) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  `user_image` blob NOT NULL,
  `admin_image` blob NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `school_id`, `vercode`, `password`, `confirm_password`, `phonenumber`, `address`, `gender`, `contact`, `preferred_cat`, `user_type`, `type`, `level`, `user_image`, `admin_image`, `reg_date`) VALUES
(14, 'Segun', 'Dele', 'segun.d', 'segun@gmail.com', '', 19697, 'segun12345', 'segun12345', 0, '', 'Male', 0, 'Pharmaceuticals & Related Segments', '', NULL, NULL, '', '', '2021-06-17 07:14:13'),
(15, 'Daniel', 'Okoro', 'daniel.o', 'daniel.o@gmail.com', '', 35539, 'daniel123456', 'daniel123456', 0, '', 'Male', 0, 'Health devices and equipments', '', NULL, NULL, '', '', '2021-06-17 07:31:45'),
(16, 'Joshua', 'John', 'joshua.j', 'joshua.j@gmail.com', '', 58337, 'joshua12345', 'joshua12345', 0, '', 'Male', 0, 'All', '', NULL, NULL, '', '', '2021-06-22 08:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `date_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(100) NOT NULL,
  `artiste` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `videoFile` varchar(500) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `artiste`, `status`, `videoFile`, `date_added`) VALUES
(1, 'The study of health', 'AI Gore', 'Pharmaceuticals & Related Segments', '../upload/Biology overview.mp4', '2021-06-23 10:20:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`audio_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`penalty_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `audio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
