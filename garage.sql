-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: garage
-- ------------------------------------------------------
-- Server version	5.5.47-0+deb8u1

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
-- Table structure for table `gas`
--

DROP TABLE IF EXISTS `gas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gas` (
  `gas_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`gas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gas`
--

LOCK TABLES `gas` WRITE;
/*!40000 ALTER TABLE `gas` DISABLE KEYS */;
INSERT INTO `gas` VALUES (1,'gasolina'),(2,'diesel'),(3,'gasoil');
/*!40000 ALTER TABLE `gas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mech_team`
--

DROP TABLE IF EXISTS `mech_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mech_team` (
  `id_mech_team` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `category` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_mech_team`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mech_team`
--

LOCK TABLES `mech_team` WRITE;
/*!40000 ALTER TABLE `mech_team` DISABLE KEYS */;
INSERT INTO `mech_team` VALUES (1,'werwee','werwerwer'),(2,'werwee','werwerwer'),(3,'equiep','werwer'),(4,'equiep','werwer'),(5,'pp','pp');
/*!40000 ALTER TABLE `mech_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mechanic`
--

DROP TABLE IF EXISTS `mechanic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mechanic` (
  `id_mechanic` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `salary` decimal(6,2) NOT NULL,
  `id_mech_team` int(11) NOT NULL,
  PRIMARY KEY (`id_mechanic`),
  KEY `mechTeam` (`id_mech_team`),
  KEY `id_mech_team` (`id_mech_team`),
  CONSTRAINT `mechanic_ibfk_1` FOREIGN KEY (`id_mech_team`) REFERENCES `mech_team` (`id_mech_team`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mechanic`
--

LOCK TABLES `mechanic` WRITE;
/*!40000 ALTER TABLE `mechanic` DISABLE KEYS */;
INSERT INTO `mechanic` VALUES (1,'mariano',9999.00,1);
/*!40000 ALTER TABLE `mechanic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opinion`
--

DROP TABLE IF EXISTS `opinion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opinion` (
  `opinion_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` char(25) NOT NULL,
  `opinion_text` char(250) NOT NULL,
  `opinion_date` date NOT NULL,
  PRIMARY KEY (`opinion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opinion`
--

LOCK TABLES `opinion` WRITE;
/*!40000 ALTER TABLE `opinion` DISABLE KEYS */;
/*!40000 ALTER TABLE `opinion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair`
--

DROP TABLE IF EXISTS `repair`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair` (
  `id_repair` int(11) NOT NULL AUTO_INCREMENT,
  `id_vehicle` int(11) NOT NULL,
  `inDate` date NOT NULL,
  `outDate` date NOT NULL,
  `hours` int(11) NOT NULL,
  `id_mech_team` int(11) NOT NULL,
  `id_repair_type` int(11) NOT NULL,
  PRIMARY KEY (`id_repair`),
  KEY `id_vehicle` (`id_vehicle`),
  KEY `id_mech_team` (`id_mech_team`),
  KEY `id_repair_type` (`id_repair_type`),
  CONSTRAINT `repair_ibfk_1` FOREIGN KEY (`id_vehicle`) REFERENCES `vehicle` (`id_vehicle`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `repair_ibfk_2` FOREIGN KEY (`id_mech_team`) REFERENCES `mech_team` (`id_mech_team`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `repair_ibfk_3` FOREIGN KEY (`id_repair_type`) REFERENCES `repair_type` (`id_repair_type`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair`
--

LOCK TABLES `repair` WRITE;
/*!40000 ALTER TABLE `repair` DISABLE KEYS */;
/*!40000 ALTER TABLE `repair` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_type`
--

DROP TABLE IF EXISTS `repair_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_type` (
  `id_repair_type` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `cost` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id_repair_type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_type`
--

LOCK TABLES `repair_type` WRITE;
/*!40000 ALTER TABLE `repair_type` DISABLE KEYS */;
INSERT INTO `repair_type` VALUES (1,'werwer',123.00),(2,'prueba',22.00);
/*!40000 ALTER TABLE `repair_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `login` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `password` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (0,'admin','1234',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle` (
  `id_vehicle` int(11) NOT NULL AUTO_INCREMENT,
  `plate` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `brand` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `model` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `gas_type` int(11) NOT NULL,
  `nif` char(9) COLLATE utf8_spanish2_ci NOT NULL,
  `name` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `surname` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_vehicle`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle`
--

LOCK TABLES `vehicle` WRITE;
/*!40000 ALTER TABLE `vehicle` DISABLE KEYS */;
INSERT INTO `vehicle` VALUES (17,'1234','Fiat','Multipla',1,'123123123','Jordi','Puig'),(18,'9876','Seat','Panda',2,'999999999','Pablo','Couto'),(19,'8756','Volskwague','Camper',3,'777888444','JesÃºs','Camacho'),(20,'666666','Harley','Satans moto',1,'666666666','Satan','Hell'),(21,'666666','Maldito','model',1,'666666666','Name','Surname'),(22,'666666','change','change',1,'666666666','change','change'),(23,'666666','kkkkkkkk','kkkkkkkk',1,'666666666','kkkkkkkk','kkkkkkkk'),(24,'666666','que','esta',1,'666666666','pasando','Surname'),(25,'666666','werewr','werw',1,'666666666','werwer','werwer'),(26,'666666','QQQQQQQQ','QQQQQQQQ',1,'999999999','QQQQQQ','QQQQQQ'),(27,'666666','TTTTTT','TTTTTT',1,'666666666','TTTTTT','TTTTTT'),(28,'666666','asdfasdf','asdfasdf',1,'666666666','asdfasdf','asdfasdf'),(29,'666666','asdfasdf','asdfasdf',1,'666666666','asdfasdf','asdfasdf');
/*!40000 ALTER TABLE `vehicle` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-20 20:37:11
