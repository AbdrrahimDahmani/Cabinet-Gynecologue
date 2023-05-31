-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 02:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`) VALUES
('sysAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `start_date_time` varchar(16) NOT NULL,
  `end_date_time` varchar(16) DEFAULT NULL,
  `appt_length` varchar(5) DEFAULT NULL,
  `doctor_ID` int(11) DEFAULT NULL,
  `patient_ID` int(11) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_ID`, `user_ID`, `start_date_time`, `end_date_time`, `appt_length`, `doctor_ID`, `patient_ID`, `approved`) VALUES
(1, 1, '2022-12-16T10:30', '2022-12-16T11:00', '00:30', NULL, NULL, 1),
(2, 1, '2022-12-17T12:00', '2022-12-17T12:45', '00:45', NULL, NULL, 1),
(3, 1, '2022-12-17T13:00', '2022-12-17T14:50', '01:50', NULL, NULL, 1),
(4, 1, '2023-01-03T08:30', '2023-01-03T09:00', '00:30', NULL, NULL, 1),
(5, 1, '2023-01-06T10:30', '2023-01-06T11:00', '00:30', NULL, NULL, 1),
(6, 2, '2022-12-16T10:30', '2022-12-16T11:00', '00:30', 2, 1, 1),
(7, 2, '2022-12-17T12:00', '2022-12-17T12:45', '00:45', 2, 1, 1),
(8, 2, '2022-12-17T13:00', '2022-12-17T14:50', '01:50', 2, 1, 1),
(9, 2, '2023-01-03T08:30', '2023-01-03T09:00', '00:30', 2, 1, 1),
(10, 2, '2023-01-06T10:30', '2023-01-06T11:00', '00:30', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_ID` int(11) NOT NULL,
  `username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_ID`, `username`) VALUES
(2, 'doctorUser');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `med_ID` int(11) NOT NULL,
  `med_name` varchar(225) NOT NULL,
  `dosage` varchar(225) NOT NULL,
  `frequency` varchar(225) NOT NULL,
  `med_start_date` varchar(10) NOT NULL,
  `med_end_date` varchar(10) NOT NULL,
  `med_description` varchar(8000) DEFAULT NULL,
  `med_patientID` int(225) NOT NULL,
  `med_doctorID` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`med_ID`, `med_name`, `dosage`, `frequency`, `med_start_date`, `med_end_date`, `med_description`, `med_patientID`, `med_doctorID`) VALUES
(1, 'Vitamin B6', '5 mg', '2 a day', '2020-05-30', '2020-06-14', 'General supplement', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_ID` int(11) NOT NULL,
  `username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_ID`, `username`) VALUES
(3, 'abnoss'),
(1, 'patientUser');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `sex` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`ID`, `first_name`, `last_name`, `dob`, `email`, `phone_number`, `sex`) VALUES
(1, 'Jane', 'Smith', '1999-11-30', 'janesmith@email.com', '7025000893', 'F'),
(2, 'John', 'Doe', '1999-01-14', 'johndoe@email.com', '7024009998', 'F'),
(3, 'aboud', 'abnossa', '2023-05-02', 'ab@ab.ab', '25468252', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `pregnancies`
--

CREATE TABLE `pregnancies` (
  `patient_ID` int(11) NOT NULL,
  `due_date` varchar(10) NOT NULL,
  `baby_sex` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pregnancies`
--

INSERT INTO `pregnancies` (`patient_ID`, `due_date`, `baby_sex`) VALUES
(1, '2023-05-29', 'F'),
(1, '2020-11-14', 'M'),
(1, '2019-01-06', 'M'),
(1, '2017-09-17', 'F'),
(1, '2016-04-30', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('abnoss', 'ab'),
('doctorUser', 'Welcome1!'),
('patientUser', 'Welcome1!'),
('sysAdmin', 'Welcome1!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD KEY `fk_AdminUsername` (`username`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_ID`),
  ADD KEY `doctor_ID` (`doctor_ID`),
  ADD KEY `patient_ID` (`patient_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_ID`),
  ADD KEY `fk_DoctorUsername` (`username`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`med_ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_ID`),
  ADD KEY `fk_PatientUsername` (`username`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `med_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `fk_AdminUsername` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`doctor_ID`) REFERENCES `doctors` (`doctor_ID`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`patient_ID`) REFERENCES `patients` (`patient_ID`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`user_ID`) REFERENCES `personal_info` (`ID`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `fk_DoctorID` FOREIGN KEY (`doctor_ID`) REFERENCES `personal_info` (`ID`),
  ADD CONSTRAINT `fk_DoctorUsername` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `fk_PatientID` FOREIGN KEY (`patient_ID`) REFERENCES `personal_info` (`ID`),
  ADD CONSTRAINT `fk_PatientUsername` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
