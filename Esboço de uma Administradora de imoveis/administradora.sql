-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2017 às 00:28
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administradora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradoras`
--

CREATE TABLE `administradoras` (
  `idAdmin` int(11) NOT NULL,
  `CNPJ` bigint(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `razaoSocial` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administradoras`
--

INSERT INTO `administradoras` (`idAdmin`, `CNPJ`, `endereco`, `complemento`, `numero`, `razaoSocial`, `bairro`) VALUES
(1, 99999999999999, 'Rua Da Felicidade', '', '100', 'ADM', 'Esperanca'),
(4, 11111, 'TESTE', 'TESTE', '50', 'TESTE', 'TESTE'),
(5, 22222, 'TESTE2', 'TESTE2', '51', 'TESTE2', 'TESTE2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `condominios`
--

CREATE TABLE `condominios` (
  `idCondominio` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `idPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `condominios`
--

INSERT INTO `condominios` (`idCondominio`, `bairro`, `endereco`, `complemento`, `numero`, `idAdmin`, `idPessoa`) VALUES
(1, 'Hell''s Kitchen', 'Rua Salazar', 'apto n°5', '100', 1, 1),
(6, 'teste', 'TESTE', 'TESTE', '50', 5, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotes`
--

CREATE TABLE `lotes` (
  `idLote` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tamanho` decimal(10,2) NOT NULL,
  `idPessoa` int(11) NOT NULL,
  `idCondominio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lotes`
--

INSERT INTO `lotes` (`idLote`, `descricao`, `tamanho`, `idPessoa`, `idCondominio`) VALUES
(1, 'Um Belo Lote diga-se de passagem', '50.00', 1, 1),
(7, 'TESTE', '50.00', 4, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `idPessoa` int(11) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `dataNasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`idPessoa`, `cpf`, `endereco`, `complemento`, `numero`, `nome`, `bairro`, `dataNasc`) VALUES
(1, 4216357032, 'Palmitinho', '', '43', 'Otavio', 'Rio Branco', '1997-08-09'),
(4, 111111, 'TESTE', '', '50', 'Teste', 'TESTE', '1975-09-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoastemlotes`
--

CREATE TABLE `pessoastemlotes` (
  `dataAquisicao` date NOT NULL,
  `percentual` decimal(10,2) NOT NULL,
  `idLote` int(11) NOT NULL,
  `idPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradoras`
--
ALTER TABLE `administradoras`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `condominios`
--
ALTER TABLE `condominios`
  ADD PRIMARY KEY (`idCondominio`),
  ADD UNIQUE KEY `idPessoa` (`idPessoa`),
  ADD UNIQUE KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`idLote`),
  ADD UNIQUE KEY `idPessoa` (`idPessoa`),
  ADD UNIQUE KEY `idCondominio` (`idCondominio`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idPessoa`);

--
-- Indexes for table `pessoastemlotes`
--
ALTER TABLE `pessoastemlotes`
  ADD UNIQUE KEY `idPessoa` (`idPessoa`),
  ADD UNIQUE KEY `idLote` (`idLote`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradoras`
--
ALTER TABLE `administradoras`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `condominios`
--
ALTER TABLE `condominios`
  MODIFY `idCondominio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lotes`
--
ALTER TABLE `lotes`
  MODIFY `idLote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `condominios`
--
ALTER TABLE `condominios`
  ADD CONSTRAINT `fkadmin_condominios` FOREIGN KEY (`idAdmin`) REFERENCES `administradoras` (`idAdmin`),
  ADD CONSTRAINT `fkpessoa_condominios` FOREIGN KEY (`idPessoa`) REFERENCES `pessoas` (`idPessoa`);

--
-- Limitadores para a tabela `lotes`
--
ALTER TABLE `lotes`
  ADD CONSTRAINT `fkcondominios_lotes` FOREIGN KEY (`idCondominio`) REFERENCES `condominios` (`idCondominio`),
  ADD CONSTRAINT `fkpessoas_lotes` FOREIGN KEY (`idPessoa`) REFERENCES `pessoas` (`idPessoa`);

--
-- Limitadores para a tabela `pessoastemlotes`
--
ALTER TABLE `pessoastemlotes`
  ADD CONSTRAINT `fklotes_pessoastemlotes` FOREIGN KEY (`idLote`) REFERENCES `lotes` (`idLote`),
  ADD CONSTRAINT `fkpessoas_pessoastemlotes` FOREIGN KEY (`idPessoa`) REFERENCES `pessoas` (`idPessoa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
