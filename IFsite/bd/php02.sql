-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2017 às 17:31
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php02`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
`cod_adm` int(11) NOT NULL,
  `nome_adm` varchar(50) NOT NULL,
  `senha_adm` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`cod_adm`, `nome_adm`, `senha_adm`) VALUES
(1, 'Joao', '123'),
(2, 'adm', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
`matricula` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `endereco` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `senha`, `cpf`, `endereco`) VALUES
(11, 'mercia', '202cb962ac59075b964b07152d234b70', 7010193606, 'asas'),
(16, 'eu', '202cb962ac59075b964b07152d234b70', 125698, 'fsda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `cod_disc` int(11) NOT NULL,
  `nome_disc` varchar(50) NOT NULL,
  `carga_hor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`cod_disc`, `nome_disc`, `carga_hor`) VALUES
(11, 'onze', 11),
(4545, 'quarenta e cinco', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
 ADD PRIMARY KEY (`cod_adm`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
 ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
 ADD PRIMARY KEY (`cod_disc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
MODIFY `cod_adm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
