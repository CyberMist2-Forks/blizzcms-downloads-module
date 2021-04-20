/*
SQLyog Ultimate
MySQL - 5.6.25-log : Database - blizz
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `download` */

DROP TABLE IF EXISTS `download`;

CREATE TABLE `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fileName` varchar(30) NOT NULL,
  `type` varchar(24) NOT NULL,
  `weight` varchar(24) NOT NULL,
  `category` varchar(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `download` */

insert  into `download`(`id`,`fileName`,`type`,`weight`,`category`,`url`,`image`) values 
(1,'Dowload Name','zip, rar, exe','Download size','1','URL from your download.','wow-vanilla.png'),
(2,'Wotlk 3.3.5a','RAR','16.2 GB','1','https://YourDownloadLink.com','wow-wotlk.png'),
(3,'HealBot','Zip','235 KB','2','https://YourDownloadLink.com','wow-wotlk.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
