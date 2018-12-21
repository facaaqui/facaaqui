-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 05:36 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consulvison`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `idSector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `descricao`, `idSector`) VALUES
(1, 'ALIMENTOS', 1),
(2, 'BEBIDAS', 1),
(3, 'CASA E LIMPEZA', 1),
(4, 'CUIDADOS COM A ROUPA', 1),
(5, 'DESCARTÃVEIS E UTILITÃRIOS ', 1),
(6, 'HIGIENE E BELEZA', 1),
(7, 'INFANTIL', 1),
(8, 'PAPELARIA', 1),
(9, 'PET SHOP', 1),
(10, 'FRESCOS', 2),
(11, 'SOFÃS', 8),
(12, 'MESAS DE JANTAR', 8),
(13, 'MESAS DE CENTRO', 8),
(14, 'COZINHA', 8),
(15, 'CANDIEIROS', 8);

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nif` varchar(50) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tipo` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `idMercado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `nif`, `telefone`, `email`, `tipo`, `foto`, `idMercado`) VALUES
(1, 'sdlsdf', 'jkdfh', 9034834, '', 0, '', 0),
(2, 'sdlsdf', 'jkdfh', 9034834, '', 0, '', 0),
(3, 'AngoMart', '2345643', 9034834, 'ango@gmail.com', 0, '180308100314.jpg', 0),
(5, '', '', 0, '', 2, '', 4),
(6, '', '', 0, '', 2, '', 5),
(7, '', '', 0, '', 2, '', 6),
(9, 'Paulo JoÃ£o', '', 0, '', 0, '', 0),
(10, 'Liane Predro Andre', '', 921876545, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comissao`
--

CREATE TABLE `comissao` (
  `id` int(11) NOT NULL,
  `idMercado` int(11) NOT NULL,
  `comissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comissao`
--

INSERT INTO `comissao` (`id`, `idMercado`, `comissao`) VALUES
(3, 5, 20),
(4, 6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `contacorrente`
--

CREATE TABLE `contacorrente` (
  `id` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `saldo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacorrente`
--

INSERT INTO `contacorrente` (`id`, `idCliente`, `saldo`) VALUES
(1, 3, '5000000');

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `apartamento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `endereco`
--

INSERT INTO `endereco` (`id`, `idCliente`, `provincia`, `distrito`, `municipio`, `rua`, `apartamento`) VALUES
(1, 2, 'sdfkjld', 'sdfjkl', 'dlsfj', 'jksdf', '23'),
(2, 3, 'Luanda', 'Samba', 'Belas', '23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `itenspedido`
--

CREATE TABLE `itenspedido` (
  `id` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL,
  `precoUnt` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `comissao` varchar(20) NOT NULL,
  `tipoMovimentacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itenspedido`
--

INSERT INTO `itenspedido` (`id`, `idPedido`, `idProduto`, `nome`, `qtd`, `precoUnt`, `total`, `comissao`, `tipoMovimentacao`) VALUES
(1, 2, 4, 'Piscina de bolas', 1, '4500', '4500', '0', 1),
(2, 2, 3, 'Boneca Barbie', 1, '500', '500', '0', 1),
(3, 3, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(4, 4, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(5, 4, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(6, 5, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(7, 5, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(8, 5, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(9, 5, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 1),
(10, 5, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(11, 6, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(12, 7, 3, 'Boneca Barbie', 2, '500', '1000', '50', 1),
(13, 7, 4, 'Piscina de bolas', 2, '4500', '9000', '450', 1),
(14, 8, 5, 'CamiÃ£o Em Miniatura', 0, '3000', '0', '300', 1),
(15, 9, 5, 'CamiÃ£o Em Miniatura', 0, '3000', '0', '300', 1),
(16, 10, 4, 'Piscina de bolas', 0, '4500', '0', '450', 1),
(17, 11, 3, 'Boneca Barbie', 4, '500', '2000', '50', 1),
(18, 11, 7, 'Drone', 4, '90000', '360000', '9000', 1),
(19, 12, 5, 'CamiÃ£o Em Miniatura', 0, '3000', '0', '300', 1),
(20, 12, 6, 'CamiÃ£o Atrelado', 0, '4000', '0', '400', 1),
(21, 14, 6, 'CamiÃ£o Atrelado', 0, '4000', '0', '400', 1),
(22, 15, 4, 'Piscina de bolas', 0, '6', '0', '0', 1),
(23, 15, 5, 'CamiÃ£o Em Miniatura', 0, '6', '0', '0', 1),
(24, 16, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(25, 16, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(26, 17, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(27, 17, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(28, 17, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(29, 18, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(30, 22, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(31, 22, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(32, 23, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(33, 23, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(34, 24, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(35, 24, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(36, 25, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(37, 25, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(38, 26, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(39, 26, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(40, 27, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(41, 27, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(42, 28, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(43, 29, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(44, 30, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(45, 30, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(46, 31, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(47, 31, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(48, 32, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(49, 32, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(50, 33, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(51, 33, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(52, 34, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(53, 34, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(54, 35, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(55, 35, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(56, 36, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(57, 36, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(58, 37, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(59, 37, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(60, 38, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(61, 38, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(62, 39, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(63, 39, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(64, 40, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(65, 41, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(66, 41, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(67, 41, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 1),
(68, 42, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(69, 42, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(70, 42, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 1),
(71, 42, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(72, 43, 2, 'Armario de Cozinha', 1, '150000', '150000', '30000', 1),
(73, 44, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(74, 45, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(75, 45, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(76, 46, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(77, 46, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(78, 46, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 1),
(79, 47, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(80, 47, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(81, 47, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(82, 48, 2, 'Armario de Cozinha', 1, '150000', '150000', '30000', 1),
(83, 48, 1, 'Guarda Fato', 1, '500000', '500000', '100000', 1),
(84, 49, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(85, 49, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(86, 49, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(87, 49, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(88, 49, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(89, 49, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(90, 49, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 1),
(91, 50, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(92, 50, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(93, 51, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(94, 51, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(95, 51, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(96, 51, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(97, 51, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(98, 51, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(99, 51, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(100, 52, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(101, 52, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(102, 52, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(103, 52, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(104, 52, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(105, 52, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(106, 53, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(107, 54, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(108, 55, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(109, 56, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(110, 57, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(111, 57, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(112, 57, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(113, 57, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(114, 57, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(115, 57, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(116, 58, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(117, 58, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(118, 58, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(119, 58, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(120, 58, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(121, 58, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(122, 59, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(123, 59, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(124, 59, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(125, 59, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(126, 59, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(127, 59, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(128, 59, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(129, 59, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(130, 60, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(131, 60, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(132, 61, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(133, 61, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(134, 61, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(135, 62, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(136, 62, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(137, 63, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(138, 63, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(139, 63, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(140, 64, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(141, 64, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(142, 66, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(143, 66, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(144, 66, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(145, 66, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(146, 67, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(147, 67, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(148, 67, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(149, 68, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(150, 68, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(151, 68, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(152, 69, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(153, 69, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(154, 69, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(155, 69, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(156, 69, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(157, 70, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(158, 70, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(159, 71, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(160, 71, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(161, 72, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(162, 72, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(163, 72, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(164, 72, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(165, 73, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(166, 73, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(167, 74, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(168, 74, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(169, 74, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(170, 74, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(171, 75, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(172, 75, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(173, 75, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(174, 75, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(175, 75, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(176, 75, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(177, 75, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(178, 75, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(179, 75, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(180, 76, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(181, 76, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(182, 76, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(183, 76, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(184, 76, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(185, 76, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(186, 76, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(187, 76, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(188, 76, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(189, 76, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(190, 76, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(191, 76, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(192, 77, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(193, 77, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(194, 77, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(195, 77, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(196, 77, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(197, 77, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(198, 77, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(199, 77, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(200, 77, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(201, 77, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(202, 77, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(203, 77, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(204, 77, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(205, 77, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(206, 77, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(207, 77, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(208, 78, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(209, 78, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(210, 78, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(211, 78, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(212, 78, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(213, 78, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(214, 78, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(215, 78, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(216, 78, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(217, 78, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(218, 78, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(219, 78, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(220, 78, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(221, 78, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(222, 78, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(223, 78, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(224, 79, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(225, 79, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(226, 79, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(227, 79, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(228, 79, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(229, 79, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(230, 79, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(231, 79, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(232, 79, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(233, 79, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(234, 79, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(235, 79, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(236, 79, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(237, 79, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(238, 79, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(239, 79, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(240, 79, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(241, 79, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(242, 79, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(243, 80, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(244, 80, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(245, 80, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(246, 80, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(247, 80, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(248, 80, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(249, 80, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(250, 80, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(251, 80, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(252, 80, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(253, 80, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(254, 80, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(255, 80, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(256, 80, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(257, 80, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(258, 80, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(259, 80, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(260, 80, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(261, 80, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(262, 80, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(263, 80, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(264, 80, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(265, 81, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(266, 81, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(267, 81, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(268, 81, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(269, 81, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(270, 81, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(271, 81, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(272, 81, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(273, 81, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(274, 81, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(275, 81, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(276, 81, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(277, 81, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(278, 81, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(279, 81, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(280, 81, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(281, 81, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(282, 81, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(283, 81, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(284, 81, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(285, 81, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(286, 81, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(287, 81, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(288, 81, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(289, 81, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(290, 81, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(291, 81, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(292, 82, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(293, 82, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(294, 82, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(295, 82, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(296, 82, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(297, 82, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(298, 82, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(299, 82, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(300, 82, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(301, 82, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(302, 82, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(303, 82, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(304, 82, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(305, 82, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(306, 82, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(307, 82, 6, 'CamiÃ£o Atrelado', 1, '4000', '4000', '400', 0),
(308, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(309, 82, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(310, 82, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(311, 82, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(312, 82, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(313, 82, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(314, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(315, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(316, 82, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(317, 82, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(318, 82, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(319, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(320, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(321, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(322, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(323, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(324, 82, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(325, 83, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(326, 83, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(327, 84, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(328, 84, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(329, 84, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(330, 85, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(331, 85, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(332, 85, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(333, 86, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(334, 86, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(335, 87, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(336, 87, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(337, 88, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(338, 88, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(339, 89, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(340, 89, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(341, 90, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(342, 90, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(343, 91, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(344, 91, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(345, 92, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(346, 93, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(347, 93, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(348, 94, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(349, 95, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(350, 95, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(351, 95, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(352, 96, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(353, 96, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(354, 96, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(355, 96, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(356, 96, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(357, 97, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(358, 98, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(359, 98, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(360, 98, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(361, 99, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(362, 99, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(363, 100, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(364, 100, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(365, 100, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(366, 100, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(367, 101, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(368, 101, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(369, 101, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(370, 101, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(371, 102, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(372, 103, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(373, 104, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(374, 104, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(375, 105, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(376, 105, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(377, 106, 5, 'CamiÃ£o Em Miniatura', 1, '3000', '3000', '300', 0),
(378, 106, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(379, 107, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(380, 108, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(381, 109, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(382, 109, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(383, 110, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(384, 110, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(385, 111, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(386, 111, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(387, 112, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(388, 113, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(389, 114, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(390, 115, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(391, 116, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(392, 117, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(393, 118, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(394, 118, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(395, 119, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(396, 119, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(397, 120, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(398, 121, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(399, 121, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(400, 122, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(401, 123, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(402, 124, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(403, 125, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(404, 126, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(405, 127, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(406, 128, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(407, 129, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(408, 130, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(409, 131, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(410, 131, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(411, 132, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(412, 132, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(413, 133, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(414, 134, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(415, 134, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(416, 135, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(417, 136, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(418, 137, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(419, 138, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(420, 138, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(421, 139, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(422, 140, 3, 'Boneca Barbie', 1, '500', '500', '50', 0),
(423, 141, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(424, 142, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(425, 142, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(426, 143, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(427, 144, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(428, 145, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(429, 145, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(430, 145, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(431, 145, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(432, 146, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(433, 146, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(434, 146, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(435, 146, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(436, 146, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(437, 146, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(438, 147, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(439, 147, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(440, 147, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(441, 147, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(442, 148, 3, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(443, 148, 3, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(444, 149, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(445, 149, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(446, 150, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(447, 150, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(448, 150, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(449, 151, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(450, 151, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(451, 152, 3, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(452, 153, 5, 'Drone', 1, '90000', '90000', '9000', 0),
(453, 154, 3, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(454, 154, 3, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(455, 155, 15, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(456, 156, 5, 'Drone', 1, '90000', '90000', '9000', 0),
(457, 157, 3, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(458, 158, 3, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(459, 158, 3, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(460, 159, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(461, 160, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(462, 160, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(463, 160, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(464, 161, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(465, 161, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(466, 161, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(467, 161, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(468, 161, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(469, 161, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(470, 161, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 0),
(471, 162, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(472, 162, 7, 'Drone', 1, '90000', '90000', '9000', 0),
(473, 162, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(474, 162, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 0),
(475, 163, 3, 'Boneca Barbie', 1, '500', '500', '0', 0),
(476, 164, 1, 'Guarda Fato', 1, '500000', '500000', '100000', 0),
(477, 164, 1, 'Guarda Fato', 1, '500000', '500000', '100000', 0),
(478, 164, 1, 'Guarda Fato', 1, '500000', '500000', '100000', 0),
(479, 164, 1, 'Guarda Fato', 1, '500000', '500000', '100000', 0),
(480, 165, 2, 'Armario de Cozinha', 1, '150000', '150000', '30000', 0),
(481, 165, 2, 'Armario de Cozinha', 1, '150000', '150000', '30000', 0),
(482, 166, 2, 'Armario de Cozinha', 1, '150000', '150000', '30000', 1),
(483, 166, 1, 'Guarda Fato', 1, '500000', '500000', '100000', 1),
(484, 166, 1, 'Guarda Fato', 1, '500000', '500000', '100000', 1),
(485, 166, 2, 'Armario de Cozinha', 1, '150000', '150000', '30000', 1),
(486, 167, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(487, 167, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(488, 167, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(489, 167, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(490, 167, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(491, 168, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(492, 168, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1),
(493, 168, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(494, 168, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(495, 169, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(496, 169, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(497, 169, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(498, 169, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(499, 169, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(500, 169, 3, 'Boneca Barbie', 1, '500', '500', '50', 1),
(501, 169, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(502, 169, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(503, 169, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(504, 169, 4, 'Piscina de bolas', 1, '4500', '4500', '450', 1),
(505, 169, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(506, 169, 7, 'Drone', 1, '90000', '90000', '9000', 1),
(507, 169, 8, 'Cozinha de Brincar', 1, '7000', '7000', '700', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menulateral`
--

CREATE TABLE `menulateral` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menulateral`
--

INSERT INTO `menulateral` (`id`, `descricao`, `idCategoria`, `sector`) VALUES
(1, 'TEMPERO  E CONDIMENTOS', 1, 1),
(2, 'BOLACHAS', 1, 1),
(3, 'CONSERVADOS E ENLATADOS', 1, 1),
(4, 'GASOSA', 2, 1),
(5, 'SUMOS', 2, 1),
(6, 'ENERGETICOS', 2, 1),
(7, 'VINHOS', 2, 1),
(8, 'EM PELE', 11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `mercado`
--

CREATE TABLE `mercado` (
  `id` int(11) NOT NULL,
  `nomeEmpresa` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `razaoSocial` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nif` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `infoAdd` varchar(200) NOT NULL,
  `condicoesPagamento` int(11) NOT NULL,
  `sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mercado`
--

INSERT INTO `mercado` (`id`, `nomeEmpresa`, `marca`, `razaoSocial`, `telefone`, `email`, `nif`, `foto`, `infoAdd`, `condicoesPagamento`, `sector`) VALUES
(5, 'Agrisand ', 'E&amp;A Mobiliaria', 'n/a', '923121412', 'e&amp;a@hotmail.com', '34589KLO', '180327050326.jpg', 'n/a', 2, 8),
(6, 'Helsy2', 'Mundo da Analtina', 'n/a', '923121412', 'analtina@hotmail.com', '34589KL', '180327050330.jpg', 'n/a', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `dataPedido` varchar(15) NOT NULL,
  `dataEntrega` varchar(15) NOT NULL,
  `horaEntrega` varchar(10) NOT NULL,
  `idAtendente` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `idMercado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `idUser`, `dataPedido`, `dataEntrega`, `horaEntrega`, `idAtendente`, `status`, `idMercado`) VALUES
(1, 1, '', '', '', 0, 0, 5),
(2, 1, '', '', '', 0, 0, 5),
(3, 1, '', '', '', 0, 0, 5),
(4, 1, '', '', '', 0, 0, 5),
(5, 1, '', '', '', 0, 0, 5),
(6, 1, '', '', '', 0, 0, 5),
(7, 1, '', '', '', 0, 0, 5),
(8, 1, '', '', '', 0, 0, 5),
(9, 1, '', '', '', 0, 0, 5),
(10, 1, '', '', '', 0, 0, 5),
(11, 1, '', '', '', 0, 0, 5),
(12, 1, '', '', '', 0, 0, 5),
(13, 1, '', '', '', 0, 0, 5),
(14, 1, '', '', '', 0, 0, 5),
(15, 1, '', '', '', 0, 0, 5),
(16, 1, '', '', '', 0, 0, 5),
(17, 1, '', '', '', 0, 0, 5),
(18, 1, '', '', '', 0, 0, 5),
(19, 1, '', '', '', 0, 0, 5),
(20, 1, '', '', '', 0, 0, 5),
(21, 1, '', '', '', 0, 0, 5),
(22, 9, '', '', '', 0, 0, 6),
(23, 9, '', '', '', 0, 0, 6),
(24, 9, '', '', '', 0, 0, 6),
(25, 9, '', '', '', 0, 0, 6),
(26, 9, '', '', '', 0, 0, 6),
(27, 9, '', '', '', 0, 0, 6),
(28, 9, '', '', '', 0, 0, 6),
(29, 9, '', '', '', 0, 0, 6),
(30, 9, '', '', '', 0, 0, 6),
(31, 9, '', '', '', 0, 0, 6),
(32, 9, '', '', '', 0, 0, 6),
(33, 10, '12-04-2018', '', '', 0, 1, 6),
(34, 10, '12-04-2018', '', '', 0, 1, 6),
(35, 10, '12-04-2018', '', '', 0, 1, 6),
(36, 10, '12-04-2018', '', '', 0, 1, 5),
(37, 5, '12-04-2018', '', '', 0, 1, 6),
(38, 5, '12-04-2018', '', '', 0, 1, 5),
(39, 5, '12-04-2018', '', '', 0, 2, 6),
(40, 5, '12-04-2018', '', '', 0, 1, 6),
(41, 5, '12-04-2018', '', '', 0, 1, 6),
(42, 5, '12-04-2018', '', '', 0, 2, 6),
(43, 5, '12-04-2018', '', '', 0, 1, 5),
(44, 25, '12-04-2018', '', '', 0, 3, 6),
(45, 25, '12-04-2018', '', '', 0, 1, 6),
(46, 9, '13-04-2018', '', '', 0, 2, 6),
(47, 6, '13-04-2018', '', '', 0, 1, 6),
(48, 6, '13-04-2018', '', '', 0, 1, 5),
(49, 6, '13-04-2018', '', '', 0, 1, 6),
(50, 5, '16-04-2018', '', '', 0, 1, 6),
(51, 5, '16-04-2018', '', '', 0, 1, 6),
(52, 5, '16-04-2018', '', '', 0, 1, 6),
(53, 5, '16-04-2018', '', '', 0, 1, 6),
(54, 5, '16-04-2018', '', '', 0, 1, 6),
(55, 5, '16-04-2018', '', '', 0, 1, 6),
(56, 5, '16-04-2018', '', '', 0, 1, 6),
(57, 5, '16-04-2018', '', '', 0, 1, 6),
(58, 5, '16-04-2018', '', '', 0, 1, 6),
(59, 5, '16-04-2018', '', '', 0, 1, 6),
(60, 5, '16-04-2018', '', '', 0, 1, 6),
(61, 5, '16-04-2018', '', '', 0, 1, 6),
(62, 5, '16-04-2018', '', '', 0, 1, 6),
(63, 5, '16-04-2018', '', '', 0, 1, 6),
(64, 5, '16-04-2018', '', '', 0, 1, 6),
(65, 5, '17-04-2018', '', '', 0, 1, 6),
(66, 5, '17-04-2018', '', '', 0, 1, 6),
(67, 5, '17-04-2018', '', '', 0, 1, 6),
(68, 5, '17-04-2018', '', '', 0, 1, 6),
(69, 5, '17-04-2018', '', '', 0, 1, 6),
(70, 5, '17-04-2018', '', '', 0, 1, 6),
(71, 5, '17-04-2018', '', '', 0, 1, 6),
(72, 5, '17-04-2018', '', '', 0, 1, 6),
(73, 5, '17-04-2018', '', '', 0, 1, 6),
(74, 5, '17-04-2018', '', '', 0, 1, 6),
(75, 5, '17-04-2018', '', '', 0, 1, 6),
(76, 5, '17-04-2018', '', '', 0, 1, 6),
(77, 5, '17-04-2018', '', '', 0, 1, 6),
(78, 5, '17-04-2018', '', '', 0, 1, 6),
(79, 5, '17-04-2018', '', '', 0, 1, 6),
(80, 5, '17-04-2018', '', '', 0, 1, 6),
(81, 5, '17-04-2018', '', '', 0, 1, 6),
(82, 5, '17-04-2018', '', '', 0, 1, 6),
(83, 5, '17-04-2018', '', '', 0, 1, 6),
(84, 5, '17-04-2018', '', '', 0, 1, 6),
(85, 5, '17-04-2018', '', '', 0, 1, 6),
(86, 5, '17-04-2018', '', '', 0, 1, 6),
(87, 5, '17-04-2018', '', '', 0, 1, 6),
(88, 5, '17-04-2018', '', '', 0, 1, 6),
(89, 5, '17-04-2018', '', '', 0, 1, 6),
(90, 5, '17-04-2018', '', '', 0, 1, 6),
(91, 5, '17-04-2018', '', '', 0, 1, 6),
(92, 5, '17-04-2018', '', '', 0, 1, 6),
(93, 5, '17-04-2018', '', '', 0, 1, 6),
(94, 5, '17-04-2018', '', '', 0, 1, 6),
(95, 5, '17-04-2018', '', '', 0, 1, 6),
(96, 5, '17-04-2018', '', '', 0, 1, 6),
(97, 5, '17-04-2018', '', '', 0, 1, 6),
(98, 5, '17-04-2018', '', '', 0, 1, 6),
(99, 5, '17-04-2018', '', '', 0, 1, 6),
(100, 5, '17-04-2018', '', '', 0, 1, 6),
(101, 5, '17-04-2018', '', '', 0, 1, 6),
(102, 5, '17-04-2018', '', '', 0, 1, 6),
(103, 5, '17-04-2018', '', '', 0, 1, 6),
(104, 5, '17-04-2018', '', '', 0, 1, 6),
(105, 5, '17-04-2018', '', '', 0, 1, 6),
(106, 5, '17-04-2018', '', '', 0, 1, 6),
(107, 5, '17-04-2018', '', '', 0, 1, 6),
(108, 5, '17-04-2018', '', '', 0, 1, 6),
(109, 5, '17-04-2018', '', '', 0, 1, 6),
(110, 5, '17-04-2018', '', '', 0, 1, 6),
(111, 5, '17-04-2018', '', '', 0, 1, 6),
(112, 5, '17-04-2018', '', '', 0, 1, 6),
(113, 5, '17-04-2018', '', '', 0, 1, 6),
(114, 5, '17-04-2018', '', '', 0, 1, 6),
(115, 5, '17-04-2018', '', '', 0, 1, 6),
(116, 5, '17-04-2018', '', '', 0, 1, 6),
(117, 5, '17-04-2018', '', '', 0, 1, 6),
(118, 5, '17-04-2018', '', '', 0, 1, 6),
(119, 5, '17-04-2018', '', '', 0, 1, 6),
(120, 5, '17-04-2018', '', '', 0, 1, 6),
(121, 5, '17-04-2018', '', '', 0, 1, 6),
(122, 5, '17-04-2018', '', '', 0, 1, 6),
(123, 5, '17-04-2018', '', '', 0, 1, 6),
(124, 5, '17-04-2018', '', '', 0, 1, 6),
(125, 5, '17-04-2018', '', '', 0, 1, 6),
(126, 5, '17-04-2018', '', '', 0, 1, 6),
(127, 5, '17-04-2018', '', '', 0, 1, 6),
(128, 5, '17-04-2018', '', '', 0, 1, 6),
(129, 5, '17-04-2018', '', '', 0, 1, 6),
(130, 5, '17-04-2018', '', '', 0, 1, 6),
(131, 5, '17-04-2018', '', '', 0, 1, 6),
(132, 5, '17-04-2018', '', '', 0, 1, 6),
(133, 5, '17-04-2018', '', '', 0, 1, 6),
(134, 5, '17-04-2018', '', '', 0, 1, 6),
(135, 5, '17-04-2018', '', '', 0, 1, 6),
(136, 5, '17-04-2018', '', '', 0, 1, 6),
(137, 5, '17-04-2018', '', '', 0, 1, 6),
(138, 5, '17-04-2018', '', '', 0, 1, 6),
(139, 5, '17-04-2018', '', '', 0, 1, 6),
(140, 5, '17-04-2018', '', '', 0, 1, 6),
(141, 5, '17-04-2018', '', '', 0, 1, 6),
(142, 5, '17-04-2018', '', '', 0, 1, 6),
(143, 5, '17-04-2018', '', '', 0, 1, 6),
(144, 5, '17-04-2018', '', '', 0, 1, 6),
(145, 5, '17-04-2018', '', '', 0, 1, 6),
(146, 5, '17-04-2018', '', '', 0, 1, 6),
(147, 5, '17-04-2018', '', '', 0, 1, 6),
(148, 5, '17-04-2018', '', '', 0, 1, 6),
(149, 5, '17-04-2018', '', '', 0, 1, 6),
(150, 5, '17-04-2018', '', '', 0, 1, 6),
(151, 5, '17-04-2018', '', '', 0, 1, 6),
(152, 5, '17-04-2018', '', '', 0, 1, 6),
(153, 5, '17-04-2018', '', '', 0, 1, 6),
(154, 5, '17-04-2018', '', '', 0, 1, 6),
(155, 5, '17-04-2018', '', '', 0, 1, 6),
(156, 5, '17-04-2018', '', '', 0, 1, 6),
(157, 5, '17-04-2018', '', '', 0, 1, 6),
(158, 5, '17-04-2018', '', '', 0, 1, 6),
(159, 5, '17-04-2018', '', '', 0, 1, 6),
(160, 5, '17-04-2018', '', '', 0, 1, 6),
(161, 5, '17-04-2018', '', '', 0, 1, 6),
(162, 5, '17-04-2018', '', '', 0, 1, 6),
(163, 5, '17-04-2018', '', '', 0, 1, 0),
(164, 5, '17-04-2018', '', '', 0, 1, 5),
(165, 5, '17-04-2018', '', '', 0, 1, 5),
(166, 5, '17-04-2018', '', '', 0, 1, 5),
(167, 5, '17-04-2018', '', '', 0, 1, 6),
(168, 5, '17-04-2018', '', '', 0, 1, 6),
(169, 5, '17-04-2018', '', '', 0, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `idMercado` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `unidade` varchar(30) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `destaque` int(11) NOT NULL,
  `tamanho` varchar(10) NOT NULL,
  `pesoBruto` varchar(10) NOT NULL,
  `comissao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `idMercado`, `idCategoria`, `produto`, `referencia`, `unidade`, `preco`, `foto`, `destaque`, `tamanho`, `pesoBruto`, `comissao`) VALUES
(1, 5, 3, '', 'Guarda Fato', '0', '500000', '180328100356.jpg', 1, '', '', ''),
(2, 5, 3, '', 'Armario de Cozinha', '0', '150000', '180328110307.jpg', 0, '', '', ''),
(3, 6, 3, '', 'Boneca Barbie', '0', '500', '180328110333.jpg', 1, '', '', ''),
(4, 6, 3, '', 'Piscina de bolas', '0', '4500', '180328110334.jpg', 0, '', '', ''),
(5, 6, 3, '', 'CamiÃ£o Em Miniatura', '0', '3000', '180328110337.jpg', 1, '', '', ''),
(6, 6, 3, '', 'CamiÃ£o Atrelado', '0', '4000', '180328110338.jpg', 0, '', '', ''),
(7, 6, 3, '', 'Drone', '0', '90000', '180328110339.jpg', 0, '', '', ''),
(8, 6, 3, '', 'Cozinha de Brincar', '0', '7000', '180328030301.jpg', 0, '', '', ''),
(9, 5, 3, '', 'gf', 'fdg', '34', '180420050425.', 0, 'gdf', 'gfd', '');

-- --------------------------------------------------------

--
-- Table structure for table `responsavelep`
--

CREATE TABLE `responsavelep` (
  `id` int(11) NOT NULL,
  `idMercado` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `responsavelep`
--

INSERT INTO `responsavelep` (`id`, `idMercado`, `nome`, `cargo`, `telefone`, `email`) VALUES
(3, 5, 'Pedro', 'Consultor', '923121554', ''),
(4, 6, 'Pedro', 'Consultor', '923121554', '');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`id`, `descricao`) VALUES
(1, 'Supermercados'),
(2, 'Armazens'),
(3, 'Restaurantes'),
(4, 'Diversão'),
(5, 'Hoteis&Resorts'),
(6, 'Farmacias'),
(7, 'Automoveis'),
(8, 'Mobilia & Decoração'),
(9, 'Contrução'),
(10, 'Industria'),
(11, 'Liquidação'),
(12, 'Outros');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `dataEntrada` varchar(15) NOT NULL,
  `dataExpiracao` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `idProduto`, `qtd`, `dataEntrada`, `dataExpiracao`) VALUES
(1, 3, -7, '16/04/2018', ''),
(2, 3, 50, '16/04/2018', ''),
(3, 4, 75, '16/04/2018', ''),
(4, 4, 50, '16/04/2018', ''),
(5, 7, 989, '16/04/2018', ''),
(6, 1, 50, '16/04/2018', ''),
(7, 1, 4, '16/04/2018', ''),
(8, 1, 56, '16/04/2018', ''),
(9, 1, 300, '16/04/2018', ''),
(10, 2, 396, '16/04/2018', ''),
(11, 2, 78, '16/04/2018', ''),
(12, 3, 41, '16/04/2018', ''),
(13, 3, 800, '16/04/2018', ''),
(14, 7, 500, '17/04/2018', ''),
(15, 8, 87, '17/04/2018', ''),
(16, 8, 50, '17/04/2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `stockmovimentos`
--

CREATE TABLE `stockmovimentos` (
  `id` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `tipoMovimentação` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `dataExpiracao` varchar(20) NOT NULL,
  `qtdActual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `idPedido` int(11) NOT NULL,
  `str` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`idPedido`, `str`) VALUES
(1, '5ac74c'),
(2, '5ac74c'),
(3, '5ac74c'),
(4, '5ac74c'),
(5, '5ac74d'),
(6, '5acb34'),
(7, '5acb3d'),
(8, '5acb3d'),
(9, '5acb3d'),
(10, '5acb3e'),
(11, '5acb3e'),
(12, '5acb4a'),
(13, '5acb5d'),
(14, '5acb5d'),
(15, '5acb5e'),
(16, '5acb5e'),
(17, '5acddd'),
(18, '5ace0b'),
(19, '5ace21'),
(20, '5ace21'),
(21, '5ace21'),
(22, '5ace23'),
(23, '5ace23'),
(24, '5ace25'),
(25, '5ace25'),
(26, '5ace25'),
(27, '5ace25'),
(28, '5ace26'),
(29, '5ace26'),
(30, '5ace26'),
(31, '5ace26'),
(32, '5ace29'),
(33, '5acf35'),
(34, '5acf38'),
(35, '5acf39'),
(36, '5acf71'),
(37, '5acf73'),
(38, '5acf78'),
(39, '5acf78'),
(40, '5acf79'),
(41, '5acf7a'),
(42, '5acf7a'),
(43, '5acf86'),
(44, '5acfa8'),
(45, '5acfa8'),
(46, '5ad067'),
(47, '5ad069'),
(48, '5ad06a'),
(49, '5ad06f'),
(50, '5ad4b4'),
(51, '5ad4b5'),
(52, '5ad4c3'),
(53, '5ad4c7'),
(54, '5ad4c7'),
(55, '5ad4c7'),
(56, '5ad4c8'),
(57, '5ad4c8'),
(58, '5ad4c8'),
(59, '5ad4c8'),
(60, '5ad4c8'),
(61, '5ad4c9'),
(62, '5ad4c9'),
(63, '5ad4ca'),
(64, '5ad4ca'),
(66, '5ad5c0'),
(67, '5ad5c0'),
(68, '5ad5c0'),
(69, '5ad5c1'),
(70, '5ad5c1'),
(71, '5ad5c1'),
(72, '5ad5c1'),
(73, '5ad5c1'),
(74, '5ad5c1'),
(75, '5ad5c1'),
(76, '5ad5c1'),
(77, '5ad5c2'),
(78, '5ad5c2'),
(79, '5ad5c2'),
(80, '5ad5c2'),
(81, '5ad5c2'),
(82, '5ad5c2'),
(83, '5ad5c2'),
(84, '5ad5c2'),
(85, '5ad5c2'),
(86, '5ad5c7'),
(87, '5ad5c7'),
(88, '5ad5c7'),
(89, '5ad5c7'),
(90, '5ad5c7'),
(91, '5ad5c7'),
(92, '5ad5c8'),
(93, '5ad5c8'),
(94, '5ad5c8'),
(95, '5ad5c8'),
(96, '5ad5c8'),
(97, '5ad5c8'),
(98, '5ad5c8'),
(99, '5ad5c8'),
(100, '5ad5c9'),
(101, '5ad5c9'),
(102, '5ad5c9'),
(103, '5ad5c9'),
(104, '5ad5ca'),
(105, '5ad5ca'),
(106, '5ad5ca'),
(107, '5ad5cb'),
(108, '5ad5cb'),
(109, '5ad5cc'),
(110, '5ad5cc'),
(111, '5ad5cc'),
(112, '5ad5cc'),
(113, '5ad5cc'),
(114, '5ad5cd'),
(115, '5ad5cd'),
(116, '5ad5cd'),
(117, '5ad5cd'),
(118, '5ad5cf'),
(119, '5ad5cf'),
(120, '5ad5cf'),
(121, '5ad5cf'),
(122, '5ad5cf'),
(123, '5ad5cf'),
(124, '5ad5cf'),
(125, '5ad5cf'),
(126, '5ad5d0'),
(127, '5ad5d0'),
(128, '5ad5d0'),
(129, '5ad5d0'),
(130, '5ad5d0'),
(131, '5ad5d1'),
(132, '5ad5d1'),
(133, '5ad5d2'),
(134, '5ad5d2'),
(135, '5ad5d3'),
(136, '5ad5d3'),
(137, '5ad5d3'),
(138, '5ad5d3'),
(139, '5ad5d3'),
(140, '5ad5d4'),
(141, '5ad5d5'),
(142, '5ad5d9'),
(143, '5ad5d9'),
(144, '5ad5da'),
(145, '5ad5da'),
(146, '5ad5da'),
(147, '5ad5de'),
(148, '5ad5de'),
(149, '5ad5de'),
(150, '5ad5e0'),
(151, '5ad5e2'),
(152, '5ad5e2'),
(153, '5ad5e2'),
(154, '5ad5e2'),
(155, '5ad5e3'),
(156, '5ad5e3'),
(157, '5ad5e5'),
(158, '5ad5e5'),
(159, '5ad5e8'),
(160, '5ad5e8'),
(161, '5ad5e8'),
(162, '5ad5e9'),
(163, '5ad5e9'),
(164, '5ad5ea'),
(165, '5ad5eb'),
(166, '5ad5ef'),
(167, '5ad60e'),
(168, '5ad60e'),
(169, '5ad60f');

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `userName` char(100) NOT NULL,
  `tipo` int(2) NOT NULL,
  `senha` char(250) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idMercado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`id`, `userName`, `tipo`, `senha`, `idCliente`, `idMercado`) VALUES
(1, 'iva', 2, 'e8d95a51f3af4a3b134bf6bb680a213a', 0, 0),
(2, 'eaMobiliaria', 2, '81dc9bdb52d04dc20036dbd8313ed055', 0, 5),
(3, 'helsy2', 2, '202cb962ac59075b964b07152d234b70', 0, 6),
(5, 'paul', 0, '202cb962ac59075b964b07152d234b70', 9, 0),
(6, 'liane', 0, '81dc9bdb52d04dc20036dbd8313ed055', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `utilizador1`
--

CREATE TABLE `utilizador1` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idMercado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilizador1`
--

INSERT INTO `utilizador1` (`id`, `userName`, `tipo`, `senha`, `idCliente`, `idMercado`) VALUES
(1, 'Ivanno', 1, '1234', 2, 0),
(2, 'angoMart', 3, '1234', 3, 0),
(3, 'Paulo', 1, '123', 0, 0),
(4, 'ea', 2, '1234', 6, 5),
(5, 'helsy2', 2, '1234', 7, 6),
(6, 'ivan', 0, '123', 0, 0),
(7, 'test', 0, '123', 0, 0),
(8, 'novo', 0, '123', 0, 0),
(9, 'ntest', 0, '123', 0, 0),
(10, 'x', 0, '123', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comissao`
--
ALTER TABLE `comissao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacorrente`
--
ALTER TABLE `contacorrente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itenspedido`
--
ALTER TABLE `itenspedido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menulateral`
--
ALTER TABLE `menulateral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mercado`
--
ALTER TABLE `mercado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsavelep`
--
ALTER TABLE `responsavelep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockmovimentos`
--
ALTER TABLE `stockmovimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizador1`
--
ALTER TABLE `utilizador1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comissao`
--
ALTER TABLE `comissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contacorrente`
--
ALTER TABLE `contacorrente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `itenspedido`
--
ALTER TABLE `itenspedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=508;
--
-- AUTO_INCREMENT for table `menulateral`
--
ALTER TABLE `menulateral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mercado`
--
ALTER TABLE `mercado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `responsavelep`
--
ALTER TABLE `responsavelep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `stockmovimentos`
--
ALTER TABLE `stockmovimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `utilizador1`
--
ALTER TABLE `utilizador1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
