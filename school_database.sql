-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versie:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van dropdown wordt geschreven
CREATE DATABASE IF NOT EXISTS `dropdown` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dropdown`;

-- Structuur van  tabel dropdown.inlog wordt geschreven
CREATE TABLE IF NOT EXISTS `inlog` (
  `gebruiker` varchar(50) DEFAULT NULL,
  `wachtwoord` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel dropdown.inlog: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `inlog` DISABLE KEYS */;
INSERT INTO `inlog` (`gebruiker`, `wachtwoord`) VALUES
	('admin', 'kaas');
/*!40000 ALTER TABLE `inlog` ENABLE KEYS */;

-- Structuur van  tabel dropdown.lokaal wordt geschreven
CREATE TABLE IF NOT EXISTS `lokaal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `klas_id` int(11) DEFAULT NULL,
  `klas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `klas_id` (`klas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel dropdown.lokaal: ~4 rows (ongeveer)
/*!40000 ALTER TABLE `lokaal` DISABLE KEYS */;
INSERT INTO `lokaal` (`ID`, `klas_id`, `klas`) VALUES
	(1, 1, 'IB1A'),
	(2, 2, 'IB1B'),
	(3, 3, 'IB1C'),
	(4, 4, 'IB1D');
/*!40000 ALTER TABLE `lokaal` ENABLE KEYS */;

-- Structuur van  tabel dropdown.students wordt geschreven
CREATE TABLE IF NOT EXISTS `students` (
  `SID` int(11) NOT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `achternaam` varchar(50) DEFAULT NULL,
  `klas_id` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Precent',
  `datum_ziek` date DEFAULT NULL,
  `datum_beter` date DEFAULT NULL,
  PRIMARY KEY (`SID`),
  KEY `FK_students_lokaal` (`klas_id`),
  CONSTRAINT `FK_students_lokaal` FOREIGN KEY (`klas_id`) REFERENCES `lokaal` (`klas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel dropdown.students: ~12 rows (ongeveer)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` (`SID`, `naam`, `achternaam`, `klas_id`, `email`, `message`, `status`, `datum_ziek`, `datum_beter`) VALUES
	(0, 'fdfsf', 'fdssdfsd', 1, NULL, NULL, 'Stage', '2020-02-05', NULL),
	(1, 'mees', 'kees', 1, 'raww', 'dyslexie', 'Ziek', NULL, NULL),
	(4, 'jeroen', 'kalkoen', 1, 'arwwarrw', NULL, 'Ziek', '2020-04-11', '2020-04-18'),
	(5, 'hallo', 'dit', 2, 'istest@gmail.com', NULL, 'Precent', NULL, NULL),
	(6, 'henkie', 'pankie', 2, 'randoom@gmail.com', NULL, 'Te laat', '0000-00-00', NULL),
	(7, 'stef', 'test', 2, 'test@test.com', NULL, 'Precent', NULL, NULL),
	(33, 'fietsband', 'trapper', 4, 'race@fies.nl', NULL, 'Stage', NULL, NULL),
	(3544, 'henkie', 'JANSEN', 3, 'stef.tsi@hotmail.com', '', 'Te laat', '2020-04-10', NULL),
	(4444, 'kruidvat', 'hema', 4, 'iets@gmail.com', '', 'Precent', NULL, NULL),
	(234211, 'Robbie', 'uitenbooghaard', 4, 'curio@hotmail.com', 'docent', 'Ziek', '2020-04-26', NULL),
	(4124211, 'test na update', 'test', 3, 'test@hotmail.com', '', 'Precent', NULL, NULL),
	(44444423, 'testing', 'plz', 3, 'test@hotmail.com', '', 'Precent', NULL, NULL),
	(444234234, 'dave', 'bergmans', 4, 'curio@hotmail.com', 'heidi is beste', 'Precent', NULL, NULL);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
