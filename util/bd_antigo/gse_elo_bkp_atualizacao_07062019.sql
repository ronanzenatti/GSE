-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 186.202.152.141
-- Generation Time: 07-Jun-2019 às 19:00
-- Versão do servidor: 5.6.40-84.0-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gse_elo`
--
CREATE DATABASE IF NOT EXISTS `gse_elo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gse_elo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adolescentes`
--

CREATE TABLE IF NOT EXISTS `adolescentes` (
  `idadolescente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `nome_tratamento` varchar(50) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `estado_civil` char(1) DEFAULT NULL,
  `natural` varchar(50) DEFAULT NULL,
  `responsavel` varchar(150) DEFAULT NULL,
  `pai` varchar(150) DEFAULT NULL,
  `pai_nasc` date DEFAULT NULL,
  `pai_natural` varchar(50) DEFAULT NULL,
  `mae` varchar(150) DEFAULT NULL,
  `mae_nasc` date DEFAULT NULL,
  `mae_natural` varchar(50) DEFAULT NULL,
  `obs` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idadolescente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adolescentes`
--

INSERT INTO `adolescentes` (`idadolescente`, `nome`, `dt_nasc`, `nome_tratamento`, `sexo`, `estado_civil`, `natural`, `responsavel`, `pai`, `pai_nasc`, `pai_natural`, `mae`, `mae_nasc`, `mae_natural`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DAIANE PEREIRA TREVIZO', '2002-01-31', NULL, 'F', 'S', 'Ibitinga', 'Genitora: Claudete Pereira', 'Andre Luiz Treviso', NULL, '', 'Claudete Pereira', '1974-08-20', 'Ibitinga', '', '2019-03-15 14:49:28', '2019-03-15 15:02:53', NULL),
(2, 'MARCELO AUGUSTO DA SILVA TORRES', '2001-03-31', NULL, 'M', 'S', 'Ibitinga', 'Genitora: Marcia Cristina da Silva', 'Paulo Roberto Torres', NULL, '', 'Marcia Cristina da Silva', '1978-02-27', 'Ibitinga - SP', '', '2019-03-15 15:23:02', '2019-03-15 15:29:56', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `idcargo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcargo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`idcargo`, `nome`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'Administrador do Sistema', '2019-03-15 11:16:13', '2019-03-15 11:16:13', NULL),
(2, 'Técnico Orientadora de Medida Socioeducativa', '', '2019-03-15 11:21:44', '2019-04-05 16:18:54', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao_familiar`
--

CREATE TABLE IF NOT EXISTS `composicao_familiar` (
  `idcf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `recebe_beneficio` tinyint(1) DEFAULT NULL,
  `beneficios` varchar(191) DEFAULT NULL,
  `obs` text,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `composicao_familiar`
--

INSERT INTO `composicao_familiar` (`idcf`, `recebe_beneficio`, `beneficios`, `obs`, `idendereco`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `idcontato` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) DEFAULT NULL,
  `tipo_cont` char(1) DEFAULT NULL,
  `contato` varchar(191) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `idadolescente` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcontato`),
  KEY `fk_adolescente` (`idadolescente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`idcontato`, `descricao`, `tipo_cont`, `contato`, `ativo`, `idadolescente`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Telefone do pai', 'C', '(16) 9 9718-8280', 1, 1, '2019-03-15 15:01:41', '2019-03-15 15:01:41', NULL),
(2, 'Casa da mãe', 'F', '(16) 3341-4494', 1, 2, '2019-03-15 15:27:59', '2019-03-15 15:27:59', NULL),
(3, 'ADOLESCENTE MARCELO', 'C', '(16) 9 9755-9436', 1, 2, '2019-03-15 15:29:32', '2019-03-15 15:29:32', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `iddocumento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cert_nasc` int(11) DEFAULT NULL,
  `cert_livro` varchar(10) DEFAULT NULL,
  `cert_folhas` varchar(15) DEFAULT NULL,
  `cert_cartorio` varchar(150) DEFAULT NULL,
  `bairro_cartorio` varchar(50) DEFAULT NULL,
  `municipio_cartorio` varchar(50) DEFAULT NULL,
  `RG` varchar(20) DEFAULT NULL,
  `RG_emissao` date DEFAULT NULL,
  `CTPS` int(11) DEFAULT NULL,
  `CTPS_serie` varchar(15) DEFAULT NULL,
  `CPF` varchar(20) DEFAULT NULL,
  `titulo_eleitor` varchar(20) DEFAULT NULL,
  `te_secao` int(11) DEFAULT NULL,
  `te_zona` int(11) DEFAULT NULL,
  `CAM` varchar(20) DEFAULT NULL,
  `CDI_CR` varchar(20) DEFAULT NULL,
  `providenciar` varchar(191) DEFAULT NULL,
  `idadolescente` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`iddocumento`),
  KEY `fk_adolecente_documento` (`idadolescente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`iddocumento`, `cert_nasc`, `cert_livro`, `cert_folhas`, `cert_cartorio`, `bairro_cartorio`, `municipio_cartorio`, `RG`, `RG_emissao`, `CTPS`, `CTPS_serie`, `CPF`, `titulo_eleitor`, `te_secao`, `te_zona`, `CAM`, `CDI_CR`, `providenciar`, `idadolescente`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 17071, 'A043', '0152', '', '', 'Ibitinga - SP', '57.389.315-9', '2013-04-02', 0, '', '', '', 0, 0, '', '', 'CPF - TÍTULO ELEITOR - CTPS', 1, '2019-03-15 14:49:29', '2019-03-15 15:02:53', NULL),
(2, 17460, 'A-44', '143', 'Registro Civil', '', 'Ibitinga - SP', '59.462.083-1', '2015-01-06', 38273, '385/SP', '491.486.508-46', '4459 2288 0159', 292, 410, '', '', '', 2, '2019-03-15 15:23:02', '2019-03-15 15:29:56', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `idendereco` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `logradouro` varchar(150) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `dt_mudanca` date DEFAULT NULL,
  `motivo` text,
  `idadolescente` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idendereco`),
  KEY `fk_adolecente_endereco` (`idadolescente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`idendereco`, `descricao`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `referencia`, `dt_mudanca`, `motivo`, `idadolescente`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Casa da tia', 'Rua: João Estorniollo', '191', '', 'JD. Flamboyant', 'Ibitinga', 'SP', '14.940-000', '', NULL, NULL, 1, '2019-03-15 14:55:01', '2019-03-15 14:55:01', NULL),
(2, 'Endereço do Processo', 'Fazenda São Valentim', '', '', 'Taquaral', 'Ibitinga', 'SP', '14.940-000', '', '2019-03-12', 'Mudou-se para casa da tia', 1, '2019-03-15 14:58:42', '2019-03-15 14:58:42', NULL),
(3, 'Casa da mãe', 'Rua: João Zapatta', '333', '', 'Jd. Maria Luiza 1', 'Ibitinga', 'SP', '14.940-000', '', NULL, NULL, 2, '2019-03-15 15:25:53', '2019-03-15 15:25:53', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidades`
--

CREATE TABLE IF NOT EXISTS `entidades` (
  `identidade` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) NOT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT 'C(CREAS) - M(MP-SP) - S(Saude) - E(Educação) - A(Assistencial) - O(Outros)',
  `logradouro` varchar(191) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `telefones` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `responsavel` varchar(191) NOT NULL,
  `resp_tel` varchar(16) NOT NULL,
  `resp_email` varchar(150) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`identidade`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `entidades`
--

INSERT INTO `entidades` (`identidade`, `nome`, `cnpj`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `email`, `responsavel`, `resp_tel`, `resp_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ETEC de Ibitinga', '62.823.257/0161-02', 'R', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2019-03-15 11:16:13', '2019-03-15 11:16:13', NULL),
(2, 'Centro de Referência Especializado de Assistência Social - Ibitinga', '', 'C', 'Rua Rosalbino Tucci', '620', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16)3341-8592', 'creas@ibitinga.sp.gov.br', 'Valquiria e Eliana', '(16) 3341-8592', 'creas-mse@ibitinga.sp.gov.br', '2019-03-15 11:21:20', '2019-04-02 15:05:30', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `idfuncionario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `registro` varchar(10) DEFAULT NULL,
  `logradouro` varchar(191) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `telefones` varchar(50) DEFAULT NULL,
  `obs` text,
  `identidade` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`),
  KEY `fk_entidade_funcionario` (`identidade`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionario`, `nome`, `dt_nasc`, `sexo`, `cpf`, `rg`, `registro`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `obs`, `identidade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RONAN ADRIEL ZENATTI', '1988-02-25', 'M', '355,936,478-79', '41,324,990-6', '57852', 'Rua dos Lavradores', '302', 'Centro', 'Boracéia', 'SP', '17.270-000', '(14) 9 8157-5657', 'Cadastro Automático', 1, '2019-03-15 11:16:13', '2019-03-15 12:49:46', NULL),
(2, 'ELIANA CAMPITELLI DE SOUZA', '1953-06-14', 'F', NULL, NULL, NULL, 'Rua: Prudente de Morais', '1275', 'Centro', 'Ibitinga', 'SP', '14.940-378', '016 996062340', '', 2, '2019-03-15 11:23:43', '2019-03-15 14:31:36', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_familia`
--

CREATE TABLE IF NOT EXISTS `pessoa_familia` (
  `idpf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idcf` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) NOT NULL,
  `parentesco` tinyint(4) NOT NULL COMMENT '(Própria / Mãe / Pai / Madastra / Padastro / Irmã(o) / Avó(Avo) / Tia(o) / Prima(o) / Outros)',
  `dt_nasc` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `escolaridade` tinyint(4) DEFAULT NULL COMMENT '(Sem idade escolar, Creche, Pré-Escola, Ensino Fundamental, Ensino Médio, Ensino Fundamental EJA, Ensino Médio EJA, Alfabetização para Adultos, Superior/Aperfeiçoamento/Especialização/Doutorado, Nunca Frequentou mas le e escreve, Não sabe ler e escrever)',
  `formacao_profissional` varchar(191) DEFAULT NULL,
  `ocupacao` tinyint(4) DEFAULT NULL COMMENT '(Não Trabalha, Autônomo Formal, Autônomo Informal, Rural, Empregado sem Carteira, Empregado com Carteira, Doméstico, Trabalhador não remunerado, Militar ou Servidor Público)',
  `renda` decimal(12,2) DEFAULT NULL,
  `telefones` varchar(191) DEFAULT NULL,
  `obs` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_habitacional`
--

CREATE TABLE IF NOT EXISTS `situacao_habitacional` (
  `idsh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` tinyint(1) DEFAULT NULL COMMENT 'Tipo de Domicilio',
  `situacao` tinyint(1) DEFAULT NULL COMMENT 'Situação do Domicilio',
  `valor` decimal(12,2) DEFAULT NULL,
  `agua` bit(1) DEFAULT NULL,
  `esgoto` bit(1) DEFAULT NULL,
  `energia` bit(1) DEFAULT NULL,
  `pavimento` bit(1) DEFAULT NULL,
  `coleta_lixo` bit(1) DEFAULT NULL,
  `qtde_comodos` tinyint(1) DEFAULT NULL,
  `espaco` decimal(4,2) UNSIGNED DEFAULT NULL,
  `qtde_pessoas` tinyint(1) DEFAULT NULL,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
  `obs` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idsh`),
  KEY `fk_adolescente_sh` (`idendereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhos`
--

CREATE TABLE IF NOT EXISTS `trabalhos` (
  `idtrabalho` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) DEFAULT NULL,
  `empresa` varchar(250) DEFAULT NULL,
  `dt_inicio` datetime DEFAULT NULL,
  `dt_recisao` datetime DEFAULT NULL,
  `obs` longtext,
  `motivo_recisao` longtext,
  `tipo` char(1) DEFAULT NULL COMMENT '(F)ormal / (I)nformal',
  `idadolescente` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idtrabalho`),
  KEY `fk_adolescente_trabalho` (`idadolescente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `idfuncionario` bigint(10) UNSIGNED NOT NULL,
  `idcargo` bigint(10) UNSIGNED NOT NULL,
  `salt` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` bigint(10) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `last_login` bigint(10) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `termo` tinyint(1) NOT NULL,
  `data_termo` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_funcionario_usuario` (`idfuncionario`),
  KEY `fk_cargo_usuario` (`idcargo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `ip_address`, `idfuncionario`, `idcargo`, `salt`, `email`, `password`, `username`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `last_login`, `active`, `termo`, `data_termo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '186.193.68.104', 1, 1, NULL, 'ronan.zenatti@etec.sp.gov.br', '$2y$08$TBBo.MKl4c/qIhFuBGMrde9uBQz.XPscIZKlPS070L742KorvYbiW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2019-03-15 11:16:13', '2019-03-15 12:49:46', NULL),
(2, '164.163.55.84', 2, 2, NULL, 'elianacampitelli@hotmail.com', '$2y$08$wmcvGCAkWGaATkq21UE0SOc/GKc1JdufjZEZadL4eGJuhNzVTWP.y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2019-03-15 11:23:43', '2019-03-15 14:31:36', NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `fk_adolescente` FOREIGN KEY (`idadolescente`) REFERENCES `adolescentes` (`idadolescente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `fk_adolecente_documento` FOREIGN KEY (`idadolescente`) REFERENCES `adolescentes` (`idadolescente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_adolecente_endereco` FOREIGN KEY (`idadolescente`) REFERENCES `adolescentes` (`idadolescente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `fk_entidade_funcionario` FOREIGN KEY (`identidade`) REFERENCES `entidades` (`identidade`);

--
-- Limitadores para a tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD CONSTRAINT `fk_adolescente_sh` FOREIGN KEY (`idendereco`) REFERENCES `enderecos` (`idendereco`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD CONSTRAINT `fk_adolescente_trabalho` FOREIGN KEY (`idadolescente`) REFERENCES `adolescentes` (`idadolescente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_cargo_usuario` FOREIGN KEY (`idcargo`) REFERENCES `cargos` (`idcargo`),
  ADD CONSTRAINT `fk_funcionario_usuario` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionarios` (`idfuncionario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
