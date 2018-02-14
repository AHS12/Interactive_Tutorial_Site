-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 06:16 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

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
  `content_id` int(111) NOT NULL,
  `user_id` int(111) NOT NULL,
  `content_title` varchar(600) NOT NULL,
  `content_what_to_learn` varchar(600) NOT NULL,
  `content_details` varchar(600) NOT NULL,
  `content_requirements` varchar(600) NOT NULL,
  `content_picture` text NOT NULL,
  `content_date` date NOT NULL,
  `content_category` varchar(600) NOT NULL,
  `content_tags` varchar(600) NOT NULL,
  `content_level` varchar(200) NOT NULL,
  `content_status` varchar(600) NOT NULL DEFAULT 'draft',
  `visibility` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `user_id`, `content_title`, `content_what_to_learn`, `content_details`, `content_requirements`, `content_picture`, `content_date`, `content_category`, `content_tags`, `content_level`, `content_status`, `visibility`) VALUES
(1, 7, 'Android Java Masterclass - Become an App Developer: project included', 'You’re taught step by step HOW to build Android 7 apps for Google’s Nougat platform that will work on older Android versions.\r\nWith each comprehensive step, the WHY you’re doing it is explained.\r\nYou’ll have EXPERT LEVEL knowledge of the Java programming language and know exactly how each process of Android Nougat development works.\r\nThe course is continually UPDATED, so you’ll learn the very latest as Android Nougat evolves.', 'There’s no getting around it.\r\n\r\nAndroid accounts for 81.7% of all smartphones sold, but not all come packed with the very latest Android Nougat.\r\n\r\nThat won’t worry you because after completing this course, the apps you build will perform brilliantly on Android Nougat or any older Android operating system.\r\n\r\nNow that’s something most courses don’t teach you!\r\n\r\n', 'A computer - Windows, Mac, and Linux are all supported. Setup and installation instructions are included for each platform.\r\nYour ENTHUSIASM to learn the worlds #1 app development framework, and then to showcase it on your RESUME!\r\nEverything else needed to write apps for Android 7 Nougat is already included in the course.', 'test_image3.jpg', '2018-01-17', 'Android', 'Android, java', 'Beginner', 'draft', 1),
(2, 7, 'How to Get Your First 1,000 Customers: \r\nwith project included', 'Understand the basics of growth marketing and traction channels\r\nDrill down on customer pain points and build user personas\r\nAlign marketing channels with their personal preferences and skills\r\nUse Twitter and Facebook to conduct research and sales outreach\r\nCanvas Reddit, Meetup, and other platforms to canvas for customers\r\nSet up, manage, and analyze user stats & behaviors through Google Analytics\r\nSuccessfully drive sales through posting & commenting on Reddit, ProductHunt, & HackerNews\r\nSet up, populate, and use an Instagram account', 'How may customers do you have?\r\n\r\nIf you said \"none\" or \"not enough\", this course is for you. \r\n\r\nIn this course, we\'re going to focus on how YOU can take any product, service, or business and sell it to 10s, 100s, or even 1,000s of customers. ', 'You should have basic familiarity with social media\r\nYou don\'t need to have a product or business, however, it helps', 'test_image1.jpg', '2018-01-16', 'Javascript', 'Javascript, JS', 'Beginner', 'draft', 1),
(3, 7, 'The Complete Web Development Course - Build 15 Projects', 'Design and build Cash Earning Powerful Websites on a highly professional level using the latest Web Technologies.\r\nUse HTML5 and CSS3 to build website content and add stunning styling and decoration.\r\nUse Javascript, jQuery & jQuery User Interface to create Interactive Websites and Games.\r\nUse Twitter Bootstrap to produce Responsive Websites that will adapt to any device size.\r\n', '*****15 Full Professional Projects worth over 20,000$*****\r\n\r\n*****Car Sharing Website (10h), Online Notes App (11h) & many more*****\r\n\r\n*****77 hours of Content + 40 hands on Activities + 21 Quizzes*****\r\n\r\n*****Learn Step by Step with NO Step Skipped*****', 'I will teach you everything. All you need is a computer.\r\nThere is absolutely no pre-knowledge required. This is a 100% Comprehensive Web Development Course that will take you from Zero-skills to a Cash Earning Web Developer, Step by Step with NO Step skipped.', 'test_image5.jpg', '2018-01-17', 'Web Development', 'Web, Web Development, html, css, php ,js, javascript', 'Advanced', 'draft', 1),
(5, 7, 'New Course on becoming Pro', 'been teaching for y\r\nears or are teaching for the first time, you can make an engaging course. We\'ve compiled resources and best practices to help you get to the next level, no matter where you\'re starting.', 'make an engagin\r\ng course. We\'ve compiled resources and best practices to help you get to the next level, no matter where you\'re starting.', 'years or are teaching for the first time, you can make an engaging course. We\'ve compiled resources and best practices to help you get to the next level, no matter where you\'re starting.', 'test_image5.jpg', '2018-01-23', 'PHP', ' php phph', 'Intermediate', 'draft', 1),
(9, 7, 'New Test Course', ' first time, you can make an engaging course. We\'ve compiled resources and best practices to help you get to the next level, no matter where you\'re starting.', ' first time, you can make an engaging course. We\'ve compiled resources and best practices to help you get to the next level, no matter where you\'re starting.', ' course. We\'ve compiled resources and best practices to help you get to the next level, no matter where you\'re starting.', 'test_image5.jpg', '2018-01-24', 'PHP', ' php php java', 'Intermediate', 'draft', 0),
(10, 7, 'new test course', ' asdasd\r\nasdasd', ' asdasd\r\nasdasd\r\nasdad', ' asdasdasd\r\nasdasdad', 'test_image5.jpg', '2018-02-14', 'Android', ' asd,asd,asd', 'Beginner', 'draft', 0);

-- --------------------------------------------------------

--
-- Table structure for table `content_enrolled`
--

CREATE TABLE `content_enrolled` (
  `enroll_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_enrolled`
--

INSERT INTO `content_enrolled` (`enroll_id`, `content_id`, `user_id`) VALUES
(1, 5, 9),
(2, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `content_resources`
--

CREATE TABLE `content_resources` (
  `video_id` int(11) NOT NULL,
  `video_content_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `video_serial` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_desc` varchar(255) NOT NULL,
  `video_week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_resources`
--

INSERT INTO `content_resources` (`video_id`, `video_content_id`, `file_name`, `file_url`, `video_serial`, `video_title`, `video_desc`, `video_week`) VALUES
(0, 5, '1517850695 (1).MP4', '../videos/1517850695 (1).MP4', 1, 'ajax introduction', 'ajax man!!', 1);

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
(6, 'Abdul', 'Halim', 'teacher@mail.com', '$2y$10$Mzg3MTM1OTE2OTBmNmY4ZOzfVgVnULGerSbTYLn3Ou8ba768ui8h6', 'International Islamic University Chittagong', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto assumenda aut, autem blanditiis, et eum labore nesciunt, numquam odio porro quis quo reiciendis rerum soluta temporibus voluptatibus. Eum, ex.', 'T', '1515850920sticker_bug_digital.jpg'),
(7, 'sohel', 'mahmud', 'sohel@gmail.com', '$2y$10$MjE4YzEzZjljOTBmMjI3OOIImgdcFrMu.lWsv0nA0QBWRqpuoda4S', 'iiuc', 'i am the boss!!', 'T', '1516252413dash_publish_illustration.png'),
(8, 'Azizul', 'Hakim', 'aziz@gmail.com', '$2y$10$OTlkMzVjZWRhYTg3YjdjN.O5qFXziupjlKYJIz9j7TJnsVAOGHa2C', 'int\'r IIUC', 'int\'r you/r sdf;sdf sdf\'\' \"sdfsf\" ', 'T', '1516213376download.png'),
(9, 'avon', 'avon', 'avon@gmail.com', '$2y$10$MGZjMGIyZTFiMjhkOTMwNewthAfG2xLnPjy1cGFWUnZ4tr5mCtY7W', '', '', 'S', '1516215412download.png'),
(10, 'mahmud', 'mahmud', 'mahmud@gmail.com', '$2y$10$ZmI2ZmJlMTdlZjNjODE2Me1K.z4W8zRxeIVcpNXn2CCRmUsecfPhC', 'usdf', '', 'T', '1516550720Captusdre.PNG'),
(11, 'joy', 'joy', 'joy@gmail.com', '$2y$10$NWU0NzU2YTk5NjZiZWEyYOoxE6lPGvW39PlcBtt/A6vZeayjYAmLW', '', '', 'S', '151862793401.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `content_enrolled`
--
ALTER TABLE `content_enrolled`
  ADD PRIMARY KEY (`enroll_id`);

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
  MODIFY `content_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `content_enrolled`
--
ALTER TABLE `content_enrolled`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
