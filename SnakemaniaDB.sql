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
  `username` char(50) NOT NULL DEFAULT 'Guest' COMMENT 'Username',
  `password` char(255) NOT NULL COMMENT 'Hashed Password',
  `hiscore` smallint(5) unsigned zerofill NOT NULL DEFAULT 00000 COMMENT 'User''s highest score',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table snakemaniadb.snakemaniadb: ~8 rows (approximately)
/*!40000 ALTER TABLE `snakemaniadb` DISABLE KEYS */;
INSERT INTO `snakemaniadb` (`username`, `password`, `hiscore`) VALUES
	('EEEEEEEE', '$2y$10$c454KDGfGo9wyP0nBsQy7O16iaV1qHZdqxkrULlfsv.g4nBTHOnou', 00000),
	('Paul123', '$2y$10$9M5NPmjn6nlkt.qcN5bFtOEfYXf7RYw.2Z/AYk/gepKfenNvTJ4QG', 00000),
	('Test23', '$2y$10$Jh8vdPSLh5fcfHjwhtm.Y./uEkcpv7yvWmN2mu4i5I1ts7J3gn1wu', 00000),
	('Test546', '$2y$10$yxTBvAALHqBRczQvWsjwMOqt926zz90Yx5cxcX5xvd.0vFQo0VUrC', 00000);
/*!40000 ALTER TABLE `snakemaniadb` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
