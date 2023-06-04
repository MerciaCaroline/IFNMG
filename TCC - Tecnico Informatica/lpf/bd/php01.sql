-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2017 às 21:33
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
`id_postagem` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `texto_postagem` varchar(140) NOT NULL,
  `data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `id_usuario`, `texto_postagem`, `data_inclusao`) VALUES
(1, 1, '					Hoje esta um belo dia para salvar vidas!!', '2017-07-12 16:54:43'),
(2, 1, '					Liga da Justiça é dia 15 de Novembro ', '2017-09-12 08:55:31'),
(3, 2, '				Não é o que sou por dentro, é o que eu faço que me define.', '2017-09-27 15:05:01'),
(4, 2, '					Não se esqueçam, "Sua compaixão é uma fraqueza que seus inimigos não irão compartilhar"', '2017-09-27 15:05:08'),
(8, 5, 'FALA GALERA\r\n', '2017-10-19 10:48:37'),
(9, 3, 'Eu estou onde eu quero estar.ksksks', '2017-10-24 17:39:36'),
(10, 4, 'Nada temam, o Aracnídeo chegou!\r\n', '2017-10-24 18:04:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`codigo` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `usuario`, `email`, `senha`, `imagem`) VALUES
(1, 'Diana', 'diana@gmail.com', '202cb962ac59075b964b07152d234b70', 'imagem/DN.jpg'),
(2, 'bruce wayne', 'bruce@gmail.com', '202cb962ac59075b964b07152d234b70', 'imagem/bw.jpg'),
(3, 'Steve Rogers', 'steve@gmail.com', '202cb962ac59075b964b07152d234b70', 'imagem/steve.jpg'),
(4, 'Peter Paker', 'peter@gmail.com', '202cb962ac59075b964b07152d234b70', 'imagem/pt.jpg'),
(5, 'Tony Stark', 'tony@gmail.com', '202cb962ac59075b964b07152d234b70', 'imagem/TS.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_seguidores`
--

CREATE TABLE IF NOT EXISTS `usuarios_seguidores` (
`id_usuario_seguidor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `seguindo_id_usuario` int(11) NOT NULL,
  `data_registro` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `usuarios_seguidores`
--

INSERT INTO `usuarios_seguidores` (`id_usuario_seguidor`, `id_usuario`, `seguindo_id_usuario`, `data_registro`) VALUES
(1, 1, 2, '2017-09-27 15:05:33'),
(3, 1, 3, '2017-10-24 17:42:08'),
(4, 3, 1, '2017-10-24 17:42:53'),
(5, 3, 2, '2017-10-24 17:43:05'),
(6, 3, 2, '2017-10-24 17:43:06'),
(7, 2, 3, '2017-10-24 17:43:55'),
(8, 2, 1, '2017-10-24 17:45:11'),
(9, 4, 1, '2017-10-24 17:59:32'),
(10, 4, 1, '2017-10-24 17:59:35'),
(11, 4, 2, '2017-10-24 17:59:38'),
(12, 4, 2, '2017-10-24 17:59:38'),
(13, 4, 3, '2017-10-24 17:59:43'),
(14, 4, 5, '2017-10-24 17:59:47'),
(15, 5, 1, '2017-10-24 18:05:23'),
(16, 5, 2, '2017-10-24 18:05:29'),
(17, 5, 3, '2017-10-24 18:05:34'),
(18, 5, 4, '2017-10-24 18:05:39'),
(19, 5, 4, '2017-10-24 18:36:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
 ADD PRIMARY KEY (`id_postagem`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
 ADD PRIMARY KEY (`id_usuario_seguidor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
MODIFY `id_postagem` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
MODIFY `id_usuario_seguidor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
