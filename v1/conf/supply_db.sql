-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 09:22 AM
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
-- Database: `supply_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(55) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Equipment'),
(2, 'Goods & Services'),
(4, 'Consumables');

-- --------------------------------------------------------

--
-- Table structure for table `con`
--

CREATE TABLE `con` (
  `con_id` int(55) NOT NULL,
  `con_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `con`
--

INSERT INTO `con` (`con_id`, `con_desc`) VALUES
(1, 'Working'),
(2, 'Condemned');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(55) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `contact_no` varchar(55) NOT NULL,
  `office` varchar(250) NOT NULL,
  `added_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`) VALUES
(1, 'OSDS'),
(2, 'CID'),
(3, 'SGOD');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(55) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `emp_contact_no` varchar(50) NOT NULL,
  `emp_email_add` text NOT NULL,
  `position_id` int(55) NOT NULL,
  `office_id` int(55) NOT NULL,
  `division_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(55) NOT NULL,
  `added_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `picture`, `firstname`, `middlename`, `lastname`, `emp_contact_no`, `emp_email_add`, `position_id`, `office_id`, `division_id`, `username`, `password`, `role_id`, `added_at`) VALUES
(1, '_DSC0128 (2).JPG', 'Geperson', 'Camporedondo', 'Mamalias', '09317562740', 'geperson.ph@gmail.com', 7, 9, 0, 'geperson', '$2y$10$77qr92YiqHUMn4c.BVo8ZufBN.K3srkdBeBwxsNDYrGuYBGfLeUSi', 2, '2022-06-05 16:02:24'),
(71, '', 'Admin', 'Admin', 'Admin', '09123456789', 'admin@gmail.com', 1, 1, 0, 'admin@gmail.com', '$2y$10$ehOWDr8zQZMETwXTJKFVIeqd219l8hvZnYCzvdbYY2ijs4A7RvrhG', 2, '2022-10-22 09:18:43'),
(72, '', 'User', 'User', 'User', '09123456789', 'user@gmail.com', 1, 1, 0, 'user@gmail.com', '$2y$10$aoF3GO5Wyf6qLSG8MhbDaO4hjb8VID9A9NEnfqr6gvxaqJHA3jrwO', 3, '2022-10-22 09:20:09'),
(73, '', 'Superadmin', 'Superadmin', 'Superadmin', '09123456789', 'superadmin@gmail.com', 3, 1, 0, 'superadmin@gmail.com', '$2y$10$9cKb.z/gAsSZwlK10oSX1OPQsNE1HtkJYouQouw0CaJ4pc6wL6WI.', 1, '2022-10-22 09:21:26'),
(79, '', 'Mario', 'C', 'Mondejar', '09123456789', 'mario.mondejar@deped.gov.ph', 5, 10, 3, 'mario.mondejar@deped.gov.ph', '$2y$10$Q4Aj8XdABONmVLcGiOI0x.4kJr5uYJuSknrdIj70pJ71a77nDE6Hy', 3, '2023-01-23 14:17:53'),
(80, '', 'ROMEO', 'M.', 'YTING', '09123456789', 'romeo.yting@deped.gov.ph', 10, 9, 0, 'romeo.yting@deped.gov.ph', '$2y$10$XX5C2T8CNIagi1VAZIy/Yul6XWz.1wrQAEMZvZhdnl4wVI1GleGfm', 3, '2023-01-23 14:25:04'),
(81, '', 'ARIEL', 'D.', 'DUCO', '09123456789', 'ariel.duco@deped.gov.ph', 1, 14, 3, 'ariel.duco@deped.gov.ph', '$2y$10$Juwlpg4C7LBkJNKPhBKlqe.SIHG0ebIYBb6eSieWrOF2KFk9ahRtm', 3, '2023-01-24 15:03:41'),
(82, '', 'JENNY ROSE', 'A', 'ALITANA', '09123456789', 'jenny.solitana@deped.gov.ph', 1, 10, 3, 'jenny.solitana@deped.gov.ph', '$2y$10$eTqLLCwGiNaJN4xz327LGeR2r.AahJBSfIHcPMd8VtszIdnY.zxWC', 3, '2023-01-24 15:05:48'),
(83, '', 'JESSIE', 'S', 'SAJOL', '09123456789', 'jessie.sajol@deped.gov.ph', 1, 10, 3, 'jessie.sajol@deped.gov.ph', '$2y$10$q.vmR5xocuLpKB1EbiFaUu2gP0u8S4sU9UyyFb6nGNgg4fd7Y54Ky', 3, '2023-01-24 15:09:07'),
(84, '', 'BERNIE', 'G.', 'QUILATON', '09123456789', 'bernie.quilaton@deped.gov.ph', 1, 10, 3, 'bernie.quilaton@deped.gov.ph', '$2y$10$AETKDEU2/7FjI9/nGL6uN.UQAeA.MH47nqfHCj2t3wPOFGkJXBARe', 3, '2023-01-24 15:10:05'),
(85, '', 'CHERRY JOY', 'C.', 'CHICOTE', '09123456789', 'cherry.chicote@deped.gov.ph', 1, 10, 3, 'cherry.chicote@deped.gov.ph', '$2y$10$u7f4jXlRMsmay5TsrwI6LeVslI0UGLk2ylaNqV38nB4J3OpVh/ZcW', 3, '2023-01-24 15:10:59'),
(86, '', 'KIRK SONNY  GIL', 'P.', 'HERUELA', '09123456789', 'kirk.heruela@deped.gov.ph', 1, 10, 3, 'kirk.heruela@deped.gov.ph', '$2y$10$iC6corxsLcnVlpkkelwsV.qlgc9qIKcc0X3Kl72rT/uQ6YgrDVOc.', 3, '2023-01-24 15:13:05'),
(87, '', 'AMY', 'P.', 'CORRAL', '09123456789', 'amy.corral@deped.gov.ph', 1, 10, 3, 'amy.corral@deped.gov.ph', '$2y$10$Yhnpn/lDmvk8uCgYKuygI.H67ZnQxjXyeUiSB0tpb4jeob3kqwyrC', 3, '2023-01-24 15:31:25'),
(88, '', 'JOVETH', 'G.', 'TUBIANO', '09123456789', 'joveth.tubiano@deped.gov.ph', 1, 10, 3, 'joveth.tubiano@deped.gov.ph', '$2y$10$OxbNb9UzCJJO.WXEy3f0be8PTmA2IwSnTau5LvhYEvtEceH72Q9Gm', 3, '2023-01-24 15:32:22'),
(89, '', 'NEIL JOHN', 'T.', 'AUDAN', '09123456789', 'neiljohn.audan@deped.gov.ph', 1, 10, 3, 'neiljohn.audan@deped.gov.ph', '$2y$10$5M66aIhofCs2WI1Jq0VXP.EL1KuEn/NtASPKiYuIPJ0XoVz.3beAu', 3, '2023-01-24 15:33:23'),
(90, '', 'ELYN', 'L.', 'SUPRENTE', '09123456789', 'elyn.suprente@deped.gov.ph', 1, 10, 3, 'elyn.suprente@deped.gov.ph', '$2y$10$b2p13Rw5RkKfK7aPBzRHvuor6yzdMMZ9EEl/g.ID53a31MnmvGrCG', 3, '2023-01-24 15:34:24'),
(91, '', 'CHRISTINE', 'P.', 'LIMBUJAN', '09123456789', 'christine.limbujan@deped.gov.ph', 1, 10, 3, 'christine.limbujan@deped.gov.ph', '$2y$10$Kz1Wg/ehnkljzioljg17Ue3WODI7nEBGX3s.JJfrQ3znuzkCroprK', 3, '2023-01-24 15:35:24'),
(92, '', 'Janette', 'G.', 'VELOSO', '09123456789', 'janette.veloso@deped.gov.ph', 1, 15, 1, 'janette.veloso@deped.gov.ph', '$2y$10$oCiDeIYAOkOLF8qKEWUWt.x1UxUjsFS/HGQmLG4J0al7OcXsQKM46', 3, '2023-01-24 15:37:44'),
(93, '', 'CHEERYLYN', 'C', 'COMETA', '09123456789', 'cheerylyn.cometa@deped.gov.ph', 11, 4, 2, 'cheerylyn.cometa@deped.gov.ph', '$2y$10$VnGQEKr3fy4ppJENPUWzGuhtu7Ea5eU2Uuf7ZZQ4yX.u4l70FVmEe', 3, '2023-01-25 09:23:05'),
(94, '', 'ROMEO', 'M.', 'YTING', '09123456789', 'romeo.yting@deped.gov.ph', 1, 9, 1, 'romeo.yting@deped.gov.ph', '$2y$10$QSbPEofbYhhxrU8c7ZnXS.pksHzfQrA.wKZKzfKVl82FqKNpE9uJ2', 2, '2023-01-30 15:37:44'),
(95, '', 'REGIE ROSE', 'E', 'DIO', '', 'dioregierose@gmail.com', 7, 9, 1, 'dioregierose@gmail.com', '$2y$10$r7/HLzyET7.VIddjPitMT.66Qia0vyhoms.j13QkowyBzeVBCtUyS', 2, '2023-03-16 14:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `issuance`
--

CREATE TABLE `issuance` (
  `issued_id` int(11) NOT NULL,
  `issuance_code` varchar(250) NOT NULL,
  `issued_date` date NOT NULL,
  `issued_to` int(11) NOT NULL,
  `issued_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issuance`
--

INSERT INTO `issuance` (`issued_id`, `issuance_code`, `issued_date`, `issued_to`, `issued_item`) VALUES
(5, 'ISNC2210-2', '2022-10-20', 16, 7),
(6, 'ISNC2210-3', '2022-10-20', 10, 2),
(7, 'ISNC2210-4', '2022-10-20', 10, 7),
(11, 'ISNC2210-5', '2022-10-20', 17, 5),
(12, 'ISNC2210-6', '2022-10-20', 62, 9),
(13, 'ISNC2210-7', '2022-10-20', 16, 8),
(15, 'ISNC2210-8', '2022-10-20', 10, 9),
(16, 'ISNC2210-8', '2022-10-20', 15, 7),
(17, 'ISNC2210-9', '2022-10-20', 68, 7),
(18, 'ISNC2210-10', '2022-10-20', 1, 9),
(19, 'ISNC2210-11', '2022-10-20', 70, 2),
(20, 'ISNC2210-12', '2022-10-22', 13, 5);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(55) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_desc` varchar(250) NOT NULL,
  `item_serial` varchar(250) NOT NULL,
  `item_model` varchar(250) NOT NULL,
  `item_brand` varchar(250) NOT NULL,
  `unit` varchar(250) NOT NULL,
  `item_amount` int(250) NOT NULL,
  `item_purdate` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `category_id` int(55) NOT NULL,
  `con_id` int(55) NOT NULL,
  `status_id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_desc`, `item_serial`, `item_model`, `item_brand`, `unit`, `item_amount`, `item_purdate`, `supplier_id`, `category_id`, `con_id`, `status_id`) VALUES
(2, 'Laptops', 'Core i7', '123456', '1234567', 'ASUS', 'unit', 45000, '2022-10-16', 2, 1, 2, 1),
(5, 'Printer', 'Monochrome Printer', '456FGHJ78', 'LBP2900', 'CANON', 'unit', 7689, '2022-10-18', 3, 1, 1, 4),
(7, 'Hard Drive', 'SEAGATE 8TB SATA Ironwolf 7200RPM 256MB NAS Hard Drive', '437FG7', 'YTRE45', 'SEAGATE', 'pc', 14850, '2022-10-17', 4, 1, 1, 4),
(8, ' DESKTOP', ' I3 W/ GT1030', '76YUIE4', 'ASPIRE TC-1750', 'ACER ', 'unit', 41995, '2022-10-18', 4, 1, 1, 4),
(9, 'MONITOR ', ' 27″ L AGON GAMING LOL EDTN', '765GFHJ890', 'AG275QX', 'AOC', 'pc', 25700, '2022-10-18', 4, 1, 1, 4),
(10, 'MONITOR ', ' ECO 8CH HDTVI Combo Kit', '6543FGHJKL', ' TVI-8CH4D4B-2MP', 'HIKVISION', 'unit', 9200, '2022-10-18', 3, 1, 1, 4),
(11, '', '', '', '', '', '', 0, '0000-00-00', 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item_status`
--

CREATE TABLE `item_status` (
  `status_id` int(11) NOT NULL,
  `status_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_status`
--

INSERT INTO `item_status` (`status_id`, `status_desc`) VALUES
(1, 'for repaire'),
(2, 'for transfer'),
(3, 'for condemned'),
(4, 'no status'),
(7, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `office_id` int(55) NOT NULL,
  `office_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`office_id`, `office_name`) VALUES
(1, 'Admin'),
(2, 'Budget'),
(3, 'Cashier'),
(4, 'CID'),
(5, 'COA'),
(6, 'Finance'),
(7, 'HR'),
(8, 'Legal'),
(9, 'Supply'),
(10, 'SGOD'),
(13, 'Records'),
(14, 'Physical Facilities'),
(15, 'ASDS');

-- --------------------------------------------------------

--
-- Table structure for table `pmr_table`
--

CREATE TABLE `pmr_table` (
  `pmr_id` int(11) NOT NULL,
  `pr_no` varchar(20) NOT NULL,
  `po_no` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `pcategory_id` int(11) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `src_fund` varchar(255) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `pstatus_id` int(20) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `added_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pmr_table`
--

INSERT INTO `pmr_table` (`pmr_id`, `pr_no`, `po_no`, `date`, `pcategory_id`, `particulars`, `amount`, `src_fund`, `employee_id`, `pstatus_id`, `remarks`, `added_at`, `updated_at`) VALUES
(15, '2023-01-001', '2023-01-001', '2023-01-11', 2, '2022 Division Brigada Eskwela Best Implementing School Awards - Supplies', 1375, 'OSEC-11-22-2828', 79, 5, 'forwarded for payment 02/08/2023', '2023-01-23 14:27:18', '2023-01-23 06:27:18'),
(16, '2023-01-003', '2023-01-002', '2023-01-11', 2, 'Request for UPS', 32000, 'Division MOOE - OSDS', 71, 2, 'To be serve on 4th Quarter', '2023-01-23 14:32:34', '2023-01-23 06:32:34'),
(17, '2023-01-003', '2023-01-02', '2023-01-11', 2, 'Request for UPS', 32000, 'Division MOOE - OSDS', 92, 2, 'SHORT OF AWARD ( for  serve)', '2023-01-25 09:26:47', '2023-01-25 01:26:47'),
(18, '2023-01-004', '2023-01-003', '2023-01-11', 2, 'Conduct of SDO Payroll Assessment', 3150, 'Division MOOE - OSDS', 92, 4, 'FOR APPROVAL', '2023-01-25 09:30:03', '2023-01-25 01:30:03'),
(19, '2023-01-013', '2023-01-004', '2023-01-18', 2, 'Budget Office - Common Office Supplies for the 4th quarter.', 7970, 'DIVISON MOOE', 92, 4, 'Purchase Order For Approval', '2023-01-25 09:41:12', '2023-01-25 01:41:12'),
(20, '2023-01-005', '2023-01-005', '2023-01-18', 2, '1st Quarter Janitorial Supplies', 15, 'Division MOOE - OSDS', 92, 4, 'Purchase Order  For Approval', '2023-01-25 09:43:04', '2023-01-25 01:43:04'),
(21, '2023-01-024', '2023-01-006', '2023-01-24', 1, 'Workshop on ER Organization for PRIME HRM', 90300, 'Division MOOE - OSDS', 92, 4, 'forwarded for payment 02/06/2023', '2023-01-25 09:45:03', '2023-01-25 01:45:03'),
(22, '2023-01-021', '2023-01-007', '2023-01-24', 2, 'RECORDS SUPPLIES 1ST QUARTER', 6656, 'Division MOOE - OSDS', 92, 5, 'Forwarded for payment 02/20/2023', '2023-01-25 09:47:03', '2023-01-25 01:47:03'),
(23, '2023-01-024', '2023-01-006', '2023-01-24', 1, 'Workshop on ER Organization for PRIME HRM', 90, 'Division MOOE - OSDS', 92, 5, 'forwarded for payment 02/06/2023', '2023-03-17 13:38:51', '2023-03-17 05:38:51'),
(24, '2023-01-037', '2023-02-017', '2023-02-02', 2, 'Provision of Computer Accessories for the SDS Office for the 1st Quarter of C.Y. 2023', 14890, 'Division MOOE - OSDS', 92, 5, 'forwarded for payment 02/09/2023', '2023-03-17 13:44:24', '2023-03-17 05:44:24'),
(25, '2023-01-025', '2023-01-011', '2023-01-30', 2, 'Request for Supplies for Q1 - (refill toner)', 7150, 'Division MOOE - OSDS', 92, 5, 'Forwarded for payment 02/20/2023', '2023-03-17 13:48:23', '2023-03-17 05:48:23'),
(26, '2023-01-035', '2023-02-015', '2023-02-02', 2, 'Provision of Common Office Supplies for the SDS Office for the 1st Quarter of C.Y. 2023', 9194, 'Division MOOE - OSDS', 92, 5, 'Forwarded for payment 02/27/2023', '2023-03-17 13:50:44', '2023-03-17 05:50:44'),
(27, '2023-01-041', '2023-02-029', '2023-02-07', 2, 'Provision of Other Office Supplies for the SDS Office for the 1st Quarter of C.Y. 2023', 4130, 'Division MOOE - OSDS', 92, 5, 'forwarded for  payment 02/27/2023', '2023-03-22 13:18:17', '2023-03-22 05:18:17'),
(28, '2023-01-026', '2023-01-010', '2023-01-30', 2, 'Request for supplies for payroll (ink)', 54000, 'Division MOOE - OSDS', 92, 5, 'Forwarded for payment 02/27/2023', '2023-03-22 13:20:14', '2023-03-22 05:20:14'),
(29, '2023-01-005', '2023-01-005', '2023-01-18', 2, '1st Quarter Janitorial Supplies', 15655, 'Division MOOE - OSDS', 92, 5, 'Forwarded for payment', '2023-03-22 13:21:37', '2023-03-22 05:21:37'),
(30, '2023-01-027', '2023-01-012', '2023-01-30', 2, 'Supplies and Materials for Q1', 24601, 'Division MOOE - OSDS', 92, 5, 'for payement 02/27/2023', '2023-03-22 13:23:23', '2023-03-22 05:23:23'),
(31, '2023-01-014', '2023-01-009', '2023-01-30', 2, 'Supplies and Materials for Cashiering Unit use', 54528, 'Division MOOE - OSDS', 92, 5, 'for payment 02/27/2023', '2023-03-22 13:24:47', '2023-03-22 05:24:47'),
(32, '2023-01-047', '2023-02-022', '2023-02-02', 2, 'Common Office Supplies for 1st Quarter - Budget Office', 4100, 'Division MOOE - OSDS', 92, 5, 'for payment', '2023-03-22 13:26:34', '2023-03-22 05:26:34'),
(33, '2023-01-034', '2023-02-020', '2023-02-02', 2, 'Provision of Prime HRM Office Supplies and equipment', 8200, 'Division MOOE - OSDS', 92, 5, 'forwarded for payment 03/01/2023', '2023-03-22 13:28:13', '2023-03-22 05:28:13'),
(34, '2023-01-033', '2023-02-021', '2023-02-02', 2, 'Provision of Prime HRM Office Supplies and equipment', 38525, 'Division MOOE - OSDS', 92, 5, 'for payment  03/01/2023', '2023-03-22 13:31:24', '2023-03-22 05:31:24'),
(35, '2023-01-045', '2023-01-014', '2023-02-01', 2, 'Common Office Supplies for the 1st Quarter. (Budget Officer)', 20566, 'Division MOOE - OSDS', 92, 5, 'for payment 03/02/2023', '2023-03-22 13:33:05', '2023-03-22 05:33:05'),
(36, '2023-01-038', '2023-01-013', '2023-02-02', 2, 'Request for supplies and materials for asds office-Q1', 61868, 'Division MOOE - OSDS', 92, 5, 'for payment 03/10/2023', '2023-03-22 13:34:42', '2023-03-22 05:34:42'),
(37, '2023-01-058', '2023-02-037', '2023-03-09', 2, '1stQuarter Office Supplies for Finance Section&#039;s use.', 23875, 'Division MOOE - OSDS', 92, 5, 'for payment 03/10/2023', '2023-03-22 13:35:54', '2023-03-22 05:35:54'),
(38, '2023-02-073', '2023-02-039', '2023-02-10', 1, 'Workshop on TI Deployment', 12572, 'Division MOOE - OSDS', 92, 5, 'Forwarded for payment 03/13/2023', '2023-03-29 13:32:04', '2023-03-29 05:32:04'),
(39, '2023-01-028', '2023-02-019', '2023-02-02', 2, '1st Quarter Common Use Supplies', 17245, 'Division MOOE - OSDS', 92, 5, 'Forwarded for payment 03/15/2023', '2023-03-29 13:33:53', '2023-03-29 05:33:53'),
(40, '2023-01-061', '2023-02-031', '2023-02-09', 2, '1st Quarter Office Supplies for Finance Section&#039;s use.', 44840, 'Division MOOE - OSDS', 92, 5, 'Forwarded for payment 03/15/2023', '2023-03-29 13:35:30', '2023-03-29 05:35:30'),
(41, '2023-01-045', '2023-01-014', '2023-02-01', 2, 'Common Office Supplies for the 1st Quarter. (Budget Officer)', 20565, 'Division MOOE - OSDS', 92, 5, 'FORWARDED FOR PAYMENT 03/20/2023', '2023-03-29 13:38:38', '2023-03-29 05:38:38'),
(42, '2023-02-085', '2023-02-046', '2023-02-27', 1, 'Division Orientation of School Heads on Multigrade Program Implementation New Policy Guidelines cum Program Review and Evaluation (Catering Services and Venue)', 19635, 'ROP-11-22-1125', 93, 5, 'Forwarded for payment 03/21/2023', '2023-03-29 13:42:50', '2023-03-29 05:42:50'),
(43, '2023-01-052', '2023-02-034', '2023-02-09', 2, 'SGOD Semi-Expendable Supplies for First Quarter', 24, 'Division MOOE - SGOD', 79, 5, 'forwarded for payment 03/22/2023', '2023-03-29 13:47:08', '2023-03-29 05:47:08'),
(44, '2023-01-051', '2023-02-035', '2023-02-09', 2, 'SGOD ICT Supplies for First Quarter', 101, 'Division MOOE - SGOD', 79, 5, 'for warded for payment 03/22/2023', '2023-03-29 13:48:57', '2023-03-29 05:48:57'),
(45, '2023-02-097', '2023-03-054', '2023-03-15', 1, 'Teacher Induction Program', 225, 'Division MOOE - OSDS', 92, 5, 'forwarded for payment', '2023-03-29 13:50:49', '2023-03-29 05:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(55) NOT NULL,
  `position_name` varchar(250) NOT NULL,
  `position_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`, `position_desc`) VALUES
(1, 'Administrative Officer', 'Permanent'),
(2, 'Administrative Aide', 'Permanent'),
(3, 'Accountant', 'Permanent'),
(4, 'Budget Officer', 'Permanent'),
(5, 'Education Program Supervisor', 'Permanent'),
(6, 'Auditor', 'Permanent'),
(7, 'Job Order', 'Contractual'),
(8, 'CEO', 'System Admin'),
(10, 'ADMINISTRATIVE OFFICER IV', 'SUPPLY OFFICER'),
(11, 'CID CHIEF', 'CID CHIEF'),
(12, 'EPS', 'EPS'),
(13, 'ADMINISTRATIVE OFFICER V', 'ADMIN OFFICER V');

-- --------------------------------------------------------

--
-- Table structure for table `po_status`
--

CREATE TABLE `po_status` (
  `pstatus_id` int(11) NOT NULL,
  `pstatus_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `po_status`
--

INSERT INTO `po_status` (`pstatus_id`, `pstatus_name`) VALUES
(1, 'Delivered'),
(2, 'Not Delivered'),
(3, 'Pending'),
(4, 'Processing'),
(5, 'Forwarded'),
(6, 'Failed');

-- --------------------------------------------------------

--
-- Table structure for table `procurement_category`
--

CREATE TABLE `procurement_category` (
  `pcategory_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `procurement_category`
--

INSERT INTO `procurement_category` (`pcategory_id`, `category_name`) VALUES
(1, 'Catering & Services'),
(2, 'Goods & Services'),
(4, 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `req_date` date NOT NULL,
  `item_id` int(11) NOT NULL,
  `req_type_id` int(11) NOT NULL,
  `req_status_id` int(11) NOT NULL,
  `req_is_done` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `req_status`
--

CREATE TABLE `req_status` (
  `req_status_id` int(11) NOT NULL,
  `req_status_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `req_status`
--

INSERT INTO `req_status` (`req_status_id`, `req_status_desc`) VALUES
(1, 'pending'),
(2, 'accepted'),
(3, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `req_type`
--

CREATE TABLE `req_type` (
  `req_type_id` int(11) NOT NULL,
  `req_type_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `req_type`
--

INSERT INTO `req_type` (`req_type_id`, `req_type_desc`) VALUES
(1, 'repair'),
(2, 'transfer'),
(3, 'condemed'),
(4, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(55) NOT NULL,
  `role_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_desc`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(55) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `email_add` varchar(250) NOT NULL,
  `added_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `address`, `contact_no`, `email_add`, `added_at`) VALUES
(1, 'Thinking Tools', 'Digos City', '09123456789', 'supplier@gmail.com', '2022-08-05 16:02:24'),
(2, 'Davao Future Bright Enterprise', 'Davao City', '09123456789', 'supplier@gmail.com', '2022-08-05 16:02:24'),
(3, 'Octagon', 'Digos City', '09123456789', 'supplier@gmail.com', '2022-08-05 16:02:24'),
(4, 'PC Express', 'Davao City', '09123456789', 'supplier@gmail.com', '2022-08-05 16:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL,
  `active_status` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `firstname`, `lastname`, `email`, `password`, `role`, `active_status`, `created_at`) VALUES
(1, 'superadmin', 'System', 'Administrator', 'superadmin@gmail.com', '$2y$10$77qr92YiqHUMn4c.BVo8ZufBN.K3srkdBeBwxsNDYrGuYBGfLeUSi', '1', '1', '2022-06-05 16:02:24'),
(2, 'admin', 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$77qr92YiqHUMn4c.BVo8ZufBN.K3srkdBeBwxsNDYrGuYBGfLeUSi', '2', '1', '2022-06-05 16:02:24'),
(3, 'user', 'User', 'Test', 'usertest@gmail.com', '$2y$10$77qr92YiqHUMn4c.BVo8ZufBN.K3srkdBeBwxsNDYrGuYBGfLeUSi', '3', '1', '2022-06-05 16:02:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `con`
--
ALTER TABLE `con`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `issuance`
--
ALTER TABLE `issuance`
  ADD PRIMARY KEY (`issued_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_status`
--
ALTER TABLE `item_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `pmr_table`
--
ALTER TABLE `pmr_table`
  ADD PRIMARY KEY (`pmr_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `po_status`
--
ALTER TABLE `po_status`
  ADD PRIMARY KEY (`pstatus_id`);

--
-- Indexes for table `procurement_category`
--
ALTER TABLE `procurement_category`
  ADD PRIMARY KEY (`pcategory_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `req_status`
--
ALTER TABLE `req_status`
  ADD PRIMARY KEY (`req_status_id`);

--
-- Indexes for table `req_type`
--
ALTER TABLE `req_type`
  ADD PRIMARY KEY (`req_type_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `con`
--
ALTER TABLE `con`
  MODIFY `con_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `issuance`
--
ALTER TABLE `issuance`
  MODIFY `issued_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item_status`
--
ALTER TABLE `item_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `office_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pmr_table`
--
ALTER TABLE `pmr_table`
  MODIFY `pmr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `po_status`
--
ALTER TABLE `po_status`
  MODIFY `pstatus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `procurement_category`
--
ALTER TABLE `procurement_category`
  MODIFY `pcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `req_status`
--
ALTER TABLE `req_status`
  MODIFY `req_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `req_type`
--
ALTER TABLE `req_type`
  MODIFY `req_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
