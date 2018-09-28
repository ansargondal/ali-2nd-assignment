-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2018 at 02:09 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ali_30332628`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`user_id`, `follower_id`) VALUES
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `post_date` datetime NOT NULL,
  `in_reply_to` int(11) DEFAULT NULL,
  `body` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `post_date`, `in_reply_to`, `body`) VALUES
(1, 1, 'Random Title', '2018-09-04 00:16:54', NULL, 'all is well body buddy!\r\n'),
(2, 1, 'Another Post', '2018-09-04 00:24:14', NULL, 'this is another post which is done by some random users.'),
(3, 1, '3rd Post which is random title', '2018-09-04 00:25:00', NULL, 'this is my last post for this project! Would you like to replay for this post?'),
(4, 1, 'Fourth Post', '2018-09-04 00:27:16', NULL, 'This is another random post by Random user :)'),
(5, 2, 'Another user Creating a post', '2018-09-12 00:00:00', NULL, 'This is a randomg post created by a user I \'m following.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ansargondal', 'ansarabbas395@gmail.com', '$2y$10$rejl5IN0fC8xDKOszHg6JO3ftm1dt6rNvkTjPbi/l6F0ZN6wUvt5q'),
(2, 'bilal', 'bila@gmail.com', '$2y$10$IJiM/hsRv4d0TVfEcSZz0OLMthdg07bjmuklMnCDeyntoLUfSH5s.'),
(3, 'gujjar', 'gujjar@gmail.com', '$2y$10$wzsa/es1AEBuH2nfCm/toeQMSKB8r0Ed.BnsWaIa1.Oreh9Q2M2nK'),
(4, 'balli', 'balli@gmail.com', '$2y$10$qudPamWxPTIBYSamdWXG0uvrNsKO6LimxoAXs7ydtAdpyOnQ/Xc5q'),
(5, 'hasihm', 'ali@gmail.com', '$2y$10$RLwOESh.DRNzGtrI.Txte.dCZhCE/qdsz6x7PG2ycLJHMI1.opBuC'),
(6, 'alikhan', 'ahmand@gmail.com', '$2y$10$Yu8GUEsQ7PhNnngvPy3lweHlPLbBQVjUp80FDAA3shCiH6nzleBNS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_post_fk` (`user_id`),
  ADD KEY `post_reply_fk` (`in_reply_to`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post_reply_fk` FOREIGN KEY (`in_reply_to`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `user_post_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
