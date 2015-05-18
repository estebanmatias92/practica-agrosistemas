CREATE DATABASE  IF NOT EXISTS `seeds` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `seeds`;
-- MySQL dump 10.13  Distrib 5.5.28, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: seeds
-- ------------------------------------------------------
-- Server version	5.5.28-0ubuntu0.12.10.2

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
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `description` varchar(45) NOT NULL COMMENT 'Descripción del MAterial',
  `cropID` int(11) NOT NULL COMMENT 'Identificador del Cutivo al que pertenece el Material',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Baja Logica',
  PRIMARY KEY (`ID`),
  KEY `fk_material_1` (`cropID`),
  CONSTRAINT `fk_material_1` FOREIGN KEY (`cropID`) REFERENCES `crop` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='Materiales';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` VALUES (13,'M33',1,1),(14,'M5Y',1,1),(15,'MRR3',1,1),(16,'GW22',2,1),(17,'GTRE',2,1),(18,'GTRE1',2,1),(19,'G34E',2,1),(20,'G13',2,1),(21,'S45',3,1),(22,'S45B',3,1),(23,'CAN1',4,1),(24,'CAN3',4,1),(25,'COL333',5,1);
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crop`
--

DROP TABLE IF EXISTS `crop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crop` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `description` varchar(45) NOT NULL COMMENT 'Nombre del Cultivo',
  `fatContent` decimal(10,2) NOT NULL COMMENT 'Materia Grasa',
  `plantingDate` date NOT NULL COMMENT 'Fecha de Siembra',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Bit para baja la logica\n',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Cultivos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crop`
--

LOCK TABLES `crop` WRITE;
/*!40000 ALTER TABLE `crop` DISABLE KEYS */;
INSERT INTO `crop` VALUES (1,'Maiz',14.50,'2012-03-09',1),(2,'Girasol',39.25,'2012-06-25',1),(3,'Sorgo',22.90,'2012-05-15',1),(4,'Canola',28.79,'2012-09-10',1),(5,'Colsa',25.66,'2021-02-01',1);
/*!40000 ALTER TABLE `crop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'seeds'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-12-12  9:47:18




