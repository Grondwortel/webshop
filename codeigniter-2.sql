-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van codeigniter wordt geschreven
CREATE DATABASE IF NOT EXISTS `codeigniter` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `codeigniter`;

-- Structuur van  tabel codeigniter.tickets wordt geschreven
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) DEFAULT NULL,
  `onderwerp` varchar(50) DEFAULT NULL,
  `tickets` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codeigniter.tickets: 5 rows
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` (`id`, `onderwerp`, `tickets`) VALUES
	(NULL, '', NULL),
	(NULL, 'sasa', NULL),
	(NULL, 'asa', NULL),
	(NULL, 'asasa', NULL),
	(NULL, 'test', NULL);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;

-- Structuur van  tabel codeigniter.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel codeigniter.users: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
	(8, 'Arya', 'arya.00767@gmail.com', 'ddd880313ddbae50ba3c09860a42e81c', 'Male', '0183-688888', '2017-11-20 09:21:29', '2017-11-20 09:21:29', '1'),
	(9, 'admin', 'admin@admin.nl', '21232f297a57a5a743894a0e4a801fc3', 'Male', 'admin', '2017-11-20 10:45:39', '2017-11-20 10:45:39', '1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
