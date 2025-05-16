-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 07:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro-k`
--

-- --------------------------------------------------------

--
-- Table structure for table `prepareq`
--

CREATE TABLE `prepareq` (
  `fetch_id` int(11) NOT NULL,
  `q_id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prepareq`
--

INSERT INTO `prepareq` (`fetch_id`, `q_id`, `question`, `a`, `b`, `c`, `d`, `ans`, `image`) VALUES
(22, 56, 'Which Team won IPL 2022 Cup?', 'RCB', 'MI', 'GT', 'CSK', 'GT', 'upload/ipl.jpg'),
(22, 57, 'Which team was the runner up in IPL 2022?', 'MI', 'CSK', 'RR', 'GT', 'RR', 'upload/ipltag.jpg'),
(22, 58, 'Which player Played most IPL as a Captain?', 'ROHIT', 'DHONI', 'KOHLI', 'SANJU', 'DHONI', 'upload/leader.jpg'),
(22, 59, 'Which player has won the Orange Cap for the most runs in a single IPL season on multiple occasions?\r\n', 'KOHLI', 'K.L.RAHUL', 'David Warner', 'FAF.du plessis', 'David Warner', 'upload/orange.jpg'),
(22, 60, 'Who is the only player to have scored two centuries in IPL finals?', 'Shane Watson', 'virat', 'A.b.d', 'chris gayle', 'Shane Watson', 'upload/'),
(22, 61, 'Who is the youngest player to score a fifty in IPL history?', 'Rohit sharma', 'Sanju Samson', 'Subhman gill', 'Hardik', 'Sanju Samson', 'upload/young.jpg'),
(22, 62, 'Which player has taken the most catches in IPL history?', 'Bravo', 'Raina', 'hardik', 'jadaja', 'Raina', 'upload/catch.jpg'),
(22, 63, 'Who is the only player to win the IPL MVP (Most Valuable Player) award on multiple occasions?\r\n', 'Rinku ', 'Warner', 'Faf duplesisi', 'Andre Russell', 'Andre Russell', 'upload/mvp.jpg'),
(22, 64, 'Which team holds the record for the highest successful run chase in IPL history?', 'PBKS', 'RR', 'CSK', 'MI', 'RR', 'upload/chase.jpg'),
(22, 65, 'Who is the only player to take a hat-trick in an IPL final?', 'Yuzi chahal', 'Rohit sharma', 'Tahir', 'M.Sami', 'Rohit sharma', 'upload/hatrick.jpg'),
(23, 66, 'What programming language is often used for developing Android applications?', 'Php', 'Java', 'C++', 'C', 'Java', 'upload/pro.jpg'),
(23, 67, 'Which programming language is known for its use in data analysis and machine learning?\r\n', 'Java', 'Python', 'Php', 'C++', 'Python', 'upload/2pro.jpg'),
(23, 68, 'Which language is often used for game development and is known for its performance?', 'C++', 'Java', 'C', 'Swift', 'C++', 'upload/progame.jpg'),
(23, 69, 'Which language is primarily used for developing embedded systems and low-level programming?', 'C', 'Python', 'C++', 'Java', 'C', 'upload/basic.png'),
(23, 70, 'What is abstraction in object-oriented programming?', 'Process of defining multiple methods with the same name', 'Process of creating objects', 'Process of hiding implementation details', 'Process of method overloading', 'Process of hiding implementation details', 'upload/abstract.jpg'),
(23, 71, 'What is method overloading in object-oriented programming?', 'Ability of an object to take on many forms', 'Process of defining multiple methods with the same name', 'Process of creating objects', 'Process of method overriding', 'Process of defining multiple methods with the same name', 'upload/download.jpg'),
(23, 72, 'Which OOP concept promotes code reusability and modular design?', 'Inheritance', 'Encapsulation', 'Polymorphism', 'Polymorphism', 'Inheritance', 'upload/reuse.jpg'),
(23, 73, 'Which OOP concept is used to group related data and behavior into a single unit?', 'Object', 'Method', 'Variable', 'Class', 'Class', 'upload/obj.png'),
(23, 74, 'Which OOP concept allows a class to have multiple methods with the same name but different parameters?', 'Method overloading', 'Method overriding', 'Method hiding', 'Method chaining', 'Method overloading', 'upload/method.png'),
(23, 75, 'Which operator is used to access the value at a specific memory address in C?', '*', '&', '$', '#', '*', 'upload/oprater.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `repassword`) VALUES
(1, 'keval', 'kfighter@gmsil.com', '$2y$10$SpUvicDco4HdXN9E3SBOWuPCpLJKlc8AQ/7zZZ6YbdoYm06YeM.AW', '$2y$10$T6YD4K1MEDwnkKkz0nQklu6mDRNXoVGYAtf/1fvyf9gs/ulaakxN2'),
(12, 'kanji', 'mkeval117@gmail.com', '$2y$10$aVfU4trkbquh4DOPvru7bOHf945H940Miocd/9See5dLRpeeoPCSu', '$2y$10$IvnIcmqflpcagIfNEX28cO8bXQUS5vOq0HOwZGTS98EtFVORtDe1O'),
(14, 'keval patel', '22ceuos117@ddu.ac.in', '$2y$10$QrrU2QgV.X11w5m8dX.XYumTUb3DF1gOQhJjxwacej5jnYwhYTKte', '$2y$10$m2sGoiK.85y50QQdbUyAN.bqoRK6Wy.MmkUutf6cKHJ233ooAdLxS'),
(15, 'keval', 'kevalnpatel070@gmail.com', '$2y$10$5XiJjZ79.6AR/9eVtPsjj.z9TvcCazPUm48v1C0yLA.BgdYBWN99W', '$2y$10$Aq4flCKhq6htH6cBCLDleO.H303YS9PAtwkDr4zmHnmMvTn1WktDC'),
(16, 'akf', 'kfighter@gmail.com', '$2y$10$70Z8qmEcrrOjRiJ4vcyYYOH.lGU3rK7fZgyo48lAbzLKi2QPkx/Ky', '$2y$10$MWMBTuQsyVEdhcXPRHEaIOMBJP6iLqPTIhCp9KFllLc1He5XNVCrO'),
(17, 'vasu', 'vekariya@gmail.com', '$2y$10$WhwOdpxCqU6Sn3uHQby.aOc689hFbR/890vAB.f50cMpUk7ieQ8l.', '$2y$10$UoeLuFU6iJdx.tD2tVS5XuxR7XV.yUVK8sH3ABnM95gATrx7KAuTa'),
(18, '', '', '$2y$10$AE4ah7f2txc4DhMfw3fh5.dtl/bchvf1/tdUhXS93QW8PQb91xZa2', '$2y$10$JEXFqsSYzNiFrg0DkgF.we/Zp/m9u68q3Dn1TbVnVVfhu8iKnl5H2'),
(19, 'denish', 'denish@gmail.com', '$2y$10$FYbi.apy8ReIjDdW9E0x6eNwxddxcjs1tMzZSRBrubfRvTJHvaTim', '$2y$10$ihc7pE5pT4S2jJpy.0VdluhwRX4NtGxTrHIs9tYPx5j6Gd2.XMHMO'),
(20, 'keval patel', 'keval117@gmail.com', '$2y$10$kHDKYM4zCgdnHB3Mv.Irf.L/c60agF.tznT0Sfsf3SSsA/cGdPCmi', '$2y$10$ctztXaqqpBNbvZez6RippuyPyGensjX0Ue0THU7eUgrUJM3wDdwGm'),
(21, 'keval patel', 'knpatel@gmail.com', '$2y$10$NV2Lzrtn4DRSLEpUVBwnweoIlq.925puDj2.0yu4y0toSbhaPJPam', '$2y$10$dbUm.F3Ikf.D0tNbhBajvO9Q7WQSI/.XOVHiQTg7b0tV0jeapWrA.'),
(22, 'keval patel', 'kevalmadariya@gmail.com', '$2y$10$ODouGgd0qZ3tqjJDX5WqmuCmDW0VFp746LPhbvO1E8fTtuL.U5gRK', '$2y$10$htvgbxEOb4RBOWAHG7W0QOrS4GGQ5xw6Ku6Y66D6jswNFhCMQLR0y'),
(23, 'kanji', 'kanjimadariya@gmail.com', '$2y$10$JAb2y7K3I0ZwG/bRdtbIN.1dbNHjyn49piRYRnTOhVhwfaI00fGEO', '$2y$10$oEVW1VqcNpqLer9AG2uvPe9Pt7O9hoDREMJ4M1MVRbwNFNgpdXcq.');

-- --------------------------------------------------------

--
-- Table structure for table `topic_name`
--

CREATE TABLE `topic_name` (
  `topic_id` int(255) NOT NULL,
  `fetch_id` int(255) NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topic_name`
--

INSERT INTO `topic_name` (`topic_id`, `fetch_id`, `topic`) VALUES
(12, 22, 'ipl'),
(14, 23, 'programing language');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prepareq`
--
ALTER TABLE `prepareq`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_name`
--
ALTER TABLE `topic_name`
  ADD PRIMARY KEY (`topic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prepareq`
--
ALTER TABLE `prepareq`
  MODIFY `q_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `topic_name`
--
ALTER TABLE `topic_name`
  MODIFY `topic_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
