-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: btth2
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
-- Table structure for table `baiviet`
--

DROP TABLE IF EXISTS `baiviet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `baiviet` (
  `ma_bviet` int unsigned NOT NULL AUTO_INCREMENT,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int unsigned NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text,
  `ma_tgia` int unsigned NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hinhanh` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `ma_tloai_idx` (`ma_tloai`),
  KEY `ma_tgia_idx` (`ma_tgia`),
  CONSTRAINT `ma_tgia` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`),
  CONSTRAINT `ma_tloai` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`)
) ENGINE=InnoDB AUTO_INCREMENT=1138 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baiviet`
--

LOCK TABLES `baiviet` WRITE;
/*!40000 ALTER TABLE `baiviet` DISABLE KEYS */;
INSERT INTO `baiviet` VALUES (92,'Có chăng','Ai lên xứ hoa đào',4,'php khó',NULL,100,'2023-09-19 17:44:57',NULL),(93,'Tình anh','Anh cho em mùa xuân',4,'tôi học dốt',NULL,101,'2023-09-19 17:44:57',NULL),(94,'Tình khúc xưa','Áo anh sứt chỉ đường tà',2,'tomtat1',NULL,100,'2023-09-19 17:44:57',NULL),(95,'Chàng ngự lâm cầm cây bút','Áo lụa Hà Đông',4,'tôi học dốt',NULL,108,'2023-09-19 17:44:57',NULL),(96,'Có chăng','Bà mẹ Gio Linh',4,'php khó',NULL,100,'2023-09-19 17:44:57',NULL),(97,'Tình khúc xưa','Bạc phận',4,'php dễ',NULL,102,'2023-09-19 17:44:57',NULL),(98,'Có chăng','Bad Boy',1,'tôi học dốt',NULL,107,'2023-09-19 17:44:57',NULL),(99,'Nhạc sĩ python','Bài ca hy vọng',3,'php khó',NULL,107,'2023-09-19 17:44:57',NULL),(100,'Tình em','Bài ca không quên',3,'tomtat2',NULL,101,'2023-09-19 17:44:57',NULL),(101,'Nhạc sĩ python','Bài ca Tết cho em',2,'tomtat2',NULL,104,'2023-09-19 17:44:57',NULL),(102,'Tình khúc xưa','Bài ca Trường Sơn',4,'php dễ',NULL,103,'2023-09-19 17:44:57',NULL),(103,'Có chăng','Bài ca đất phương Nam',1,'tomtat2',NULL,106,'2023-09-19 17:44:57',NULL),(104,'Nhạc sĩ python','Bên cầu biên giới',3,'tomtat1',NULL,105,'2023-09-19 17:44:57',NULL),(105,'Nỗi nhớ một thời','Đi tìm lời ru nữ thần mặt trời',1,'tôi học dốt',NULL,109,'2023-09-19 17:44:57',NULL),(106,'Chàng ngự lâm cầm cây bút','Đôi chân trần',2,'php dễ',NULL,102,'2023-09-19 17:44:57',NULL),(107,'Nhạc sĩ python','Kìa con bướm vàng',3,'php dễ',NULL,111,'2023-09-19 17:44:57',NULL),(108,'Chàng ngự lâm cầm cây bút','Ly rượu mừng',2,'tomtat1',NULL,101,'2023-09-19 17:44:57',NULL),(109,'Có chăng','Ngồi tựa song đào',4,'tomtat1',NULL,100,'2023-09-19 17:44:57',NULL),(110,'Tình em','Nửa hồn thương đau',4,'tomtat2',NULL,104,'2023-09-19 17:44:57',NULL),(111,'Nhạc sĩ python','Quảng Bình quê ta ơi',4,'php khó',NULL,107,'2023-09-19 17:44:57',NULL),(112,'Chàng ngự lâm cầm cây bút','Tôi là người thợ lò',4,'không biết gì',NULL,100,'2023-09-19 17:44:57',NULL),(113,'Tình anh','Bài không tên',2,'tomtat1',NULL,101,'2023-09-19 17:44:57',NULL),(114,'Chàng ngự lâm cầm cây bút','Bài thánh ca buồn',4,'tomtat2',NULL,101,'2023-09-19 17:44:57',NULL),(115,'Chàng ngự lâm cầm cây bút','Bao giờ lấy chồng?',3,'tôi học dốt',NULL,105,'2023-09-19 17:44:57',NULL),(116,'Có chăng','Bậu ơi đừng khóc',4,'tôi học dốt',NULL,111,'2023-09-19 17:44:57',NULL),(117,'Tình em','Bèo dạt mây trôi',2,'tôi học dốt',NULL,102,'2023-09-19 17:44:57',NULL),(118,'Tình anh','Bên trên tầng lầu',2,'tôi học dốt',NULL,100,'2023-09-19 17:44:57',NULL),(119,'Nỗi nhớ một thời','Bến xuân',3,'tôi học dốt',NULL,108,'2023-09-19 17:44:57',NULL),(120,'Tình khúc xưa','Biển hát chiều nay',2,'tomtat2',NULL,101,'2023-09-19 17:44:57',NULL),(121,'Tình em','Biển nhớ',4,'php khó',NULL,107,'2023-09-19 17:44:57',NULL),(122,'Nhạc sĩ python','Bóng cây Kơ-nia',2,'php dễ',NULL,102,'2023-09-19 17:44:57',NULL),(123,'Tình khúc xưa','Bonjour Vietnam',1,'không biết gì',NULL,103,'2023-09-19 17:44:57',NULL),(124,'Có chăng','Bống bống bang bang',2,'tomtat1',NULL,104,'2023-09-19 17:44:57',NULL),(125,'Tình khúc xưa','Bông hồng cài áo',4,'tomtat2',NULL,101,'2023-09-19 17:44:57',NULL),(126,'Có chăng','Bùa yêu',1,'tomtat1',NULL,101,'2023-09-19 17:44:57',NULL),(127,'Nhạc sĩ python','Buông đôi tay nhau ra',4,'không biết gì',NULL,110,'2023-09-19 17:44:57',NULL),(128,'Tình anh','Bước chân trên dải Trường Sơn',4,'tôi học dốt',NULL,101,'2023-09-19 17:44:57',NULL),(129,'Chàng ngự lâm cầm cây bút','Ca dao em và tôi',4,'không biết gì',NULL,109,'2023-09-19 17:44:57',NULL),(130,'Chàng ngự lâm cầm cây bút','Căn phòng',2,'không biết gì',NULL,110,'2023-09-19 17:44:57',NULL),(131,'Chàng ngự lâm cầm cây bút','Câu chuyện đầu năm',3,'php dễ',NULL,111,'2023-09-19 17:44:57',NULL),(132,'Nhạc sĩ python','Câu hò bên bờ Hiền Lương',2,'php dễ',NULL,109,'2023-09-19 17:44:57',NULL),(133,'Tình khúc xưa','Cây đàn sinh viên',2,'php khó',NULL,108,'2023-09-19 17:44:57',NULL),(134,'Nhạc sĩ python','Chào em cô gái Lam Hồng',3,'php khó',NULL,107,'2023-09-19 17:44:57',NULL),(135,'Tình anh','Chào sông Mã anh hùng',3,'tomtat1',NULL,112,'2023-09-19 17:44:57',NULL),(136,'Có chăng','Chạy ngay đi',2,'tôi học dốt',NULL,111,'2023-09-19 17:44:57',NULL);
/*!40000 ALTER TABLE `baiviet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `permissions` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin',''),(2,'editor',''),(3,'viewer','');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tacgia`
--

DROP TABLE IF EXISTS `tacgia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tacgia` (
  `ma_tgia` int unsigned NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tacgia`
--

LOCK TABLES `tacgia` WRITE;
/*!40000 ALTER TABLE `tacgia` DISABLE KEYS */;
INSERT INTO `tacgia` VALUES (100,'Trần Quảng Nam',NULL),(101,'Trịnh Công Sơn',NULL),(102,'Phạm Duy',NULL),(103,'Trịnh Nam Sơn',NULL),(104,'K-ICM ft. Jack',NULL),(105,'Đông Nhi',NULL),(106,'Trần Tiến',NULL),(107,'Phạm Quỳnh Anh',NULL),(108,'365daband',NULL),(109,'Miu Lê',NULL),(110,'Sơn Tùng M-TP',NULL),(111,'Trần Thiện Thanh',NULL),(112,'Nhacvietplus',NULL);
/*!40000 ALTER TABLE `tacgia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theloai`
--

DROP TABLE IF EXISTS `theloai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `theloai` (
  `ma_tloai` int unsigned NOT NULL,
  `ten_tloai` varchar(50) NOT NULL,
  `SLBaiViet` int DEFAULT '0',
  PRIMARY KEY (`ma_tloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theloai`
--

LOCK TABLES `theloai` WRITE;
/*!40000 ALTER TABLE `theloai` DISABLE KEYS */;
INSERT INTO `theloai` VALUES (1,'Nhạc trữ tình',5),(2,'Cách mạng',14),(3,'Giới trẻ',9),(4,'Cảm hứng',17);
/*!40000 ALTER TABLE `theloai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `state` varchar(45) DEFAULT 'inactive',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `roles_idx` (`role`),
  CONSTRAINT `roles` FOREIGN KEY (`role`) REFERENCES `roles` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','$2y$10$GUzMjjzDjpPLGMo2hl7hceUKWyGf0jyePJlWkcEcopW.tagGhGBYC','thanhxk2003@gmail.com','admin','active'),(2,'2151163724','$2y$10$I3d5bPGjmbPXTHKD3x.WXu4ZgC9J6WjNS8z6mgaVjzp8oDbmoqqMW','thanhxk3@gmail.com','admin','inactive'),(3,'123123','$2y$10$NxFrFxEEktSy441klnTtwuQJQPZwaXnIrOUMeiqlltmNUZXK/mZpC','thanhxasdfas@gmail.com','admin','inactive'),(4,'thanhxk2003','$2y$10$8oDU09j.nyDtm0BCR.kdB.2HD3eCM7YNfJjGM6BcvNPoA.MGRQypi','thanh7bss@gmail.com','admin','active'),(5,'tung4bcc','$2y$10$c2piEK093AXonM5J6xLor.YKgrtVUOHw77ZmTkSjM3C3OxS4gcfYK','thanh7bzz@gmail.com','editor','active');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-08 16:32:57
