-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 05:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `user`, `password`) VALUES
(1, 'winzyl', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `user` text NOT NULL,
  `finished_assessment` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`user`, `finished_assessment`, `score`) VALUES
('winzyl', 'HTML', 4),
('winzyl', 'JAVA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`, `description`) VALUES
(4, 'JAVA', 'Java is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible. '),
(5, 'SQL', 'SQL is a domain-specific language used in programming and designed for managing data held in a relational database management system, or for stream processing in a relational data stream management system. '),
(6, 'PHP', 'PHP is a popular general-purpose scripting language that is especially suited to web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group. '),
(7, 'HTML', 'Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript. '),
(8, 'PYTHON', 'Python is an interpreted, high-level, general-purpose programming language.');

-- --------------------------------------------------------

--
-- Table structure for table `course_vids`
--

CREATE TABLE `course_vids` (
  `course` text NOT NULL,
  `video` text NOT NULL,
  `lesson` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_vids`
--

INSERT INTO `course_vids` (`course`, `video`, `lesson`) VALUES
('Software Engineering', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Btbvv9kfLqo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('Software Engineering', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jAlwZe-UrDY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('CS', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Tzl0ELY_TiM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('CS', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ReVeUvwTGdU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FWfuCbqA9xQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/64OWnoZD96k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KMr81dgbJeM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YwLDCgQCn44\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xbAx1ofSQ1Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JWx1H3FGvos\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/llgwaXoRrFI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EQz6LCx6SaA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aUG-fpYV0Jk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GVqHYzSBtns\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/68dObg6VMQ0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fwhLuPLXzgk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/u-PsaJA2nLE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PIoWg3HSf-M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sGazlDEJvnA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sJy1V3r0UW8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YsQqMBJ6wZc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VTQ52eyAzvM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/g1vVhvdXudM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PYTHON', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NvsUPJmcGnE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PYTHON', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qU0gCfJSNus\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PYTHON', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MBk_1IO7rq4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PYTHON', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wdu9-0gFXpA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PYTHON', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_S1z2639cuU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PYTHON', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/hlewHF_ciw0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('PYTHON', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NN5eyXonYEs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('MYSQL', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FAXhXI2Gxdc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('MYSQL', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WA4SpOOYMGc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('MYSQL', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/K-xkTGz2trE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('MYSQL', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rWmHiEDKF5Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('MYSQL', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Vmt5QeDYPIU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('JAVA', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2dZiMBwX_5Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('JAVA', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hdf5OmERt0g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('JAVA', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ovb8njlzvlA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('JAVA', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/U5b9TH14REM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('JAVA', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JceW6zvmA_Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('JAVA', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7wWvSn_qiBc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `username` text NOT NULL,
  `video_progress` int(11) NOT NULL,
  `article_progress` int(11) NOT NULL,
  `test_progress` int(11) NOT NULL,
  `course` text NOT NULL,
  `video_progress_percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`) VALUES
(8, 'winzyl', '827ccb0eea8a706c4c34a16891f84e7b', 'prowinzil@gmail.com'),
(9, 'antolin', '827ccb0eea8a706c4c34a16891f84e7b', 'test@test.com'),
(10, 'test', '098f6bcd4621d373cade4e832627b4f6', 'meh@meh.com'),
(11, 'something', '437b930db84b8079c2dd804a71936b5f', 'something@something.com'),
(12, 'error', 'cb5e100e5a9a3e7f6d1fd97512215282', 'error@error.com'),
(13, 'war', '4ca9d3dcd2b6843e62d75eb191887cf2', 'war@war.com'),
(14, 'war2', '827ccb0eea8a706c4c34a16891f84e7b', 'war2@gmail.com'),
(15, 'not', '4ca9d3dcd2b6843e62d75eb191887cf2', 'goingToCry@warrior.com');

-- --------------------------------------------------------

--
-- Table structure for table `usercourse`
--

CREATE TABLE `usercourse` (
  `user` text NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercourse`
--

INSERT INTO `usercourse` (`user`, `course`) VALUES
('william', 'CS'),
('', ''),
('', ''),
('', ''),
('test', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('antolin', 'IS'),
('antolin', 'IS'),
('antolin', 'IS'),
('antolin', 'CS'),
('antolin', 'IS'),
('antolin', 'Software Engineering'),
('antolin', 'CS'),
('antolin', 'CS'),
('antolin', 'Software Engineering'),
('antolin', 'CS'),
('antolin', 'Software Engineering'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'Software Engineering'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'Software Engineering'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'Software Engineering'),
('winzyl', 'Software Engineering'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('winzyl', 'CS'),
('test', 'CS'),
('test', 'CS'),
('winzyl', 'CS'),
('test', ''),
('test', ''),
('test', ''),
('winzyl', 'Software Engineering'),
('test', ''),
('test', ''),
('test', ''),
('test', ''),
('test', 'Software Engineering'),
('test', 'Software Engineering'),
('winzyl', 'CS'),
('something', 'HTML'),
('something', 'PHP'),
('something', 'JAVA'),
('something', 'PYTHON'),
('something', 'HTML'),
('something', 'PYTHON'),
('war2', 'HTML'),
('war2', 'JAVA'),
('war2', 'PHP'),
('not', 'PHP'),
('not', 'PHP'),
('winzyl', 'HTML'),
('winzyl', 'HTML'),
('winzyl', 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `user_watched_videos`
--

CREATE TABLE `user_watched_videos` (
  `user` text NOT NULL,
  `video` text NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_watched_videos`
--

INSERT INTO `user_watched_videos` (`user`, `video`, `course`) VALUES
('antolin', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/c-41IY0bOGU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('antolin', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jAlwZe-UrDY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ''),
('winzyl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/c-41IY0bOGU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'CS'),
('winzyl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MJSRlewDy6I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'CS'),
('winzyl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Btbvv9kfLqo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Software Engineering'),
('winzyl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jAlwZe-UrDY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Software Engineering'),
('test', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Tzl0ELY_TiM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'CS'),
('winzyl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Tzl0ELY_TiM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'CS'),
('something', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FWfuCbqA9xQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'PHP'),
('something', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NvsUPJmcGnE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'PYTHON'),
('something', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/68dObg6VMQ0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'HTML'),
('something', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fwhLuPLXzgk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'HTML'),
('something', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/u-PsaJA2nLE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'HTML'),
('something', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sGazlDEJvnA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'HTML'),
('something', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wdu9-0gFXpA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'PYTHON'),
('war2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/68dObg6VMQ0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'HTML'),
('war2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2dZiMBwX_5Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'JAVA'),
('war2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FWfuCbqA9xQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'PHP'),
('not', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FWfuCbqA9xQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'PHP'),
('not', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/64OWnoZD96k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'PHP'),
('winzyl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/68dObg6VMQ0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'HTML'),
('winzyl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2dZiMBwX_5Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'JAVA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `id` (`course_id`),
  ADD KEY `course` (`course`),
  ADD KEY `course_2` (`course`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
