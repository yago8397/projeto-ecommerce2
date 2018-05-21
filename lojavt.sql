-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Maio-2018 às 20:11
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
CREATE TABLE IF NOT EXISTS "pedidos" ;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`cod_pedido`, `cod_produto`, `nome_produto`, `preco_produto`, `cod_usuario`, `nome_usuario`, `email_usuario`, `processo_entrega`, `total_pagar`, `data_pedido`, `parcelas`) VALUES
(52, '1, 2, 3', 'iPhone 7 Plus, Smart TV LED 55\'\' Philco, Tablet Multilaser M7S', '4324.99, 2299.99, 271.99', 1, 'Yago', 'yago_rj@hotmail.com', 'Pedido Realizado', 6896.97, '21/05/2018  18:55:34', 0),
(53, '2, 9, 10', 'Smart TV LED 55\'\' Philco, Ar Condicionado Split Hi-Wall, Interface Gravação Behringer', '2299.99, 1124.99, 258.99', 1, 'Yago', 'yago_rj@hotmail.com', 'Pedido Realizado', 3683.97, '21/05/2018  18:55:50', 10),
(54, '11, 12, 13', 'Tapete De Sala 2,00x2,40, Armário Cozinha Compacta, Conjunto de Banheiro Completo class', '129, 289, 511', 1, 'Yago', 'yago_rj@hotmail.com', 'Pedido Realizado', 1021.90, '21/05/2018  18:56:00', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS "produtos" ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_produto`, `img`, `nome`, `desc`, `preco`, `tipo`) VALUES
(1, 'imagens/iphone.jpg', 'iPhone 7 Plus', '128GB Vermelho Tela Retina HD 5,5\'\' 3D Touch Câmera Dupla de 12MP', 4324.99, 'informatica'),
(2, 'imagens/tv.png', 'Smart TV LED 55\'\' Philco', 'PH55A17DSGWA Full HD com Conversor Digital 3 HDMI 2 USB Wi-Fi.', 2299.99, 'eletrodomestico'),
(3, 'imagens/tb.png', 'Tablet Multilaser M7S', '8GB Wi-Fi 7\'\' Android 4.4 Quad Core - Preto.', 271.99, 'informatica'),
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
CREATE TABLE IF NOT EXISTS "usuarios" ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `login`, `email`, `senha`, `csenha`, `nome`, `dtn`, `sexo`, `snome`, `tel`, `uf`, `cpf`, `cep`, `cid`, `ende`, `tipo`) VALUES
(1, 'yago', 'yago_rj@hotmail.com', '123', '123', 'Yago', 'fsad', 'M', 'sdfsa', 'sdfs', 'RJ', 'sdafas', '544545', 'Rio', 'sdafasdf', 'Cliente'),
(2, 'yagov', 'bigfdsfbig@hotmail.com', '123', '123', 'yagov', 'fsadfa', 'M', 'asdfsd', 'sadfasd', 'ES', 'sadfasd', 'sdfasda', 'fsad', 'fasdfasdf', 'Vendedor'),
(3, 'gsdfg', 'dfgdsf@fgdsa', 'dsfgdsf', 'dfsgsd', 'dsfgsd', 'dfsg', 'M', 'fdsgsd', 'dfsgdsf', 'RJ', 'dfgssdf', 'dsfgsd', 'sdfgsdf', 'dsfgsdf', 'Vendedor'),
(4, 'gsdfg', 'dfgdsf@fgdsa', 'hjkh', 'hjkhj', 'dsfgsd', 'dfsg', 'M', 'fdsgsd', 'dfsgdsf', 'RJ', 'dfgssdf', 'dsfgsd', 'sdfgsdf', 'dsfgsdf', 'Vendedor'),
(5, 'gsdfg', 'dfgdsf@fgdsa', 'fsdf', 'sdfsdf', 'dsfgsd', 'dfsg', 'M', 'fdsgsd', 'dfsgdsf', 'RJ', 'dfgssdf', 'dsfgsd', 'sdfgsdf', 'dsfgsdf', 'Vendedor'),
(6, 'gsdfg', 'dfgdsf@fgdsa', 'dsd', 'sdsd', 'dsfgsd', 'dfsg', 'M', 'fdsgsd', 'dfsgdsf', 'RJ', 'dfgssdf', 'dsfgsd', 'sdfgsdf', 'dsfgsdf', 'Vendedor'),
(7, 'fdgdfdfgdf', 'bigbig@hotmail.com', 'fgd', 'fdgdf', 'big M M', 'dfgdf', 'M', 'dfgfd', 'dfgdf', 'ES', 'dfgdf', '4859622-5', 'Rio de Janeiro', 'AADSAA', 'Vendedor'),
(8, 'fdgdfdfgdf', 'bigbig@hotmail.com', 'ffdfs', 'dfsdfs', 'big M M', 'dfgdf', 'M', 'dfgfd', 'dfgdf', 'ES', 'dfgdf', '4859622-5', 'Rio de Janeiro', 'AADSAA', 'Vendedor'),
(9, 'fdgdfdfgdf', 'bigbig@hotmail.com', 'dsfsd', 'sdfsd', 'big M M', 'dfgdf', 'M', 'dfgfd', 'dfgdf', 'ES', 'dfgdf', '4859622-5', 'Rio de Janeiro', 'AADSAA', 'Vendedor'),
(10, 'dfgd', 'dfgdsf@fgdsa', 'dfgdf', 'dfgdf', 'dsfgsd', 'dfgdf', 'M', 'fsgdsf', 'dsfgsdf', 'RJ', 'dsfgsdf', 'dsfgsd', 'sdfgsdf', 'dsfgsdf', 'Cliente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
