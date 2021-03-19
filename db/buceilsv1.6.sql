-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2021 at 07:35 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16218880_buceils`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(30) NOT NULL,
  `admin_mname` varchar(30) NOT NULL,
  `admin_lname` varchar(30) NOT NULL,
  `admin_position` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_mname`, `admin_lname`, `admin_position`, `username`, `password`, `photo`, `reg_date`) VALUES
(1, 'John', 'UCANTSEEME', 'Cena', 'wrestler', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'user.png', '2021-03-16 06:53:39'),
(2, 'Mendrix', 'Clarianes', 'Manlangit', 'dogstyle', 'admin2', '827ccb0eea8a706c4c34a16891f84e7b', 'BUHS LOGO.png', '2021-03-16 06:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `admin_activity_log`
--

CREATE TABLE `admin_activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `activity_description` varchar(150) NOT NULL,
  `activity_date` date DEFAULT NULL,
  `activity_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_activity_log`
--

INSERT INTO `admin_activity_log` (`activity_log_id`, `admin_id`, `activity_description`, `activity_date`, `activity_time`) VALUES
(20, 1, 'Login', '2021-03-09', '17:38:23'),
(21, 1, 'SELECT * FROM `activity_log`', '2021-03-09', '17:39:09'),
(22, 1, 'Login', '2021-03-10', '15:37:42'),
(23, 1, 'Login', '2021-03-10', '15:49:53'),
(25, 1, 'Login', '2021-03-10', '15:51:00'),
(26, 1, 'Logout', '2021-03-10', '15:51:03'),
(27, 2, 'Login', '2021-03-10', '16:00:12'),
(28, 1, 'Login', '2021-03-10', '16:00:53'),
(29, 1, 'Logout', '2021-03-10', '16:01:08'),
(30, 2, 'Logout', '2021-03-10', '16:03:27'),
(32, 1, 'Logout', '2021-03-10', '16:03:55'),
(33, 2, 'Login', '2021-03-10', '16:04:01'),
(36, 2, 'Login', '2021-03-10', '16:05:21'),
(37, 1, 'Logout', '2021-03-10', '16:05:24'),
(38, 1, 'Login', '2021-03-10', '16:05:33'),
(39, 1, 'Login', '2021-03-10', '16:09:50'),
(40, 1, 'Login', '2021-03-10', '16:12:41'),
(41, 1, 'Logout', '2021-03-10', '16:12:45'),
(42, 1, 'Login', '2021-03-10', '16:12:58'),
(43, 1, 'Login', '2021-03-10', '16:12:58'),
(44, 1, 'Login', '2021-03-10', '16:13:00'),
(45, 1, 'Login', '2021-03-10', '16:13:19'),
(46, 1, 'Logout', '2021-03-10', '16:13:32'),
(47, 2, 'Login', '2021-03-10', '16:13:40'),
(48, 1, 'Login', '2021-03-10', '16:13:52'),
(49, 1, 'Login', '2021-03-10', '16:15:12'),
(50, 1, 'Login', '2021-03-10', '16:15:25'),
(51, 1, 'Login', '2021-03-10', '16:16:37'),
(52, 2, 'Login', '2021-03-10', '16:17:24'),
(53, 2, 'Logout', '2021-03-10', '16:17:37'),
(54, 1, 'Login', '2021-03-10', '16:18:05'),
(55, 2, 'Logout', '2021-03-10', '16:18:14'),
(56, 1, 'Login', '2021-03-10', '16:35:09'),
(57, 1, 'Login', '2021-03-10', '16:39:24'),
(58, 1, 'Login', '2021-03-10', '16:48:03'),
(59, 1, 'Login', '2021-03-10', '16:49:30'),
(60, 1, 'Logout', '2021-03-10', '16:50:07'),
(61, 2, 'Login', '2021-03-10', '16:50:12'),
(62, 2, 'Logout', '2021-03-10', '16:50:21'),
(63, 1, 'Login', '2021-03-10', '17:01:56'),
(64, 2, 'Login', '2021-03-10', '17:02:05'),
(65, 2, 'Login', '2021-03-10', '17:04:54'),
(66, 2, 'Logout', '2021-03-10', '17:05:02'),
(67, 1, 'Login', '2021-03-10', '17:05:08'),
(68, 1, 'Login', '2021-03-10', '17:05:43'),
(69, 2, 'Login', '2021-03-10', '17:05:47'),
(70, 2, 'Login', '2021-03-10', '17:06:44'),
(71, 2, 'Login', '2021-03-10', '17:07:32'),
(72, 2, 'Logout', '2021-03-10', '17:07:40'),
(73, 1, 'Login', '2021-03-11', '15:24:27'),
(74, 1, 'Login', '2021-03-11', '17:46:29'),
(75, 1, 'Login', '2021-03-12', '11:21:32'),
(76, 1, 'Login', '2021-03-12', '11:42:09'),
(77, 1, 'Logout', '2021-03-12', '11:42:28'),
(78, 1, 'Login', '2021-03-12', '11:48:36'),
(79, 2, 'Login', '2021-03-12', '11:48:58'),
(80, 2, 'Logout', '2021-03-12', '11:50:31'),
(81, 1, 'Login', '2021-03-12', '12:08:10'),
(82, 1, 'Login', '2021-03-12', '12:17:37'),
(83, 1, 'Login', '2021-03-12', '12:24:16'),
(84, 1, 'Login', '2021-03-12', '12:26:37'),
(85, 1, 'Logout', '2021-03-12', '12:28:56'),
(86, 1, 'Login', '2021-03-12', '12:29:01'),
(87, 2, 'Login', '2021-03-12', '12:31:29'),
(88, 2, 'Logout', '2021-03-12', '12:35:27'),
(89, 2, 'Login', '2021-03-12', '12:35:33'),
(90, 2, 'Logout', '2021-03-12', '12:38:15'),
(91, 1, 'Login', '2021-03-12', '12:38:21'),
(92, 2, 'Login', '2021-03-12', '12:45:16'),
(93, 2, 'Logout', '2021-03-12', '12:46:48'),
(94, 1, 'Logout', '2021-03-12', '12:46:51'),
(95, 1, 'Login', '2021-03-12', '12:46:55'),
(96, 2, 'Login', '2021-03-12', '12:46:59'),
(97, 1, 'Logout', '2021-03-12', '12:48:35'),
(98, 1, 'Login', '2021-03-12', '12:48:46'),
(99, 1, 'Logout', '2021-03-12', '12:49:56'),
(100, 1, 'Login', '2021-03-12', '12:50:42'),
(101, 1, 'Login', '2021-03-12', '12:51:19'),
(102, 2, 'Login', '2021-03-12', '12:51:45'),
(103, 1, 'Logout', '2021-03-12', '13:05:00'),
(104, 1, 'Login', '2021-03-12', '13:10:03'),
(105, 1, 'Logout', '2021-03-12', '13:10:23'),
(106, 2, 'Logout', '2021-03-12', '13:11:16'),
(107, 1, 'Login', '2021-03-12', '13:12:31'),
(108, 1, 'Logout', '2021-03-12', '13:12:49'),
(109, 1, 'Login', '2021-03-12', '13:13:52'),
(110, 1, 'Login', '2021-03-12', '13:17:35'),
(111, 1, 'Login', '2021-03-12', '13:28:17'),
(112, 1, 'Login', '2021-03-12', '13:34:13'),
(113, 1, 'Login', '2021-03-12', '13:34:28'),
(114, 1, 'Logout', '2021-03-12', '13:37:59'),
(115, 1, 'Login', '2021-03-12', '14:05:17'),
(116, 1, 'Logout', '2021-03-12', '14:05:26'),
(117, 2, 'Login', '2021-03-12', '18:43:21'),
(118, 1, 'Login', '2021-03-12', '18:55:57'),
(119, 1, 'Logout', '2021-03-12', '18:57:07'),
(120, 1, 'Login', '2021-03-12', '18:57:32'),
(121, 2, 'Logout', '2021-03-12', '19:07:27'),
(122, 2, 'Login', '2021-03-12', '19:12:30'),
(123, 2, 'Logout', '2021-03-12', '19:14:20'),
(124, 2, 'Login', '2021-03-12', '19:17:34'),
(125, 1, 'Login', '2021-03-12', '19:17:41'),
(126, 2, 'Logout', '2021-03-12', '19:30:39'),
(127, 2, 'Login', '2021-03-12', '19:34:38'),
(128, 2, 'Logout', '2021-03-12', '19:36:17'),
(129, 1, 'Login', '2021-03-12', '19:36:25'),
(130, 1, 'Logout', '2021-03-12', '19:36:36'),
(131, 1, 'Login', '2021-03-12', '19:36:48'),
(132, 1, 'Logout', '2021-03-12', '19:36:52'),
(133, 1, 'Login', '2021-03-12', '19:38:32'),
(134, 1, 'Logout', '2021-03-12', '19:39:42'),
(135, 1, 'Login', '2021-03-12', '19:55:18'),
(136, 1, 'Logout', '2021-03-12', '19:55:21'),
(137, 1, 'Login', '2021-03-12', '19:56:25'),
(138, 1, 'Logout', '2021-03-12', '19:56:43'),
(139, 1, 'Login', '2021-03-12', '19:57:17'),
(140, 1, 'Logout', '2021-03-12', '19:57:27'),
(141, 1, 'Login', '2021-03-12', '19:57:41'),
(142, 1, 'Logout', '2021-03-12', '19:57:44'),
(143, 2, 'Login', '2021-03-12', '20:02:41'),
(144, 2, 'Logout', '2021-03-12', '20:02:46'),
(145, 2, 'Login', '2021-03-12', '21:03:42'),
(146, 2, 'Logout', '2021-03-12', '21:04:00'),
(147, 1, 'Login', '2021-03-12', '21:10:03'),
(148, 1, 'Logout', '2021-03-12', '21:10:07'),
(149, 1, 'Login', '2021-03-12', '21:20:49'),
(150, 1, 'Logout', '2021-03-12', '21:21:14'),
(151, 1, 'Login', '2021-03-12', '21:36:52'),
(152, 1, 'Logout', '2021-03-12', '21:36:55'),
(153, 1, 'Login', '2021-03-12', '21:37:43'),
(154, 1, 'Logout', '2021-03-12', '21:38:07'),
(155, 1, 'Login', '2021-03-12', '21:39:07'),
(156, 1, 'Logout', '2021-03-12', '21:39:36'),
(157, 1, 'Login', '2021-03-12', '21:59:25'),
(158, 1, 'Logout', '2021-03-12', '21:59:29'),
(159, 2, 'Login', '2021-03-12', '22:06:14'),
(160, 2, 'Logout', '2021-03-12', '22:06:18'),
(161, 2, 'Login', '2021-03-12', '00:08:26'),
(162, 2, 'Logout', '2021-03-12', '00:08:34'),
(163, 2, 'Login', '2021-03-12', '00:10:58'),
(164, 2, 'Logout', '2021-03-12', '00:13:49'),
(165, 2, 'Login', '2021-03-12', '00:13:55'),
(166, 2, 'Logout', '2021-03-12', '00:14:12'),
(167, 1, 'Login', '2021-03-12', '00:14:35'),
(168, 1, 'Logout', '2021-03-12', '00:14:53'),
(169, 1, 'Login', '2021-03-12', '00:17:02'),
(170, 1, 'Logout', '2021-03-12', '00:17:46'),
(171, 1, 'Login', '2021-03-12', '00:18:19'),
(172, 1, 'Logout', '2021-03-12', '00:18:51'),
(173, 1, 'Login', '2021-03-12', '00:19:43'),
(174, 1, 'Logout', '2021-03-12', '00:23:25'),
(175, 1, 'Login', '2021-03-12', '00:23:30'),
(176, 1, 'Logout', '2021-03-12', '00:23:49'),
(177, 1, 'Login', '2021-03-12', '00:25:40'),
(178, 1, 'Logout', '2021-03-12', '00:25:58'),
(179, 1, 'Login', '2021-03-12', '00:29:40'),
(180, 1, 'Logout', '2021-03-12', '00:30:18'),
(181, 1, 'Login', '2021-03-12', '00:31:51'),
(182, 1, 'Logout', '2021-03-12', '00:32:06'),
(183, 2, 'Login', '2021-03-12', '00:33:43'),
(184, 2, 'Logout', '2021-03-12', '00:34:06'),
(185, 1, 'Login', '2021-03-12', '00:38:58'),
(186, 1, 'Logout', '2021-03-12', '00:40:25'),
(187, 1, 'Login', '2021-03-12', '00:40:44'),
(188, 2, 'Login', '2021-03-12', '00:45:56'),
(189, 2, 'Logout', '2021-03-12', '00:45:59'),
(190, 1, 'Login', '2021-03-12', '00:56:03'),
(191, 1, 'Logout', '2021-03-12', '00:56:11'),
(192, 2, 'Login', '2021-03-12', '00:58:32'),
(193, 2, 'Logout', '2021-03-12', '00:58:35'),
(194, 1, 'Login', '2021-03-13', '20:36:50'),
(195, 1, 'Login', '2021-03-14', '15:47:35'),
(196, 1, 'Login', '2021-03-14', '20:29:53'),
(197, 1, 'Login', '2021-03-14', '20:45:12'),
(198, 1, 'Logout', '2021-03-14', '20:46:45'),
(199, 1, 'Login', '2021-03-14', '20:56:18'),
(200, 1, 'Logout', '2021-03-14', '20:56:38'),
(201, 1, 'Login', '2021-03-14', '20:56:41'),
(202, 1, 'Logout', '2021-03-14', '21:18:40'),
(203, 2, 'Login', '2021-03-14', '21:20:06'),
(204, 2, 'Logout', '2021-03-14', '21:20:37'),
(205, 2, 'Login', '2021-03-14', '21:33:51'),
(206, 1, 'Login', '2021-03-14', '22:33:00'),
(207, 1, 'Logout', '2021-03-14', '22:34:30'),
(208, 1, 'Login', '2021-03-14', '22:37:34'),
(209, 1, 'Logout', '2021-03-14', '22:39:43'),
(210, 1, 'Login', '2021-03-15', '12:28:15'),
(211, 1, 'Logout', '2021-03-15', '12:28:22'),
(212, 1, 'Login', '2021-03-15', '12:28:29'),
(213, 1, 'Logout', '2021-03-15', '13:18:18'),
(214, 1, 'Login', '2021-03-15', '13:18:39'),
(215, 1, 'Login', '2021-03-15', '17:57:08'),
(216, 1, 'Login', '2021-03-15', '17:57:08'),
(217, 1, 'Login', '2021-03-15', '18:15:16'),
(218, 1, 'Login', '2021-03-15', '20:47:46'),
(219, 1, 'Login', '2021-03-16', '08:34:36'),
(220, 1, 'Login', '2021-03-16', '08:54:25'),
(221, 1, 'Login', '2021-03-16', '09:17:51'),
(222, 1, 'Login', '2021-03-16', '10:46:34'),
(223, 2, 'Login', '2021-03-16', '10:47:13'),
(224, 1, 'Login', '2021-03-16', '10:49:46'),
(225, 1, 'Logout', '2021-03-16', '10:52:13'),
(226, 1, 'Login', '2021-03-16', '10:52:17'),
(227, 1, 'Login', '2021-03-16', '10:57:59'),
(228, 1, 'Login', '2021-03-16', '10:58:05'),
(229, 1, 'Login', '2021-03-16', '11:15:13'),
(230, 1, 'Login', '2021-03-16', '11:31:18'),
(231, 1, 'Logout', '2021-03-16', '11:31:21'),
(232, 1, 'Login', '2021-03-16', '11:32:36'),
(233, 1, 'Logout', '2021-03-16', '11:32:39'),
(234, 1, 'Login', '2021-03-16', '11:34:29'),
(235, 1, 'Login', '2021-03-16', '11:34:55'),
(236, 1, 'Logout', '2021-03-16', '11:40:12'),
(237, 1, 'Login', '2021-03-16', '11:40:16'),
(238, 1, 'Logout', '2021-03-16', '11:40:23'),
(239, 1, 'Login', '2021-03-16', '11:40:31'),
(240, 1, 'Logout', '2021-03-16', '11:40:39'),
(241, 1, 'Login', '2021-03-16', '11:43:24'),
(242, 1, 'Logout', '2021-03-16', '11:44:12'),
(243, 1, 'Login', '2021-03-16', '11:44:17'),
(244, 1, 'Login', '2021-03-16', '11:45:59'),
(245, 1, 'Logout', '2021-03-16', '11:46:46'),
(246, 1, 'Login', '2021-03-16', '11:48:01'),
(247, 1, 'Logout', '2021-03-16', '11:50:38'),
(248, 1, 'Login', '2021-03-16', '12:01:40'),
(249, 1, 'Logout', '2021-03-16', '12:03:03'),
(250, 2, 'Login', '2021-03-16', '12:03:28'),
(251, 2, 'Logout', '2021-03-16', '12:03:57'),
(252, 1, 'Logout', '2021-03-16', '12:05:14'),
(253, 1, 'Login', '2021-03-16', '12:05:27'),
(254, 1, 'Logout', '2021-03-16', '12:17:17'),
(255, 1, 'Login', '2021-03-16', '12:24:25'),
(256, 2, 'Login', '2021-03-16', '13:20:33'),
(257, 2, 'Login', '2021-03-16', '13:22:34'),
(258, 1, 'Login', '2021-03-16', '13:33:33'),
(259, 1, 'Login', '2021-03-16', '14:22:23'),
(260, 1, 'Logout', '2021-03-16', '14:50:16'),
(261, 1, 'Login', '2021-03-16', '14:51:11'),
(262, 1, 'Login', '2021-03-16', '14:57:14'),
(263, 1, 'Logout', '2021-03-16', '14:57:54'),
(264, 1, 'Login', '2021-03-16', '14:57:57'),
(265, 1, 'Logout', '2021-03-16', '14:58:34'),
(266, 1, 'Login', '2021-03-16', '14:58:37'),
(267, 1, 'Logout', '2021-03-16', '14:59:53'),
(268, 2, 'Login', '2021-03-16', '14:59:57'),
(269, 2, 'Logout', '2021-03-16', '15:00:52'),
(270, 1, 'Login', '2021-03-16', '15:01:01'),
(271, 1, 'Logout', '2021-03-16', '15:04:36'),
(272, 1, 'Login', '2021-03-16', '15:07:59'),
(273, 1, 'Login', '2021-03-16', '16:48:39'),
(274, 2, 'Login', '2021-03-16', '17:34:15'),
(275, 2, 'Logout', '2021-03-16', '17:34:34'),
(276, 1, 'Login', '2021-03-17', '08:50:46'),
(277, 1, 'Login', '2021-03-17', '09:24:16'),
(278, 1, 'Login', '2021-03-17', '10:36:39'),
(279, 1, 'Login', '2021-03-17', '13:45:04'),
(280, 1, 'Login', '2021-03-17', '13:51:42'),
(281, 1, 'Login', '2021-03-17', '14:07:32'),
(282, 1, 'Login', '2021-03-17', '14:13:51'),
(283, 1, 'Login', '2021-03-17', '14:14:55'),
(284, 1, 'Added treasurer', '2021-03-17', '14:48:32'),
(285, 1, 'Added auditor', '2021-03-17', '14:57:35'),
(286, 1, 'Login', '2021-03-17', '15:12:42'),
(287, 1, 'Added Auditor', '2021-03-17', '15:49:20'),
(288, 1, 'Login', '2021-03-17', '01:05:58'),
(289, 1, 'Login', '2021-03-17', '01:07:30'),
(290, 1, 'Logout', '2021-03-17', '01:12:20'),
(291, 1, 'Login', '2021-03-17', '01:12:24'),
(292, 1, 'Login', '2021-03-17', '01:13:06'),
(293, 2, 'Login', '2021-03-17', '01:13:32'),
(294, 2, 'Logout', '2021-03-17', '01:13:44'),
(295, 1, 'Login', '2021-03-17', '01:13:52'),
(296, 1, 'Logout', '2021-03-17', '01:16:43'),
(297, 1, 'Login', '2021-03-18', '12:11:37'),
(298, 1, 'Login', '2021-03-18', '12:21:05'),
(299, 1, 'Login', '2021-03-18', '14:19:14'),
(300, 1, 'Login', '2021-03-18', '14:24:53'),
(301, 1, 'Login', '2021-03-18', '14:48:29'),
(302, 1, 'Login', '2021-03-18', '15:57:17'),
(303, 1, 'Login', '2021-03-18', '16:13:11'),
(304, 1, 'Logout', '2021-03-18', '16:16:32'),
(305, 2, 'Login', '2021-03-18', '16:17:40'),
(306, 2, 'Logout', '2021-03-18', '16:18:37'),
(307, 1, 'Login', '2021-03-18', '16:21:52'),
(308, 1, 'Logout', '2021-03-18', '16:22:56'),
(309, 1, 'Login', '2021-03-18', '16:26:05'),
(310, 1, 'Login', '2021-03-18', '16:53:16'),
(311, 1, 'Login', '2021-03-18', '19:06:13'),
(312, 1, 'Login', '2021-03-18', '19:20:47'),
(313, 1, 'Login', '2021-03-18', '22:11:57'),
(314, 1, 'Login', '2021-03-18', '23:06:43'),
(315, 1, 'Login', '2021-03-18', '00:39:39'),
(316, 1, 'Logout', '2021-03-18', '00:40:02'),
(317, 1, 'Login', '2021-03-18', '00:40:07'),
(318, 1, 'Login', '2021-03-18', '01:09:18'),
(319, 1, 'Logout', '2021-03-18', '01:56:37'),
(320, 1, 'Login', '2021-03-19', '13:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `archive_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `winners_name` varchar(30) NOT NULL,
  `school_year` datetime NOT NULL,
  `platform_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `total_votes` int(11) NOT NULL,
  `party_name` varchar(30) NOT NULL,
  `platform_info` varchar(100) NOT NULL,
  `credentials` varchar(500) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `student_id`, `position_id`, `total_votes`, `party_name`, `platform_info`, `credentials`, `photo`) VALUES
(5, 123456127, 73, 0, 's', 'sa', 'sa', 'default.jpg'),
(8, 123456126, 69, 0, 'a', 'a', 'a', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_position`
--

CREATE TABLE `candidate_position` (
  `position_id` int(11) NOT NULL,
  `heirarchy_id` int(30) NOT NULL,
  `position_name` varchar(30) NOT NULL,
  `position_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_position`
--

INSERT INTO `candidate_position` (`position_id`, `heirarchy_id`, `position_name`, `position_description`) VALUES
(1, 1, 'President', 'highest position'),
(34, 2, 'Vice President', 'subsitute in absence of the president'),
(69, 3, 'Secretary', 'tagasulat'),
(71, 4, 'Treasurer', 'tagakikim ng yaman'),
(73, 5, 'Auditor', 'hindi ko alam');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `Mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bumail` varchar(100) NOT NULL,
  `grade_level` int(11) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `voting_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `fname`, `Mname`, `lname`, `gender`, `bumail`, `grade_level`, `otp`, `voting_status`) VALUES
(123456126, 'Boboy', 'm', 'Delacruz', 'nogender', 'boboymamamo.pink@bicol-u.edu.ph', 11, '12345', 0),
(123456127, 'Paul', 'j', 'Sta. Ana', 'nogender', 'pauljay.sta.ana@bicol-u.edu.ph', 8, 'sdffgd', 0),
(123456128, 'Manoy', 'c', 'Ferolina', 'nogender', 'manoycarino.ferolina@bicol-u.edu.ph', 11, 'abc123', 0),
(123456129, 'Lucy', 'a', 'Pedro', 'nogender', 'lucyana.pedro@bicol-u.edu.ph', 12, '123abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_access_log`
--

CREATE TABLE `student_access_log` (
  `access_log_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `activity_description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vote_log_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vote_event`
--

CREATE TABLE `vote_event` (
  `vote_event_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `vote_duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  ADD PRIMARY KEY (`activity_log_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`archive_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `candidate_position`
--
ALTER TABLE `candidate_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_access_log`
--
ALTER TABLE `student_access_log`
  ADD PRIMARY KEY (`access_log_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vote_log_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `vote_event`
--
ALTER TABLE `vote_event`
  ADD PRIMARY KEY (`vote_event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `candidate_position`
--
ALTER TABLE `candidate_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456130;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vote_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vote_event`
--
ALTER TABLE `vote_event`
  MODIFY `vote_event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  ADD CONSTRAINT `admin_activity_log_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `archive`
--
ALTER TABLE `archive`
  ADD CONSTRAINT `archive_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `candidate_position` (`position_id`);

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `candidate_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `candidate_position` (`position_id`);

--
-- Constraints for table `student_access_log`
--
ALTER TABLE `student_access_log`
  ADD CONSTRAINT `student_access_log_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
