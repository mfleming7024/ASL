# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: ssl_groupProject
# Generation Time: 2013-07-16 19:01:57 +0000
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
  KEY `useridfk` (`userId`),
  CONSTRAINT `useridfk` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;

INSERT INTO `album` (`albumId`, `albumName`, `userId`)
VALUES
	(205,'Chicks',46),
	(206,'album name',31);

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
  `userId` int(11) DEFAULT NULL,
  `albumId` int(11) DEFAULT NULL,
  PRIMARY KEY (`imgId`),
  KEY `userfk` (`userId`),
  KEY `albumidFK` (`albumId`),
  CONSTRAINT `albumidFK` FOREIGN KEY (`albumId`) REFERENCES `album` (`albumId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`imgId`, `name`, `userId`, `albumId`)
VALUES
	(127,'beach_26-wallpaper-1440x9001.jpg',NULL,205),
	(128,'chicago_late_evening-wallpaper-1440x9002.jpg',NULL,205),
	(129,'branch_macro-wallpaper-1440x9001.jpg',NULL,205),
	(130,'apple_on_the_ground-wallpaper-1440x900.jpg',NULL,206),
	(131,'chicago_late_evening-wallpaper-1440x9003.jpg',NULL,206);

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `lastname` varchar(35) DEFAULT NULL,
  `firstname` varchar(35) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`userId`, `username`, `password`, `lastname`, `firstname`, `email`, `date`, `notes`)
VALUES
	(31,'user','ee11cbb19052e40b07aac0ca060c23ee','Angeles','Erwin','user@user.com','2013-07-31',''),
	(42,'album','a4b2d20f456833bcdac42e73edad64c0','Last Name Album','First Name Album','album@yahoo.com','2013-07-31','Test for albums'),
	(43,'jenny','ebe6941ee8a10c14dc933ae37a0f43fc','Bob','Jenny','jenny@jenny.com','2013-07-18','Today'),
	(44,'users','9bc65c2abec141778ffaa729489f3e87','last','first','user@user.com','2013-07-26','Wants to '),
	(46,'lol','9cdfb439c7876e703e307864c9167a15','EDITED Bond','James','lol@yahoo.com','2013-07-31','lol');

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
