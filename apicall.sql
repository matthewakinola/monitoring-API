-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2023 at 06:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apicall`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_requests`
--

CREATE TABLE `api_requests` (
  `id` int(11) NOT NULL,
  `request_url` varchar(255) NOT NULL,
  `response_code` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `people_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `mid_name` varchar(30) DEFAULT NULL,
  `addresss` varchar(30) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `experienced` varchar(30) DEFAULT NULL,
  `owners` varchar(30) DEFAULT NULL,
  `fulltime` varchar(30) DEFAULT NULL,
  `parttime` varchar(30) DEFAULT NULL,
  `vehicle_type` varchar(30) DEFAULT NULL,
  `make_model` varchar(50) DEFAULT NULL,
  `model_year` varchar(30) DEFAULT NULL,
  `transmission_type` varchar(30) DEFAULT NULL,
  `interior_trim` varchar(30) DEFAULT NULL,
  `interior_colour` varchar(30) DEFAULT NULL,
  `exterior_colour` varchar(30) DEFAULT NULL,
  `v_licence` varchar(30) DEFAULT NULL,
  `rwc` varchar(30) DEFAULT NULL,
  `auto_insure` varchar(30) DEFAULT NULL,
  `driver_licence` varchar(30) DEFAULT NULL,
  `hackney_permit` varchar(30) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `people_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
  `addresss` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `endpoint_url` varchar(255) NOT NULL,
  `response_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `endpoint_url`, `response_text`, `created_at`) VALUES
(20, 'https://api.getrova.io/graphql', '405', '2023-09-19 21:41:17'),
(21, 'https://passfort.getrova.io', '401', '2023-09-19 21:41:17'),
(22, 'https://passfort.qa.getrova.io/', '401', '2023-09-19 21:46:44'),
(23, 'https://getrova.com', '200', '2023-09-19 22:17:20'),
(24, 'https://api.dev.getrova.io/generateinvitecode', '405', '2023-09-19 22:17:20'),
(25, 'https://passfort.qa.getrova.io/', '401', '2023-09-19 22:17:21'),
(26, 'https://getrova.com', '200', '2023-09-19 22:18:06'),
(27, 'https://api.dev.getrova.io/generateinvitecode', '405', '2023-09-19 22:18:07'),
(28, 'https://passfort.qa.getrova.io/', '401', '2023-09-19 22:18:07'),
(29, 'https://getrova.com', '200', '2023-09-19 22:18:09'),
(30, 'https://api.dev.getrova.io/generateinvitecode', '405', '2023-09-19 22:18:10'),
(31, 'https://passfort.qa.getrova.io/', '401', '2023-09-19 22:18:10'),
(32, 'https://getrova.com', '200', '2023-09-19 22:25:56'),
(33, 'https://api.dev.getrova.io/generateinvitecode', '405', '2023-09-19 22:25:57'),
(34, 'https://passfort.qa.getrova.io/', '200', '2023-09-19 22:25:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_requests`
--
ALTER TABLE `api_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_requests`
--
ALTER TABLE `api_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
