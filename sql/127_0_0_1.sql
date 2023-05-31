-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Maio-2023 às 21:32
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
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_login_cliente`
--

INSERT INTO `cadastro_login_cliente` (`cod`, `nome`, `email`, `celular`, `endereco`, `cidade`, `senha`, `cpf`, `foto`, `status`) VALUES
(26, 'belinha', 'isa@gmail.com', '11967767777', 'Rua Nossa Familia', 'São Paulo', '35bf053a1f01b545a69779dc4b71cf19', '12122233455', 'formularios/imgsperfil/f3e7acfdfa5132dc7069562f8a8c297d.jpg', 'ativo'),
(18, 'Isabela Silva', 'isa.silva@gmail.com', '1137791573', 'Rua João Carolino', 'Campina Grande', 'fae0b27c451c728867a567e8c1bb4e53', '69112786004', 'formularios/imgsperfil/6b1c90d0187ecb8373bd999d1d073668.jpg', 'ativo'),
(19, 'Claudio Henrique', 'clau.henri@gmail.com', '1537674599', 'Rua Engracia Gemenes 87', 'São Pedro', 'c6f057b86584942e415435ffb1fa93d4', '92928024883', 'formularios/imgsperfil/356a7fe8c30deb67ca71e50bc51f92f7.jpg', 'ativo'),
(20, 'Angelina Souza', 'angelina@gmail.com', '1129516376', 'Rua José Estanislau de Oliveira 7', 'São Pedro', 'e8d95a51f3af4a3b134bf6bb680a213a', '37978449807', 'formularios/imgsperfil/1d6b0fc8f6e01021aea438859f450d1f.jpg', 'ativo'),
(21, 'Henrique ', 'henriqueaz.1504@hotmail.com', '1121140176', 'Avenida Sadamu Inoue', 'São Paulo', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '75610563895', 'formularios/imgsperfil/5eb6a9fc387c462515bddbbd9c0bf726.jpg', 'ativo'),
(22, 'Lysie', 'lys@gmail.com', '1628283888', 'Rua José Maria Lisboa 534', 'São Paulo', '3618755518900fd681feafcc2787724d', '32247084842', 'formularios/imgsperfil/dd6a31bb0ae7873d9157bac537654a70.jpg', 'ativo'),
(23, 'Beatriz Luz', 'bia.lux@gmail.com', '1125793842', 'Praça Doutor Otávio Perez Valesco', 'São Paulo', 'cdc737c372f58d6ce8436e4c5c67dc00', '1125793842', 'formularios/imgsperfil/fea9aaa94298212e6cb0c34e151ee83e.jpg', 'ativo'),
(24, 'sntzera', 'snt@gmail.com', '1623783619', 'Praça Antônio Lazzarin', 'São Paulo', 'b2a9a16d67bddbb905264b3136f3c831', '16930835820', 'formularios/imgsperfil/16a87f8f9c1eca8323d3683907e636cc.jpg', 'ativo'),
(25, 'Derek ', 'derek@gmail.com', '1137749820', 'Rua Marques Campão', 'São Paulo', '7c912fa77205d10095ce620fe1ccd17d', '48569967896', 'formularios/imgsperfil/cb42a6526adb0968d3edd47e4557a8a3.jpg', 'ativo'),
(28, 'Diorgenis Sá ', 'dih.sa@gmail.com', '11967866366', 'Rua Madre Sofia', 'São Paulo', 'a01610228fe998f515a72dd730294d87', '12366754356', 'formularios/imgsperfil/03db23bc58a60d09c5bc001db5dd69bc.jpg', 'ativo'),
(29, 'Dileira Melo', 'melo@gmail.com', '11943323445', 'Av. Paulista', 'São Paulo', '6512bd43d9caa6e02c990b0a82652dca', '22211233455', 'formularios/imgsperfil/52523ad56a42b675c6070c6febb4b33d.jpg', 'ativo');

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_advogado`
--

INSERT INTO `tb_advogado` (`cod`, `nome`, `email`, `celular`, `dataNascimento`, `cpf`, `genero`, `cargo`, `status`, `senha`, `foto`) VALUES
(10, 'Sr Pigs', 'storm.advocacy@gmail.com', '11967866367', '2003-06-06', '12121222133', 'masculino', 'admin', 'ativo', '202cb962ac59075b964b07152d234b70', ''),
(19, 'Rodrigo Santos', 'rodrigo.santos', '1734743861', '', '57607995099', 'masculino', 'advogado', 'ativo', '3c17024abd2591cab0c78928dabbb5d5', 'formularios/imgsperfil/8829a7d70a3483dce82e052bea7ae49f.jpg'),
(18, 'Eduardo Moraes', 'edu.moraes@gmail.com', '1135047738', '', '20383822041', 'masculino', 'advogado', 'ativo', '5ad7c3eaa6ab9761dc11ae5d5a29b98c', 'formularios/imgsperfil/601940bce4de73a3446fde148981dc88.jpg'),
(17, 'Débora Andrade', 'debora.andrade@gmail.com', '1937077634', '', '18202320003', 'feminino', 'advogada', 'ativo', 'aaa1b35b0df5f6c988052308983336fb', 'formularios/imgsperfil/01978a77736553d56f73b90ad3be3cbd.jpg'),
(20, 'Renata Oliveira', 'renata.oli@gmail.com', '1737348571', '', '32063850089', 'feminino', 'advogada', 'ativo', '4473e588b35568687564de38ed134d0b', 'formularios/imgsperfil/5056cbabbd36d9aa80577ab85ade66eb.jpg');

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
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_cliente_juridico`
--

INSERT INTO `tb_cliente_juridico` (`cod`, `nome`, `email`, `celular`, `endereco`, `cidade`, `senha`, `cnpj`, `foto`, `status`) VALUES
(32, 'Company', 'comp.ny@gmail.com', '1825204036', 'Rua Diácono Josias de Souza', 'Jundiaí', '149815eb972b3c370dee3b89d645ae14', '48358030000109', 'imgsperfil/0fa01763985f481167beb66fd6db8f8d.jpg', 'ativo'),
(26, 'PIGSx', 'pigs@pigs.com', '11967866366', 'Rua Madre Sofia Marchetti', 'São Paulo', '698d51a19d8a121ce581499d7b701668', '19075491000168', 'imgsperfil/b9bb08699bd6438943e8aa27ef77dca0.jpg', 'ativo'),
(27, 'Inovare', 'ivare@gmail.com', '1232825810', 'Viela Japi', 'Guarulhos', '678c0dabb47b9feda38b521959edd83f', '35966433000180', 'imgsperfil/9a0dd9e18b09d2d3f90a034203c8ced1.jpg', 'ativo'),
(28, 'Best Place', 'bp.place@gmail.com', '1432638887', 'Rua Polônia', 'Sorocaba', '09a5e42e7915da394a9755f9d8e8e180', '44460082000122', 'imgsperfil/b6376192c43c6914db98e74b459ee359.jpg', 'ativo'),
(23, 'Inova', 'inova@gmail.com', '11967866366', 'Rua Madre Tereza', 'São Paulo', '14bfa6bb14875e45bba028a21ed38046', '42994250000134', 'formularios/imgsperfil/b7f795b2d12b8e4085098a36a44b142b.jpg', 'ativo'),
(24, 'amanda', 'amanda@gmail.com', '11967866360', 'Rua Madre Real', 'Minas Gerais', 'f1c1592588411002af340cbaedd6fc33', '34462009000136', 'formularios/imgsperfil/06b20e253473bfefdf144da2552d26ec.jpg', 'ativo'),
(25, 'Thomas Costa', 'thomas@gmail.com', '11967866366', 'Rua Estanislau Iachinski', 'Piraquara', 'bcbe3365e6ac95ea2c0343a2395834dd', '17785994000100', 'formularios/imgsperfil/04652dddd5015246383702aa50a2a063.jpg', 'ativo'),
(29, 'Cultural Store', 'cultural.store@gmail.com', '1335551589', 'Praça Adelino Cassemiro da Silva', 'Mogi Guaçu', 'a2816fcf58e740353bfe379ef30b376a', '65188577000114', 'imgsperfil/aa3de4e3fa729c2b2a642d2676b042e4.jpg', 'ativo'),
(30, 'Requint', 'requint@gmail.com', '1634491148', 'Avenida Presidente Tancredo Neves', 'São José dos Campos', '65aad0f563267f0894012c7b7d65a0fc', '71891939000131', 'imgsperfil/255ce7fa689e95db6da20d46283a556c.jpg', 'ativo'),
(31, 'Digimund', 'digi.mund@outlook.com', '1436590101', 'Praça Evandro Modesto da Silva', 'Bauru', '52071db0609b82597413311eb0540c16', '22649143000161', 'imgsperfil/81dcfde0441dfaaefe93a5152aa277aa.jpg', 'ativo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
