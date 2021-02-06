
DROP TABLE IF EXISTS `download`;

CREATE TABLE `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(30) NOT NULL,
  `title` varchar(64) NOT NULL,
  `type` varchar(24) NOT NULL,
  `weight` varchar(24) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `download` */

insert  into `download`(`id`,`file_name`,`title`,`type`,`weight`,`description`,`url`,`image`) values 
(1,'Dowload Name','Title of the download, it can be long. 255 characters','zip, rar, exe','Download size','Description of the download. Use a text to give a brief explanation about your download. You have a maximum of 255 characters to use.','URL from your download.','wow-vanilla.png'),
(2,'Wotlk 3.3.5a','World of Warcraft Client 3.3.5a en_US','RAR','16.2 GB','World of Warcraft client version 3.3.5a.\r\n<br>\r\nLanguage: English United States\r\n<br>\r\nYou can use HTML language to add <b style=\"color:#FF0000;\">Colors</b> or anything.','https://YourDownloadLink.com','wow-wotlk.png');
