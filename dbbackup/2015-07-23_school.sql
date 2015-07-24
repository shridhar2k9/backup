-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `example1`
--

DROP TABLE IF EXISTS `example1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `example1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `native` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `example1`
--

LOCK TABLES `example1` WRITE;
/*!40000 ALTER TABLE `example1` DISABLE KEYS */;
INSERT INTO `example1` VALUES (1,'shri',25,'theni'),(2,'raj',23,'hosur'),(3,'ran',23,'hosur'),(4,'vinoth',23,'hosur'),(5,'sek',23,'hosur'),(6,'thin',23,'madurai');
/*!40000 ALTER TABLE `example1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `example2`
--

DROP TABLE IF EXISTS `example2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `example2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `section` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `example2`
--

LOCK TABLES `example2` WRITE;
/*!40000 ALTER TABLE `example2` DISABLE KEYS */;
/*!40000 ALTER TABLE `example2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `name` varchar(10) NOT NULL,
  `studentid` varchar(10) NOT NULL,
  `mark` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('shridhar','101','50'),('raj','102','70'),('ranjith','103','70'),('thinesh','104','60'),('sekar','105','80'),('vignesh','106','75'),('vinoth','107','55');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tksmschool`
--

DROP TABLE IF EXISTS `tksmschool`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tksmschool` (
  `school_name` varchar(50) NOT NULL,
  `school_id` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `principal_name` varchar(20) NOT NULL,
  KEY `school` (`school_id`),
  KEY `school_id` (`school_id`),
  FULLTEXT KEY `school_name` (`school_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tksmschool`
--

LOCK TABLES `tksmschool` WRITE;
/*!40000 ALTER TABLE `tksmschool` DISABLE KEYS */;
INSERT INTO `tksmschool` VALUES ('Theni Kammavar sangam school','1','theni','dinesh'),('gkmschool','2','bodi','dinesh'),('Theni Kammavar sangam school','1','theni','dinesh'),('gkmschool','2','bodi','dinesh'),('adhiyamaan school','3','hosur','dinesh'),('stjonesschool','4','hosur','dinesh'),('adhiyamaan school','3','hosur','dinesh'),('stjonesschool','4','hosur','dinesh'),('abcschool','5','chennai','dinesh'),('xyzschool','6','madurai','dinesh'),('abcschool','5','chennai','dinesh'),('xyzschool','6','madurai','dinesh');
/*!40000 ALTER TABLE `tksmschool` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'school'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-23 10:55:48
