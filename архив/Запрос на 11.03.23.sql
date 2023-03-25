-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.26-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных myblog2
DROP DATABASE IF EXISTS `myblog2`;
CREATE DATABASE IF NOT EXISTS `myblog2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `myblog2`;

-- Дамп структуры для таблица myblog2.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы myblog2.users: ~4 rows (приблизительно)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `first_name`, `last_name`, `login`, `password`, `avatar`, `birthdate`, `created_at`) VALUES
	(3, 'paloncha', 'palonchaev', 'paloncha', 'e8697df6954de2a894e7e3137e883c72', '/assets/uploads/users/1678534529массивы.jpg', NULL, NULL),
	(13, 'paloncha', 'palonchaev', 'paloncha', 'e8697df6954de2a894e7e3137e883c72', '/assets/uploads/users/1678529900массивы.jpg', NULL, NULL),
	(14, 'paloncha', 'palonchaev', 'paloncha', 'e8697df6954de2a894e7e3137e883c72', '/assets/uploads/users/1678529900массивы.jpg', NULL, NULL),
	(15, 'paloncha', 'palonchaev', 'paloncha', 'e8697df6954de2a894e7e3137e883c72', '/assets/uploads/users/1678533992массивы.jpg', NULL, NULL),
	(16, 'azizbek', 'mirzaev', 'aziz12', 'b85dc795ba17cb243ab156f8c52124e1', '/assets/uploads/users/1678539273Num_rows da oshibka.jpg', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
