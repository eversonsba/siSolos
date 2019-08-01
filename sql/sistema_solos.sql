-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2019 às 15:27
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistema_solos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amostras`
--

CREATE TABLE IF NOT EXISTS `amostras` (
  `identificador` varchar(255) NOT NULL,
  `data_entrada` date DEFAULT NULL,
  `id_situacao` int(11) NOT NULL,
  `identificador_cliente_amostras` varchar(14) NOT NULL,
  `id_tipo_analise` int(11) NOT NULL,
  PRIMARY KEY (`identificador`),
  KEY `id_situacao` (`id_situacao`),
  KEY `identificador_cliente_amostras` (`identificador_cliente_amostras`),
  KEY `id_tipo_analise` (`id_tipo_analise`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `amostras`
--

INSERT INTO `amostras` (`identificador`, `data_entrada`, `id_situacao`, `identificador_cliente_amostras`, `id_tipo_analise`) VALUES
('1', '2019-06-04', 1, '123456748910', 2),
('10', '2019-06-04', 1, '123456748910', 2),
('114', '2019-06-04', 1, '12345789321', 1),
('12', '2019-06-04', 5, '123456748910', 1),
('1234', '2019-06-07', 1, '11114445556', 2),
('13', '2019-06-04', 1, '1234567899', 1),
('15', '2019-06-04', 1, '123456748910', 1),
('16', '2019-06-04', 1, '123456748910', 1),
('2', '2019-06-04', 1, '1234567899', 1),
('23', '2019-06-04', 1, '12345789321', 1),
('4', '2019-06-04', 1, '123456748910', 1),
('5', '2019-06-04', 1, '123456748910', 1),
('6', '2019-06-04', 1, '1234567899', 1),
('7', '2019-06-04', 1, '1234567899', 1),
('7777', '2019-06-07', 1, '1234567899', 2),
('8', '2019-06-04', 1, '123456748910', 1),
('9', '2019-06-04', 1, '123456748910', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `descricao`) VALUES
(1, 'Técnico em Labotório'),
(2, 'Assistente de laboratório'),
(3, 'Recepcionista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `identificador` varchar(14) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cod_endereco` int(11) NOT NULL,
  PRIMARY KEY (`identificador`),
  KEY `cod_endereco` (`cod_endereco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`identificador`, `nome`, `sobrenome`, `senha`, `cod_endereco`) VALUES
('11114445556', 'Lucas', 'Freitas', '1234', 1),
('123456748910', 'Aluisio', ' Tavares Junior', '12', 2),
('1234567899', 'Gustavo', 'Santos', 'gu', 1),
('12345789321', 'Lucas', 'de Lima Camargo', '12', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cidade` varchar(255) DEFAULT NULL,
  `propriedade` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `cidade`, `propriedade`, `estado`, `cep`) VALUES
(1, 'São Bento Abade', 'Serra das Abelhas', 'MG', '37407000'),
(2, 'Machado', 'Ouvidor', 'MG', '37750000'),
(3, 'machado', 'sitio vista alegre', 'AC', '37760000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `siap` varchar(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cod_categoria` int(11) NOT NULL,
  PRIMARY KEY (`siap`),
  KEY `cod_categoria` (`cod_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`siap`, `nome`, `sobrenome`, `senha`, `email`, `cod_categoria`) VALUES
('11121003858', 'Vitor', 'Nunes', 'admin', 'l@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificador_amostra` varchar(255) NOT NULL,
  `observacao` text,
  `pdf` text NOT NULL,
  `data` date DEFAULT NULL,
  `identificador_cliente_resultados` varchar(14) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `identificador_amostra` (`identificador_amostra`),
  KEY `identificador_cliente_resultados` (`identificador_cliente_resultados`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `resultados`
--

INSERT INTO `resultados` (`id`, `identificador_amostra`, `observacao`, `pdf`, `data`, `identificador_cliente_resultados`) VALUES
(2, '12', '', 'resultados/QUADRO PLANOS flaviana patricia.ods', '2019-06-04', '123456748910'),
(3, '12', '', 'resultados/download.jpg', '2019-06-05', '123456748910');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao`
--

CREATE TABLE IF NOT EXISTS `situacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `situacao`
--

INSERT INTO `situacao` (`id`, `descricao`) VALUES
(1, 'Pagamento Pendente'),
(2, 'Pagamento Efetuado'),
(4, 'Fazendo Análise'),
(5, 'Análise Concluída');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_analise`
--

CREATE TABLE IF NOT EXISTS `tipo_analise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipo_analise`
--

INSERT INTO `tipo_analise` (`id`, `descricao`, `valor`) VALUES
(1, 'TIPO III', '130.00'),
(2, 'TIPO II', '35.00'),
(3, 'TIPO I', '28.00');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `amostras`
--
ALTER TABLE `amostras`
  ADD CONSTRAINT `amostras_ibfk_1` FOREIGN KEY (`id_situacao`) REFERENCES `situacao` (`id`),
  ADD CONSTRAINT `amostras_ibfk_2` FOREIGN KEY (`id_situacao`) REFERENCES `situacao` (`id`),
  ADD CONSTRAINT `amostras_ibfk_3` FOREIGN KEY (`identificador_cliente_amostras`) REFERENCES `clientes` (`identificador`),
  ADD CONSTRAINT `amostras_ibfk_4` FOREIGN KEY (`id_tipo_analise`) REFERENCES `tipo_analise` (`id`);

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`cod_endereco`) REFERENCES `enderecos` (`id`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `categorias` (`id`);

--
-- Limitadores para a tabela `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`identificador_amostra`) REFERENCES `amostras` (`identificador`),
  ADD CONSTRAINT `resultados_ibfk_2` FOREIGN KEY (`identificador_cliente_resultados`) REFERENCES `clientes` (`identificador`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
