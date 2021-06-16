-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Abr-2021 às 00:42
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crm_agt`
--

CREATE TABLE `crm_agt` (
  `CRM_AGT_IDEMP` varchar(8) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_HORA` time DEFAULT NULL,
  `CRM_AGT_CODCAD` int(11) DEFAULT NULL,
  `CRM_AGT_GRUPOPART` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_RESUMO` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_RESUMO2` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_DETALHETEC` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_DURACAO` time DEFAULT NULL,
  `CRM_AGT_INCPOR` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_STATUS` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_EVENTO` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_OK` bit(1) DEFAULT NULL,
  `CRM_AGT_DTENVIO` datetime DEFAULT NULL,
  `CRM_AGT_CONTATO` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_BLOQ` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_CONTROLE` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_EXCLUIDO` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_DTENVTEC` datetime DEFAULT NULL,
  `CRM_AGT_HORA2` time DEFAULT NULL,
  `CRM_AGT_NUMCTR` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `CRM_AGT_ID` int(11) NOT NULL,
  `CRM_AGT_CODUSU` int(11) DEFAULT NULL,
  `CRM_AGT_DATA` date DEFAULT NULL,
  `CRM_AGT_IDPRJ` int(11) DEFAULT NULL,
  `CRM_AGT_DETALHECLI` varchar(200) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `crm_agt`
--

INSERT INTO `crm_agt` (`CRM_AGT_IDEMP`, `CRM_AGT_HORA`, `CRM_AGT_CODCAD`, `CRM_AGT_GRUPOPART`, `CRM_AGT_RESUMO`, `CRM_AGT_RESUMO2`, `CRM_AGT_DETALHETEC`, `CRM_AGT_DURACAO`, `CRM_AGT_INCPOR`, `CRM_AGT_STATUS`, `CRM_AGT_EVENTO`, `CRM_AGT_OK`, `CRM_AGT_DTENVIO`, `CRM_AGT_CONTATO`, `CRM_AGT_BLOQ`, `CRM_AGT_CONTROLE`, `CRM_AGT_EXCLUIDO`, `CRM_AGT_DTENVTEC`, `CRM_AGT_HORA2`, `CRM_AGT_NUMCTR`, `CRM_AGT_ID`, `CRM_AGT_CODUSU`, `CRM_AGT_DATA`, `CRM_AGT_IDPRJ`, `CRM_AGT_DETALHECLI`) VALUES
('', '11:30:00', 3, '', 'DESENVOLVIMENTO', '', '', '06:30:00', '', 'G', 'C', b'0', NULL, '929999999', '', 'LUIZ FERNANDO PINAGE COUTINHO-2021-03-01 13:31:16', '', NULL, '18:00:00', '32021020846', 38, 2, '2021-03-01', 0, ''),
('', '08:30:00', 2, '', 'DESENVOLVIMENTO', '', '', '09:30:00', '', 'G', 'C', b'0', NULL, '929999999', '', 'PAULINO FILHO-2021-03-01 13:32:39', '', NULL, '18:00:00', '32021020853', 39, 1, '2021-03-02', 0, ''),
('', '00:00:00', 1, NULL, '', '', '', '00:00:00', NULL, '', 'c', NULL, NULL, '', '', '', '', NULL, '00:00:00', '32021020853', 40, 0, '0000-00-00', NULL, NULL),
('', '00:00:00', 2, NULL, '', '', '', '00:00:00', NULL, '', 'c', NULL, NULL, '', '', '', '', NULL, '00:00:00', '32021020854', 41, 0, '0000-00-00', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `crm_agt`
--
ALTER TABLE `crm_agt`
  ADD PRIMARY KEY (`CRM_AGT_ID`),
  ADD KEY `crm_agt_CODCAD` (`CRM_AGT_CODCAD`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crm_agt`
--
ALTER TABLE `crm_agt`
  MODIFY `CRM_AGT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
