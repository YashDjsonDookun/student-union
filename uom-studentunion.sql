-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 03:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uom-studentunion`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admins`
--

CREATE TABLE `table_admins` (
  `id` int(8) NOT NULL,
  `Username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Badge-Text` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_admins`
--

INSERT INTO `table_admins` (`id`, `Username`, `FullName`, `Password`, `Email`, `Badge-Text`) VALUES
(1, 'admin', 'Yash Djson Dookun', '5f4dcc3b5aa765d61d8327deb882cf99', 'yash.dookun@umail.uom.ac.mu', 'star'),
(2, 'djson', 'Yash Djson Dookun', '5f4dcc3b5aa765d61d8327deb882cf99', 'yash.dookun@umail.uom.ac.mu', 'star');

-- --------------------------------------------------------

--
-- Table structure for table `table_facrep`
--

CREATE TABLE `table_facrep` (
  `id` int(8) NOT NULL,
  `facRep_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `facRep_title` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `facRep_fblink` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facRep_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `facRep_image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facRep_email` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_facrep`
--

INSERT INTO `table_facrep` (`id`, `facRep_name`, `facRep_title`, `facRep_fblink`, `facRep_tel`, `facRep_image`, `facRep_email`) VALUES
(1, 'MOUTIEN Maria Sorenza', 'Facutly of Agriculture', 'https://www.facebook.com/groups/122596727797293/', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/files/facRep/2019/Sorenza.jpg', 'studentrep_foa@umail.uom.ac.mu'),
(2, 'Lallbahadoor Govind', 'Faculty of Engineering', 'https://www.facebook.com/groups/su.engineering/', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/files/facRep/2019/FB_IMG_15600909418894644.jpg', 'studentrep_foe@umail.uom.ac.mu'),
(3, 'SEENUNDUN Satyajeet', 'Faculty of Law and Management', '#', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/files/facRep/2019/See_n.jpg', 'studentrep_flm@umail.uom.ac.mu'),
(4, 'Moorateeah Tashil Rye', 'Faculty of Information, Communication and Digital Technologies', '#', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/files/facRep/2019/Tashil.jpg', 'studentrep_foicdt@umail.uom.ac.mu'),
(5, 'GEERJANAN Adarsh', 'Faculty of Science', '#', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/files/facRep/2019/Geerja.jpg', 'studentrep_fos@umail.uom.ac.mu'),
(6, 'Urvashi Uttara Ducava', 'Faculty of Social Studies and Humanities', 'https://www.facebook.com/groups/su.fssh/', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/files/facRep/2019/Ducava.jpg', 'studentrep_fssh@umail.uom.ac.mu'),
(7, 'MOOTHIEN Alexandra Bianca', 'Centre for Innovative Lifelong Learning', '#', '5-777 7777', 'https://images.gr-assets.com/users/1383029198p6/25139581.jpg', 'bianca.moothien@umail.uom.ac.mu');

-- --------------------------------------------------------

--
-- Table structure for table `table_fbposts`
--

CREATE TABLE `table_fbposts` (
  `id` int(11) NOT NULL,
  `fbPostLink` varchar(800) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_fbposts`
--

INSERT INTO `table_fbposts` (`id`, `fbPostLink`) VALUES
(3, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fuomsu%2Fvideos%2F224872575435809%2F&show_text=1&width=560\" width=\"560\" height=\"476\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" allowFullScreen=\"true\"></iframe>'),
(4, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fuomsu%2Fvideos%2F525292451468963%2F&show_text=1&width=560\" width=\"560\" height=\"476\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" allowFullScreen=\"true\"></iframe>'),
(5, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fuomsu%2Fvideos%2F626715191191751%2F&show_text=1&width=560\" width=\"560\" height=\"407\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" allowFullScreen=\"true\"></iframe>'),
(6, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fuomsu%2Fvideos%2F2140728729499978%2F&show_text=1&width=267\" width=\"267\" height=\"709\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" allowFullScreen=\"true\"></iframe>'),
(7, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fuomsu%2Fvideos%2F2140695062836678%2F&show_text=1&width=267\" width=\"267\" height=\"709\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" allowFullScreen=\"true\"></iframe>'),
(8, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fuomsu%2Fvideos%2F2105963509643167%2F&show_text=1&width=560\" width=\"560\" height=\"464\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" allowFullScreen=\"true\"></iframe>'),
(9, '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FDjShehzadK%2Fvideos%2F656227827887403%2F&show_text=1&width=560\" width=\"560\" height=\"457\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" allowFullScreen=\"true\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `table_ob`
--

CREATE TABLE `table_ob` (
  `ob_id` int(8) NOT NULL,
  `ob_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ob_title` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ob_fblink` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ob_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ob_image` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_ob`
--

INSERT INTO `table_ob` (`ob_id`, `ob_name`, `ob_title`, `ob_fblink`, `ob_tel`, `ob_image`) VALUES
(1, 'Suleïmaan Mahomed', 'President', 'https://www.facebook.com/suleimaan.mahomed', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/Me4.jpg'),
(2, 'Daveen Persand', 'Vice-President', 'https://www.facebook.com/persand.daveen', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/daveen.jpg'),
(3, 'Hantish Mattabadul', 'Treasurer', 'https://www.facebook.com/hantishveer.mattabadul', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/mata.jpg'),
(4, 'Mervyn Courtaud', 'Secretary', 'https://www.facebook.com/mervyn.courtaud', '5-777 7777', 'http://sites2019.uom.ac.mu/studentsunion/images/70891328_2481076851977967_2939219225014697984_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_suggestions`
--

CREATE TABLE `table_suggestions` (
  `id` int(11) NOT NULL,
  `suggestion` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_suggestions`
--

INSERT INTO `table_suggestions` (`id`, `suggestion`) VALUES
(1, 'Hi, my complaint is that members of SU should respond to students messages. At least respond presidents of clubs concerning club affairs.\r\nThanks.'),
(2, 'Hello, I am a Year 2 Student wishing to keep my anonymity; my issue is that I have a Lecturer sending assignments at 2 am in the morning and having the submission due 4 pm. Is this even allowed?'),
(3, 'Just wanted to leave a positive review! Good Job!😁😊\r\n'),
(4, 'Love The New Website!😀👍'),
(5, 'Hello,\r\nI\'ve been having a lot of issues lately with one of my lecturers but nobody from the office (in my faculty) wants to help; they say it\'s my problem. What can I do? I wish to stay anonymous because i\'m scared of the lecturer... 😔'),
(6, 'Good Job with the new Website! 👍'),
(7, 'Some students have been asking for a cinema night for EOY, would it be possible considering the current situation?😶'),
(8, 'Hi, just wondering, is the semester going to be restarted or are we proceeding to our next academic year once uni resume? 😐'),
(9, 'Hi, nothing to say xD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admins`
--
ALTER TABLE `table_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_facrep`
--
ALTER TABLE `table_facrep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_fbposts`
--
ALTER TABLE `table_fbposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_ob`
--
ALTER TABLE `table_ob`
  ADD PRIMARY KEY (`ob_id`);

--
-- Indexes for table `table_suggestions`
--
ALTER TABLE `table_suggestions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_admins`
--
ALTER TABLE `table_admins`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_facrep`
--
ALTER TABLE `table_facrep`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_fbposts`
--
ALTER TABLE `table_fbposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table_ob`
--
ALTER TABLE `table_ob`
  MODIFY `ob_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_suggestions`
--
ALTER TABLE `table_suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
