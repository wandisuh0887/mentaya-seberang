-- MySQL dump 10.13  Distrib 8.0.30, for macos12.4 (x86_64)
--
-- Host: localhost    Database: keluarahan_mentaya_db
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` int DEFAULT NULL,
  `seen_count` int NOT NULL DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` int DEFAULT NULL,
  `seen_count` int NOT NULL DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES (4,'sas','It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','<p>asasa</p>','activity/thumbnail/sas_20220916052741.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-09-15 22:27:41'),(5,'coba saja test','sasasas asasasa sasa','<p>sasasas</p><p>asasasa</p><p>asasas</p>','activity/thumbnail/coba-saja-test_20220830123447.jpeg',1,0,'activity','coba-saja-test','2022-08-30 05:34:47','2022-08-30 05:34:47'),(6,'sas','It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-31 02:36:15'),(7,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(8,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(9,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(10,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(11,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(12,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(13,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(14,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(15,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(16,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(17,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(18,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(19,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(20,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(21,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(22,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(23,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(24,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(25,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(26,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(27,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(28,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(29,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(30,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-08-30 04:36:23'),(31,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053049.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-09-15 22:30:49'),(32,'sas','sas','<p>asasa</p>','activity/thumbnail/sas_20220916053007.jpg',1,0,'activity','sas','2022-08-30 04:36:23','2022-09-15 22:30:07'),(33,'Pembuatan KK',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','pembuatan-kk','2022-08-30 07:43:45','2022-08-30 07:51:45'),(34,'Pembuatan KTP',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','pembuatan-ktp','2022-08-30 07:56:28','2022-08-30 07:56:28'),(35,'Pembuatan Dokumen Kelahiran',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','pembuatan-dokumen-kelahiran','2022-08-30 07:57:03','2022-08-30 07:57:03'),(36,'Pengantar Pindah',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','pengantar-pindah','2022-08-30 07:57:28','2022-08-30 07:57:28'),(37,'Pengantar Pindah Datang',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','pengantar-pindah-datang','2022-08-30 07:58:00','2022-08-30 07:58:00'),(38,'Keterangan Untuk Menikah',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','keterangan-untuk-menikah','2022-08-30 07:58:27','2022-08-30 07:58:27'),(39,'File Form Unduh',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','file-form-unduh','2022-08-30 07:59:02','2022-08-30 07:59:02'),(40,'Keterangan Ahli Waris',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','keterangan-ahli-waris','2022-08-30 07:59:33','2022-08-30 07:59:33'),(41,'Pembuatan Dokumen Kematian',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','pembuatan-dokumen-kematian','2022-08-30 08:00:27','2022-08-30 08:00:27'),(42,'Keterangan Tidak Mampu',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','keterangan-tidak-mampu','2022-08-30 08:00:50','2022-08-30 08:00:50'),(43,'SKCK',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','skck','2022-08-30 08:01:09','2022-08-30 08:01:09'),(44,'Rekomendasi Keramaian',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','rekomendasi-keramaian','2022-08-30 08:01:39','2022-08-30 08:01:39'),(45,'Keterangan Domisili',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','keterangan-domisili','2022-08-30 08:03:27','2022-08-30 08:03:27'),(46,'Persetujuan Mendirikan Bangunan',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','persetujuan-mendirikan-bangunan','2022-08-30 08:03:53','2022-08-30 08:03:53'),(47,'Permohonan Pembuatan Ijin UMKM',NULL,'<p>What is Lorem Ipsum?\r\n</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n</p><p>\r\nWhy do we use it?\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n</p><p>\r\n\r\nWhere does it come from?\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>',NULL,1,0,'service','permohonan-pembuatan-ijin-umkm','2022-08-30 08:04:41','2022-08-30 08:04:41');
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'banner/lorem-ipsum_20220916052440.jpg','lorem ipsum','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','https://fontawesome.com/v5/icons/archive?s=solid',0,1,'2022-08-31 02:05:35','2022-09-15 22:24:40'),(2,'banner/sasa_20220831091750.jpeg','Dirgahayu Republik Indonesia Yang ke 77','It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',NULL,1,1,'2022-08-31 02:17:50','2022-08-31 02:31:53');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_files`
--

DROP TABLE IF EXISTS `data_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inputed_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_files`
--

LOCK TABLES `data_files` WRITE;
/*!40000 ALTER TABLE `data_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'s',2),(6,'2022_08_30_161118_create_banners_table',3),(7,'2022_08_31_094614_create_profile_kelurahans_table',4),(8,'2022_09_03_181935_create_activities_table',5),(9,'2022_08_29_095657_create_pages_table',6),(10,'2022_09_04_115630_create_data_files_table',7),(11,'2022_09_14_145535_create_visitors_table',8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Profile Kelurahan',NULL,'<p>sas sasas</p><p>asasasa</p><p>sasasa</p><p>asasa sasa sasdf dg vfdg g fgfdgfdgf</p><p>sasas. dsfdsfdsfds dsfdsfs</p><p><br></p><p>sasasa</p>','pages/file/profile-kelurahan_20220904080358.jpeg','profile','profile-kelurahan','2022-09-04 01:03:50','2022-09-04 03:18:42'),(2,'Profile Kelurahan',NULL,'<p>sasas</p>',NULL,'profile','profile-kelurahan','2022-09-04 03:10:33','2022-09-04 03:15:46'),(3,'Visi Misi',NULL,'<p>sas as\\\\</p><p><br></p><p><br></p><p>sasa</p><p>asasas</p>',NULL,'profile','visi-misi','2022-09-04 03:16:02','2022-09-04 03:17:22'),(4,'Profile Kelurahan',NULL,NULL,'pages/file/profile-kelurahan_20220904102953.jpeg','profile','profile-kelurahan','2022-09-04 03:26:02','2022-09-04 03:29:53'),(5,'Struktur Pemerintahan',NULL,NULL,'pages/file/struktur-pemerintahan_20220904103149.jpeg','profile','struktur-pemerintahan','2022-09-04 03:30:29','2022-09-04 03:31:49'),(6,'Sarana Prasarana',NULL,'<p>test</p><p>sasas</p><p>sasa</p><p>asasasa</p><p>sasa</p>',NULL,'profile','sarana-prasarana','2022-09-04 03:41:08','2022-09-04 03:57:17'),(7,'Bidang Kamtibmas',NULL,'Bidang Kamtibmas',NULL,'pemberdayaan','bidang-kamtibmas','2022-09-04 04:21:08','2022-09-04 04:53:05'),(8,'Bidang Kesehatan',NULL,'Bidang Kesehatan',NULL,'pemberdayaan','bidang-kesehatan','2022-09-04 04:50:40','2022-09-04 04:50:40'),(9,'Bidang Pariwisata',NULL,'Bidang Pariwisata',NULL,'pemberdayaan','bidang-pariwisata','2022-09-04 04:51:08','2022-09-04 04:51:08'),(10,'Bidang Pendidikan',NULL,'Bidang Pendidikan',NULL,'pemberdayaan','bidang-pendidikan','2022-09-04 04:51:28','2022-09-04 04:51:28'),(11,'Bidang Perempuan & Anak',NULL,'Bidang Perempuan &amp; Anak',NULL,'pemberdayaan','bidang-perempuan-anak','2022-09-04 04:51:45','2022-09-04 04:51:45'),(12,'Pembuatan KK',NULL,'Pembuatan KK',NULL,'service','pembuatan-kk','2022-09-04 09:41:03','2022-09-04 09:41:03'),(13,'Pembuatan KTP',NULL,'Pembuatan KTP',NULL,'service','pembuatan-ktp','2022-09-04 10:29:11','2022-09-04 10:29:11'),(14,'Pembuatan Dokumen Kelahiran',NULL,'Pembuatan Dokumen Kelahiran',NULL,'service','pembuatan-dokumen-kelahiran','2022-09-04 10:29:34','2022-09-04 10:29:34'),(15,'Pengantar Pindah Datang',NULL,'Pengantar Pindah Datang',NULL,'service','pengantar-pindah-datang','2022-09-04 10:29:50','2022-09-04 10:29:50'),(16,'Keterangan Untuk Menikah',NULL,'Keterangan Untuk Menikah',NULL,'service','keterangan-untuk-menikah','2022-09-04 10:30:06','2022-09-04 10:30:06'),(17,'File Form Unduh',NULL,'File Form Unduh',NULL,'service','file-form-unduh','2022-09-04 10:30:26','2022-09-04 10:30:26'),(18,'Keterangan Ahli Waris',NULL,'Keterangan Ahli Waris',NULL,'service','keterangan-ahli-waris','2022-09-04 10:30:42','2022-09-04 10:30:42'),(19,'Pembuatan Dokumen Kematian',NULL,'Pembuatan Dok. Kematian',NULL,'service','pembuatan-dokumen-kematian','2022-09-04 10:31:03','2022-09-04 10:31:03'),(20,'Keterangan Tidak Mampu',NULL,'Keterangan Tidak Mampu',NULL,'service','keterangan-tidak-mampu','2022-09-04 10:31:19','2022-09-04 10:31:19'),(21,'SKCK',NULL,'<p>SKCK</p>',NULL,'service','skck','2022-09-04 10:31:34','2022-09-04 10:31:34'),(22,'Rekomendasi Keramaian',NULL,'Rekomendasi Keramaian',NULL,'service','rekomendasi-keramaian','2022-09-04 10:31:56','2022-09-04 10:31:56'),(23,'Keterangan Domisili',NULL,'Keterangan Domisili',NULL,'service','keterangan-domisili','2022-09-04 10:32:11','2022-09-04 10:32:11'),(24,'Persetujuan Mendirikan Bangunan',NULL,'Persetujuan Mendirikan Bangunan',NULL,'service','persetujuan-mendirikan-bangunan','2022-09-04 10:32:39','2022-09-04 10:32:39'),(25,'Pembuatan Ijin UMKM',NULL,'Pembuatan Ijin UMKM',NULL,'service','pembuatan-ijin-umkm','2022-09-04 10:32:56','2022-09-04 10:32:56'),(26,'PKK',NULL,'<p>Ini konten pkk ok sa</p>',NULL,'kelembagaan','pkk','2022-09-07 02:38:56','2022-09-07 02:41:30'),(27,'LPMK',NULL,'<p>ini konten lpmk</p>',NULL,'kelembagaan','lpmk','2022-09-07 02:41:59','2022-09-07 02:41:59'),(28,'UMKM',NULL,'<p>ini konten umkm</p>',NULL,'kelembagaan','umkm','2022-09-07 02:42:19','2022-09-07 02:42:19'),(29,'Karang Taruna',NULL,'<p>Ini konten karang taruna</p>',NULL,'kelembagaan','karang-taruna','2022-09-07 02:42:33','2022-09-07 02:42:33');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_kelurahan`
--

DROP TABLE IF EXISTS `profile_kelurahan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profile_kelurahan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kades` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_kades` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sambutan_kades` text COLLATE utf8mb4_unicode_ci,
  `foto_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_singkat` text COLLATE utf8mb4_unicode_ci,
  `jumlah_penduduk_pria` int NOT NULL DEFAULT '0',
  `jumlah_penduduk_wanita` int NOT NULL DEFAULT '0',
  `jumlah_kk` int NOT NULL DEFAULT '0',
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_operasional` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_kelurahan`
--

LOCK TABLES `profile_kelurahan` WRITE;
/*!40000 ALTER TABLE `profile_kelurahan` DISABLE KEYS */;
INSERT INTO `profile_kelurahan` VALUES (1,'Syamsul Arif','profile/foto-kades_20220916051150.jpg','<p>Assalamu\'alaikum Warahmatullahi Wabarakaatuh,\r\n</p><p>\r\nPengunjung situs web yang terhormat. Pertama-tama kami panjatkan puji syukur atas limpahan rahmat-Nya, sehingga situs web tembalang.semarangkota.go.id ini dapat kami selesaikan dengan baik. Tak lupa kami ucapkan terima kasih kepada Perangkat Kelurahan Tembalang yang sudah bekerja keras untuk menyiapkan data-data untuk melengkapi informasi di situs web tersebut.\r\n</p><p>\r\nSitus web ini sebagai wujud komitmen kami dalam memberikan informasi seluas-seluasnya kepada masyarakat. Pada situs web ini kami isi dengan berita-berita seputar wilayah Kelurahan Tembalang. Tak kalah menariknya, di situs web ini senantiasa kami update info-info terbaru dan penting yang perlu diketahui oleh masyarakat. Oleh karena itu, masyarakat perlu sering melihat situs web ini agar tidak ketinggalan informasi penting khususnya untuk layanan administrasi di Kelurahan Tembalang. Kritik dan saran selalu kami nantikan, agar panyajian informasi di situs web ini dapat memberikan manfaat yang sebesar-besarnya bagi masyarakat.\r\n</p><p>\r\nWassalamu\'alaikum warahmatullahi wabarakaatuh,</p>','profile/foto-kelurahan_20220916052020.jpg','<p>Mentaya Seberang merupakan sebuah kelurahan yang terletak di kecamatan Seranau, Kotawaringin Timur, provinsi Kalimantan Tengah, Indonesia. Kelurahan ini berada di seberang Kota Sampit, dipisahkan oleh Sungai Mentaya selebar 420 m.\r\n</p><p>\r\nMentaya Seberang adalah kelurahan di kecamatan Seranau, Kotawaringin Timur, provinsi Kalimantan Tengah, Indonesia. Kelurahan ini berada di seberang Kota Sampit, dipisahkan oleh Sungai Mentaya selebar 420 m.</p>',150,270,125,'mentaya.seberang@gmail.com','0812345678','Senin - Jumat : 08:00 - 17:00','2022-08-31 03:32:25','2022-09-15 22:20:20');
/*!40000 ALTER TABLE `profile_kelurahan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin','wandi.suhandi@ptrmu.com',NULL,'$2y$10$luvPBvLEiq2D5A2nSgyvNuMNW3iDhwMGvH1ubiRXFMmBnBL3duJ5q',NULL,'1',NULL,NULL,'2022-09-13 06:22:06'),(2,'Mentaya Seberang',NULL,'mentaya.seberang@gmail.com',NULL,'$2y$10$OES/nUsIP/27JKZ6180/f.R.D9brntv3.7dPlPbf8aZnQA66GCRbS',NULL,'1',NULL,'2022-09-07 02:50:54','2022-09-13 06:22:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `visitors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insert_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitors`
--

LOCK TABLES `visitors` WRITE;
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;
INSERT INTO `visitors` VALUES (1,'127.0.0.1','2022-09-13','2022-09-14 08:02:34','2022-09-14 08:02:34'),(2,'127.0.0.1','2022-09-14','2022-09-14 08:08:25','2022-09-14 08:08:25'),(3,'127.0.0.1','2022-09-16','2022-09-15 22:01:37','2022-09-15 22:01:37');
/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-23 14:26:01
