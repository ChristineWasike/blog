-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2021 at 01:05 PM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `body`, `image`, `published`, `created_at`) VALUES
(12, 29, 6, 'One day your life will flash before your eyes', '&lt;p&gt;One day your life will flash before your eyes&lt;/p&gt;', '1622016658_vadim-artyukhin-ffMMFrlfbsk-unsplash.jpg', 1, '2021-05-24 14:57:32'),
(13, 29, 2, 'You have to believe that things will get better', '&lt;p&gt;You have to believe that things will get better. Because the truth is that they will, and we need to be ready for that.&lt;/p&gt;', '1622016084_andrea-davis-lfaqs0ZjmGo-unsplash.jpg', 1, '2021-05-24 15:04:56'),
(14, 29, 6, 'The spectacle before us was indeed sublime', '&lt;p&gt;The spectacle before us was indeed sublime. It was a sight to see&lt;/p&gt;', '1621858075_Screenshot from 2021-05-19 12-06-52.png', 1, '2021-05-24 15:07:55'),
(16, 29, 5, 'Either give me more water or leave me alone', '&lt;p&gt;Either give me more water or leave me alone. That\'s all I ask&lt;/p&gt;', '1622020773_kevin-laminto-AxuS6CFO1eM-unsplash.jpg', 1, '2021-05-24 15:10:00'),
(18, 29, 5, 'A short story in history', '&lt;p&gt;One of the most emotionally daunting experiences for me over the past few months has been losing people who were once my friends. This is particularly so because for someone like me who is extremely slow to make friends, losing the few that I have can be quite heart-breaking. Why did I dissolve those friendships? Simply put, they weren&rsquo;t able to confront me and call out my missteps when I made terrible mistakes; they simply kept mute, overlooked it, or gave me the silent treatment. You see, I am a very flawed human. Too flawed, almost. But I am also very passionate about personal growth and learning from mistakes. Living at the epicentre of this dichotomy can sometimes make me seem like a hypocrite. Especially when you juxtapose my actions with the beliefs and values I supposedly uphold. But, for what it&rsquo;s worth, I believe that there is more potential for learning.&lt;/p&gt;', '1622027818_Git Session.png', 1, '2021-05-26 14:16:58'),
(19, 29, 5, 'Whatever Christine wants to call it', '&lt;p&gt;Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it. Whatever Christine wants to call it.&amp;nbsp;&lt;/p&gt;', '1622031386_kevin-laminto-AxuS6CFO1eM-unsplash.jpg', 1, '2021-05-26 15:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Finance', '<p>It\'s important to be financially free. Check it!</p>'),
(5, 'Entrepreneurship', '<p>Entrepreneurship is a great risk on faith, some people are just cut out for it.</p>'),
(6, 'Life', '<p>Life is a journey</p>'),
(7, 'Education', '<p>Education is key</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(29, 1, 'administrator', 'admin@gmail.com', '$2y$10$vzYrsjNQELMHbrwfWICUF.x8hqNaL.nyOifCFVc23ZfJLCnJP0H.a', '2021-05-24 11:40:19'),
(30, 1, 'christine_wasike', 'christinewasike@gmail.com', '$2y$10$Ou.j2vWIpgYdth/6nljlTuJvPNnufQG6SPApyTFmJPY3qUopmnw4i', '2021-07-21 10:13:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
