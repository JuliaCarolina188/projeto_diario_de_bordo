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
  `nomedocargo` varchar(30) DEFAULT NULL,
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
-- Table structure for table `criatura`
--

DROP TABLE IF EXISTS `criatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `criatura` (
  `id_criatura` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `descricao` text,
  `habitat` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_criatura`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criatura`
--

LOCK TABLES `criatura` WRITE;
/*!40000 ALTER TABLE `criatura` DISABLE KEYS */;
INSERT INTO `criatura` VALUES (1,'Medusa','Uma mulher com cobras no lugar do cabelo e a habilidade de transformar pessoas em pedra.','Ilha de Sarpedon'),(2,'Minotauro','Uma criatura com cabeça de touro e corpo de homem, que vivia em um labirinto.','Labirinto de Creta'),(3,'Hidra de Lerna','Uma serpente aquática de múltiplas cabeças que, quando cortadas, se regeneravam em duas.','Lago de Lerna'),(4,'Centauro','Uma criatura com o corpo de um cavalo e o torso de um homem.','Florestas da Tessália'),(5,'Sereia','Criaturas com o corpo de mulher e cauda de peixe, conhecidas por atrair marinheiros com seu canto.','Ilhas rochosas no mar'),(6,'Quimera','Um monstro com cabeça de leão, corpo de cabra e cauda de serpente, que cospe fogo.','Lícia'),(7,'Grifo','Uma criatura com corpo de leão e cabeça e asas de águia.','Montanhas do norte'),(8,'Cérbero','O cão de três cabeças que guardava a entrada do submundo.','Submundo'),(9,'Harpia','Criatura com corpo de ave e rosto de mulher, que levava pessoas e coisas de forma rápida.','Ilhas e cavernas'),(10,'Cíclope','Um gigante de um só olho que vivia nas montanhas.','Ilha da Sicília');
/*!40000 ALTER TABLE `criatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipamento` (
  `id_equipamento` int NOT NULL AUTO_INCREMENT,
  `nome_equipamento` varchar(100) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_equipamento`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamento`
--

LOCK TABLES `equipamento` WRITE;
/*!40000 ALTER TABLE `equipamento` DISABLE KEYS */;
INSERT INTO `equipamento` VALUES (1,'Espada Curta','Corte'),(2,'Espada Padrão','Corte'),(3,'Espada Longa','Corte'),(4,'Lança','Corte, Arremesso'),(5,'Arco e Flecha','Distância'),(6,'Facas','Corte, Arremesso'),(7,'Escudo','Proteção'),(8,'Armadura Leve','Proteção'),(9,'Armadura Padrão','Proteção'),(10,'Armadura Pesada','Proteção');
/*!40000 ALTER TABLE `equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento`
--

DROP TABLE IF EXISTS `evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evento` (
  `id_evento` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `descrição` text,
  `quando` date DEFAULT NULL,
  `navegacao` int DEFAULT NULL,
  PRIMARY KEY (`id_evento`),
  KEY `navegacao` (`navegacao`),
  CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`navegacao`) REFERENCES `navegacao` (`id_navegacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento`
--

LOCK TABLES `evento` WRITE;
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faz_parte_da_tripulacao`
--

DROP TABLE IF EXISTS `faz_parte_da_tripulacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faz_parte_da_tripulacao` (
  `id_tripulacao` int NOT NULL AUTO_INCREMENT,
  `id_navegacao` int DEFAULT NULL,
  `id_navegador` int DEFAULT NULL,
  `login` int DEFAULT NULL,
  PRIMARY KEY (`id_tripulacao`),
  KEY `id_navegacao` (`id_navegacao`),
  KEY `id_navegador` (`id_navegador`),
  KEY `login` (`login`),
  CONSTRAINT `faz_parte_da_tripulacao_ibfk_1` FOREIGN KEY (`id_navegacao`) REFERENCES `navegacao` (`id_navegacao`),
  CONSTRAINT `faz_parte_da_tripulacao_ibfk_2` FOREIGN KEY (`id_navegador`) REFERENCES `navegador` (`id_navegador`),
  CONSTRAINT `faz_parte_da_tripulacao_ibfk_3` FOREIGN KEY (`login`) REFERENCES `login` (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faz_parte_da_tripulacao`
--

LOCK TABLES `faz_parte_da_tripulacao` WRITE;
/*!40000 ALTER TABLE `faz_parte_da_tripulacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `faz_parte_da_tripulacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `id_login` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navegacao`
--

DROP TABLE IF EXISTS `navegacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `navegacao` (
  `id_navegacao` int NOT NULL AUTO_INCREMENT,
  `partida` date NOT NULL,
  `chegada` date DEFAULT NULL,
  `statuss` varchar(30) DEFAULT NULL,
  `objetivo` text,
  `login` int DEFAULT NULL,
  PRIMARY KEY (`id_navegacao`),
  KEY `login` (`login`),
  CONSTRAINT `navegacao_ibfk_1` FOREIGN KEY (`login`) REFERENCES `login` (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navegacao`
--

LOCK TABLES `navegacao` WRITE;
/*!40000 ALTER TABLE `navegacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `navegacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navegador`
--

DROP TABLE IF EXISTS `navegador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `navegador` (
  `id_navegador` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `login` int DEFAULT NULL,
  `id_navio` int DEFAULT NULL,
  PRIMARY KEY (`id_navegador`),
  KEY `login` (`login`),
  KEY `id_navio` (`id_navio`),
  CONSTRAINT `navegador_ibfk_1` FOREIGN KEY (`login`) REFERENCES `login` (`id_login`),
  CONSTRAINT `navegador_ibfk_2` FOREIGN KEY (`id_navio`) REFERENCES `navio` (`id_navio`)
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
  `nome_navio` set('Navio mestre','Navio de guerra','Navio tripulante','Navio de suprimentos') DEFAULT NULL,
  PRIMARY KEY (`id_navio`)
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
-- Table structure for table `tem_maestria_com`
--

DROP TABLE IF EXISTS `tem_maestria_com`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tem_maestria_com` (
  `id_maestria` int NOT NULL AUTO_INCREMENT,
  `id_equipamento` int DEFAULT NULL,
  `login` int DEFAULT NULL,
  PRIMARY KEY (`id_maestria`),
  KEY `login` (`login`),
  KEY `id_equipamento` (`id_equipamento`),
  CONSTRAINT `tem_maestria_com_ibfk_1` FOREIGN KEY (`login`) REFERENCES `login` (`id_login`),
  CONSTRAINT `tem_maestria_com_ibfk_2` FOREIGN KEY (`id_equipamento`) REFERENCES `equipamento` (`id_equipamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tem_maestria_com`
--

LOCK TABLES `tem_maestria_com` WRITE;
/*!40000 ALTER TABLE `tem_maestria_com` DISABLE KEYS */;
/*!40000 ALTER TABLE `tem_maestria_com` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-09-25  8:40:31
