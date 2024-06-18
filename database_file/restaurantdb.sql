/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.5.5-10.4.28-MariaDB : Database - restaurantdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`restaurantdb` /*!40100 DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci */;

USE `restaurantdb`;

/*Table structure for table `tblcustomer` */

DROP TABLE IF EXISTS `tblcustomer`;

CREATE TABLE `tblcustomer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblcustomer` */

insert  into `tblcustomer`(`customer_id`,`customer_name`,`contact`) values (1,'General','None'),(2,'Thida','012 232 342');

/*Table structure for table `tblitem` */

DROP TABLE IF EXISTS `tblitem`;

CREATE TABLE `tblitem` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblitem` */

insert  into `tblitem`(`item_id`,`item_name`,`unit_price`) values (1,'chichen',5),(2,'Khmer Thin Noodle',5),(3,'Soup',2);

/*Table structure for table `tblorder` */

DROP TABLE IF EXISTS `tblorder`;

CREATE TABLE `tblorder` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblorder` */

insert  into `tblorder`(`order_id`,`date_created`,`staff_id`,`customer_id`,`table_id`,`status`,`total`) values (1,'2024-06-18 07:23:00',1,1,1,'Paid',24),(2,'2024-06-18 08:16:00',2,1,1,'Paid',12),(3,'2024-06-18 14:16:00',1,1,1,'No Paid',16);

/*Table structure for table `tblorderdetail` */

DROP TABLE IF EXISTS `tblorderdetail`;

CREATE TABLE `tblorderdetail` (
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblorderdetail` */

insert  into `tblorderdetail`(`order_id`,`item_id`,`quantity`,`price`,`amount`) values (1,3,2,2,4),(1,1,1,5,5),(1,2,3,5,15),(2,3,1,2,2),(2,1,2,5,10),(3,2,2,5,10),(3,3,3,2,6);

/*Table structure for table `tblpayment` */

DROP TABLE IF EXISTS `tblpayment`;

CREATE TABLE `tblpayment` (
  `order_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblpayment` */

/*Table structure for table `tblstaff` */

DROP TABLE IF EXISTS `tblstaff`;

CREATE TABLE `tblstaff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(50) DEFAULT NULL,
  `sex` char(6) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblstaff` */

insert  into `tblstaff`(`staff_id`,`staff_name`,`sex`,`phone`,`address`) values (1,'Sengey','Male','012 47 87 97','Battambang'),(2,'Pheareak','Male','012214186','Battambang');

/*Table structure for table `tbltable` */

DROP TABLE IF EXISTS `tbltable`;

CREATE TABLE `tbltable` (
  `table_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbltable` */

insert  into `tbltable`(`table_id`,`table_name`) values (1,'General'),(2,'VIP A01');

/*Table structure for table `vieworder` */

DROP TABLE IF EXISTS `vieworder`;

/*!50001 DROP VIEW IF EXISTS `vieworder` */;
/*!50001 DROP TABLE IF EXISTS `vieworder` */;

/*!50001 CREATE TABLE  `vieworder`(
 `order_id` int(11) ,
 `date_created` datetime ,
 `staff_id` int(11) ,
 `staff_name` varchar(50) ,
 `customer_id` int(11) ,
 `customer_name` varchar(50) ,
 `table_id` int(11) ,
 `table_name` varchar(50) ,
 `status` varchar(50) ,
 `total` float 
)*/;

/*Table structure for table `vieworderdetail` */

DROP TABLE IF EXISTS `vieworderdetail`;

/*!50001 DROP VIEW IF EXISTS `vieworderdetail` */;
/*!50001 DROP TABLE IF EXISTS `vieworderdetail` */;

/*!50001 CREATE TABLE  `vieworderdetail`(
 `order_id` int(11) ,
 `date_created` datetime ,
 `staff_id` int(11) ,
 `staff_name` varchar(50) ,
 `customer_id` int(11) ,
 `customer_name` varchar(50) ,
 `table_id` int(11) ,
 `table_name` varchar(50) ,
 `STATUS` varchar(50) ,
 `total` float ,
 `item_id` int(11) ,
 `item_name` varchar(50) ,
 `quantity` int(11) ,
 `unit_price` float ,
 `amount` float 
)*/;

/*Table structure for table `vpayment` */

DROP TABLE IF EXISTS `vpayment`;

/*!50001 DROP VIEW IF EXISTS `vpayment` */;
/*!50001 DROP TABLE IF EXISTS `vpayment` */;

/*!50001 CREATE TABLE  `vpayment`(
 `order_id` int(11) ,
 `date_created` datetime ,
 `staff_id` int(11) ,
 `staff_name` varchar(50) ,
 `customer_id` int(11) ,
 `customer_name` varchar(50) ,
 `table_id` int(11) ,
 `table_name` varchar(50) ,
 `status` varchar(50) ,
 `total` float 
)*/;

/*View structure for view vieworder */

/*!50001 DROP TABLE IF EXISTS `vieworder` */;
/*!50001 DROP VIEW IF EXISTS `vieworder` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vieworder` AS select `tblorder`.`order_id` AS `order_id`,`tblorder`.`date_created` AS `date_created`,`tblstaff`.`staff_id` AS `staff_id`,`tblstaff`.`staff_name` AS `staff_name`,`tblcustomer`.`customer_id` AS `customer_id`,`tblcustomer`.`customer_name` AS `customer_name`,`tbltable`.`table_id` AS `table_id`,`tbltable`.`table_name` AS `table_name`,`tblorder`.`status` AS `status`,`tblorder`.`total` AS `total` from (((`tblorder` join `tblstaff` on(`tblorder`.`staff_id` = `tblstaff`.`staff_id`)) join `tblcustomer` on(`tblorder`.`customer_id` = `tblcustomer`.`customer_id`)) join `tbltable` on(`tblorder`.`table_id` = `tbltable`.`table_id`)) order by `tblorder`.`order_id` */;

/*View structure for view vieworderdetail */

/*!50001 DROP TABLE IF EXISTS `vieworderdetail` */;
/*!50001 DROP VIEW IF EXISTS `vieworderdetail` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vieworderdetail` AS select `tblorder`.`order_id` AS `order_id`,`tblorder`.`date_created` AS `date_created`,`tblstaff`.`staff_id` AS `staff_id`,`tblstaff`.`staff_name` AS `staff_name`,`tblcustomer`.`customer_id` AS `customer_id`,`tblcustomer`.`customer_name` AS `customer_name`,`tbltable`.`table_id` AS `table_id`,`tbltable`.`table_name` AS `table_name`,`tblorder`.`status` AS `STATUS`,`tblorder`.`total` AS `total`,`tblitem`.`item_id` AS `item_id`,`tblitem`.`item_name` AS `item_name`,`tblorderdetail`.`quantity` AS `quantity`,`tblitem`.`unit_price` AS `unit_price`,`tblorderdetail`.`amount` AS `amount` from (((((`tblorderdetail` join `tblorder` on(`tblorderdetail`.`order_id` = `tblorder`.`order_id`)) join `tblstaff` on(`tblorder`.`staff_id` = `tblstaff`.`staff_id`)) join `tblcustomer` on(`tblorder`.`customer_id` = `tblcustomer`.`customer_id`)) join `tbltable` on(`tblorder`.`table_id` = `tbltable`.`table_id`)) join `tblitem` on(`tblorderdetail`.`item_id` = `tblitem`.`item_id`)) order by `tblorderdetail`.`order_id` */;

/*View structure for view vpayment */

/*!50001 DROP TABLE IF EXISTS `vpayment` */;
/*!50001 DROP VIEW IF EXISTS `vpayment` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpayment` AS select `tblorder`.`order_id` AS `order_id`,`tblorder`.`date_created` AS `date_created`,`tblstaff`.`staff_id` AS `staff_id`,`tblstaff`.`staff_name` AS `staff_name`,`tblcustomer`.`customer_id` AS `customer_id`,`tblcustomer`.`customer_name` AS `customer_name`,`tbltable`.`table_id` AS `table_id`,`tbltable`.`table_name` AS `table_name`,`tblorder`.`status` AS `status`,`tblorder`.`total` AS `total` from (((`tblorder` join `tblstaff` on(`tblorder`.`staff_id` = `tblstaff`.`staff_id`)) join `tblcustomer` on(`tblorder`.`customer_id` = `tblcustomer`.`customer_id`)) join `tbltable` on(`tblorder`.`table_id` = `tbltable`.`table_id`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
