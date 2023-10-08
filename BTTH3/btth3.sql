-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: quanlysinhvien
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lop` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tenlop` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lop`
--

LOCK TABLES `lop` WRITE;
/*!40000 ALTER TABLE `lop` DISABLE KEYS */;
INSERT INTO `lop` VALUES (1,'Quimbam'),(2,'VoolithCharizard'),(3,'PhotobeanCancute'),(4,'VidooSlamander'),(5,'PhotobeanAIO'),(6,'Skipfire'),(7,'Browseblab'),(8,'Skinte'),(9,'Skimia'),(10,'Devshare'),(13,'THANHXK'),(14,'thanhxk2003');
/*!40000 ALTER TABLE `lop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sinhvien` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tensinhvien` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `idlop` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idlop_idx` (`idlop`),
  CONSTRAINT `idlop` FOREIGN KEY (`idlop`) REFERENCES `lop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sinhvien`
--

LOCK TABLES `sinhvien` WRITE;
/*!40000 ALTER TABLE `sinhvien` DISABLE KEYS */;
INSERT INTO `sinhvien` VALUES (1,'Jarrid Findlay','jfindlay0@bloomberg.com','2003-11-17',3),(2,'Hyatt Andrzejowski','handrzejowski1@unblog.fr','2003-09-29',10),(3,'Nikki Paling','npaling2@rambler.ru','2003-02-18',7),(4,'Georgetta Pudding','gpudding3@sakura.ne.jp','2003-03-02',2),(5,'Carla Peever','cpeever4@paginegialle.it','2003-04-13',2),(6,'Ad Eastwell','aeastwell5@themeforest.net','2003-09-07',8),(7,'Cyndy Lindner','clindner6@theglobeandmail.com','2003-02-18',5),(8,'Aaren Sedgman','asedgman7@icio.us','2003-03-11',8),(9,'Lishe Whittlesea','lwhittlesea8@zimbio.com','2003-09-05',4),(10,'Koral Flanner','kflanner9@4shared.com','2003-06-01',3),(20,'Lê Quang Thanh học dốt','thanhxk2003@gmail.com','2003-09-03',13);
/*!40000 ALTER TABLE `sinhvien` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-08 16:33:38
