-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Maio-2023 às 01:25
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `advstorm`
--
CREATE DATABASE IF NOT EXISTS `advstorm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `advstorm`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_login_cliente`
--

DROP TABLE IF EXISTS `cadastro_login_cliente`;
CREATE TABLE IF NOT EXISTS `cadastro_login_cliente` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_login_cliente`
--

INSERT INTO `cadastro_login_cliente` (`cod`, `nome`, `email`, `celular`, `endereco`, `cidade`, `senha`, `cpf`, `cnpj`) VALUES
(1, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cpf', '$cnpj'),
(2, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cpf', ''),
(4, 'João LIma', 'jao@jao.com.br', '11654878998', 'Av Virginia 400', 'São Paulo', 'eb4392eba29b33de167fc53275716da1', '12365478998', ''),
(5, 'Ursinho Bu', 'ursinho@gmail.com', '40028922', 'casa do krl', 'vai a merda', '732002cec7aeb7987bde842b9e00ee3b', '54169874611', ''),
(7, 'storm', 'storm@gmail.com', '11967866367', 'rua espera um pouco', 'sao paulo', '849c829d658baaeff512d766b0db3cce', '', '67333786000130'),
(8, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(9, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(10, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(11, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(12, 'Maya Do Bu', 'maya@gmail.com', '11978256364', 'rua da lindas', 'são paulo', '8b6b65b9f2ecc1f2477720521b3e7ae4', '', '77077021000130');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_advogado`
--

DROP TABLE IF EXISTS `tb_advogado`;
CREATE TABLE IF NOT EXISTS `tb_advogado` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataNascimento` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_advogado`
--

INSERT INTO `tb_advogado` (`cod`, `nome`, `email`, `celular`, `dataNascimento`, `cpf`, `genero`, `senha`) VALUES
(8, '$nome', '$email', '$celular', '$data', '$cpf', '$genero', '$senha'),
(9, 'belinha', 'amanda@gmail.com', '11234567878', '2222-02-12', '12312311233', 'feminino', 'a01610228fe998f515a72dd730294d87');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente_juridico`
--

DROP TABLE IF EXISTS `tb_cliente_juridico`;
CREATE TABLE IF NOT EXISTS `tb_cliente_juridico` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_cliente_juridico`
--

INSERT INTO `tb_cliente_juridico` (`cod`, `nome`, `email`, `celular`, `endereco`, `cidade`, `senha`, `cnpj`) VALUES
(13, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cnpj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
