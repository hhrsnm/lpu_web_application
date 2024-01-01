-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 05:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_applicationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `deductiontbl`
--

CREATE TABLE `deductiontbl` (
  `deduction_date` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `faculty_savings_deposit` double NOT NULL,
  `faculty_savings_loan` double NOT NULL,
  `id` int(11) NOT NULL,
  `income_tax_contri` double NOT NULL,
  `other_loans` double NOT NULL,
  `pagibig_contri` double NOT NULL,
  `pagibig_loan` double NOT NULL,
  `philHealth_contri` double NOT NULL,
  `salary_loan` double NOT NULL,
  `sss_contri` double NOT NULL,
  `total_deduction` double NOT NULL,
  `sss_loan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deductiontbl`
--

INSERT INTO `deductiontbl` (`deduction_date`, `employee_no`, `faculty_savings_deposit`, `faculty_savings_loan`, `id`, `income_tax_contri`, `other_loans`, `pagibig_contri`, `pagibig_loan`, `philHealth_contri`, `salary_loan`, `sss_contri`, `total_deduction`, `sss_loan`) VALUES
('', '13579', 0, 0, 26, 6500, 1000, 1200.5, 1200.5, 1170, 2200, 1170, 13340.5, 0),
('', '999999', 0, 0, 30, 0, 1000, 1200.5, 1200.5, 1170, 2200, 1170, 6840.5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `incometbl`
--

CREATE TABLE `incometbl` (
  `id` int(11) NOT NULL,
  `income_date` varchar(255) NOT NULL,
  `basic_rate_hour` double NOT NULL,
  `basic_income` double NOT NULL,
  `hono_rate_hour` double NOT NULL,
  `hono_num_hrs` double NOT NULL,
  `hono_income` double NOT NULL,
  `other_rate_hour` double NOT NULL,
  `other_num_hrs` double NOT NULL,
  `other_income` double NOT NULL,
  `gross_income` double NOT NULL,
  `net_income` double NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `basic_num_hrs` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incometbl`
--

INSERT INTO `incometbl` (`id`, `income_date`, `basic_rate_hour`, `basic_income`, `hono_rate_hour`, `hono_num_hrs`, `hono_income`, `other_rate_hour`, `other_num_hrs`, `other_income`, `gross_income`, `net_income`, `employee_no`, `basic_num_hrs`) VALUES
(39, '', 500, 15000, 1000, 10, 10000, 500, 2, 1000, 26000, 12659.5, '13579', 30),
(43, '', 500, 15000, 1000, 10, 10000, 500, 2, 1000, 26000, 19159.5, '999999', 30);

-- --------------------------------------------------------

--
-- Table structure for table `personal_infotbl`
--

CREATE TABLE `personal_infotbl` (
  `id` int(11) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `address_line1` text NOT NULL,
  `address_line2` text NOT NULL,
  `birth_date` date NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `employee_status` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `other_social_media_account` varchar(255) NOT NULL,
  `pay_date` date NOT NULL,
  `picpath` text NOT NULL,
  `qualified_dependent_status` varchar(255) NOT NULL,
  `social_media_account_id` varchar(255) NOT NULL,
  `state_province` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_infotbl`
--

INSERT INTO `personal_infotbl` (`id`, `employee_no`, `address_line1`, `address_line2`, `birth_date`, `civil_status`, `contact_no`, `country`, `department`, `designation`, `email_address`, `employee_status`, `fname`, `gender`, `lname`, `mname`, `municipality`, `nationality`, `other_social_media_account`, `pay_date`, `picpath`, `qualified_dependent_status`, `social_media_account_id`, `state_province`, `suffix`, `zip_code`) VALUES
(8, '101010', 'hey', 'There', '2023-11-14', 'S', '09123456799', 'Phillipines', 'Health', 'There', 'gelo@gmail.com', 'Active', 'Gelo', 'M', 'Gelooo', 'Geloo', 'Silang', 'Filipino', 'wechat', '2023-11-30', 'uploads/GANBATTE NE!.png', 'Z', 'Gelooo', 'Cavite', 'Jr.', 1234),
(5, '12346', 'here', 'there', '2022-12-25', 'S', '09123456789', 'Phillipines', 'Engineering', 'Bossing', 'haha@gmail.com', 'Active', 'Sponge', 'M', 'Squarepants', 'bob', 'Genthree', 'Filipino', 'facebook_messenger', '2023-11-30', 'uploads/GANBATTE NE!.png', 'S or ME', 'Spongebob', 'Etivac', 'jr.', 1234),
(7, '13579', 'far away', 'super far away', '2018-12-21', 'S', '09555555555', 'Phillipines', 'DOE', 'Manager', 'Wind@gmail.com', 'active', 'Freddy', 'M', 'Queen', 'Man', 'unknown', 'Filipino', 'facebook_messenger', '2024-01-01', 'uploads/wand.jpg', 'S or ME', 'windboom', 'missing', 'jr.', 8888),
(6, '54321', 'there', 'here', '2021-01-01', 'S', '09888888888', 'Phillipines', 'Engineering', 'Lord', 'raiden@gmail.com', 'Active', 'Rai', 'F', 'Shogun', 'Den', 'genthree', 'Filipino', 'snapchat', '2023-12-25', 'uploads/Raiden1.png', 'Z', 'raiden', 'Cavitee', 'n/a', 12345),
(9, '999999', 'UA', 'Hero Residence', '2023-11-01', 'S', '09123456777', 'Phillipines', 'Hero', 'number one', 'olmaythero@gmail.com', 'Active', 'Olmayt', 'M', 'Throw', 'Punch', 'Imus', 'Filipino', 'facebook_messenger', '2023-11-30', 'uploads/21-210049_united-states-of-smash.jpg', 'Z', 'Olmayt', 'Cavite', 'na', 4103);

-- --------------------------------------------------------

--
-- Table structure for table `salestbl`
--

CREATE TABLE `salestbl` (
  `cash_given` double NOT NULL,
  `customer_change` double NOT NULL,
  `discounted_amount` double NOT NULL,
  `discount_amount` double NOT NULL,
  `discount_option` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_discounted_amount` double NOT NULL,
  `total_discount_given` double NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `item_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salestbl`
--

INSERT INTO `salestbl` (`cash_given`, `customer_change`, `discounted_amount`, `discount_amount`, `discount_option`, `employee_no`, `id`, `item_name`, `price`, `quantity`, `total_discounted_amount`, `total_discount_given`, `total_quantity`, `item_type`) VALUES
(16000, 0, 16000, 4000, 'on', '', 20, 'Cellphone 1', 10000, 2, 16000, 4000, 2, ''),
(16000, 0, 16000, 4000, 'on', '', 21, 'Cellphone 1', 10000, 2, 16000, 4000, 2, ''),
(7800, 15, 7785.4, 3336.6, 'on', '', 22, 'Cellphone 18', 11122, 1, 23785, 7336, 3, ''),
(25, 3, 22, 0, 'on', '', 23, 'Junk Food 16', 22, 1, 88, 0, 4, ''),
(15, 3, 12, 3, 'on', '', 24, 'Snack 1', 15, 1, 12, 3, 1, ''),
(26, 1, 25.5, 4.5, 'on', '', 25, 'Snack 17', 15, 2, 25, 4, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounttbl`
--

CREATE TABLE `user_accounttbl` (
  `confirm_password` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounttbl`
--

INSERT INTO `user_accounttbl` (`confirm_password`, `employee_no`, `id`, `password`, `username`, `privilege`) VALUES
('', '12346', 3, '', '', 0),
('', '54321', 4, '', '', 0),
('', '13579', 5, '', '', 0),
('', '101010', 6, '', '', 0),
('', '999999', 7, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deductiontbl`
--
ALTER TABLE `deductiontbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incometbl`
--
ALTER TABLE `incometbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_infotbl`
--
ALTER TABLE `personal_infotbl`
  ADD PRIMARY KEY (`employee_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `salestbl`
--
ALTER TABLE `salestbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounttbl`
--
ALTER TABLE `user_accounttbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deductiontbl`
--
ALTER TABLE `deductiontbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `incometbl`
--
ALTER TABLE `incometbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `personal_infotbl`
--
ALTER TABLE `personal_infotbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `salestbl`
--
ALTER TABLE `salestbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_accounttbl`
--
ALTER TABLE `user_accounttbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
