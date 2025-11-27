-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27/11/2025 às 12:42
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epic`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nome`, `descricao`) VALUES
(1, 'Capitão', 'É o líder absoluto da embarcação, principal responsável por todas as decisões de todos os navios durante a viagem'),
(2, 'Vice-capitão', 'É o segundo líder absoluto da embarcação. Somente obedece o capitão'),
(3, 'Imediato', 'É o assistente do capitão'),
(4, 'contramestre', 'administrador geral do navio'),
(5, 'Homem das armas', 'É aquele responsável pela manutenção dos equipamentos de combate'),
(6, 'Rapaz das pólvoras', 'É assistente do homem das armas'),
(7, 'Cirurgião', 'É responsável pelo tratamento médico da tripulação'),
(8, 'Guerreiro', 'É responsável pelo combate em terra e na água. Aquele que defende a tripulação e ataca o inimigo'),
(9, 'Cozinheiro', 'É responsável pela alimentação da tripulção'),
(10, 'Assitente de cozinha', 'É o assitente dos cozinheiros'),
(11, 'Criado de bordo', 'É responsável pela manutençaõ do barco no sentido de sua limpeza'),
(12, 'Tripulante', 'É aquele que só está na navegação para viajar'),
(15, 'Carpinteiro', 'É aquele responsável pela manutenção do barco, no sentido de reparar o que está quebrado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
CREATE TABLE IF NOT EXISTS `equipamento` (
  `id_equipamento` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_equipamento`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `equipamento`
--

INSERT INTO `equipamento` (`id_equipamento`, `nome`, `tipo`, `descricao`) VALUES
(1, 'Espada Curt', 'Corte, Ofensivo, Curto Alcance', 'Espada de curto alcance(~80cm). Melhor usadas para cortar folhagens e abrir mata, por conta da firmeza que o tamanho trás.\r\n<br>X Não recomendado para combate por conta de seu tamanho. Espada de tamanho normal, curta, ou lanças são mais preferíveis.'),
(2, 'Espada', 'Corte, Ofensivo, Médio Alcance', 'Tipo padrão de espada(~120cm), na qual 50% da fronta tem maestria com.<br>Em combate, é mais recomendado o uso de lanças, mas a espada padrão é uma boa opção, mas somente se acompanhada por um <strong>escudo</strong> para proteção. '),
(3, 'Espada Longa', 'Corte', NULL),
(4, 'Lança', 'Corte, Arremesso', NULL),
(5, 'Arco e Flecha', 'Distância', NULL),
(6, 'Facas', 'Corte, Arremesso', NULL),
(7, 'Escudo', 'Proteção', NULL),
(8, 'Armadura Leve', 'Proteção', NULL),
(9, 'Armadura Padrão', 'Proteção', NULL),
(10, 'Armadura Pesada', 'Proteção', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `maestria`
--

DROP TABLE IF EXISTS `maestria`;
CREATE TABLE IF NOT EXISTS `maestria` (
  `id_maestria` int NOT NULL AUTO_INCREMENT,
  `navegador` int DEFAULT NULL,
  `equipamento` int DEFAULT NULL,
  PRIMARY KEY (`id_maestria`),
  KEY `navegador` (`navegador`),
  KEY `equipamento` (`equipamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `navegador`
--

DROP TABLE IF EXISTS `navegador`;
CREATE TABLE IF NOT EXISTS `navegador` (
  `id_navegador` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cargo` int DEFAULT NULL,
  `navio` int DEFAULT NULL,
  `sobrenome` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `origem` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_navegador`),
  KEY `cargo` (`cargo`),
  KEY `navio` (`navio`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `navegador`
--

INSERT INTO `navegador` (`id_navegador`, `nome`, `nascimento`, `cargo`, `navio`, `sobrenome`, `titulo`, `origem`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Duke', '2009-02-03', 3, 1, 'Cabral', 'Resolvedor de Enigmas', 'Porto Alegre'),
(3, 'Marco', '2009-02-23', 2, 1, 'Antônio', 'Quebrador das Próprias Pernas', 'Sapiranga'),
(6, 'Julia', '2008-09-05', 1, 1, 'Carolina', 'Criatura do Vazio', 'Sapiranga'),
(11, 'Theo', '2008-11-04', 4, 1, 'Wasem', '7 in a row', 'Lá'),
(12, 'Fernando', '2009-01-31', 15, 1, 'Schumann', 'Controlador dos Otários', 'Campo Bom'),
(13, 'Morgana', '2008-10-01', 9, 1, 'Alighieri', 'Cavaleiro Do Enem', 'Campo Bom'),
(14, 'Mikael', '2008-09-20', 7, 1, 'Cabral', 'Presença Avassaladora', 'Sapiranga');

-- --------------------------------------------------------

--
-- Estrutura para tabela `navio`
--

DROP TABLE IF EXISTS `navio`;
CREATE TABLE IF NOT EXISTS `navio` (
  `id_navio` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` int DEFAULT NULL,
  `numero` int DEFAULT NULL,
  PRIMARY KEY (`id_navio`),
  KEY `tipo` (`tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `navio`
--

INSERT INTO `navio` (`id_navio`, `nome`, `tipo`, `numero`) VALUES
(1, 'Navio legal', 1, 1),
(2, 'navio secundário', 2, 2),
(3, 'navio secundário', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_navio`
--

DROP TABLE IF EXISTS `tipo_navio`;
CREATE TABLE IF NOT EXISTS `tipo_navio` (
  `id_tipo_navio` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_tipo_navio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_navio`
--

INSERT INTO `tipo_navio` (`id_tipo_navio`, `nome`, `descricao`) VALUES
(1, 'Navio de guerra', 'É o navio de batalha, onde a maior parte das armas e gurreiros fica'),
(2, 'Navio de tripulantes', NULL),
(3, 'Navio de suprimentos', NULL),
(4, 'Navio tanque', NULL);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `maestria`
--
ALTER TABLE `maestria`
  ADD CONSTRAINT `maestria_ibfk_1` FOREIGN KEY (`navegador`) REFERENCES `navegador` (`id_navegador`),
  ADD CONSTRAINT `maestria_ibfk_2` FOREIGN KEY (`equipamento`) REFERENCES `equipamento` (`id_equipamento`);

--
-- Restrições para tabelas `navegador`
--
ALTER TABLE `navegador`
  ADD CONSTRAINT `navegador_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`id_cargo`),
  ADD CONSTRAINT `navegador_ibfk_2` FOREIGN KEY (`navio`) REFERENCES `navio` (`id_navio`);

--
-- Restrições para tabelas `navio`
--
ALTER TABLE `navio`
  ADD CONSTRAINT `navio_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_navio` (`id_tipo_navio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
