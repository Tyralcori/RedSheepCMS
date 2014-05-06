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
-- Table structure for table `grids`
--

DROP TABLE IF EXISTS `grids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gridID` int(11) DEFAULT NULL,
  `positionX` int(11) DEFAULT NULL,
  `positionY` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `widgetID` int(11) DEFAULT NULL,
  `widgetContentID` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grids`
--

LOCK TABLES `grids` WRITE;
/*!40000 ALTER TABLE `grids` DISABLE KEYS */;
INSERT INTO `grids` VALUES (27,2,1,1,3,7,3,NULL),(36,3,1,1,4,8,3,'8'),(37,3,5,5,1,4,3,'4'),(38,3,1,5,1,4,3,'3');
/*!40000 ALTER TABLE `grids` ENABLE KEYS */;
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
INSERT INTO `sessions` VALUES ('534234d99fd856-28584841',1396871984,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2ODcxOTg0O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('5343ed23d9d8e3-76893192',1396968399,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk2OTY4Mzk5O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534510518f4693-80447176',1397052914,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3MDUyOTE0O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534626ec6a1fc3-43123545',1397121916,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3MTIxOTE2O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534b9ad36f6564-36329442',1397487518,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3NDg3NTE4O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534cbeb1dac2e4-36274625',1397569969,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3NTY5OTY5O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('534e18adf0ee16-91513175',1397656829,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk3NjU2ODI5O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53560d75aa7f58-20579326',1398153457,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk4MTUzNDU3O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53574e4d017275-34320969',1398261500,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk4MjYxNTAwO3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53589c9c8a4214-96787458',1398349768,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk4MzQ5NzY4O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('5359f3410b2913-87211441',1398435560,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk4NDM1NTYwO3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('535dee172c9ba7-55895299',1398694296,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk4Njk0Mjk2O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('535f3f5f02cf82-35024734',1398755254,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk4NzU1MjU0O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('5365571e98f7b0-06020898',1399150391,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk5MTUwMzkxO3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('5366661d1d1a40-19642737',1399229596,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk5MjI5NTk2O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('5366661d243593-00017605',1399219741,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk5MjE5NzQxO30='),('53668d2db187e2-48904307',1399232204,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk5MjMyMjA0O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('53668d2dbba786-11269579',1399229741,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk5MjI5NzQxO30='),('5367befaeaa2b7-90320534',1399321589,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk5MzIxNTg5O3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30='),('5367befaeec594-22678023',1399308027,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk5MzA4MDI3O30='),('536882c4cf1110-85952500',1399370452,'YTo5OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzk5MzcwNDUyO3M6MjoiSUQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo0OiJEZW1vIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEZW1vIjtzOjg6Imxhc3RuYW1lIjtzOjQ6IkRlbW8iO3M6NToiZW1haWwiO3M6MTc6ImRlbW9AeW91cnNlbGYuY29tIjtzOjg6InBhc3N3b3JkIjtzOjY0OiIzOTdkYzQxZWJhM2FhMWU3NWE0NWI2MjAyNjNhMTg2ODYwNzBiZGM5M2I2YTk1NzU0YTI1MmZlYWI2NTdkNjM1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6Njoicm9sZUlEIjtzOjE6IjEiO30=');
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
) ENGINE=InnoDB AUTO_INCREMENT=870 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `watchdogs`
--

LOCK TABLES `watchdogs` WRITE;
/*!40000 ALTER TABLE `watchdogs` DISABLE KEYS */;
INSERT INTO `watchdogs` VALUES (1,'info','login','Demo logged out','2014-04-03 04:54:20'),(2,'info','login','Demo logged in','2014-04-03 04:54:31'),(3,'info','login','Demo logged in','2014-04-04 01:13:26'),(4,'info','plugins','Inverted plugin 3','2014-04-04 01:13:41'),(5,'info','plugins','Inverted plugin 3','2014-04-04 01:13:52'),(6,'info','site','Created new site Peter','2014-04-04 01:16:30'),(7,'info','navigation','Created new element community','2014-04-04 01:16:37'),(8,'info','plugins','Inverted plugin 5','2014-04-04 01:27:52'),(9,'info','plugins','Inverted plugin 4','2014-04-04 01:28:21'),(10,'info','plugins','Inverted plugin 4','2014-04-04 01:28:22'),(11,'info','plugins','Inverted plugin 5','2014-04-04 01:29:20'),(12,'info','plugins','Inverted plugin 5','2014-04-04 01:29:49'),(13,'info','plugins','Inverted plugin 5','2014-04-04 01:30:17'),(14,'info','plugins','Inverted plugin 5','2014-04-04 01:30:22'),(15,'info','plugins','Inverted plugin 5','2014-04-04 01:35:17'),(16,'info','plugins','Inverted plugin 5','2014-04-04 01:35:19'),(17,'info','plugins','Inverted plugin 5','2014-04-04 01:35:43'),(18,'info','plugins','Inverted plugin 5','2014-04-04 01:35:45'),(19,'info','plugins','Inverted plugin 5','2014-04-04 01:36:06'),(20,'info','plugins','Inverted plugin 5','2014-04-04 01:36:08'),(21,'info','plugins','Inverted plugin 5','2014-04-04 01:36:41'),(22,'info','plugins','Inverted plugin 5','2014-04-04 01:36:42'),(23,'info','plugins','Inverted plugin 5','2014-04-04 01:37:02'),(24,'info','plugins','Inverted plugin 5','2014-04-04 01:37:03'),(25,'info','plugins','Inverted plugin 5','2014-04-04 01:37:18'),(26,'info','plugins','Inverted plugin 5','2014-04-04 01:37:19'),(27,'info','plugins','Inverted plugin 5','2014-04-04 01:37:57'),(28,'info','plugins','Inverted plugin 5','2014-04-04 01:37:58'),(29,'info','plugins','Inverted plugin 5','2014-04-04 01:38:44'),(30,'info','plugins','Inverted plugin 5','2014-04-04 01:38:45'),(31,'info','plugins','Inverted plugin 5','2014-04-04 01:39:18'),(32,'info','plugins','Inverted plugin 5','2014-04-04 01:39:19'),(33,'info','plugins','Inverted plugin 5','2014-04-04 01:45:20'),(34,'info','plugins','Inverted plugin 5','2014-04-04 01:45:21'),(35,'info','plugins','Inverted plugin 5','2014-04-04 01:45:48'),(36,'info','plugins','Inverted plugin 5','2014-04-04 01:45:49'),(37,'info','plugins','Inverted plugin 5','2014-04-04 01:46:23'),(38,'info','plugins','Inverted plugin 5','2014-04-04 01:46:24'),(39,'info','plugins','Inverted plugin 5','2014-04-04 01:52:13'),(40,'info','plugins','Inverted plugin 5','2014-04-04 01:52:14'),(41,'info','plugins','Inverted plugin 5','2014-04-04 01:52:59'),(42,'info','plugins','Inverted plugin 5','2014-04-04 01:53:00'),(43,'info','plugins','Inverted plugin 5','2014-04-04 01:53:26'),(44,'info','plugins','Inverted plugin 5','2014-04-04 01:53:27'),(45,'info','plugins','Inverted plugin 5','2014-04-04 01:57:41'),(46,'info','plugins','Inverted plugin 5','2014-04-04 01:57:43'),(47,'info','navigation','Created / updated element bugtracker','2014-04-04 02:05:07'),(48,'info','site','Created / updated site bugtracker','2014-04-04 02:05:54'),(49,'info','navigation','Created / updated element bugtracker','2014-04-04 02:06:01'),(50,'info','plugins','Inverted plugin 5','2014-04-04 02:18:48'),(51,'info','plugins','Inverted plugin 5','2014-04-04 02:18:51'),(52,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/frontend/RedSheepBugTracker/ is no directory','2014-04-04 02:22:54'),(53,'info','plugins','Inverted plugin 5','2014-04-04 02:22:54'),(54,'info','plugins','Inverted plugin 5','2014-04-04 02:23:59'),(55,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function uninstall','2014-04-04 02:24:54'),(56,'info','plugins','Inverted plugin 5','2014-04-04 02:24:55'),(57,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function install','2014-04-04 02:32:47'),(58,'info','plugins','Inverted plugin 5','2014-04-04 02:32:47'),(59,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function uninstall','2014-04-04 02:33:00'),(60,'info','plugins','Inverted plugin 5','2014-04-04 02:33:00'),(61,'info','plugins','Inverted plugin 5','2014-04-04 02:34:18'),(62,'info','plugins','Inverted plugin 5','2014-04-04 02:34:27'),(63,'info','plugins','Inverted plugin 5','2014-04-04 02:35:03'),(64,'info','plugins','Inverted plugin 5','2014-04-04 02:35:11'),(65,'info','plugins','Inverted plugin 5','2014-04-04 02:37:17'),(66,'info','plugins','Inverted plugin 5','2014-04-04 03:02:26'),(67,'info','plugins','Inverted plugin 5','2014-04-04 03:02:46'),(68,'info','plugins','Inverted plugin 5','2014-04-04 03:10:30'),(69,'info','plugins','Inverted plugin 5','2014-04-04 03:10:31'),(70,'info','plugins','Inverted plugin 5','2014-04-04 03:52:40'),(71,'info','plugins','Inverted plugin 5','2014-04-04 03:52:41'),(72,'info','plugins','Inverted plugin 5','2014-04-04 03:54:40'),(73,'info','plugins','Inverted plugin 5','2014-04-04 03:54:41'),(74,'info','plugins','Inverted plugin 5','2014-04-04 03:54:50'),(75,'info','plugins','Inverted plugin 5','2014-04-04 03:54:51'),(76,'info','plugins','Inverted plugin 5','2014-04-04 03:55:53'),(77,'info','plugins','Inverted plugin 5','2014-04-04 03:55:54'),(78,'info','plugins','Inverted plugin 5','2014-04-04 03:56:08'),(79,'info','plugins','Inverted plugin 5','2014-04-04 03:56:09'),(80,'info','plugins','Inverted plugin 5','2014-04-04 03:59:27'),(81,'info','plugins','Inverted plugin 5','2014-04-04 03:59:28'),(82,'info','plugins','Inverted plugin 5','2014-04-04 04:08:47'),(83,'info','plugins','Inverted plugin 5','2014-04-04 04:08:49'),(84,'info','plugins','Inverted plugin 5','2014-04-04 04:13:51'),(85,'info','plugins','Inverted plugin 5','2014-04-04 04:13:52'),(86,'info','plugins','Inverted plugin 5','2014-04-04 04:14:13'),(87,'info','plugins','Inverted plugin 5','2014-04-04 04:14:15'),(88,'info','plugins','Inverted plugin 5','2014-04-04 04:14:44'),(89,'info','plugins','Inverted plugin 5','2014-04-04 04:14:45'),(90,'info','plugins','Inverted plugin 5','2014-04-04 04:17:31'),(91,'info','plugins','Inverted plugin 5','2014-04-04 04:17:45'),(92,'info','plugins','Inverted plugin 5','2014-04-04 04:18:07'),(93,'info','plugins','Inverted plugin 5','2014-04-04 04:18:09'),(94,'info','plugins','Inverted plugin 5','2014-04-04 04:18:52'),(95,'info','plugins','Inverted plugin 5','2014-04-04 04:19:01'),(96,'info','plugins','Inverted plugin 5','2014-04-04 04:19:03'),(97,'info','plugins','Inverted plugin 5','2014-04-04 04:21:31'),(98,'info','plugins','Inverted plugin 5','2014-04-04 04:21:32'),(99,'info','plugins','Inverted plugin 5','2014-04-04 04:22:20'),(100,'info','plugins','Inverted plugin 5','2014-04-04 04:22:21'),(101,'info','plugins','Inverted plugin 5','2014-04-04 04:37:35'),(102,'info','plugins','Inverted plugin 5','2014-04-04 04:37:40'),(103,'info','plugins','Inverted plugin 5','2014-04-04 04:39:26'),(104,'info','plugins','Inverted plugin 5','2014-04-04 04:39:27'),(105,'info','plugins','Inverted plugin 5','2014-04-04 04:41:23'),(106,'info','plugins','Inverted plugin 5','2014-04-04 04:41:24'),(107,'info','plugins','Inverted plugin 5','2014-04-04 04:41:43'),(108,'info','plugins','Inverted plugin 5','2014-04-04 04:41:44'),(109,'info','plugins','Inverted plugin 5','2014-04-04 04:47:49'),(110,'info','plugins','Inverted plugin 5','2014-04-04 04:47:51'),(111,'info','login','Demo logged in','2014-04-07 00:23:15'),(112,'info','plugins','Inverted plugin 5','2014-04-07 00:30:22'),(113,'info','plugins','Inverted plugin 5','2014-04-07 00:30:31'),(114,'info','plugins','Inverted plugin 6','2014-04-07 00:51:54'),(115,'info','plugins','Inverted plugin 6','2014-04-07 00:52:02'),(116,'info','plugins','Inverted plugin 6','2014-04-07 00:52:27'),(117,'info','plugins','Inverted plugin 6','2014-04-07 00:52:28'),(118,'info','plugins','Inverted plugin 6','2014-04-07 00:52:29'),(119,'info','plugins','Inverted plugin 6','2014-04-07 00:53:14'),(120,'info','plugins','Inverted plugin 6','2014-04-07 00:53:33'),(121,'info','plugins','Inverted plugin 6','2014-04-07 00:57:25'),(122,'info','navigation','Created / updated element community','2014-04-07 00:57:47'),(123,'info','site','Created / updated site community','2014-04-07 00:58:48'),(124,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function install','2014-04-07 01:38:56'),(125,'info','plugins','Inverted plugin 1','2014-04-07 01:38:56'),(126,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function getConfig','2014-04-07 01:42:04'),(127,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function getConfig','2014-04-07 01:42:21'),(128,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepBugTracker/ has no function getConfig','2014-04-07 01:42:49'),(129,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function getConfig','2014-04-07 03:44:04'),(130,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function getConfig','2014-04-07 03:44:04'),(131,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepScrollTop/ has no function getConfig','2014-04-07 03:44:13'),(132,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Community/RedSheepScrollTop/ has no function getConfig','2014-04-07 03:44:13'),(133,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepStore/ has no function getConfig','2014-04-07 03:44:17'),(134,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepStore/ has no function getConfig','2014-04-07 03:44:17'),(135,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepMonitor/ has no function getConfig','2014-04-07 03:44:18'),(136,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepMonitor/ has no function getConfig','2014-04-07 03:44:18'),(137,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function getConfig','2014-04-07 03:44:19'),(138,'error','plugins','/var/www/ERO/GIT/RedSheepCMS/application/classes/Plugins/Core/RedSheepCore/ has no function getConfig','2014-04-07 03:44:19'),(139,'info','plugins','Inverted plugin 3','2014-04-07 04:18:52'),(140,'info','plugins','Inverted plugin 3','2014-04-07 04:18:59'),(141,'info','login','Demo logged in','2014-04-08 00:20:22'),(142,'info','login','Demo logged out','2014-04-08 01:24:52'),(143,'info','login','Demo logged in','2014-04-08 01:24:56'),(144,'info','plugins','Inverted plugin 1','2014-04-08 04:53:29'),(145,'info','plugins','Inverted plugin 5','2014-04-08 04:53:42'),(146,'info','plugins','Inverted plugin 5','2014-04-08 04:53:45'),(147,'info','plugins','Inverted plugin 5','2014-04-08 04:53:52'),(148,'info','plugins','Inverted plugin 5','2014-04-08 04:54:00'),(149,'info','cron','Reset cron 1','2014-04-08 05:07:02'),(150,'info','cron','Reset cron 1','2014-04-08 05:07:35'),(151,'info','cron','Reset cron 1','2014-04-08 05:07:36'),(152,'info','cron','Reset cron 1','2014-04-08 05:08:24'),(153,'info','cron','Reset cron 1','2014-04-08 05:08:26'),(154,'info','cron','Reset cron 1','2014-04-08 05:08:28'),(155,'info','navigation','Created / updated element home','2014-04-08 06:47:35'),(156,'info','navigation','Created / updated element sale','2014-04-08 06:55:22'),(157,'info','navigation','Created / updated element home','2014-04-08 06:55:54'),(158,'info','login','Demo logged out','2014-04-08 07:35:47'),(159,'info','login','Demo logged in','2014-04-08 07:35:50'),(160,'info','login','Demo logged in','2014-04-09 07:20:41'),(161,'info','plugins','Inverted plugin 6','2014-04-09 08:07:22'),(162,'info','plugins','Inverted plugin 6','2014-04-09 08:07:22'),(163,'info','plugins','Inverted plugin 6','2014-04-09 08:20:49'),(164,'info','plugins','Inverted plugin 6','2014-04-09 08:20:50'),(165,'info','plugins','Inverted plugin 6','2014-04-09 08:24:56'),(166,'info','plugins','Inverted plugin 6','2014-04-09 08:24:57'),(167,'info','plugins','Inverted plugin 6','2014-04-09 08:27:16'),(168,'info','plugins','Inverted plugin 6','2014-04-09 08:27:17'),(169,'info','login','Demo logged in','2014-04-10 00:21:19'),(170,'info','plugins','Inverted plugin 7','2014-04-10 00:44:15'),(171,'info','plugins','Inverted plugin 7','2014-04-10 00:47:09'),(172,'info','plugins','Inverted plugin 7','2014-04-10 00:47:15'),(173,'info','cron','Executing cron SelfHealing','2014-04-10 00:47:32'),(174,'info','cron','Reset cron 3','2014-04-10 00:56:37'),(175,'info','cron','Reset cron 1','2014-04-10 00:56:52'),(176,'info','cron','Reset cron 1','2014-04-10 00:56:55'),(177,'info','cron','Reset cron 3','2014-04-10 00:56:59'),(178,'info','cron','Reset cron 3','2014-04-10 00:57:01'),(179,'info','plugins','Inverted plugin 7','2014-04-10 01:08:08'),(180,'info','plugins','Inverted plugin 7','2014-04-10 01:46:22'),(181,'info','plugins','Inverted plugin 7','2014-04-10 01:46:25'),(182,'info','plugins','Inverted plugin 6','2014-04-10 01:46:45'),(183,'info','plugins','Inverted plugin 3','2014-04-10 01:50:42'),(184,'info','plugins','Inverted plugin 6','2014-04-10 01:51:39'),(185,'info','plugins','Inverted plugin 3','2014-04-10 01:51:42'),(186,'info','plugins','Inverted plugin 3','2014-04-10 01:54:12'),(187,'info','plugins','Inverted plugin 3','2014-04-10 02:50:30'),(188,'info','plugins','Inverted plugin 3','2014-04-10 02:50:33'),(189,'info','plugins','Inverted plugin 3','2014-04-10 02:55:14'),(190,'info','plugins','Inverted plugin 3','2014-04-10 02:55:15'),(191,'info','plugins','Inverted plugin 3','2014-04-10 02:55:43'),(192,'info','plugins','Inverted plugin 3','2014-04-10 02:55:43'),(193,'info','plugins','Inverted plugin 3','2014-04-10 02:55:59'),(194,'info','plugins','Inverted plugin 3','2014-04-10 02:56:00'),(195,'info','plugins','Inverted plugin 3','2014-04-10 03:07:23'),(196,'info','plugins','Inverted plugin 3','2014-04-10 03:07:24'),(197,'info','plugins','Inverted plugin 3','2014-04-10 03:07:41'),(198,'info','plugins','Inverted plugin 3','2014-04-10 03:07:42'),(199,'info','plugins','Inverted plugin 3','2014-04-10 03:10:09'),(200,'info','plugins','Inverted plugin 3','2014-04-10 03:10:10'),(201,'info','plugins','Inverted plugin 3','2014-04-10 03:11:31'),(202,'info','plugins','Inverted plugin 3','2014-04-10 03:11:32'),(203,'info','plugins','Inverted plugin 3','2014-04-10 03:11:45'),(204,'info','plugins','Inverted plugin 3','2014-04-10 03:11:46'),(205,'info','plugins','Inverted plugin 3','2014-04-10 03:11:57'),(206,'info','plugins','Inverted plugin 3','2014-04-10 03:11:58'),(207,'info','plugins','Inverted plugin 3','2014-04-10 03:14:01'),(208,'info','plugins','Inverted plugin 3','2014-04-10 03:14:02'),(209,'info','plugins','Inverted plugin 3','2014-04-10 03:23:55'),(210,'info','plugins','Inverted plugin 3','2014-04-10 03:23:56'),(211,'info','plugins','Inverted plugin 3','2014-04-10 03:24:12'),(212,'info','plugins','Inverted plugin 3','2014-04-10 03:24:13'),(213,'info','plugins','Inverted plugin 3','2014-04-10 03:24:41'),(214,'info','plugins','Inverted plugin 3','2014-04-10 03:24:42'),(215,'info','plugins','Inverted plugin 3','2014-04-10 03:27:52'),(216,'info','plugins','Inverted plugin 3','2014-04-10 03:27:53'),(217,'info','plugins','Inverted plugin 3','2014-04-10 03:29:19'),(218,'info','plugins','Inverted plugin 3','2014-04-10 03:29:20'),(219,'info','plugins','Inverted plugin 3','2014-04-10 03:33:30'),(220,'info','plugins','Inverted plugin 3','2014-04-10 03:33:31'),(221,'info','plugins','Inverted plugin 3','2014-04-10 03:35:51'),(222,'info','plugins','Inverted plugin 3','2014-04-10 03:35:52'),(223,'info','plugins','Inverted plugin 3','2014-04-10 03:36:49'),(224,'info','login','Demo logged in','2014-04-14 00:51:02'),(225,'info','plugins','Inverted plugin 3','2014-04-14 00:51:09'),(226,'info','plugins','Inverted plugin 3','2014-04-14 01:04:05'),(227,'info','plugins','Inverted plugin 3','2014-04-14 01:14:57'),(228,'info','plugins','Inverted plugin 8','2014-04-14 01:50:05'),(229,'info','plugins','Inverted plugin 8','2014-04-14 01:50:12'),(230,'info','plugins','Inverted plugin 8','2014-04-14 01:55:23'),(231,'info','plugins','Inverted plugin 8','2014-04-14 01:55:29'),(232,'info','login','Demo logged out','2014-04-14 03:22:43'),(233,'info','login','Demo logged in','2014-04-14 03:23:24'),(234,'info','cron','Reset cron 1','2014-04-14 03:39:13'),(235,'info','login','Demo logged in','2014-04-15 00:09:29'),(236,'info','cron','Reset cron 1','2014-04-15 02:39:41'),(237,'info','login','Demo logged in','2014-04-16 00:39:15'),(238,'info','login','Demo logged out','2014-04-16 00:44:13'),(239,'info','login','Demo logged in','2014-04-16 00:44:16'),(240,'info','login','Demo logged in','2014-04-22 00:12:54'),(241,'info','navigation','Created / updated element news','2014-04-22 00:13:47'),(242,'info','login','Demo logged out','2014-04-22 00:15:14'),(243,'info','login','Demo logged in','2014-04-22 00:15:17'),(244,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:38'),(245,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:39'),(246,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:40'),(247,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:40'),(248,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:42'),(249,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:42'),(250,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:43'),(251,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:43'),(252,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:44'),(253,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:44'),(254,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:44'),(255,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:44'),(256,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:46'),(257,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:46'),(258,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:46'),(259,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:47'),(260,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:48'),(261,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:48'),(262,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:57'),(263,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:57'),(264,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:57'),(265,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:56:57'),(266,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:57:00'),(267,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:57:00'),(268,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:57:01'),(269,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 00:57:01'),(270,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:16'),(271,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:16'),(272,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:17'),(273,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:17'),(274,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:18'),(275,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:18'),(276,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:19'),(277,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:19'),(278,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:20'),(279,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:20'),(280,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:21'),(281,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:00:21'),(282,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:02:06'),(283,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:02:06'),(284,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:02:08'),(285,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:02:08'),(286,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:02:56'),(287,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:02:56'),(288,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:07'),(289,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:07'),(290,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:45'),(291,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:45'),(292,'info','plugins','Inverted plugin 8','2014-04-22 01:04:50'),(293,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:50'),(294,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:50'),(295,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:53'),(296,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:53'),(297,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:57'),(298,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:57'),(299,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:57'),(300,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:04:57'),(301,'info','plugins','Inverted plugin 8','2014-04-22 01:05:03'),(302,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:04'),(303,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:04'),(304,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:06'),(305,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:06'),(306,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:06'),(307,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:06'),(308,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:10'),(309,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:10'),(310,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:11'),(311,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:11'),(312,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:12'),(313,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:12'),(314,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:13'),(315,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:13'),(316,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:13'),(317,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:14'),(318,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:15'),(319,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:15'),(320,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:23'),(321,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:23'),(322,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:26'),(323,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:05:27'),(324,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:23'),(325,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:23'),(326,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:25'),(327,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:25'),(328,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:32'),(329,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:32'),(330,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:33'),(331,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:33'),(332,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:35'),(333,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:35'),(334,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:50'),(335,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:06:50'),(336,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:09:12'),(337,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:09:12'),(338,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:09:34'),(339,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:09:34'),(340,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:11:43'),(341,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:11:43'),(342,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:11:51'),(343,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:11:51'),(344,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:13:04'),(345,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:13:32'),(346,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:13:32'),(347,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:13:58'),(348,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:13:58'),(349,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:00'),(350,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:00'),(351,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:00'),(352,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:00'),(353,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:01'),(354,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:01'),(355,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:03'),(356,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:03'),(357,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:05'),(358,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:05'),(359,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:06'),(360,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:06'),(361,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:08'),(362,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:08'),(363,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:11'),(364,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:12'),(365,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:13'),(366,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:14:13'),(367,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:39'),(368,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:39'),(369,'info','plugins','Inverted plugin 4','2014-04-22 01:16:45'),(370,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:45'),(371,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:45'),(372,'info','plugins','Inverted plugin 4','2014-04-22 01:16:46'),(373,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:47'),(374,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:47'),(375,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:49'),(376,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:50'),(377,'info','plugins','Inverted plugin 4','2014-04-22 01:16:58'),(378,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:59'),(379,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:16:59'),(380,'info','plugins','Inverted plugin 4','2014-04-22 01:17:00'),(381,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:17:00'),(382,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:17:00'),(383,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:17:02'),(384,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:17:02'),(385,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:18:10'),(386,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:18:10'),(387,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:18:39'),(388,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:18:39'),(389,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:18:43'),(390,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:18:43'),(391,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:21:24'),(392,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:21:24'),(393,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:21:26'),(394,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:21:26'),(395,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:21:27'),(396,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:21:27'),(397,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:21:28'),(398,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:21:28'),(399,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:13'),(400,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:14'),(401,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:17'),(402,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:17'),(403,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:37'),(404,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:37'),(405,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:38'),(406,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:38'),(407,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:45'),(408,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:46'),(409,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:56'),(410,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:56'),(411,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:57'),(412,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:22:58'),(413,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:23:07'),(414,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:23:07'),(415,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:23:25'),(416,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:23:25'),(417,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:23:26'),(418,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:23:27'),(419,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:27:36'),(420,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:27:36'),(421,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:28:11'),(422,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:28:11'),(423,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:28:12'),(424,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:28:12'),(425,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:28:15'),(426,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:28:15'),(427,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:32:23'),(428,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:32:23'),(429,'info','login','Demo logged out','2014-04-22 01:34:29'),(430,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:34:30'),(431,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:34:30'),(432,'info','login','Demo logged in','2014-04-22 01:34:32'),(433,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:34:32'),(434,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:34:33'),(435,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:34:37'),(436,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:34:37'),(437,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:35:39'),(438,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:35:39'),(439,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:44:38'),(440,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:44:38'),(441,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:44:43'),(442,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:44:44'),(443,'info','plugins','Inverted plugin 9','2014-04-22 01:44:46'),(444,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:44:47'),(445,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:44:47'),(446,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:06'),(447,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:06'),(448,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:07'),(449,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:07'),(450,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:08'),(451,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:08'),(452,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:15'),(453,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:15'),(454,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:22'),(455,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:45:22'),(456,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:00'),(457,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:00'),(458,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:01'),(459,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:01'),(460,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:06'),(461,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:06'),(462,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:06'),(463,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:06'),(464,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:25'),(465,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:25'),(466,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:37'),(467,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:37'),(468,'info','plugins','Inverted plugin 9','2014-04-22 01:47:40'),(469,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:40'),(470,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:47:40'),(471,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:09'),(472,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:10'),(473,'info','plugins','Inverted plugin 9','2014-04-22 01:48:12'),(474,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:12'),(475,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:12'),(476,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:13'),(477,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:13'),(478,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:13'),(479,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:13'),(480,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:17'),(481,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:17'),(482,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:29'),(483,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:48:29'),(484,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:50:32'),(485,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:50:32'),(486,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:50:39'),(487,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:50:39'),(488,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:50:41'),(489,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:50:41'),(490,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:51:45'),(491,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:51:45'),(492,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:54:31'),(493,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:54:31'),(494,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:54:45'),(495,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:54:45'),(496,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:54:47'),(497,'error','failureCall','Fail to call: Controller_Frontend','2014-04-22 01:54:47'),(498,'error','failureCall','Fail to call: Controller_Frontendaction_error','2014-04-22 01:55:36'),(499,'error','failureCall','Fail to call: Controller_Frontendaction_error','2014-04-22 01:55:37'),(500,'error','failureCall','Fail to call: Controller_Frontendaction_error','2014-04-22 01:55:38'),(501,'error','failureCall','Fail to call: Controller_Frontendaction_error','2014-04-22 01:55:38'),(502,'error','failureCall','Fail to call: Controller_Frontend::action_favicon.ico','2014-04-22 01:56:25'),(503,'error','failureCall','Fail to call: Controller_Frontend::action_favicon.ico','2014-04-22 01:56:25'),(504,'error','failureCall','Fail to call: Controller_Frontend::action_favicon.ico','2014-04-22 01:56:27'),(505,'error','failureCall','Fail to call: Controller_Frontend::action_favicon.ico','2014-04-22 01:56:27'),(506,'error','failureCall','Fail to call: Controller_Frontend::action_favicon.ico','2014-04-22 01:57:57'),(507,'error','failureCall','Fail to call: Controller_Frontend::action_favicon.ico','2014-04-22 01:57:57'),(508,'error','failureCall','Fail to call: Controller_Frontend::action_favicon.ico','2014-04-22 01:58:01'),(509,'error','failureCall','Fail to call: Controller_Frontend::action_favicon.ico','2014-04-22 01:58:01'),(510,'info','plugins','Inverted plugin 10','2014-04-22 02:28:38'),(511,'info','plugins','Inverted plugin 10','2014-04-22 02:38:43'),(512,'info','plugins','Inverted plugin 10','2014-04-22 02:39:22'),(513,'info','plugins','Inverted plugin 10','2014-04-22 02:40:15'),(514,'info','plugins','Inverted plugin 10','2014-04-22 02:43:08'),(515,'info','plugins','Inverted plugin 10','2014-04-22 02:43:29'),(516,'info','plugins','Inverted plugin 10','2014-04-22 02:44:39'),(517,'info','login','Demo logged in','2014-04-23 00:23:21'),(518,'info','login','Demo logged out','2014-04-23 00:23:24'),(519,'info','login','Demo logged in','2014-04-23 00:23:27'),(520,'info','plugins','Inverted plugin 10','2014-04-23 00:25:00'),(521,'info','plugins','Inverted plugin 10','2014-04-23 00:25:02'),(522,'info','plugins','Inverted plugin 10','2014-04-23 00:25:50'),(523,'info','plugins','Inverted plugin 10','2014-04-23 00:25:54'),(524,'error','failureCall','Fail to call: Controller_Frontend::action_[object object],[object object]','2014-04-23 00:58:09'),(525,'error','failureCall','Fail to call: Controller_Frontend::action_[object object],[object object]','2014-04-23 00:58:09'),(526,'error','failureCall','Fail to call: Controller_Frontend::action_[&quot;2&quot;,&quot;3&quot;]','2014-04-23 02:04:10'),(527,'error','failureCall','Fail to call: Controller_Frontend::action_[&quot;2&quot;,&quot;3&quot;]','2014-04-23 02:04:10'),(528,'error','failureCall','Fail to call: Controller_Backend::action_user','2014-04-23 03:45:45'),(529,'error','failureCall','Fail to call: Controller_Backend::action_user','2014-04-23 03:45:45'),(530,'info','login','Demo logged in','2014-04-24 00:10:40'),(531,'error','failureCall','Fail to call: Controller_Frontend::action_backed','2014-04-25 00:35:02'),(532,'error','failureCall','Fail to call: Controller_Frontend::action_backed','2014-04-25 00:35:02'),(533,'info','login','Demo logged in','2014-04-25 00:35:08'),(534,'info','login','Demo logged in','2014-04-28 00:59:35'),(535,'warning','Gridhandle','Failure to call image','2014-04-28 01:54:42'),(536,'warning','Gridhandle','Failure to call text','2014-04-28 01:56:28'),(537,'warning','Gridhandle','Failure to call text','2014-04-28 01:56:55'),(538,'warning','Gridhandle','Failure to call text','2014-04-28 01:57:36'),(539,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_image','2014-04-28 02:15:28'),(540,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_3','2014-04-28 02:29:12'),(541,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_3','2014-04-28 04:10:25'),(542,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_3','2014-04-28 04:10:29'),(543,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_  text ','2014-04-28 04:51:18'),(544,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_  text ','2014-04-28 04:51:29'),(545,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_ text ','2014-04-28 04:52:00'),(546,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_ text ','2014-04-28 04:52:02'),(547,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_ text  player-revert','2014-04-28 04:52:02'),(548,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_3','2014-04-28 05:11:04'),(549,'info','login','Demo logged in','2014-04-29 00:58:10'),(550,'info','navigation','Created / updated element home','2014-04-29 01:23:40'),(551,'info','navigation','Created / updated element plugins','2014-04-29 01:32:09'),(552,'error','failureCall','Fail to call: Controller_Frontend::action_bakend','2014-04-29 01:55:23'),(553,'error','failureCall','Fail to call: Controller_Frontend::action_bakend','2014-04-29 01:55:23'),(554,'info','login','Demo logged in','2014-05-03 15:43:35'),(555,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:43:35'),(556,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:43:35'),(557,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:45:04'),(558,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:45:04'),(559,'error','failureCall','Fail to call: Controller_Frontend::action_assets','2014-05-03 15:47:00'),(560,'error','failureCall','Fail to call: Controller_Frontend::action_assets','2014-05-03 15:47:00'),(561,'error','failureCall','Fail to call: Controller_Frontend::action_assets','2014-05-03 15:47:04'),(562,'error','failureCall','Fail to call: Controller_Frontend::action_assets','2014-05-03 15:47:04'),(563,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:47:55'),(564,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:47:55'),(565,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:48:22'),(566,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:48:22'),(567,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:50:47'),(568,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:50:47'),(569,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_false','2014-05-03 15:50:54'),(570,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:51:36'),(571,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:51:36'),(572,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:51:46'),(573,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:51:46'),(574,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_false','2014-05-03 15:52:16'),(575,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_false','2014-05-03 15:52:18'),(576,'warning','Gridhandle','Failure to call Redsheepcore_Grid::editElement_false','2014-05-03 15:52:19'),(577,'info','login','Demo logged out','2014-05-03 15:52:46'),(578,'info','login','Demo logged in','2014-05-03 15:52:49'),(579,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:52:49'),(580,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-03 15:52:49'),(581,'info','login','Demo logged in','2014-05-04 11:20:33'),(582,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-04 11:20:33'),(583,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-04 11:20:33'),(584,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-04 11:21:27'),(585,'error','plugins','/srv/www/www.localdev.ragnarok.de/RedSheepCMS/application/classes/Plugins/Local/ is no plugin directory','2014-05-04 11:21:27'),(586,'error','failureCall','Fail to call: Controller_Backend::action_database','2014-05-04 12:10:36'),(587,'error','failureCall','Fail to call: Controller_Backend::action_database','2014-05-04 12:10:36'),(588,'info','login','Demo logged in','2014-05-04 14:36:44'),(589,'info','login','Demo logged in','2014-05-05 14:33:36'),(590,'info','plugins','Inverted plugin 11','2014-05-05 15:04:17'),(591,'info','plugins','Inverted plugin 11','2014-05-05 15:04:26'),(592,'info','plugins','Inverted plugin 11','2014-05-05 15:04:27'),(593,'info','plugins','Inverted plugin 11','2014-05-05 15:11:56'),(594,'info','plugins','Inverted plugin 11','2014-05-05 15:11:57'),(595,'info','plugins','Inverted plugin 11','2014-05-05 15:14:50'),(596,'info','plugins','Inverted plugin 11','2014-05-05 15:14:51'),(597,'info','plugins','Inverted plugin 11','2014-05-05 15:17:34'),(598,'info','plugins','Inverted plugin 11','2014-05-05 15:17:35'),(599,'info','plugins','Inverted plugin 11','2014-05-05 15:19:59'),(600,'info','plugins','Inverted plugin 11','2014-05-05 15:20:00'),(601,'info','plugins','Inverted plugin 11','2014-05-05 15:24:05'),(602,'info','plugins','Inverted plugin 11','2014-05-05 15:24:06'),(603,'info','plugins','Inverted plugin 11','2014-05-05 15:26:06'),(604,'info','plugins','Inverted plugin 11','2014-05-05 15:26:07'),(605,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-05 15:26:28'),(606,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-05 15:26:28'),(607,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-05 15:26:29'),(608,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-05 15:26:29'),(609,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:36:41'),(610,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:36:41'),(611,'info','login','Demo logged in','2014-05-06 01:39:12'),(612,'info','plugins','Inverted plugin 11','2014-05-06 01:39:17'),(613,'info','plugins','Inverted plugin 11','2014-05-06 01:39:18'),(614,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:39:56'),(615,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:39:56'),(616,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:39:57'),(617,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:39:57'),(618,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:40:07'),(619,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:40:07'),(620,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:40:18'),(621,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:40:18'),(622,'info','plugins','Inverted plugin 11','2014-05-06 01:40:23'),(623,'info','plugins','Inverted plugin 11','2014-05-06 01:40:24'),(624,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:40:25'),(625,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:40:26'),(626,'error','failureCall','Fail to call: Controller_Frontend::action_gallery','2014-05-06 01:40:26'),(627,'error','failureCall','Fail to call: Controller_Frontend::action_gallery','2014-05-06 01:40:26'),(628,'info','plugins','Inverted plugin 11','2014-05-06 01:40:42'),(629,'info','plugins','Inverted plugin 11','2014-05-06 01:40:43'),(630,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:40:44'),(631,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:40:44'),(632,'info','plugins','Inverted plugin 11','2014-05-06 01:42:00'),(633,'info','plugins','Inverted plugin 11','2014-05-06 01:42:02'),(634,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:42:04'),(635,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:42:04'),(636,'info','plugins','Inverted plugin 11','2014-05-06 01:42:50'),(637,'info','plugins','Inverted plugin 11','2014-05-06 01:42:51'),(638,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:42:53'),(639,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:42:53'),(640,'info','plugins','Inverted plugin 11','2014-05-06 01:44:00'),(641,'info','plugins','Inverted plugin 11','2014-05-06 01:44:01'),(642,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:44:02'),(643,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:44:03'),(644,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:44:51'),(645,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:44:51'),(646,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:44:57'),(647,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:44:57'),(648,'info','plugins','Inverted plugin 11','2014-05-06 01:45:11'),(649,'info','plugins','Inverted plugin 11','2014-05-06 01:45:12'),(650,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:45:13'),(651,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:45:13'),(652,'info','plugins','Inverted plugin 11','2014-05-06 01:45:39'),(653,'info','plugins','Inverted plugin 11','2014-05-06 01:45:40'),(654,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:45:41'),(655,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:45:41'),(656,'info','plugins','Inverted plugin 11','2014-05-06 01:46:09'),(657,'info','plugins','Inverted plugin 11','2014-05-06 01:46:10'),(658,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:46:11'),(659,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:46:11'),(660,'info','plugins','Inverted plugin 11','2014-05-06 01:46:39'),(661,'info','plugins','Inverted plugin 11','2014-05-06 01:46:40'),(662,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:46:41'),(663,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:46:41'),(664,'info','plugins','Inverted plugin 11','2014-05-06 01:47:01'),(665,'info','plugins','Inverted plugin 11','2014-05-06 01:47:02'),(666,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:47:03'),(667,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:47:03'),(668,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:47:08'),(669,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:47:08'),(670,'info','plugins','Inverted plugin 11','2014-05-06 01:49:22'),(671,'info','plugins','Inverted plugin 11','2014-05-06 01:49:23'),(672,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:49:25'),(673,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:49:25'),(674,'info','plugins','Inverted plugin 11','2014-05-06 01:49:34'),(675,'info','plugins','Inverted plugin 11','2014-05-06 01:49:35'),(676,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:49:37'),(677,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:49:37'),(678,'info','plugins','Inverted plugin 11','2014-05-06 01:50:27'),(679,'info','plugins','Inverted plugin 11','2014-05-06 01:50:28'),(680,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:50:29'),(681,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:50:29'),(682,'info','plugins','Inverted plugin 11','2014-05-06 01:51:36'),(683,'info','plugins','Inverted plugin 11','2014-05-06 01:51:37'),(684,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:51:39'),(685,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:51:39'),(686,'info','plugins','Inverted plugin 11','2014-05-06 01:51:52'),(687,'info','plugins','Inverted plugin 11','2014-05-06 01:51:53'),(688,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:51:54'),(689,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:51:54'),(690,'info','plugins','Inverted plugin 11','2014-05-06 01:52:13'),(691,'info','plugins','Inverted plugin 11','2014-05-06 01:52:14'),(692,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:52:15'),(693,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:52:15'),(694,'info','plugins','Inverted plugin 11','2014-05-06 01:52:25'),(695,'info','plugins','Inverted plugin 11','2014-05-06 01:52:26'),(696,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:52:29'),(697,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:52:29'),(698,'info','plugins','Inverted plugin 11','2014-05-06 01:53:18'),(699,'info','plugins','Inverted plugin 11','2014-05-06 01:53:20'),(700,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:53:21'),(701,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:53:21'),(702,'info','plugins','Inverted plugin 11','2014-05-06 01:53:44'),(703,'info','plugins','Inverted plugin 11','2014-05-06 01:53:45'),(704,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:53:47'),(705,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:53:47'),(706,'info','plugins','Inverted plugin 11','2014-05-06 01:54:39'),(707,'info','plugins','Inverted plugin 11','2014-05-06 01:54:40'),(708,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:54:43'),(709,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:54:43'),(710,'info','plugins','Inverted plugin 11','2014-05-06 01:54:51'),(711,'info','plugins','Inverted plugin 11','2014-05-06 01:54:51'),(712,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:54:53'),(713,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:54:53'),(714,'info','plugins','Inverted plugin 11','2014-05-06 01:55:10'),(715,'info','plugins','Inverted plugin 11','2014-05-06 01:55:11'),(716,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:55:13'),(717,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:55:13'),(718,'info','plugins','Inverted plugin 11','2014-05-06 01:55:41'),(719,'info','plugins','Inverted plugin 11','2014-05-06 01:55:42'),(720,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:55:44'),(721,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:55:44'),(722,'info','plugins','Inverted plugin 11','2014-05-06 01:56:36'),(723,'info','plugins','Inverted plugin 11','2014-05-06 01:56:37'),(724,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:56:38'),(725,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:56:39'),(726,'info','plugins','Inverted plugin 11','2014-05-06 01:57:23'),(727,'info','plugins','Inverted plugin 11','2014-05-06 01:57:24'),(728,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:57:25'),(729,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:57:25'),(730,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:58:03'),(731,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:58:04'),(732,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:58:20'),(733,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 01:58:20'),(734,'info','plugins','Inverted plugin 11','2014-05-06 02:03:03'),(735,'info','plugins','Inverted plugin 11','2014-05-06 02:03:04'),(736,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 02:03:05'),(737,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 02:03:05'),(738,'info','plugins','Inverted plugin 11','2014-05-06 02:03:26'),(739,'info','plugins','Inverted plugin 5','2014-05-06 02:04:45'),(740,'info','plugins','Inverted plugin 5','2014-05-06 02:05:15'),(741,'info','plugins','Inverted plugin 11','2014-05-06 02:06:07'),(742,'info','plugins','Inverted plugin 11','2014-05-06 02:13:40'),(743,'info','plugins','Inverted plugin 11','2014-05-06 02:13:57'),(744,'info','plugins','Inverted plugin 11','2014-05-06 02:14:57'),(745,'info','plugins','Inverted plugin 11','2014-05-06 02:14:58'),(746,'info','plugins','Inverted plugin 11','2014-05-06 02:15:33'),(747,'info','plugins','Inverted plugin 11','2014-05-06 02:15:34'),(748,'info','plugins','Inverted plugin 11','2014-05-06 02:16:35'),(749,'info','plugins','Inverted plugin 11','2014-05-06 02:16:36'),(750,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:27:27'),(751,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:27:41'),(752,'error','failureCall','Fail to call: Controller_Frontend::action_imag','2014-05-06 03:27:44'),(753,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:27:49'),(754,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:27:51'),(755,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:00'),(756,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:15'),(757,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:21'),(758,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:27'),(759,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:30'),(760,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:35'),(761,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:35'),(762,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:45'),(763,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:28:56'),(764,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:29:00'),(765,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:29:04'),(766,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:29:09'),(767,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:31:38'),(768,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:31:42'),(769,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:31:47'),(770,'error','failureCall','Fail to call: Controller_Frontend::action_ads','2014-05-06 03:31:50'),(771,'error','failureCall','Fail to call: Controller_Frontend::action_ads','2014-05-06 03:31:59'),(772,'error','failureCall','Fail to call: Controller_Frontend::action_ads','2014-05-06 03:32:00'),(773,'error','failureCall','Fail to call: Controller_Frontend::action_ads','2014-05-06 03:32:00'),(774,'error','failureCall','Fail to call: Controller_Frontend::action_ads','2014-05-06 03:32:01'),(775,'error','failureCall','Fail to call: Controller_Frontend::action_ads','2014-05-06 03:32:01'),(776,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:32:06'),(777,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:32:26'),(778,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:33:04'),(779,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:33:04'),(780,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:33:09'),(781,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:33:09'),(782,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:33:23'),(783,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:36:05'),(784,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:38:16'),(785,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:38:34'),(786,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:38:34'),(787,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:40:19'),(788,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:40:19'),(789,'info','plugins','Inverted plugin 11','2014-05-06 03:50:33'),(790,'info','plugins','Inverted plugin 11','2014-05-06 03:50:34'),(791,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:51:10'),(792,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:51:10'),(793,'info','plugins','Inverted plugin 11','2014-05-06 03:51:37'),(794,'info','plugins','Inverted plugin 11','2014-05-06 03:51:38'),(795,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:51:39'),(796,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:51:40'),(797,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 03:51:44'),(798,'error','failureCall','Fail to call: Controller_Frontend::action_asasas','2014-05-06 03:51:44'),(799,'info','plugins','Inverted plugin 11','2014-05-06 03:52:04'),(800,'info','plugins','Inverted plugin 11','2014-05-06 03:52:05'),(801,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:52:12'),(802,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:52:12'),(803,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:52:49'),(804,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 03:52:49'),(805,'info','plugins','Inverted plugin 11','2014-05-06 04:08:30'),(806,'info','plugins','Inverted plugin 11','2014-05-06 04:08:31'),(807,'info','plugins','Inverted plugin 11','2014-05-06 04:29:39'),(808,'info','plugins','Inverted plugin 11','2014-05-06 04:29:39'),(809,'info','plugins','Inverted plugin 11','2014-05-06 04:30:05'),(810,'info','plugins','Inverted plugin 11','2014-05-06 04:30:07'),(811,'info','plugins','Inverted plugin 6','2014-05-06 04:30:17'),(812,'info','plugins','Inverted plugin 4','2014-05-06 04:30:19'),(813,'info','plugins','Inverted plugin 10','2014-05-06 04:30:21'),(814,'info','plugins','Inverted plugin 11','2014-05-06 04:32:36'),(815,'info','plugins','Inverted plugin 11','2014-05-06 04:32:37'),(816,'info','plugins','Inverted plugin 11','2014-05-06 04:35:42'),(817,'info','plugins','Inverted plugin 11','2014-05-06 04:35:43'),(818,'info','plugins','Inverted plugin 11','2014-05-06 04:42:05'),(819,'info','plugins','Inverted plugin 11','2014-05-06 04:42:06'),(820,'error','failureCall','Fail to call: Controller_Frontend::action_undefined','2014-05-06 04:42:09'),(821,'error','failureCall','Fail to call: Controller_Frontend::action_undefined','2014-05-06 04:42:09'),(822,'error','failureCall','Fail to call: Controller_Frontend::action_undefined','2014-05-06 04:42:11'),(823,'error','failureCall','Fail to call: Controller_Frontend::action_undefined','2014-05-06 04:42:11'),(824,'info','plugins','Inverted plugin 11','2014-05-06 04:42:32'),(825,'info','plugins','Inverted plugin 11','2014-05-06 04:42:33'),(826,'error','failureCall','Fail to call: Controller_Frontend::action_undefined','2014-05-06 04:42:36'),(827,'error','failureCall','Fail to call: Controller_Frontend::action_undefined','2014-05-06 04:42:36'),(828,'info','plugins','Inverted plugin 11','2014-05-06 04:42:58'),(829,'info','plugins','Inverted plugin 11','2014-05-06 04:42:59'),(830,'info','plugins','Inverted plugin 11','2014-05-06 04:45:51'),(831,'info','plugins','Inverted plugin 11','2014-05-06 04:45:52'),(832,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:47:49'),(833,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:49:15'),(834,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:49:16'),(835,'info','plugins','Inverted plugin 11','2014-05-06 04:52:55'),(836,'info','plugins','Inverted plugin 11','2014-05-06 04:52:56'),(837,'info','plugins','Inverted plugin 11','2014-05-06 04:54:31'),(838,'info','plugins','Inverted plugin 11','2014-05-06 04:54:32'),(839,'info','plugins','Inverted plugin 11','2014-05-06 04:54:42'),(840,'info','plugins','Inverted plugin 11','2014-05-06 04:54:52'),(841,'info','plugins','Inverted plugin 11','2014-05-06 04:55:40'),(842,'info','plugins','Inverted plugin 11','2014-05-06 04:55:41'),(843,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:55:59'),(844,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:56:20'),(845,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:56:20'),(846,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:56:47'),(847,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:57:00'),(848,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:57:26'),(849,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:57:48'),(850,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:57:53'),(851,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:57:58'),(852,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:58:10'),(853,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:58:44'),(854,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:58:56'),(855,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:58:56'),(856,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:59:04'),(857,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:59:04'),(858,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:59:21'),(859,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:59:21'),(860,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:59:29'),(861,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:59:29'),(862,'info','plugins','Inverted plugin 11','2014-05-06 04:59:54'),(863,'info','plugins','Inverted plugin 11','2014-05-06 04:59:55'),(864,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:59:59'),(865,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 04:59:59'),(866,'info','plugins','Inverted plugin 11','2014-05-06 05:00:35'),(867,'info','plugins','Inverted plugin 11','2014-05-06 05:00:36'),(868,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 05:00:47'),(869,'error','failureCall','Fail to call: Controller_Frontend::action_image','2014-05-06 05:00:47');
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
INSERT INTO `crons` VALUES (1,'SystemMonitor',3,'monitor','2014-05-04 11:30:03','0000-00-00 00:00:00','10',0,'Plugin not found');
/*!40000 ALTER TABLE `crons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `uploadAt` datetime DEFAULT NULL,
  `author` varchar(75) DEFAULT NULL,
  `headline` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'http://allaboutuarts.ca/wp-content/uploads/2012/07/placeholder_2.jpg','2014-05-05 10:00:01','Alex','First'),(2,'http://allaboutuarts.ca/wp-content/uploads/2012/07/placeholder_2.jpg','2014-05-05 10:00:02','Alex','Second'),(3,'http://allaboutuarts.ca/wp-content/uploads/2012/07/placeholder_2.jpg','2014-05-05 10:00:03','Alex','Third'),(4,'http://allaboutuarts.ca/wp-content/uploads/2012/07/placeholder_2.jpg','2014-05-05 10:00:04','Alex','Fourth'),(5,'http://allaboutuarts.ca/wp-content/uploads/2012/07/placeholder_2.jpg','2014-05-05 10:00:05','Alex','Fifth');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langshort` varchar(45) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'en','test','HELLO?!'),(2,'de','test','hallo?'),(3,'en','testas','ROFL'),(4,'de','testas','ROFL');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs`
--

LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` VALUES (1,'version','0.5.0'),(2,'template','redsheepstudios'),(3,'baseHost','http://dev.ghost.de/'),(4,'title','Redsheep CMS'),(5,'staticBaseHost','http://dev.ghost.de/assets/'),(8,'Plugin_RedSheepBugTracker','{showMaxTickets:0,hideSolvedTickets:0}'),(9,'Plugin_RedSheepScrollTop','{btnValue:SOENKE!}'),(10,'bannerLink','0'),(13,'Plugin_GoogleAnalytics','{gaAccount:0}'),(14,'Plugin_RedSheepGallery',''),(15,'slogan','The first and last CMS you ever need');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) DEFAULT NULL COMMENT '	',
  `type` varchar(75) DEFAULT NULL,
  `configElements` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` VALUES (3,'Text','text',''),(4,'Image','image',''),(5,'Video','video','');
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plugins`
--

LOCK TABLES `plugins` WRITE;
/*!40000 ALTER TABLE `plugins` DISABLE KEYS */;
INSERT INTO `plugins` VALUES (1,'RedSheepCore','RedSheep Core Plugin',0,'2014-04-03 03:53:34','0000-00-00 00:00:00','0.9.3','RedSheep Studios','Core','http://redsheepstudios.com/','frontend'),(2,'RedSheepMonitor','RedSheep Monitor Plugin',0,'2014-04-03 03:53:34','0000-00-00 00:00:00','0.4.3','RedSheep Studios','Core','http://redsheepstudios.com/','frontend'),(4,'RedSheepScrollTop','Creates a little box \"Scroll to top on bottom page\"',0,'2014-04-03 04:17:24','0000-00-00 00:00:00','1.0.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(5,'RedSheepBugTracker','Simple BugTracker',0,'2014-04-04 01:27:47','0000-00-00 00:00:00','1.0.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(6,'RedSheepNewsletter','Simple RedSheepNewsletter',0,'2014-04-09 08:06:29','0000-00-00 00:00:00','0.9.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(7,'RedSheepSelfHealing','RedSheepSelfHealing',0,'2014-04-10 00:32:46','0000-00-00 00:00:00','0.5.0','RedSheep Studios','Core','http://redsheepstudios.com/','frontend'),(8,'RedSheepStore','RedSheep Store Plugin',0,'2014-04-14 01:50:02','0000-00-00 00:00:00','0.4.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(10,'GoogleAnalytics','Google Analytics Interface for RedSheep Studios CMS',0,'2014-04-22 02:27:06','0000-00-00 00:00:00','1.0.0','RedSheep Studios','Community','http://redsheepstudios.com/','frontend'),(11,'RedSheepGallery','RedSheep Gallery Plugin',1,'2014-05-05 14:33:36','2014-05-06 05:00:36','0.0.1','RedSheep Studios','Community','http://redsheepstudios.com/','frontend');
/*!40000 ALTER TABLE `plugins` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staticsites`
--

LOCK TABLES `staticsites` WRITE;
/*!40000 ALTER TABLE `staticsites` DISABLE KEYS */;
INSERT INTO `staticsites` VALUES (1,'home','&nbsp;&lt;label class=&quot;redsheepHeadline&quot;&gt;Welcome!&lt;/label&gt;&lt;hr/&gt;&lt;p class=&quot;redsheepDescription&quot;&gt;    HI! This site is currently on progress. Please bear with me.&lt;/p&gt;'),(2,'download overview',' <label class=\"redsheepHeadline\">DOWNLOADS</label> <hr> <p class=\"redsheepDescription\">   %lang:\'testas\'% HELLO?!  You can find our available versions on our <a href=\"https://github.com/Tyralcori/RedSheepCMS/\" target=\"_blank\" title=\"GITHUB Repository\">GITHUB</a> repository. Feel free to fork it. Thanks for so much response! </p>'),(3,'documentation',' <label class=\"redsheepHeadline\">DOCUMENTATION</label> <hr> <p class=\"redsheepDescription\">Guide for Version <a href=\"#\">0.5.0</a></p>'),(4,'plugins',' <label class=\"redsheepHeadline\">PLUGINS</label> <hr> <p class=\"redsheepDescription\">Pluginstore is in developement! Have fun!</p>'),(5,'roadmap',NULL),(7,'imprint',NULL),(8,'team','<label class=\"redsheepHeadline\">TEAM</label>\n<hr/>\n<p class=\"redsheepDescription\">\n<div class=\"row\">\n    <div class=\"col-md-2 col-md-offset-2 text-center\">\n        <div class=\"service-item\">\n            <img data-src=\"holder.js/140x140\" class=\"img-circle\" alt=\"140x140\" src=\"https://scontent-b-fra.xx.fbcdn.net/hphotos-prn1/t1.0-9/17496_10201233496190252_1385687456_n.jpg\" style=\"width: 140px; height: 140px;\">\n            <h4>Alexander Czichelski alias \"ScarecrowLambda\"</h4>\n            <p>Lead Software Developer</p>\n            <p></p>\n        </div>\n    </div>           \n    <div class=\"col-md-2 col-md-offset-2 text-center\">\n        <blockquote>Currently i did this project by my own without any help. If you want to help or contribute, write me!</blockquote>\n    </div>\n</div>\n</p>'),(9,'news','Test yourself :D'),(10,'contact',NULL),(11,'Peter','Peter...'),(12,'My new Site','TAKE THIS!'),(45,'community','<label class=\"redsheepHeadline\">Community Forum</label>\n<hr/>\n<p class=\"redsheepDescription\">\n    We need your ideas to decide, what you wish!\n</p>'),(64,'bugtracker','<label class=\"redsheepHeadline\">Bugtracker</label>\n<hr/>\n<p class=\"redsheepDescription\">\n    {% if bugTrackerReturn.tickets is iterable %}\n        {% if bugTrackerReturn.tickets.0 %}\n            {{ bugTrackerReturn.ticketCount }} Ticket(s) reported.\n            <hr/>\n            <table class=\"table table-striped table-bordered\">\n                <tr>\n                    <th>Description</th>\n                    <th>Since</th>\n                    <th>Priority</th>\n                    <th>Assigned ro</th>\n                    <th>Status</th>\n                    <th>Comment</th>\n                </tr>\n                {% for ticket in bugTrackerReturn.tickets %}    \n                <tr>\n                    <td><a href=\'/bugtracker/{{ ticket.id }}\' title=\'{{ ticket.bugDescribe }}\' name=\'Decsription\'>{{ ticket.bugDescribe|slice(0,40) }}..</a></td>\n                    <td>{{ ticket.sentOn }}</td>\n                    <td>{{ ticket.prio }}</td>\n                    <td>{{ ticket.assignedTo }}</td>\n                    <td>{{ ticket.status }}</td>\n                    <td>{{ ticket.comment }}</td>\n                </tr>\n                {% endfor %}\n            </table>\n        {% else %}\n            <div class=\"form-group\">\n                <label for=\"bugDesc\">Description</label>\n                <textarea class=\"form-control\" class=\"form-control\" id=\'bugDesc\' rows=\'2\' readonly>{{ bugTrackerReturn.tickets.bugDescribe }}</textarea>\n            </div>\n\n            <div class=\"form-group\">\n                <label for=\"sentOn\">Sent on</label>\n                <input type=\"text\" class=\"form-control\" id=\"sentOn\" name=\"sentOn\" placeholder=\"Link\" value=\"{{ bugTrackerReturn.tickets.sentOn }}\" readonly>\n            </div>\n\n            <div class=\"form-group\">\n                <label for=\"prio\">Prio</label>\n                <input type=\"text\" class=\"form-control\" id=\"prio\" name=\"prio\" placeholder=\"Type\" value=\"{{ bugTrackerReturn.tickets.prio }}\" readonly>\n            </div>\n\n            <div class=\"form-group\">\n                <label for=\"assignedTo\">Type</label>\n                <input type=\"text\" class=\"form-control\" id=\"assignedTo\" name=\"assignedTo\" placeholder=\"Type\" value=\"{{ bugTrackerReturn.tickets.assignedTo }}\" readonly>\n            </div>\n        \n            <div class=\"form-group\">\n                <label for=\"status\">Status</label>\n                <input type=\"text\" class=\"form-control\" id=\"status\" name=\"status\" placeholder=\"Type\" value=\"{{ bugTrackerReturn.tickets.status }}\" readonly>\n            </div>\n        \n            <div class=\"form-group\">\n                <label for=\"comment\">Comment</label>\n                <textarea class=\"form-control\" class=\"form-control\" id=\'comment\' rows=\'2\' readonly>{{ bugTrackerReturn.tickets.comment }}</textarea>\n            </div>\n        {% endif %}\n    {% endif %}\n</p>');
/*!40000 ALTER TABLE `staticsites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gridinfos`
--

DROP TABLE IF EXISTS `gridinfos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gridinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gridID` int(11) DEFAULT NULL,
  `gridName` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gridinfos`
--

LOCK TABLES `gridinfos` WRITE;
/*!40000 ALTER TABLE `gridinfos` DISABLE KEYS */;
INSERT INTO `gridinfos` VALUES (1,3,'Testgrid');
/*!40000 ALTER TABLE `gridinfos` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewports`
--

LOCK TABLES `viewports` WRITE;
/*!40000 ALTER TABLE `viewports` DISABLE KEYS */;
INSERT INTO `viewports` VALUES (1,'home','/','grid',3,1,'top'),(2,'download','/download','staticsite',2,1,'top'),(3,'documentation','/documentation','staticsite',3,1,'top'),(4,'plugins','/plugins','grid',3,1,'top'),(5,'roadmap','/roadmap','staticsite',5,1,'top'),(7,'imprint','/imprint','staticsite',7,1,'bottom'),(8,'team','/team','staticsite',8,1,'bottom'),(9,'news','/news','staticsite',9,1,'bottom'),(10,'contact','/contact','staticsite',10,1,'bottom'),(18,'sale','/salema','staticsite',11,0,'bottom'),(52,'community','/community','staticsite',45,1,'top'),(71,'bugtracker','/bugtracker','staticsite',47,1,'bottom');
/*!40000 ALTER TABLE `viewports` ENABLE KEYS */;
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

-- Dump completed on 2014-05-06 12:01:34
