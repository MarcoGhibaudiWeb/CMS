-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2017 at 05:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `94238_CMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `user_id`, `comment`, `date`) VALUES
(12, 2, 2, 'Comment 1', '2017-08-04 14:55:50'),
(13, 6, 2, 'comment 1', '2017-08-04 15:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `postpic` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `lineup` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `title`, `postpic`, `content`, `day`, `venue`, `lineup`) VALUES
(2, 2, 'REIBU ãƒ¬ã‚¤ãƒ–', 'assets/event3.jpg', 'A new vibrant italian Party is growing in Milan keeping throwing amazing parties with names from all Europe.\r\n\r\nThis Saturday Reibu in the box meets Undersound to delight the italian audience with the talent of our Resident Harry McCanna.', '1212-12-12', 'The Dance Tunnel, Madrid', 'HARRY MCCANNA |  ENRICO VIVALDI'),
(3, 2, 'CARTULIS VA', 'assets/event4.jpg', 'CARTULIS Sunday VA consists on showcasing djs around the music we believe in and with that deliver to the dance floor the biggest variety on house and techno with all their sub genres.\r\n\r\nThe night will consist in extended sets from all the ones involved in the line up and give the opportunity to each artist to develop their set into a journey. You will be able to really know what each of them are all about.\r\n\r\nThe Pickle Factory is an intimate venue with what is most important, a warm, clear and loud sound system.\r\n\r\nWell, thatâ€™s all, simple but with good intention. \r\nWe see you at The Pickle Factory.', '1311-03-12', 'The Red Box, London', '???  ???  ???'),
(4, 2, 'UNDERSOUND #26', 'assets/event1.jpg', 'After months in the making, we have finally invited Madrid based artist DJF Aka Ideograma to play at our party. Whilst the music heads will know him for his amazing production skills and releases on labels such as Semantica Records. Ideograma is also an amazing dj with more than 20 years of experience. Since his debut in 1992 he has never stopped delighting audiences with his talent, good taste and ability to do magic on the decks.\r\n\r\nQuest is one of the most talented young djs we have come across on our journey. He has exceptional music taste, solid mixing skills, and a very positive personality. It is a rarity to come across a dj that is so young but so confident on the decks at the same time. We are very happy to welcome him to our party.\r\n\r\nSohrab is steadily becoming a regular at our events, he is a skilled selector with great technique and one of our local favourites, and it\'s always a pleasure to have him with us.\r\n\r\nSee you on the dancefloor!', '1313-03-12', 'The Flat 5, London', 'DJ F |  QUEST |  SOHRAB'),
(5, 2, 'Harry\' Showcase', 'assets/harry.jpg', 'The development of his forward-pushing sound was then marked by the \'Schraper\' EP in 2012 on Ostgut, emphasising Harry\'s ability to produce flowing, bass-heavy club tracks, floating between classic House and contemporary Techno.\r\n\r\nHarry also releases music as \'Third Side\' alongside Lucretio and Marieu - better known as the Analogue Cops. Together in 2012 they released their \'Unified Fields\' LP on Restoration Records, exploring the dynamics of a live-jam studio environment. To the \'Cops dirt and raw punch, Harry brings clarity and poise, and the team continue to take their hardware-only Live show to clubs worldwide. Continuing the trend of working with strong, cultured labels, Steffi also released original material on labels like NYC\'s Underground Quality, or Holland\'s Field Recordings.\r\n\r\nAlways looking forward, Harry\'s field of influence continues to expand. His work as a DJ, distinctive productions, and sought after releases on her own labels, all reflect the love he has for vinyl and help to celebrate the culture of underground dance music.', '1313-03-21', 'Robert Johnson', 'HARRY MCCANNA |  ENRICO VIVALDI'),
(6, 2, 'ADG\'s Showcase', 'assets/etienne.jpg', 'Born in 1967 in Mexico City, Harry is the leading Mexican artist of the generation that emerged in the wake of the influence of Gabriel Orozco and Francis AlÃ¿s. Ortega studied with Orozco in the informal studio class established in the older artistâ€™s atelier in the late 1980s. There, he absorbed the acute attention to form associated with Orozcoâ€™s sculpture and photography, subsequently refining his own visual and conceptual vocabulary that emerged through his focus on the points of intersection between architecture, sculpture, and spatial analysis.\r\n\r\nHarryâ€™s work can be found in myriad of public and private art collections both in the United States and abroad, and has been seen in numerous exhibitions worldwide. He currently lives and works in Berlin, Germany, and Mexico City.', '3131-03-12', 'The Pickle Factory', 'Onur Ozer | Etienne | ADJ'),
(7, 2, 'SEEKERS IBIZA', 'assets/event2.jpg', 'This week the european scene is gathering for the birthday of Alex Picone\'s beatiful creation, Seekers is back in Ibiza!\r\n\r\nSunday the party will start at 16:00 in the beautiful Sunset Ashram Ibiza ( Cala Comte Beach, Ibiza ) and we continue from Midnight at Eden Ibiza( San Antonio Ibiza) where we found the best sound system on the island made by Void.\r\n\r\nBoth venues are close to each other....10 minutes drive!', '3313-03-12', 'Oval Space', 'FRANCESCO DEL GARDA  NICOLAS LUTZ  ALEX PICONE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `profilepic` varchar(50) DEFAULT 'assets/default_profile_image.png',
  `status` varchar(10) DEFAULT NULL,
  `banned` varchar(3) DEFAULT 'NO',
  `activation` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `password`, `email`, `username`, `profilepic`, `status`, `banned`, `activation`) VALUES
(1, 'marco', 'ghibaudi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '94238uk@saeinstitute.edu', 'Username2', 'assets/etienne.jpg', NULL, 'YES', NULL),
(2, 'antonio', 'antonio', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'marco.ghibaudi@live.it', 'Username 1', 'assets/harry.jpg', 'admin', 'NO', ''),
(3, 'andrea', 'antonio', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'email@gmail.com', 'Username 2', 'assets/gustav.jpg', NULL, 'NO', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
