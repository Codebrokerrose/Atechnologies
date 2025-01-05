-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 05:23 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atechnologies`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image_url`, `created_at`) VALUES
(2, 'Website Design', 'Custom web design, responsive programming, theme installation (CMS–WordPress), and E-Commerce.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS54RXWjcOZggfYhDjTlBa2ZKkFA9AVPmKQQ&s', '2024-12-18 20:05:58'),
(3, 'Data Privacy and Protection: Why does it matter for your business?', 'Big Data has reshaped the way people interact, conduct business, and innovate. By managing the volume, velocity, variety, and veracity of data, companies can potentially make data-driven decisions that significantly improve a firm’s efficiency, competitiveness, and profitability. Hence, data is an important asset to any company. Data is not only valuable to companies, but also to cyber criminals. Besides financial loss, stolen valuable data can lead to identity thefts and credit loss, which impose more long-term effects on consumers. In some cases like modified health information, it could even cause life-threatening situations. With the growing numbers in data privacy and security breaches, consumers are becoming more aware of and taking these incidents into account when making a purchase decision. So what are the types of data that companies need to pay attention to?', 'https://www.aytech.ca/wp-content/uploads/2019/05/AdobeStock_217569087-1038x659.jpeg', '2024-12-18 20:07:47'),
(4, 'The Future of Apps: Five Predictions for the App Industry', 'Can you believe that the first smartphone was released only in 1992? Yet it seems as though mobile technology has been around for ages- partly because we’ve become accustomed to it so rapidly. This quick shift into the world of digital has made room for many creations and expansive growth in the mobile tech industry. Not too long ago, apps were introduced and now using mobile applications accounts for approximately 89% of the users time spent on their phone. The app industry is growing quickly and new innovations are emerging daily. The mobile app industry is expected to grow to from $69.7 billion to $188.6 billion by 2020 according to Statista.', 'https://www.aytech.ca/wp-content/uploads/2018/05/smartphone.png', '2024-12-18 20:20:20'),
(12, 'What is a Minimum Viable Product?', 'Minimum Viable Product or MVP is one of the topics that are confusing for entrepreneurs. Especially when all they focus on is their great idea, it’s hard to see why you need to build only part of it before completely implementing the full vision.\r\n\r\nIn this article, we talk about what a Minimum Viable Product is and why it’s important to understand each part of it. How entrepreneurs should approach one and what are the strategies they can use to increase the chance of success and reduce the risks of failure. This is one of the topics we cover extensively in our Roadmap Workshop for Entrepreneurs.', 'https://www.aytech.ca/wp-content/uploads/2017/01/mvp-01.jpg', '2024-12-18 20:28:42');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Ankana Saha', 'ankana@email.com', 'hi sir , i have some doubts on the topic abc.. please clear this out.', '2024-12-27 15:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Id`, `first_name`, `last_name`, `email`, `phone_number`, `qualification`, `subject`, `submitted_at`) VALUES
(1, 'JOYETA', 'SENAPATI', 'joyeta2002s@gmail.com', '9641636751', 'b.sc', 'Mathematics', '2024-12-23 21:21:56'),
(3, 'jone', 'SENAPATI', 'sumijgm123@gmail.com', '9641636750', 'b.sc', 'Mathematics', '2024-12-23 21:23:15'),
(4, 'JOYETA', 'SENAPATI', 'abcdef@gmail.com', '9641636750', 'm.sc', 'Mathematics', '2024-12-29 08:22:31'),
(7, 'JOYETA', 'SENAPATI', 'abcd@gmail.com', '9641636750', 'm.sc', 'Mathematics', '2024-12-29 08:51:26'),
(9, 'JOYETA', 'SENAPATI', 'sdfh@gmail.com', '9641636750', 'b.sc', 'Mathematics', '2024-12-29 13:47:28'),
(11, 'Ankana', 'Saha', 'sukanya@gmail.com', '09641594599', 'bsc', 'mathamatics', '2024-12-29 14:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `linkedin_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `description`, `image_url`, `linkedin_url`) VALUES
(1, 'Amitava Biswas', 'Managing Director of  A Technologies', 'https://media.licdn.com/dms/image/v2/C5103AQE4bILS5eFDjQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1537284944590?e=1740614400&v=beta&t=1MREgJclE8jmz8YxOAqaMzWlUlZO08yQB-XfjMiOSXs', 'https://www.linkedin.com/in/prof-amitava-biswas-5aa4a22a/'),
(2, 'Soham Das', 'Project Co-ordinator of A Technologies', 'https://media.licdn.com/dms/image/v2/C4E03AQFkVPxhj-N_AQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1631379333703?e=1740614400&v=beta&t=UThIITSeS8Z2SPxs5obGmILKH-jTztEc8Inqz-3_INI', 'https://www.linkedin.com/in/soham-das07/'),
(3, 'Ankana Saha', 'Software Developer of A Technologies', 'https://media.licdn.com/dms/image/v2/D5603AQFRpnra-jcP8w/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1728985203018?e=1741824000&v=beta&t=pQuYfTf2T911iPFHyW0VfvCUVuDzVd0cfgSihMHivzI', 'https://www.linkedin.com/in/ankana-saha-604742271/'),
(4, 'Anupama Halder ', 'Faculty of A Technologies', 'https://media.licdn.com/dms/image/v2/D5603AQEbbH6YYQ5AXw/profile-displayphoto-shrink_800_800/B56ZP9RnoAG8Ac-/0/1735121075183?e=1740614400&v=beta&t=i1FzfmUAG5o0K2KZ2frG5imOGMGLxgttbT6rFkMcE6k', 'https://www.linkedin.com/in/anupama-halder7/');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `center` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `name`, `email`, `password`, `phone`, `month`, `course`, `semester`, `center`, `created_at`) VALUES
(1, 'JOYETA SENAPATI', 'joyeta2002s@gmail.com', '$2y$10$rT.X2AWPlnaxtw2DN/MKMuePZ23QAJRtT95njsutsIJqDkYTAMEpO', '9641636751', 'January', 'Programming', '5', 'Jhargram', '2024-12-25 16:27:41'),
(3, 'JOYETA SENAPATI', 'sumijgm123@gmail.com', '$2y$10$fk9AjEIzQBHNJ2EKVYoe4u0nS6uWlW0Mlg5ugr2491YKOwTAa2bSi', '96416 36750', 'February', 'Science', '4', 'asdfghjk', '2024-12-25 16:31:37'),
(5, 'abc', 'abc@gmail.com', '12345', '9123456789', 'March', 'Design', '7', 'Jargram', '2024-12-25 16:42:07'),
(6, 'ABC', 'jui2002s@gmail.com', 'Joyeta@1234567', '96416 36750', 'May', 'Design', '3', 'kolkata', '2024-12-25 16:43:35'),
(7, 'sdfg', 'joyeta2002s@edunetmail.com', 'asd123', '9123456789', 'August', 'Marketing', '3', 'sdfg', '2024-12-25 16:49:25'),
(8, 'JOYETA SENAPATI', 'abcdef@gmail.com', 'Jutres@1234', '9087654567', 'March', 'Design', '4', 'kolkata', '2024-12-29 08:25:41'),
(9, 'rina', 'rina123@gmail.com', 'Rina@1234', '6295830317', 'June', 'Science', '5', 'Jhargram', '2024-12-29 08:46:17'),
(11, 'Ankana Saha', 'sukanya@gmail.com', '$2y$10$4RSkqaQsyWNTD8VUy1.diuxv/fEpBqIekaiXML1DrreaO.dWugbrq', '09641594599', 'April', 'Programming', '4', '183, Falta,Belsingha, Saha para, Iskcon temple, South Twenty Four Parganas District, West Bengal - 743504', '2024-12-29 15:12:42'),
(12, 'Ankana Saha', 'ankana@email.com', '$2y$10$3K2O5YNJ4LZ02mrFjoLi9uij6qQ9s77k1DcwgWvXfNg6tZzNHolxy', '09641594599', 'April', 'Programming', '4', '183, Falta,Belsingha, Saha para, Iskcon temple, South Twenty Four Parganas District, West Bengal - 743504', '2024-12-29 15:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `title`, `content`, `video_url`, `created_at`) VALUES
(1, 'canva', 'content creation : Create content that solves a problem, answers a question, or entertains. Always ask, \"What value does this bring to my audience?\"Incorporate images, videos, infographics, and charts to make your content more engaging. Visual elements often communicate faster and hold attention longer.', 'https://content-management-files.canva.com/db9aa1cb-8fac-43a6-8353-db791e1e621e/1021766624.mp4', '2024-12-29 15:58:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
