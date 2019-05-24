-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/05/2019 às 14:04
-- Versão do servidor: 10.1.37-MariaDB-0+deb9u1
-- Versão do PHP: 7.0.33-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gse_elo`
--
CREATE DATABASE IF NOT EXISTS `gse_elo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gse_elo`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `adolescentes`
--

DROP TABLE IF EXISTS `adolescentes`;
CREATE TABLE `adolescentes` (
  `idadolescente` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `audit`
--

DROP TABLE IF EXISTS `audit`;
CREATE TABLE `audit` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model` varchar(50) NOT NULL,
  `tipo` char(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `antes` text,
  `depois` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `audit`
--

INSERT INTO `audit` (`id`, `model_id`, `model`, `tipo`, `user_id`, `antes`, `depois`, `ip`, `created_at`, `deleted_at`) VALUES
(1, 1, 'entidades', 'C', 1, NULL, '{\"nome\":\"ETEC de Ibitinga\",\"cnpj\":\"62.823.257\\/0161-02\",\"tipo\":\"R\",\"logradouro\":\"Rua Rosalbino Tucci\",\"numero\":\"431\",\"bairro\":\"Centro\",\"cidade\":\"Ibitinga\",\"estado\":\"SP\",\"cep\":\"14.940-000\",\"telefones\":\"(16) 3341-7046 \\/ 3342-6039\",\"email\":\"e161dir@cps.sp.gov.br\",\"responsavel\":\"Patricia\",\"resp_tel\":\"(16) 3341-7046\",\"resp_email\":\"e161dir@cps.sp.gov.br\",\"created_at\":\"2019-04-26 10:14:44\",\"updated_at\":\"2019-04-26 10:14:44\"}', '127.0.0.1', '2019-04-26 10:14:44', NULL),
(2, 1, 'cargos', 'C', 1, NULL, '{\"nome\":\"Administrador\",\"descricao\":\"Administrador do Sistema\",\"created_at\":\"2019-04-26 10:14:44\",\"updated_at\":\"2019-04-26 10:14:44\"}', '127.0.0.1', '2019-04-26 10:14:44', NULL),
(3, 1, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"Ronan Adriel Zenatti\",\"dt_nasc\":\"1988-02-25\",\"sexo\":\"M\",\"cpf\":\"355,936,478-79\",\"rg\":\"41,324,990-6\",\"registro\":\"57852\",\"logradouro\":\"Rua dos Lavradores\",\"numero\":\"302\",\"bairro\":\"Centro\",\"cidade\":\"Boracéia\",\"estado\":\"SP\",\"cep\":\"17.270-000\",\"telefones\":\"(14) 9 8157-5657\",\"obs\":\"Cadastro Automático.\",\"identidade\":1,\"created_at\":\"2019-04-26 10:14:44\",\"updated_at\":\"2019-04-26 10:14:44\"}', '127.0.0.1', '2019-04-26 10:14:44', NULL),
(4, 1, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"idcargo\":1,\"email\":\"ronan.zenatti@etec.sp.gov.br\",\"password\":\"$2y$08$p1FGYEsw.yGObQuP.PVCNu\\/8kSpc1i8V7FoL\\/o9Fa2765972L5eB.\",\"active\":1,\"termo\":1,\"idfuncionario\":1,\"created_at\":\"2019-04-26 10:14:44\",\"updated_at\":\"2019-04-26 10:14:44\"}', '127.0.0.1', '2019-04-26 10:14:44', NULL),
(5, 2, 'entidades', 'C', 1, NULL, '{\"nome\":\"MINISTÉRIO PUBLICO\",\"tipo\":\"M\",\"cnpj\":\"11.111.111\\/1111-11\",\"logradouro\":\"111111111111\",\"numero\":\"111111111111\",\"bairro\":\"1111111111111\",\"cidade\":\"11111111111111\",\"estado\":\"SP\",\"cep\":\"11.111-111\",\"telefones\":\"1111111111111\",\"email\":\"1111111111111\",\"responsavel\":\"111111111111\",\"resp_tel\":\"1111111111111\",\"resp_email\":\"11@11\",\"created_at\":\"2019-04-26 12:35:52\",\"updated_at\":\"2019-04-26 12:35:52\"}', '127.0.0.1', '2019-04-26 12:35:52', NULL),
(6, 2, 'entidades', 'U', 1, '{\"nome\":\"MINISTÉRIO PUBLICO\",\"tipo\":\"M\",\"cnpj\":\"11.111.111\\/1111-11\",\"logradouro\":\"111111111111\",\"numero\":\"1111111111\",\"bairro\":\"1111111111111\",\"cidade\":\"11111111111111\",\"estado\":\"SP\",\"cep\":\"11.111-111\",\"telefones\":\"1111111111111\",\"email\":\"1111111111111\",\"responsavel\":\"111111111111\",\"resp_tel\":\"1111111111111\",\"resp_email\":\"11@11\",\"updated_at\":\"2019-04-26 12:35:52\"}', '{\"nome\":\"SAUDE\",\"tipo\":\"S\",\"cnpj\":\"22.222.222\\/2222-22\",\"logradouro\":\"222222222222\",\"numero\":\"2222222\",\"bairro\":\"2222222222\",\"cidade\":\"222222222\",\"estado\":\"AC\",\"cep\":\"22.222-222\",\"telefones\":\"222222222\",\"email\":\"22@2\",\"responsavel\":\"22222222\",\"resp_tel\":\"22222222222\",\"resp_email\":\"22222222@w\",\"updated_at\":\"2019-04-26 12:39:19\"}', '127.0.0.1', '2019-04-26 12:39:19', NULL),
(7, 2, 'entidades', 'D', 1, '{\"identidade\":\"2\",\"nome\":\"SAUDE\",\"cnpj\":\"22.222.222\\/2222-22\",\"tipo\":\"S\",\"logradouro\":\"222222222222\",\"numero\":\"2222222\",\"bairro\":\"2222222222\",\"cidade\":\"222222222\",\"estado\":\"AC\",\"cep\":\"22.222-222\",\"telefones\":\"222222222\",\"email\":\"22@2\",\"responsavel\":\"22222222\",\"resp_tel\":\"22222222222\",\"resp_email\":\"22222222@w\",\"created_at\":\"2019-04-26 12:35:52\",\"updated_at\":\"2019-04-26 12:39:19\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-04-26 12:39:34\"}', '127.0.0.1', '2019-04-26 12:39:34', NULL),
(8, 3, 'entidades', 'C', 1, NULL, '{\"nome\":\"CENTRO DE REFERENCIA ESPECIALIZADA ASSISTENCIA SOCIAL\",\"tipo\":\"C\",\"cnpj\":\"00.000.000\\/0000-00\",\"logradouro\":\"\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"Ibitinga\",\"estado\":\"SP\",\"cep\":\"55.615-615\",\"telefones\":\"\",\"email\":\"\",\"responsavel\":\"Ana Paula\",\"resp_tel\":\"15151\",\"resp_email\":\"creas@creas.com\",\"created_at\":\"2019-04-26 12:50:37\",\"updated_at\":\"2019-04-26 12:50:37\"}', '127.0.0.1', '2019-04-26 12:50:37', NULL),
(9, 2, 'cargos', 'C', 1, NULL, '{\"nome\":\"111111111111\",\"descricao\":\"dasdasda\",\"created_at\":\"2019-04-26 12:53:42\",\"updated_at\":\"2019-04-26 12:53:42\"}', '127.0.0.1', '2019-04-26 12:53:42', NULL),
(10, 2, 'cargos', 'U', 1, '{\"nome\":\"111111111111\",\"descricao\":\"dasdasda\",\"updated_at\":\"2019-04-26 12:53:42\"}', '{\"nome\":\"2222222\",\"descricao\":\"22222222222\",\"updated_at\":\"2019-04-26 12:53:49\"}', '127.0.0.1', '2019-04-26 12:53:49', NULL),
(11, 2, 'cargos', 'D', 1, '{\"idcargo\":\"2\",\"nome\":\"2222222\",\"descricao\":\"22222222222\",\"created_at\":\"2019-04-26 12:53:42\",\"updated_at\":\"2019-04-26 12:53:49\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-04-26 12:53:53\"}', '127.0.0.1', '2019-04-26 12:53:53', NULL),
(12, 3, 'cargos', 'C', 1, NULL, '{\"nome\":\"TÉCNICO ORIENTADOR EDUCACIONAL\",\"descricao\":\"\",\"created_at\":\"2019-04-26 12:56:36\",\"updated_at\":\"2019-04-26 12:56:36\"}', '127.0.0.1', '2019-04-26 12:56:36', NULL),
(13, 3, 'cargos', 'U', 1, '{\"descricao\":\"\",\"updated_at\":\"2019-04-26 12:56:36\"}', '{\"descricao\":\"Pessoa responsável pelo cadastro \",\"updated_at\":\"2019-04-26 12:57:41\"}', '127.0.0.1', '2019-04-26 12:57:41', NULL),
(14, 2, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"1111111\",\"dt_nasc\":\"6515-01-15\",\"sexo\":\"F\",\"logradouro\":\"111111111111\",\"numero\":\"1111111111\",\"bairro\":\"11111111111\",\"cidade\":\"1111111\",\"estado\":\"SP\",\"cep\":\"11.111-111\",\"telefones\":\"11111111111\",\"obs\":\"1111111111111\",\"identidade\":\"3\",\"created_at\":\"2019-04-26 13:01:29\",\"updated_at\":\"2019-04-26 13:01:29\"}', '127.0.0.1', '2019-04-26 13:01:29', NULL),
(15, 2, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"idcargo\":\"1\",\"email\":\"ariane@ariane.com\",\"password\":\"$2y$08$5LURYLSEGrKl5AqvaWG3V.sjUIKWo1G2qZ3TberBb0YGWToHVB7dW\",\"active\":1,\"termo\":0,\"created_at\":\"2019-04-26 13:01:29\",\"updated_at\":\"2019-04-26 13:01:29\",\"idfuncionario\":2}', '127.0.0.1', '2019-04-26 13:01:29', NULL),
(16, 2, 'usuarios', 'U', 1, '{\"idcargo\":\"1\",\"email\":\"ariane@ariane.com\",\"password\":\"$2y$08$5LURYLSEGrKl5AqvaWG3V.sjUIKWo1G2qZ3TberBb0YGWToHVB7dW\",\"updated_at\":\"2019-04-26 13:01:29\"}', '{\"idcargo\":\"3\",\"email\":\"ariane@ariane.co\",\"password\":\"$2y$08$kDRKDdFEVQlpYV5usghyoOI4MepZnZ9Q.4vukDn.sOb3.ieq1BnS.\",\"updated_at\":\"2019-04-26 13:02:17\"}', '127.0.0.1', '2019-04-26 13:02:17', NULL),
(17, 2, 'funcionarios', 'U', 1, '{\"nome\":\"1111111\",\"dt_nasc\":\"6515-01-15\",\"sexo\":\"F\",\"logradouro\":\"111111111111\",\"numero\":\"1111111111\",\"bairro\":\"11111111111\",\"cidade\":\"1111111\",\"estado\":\"SP\",\"cep\":\"11.111-111\",\"telefones\":\"11111111111\",\"obs\":\"1111111111111\",\"identidade\":\"3\",\"updated_at\":\"2019-04-26 13:01:29\"}', '{\"nome\":\"2222222222\",\"dt_nasc\":\"1111-11-11\",\"sexo\":\"M\",\"logradouro\":\"2222222222\",\"numero\":\"2222222222\",\"bairro\":\"2222222222\",\"cidade\":\"222222222222\",\"estado\":\"AM\",\"cep\":\"22.222-222\",\"telefones\":\"2222222222\",\"obs\":\"2222222222\",\"identidade\":\"1\",\"updated_at\":\"2019-04-26 13:03:45\"}', '127.0.0.1', '2019-04-26 13:03:45', NULL),
(18, 2, 'usuarios', 'U', 1, '{\"email\":\"ariane@ariane.co\",\"password\":\"$2y$08$kDRKDdFEVQlpYV5usghyoOI4MepZnZ9Q.4vukDn.sOb3.ieq1BnS.\",\"updated_at\":\"2019-04-26 13:02:17\"}', '{\"email\":\"ariane@ariane.co4\",\"password\":\"$2y$08$6Uhmk7G6rEjv8UGAoIXbnON3xhl5eZFWLyGkuVradtlcBBJzsPW4a\",\"updated_at\":\"2019-04-26 13:03:45\"}', '127.0.0.1', '2019-04-26 13:03:45', NULL),
(19, 2, 'funcionarios', 'D', 1, '{\"idfuncionario\":\"2\",\"nome\":\"2222222222\",\"dt_nasc\":\"1111-11-11\",\"sexo\":\"M\",\"cpf\":null,\"rg\":null,\"registro\":null,\"logradouro\":\"2222222222\",\"numero\":\"2222222222\",\"bairro\":\"2222222222\",\"cidade\":\"222222222222\",\"estado\":\"AM\",\"cep\":\"22.222-222\",\"telefones\":\"2222222222\",\"obs\":\"2222222222\",\"identidade\":\"1\",\"created_at\":\"2019-04-26 13:01:29\",\"updated_at\":\"2019-04-26 13:03:45\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-04-26 13:03:54\"}', '127.0.0.1', '2019-04-26 13:03:54', NULL),
(20, 3, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"WEASFASF\",\"dt_nasc\":null,\"sexo\":\"F\",\"logradouro\":\"\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"\",\"estado\":\"SP\",\"cep\":\"\",\"telefones\":\"\",\"obs\":\"\",\"identidade\":\"1\",\"created_at\":\"2019-04-26 13:14:45\",\"updated_at\":\"2019-04-26 13:14:45\"}', '127.0.0.1', '2019-04-26 13:14:45', NULL),
(21, 3, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"idcargo\":\"1\",\"email\":\"ariane@ariane.com\",\"password\":\"$2y$08$rbFsC2SpaWoGLNHNR\\/gubOJUWXI\\/lhPCO4uD6Q9TKqEzr\\/HIs.wTS\",\"active\":1,\"termo\":0,\"created_at\":\"2019-04-26 13:14:45\",\"updated_at\":\"2019-04-26 13:14:45\",\"idfuncionario\":3}', '127.0.0.1', '2019-04-26 13:14:45', NULL),
(22, 3, 'funcionarios', 'U', 1, '{\"nome\":\"WEASFASF\",\"updated_at\":\"2019-04-26 13:14:45\"}', '{\"nome\":\"WEASFASF3\",\"updated_at\":\"2019-04-26 13:15:02\"}', '127.0.0.1', '2019-04-26 13:15:02', NULL),
(23, 3, 'usuarios', 'U', 1, '{\"updated_at\":\"2019-04-26 13:14:45\"}', '{\"updated_at\":\"2019-04-26 13:15:02\"}', '127.0.0.1', '2019-04-26 13:15:02', NULL),
(24, 3, 'funcionarios', 'U', 1, '{\"updated_at\":\"2019-04-26 13:15:02\"}', '{\"updated_at\":\"2019-04-26 13:16:01\"}', '127.0.0.1', '2019-04-26 13:16:01', NULL),
(25, 3, 'usuarios', 'U', 1, '{\"password\":\"$2y$08$rbFsC2SpaWoGLNHNR\\/gubOJUWXI\\/lhPCO4uD6Q9TKqEzr\\/HIs.wTS\",\"updated_at\":\"2019-04-26 13:15:02\"}', '{\"password\":\"$2y$08$5qL8hkrGKaTj5fDnim3Mt.Rz8aPSZE7U4jt6MS9SYviESAZKpNxLu\",\"updated_at\":\"2019-04-26 13:16:01\"}', '127.0.0.1', '2019-04-26 13:16:01', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargos`
--

DROP TABLE IF EXISTS `cargos`;
CREATE TABLE `cargos` (
  `idcargo` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cargos`
--

INSERT INTO `cargos` (`idcargo`, `nome`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'Administrador do Sistema', '2019-04-26 10:14:44', '2019-04-26 10:14:44', NULL),
(2, '2222222', '22222222222', '2019-04-26 12:53:42', '2019-04-26 12:53:49', '2019-04-26 12:53:53'),
(3, 'TÉCNICO ORIENTADOR EDUCACIONAL', 'Pessoa responsável pelo cadastro ', '2019-04-26 12:56:36', '2019-04-26 12:57:41', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `composicao_familiar`
--

DROP TABLE IF EXISTS `composicao_familiar`;
CREATE TABLE `composicao_familiar` (
  `idcf` bigint(20) UNSIGNED NOT NULL,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `composicao_familiar1`
--

DROP TABLE IF EXISTS `composicao_familiar1`;
CREATE TABLE `composicao_familiar1` (
  `idcf` bigint(20) UNSIGNED NOT NULL,
  `recebe_beneficio` tinyint(1) DEFAULT NULL,
  `beneficios` varchar(191) DEFAULT NULL,
  `obs` text,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE `contatos` (
  `idcontato` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `tipo_cont` char(1) DEFAULT NULL,
  `contato` varchar(191) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `idadolescente` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `documentos`
--

DROP TABLE IF EXISTS `documentos`;
CREATE TABLE `documentos` (
  `iddocumento` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE `enderecos` (
  `idendereco` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `entidades`
--

DROP TABLE IF EXISTS `entidades`;
CREATE TABLE `entidades` (
  `identidade` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `entidades`
--

INSERT INTO `entidades` (`identidade`, `nome`, `cnpj`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `email`, `responsavel`, `resp_tel`, `resp_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ETEC de Ibitinga', '62.823.257/0161-02', 'R', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2019-04-26 10:14:44', '2019-04-26 10:14:44', NULL),
(2, 'SAUDE', '22.222.222/2222-22', 'S', '222222222222', '2222222', '2222222222', '222222222', 'AC', '22.222-222', '222222222', '22@2', '22222222', '22222222222', '22222222@w', '2019-04-26 12:35:52', '2019-04-26 12:39:19', '2019-04-26 12:39:34'),
(3, 'CENTRO DE REFERENCIA ESPECIALIZADA ASSISTENCIA SOCIAL', '00.000.000/0000-00', 'C', '', '', '', 'Ibitinga', 'SP', '55.615-615', '', '', 'Ana Paula', '15151', 'creas@creas.com', '2019-04-26 12:50:37', '2019-04-26 12:50:37', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE `funcionarios` (
  `idfuncionario` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionario`, `nome`, `dt_nasc`, `sexo`, `cpf`, `rg`, `registro`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `obs`, `identidade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ronan Adriel Zenatti', '1988-02-25', 'M', '355,936,478-79', '41,324,990-6', '57852', 'Rua dos Lavradores', '302', 'Centro', 'Boracéia', 'SP', '17.270-000', '(14) 9 8157-5657', 'Cadastro Automático.', 1, '2019-04-26 10:14:44', '2019-04-26 10:14:44', NULL),
(2, '2222222222', '1111-11-11', 'M', NULL, NULL, NULL, '2222222222', '2222222222', '2222222222', '222222222222', 'AM', '22.222-222', '2222222222', '2222222222', 1, '2019-04-26 13:01:29', '2019-04-26 13:03:45', '2019-04-26 13:03:54'),
(3, 'WEASFASF3', NULL, 'F', NULL, NULL, NULL, '', '', '', '', 'SP', '', '', '', 1, '2019-04-26 13:14:45', '2019-04-26 13:16:01', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pia`
--

DROP TABLE IF EXISTS `pia`;
CREATE TABLE `pia` (
  `idpia` int(10) UNSIGNED NOT NULL,
  `idadolescente` int(10) UNSIGNED NOT NULL,
  `data_recepcao` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `situacao_habitacional`
--

DROP TABLE IF EXISTS `situacao_habitacional`;
CREATE TABLE `situacao_habitacional` (
  `idsh` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `trabalhos`
--

DROP TABLE IF EXISTS `trabalhos`;
CREATE TABLE `trabalhos` (
  `idtrabalho` bigint(20) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuario` bigint(10) UNSIGNED NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `ip_address`, `idfuncionario`, `idcargo`, `salt`, `email`, `password`, `username`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `last_login`, `active`, `termo`, `data_termo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '127.0.0.1', 1, 1, NULL, 'ronan.zenatti@etec.sp.gov.br', '$2y$08$p1FGYEsw.yGObQuP.PVCNu/8kSpc1i8V7FoL/o9Fa2765972L5eB.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-04-26 10:14:44', '2019-04-26 10:14:44', NULL),
(2, '127.0.0.1', 2, 3, NULL, 'ariane@ariane.co4', '$2y$08$6Uhmk7G6rEjv8UGAoIXbnON3xhl5eZFWLyGkuVradtlcBBJzsPW4a', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2019-04-26 13:01:29', '2019-04-26 13:03:45', NULL),
(3, '127.0.0.1', 3, 1, NULL, 'ariane@ariane.com', '$2y$08$5qL8hkrGKaTj5fDnim3Mt.Rz8aPSZE7U4jt6MS9SYviESAZKpNxLu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2019-04-26 13:14:45', '2019-04-26 13:16:01', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `adolescentes`
--
ALTER TABLE `adolescentes`
  ADD PRIMARY KEY (`idadolescente`);

--
-- Índices de tabela `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`idcargo`);

--
-- Índices de tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  ADD PRIMARY KEY (`idcf`);

--
-- Índices de tabela `composicao_familiar1`
--
ALTER TABLE `composicao_familiar1`
  ADD PRIMARY KEY (`idcf`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`idcontato`),
  ADD KEY `fk_adolescente` (`idadolescente`);

--
-- Índices de tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`iddocumento`),
  ADD KEY `fk_adolecente_documento` (`idadolescente`);

--
-- Índices de tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idendereco`),
  ADD KEY `fk_adolecente_endereco` (`idadolescente`);

--
-- Índices de tabela `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`identidade`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD KEY `fk_entidade_funcionario` (`identidade`);

--
-- Índices de tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pia`
--
ALTER TABLE `pia`
  ADD PRIMARY KEY (`idpia`);

--
-- Índices de tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD PRIMARY KEY (`idsh`),
  ADD KEY `fk_adolescente_sh` (`idendereco`);

--
-- Índices de tabela `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD PRIMARY KEY (`idtrabalho`),
  ADD KEY `fk_adolescente_trabalho` (`idadolescente`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_funcionario_usuario` (`idfuncionario`),
  ADD KEY `fk_cargo_usuario` (`idcargo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `adolescentes`
--
ALTER TABLE `adolescentes`
  MODIFY `idadolescente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `idcargo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  MODIFY `idcf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `composicao_familiar1`
--
ALTER TABLE `composicao_familiar1`
  MODIFY `idcf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `idcontato` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `iddocumento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idendereco` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `entidades`
--
ALTER TABLE `entidades`
  MODIFY `identidade` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idfuncionario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `pia`
--
ALTER TABLE `pia`
  MODIFY `idpia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  MODIFY `idsh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `trabalhos`
--
ALTER TABLE `trabalhos`
  MODIFY `idtrabalho` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `fk_adolescente` FOREIGN KEY (`idadolescente`) REFERENCES `adolescentes` (`idadolescente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `fk_adolecente_documento` FOREIGN KEY (`idadolescente`) REFERENCES `adolescentes` (`idadolescente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_adolecente_endereco` FOREIGN KEY (`idadolescente`) REFERENCES `adolescentes` (`idadolescente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `fk_entidade_funcionario` FOREIGN KEY (`identidade`) REFERENCES `entidades` (`identidade`);

--
-- Restrições para tabelas `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD CONSTRAINT `fk_adolescente_sh` FOREIGN KEY (`idendereco`) REFERENCES `enderecos` (`idendereco`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD CONSTRAINT `fk_adolescente_trabalho` FOREIGN KEY (`idadolescente`) REFERENCES `adolescentes` (`idadolescente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_cargo_usuario` FOREIGN KEY (`idcargo`) REFERENCES `cargos` (`idcargo`),
  ADD CONSTRAINT `fk_funcionario_usuario` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionarios` (`idfuncionario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
