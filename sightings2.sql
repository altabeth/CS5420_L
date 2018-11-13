-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 13, 2018 at 03:21 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Team_04`
--

-- --------------------------------------------------------

--
-- Table structure for table `sightings`
--

CREATE TABLE `sightings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` text,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sightings`
--

INSERT INTO `sightings` (`id`, `user_id`, `username`, `updated_at`, `created_at`, `image`, `location`, `description`, `rank`) VALUES
(11, 0, NULL, NULL, NULL, '1542063927.png', NULL, NULL, 0),
(12, 0, NULL, NULL, NULL, '1542064718.jpg', 'location test', 'yipes!', 0),
(13, 0, NULL, NULL, NULL, '1542077914.png', 'mn', 'big', 0),
(14, 0, NULL, NULL, '2018-11-13 03:06:21', '1542078381.jpg', 'co', 'eek', 0),
(15, 11, NULL, NULL, '2018-11-13 03:12:29', '1542078749.png', NULL, NULL, 0),
(16, 11, NULL, NULL, '2018-11-13 03:15:57', '1542078957.png', 'Roswell', 'text', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sightings`
--
ALTER TABLE `sightings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sightings`
--
ALTER TABLE `sightings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
