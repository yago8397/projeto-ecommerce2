-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2018 às 20:50
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
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod_produto` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_produto`, `img`, `nome`, `desc`, `preco`) VALUES
(1, 'imagens/iphone.jpg', 'iPhone 7 Plus', '128GB Vermelho Tela Retina HD 5,5\'\' 3D Touch Câmera Dupla de 12MP.', 4324.99),
(2, 'imagens/tv.png', 'Smart TV LED 55\'\' Philco', 'PH55A17DSGWA Full HD com Conversor Digital 3 HDMI 2 USB Wi-Fi.', 2299.99),
(3, 'imagens/tb.png', 'Tablet Multilaser M7S', '8GB Wi-Fi 7\'\' Android 4.4 Quad Core - Preto.', 271);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` bigint(20) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `csenha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dtn` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `snome` varchar(255) NOT NULL,
  `tel` bigint(20) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` bigint(20) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `ende` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `login`, `email`, `senha`, `csenha`, `nome`, `dtn`, `sexo`, `snome`, `tel`, `uf`, `cep`, `cid`, `ende`) VALUES
(12345678900, 'yago8397', 'yago_rj@hotmail.com', 'twotwo22', 'twotwo22', 'Yago', '1997-07-29', 'M', 'Beserra', 979119730, 'RJ', 21750001, 'Rio de Janeiro', 'Rua 1 Casa 83');

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
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
