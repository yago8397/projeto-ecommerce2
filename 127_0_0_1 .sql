-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2018 às 03:23
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
-- Database: `gaiashop`
--
CREATE DATABASE IF NOT EXISTS `gaiashop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE gaiashop;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE "cliente" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE "produtos" ;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE phpmyadmin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__bookmark`
--

DROP TABLE IF EXISTS `pma__bookmark`;
CREATE TABLE "pma__bookmark" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__central_columns`
--

DROP TABLE IF EXISTS `pma__central_columns`;
CREATE TABLE "pma__central_columns" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__column_info`
--

DROP TABLE IF EXISTS `pma__column_info`;
CREATE TABLE "pma__column_info" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__designer_settings`
--

DROP TABLE IF EXISTS `pma__designer_settings`;
CREATE TABLE "pma__designer_settings" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__export_templates`
--

DROP TABLE IF EXISTS `pma__export_templates`;
CREATE TABLE "pma__export_templates" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__favorite`
--

DROP TABLE IF EXISTS `pma__favorite`;
CREATE TABLE "pma__favorite" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__history`
--

DROP TABLE IF EXISTS `pma__history`;
CREATE TABLE "pma__history" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__navigationhiding`
--

DROP TABLE IF EXISTS `pma__navigationhiding`;
CREATE TABLE "pma__navigationhiding" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__pdf_pages`
--

DROP TABLE IF EXISTS `pma__pdf_pages`;
CREATE TABLE "pma__pdf_pages" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__recent`
--

DROP TABLE IF EXISTS `pma__recent`;
CREATE TABLE "pma__recent" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__relation`
--

DROP TABLE IF EXISTS `pma__relation`;
CREATE TABLE "pma__relation" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__savedsearches`
--

DROP TABLE IF EXISTS `pma__savedsearches`;
CREATE TABLE "pma__savedsearches" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_coords`
--

DROP TABLE IF EXISTS `pma__table_coords`;
CREATE TABLE "pma__table_coords" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_info`
--

DROP TABLE IF EXISTS `pma__table_info`;
CREATE TABLE "pma__table_info" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_uiprefs`
--

DROP TABLE IF EXISTS `pma__table_uiprefs`;
CREATE TABLE "pma__table_uiprefs" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__tracking`
--

DROP TABLE IF EXISTS `pma__tracking`;
CREATE TABLE "pma__tracking" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__userconfig`
--

DROP TABLE IF EXISTS `pma__userconfig`;
CREATE TABLE "pma__userconfig" ;

--
-- Extraindo dados da tabela `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-05-07 01:23:00', '{\"lang\":\"pt\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__usergroups`
--

DROP TABLE IF EXISTS `pma__usergroups`;
CREATE TABLE "pma__usergroups" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__users`
--

DROP TABLE IF EXISTS `pma__users`;
CREATE TABLE "pma__users" ;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE test;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
