-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dashboards
-- ------------------------------------------------------
-- Server version	5.5.41-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(225) DEFAULT NULL,
  `poster_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_messages_users_idx` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (2,'Robbie is a king',11,'2015-07-22 11:25:40','2015-07-22 11:25:40',12),(3,'Hey please move',11,'2015-07-22 11:27:09','2015-07-22 11:27:09',14),(4,'Be careful!',11,'2015-07-22 11:27:40','2015-07-22 11:27:40',14),(5,'Thanks for teaching us something today.',11,'2015-07-22 11:28:29','2015-07-22 11:28:29',13),(6,'Hello friend',11,'2015-07-22 11:30:06','2015-07-22 11:30:06',12),(7,'Hello brother',11,'2015-07-22 11:30:54','2015-07-22 11:30:54',12),(8,'Merry Christmas',11,'2015-07-22 11:31:58','2015-07-22 11:31:58',14),(9,'Robert!',11,'2015-07-22 11:44:37','2015-07-22 11:44:37',12),(10,'i\'m leaving a messeage to myself...',11,'2015-07-22 11:48:30','2015-07-22 11:48:30',11),(11,'Great demonstration today!',11,'2015-07-22 11:49:31','2015-07-22 11:49:31',13),(12,'Thank you for the lecture',11,'2015-07-22 11:50:46','2015-07-22 11:50:46',13),(13,'Howdy partnah',11,'2015-07-22 14:30:47','2015-07-22 14:30:47',5),(14,'Top o the mornin to ya',11,'2015-07-22 14:31:55','2015-07-22 14:31:55',3);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-22 18:25:01
