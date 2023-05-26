-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Maio-2023 às 22:00
-- Versão do servidor: 5.7.36
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
-- Estrutura da tabela `cadastro_login_adv`
--

DROP TABLE IF EXISTS `cadastro_login_adv`;
CREATE TABLE IF NOT EXISTS `cadastro_login_adv` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_adv` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_login_adv`
--

INSERT INTO `cadastro_login_adv` (`cod`, `nome`, `cpf_adv`, `email`, `celular`, `data_nascimento`, `senha`, `genero`) VALUES
(1, '$nome', '$cpf_adv', '$email', '$celular', '0000-00-00', '$senha', '$genero'),
(2, 'Ursinho Boo', '54799685732', 'ursinhoboo@gmail.com', '1140028922', '2003-10-20', '371b5dfbd7f6421a5a0c', 'binario'),
(3, 'clayton', '47847847888', 'a@a.com', '11111111111', '0001-01-01', '81dc9bdb52d04dc20036', 'gostoso'),
(4, 'bruninha', '86577952130', 'bruninha@gmail.com', '11985423657', '2005-10-20', 'be85a8afe7774593d727', 'feminino'),
(5, 'balofinho', '45665466566', 'balofinho@gmail.com', '11967686969', '2003-06-06', '6ba346fb8fd1ca19db60', 'masculino'),
(6, 'pigs', '12332133266', 'pigs@pigs.com', '11987878989', '2005-03-03', '3300b1e3144c00709ee3', 'macho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_login_cliente`
--

DROP TABLE IF EXISTS `cadastro_login_cliente`;
CREATE TABLE IF NOT EXISTS `cadastro_login_cliente` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_login_cliente`
--

INSERT INTO `cadastro_login_cliente` (`cod`, `nome`, `email`, `celular`, `endereco`, `cidade`, `senha`, `cpf`, `cnpj`, `foto`) VALUES
(1, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cpf', '$cnpj', ''),
(2, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cpf', '', ''),
(4, 'João LIma', 'jao@jao.com.br', '11654878998', 'Av Virginia 400', 'São Paulo', 'eb4392eba29b33de167fc53275716da1', '12365478998', '', ''),
(5, 'Ursinho Bu', 'ursinho@gmail.com', '40028922', 'casa do krl', 'vai a merda', '732002cec7aeb7987bde842b9e00ee3b', '54169874611', '', ''),
(7, 'storm', 'storm@gmail.com', '11967866360', 'rua espera um pouco', 'sao paulo', '849c829d658baaeff512d766b0db3cce', '', '67333786000130', ''),
(8, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(9, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(10, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(11, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(12, 'Maya Do Bu', 'maya@gmail.com', '11978256364', 'rua da lindas', 'são paulo', '8b6b65b9f2ecc1f2477720521b3e7ae4', '', '77077021000130', ''),
(13, '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', '$img');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_advogado`
--

DROP TABLE IF EXISTS `tb_advogado`;
CREATE TABLE IF NOT EXISTS `tb_advogado` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataNascimento` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_advogado`
--

INSERT INTO `tb_advogado` (`cod`, `nome`, `email`, `celular`, `dataNascimento`, `cpf`, `genero`, `cargo`, `status`, `senha`, `foto`) VALUES
(8, '$nome', '$email', '$celular', '$data', '$cpf', '$genero', '', '', '$senha', ''),
(9, 'belinha', 'amanda@gmail.com', '11234567878', '2222-02-12', '12312311233', 'feminino', '', '', 'a01610228fe998f515a72dd730294d87', ''),
(10, 'Sr Pigs', 'storm.advocacy@gmail.com', '11967866367', '2003-06-06', '12121222133', 'masculino', 'admin', 'ativo', '202cb962ac59075b964b07152d234b70', ''),
(11, '', '', '', '', '', '', '$cargo', '$status', '', ''),
(12, 'BIG PIGS', 'big@gmail.com', '11967866360', '2009-02-12', '12345677899', 'macho', 'admin', 'ativo', '202cb962ac59075b964b07152d234b70', ''),
(15, '', '', '', '', '', '', '', '', '', '$img');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente_juridico`
--

DROP TABLE IF EXISTS `tb_cliente_juridico`;
CREATE TABLE IF NOT EXISTS `tb_cliente_juridico` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_cliente_juridico`
--

INSERT INTO `tb_cliente_juridico` (`cod`, `nome`, `email`, `celular`, `endereco`, `cidade`, `senha`, `cnpj`, `foto`) VALUES
(13, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cnpj', ''),
(14, '', '', '', '', '', '', '', '$endereco'),
(15, 'Comercio', 'comercio@gmail.com', '11989989898', '../img/perfil/39a96efadc577f2d8771dc6cc1181763.jpg', 'sao paulo', '202cb962ac59075b964b07152d234b70', '87588257000194', '../img/perfil/39a96efadc577f2d8771dc6cc1181763.jpg'),
(20, 'Amanda Ribeiro', 'amanda@gmail.com', '11967866360', 'Rua Nossa Familia', 'Rio de Janeiro', '934b535800b1cba8f96a5d72f72f1611', '86047651000152', 'imgsperfil/b11863427e1327235f7793c4522a69f3Array'),
(19, 'sammy', 'sammy@gmail.com', '11967866366', 'Rua Madre Real', 'Minas Gerais', 'a01610228fe998f515a72dd730294d87', '40898589000101', '../formularios/imgsperfil/c36ae6363e7533fbb61c9b41e459f8a9.jpg'),
(18, '', '', '', '', '', '', '', '$img'),
(21, 'isabela Santo', 'belinha@gmail.com', '11967866360', 'Rua Madre Tereza', 'São Paulo', 'a01610228fe998f515a72dd730294d87', '08898306000119', 'imgsperfil/c6efd0d592fb4174874ef98140e5f2c0Array'),
(22, 'gordao', 'gordao@gmail.com', '11967866360', 'rua sua mae', 'sao paulo', '6512bd43d9caa6e02c990b0a82652dca', '12121212121', '../formularios/imgsperfil/4ab2ff63ade6b0e64347ab84a23ecea4.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
