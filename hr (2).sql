-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2025 at 07:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `name`, `email`, `description`, `date_time`, `created_at`, `updated_at`) VALUES
(1, 'liaqat.paindah@gmail.com', 'liaqat.paindah@gmail.com', 'has log in', 'Tue, Dec 2, 2025 1:54 PM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `months` varchar(255) NOT NULL,
  `clock_in_time` time NOT NULL,
  `clock_out_time` time NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `total_revenue` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `badget_amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `parent_department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `department_head_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_code` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `description`, `parent_department_id`, `department_head_id`, `color_code`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(8, 'Executive Leadership', 'Senior management and executive team', NULL, NULL, NULL, 0, 1, '2025-12-02 09:07:25', '2025-12-02 09:07:25'),
(18, 'IT', 'Information Technology infrastructure and development', 8, NULL, NULL, 0, 1, '2025-12-02 09:07:25', '2025-12-02 09:07:25'),
(27, 'M&E', 'Monitoring and Evaluation', 8, NULL, NULL, 0, 1, '2025-12-02 09:07:25', '2025-12-02 09:07:25'),
(28, 'HR', 'Human Resources management and employee services', 8, NULL, NULL, 0, 1, '2025-12-02 09:07:25', '2025-12-02 09:07:25'),
(29, 'Health', 'Health services and programs', 8, NULL, NULL, 0, 1, '2025-12-02 09:07:25', '2025-12-02 09:07:25'),
(31, 'Finance', 'Financial management and accounting', 8, NULL, NULL, 0, 1, '2025-12-02 09:07:25', '2025-12-02 09:07:25'),
(36, 'Business Development', 'Business growth and strategic partnerships', 8, NULL, NULL, 0, 1, '2025-12-02 09:07:25', '2025-12-02 09:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `second_phone` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `employee_id` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `manager_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employment_type` varchar(255) NOT NULL DEFAULT 'Full-time',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `account_status` varchar(255) NOT NULL DEFAULT 'active',
  `work_station` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `gross_salary` varchar(255) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `net_salary` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `project` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `nid_attachment` varchar(255) DEFAULT NULL,
  `documents_attachments` varchar(255) DEFAULT NULL,
  `cv_attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `fname`, `email`, `birth_date`, `phone`, `second_phone`, `gender`, `current_address`, `profile`, `employee_id`, `position`, `department_id`, `manager_id`, `employment_type`, `start_date`, `end_date`, `account_status`, `work_station`, `account_number`, `gross_salary`, `tax`, `net_salary`, `nid`, `blood_group`, `tin`, `project`, `permanent_address`, `nid_attachment`, `documents_attachments`, `cv_attachment`, `created_at`, `updated_at`) VALUES
(27, 'Sayed Saferullah Pacha', 'Sayed Matiullah', 's.pacha@mgtwell.com', '09-01-1995', '0788637593', '0786163076', 'Male', 'House#43, Pule Sorkh, Karte 3, PD#6, Kabul Afghanistan', '6896e898e5253_profile.jpg', 'Mgtwell_0000000026', 'HR Officer', 28, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102215946', '20000', '900', '19100', '1400-0106-67218', 'A+', NULL, 'Core Staff', 'Kot Zar Bacha, Nangarhar, Afghanistan', '6896e898ee81d_nid.jpg', '6896e898f26a3_doc.jpg', '6896e8990006f_cv.jpg', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(29, 'Imran Nazar Mohmand', 'Allah Nazar', 'i.nazarmohammad@mgtwell.com', '06-08-1992', '0772098522', '0799374951', 'Male', 'Qasaba, Dist.15, Kabul Afghanistan', '689705b740855_profile.jpg', 'Mgtwell_0000000027', 'MA Officer', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102221123', '27550', '1655', '25895', '11434705', 'A+', NULL, 'Core Staff', 'Surkhrod District, Nangarhar Afghanistan', '689705b74f6d7_nid.jpg', '689705b752a95_doc.pdf', '689705b768955_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(30, 'Shah Mohmmad Kamawal', 'Haji Tor Gull', 's.kamawal@mgtwell.com', '01-07-1993', '0770001014', '0770001014', 'Male', 'Chil Stoon, Sarak Takh Nikam, Kabul Afghanistan', '689709c8016b5_profile.jpg', 'Mgtwell_0000000048', 'M&E Coordinator', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '00381102214644', '22000', '1100', '20900', '1397-0900-11624', 'O+', NULL, 'Core Staff', 'Kama District, Nangarhar Afghanistan', '689709c80c07d_nid.jpg', '689709c80d1aa_doc.pdf', '689709c8100a9_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(35, 'Abdullah Zakhil', 'Noor Gull', 'abdullahzakhil1996@gmail.com', '02-07-1996', '0760175208', '0774917199', 'Male', 'Arzan Qimat, Dist. #12, Kabul Afghanistan', '689820da51040_profile.jpg', 'Mgtwell_0000000046', 'M&E Officer', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '00301102214725', '11000', '120', '10880', '1401-1101-60110', 'A+', NULL, 'Core Staff', 'Kuz Kunar, Nangarhar Afghanistan', '689820da56487_nid.pdf', '689820da56af4_doc.pdf', '689820da573f1_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(36, 'Wahidullah Gulabyar', 'Azizullah', 'drgulabyar@gmail.com', '13-09-1979', '788881350', '0788880882', 'Male', 'Sayed Jamaluddin town ship, District 22, Kabul Afghanistan', '6898232827dde_profile.jpg', 'Mgtwell_0000000033', 'MA Project Director', 29, NULL, 'Full-time', NULL, NULL, 'Active', 'Kabul', '1399-1102-78904', '100000', '8900', '91100', '1399-1102-78904', 'O-', NULL, 'Core Staff', 'Sayed Jamaluddin town ship, District 22, Kabul Afghanistan', '689823282b39a_nid.pdf', '689823282b983_doc.pdf', '689823282bf62_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(37, 'Mohammad Haris Shaiq', 'Mohammad Haidar', 'haris.khogyani@gmail.com', '16-05-1991', '0731054468', '0731054468', 'Male', '2nd Street of Taimani,Kabul Afghanistan', '68982c1948d57_profile.jpg', 'Mgtwell_0000000056', 'Consultant', 29, 36, 'Full-time', NULL, NULL, 'Inactive', 'Kabul', '000101112018904', '18500', '750', '17750', '1400-0106-57299', 'AB+', NULL, 'Core Staff', 'Zerani PD#7, Nangarhar Afghanistan', '68982c194f57c_nid.pdf', '68982c1950333_doc.pdf', '68982c1950feb_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(38, 'Rohullah Naseri', 'Noor Aqa', 'Rohullah.naseri777@gmail.com', '17-11-1999', '0772130736', '0785580830', 'Male', 'Karte 4, Kabul Afghanistan', '68982f052b10c_profile.jpg', 'Mgtwell_0000000039', 'M&E Assistant', 27, 55, 'Full-time', NULL, NULL, 'Inactive', 'Kabul', '1398-0100-19748', '12000', '140', '11860', '1398-0100-19748', 'O+', NULL, 'Core Staff', 'Gull Dara, Kabul Afghanistan', '68982f0533ab9_nid.pdf', '68982f053469c_doc.pdf', '68982f0536e2a_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(39, 'Ahmad Milad', 'Jan Mohammad', 'milad.mohammad30@gmail.com', '27-08-1990', '0766663319', '0771122771', 'Male', 'Sharak Mirwais, Kabul Afghanistan', '689831b3599c4_profile.jpg', 'Mgtwell_0000000049', 'Data Management Officer', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '001701101933911', '11500', '130', '11370', '1399-1000-23738', 'B+', NULL, 'Core Staff', 'Zazi Aryoub, Paktia Afghanistan', '689831b360da5_nid.pdf', '689831b362154_doc.pdf', '689831b36341b_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(40, 'Nilofar Sidiqi', 'Mohammad Nasim', 'sidiqi.nilofar@gmail.com', '13-01-2002', '0794815020', '0784301544', 'Female', 'First District of Kabul Afghanistan', '689833c1167bc_profile.jpg', 'Mgtwell_0000000051', 'M&E Assistant', 27, 55, 'Full-time', NULL, NULL, 'Inactive', 'Kabul', '005601101313030', '8000', '60', '7940', '1399-0901-19927', 'B+', NULL, 'Core Staff', 'First District of Kabul Afghanistan', '689833c11a59f_nid.pdf', '689833c11b5db_doc.pdf', '689833c11beca_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(41, 'Abdul Waris Stanikzai', 'Mohammad Farid', 'Warisstanikzai40@gmail.com', '21-06-1996', '0781794421', '0700218362', 'Male', 'Karte 4, Kabul Afghanistan', '689838c90b4fb_profile.jpg', 'Mgtwell_0000000040', 'Data Management Officer', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102138138', '30000', '1900', '28100', '1397-0600-09466', 'A+', NULL, 'Core Staff', 'Pole Alam, Logar Afghanistan', '689838c9113be_nid.pdf', '689838c911bc6_doc.pdf', '689838c91316e_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(43, 'Shamsullah Habibzai', 'Aminullah', 'shams.hb007@gmail.com', '20-07-1999', '0745235351', '0702122876', 'Male', 'Naw Abad Dehmazang,Kabul Afghanistan', '6898459191250_profile.jpg', 'Mgtwell_0000000050', 'Finance Assistant', 31, 56, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102304152', '10000', '100', '9900', '1400-0800-38538', 'A+', NULL, 'Core Staff', 'Naw Abad Dehmazang,Kabul Afghanistan', '68984591943e1_nid.pdf', '6898459194aea_doc.pdf', '6898459196848_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(44, 'Ahmad Shoib Zaheri', 'Abdul Zaher', 's.zaheri@mgtwell.com', '07-05-1993', '0783715133', '0788314541', 'Male', 'Khushal Khan Mina, PD#5, Kabul Afghanistan', '68984801e7da9_profile.jpg', 'Mgtwell_0000000031', 'M&E Officer', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102214806', '27500', '1650', '25850', '1399-1000-20360', 'A+', NULL, 'Core Staff', 'Mehtarlam ,Laghman Afghanistan', '68984801f0f22_nid.pdf', '68984801f2563_doc.pdf', '68984801f3409_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(45, 'Mohammad Naim', 'Halim Jan Sulimanzai', 'M.sulimanzai2012@gmail.com', '20-02-1993', '0766037110', '0787429022', 'Male', 'Block 12, Ahmad Shah Baba Mina, Kabul Afghanistan', '68986400a32b5_profile.jpg', 'Mgtwell_0000000052', 'Data Management Officer', 27, 55, 'Full-time', NULL, NULL, 'Inactive', 'Kabul', '0038011022222004', '13200', '220', '12980', '1398-0600-44692', 'B+', NULL, 'Core Staff', 'Logar Afghanistan', '68986400aa57b_nid.pdf', '68986400ab2ad_doc.pdf', '68986400ac9bd_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(46, 'Hasibullah Najibi', 'Najibullah', 'Hasibullah.Najibi59559@gmail.com', '03-05-1988', '0789800089', '0702375947', 'Male', 'Chilstoon PD#7, Kabul Afghanistan', '689867c3dad1d_profile.jpg', 'Mgtwell_0000000034', 'MA Officer', 29, 36, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102218929', '27550', '1655', '25895', '1400-0800-24610', 'A+', NULL, 'Core Staff', 'Kabul Province', '689867c3de23c_nid.pdf', '689867c3deb05_doc.pdf', '689867c3df193_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(47, 'Sayed Hasibullah Shahidzai', 'Sayed Mushahidullah', 'h.shahidzai@mgtwell.com', '11-08-1990', '0785058533', '0776555555', 'Male', '23 Street, Paktia Koot, PD#9, Kabul Afghanistan', '68986e3941b02_profile.jpg', 'Mgtwell_0000000035', 'MA Officer', 29, 36, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102218929', '45000', '3400', '41600', '1401-0903-09244', 'A+', NULL, 'Core Staff', '23 Street, Paktia Koot, PD#9, Kabul Afghanistan', '68986e3946e28_nid.pdf', '68986e3947b41_doc.pdf', '68986e3948a70_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(48, 'Jamil Rahman Hassanzai', 'Akram Jan', 'hassanzai1401@gmail.com', '02-11-1995', '0730402644', '0781948414', 'Male', 'Silo, Kabul Afghanistan', '689984d181abd_profile.jpg', 'Mgtwell_0000000036', 'Data Analyst', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102223646', '29700', '1870', '27830', '1399-1000-81982', 'A+', NULL, 'Core Staff', 'Sayed Abad District, Wardak Afghanistan', '689984d18b3a1_nid.pdf', '689984d18ba93_doc.pdf', '689984d18c096_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(49, 'Mujibullah Stanikzai', 'Ahmad Shah', 'mujeebstanikzai2020@gmail.com', '15-09-2002', '0703736769', '0703736769', 'Male', 'Katre 4, Kabul Afghanistan', '68998bfd2949f_profile.jpg', 'Mgtwell_0000000053', 'M&E Assistant', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102255154', '8000', '60', '7940', '1398-0600-5828', 'A+', NULL, 'Core Staff', 'Pule Alam, Logar Afghanistan', '68998bfd2d310_nid.pdf', '68998bfd2dbb4_doc.pdf', '68998bfd2e348_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(50, 'Yalda Foladzada', 'Musa', 'yalda-foladzada@yahoo.com', '13-10-1998', '0703179200', '0786224496', 'Female', '500 Family, Khair Khana, PD#15, Kabul Afghanistan', '6899903644fd7_profile.jpg', 'Mgtwell_0000000044', 'Program Coordinator', 36, 59, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801100973570', '27500', '1650', '25850', '1398-1200-24135', 'B+', NULL, 'Core Staff', '500 Family, Khair Khana, PD#15, Kabul Afghanistan', '689990364c9e8_nid.pdf', '689990364d895_doc.pdf', '689990364edd1_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(51, 'Qais Jabarkhil', 'Asif', 'qaisjabarkhil1@outlook.com', '10-10-1998', '0786453768', '0748882329', 'Male', 'Qalay Zaman Khan, PD#16, Kabul Afghanistan', '689996d5e58d7_profile.jpg', 'Mgtwell_0000000042', 'M&E Assistant', 27, 55, 'Full-time', NULL, NULL, 'Inactive', 'Kabul', '003801102298268', '12000', '140', '11860', '97797', 'Unknown', NULL, 'Core Staff', 'Qalay Zaman Khan, PD#16, Kabul Afghanistan', '689996d5f27f4_nid.pdf', '689996d6026db_doc.pdf', '689996d6053b1_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(52, 'Ahmad Javid Stanikzai', 'Abdul Habib', 'Ahmadjavidstanikzai36@gmail.com', '03-08-1984', '0783103761', '078172441', 'Male', 'PD#8, Karte Now, Kabul Afghanistan', '689ad59ccd9c6_profile.jpg', 'Mgtwell_0000000041', 'M&E Assistant', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '001701101968240', '12000', '140', '11860', '1398-0800-54120', 'B+', NULL, 'Core Staff', 'PD#8, Karte Now, Kabul Afghanistan', '689ad59cdccaa_nid.pdf', '689ad59cdf2d7_doc.pdf', '689ad59ce1544_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(53, 'Liaqat Paindah', 'Azizullah', 'liaqat.paindah@gmail.com', '03-04-1996', '0702079812', '0748266144', 'Male', 'Haji Nawroz Cross Road, PD#13, Kabul Afghanistan', '689ae11fda655_profile.jpg', 'Mgtwell_0000000037', 'Data Analyst', 18, NULL, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102222182', '25300', '1430', '23870', '1400-0404-76954', 'B+', NULL, 'Core Staff', 'Haji Nawroz Cross Road, PD#13, Kabul Afghanistan', '689ae11fe1ff0_nid.jpg', '689ae11fe2a70_doc.jpg', '689ae11fe4823_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(55, 'Nawidullah Assadzay', 'Wahidullah', 'n.assadzay@mgtwell.com', '10-09-1995', '0744536761', '0744950835', 'Male', 'Khuskalkhan, PD5, Kabul', '689aeb62a17ba_profile.jpg', 'Mgtwell_0000000061', 'Head of M&E', 27, NULL, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003401100668105', '100100', '8920', '91180', '1400-0900-38286', 'A+', NULL, 'Core Staff', 'Khuskalkhan, PD5, Kabul', '689aeb62a62a3_nid.pdf', '689aeb62a69fe_doc.pdf', '689aeb62a7059_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(56, 'Ahmad Noorani', 'Noor-Elahi', 'a.noorani@mgtwell.com', '11-11-1989', '0786948112', '0786948112', 'Male', 'PD#4, Kulula Pushta, Kabul Afghanistan', '689b2671ccc18_profile.jpg', 'Mgtwell_0000000062', 'Finance Manager', 31, NULL, 'Full-time', NULL, NULL, 'Active', 'Kabul', '000701101512688', '107066', '10313.2', '96752.8', '1398-0300-04550', 'A-', NULL, 'Core Staff', 'Kaga, Khogyani, Nangarhar Afghanistan', '689b2671e077e_nid.pdf', '689b2671e324b_doc.pdf', '689b2671e6049_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(57, 'Phineas PACHAVO MAQWENZI', 'Richard', 'P.maqwenzi@gmail.com', '30-09-1970', '07981535668', '+26878140465', 'Male', 'House No#43,Pule Surkh, Kabul Afghanistan', '689b307f76905_profile.jpg', 'Mgtwell_0000000064', 'Consultant', 27, 55, 'Full-time', NULL, NULL, 'Inactive', 'Kabul', 'Nill', '210753', '31050.6', '179702.4', '748628', 'A+', NULL, 'Core Staff', 'No#5, Conventry Flat#3, Makhosini Drive, MBABANE, ESWATINI', '689b307f7c0f7_nid.jpg', '689b307f7cce6_doc.pdf', '689b307f7f7b5_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(59, 'Ahmad Khalid', 'Attaullah', 'k.wafa@mgtwell.com', '01-01-1989', '0702673668', '0799232525', 'Male', 'First Sreet of tiamani, Kabul', '689c396d9a75e_profile.jpg', 'Mgtwell_0000000065', 'Business Development Manager', 36, NULL, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003401100668105', '57899', '4689.9', '53209.1', '407826', 'O+', NULL, 'Core Staff', 'First Sreet of tiamani, Kabul', '689c396daaac4_nid.pdf', '689c396dacc70_doc.jpg', '689c396dad326_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(60, 'Yahya Sharafzai', 'Abdul Wali Sharafzai', 'yahyasharafzai@gmail.com', '28-09-2005', '0765688721', '0783014965', 'Male', 'Shahrak-e-Safa, Street No 27th, Kabul Afghanistan', '689c40615a592_profile.jpg', 'Mgtwell_0000000054', 'M&E Assistant', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '003801102298187', '8000', '60', '7940', '1401-0901-52306', 'A+', NULL, 'Core Staff', 'Shinwary District, Parwan Afghanistan', '689c4061650a4_nid.pdf', '689c406165cb0_doc.pdf', '689c406167bd1_cv.pdf', '2024-12-31 14:00:00', '2025-12-30 14:00:00'),
(61, 'Bilal Jahan', 'Ghulam Nabi', 'bilal.jahann@gmail.com', '24-10-1994', '0799100581', '0767146066', 'Male', 'Taimani Project, 4th District, Kabul Afghanistan', '68ef3d1eeb747_profile.jpg', 'Mgtwell_0000000068', 'M&E Specialist', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', 'Nill', '45000', '3400', '41600', '1397-0800-10396', 'A+', NULL, 'Core Staff', '7th District, Kabul Afghanistan', '68ef3d1f0c919_nid.pdf', '68ef3d1f0e2b6_doc.pdf', '68ef3d1f10c28_cv.pdf', '2025-10-15 03:20:15', '2025-10-15 03:20:15'),
(62, 'Asif Shah', 'Wali Shah', 'a.shah@mgtwell.com', '15-01-1997', '0777872091', '0773120375', 'Male', '7th, District,Darlaman Road, Kabul Afghanistan', '68ef40e60e16d_profile.jpg', 'Mgtwell_0000000070', 'M&E and Data Analyst', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '004201103434627', '30000', '1900', '28100', '1400-0202-56112', 'A+', NULL, 'Core Staff', 'Main City, Near Jami Masjid, Khost Afghanistan', '68ef40e63cd23_nid.pdf', '68ef40e643929_doc.pdf', '68ef40e64d6b3_cv.pdf', '2025-10-15 03:36:22', '2025-10-15 03:36:22'),
(63, 'Dadkhuda Ahmad Yar', 'Samiullah', 'ahmadyaar2010@gmail.com', '04-08-1992', '0772561081', '0784547714', 'Male', '4th Macrorayan, Kabul Afghanistan', '68ef440c2bde4_profile.jpg', 'Mgtwell_0000000067', 'Sr. Data Analyst', 27, 55, 'Full-time', NULL, NULL, 'Active', 'Kabul', '001801100332439', '35000', '2400', '32600', '1403-0203-82624', 'O+', NULL, 'Core Staff', 'Kalakan Dist 17, Kabul Afghanistan', '68ef440c3cab1_nid.pdf', '68ef440c3f5fb_doc.pdf', '68ef440c44acb_cv.pdf', '2025-10-15 03:49:48', '2025-10-15 03:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `scanned` varchar(255) DEFAULT NULL,
  `rec_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves_admins`
--

CREATE TABLE `leaves_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rec_id` varchar(255) DEFAULT NULL,
  `leave_category` varchar(255) DEFAULT NULL,
  `from_date` varchar(255) DEFAULT NULL,
  `to_date` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `leave_type` varchar(255) DEFAULT NULL,
  `leave_reason` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_04_25_224042_create_user_activity_logs_table', 1),
(4, '2021_04_30_224320_create_activity_logs_table', 1),
(5, '2021_05_03_061844_create_user_types_table', 1),
(6, '2021_05_03_061918_create_role_type_users_table', 1),
(7, '2021_06_04_053627_create_sequence_tbls_table', 1),
(8, '2021_07_03_161410_create_position_types_table', 1),
(9, '2021_07_16_143215_create_module_permissions_table', 1),
(10, '2021_08_01_052433_create_permission_lists_table', 1),
(11, '2021_08_08_054847_create_roles_permissions_table', 1),
(12, '2021_08_13_054414_create_profile_information_table', 1),
(13, '2024_05_30_122751_create_departments_table', 1),
(14, '2024_06_30_141746_create_employees_table', 1),
(15, '2024_07_27_213315_create_cache_table', 1),
(16, '2024_07_27_213703_create_sessions_table', 1),
(17, '2024_07_27_213920_update_sessions_table', 1),
(18, '2024_08_09_153742_create_leaves_admins_table', 1),
(19, '2024_08_26_023307_create_staff_salaries_table', 1),
(20, '2024_09_13_170428_create_attendances_table', 1),
(21, '2024_09_19_005809_create_budgets_table', 1),
(22, '2024_10_11_230311_create_expenses_table', 1),
(23, '2024_10_17_001028_create_users_table', 1),
(24, '2024_12_20_173307_create_notifications_table', 1),
(25, '2024_12_31_143431_create_generate_id_tbls_table', 1),
(26, '2025_11_30_121132_create_projects_table', 1),
(27, '2025_11_30_121350_create_project_assignments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_permissions`
--

CREATE TABLE `module_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `module_permission` varchar(255) DEFAULT NULL,
  `id_count` varchar(255) DEFAULT NULL,
  `read` varchar(255) DEFAULT NULL,
  `write` varchar(255) DEFAULT NULL,
  `create` varchar(255) DEFAULT NULL,
  `delete` varchar(255) DEFAULT NULL,
  `import` varchar(255) DEFAULT NULL,
  `export` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_lists`
--

CREATE TABLE `permission_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_name` varchar(255) DEFAULT NULL,
  `read` varchar(255) DEFAULT NULL,
  `write` varchar(255) DEFAULT NULL,
  `create` varchar(255) DEFAULT NULL,
  `delete` varchar(255) DEFAULT NULL,
  `import` varchar(255) DEFAULT NULL,
  `export` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_lists`
--

INSERT INTO `permission_lists` (`id`, `permission_name`, `read`, `write`, `create`, `delete`, `import`, `export`) VALUES
(1, 'Holidays', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(2, 'Leaves', 'Y', 'Y', 'Y', 'N', 'N', 'N'),
(3, 'Clients', 'Y', 'Y', 'Y', 'N', 'N', 'N'),
(4, 'Projects', 'Y', 'N', 'Y', 'N', 'N', 'N'),
(5, 'Tasks', 'Y', 'Y', 'Y', 'Y', 'N', 'N'),
(6, 'Chats', 'Y', 'Y', 'Y', 'Y', 'N', 'N'),
(7, 'Assets', 'Y', 'Y', 'Y', 'Y', 'N', 'N'),
(8, 'Timing Sheets', 'Y', 'Y', 'Y', 'Y', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `position_types`
--

CREATE TABLE `position_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `position_types`
--

INSERT INTO `position_types` (`id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'CEO', NULL, NULL),
(2, 'CFO', NULL, NULL),
(3, 'Manager', NULL, NULL),
(4, 'Web Designer', NULL, NULL),
(5, 'Web Developer', NULL, NULL),
(6, 'Android Developer', NULL, NULL),
(7, 'IOS Developer', NULL, NULL),
(8, 'Team Leader', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_information`
--

CREATE TABLE `profile_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rec_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pin_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `reports_to` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_code` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `project_manager_id` bigint(20) UNSIGNED DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` enum('planning','active','on_hold','completed','cancelled') NOT NULL DEFAULT 'planning',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_code`, `client`, `project_manager_id`, `start_date`, `end_date`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'SEVA Project', 'MGTWELL-EQIP-2024-001', 'UNHCR', 55, '2024-01-15', '2024-12-31', 'active', 'Monitoring and evaluation of education quality improvement initiatives across Afghanistan', '2025-12-02 09:16:03', '2025-12-02 09:16:03'),
(2, 'FAO LTA', 'MGTWELL-HAM-2024-002', 'FAO', 55, '2024-02-01', '2024-11-30', 'active', 'Monitoring healthcare service delivery and access in rural areas', '2025-12-02 09:16:03', '2025-12-02 09:16:03'),
(3, 'MA Project', 'MGTWELL-ALA-2024-003', 'UNICEF', 30, '2024-03-01', '2024-10-31', 'active', 'Assessment of agricultural livelihoods and food security situation', '2025-12-02 09:16:03', '2025-12-02 09:16:03'),
(4, 'Market Assessment', 'MGTWELL-IDM-2024-004', 'UN Women', 59, '2024-01-10', '2024-09-30', 'active', 'Monitoring infrastructure development projects in rural communities', '2025-12-02 09:16:03', '2025-12-02 09:16:03'),
(5, 'Women Empowerment Program Evaluation', 'MGTWELL-WEP-2024-005', 'UN Women', 50, '2024-02-15', '2024-08-31', 'active', 'Evaluation of women empowerment and economic inclusion programs', '2025-12-02 09:16:03', '2025-12-02 09:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `project_assignments`
--

CREATE TABLE `project_assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `role_in_project` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `assignment_status` enum('planned','active','completed','terminated') NOT NULL DEFAULT 'planned',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_assignments`
--

INSERT INTO `project_assignments` (`id`, `employee_id`, `project_id`, `role_in_project`, `start_date`, `end_date`, `assignment_status`, `created_at`, `updated_at`) VALUES
(1, 30, 1, 'Field Coordinator', '2024-01-15', '2024-12-31', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(2, 35, 1, 'Data Collector', '2024-01-20', '2024-12-31', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(3, 38, 1, 'Field Assistant', '2024-02-01', '2024-12-31', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(4, 52, 1, 'Field Monitor', '2024-02-10', '2024-12-31', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(5, 37, 2, 'Technical Advisor', '2024-02-01', '2024-11-30', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(6, 46, 2, 'Field Coordinator', '2024-02-01', '2024-11-30', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(7, 47, 2, 'Data Analyst', '2024-02-15', '2024-11-30', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(8, 29, 2, 'Health Coordinator', '2024-02-01', '2024-11-30', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(9, 44, 3, 'Team Lead', '2024-03-01', '2024-10-31', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(10, 39, 3, 'Data Manager', '2024-03-01', '2024-10-31', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(11, 41, 3, 'Field Data Collector', '2024-03-15', '2024-10-31', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(12, 48, 3, 'Data Quality Officer', '2024-03-10', '2024-10-31', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(13, 45, 4, 'Monitoring Officer', '2024-01-10', '2024-09-30', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(14, 48, 4, 'Data Analyst', '2024-01-10', '2024-09-30', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(15, 53, 4, 'Field Analyst', '2024-01-20', '2024-09-30', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29'),
(16, 63, 4, 'Senior Data Analyst', '2024-01-15', '2024-09-30', 'active', '2025-12-02 09:16:29', '2025-12-02 09:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permissions_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`id`, `permissions_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL),
(2, 'CEO', NULL, NULL),
(3, 'Manager', NULL, NULL),
(4, 'Team Leader', NULL, NULL),
(5, 'Accountant', NULL, NULL),
(6, 'Web Developer', NULL, NULL),
(7, 'Web Designer', NULL, NULL),
(8, 'HR', NULL, NULL),
(9, 'UI/UX Developer', NULL, NULL),
(10, 'SEO Analyst', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_type_users`
--

CREATE TABLE `role_type_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_type_users`
--

INSERT INTO `role_type_users` (`id`, `role_type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Super Admin', NULL, NULL),
(3, 'Normal User', NULL, NULL),
(4, 'Client', NULL, NULL),
(5, 'Employee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sequence_tbls`
--

CREATE TABLE `sequence_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sequence_tbls`
--

INSERT INTO `sequence_tbls` (`id`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `payload`, `last_activity`, `ip_address`, `user_agent`) VALUES
('RYEdI4q6e3rKcJgm4SrZ0VH1VDGyNVaz7YouCU76', 67, 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSzVuS3dpOWNBTzkwc1BoektuWlFlS3JqVkl2eDhOM1Z0Z2dmUTBkYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9qZWN0L2FsbG9jYXRpb25zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY3O30=', 1764658587, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `staff_salaries`
--

CREATE TABLE `staff_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rec_id` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `net_salary` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `days` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `leaves` varchar(255) DEFAULT NULL,
  `paiddays` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `net_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rec_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `join_date` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `rec_id`, `email`, `join_date`, `phone_number`, `status`, `role_name`, `avatar`, `position`, `department`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Mohmmad Qahir Sadat', 'Mgtwell_0000000015', 'info@mgtwell.com', 'Sun, Oct 27, 2024 11:22 PM', NULL, NULL, 'Admin', 'admin.png', NULL, NULL, NULL, '$2y$10$8Nsbkdp9L0ON3OvETvqWX.j1MyBnejIpJHP6ZzfiVacQc/tyXfj7a', NULL, '2024-10-27 18:52:16', '2025-08-13 12:00:21'),
(21, 'Sayed Saferullah Pacha', 'Mgtwell_0000000025', 's.pacha@mgtwell.com', 'Wed, Jul 30, 2025 1:58 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$Vco1IBLCl4wN306mOyzOcewJEy0zOxtFNOsiySgX93p1WqrC7B4AO', NULL, '2025-07-30 08:28:08', '2025-08-09 07:50:09'),
(22, 'HR Mgtwell ', 'Mgtwell_0000000026', 'hr@mgtwell.com', 'Sat, Aug 9, 2025 12:54 PM', NULL, NULL, 'Admin', 'admin.png', NULL, NULL, NULL, '$2y$10$lEI7UKW9XOQGVxSOu2T8s.j.luY2f.I.TA692gp7xZ6s0U58e9oIe', NULL, '2025-08-09 07:24:25', '2025-08-09 07:25:28'),
(23, 'Imran Nazar Mohmand', 'Mgtwell_0000000027', 'i.nazarmohammad@mgtwell.com', 'Sat, Aug 9, 2025 1:30 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$l2r1Bp6fhe4TPIm8eLpqse0oC458rskF633LbjRSoiOYg2RltGoJ2', NULL, '2025-08-09 08:00:26', '2025-08-09 09:54:23'),
(27, 'Ahmad Shoib Zaheri', 'Mgtwell_0000000031', 's.zaheri@mgtwell.com', 'Sat, Aug 9, 2025 1:38 PM', NULL, NULL, 'Employee', '68984801e7da9_profile.jpg', NULL, NULL, NULL, '$2y$10$uoao.wBuhjQ5xwibWlP7K.JMaZdGiK08bfMeGJ/SfK4FhW2ImkNyy', NULL, '2025-08-09 08:08:09', '2025-08-10 08:49:30'),
(28, 'Mohammad Younus Didar', 'Mgtwell_0000000032', 'Y.didar@mgtwell.com', 'Sat, Aug 9, 2025 1:40 PM', NULL, NULL, 'Employee', '6898430fc908a_profile.jpg', NULL, NULL, NULL, '$2y$10$d76D02WOa85A/IBgF85QSeaDJ3DpoZv.3VPaIDOhZ7jXOT.8CWow6', NULL, '2025-08-09 08:10:05', '2025-09-27 19:40:59'),
(29, 'Wahidullah Gulabyar', 'Mgtwell_0000000033', 'drgulabyar@gmail.com', 'Sat, Aug 9, 2025 1:41 PM', NULL, NULL, 'Employee', '6898232827dde_profile.jpg', NULL, NULL, NULL, '$2y$10$l3Ro3kFDzorX1P.AtsJdleB0CaAQOnBD6yeO/ur.dh0fggMXer2b2', NULL, '2025-08-09 08:11:42', '2025-08-10 06:12:16'),
(30, 'Hasibullah Najibi', 'Mgtwell_0000000034', 'Hasibullah.Najibi59559@gmail.com', 'Sat, Aug 9, 2025 1:43 PM', NULL, NULL, 'Employee', '689867c3dad1d_profile.jpg', NULL, NULL, NULL, '$2y$10$ozJoOvLNTZM6J6UqL08eBevXFmLjCX.Ejq3MYJfp/P6H/sAAQ7TIi', NULL, '2025-08-09 08:13:33', '2025-08-10 11:04:59'),
(31, 'Sayed Hasibullah Shahidzai', 'Mgtwell_0000000035', 'h.shahidzai@mgtwell.com', 'Sat, Aug 9, 2025 1:46 PM', NULL, NULL, 'Employee', '68986e3941b02_profile.jpg', NULL, NULL, NULL, '$2y$10$DRMvd7w4agZjUGjo6IWAUe1064AVn87jVNdf.pQMJynAZvEdxMZ9m', NULL, '2025-08-09 08:16:06', '2025-08-10 11:32:33'),
(32, 'Jamil Rahman Hassanzai', 'Mgtwell_0000000036', 'hassanzai1401@gmail.com', 'Sat, Aug 9, 2025 1:47 PM', NULL, NULL, 'Employee', '689984d181abd_profile.jpg', NULL, NULL, NULL, '$2y$10$nmTkYg.NJqQCukGdvA.NXOMrcXYehPwkR6yPBMSwXc23XjWk/t47i', NULL, '2025-08-09 08:17:42', '2025-08-11 07:21:13'),
(34, 'Fardeen Formuly', 'Mgtwell_0000000038', 'Fardin.formuly@gmail.com', 'Sat, Aug 9, 2025 1:50 PM', NULL, NULL, 'Employee', '689c35dd47355_profile.jpg', NULL, NULL, NULL, '$2y$10$iAwyqguuMj7BTb/1LJoWmuIIXoejwEw8Y0/8VRFWJit3pv.0vs/1.', NULL, '2025-08-09 08:20:38', '2025-08-13 08:21:09'),
(35, 'Rohullah Naseri', 'Mgtwell_0000000039', 'Rohullah.naseri777@gmail.com', 'Sat, Aug 9, 2025 1:51 PM', NULL, NULL, 'Employee', '68982f052b10c_profile.jpg', NULL, NULL, NULL, '$2y$10$U1FQCJvOByPoknUwo6j6fuGNAT0FlaWeKHEiMt/aMhnqew.Czt5De', NULL, '2025-08-09 08:21:58', '2025-08-10 07:02:53'),
(36, 'Abdul Waris Stanikzai', 'Mgtwell_0000000040', 'Warisstanikzai40@gmail.com', 'Sat, Aug 9, 2025 1:54 PM', NULL, NULL, 'Employee', '689838c90b4fb_profile.jpg', NULL, NULL, NULL, '$2y$10$Y4cTS89PMYKXO6h.UBlbc./SHbDAhOP1SPxxrM0rE0lOZJHWJNkQ2', NULL, '2025-08-09 08:24:37', '2025-08-10 07:44:33'),
(37, 'Ahmad Javid Stanikzai', 'Mgtwell_0000000041', 'Ahmadjavidstanikzai36@gmail.com', 'Sat, Aug 9, 2025 1:56 PM', NULL, NULL, 'Employee', '689ad59ccd9c6_profile.jpg', NULL, NULL, NULL, '$2y$10$PlipG.s.Ui89lTWnxu0wFO9WrYcziqNzfHX6p9EBUqQAKuQs9J1QG', NULL, '2025-08-09 08:26:26', '2025-08-12 07:18:12'),
(38, 'Qais Jabarkhil', 'Mgtwell_0000000042', 'qaisjabarkhil1@outlook.com', 'Sat, Aug 9, 2025 1:58 PM', NULL, NULL, 'Employee', '689996d5e58d7_profile.jpg', NULL, NULL, NULL, '$2y$10$IK3jyfqSn5w7LMjIfX..yuNQTm1Z1Bzvldsvdgpz06ETDkx3.ZdUq', NULL, '2025-08-09 08:28:32', '2025-08-11 08:38:06'),
(39, 'Ahmad Shah Saboori', 'Mgtwell_0000000043', 'ahmadshah.sabori.afg@gmail.com', 'Sat, Aug 9, 2025 2:00 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$lVNqees7aKkMOFNV1/qCJ.9qsjdGxXe7FxkYJdwOB9RoGDAAw7kri', NULL, '2025-08-09 08:30:17', '2025-08-09 08:30:17'),
(40, 'Yalda Foladzada', 'Mgtwell_0000000044', 'yalda-foladzada@yahoo.com', 'Sat, Aug 9, 2025 2:02 PM', NULL, NULL, 'Employee', '6899903644fd7_profile.jpg', NULL, NULL, NULL, '$2y$10$ECxBXYAKmOzrkeSOSi5tzuvXbUt3fmkHh/AIc3aJ3ze2EfzOmzHDa', NULL, '2025-08-09 08:32:00', '2025-08-11 08:09:50'),
(41, 'Mohammad Qasim Faizad', 'Mgtwell_0000000045', 'Q.faizad@gmail.com', 'Sat, Aug 9, 2025 2:03 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$uQTSuAVliZXiRoEjpwGTDOmCHK6HrhLIP8JPSsIuxqNRy1e5Himei', NULL, '2025-08-09 08:33:37', '2025-08-09 08:33:37'),
(42, 'Abdullah Zakhil', 'Mgtwell_0000000046', 'abdullahzakhil1996@gmail.com', 'Sat, Aug 9, 2025 2:07 PM', NULL, NULL, 'Employee', '689820da51040_profile.jpg', NULL, NULL, NULL, '$2y$10$wnydy.18OAblPnnyA0vLYeXGFu2B8rYdNPk3w3Ncu4mEx2J2obulG', NULL, '2025-08-09 08:37:04', '2025-08-10 06:02:26'),
(43, 'Mohammad Haroon Amin', 'Mgtwell_0000000047', 'Mharoon.amin@gmail.com', 'Sat, Aug 9, 2025 2:09 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$19sLpmV/WDU3nVLz11iOZegPBg/9n7D.Db5GsKmin.QV49/I4kfeu', NULL, '2025-08-09 08:39:16', '2025-08-09 08:39:16'),
(44, 'Shah Mohmmad Kamawal', 'Mgtwell_0000000048', 's.kamawal@mgtwell.com', 'Sat, Aug 9, 2025 2:10 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$uRjfdXOHgNSVr7nlV8FTxe0UYSYGVQ9Wagtun0YuXnwcaUgDD902e', NULL, '2025-08-09 08:40:40', '2025-08-09 10:11:44'),
(45, 'Ahmad Milad', 'Mgtwell_0000000049', 'milad.mohammad30@gmail.com', 'Sat, Aug 9, 2025 2:11 PM', NULL, NULL, 'Employee', '689831b3599c4_profile.jpg', NULL, NULL, NULL, '$2y$10$lp6byDrc7/84MjmX54VyFuQUkA3Um5jXtfRos4MVh7rloy4aEnOjW', NULL, '2025-08-09 08:41:53', '2025-08-10 07:14:19'),
(46, 'Shamsullah Habibzai', 'Mgtwell_0000000050', 'shams.hb007@gmail.com', 'Sat, Aug 9, 2025 2:13 PM', NULL, NULL, 'Employee', '6898459191250_profile.jpg', NULL, NULL, NULL, '$2y$10$pKw1fXrY8kbsrRX4gzmtiuNb/cJHOiJ0f9H5pNeDi.6UetB9OQKMK', NULL, '2025-08-09 08:43:31', '2025-08-10 08:39:05'),
(47, 'Nilofar Sidiqi', 'Mgtwell_0000000051', 'sidiqi.nilofar@gmail.com', 'Sat, Aug 9, 2025 2:20 PM', NULL, NULL, 'Employee', '689833c1167bc_profile.jpg', NULL, NULL, NULL, '$2y$10$HruINRrrCrRl4HeKKxVghusi7T1JChRBPH8uqohwQq7qZuDD0aFju', NULL, '2025-08-09 08:50:13', '2025-08-10 07:23:05'),
(48, 'Mohammad Naim', 'Mgtwell_0000000052', 'M.sulimanzai2012@gmail.com', 'Sat, Aug 9, 2025 2:21 PM', NULL, NULL, 'Employee', '68986400a32b5_profile.jpg', NULL, NULL, NULL, '$2y$10$B//6LXBQDAMj.GsDSN3Ft.pPmrf02M5TyXKHA4FMiJU2KQ5HzTcxO', NULL, '2025-08-09 08:51:43', '2025-08-10 10:48:56'),
(49, 'Mujibullah Stanikzai', 'Mgtwell_0000000053', 'mujeebstanikzai2020@gmail.com', 'Sat, Aug 9, 2025 2:23 PM', NULL, NULL, 'Employee', '68998bfd2949f_profile.jpg', NULL, NULL, NULL, '$2y$10$ZKSZWuRGg5hteA2WduyaJuq413NwhJ6q14MtCGA/pPLfobPCHbTLu', NULL, '2025-08-09 08:53:15', '2025-08-11 07:51:49'),
(50, 'Yahya Sharafzai', 'Mgtwell_0000000054', 'yahyasharafzai@gmail.com', 'Sat, Aug 9, 2025 2:57 PM', NULL, NULL, 'Employee', '689c40615a592_profile.jpg', NULL, NULL, NULL, '$2y$10$FlthyuWaCTDgfgo3xYBP.uqV8DVxD0PZj/RB36ESQ.zxc7E7J5NN6', NULL, '2025-08-09 09:27:57', '2025-08-13 09:06:01'),
(52, 'Mohammad Haris Shaiq', 'Mgtwell_0000000056', 'haris.khogyani@gmail.com', 'Sun, Aug 10, 2025 12:11 PM', NULL, NULL, 'Employee', '68982c1948d57_profile.jpg', NULL, NULL, NULL, '$2y$10$Fd.UuGvygGUDIwDPvkKmIOFWvQaJzwzD0zxmTPjoLqL1cwly9E4MW', NULL, '2025-08-10 06:41:53', '2025-08-10 06:50:25'),
(53, 'Rezwanullah Sadat', 'Mgtwell_0000000057', 'sadatredwanullah@gmail.com', 'Mon, Aug 11, 2025 10:15 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$CfjMDY3BYJEzPnno5pfF0eOPnD6L0kEctbv1bIaIB7W9s77V90dEC', NULL, '2025-08-11 16:45:02', '2025-08-11 16:45:02'),
(54, 'Aziz Ahmad Mohammadi', 'Mgtwell_0000000058', 'azizparwani5@gmail.com', 'Mon, Aug 11, 2025 10:17 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$1FptTsqMEbucC9DEi/fdlOVGF2sYSCSXiEt2c6LEp2tKvn8WAwtF.', NULL, '2025-08-11 16:47:35', '2025-08-11 16:47:35'),
(55, 'Atiqullah Rashidi', 'Mgtwell_0000000059', 'atiqullahrashidi88@gmail.com', 'Mon, Aug 11, 2025 10:52 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$vb.SkStsR2XGHfB0nwU9S.SuYpPdh1FuRDluNS2/0.i5VJmqZk9AO', NULL, '2025-08-11 17:22:25', '2025-08-11 17:22:25'),
(57, 'Nawidullah Assadzay', 'Mgtwell_0000000061', 'n.assadzay@mgtwell.com', 'Tue, Aug 12, 2025 2:05 PM', NULL, NULL, 'Employee', '689aeb62a17ba_profile.jpg', NULL, NULL, NULL, '$2y$10$67e8ODYuFuXLoHSxblhT5OSnzoNfQ5c8KFgDGXoCpxTbL7FT.hah.', NULL, '2025-08-12 08:35:09', '2025-08-12 08:51:06'),
(58, 'Ahmad Noorani', 'Mgtwell_0000000062', 'a.noorani@mgtwell.com', 'Tue, Aug 12, 2025 6:27 PM', NULL, NULL, 'Employee', '689b2671ccc18_profile.jpg', NULL, NULL, NULL, '$2y$10$ap3Zf5PdfBs4E5HWW4QDqO0SKNIjgEPCSPPqBwyE.7byg0HMaEBfy', NULL, '2025-08-12 12:57:27', '2025-08-12 13:03:05'),
(60, 'Phineas PACHAVO MAQWENZI', 'Mgtwell_0000000064', 'P.maqwenzi@gmail.com', 'Tue, Aug 12, 2025 6:54 PM', NULL, NULL, 'Employee', '689b307f76905_profile.jpg', NULL, NULL, NULL, '$2y$10$5qdfWuQMnpoUncCcgPIHZeOBhPiaabXpiv1mvSJvqEYsRiBoOMVaS', NULL, '2025-08-12 13:24:38', '2025-08-12 13:45:59'),
(61, 'Ahmad Khalid', 'Mgtwell_0000000065', 'k.wafa@mgtwell.com', 'Wed, Aug 13, 2025 2:00 PM', NULL, NULL, 'Employee', '689c396d9a75e_profile.jpg', NULL, NULL, NULL, '$2y$10$cgRHR/sFEJQChRUgfpe9LOYBoieGzulUk0ObzwvyA7ZWjWqS7043u', NULL, '2025-08-13 08:30:22', '2025-08-13 08:36:21'),
(62, 'Employees', 'Mgtwell_0000000066', 'Employee@mgtwell.com', 'Sun, Aug 17, 2025 11:35 AM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$pXJ2/tpirxdhF3/F0jGLU.dUA7oW9g5PyRR4GBYxV7AtRCYbGbmvO', NULL, '2025-08-17 06:05:36', '2025-08-17 06:05:36'),
(63, 'Dadkhuda Ahmad Yar', 'Mgtwell_0000000067', 'ahmadyaar2010@gmail.com', 'Sat, Sep 27, 2025 11:48 PM', NULL, NULL, 'Employee', '68ef440c2bde4_profile.jpg', NULL, NULL, NULL, '$2y$10$vCQ4g.WBXrEfnwF1Nx/eUuYDhasUMD9nhA1A14OSWr29x43659M4W', NULL, '2025-09-27 18:18:18', '2025-10-15 08:19:48'),
(64, 'Bilal Jahan', 'Mgtwell_0000000068', 'bilal.jahann@gmail.com', 'Fri, Oct 10, 2025 11:46 PM', NULL, NULL, 'Employee', '68ef3d1eeb747_profile.jpg', NULL, NULL, NULL, '$2y$10$Vk0L8NFk6aT804hFQH1iYe/7sEmHaDB2U/ACpnZBQz.sMndZVRFkK', NULL, '2025-10-10 18:16:18', '2025-10-15 07:50:15'),
(65, 'hr@mgtwell.com', 'Mgtwell_0000000069', 'asifskot@gmail.com', 'Wed, Oct 15, 2025 1:03 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$9Rkj4dwLOPHiCFuuH4ffSuUb.VIiYIG/DOmrvQy5e2kt4gJjtVio.', NULL, '2025-10-15 07:33:00', '2025-10-15 07:33:00'),
(66, 'Asif Shah', 'Mgtwell_0000000070', 'a.shah@mgtwell.com', 'Wed, Oct 15, 2025 1:24 PM', NULL, NULL, 'Employee', '68ef40e60e16d_profile.jpg', NULL, NULL, NULL, '$2y$10$IhtikEeo5LRAxwkh75wBVuK.pLUs2KKOx2aO1CawPQxriyHIXdxNu', NULL, '2025-10-15 07:54:03', '2025-10-15 08:06:22'),
(67, 'liaqat Paindah', 'Mgtwell_0000000037', 'liaqat.paindah@gmail.com', 'Tue, Dec 2, 2025 1:53 PM', NULL, NULL, 'Admin', 'admin.png', NULL, NULL, NULL, '$2y$10$V35BSD70LJEZNHzwmkWMEuiE1uiS.mrcSITclu58y.u92tDMZsybK', NULL, '2025-12-02 09:23:00', '2025-12-02 09:23:00'),
(68, 'admin', 'Mgtwell_0000000002', 'admin@mgtwell.com', 'Tue, Dec 2, 2025 1:54 PM', NULL, NULL, 'Employee', 'admin.png', NULL, NULL, NULL, '$2y$10$Axl8EZmXInd4OtccaxZJo.sDr4LDgAQZIF/PVq50RtZfwjQPbkBuC', NULL, '2025-12-02 09:24:11', '2025-12-02 09:24:11');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `id_store` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
                INSERT INTO sequence_tbls VALUES (NULL);  -- Assuming this generates a new ID
                SET NEW.rec_id = CONCAT("Mgtwell_", LPAD(LAST_INSERT_ID(), 10, "0"));
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_activity_logs`
--

CREATE TABLE `user_activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  `modify_user` varchar(255) DEFAULT NULL,
  `date_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Active', NULL, NULL),
(2, 'Inactive', NULL, NULL),
(3, 'Disable', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_parent_department_id_foreign` (`parent_department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_employee_id_unique` (`employee_id`),
  ADD KEY `employees_department_id_foreign` (`department_id`),
  ADD KEY `employees_manager_id_foreign` (`manager_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leaves_admins`
--
ALTER TABLE `leaves_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_permissions`
--
ALTER TABLE `module_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permission_lists`
--
ALTER TABLE `permission_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position_types`
--
ALTER TABLE `position_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_information`
--
ALTER TABLE `profile_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_project_code_unique` (`project_code`),
  ADD KEY `projects_project_manager_id_foreign` (`project_manager_id`);

--
-- Indexes for table `project_assignments`
--
ALTER TABLE `project_assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_assignments_employee_id_foreign` (`employee_id`),
  ADD KEY `project_assignments_project_id_foreign` (`project_id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_type_users`
--
ALTER TABLE `role_type_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sequence_tbls`
--
ALTER TABLE `sequence_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_salaries`
--
ALTER TABLE `staff_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_rec_id_unique` (`rec_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_activity_logs`
--
ALTER TABLE `user_activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves_admins`
--
ALTER TABLE `leaves_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `module_permissions`
--
ALTER TABLE `module_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_lists`
--
ALTER TABLE `permission_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `position_types`
--
ALTER TABLE `position_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile_information`
--
ALTER TABLE `profile_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_assignments`
--
ALTER TABLE `project_assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role_type_users`
--
ALTER TABLE `role_type_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sequence_tbls`
--
ALTER TABLE `sequence_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_salaries`
--
ALTER TABLE `staff_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user_activity_logs`
--
ALTER TABLE `user_activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_parent_department_id_foreign` FOREIGN KEY (`parent_department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employees_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `employees` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_project_manager_id_foreign` FOREIGN KEY (`project_manager_id`) REFERENCES `employees` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `project_assignments`
--
ALTER TABLE `project_assignments`
  ADD CONSTRAINT `project_assignments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_assignments_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
