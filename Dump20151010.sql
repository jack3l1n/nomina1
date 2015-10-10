CREATE DATABASE  IF NOT EXISTS `nomina1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `nomina1`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: nomina1
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `cedula` varchar(50) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `fecha_nacimiento` varchar(40) DEFAULT NULL,
  `eps` varchar(45) DEFAULT NULL,
  `rh` varchar(6) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `sucursal` varchar(45) DEFAULT NULL,
  `jefe_inmediato` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` VALUES ('1012354306','maria','pulido','trasversal 34 a sur ','maria@gmail.com',1234589,120365876,'0000-00-00 00:00:00','cruz blanca ','o','auxliar ','centro','diego ramires '),('1012369818','diego','velasquez','cale2435 sur ','dieg0919@hotmail.com',1234568,2147483647,'0000-00-00 00:00:00','famisanar','A','jefe de sistemas ','administracion','william '),('1012567987','alejandro','ramos','carrera 85 f sur ','ramos1@yahoo.es',2347890,2147483647,'19 de septiembre 1990','famisanar ','A-','auxiliar de bodega','centro 3 ','william');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informacion_empleado`
--

DROP TABLE IF EXISTS `informacion_empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informacion_empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_conyugue` varchar(45) DEFAULT NULL,
  `numero_hijos` varchar(45) DEFAULT NULL,
  `eps` varchar(45) DEFAULT NULL,
  `cedula_empleado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_em_de_idx` (`cedula_empleado`),
  CONSTRAINT `fk_em_de` FOREIGN KEY (`cedula_empleado`) REFERENCES `empleado` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informacion_empleado`
--

LOCK TABLES `informacion_empleado` WRITE;
/*!40000 ALTER TABLE `informacion_empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `informacion_empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'nomina1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-10 16:59:32
