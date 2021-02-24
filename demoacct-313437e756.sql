-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-v.hosting.stackcp.net
-- Generation Time: Oct 27, 2020 at 06:09 PM
-- Server version: 10.2.33-MariaDB-log
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoacct-313437e756`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(100) NOT NULL,
  `batch_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_name`) VALUES
(1, '16'),
(2, '17'),
(3, '18'),
(4, '19'),
(5, '20'),
(6, '21');

-- --------------------------------------------------------

--
-- Table structure for table `bscs_4_1_a_students`
--

CREATE TABLE `bscs_4_1_a_students` (
  `student_rollnumber` int(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_email` varchar(100) DEFAULT NULL,
  `student_fathername` varchar(100) DEFAULT NULL,
  `student_mobile` varchar(100) DEFAULT NULL,
  `student_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bscs_4_1_a_students`
--

INSERT INTO `bscs_4_1_a_students` (`student_rollnumber`, `student_name`, `student_email`, `student_fathername`, `student_mobile`, `student_id`) VALUES
(1, 'Hamza Anis', 'xyz', 'Anis Ur Rehman', '216611509', '19-BSCS-01'),
(2, 'Hafsa Shoaib', 'xyz', 'Muhammad Shoaib Qureshi', '552221232', '19-BSCS-03'),
(3, 'Syed Musharaf Waseem', 'xyz', 'Syed Waseem Siraj', '552221232', '19-BSCS-05'),
(4, 'Abdul Mufeez', 'xyz', 'Abdul Mubin', '552221232', '19-BSCS-06'),
(5, 'Amna Zafar', 'xyz', 'Zafar Imam', '552221232', '19-BSCS-07'),
(6, 'Sami Sheikh', 'xyz', 'Muhammad Nadeem', '552221232', '19-BSCS-08'),
(7, 'Ammar Hussain', 'xyz', 'Azhar Qasim', '552221232', '19-BSCS-09'),
(8, 'Hafiz Muhammad Mustufa', 'xyz', 'Muhammad Nazim Khan', '552221232', '19-BSCS-10'),
(9, 'Syeda Madiha Rehman', 'xyz', 'Syed Atiq Ur Rehman', '552221232', '19-BSCS-12'),
(10, 'Amna Rashid', 'xyz', 'Rashid Mahmood', '552221232', '19-BSCS-13'),
(11, 'Syed Hamza', 'xyz', 'Sartaj Javed', '552221232', '19-BSCS-14'),
(12, 'Syed Ali Azim Rizvi', 'xyz', 'Syed Fasahat Hussain Rizvi', '552221232', '19-BSCS-16'),
(13, 'Saad Bin Shakil', 'xyz', 'Shaikh Shakil Ahmed', '552221232', '19-BSCS-17'),
(14, 'Hajra Rafiq', 'xyz', 'Rafiq Ahmed Memon', '552221232', '19-BSCS-18'),
(15, 'Farrukh Shehzad', 'xyz', 'Gul Muhammad Awan', '552221232', '19-BSCS-19'),
(16, 'Muneeba', 'xyz', 'Muhammad Younus', '552221232', '19-BSCS-20'),
(17, 'Anoosha Malik', 'xyz', 'Muhammad Zahid Malik', '552221232', '19-BSCS-21'),
(18, 'Sarib Aqeel', 'xyz', 'Aqeel Ahmed', '552221232', '19-BSCS-22'),
(19, 'Abdul Wahab', 'xyz', 'Saqib Pervez', '552221232', '19-BSCS-23'),
(20, 'Allah Warayo', 'xyz', 'Muhammad Umer', '552221232', '19-BSCS-24'),
(21, 'Haseeb Ahmed', 'xyz', 'Nisar Ahmed', '552221232', '19-BSCS-26'),
(22, 'Faraz Ahmed', 'xyz', 'Qalander Bux', '552221232', '19-BSCS-27'),
(23, 'Ammad Shaikh', 'xyz', 'Ghulam Abbas', '552221232', '19-BSCS-28'),
(24, 'Syed Muhammad Maroob', 'xyz', 'S.Muhammad Asif Zaman', '552221232', '19-BSCS-29'),
(25, 'Ameer Zaib', 'xyz', 'Watan Khan', '552221232', '19-BSCS-30'),
(26, 'Muhammad Nabeel', 'xyz', 'Muhammad Shakeel', '552221232', '19-BSCS-31'),
(27, 'Muhammad Younis', 'xyz', 'Ali Asghar', '552221232', '19-BSCS-32'),
(28, 'Aun Ali', 'xyz', 'Fida Hussain', '552221232', '19-BSCS-33'),
(29, 'Shaikh Sayem Udin', 'xyz', 'Muhammad Fiaz Udin', '552221232', '19-BSCS-34'),
(30, 'Muhammad Usman', 'xyz', 'Muhammad Zahid', '552221232', '19-BSCS-36'),
(31, 'Ayesha Bilal', 'xyz', 'Muhammad Ayoub', '552221232', '19-BSCS-37'),
(32, 'Zain Javed', 'xyz', 'Javed Akhter', '552221232', '19-BSCS-38'),
(33, 'Saira Sial', 'xyz', 'Muhammad Ramzan Raza', '552221232', '19-BSCS-40'),
(34, 'Muhammad Ilyas', 'xyz', 'Abdul Raheem', '552221232', '19-BSCS-41'),
(35, 'Hareem Iftikhar', 'xyz', 'Iftikhar Ahmed', '552221232', '19-BSCS-42'),
(36, 'Syed Aale Ahmed', 'xyz', 'Syed Fuzail Ahmed', '552221232', '19-BSCS-43'),
(37, 'Muhammad Haroon', 'xyz', 'Abdul Waheed', '552221232', '19-BSCS-45'),
(38, 'Sara Batool', 'xyz', 'Shahid Iqbal', '552221232', '19-BSCS-46'),
(39, 'Waleed Irshad', 'xyz', 'Irshad Ahmed', '552221232', '19-BSCS-47'),
(40, 'Noorulain', 'xyz', 'Dawood Mustaqeem', '552221232', '19-BSCS-48'),
(41, 'Shuja Ali', 'xyz', 'Tahir Hussain Surahiyo', '552221232', '19-BSCS-49'),
(42, 'Dawood', 'xyz', 'Muhammad Aslam', '552221232', '19-BSCS-51'),
(43, 'Qazi  Muhammad Ramzan', 'xyz', 'Muneer Ahmed', '552221232', '19-BSCS-52');

-- --------------------------------------------------------

--
-- Table structure for table `bscs_4_11_1_a_attendance`
--

CREATE TABLE `bscs_4_11_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bscs_4_11_1_a_attendance`
--

INSERT INTO `bscs_4_11_1_a_attendance` (`lecture_id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `a31`, `a32`, `a33`, `a34`, `a35`, `a36`, `a37`, `a38`, `a39`, `a40`, `a41`, `a42`, `a43`, `a44`, `a45`, `a46`, `a47`, `a48`, `a49`, `a50`, `a51`, `a52`, `a53`, `a54`, `a55`, `a56`, `a57`, `a58`, `a59`, `a60`, `a61`, `a62`, `a63`, `a64`, `a65`, `a66`, `a67`, `a68`, `a69`, `a70`, `a71`, `a72`, `a73`, `a74`, `a75`, `a76`, `a77`, `a78`, `a79`, `a80`, `a81`, `a82`, `a83`, `a84`, `a85`, `a86`, `a87`, `a88`, `a89`, `a90`, `a91`, `a92`, `a93`, `a94`, `a95`, `a96`, `a97`, `a98`, `a99`, `a100`, `a101`, `a102`, `a103`, `a104`, `a105`, `a106`, `a107`, `a108`, `a109`, `a110`, `a111`, `a112`, `a113`, `a114`, `a115`, `a116`, `a117`, `a118`, `a119`, `a120`, `a121`, `a122`, `a123`, `a124`, `a125`, `a126`, `a127`, `a128`, `a129`, `a130`, `a131`, `a132`, `a133`, `a134`, `a135`, `a136`, `a137`, `a138`, `a139`, `a140`, `a141`, `a142`, `a143`, `a144`, `a145`, `a146`, `a147`, `a148`, `a149`, `a150`) VALUES
(1, 'present', 'present', 'present', 'absent', 'present', 'absent', 'absent', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'absent', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'present', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'present', 'present', 'present', 'present', 'present', 'present', 'absent', 'absent', 'present', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'absent', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'present', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bscs_4_12_1_a_attendance`
--

CREATE TABLE `bscs_4_12_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bscs_4_12_1_a_attendance`
--

INSERT INTO `bscs_4_12_1_a_attendance` (`lecture_id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `a31`, `a32`, `a33`, `a34`, `a35`, `a36`, `a37`, `a38`, `a39`, `a40`, `a41`, `a42`, `a43`, `a44`, `a45`, `a46`, `a47`, `a48`, `a49`, `a50`, `a51`, `a52`, `a53`, `a54`, `a55`, `a56`, `a57`, `a58`, `a59`, `a60`, `a61`, `a62`, `a63`, `a64`, `a65`, `a66`, `a67`, `a68`, `a69`, `a70`, `a71`, `a72`, `a73`, `a74`, `a75`, `a76`, `a77`, `a78`, `a79`, `a80`, `a81`, `a82`, `a83`, `a84`, `a85`, `a86`, `a87`, `a88`, `a89`, `a90`, `a91`, `a92`, `a93`, `a94`, `a95`, `a96`, `a97`, `a98`, `a99`, `a100`, `a101`, `a102`, `a103`, `a104`, `a105`, `a106`, `a107`, `a108`, `a109`, `a110`, `a111`, `a112`, `a113`, `a114`, `a115`, `a116`, `a117`, `a118`, `a119`, `a120`, `a121`, `a122`, `a123`, `a124`, `a125`, `a126`, `a127`, `a128`, `a129`, `a130`, `a131`, `a132`, `a133`, `a134`, `a135`, `a136`, `a137`, `a138`, `a139`, `a140`, `a141`, `a142`, `a143`, `a144`, `a145`, `a146`, `a147`, `a148`, `a149`, `a150`) VALUES
(2, 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bscs_4_13_1_a_attendance`
--

CREATE TABLE `bscs_4_13_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bscs_4_14_1_a_attendance`
--

CREATE TABLE `bscs_4_14_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bscs_4_14_1_a_attendance`
--

INSERT INTO `bscs_4_14_1_a_attendance` (`lecture_id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `a31`, `a32`, `a33`, `a34`, `a35`, `a36`, `a37`, `a38`, `a39`, `a40`, `a41`, `a42`, `a43`, `a44`, `a45`, `a46`, `a47`, `a48`, `a49`, `a50`, `a51`, `a52`, `a53`, `a54`, `a55`, `a56`, `a57`, `a58`, `a59`, `a60`, `a61`, `a62`, `a63`, `a64`, `a65`, `a66`, `a67`, `a68`, `a69`, `a70`, `a71`, `a72`, `a73`, `a74`, `a75`, `a76`, `a77`, `a78`, `a79`, `a80`, `a81`, `a82`, `a83`, `a84`, `a85`, `a86`, `a87`, `a88`, `a89`, `a90`, `a91`, `a92`, `a93`, `a94`, `a95`, `a96`, `a97`, `a98`, `a99`, `a100`, `a101`, `a102`, `a103`, `a104`, `a105`, `a106`, `a107`, `a108`, `a109`, `a110`, `a111`, `a112`, `a113`, `a114`, `a115`, `a116`, `a117`, `a118`, `a119`, `a120`, `a121`, `a122`, `a123`, `a124`, `a125`, `a126`, `a127`, `a128`, `a129`, `a130`, `a131`, `a132`, `a133`, `a134`, `a135`, `a136`, `a137`, `a138`, `a139`, `a140`, `a141`, `a142`, `a143`, `a144`, `a145`, `a146`, `a147`, `a148`, `a149`, `a150`) VALUES
(3, 'present', 'present', 'present', 'absent', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'present', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bscs_4_15_1_a_attendance`
--

CREATE TABLE `bscs_4_15_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bscs_5_1_a_students`
--

CREATE TABLE `bscs_5_1_a_students` (
  `student_rollnumber` int(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_email` varchar(100) DEFAULT NULL,
  `student_fathername` varchar(100) DEFAULT NULL,
  `student_mobile` varchar(100) DEFAULT NULL,
  `student_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bscs_5_1_a_students`
--

INSERT INTO `bscs_5_1_a_students` (`student_rollnumber`, `student_name`, `student_email`, `student_fathername`, `student_mobile`, `student_id`) VALUES
(1, 'Majid Ali Soomro', 'xyz', 'Noor Ahmed Soomro', '216611509', '19/F-BSCS-01'),
(2, 'Syed Anosh Raza Naqvi', 'xyz', 'Syed Anosh Raza Naqvi', '552221232', '19/F-BSCS-02'),
(3, 'Muhammad Hamza', 'xyz', 'Muhammad Faqeer', '552221232', '19/F-BSCS-03'),
(4, 'Hassan Masood Brohi', 'xyz', 'Masood Anwar Brohi', '552221232', '19/F-BSCS-04'),
(5, 'Safeer Sheikh', 'xyz', 'Sohial Sheikh', '552221232', '19/F-BSCS-05'),
(6, 'Arbab Ali', 'xyz', 'Hamid Ali', '552221232', '19/F-BSCS-06'),
(7, 'Yousra Hassan', 'xyz', 'Qamar-ul-Hassan', '552221232', '19/F-BSCS-07'),
(8, 'Muhammad Faizan', 'xyz', 'Imam Bakhsh', '552221232', '19/F-BSCS-08'),
(9, 'Muhammad Ali Zaib', 'xyz', 'Muhammad Sohail', '552221232', '19/F-BSCS-09'),
(10, 'Muhammad Zaid Sher', 'xyz', 'Hafiz Sher Muhammad Mewati', '552221232', '19/F-BSCS-10'),
(11, 'Ashar Ahmed', 'xyz', 'Mazhar Ahmed', '552221232', '19/F-BSCS-11'),
(12, 'Anus Ahmed', 'xyz', 'Ejaz Ahmed', '552221232', '19/F-BSCS-12'),
(13, 'Wasamat Ahmed', 'xyz', 'Javed Ahmed', '552221232', '19/F-BSCS-13'),
(14, 'Talha Azeem Baig', 'xyz', 'Muhammad Saleem Baig', '552221232', '19/F-BSCS-14'),
(15, 'Umair Azama Baig', 'xyz', 'Muhammad Saleem Baig', '552221232', '19/F-BSCS-15'),
(16, 'Haroon Johnson', 'xyz', 'Johnson Vincent', '552221232', '19/F-BSCS-16'),
(17, 'Hassan Nadeem', 'xyz', 'Muhammad Nadeem', '552221232', '19/F-BSCS-17'),
(18, 'Syed Muhammad Abbas Raza Zaidi', 'xyz', 'Syed Muhammad Abid Hasan', '552221232', '19/F-BSCS-18'),
(19, 'Haris Naseer', 'xyz', 'Naseer Ahmed', '552221232', '19/F-BSCS-19'),
(20, 'Muhammad Umer Farooq', 'xyz', 'Muhammad Farooq', '552221232', '19/F-BSCS-20'),
(21, 'Shahzaib', 'xyz', 'Ghulam Mustafa', '552221232', '19/F-BSCS-21'),
(22, 'Mirza Muhammad Ubaid Ullah', 'xyz', 'Muhammad Afzal Akbar', '552221232', '19/F-BSCS-22'),
(23, 'Muhammad Abu Sufyan', 'xyz', 'Muhammad Aslam', '552221232', '19/F-BSCS-23'),
(24, 'Kapil Das', 'xyz', 'Pooran Das', '552221232', '19/F-BSCS-24'),
(25, 'Syeda Jaweria Azeem', 'xyz', 'Muhammad Azeem Ali', '552221232', '19/F-BSCS-25'),
(26, 'Unza Sohail', 'xyz', 'Muhammad Sohail', '552221232', '19/F-BSCS-26'),
(27, 'Asad Ali Keryo', 'xyz', 'Fida Hussain', '552221232', '19/F-BSCS-27'),
(28, 'Syed Tahmeer Hussain Naqvi', 'xyz', 'Syed Mazher Hussain Naqvi', '552221232', '19/F-BSCS-28'),
(29, 'Kisa Zehra', 'xyz', 'Syed Zaigham Abbas', '552221232', '19/F-BSCS-29'),
(30, 'Muhammad Shayan Saleem', 'xyz', 'Muhammad Saleem Lakhani', '552221232', '19/F-BSCS-30'),
(31, 'Owais Ahmed Khan', 'xyz', 'Iqbal Ahmed', '552221232', '19/F-BSCS-31'),
(32, 'Abdul Mujeeb Khan', 'xyz', 'Muhammad Iqbal Khan', '552221232', '19/F-BSCS-32'),
(33, 'Reeba Siddiqui', 'xyz', 'Muhammad Naeem Ahmed Siddiqui', '552221232', '19/F-BSCS-33'),
(34, 'Muhammad Anas', 'xyz', 'Muhammad Rizwan', '552221232', '19/F-BSCS-34'),
(35, 'Asif Ahmed Khan', 'xyz', 'Shahid Hayat Khan', '552221232', '19/F-BSCS-35'),
(36, 'Riba', 'xyz', 'Muhammad Jawaid', '552221232', '19/F-BSCS-36'),
(37, 'Aleesha Zahid', 'xyz', 'Muhammad Zahid Kamal', '552221232', '19/F-BSCS-37'),
(38, 'Malik Muhammad Jahangir', 'xyz', 'Malik Alamgir', '552221232', '19/F-BSCS-38'),
(39, 'Umer Shah', 'xyz', 'Zahir Shah', '552221232', '19/F-BSCS-39'),
(40, 'Muhammad Humais', 'xyz', 'Muhammad Yusuf', '552221232', '19/F-BSCS-40'),
(41, 'Areeba', 'xyz', 'Shakeel Ahmed', '552221232', '19/F-BSCS-41'),
(42, 'Ifra Gulzar', 'xyz', 'Muhammad Gulzar', '552221232', '19/F-BSCS-42'),
(43, 'Fasih Ur Rehman Shahid', 'xyz', 'Shahid Hussain', '552221232', '19/F-BSCS-43'),
(44, 'Muhammad Owais Shaikh', 'xyz', 'Muhammad Tasleem Shaikh', '552221232', '19/F-BSCS-44'),
(45, 'Haji Muhammad', 'xyz', 'Muhammad Javaid', '552221232', '19/F-BSCS-45'),
(46, 'Muhammad Ali     ', 'xyz', 'Mushtaque Ali', '552221232', '19/F-BSCS-46'),
(47, 'Syed Mohammad Jawad', 'xyz', 'Syed Mohammad Ali', '552221232', '19/F-BSCS-47'),
(48, 'Syed Haseeb Haider Buhkari', 'xyz', 'Syed Muhammad Ilyas Bukhari', '552221232', '19/F-BSCS-48'),
(49, 'Adeel Amjad', 'xyz', 'Amjad Hameed                                                                                        ', '552221232', '19/F-BSCS-49'),
(50, 'Bilal Farooq Khan', 'xyz', 'Ahmed Farooq Khan', '552221232', '19/F-BSCS-50');

-- --------------------------------------------------------

--
-- Table structure for table `bscs_5_16_1_a_attendance`
--

CREATE TABLE `bscs_5_16_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bscs_5_17_1_a_attendance`
--

CREATE TABLE `bscs_5_17_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bscs_5_18_1_a_attendance`
--

CREATE TABLE `bscs_5_18_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bscs_5_19_1_a_attendance`
--

CREATE TABLE `bscs_5_19_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bsm_4_1_1_a_attendance`
--

CREATE TABLE `bsm_4_1_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsm_4_1_a_students`
--

CREATE TABLE `bsm_4_1_a_students` (
  `student_rollnumber` int(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_email` varchar(100) DEFAULT NULL,
  `student_fathername` varchar(100) DEFAULT NULL,
  `student_mobile` varchar(100) DEFAULT NULL,
  `student_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsm_4_1_a_students`
--

INSERT INTO `bsm_4_1_a_students` (`student_rollnumber`, `student_name`, `student_email`, `student_fathername`, `student_mobile`, `student_id`) VALUES
(1, 'Munhamir Ahmed', 'xyz', 'xyz', '216611509', '19-BSM-02'),
(2, 'Zobia Mateen', 'xyz', 'xyz', '552221232', '19-BSM-03'),
(3, 'Aftab Ullah', 'xyz', 'xyz', '552221232', '19-BSM-05'),
(4, 'Jahanzeb Khan', 'xyz', 'xyz', '552221232', '19-BSM-08'),
(5, 'Nimra Naz', 'xyz', 'xyz', '552221232', '19-BSM-09'),
(6, 'Sadaqat Ali', 'xyz', 'xyz', '552221232', '19-BSM-10'),
(7, 'Febha Rana', 'xyz', 'xyz', '552221232', '19-BSM-11'),
(8, 'Faizan', 'xyz', 'xyz', '552221232', '19-BSM-13'),
(9, 'Suleman Kaleem', 'xyz', 'xyz', '552221232', '19-BSM-14'),
(10, 'M. Mustafa Khan', 'xyz', 'xyz', '552221232', '19-BSM-15'),
(11, 'Tehreem Eijaz', 'xyz', 'xyz', '552221232', '19-BSM-16'),
(12, 'Waqas Akhter', 'xyz', 'xyz', '552221232', '19-BSM-17'),
(13, 'M. Maymood Hashmi', 'xyz', 'xyz', '552221232', '19-BSM-18'),
(14, 'Areeba Mirza', 'xyz', 'xyz', '552221232', '19-BSM-20'),
(15, 'M. Musdassir', 'xyz', 'xyz', '552221232', '19-BSM-21'),
(16, 'Waqas Azam', 'xyz', 'xyz', '552221232', '19-BSM-23'),
(17, 'Arisha Aziz', 'xyz', 'xyz', '552221232', '19-BSM-25'),
(18, 'Kashif Ahmed', 'xyz', 'xyz', '552221232', '19-BSM-26'),
(19, 'Syed Ovais Ali', 'xyz', 'xyz', '552221232', '19-BSM-27'),
(20, 'Noman Ali', 'xyz', 'xyz', '552221232', '19-BSM-29'),
(21, 'M. Shahzar Khan', 'xyz', 'xyz', '552221232', '19-BSM-30');

-- --------------------------------------------------------

--
-- Table structure for table `bsm_4_2_1_a_attendance`
--

CREATE TABLE `bsm_4_2_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsm_4_3_1_a_attendance`
--

CREATE TABLE `bsm_4_3_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsm_4_5_1_a_attendance`
--

CREATE TABLE `bsm_4_5_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsm_4_5_1_a_attendance`
--

INSERT INTO `bsm_4_5_1_a_attendance` (`lecture_id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `a31`, `a32`, `a33`, `a34`, `a35`, `a36`, `a37`, `a38`, `a39`, `a40`, `a41`, `a42`, `a43`, `a44`, `a45`, `a46`, `a47`, `a48`, `a49`, `a50`, `a51`, `a52`, `a53`, `a54`, `a55`, `a56`, `a57`, `a58`, `a59`, `a60`, `a61`, `a62`, `a63`, `a64`, `a65`, `a66`, `a67`, `a68`, `a69`, `a70`, `a71`, `a72`, `a73`, `a74`, `a75`, `a76`, `a77`, `a78`, `a79`, `a80`, `a81`, `a82`, `a83`, `a84`, `a85`, `a86`, `a87`, `a88`, `a89`, `a90`, `a91`, `a92`, `a93`, `a94`, `a95`, `a96`, `a97`, `a98`, `a99`, `a100`, `a101`, `a102`, `a103`, `a104`, `a105`, `a106`, `a107`, `a108`, `a109`, `a110`, `a111`, `a112`, `a113`, `a114`, `a115`, `a116`, `a117`, `a118`, `a119`, `a120`, `a121`, `a122`, `a123`, `a124`, `a125`, `a126`, `a127`, `a128`, `a129`, `a130`, `a131`, `a132`, `a133`, `a134`, `a135`, `a136`, `a137`, `a138`, `a139`, `a140`, `a141`, `a142`, `a143`, `a144`, `a145`, `a146`, `a147`, `a148`, `a149`, `a150`) VALUES
(5, 'absent', 'present', 'absent', 'absent', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'present', 'present', 'present', 'present', 'absent', 'absent', 'present', 'present', 'absent', 'absent', 'absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bsm_5_1_a_students`
--

CREATE TABLE `bsm_5_1_a_students` (
  `student_rollnumber` int(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_email` varchar(100) DEFAULT NULL,
  `student_fathername` varchar(100) DEFAULT NULL,
  `student_mobile` varchar(100) DEFAULT NULL,
  `student_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsm_5_1_a_students`
--

INSERT INTO `bsm_5_1_a_students` (`student_rollnumber`, `student_name`, `student_email`, `student_fathername`, `student_mobile`, `student_id`) VALUES
(1, 'Laiba Javaid', 'xyz', 'xyz', '216611509', '19-/F-BSM-01'),
(2, 'Misqal Fatima', 'xyz', 'xyz', '552221232', '19/F-BSM-02'),
(3, 'Ahsan', 'xyz', 'xyz', '552221232', '19/F-BSM-03'),
(4, 'M. Shahbaz', 'xyz', 'xyz', '552221232', '19/F-BSM-04'),
(5, 'Rubab Ishaq', 'xyz', 'xyz', '552221232', '19/F-BSM-05'),
(6, 'M. Sahil', 'xyz', 'xyz', '552221232', '19/F-BSM-06'),
(7, 'Talha Mehmood', 'xyz', 'xyz', '552221232', '19/F-BSM-08'),
(8, 'Areeb Zubair', 'xyz', 'xyz', '552221232', '19/F-BSM-09'),
(9, 'Zahid Abbas', 'xyz', 'xyz', '552221232', '19/F-BSM-10'),
(10, 'Azhar', 'xyz', 'xyz', '552221232', '19/F-BSM-12'),
(11, 'Hemraj Singh', 'xyz', 'xyz', '552221232', '19/F-BSM-13'),
(12, 'Abdul Hadi', 'xyz', 'xyz', '552221232', '19/F-BSM-14'),
(13, 'Syeda Fabiha Ali', 'xyz', 'xyz', '552221232', '19/F-BSM-15'),
(14, 'M. Ahsan Hafeez', 'xyz', 'xyz', '552221232', '19/F-BSM-16'),
(15, 'Owais Ali Rao', 'xyz', 'xyz', '552221232', '19/F-BSM-17'),
(16, 'M. Hassan Yawar', 'xyz', 'xyz', '552221232', '19/F-BSM-18'),
(17, 'Syed Jawad', 'xyz', 'xyz', '552221232', '19/F-BSM-19');

-- --------------------------------------------------------

--
-- Table structure for table `bsm_5_6_1_a_attendance`
--

CREATE TABLE `bsm_5_6_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsm_5_8_1_a_attendance`
--

CREATE TABLE `bsm_5_8_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsm_5_9_1_a_attendance`
--

CREATE TABLE `bsm_5_9_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsm_5_10_1_a_attendance`
--

CREATE TABLE `bsm_5_10_1_a_attendance` (
  `lecture_id` int(100) NOT NULL,
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
  `a120` varchar(10) DEFAULT NULL,
  `a121` varchar(10) DEFAULT NULL,
  `a122` varchar(10) DEFAULT NULL,
  `a123` varchar(10) DEFAULT NULL,
  `a124` varchar(10) DEFAULT NULL,
  `a125` varchar(10) DEFAULT NULL,
  `a126` varchar(10) DEFAULT NULL,
  `a127` varchar(10) DEFAULT NULL,
  `a128` varchar(10) DEFAULT NULL,
  `a129` varchar(10) DEFAULT NULL,
  `a130` varchar(10) DEFAULT NULL,
  `a131` varchar(10) DEFAULT NULL,
  `a132` varchar(10) DEFAULT NULL,
  `a133` varchar(10) DEFAULT NULL,
  `a134` varchar(10) DEFAULT NULL,
  `a135` varchar(10) DEFAULT NULL,
  `a136` varchar(10) DEFAULT NULL,
  `a137` varchar(10) DEFAULT NULL,
  `a138` varchar(10) DEFAULT NULL,
  `a139` varchar(10) DEFAULT NULL,
  `a140` varchar(10) DEFAULT NULL,
  `a141` varchar(10) DEFAULT NULL,
  `a142` varchar(10) DEFAULT NULL,
  `a143` varchar(10) DEFAULT NULL,
  `a144` varchar(10) DEFAULT NULL,
  `a145` varchar(10) DEFAULT NULL,
  `a146` varchar(10) DEFAULT NULL,
  `a147` varchar(10) DEFAULT NULL,
  `a148` varchar(10) DEFAULT NULL,
  `a149` varchar(10) DEFAULT NULL,
  `a150` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `day_id` int(255) NOT NULL,
  `day_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`day_id`, `day_name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` varchar(10) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
('ar', 'Architecture and Engineering'),
('bscs', 'Bachelors of Computer Science'),
('bsm', 'Bachelors of  Mathematics'),
('ch', 'Chemical Engineering'),
('ch_ms', 'MS. Chemical'),
('ch_phd', 'PHd. Chemical'),
('cs', 'Computer System Engineering'),
('ee', 'Energy and Environment Engineering'),
('es', 'Electronics Engineering'),
('es_css_ms', 'Communicational and Signal System(MS. Electronics'),
('es_pe_ms', 'Power Electronics (MS. Electronics)'),
('es_phd', 'PHd. Electronics'),
('ie_m_ms', 'MS. Industrial Engg and Management'),
('in', 'Industrial Engineering and Management'),
('mm', 'Material and Metallurgy Engineering'),
('mmt_ms', 'MS. Metallurgy and Material Engg'),
('pg', 'Petroleum and Gas Engineering'),
('te', 'Telecommunication Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `engaged_classes`
--

CREATE TABLE `engaged_classes` (
  `engaged_id` int(11) NOT NULL,
  `lecture_id` int(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `batch_id` int(10) NOT NULL,
  `dept_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_details`
--

CREATE TABLE `lecture_details` (
  `lecture_id` int(255) NOT NULL,
  `period_id` int(255) NOT NULL,
  `lecture_date` date NOT NULL,
  `week_id` int(255) NOT NULL,
  `term_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecture_details`
--

INSERT INTO `lecture_details` (`lecture_id`, `period_id`, `lecture_date`, `week_id`, `term_id`) VALUES
(1, 8, '2020-10-26', 0, 0),
(2, 38, '2020-10-26', 0, 0),
(3, 10, '2020-10-26', 0, 0),
(4, 11, '2020-10-27', 0, 0),
(5, 32, '2020-10-27', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` int(3) NOT NULL,
  `user_first` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`username`, `user_password`, `user_type`, `user_first`) VALUES
('arslan_ahmed', 'admin', 3, 'a'),
('azhar_iqbal', 'admin', 3, 'a'),
('bulbul_jan', 'admin', 3, 'a'),
('fahad_iqbal', 'admin', 3, 'a'),
('fida_hussain', 'admin', 3, 'a'),
('g.a_kandhro', 'admin', 3, 'a'),
('mushtaque_ahmed', 'admin', 3, 'a'),
('nazia_irshad', 'admin', 3, 'a'),
('nizamuddin_shah', 'admin', 3, 'a'),
('saleem_ahmed', 'admin', 3, 'a'),
('saqib_bhatti', 'admin', 3, 'a'),
('shafquat_ali', 'admin', 3, 'a'),
('shamim', 'admin', 3, 'a'),
('sumaira_khan', 'admin', 3, 'a'),
('sumrah_hussain', 'admin', 3, 'a'),
('tanseen_zehra', 'admin', 3, 'a'),
('zahid_tunio', 'admin', 3, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `period_id` int(100) NOT NULL,
  `period_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`period_id`, `period_name`) VALUES
(1, '9:00am-9:55am'),
(2, '9:00am-10:55am'),
(3, '9:00am-11:55am'),
(4, '9:00am-12:55pm'),
(5, '9:00am-1:55pm'),
(6, '9:00am-2:55pm'),
(7, '10:00am-10:55am'),
(8, '10:00am-11:55am'),
(9, '10:00am-12:55pm'),
(10, '10:00am-1:55pm'),
(11, '10:00am-2:55pm'),
(12, '11:00am-11:55am'),
(13, '11:00am-12:55pm'),
(14, '11:00am-1:55pm'),
(15, '11:00am-2:55pm'),
(16, '11:00am-3:55pm'),
(17, '11:00am-11:55am'),
(18, '11:00am-12:55pm'),
(19, '11:00am-1:55pm'),
(20, '11:00am-2:55pm'),
(21, '11:00am-3:55pm'),
(22, '12:00pm-12:55pm'),
(23, '12:00pm-1:55pm'),
(24, '12:00pm-2:55pm'),
(25, '12:00pm-3:55pm'),
(26, '12:00pm-4:55pm'),
(27, '1:00pm-1:55pm'),
(28, '1:00pm-2:55pm'),
(29, '1:00pm-3:55pm'),
(30, '1:00pm-4:55pm'),
(31, '1:00pm-5:55pm'),
(32, '2:00pm-2:55pm'),
(33, '2:00pm-3:55pm'),
(34, '2:00pm-4:55pm'),
(35, '2:00pm-5:55pm'),
(36, '2:00pm-6:55pm'),
(37, '3:00pm-3:55pm'),
(38, '3:00pm-4:55pm'),
(39, '3:00pm-5:55pm'),
(40, '3:00pm-6:55pm'),
(41, '4:00pm-4:55pm'),
(42, '4:00pm-5:55pm'),
(43, '4:00pm-6:55pm'),
(44, '5:00pm-5:55pm'),
(45, '5:00pm-6:55pm'),
(46, '6:00pm-6:55pm'),
(47, '7:00pm-8:00pm'),
(48, '7:00pm-9:00pm'),
(49, '6:00pm-8:00pm'),
(50, '6:00pm-9:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `period_table_normal`
--

CREATE TABLE `period_table_normal` (
  `period_id` int(11) NOT NULL,
  `section` varchar(10) NOT NULL,
  `timing_id` int(100) NOT NULL,
  `teacher_id` int(100) NOT NULL,
  `dept_id` varchar(100) NOT NULL,
  `batch_id` int(100) NOT NULL,
  `room_id` int(100) NOT NULL,
  `subject_id` int(100) NOT NULL,
  `day_id` int(100) NOT NULL,
  `credit_hour` int(10) NOT NULL,
  `term_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `period_table_normal`
--

INSERT INTO `period_table_normal` (`period_id`, `section`, `timing_id`, `teacher_id`, `dept_id`, `batch_id`, `room_id`, `subject_id`, `day_id`, `credit_hour`, `term_id`) VALUES
(1, 'a', 42, 6, 'bscs', 5, 1, 16, 2, 3, 1),
(2, 'a', 42, 7, 'bscs', 5, 1, 17, 2, 3, 1),
(3, 'a', 41, 8, 'bscs', 5, 1, 18, 4, 3, 1),
(4, 'a', 44, 7, 'bscs', 5, 1, 17, 4, 3, 1),
(5, 'a', 46, 6, 'bscs', 5, 1, 16, 4, 3, 1),
(6, 'a', 42, 8, 'bscs', 5, 1, 18, 5, 3, 1),
(7, 'a', 46, 8, 'bscs', 5, 1, 19, 5, 3, 1),
(8, 'a', 41, 1, 'bscs', 4, 1, 11, 1, 3, 1),
(10, 'a', 45, 2, 'bscs', 4, 1, 14, 1, 3, 1),
(11, 'a', 41, 1, 'bscs', 4, 1, 11, 2, 3, 1),
(12, 'a', 44, 2, 'bscs', 4, 1, 14, 2, 3, 1),
(13, 'a', 41, 3, 'bscs', 4, 1, 12, 3, 3, 1),
(14, 'a', 44, 4, 'bscs', 4, 1, 15, 3, 3, 1),
(15, 'a', 46, 1, 'bscs', 4, 1, 11, 3, 3, 1),
(16, 'a', 41, 5, 'bscs', 4, 1, 13, 1, 3, 1),
(17, 'a', 46, 3, 'bscs', 4, 1, 12, 4, 3, 1),
(18, 'a', 42, 5, 'bscs', 4, 1, 13, 5, 3, 1),
(19, 'a', 41, 13, 'bsm', 5, 1, 6, 1, 3, 1),
(20, 'a', 45, 14, 'bsm', 5, 1, 8, 1, 3, 1),
(21, 'a', 41, 13, 'bsm', 5, 1, 6, 2, 3, 1),
(22, 'a', 44, 14, 'bsm', 5, 1, 8, 2, 3, 1),
(23, 'a', 46, 15, 'bsm', 5, 1, 9, 2, 3, 1),
(24, 'a', 41, 13, 'bsm', 5, 1, 6, 3, 3, 1),
(25, 'a', 45, 15, 'bsm', 5, 1, 9, 3, 3, 1),
(26, 'a', 47, 17, 'bsm', 5, 1, 10, 3, 3, 1),
(27, 'a', 49, 17, 'bsm', 5, 1, 10, 1, 3, 1),
(28, 'a', 42, 9, 'bsm', 4, 1, 1, 1, 3, 1),
(29, 'a', 46, 11, 'bsm', 4, 1, 3, 1, 3, 1),
(30, 'a', 41, 9, 'bsm', 4, 1, 1, 2, 3, 1),
(31, 'a', 44, 11, 'bsm', 4, 1, 3, 2, 3, 1),
(32, 'a', 49, 12, 'bsm', 4, 1, 5, 2, 3, 1),
(33, 'a', 42, 10, 'bsm', 4, 1, 2, 3, 3, 1),
(34, 'a', 46, 11, 'bsm', 4, 1, 3, 3, 3, 1),
(35, 'a', 47, 12, 'bsm', 4, 1, 5, 3, 3, 1),
(36, 'a', 41, 10, 'bsm', 4, 1, 2, 4, 3, 1),
(37, 'a', 47, 8, 'bscs', 5, 1, 19, 4, 3, 1),
(38, 'a', 47, 3, 'bscs', 4, 1, 12, 1, 3, 1),
(39, 'a', 49, 4, 'bscs', 4, 1, 15, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(255) NOT NULL,
  `room_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`) VALUES
(1, 'online');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_type`) VALUES
(1, 'Mechanics (TH)', 'theory'),
(2, 'Physics-IV (TH)', 'theory'),
(3, 'Introduction to Computer (TH)', 'theory'),
(4, 'Pakistan Studies (TH)', 'theory'),
(5, 'Differential Equation (TH)', 'theory'),
(6, 'Mathematical Methods (TH)', 'theory'),
(7, 'Islamic Studies (TH)', 'theory'),
(8, 'Calculus-II (TH)', 'theory'),
(9, 'Physics-II (TH)', 'theory'),
(10, 'Chemistry-II (TH)', 'theory'),
(11, 'Database System (TH)', 'theory'),
(12, 'Introduction to Economics (TH)', 'theory'),
(13, 'Numerical Computing (TH)', 'theory'),
(14, 'Discrete Structure (TH)', 'theory'),
(15, 'Theory of Automata (TH)', 'theory'),
(16, 'Linear Algebra (TH)', 'theory'),
(17, 'Communication Skills (TH)', 'theory'),
(18, 'Object Oriented Programming (TH)', 'theory'),
(19, 'Basic Electronics (TH)', 'theory'),
(20, 'Software Defined Radio Network', 'THEORY'),
(21, 'Wave Propagation Antenas', 'THEORY'),
(22, 'Engg:Research Methodolgy', 'THEORY'),
(23, 'Controll of DC Machines', 'THEORY'),
(24, 'Advance Power Electronics', 'THEORY'),
(25, 'Advanced Embede System design', 'THEORY'),
(26, 'Smart grid networks', 'THEORY'),
(27, 'Advanced Mathematical Modeling & simulation', 'THEORY'),
(28, 'Advanced Research Methodolgy', 'THEORY'),
(39, 'Advanced Analytic Techniques', 'theory'),
(40, 'Thesis & Munuscript Writing', 'theory'),
(41, 'Bio Chemical Engg:', 'theory'),
(42, 'Advanced Chemical Thermodynamics', 'theory'),
(43, 'Advanced Sepration Process', 'theory'),
(44, 'Managent Of Research & Development', 'theory'),
(45, 'Exp: Desing & Analysis', 'theory'),
(46, 'Supply Chain Management (Core)', 'theory'),
(47, 'Operation Research (Elective)', 'theory'),
(48, 'Computer Integerated Manufacturing (E)', 'theory'),
(49, 'Six Sigma Methodologies', 'theory'),
(50, 'Lean & Agile Manufacturing', 'theory'),
(51, 'Advance Engg: Ceramics & Glasses', 'theory'),
(52, 'Advance Steel', 'theory'),
(53, 'Research Methodology', 'theory'),
(54, 'Advance Material', 'theory'),
(55, 'Nano Materials Technolgy', 'theory');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`) VALUES
(1, 'Engr. Fahad Iqbal'),
(2, 'Dr. Dost Mohammad Saqib Bhatti'),
(3, 'Engr. Shamim ur Rehman '),
(4, 'Dr.H.M. Zahid Tunio '),
(5, 'Mr. Shafquat Ali'),
(6, 'Dr. Arslan Ahmed'),
(7, 'Mr. Mushtaque Ahmed  '),
(8, 'Dr. Saleem Ahmed '),
(9, 'Dr. Sumaira Khan'),
(10, 'Ms. Sumrah Hussain'),
(11, 'Mr. Fida Hussain'),
(12, 'Dr. Bulbul Jan'),
(13, 'Dr. Azhar Iqbal'),
(14, 'Dr. Nazia Irshad'),
(15, 'Mr. Nizamuddin Shah'),
(16, 'Dr. Tasneem Zehra'),
(17, 'Dr. G.A Kandhro');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(100) NOT NULL,
  `term_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `term_name`) VALUES
(1, '2020 Fall');

-- --------------------------------------------------------

--
-- Table structure for table `usertype_1_info`
--

CREATE TABLE `usertype_1_info` (
  `username` varchar(255) NOT NULL,
  `user_displayname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertype_2_info`
--

CREATE TABLE `usertype_2_info` (
  `username` varchar(255) NOT NULL,
  `user_displayname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_number` varchar(100) NOT NULL,
  `user_depart` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertype_3_info`
--

CREATE TABLE `usertype_3_info` (
  `username` varchar(255) NOT NULL,
  `user_displayname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_number` varchar(100) NOT NULL,
  `user_teacherid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype_3_info`
--

INSERT INTO `usertype_3_info` (`username`, `user_displayname`, `user_email`, `user_number`, `user_teacherid`) VALUES
('arslan_ahmed', 'Dr. Arslan Ahmed', 'etc', '3045874120', 6),
('azhar_iqbal', 'Dr. Azhar Iqbal', 'etc', '3045874120', 13),
('bulbul_jan', 'Dr. Bulbul Jan', 'etc', '3045874120', 12),
('fahad_iqbal', 'Engr. Fahad Iqbal', 'etc', '3045874120', 1),
('fida_hussain', 'Mr. Fida Hussain', 'etc', '3045874120', 11),
('g.a_kandhro', 'Dr. G.A Kandhro', 'etc', '3045874120', 17),
('mushtaque_ahmed', 'Mr. Mushtaque Ahmed  ', 'etc', '3045874120', 7),
('nazia_irshad', 'Dr. Nazia Irshad', 'etc', '3045874120', 14),
('nizamuddin_shah', 'Mr. Nizamuddin Shah', 'etc', '3045874120', 15),
('saleem_ahmed', 'Dr. Saleem Ahmed ', 'etc', '3045874120', 8),
('saqib_bhatti', 'Dr. Dost Mohammad Saqib Bhatti', 'etc', '3045874120', 2),
('shafquat_ali', 'Mr. Shafquat Ali', 'etc', '3045874120', 5),
('shamim', 'Engr. Shamim ur Rehman ', 'etc', '3045874120', 3),
('sumaira_khan', 'Dr. Sumaira Khan', 'etc', '3045874120', 9),
('sumrah_hussain', 'Ms. Sumrah Hussain', 'etc', '3045874120', 10),
('tanseen_zehra', 'Dr. Tasneem Zehra', 'etc', '3045874120', 16),
('zahid_tunio', 'Dr.H.M. Zahid Tunio ', 'etc', '3045874120', 4);

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

CREATE TABLE `week` (
  `week_id` int(255) NOT NULL,
  `week_start` varchar(255) NOT NULL,
  `week_end` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD UNIQUE KEY `batch_id` (`batch_id`);

--
-- Indexes for table `bscs_4_1_a_students`
--
ALTER TABLE `bscs_4_1_a_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `bscs_4_11_1_a_attendance`
--
ALTER TABLE `bscs_4_11_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bscs_4_12_1_a_attendance`
--
ALTER TABLE `bscs_4_12_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bscs_4_13_1_a_attendance`
--
ALTER TABLE `bscs_4_13_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bscs_4_14_1_a_attendance`
--
ALTER TABLE `bscs_4_14_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bscs_4_15_1_a_attendance`
--
ALTER TABLE `bscs_4_15_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bscs_5_1_a_students`
--
ALTER TABLE `bscs_5_1_a_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `bscs_5_16_1_a_attendance`
--
ALTER TABLE `bscs_5_16_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bscs_5_17_1_a_attendance`
--
ALTER TABLE `bscs_5_17_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bscs_5_18_1_a_attendance`
--
ALTER TABLE `bscs_5_18_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bscs_5_19_1_a_attendance`
--
ALTER TABLE `bscs_5_19_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bsm_4_1_1_a_attendance`
--
ALTER TABLE `bsm_4_1_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bsm_4_1_a_students`
--
ALTER TABLE `bsm_4_1_a_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `bsm_4_2_1_a_attendance`
--
ALTER TABLE `bsm_4_2_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bsm_4_3_1_a_attendance`
--
ALTER TABLE `bsm_4_3_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bsm_4_5_1_a_attendance`
--
ALTER TABLE `bsm_4_5_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bsm_5_1_a_students`
--
ALTER TABLE `bsm_5_1_a_students`
  ADD PRIMARY KEY (`student_rollnumber`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `bsm_5_6_1_a_attendance`
--
ALTER TABLE `bsm_5_6_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bsm_5_8_1_a_attendance`
--
ALTER TABLE `bsm_5_8_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bsm_5_9_1_a_attendance`
--
ALTER TABLE `bsm_5_9_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `bsm_5_10_1_a_attendance`
--
ALTER TABLE `bsm_5_10_1_a_attendance`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD UNIQUE KEY `department_id` (`department_id`);

--
-- Indexes for table `engaged_classes`
--
ALTER TABLE `engaged_classes`
  ADD PRIMARY KEY (`engaged_id`);

--
-- Indexes for table `lecture_details`
--
ALTER TABLE `lecture_details`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`period_id`);

--
-- Indexes for table `period_table_normal`
--
ALTER TABLE `period_table_normal`
  ADD PRIMARY KEY (`period_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `usertype_1_info`
--
ALTER TABLE `usertype_1_info`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `usertype_2_info`
--
ALTER TABLE `usertype_2_info`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `usertype_3_info`
--
ALTER TABLE `usertype_3_info`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`week_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bscs_4_1_a_students`
--
ALTER TABLE `bscs_4_1_a_students`
  MODIFY `student_rollnumber` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `bscs_5_1_a_students`
--
ALTER TABLE `bscs_5_1_a_students`
  MODIFY `student_rollnumber` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `bsm_4_1_a_students`
--
ALTER TABLE `bsm_4_1_a_students`
  MODIFY `student_rollnumber` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bsm_5_1_a_students`
--
ALTER TABLE `bsm_5_1_a_students`
  MODIFY `student_rollnumber` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `day_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `engaged_classes`
--
ALTER TABLE `engaged_classes`
  MODIFY `engaged_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecture_details`
--
ALTER TABLE `lecture_details`
  MODIFY `lecture_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `period_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `period_table_normal`
--
ALTER TABLE `period_table_normal`
  MODIFY `period_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `week`
--
ALTER TABLE `week`
  MODIFY `week_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
