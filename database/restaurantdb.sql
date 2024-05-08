/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.5.5-10.4.28-MariaDB : Database - restaurant
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`restaurant` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `restaurant`;

/*Table structure for table `tblcustomer` */

DROP TABLE IF EXISTS `tblcustomer`;

CREATE TABLE `tblcustomer` (
  `cusid` int(11) NOT NULL AUTO_INCREMENT,
  `cusname` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cusid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblcustomer` */

/*Table structure for table `tblitem` */

DROP TABLE IF EXISTS `tblitem`;

CREATE TABLE `tblitem` (
  `itemid` int(11) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(50) DEFAULT NULL,
  `unitprice` float DEFAULT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblitem` */

/*Table structure for table `tblorder` */

DROP TABLE IF EXISTS `tblorder`;

CREATE TABLE `tblorder` (
  `ordid` int(11) NOT NULL AUTO_INCREMENT,
  `datecreated` datetime DEFAULT NULL,
  `stid` int(11) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL,
  `tblid` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`ordid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblorder` */

/*Table structure for table `tblorderdetail` */

DROP TABLE IF EXISTS `tblorderdetail`;

CREATE TABLE `tblorderdetail` (
  `ordid` int(11) DEFAULT NULL,
  `itemid` int(11) DEFAULT NULL,
  `quantities` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblorderdetail` */

/*Table structure for table `tblpayment` */

DROP TABLE IF EXISTS `tblpayment`;

CREATE TABLE `tblpayment` (
  `ordid` int(11) DEFAULT NULL,
  `stid` int(11) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblpayment` */

/*Table structure for table `tblstaff` */

DROP TABLE IF EXISTS `tblstaff`;

CREATE TABLE `tblstaff` (
  `stid` int(11) NOT NULL AUTO_INCREMENT,
  `stname` varchar(50) DEFAULT NULL,
  `sex` char(6) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblstaff` */

/*Table structure for table `tbltable` */

DROP TABLE IF EXISTS `tbltable`;

CREATE TABLE `tbltable` (
  `tblid` int(11) NOT NULL AUTO_INCREMENT,
  `tblname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tblid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbltable` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;