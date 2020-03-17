-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for snakemaniadb
CREATE DATABASE IF NOT EXISTS `snakemaniadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `snakemaniadb`;

-- Dumping structure for table snakemaniadb.snakemaniadb
CREATE TABLE IF NOT EXISTS `snakemaniadb` (
  `Username` char(50) NOT NULL DEFAULT 'Guest' COMMENT 'Username',
  `Password` char(50) NOT NULL COMMENT 'Hashed Pasword',
  `Hi-Score` smallint(5) unsigned zerofill NOT NULL DEFAULT 00000 COMMENT 'User''s highest score'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table snakemaniadb.snakemaniadb: ~0 rows (approximately)
/*!40000 ALTER TABLE `snakemaniadb` DISABLE KEYS */;
/*!40000 ALTER TABLE `snakemaniadb` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
