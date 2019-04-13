-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 09:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbit01`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(5) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `province` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `fullname`, `username`, `password`, `email`, `tel`, `province`) VALUES
(1, 'Tete Komkhuam', 'tete', '1234', 'tete@hotmail.com', '022221234', 70),
(2, 'Ron Weasley', 'ron', '1234', 'ron@hotmail.com', '025250925', 12),
(3, 'Donald Trump', 'trump', '1234', 'trump@hotmail.com', '027777777', 1),
(4, 'Luke Skywalker', 'luke', '1234', 'luke@hotmail.com', '028888888', 10),
(5, 'Prayuth Chanocha', 'tu44', '1234', 'tutu@hotmail.com', '0891234567', 1),
(13, 'Mark Zuckerberg', 'zuck', '1234', ' zuck@fb.com', '999', 2),
(14, 'Bill Gates', 'bill', '1234', ' bill@microsoft.com', '999', 1),
(18, 'Steve Jobs', 'jobs', '1234', 'jobs@apple.com', '1900190025', 64),
(19, 'Sehun', 'sehun94', '1234', ' sehun@sm.kr', '888', 6),
(23, 'Taylor Swift', 'swift1989', '1234', ' swift1989@yahoo.com', '025554444', 25),
(26, 'Wachii Dart', 'dart2', '1234', ' dart@hotmail.com', '0815554444', 26);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`pid`, `pname`) VALUES
(1, 'กรุงเทพมหานคร '),
(2, 'กระบี่ '),
(3, 'กาญจนบุรี '),
(4, 'กาฬสินธุ์ '),
(5, 'กำแพงเพชร '),
(6, 'ขอนแก่น '),
(7, 'จันทบุรี '),
(8, 'ฉะเชิงเทรา '),
(9, 'ชลบุรี '),
(10, 'ชัยนาท '),
(11, 'ชัยภูมิ '),
(12, 'ชุมพร '),
(13, 'เชียงราย '),
(14, 'เชียงใหม่ '),
(15, 'ตรัง '),
(16, 'ตราด '),
(17, 'ตาก '),
(18, 'นครนายก '),
(19, 'นครปฐม '),
(20, 'นครพนม '),
(21, 'นครราชสีมา '),
(22, 'นครศรีธรรมราช '),
(23, 'นครสวรรค์ '),
(24, 'นนทบุรี '),
(25, 'นราธิวาส '),
(26, 'น่าน '),
(27, 'บึงกาฬ '),
(28, 'บุรีรัมย์ '),
(29, 'ปทุมธานี '),
(30, 'ประจวบคีรีขันธ์ '),
(31, 'ปราจีนบุรี '),
(32, 'ปัตตานี '),
(33, 'พระนครศรีอยุธยา '),
(34, 'พังงา '),
(35, 'พัทลุง '),
(36, 'พิจิตร '),
(37, 'พิษณุโลก '),
(38, 'เพชรบุรี '),
(39, 'เพชรบูรณ์ '),
(40, 'แพร่ '),
(41, 'พะเยา '),
(42, 'ภูเก็ต '),
(43, 'มหาสารคาม '),
(44, 'มุกดาหาร '),
(45, 'แม่ฮ่องสอน '),
(46, 'ยะลา '),
(47, 'ยโสธร '),
(48, 'ร้อยเอ็ด '),
(49, 'ระนอง '),
(50, 'ระยอง '),
(51, 'ราชบุรี '),
(52, 'ลพบุรี '),
(53, 'ลำปาง '),
(54, 'ลำพูน '),
(55, 'เลย '),
(56, 'ศรีสะเกษ '),
(57, 'สกลนคร '),
(58, 'สงขลา '),
(59, 'สตูล '),
(60, 'สมุทรปราการ '),
(61, 'สมุทรสงคราม '),
(62, 'สมุทรสาคร '),
(63, 'สระแก้ว '),
(64, 'สระบุรี '),
(65, 'สิงห์บุรี '),
(66, 'สุโขทัย '),
(67, 'สุพรรณบุรี '),
(68, 'สุราษฎร์ธานี '),
(69, 'สุรินทร์ '),
(70, 'หนองคาย '),
(71, 'หนองบัวลำภู '),
(72, 'อ่างทอง '),
(73, 'อุดรธานี '),
(74, 'อุทัยธานี '),
(75, 'อุตรดิตถ์ '),
(76, 'อุบลราชธานี '),
(77, 'อำนาจเจริญ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
