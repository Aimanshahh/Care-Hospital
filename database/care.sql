-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2024 at 10:05 AM
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
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `sologan` mediumtext NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `heading1`, `sologan`, `description`) VALUES
(2, 'Introduction to our team of healthcare professionals.', '\"Empowering Health, Inspiring Hope: [Hospital Name] Cares\"', 'Welcome to [Hospital Name], where healing meets compassion and innovation. Since [Year of Establishment], we have been dedicated to providing exceptional healthcare services to the [City/Region] community and beyond.');

-- --------------------------------------------------------

--
-- Table structure for table `appointment1`
--

CREATE TABLE `appointment1` (
  `appointment_id` int(11) NOT NULL,
  `sevice_fk` int(11) NOT NULL,
  `doctor_fk` int(11) NOT NULL,
  `appointment_name` varchar(255) NOT NULL,
  `appointment_email` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment1`
--

INSERT INTO `appointment1` (`appointment_id`, `sevice_fk`, `doctor_fk`, `appointment_name`, `appointment_email`, `appointment_date`, `appointment_time`) VALUES
(1, 1, 2, 'Student1525897', 'www.daniyalnaeemgpure@gmail.com', '2024-07-10', '18:23:00'),
(2, 4, 3, 'Student152589755', 'muhammaduzazir75987@gmail.com', '2024-07-16', '18:42:00'),
(3, 1, 2, '', '', '0000-00-00', '00:00:00'),
(4, 2, 3, 'YJUHYJ', 'YJUHYTJUY@GFH.COM', '2024-07-24', '15:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(2, 'Karachi'),
(3, 'Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(6, 'naqash12', 'naqash12@gmail.com', 'neurology', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(255) NOT NULL,
  `prevention` mediumtext NOT NULL,
  `cure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`, `prevention`, `cure`) VALUES
(1, 'Malaria', '', ''),
(3, 'malaria', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `service_fk` int(11) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `doctor_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `service_fk`, `fee`, `doctor_img`) VALUES
(2, 'Dr. Huzaifa', 1, '2500', 'image/d2.png'),
(3, 'Dr. Ruksana', 2, '2500', 'image/d1.jpf.png'),
(4, 'Dr Yahya Khan', 3, '5000', 'image/team-5.jpg'),
(5, 'Dr Samar Alam', 1, '2000', 'image/team-1.jpg'),
(9, 'Dr. Saba', 8, '3000', 'image/team-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `dateposted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `dateposted`) VALUES
(10, 'pcb news', 'babar kicked out pakistan team', '2024-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `opening`
--

CREATE TABLE `opening` (
  `opening_id` int(11) NOT NULL,
  `opening_days` varchar(255) NOT NULL,
  `opening_timing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opening`
--

INSERT INTO `opening` (`opening_id`, `opening_days`, `opening_timing`) VALUES
(2, 'Mon-Fri', '10:00AM-11:00PM'),
(3, 'Saturday', '4:00PM-11:00PM'),
(4, 'Sunday', 'Holiday');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Doctor'),
(2, 'Admin'),
(9, 'Patient');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `serviceprice` varchar(255) NOT NULL,
  `service_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `servicename`, `serviceprice`, `service_img`) VALUES
(1, 'Cardiology', '2500', 'image/cardiology.jpg'),
(2, 'Neurology', '3000', 'image/neurology.jpg'),
(3, 'Dentist', '3000', 'image/dentist.jpg'),
(4, 'General phyician', '2500', 'image/general.jpg'),
(8, 'Daibetes', '3000', 'image/daibetes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonal`
--

CREATE TABLE `testimonal` (
  `testimonal_id` int(11) NOT NULL,
  `testimonal_name` varchar(255) NOT NULL,
  `testimonal_desc` mediumtext NOT NULL,
  `testimonal_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonal`
--

INSERT INTO `testimonal` (`testimonal_id`, `testimonal_name`, `testimonal_desc`, `testimonal_img`) VALUES
(10, 'Shagufta ', 'I had an excellent experience with Dr. Johnson during my recent visit to her clinic. She was incredibly thorough in her examination and took the time to listen to all of my concerns patiently. Her explanations were clear, and she made sure I understood the diagnosis and treatment plan.', 'image/test1.jpg'),
(11, 'Ali Hasan', 'Dr. Huzaifa has a very comforting demeanor that put me at ease right away. She showed genuine care and empathy throughout the appointment, which I greatly appreciated. She also followed up promptly on my test results and made herself available for any additional questions I had.', 'image/testimonial-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `role_FK` int(11) NOT NULL,
  `user_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `user_password`, `role_FK`, `user_img`) VALUES
(3, 'care', 'care@gmail.com', '123', 1, 'image/'),
(4, 'waleed', 'waleed@gmail.com', '123', 1, 'image/Capture2.png'),
(5, 'anas', 'abc@gmail.com', '123', 1, 'image/Capture2.png'),
(6, 'hassan', 'hassan@gmail.com', '123', 9, 'image/Capture2.png'),
(7, 'anas', 'abc@gmail.com', '123', 1, 'image/Capture2.png'),
(8, 'waleed', 'waleed@gmail.com', '123', 9, 'image/team-3.jpg'),
(9, 'waleed2', 'waleedaptech39@gmail.com', '120', 2, 'image/testimonial-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `appointment1`
--
ALTER TABLE `appointment1`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `sevice_fk` (`sevice_fk`),
  ADD KEY `appointment1_ibfk_1` (`doctor_fk`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `service_fk` (`service_fk`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `opening`
--
ALTER TABLE `opening`
  ADD PRIMARY KEY (`opening_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `testimonal`
--
ALTER TABLE `testimonal`
  ADD PRIMARY KEY (`testimonal_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_FK` (`role_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment1`
--
ALTER TABLE `appointment1`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `opening`
--
ALTER TABLE `opening`
  MODIFY `opening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonal`
--
ALTER TABLE `testimonal`
  MODIFY `testimonal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment1`
--
ALTER TABLE `appointment1`
  ADD CONSTRAINT `appointment1_ibfk_1` FOREIGN KEY (`doctor_fk`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `appointment1_ibfk_2` FOREIGN KEY (`sevice_fk`) REFERENCES `service` (`service_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`service_fk`) REFERENCES `service` (`service_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_FK`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
