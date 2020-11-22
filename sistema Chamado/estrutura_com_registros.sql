-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jul-2020 às 16:51
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_chamado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chamados`
--

CREATE TABLE `tb_chamados` (
  `id_chamado` int(3) NOT NULL,
  `tipo_problema` varchar(75) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pendente',
  `sala` varchar(45) DEFAULT NULL,
  `iditem` varchar(5) DEFAULT NULL,
  `data_envio` varchar(18) DEFAULT NULL,
  `iduser` varchar(50) DEFAULT NULL,
  `idtec` varchar(50) DEFAULT NULL,
  `iduser_adm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_chamados`
--

INSERT INTO `tb_chamados` (`id_chamado`, `tipo_problema`, `descricao`, `status`, `sala`, `iditem`, `data_envio`, `iduser`, `idtec`, `iduser_adm`) VALUES
(3, 'reserva de sala', '', 'atendido', '1 - Bloco A', NULL, '0000-00-00 00:00:0', 'Luis Filipe de Almeida', 'Marcelo de Souza', 'Luis Filipe de Almeida'),
(4, 'reserva de sala', '', 'pendente', '1 - Bloco A', NULL, '0000-00-00 00:00:0', 'Luis Filipe de Almeida', '', 'Luis Filipe de Almeida'),
(6, 'manutencao de dispositivo', 'Projetor em danificado', 'pendente', '1 - Bloco B', NULL, '2020-06-29 00:00:0', 'Luiz Ricardo', 'Diego Santana', 'Luis Filipe de Almeida'),
(7, 'reserva de sala', '', 'pendente', '1 - Bloco A', NULL, '2020-06-29 00:00:0', 'Luiz Ricardo', NULL, 'Luis Filipe de Almeida'),
(8, 'reserva de sala', '', 'pendente', '2 - Bloco A', NULL, '0000-00-00 00:00:0', 'Luis Filipe de Almeida', NULL, 'Luis Filipe de Almeida'),
(12, 'manutencao de dispositivo', 'Mouse nÃ£o quebrou', 'pendente', 'Laboratorio2 - Bloco A', NULL, '30/06/2020 18:55', 'Rafael de Oliveira', NULL, NULL),
(14, 'reserva de sala', '', 'pendente', 'Auditorio1 - Bloco B', NULL, '02/07/2020 14:14', 'Rafael de Oliveira', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_item`
--

CREATE TABLE `tb_item` (
  `id_item` int(11) NOT NULL,
  `tipo_item` varchar(75) NOT NULL,
  `descricao_item` varchar(300) NOT NULL,
  `quem_cadastrou` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_item`
--

INSERT INTO `tb_item` (`id_item`, `tipo_item`, `descricao_item`, `quem_cadastrou`) VALUES
(23, 'Sala', '1 - Bloco A', 'Luis Filipe de Almeida'),
(25, 'Auditorio', '1 - Bloco B', 'Luis Filipe de Almeida'),
(26, 'Ginasio', '1 - Bloco A', 'Luis Filipe de Almeida'),
(27, 'Dispositivo', 'Projetor', 'Luis Filipe de Almeida'),
(28, 'Dispositivo', 'Computador Desktop', 'Luis Filipe de Almeida'),
(29, 'Laboratorio', '2 - Bloco A', 'Luis Filipe de Almeida'),
(30, 'Sala', '2 - Bloco A', 'Luis Filipe de Almeida'),
(31, 'Sala', '3 - Bloco A', 'Luis Filipe de Almeida'),
(32, 'Laboratorio', '1 - Bloco A', 'Luis Filipe de Almeida'),
(33, 'Laboratorio', '1 - Bloco B', 'Luis Filipe de Almeida'),
(34, 'Dispositivo', 'Mouse', 'Luis Filipe de Almeida'),
(35, 'Dispositivo', 'Monitor', 'Luis Filipe de Almeida'),
(36, 'Sala', '3 - Bloco B', 'Luis Filipe de Almeida'),
(37, 'Dispositivo', 'Teclado', 'Luis Filipe de Almeida'),
(38, 'Laboratorio', '2 - Bloco C', 'Luis Filipe de Almeida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tecnico`
--

CREATE TABLE `tb_tecnico` (
  `id_tec` int(11) NOT NULL,
  `nome_tec` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `nivel` varchar(1) NOT NULL,
  `quem_cadastrou` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tecnico`
--

INSERT INTO `tb_tecnico` (`id_tec`, `nome_tec`, `email`, `nivel`, `quem_cadastrou`) VALUES
(2, 'Marcelo de Souza', 'marcelo@gmail.com', '2', 'Luis Filipe de Almeida'),
(3, 'Diego Santana', 'diego@gmail.com', '2', 'Luis Filipe de Almeida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_user` int(11) NOT NULL,
  `nome_user` varchar(75) NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `categoria` int(3) NOT NULL,
  `status` varchar(30) NOT NULL,
  `quem_cadastrou` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_user`, `nome_user`, `login`, `email`, `senha`, `categoria`, `status`, `quem_cadastrou`) VALUES
(12, 'Luis Filipe de Almeida', 'alufi', 'almeida.essen@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 'ativo', 'Luis Filipe de Almeida'),
(13, 'Luiz Ricardo', 'luiz', 'luizinho@gmail.com', '789a2d2ef3ee96067ae09e92f7f72b51a2fb8da7', 1, 'ativo', 'Luis Filipe de Almeida'),
(17, 'Rafael de Oliveira', 'rafinha', 'rafa@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'ativo', 'Luis Filipe de Almeida'),
(18, 'Renato Luiz Gambarato', 'renato', 'renato.gambarato@fatec.sp.gov.br', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 0, 'ativo', 'Luis Filipe de Almeida'),
(19, 'Vivian Toledo Santos Gambarato', 'vivi', 'vivian.gambarato@fatec.sp.gov.br', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1, 'ativo', 'Luis Filipe de Almeida'),
(20, 'Maria Eduarda', 'duda', 'duda@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'inativo', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chamados`
--
ALTER TABLE `tb_chamados`
  ADD PRIMARY KEY (`id_chamado`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `iditem` (`iditem`),
  ADD KEY `idtec` (`idtec`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `tb_tecnico`
--
ALTER TABLE `tb_tecnico`
  ADD PRIMARY KEY (`id_tec`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chamados`
--
ALTER TABLE `tb_chamados`
  MODIFY `id_chamado` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_tecnico`
--
ALTER TABLE `tb_tecnico`
  MODIFY `id_tec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
