-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2019 às 17:53
-- Versão do servidor: 10.1.25-MariaDB
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
-- Database: `facaaqui`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nif` varchar(50) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `provincia` int(11) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `nif`, `telefone`, `email`, `provincia`, `municipio`, `bairro`) VALUES
(1, 's', '', 999, 'lj@jd.com', 0, 'h', 'h'),
(2, 'semNome', '', 921321212, 'semEmail@hotmail.com', 0, 'Belas', 'Benfica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `data_Log` varchar(30) NOT NULL,
  `hora_Log` varchar(30) NOT NULL,
  `tipoLog` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id`, `idUser`, `tipo`, `data_Log`, `hora_Log`, `tipoLog`) VALUES
(1, 1, 0, '16-12-2018', '19:29:51', ''),
(2, 1, 2, '16-12-2018', '20:53:51', ''),
(3, 1, 0, '16-12-2018', '20:54:00', ''),
(4, 1, 2, '16-12-2018', '20:54:09', ''),
(5, 1, 0, '16-12-2018', '20:55:07', ''),
(6, 1, 2, '16-12-2018', '20:55:11', ''),
(7, 1, 0, '16-12-2018', '20:58:06', ''),
(8, 1, 2, '16-12-2018', '21:02:02', ''),
(9, 1, 0, '16-12-2018', '21:02:12', ''),
(10, 1, 2, '16-12-2018', '22:29:32', ''),
(11, 3, 0, '16-12-2018', '22:32:11', ''),
(12, 3, 0, '16-12-2018', '22:33:07', ''),
(13, 3, 0, '16-12-2018', '22:33:19', ''),
(14, 3, 0, '16-12-2018', '22:34:12', ''),
(15, 3, 2, '16-12-2018', '22:43:11', ''),
(16, 4, 2, '18-12-2018', '10:58:04', ''),
(17, 1, 0, '22-01-2019', '11:57:23', ''),
(18, 1, 0, '31-01-2019', '15:23:22', ''),
(19, 1, 0, '31-01-2019', '15:23:45', ''),
(20, 1, 0, '31-01-2019', '15:24:07', ''),
(21, 1, 0, '31-01-2019', '15:24:16', ''),
(22, 1, 2, '01-02-2019', '14:46:00', ''),
(23, 1, 0, '01-02-2019', '14:46:35', ''),
(24, 1, 2, '01-02-2019', '14:46:43', ''),
(25, 1, 0, '01-02-2019', '14:46:52', ''),
(26, 1, 2, '01-02-2019', '14:46:58', ''),
(27, 1, 0, '01-02-2019', '15:06:06', ''),
(28, 1, 2, '01-02-2019', '15:16:47', ''),
(29, 1, 0, '01-02-2019', '15:16:56', ''),
(30, 1, 2, '01-02-2019', '16:04:09', ''),
(31, 1, 0, '01-02-2019', '16:04:20', ''),
(32, 1, 2, '01-02-2019', '16:17:05', ''),
(33, 1, 0, '01-02-2019', '17:13:35', ''),
(34, 1, 2, '01-02-2019', '17:46:39', ''),
(35, 1, 0, '01-02-2019', '17:47:25', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercado`
--

CREATE TABLE `mercado` (
  `id` int(11) NOT NULL,
  `idSector` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `infoAdd` varchar(255) NOT NULL,
  `fotoUm` varchar(255) NOT NULL,
  `fotoDois` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `statusDeligence` int(11) NOT NULL,
  `fotoTres` varchar(255) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mercado`
--

INSERT INTO `mercado` (`id`, `idSector`, `nome`, `telefone`, `email`, `nif`, `foto`, `infoAdd`, `fotoUm`, `fotoDois`, `municipio`, `bairro`, `provincia`, `statusDeligence`, `fotoTres`, `idUser`) VALUES
(5, 1, 'Restaurante Mar e Sol', '921898330', 'n/a', '122334435445', '181130121157.jpg', 'Passe bons momentos com seus amigos, ou com aquela pessoa especial, no  Restaurante Modelo.\r\nA saborosa  Comida Caseira a partir de R$ 00,00. Virado a Paulista, Biffe a RolÃª, Rabada, Cozido de Costela, Moqueca de Peixe e BaiÃ£o de Dois.  AlÃ©m da  tradic', '180828120802.jpg', '181130121157.jpg', 'Belas', 'Patriota', 'Luanda', 1, '181130121157.jpg', 1),
(6, 1, 'Restaurante ', '921898330', 'n/a', '122334435445', '181130011102.jpg', 'Passe bons momentos com seus amigos, ou com aquela pessoa especial, no  Restaurante Modelo. A saborosa  Comida Caseira a partir de R$ 00,00. Virado a Paulista, Biffe a RolÃª, Rabada, Cozido de Costela, Moqueca de Peixe e BaiÃ£o de Dois.  AlÃ©m da  tradic', '181130011102.jpg', '181130011102.jpg', 'Belas', 'Benfica', 'Luanda', 1, '181130011102.jpg', 1),
(8, 1, 'Restaurante Esmeralda', '921898330', 'n/a', '122334435445', '181205111228.jpg', 'Passe bons momentos com seus amigos, ou com aquela pessoa especial, no  Restaurante Modelo.\r\nA saborosa  Comida Caseira a partir de R$ 00,00. Virado a Paulista, Biffe a RolÃª, Rabada, Cozido de Costela, Moqueca de Peixe e BaiÃ£o de Dois.  AlÃ©m da  tradic', '181205111228.jpg', '181205111228.jpg', 'Luanda', 'Maianga', 'Benguela', 1, '181205111228.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sector`
--

INSERT INTO `sector` (`id`, `descricao`) VALUES
(1, 'Restaurantes'),
(2, 'Hotel'),
(3, 'Resort'),
(4, 'Alfaiataria'),
(5, 'Boutique'),
(6, 'Snack Bar'),
(7, 'Discoteca'),
(8, 'Lounge'),
(9, 'Armazem'),
(10, 'DecoraÃ§Ã£o'),
(11, 'Buffet'),
(12, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `userName` char(100) NOT NULL,
  `tipo` int(2) NOT NULL,
  `senha` char(250) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id`, `userName`, `tipo`, `senha`, `idCliente`) VALUES
(1, 'iva', 3, 'senha', 1),
(3, 'Venan', 1, 'senha', 0),
(4, 'h', 3, 'hh', 1),
(5, 'semUser', 3, 'senha', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `data` varchar(30) NOT NULL,
  `sessao_Id` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mercado`
--
ALTER TABLE `mercado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `mercado`
--
ALTER TABLE `mercado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
