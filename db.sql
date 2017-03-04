-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2017 at 02:52 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30-pl0-gentoo

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mbax4dc9`
--

-- --------------------------------------------------------

--
-- Table structure for table `attended_events`
--

CREATE TABLE `attended_events` (
  `user_id` int(2) NOT NULL,
  `event_id` int(2) NOT NULL,
  `attended` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attended_events`
--

INSERT INTO `attended_events` (`user_id`, `event_id`, `attended`) VALUES
(1, 1, 1),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(2) NOT NULL,
  `creator_id` int(2) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `duration` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `creator_id`, `title`, `location`, `description`, `date`, `time_start`, `time_end`, `duration`) VALUES
(1, 3, 'SKhack', 'Fred Perry House', 'Best hackathon ever!', '2017-03-03', '09:00:00', '21:00:00', 12),
(2, 3, 'Belated BIrthday Party', 'Raluca\'s House', 'big sesh BOB', '2017-03-10', '19:00:00', '23:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `event_tags`
--

CREATE TABLE `event_tags` (
  `event_id` int(2) NOT NULL,
  `tag_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_tags`
--

INSERT INTO `event_tags` (`event_id`, `tag_id`) VALUES
(1, 8),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(2) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'health'),
(2, 'education'),
(3, 'animals'),
(4, 'children'),
(5, 'sports'),
(6, 'art'),
(7, 'religion'),
(8, 'tech');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `total_hrs` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pwd`, `total_hrs`) VALUES
(1, 'Alex', 'alex@alex.com', '123', 23),
(2, 'SImona', 'simona@simona.com', '123', 0),
(3, 'Raluca', 'raluca@raluca.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `INDEX` (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `INDEX` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;