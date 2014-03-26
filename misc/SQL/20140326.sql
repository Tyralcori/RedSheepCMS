CREATE DATABASE  IF NOT EXISTS `redsheepstudios` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `redsheepstudios`;
-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (i686)
--
-- Host: 127.0.0.1    Database: redsheepstudios
-- ------------------------------------------------------
-- Server version	5.5.31-0+wheezy1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `isActive` int(1) DEFAULT NULL,
  `roleID` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Demo','Demo','Demo','demo@yourself.com','397dc41eba3aa1e75a45b620263a18686070bdc93b6a95754a252feab657d635',1,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(500) NOT NULL,
  `last_active` int(50) DEFAULT NULL,
  `contents` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('531ed65b73de06-02237218',1394551377,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk0NTUxMzc3O30='),('532002f20aaca0-64770178',1394635859,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk0NjM1ODU5O30='),('532a91bbda59e6-40914160',1395330635,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1MzMwNjM1O30='),('532bf76db2ed77-13761546',1395413211,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1NDEzMjExO30='),('53302c47546795-61342884',1395666205,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1NjY2MjA1O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo5OiJ0eXJhbGNvcmkiO3M6OToiZmlyc3RuYW1lIjtzOjQ6IkFsZXgiO3M6ODoibGFzdG5hbWUiO3M6MjoiQ3oiO3M6NToiZW1haWwiO3M6MjY6ImEuY3ppY2hlbHNraUBlbGl0ZWNvZGVyLmV1IjtzOjg6InBhc3N3b3JkIjtzOjY0OiI2ODQxNDIwODIxM2I5YTE3NDEzZmE2M2U1ZWU3ZmRiNDU5OWI1ZTVlODFhNDgzMGQwMGQwYmVjNDc2OTYxZTVhIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53319ad3484216-22081673',1395759981,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1NzU5OTgxO3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo5OiJ0eXJhbGNvcmkiO3M6OToiZmlyc3RuYW1lIjtzOjQ6IkFsZXgiO3M6ODoibGFzdG5hbWUiO3M6MjoiQ3oiO3M6NToiZW1haWwiO3M6MjY6ImEuY3ppY2hlbHNraUBlbGl0ZWNvZGVyLmV1IjtzOjg6InBhc3N3b3JkIjtzOjY0OiI2ODQxNDIwODIxM2I5YTE3NDEzZmE2M2U1ZWU3ZmRiNDU5OWI1ZTVlODFhNDgzMGQwMGQwYmVjNDc2OTYxZTVhIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53327a77840f09-34140624',1395821338,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1ODIxMzM4O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30=');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crons`
--

DROP TABLE IF EXISTS `crons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `executePluginID` int(5) DEFAULT NULL,
  `executeFunction` varchar(255) DEFAULT NULL,
  `lastStart` datetime DEFAULT NULL,
  `lastEnd` datetime DEFAULT NULL,
  `interval` varchar(45) DEFAULT NULL,
  `isActive` int(1) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crons`
--

LOCK TABLES `crons` WRITE;
/*!40000 ALTER TABLE `crons` DISABLE KEYS */;
INSERT INTO `crons` VALUES (1,'SystemMonitor',3,'monitor','2014-03-26 01:41:44','2014-03-26 01:41:44','10',1,'Monitor NOW');
/*!40000 ALTER TABLE `crons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staticsites`
--

DROP TABLE IF EXISTS `staticsites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staticsites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `text` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staticsites`
--

LOCK TABLES `staticsites` WRITE;
/*!40000 ALTER TABLE `staticsites` DISABLE KEYS */;
INSERT INTO `staticsites` VALUES (1,'home',' <label class=\"redsheepHeadline\">Welcome</label>\n<hr/>\n<p class=\"redsheepDescription\">\n    HI! This site is currently on progress. Please bear with me.\n</p>'),(2,'download overview','<label class=\"redsheepHeadline\">DOWNLOADS</label>\n<hr/>\n<p class=\"redsheepDescription\">\n    You can find our available versions on our <a href=\"https://github.com/Tyralcori/RedSheepCMS/\" target=\"_blank\" title=\"GITHUB Repository\">GITHUB</a> repository. Feel free to fork it. Thanks for so much response!\n</p>'),(3,'documentation',NULL),(4,'plugins',NULL),(5,'roadmap',NULL),(6,'community',NULL),(7,'imprint',NULL),(8,'team','<label class=\"redsheepHeadline\">TEAM</label>\n<hr/>\n<p class=\"redsheepDescription\">\n<div class=\"row\">\n    <div class=\"col-md-2 col-md-offset-2 text-center\">\n        <div class=\"service-item\">\n            <img data-src=\"holder.js/140x140\" class=\"img-circle\" alt=\"140x140\" src=\"https://scontent-b-fra.xx.fbcdn.net/hphotos-prn1/t1.0-9/17496_10201233496190252_1385687456_n.jpg\" style=\"width: 140px; height: 140px;\">\n            <h4>Alexander Czichelski alias \"ScarecrowLambda\"</h4>\n            <p>Lead Software Developer</p>\n            <p></p>\n        </div>\n    </div>           \n    <div class=\"col-md-2 col-md-offset-2 text-center\">\n        <blockquote>Currently i did this project by my own without any help. If you want to help or contribute, write me!</blockquote>\n    </div>\n</div>\n</p>'),(9,'news',NULL),(10,'contact',NULL),(11,'35345wr','HALLO UND WILLKOMMEN');
/*!40000 ALTER TABLE `staticsites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plugins`
--

DROP TABLE IF EXISTS `plugins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plugins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT 'PluginName',
  `description` varchar(2000) NOT NULL DEFAULT 'none desc given',
  `active` int(1) NOT NULL DEFAULT '0',
  `added` datetime DEFAULT NULL,
  `installedOn` datetime DEFAULT NULL,
  `version` varchar(45) NOT NULL DEFAULT '0.0.0',
  `publisher` varchar(100) NOT NULL DEFAULT 'RedSheepStudios',
  `section` varchar(45) DEFAULT NULL,
  `publisherHomepage` varchar(255) DEFAULT NULL,
  `space` varchar(45) NOT NULL DEFAULT 'frontend',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plugins`
--

LOCK TABLES `plugins` WRITE;
/*!40000 ALTER TABLE `plugins` DISABLE KEYS */;
INSERT INTO `plugins` VALUES (1,'RedSheepCore','RedSheep Core Plugin',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','0.9.2','RedSheep Studios','Core','http://redsheepstudios.com/','frontend'),(2,'Test','Testplugin',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','0.6.5','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(3,'RedSheepMonitor','RedSheep Monitor Plugin',0,NULL,NULL,'0.4.3','RedSheep Studios','Core','http://redsheepstudios.com/','frontend');
/*!40000 ALTER TABLE `plugins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viewports`
--

DROP TABLE IF EXISTS `viewports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viewports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `typeID` int(10) DEFAULT NULL,
  `isActive` int(1) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewports`
--

LOCK TABLES `viewports` WRITE;
/*!40000 ALTER TABLE `viewports` DISABLE KEYS */;
INSERT INTO `viewports` VALUES (1,'home','/','staticsite',1,1,'top'),(2,'download','/download','staticsite',2,1,'top'),(3,'documentation','/documentation','staticsite',3,1,'top'),(4,'plugins','/plugins','staticsite',4,1,'top'),(5,'roadmap','/roadmap','staticsite',5,1,'top'),(6,'community','/community','staticsite',6,1,'top'),(7,'imprint','/imprint','staticsite',7,1,'bottom'),(8,'team','/team','staticsite',8,1,'bottom'),(9,'news','/news','staticsite',9,1,'bottom'),(10,'contact','/contact','staticsite',10,1,'bottom');
/*!40000 ALTER TABLE `viewports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs`
--

LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` VALUES (1,'version','0.4.0'),(2,'template','redsheepstudios'),(3,'baseHost','http://dev.ghost.de/'),(4,'title','default');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventSubscribe` varchar(255) DEFAULT NULL,
  `eventType` varchar(45) DEFAULT NULL,
  `executePluginID` int(5) DEFAULT NULL,
  `executeFunction` varchar(255) DEFAULT NULL,
  `executeType` varchar(45) DEFAULT NULL,
  `level` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'/backend','URI',1,'test','before',2),(2,'/backend','URI',1,'test2','before',1);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-26  9:09:39
