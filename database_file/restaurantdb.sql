-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 12:38 PM
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
-- Database: `restaurantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`customer_id`, `customer_name`, `contact`) VALUES
(1, 'General', 'None'),
(2, 'Thida', '012 232 342');

-- --------------------------------------------------------

--
-- Table structure for table `tblitem`
--

CREATE TABLE `tblitem` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `unit_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblitem`
--

INSERT INTO `tblitem` (`item_id`, `item_name`, `unit_price`) VALUES
(1, 'chichen', 5),
(2, 'Khmer Thin Noodle', 5),
(3, 'Soup', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `order_id` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`order_id`, `date_created`, `staff_id`, `customer_id`, `table_id`, `status`, `total`) VALUES
(1, '2024-06-18 17:37:00', 1, 1, 1, 'No Paid', 7),
(2, '2024-06-18 17:37:00', 1, 1, 1, 'No Paid', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tblorderdetail`
--

CREATE TABLE `tblorderdetail` (
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblorderdetail`
--

INSERT INTO `tblorderdetail` (`order_id`, `item_id`, `quantity`, `price`, `amount`) VALUES
(1, 1, 1, 5, 5),
(1, 3, 1, 2, 2),
(2, 2, 2, 5, 10),
(2, 1, 1, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `order_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(50) DEFAULT NULL,
  `sex` char(6) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`staff_id`, `staff_name`, `sex`, `phone`, `address`) VALUES
(1, 'Sengey', 'Male', '012 47 87 97', 'Battambang'),
(2, 'Pheareak', 'Male', '012214186', 'Battambang');

-- --------------------------------------------------------

--
-- Table structure for table `tbltable`
--

CREATE TABLE `tbltable` (
  `table_id` int(11) NOT NULL,
  `table_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltable`
--

INSERT INTO `tbltable` (`table_id`, `table_name`) VALUES
(1, 'General'),
(2, 'VIP A01');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vieworder`
-- (See below for the actual view)
--
CREATE TABLE `vieworder` (
`order_id` int(11)
,`date_created` datetime
,`staff_id` int(11)
,`staff_name` varchar(50)
,`customer_id` int(11)
,`customer_name` varchar(50)
,`table_id` int(11)
,`table_name` varchar(50)
,`status` varchar(50)
,`total` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vieworderdetail`
-- (See below for the actual view)
--
CREATE TABLE `vieworderdetail` (
`order_id` int(11)
,`date_created` datetime
,`staff_id` int(11)
,`staff_name` varchar(50)
,`customer_id` int(11)
,`customer_name` varchar(50)
,`table_id` int(11)
,`table_name` varchar(50)
,`STATUS` varchar(50)
,`total` float
,`item_id` int(11)
,`item_name` varchar(50)
,`quantity` int(11)
,`unit_price` float
,`amount` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vpayment`
-- (See below for the actual view)
--
CREATE TABLE `vpayment` (
`order_id` int(11)
,`date_created` datetime
,`staff_id` int(11)
,`staff_name` varchar(50)
,`customer_id` int(11)
,`customer_name` varchar(50)
,`table_id` int(11)
,`table_name` varchar(50)
,`status` varchar(50)
,`total` float
);

-- --------------------------------------------------------

--
-- Structure for view `vieworder`
--
DROP TABLE IF EXISTS `vieworder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vieworder`  AS SELECT `tblorder`.`order_id` AS `order_id`, `tblorder`.`date_created` AS `date_created`, `tblstaff`.`staff_id` AS `staff_id`, `tblstaff`.`staff_name` AS `staff_name`, `tblcustomer`.`customer_id` AS `customer_id`, `tblcustomer`.`customer_name` AS `customer_name`, `tbltable`.`table_id` AS `table_id`, `tbltable`.`table_name` AS `table_name`, `tblorder`.`status` AS `status`, `tblorder`.`total` AS `total` FROM (((`tblorder` join `tblstaff` on(`tblorder`.`staff_id` = `tblstaff`.`staff_id`)) join `tblcustomer` on(`tblorder`.`customer_id` = `tblcustomer`.`customer_id`)) join `tbltable` on(`tblorder`.`table_id` = `tbltable`.`table_id`)) ORDER BY `tblorder`.`order_id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `vieworderdetail`
--
DROP TABLE IF EXISTS `vieworderdetail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vieworderdetail`  AS SELECT `tblorder`.`order_id` AS `order_id`, `tblorder`.`date_created` AS `date_created`, `tblstaff`.`staff_id` AS `staff_id`, `tblstaff`.`staff_name` AS `staff_name`, `tblcustomer`.`customer_id` AS `customer_id`, `tblcustomer`.`customer_name` AS `customer_name`, `tbltable`.`table_id` AS `table_id`, `tbltable`.`table_name` AS `table_name`, `tblorder`.`status` AS `STATUS`, `tblorder`.`total` AS `total`, `tblitem`.`item_id` AS `item_id`, `tblitem`.`item_name` AS `item_name`, `tblorderdetail`.`quantity` AS `quantity`, `tblitem`.`unit_price` AS `unit_price`, `tblorderdetail`.`amount` AS `amount` FROM (((((`tblorderdetail` join `tblorder` on(`tblorderdetail`.`order_id` = `tblorder`.`order_id`)) join `tblstaff` on(`tblorder`.`staff_id` = `tblstaff`.`staff_id`)) join `tblcustomer` on(`tblorder`.`customer_id` = `tblcustomer`.`customer_id`)) join `tbltable` on(`tblorder`.`table_id` = `tbltable`.`table_id`)) join `tblitem` on(`tblorderdetail`.`item_id` = `tblitem`.`item_id`)) ORDER BY `tblorderdetail`.`order_id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `vpayment`
--
DROP TABLE IF EXISTS `vpayment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpayment`  AS SELECT `tblorder`.`order_id` AS `order_id`, `tblorder`.`date_created` AS `date_created`, `tblstaff`.`staff_id` AS `staff_id`, `tblstaff`.`staff_name` AS `staff_name`, `tblcustomer`.`customer_id` AS `customer_id`, `tblcustomer`.`customer_name` AS `customer_name`, `tbltable`.`table_id` AS `table_id`, `tbltable`.`table_name` AS `table_name`, `tblorder`.`status` AS `status`, `tblorder`.`total` AS `total` FROM (((`tblorder` join `tblstaff` on(`tblorder`.`staff_id` = `tblstaff`.`staff_id`)) join `tblcustomer` on(`tblorder`.`customer_id` = `tblcustomer`.`customer_id`)) join `tbltable` on(`tblorder`.`table_id` = `tbltable`.`table_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tblitem`
--
ALTER TABLE `tblitem`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbltable`
--
ALTER TABLE `tbltable`
  ADD PRIMARY KEY (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblitem`
--
ALTER TABLE `tblitem`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltable`
--
ALTER TABLE `tbltable`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
