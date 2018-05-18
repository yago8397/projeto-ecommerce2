-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Maio-2018 às 01:30
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lojavt`
--
CREATE DATABASE IF NOT EXISTS `lojavt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE lojavt;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS "pedidos" (
"id_pedido" int(11) NOT NULL,
  "id_produto" int(11) NOT NULL,
  "nome_produto" varchar(255) NOT NULL,
  "id_usuario" int(11) NOT NULL,
  "nome_usuario" varchar(255) NOT NULL,
  "data_hora" datetime NOT NULL,
  "total" int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS "produtos" (
"cod_produto" int(11) NOT NULL,
  "img" varchar(255) NOT NULL,
  "nome" varchar(255) NOT NULL,
  "desc" varchar(255) NOT NULL,
  "preco" float NOT NULL,
  "tipo" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
);

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

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS "usuarios" (
  "login" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "email" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "senha" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "csenha" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "nome" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "dtn" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "sexo" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "snome" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "tel" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "uf" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "cpf" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "cep" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "cid" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "ende" varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  "tipo" varchar(255) NOT NULL
);

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `email`, `senha`, `csenha`, `nome`, `dtn`, `sexo`, `snome`, `tel`, `uf`, `cpf`, `cep`, `cid`, `ende`, `tipo`) VALUES
('yago', 'sdaf654sad654@hotmail.com', '123', '123', 'yago', '123', 'M', '13213', '131231', 'RJ', '12312', 'sadfads', 'sadfasd', 'sadfsda', 'Cliente'),
('vendedor1', 'vendedor1@hotmail.com', '123', '123', 'vendedor1', 'vendedor1', 'M', 'vendedor1', 'vendedor1', 'RJ', 'vendedor1', 'sadfads', 'sadfasd', 'sadfsda', 'Vendedor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
 ADD PRIMARY KEY ("id_pedido"), ADD UNIQUE KEY "nome_produto" ("nome_produto"), ADD KEY "id_produto" ("id_produto");

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY ("cod_produto");

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY ("cpf");

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
MODIFY "id_pedido" int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY "cod_produto" int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
