CREATE DATABASE  IF NOT EXISTS `ogs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ogs`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: ogs
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Username_UNIQUE` (`Username`),
  UNIQUE KEY `UserID_UNIQUE` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (1,'Paul Tirona','paul','password','POL_Tirona@yahoo.com'),(2,'Chris Siochi','siochi','cram','siochi@yahoo.com'),(3,'paolo soriano','paolo','gba','paolo@yahoo.com'),(4,'MerkSanchez','merk','frog','merk@gmail.com');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gameinfo`
--

DROP TABLE IF EXISTS `gameinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gameinfo` (
  `GameID` int(11) NOT NULL,
  `GameName` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `GameKey` varchar(50) NOT NULL,
  PRIMARY KEY (`GameID`),
  UNIQUE KEY `TourName_UNIQUE` (`GameName`),
  UNIQUE KEY `TourID_UNIQUE` (`GameID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gameinfo`
--

LOCK TABLES `gameinfo` WRITE;
/*!40000 ALTER TABLE `gameinfo` DISABLE KEYS */;
INSERT INTO `gameinfo` VALUES (1,'Overwatch',2500,'69F2C92DAAC59C91'),(2,'Hearthstone',1500,'8EF55B3D6A968A29'),(3,'Starcraft',2000,'4517C8F1D3B9CD64'),(4,'For Honor',2300,'73B455B73251BA87'),(5,'Shadow of Mordor',2500,'37C7BDCFC4CA42E8');
/*!40000 ALTER TABLE `gameinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `TransacID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `GameName` varchar(45) NOT NULL,
  `TransacDate` date NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`TransacID`),
  UNIQUE KEY `TransacID_UNIQUE` (`TransacID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` VALUES (1,1,'Overwatch','2017-04-04',2500),(2,1,'Overwatch','2017-04-04',2500),(3,2,'Overwatch','2017-04-04',2500),(4,3,'Overwatch','2017-04-04',2500),(5,4,'Overwatch','2017-04-04',2500);
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-04  8:20:16
