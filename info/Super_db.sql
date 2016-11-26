-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: comp353
-- ------------------------------------------------------
-- Server version	5.7.15-log

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
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `driver` (
  `licenceID` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `score` float DEFAULT NULL,
  `vehiculeNum` varchar(45) NOT NULL,
  `numRides` int(11) NOT NULL,
  PRIMARY KEY (`licenceID`),
  KEY `username_idx` (`user_email`),
  CONSTRAINT `username` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `driver`
--

LOCK TABLES `driver` WRITE;
/*!40000 ALTER TABLE `driver` DISABLE KEYS */;
INSERT INTO `driver` VALUES ('1','tom',NULL,'1111',0),('1234','a_nunezz',NULL,'12345',0);
/*!40000 ALTER TABLE `driver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitations`
--

DROP TABLE IF EXISTS `invitations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invitations` (
  `email` varchar(30) NOT NULL,
  `to_email` varchar(30) NOT NULL,
  `code` varchar(45) NOT NULL,
  PRIMARY KEY (`email`,`to_email`),
  CONSTRAINT `from` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitations`
--

LOCK TABLES `invitations` WRITE;
/*!40000 ALTER TABLE `invitations` DISABLE KEYS */;
/*!40000 ALTER TABLE `invitations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passager`
--

DROP TABLE IF EXISTS `passager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passager` (
  `passager_email` varchar(30) NOT NULL,
  `need` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`passager_email`),
  CONSTRAINT `usernameee` FOREIGN KEY (`passager_email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passager`
--

LOCK TABLES `passager` WRITE;
/*!40000 ALTER TABLE `passager` DISABLE KEYS */;
/*!40000 ALTER TABLE `passager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personalinfo`
--

DROP TABLE IF EXISTS `personalinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personalinfo` (
  `user_email` varchar(30) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`user_email`),
  CONSTRAINT `usernamee` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personalinfo`
--

LOCK TABLES `personalinfo` WRITE;
/*!40000 ALTER TABLE `personalinfo` DISABLE KEYS */;
INSERT INTO `personalinfo` VALUES ('a_nunezz','Andres','Nunez','1828 Joseph-Prévost','Laval','1992-12-09'),('tom','Tomas','Nunnez','123 funny road','funnyville','1993-03-03');
/*!40000 ALTER TABLE `personalinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ride`
--

DROP TABLE IF EXISTS `ride`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ride` (
  `rideID` int(11) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `startTime` time(1) NOT NULL,
  `startLocation` varchar(7) NOT NULL,
  `endLocation` varchar(7) NOT NULL,
  `isPeriodic` varchar(5) NOT NULL,
  `date` date DEFAULT NULL,
  `daysOfWeek` varchar(15) DEFAULT NULL,
  `licenceID` varchar(30) NOT NULL,
  PRIMARY KEY (`rideID`),
  KEY `driverLicence_idx` (`licenceID`),
  CONSTRAINT `licenceID` FOREIGN KEY (`licenceID`) REFERENCES `driver` (`licenceID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ride`
--

LOCK TABLES `ride` WRITE;
/*!40000 ALTER TABLE `ride` DISABLE KEYS */;
INSERT INTO `ride` VALUES (1,22.5,'12:12:12.0','H7M2X5','H7M2X5','false',NULL,NULL,'1234'),(2,10,'12:12:13.0','H7M2X5','H7M2X5','false',NULL,'W','1234'),(3,10,'12:12:13.0','H7M2X5','H7M2X5','false',NULL,'W','1234');
/*!40000 ALTER TABLE `ride` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `takes_ride`
--

DROP TABLE IF EXISTS `takes_ride`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `takes_ride` (
  `passager_email` varchar(30) NOT NULL,
  `ride_id` int(11) NOT NULL,
  PRIMARY KEY (`passager_email`),
  KEY `ride_id_idx` (`ride_id`),
  CONSTRAINT `passager` FOREIGN KEY (`passager_email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ride_id` FOREIGN KEY (`ride_id`) REFERENCES `ride` (`rideID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `takes_ride`
--

LOCK TABLES `takes_ride` WRITE;
/*!40000 ALTER TABLE `takes_ride` DISABLE KEYS */;
/*!40000 ALTER TABLE `takes_ride` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `isAdmin` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `balance` float NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('a_nunezz','$2y$10$6x1pw2unBT7fuB/YYSw6B.MvbsCgEHue/KadTaouR9M3fV6x.ngz.','true','active',0),('tom','$2y$10$juFBCfWpcYaFXB.L7/0yQ.OHQQkvcPvGVXEklTjIj5JnUQst2bJKm','false','active',0);
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

-- Dump completed on 2016-11-26 15:37:53
