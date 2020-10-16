-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 08:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dawood_refurb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ar_17_students`
--

CREATE TABLE `ar_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ar_18_students`
--

CREATE TABLE `ar_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ar_19_students`
--

CREATE TABLE `ar_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ar_20_students`
--

CREATE TABLE `ar_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(255) NOT NULL,
  `batch_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_name`) VALUES
(1, 'D-17'),
(2, 'D-18'),
(3, 'D-19'),
(4, 'D-20');

-- --------------------------------------------------------

--
-- Table structure for table `ch_17_students`
--

CREATE TABLE `ch_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ch_18_students`
--

CREATE TABLE `ch_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ch_19_students`
--

CREATE TABLE `ch_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ch_20_students`
--

CREATE TABLE `ch_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `class_id` int(255) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `batch_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` (`class_id`, `dept_id`, `batch_id`) VALUES
(1, 'cs', 1),
(2, 'cs', 2),
(3, 'cs', 3),
(4, 'cs', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cs_17_1_attendance`
--

CREATE TABLE `cs_17_1_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_17_2_attendance`
--

CREATE TABLE `cs_17_2_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_17_3_attendance`
--

CREATE TABLE `cs_17_3_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_17_4_attendance`
--

CREATE TABLE `cs_17_4_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_17_students`
--

CREATE TABLE `cs_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_17_students`
--

INSERT INTO `cs_17_students` (`student_rollnumber`, `student_id`, `student_name`, `student_email`, `student_number`) VALUES
(1, 'D-17-CS-1', 'sheeba', '', ''),
(2, 'D-17-CS-2', 'seema bughio', '', ''),
(3, 'D-17-CS-3', 's.muneeb ur rehman ', '', ''),
(4, 'D-17-CS-4', 'ghulam ayesha', '', ''),
(5, 'D-17-CS-6', 'muhammad adil sarki', '', ''),
(6, 'D-17-CS-7', 'abdul rafay', '', ''),
(7, 'D-17-CS-8', 'tahseen fatima', '', ''),
(8, 'D-17-CS-9', 'huda muddassir ali', '', ''),
(9, 'D-17-CS-10', 'taha aziz', '', ''),
(10, 'D-17-CS-11', 'abdul qadeer ', '', ''),
(11, 'D-17-CS-12', 'hitesh kumar', '', ''),
(12, 'D-17-CS-13', 'ramsha farheen', '', ''),
(13, 'D-17-CS-14', 'karan kabir sachdev', '', ''),
(14, 'D-17-CS-15', 'muhammad asim abbas', '', ''),
(15, 'D-17-CS-16', 'mehr ur nisa  gulzar', '', ''),
(16, 'D-17-CS-17', 'm.hammad khan', '', ''),
(17, 'D-17-CS-18', 'jan ali shah', '', ''),
(18, 'D-17-CS-19', 'nazi abdullah', '', ''),
(19, 'D-17-CS-22', 'kamran sharif dogar', '', ''),
(20, 'D-17-CS-23', 'musfirah sajjad', '', ''),
(21, 'D-17-CS-25', 'misbah sabir', '', ''),
(22, 'D-17-CS-26', 'sayyed asif ali shah', '', ''),
(23, 'D-17-CS-27', 'aun abbas jafri', '', ''),
(24, 'D-17-CS-28', 'syed asna ali', '', ''),
(25, 'D-17-CS-29', 'syed jawwad haider', '', ''),
(26, 'D-17-CS-30', 'fabiha shoukat', '', ''),
(27, 'D-17-CS-31', 'uroojul haq', '', ''),
(28, 'D-17-CS-32', 'abdus salam', '', ''),
(29, 'D-17-CS-34', 'fahad ali khan', '', ''),
(30, 'D-17-CS-35', 'uzair-ul-hassan ', '', ''),
(31, 'D-17-CS-36', 'sunaila', '', ''),
(32, 'D-17-CS-37', 'zeeshan haider', '', ''),
(33, 'D-17-CS-38', 'rizwan ullah', '', ''),
(34, 'D-17-CS-39', 'bahadur shah zafar khan', '', ''),
(35, 'D-17-CS-40', 'abdul wahab', '', ''),
(36, 'D-17-CS-41', 'urooshiha ahmed ali', '', ''),
(37, 'D-17-CS-42', 'abdul azeem', '', ''),
(38, 'D-17-CS-43', 'yasir ali', '', ''),
(39, 'D-17-CS-45', 'muhammad bilal memon', '', ''),
(40, 'D-17-CS-46', 'm. abu baker sidique', '', ''),
(41, 'D-17-CS-47', 'muhammad bilal', '', ''),
(42, 'D-17-CS-48', 'aiman aslam', '', ''),
(43, 'D-17-16-CS-22', 'darshan kumar', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_18_5_attendance`
--

CREATE TABLE `cs_18_5_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_18_6_attendance`
--

CREATE TABLE `cs_18_6_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_18_7_attendance`
--

CREATE TABLE `cs_18_7_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_18_8_attendance`
--

CREATE TABLE `cs_18_8_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_18_9_attendance`
--

CREATE TABLE `cs_18_9_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_18_students`
--

CREATE TABLE `cs_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_18_students`
--

INSERT INTO `cs_18_students` (`student_rollnumber`, `student_name`, `student_id`, `student_email`, `student_number`) VALUES
(1, 'muhammad jam', 'D-18-CS-1', '', ''),
(2, 'muhammad usman farooq', 'D-18-CS-2', '', ''),
(3, 'asfand yar khan', 'D-18-CS-3', '', ''),
(4, 'shahmir shaikh', 'D-18-CS-4', '', ''),
(5, 'ghulam hyder', 'D-18-CS-5', '', ''),
(6, 'muhammad usama', 'D-18-CS-7', '', ''),
(7, 'abdul basit', 'D-18-CS-8', '', ''),
(8, 'satish kumar oad', 'D-18-CS-9', '', ''),
(9, 'muhammad bilal', 'D-18-CS-10', '', ''),
(10, 'suneel kumar', 'D-18-CS-11', '', ''),
(11, 'faiza rabbani', 'D-18-CS-12', '', ''),
(12, 'salman', 'D-18-CS-13', '', ''),
(13, 'alina ashraf siddiqui', 'D-18-CS-14', '', ''),
(14, 'burera', 'D-18-CS-15', '', ''),
(15, 'syed shaheer ali', 'D-18-CS-19', '', ''),
(16, 'vikash', 'D-18-CS-21', '', ''),
(17, 'ahmad mustafeen bin wasim', 'D-18-CS-22', '', ''),
(18, 'saroop chand', 'D-18-CS-23', '', ''),
(19, 'muhammad anas naeemi', 'D-18-CS-24', '', ''),
(20, 'rameez ahmed', 'D-18-CS-25', '', ''),
(21, 'ramsha jabeen', 'D-18-CS-26', '', ''),
(22, 'babar ali', 'D-18-CS-27', '', ''),
(23, 'syed dawood ali', 'D-18-CS-28', '', ''),
(24, 'safura', 'D-18-CS-29', '', ''),
(25, 'farah nizam', 'D-18-CS-30', '', ''),
(26, 'syed mushahid hussain', 'D-18-CS-31', '', ''),
(27, 'syeda atika', 'D-18-CS-33', '', ''),
(28, 'muhammad talha', 'D-18-CS-34', '', ''),
(29, 'raja khandev', 'D-18-CS-35', '', ''),
(30, 'shaharyar ali tarique', 'D-18-CS-36', '', ''),
(31, 'ali haider', 'D-18-CS-37', '', ''),
(32, 'mahesh kumar', 'D-18-CS-38', '', ''),
(33, 'muhammad sarwar', 'D-18-CS-39', '', ''),
(34, 'muhammad shoaib memon', 'D-18-CS-41', '', ''),
(35, 'tayyaba', 'D-18-CS-42', '', ''),
(36, 'maria ahmed', 'D-18-CS-43', '', ''),
(37, 'hina asif', 'D-18-CS-44', '', ''),
(38, 'syed muhammad raza ali naqvi', 'D-18-CS-45', '', ''),
(39, 'muhammad humza ahsan', 'D-18-CS-46', '', ''),
(40, 'raheel saleem', 'D-18-CS-47', '', ''),
(41, 'mirza wajeeh baig', 'D-18-CS-48', '', ''),
(42, 'rameen deen', 'D-18-CS-49', '', ''),
(43, 'himat singh', 'D-18-CS-50', '', ''),
(44, 'muhammad rizwan', 'D-18-CS-51', '', ''),
(45, 'neha shaikh', 'D-18-CS-52', '', ''),
(46, 'mudasir ahmed koka', 'D-18-CS-54', '', ''),
(47, 'muhammad ather sipra', 'D-18-CS-55', '', ''),
(48, 'ali raza javaid', 'D-18-CS-56', '', ''),
(49, 'ashee hina khan', 'D-18-CS-57', '', ''),
(50, 'muhammad sohaib khan', 'D-18-CS-58', '', ''),
(51, 'zamran khan', 'D-18-CS-60', '', ''),
(52, 'muhammad zeerak murtaza', 'D-18-CS-61', '', ''),
(53, 'abdul haseeb', 'D-17-18-CS-5', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_19_10_attendance`
--

CREATE TABLE `cs_19_10_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_19_11_attendance`
--

CREATE TABLE `cs_19_11_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_19_12_attendance`
--

CREATE TABLE `cs_19_12_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_19_13_attendance`
--

CREATE TABLE `cs_19_13_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_19_14_attendance`
--

CREATE TABLE `cs_19_14_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_19_students`
--

CREATE TABLE `cs_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_19_students`
--

INSERT INTO `cs_19_students` (`student_rollnumber`, `student_id`, `student_name`, `student_email`, `student_number`) VALUES
(1, 'D-19-CS-1', 'areeba', '', ''),
(2, 'D-19-CS-2', 'nirdosh kumar', '', ''),
(3, 'D-19-CS-4', 'umaima siddiqui', '', ''),
(4, 'D-19-CS-5', 'syed haseeb ahmed', '', ''),
(5, 'D-19-CS-6', 'jamal ahmed', '', ''),
(6, 'D-19-CS-7', 'maaz ahmad', '', ''),
(7, 'D-19-CS-8', 'mohammad hammad', '', ''),
(8, 'D-19-CS-9', 'tanveer hussain', '', ''),
(9, 'D-19-CS-10', 'bilal shafi', '', ''),
(10, 'D-19-CS-11', 'muhammad shahbaz tariq', '', ''),
(11, 'D-19-CS-12', 'ifra saleem', '', ''),
(12, 'D-19-CS-13', 'um e rohma', '', ''),
(13, 'D-19-CS-14', 'sagar lal', '', ''),
(14, 'D-19-CS-15', 'abdullah memon', '', ''),
(15, 'D-19-CS-16', 'hira fatima', '', ''),
(16, 'D-19-CS-17', 'azizullah', '', ''),
(17, 'D-19-CS-19', 'abdullah safwan', '', ''),
(18, 'D-19-CS-20', 'zubair', '', ''),
(19, 'D-19-CS-21', 'syed saqib ali zaidi', '', ''),
(20, 'D-19-CS-22', 'zain-ul-abdin', '', ''),
(21, 'D-19-CS-23', 'paras', '', ''),
(22, 'D-19-CS-24', 'nitesh kumar', '', ''),
(23, 'D-19-CS-25', 'minhaj sohail', '', ''),
(24, 'D-19-CS-26', 'tehreem', '', ''),
(25, 'D-19-CS-27', 'muhibullah khan kamali', '', ''),
(26, 'D-19-CS-29', 'shahrukh khan', '', ''),
(27, 'D-19-CS-30', 'munesh kumar', '', ''),
(28, 'D-19-CS-32', 'zaffarullah', '', ''),
(29, 'D-19-CS-33', 'muhammad zeeshan ali', '', ''),
(30, 'D-19-CS-34', 'vivek', '', ''),
(31, 'D-19-CS-35', 'm.emmad arshad ali', '', ''),
(32, 'D-19-CS-36', 'muhammad hussain', '', ''),
(33, 'D-19-CS-37', 'shafquat nawaz', '', ''),
(34, 'D-19-CS-38', 'muhammad sameer', '', ''),
(35, 'D-19-CS-39', 'aarish irfan', '', ''),
(36, 'D-19-CS-40', 'muhammad farjad raza', '', ''),
(37, 'D-19-CS-41', 'hibba batool', '', ''),
(38, 'D-19-CS-42', 'yasir ali', '', ''),
(39, 'D-19-CS-43', 'mohaddisa naper', '', ''),
(40, 'D-19-CS-44', 'iqra nisar', '', ''),
(41, 'D-19-CS-45', 'zoobi ajaib', '', ''),
(42, 'D-19-CS-46', 'muhammad abbas', '', ''),
(43, 'D-19-CS-47', 'talha dar', '', ''),
(44, 'D-19-CS-48', 'insaram alam siddique', '', ''),
(45, 'D-19-CS-49', 'ali raza', '', ''),
(46, 'D-19-CS-50', 'sahil kumar', '', ''),
(47, 'D-19-18-CS-17', 'vishal', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_20_15_attendance`
--

CREATE TABLE `cs_20_15_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_20_16_attendance`
--

CREATE TABLE `cs_20_16_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_20_17_attendance`
--

CREATE TABLE `cs_20_17_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_20_18_attendance`
--

CREATE TABLE `cs_20_18_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_20_19_attendance`
--

CREATE TABLE `cs_20_19_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_20_students`
--

CREATE TABLE `cs_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_20_students`
--

INSERT INTO `cs_20_students` (`student_rollnumber`, `student_id`, `student_name`, `student_email`, `student_number`) VALUES
(1, 'D-20-CS-1', 'muhammad mustafa solangi', '', ''),
(2, 'D-20-CS-2', 'muhammad samman raza', '', ''),
(3, 'D-20-CS-3', 'muhmmad osama ', '', ''),
(4, 'D-20-CS-4', 'abdul sami', '', ''),
(5, 'D-20-CS-5', 'muhammad arslan', '', ''),
(6, 'D-20-CS-6', 'faizan ali', '', ''),
(7, 'D-20-CS-7', 'muhammad faizan', '', ''),
(8, 'D-20-CS-8', 'muhammad usman', '', ''),
(9, 'D-20-CS-9', 'qaiser ejaz', '', ''),
(10, 'D-20-CS-10', 'raseen ahmed chaudary', '', ''),
(11, 'D-20-CS-11', 'abdul azeem', '', ''),
(12, 'D-20-CS-12', 'muhammad umair', '', ''),
(13, 'D-20-CS-13', 'syed shaheer hasan', '', ''),
(14, 'D-20-CS-14', 'yasir aziz', '', ''),
(15, 'D-20-CS-15', 'muhammad danish', '', ''),
(16, 'D-20-CS-16', 'syed yasir ul haq', '', ''),
(17, 'D-20-CS-17', 'junaid ahmed', '', ''),
(18, 'D-20-CS-18', 'faiz mohammad shah', '', ''),
(19, 'D-20-CS-19', 'hamdan ahmed', '', ''),
(20, 'D-20-CS-20', 'muhammad hassan', '', ''),
(21, 'D-20-CS-21', 'atta ur rehman farooqi', '', ''),
(22, 'D-20-CS-22', 'abdullah saqib', '', ''),
(23, 'D-20-CS-23', 'masood hussain', '', ''),
(24, 'D-20-CS-24', 'muhammad umair ul islam', '', ''),
(25, 'D-20-CS-25', 'tanveer', '', ''),
(26, 'D-20-CS-26', 'muhib dad khan', '', ''),
(27, 'D-20-CS-27', 'nida waris', '', ''),
(28, 'D-20-CS-28', 'razaullah hussain', '', ''),
(29, 'D-20-CS-29', 'muhammad usman sagri', '', ''),
(30, 'D-20-CS-30', 'sardar muhammad jawwad ishtiaq', '', ''),
(31, 'D-20-CS-31', 'shahzaib karim', '', ''),
(32, 'D-20-CS-32', 'amna rajab', '', ''),
(33, 'D-20-CS-33', 'muhammad murtaza kamleen', '', ''),
(34, 'D-20-CS-34', 'muhammad zaem siddiqui', '', ''),
(35, 'D-20-CS-35', 'muhammad shahzil', '', ''),
(36, 'D-20-CS-36', 'usman tariq', '', ''),
(37, 'D-20-CS-37', 'muhammad haseeb', '', ''),
(38, 'D-20-CS-38', 'altamash', '', ''),
(39, 'D-20-CS-39', 'mariyam sheikh', '', ''),
(40, 'D-20-CS-40', 'mishal amir', '', ''),
(41, 'D-20-CS-41', 'hasnian mehdi', '', ''),
(42, 'D-20-CS-42', 'syed rohan uddin', '', ''),
(43, 'D-20-CS-43', 'abdul wasay', '', ''),
(44, 'D-20-CS-44', 'rana muzammil ashraf', '', ''),
(45, 'D-20-CS-45', 'muhammad haris', '', ''),
(46, 'D-20-CS-46', 'imtiaz ahmed', '', ''),
(47, 'D-20-CS-47', 'waqar ahmed ', '', ''),
(48, 'D-20-CS-48', 'rizwan ul hasan', '', ''),
(49, 'D-20-CS-49', 'suresh', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(10) NOT NULL,
  `dept_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
('ar', 'Architecture Engineering'),
('ch', 'Chemical Engineering'),
('cs', 'Computer System Engineering'),
('ee', 'Energy and Environment Engineering'),
('es', 'Electronic Engineering'),
('in', 'Industrial Engineering and Management'),
('mm', 'Metallurgy and Material Engineering'),
('pg', 'Petroleum and Gas Engineering'),
('te', 'Telecommunication Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `ee_17_20_attendance`
--

CREATE TABLE `ee_17_20_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee_17_21_attendance`
--

CREATE TABLE `ee_17_21_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee_17_22_attendance`
--

CREATE TABLE `ee_17_22_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee_17_23_attendance`
--

CREATE TABLE `ee_17_23_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee_17_students`
--

CREATE TABLE `ee_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee_18_students`
--

CREATE TABLE `ee_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee_19_students`
--

CREATE TABLE `ee_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee_20_students`
--

CREATE TABLE `ee_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `es_17_students`
--

CREATE TABLE `es_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `es_18_students`
--

CREATE TABLE `es_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `es_19_students`
--

CREATE TABLE `es_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `es_20_students`
--

CREATE TABLE `es_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `teacher_id` int(255) NOT NULL,
  `teacher_username` varchar(100) NOT NULL,
  `teacher_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`teacher_id`, `teacher_username`, `teacher_password`) VALUES
(14, 'samiaaijaz', 'samiaaijaz'),
(17, 'fahadiqbal123', 'fahadiqbal123'),
(19, 'shamimurrehman123', 'shamimurrehman123');

-- --------------------------------------------------------

--
-- Table structure for table `in_17_24_attendance`
--

CREATE TABLE `in_17_24_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_17_25_attendance`
--

CREATE TABLE `in_17_25_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_17_26_attendance`
--

CREATE TABLE `in_17_26_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_17_27_attendance`
--

CREATE TABLE `in_17_27_attendance` (
  `lecture_id` int(255) NOT NULL,
  `a1` varchar(10) DEFAULT NULL,
  `a2` varchar(10) DEFAULT NULL,
  `a3` varchar(10) DEFAULT NULL,
  `a4` varchar(10) DEFAULT NULL,
  `a5` varchar(10) DEFAULT NULL,
  `a6` varchar(10) DEFAULT NULL,
  `a7` varchar(10) DEFAULT NULL,
  `a8` varchar(10) DEFAULT NULL,
  `a9` varchar(10) DEFAULT NULL,
  `a10` varchar(10) DEFAULT NULL,
  `a11` varchar(10) DEFAULT NULL,
  `a12` varchar(10) DEFAULT NULL,
  `a13` varchar(10) DEFAULT NULL,
  `a14` varchar(10) DEFAULT NULL,
  `a15` varchar(10) DEFAULT NULL,
  `a16` varchar(10) DEFAULT NULL,
  `a17` varchar(10) DEFAULT NULL,
  `a18` varchar(10) DEFAULT NULL,
  `a19` varchar(10) DEFAULT NULL,
  `a20` varchar(10) DEFAULT NULL,
  `a21` varchar(10) DEFAULT NULL,
  `a22` varchar(10) DEFAULT NULL,
  `a23` varchar(10) DEFAULT NULL,
  `a24` varchar(10) DEFAULT NULL,
  `a25` varchar(10) DEFAULT NULL,
  `a26` varchar(10) DEFAULT NULL,
  `a27` varchar(10) DEFAULT NULL,
  `a28` varchar(10) DEFAULT NULL,
  `a29` varchar(10) DEFAULT NULL,
  `a30` varchar(10) DEFAULT NULL,
  `a31` varchar(10) DEFAULT NULL,
  `a32` varchar(10) DEFAULT NULL,
  `a33` varchar(10) DEFAULT NULL,
  `a34` varchar(10) DEFAULT NULL,
  `a35` varchar(10) DEFAULT NULL,
  `a36` varchar(10) DEFAULT NULL,
  `a37` varchar(10) DEFAULT NULL,
  `a38` varchar(10) DEFAULT NULL,
  `a39` varchar(10) DEFAULT NULL,
  `a40` varchar(10) DEFAULT NULL,
  `a41` varchar(10) DEFAULT NULL,
  `a42` varchar(10) DEFAULT NULL,
  `a43` varchar(10) DEFAULT NULL,
  `a44` varchar(10) DEFAULT NULL,
  `a45` varchar(10) DEFAULT NULL,
  `a46` varchar(10) DEFAULT NULL,
  `a47` varchar(10) DEFAULT NULL,
  `a48` varchar(10) DEFAULT NULL,
  `a49` varchar(10) DEFAULT NULL,
  `a50` varchar(10) DEFAULT NULL,
  `a51` varchar(10) DEFAULT NULL,
  `a52` varchar(10) DEFAULT NULL,
  `a53` varchar(10) DEFAULT NULL,
  `a54` varchar(10) DEFAULT NULL,
  `a55` varchar(10) DEFAULT NULL,
  `a56` varchar(10) DEFAULT NULL,
  `a57` varchar(10) DEFAULT NULL,
  `a58` varchar(10) DEFAULT NULL,
  `a59` varchar(10) DEFAULT NULL,
  `a60` varchar(10) DEFAULT NULL,
  `a61` varchar(10) DEFAULT NULL,
  `a62` varchar(10) DEFAULT NULL,
  `a63` varchar(10) DEFAULT NULL,
  `a64` varchar(10) DEFAULT NULL,
  `a65` varchar(10) DEFAULT NULL,
  `a66` varchar(10) DEFAULT NULL,
  `a67` varchar(10) DEFAULT NULL,
  `a68` varchar(10) DEFAULT NULL,
  `a69` varchar(10) DEFAULT NULL,
  `a70` varchar(10) DEFAULT NULL,
  `a71` varchar(10) DEFAULT NULL,
  `a72` varchar(10) DEFAULT NULL,
  `a73` varchar(10) DEFAULT NULL,
  `a74` varchar(10) DEFAULT NULL,
  `a75` varchar(10) DEFAULT NULL,
  `a76` varchar(10) DEFAULT NULL,
  `a77` varchar(10) DEFAULT NULL,
  `a78` varchar(10) DEFAULT NULL,
  `a79` varchar(10) DEFAULT NULL,
  `a80` varchar(10) DEFAULT NULL,
  `a81` varchar(10) DEFAULT NULL,
  `a82` varchar(10) DEFAULT NULL,
  `a83` varchar(10) DEFAULT NULL,
  `a84` varchar(10) DEFAULT NULL,
  `a85` varchar(10) DEFAULT NULL,
  `a86` varchar(10) DEFAULT NULL,
  `a87` varchar(10) DEFAULT NULL,
  `a88` varchar(10) DEFAULT NULL,
  `a89` varchar(10) DEFAULT NULL,
  `a90` varchar(10) DEFAULT NULL,
  `a91` varchar(10) DEFAULT NULL,
  `a92` varchar(10) DEFAULT NULL,
  `a93` varchar(10) DEFAULT NULL,
  `a94` varchar(10) DEFAULT NULL,
  `a95` varchar(10) DEFAULT NULL,
  `a96` varchar(10) DEFAULT NULL,
  `a97` varchar(10) DEFAULT NULL,
  `a98` varchar(10) DEFAULT NULL,
  `a99` varchar(10) DEFAULT NULL,
  `a100` varchar(10) DEFAULT NULL,
  `a101` varchar(10) DEFAULT NULL,
  `a102` varchar(10) DEFAULT NULL,
  `a103` varchar(10) DEFAULT NULL,
  `a104` varchar(10) DEFAULT NULL,
  `a105` varchar(10) DEFAULT NULL,
  `a106` varchar(10) DEFAULT NULL,
  `a107` varchar(10) DEFAULT NULL,
  `a108` varchar(10) DEFAULT NULL,
  `a109` varchar(10) DEFAULT NULL,
  `a110` varchar(10) DEFAULT NULL,
  `a111` varchar(10) DEFAULT NULL,
  `a112` varchar(10) DEFAULT NULL,
  `a113` varchar(10) DEFAULT NULL,
  `a114` varchar(10) DEFAULT NULL,
  `a115` varchar(10) DEFAULT NULL,
  `a116` varchar(10) DEFAULT NULL,
  `a117` varchar(10) DEFAULT NULL,
  `a118` varchar(10) DEFAULT NULL,
  `a119` varchar(10) DEFAULT NULL,
  `a120` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_17_students`
--

CREATE TABLE `in_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_18_students`
--

CREATE TABLE `in_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_19_students`
--

CREATE TABLE `in_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_20_students`
--

CREATE TABLE `in_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_details`
--

CREATE TABLE `lecture_details` (
  `lecture_id` int(255) NOT NULL,
  `period_name_id` int(255) NOT NULL,
  `lecture_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mm_17_students`
--

CREATE TABLE `mm_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mm_18_students`
--

CREATE TABLE `mm_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mm_19_students`
--

CREATE TABLE `mm_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mm_20_students`
--

CREATE TABLE `mm_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `period_id` int(10) NOT NULL,
  `period_timing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`period_id`, `period_timing`) VALUES
(1, '9:00 - 9:55'),
(2, '10:00 - 10:55'),
(3, '11:00 - 11:55'),
(4, '12:00 - 12:55'),
(5, '2:00 - 2:55'),
(6, '3:00 - 3:55'),
(7, '4:00 - 4:55'),
(8, '5:00 - 5:55');

-- --------------------------------------------------------

--
-- Table structure for table `period_table`
--

CREATE TABLE `period_table` (
  `period_table_id` int(255) NOT NULL,
  `period_id` int(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `room_id` int(255) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `semester_id` int(255) NOT NULL,
  `batch_id` int(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `period_table`
--

INSERT INTO `period_table` (`period_table_id`, `period_id`, `teacher_id`, `room_id`, `dept_id`, `semester_id`, `batch_id`, `subject_id`, `section`) VALUES
(1, 1, 19, 0, 'cs', 6, 2, 5, 'A'),
(2, 2, 20, 0, 'cs', 6, 2, 6, 'A'),
(3, 3, 23, 0, 'cs', 6, 2, 7, 'A'),
(4, 4, 21, 0, 'cs', 6, 2, 8, 'A'),
(5, 5, 22, 0, 'cs', 6, 2, 9, 'A'),
(6, 1, 17, 0, 'cs', 8, 1, 1, 'A'),
(7, 2, 20, 0, 'cs', 8, 1, 4, 'A'),
(8, 1, 14, 0, 'cs', 8, 1, 3, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pg_17_students`
--

CREATE TABLE `pg_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pg_18_students`
--

CREATE TABLE `pg_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pg_19_students`
--

CREATE TABLE `pg_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pg_20_students`
--

CREATE TABLE `pg_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(255) NOT NULL,
  `semester_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`) VALUES
(1, 'first'),
(2, 'second'),
(3, 'third'),
(4, 'fourth'),
(5, 'fifth'),
(6, 'sixth'),
(7, 'seventh'),
(8, 'eighth');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(255) NOT NULL,
  `student_dept` varchar(255) NOT NULL,
  `student_batch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(255) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(1, 'mobile computing'),
(2, 'artificial intelligence'),
(3, 'computer security'),
(4, 'vlsi design technique'),
(5, 'digital system design'),
(6, 'data communication and computer networks'),
(7, 'digital signal processing'),
(8, 'software engineering'),
(9, 'technical report writing'),
(10, 'computer architecture and organization'),
(11, 'engineering economics and management'),
(12, 'complex variable and transform'),
(13, 'electrical network analysis'),
(14, 'database management system'),
(15, 'computer programming principles'),
(16, 'basic electronics and circuit'),
(17, 'communication skills'),
(18, 'linear algebra'),
(19, 'islamic studies'),
(20, 'environment impact assessment'),
(21, 'energy policy and management'),
(22, 'wind energy engineering'),
(23, 'advance clean coal technologies'),
(24, 'computer integrated manufacturing'),
(25, 'marketing manufacturing'),
(26, 'total quality manufacturing'),
(27, 'management information system');

-- --------------------------------------------------------

--
-- Table structure for table `subject_allotment`
--

CREATE TABLE `subject_allotment` (
  `teacher_id` int(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_allotment`
--

INSERT INTO `subject_allotment` (`teacher_id`, `subject_id`, `class_id`) VALUES
(14, 10, 3),
(15, 11, 3),
(18, 13, 3),
(16, 12, 3),
(17, 14, 3),
(9, 15, 4),
(10, 16, 4),
(11, 17, 4),
(12, 18, 4),
(13, 19, 4),
(19, 5, 2),
(20, 6, 2),
(23, 7, 2),
(21, 8, 2),
(22, 9, 2),
(17, 1, 1),
(18, 2, 1),
(14, 3, 1),
(20, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(255) NOT NULL,
  `teacher_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`) VALUES
(1, 'Engr. Aurangzeb Junejo'),
(2, 'Dr. Zahid Hulio'),
(3, 'Dr. Parwaiz Khan'),
(4, 'Dr. Muhammad Dawood Idrees'),
(5, 'Dr. A. Sami'),
(6, 'Engr. K. Bux'),
(7, 'Engr. Siraj Ahmed'),
(8, 'Engr. Aisha Memon '),
(9, 'Engr. Saba Khan'),
(10, 'Engr. Sorath Mumtaz'),
(11, 'Mrs. Suneeta Ramesh'),
(12, 'Mrs. Maria Khan'),
(13, 'Mrs. Mehwish Asif'),
(14, 'Engr. Samia Aijaz'),
(15, 'Engr. Motia Rani'),
(16, 'Mr. Shafquat Lashari'),
(17, 'Engr. Fahad Iqbal'),
(18, 'Engr. Shahid suleman'),
(19, 'Engr. Shamim ur Rehman'),
(20, 'Engr.Maria Abdullah'),
(21, 'Dr. Zahid Tunio'),
(22, 'Mr. Rafique Rehman'),
(23, 'Dr. Saleem Ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `te_17_students`
--

CREATE TABLE `te_17_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `te_18_students`
--

CREATE TABLE `te_18_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `te_19_students`
--

CREATE TABLE `te_19_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `te_20_students`
--

CREATE TABLE `te_20_students` (
  `student_rollnumber` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ar_17_students`
--
ALTER TABLE `ar_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ar_18_students`
--
ALTER TABLE `ar_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ar_19_students`
--
ALTER TABLE `ar_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ar_20_students`
--
ALTER TABLE `ar_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD UNIQUE KEY `batch_id` (`batch_id`);

--
-- Indexes for table `ch_17_students`
--
ALTER TABLE `ch_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ch_18_students`
--
ALTER TABLE `ch_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ch_19_students`
--
ALTER TABLE `ch_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ch_20_students`
--
ALTER TABLE `ch_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `class_details`
--
ALTER TABLE `class_details`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `cs_17_students`
--
ALTER TABLE `cs_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `cs_18_students`
--
ALTER TABLE `cs_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_name`),
  ADD UNIQUE KEY `student_id_2` (`student_id`),
  ADD UNIQUE KEY `student_name` (`student_name`);

--
-- Indexes for table `cs_19_students`
--
ALTER TABLE `cs_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `cs_20_students`
--
ALTER TABLE `cs_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD UNIQUE KEY `dept_id` (`dept_id`);

--
-- Indexes for table `ee_17_students`
--
ALTER TABLE `ee_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ee_18_students`
--
ALTER TABLE `ee_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ee_19_students`
--
ALTER TABLE `ee_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `ee_20_students`
--
ALTER TABLE `ee_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `es_17_students`
--
ALTER TABLE `es_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `es_18_students`
--
ALTER TABLE `es_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `es_19_students`
--
ALTER TABLE `es_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `es_20_students`
--
ALTER TABLE `es_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD UNIQUE KEY `teacher_id` (`teacher_id`),
  ADD UNIQUE KEY `teacher_username` (`teacher_username`);

--
-- Indexes for table `in_17_students`
--
ALTER TABLE `in_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `in_18_students`
--
ALTER TABLE `in_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `in_19_students`
--
ALTER TABLE `in_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `in_20_students`
--
ALTER TABLE `in_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `lecture_details`
--
ALTER TABLE `lecture_details`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `mm_17_students`
--
ALTER TABLE `mm_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `mm_18_students`
--
ALTER TABLE `mm_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `mm_19_students`
--
ALTER TABLE `mm_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `mm_20_students`
--
ALTER TABLE `mm_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD UNIQUE KEY `period_id` (`period_id`);

--
-- Indexes for table `period_table`
--
ALTER TABLE `period_table`
  ADD PRIMARY KEY (`period_table_id`);

--
-- Indexes for table `pg_17_students`
--
ALTER TABLE `pg_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `pg_18_students`
--
ALTER TABLE `pg_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `pg_19_students`
--
ALTER TABLE `pg_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `pg_20_students`
--
ALTER TABLE `pg_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD UNIQUE KEY `semester_id` (`semester_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD UNIQUE KEY `subject_id` (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `te_17_students`
--
ALTER TABLE `te_17_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `te_18_students`
--
ALTER TABLE `te_18_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `te_19_students`
--
ALTER TABLE `te_19_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `te_20_students`
--
ALTER TABLE `te_20_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ar_17_students`
--
ALTER TABLE `ar_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ar_18_students`
--
ALTER TABLE `ar_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ar_19_students`
--
ALTER TABLE `ar_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ar_20_students`
--
ALTER TABLE `ar_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ch_17_students`
--
ALTER TABLE `ch_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_18_students`
--
ALTER TABLE `ch_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_19_students`
--
ALTER TABLE `ch_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_20_students`
--
ALTER TABLE `ch_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_details`
--
ALTER TABLE `class_details`
  MODIFY `class_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cs_17_students`
--
ALTER TABLE `cs_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `cs_18_students`
--
ALTER TABLE `cs_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `cs_19_students`
--
ALTER TABLE `cs_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cs_20_students`
--
ALTER TABLE `cs_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ee_17_students`
--
ALTER TABLE `ee_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ee_18_students`
--
ALTER TABLE `ee_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ee_19_students`
--
ALTER TABLE `ee_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ee_20_students`
--
ALTER TABLE `ee_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `es_17_students`
--
ALTER TABLE `es_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `es_18_students`
--
ALTER TABLE `es_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `es_19_students`
--
ALTER TABLE `es_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `es_20_students`
--
ALTER TABLE `es_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `in_17_students`
--
ALTER TABLE `in_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `in_18_students`
--
ALTER TABLE `in_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `in_19_students`
--
ALTER TABLE `in_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `in_20_students`
--
ALTER TABLE `in_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecture_details`
--
ALTER TABLE `lecture_details`
  MODIFY `lecture_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mm_17_students`
--
ALTER TABLE `mm_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mm_18_students`
--
ALTER TABLE `mm_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mm_19_students`
--
ALTER TABLE `mm_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mm_20_students`
--
ALTER TABLE `mm_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `period_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `period_table`
--
ALTER TABLE `period_table`
  MODIFY `period_table_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pg_17_students`
--
ALTER TABLE `pg_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg_18_students`
--
ALTER TABLE `pg_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg_19_students`
--
ALTER TABLE `pg_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg_20_students`
--
ALTER TABLE `pg_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `te_17_students`
--
ALTER TABLE `te_17_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `te_18_students`
--
ALTER TABLE `te_18_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `te_19_students`
--
ALTER TABLE `te_19_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `te_20_students`
--
ALTER TABLE `te_20_students`
  MODIFY `student_rollnumber` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
