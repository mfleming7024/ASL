# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: ssl_groupProject
# Generation Time: 2013-07-13 14:41:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table album
# ------------------------------------------------------------

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `albumId` int(11) NOT NULL AUTO_INCREMENT,
  `albumName` varchar(50) NOT NULL DEFAULT '',
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`albumId`),
  KEY `a_userId_fk` (`userId`),
  CONSTRAINT `a_userId_fk` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;

INSERT INTO `album` (`albumId`, `albumName`, `userId`)
VALUES
	(1,'test',5),
	(2,'Another',5),
	(8,'eight',5);

/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ci_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `imgId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `userId` int(11) NOT NULL,
  `albumId` int(11) DEFAULT NULL,
  PRIMARY KEY (`imgId`),
  KEY `userfk` (`userId`),
  KEY `albumidFK` (`albumId`),
  CONSTRAINT `albumidFK` FOREIGN KEY (`albumId`) REFERENCES `album` (`albumId`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `userfk` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`imgId`, `name`, `userId`, `albumId`)
VALUES
	(35,'?PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\0\0ó\0\0\0Ûó>T\0\0#iCCPICC Profile\0\0X	­Yy<UÝ×ßç?\\®é?çy?eÎ<gÌLÄ5Ïq]B\Z©Ð@Q\n?!)!T$C¡P\Z?¨R?¼?§?çù}~ïûß{>?sÎ÷®½öÚk¯µÎÞkí\0w922Å@x?bof(èêæ.?hÀ@\0È?}£#\rìì¬Àÿy}Èfã Ü¦¬ÿ?ío`öóö\0±?Í>~Ñ¾á×?nô¤PÀnÊÝKÜÄ§ f¥@!.ÝÄáÆMìóîÙâq´7?',5,1),
	(36,'?PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\0\0ó\0\0\0Ûó>T\0\0#iCCPICC Profile\0\0X	­Yy<UÝ×ßç?\\®é?çy?eÎ<gÌLÄ5Ïq]B\Z©Ð@Q\n?!)!T$C¡P\Z?¨R?¼?§?çù}~ïûß{>?sÎ÷®½öÚk¯µÎÞkí\0w922Å@x?bof(èêæ.?hÀ@\0È?}£#\rìì¬Àÿy}Èfã Ü¦¬ÿ?ío`öóö\0±?Í>~Ñ¾á×?nô¤PÀnÊÝKÜÄ§ f¥@!.ÝÄáÆMìóîÙâq´7?',5,1),
	(38,'cropped.jpg',5,0),
	(39,'trondheim_am_nidelv_whrend_der_polarnacht-wallpaper-1440x900.jpg',5,0),
	(40,'trondheim_am_nidelv_whrend_der_polarnacht-wallpaper-1440x900.jpg',5,0),
	(41,'wooden_fence_4-wallpaper-1440x900.jpg',5,0),
	(42,'wooden_fence_4-wallpaper-1440x900.jpg',5,0),
	(43,'wooden_fence_4-wallpaper-1440x900.jpg',5,0),
	(44,'wooden_fence_4-wallpaper-1440x900.jpg',5,0),
	(45,'view_from_creamy_creek__nz_south-wallpaper-1440x900.jpg',5,0),
	(46,'wooden_fence_4-wallpaper-1440x900.jpg',5,0),
	(47,'view_from_creamy_creek__nz_south-wallpaper-1440x900.jpg',5,0),
	(48,'wooden_fence_4-wallpaper-1440x900.jpg',5,0),
	(49,'view_from_creamy_creek__nz_south-wallpaper-1440x900.jpg',5,0),
	(50,'trondheim_am_nidelv_whrend_der_polarnacht-wallpaper-1440x900.jpg',5,0),
	(51,'view_from_creamy_creek__nz_south-wallpaper-1440x900.jpg',5,0),
	(52,'view_from_creamy_creek__nz_south-wallpaper-1440x900.jpg',5,0),
	(53,'trondheim_am_nidelv_whrend_der_polarnacht-wallpaper-1440x900.jpg',5,0),
	(54,'poppies_and_chamomile-wallpaper-1440x900.jpg',5,0),
	(58,'sun_rays-wallpaper-1440x900.jpg',5,NULL),
	(59,'tiny_air_bubbles-wallpaper-1440x900.jpg',5,NULL),
	(60,'spring_buds_macro-wallpaper-1440x900.jpg',5,NULL),
	(61,'sky_city-wallpaper-1440x900.jpg',5,NULL),
	(62,'the_streets_of_venice-wallpaper-1440x900.jpg',5,NULL),
	(63,'the_streets_of_venice-wallpaper-1440x900.jpg',5,NULL),
	(64,'sky_city-wallpaper-1440x900.jpg',5,NULL),
	(65,'spring_buds_macro-wallpaper-1440x900.jpg',5,NULL),
	(66,'spring_buds_macro-wallpaper-1440x900.jpg',5,NULL),
	(67,'tall_grass_sunset-wallpaper-1440x900.jpg',5,NULL),
	(74,'school_love-wallpaper-1440x900.jpg',5,2),
	(112,'landscape_hd-wallpaper-1440x900.jpg',5,2),
	(113,'evening_city_lights-wallpaper-1440x900.jpg',5,2),
	(114,'sea_of_cloud-wallpaper-1440x900.jpg',5,2),
	(115,'sea_of_cloud-wallpaper-1440x900.jpg',5,2),
	(116,'exotic_place-wallpaper-1440x900.jpg',5,2),
	(117,'on_the_beach_5-wallpaper-1440x900.jpg',5,8);

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table salt
# ------------------------------------------------------------

DROP TABLE IF EXISTS `salt`;

CREATE TABLE `salt` (
  `saltId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `salt` char(20) DEFAULT NULL,
  PRIMARY KEY (`saltId`),
  KEY `user_fk` (`userId`),
  CONSTRAINT `userid_fk` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `salt` WRITE;
/*!40000 ALTER TABLE `salt` DISABLE KEYS */;

INSERT INTO `salt` (`saltId`, `userId`, `salt`)
VALUES
	(7,5,'tRAjz5!(lMkXuO`9CuDE');

/*!40000 ALTER TABLE `salt` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `passwordHash` char(32) DEFAULT NULL,
  `userTypeId` int(11) NOT NULL,
  PRIMARY KEY (`userId`),
  KEY `usertypefk` (`userTypeId`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userTypeId`) REFERENCES `userType` (`userTypeId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`userId`, `username`, `passwordHash`, `userTypeId`)
VALUES
	(5,'Michael','0c4c15298f19dea6ffe425e4c1977adb',1);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `lastname` varchar(35) DEFAULT NULL,
  `firstname` varchar(35) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `lastname`, `firstname`, `email`, `date`, `notes`)
VALUES
	(6,'edited','683dc5278b1fbbd98a996cecc3ffd06a','edited','edited','edi','2013-07-30','asdasd'),
	(30,'student','5f4dcc3b5aa765d61d8327deb882cf99','student','first','student@lol.com','0000-00-00',''),
	(31,'user','ee11cbb19052e40b07aac0ca060c23ee','Angeles','Erwin','user@user.com','2013-07-31','user main'),
	(41,'erwerwer','e130e5e618f15cee7a519d8b7b8306a0','edited new','edited new','werwer','0000-00-00','werwer');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table userType
# ------------------------------------------------------------

DROP TABLE IF EXISTS `userType`;

CREATE TABLE `userType` (
  `userTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `userType` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`userTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `userType` WRITE;
/*!40000 ALTER TABLE `userType` DISABLE KEYS */;

INSERT INTO `userType` (`userTypeId`, `userType`)
VALUES
	(1,'Administrator'),
	(2,'User');

/*!40000 ALTER TABLE `userType` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
