-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2021 at 02:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `service_type` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `uid`, `first_name`, `last_name`, `town`, `phone_number`, `service_type`, `status`, `message`) VALUES
(27, '1', 'dfg', 'fsd', 'fsd', '98943', 'Laboratory Test(Blood Test)', '<h6 class=\'text-success\'>Confirmed</h6>', '<b>Comment:</b>&nbsp;go fuck yourself '),
(28, '1', 'sdf', 'fsd', 'fsd', '98943', 'Nursing care', '<h6 class=\'text-success\'>Confirmed</h6>', 'you can check at the kalariga branch '),
(29, '1', 'fds', 'sfd', 'fsd', '43443', 'Online Consultation', '<h6 class=\'text-success\'>Confirmed</h6>', '<b>Comment:</b>&nbsp;i\'d recommend you check out the nearest pharmacy around choggu roundabout\r\n'),
(30, '1', 'rwe', 'rew', 're', '2423432', 'Laboratory Test(Blood Test)', '<h6 class=\'text-danger\'>Declined</h6>', ''),
(31, '1', 'fsdfd', 'fds', 'fds', '0', 'Physiotherapy', '<h6 class=\'text-success\'>Confirmed</h6>', '<b>Comment:</b>&nbsp;yeah bruhh'),
(32, '1', 'asd', 'fdsfd', 'dfsfds', '3242342', 'Vaccination', '<h6 class=\"text-info\">Pending</h6>', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicestbl`
--

CREATE TABLE `servicestbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicestbl`
--

INSERT INTO `servicestbl` (`id`, `title`, `img`, `description`) VALUES
(2, 'Nursing care', 'img/checkup.jpg', 'The most common form of home health care is some type of nursing care depending on the person\'s needs. In consultation with the doctor, a registered nurse will set up a plan of care. Nursing care may include wound dressing, ostomy care, intravenous therapy, administering medication, monitoring the general health of the patient, pain control, and other health support.'),
(3, 'Nutrional Support', 'img/dietician.jpg', 'Dietitians can come to a patient\'s home to provide dietary assessments and guidance to support the treatment plan.'),
(4, 'Laboratory Test', 'img/labtest.jpg', 'Certain laboratory tests, such as blood and urine tests, can be performed in the comfort of the patient\'s home. In addition, portable X-ray machines allow lab technicians to perform this service at home.'),
(5, 'Online Consultation', 'img/consultation.jpg', 'Volunteers from community organizations can provide basic comfort to the patient through companionship, helping with personal care, providing transportation, emotional support, a'),
(6, 'Vaccination', 'img/blood.jpg', 'We\'ll help you and your family stay current on recommended vaccines. Walk-ins welcome, or schedule an appointment. Most insurance accepted.1'),
(7, 'Physiotherapy', 'img/physiotherapy.jpg', 'Whether it’s a lingering back pain, a frozen shoulder, or a sports injury that you’re looking to recover from, you can now get treated in the comfort of your home, by certified, specialized and experienced physiotherapists');

-- --------------------------------------------------------

--
-- Table structure for table `userstbl`
--

CREATE TABLE `userstbl` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userstbl`
--

INSERT INTO `userstbl` (`id`, `first_name`, `last_name`, `email`, `dob`, `password`) VALUES
(1, 'Abukari', 'Einus', 'charismacaptain694@gmail.com', '2021-03-11', '1234'),
(4, 'Abukari', 'Einus', 'bboi86@gmail.com', '2021-03-10', '12345678'),
(5, 'admin', 'admin', 'admin@gmail.com', '24/10/1992', 'admin123'),
(6, 'Abukari ', 'Einus', 'abukareinus@gmai.com', '2021-03-10', 'abu1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_type` (`service_type`,`status`) USING HASH;

--
-- Indexes for table `servicestbl`
--
ALTER TABLE `servicestbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userstbl`
--
ALTER TABLE `userstbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `servicestbl`
--
ALTER TABLE `servicestbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userstbl`
--
ALTER TABLE `userstbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
