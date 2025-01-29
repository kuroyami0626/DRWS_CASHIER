-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 04:59 PM
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
-- Database: `dwelldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` int(11) NOT NULL,
  `account_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `account_created` date NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`id`, `account_id`, `email`, `password`, `firstname`, `lastname`, `account_type`, `contact`, `position`, `account_created`, `image_url`) VALUES
(1, '922831912', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', '09548381222', 'Admin', '2024-09-23', 'Screenshot_2017-01-17-16-56-56.jpg'),
(2, '123456789', 'hakdog@gmail.com', '6bb02b9216e00e07e59f66787653dd18', 'hakdog', 'hakdog', 'admin2', '09075656823', 'admin', '2025-01-02', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `likes` int(100) NOT NULL,
  `date_created` date NOT NULL,
  `id_post` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `message`, `likes`, `date_created`, `id_post`) VALUES
(1, '490089220241009', 'sheeeesh!', 0, '2024-10-09', 1),
(2, '285524520241009', 'thats good!', 0, '2024-10-09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `conamount`
--

CREATE TABLE `conamount` (
  `id` int(11) NOT NULL,
  `accntNum` varchar(100) NOT NULL,
  `accntName` varchar(100) NOT NULL,
  `jan` varchar(100) NOT NULL,
  `feb` varchar(100) NOT NULL,
  `mar` varchar(100) NOT NULL,
  `apr` varchar(100) NOT NULL,
  `may` varchar(100) NOT NULL,
  `jun` varchar(100) NOT NULL,
  `jul` varchar(100) NOT NULL,
  `aug` varchar(100) NOT NULL,
  `sep` varchar(100) NOT NULL,
  `oct` varchar(100) NOT NULL,
  `nov` varchar(100) NOT NULL,
  `dec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conamount`
--

INSERT INTO `conamount` (`id`, `accntNum`, `accntName`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
(1, '2015-0928143730', 'Edgar Oquialda', '1257', '1049', '971', '1127', '1712', '854', '1010', '1088', '1127', '1127', '1302.50', '1394.50'),
(2, '2015-0928143731', 'Oliver Lizardo', '1252', '104', '1000', '1354', '999', '1000', '2089', '1081', '1123', '1112', '1288', '1176');

-- --------------------------------------------------------

--
-- Table structure for table `condate`
--

CREATE TABLE `condate` (
  `id` int(11) NOT NULL,
  `accntNum` varchar(100) NOT NULL,
  `accntName` varchar(100) NOT NULL,
  `jan` date NOT NULL,
  `feb` date NOT NULL,
  `mar` date NOT NULL,
  `apr` date NOT NULL,
  `may` date NOT NULL,
  `jun` date NOT NULL,
  `jul` date NOT NULL,
  `aug` date NOT NULL,
  `sep` date NOT NULL,
  `oct` date NOT NULL,
  `nov` date NOT NULL,
  `dec` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `condate`
--

INSERT INTO `condate` (`id`, `accntNum`, `accntName`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
(1, '2015-0928143730', 'Edgar Oquialdo', '2024-01-30', '2024-02-26', '2025-04-05', '2024-05-02', '2024-06-03', '2024-07-04', '2024-08-10', '2024-09-06', '2024-10-07', '2024-11-05', '2024-12-09', '2025-01-03'),
(2, '2015-0928143731', 'Oliver Lizardo', '2024-01-30', '2024-02-26', '2025-04-05', '2024-05-02', '2024-06-03', '2024-07-04', '2024-08-10', '2024-09-06', '2024-10-07', '2024-11-05', '2024-12-09', '2025-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `id` int(11) NOT NULL,
  `dog_id` varchar(100) NOT NULL,
  `consultation_option` varchar(100) NOT NULL,
  `consultation_date` date NOT NULL,
  `consultation_type` varchar(100) NOT NULL,
  `pet_insurance` varchar(100) NOT NULL,
  `payment_preferences` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id`, `dog_id`, `consultation_option`, `consultation_date`, `consultation_type`, `pet_insurance`, `payment_preferences`, `contact`, `date_created`) VALUES
(1, '1', 'Physical Checkup', '2024-10-17', 'In CLinic Visit', 'na', 'Cash', '09506543210', '2024-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_name`
--

CREATE TABLE `consumer_name` (
  `id` int(11) NOT NULL,
  `accntNum` varchar(100) NOT NULL,
  `accntName` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `blk` varchar(100) NOT NULL,
  `sc` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consumer_name`
--

INSERT INTO `consumer_name` (`id`, `accntNum`, `accntName`, `area`, `blk`, `sc`, `remarks`, `year`) VALUES
(1, '2015-0928143730', 'Edgar Oquialda', 'Kanluran', '', '', '', '2024'),
(2, '2015-0928143731', 'Oliver Lizardo', 'Ecoverde', '', '', '', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `dogs_db`
--

CREATE TABLE `dogs_db` (
  `id` int(11) NOT NULL,
  `dog_breed` varchar(100) NOT NULL,
  `dog_name` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `dog_age` int(50) NOT NULL,
  `dog_bday` date NOT NULL,
  `dog_owner` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs_db`
--

INSERT INTO `dogs_db` (`id`, `dog_breed`, `dog_name`, `date_created`, `dog_age`, `dog_bday`, `dog_owner`, `gender`) VALUES
(1, 'Aspin', 'Hope', '2024-10-09', 1, '2023-06-14', 'Ralph Medrana', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `health_record`
--

CREATE TABLE `health_record` (
  `id` int(11) NOT NULL,
  `dog_id` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `weight_recent` varchar(500) NOT NULL,
  `genitals` varchar(500) NOT NULL,
  `concerns` varchar(500) NOT NULL,
  `duration_symptoms` int(10) NOT NULL,
  `appetite_comment` varchar(500) NOT NULL,
  `food_type` varchar(500) NOT NULL,
  `feeding_sched` varchar(500) NOT NULL,
  `treats` varchar(500) NOT NULL,
  `supplements` varchar(500) NOT NULL,
  `level_activity` int(10) NOT NULL,
  `current_med` varchar(500) NOT NULL,
  `recent_treatment` varchar(500) NOT NULL,
  `parasite_control` varchar(500) NOT NULL,
  `parasite_history` varchar(500) NOT NULL,
  `allergies` varchar(500) NOT NULL,
  `vaccine_reaction` varchar(500) NOT NULL,
  `pet_environment` varchar(500) NOT NULL,
  `other_pets` varchar(500) NOT NULL,
  `reproductive_status` varchar(500) NOT NULL,
  `reproductive_status2` varchar(500) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_record`
--

INSERT INTO `health_record` (`id`, `dog_id`, `weight`, `weight_recent`, `genitals`, `concerns`, `duration_symptoms`, `appetite_comment`, `food_type`, `feeding_sched`, `treats`, `supplements`, `level_activity`, `current_med`, `recent_treatment`, `parasite_control`, `parasite_history`, `allergies`, `vaccine_reaction`, `pet_environment`, `other_pets`, `reproductive_status`, `reproductive_status2`, `date_created`) VALUES
(1, 1, 10, 'None', 'None', 'vomiting', 1, 'Lost of appetite', 'Viand or chicken', 'Every morning only', 'none', 'none', 4, 'None', 'None', 'It has flea', 'minimal cause', 'allergic to malansa', 'none', 'Both', 'Other dogs and pet bird', 'none', 'none', '2024-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `month` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`month`) VALUES
('jan'),
('feb'),
('mar'),
('apr'),
('may'),
('jun'),
('jul'),
('aug'),
('sep'),
('oct'),
('nov'),
('dec');

-- --------------------------------------------------------

--
-- Table structure for table `ordata`
--

CREATE TABLE `ordata` (
  `id` int(11) NOT NULL,
  `accntNum` varchar(100) NOT NULL,
  `accntName` varchar(100) NOT NULL,
  `jan` varchar(100) NOT NULL,
  `feb` varchar(100) NOT NULL,
  `mar` varchar(100) NOT NULL,
  `apr` varchar(100) NOT NULL,
  `may` varchar(100) NOT NULL,
  `jun` varchar(100) NOT NULL,
  `jul` varchar(100) NOT NULL,
  `aug` varchar(100) NOT NULL,
  `sep` varchar(100) NOT NULL,
  `oct` varchar(100) NOT NULL,
  `nov` varchar(100) NOT NULL,
  `dec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordata`
--

INSERT INTO `ordata` (`id`, `accntNum`, `accntName`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
(1, '2015-0928143730', 'Edgar Oquialda', '785138', '791473', '798112', '802487', '808891', '815102', '822160', '826702', '832259', '837156', '0003186', '0007822'),
(2, '2015-0928143731', 'Oliver Lizardo', '785138', '791473', '798112', '802487', '808891', '815102', '822160', '826702', '832259', '837156', '0003186', '0007822');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `message`, `image_url`, `date_created`, `likes`) VALUES
(1, '490089220241009', 'sample', 'ads.PNG', '2024-10-09', 9),
(2, '285524520241009', 'my day with my doggie!', 'dog.PNG', '2024-09-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_rawmaterials`
--

CREATE TABLE `tbl_add_rawmaterials` (
  `id` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `beginning_inventory` int(255) NOT NULL,
  `total_stocks_onhand` int(255) NOT NULL,
  `unit_price` int(255) NOT NULL,
  `sales_price` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_add_rawmaterials`
--

INSERT INTO `tbl_add_rawmaterials` (`id`, `product_description`, `unit`, `beginning_inventory`, `total_stocks_onhand`, `unit_price`, `sales_price`, `created_at`) VALUES
(1, 'ANGLE VALVE 1½×1½ NEW', 'PCS', 8, 1, 0, 0, '2025-01-17 07:06:51'),
(2, 'CHECK VALVE ½', 'PCS', 22, 22, 0, 0, '2025-01-15 07:58:23'),
(3, 'sample materials ', 'pcs', 40, 4, 0, 0, '2025-01-17 06:20:52'),
(4, 'qwerty', 'PCS', 80, 0, 0, 0, '2025-01-16 13:20:35'),
(5, 'qwerty2', 'PCS', 40, 0, 0, 0, '2025-01-16 13:11:44'),
(6, 'sample test data ', 'PCS', 40, 34, 0, 0, '2025-01-17 07:30:48'),
(7, 'dataaaaaa', 'pcs', 150, 90, 0, 0, '2025-01-17 07:38:19'),
(8, 'ASDASDASDASD', 'PCS', 400, 400, 1, 1600, '2025-01-17 00:57:20'),
(9, 'ASDASD', 'ASDASD', 150, 10, 2600, 2700, '2025-01-17 09:20:02'),
(10, 'random data', 'pcs', 60, 50, 1500, 250, '2025-01-17 08:31:55'),
(11, 'sample materials ', 'PCS', 40000, 40000, 1, 2, '2025-01-17 01:54:06'),
(12, 'joke', 'pcs', 50, 0, 150, 160, '2025-01-17 09:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `announcement_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `likes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`announcement_id`, `title`, `message`, `image`, `date_created`, `likes`) VALUES
(1, 'Welcome Freshmen!', 'lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor\r\nlorem ipsum dolor lorem ipsum dolor\r\nlorem ipsum dolorlorem ipsum dolorlorem ipsum dolor lorem ipsum dolor lorem ipsum dolor', 'asd.jpg', '2024-10-02', 1),
(2, 'sample', '<p>shesssssssssssssssssssh!</p>', 'asd.jpg', '2024-10-10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_breed`
--

CREATE TABLE `tbl_breed` (
  `id` int(11) NOT NULL,
  `dog_breed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_breed`
--

INSERT INTO `tbl_breed` (`id`, `dog_breed`) VALUES
(1, 'Aspin'),
(2, 'German Sheperd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `id` int(11) NOT NULL,
  `product_inventorycode` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `code` int(10) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `inventory_valuation_method` varchar(255) NOT NULL,
  `unit_price` int(255) NOT NULL,
  `quantity_in_stocks` int(255) NOT NULL,
  `unit_of_measurements` varchar(255) NOT NULL,
  `beginning_inventory_cost_previous_month` int(255) NOT NULL,
  `new_delivery` int(255) NOT NULL,
  `sales_price` int(255) NOT NULL,
  `total_delivery_cost` int(255) NOT NULL,
  `total_weight` varchar(255) NOT NULL,
  `total_cost` int(255) NOT NULL,
  `total_used` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `service_cost` int(255) NOT NULL,
  `sales_cost` int(255) NOT NULL,
  `net` int(255) NOT NULL,
  `sales_or_service` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`id`, `product_inventorycode`, `item_description`, `address`, `code`, `remarks`, `inventory_valuation_method`, `unit_price`, `quantity_in_stocks`, `unit_of_measurements`, `beginning_inventory_cost_previous_month`, `new_delivery`, `sales_price`, `total_delivery_cost`, `total_weight`, `total_cost`, `total_used`, `created_at`, `service_cost`, `sales_cost`, `net`, `sales_or_service`) VALUES
(23, 'ARV001', 'dataaaaaa', 'STOCKROOM', 0, 'asd', 'FIFO', 150, 15, 'PCS', 0, 0, 0, 0, 'N/A', 2250, 0, '2025-01-17 07:37:39', 0, 0, 0, 'SALES'),
(24, 'ARV001', 'dataaaaaa', 'STOCKROOM', 0, 'asd', 'FIFO', 1890, 10, 'PCS', 0, 0, 0, 0, 'N/A', 18900, 0, '2025-01-17 07:38:19', 0, 0, 0, 'SERVICE'),
(25, 'asd', 'random data', 'STOCKROOM', 0, 'asd', 'FIFO', 1500, 10, 'PCS', 0, 0, 0, 0, 'N/A', 15000, 0, '2025-01-17 08:31:55', 0, 0, 0, 'SALES'),
(26, 'AV004', 'joke', 'STOCKROOM', 0, 'asd', 'FIFO', 150, 15, 'PCS', 0, 0, 0, 0, 'N/A', 2250, 0, '2025-01-17 08:55:38', 0, 0, 0, 'SALES'),
(27, 'ARV001', 'joke', 'asg', 0, 'asd', 'FIFO', 150, 15, 'PCS', 0, 0, 0, 0, 'N/A', 2250, 0, '2025-01-17 09:06:27', 0, 2250, 0, 'SALES'),
(28, 'asd', 'joke', 'STOCKROOM', 0, 'asd', 'FIFO', 150, 10, 'PCS', 0, 0, 0, 0, 'N/A', 1500, 0, '2025-01-17 09:07:18', 1500, 0, 0, 'SERVICE'),
(29, 'random code', 'joke', 'STOCKROOM', 0, 'fgh', 'FIFO', 150, 10, 'PCS', 0, 0, 0, 0, 'N/A', 1500, 0, '2025-01-17 09:11:35', 1500, 0, 0, 'SERVICE'),
(30, 'RANDOM CODERIST', 'ASDASD', 'asd', 0, 'asd', 'FIFO', 2600, 140, 'PCS', 0, 0, 2700, 0, 'N/A', 364000, 0, '2025-01-17 09:20:02', 0, 364000, 0, 'SALES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance`
--

CREATE TABLE `tbl_maintenance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `transaction` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `sequence_number` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `personnel_assigned` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_maintenance`
--

INSERT INTO `tbl_maintenance` (`id`, `date`, `name`, `transaction`, `transaction_type`, `sequence_number`, `area`, `remarks`, `personnel_assigned`) VALUES
(1, '2025-01-01', 'cardo', 'AIR-RELEASE-VALVE-INSTALLATION', 'SALES', 123456789, 'MAIN', 'sample', 'oli'),
(2, '2025-02-01', 'random', 'ATS-REPLACEMENT', 'SALES', 456789, 'ROMANVILLE', '\"VOL DISC # READING 2450  DALA ANG METRO AT GATE VALVE NAKA END CAP  MATS: END CAP 1/2 - 1 \"', 'dfgdfg'),
(3, '2025-01-12', 'sample data', 'CHECK-VALVE-INSTALLATION', 'SERVICE', 78946213, 'PRIMAVERA-2', 'sample remarks', 'ryan oliver'),
(4, '2025-01-09', 'Sample Name', 'AIR-RELEASE-VALVE-INSTALLATION', 'SALES', 12345, 'SILANGAN', '\"VOL DISC # READING 2450  DALA ANG METRO AT GATE VALVE NAKA END CAP  MATS: END CAP 1/2 - 1 \"', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `id` int(11) NOT NULL,
  `user_id` varchar(90) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`id`, `user_id`, `email`, `password`, `firstname`, `lastname`, `middlename`, `gender`, `contact`, `address`, `account_type`, `date_created`) VALUES
(4, '285524520241009', 'bucad.eddierackiel@gmail.com', 'd3c4e147a8b290f4a8a9d1d2e3ac6681', 'Ralph', 'Medrana', 'D', 'Male', '09506543210', 'sta maria sto tomas batangas', 'user', '2024-09-23'),
(9, '490089220241009', 'robertdave@gmail.com', 'd3c4e147a8b290f4a8a9d1d2e3ac6681', 'Robert', 'Nazareth', 'D', 'Male', '09506543210', 'pangasinan', 'User', '2024-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinations`
--

CREATE TABLE `vaccinations` (
  `id` int(11) NOT NULL,
  `dog_id` int(10) NOT NULL,
  `physical_examination_result` varchar(255) NOT NULL,
  `medical_history_result` varchar(500) NOT NULL,
  `owner_consultation` varchar(500) NOT NULL,
  `vaccine_name` varchar(100) NOT NULL,
  `vaccine_type` varchar(100) NOT NULL,
  `injection_site` varchar(100) NOT NULL,
  `monitor_type` varchar(100) NOT NULL,
  `lot_number` varchar(100) NOT NULL,
  `exp_date` date NOT NULL,
  `monitor_report` varchar(100) NOT NULL,
  `booster_vaccine` varchar(100) NOT NULL,
  `booster_sched` date NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccinations`
--

INSERT INTO `vaccinations` (`id`, `dog_id`, `physical_examination_result`, `medical_history_result`, `owner_consultation`, `vaccine_name`, `vaccine_type`, `injection_site`, `monitor_type`, `lot_number`, `exp_date`, `monitor_report`, `booster_vaccine`, `booster_sched`, `date_created`) VALUES
(1, 1, 'Done', 'Done', 'Done', 'Nobivac vaccine', 'Rabies', 'skin back', 'At Home', '20URAB098', '2026-10-23', 'Good and no side effects', 'none', '0000-00-00', '2024-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conamount`
--
ALTER TABLE `conamount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `condate`
--
ALTER TABLE `condate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumer_name`
--
ALTER TABLE `consumer_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogs_db`
--
ALTER TABLE `dogs_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_record`
--
ALTER TABLE `health_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordata`
--
ALTER TABLE `ordata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_add_rawmaterials`
--
ALTER TABLE `tbl_add_rawmaterials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `tbl_breed`
--
ALTER TABLE `tbl_breed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccinations`
--
ALTER TABLE `vaccinations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_add_rawmaterials`
--
ALTER TABLE `tbl_add_rawmaterials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
