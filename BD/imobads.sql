-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Dez-2017 às 00:06
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imobads`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alugueis`
--

DROP TABLE IF EXISTS `alugueis`;
CREATE TABLE IF NOT EXISTS `alugueis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `prazo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cliente_id` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `numero_casa` int(11) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comissoes`
--

DROP TABLE IF EXISTS `comissoes`;
CREATE TABLE IF NOT EXISTS `comissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` bigint(20) NOT NULL,
  `funcionario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_funcionario` (`funcionario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `rg` bigint(20) NOT NULL DEFAULT '0',
  `cpf` bigint(20) NOT NULL DEFAULT '0',
  `endereco` varchar(50) NOT NULL DEFAULT '0',
  `cep` bigint(20) NOT NULL DEFAULT '0',
  `cargo` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE IF NOT EXISTS `imoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `proprietario` varchar(50) NOT NULL,
  `cep` bigint(20) NOT NULL,
  `preco` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salarios`
--

DROP TABLE IF EXISTS `salarios`;
CREATE TABLE IF NOT EXISTS `salarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comissoes_id` int(11) NOT NULL,
  `qtd_vendas` bigint(20) NOT NULL,
  `salario` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comissoes` (`comissoes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` int(11) NOT NULL,
  `qtd` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_func` (`funcionario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alugueis`
--
ALTER TABLE `alugueis`
  ADD CONSTRAINT `FK_cliente_id` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

--
-- Limitadores para a tabela `comissoes`
--
ALTER TABLE `comissoes`
  ADD CONSTRAINT `FK_funcionario` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id`);

--
-- Limitadores para a tabela `salarios`
--
ALTER TABLE `salarios`
  ADD CONSTRAINT `FK_comissoes` FOREIGN KEY (`comissoes_id`) REFERENCES `comissoes` (`id`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `FK_func` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
