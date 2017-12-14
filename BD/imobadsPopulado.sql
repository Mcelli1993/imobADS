-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Dez-2017 às 04:53
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
  `endereco` varchar(50) NOT NULL DEFAULT '0',
  `cliente_id` varchar(50) NOT NULL,
  `vendedor` varchar(50) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alugueis`
--

INSERT INTO `alugueis` (`id`, `endereco`, `cliente_id`, `vendedor`, `periodo`, `valor`) VALUES
(1, 'Rua Osvaldo Bastos, nº 35', 'Carlos Flor', 'Jonas', '1 ano', 500),
(2, 'Rua Reduzino Pacheco, nº 61', 'Janaina Silva', 'Fabricio', '5 meses', 600),
(3, 'Rua Santos Dumont, nº 23', 'Pedro Antunes', 'Eduardo', '2 anos', 700),
(4, 'Rua Santos Dumont, nº 83', 'Claudia Antunes', 'Eduardo', '2 anos', 800),
(5, 'Rua Santos Alves, nº 23', 'Pedro Pires', 'Jonas', '2 anos', 900),
(6, 'Rua Professor Romildo, nº 66', 'Pedro Antonio Gomes', 'Fabricio', '3 anos', 700),
(7, 'Rua Israel Fernandes, nº 23', 'Aline Caroline', 'Eduardo', '4 anos', 800),
(8, 'Rua Santos Dumont, nº 253', 'Pedro Antunes', 'Jonas', '2 anos', 600),
(9, 'Rua Souza Gomes, nº 5523', 'Diana Agliardi', 'Fabricio', '3 anos', 700),
(10, 'Rua Travessa Araujo, nº 2223', 'Gaspar Flor', 'Fabricio', '6 anos', 1700),
(11, 'Rua Santos Dumont, nº 2366', 'Albertina Castro', 'Eduardo', '4 anos', 780),
(12, 'Rua Bernadete Teixeira, nº 23', 'Luiz Carlos', 'Jonas', '2 anos', 700),
(13, 'Rua Pinheiro Machado, nº 1223', 'Teresinha Amancio', 'Eduardo', '3 anos', 450),
(14, 'Rua Santos Dumont, nº 2333', 'Alaor Bento', 'Fabricio', '1 ano', 1700),
(15, 'Rua Santos, nº 2399', 'Benta Araujo Gomes', 'Eduardo', '2 anos', 700),
(16, 'Rua Osvaldo Bastos, nº 36', 'Ana Flor', 'Jonas', '2 ano', 1500),
(17, 'Rua Reduzino Pacheco, nº 81', 'Janaina Silva', 'Fabricio', '8 meses', 600),
(18, 'Rua Santos Dumont, nº 232', 'Pedro Amancio', 'Eduardo', '3 anos', 1700),
(19, 'Rua Santos Dumont, nº 83', 'Claudia Antunes', 'Eduardo', '2 anos', 800);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `rg` bigint(20) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `rg`, `cpf`, `endereco`, `cep`, `telefone`) VALUES
(1, 'Ana Flor', 5573821548, 3385569852, 'Rua Azenha, nº 1010', '95520000', 998899887),
(2, 'Janaina Silva', 4566621548, 66685569852, 'Rua Dadona, nº 510', '95520000', 998812345),
(3, 'Pedro Amancio', 4223321548, 84585569852, 'Rua Canoas, nº 120', '95520000', 998865299),
(4, 'Claudia Antunes', 3322821548, 56985555552, 'Rua Pernambuco, nº 10', '95520000', 998865881),
(5, 'Pedro Pires', 1234821548, 56985569999, 'Rua Tereza Gamba, nº 102', '95520000', 998865255),
(6, 'Pedro Antonio Gomes', 1119821548, 56985569584, 'Rua Tocantins, nº 310', '95520000', 998866241),
(7, 'Aline Caroline', 4449821548, 56985568547, 'Rua Antonia Bernadete, nº 2210', '95520000', 977865241),
(8, 'Pedro Antunes', 4566821548, 56985596322, 'Rua Reduzino Alberto, nº 1055', '95520000', 998995241),
(9, 'Diana Agliardi', 7899821548, 56985585212, 'Rua Tiradentes, nº 108', '95520000', 998885214),
(10, 'Gaspar Flor', 2319821548, 56985568899, 'Rua Olindo, nº 120', '95520000', 998865231),
(11, 'Albertina Castro', 1254321548, 56554469852, 'Rua Tapera, nº 1330', '95520000', 999965241),
(12, 'Luiz Carlos', 4569825214, 56985566633, 'Rua Talara, nº 1000', '95520000', 998855541),
(13, 'Teresinha Amancio', 4896821548, 55541569852, 'Rua Tatuira, nº 1560', '95520000', 998956241),
(14, 'Alaor Bento', 4569821563, 56985561234, 'Rua Santos, nº 1440', '95520000', 998865123),
(15, 'Benta Araujo Gomes', 4565551548, 25315569852, 'Rua Tapoia, nº 1770', '95520000', 955865241),
(16, 'Ana Flor', 5209821548, 56985698857, 'Rua Arara, nº 1020', '95520000', 998812546),
(17, 'Janaina Silva', 1239821548, 56954469852, 'Rua Tamandua, nº 3010', '95520000', 995565241),
(18, 'Pedro Amancio', 4569821895, 55892369852, 'Rua Campinas, nº 4010', '95520000', 998865231);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comissoes`
--

DROP TABLE IF EXISTS `comissoes`;
CREATE TABLE IF NOT EXISTS `comissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` bigint(20) NOT NULL,
  `funcionario_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comissoes`
--

INSERT INTO `comissoes` (`id`, `valor`, `funcionario_id`) VALUES
(1, 1999, 'Jonas'),
(2, 1990, 'Eduardo'),
(3, 1200, 'Fabricio'),
(4, 1220, 'Jonas'),
(5, 1870, 'Fabricio'),
(6, 1200, 'Eduardo'),
(7, 850, 'Eduardo'),
(8, 9900, 'Fabricio'),
(9, 230, 'Jonas'),
(10, 1330, 'Fabricio'),
(11, 200, 'Jonas'),
(12, 8900, 'Jonas'),
(13, 2200, 'Eduardo'),
(14, 2000, 'Eduardo'),
(15, 1000, 'Jonas'),
(16, 1000, 'Fabricio'),
(17, 1000, 'Eduardo');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `rg`, `cpf`, `endereco`, `cep`, `cargo`) VALUES
(1, 'Admin', 4110101010, 3310101010, 'Rua Total, nº 1010', 95520000, 'Gerente'),
(2, 'Eduardo', 4105562361, 3388877795, 'Rua Nordeste, nº 10', 95520000, 'vendedor'),
(3, 'Jonas', 5566362361, 2288877885, 'Rua Bento, nº 120', 95520000, 'vendedor'),
(4, 'Fabricio', 4105512365, 3378965425, 'Rua Noroeste, nº 180', 95520000, 'vendedor');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `endereco`, `descricao`, `proprietario`, `cep`, `preco`) VALUES
(1, 'Costa Gama, nº 1010\r\n', 'apartamento', 'Luiz', 955200000, 7777777),
(3, 'Garibaldi, nº 2525', 'casa', 'Fabricio', 95520000, 2000),
(4, 'Rua Araujo, nº 215', 'casa', 'Carlos', 95520000, 10000),
(5, 'Rua Gomes, nº 55215', 'casa', 'Benta', 95520000, 78000),
(6, 'Rua Borba, nº 66215', 'casa', 'Carla', 95520000, 99000),
(7, 'Rua Silva, nº 8215', 'casa', 'Alfredo', 95520000, 55000),
(8, 'Rua Araujo, nº 9215', 'casa', 'Augusto', 95520000, 33000),
(9, 'Rua Amazonita, nº 7215', 'casa', 'Raquel', 95520000, 84000),
(10, 'Rua Rio Dois, nº 5215', 'Apartamento', 'Janaina', 95520000, 99000),
(11, 'Rua Barbara, nº 9215', 'Apartamento', 'Elisa', 95520000, 31000),
(12, 'Rua Pinheiro, nº 8215', 'Apartamento', 'Alex', 95520000, 51000),
(13, 'Rua Reduxino, nº 77215', 'Apartamento', 'Aline', 95520000, 21870),
(14, 'Rua Cabral, nº 21995', 'Apartamento', 'Gaspar', 95520000, 10990),
(15, 'Rua Antonieta, nº 6215', 'Apartamento', 'Bruno', 95520000, 10660),
(16, 'Rua Santos Dumont, nº 9215', 'Apartamento', 'Alexa', 95520000, 77000),
(17, 'Rua A, nº 2515', 'Apartamento', 'Jonas', 95520000, 30000),
(18, 'Rua B, nº 2215', 'Apartamento', 'Jonas', 95520000, 20000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `senha`, `nivel`) VALUES
(1, 'Admin', '12345', 'Gerente'),
(2, 'Eduardo', '32145', 'vendedor'),
(3, 'Jonas', '78954', 'vendedor'),
(4, 'Fabricio', '23145', 'vendedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salarios`
--

DROP TABLE IF EXISTS `salarios`;
CREATE TABLE IF NOT EXISTS `salarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Funcionario_id` varchar(50) NOT NULL DEFAULT '0',
  `comissoes_id` float NOT NULL,
  `qtd_vendas` bigint(20) NOT NULL,
  `salario` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salarios`
--

INSERT INTO `salarios` (`id`, `Funcionario_id`, `comissoes_id`, `qtd_vendas`, `salario`) VALUES
(1, 'Fabricio', 7700, 7, 10000),
(2, 'Eduardo', 5500, 5, 15000),
(3, 'Jonas', 8000, 10, 7800);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(50) NOT NULL DEFAULT '0',
  `proprietario` varchar(50) NOT NULL DEFAULT '0',
  `funcionario_id` varchar(50) NOT NULL,
  `comissao` float NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `endereco`, `proprietario`, `funcionario_id`, `comissao`, `valor`) VALUES
(1, 'Rua Araujo, nº 215', 'Carlos', 'Fabricio', 520, 10000),
(2, 'Rua Gomes, nº 55215', 'Benta', 'Eduardo', 520, 78000),
(3, 'Rua Borba, nº 66215', 'Carla', 'Fabricio', 5270, 99000),
(4, 'Rua Silva, nº 8215', 'Alfredo', 'Fabricio', 5202, 55000),
(5, 'Rua Araujo, nº 9215', 'Augusto', 'Jonas', 5206, 33000),
(6, 'Rua Amazonita, nº 7215', 'Raquel', 'Fabricio', 5520, 84000),
(7, 'Rua Rio Dois, nº 5215', 'Janaina', 'Fabricio', 5620, 99000),
(8, 'Rua Barbara, nº 9215', 'Elisa', 'Jonas', 5280, 31000),
(9, 'Rua Pinheiro, nº 8215', 'Alex', 'Fabricio', 3520, 51000),
(10, 'Rua Reduxino, nº 77215', 'Aline', 'Fabricio', 7520, 21870),
(11, 'Rua Cabral, nº 21995', 'Gaspar', 'Jonas', 9520, 10990),
(12, 'Rua Antonieta, nº 6215', 'Bruno', 'Eduardo', 6520, 10660),
(13, 'Rua Santos Dumont, nº 9215', 'Alexa', 'Eduardo', 7520, 77000),
(14, 'Rua A, nº 2515', 'Jonas', 'Eduardo', 6520, 30000),
(15, 'Rua B, nº 2215', 'Jonas', 'Fabricio', 7520, 20000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
