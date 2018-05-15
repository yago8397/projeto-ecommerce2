-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2018 às 02:12
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lojavt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
`cod_produto` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_produto`, `img`, `nome`, `desc`, `preco`, `tipo`) VALUES
(1, 'imagens/iphone.jpg', 'iPhone 7 Plus', '128GB Vermelho Tela Retina HD 5,5'''' 3D Touch Câmera Dupla de 12MP', 4324.99, 'informatica'),
(2, 'imagens/tv.png', 'Smart TV LED 55'''' Philco', 'PH55A17DSGWA Full HD com Conversor Digital 3 HDMI 2 USB Wi-Fi.', 2299.99, 'eletrodomestico'),
(3, 'imagens/tb.png', 'Tablet Multilaser M7S', '8GB Wi-Fi 7'''' Android 4.4 Quad Core - Preto.', 271.99, 'informatica'),
(7, 'imagens/pcgamer.jpg', 'PC G-FIRE AMD A4 7300', '8GB 1TB Radeon HD8470D 2GB integrada Computador Gamer Hermes V GKH HTG-96', 1649, 'informatica'),
(9, 'imagens/ar.jpg', 'Ar Condicionado Split Hi-Wall', 'Springer Midea 12.000 BTUs Frio 220V', 1124.99, 'eletrodomestico'),
(10, 'imagens/audio.jpg', 'Interface Gravação Behringer', 'U-phoria Um2 USB pré Xenyx Audio', 258.99, 'eletrodomestico'),
(11, 'imagens/tapete.jpg', 'Tapete De Sala 2,00x2,40', 'Bege Com Mesclado,luxo,macio,felpudo Com 4cm De Pelagem', 129, 'decoracao'),
(12, 'imagens/armario.jpg', 'Armário Cozinha Compacta', 'Julia 4 Peças Preto Poquema', 289, 'decoracao'),
(13, 'imagens/banheiro.jpg', 'Conjunto de Banheiro Completo class', 'Balcão,painel,cuba', 511, 'decoracao'),
(14, 'imagens/jogo.jpg', 'Game God Of War', ' PS4', 199, 'entretenimento'),
(15, 'imagens/filme.jpg', 'DVD - Star Wars', 'Os Últimos Jedi', 29.9, 'entretenimento'),
(16, 'imagens/livro.jpg', 'Livro', 'As Aventuras na Netoland com Luccas Neto', 14.9, 'entretenimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `csenha` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dtn` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sexo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `snome` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `uf` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cpf` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cep` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cid` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ende` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `email`, `senha`, `csenha`, `nome`, `dtn`, `sexo`, `snome`, `tel`, `uf`, `cpf`, `cep`, `cid`, `ende`) VALUES
('DASD', 'dsfgsdfg@hotmail.com', 'dsfasd', 'sadfasd', 'ASDASsdafsad', 'DAS', 'M', 'ADAS', 'DASD', 'RJ', 'ASDAS', 'ASDA', 'ASD', 'ADSAS'),
('jfg', 'dsfgsdfg@hotmail.com', 'jmgfjfg', 'kjfgjfg', 'jfgjfg', 'jfgjf', 'M', 'fjfg', 'jfgjf', 'SP', 'fgjg', 'jfgjfg', 'jfgjg', 'fhjf'),
('jfglkj.,jkl453453', 'dsfgsdfg@hotma.com', 'q23213a', 'aw323131', 'jfgjfg23a3', 'jfgjfasaw31', 'M', 'fjfg3123a', 'jfgjfw312312', 'SP', 'fgjg3453453', 'jfgjfg312', 'jfgjg123a', 'fhjf1231'),
('weiqwhgeq', 'kajwhekjhawekjh@hotmail.con', 'uououiou', 'luil', 'ouiouiouio', 'iouioui', 'F', 'uiouiou', 'oiuouio', 'RJ', 'ouiouio', 'io', 'uiouiouio', 'uiouiou'),
('asdfasdfasdf', 'sdaf654sad654@hotmail.com', 'sdafasdfasd', 'asfdads', 'sadfads', 'sdafasd', 'M', 'asdfdas', 'sadfdas', 'RJ', 'sadfasd', 'sadfads', 'sadfasd', 'sadfsda'),
('safasd', 'dsfgsdfg@hotmail.com', 'fsadfa', 'sadfasd', 'fsadf', 'sdafasd', 'M', 'dsfsad', 'dfsad', 'SP', 'sdfsad', 'sdafasd', 'sdafas', 'dsaf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY (`cod_produto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
