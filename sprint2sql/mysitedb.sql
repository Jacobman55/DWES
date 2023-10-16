-- MariaDB dump 10.19  Distrib 10.11.3-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mysitedb
-- ------------------------------------------------------
-- Server version	10.11.3-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tComentarios`
--

DROP TABLE IF EXISTS `tComentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tComentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `juego_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `juego_id` (`juego_id`),
  CONSTRAINT `tComentarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `tUsuarios` (`id`),
  CONSTRAINT `tComentarios_ibfk_2` FOREIGN KEY (`juego_id`) REFERENCES `tJuegos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tComentarios`
--

LOCK TABLES `tComentarios` WRITE;
/*!40000 ALTER TABLE `tComentarios` DISABLE KEYS */;
INSERT INTO `tComentarios` VALUES
(1,'Me encanta',1,1),
(2,'Me flipa',2,2),
(4,'Increible',6,3),
(5,'Amazing',7,4),
(6,'Mola',8,5);
/*!40000 ALTER TABLE `tComentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tJuegos`
--

DROP TABLE IF EXISTS `tJuegos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tJuegos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `url_imagen` varchar(400) DEFAULT NULL,
  `año` year(4) DEFAULT NULL,
  `compañia` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tJuegos`
--

LOCK TABLES `tJuegos` WRITE;
/*!40000 ALTER TABLE `tJuegos` DISABLE KEYS */;
INSERT INTO `tJuegos` VALUES
(1,'Minecraft','https://www.google.com/search?sca_esv=573754553&rlz=1C1UEAD_esES1075ES1075&q=Minecraft+a%C3%B1o+salida&tbm=isch&source=lnms&sa=X&ved=2ahUKEwinzpyAwPqBAxXaTaQEHejtDhUQ0pQJegQIDBAB&biw=1366&bih=651&dpr=1&safe=active&ssui=on#imgrc=O6Ek7LreSizuvM',2009,'Mojang'),
(2,'FIFA','https://www.google.com/search?sca_esv=573754553&rlz=1C1UEAD_esES1075ES1075&q=A%C3%B1o+salida+primer+juego+fifa&tbm=isch&source=lnms&sa=X&ved=2ahUKEwj_suufwPqBAxUFUaQEHTRbBfQQ0pQJegQICRAB&biw=1366&bih=651&dpr=1&safe=active&ssui=on#imgrc=pR2qBGB5EoN84M',1993,'EA'),
(3,'LOL','https://www.google.com/search?sca_esv=573754553&rlz=1C1UEAD_esES1075ES1075&q=league+of+legends+a%C3%B1o+de+salida&tbm=isch&source=lnms&sa=X&ved=2ahUKEwiJneGowPqBAxWAQ6QEHWfJBnYQ0pQJegQICxAB&biw=1366&bih=651&dpr=1&safe=active&ssui=on#imgrc=kTUusEX9SZWy7M',2009,'Riot'),
(4,'Fortnite','https://www.google.com/search?sca_esv=573754553&rlz=1C1UEAD_esES1075ES1075&q=fortnite+a%C3%B1o+salida&tbm=isch&source=lnms&sa=X&ved=2ahUKEwii2Kq0wPqBAxULVKQEHeNwDxQQ0pQJegQIChAB&biw=1366&bih=651&dpr=1&safe=active&ssui=on#imgrc=-WqSRDGRkvfJSM',2017,'EpicGames'),
(5,'CSGO','https://www.google.com/search?sca_esv=573754553&rlz=1C1UEAD_esES1075ES1075&q=A%C3%B1o+salida+CSGO&tbm=isch&source=lnms&sa=X&ved=2ahUKEwjrstzCwPqBAxXrcKQEHb7KBGIQ0pQJegQIDBAB&biw=1366&bih=651&dpr=1&safe=active&ssui=on#imgrc=K7nxNmCJlQIuBM',2012,'Valve');
/*!40000 ALTER TABLE `tJuegos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tUsuarios`
--

DROP TABLE IF EXISTS `tUsuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tUsuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contraseña` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tUsuarios`
--

LOCK TABLES `tUsuarios` WRITE;
/*!40000 ALTER TABLE `tUsuarios` DISABLE KEYS */;
INSERT INTO `tUsuarios` VALUES
(1,'Jacobo','Rodriguez','jacoboman55@gmail.com','patata'),
(2,'Carlos','Mendez','correo.clase@gmail.com','1234'),
(6,'Rodrigo','Apellido','correo.clase1@gmail.com','5678'),
(7,'Jorge','Apellido','correo.clase2@gmail.com','9012'),
(8,'Gabriel','Apellido','correo.clase3@gmail.com','3456');
/*!40000 ALTER TABLE `tUsuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-16 16:36:11
