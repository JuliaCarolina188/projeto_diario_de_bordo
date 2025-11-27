-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26/11/2025 às 03:05
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nome`, `descricao`) VALUES
(1, 'Capitão', 'É o líder absoluto da embarcação, principal responsável por todas as decisões de todos os navios durante a viagem'),
(2, 'Vice-capitão', 'É o segundo líder absoluto da embarcação. Somente obedece o capitão'),
(3, 'Imediato', 'É o assistente do capitão'),
(4, 'Carpinteiro', 'É aquele responsável pela manutenção do barco, no sentido de reparar o que está quebrado'),
(5, 'Homem das armas', 'É aquele responsável pela manutenção dos equipamentos de combate'),
(6, 'Rapaz das pólvoras', 'É assistente do homem das armas'),
(7, 'Cirurgião', 'É responsável pelo tratamento médico da tripulação'),
(8, 'Guerreiro', 'É responsável pelo combate em terra e na água. Aquele que defende a tripulação e ataca o inimigo'),
(9, 'Cozinheiro', 'É responsável pela alimentação da tripulção'),
(10, 'Assitente de cozinha', 'É o assitente dos cozinheiros'),
(11, 'Criado de bordo', 'É responsável pela manutençaõ do barco no sentido de sua limpeza'),
(12, 'Tripulante', 'É aquele que só está na navegação para viajar');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id_equipamento` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `tipo` varchar(60) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `equipamento`
--

INSERT INTO `equipamento` (`id_equipamento`, `nome`, `tipo`, `descricao`) VALUES
(1, 'Espada Curta', 'Corte, Ofensivo, Curto Alcance', 'Espada de curto alcance(~80cm). Melhor usadas para cortar folhagens e abrir mata, por conta da firmeza que o tamanho trás.\r\n<br>X Não recomendado para combate por conta de seu tamanho. Espada de tamanho normal, curta, ou lanças são mais preferíveis.'),
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

CREATE TABLE `maestria` (
  `id_maestria` int(11) NOT NULL,
  `navegador` int(11) DEFAULT NULL,
  `equipamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `navegador`
--

CREATE TABLE `navegador` (
  `id_navegador` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cargo` int(11) DEFAULT NULL,
  `navio` int(11) DEFAULT NULL,
  `sobrenome` varchar(30) DEFAULT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `origem` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `navegador`
--

INSERT INTO `navegador` (`id_navegador`, `nome`, `nascimento`, `cargo`, `navio`, `sobrenome`, `titulo`, `origem`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Duke', '2009-02-03', 3, 1, 'Cabral', 'Feio', 'Porto Alegre'),
(3, 'Marco', '2009-02-23', 2, 1, 'Antônio', 'Rei Lindo', 'Sapiranga'),
(6, 'Julia', '2008-09-05', 1, 1, 'Carolina', 'Linda', 'Sapiranga');

-- --------------------------------------------------------

--
-- Estrutura para tabela `navio`
--

CREATE TABLE `navio` (
  `id_navio` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `navio`
--

INSERT INTO `navio` (`id_navio`, `nome`, `tipo`, `numero`) VALUES
(1, 'Navio legao', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_navio`
--

CREATE TABLE `tipo_navio` (
  `id_tipo_navio` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_navio`
--

INSERT INTO `tipo_navio` (`id_tipo_navio`, `nome`, `descricao`) VALUES
(1, 'Navio de guerra', NULL),
(2, 'Navio de tripulantes', NULL),
(3, 'Navio de suprimentos', NULL),
(4, 'Navio tanque', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Índices de tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id_equipamento`);

--
-- Índices de tabela `maestria`
--
ALTER TABLE `maestria`
  ADD PRIMARY KEY (`id_maestria`),
  ADD KEY `navegador` (`navegador`),
  ADD KEY `equipamento` (`equipamento`);

--
-- Índices de tabela `navegador`
--
ALTER TABLE `navegador`
  ADD PRIMARY KEY (`id_navegador`),
  ADD KEY `cargo` (`cargo`),
  ADD KEY `navio` (`navio`);

--
-- Índices de tabela `navio`
--
ALTER TABLE `navio`
  ADD PRIMARY KEY (`id_navio`),
  ADD KEY `tipo` (`tipo`);

--
-- Índices de tabela `tipo_navio`
--
ALTER TABLE `tipo_navio`
  ADD PRIMARY KEY (`id_tipo_navio`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `maestria`
--
ALTER TABLE `maestria`
  MODIFY `id_maestria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `navegador`
--
ALTER TABLE `navegador`
  MODIFY `id_navegador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `navio`
--
ALTER TABLE `navio`
  MODIFY `id_navio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipo_navio`
--
ALTER TABLE `tipo_navio`
  MODIFY `id_tipo_navio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
