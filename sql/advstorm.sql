-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Maio-2023 às 18:37
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
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_login_cliente`
--

INSERT INTO `cadastro_login_cliente` (`cod`, `nome`, `email`, `celular`, `endereco`, `cidade`, `senha`, `cpf`, `cnpj`) VALUES
(1, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cpf', '$cnpj'),
(2, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cpf', ''),
(4, 'João LIma', 'jao@jao.com.br', '11654878998', 'Av Virginia 400', 'São Paulo', 'eb4392eba29b33de167fc53275716da1', '12365478998', ''),
(5, 'Ursinho Bu', 'ursinho@gmail.com', '40028922', 'casa do krl', 'vai a merda', '732002cec7aeb7987bde842b9e00ee3b', '54169874611', ''),
(7, 'storm', 'storm@gmail.com', '11967866367', 'rua espera um pouco', 'sao paulo', '849c829d658baaeff512d766b0db3cce', '', '67333786000130');

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
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_advogado`
--

INSERT INTO `tb_advogado` (`cod`, `nome`, `email`, `celular`, `dataNascimento`, `cpf`, `genero`, `senha`) VALUES
(8, '$nome', '$email', '$celular', '$data', '$cpf', '$genero', '$senha'),
(9, 'belinha', 'amanda@gmail.com', '11234567878', '2222-02-12', '12312311233', 'feminino', 'a01610228fe998f515a72dd730294d87');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
