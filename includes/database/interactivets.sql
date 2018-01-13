-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 02:43 PM
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
-- Database: `interactivets`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(111) NOT NULL,
  `user_id` int(111) NOT NULL,
  `description_what_to_learn` varchar(255) NOT NULL,
  `description_details` varchar(255) NOT NULL,
  `description_requirment` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `visibility` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content_resource`
--

CREATE TABLE `content_resource` (
  `id` int(111) NOT NULL,
  `vid1` varchar(255) NOT NULL,
  `vid1_text` text NOT NULL,
  `vid2` varchar(255) NOT NULL,
  `vid2_text` text NOT NULL,
  `vid3` varchar(255) NOT NULL,
  `vid3_text` text NOT NULL,
  `vid4` varchar(255) NOT NULL,
  `vid4_text` text NOT NULL,
  `vid5` varchar(255) NOT NULL,
  `vid5_text` text NOT NULL,
  `vid6` varchar(255) NOT NULL,
  `vid6_text` text NOT NULL,
  `vid7` varchar(255) NOT NULL,
  `vid7_text` text NOT NULL,
  `vid8` varchar(255) NOT NULL,
  `vid8_text` text NOT NULL,
  `vid9` varchar(255) NOT NULL,
  `vid9_text` text NOT NULL,
  `vid10` varchar(255) NOT NULL,
  `vid10_text` text NOT NULL,
  `vid11` varchar(255) NOT NULL,
  `vid11_text` text NOT NULL,
  `vid12` varchar(255) NOT NULL,
  `vid12_text` text NOT NULL,
  `vid13` varchar(255) NOT NULL,
  `vid13_text` text NOT NULL,
  `vid14` varchar(255) NOT NULL,
  `vid14_text` text NOT NULL,
  `vid15` varchar(255) NOT NULL,
  `vid15_text` text NOT NULL,
  `vid16` varchar(255) NOT NULL,
  `vid16_text` text NOT NULL,
  `vid17` varchar(255) NOT NULL,
  `vid17_text` text NOT NULL,
  `vid18` varchar(255) NOT NULL,
  `vid18_text` text NOT NULL,
  `vid19` varchar(255) NOT NULL,
  `vid19_text` text NOT NULL,
  `vid20` varchar(255) NOT NULL,
  `vid20_text` text NOT NULL,
  `vid21` varchar(255) NOT NULL,
  `vid21_text` text NOT NULL,
  `vid22` varchar(255) NOT NULL,
  `vid22_text` text NOT NULL,
  `vid23` varchar(255) NOT NULL,
  `vid23_text` text NOT NULL,
  `vid24` varchar(255) NOT NULL,
  `vid24_text` text NOT NULL,
  `vid25` varchar(255) NOT NULL,
  `vid25_text` text NOT NULL,
  `exam_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questiontable`
--

CREATE TABLE `questiontable` (
  `id` int(111) NOT NULL,
  `content_id` int(111) NOT NULL,
  `question` text NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `institution` text NOT NULL,
  `bio` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `institution`, `bio`, `user_role`, `picture`) VALUES
(1, 'Md Azizul', 'Hakim', 'test@mail.com', '$2y$10$iusesomestupidestrin1uX3LW.qT6rtD6W//qz7yQH8xX1Twyek.', '', '', 'S', '1515594988Bangladesh-map-divisions-wise.jpg'),
(2, 'aaa', 'ggg', 'test2@mail.com', '$2y$10$NDc4ODVhOGUwNDlmOWQ2YuXWYy3Csbv.f.2VpsrVbHc5.qDswVE3C', '', '', 'S', '15156062121.PNG'),
(3, 'student', 'first', 'test3@mail.com', '$2y$10$OTQ4YzhiMjY1ZGQ0ZWZkYu0w49wt5Q2tquaV4.FiE99D40xTm.gOm', '', '', 'S', '1515608666profile.jpg'),
(4, 'Student', 'Second', 'demo@mail', '$2y$10$YTk3MWQ1MGVmNjc2ODA2OOYhXVfKgLbF8miC0wGZwnWrL/9TMZCb.', 'Iut', 'loremipsumloremipsum lorem lorem loerm', 'S', '1515649363Bangladesh-map-divisions-wise.jpg'),
(5, 'Abdul', 'Hakim', 'test@gmail.com', '$2y$10$YWM2MGNjNjFjN2ExZjllMO7DVeUChx4ZOP8DzlSpJrtdyntue8N9a', 'IIUC bogas double bogas bar bar', 'bio viborvnowov vdwnw SDJINVSBSDif  DKFPIWNWi lorm lorem lorem double lorem  test', 'S', '1515655273sticker_bug_digital.jpg'),
(6, 'Abdul', 'Halim', 'teacher@mail.com', '$2y$10$Mzg3MTM1OTE2OTBmNmY4ZOzfVgVnULGerSbTYLn3Ou8ba768ui8h6', 'International Islamic University Chittagong', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto assumenda aut, autem blanditiis, et eum labore nesciunt, numquam odio porro quis quo reiciendis rerum soluta temporibus voluptatibus. Eum, ex.', 'T', '1515850920sticker_bug_digital.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `content_resource`
--
ALTER TABLE `content_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questiontable`
--
ALTER TABLE `questiontable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_id` (`content_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content_resource`
--
ALTER TABLE `content_resource`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `questiontable`
--
ALTER TABLE `questiontable`
  ADD CONSTRAINT `questiontable_ibfk_1` FOREIGN KEY (`content_id`) REFERENCES `content_resource` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
