-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 08:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arudhra`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `subtitle`, `text`, `link`, `image`, `status`, `create_at`) VALUES
(1, '17 Years of excellence in ', 'Construction Industry', 'contact', 'https://www.arudhratech.com/', '16962246521579690400.jpg', '0', '2024-02-24 12:16:39'),
(2, '17 Years of excellence in ', 'Construction Industry', 'contact', 'https://purehairnskin.com/', '16281065842086645154.jpg', '0', '2024-02-24 12:26:19'),
(3, '17 Years of excellence in ', 'Construction Industry', 'contact', 'https://www.arudhratech.com/', '1024066858659765052.jpg', '0', '2024-02-24 12:48:22'),
(4, '17 Years ', 'Construction Industry', 'contact', 'https://www.arudhratech.com/', '17916785161203819506.jpg', '0', '2024-03-18 09:59:40'),
(5, '10 Years of  Experience in Buoy Deployment & Retrieval', 'In-House Buoy Manufacturing Facility', 'Contact', 'https://www.arudhratech.com/', '15391279571140346738.jpeg', '1', '2024-04-05 10:08:20'),
(6, 'In House Testing Facility Buoy', 'In-House Buoy Manufacturing Facility', 'Contact', 'https://www.arudhratech.com/', '147258251158102447.jpeg', '1', '2024-04-05 10:14:58'),
(7, '10 Years of  Experience in FRP Deployment & Retrieval', 'In-House FRP Manufacturing Facility', 'Contact', 'https://www.arudhratech.com/', '114684339597636161.jpeg', '1', '2024-04-05 10:17:58'),
(8, 'In House Testing Facility FRP', '10 Years of  Experience in FRP Deployment & Retrieval', 'Contact', 'https://www.arudhratech.com/', '3736199922019228240.jpeg', '1', '2024-04-05 10:19:08'),
(9, '10 Years of  Experience in HDPF Deployment & Retrieval', 'In-House HDPF Manufacturing Facility', 'Contact', 'https://www.arudhratech.com/', '16611182191066210268.jpeg', '1', '2024-04-05 10:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `image`, `status`, `create_at`) VALUES
(1, 0, 'water quality/lab', '4650797091100457046.jpg', '1', '2024-03-19 12:50:25'),
(2, 0, 'Aquculture', '1686957330585116096.jpg', '1', '2024-03-19 12:52:41'),
(3, 0, 'Hydrology & Meterology', '17700958711196647809.jpg', '1', '2024-03-19 12:53:20'),
(4, 0, 'oceanography', '1885295781559370926.jpg', '1', '2024-03-19 12:54:13'),
(5, 0, 'Buyos & Floating', '1369743253865204411.jpg', '1', '2024-03-19 12:55:49'),
(6, 0, 'Marine', '7344130891062684559.gif', '1', '2024-03-19 12:56:26'),
(7, 0, 'Aero', '1563702567758464428.jpg', '1', '2024-03-19 12:59:53'),
(8, 0, 'Lightening Detection', '7113600782036699369.jpg', '1', '2024-03-19 13:02:09'),
(9, 1, 'Multiparameter Sonde', '2126070661240408933.jpg', '1', '2024-03-19 13:03:02'),
(10, 2, 'Floating Cages', '44545466678599866.jpg', '1', '2024-03-19 13:03:47'),
(11, 2, 'Aeration Systems', '646652039507136866.png', '1', '2024-03-19 13:04:09'),
(12, 3, 'Meterology', '11951756371451819528.jpg', '1', '2024-03-19 13:06:17'),
(13, 3, 'Cloud coverage', '21287100291500889814.jpg', '1', '2024-03-19 13:06:59'),
(14, 3, 'Flow and Discharge', '337633157243817021.png', '1', '2024-03-19 13:08:08'),
(15, 3, 'Water Level', '5725746131157356681.jpg', '1', '2024-03-19 13:08:48'),
(16, 4, 'Niskin Water Sampling', '8783358701049859740.jpg', '1', '2024-03-19 13:10:05'),
(17, 4, 'Sub Sea Buyos/System', '1482981482088515036.jpg', '1', '2024-03-19 13:11:06'),
(18, 4, 'Sampling Nets', '18987734481754274414.gif', '1', '2024-03-19 13:11:36'),
(19, 5, 'Buyos', '15190356401476331564.jpg', '1', '2024-03-19 13:13:21'),
(20, 5, 'HDPE Floating System', '3958330392085343610.jpeg', '1', '2024-03-19 13:15:49'),
(21, 6, 'FRP/HDPE Boats', '5286019341270053340.jpg', '1', '2024-03-19 13:17:29'),
(22, 6, 'Environmental Monitering', '4868548211014239714.jpg', '1', '2024-03-19 13:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `type`, `image`, `description`, `name`, `status`, `create_at`) VALUES
(1, 'client', '785646834138236625.jpg', 'Deffence R&D organistation ministary of Deffence ', 'DRDO', '1', '2024-02-22 08:42:14'),
(2, 'client', '10552912381159128429.jpg', 'The ICAR-Central Marine Fisheries Research Institute was established by Government of India on February 3rd 1947 under the Ministry of Agriculture and Farmers', 'cmrfi', '1', '2024-02-22 08:42:48'),
(3, 'client', '21361486612004674641.jpg', 'The National Institute of Ocean Technology (NIOT) was established in November 1993', 'NIOT', '1', '2024-02-22 08:43:04'),
(4, 'client', '17997544441074905553.jpg', 'We are engaged in manufacturing wide array of Aerator Spares, Paddle Wheel Aerator, Long Arm Aerator, Floating Pontoons, Poultry Equipment and much more.', 'SRR AQUA', '1', '2024-02-22 08:43:48'),
(5, 'partner', '1772450465979596110.jpg', 'Manufacturers and suppliers of oceanographic and marine biology research equipment', 'General Oceanics', '1', '2024-02-22 08:44:52'),
(6, 'partner', '5711397841666430836.jpg', 'Hach Company manufactures and distributes analytical instruments and reagents used to test the quality of water', 'Hach Company', '1', '2024-02-22 08:45:05'),
(7, 'partner', '669571580343145020.jpg', 'made up of a mooring line, anchor and connectors, and is used for station keeping of a ship or floating platform in all water depths.', 'mooring system', '1', '2024-02-22 08:45:23'),
(8, 'partner', '1985797552801805147.jpg', 'Sea-Bird Scientific is the world\'s largest developer and manufacturer', 'Sea Bird', '1', '2024-02-22 08:45:40'),
(9, 'partner', '16962639551162181150.jpg', 'The Tintometer Limited was founded in 1896 by Joseph Williams Lovibond', 'Tintometer', '1', '2024-02-22 08:46:13'),
(10, 'partner', '1859671429518206053.jpg', 'Welcome to Science Interactive Group (SIG), where we\'re on a mission', 'Science Interactive Group', '1', '2024-02-22 08:46:35'),
(11, 'client', '15424602362078271228.jpg', 'breeding, raising, and harvesting fish, shellfish, and aquatic plants.', 'Aquaculture', '1', '2024-02-22 08:46:53'),
(12, 'client', '4243998401917328466.jpg', 'Department of Fisheries is a Bangladesh government department under the Ministry', 'Department of Fisheries', '1', '2024-02-22 08:47:08'),
(13, 'client', '752780031764539675.jpg', 'Chennai Petroleum Corporation Limited, formerly known as Madras Refineries Limited', 'Chennai Petroleum Corporation Limited', '1', '2024-02-22 08:47:26'),
(14, 'client', '309603584909041311.jpg', 'The Kerala State Pollution Control Board is a body of the Department of Health and Family Welfare', 'Kerala State Pollution Control Board', '1', '2024-02-22 08:47:58'),
(15, 'client', '2584558371006138433.jpg', 'Other Wings · Environment & Remote Sensing · Forest Protection Force · JK Forest Dev Corporation Ltd.', 'Jammu and Kashmir Forest Department', '1', '2024-02-22 08:48:16'),
(16, 'client', '117307521788836493.jpg', 'governing authority of the Indian union territory of Jammu and Kashmir', ' Jammu and Kashmir', '1', '2024-02-22 08:48:41'),
(17, 'partner', '14352813612126984914.jpg', 'The company MicroStep, spol. s r.o. manufactures and supplies CNC machines equipped with plasma', 'MicroStep', '1', '2024-02-22 08:49:02'),
(18, 'partner', '588723995635166047.jpg', 'NORBIT is a global provider of tailored technology to selected applications.', 'NORBIT', '1', '2024-02-22 08:49:18'),
(19, 'partner', '5525563161791243553.jpg', 'In situ is a Latin phrase that translates literally to \"on site\" or \"in position.\" It can mean \"locally\", \"on site\"', 'In situ\n', '1', '2024-02-22 08:49:38'),
(20, 'client', '1475088843445597046.jpg', 'The Indian Army is the land-based branch and largest component of the Indian Armed Forces.', 'Indian Army', '1', '2024-02-22 08:49:55'),
(21, 'client', '21228698241728891812.jpg', 'Cochin University of Science and Technology is a state government-owned autonomous university in Kochi, Kerala, India.', 'Cochin University of Science and Technology', '1', '2024-02-22 08:50:49'),
(22, 'partner', '907709158378878.jpg', 'YSI has pioneered the development of high-quality water sensing instrumentation for use in environmental monitoring', 'YSI Automotive Pvt Ltd', '1', '2024-02-22 08:51:11'),
(23, 'partner', '494057468388692872.jpg', 'SonTek manufactures acoustic Doppler instrumentation for water velocity measurement', 'SonTek', '1', '2024-02-22 08:51:43'),
(24, 'client', '1505061904820151802.jpg', 'What is the abbreviation for Kerala Shipping and Inland Navigation', 'KSINC', '1', '2024-02-22 08:51:59'),
(25, 'client', '4557619532067751430.jpg', 'Centre for Marine Living Resources and Ecology, Ministry of Earth Sciences', 'CMLRE', '1', '2024-02-22 08:52:20'),
(26, 'client', '1293013651780954511.jpg', 'Silk is a natural protein fiber, some forms of which can be woven into textiles', 'SILK', '1', '2024-02-22 08:52:56'),
(27, 'client', '1660355777399079213.jpg', 'THE KERALA STATE NIRMITHI KENDRA (KESNIK). KESNIK is a pioneering organization', 'Kerala State Nirmithi Kendra', '1', '2024-02-22 08:53:15'),
(28, 'client', '10541479541745002375.jpg', 'The Bhadla Solar Park is a solar power plant located in the Thar Desert of Rajasthan, India.', 'asia largest solar power plant', '1', '2024-02-22 08:53:36'),
(29, 'client', '16025406321947946497.jpg', 'The Zoological Survey of India, founded on 1 July 1916 by the Ministry of Environment,', 'Zoological Survey of India', '1', '2024-02-22 08:53:53'),
(30, 'client', '4387730781013343789.jpg', 'The Kerala University of Fisheries and Ocean Studies is a university established by the Government of Kerala devoted to studies', 'KUFOS', '1', '2024-02-22 08:55:19'),
(31, 'client', '18586022131497332948.jpg', 'The National Institute of Oceanography, founded on 1 January 1966 as one of 38 constituent laboratories of the CSIR,', 'National Institute of Oceanography, India', '1', '2024-02-22 08:55:38'),
(32, 'client', '413955122651826588.jpg', 'The Government of Tamil Nadu is the administrative body responsible for the governance', 'Government of Tamil Nadu', '1', '2024-02-22 08:55:53'),
(33, 'client', '387960954337457505.jpg', 'Tata Power Solar Systems Limited, formerly Tata BP Solar, is an Indian company ', 'Tata Power Solar', '1', '2024-02-22 08:57:02'),
(34, 'client', '4480009381780709529.jpg', 'National Centre for Coastal Research', 'NCCR', '1', '2024-02-22 08:57:17'),
(35, 'partner', '2220651531359432813.jpg', 'Software and Data Management. Collect and manage current and historic data', 'Sutron Corporation', '1', '2024-02-22 08:57:44'),
(36, 'partner', '15748013241699696563.jpg', 'Kipp & Zonen: Solar Radiation Measurement', 'Kipp & Zonen', '1', '2024-02-22 08:57:58'),
(37, 'partner', '14389338211969429541.jpg', 'Lufft - Smart environmental sensors for most reliable ...', 'Lufft', '1', '2024-02-22 08:58:29'),
(38, 'client', '7649333231595912096.jpg', 'VAFPCL | Vazhakulam Agro & Fruit Pro. Co.Ltd', 'VAFPCL', '1', '2024-02-22 08:58:52'),
(39, 'client', '1120406816713575729.jpg', 'Prestige Constructions - One of the leading real estate developers in India.', 'Prestige Group', '1', '2024-02-22 08:59:10'),
(40, 'client', '1386151911298912332.jpg', 'Central Institute of Brackishwater Aquaculture ', 'CIBA', '1', '2024-02-22 08:59:30'),
(42, 'client', '1212346920928208390.jpg', 'hfghgh', 'hjg', '0', '2024-03-01 09:38:22'),
(43, 'partner', '637954763171487941.jpg', 'efwefef', 'fdvcrfv', '0', '2024-03-01 09:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`, `status`, `create_at`) VALUES
(1, 'yukesh', 'yukeshaddobyte@gmail.com', '6545621544', 'iuhiusbxjixjinjnjnjknx scacsdvdvd', '1', '2024-02-29 13:35:56'),
(2, 'yukesh', 'yukeshaddobyte@gmail.com', '6345484515', 'guyb uywduwbu uhdu hduiajsxx', '1', '2024-03-01 05:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `description`, `image`, `status`, `create_at`) VALUES
(1, 'Integration and Installation of Marine water Quality Multiparameter Sonde at CMFRI', '11956356961533414563.jpeg', '1', '2024-02-22 07:23:44'),
(2, 'Successful completion of Marine Gateway Defence Buoy - DRDO.', '12444091631379678777.jpeg', '1', '2024-02-22 07:25:19'),
(3, 'Blue Revolution project', '1770732740926397335.jpg', '1', '2024-02-22 07:25:39'),
(4, 'Cage Aquaculture - Distribution Programme for Fishing Community..', '15807680692543729.jpg', '1', '2024-02-22 07:26:06'),
(5, 'Successful completion of Aquaculture Open Sea Cages.', '1676906381335994810.jpg', '1', '2024-02-22 07:26:32'),
(6, 'Supply, Deployment and Commissioning of PF Buoys- 40 Nos at KASHMIR.', '9657712711030380964.jpeg', '1', '2024-02-22 07:26:57'),
(7, 'Deployment and Commisioning of Floating Jetty- NAVAL DOCK YARD - VIZAG', '1155299092158105362.jpg', '1', '2024-02-22 07:27:34'),
(8, 'Deployment and Retreival of Water Quality Monitoring Buoy - KSPCB', '14554246161085062536.jpg', '1', '2024-02-22 07:28:07'),
(9, 'Certificate of Participation- ADAK', '499646290476236984.jpeg', '1', '2024-02-22 07:28:33'),
(10, 'Supply and Deployment of Caution Regulatory Marker Buoys- WUCMA- Kashmir', '6785563771969019032.jpg', '1', '2024-02-22 08:38:13'),
(11, 'Supply and Deployment of Channel Marking Buoys at World Biggest Solar Power Plant- RUMSL - Madhya Pradesh', '53112327252865908.jpeg', '1', '2024-02-22 08:38:42'),
(12, 'FRP SPEED BOAT WITH 50 HP OBM- SILK', '13675075961915562279.jpg', '1', '2024-02-22 08:39:21'),
(13, 'Supply and Deployment of Navigational Marker Buoys - ZSI- GUJARAT', '6052493161087725536.jfif', '1', '2024-02-22 08:39:46'),
(14, 'Integration and Installation of Marine water Quality Multiparameter Sonde at CMFRI', '537578362293071908.jpg', '0', '2024-03-01 09:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `create_at`) VALUES
(1, 'admin', 'pass@123', '2024-02-21 10:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_name`, `image`, `status`, `create_at`) VALUES
(1, 9, 'Multiparameter Pro-DSS', '16179085731326549109.pdf', '1', '2024-03-19 13:28:40'),
(2, 9, 'Aquacontroll 500 Multiparameter', '13512220602136423994.pdf', '1', '2024-03-19 13:31:28'),
(3, 9, 'Aquacontroll 600 Multiparameter', '16375847081204469106.pdf', '1', '2024-03-19 13:32:55'),
(4, 9, 'Aquacontroll 400 Multiparameter', '467342975122859443.pdf', '1', '2024-03-19 13:33:25'),
(5, 2, 'Aeration Controller', '1489240710716788308.pdf', '1', '2024-03-20 04:34:51'),
(6, 10, 'HDPE Pantoon Cages', '1376925873126571208.pdf', '1', '2024-03-20 04:36:02'),
(7, 10, 'HDPE Open Sea Cages', '12750682031542675703.pdf', '1', '2024-03-20 04:36:39'),
(8, 11, 'Paddle Wheel Aerators', '1044493891767821724.pdf', '1', '2024-03-20 04:37:52'),
(9, 11, 'Aquaculture Blowers 1HP', '17091951171968005957.pdf', '1', '2024-03-20 04:38:19'),
(10, 11, 'Aquaculture Blower - 5 HP', '15994995661325576769.pdf', '1', '2024-03-20 04:39:12'),
(11, 11, 'Industrial Blowers', '1314089601483575139.pdf', '1', '2024-03-20 04:39:38'),
(12, 11, 'Blower 3 HP', '15222266111388462690.pdf', '1', '2024-03-20 04:40:27'),
(14, 12, 'Automatic Weather Station', '17661267872081498445.pdf', '1', '2024-03-20 06:05:59'),
(15, 12, 'Compact Weather Station', '1205126448660531497.pdf', '1', '2024-03-20 06:06:29'),
(16, 12, 'Mobile Weather Station', '11629268481375080708.pdf', '1', '2024-03-20 06:06:52'),
(17, 12, 'Agro Meteorological Station', '18977540411892884422.pdf', '1', '2024-03-20 06:07:18'),
(18, 12, 'Road Weather Station', '1225731563442630183.pdf', '1', '2024-03-20 06:07:42'),
(19, 12, 'Pan evaporimeter', '15226382321683603915.pdf', '1', '2024-03-20 06:08:03'),
(20, 13, 'Cloud Camera', '1133463052924138825.pdf', '1', '2024-03-20 06:09:03'),
(21, 13, 'Cloud Height Sensor', '350031356209990737.pdf', '1', '2024-03-20 06:09:22'),
(22, 13, 'Cloud Ceilometer', '1103488168736184370.pdf', '1', '2024-03-20 06:09:41'),
(23, 14, 'River Ray ADCP', '16809774911107386335.pdf', '1', '2024-03-20 06:10:05'),
(24, 14, 'Stream Pro ADCP', '3717286691378130731.pdf', '1', '2024-03-20 06:10:28'),
(25, 15, 'Radar Level Sensor', '129593221565665391.pdf', '1', '2024-03-20 06:11:06'),
(26, 15, 'RQ 30 Radar Level Sensor', '1137789791529087975.pdf', '1', '2024-03-20 06:11:28'),
(27, 15, 'Marine Wave Radar', '1139308597414867523.pdf', '1', '2024-03-20 06:11:48'),
(28, 15, 'Tide Guage Sensor', '191803011628784846.pdf', '1', '2024-03-20 06:12:18'),
(29, 15, 'VegaPlus RLS', '10347435671870122355.pdf', '1', '2024-03-20 06:12:42'),
(30, 15, 'RLS-LX-80-35', '959115329910036845.pdf', '1', '2024-03-20 06:13:16'),
(31, 15, 'TSP-M Water level sensor', '1120349086176662175.pdf', '1', '2024-03-20 06:14:13'),
(32, 15, 'TSP- Water Level Sensor', '1867472162049080487.pdf', '1', '2024-03-20 06:14:34'),
(33, 4, 'Acoustic Current Meter', '16084384731833770422.pdf', '1', '2024-03-20 06:19:26'),
(34, 4, 'ADCP-Wave/Current Profiler', '12389284371355111811.pdf', '1', '2024-03-20 06:19:50'),
(35, 4, 'Aquadopp Profiler', '15087913411032435881.pdf', '1', '2024-03-20 06:20:12'),
(36, 16, '1010 Sampling Bottles', '1829152753163988459.pdf', '1', '2024-03-20 06:20:54'),
(37, 16, 'Mini Rosette', '18144439112063046724.pdf', '1', '2024-03-20 06:21:36'),
(38, 16, 'Flow Meter', '11114816651675311673.pdf', '1', '2024-03-20 06:22:08'),
(39, 17, 'Subsea Buoys', '8660870091883867227.pdf', '1', '2024-03-20 06:22:56'),
(40, 17, 'popup buoys', '77150903685405798.pdf', '1', '2024-03-20 06:23:25'),
(41, 18, 'Zoo / Phyto Plankton Net', '13804083952055876153.pdf', '1', '2024-03-20 06:30:42'),
(42, 18, 'Bongo Net', '18053411141004444019.pdf', '1', '2024-03-20 06:31:07'),
(43, 18, 'Oil Sampling Net', '15795127701622593307.pdf', '1', '2024-03-20 06:31:32'),
(44, 19, 'Safety Buoys ARD K7-K12', '619182182748968124.pdf', '1', '2024-03-20 06:32:43'),
(45, 19, 'Safety Buoys ARD 600', '8024553941149423334.pdf', '1', '2024-03-20 06:33:03'),
(46, 19, 'Safety Ball Buoys', '17652244781265099174.pdf', '1', '2024-03-20 06:33:25'),
(47, 19, 'Polyform Buoys', '14406042131745246869.pdf', '1', '2024-03-20 06:33:49'),
(48, 19, 'Data Buoy', '15297800741651302176.pdf', '1', '2024-03-20 06:34:25'),
(49, 19, 'YSI Buoys', '2013066450185277009.pdf', '1', '2024-03-20 06:35:01'),
(50, 20, 'Floating Jetty / Platfrom', '501119139878698938.pdf', '1', '2024-03-20 06:39:36'),
(51, 21, 'HDPE Rescue Boat', '4416959211757697668.pdf', '1', '2024-03-20 06:40:31'),
(52, 21, 'Rigid Inflatable Float', '14009181711446396008.pdf', '1', '2024-03-20 06:41:55'),
(53, 21, 'FRP Pedal Boats', '1065830271319801050.pdf', '1', '2024-03-20 06:42:26'),
(54, 22, 'Automatic Marine Station', '90483743549494897.pdf', '1', '2024-03-20 06:43:34'),
(55, 7, 'Airport Weather System', '4951434551154729751.pdf', '1', '2024-03-20 06:44:19'),
(56, 7, 'Pilot Briefing system', '375670076891877784.pdf', '1', '2024-03-20 06:45:37'),
(57, 7, 'Lightning Alert System', '8036568452093857538.pdf', '1', '2024-03-20 06:46:32'),
(58, 7, 'Runway Visual Range System', '19058542851767696759.pdf', '1', '2024-03-20 06:47:00'),
(59, 8, 'Lightening Detection System', '1850325841172652748.pdf', '1', '2024-03-20 06:48:44'),
(60, 8, 'BTD-Marine thundestrom', '20023215831724183938.pdf', '1', '2024-03-20 06:49:55'),
(61, 8, 'BTD-200 Lightening Warning', '6694190641725996072.pdf', '1', '2024-03-20 06:50:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
