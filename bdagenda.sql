-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2022 às 22:13
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdagenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `cidade` varchar(80) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `dtnasc` date DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idcontato`, `nome`, `cep`, `endereco`, `complemento`, `numero`, `bairro`, `cidade`, `estado`, `celular`, `email`, `dtnasc`, `cpf`) VALUES
(1, 'Juan Pablo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8888-8888', 'prof.juanpablo@gmail.com', NULL, NULL),
(2, 'Marcia Maria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9999-9999', 'marcia@gmail.com', NULL, NULL),
(3, 'Pedro Henrique', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7777-7777', 'pedro@gmail.com', NULL, NULL),
(4, 'Israel Matheus', '', '', '', '', '', '', '', '5555-5555', 'prof.juanpablo@gmail.com', '0000-00-00', '12312345678996'),
(5, 'teste', '26525-122', 'tert', 'ap. 101', '432', 'centro', 'NIlopolis', 'rj', '5555-5555', 'teste@gmail.com', '2022-03-13', '12312345678996'),
(6, 'Marcos Gonçalves', '', '', '', '', '', '', '', '4444-44445', 'marcos@gmail.com', '0000-00-00', '12345678978'),
(8, 'Pedro Arantes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1111-1111', 'pedroArantes@gmail.com', NULL, NULL),
(9, 'Manuela', '', '', '', '', '', '', '', '7777-7777', 'manu@gmail.com', '0000-00-00', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
