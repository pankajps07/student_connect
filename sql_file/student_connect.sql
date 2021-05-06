-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 05:43 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) CHARACTER SET latin1 DEFAULT '',
  `username` varchar(10) CHARACTER SET latin1 DEFAULT '',
  `password` varchar(10) CHARACTER SET latin1 DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `username`, `password`) VALUES
(1, 'Electronics & Communication Engineering', 'EC', 'git123'),
(2, 'Computer Science Engineering', 'CS', 'git123'),
(4, 'Electrical & Electronics Engineering', 'EE', 'git123'),
(5, 'Information Science & Engineering', 'IS', 'git123'),
(6, 'Civil Engineering', 'CV', 'git123'),
(7, 'Architecture', 'AT', 'git123'),
(8, 'Aeronautical Engineering', 'AE', 'git123'),
(9, 'M.Tech. (Structural Engineering)', 'MTSE', 'git123'),
(10, 'Master of Business Administration', 'MBA', 'git123'),
(11, 'Master of Computer Applications', 'MCA', 'git123'),
(12, 'M.Tech. (Industrial Engineering)', 'MTIE', 'git123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `id` int(10) NOT NULL,
  `faculty_id` varchar(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `faculty_id`, `name`, `email`, `dept_id`) VALUES
(1, '1', 'girish', 'girish@gmail.com', 11),
(3, '2', 'suraj', 'suraj@gmail.com', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) NOT NULL,
  `notification_type` varchar(50) NOT NULL,
  `notification_content` varchar(300) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sem` varchar(2) NOT NULL,
  `faculty_id` int(10) DEFAULT NULL,
  `day` datetime NOT NULL,
  `subject_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `placement_officer`
--

CREATE TABLE `placement_officer` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement_officer`
--

INSERT INTO `placement_officer` (`id`, `name`, `email`) VALUES
(1, 'girish', 'gitplacement@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(10) NOT NULL,
  `usn` varchar(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sem` varchar(2) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `usn`, `name`, `sem`, `email`, `dept_id`, `gender`) VALUES
(4, '2GI18MCA02', 'paratik', '5', 'pratik@gmail.com', 11, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) NOT NULL,
  `sub_code` varchar(30) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `fac_id` int(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sem` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `user_type`) VALUES
('girish@gmail.com', '1234', 'faculty'),
('gitplacement@gmail.com', '1234', 'placement_officer'),
('pratik@gmail.com', '1234', 'student'),
('suraj@gmail.com', '123', 'faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_email_fk` (`email`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculty_id` (`faculty_id`),
  ADD KEY `faculty_email_fk` (`email`),
  ADD KEY `dept_id_fgkey` (`dept_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk2_dept_id` (`dept_id`),
  ADD KEY `fk2_fac_id` (`faculty_id`),
  ADD KEY `fk_subject_id` (`subject_id`);

--
-- Indexes for table `placement_officer`
--
ALTER TABLE `placement_officer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pl_email` (`email`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usn` (`usn`),
  ADD KEY `fk_email` (`email`),
  ADD KEY `fk_dept_id` (`dept_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk44_fac_id` (`fac_id`),
  ADD KEY `fk_dep_id99` (`dept_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `placement_officer`
--
ALTER TABLE `placement_officer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD CONSTRAINT `admin_email_fk` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD CONSTRAINT `dept_id_fgkey` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `faculty_email_fk` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk2_dept_id` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `fk2_fac_id` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_details` (`id`),
  ADD CONSTRAINT `fk_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);

--
-- Constraints for table `placement_officer`
--
ALTER TABLE `placement_officer`
  ADD CONSTRAINT `fk_pl_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `fk_dept_id` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk44_fac_id` FOREIGN KEY (`fac_id`) REFERENCES `faculty_details` (`id`),
  ADD CONSTRAINT `fk_dep_id99` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
