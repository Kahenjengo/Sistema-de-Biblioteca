-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Out-2018 às 16:22
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliogest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `id_Area` varchar(100) NOT NULL,
  `Cota` varchar(100) DEFAULT NULL,
  `NomeArea` varchar(100) DEFAULT NULL,
  `Estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_Area`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id_Area`, `Cota`, `NomeArea`, `Estado`) VALUES
('1', '100', 'Informatica', 'Activo'),
('2', '100', 'GestÃ£o', 'Activo'),
('3', '500', 'GestÃ£o', 'Activo'),
('4', '200', 'GestÃ£o', 'Activo'),
('5', '500', 'Amor', 'Activo'),
('6', '100', 'HistÃ³ria', 'Activo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `autor_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Primeiro_nome` varchar(45) NOT NULL,
  `Apelido_nome` varchar(45) NOT NULL,
  `Ultima_Actualiza` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`autor_id`),
  KEY `idx_actor_last_name` (`Apelido_nome`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`autor_id`, `Primeiro_nome`, `Apelido_nome`, `Ultima_Actualiza`) VALUES
(1, 'Pedro', 'Bernardo', '2018-09-11 23:00:00'),
(2, 'Mia ', 'Couto', '2018-09-11 23:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousels`
--

DROP TABLE IF EXISTS `carousels`;
CREATE TABLE IF NOT EXISTS `carousels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(520) NOT NULL,
  `url` varchar(520) NOT NULL,
  `imagem` varchar(520) NOT NULL,
  `ordem` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Assunto` varchar(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mensagem` varchar(300) NOT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contacto`, `Nome`, `Assunto`, `Email`, `Mensagem`) VALUES
(1, 'Gabriel ', 'Teste', 'gab.kahenjengo@gmail.com', 'OlÃ¡ boa tarde'),
(2, 'Djamila', 'RequesiÃ§Ã£o', 'gab.kahenjengo@gmail.com', 'OlÃ¡ gostaria saber se o livro Direitos Humanos jÃ¡ estÃ¡ disponÃ­vel'),
(3, 'Pedro', 'Teste', 'gab.kahenjengo@gmail.com', 'aaas'),
(4, 'Maria', 'aaa', 'gab.kahenjengo@gmail.com', 'ddd'),
(5, 'Joana', 'Teste', 'gab.kahenjengo@gmail.com', 'xxxx');

-- --------------------------------------------------------

--
-- Estrutura da tabela `devolucao`
--

DROP TABLE IF EXISTS `devolucao`;
CREATE TABLE IF NOT EXISTS `devolucao` (
  `id_devolucao` varchar(100) NOT NULL,
  `livro_id` int(11) DEFAULT NULL,
  `jornal_id` int(11) DEFAULT NULL,
  `Revista_id` int(11) DEFAULT NULL,
  `id_Area` int(11) DEFAULT NULL,
  `id_NomeLeitor` int(11) DEFAULT NULL,
  `NomeLeitor` varchar(100) DEFAULT NULL,
  `Tipo` varchar(100) DEFAULT NULL,
  `Data` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_devolucao`),
  KEY `livro_id` (`livro_id`),
  KEY `jornal_id` (`jornal_id`),
  KEY `id_Area` (`id_Area`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

DROP TABLE IF EXISTS `emprestimo`;
CREATE TABLE IF NOT EXISTS `emprestimo` (
  `id_emprestimo` varchar(100) NOT NULL,
  `id_NomeLeitor` int(10) NOT NULL,
  `livro_id` int(11) DEFAULT NULL,
  `jornal_id` int(11) DEFAULT NULL,
  `Revista_id` int(11) DEFAULT NULL,
  `id_Area` int(11) DEFAULT NULL,
  `NomeLeitor` varchar(100) DEFAULT NULL,
  `Tipo` varchar(100) DEFAULT NULL,
  `Data` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_emprestimo`),
  KEY `livro_id` (`livro_id`),
  KEY `jornal_id` (`jornal_id`),
  KEY `id_Area` (`id_Area`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jornal`
--

DROP TABLE IF EXISTS `jornal`;
CREATE TABLE IF NOT EXISTS `jornal` (
  `Jornal_id` int(10) UNSIGNED NOT NULL,
  `Jornal_Titulo` varchar(255) NOT NULL,
  `pais` text,
  `photo` varchar(150) DEFAULT NULL,
  `Assuntos` varchar(100) DEFAULT NULL,
  `Editora` varchar(100) DEFAULT NULL,
  `Data_Publica` varchar(100) DEFAULT NULL,
  `id_Area` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

DROP TABLE IF EXISTS `livro`;
CREATE TABLE IF NOT EXISTS `livro` (
  `Livro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Livro_Titulo` varchar(255) NOT NULL,
  `description` text,
  `Ano` varchar(100) DEFAULT NULL,
  `Pais` varchar(100) NOT NULL,
  `Autor_id` varchar(11) DEFAULT NULL,
  `Estoque_id` int(11) DEFAULT NULL,
  `ISBN` varchar(255) DEFAULT NULL,
  `id_Area` int(11) NOT NULL,
  `N_Livro` int(11) NOT NULL,
  PRIMARY KEY (`Livro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Livro_id`, `Livro_Titulo`, `description`, `Ano`, `Pais`, `Autor_id`, `Estoque_id`, `ISBN`, `id_Area`, `N_Livro`) VALUES
(1, 'testwe', 'ola teste', '2018-09-21', 'Angola', 'pwedro', 2, NULL, 2, 182);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_contatos`
--

DROP TABLE IF EXISTS `mensagens_contatos`;
CREATE TABLE IF NOT EXISTS `mensagens_contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `assunto` varchar(220) NOT NULL,
  `mensagem` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `municipio`
--

DROP TABLE IF EXISTS `municipio`;
CREATE TABLE IF NOT EXISTS `municipio` (
  `Municipio_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Provincia_id` smallint(6) NOT NULL,
  `Ultima_Actualiza` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Municipio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acessos`
--

DROP TABLE IF EXISTS `nivel_acessos`;
CREATE TABLE IF NOT EXISTS `nivel_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_nivel` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE IF NOT EXISTS `provincia` (
  `idProvincia` int(11) NOT NULL,
  `nomeProvincia` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_Usuario` varchar(100) NOT NULL,
  `NomeUsuario` varchar(100) DEFAULT NULL,
  `Senha` varchar(100) DEFAULT NULL,
  `NivelAcesso` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_Usuario`, `NomeUsuario`, `Senha`, `NivelAcesso`) VALUES
('Usuario1', 'Gabriel', '0000', 'Administrativo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
