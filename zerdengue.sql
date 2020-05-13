-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Maio-2020 às 14:39
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `zerdengue`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `denuncia_id` int(11) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `denuncia`
--

INSERT INTO `denuncia` (`denuncia_id`, `endereco`, `descricao`, `imagem`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, 'este mesmo', 'asdfasdfrtwefsfs', 'andes.sql'),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, 'rua ', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, 'rua americana numero 2', '', '20191224_143141.jpg'),
(15, 'rua americana numero 3', '', '20191224_141234.jpg'),
(16, 'menino eu esqueci', '', ''),
(17, 'dfsdfsdfsdf', '', '1'),
(18, 'ffsafasafs', '', 'assets/images/alunos.png'),
(19, '', '', 'assets/images/'),
(20, '', '', 'assets/images/'),
(21, '', '', 'assets/images/'),
(22, '', '', 'assets/images/'),
(23, '', '', 'assets/images/'),
(24, '', '', 'assets/images/'),
(25, '', '', 'assets/images/'),
(26, '', '', 'assets/images/'),
(27, '', '', 'assets/images/'),
(28, '', '', 'assets/images/'),
(29, '', '', 'assets/images/fundo3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `estado_id` int(11) NOT NULL,
  `nome` varchar(32) DEFAULT NULL,
  `sigla` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`estado_id`, `nome`, `sigla`) VALUES
(1, 'Minas Gerais', 'MG'),
(2, 'São Paulo', 'SP'),
(3, 'Rio de Janeiro', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(32) DEFAULT NULL,
  `estado` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `rg`, `cpf`, `endereco`, `telefone`, `cidade`, `bairro`, `estado`) VALUES
(1, 'rafael', 'rafaelribeirodasilva7@gmail.xo', '202cb962ac59075b964b07152d234b70', '0505050505', '11129344', 'este mesmo', '5555555', 'rodeiro', 'centro', 'Minas Gerais'),
(2, 'gisele', 'rafaelribeirodasilva7@gmail.xo', '202cb962ac59075b964b07152d234b70', '0505050505', '12334839', 'este mesmo', '5555555', 'rodeiro', 'centro', 'São Paulo'),
(3, 'rafa', 'rafa@rafa.com', '202cb962ac59075b964b07152d234b70', '11208389', '11129344', 'este mesmo', '5555555', 'rodeiro', 'centro', 'Minas Gerais'),
(4, 'julia', 'julia$@julia.com', '202cb962ac59075b964b07152d234b70', '0505050505', '11129344', 'este mesmo', '5555555', 'rodeiro', 'centro', 'Rio de Janeiro'),
(5, 'rafael2', 'rafaelribeirodasilva7@gmail.xo', '202cb962ac59075b964b07152d234b70', '11208389', '11129344', 'este mesmo', '5555555', 'rodeiro', 'centro', 'Minas Gerais'),
(6, 'joao', 'joao@joao.com', '202cb962ac59075b964b07152d234b70', '4343434343', '34434343', 'qualquer', '4444444444', 'qualquer', 'centro', 'Minas Gerais'),
(7, 'sara', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', 'Minas Gerais'),
(8, 'sara', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', 'Minas Gerais');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`denuncia_id`);

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `denuncia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `estado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
