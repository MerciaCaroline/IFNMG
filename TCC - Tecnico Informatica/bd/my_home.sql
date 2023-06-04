-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2018 às 17:57
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_home`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `texto` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome`, `sobrenome`, `sexo`, `email`, `texto`) VALUES
(1, 'Luan', 'Vieira', 'Masculino', 'luan.a.vie11@gmail.com', 'Teste'),
(2, 'Luan', 'Vieira', 'Masculino', 'luan.a.vie11@gmail.com', 'Funcionou');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `id_loja` int(10) NOT NULL,
  `nome_loja` varchar(150) NOT NULL,
  `telefone1` varchar(18) NOT NULL,
  `telefone2` varchar(18) NOT NULL,
  `endereco` varchar(180) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `cep` varchar(25) NOT NULL,
  `cnpj` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `categoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`id_loja`, `nome_loja`, `telefone1`, `telefone2`, `endereco`, `cidade`, `cep`, `cnpj`, `email`, `categoria`) VALUES
(1, 'Gamma', '(38) 3821-2303', '', 'Avenida do Comércio', 'Janaúba', '39440-000', '82778689000144', 'gamma@gmail.com', 'Roupas e Acessórios'),
(2, 'lalalalal', '4444', '55555ff', 'fff', 'ffff', '4444', '62327114000106', 'ffff@ffff.com', 'Academias e suplementos'),
(3, 'aaaaaaaaaaaaaaa', '111111111111112', '22222222222222', 'cccc', 'sssss', '34324', '82778689000144', 'sssss@fff.com', 'Academias e suplementos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lojistas`
--

CREATE TABLE `lojistas` (
  `id_lojistas` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `telefone1` varchar(15) NOT NULL,
  `telefone2` varchar(15) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `cnpj` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lojistas`
--

INSERT INTO `lojistas` (`id_lojistas`, `nome`, `sobrenome`, `sexo`, `telefone1`, `telefone2`, `endereco`, `cidade`, `cep`, `email`, `cpf`, `cnpj`) VALUES
(4, 'Luan', 'Vieira', 'Masculino', '38991496092', '', 'Rua Rio Pardo, 114', 'Janaúba', '39440000', 'luan.a.vie11@gmail.com', '005.390.160-63', '82778689000144'),
(5, 'Mércia ', 'Caroline', 'Feminino', '38991496092', '', 'Rio pardo, 114', 'janaúna', '38991496092', 'mercinha@gmail.com', '692.215.170-47', '62327114000106');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`id_loja`);

--
-- Indexes for table `lojistas`
--
ALTER TABLE `lojistas`
  ADD PRIMARY KEY (`id_lojistas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loja`
--
ALTER TABLE `loja`
  MODIFY `id_loja` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lojistas`
--
ALTER TABLE `lojistas`
  MODIFY `id_lojistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
