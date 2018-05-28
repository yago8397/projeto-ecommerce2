-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Maio-2018 às 18:45
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `cod_pedido` int(11) NOT NULL,
  `cod_produto` varchar(255) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` varchar(255) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `processo_entrega` varchar(255) NOT NULL,
  `total_pagar` float(9,2) NOT NULL,
  `data_pedido` varchar(255) NOT NULL,
  `parcelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`cod_pedido`, `cod_produto`, `nome_produto`, `preco_produto`, `cod_usuario`, `nome_usuario`, `email_usuario`, `processo_entrega`, `total_pagar`, `data_pedido`, `parcelas`) VALUES
(68, '18, 9, 7', 'Turma da Mônica - O Pequeno Príncipe, Ar Condicionado Split Hi-Wall, PC G-FIRE AMD A4 7300', '40.83, 1124.99, 1649', 1, 'Yago', 'yago_rj@hotmail.com', 'Entregue', 2814.82, '28/05/2018 18:39:12', 'à Vista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod_produto` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_produto`, `img`, `nome`, `descri`, `preco`, `tipo`) VALUES
(1, 'imagens/iphone.jpg', 'iPhone 7 Plus', '128GB Vermelho Tela Retina HD 5,5\'\'', 4324.99, 'informatica'),
(2, 'imagens/tv.png', 'Smart TV LED 55\'\' Philco', 'PH55A17DSGWA Full HD com Conversor Digital', 2299.99, 'eletrodomestico'),
(3, 'imagens/tb.png', 'Tablet Multilaser M7S', '8GB Wi-Fi 7\'\' Android 4.4 Quad Core - Preto.', 271, 'informatica'),
(7, 'imagens/pcgamer.jpg', 'PC G-FIRE AMD A4 7300', '8GB 1TB Radeon HD8470D 2GB', 1649, 'informatica'),
(9, 'imagens/ar.jpg', 'Ar Condicionado Split Hi-Wall', 'Springer Midea 12.000 BTUs Frio 220V', 1124.99, 'eletrodomestico'),
(12, 'imagens/armario.jpg', 'Armário Cozinha Compacta', 'Julia 4 Peças Preto Poquema', 289, 'decoracao'),
(13, 'imagens/banheiro.jpg', 'Conjunto de Banheiro Completo class', 'Balcão, painel, cuba', 511, 'decoracao'),
(17, 'imagens/ft.jpg', 'Fairy Tail Vol 51 - Jbc', 'Livro', 10.15, 'entretenimento'),
(18, 'imagens/tm.jpg', 'Turma da Mônica - O Pequeno Príncipe', 'Livro', 40.83, 'entretenimento'),
(19, 'imagens/de.jpg', 'Blu-ray Doutor Estranho 3D', 'Filme', 53.9, 'entretenimento'),
(21, 'imagens/sc.jpg', 'Shadow of the Colossus - PS4', 'Jogo', 199.99, 'entretenimento'),
(22, 'imagens/dz.jpg', 'Dragon Ball Fighterz - PS4', 'Jogo', 179.9, 'entretenimento'),
(23, 'imagens/not.png', 'Notebook Dell Inspiron', 'i15-5566-A10P Intel Core i3 4GB 1TB ', 2399.99, 'informatica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
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
  `cpf` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `cid` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ende` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(10, 'yagov2', 'dfgdsf@fgdsa', '123', '123', 'dsfgsd', 'dfgdf', 'M', 'fsgdsf', 'dsfgsdf', 'RJ', 'dsfgsdf', 'dsfgsd', 'sdfgsdf', 'dsfgsdf', 'Cliente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`cod_pedido`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod_produto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `cod_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
