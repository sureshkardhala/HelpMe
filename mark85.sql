-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 12:22 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mark85`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `commentDesc` text NOT NULL,
  `commentAuthor` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table mark85.comments: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `mark85`.`comments`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `forget_password`
--

CREATE TABLE `forget_password` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forget_password`
--

INSERT INTO `forget_password` (`id`, `email`, `token`) VALUES
(38, 'abrar.vaseem95@gmail.com', '752d6e25eab5f19f4078dafd108a4a745f428e5b6681e');

-- --------------------------------------------------------

--
-- Table structure for table `freelancing`
--

CREATE TABLE `freelancing` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancing`
--

INSERT INTO `freelancing` (`id`, `user_id`, `username`, `title`, `description`, `image`, `price`, `verified`) VALUES
(86, 40, 'Tony', 'CHARLIE PUTHHHHHH', 'dbeknf', 'images/', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `like_dislike`
--

CREATE TABLE `like_dislike` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_dislike`
--

INSERT INTO `like_dislike` (`id`, `comment_id`, `user_id`, `rating_action`) VALUES
(1, 1, 40, 'like'),
(2, 2, 40, 'dislike'),
(3, 4, 40, 'like'),
(5, 5, 40, 'like'),
(8, 10, 40, 'like'),
(11, 11, 40, 'like'),
(12, 12, 40, 'like'),
(15, 13, 40, 'like'),
(16, 14, 40, 'dislike'),
(18, 6, 40, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `like_reply`
--

CREATE TABLE `like_reply` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `username`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES
(2, 38, 'Abrar', 'hello world', 'hello-world', 0, '9.1 Search in Photoshop.png.png', 'hello world', 1, '2020-08-23 04:42:17', '2020-08-23 04:42:17'),
(6, 40, 'Tony', 'edu1Now Brewingâ€¦ Font Awesome 6!Now Brewingâ€¦ Font Awesome 6!Now Brewingâ€¦ Font Awesome 6!Now Brewingâ€¦ Font Awesome 6!Now Brewingâ€¦ Font Awesome 6!Now Brewingâ€¦ Font Awesome 6!Now Brewingâ€¦ Font Awesome 6!', 'edu1now-brewing-font-awesome-6-now-brewing-font-awesome-6-now-brewing-font-awesome-6-now-brewing-font-awesome-6-now-brewing-font-awesome-6-now-brewing-font-awesome-6-now-brewing-font-awesome-6-', 0, '', 'Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!Now Brewingâ€¦ Font Awesome 6!\r\nThe next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. Pre-order now to get early access and releases over the next year!', 1, '2020-08-29 13:48:21', '2020-08-29 13:48:21'),
(7, 40, 'Tony', 'Create/Edit PoCreate/Edit Po', 'create-edit-pocreate-edit-po', 0, '', 'Create/Edit PoCreate/Edit Po', 1, '2020-08-29 09:55:02', '2020-08-29 09:55:02'),
(8, 40, 'Tony', 'jjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjj', 0, '10.1 Speed up Photoshop.png.png', 'Create/Edit PoCreate/Edit Po', 1, '2020-08-29 09:55:31', '2020-08-29 09:55:31'),
(9, 40, 'Tony', 'Heyy', 'heyy', 0, '', 'dkk', 1, '2020-08-30 14:00:14', '2020-08-30 14:00:14'),
(10, 40, 'Tony', 'ks', 'ks', 0, '', 'ks', 1, '2020-08-30 14:00:48', '2020-08-30 14:00:48'),
(11, 40, 'Tony', 'AAAAAAAAAAAAAAAAAAAAAAAA', 'aaaaaaaaaaaaaaaaaaaaaaaa', 0, '10.1 Speed up Photoshop.png.png', 'AAAAAAAAAAAAAAAAAAAAAAAA', 1, '2020-09-26 06:22:28', '2020-09-26 06:22:28'),
(12, 40, 'Tony', 'localhost', 'localhost', 0, '', 'localhost', 1, '2020-09-26 06:36:18', '2020-09-26 06:36:18'),
(13, 40, 'Tony', 'i will make yt video', 'i-will-make-yt-video', 0, '9.1 Search in Photoshop.png.png', 'i will make yt video', 1, '2020-09-26 06:38:43', '2020-09-26 06:38:43'),
(14, 40, 'Tony', 'yummy', 'yummy', 0, '9.1 Search in Photoshop.png.png', 'yummy', 1, '2020-09-26 10:22:20', '2020-09-26 10:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

CREATE TABLE `post_topic` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(1, 2, 1),
(2, 6, 2),
(3, 7, 2),
(4, 8, 2),
(5, 9, 3),
(6, 10, 8),
(7, 11, 7),
(8, 12, 2),
(9, 13, 2),
(10, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `commentDesc` text NOT NULL,
  `commentAuthor` varchar(100) NOT NULL,
  `likes` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `comment_id`, `commentDesc`, `commentAuthor`, `likes`, `created_at`) VALUES
(1, 40, 10, 'jd', 'Tony', 0, '2020-12-09 13:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `scam_or_fraud` varchar(100) NOT NULL,
  `hate_speech_or_symbols` varchar(100) NOT NULL,
  `bullying_or_harassment` varchar(100) NOT NULL,
  `spam_or_promotion` varchar(100) NOT NULL,
  `false_information` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(1, 'Programming', 'programming'),
(2, 'Education', 'education'),
(3, 'Technology', 'technology'),
(4, 'Maths', 'maths'),
(5, 'Machine Learning', 'machine learningy'),
(6, 'Hacking', 'hacking'),
(7, 'Science', 'science'),
(8, 'Aptitude', 'aptitude'),
(9, 'Installations', 'installations'),
(10, 'Electronics', 'electronics');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT 'Author',
  `password` varchar(255) NOT NULL,
  `token` varchar(300) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL,
  `achievements` varchar(300) DEFAULT NULL,
  `skills` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `token`, `display_name`, `gender`, `phone`, `image`, `profession`, `location`, `about`, `education`, `achievements`, `skills`, `created_at`, `updated_at`, `status`, `code`) VALUES
(38, 'Abrar', 'abrar.vaseem95@gmail.com', 'Author', '827ccb0eea8a706c4c34a16891f84e7b', '18d9fe5323a1d8c15b0eed61c32ead15', 'Vaseem', 'male', '8121552737', 'IPL-2018-9.jpg', 'student', 'ms', 'MSD', 'Btech', 's', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', '2020-08-23 04:41:45', '2020-08-23 04:41:45', 'Inactive', ''),
(39, 'abdevilliers', 'abdevilliers17@gmail.com', 'Author', '727e555683ea2a1e2311815d8c9fc7c2', '128e9d97a1c06caf017a94cfe21aa2cd', 'Ab', 'male', '8121552737', NULL, 'abdevilliers', 'T', 'T', 'AbrarVaseem', 'Y', 'R', '2020-08-23 04:56:53', '2020-08-23 04:56:53', '', ''),
(40, 'Tony', 'tony@gmail.com', 'Author', 'eee7ac208064d408e84ab5e26d24b278', 'abc7dc9687c643abead5603e23171c72', 'HELLO WORLD', 'male', '8121552737', '1_KK8Sz-PVylkQKBaIXhjYWA.jpeg', 'student', 'India', 'ABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRARABRAR', 'Btech', 'ABRAR', 'a', '2020-08-23 14:12:42', '2020-08-23 14:12:42', 'Active', '5ee1d68c7aba00e1675115540b306dae'),
(41, 'new', 'new@gmail.com', 'Author', '22af645d1859cb5ca6da0c484f1f37ea', '0119687eae34daac89e89c8ebbe82d60', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-23 15:45:28', '2020-08-23 15:45:28', 'Inactive', '4c693b442412bdf6c525d47467f38246'),
(42, 'suresh_7_18', 'sureshkardhala2k22@gmail.com', 'Author', 'fba1928e3e88bb3b7c830d05a045a5ba', '22287d50cb8126827424602eb37cc307', 'Suresh Kardhala', 'male', '9948227622', 'mHI3Pkps_400x400.jpg', 'student', '5-91,kakinda', 'my bipo', 'Btech', 'worset ever', 'c,c++,Mernstack,Tenserflow.js', '2020-08-24 10:06:26', '2020-08-24 10:06:26', 'Active', '778125a157c0024d17978b00c6f79197'),
(43, '', '', 'Author', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-25 08:30:16', '2020-08-25 08:30:16', 'Inactive', '668db2def4f7a2f2bdff9911330ea9e1'),
(44, 'Tonyd', 'abrar.vaseem95@gmail.coma', 'Author', '62f8f80d384b8e9fdc81ef4e307b2b57', 'f59d878e39bbcbaaa85d10d584976c5b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-26 13:21:58', '2020-08-26 13:21:58', 'Inactive', '1fd74b30f02ac5e7408bfa4c8fdc816b'),
(45, 'NI', 'abrar.vaseem25@gmail.com', 'Author', '47f8d5e66a360ad41aadc43cb0b1b276', '77615c5e9a047d3ad7394748124747bf', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-26 15:25:19', '2020-08-26 15:25:19', 'Inactive', '74716ded5adac78e930cb003bb3d7123'),
(46, 'hello', 'hello@gmail.com', 'Author', '5d41402abc4b2a76b9719d911017c592', 'b59a741183b7e1990156a46faa29b60c', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-26 15:42:17', '2020-08-26 15:42:17', 'Inactive', '4c915812cffcd8572d6db5879bbeb768'),
(47, 'captain', 'captain@gmail.com', 'Author', 'ab334feeb31c05124cb73fa12571c2f6', 'e2eec743a8a4663587a711e47cccc187', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-26 15:46:02', '2020-08-26 15:46:02', 'Inactive', '7269a7279ca11391804a447fbdbd9dfe'),
(48, 'ke', 'dkdmm@j', 'Author', '0cc175b9c0f1b6a831c399e269772661', 'af2a721233771b8a74f2f026e6b69e52', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 06:11:28', '2020-08-28 06:11:28', 'Inactive', '40aa32b5f3c5ec55e21a69cb15522060'),
(49, 'j', 'j@j', 'Author', '8ce4b16b22b58894aa86c421e8759df3', 'b918ea6cdc272b96767729237ea9e870', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 06:13:23', '2020-08-28 06:13:23', 'Inactive', '14ae0a626d79d14425886db92a7c4280'),
(50, 'jkk', 'hjk@fgh', 'Author', '6f8f57715090da2632453988d9a1501b', '4f71b186b8cfe4ca69234b21e8e6b8a6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 06:16:57', '2020-08-28 06:16:57', 'Inactive', 'dd0db0054ab0d919b9f1d4602dad7abc'),
(51, 'h', 'h@h', 'Author', '363b122c528f54df4a0446b6bab05515', '190b1157a91018ca87b5ef740be90f9b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 06:24:32', '2020-08-28 06:24:32', 'Inactive', 'c25ff355e5f5de77611030917d313d13'),
(52, 'V', 'v@v', 'Author', '9e3669d19b675bd57058fd4664205d2a', '86fb3b8aa400c037f999822aa309657c', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 06:35:12', '2020-08-28 06:35:12', 'Inactive', 'e6c61e1755d8137ae3650d185bbe102f'),
(53, 'n', 'm@m', 'Author', '0cc175b9c0f1b6a831c399e269772661', 'cea70a9cac87c50103ac30db37c3720f', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 07:49:21', '2020-08-28 07:49:21', 'Inactive', 'beff1f66b97c03757b45487bb1753854'),
(54, 'Tonya', 'abrar.vaseem95@gmail.comaa', 'Author', '0cc175b9c0f1b6a831c399e269772661', '27e23eef70722ca6784b349a6ccfd39b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 08:24:18', '2020-08-28 08:24:18', 'Inactive', '700199903599e9a86c5f442d4248e2ed'),
(55, 'ABRARVASEEM', 'AbrarVaseem@gmail.com', 'Author', '1ce21ee17c749a130f2592bfb9c5c37c', '0ed6e32479fa1a0f2c33e2ba09fd5cbb', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 09:17:47', '2020-08-28 09:17:47', '', ''),
(56, 'aaaaaaa', 'abrar.vaseem95@gmail.comkkk', 'Author', '7b8b965ad4bca0e41ab51de7b31363a1', '13a3fcc0b3176f7be7662b889da7a67c', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-28 11:52:53', '2020-08-28 11:52:53', '', ''),
(57, 'ababababab', 'ababababab@gmail.com', 'Author', '25be798d7e111e9fadb6769931ded8c2', 'd933c5b92070d0a701675d31f0a2f4b9', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-25 15:40:02', '2020-09-25 15:40:02', '', ''),
(58, 'abrarvaseem', 'abrarvaseem@gmail.com', 'Author', '90841077cff5ddee13af0faa60a18548', 'b0d385236d03250aa92ad5ea7904c1b1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-14 09:27:50', '2020-10-14 09:27:50', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forget_password`
--
ALTER TABLE `forget_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancing`
--
ALTER TABLE `freelancing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_dislike`
--
ALTER TABLE `like_dislike`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comment_id` (`comment_id`,`user_id`);

--
-- Indexes for table `like_reply`
--
ALTER TABLE `like_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `posts_ibfk_1` (`user_id`);

--
-- Indexes for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD UNIQUE KEY `post_id` (`post_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forget_password`
--
ALTER TABLE `forget_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `freelancing`
--
ALTER TABLE `freelancing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `like_dislike`
--
ALTER TABLE `like_dislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `like_reply`
--
ALTER TABLE `like_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD CONSTRAINT `post_topic_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
