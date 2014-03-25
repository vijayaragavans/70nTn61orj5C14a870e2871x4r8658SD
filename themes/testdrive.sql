-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for testdrive
CREATE DATABASE IF NOT EXISTS `testdrive` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `testdrive`;


-- Dumping structure for table testdrive.tbl_message
CREATE TABLE IF NOT EXISTS `tbl_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_title` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table testdrive.tbl_message: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_message` DISABLE KEYS */;
INSERT IGNORE INTO `tbl_message` (`message_id`, `message_title`, `message`) VALUES
	(1, 'test title1', 'test desc1'),
	(2, 'test title 2', 'test desc2');
/*!40000 ALTER TABLE `tbl_message` ENABLE KEYS */;


-- Dumping structure for table testdrive.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_is_active` enum('Y','N') NOT NULL DEFAULT 'N',
  `user_created_on` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table testdrive.tbl_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
