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
INSERT INTO `sessions` VALUES ('532a91bbda59e6-40914160',1395330635,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1MzMwNjM1O30='),('532bf76db2ed77-13761546',1395413211,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1NDEzMjExO30='),('53302c47546795-61342884',1395666205,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1NjY2MjA1O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo5OiJ0eXJhbGNvcmkiO3M6OToiZmlyc3RuYW1lIjtzOjQ6IkFsZXgiO3M6ODoibGFzdG5hbWUiO3M6MjoiQ3oiO3M6NToiZW1haWwiO3M6MjY6ImEuY3ppY2hlbHNraUBlbGl0ZWNvZGVyLmV1IjtzOjg6InBhc3N3b3JkIjtzOjY0OiI2ODQxNDIwODIxM2I5YTE3NDEzZmE2M2U1ZWU3ZmRiNDU5OWI1ZTVlODFhNDgzMGQwMGQwYmVjNDc2OTYxZTVhIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53319ad3484216-22081673',1395759981,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1NzU5OTgxO3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo5OiJ0eXJhbGNvcmkiO3M6OToiZmlyc3RuYW1lIjtzOjQ6IkFsZXgiO3M6ODoibGFzdG5hbWUiO3M6MjoiQ3oiO3M6NToiZW1haWwiO3M6MjY6ImEuY3ppY2hlbHNraUBlbGl0ZWNvZGVyLmV1IjtzOjg6InBhc3N3b3JkIjtzOjY0OiI2ODQxNDIwODIxM2I5YTE3NDEzZmE2M2U1ZWU3ZmRiNDU5OWI1ZTVlODFhNDgzMGQwMGQwYmVjNDc2OTYxZTVhIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53327a77840f09-34140624',1395838765,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1ODM4NzY1O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('5333bfe3357488-69197572',1395904049,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1OTA0MDQ5O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53351468b60356-90154716',1395988804,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk1OTg4ODA0O30='),('53390448eddb98-70584629',1396248824,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2MjQ4ODI0O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53390e6b6447a3-48152089',1396248171,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2MjQ4MTcxO30='),('533a6dec1f1157-03113719',1396356601,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2MzU2NjAxO30='),('533ba0b7c641d6-29023283',1396430833,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2NDMwODMzO3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('533d2fcc769d29-02914557',1396534405,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2NTM0NDA1O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('533e3f6a2317e3-30345292',1396614360,'YToxMDp7czoxMToibGFzdF9hY3RpdmUiO2k6MTM5NjYxNDM2MDtzOjI6IklEIjtzOjE6IjEiO3M6ODoidXNlcm5hbWUiO3M6NDoiRGVtbyI7czo5OiJmaXJzdG5hbWUiO3M6NDoiRGVtbyI7czo4OiJsYXN0bmFtZSI7czo0OiJEZW1vIjtzOjU6ImVtYWlsIjtzOjE3OiJkZW1vQHlvdXJzZWxmLmNvbSI7czo4OiJwYXNzd29yZCI7czo2NDoiMzk3ZGM0MWViYTNhYTFlNzVhNDViNjIwMjYzYTE4Njg2MDcwYmRjOTNiNmE5NTc1NGEyNTJmZWFiNjU3ZDYzNSI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjY6InJvbGVJRCI7czoxOiIxIjtzOjE4OiJidWdUcmFja2VyTGFzdFNlbnQiO2k6MTM5NjYwNjUxNjt9'),('534234d99fd856-28584841',1396871984,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2ODcxOTg0O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('5343ed23d9d8e3-76893192',1396968399,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2OTY4Mzk5O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534510518f4693-80447176',1397052914,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3MDUyOTE0O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534626ec6a1fc3-43123545',1397121916,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3MTIxOTE2O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534b9ad36f6564-36329442',1397487518,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3NDg3NTE4O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534cbeb1dac2e4-36274625',1397542665,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3NTQyNjY1O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30=');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mailpatterns`
--

DROP TABLE IF EXISTS `mailpatterns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mailpatterns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `text` text,
  `html` text,
  `sendHTML` int(1) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mailpatterns`
--

LOCK TABLES `mailpatterns` WRITE;
/*!40000 ALTER TABLE `mailpatterns` DISABLE KEYS */;
INSERT INTO `mailpatterns` VALUES (1,'newsletter01','newsletter@redsheepstudios.com','Newsletter','TEST','<html>%firstname% %lastname%, TEST1!!!11</html>',1,'');
/*!40000 ALTER TABLE `mailpatterns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `watchdogs`
--

DROP TABLE IF EXISTS `watchdogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `watchdogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `key` varchar(50) NOT NULL,
  `value` varchar(500) NOT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=236 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `watchdogs`
--

LOCK TABLES `watchdogs` WRITE;
/*!40000 ALTER TABLE `watchdogs` DISABLE KEYS */;
INSERT INTO `watchdogs` VALUES (1,'info','login','Demo logged out','2014-04-03 04:54:20'),(2,'info','login','Demo logged in','2014-04-03 04:54:31'),(3,'info','login','Demo logged in','2014-04-04 01:13:26'),(4,'info','plugins','Inverted plugin 3','2014-04-04 01:13:41'),(5,'info','plugins','Inverted plugin 3','2014-04-04 01:13:52'),(6,'info','site','Created new site Peter','2014-04-04 01:16:30'),(7,'info','navigation','Created new element community','2014-04-04 01:16:37'),(8,'info','plugins','Inverted plugin 5','2014-04-04 01:27:52'),(9,'info','plugins','Inverted plugin 4','2014-04-04 01:28:21'),(10,'info','plugins','Inverted plugin 4','2014-04-04 01:28:22'),(11,'info','plugins','Inverted plugin 5','2014-04-04 01:29:20'),(12,'info','plugins','Inverted plugin 5','2014-04-04 01:29:49'),(13,'info','plugins','Inverted plugin 5','2014-04-04 01:30:17'),(14,'info','plugins','Inverted plugin 5','2014-04-04 01:30:22'),(15,'info','plugins','Inverted plugin 5','2014-04-04 01:35:17'),(16,'info','plugins','Inverted plugin 5','2014-04-04 01:35:19'),(17,'info','plugins','Inverted plugin 5','2014-04-04 01:35:43'),(18,'info','plugins','Inverted plugin 5','2014-04-04 01:35:45'),(19,'info','plugins','Inverted plugin 5','2014-04-04 01:36:06'),(20,'info','plugins','Inverted plugin 5','2014-04-04 01:36:08'),(21,'info','plugins','Inverted plugin 5','2014-04-04 01:36:41'),(22,'info','plugins','Inverted plugin 5','2014-04-04 01:36:42'),(23,'info','plugins','Inverted plugin 5','2014-04-04 01:37:02'),(24,'info','plugins','Inverted plugin 5','2014-04-04 01:37:03'),(25,'info','plugins','Inverted plugin 5','2014-04-04 01:37:18'),(26,'info','plugins','Inverted plugin 5','2014-04-04 01:37:19'),(27,'info','plugins','Inverted plugin 5','2014-04-04 01:37:57'),(28,'info','plugins','Inverted plugin 5','2014-04-04 01:37:58'),(29,'info','plugins','Inverted plugin 5','2014-04-04 01:38:44'),(30,'info','plugins','Inverted plugin 5','2014-04-04 01:38:45'),(31,'info','plugins','Inverted plugin 5','2014-04-04 01:39:18'),(32,'info','plugins','Inverted plugin 5','2014-04-04 01:39:19'),(33,'info','plugins','Inverted plugin 5','2014-04-04 01:45:20'),(34,'info','plugins','Inverted plugin 5','2014-04-04 01:45:21'),(35,'info','plugins','Inverted plugin 5','2014-04-04 01:45:48'),(36,'info','plugins','Inverted plugin 5','2014-04-04 01:45:49'),(37,'info','plugins','Inverted plugin 5','2014-04-04 01:46:23'),(38,'info','plugins','Inverted plugin 5','2014-04-04 01:46:24'),(39,'info','plugins','Inverted plugin 5','2014-04-04 01:52:13'),(40,'info','plugins','Inverted plugin 5','2014-04-04 01:52:14'),(41,'info','plugins','Inverted plugin 5','2014-04-04 01:52:59'),(42,'info','plugins','Inverted plugin 5','2014-04-04 01:53:00'),(43,'info','plugins','Inverted plugin 5','2014-04-04 01:53:26'),(44,'info','plugins','Inverted plugin 5','2014-04-04 01:53:27'),(45,'info','plugins','Inverted plugin 5','2014-04-04 01:57:41'),(46,'info','plugins','Inverted plugin 5','2014-04-04 01:57:43'),(47,'info','navigation','Created / updated element bugtracker','2014-04-04 02:05:07'),(48,'info','site','Created / updated site bugtracker','2014-04-04 02:05:54'),(49,'info','navigation','Created / updated element bugtracker','2014-04-04 02:06:01'),(50,'info','plugins','Inverted plugin 5','2014-04-04 02:18:48'),(51,'info','plugins','Inverted plugin 5','2014-04-04 02:18:51'),(52,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/frontend/RedSheepBugTracker/ is no directory','2014-04-04 02:22:54'),(53,'info','plugins','Inverted plugin 5','2014-04-04 02:22:54'),(54,'info','plugins','Inverted plugin 5','2014-04-04 02:23:59'),(55,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function uninstall','2014-04-04 02:24:54'),(56,'info','plugins','Inverted plugin 5','2014-04-04 02:24:55'),(57,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function install','2014-04-04 02:32:47'),(58,'info','plugins','Inverted plugin 5','2014-04-04 02:32:47'),(59,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function uninstall','2014-04-04 02:33:00'),(60,'info','plugins','Inverted plugin 5','2014-04-04 02:33:00'),(61,'info','plugins','Inverted plugin 5','2014-04-04 02:34:18'),(62,'info','plugins','Inverted plugin 5','2014-04-04 02:34:27'),(63,'info','plugins','Inverted plugin 5','2014-04-04 02:35:03'),(64,'info','plugins','Inverted plugin 5','2014-04-04 02:35:11'),(65,'info','plugins','Inverted plugin 5','2014-04-04 02:37:17'),(66,'info','plugins','Inverted plugin 5','2014-04-04 03:02:26'),(67,'info','plugins','Inverted plugin 5','2014-04-04 03:02:46'),(68,'info','plugins','Inverted plugin 5','2014-04-04 03:10:30'),(69,'info','plugins','Inverted plugin 5','2014-04-04 03:10:31'),(70,'info','plugins','Inverted plugin 5','2014-04-04 03:52:40'),(71,'info','plugins','Inverted plugin 5','2014-04-04 03:52:41'),(72,'info','plugins','Inverted plugin 5','2014-04-04 03:54:40'),(73,'info','plugins','Inverted plugin 5','2014-04-04 03:54:41'),(74,'info','plugins','Inverted plugin 5','2014-04-04 03:54:50'),(75,'info','plugins','Inverted plugin 5','2014-04-04 03:54:51'),(76,'info','plugins','Inverted plugin 5','2014-04-04 03:55:53'),(77,'info','plugins','Inverted plugin 5','2014-04-04 03:55:54'),(78,'info','plugins','Inverted plugin 5','2014-04-04 03:56:08'),(79,'info','plugins','Inverted plugin 5','2014-04-04 03:56:09'),(80,'info','plugins','Inverted plugin 5','2014-04-04 03:59:27'),(81,'info','plugins','Inverted plugin 5','2014-04-04 03:59:28'),(82,'info','plugins','Inverted plugin 5','2014-04-04 04:08:47'),(83,'info','plugins','Inverted plugin 5','2014-04-04 04:08:49'),(84,'info','plugins','Inverted plugin 5','2014-04-04 04:13:51'),(85,'info','plugins','Inverted plugin 5','2014-04-04 04:13:52'),(86,'info','plugins','Inverted plugin 5','2014-04-04 04:14:13'),(87,'info','plugins','Inverted plugin 5','2014-04-04 04:14:15'),(88,'info','plugins','Inverted plugin 5','2014-04-04 04:14:44'),(89,'info','plugins','Inverted plugin 5','2014-04-04 04:14:45'),(90,'info','plugins','Inverted plugin 5','2014-04-04 04:17:31'),(91,'info','plugins','Inverted plugin 5','2014-04-04 04:17:45'),(92,'info','plugins','Inverted plugin 5','2014-04-04 04:18:07'),(93,'info','plugins','Inverted plugin 5','2014-04-04 04:18:09'),(94,'info','plugins','Inverted plugin 5','2014-04-04 04:18:52'),(95,'info','plugins','Inverted plugin 5','2014-04-04 04:19:01'),(96,'info','plugins','Inverted plugin 5','2014-04-04 04:19:03'),(97,'info','plugins','Inverted plugin 5','2014-04-04 04:21:31'),(98,'info','plugins','Inverted plugin 5','2014-04-04 04:21:32'),(99,'info','plugins','Inverted plugin 5','2014-04-04 04:22:20'),(100,'info','plugins','Inverted plugin 5','2014-04-04 04:22:21'),(101,'info','plugins','Inverted plugin 5','2014-04-04 04:37:35'),(102,'info','plugins','Inverted plugin 5','2014-04-04 04:37:40'),(103,'info','plugins','Inverted plugin 5','2014-04-04 04:39:26'),(104,'info','plugins','Inverted plugin 5','2014-04-04 04:39:27'),(105,'info','plugins','Inverted plugin 5','2014-04-04 04:41:23'),(106,'info','plugins','Inverted plugin 5','2014-04-04 04:41:24'),(107,'info','plugins','Inverted plugin 5','2014-04-04 04:41:43'),(108,'info','plugins','Inverted plugin 5','2014-04-04 04:41:44'),(109,'info','plugins','Inverted plugin 5','2014-04-04 04:47:49'),(110,'info','plugins','Inverted plugin 5','2014-04-04 04:47:51'),(111,'info','login','Demo logged in','2014-04-07 00:23:15'),(112,'info','plugins','Inverted plugin 5','2014-04-07 00:30:22'),(113,'info','plugins','Inverted plugin 5','2014-04-07 00:30:31'),(114,'info','plugins','Inverted plugin 6','2014-04-07 00:51:54'),(115,'info','plugins','Inverted plugin 6','2014-04-07 00:52:02'),(116,'info','plugins','Inverted plugin 6','2014-04-07 00:52:27'),(117,'info','plugins','Inverted plugin 6','2014-04-07 00:52:28'),(118,'info','plugins','Inverted plugin 6','2014-04-07 00:52:29'),(119,'info','plugins','Inverted plugin 6','2014-04-07 00:53:14'),(120,'info','plugins','Inverted plugin 6','2014-04-07 00:53:33'),(121,'info','plugins','Inverted plugin 6','2014-04-07 00:57:25'),(122,'info','navigation','Created / updated element community','2014-04-07 00:57:47'),(123,'info','site','Created / updated site community','2014-04-07 00:58:48'),(124,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function install','2014-04-07 01:38:56'),(125,'info','plugins','Inverted plugin 1','2014-04-07 01:38:56'),(126,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function getConfig','2014-04-07 01:42:04'),(127,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function getConfig','2014-04-07 01:42:21'),(128,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function getConfig','2014-04-07 01:42:49'),(129,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function getConfig','2014-04-07 03:44:04'),(130,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function getConfig','2014-04-07 03:44:04'),(131,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepScrollTop/ has no function getConfig','2014-04-07 03:44:13'),(132,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepScrollTop/ has no function getConfig','2014-04-07 03:44:13'),(133,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepStore/ has no function getConfig','2014-04-07 03:44:17'),(134,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepStore/ has no function getConfig','2014-04-07 03:44:17'),(135,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepMonitor/ has no function getConfig','2014-04-07 03:44:18'),(136,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepMonitor/ has no function getConfig','2014-04-07 03:44:18'),(137,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function getConfig','2014-04-07 03:44:19'),(138,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function getConfig','2014-04-07 03:44:19'),(139,'info','plugins','Inverted plugin 3','2014-04-07 04:18:52'),(140,'info','plugins','Inverted plugin 3','2014-04-07 04:18:59'),(141,'info','login','Demo logged in','2014-04-08 00:20:22'),(142,'info','login','Demo logged out','2014-04-08 01:24:52'),(143,'info','login','Demo logged in','2014-04-08 01:24:56'),(144,'info','plugins','Inverted plugin 1','2014-04-08 04:53:29'),(145,'info','plugins','Inverted plugin 5','2014-04-08 04:53:42'),(146,'info','plugins','Inverted plugin 5','2014-04-08 04:53:45'),(147,'info','plugins','Inverted plugin 5','2014-04-08 04:53:52'),(148,'info','plugins','Inverted plugin 5','2014-04-08 04:54:00'),(149,'info','cron','Reset cron 1','2014-04-08 05:07:02'),(150,'info','cron','Reset cron 1','2014-04-08 05:07:35'),(151,'info','cron','Reset cron 1','2014-04-08 05:07:36'),(152,'info','cron','Reset cron 1','2014-04-08 05:08:24'),(153,'info','cron','Reset cron 1','2014-04-08 05:08:26'),(154,'info','cron','Reset cron 1','2014-04-08 05:08:28'),(155,'info','navigation','Created / updated element home','2014-04-08 06:47:35'),(156,'info','navigation','Created / updated element sale','2014-04-08 06:55:22'),(157,'info','navigation','Created / updated element home','2014-04-08 06:55:54'),(158,'info','login','Demo logged out','2014-04-08 07:35:47'),(159,'info','login','Demo logged in','2014-04-08 07:35:50'),(160,'info','login','Demo logged in','2014-04-09 07:20:41'),(161,'info','plugins','Inverted plugin 6','2014-04-09 08:07:22'),(162,'info','plugins','Inverted plugin 6','2014-04-09 08:07:22'),(163,'info','plugins','Inverted plugin 6','2014-04-09 08:20:49'),(164,'info','plugins','Inverted plugin 6','2014-04-09 08:20:50'),(165,'info','plugins','Inverted plugin 6','2014-04-09 08:24:56'),(166,'info','plugins','Inverted plugin 6','2014-04-09 08:24:57'),(167,'info','plugins','Inverted plugin 6','2014-04-09 08:27:16'),(168,'info','plugins','Inverted plugin 6','2014-04-09 08:27:17'),(169,'info','login','Demo logged in','2014-04-10 00:21:19'),(170,'info','plugins','Inverted plugin 7','2014-04-10 00:44:15'),(171,'info','plugins','Inverted plugin 7','2014-04-10 00:47:09'),(172,'info','plugins','Inverted plugin 7','2014-04-10 00:47:15'),(173,'info','cron','Executing cron SelfHealing','2014-04-10 00:47:32'),(174,'info','cron','Reset cron 3','2014-04-10 00:56:37'),(175,'info','cron','Reset cron 1','2014-04-10 00:56:52'),(176,'info','cron','Reset cron 1','2014-04-10 00:56:55'),(177,'info','cron','Reset cron 3','2014-04-10 00:56:59'),(178,'info','cron','Reset cron 3','2014-04-10 00:57:01'),(179,'info','plugins','Inverted plugin 7','2014-04-10 01:08:08'),(180,'info','plugins','Inverted plugin 7','2014-04-10 01:46:22'),(181,'info','plugins','Inverted plugin 7','2014-04-10 01:46:25'),(182,'info','plugins','Inverted plugin 6','2014-04-10 01:46:45'),(183,'info','plugins','Inverted plugin 3','2014-04-10 01:50:42'),(184,'info','plugins','Inverted plugin 6','2014-04-10 01:51:39'),(185,'info','plugins','Inverted plugin 3','2014-04-10 01:51:42'),(186,'info','plugins','Inverted plugin 3','2014-04-10 01:54:12'),(187,'info','plugins','Inverted plugin 3','2014-04-10 02:50:30'),(188,'info','plugins','Inverted plugin 3','2014-04-10 02:50:33'),(189,'info','plugins','Inverted plugin 3','2014-04-10 02:55:14'),(190,'info','plugins','Inverted plugin 3','2014-04-10 02:55:15'),(191,'info','plugins','Inverted plugin 3','2014-04-10 02:55:43'),(192,'info','plugins','Inverted plugin 3','2014-04-10 02:55:43'),(193,'info','plugins','Inverted plugin 3','2014-04-10 02:55:59'),(194,'info','plugins','Inverted plugin 3','2014-04-10 02:56:00'),(195,'info','plugins','Inverted plugin 3','2014-04-10 03:07:23'),(196,'info','plugins','Inverted plugin 3','2014-04-10 03:07:24'),(197,'info','plugins','Inverted plugin 3','2014-04-10 03:07:41'),(198,'info','plugins','Inverted plugin 3','2014-04-10 03:07:42'),(199,'info','plugins','Inverted plugin 3','2014-04-10 03:10:09'),(200,'info','plugins','Inverted plugin 3','2014-04-10 03:10:10'),(201,'info','plugins','Inverted plugin 3','2014-04-10 03:11:31'),(202,'info','plugins','Inverted plugin 3','2014-04-10 03:11:32'),(203,'info','plugins','Inverted plugin 3','2014-04-10 03:11:45'),(204,'info','plugins','Inverted plugin 3','2014-04-10 03:11:46'),(205,'info','plugins','Inverted plugin 3','2014-04-10 03:11:57'),(206,'info','plugins','Inverted plugin 3','2014-04-10 03:11:58'),(207,'info','plugins','Inverted plugin 3','2014-04-10 03:14:01'),(208,'info','plugins','Inverted plugin 3','2014-04-10 03:14:02'),(209,'info','plugins','Inverted plugin 3','2014-04-10 03:23:55'),(210,'info','plugins','Inverted plugin 3','2014-04-10 03:23:56'),(211,'info','plugins','Inverted plugin 3','2014-04-10 03:24:12'),(212,'info','plugins','Inverted plugin 3','2014-04-10 03:24:13'),(213,'info','plugins','Inverted plugin 3','2014-04-10 03:24:41'),(214,'info','plugins','Inverted plugin 3','2014-04-10 03:24:42'),(215,'info','plugins','Inverted plugin 3','2014-04-10 03:27:52'),(216,'info','plugins','Inverted plugin 3','2014-04-10 03:27:53'),(217,'info','plugins','Inverted plugin 3','2014-04-10 03:29:19'),(218,'info','plugins','Inverted plugin 3','2014-04-10 03:29:20'),(219,'info','plugins','Inverted plugin 3','2014-04-10 03:33:30'),(220,'info','plugins','Inverted plugin 3','2014-04-10 03:33:31'),(221,'info','plugins','Inverted plugin 3','2014-04-10 03:35:51'),(222,'info','plugins','Inverted plugin 3','2014-04-10 03:35:52'),(223,'info','plugins','Inverted plugin 3','2014-04-10 03:36:49'),(224,'info','login','Demo logged in','2014-04-14 00:51:02'),(225,'info','plugins','Inverted plugin 3','2014-04-14 00:51:09'),(226,'info','plugins','Inverted plugin 3','2014-04-14 01:04:05'),(227,'info','plugins','Inverted plugin 3','2014-04-14 01:14:57'),(228,'info','plugins','Inverted plugin 8','2014-04-14 01:50:05'),(229,'info','plugins','Inverted plugin 8','2014-04-14 01:50:12'),(230,'info','plugins','Inverted plugin 8','2014-04-14 01:55:23'),(231,'info','plugins','Inverted plugin 8','2014-04-14 01:55:29'),(232,'info','login','Demo logged out','2014-04-14 03:22:43'),(233,'info','login','Demo logged in','2014-04-14 03:23:24'),(234,'info','cron','Reset cron 1','2014-04-14 03:39:13'),(235,'info','login','Demo logged in','2014-04-15 00:09:29');
/*!40000 ALTER TABLE `watchdogs` ENABLE KEYS */;
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
INSERT INTO `crons` VALUES (1,'SystemMonitor',3,'monitor','2014-04-14 03:39:13','0000-00-00 00:00:00','10',0,'Plugin not found');
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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staticsites`
--

LOCK TABLES `staticsites` WRITE;
/*!40000 ALTER TABLE `staticsites` DISABLE KEYS */;
INSERT INTO `staticsites` VALUES (1,'home','&nbsp;&lt;label class=&quot;redsheepHeadline&quot;&gt;Welcome!&lt;/label&gt;&lt;hr/&gt;&lt;p class=&quot;redsheepDescription&quot;&gt;    HI! This site is currently on progress. Please bear with me.&lt;/p&gt;'),(2,'download overview',' <label class=\"redsheepHeadline\">DOWNLOADS</label> <hr> <p class=\"redsheepDescription\">     You can find our available versions on our <a href=\"https://github.com/Tyralcori/RedSheepCMS/\" target=\"_blank\" title=\"GITHUB Repository\">GITHUB</a> repository. Feel free to fork it. Thanks for so much response! </p>'),(3,'documentation',NULL),(4,'plugins',' <label class=\"redsheepHeadline\">PLUGINS</label> <hr> <p class=\"redsheepDescription\">Pluginstore is in developement! Have fun!</p>'),(5,'roadmap',NULL),(7,'imprint',NULL),(8,'team','<label class=\"redsheepHeadline\">TEAM</label>\n<hr/>\n<p class=\"redsheepDescription\">\n<div class=\"row\">\n    <div class=\"col-md-2 col-md-offset-2 text-center\">\n        <div class=\"service-item\">\n            <img data-src=\"holder.js/140x140\" class=\"img-circle\" alt=\"140x140\" src=\"https://scontent-b-fra.xx.fbcdn.net/hphotos-prn1/t1.0-9/17496_10201233496190252_1385687456_n.jpg\" style=\"width: 140px; height: 140px;\">\n            <h4>Alexander Czichelski alias \"ScarecrowLambda\"</h4>\n            <p>Lead Software Developer</p>\n            <p></p>\n        </div>\n    </div>           \n    <div class=\"col-md-2 col-md-offset-2 text-center\">\n        <blockquote>Currently i did this project by my own without any help. If you want to help or contribute, write me!</blockquote>\n    </div>\n</div>\n</p>'),(9,'news','TESTER'),(10,'contact',NULL),(11,'Peter','Peter...'),(12,'My new Site','TAKE THIS!'),(45,'community','<label class=\"redsheepHeadline\">Community Forum</label>\n<hr/>\n<p class=\"redsheepDescription\">\n    We need your ideas to decide, what you wish!\n</p>'),(47,'bugtracker','<label class=\"redsheepHeadline\">Bugtracker</label>\n<hr/>\n<p class=\"redsheepDescription\">\n    {% if bugTrackerReturn.tickets is iterable %}\n        {% if bugTrackerReturn.tickets.0 %}\n            {{ bugTrackerReturn.ticketCount }} Ticket(s) reported.\n            <hr/>\n            <table class=\"table table-striped table-bordered\">\n                <tr>\n                    <th>Description</th>\n                    <th>Since</th>\n                    <th>Priority</th>\n                    <th>Assigned ro</th>\n                    <th>Status</th>\n                    <th>Comment</th>\n                </tr>\n                {% for ticket in bugTrackerReturn.tickets %}    \n                <tr>\n                    <td><a href=\'/bugtracker/{{ ticket.id }}\' title=\'{{ ticket.bugDescribe }}\' name=\'Decsription\'>{{ ticket.bugDescribe|slice(0,40) }}..</a></td>\n                    <td>{{ ticket.sentOn }}</td>\n                    <td>{{ ticket.prio }}</td>\n                    <td>{{ ticket.assignedTo }}</td>\n                    <td>{{ ticket.status }}</td>\n                    <td>{{ ticket.comment }}</td>\n                </tr>\n                {% endfor %}\n            </table>\n        {% else %}\n            <div class=\"form-group\">\n                <label for=\"bugDesc\">Description</label>\n                <textarea class=\"form-control\" class=\"form-control\" id=\'bugDesc\' rows=\'2\' readonly>{{ bugTrackerReturn.tickets.bugDescribe }}</textarea>\n            </div>\n\n            <div class=\"form-group\">\n                <label for=\"sentOn\">Sent on</label>\n                <input type=\"text\" class=\"form-control\" id=\"sentOn\" name=\"sentOn\" placeholder=\"Link\" value=\"{{ bugTrackerReturn.tickets.sentOn }}\" readonly>\n            </div>\n\n            <div class=\"form-group\">\n                <label for=\"prio\">Prio</label>\n                <input type=\"text\" class=\"form-control\" id=\"prio\" name=\"prio\" placeholder=\"Type\" value=\"{{ bugTrackerReturn.tickets.prio }}\" readonly>\n            </div>\n\n            <div class=\"form-group\">\n                <label for=\"assignedTo\">Type</label>\n                <input type=\"text\" class=\"form-control\" id=\"assignedTo\" name=\"assignedTo\" placeholder=\"Type\" value=\"{{ bugTrackerReturn.tickets.assignedTo }}\" readonly>\n            </div>\n        \n            <div class=\"form-group\">\n                <label for=\"status\">Status</label>\n                <input type=\"text\" class=\"form-control\" id=\"status\" name=\"status\" placeholder=\"Type\" value=\"{{ bugTrackerReturn.tickets.status }}\" readonly>\n            </div>\n        \n            <div class=\"form-group\">\n                <label for=\"comment\">Comment</label>\n                <textarea class=\"form-control\" class=\"form-control\" id=\'comment\' rows=\'2\' readonly>{{ bugTrackerReturn.tickets.comment }}</textarea>\n            </div>\n        {% endif %}\n    {% endif %}\n</p>'),(53,'newsletter','<label class=\"redsheepHeadline\">Newsletter</label>\n<hr/>\n<p class=\"redsheepDescription\">   \n    {% if newsletterMessage %}\n        {{ newsletterMessage }}<br/>\n    {% endif %}\n    {% if newsletterUnsubscribe %}        \n    <label>Unsubscribe from our newsletter</label><br/>\n    <form action=\"/newsletter/unsubscribe\" method=\"POST\">\n        <div class=\"form-group\">\n            <label for=\"emailInputField\">Email address</label>\n            <input type=\"email\" class=\"form-control\" name=\'email\' id=\"emailInputField\" placeholder=\"Enter email\">\n        </div>\n        <br/>\n        <button type=\"submit\" class=\"btn btn-default\">Submit</button>\n    </form>\n    {% else %}\n    <label>Sign up for free to our newsletter and stay in touch with us!</label><br/>\n    <form action=\"/newsletter\" method=\"POST\">\n        <div class=\"form-group\">\n            <label for=\"emailInputField\">Email address</label>\n            <input type=\"text\" class=\"form-control\" name=\'email\' id=\"emailInputField\" placeholder=\"Enter email\">\n        </div>\n        <div class=\"form-group\">\n            <label for=\"firstname\">Firstname (optional)</label>\n            <input type=\"text\" class=\"form-control\" name=\'firstname\' id=\"firstname\" placeholder=\"Firstname (optional)\">\n        </div>\n        <div class=\"form-group\">\n            <label for=\"lastname\">Lastname (optional)</label>\n            <input type=\"text\" class=\"form-control\" name=\'lastname\' id=\"lastname\" placeholder=\"Lastname (optional)\">\n        </div>\n        <br/>\n        <button type=\"submit\" class=\"btn btn-default\">Submit</button>\n    </form>\n    <br/><br/>\n    <a href=\"/newsletter/unsubscribe\" title=\"Unsubscribe\">Click here to unsubscribe</a>\n    {% endif %}\n</p>');
/*!40000 ALTER TABLE `staticsites` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs`
--

LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` VALUES (1,'version','0.4.1'),(2,'template','redsheepstudios'),(3,'baseHost','http://dev.ghost.de/'),(4,'title','Redsheep CMS'),(5,'staticBaseHost','http://dev.ghost.de/assets/'),(8,'Plugin_RedSheepBugTracker','{showMaxTickets:10,hideSolvedTickets:empty}'),(9,'Plugin_RedSheepScrollTop','{btnValue:SCROLL TOP }');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribes`
--

DROP TABLE IF EXISTS `subscribes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribes`
--

LOCK TABLES `subscribes` WRITE;
/*!40000 ALTER TABLE `subscribes` DISABLE KEYS */;
INSERT INTO `subscribes` VALUES (1,'a.czichelski@elitecoder.eu','Alex','C');
/*!40000 ALTER TABLE `subscribes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storecategories`
--

DROP TABLE IF EXISTS `storecategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storecategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `parent` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storecategories`
--

LOCK TABLES `storecategories` WRITE;
/*!40000 ALTER TABLE `storecategories` DISABLE KEYS */;
INSERT INTO `storecategories` VALUES (1,'Main',1,0),(2,'Snippets',1,1);
/*!40000 ALTER TABLE `storecategories` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plugins`
--

LOCK TABLES `plugins` WRITE;
/*!40000 ALTER TABLE `plugins` DISABLE KEYS */;
INSERT INTO `plugins` VALUES (1,'RedSheepCore','RedSheep Core Plugin',0,'2014-04-03 03:53:34','0000-00-00 00:00:00','0.9.3','RedSheep Studios','Core','http://redsheepstudios.com/','frontend'),(2,'RedSheepMonitor','RedSheep Monitor Plugin',0,'2014-04-03 03:53:34','0000-00-00 00:00:00','0.4.3','RedSheep Studios','Core','http://redsheepstudios.com/','frontend'),(4,'RedSheepScrollTop','Creates a little box \"Scroll to top on bottom page\"',1,'2014-04-03 04:17:24','2014-04-04 01:28:22','1.0.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(5,'RedSheepBugTracker','Simple BugTracker',1,'2014-04-04 01:27:47','2014-04-08 04:54:00','1.0.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(6,'RedSheepNewsletter','Simple RedSheepNewsletter',1,'2014-04-09 08:06:29','2014-04-10 01:51:38','0.9.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(7,'RedSheepSelfHealing','RedSheepSelfHealing',0,'2014-04-10 00:32:46','0000-00-00 00:00:00','0.5.0','RedSheep Studios','Core','http://redsheepstudios.com/','frontend'),(8,'RedSheepStore','RedSheep Store Plugin',0,'2014-04-14 01:50:02','0000-00-00 00:00:00','0.4.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend');
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewports`
--

LOCK TABLES `viewports` WRITE;
/*!40000 ALTER TABLE `viewports` DISABLE KEYS */;
INSERT INTO `viewports` VALUES (1,'home','/','staticsite',1,1,'top'),(2,'download','/download','staticsite',2,1,'top'),(3,'documentation','/documentation','staticsite',3,1,'top'),(4,'plugins','/plugins','staticsite',4,1,'top'),(5,'roadmap','/roadmap','staticsite',5,1,'top'),(7,'imprint','/imprint','staticsite',7,1,'bottom'),(8,'team','/team','staticsite',8,1,'bottom'),(9,'news','/news','staticsite',11,1,'bottom'),(10,'contact','/contact','staticsite',10,1,'bottom'),(18,'sale','/salema','staticsite',11,0,'bottom'),(52,'community','/community','staticsite',45,1,'top'),(54,'bugtracker','/bugtracker','staticsite',47,1,'bottom'),(60,'newsletter','/newsletter','staticsite',53,1,'bottom');
/*!40000 ALTER TABLE `viewports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storeplugins`
--

DROP TABLE IF EXISTS `storeplugins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storeplugins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `section` varchar(45) DEFAULT NULL,
  `publisherHomepage` varchar(255) DEFAULT NULL,
  `space` varchar(45) DEFAULT NULL,
  `downloads` int(10) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `active` int(10) DEFAULT NULL,
  `categoryID` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storeplugins`
--

LOCK TABLES `storeplugins` WRITE;
/*!40000 ALTER TABLE `storeplugins` DISABLE KEYS */;
INSERT INTO `storeplugins` VALUES (1,'RedSheepScrollTop','Creates a little box \"Scroll to top on bottom page\"','1.0.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend',21,10,1,2);
/*!40000 ALTER TABLE `storeplugins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bugtrackers`
--

DROP TABLE IF EXISTS `bugtrackers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bugtrackers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `bugDescribe` text,
  `sentOn` datetime DEFAULT NULL,
  `prio` varchar(45) DEFAULT NULL,
  `assignedTo` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bugtrackers`
--

LOCK TABLES `bugtrackers` WRITE;
/*!40000 ALTER TABLE `bugtrackers` DISABLE KEYS */;
INSERT INTO `bugtrackers` VALUES (1,'a.czichelski@elitecoder.eu','ASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASDASD','0000-00-00 00:00:00','normal','Demo','seen','-'),(2,'435@as.de','asassa','2014-04-04 04:44:29','normal','-','unseen','-'),(3,'a.czichelski@elitecoder.eu','nOPWFFPW\\\\asdf??&lt;html&gt;TST&lt;/html&gt;','2014-04-04 05:15:16','normal','-','unseen','-');
/*!40000 ALTER TABLE `bugtrackers` ENABLE KEYS */;
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

-- Dump completed on 2014-04-15  8:24:01
