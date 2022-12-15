-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 10:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--
-- Dumping data for table `activity`
--

-- INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_description`, `created_at`, `updated_at`) VALUES
-- (1, 'Academic Activity', '', NULL, NULL),
-- (2, 'Ward Duty', '', NULL, NULL),
-- (3, 'Ward Round', '', NULL, NULL),
-- (4, 'On Call', '', NULL, NULL),
-- (5, 'OPD Clinic', '', NULL, NULL);

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_description`, `created_at`, `updated_at`) VALUES
(1, 'Ward Round', '', NULL, NULL),
(2, 'Ward Duty', '', NULL, NULL),
(3, 'Academic Activity', '', NULL, NULL),
(4, 'OPD Clinic', '', NULL, NULL),
(5, 'Executive Clinic', '', NULL, NULL),
(6, 'OT Day', '', NULL, NULL),
(7, 'Meeting', '', NULL, NULL),
(8, 'On call Duty', '', NULL, NULL),
(9, '24-H Call Duty', '', NULL, NULL),
(10, '32-H Call Duty', '', NULL, NULL),
(11, 'Workshop/Training', '', NULL, NULL);


-- --------------------------------------------------------

