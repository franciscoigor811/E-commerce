-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2023 às 04:18
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_fransys`
--
CREATE DATABASE IF NOT EXISTS `bd_fransys` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_fransys`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastrar`
--

DROP TABLE IF EXISTS `tb_cadastrar`;
CREATE TABLE `tb_cadastrar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `CEP` varchar(11) NOT NULL,
  `rua` varchar(120) NOT NULL,
  `numero` decimal(10,0) NOT NULL,
  `complemento` varchar(120) NOT NULL,
  `bairro` varchar(120) NOT NULL,
  `cidade` varchar(120) NOT NULL,
  `uf` char(2) NOT NULL,
  `acesso` enum('1','2') NOT NULL,
  `ativo` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_cadastrar`
--

INSERT INTO `tb_cadastrar` (`id`, `nome`, `email`, `senha`, `CPF`, `CEP`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `acesso`, `ativo`) VALUES
(1, 'Eliaquim dos Santos', 'eliaquim.lima@yahoo.com.br', '63111a9143458ed09dd6bd8674063023', '512.274.458-06', '12.230-110', 'Rua Barra Velha', 521, 'casa', 'Jardim Satélite', 'São José dos Campos', 'SP', '1', 'true'),
(2, 'Francisco', 'francisco@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '123.456.789-09', '12.236-872', 'Rua Luiz Gustavo de Vasconcelos', 155, 'casa', 'Residencial Bosque dos Ipês', 'São José dos Campos', 'SP', '1', 'true'),
(3, 'Giovanni', 'giovanni@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '987.654.321-00', '12.233-040', 'Rua Antônio Campos Mello', 14, 'casa', 'Bosque dos Eucaliptos', 'São José dos Campos', 'SP', '2', 'true'),
(4, 'Luan', 'luan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '497.694.018-70', '12.230-110', 'Rua Barra Velha', 999, 'casa', 'Jardim Satélite', 'São José dos Campos', 'SP', '2', 'true');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_msg`
--

DROP TABLE IF EXISTS `tb_msg`;
CREATE TABLE `tb_msg` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `mensagem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_msg`
--

INSERT INTO `tb_msg` (`id`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(1, 'Eliaquim', 'eliaquim.lima@yahoo.com.br', '(12) 99778-1025', 'Mensagem de teste'),
(2, 'Francisco', 'francisco@gmail.com', '(12) 98173-2489', 'Mensagem de teste'),
(3, 'Giovanni', 'giovanni@gmail.com', '(12) 99166-7238', 'Mensagem de teste'),
(4, 'Luan', 'luan@gmail.com', '(12) 99179-3891', 'Mensagem de teste'),
(5, 'Grazy', 'grazydepaula@gmail.com', '', 'Amo vocês!'),
(6, 'Fábio', 'fabio_lmg@hotmail.com', '(12) 98171-8100', 'estude bastente'),
(7, 'Ana', 'anahoterobrasil@gmail.com', '', 'Parabéns o trabalho de vocês é muito bem  elaborado'),
(8, 'Gabriel Pavanato', 'gabrielpavanato@outlook.com', '(12) 98884-4249', 'Deixa o e-mail fechado, pelo amor de Deus!'),
(9, 'Nilson', 'nilson.esjc@gmail.com', '', 'Boa sorte!'),
(10, 'William Gonçalves', 'goncalvesimoveis20@gmail.com', '(12) 99636-9003', 'A equipe está de parabéns!'),
(11, 'Alexandre', 'alexmauriciosjc@hotmail.com', '', 'Muito sucesso!'),
(12, 'Eliaquim', 'eliaquim@eliaquim.com', '(12) 34567-8900', 'Uma mensagem do futuro!'),
(13, 'Nikolas Luiz Guedes de Sá dos Santos ', 'nikolasluiz1@gmail.com', '(12) 98209-9512', 'AOPA! BAUM?'),
(14, 'Eliaquim', 'eliaquim.lima@yahoo.com.br', '(12) 99772-6352', 'Ei, seu site tá lindão hein? Eu curti, parabéns!');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cadastrar`
--
ALTER TABLE `tb_cadastrar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tb_msg`
--
ALTER TABLE `tb_msg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cadastrar`
--
ALTER TABLE `tb_cadastrar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_msg`
--
ALTER TABLE `tb_msg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
