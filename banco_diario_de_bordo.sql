-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: epic
-- ------------------------------------------------------
-- Server version	9.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargo` (
  `id_cargo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES (1,'Capitão','É o líder absoluto da embarcação'),(2,'Vice-capitão','É o segundo líder absoluto da embarcação. Somente obedece o capitão'),(3,'Imediato','É o assistente do capitão'),(4,'Carpinteiro','É aquele responsável pela manutenção do barco, no sentido de reparar o que está quebrado'),(5,'Homem das armas','É aquele responsável pela manutenção dos equipamentos de combate'),(6,'Rapaz das pólvoras','É assistente do homem das armas'),(7,'Cirurgião','É responsável pelo tratamento médico da tripulação'),(8,'Guerreiro','É responsável pelo combate em terra e na água. Aquele que defende a tripulação e ataca o inimigo'),(9,'Cozinheiro','É responsável pela alimentação da tripulção'),(10,'Assitente de cozinha','É o assitente dos cozinheiros'),(11,'Criado de bordo','É responsável pela manutençaõ do barco no sentido de sua limpeza'),(12,'Tripulante','É aquele que só está na navegação para viajar');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipamento` (
  `id_equipamento` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `tipo` varchar(60) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_equipamento`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamento`
--

LOCK TABLES `equipamento` WRITE;
/*!40000 ALTER TABLE `equipamento` DISABLE KEYS */;
INSERT INTO `equipamento` VALUES (1,'Espada Curta','Corte',NULL),(2,'Espada Padrão','Corte',NULL),(3,'Espada Longa','Corte',NULL),(4,'Lança','Corte, Arremesso',NULL),(5,'Arco e Flecha','Distância',NULL),(6,'Facas','Corte, Arremesso',NULL),(7,'Escudo','Proteção',NULL),(8,'Armadura Leve','Proteção',NULL),(9,'Armadura Padrão','Proteção',NULL),(10,'Armadura Pesada','Proteção',NULL);
/*!40000 ALTER TABLE `equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestria`
--

DROP TABLE IF EXISTS `maestria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maestria` (
  `id_maestria` int NOT NULL AUTO_INCREMENT,
  `navegador` int DEFAULT NULL,
  `equipamento` int DEFAULT NULL,
  PRIMARY KEY (`id_maestria`),
  KEY `navegador` (`navegador`),
  KEY `equipamento` (`equipamento`),
  CONSTRAINT `maestria_ibfk_1` FOREIGN KEY (`navegador`) REFERENCES `navegador` (`id_navegador`),
  CONSTRAINT `maestria_ibfk_2` FOREIGN KEY (`equipamento`) REFERENCES `equipamento` (`id_equipamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestria`
--

LOCK TABLES `maestria` WRITE;
/*!40000 ALTER TABLE `maestria` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navegador`
--

DROP TABLE IF EXISTS `navegador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `navegador` (
  `id_navegador` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cargo` int DEFAULT NULL,
  `navio` int DEFAULT NULL,
  `sobrenome` varchar(30) DEFAULT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `origem` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_navegador`),
  KEY `cargo` (`cargo`),
  KEY `navio` (`navio`),
  CONSTRAINT `navegador_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`id_cargo`),
  CONSTRAINT `navegador_ibfk_2` FOREIGN KEY (`navio`) REFERENCES `navio` (`id_navio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navegador`
--

LOCK TABLES `navegador` WRITE;
/*!40000 ALTER TABLE `navegador` DISABLE KEYS */;
/*!40000 ALTER TABLE `navegador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navio`
--

DROP TABLE IF EXISTS `navio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `navio` (
  `id_navio` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `tipo` int DEFAULT NULL,
  `numero` int DEFAULT NULL,
  PRIMARY KEY (`id_navio`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `navio_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_navio` (`id_tipo_navio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navio`
--

LOCK TABLES `navio` WRITE;
/*!40000 ALTER TABLE `navio` DISABLE KEYS */;
/*!40000 ALTER TABLE `navio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_navio`
--

DROP TABLE IF EXISTS `tipo_navio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_navio` (
  `id_tipo_navio` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_tipo_navio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_navio`
--

LOCK TABLES `tipo_navio` WRITE;
/*!40000 ALTER TABLE `tipo_navio` DISABLE KEYS */;
INSERT INTO `tipo_navio` VALUES (1,'Navio de guerra',NULL),(2,'Navio de tripulantes',NULL),(3,'Navio de suprimentos',NULL),(4,'Navio tanque',NULL);
/*!40000 ALTER TABLE `tipo_navio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-23  8:51:42
