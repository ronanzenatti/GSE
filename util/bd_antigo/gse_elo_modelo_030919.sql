-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/09/2019 às 16:36
-- Versão do servidor: 5.7.27-0ubuntu0.19.04.1
-- Versão do PHP: 7.2.19-0ubuntu0.19.04.2

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `adolescentes`
--

INSERT INTO `adolescentes` (`idadolescente`, `nome`, `dt_nasc`, `nome_tratamento`, `sexo`, `estado_civil`, `natural`, `responsavel`, `pai`, `pai_nasc`, `pai_natural`, `mae`, `mae_nasc`, `mae_natural`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '222222222222', '2222-10-22', NULL, 'M', 'J', '22222222', '222222', '2222222', '2222-10-22', '22222', '222222222', '2222-10-22', '2222222222', '222221111', '2019-05-26 22:34:01', '2019-05-26 22:41:18', '2019-05-27 11:19:07'),
(2, 'ASDASD', NULL, NULL, 'O', 'S', '', 'asdasd', '', NULL, '', '', NULL, '', '', '2019-05-27 11:49:32', '2019-05-27 11:49:32', NULL),
(3, 'MONICA MEDEIROS DO NASCIMENTO', '1997-12-24', NULL, 'M', 'S', 'BARRA BONITA', 'RONAN ADRIEL ZENATTI', 'JOEL RAIMUNDO DO NASCIMENTO', '1965-03-10', 'BARRA BONITA', 'ROSEMEIRE DA SILVA MEDEIROS DO NASCIMENTO', '1977-12-10', 'MACATUBA', '', '2019-05-27 12:00:38', '2019-05-27 12:05:06', NULL),
(4, 'MONIQUE', NULL, NULL, 'F', 'S', '', 'adasdasdasdasd', '', NULL, '', '', NULL, '', '', '2019-06-19 20:37:52', '2019-06-19 20:37:52', NULL),
(5, 'SDFSDF', NULL, NULL, 'M', 'S', '', 'sdafasdf', '', NULL, '', '', NULL, '', '', '2019-09-03 15:48:45', '2019-09-03 15:54:35', '2019-09-03 16:18:24');

-- --------------------------------------------------------

--
-- Estrutura para tabela `audit`
--

CREATE TABLE IF NOT EXISTS `audit` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model` varchar(50) NOT NULL,
  `tipo` char(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `antes` text,
  `depois` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `audit`
--

INSERT INTO `audit` (`id`, `model_id`, `model`, `tipo`, `user_id`, `antes`, `depois`, `ip`, `created_at`, `deleted_at`) VALUES
(1, 1, 'entidades', 'C', 1, NULL, '{\"nome\":\"ETEC de Ibitinga\",\"cnpj\":\"62.823.257\\/0161-02\",\"tipo\":\"R\",\"logradouro\":\"Rua Rosalbino Tucci\",\"numero\":\"431\",\"bairro\":\"Centro\",\"cidade\":\"Ibitinga\",\"estado\":\"SP\",\"cep\":\"14.940-000\",\"telefones\":\"(16) 3341-7046 \\/ 3342-6039\",\"email\":\"e161dir@cps.sp.gov.br\",\"responsavel\":\"Patricia\",\"resp_tel\":\"(16) 3341-7046\",\"resp_email\":\"e161dir@cps.sp.gov.br\",\"created_at\":\"2019-05-26 21:44:26\",\"updated_at\":\"2019-05-26 21:44:26\"}', '127.0.0.1', '2019-05-26 21:44:26', NULL),
(2, 1, 'cargos', 'C', 1, NULL, '{\"nome\":\"Administrador\",\"descricao\":\"Administrador do Sistema\",\"created_at\":\"2019-05-26 21:44:26\",\"updated_at\":\"2019-05-26 21:44:26\"}', '127.0.0.1', '2019-05-26 21:44:26', NULL),
(3, 1, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"Ronan Adriel Zenatti\",\"dt_nasc\":\"1988-02-25\",\"sexo\":\"M\",\"cpf\":\"355,936,478-79\",\"rg\":\"41,324,990-6\",\"registro\":\"57852\",\"logradouro\":\"Rua dos Lavradores\",\"numero\":\"302\",\"bairro\":\"Centro\",\"cidade\":\"Boracéia\",\"estado\":\"SP\",\"cep\":\"17.270-000\",\"telefones\":\"(14) 9 8157-5657\",\"obs\":\"Cadastro Automático.\",\"identidade\":1,\"created_at\":\"2019-05-26 21:44:26\",\"updated_at\":\"2019-05-26 21:44:26\"}', '127.0.0.1', '2019-05-26 21:44:26', NULL),
(4, 1, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"idcargo\":1,\"email\":\"ronan.zenatti@etec.sp.gov.br\",\"password\":\"$2y$08$9IBqHxaEu9CTN5hrRXFytenbAkw9YcS2q877eLvr.dQCpqJLRKlUS\",\"active\":1,\"termo\":1,\"idfuncionario\":1,\"created_at\":\"2019-05-26 21:44:26\",\"updated_at\":\"2019-05-26 21:44:26\"}', '127.0.0.1', '2019-05-26 21:44:26', NULL),
(5, 2, 'entidades', 'C', 1, NULL, '{\"nome\":\"1111111111111111111111111\",\"tipo\":\"M\",\"cnpj\":\"11.111.111\\/1111-11\",\"logradouro\":\"1111111111111111\",\"numero\":\"111111111\",\"bairro\":\"11111111111\",\"cidade\":\"1111111111111111111\",\"estado\":\"AL\",\"cep\":\"11.111-111\",\"telefones\":\"111111111111111\",\"email\":\"111111@1.co\",\"responsavel\":\"11111111111111\",\"resp_tel\":\"11111111111\",\"resp_email\":\"1111111111@1111111\",\"created_at\":\"2019-05-26 21:52:12\",\"updated_at\":\"2019-05-26 21:52:12\"}', '127.0.0.1', '2019-05-26 21:52:12', NULL),
(6, 2, 'entidades', 'U', 1, '{\"nome\":\"1111111111111111111111111\",\"tipo\":\"M\",\"cnpj\":\"11.111.111\\/1111-11\",\"logradouro\":\"1111111111111111\",\"numero\":\"111111111\",\"cidade\":\"1111111111111111111\",\"estado\":\"AL\",\"cep\":\"11.111-111\",\"telefones\":\"111111111111111\",\"email\":\"111111@1.co\",\"responsavel\":\"11111111111111\",\"resp_tel\":\"11111111111\",\"resp_email\":\"1111111111@1111111\",\"updated_at\":\"2019-05-26 21:52:12\"}', '{\"nome\":\"22222222222222222\",\"tipo\":\"S\",\"cnpj\":\"22.222.222\\/2222-22\",\"logradouro\":\"22222222222222222\",\"numero\":\"222222222222222222\",\"cidade\":\"222222222\",\"estado\":\"AP\",\"cep\":\"22.222-222\",\"telefones\":\"2222222\",\"email\":\"222222@22222222222\",\"responsavel\":\"2222222\",\"resp_tel\":\"222222222222\",\"resp_email\":\"22222222@2222\",\"updated_at\":\"2019-05-26 21:55:16\"}', '127.0.0.1', '2019-05-26 21:55:16', NULL),
(7, 2, 'entidades', 'D', 1, '{\"identidade\":\"2\",\"nome\":\"22222222222222222\",\"cnpj\":\"22.222.222\\/2222-22\",\"tipo\":\"S\",\"logradouro\":\"22222222222222222\",\"numero\":\"2222222222\",\"bairro\":\"11111111111\",\"cidade\":\"222222222\",\"estado\":\"AP\",\"cep\":\"22.222-222\",\"telefones\":\"2222222\",\"email\":\"222222@22222222222\",\"responsavel\":\"2222222\",\"resp_tel\":\"222222222222\",\"resp_email\":\"22222222@2222\",\"created_at\":\"2019-05-26 21:52:12\",\"updated_at\":\"2019-05-26 21:55:16\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-26 22:10:01\"}', '127.0.0.1', '2019-05-26 22:10:01', NULL),
(8, 2, 'cargos', 'C', 1, NULL, '{\"nome\":\"ASDFHASGDSAUI\",\"descricao\":\"sdiugfysgfiasd\",\"created_at\":\"2019-05-26 22:11:16\",\"updated_at\":\"2019-05-26 22:11:16\"}', '127.0.0.1', '2019-05-26 22:11:16', NULL),
(9, 2, 'cargos', 'U', 1, '{\"nome\":\"ASDFHASGDSAUI\",\"descricao\":\"sdiugfysgfiasd\",\"updated_at\":\"2019-05-26 22:11:16\"}', '{\"nome\":\"222222222222\",\"descricao\":\"2222222222222\",\"updated_at\":\"2019-05-26 22:11:23\"}', '127.0.0.1', '2019-05-26 22:11:23', NULL),
(10, 2, 'cargos', 'D', 1, '{\"idcargo\":\"2\",\"nome\":\"222222222222\",\"descricao\":\"2222222222222\",\"created_at\":\"2019-05-26 22:11:16\",\"updated_at\":\"2019-05-26 22:11:23\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-26 22:12:15\"}', '127.0.0.1', '2019-05-26 22:12:15', NULL),
(11, 3, 'cargos', 'C', 1, NULL, '{\"nome\":\"PROMOTOR\",\"descricao\":\"\",\"created_at\":\"2019-05-26 22:12:21\",\"updated_at\":\"2019-05-26 22:12:21\"}', '127.0.0.1', '2019-05-26 22:12:21', NULL),
(12, 3, 'entidades', 'C', 1, NULL, '{\"nome\":\"MPSP\",\"tipo\":\"M\",\"cnpj\":\"\",\"logradouro\":\"\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"Ibitinga\",\"estado\":\"SP\",\"cep\":\"\",\"telefones\":\"\",\"email\":\"\",\"responsavel\":\"Eduardo\",\"resp_tel\":\"1\",\"resp_email\":\"1@1\",\"created_at\":\"2019-05-26 22:12:56\",\"updated_at\":\"2019-05-26 22:12:56\"}', '127.0.0.1', '2019-05-26 22:12:56', NULL),
(13, 2, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"1111111111111\",\"dt_nasc\":\"1111-11-11\",\"sexo\":\"F\",\"logradouro\":\"111111111111\",\"numero\":\"1111111111111\",\"bairro\":\"111111111\",\"cidade\":\"111111111111111\",\"estado\":\"AC\",\"cep\":\"11.111-111\",\"telefones\":\"11111\",\"obs\":\"111111111\",\"identidade\":\"3\",\"created_at\":\"2019-05-26 22:15:48\",\"updated_at\":\"2019-05-26 22:15:48\"}', '127.0.0.1', '2019-05-26 22:15:48', NULL),
(14, 2, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"idcargo\":\"3\",\"email\":\"11111111111@11\",\"password\":\"$2y$08$mln5mZKFs3Z3LpQ90Dafh.BL8o5K.OiiuuiNzdwfNzZmS9ui\\/pfs.\",\"active\":1,\"termo\":0,\"created_at\":\"2019-05-26 22:15:48\",\"updated_at\":\"2019-05-26 22:15:48\",\"idfuncionario\":2}', '127.0.0.1', '2019-05-26 22:15:48', NULL),
(15, 2, 'funcionarios', 'U', 1, '{\"nome\":\"1111111111111\",\"dt_nasc\":\"1111-11-11\",\"sexo\":\"F\",\"logradouro\":\"111111111111\",\"numero\":\"1111111111\",\"bairro\":\"111111111\",\"cidade\":\"111111111111111\",\"estado\":\"AC\",\"cep\":\"11.111-111\",\"telefones\":\"11111\",\"obs\":\"111111111\",\"identidade\":\"3\",\"updated_at\":\"2019-05-26 22:15:48\"}', '{\"nome\":\"2222222222222222\",\"dt_nasc\":\"2222-10-22\",\"sexo\":\"M\",\"logradouro\":\"2222222222222\",\"numero\":\"2222222222\",\"bairro\":\"22222222\",\"cidade\":\"22222222\",\"estado\":\"AP\",\"cep\":\"22.222-222\",\"telefones\":\"22222222\",\"obs\":\"222222222222\",\"identidade\":\"1\",\"updated_at\":\"2019-05-26 22:20:33\"}', '127.0.0.1', '2019-05-26 22:20:33', NULL),
(16, 2, 'usuarios', 'U', 1, '{\"email\":\"11111111111@11\",\"password\":\"$2y$08$mln5mZKFs3Z3LpQ90Dafh.BL8o5K.OiiuuiNzdwfNzZmS9ui\\/pfs.\",\"updated_at\":\"2019-05-26 22:15:48\"}', '{\"email\":\"222@222\",\"password\":\"$2y$08$iQstRVRar0WjajpjkgXUheBqDTWwwINN9PfichFCyo37UYt6tW5zS\",\"updated_at\":\"2019-05-26 22:20:33\"}', '127.0.0.1', '2019-05-26 22:20:33', NULL),
(17, 2, 'funcionarios', 'D', 1, '{\"idfuncionario\":\"2\",\"nome\":\"2222222222222222\",\"dt_nasc\":\"2222-10-22\",\"sexo\":\"M\",\"cpf\":null,\"rg\":null,\"registro\":null,\"logradouro\":\"2222222222222\",\"numero\":\"2222222222\",\"bairro\":\"22222222\",\"cidade\":\"22222222\",\"estado\":\"AP\",\"cep\":\"22.222-222\",\"telefones\":\"22222222\",\"obs\":\"222222222222\",\"identidade\":\"1\",\"created_at\":\"2019-05-26 22:15:48\",\"updated_at\":\"2019-05-26 22:20:33\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-26 22:24:35\"}', '127.0.0.1', '2019-05-26 22:24:35', NULL),
(18, 3, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"AWDAWAWD\",\"dt_nasc\":null,\"sexo\":\"F\",\"logradouro\":\"\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"\",\"estado\":\"SP\",\"cep\":\"\",\"telefones\":\"\",\"obs\":\"\",\"identidade\":\"3\",\"created_at\":\"2019-05-26 22:30:35\",\"updated_at\":\"2019-05-26 22:30:35\"}', '127.0.0.1', '2019-05-26 22:30:35', NULL),
(19, 3, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"idcargo\":\"3\",\"email\":\"111111@22\",\"password\":\"$2y$08$AQb2ci6S7Wpn\\/wdOV\\/TBe.VBFeMQcejp8izDE2.BpZAotSXHYqV6e\",\"active\":1,\"termo\":0,\"created_at\":\"2019-05-26 22:30:35\",\"updated_at\":\"2019-05-26 22:30:35\",\"idfuncionario\":3}', '127.0.0.1', '2019-05-26 22:30:35', NULL),
(20, 3, 'funcionarios', 'D', 1, '{\"idfuncionario\":\"3\",\"nome\":\"AWDAWAWD\",\"dt_nasc\":null,\"sexo\":\"F\",\"cpf\":null,\"rg\":null,\"registro\":null,\"logradouro\":\"\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"\",\"estado\":\"SP\",\"cep\":\"\",\"telefones\":\"\",\"obs\":\"\",\"identidade\":\"3\",\"created_at\":\"2019-05-26 22:30:35\",\"updated_at\":\"2019-05-26 22:30:35\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-26 22:30:52\"}', '127.0.0.1', '2019-05-26 22:30:52', NULL),
(21, 3, 'funcionarios', 'D', 1, '{\"idfuncionario\":\"3\",\"nome\":\"AWDAWAWD\",\"dt_nasc\":null,\"sexo\":\"F\",\"cpf\":null,\"rg\":null,\"registro\":null,\"logradouro\":\"\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"\",\"estado\":\"SP\",\"cep\":\"\",\"telefones\":\"\",\"obs\":\"\",\"identidade\":\"3\",\"created_at\":\"2019-05-26 22:30:35\",\"updated_at\":\"2019-05-26 22:30:35\",\"deleted_at\":\"2019-05-26 22:30:52\"}', '{\"deleted_at\":\"2019-05-26 22:30:59\"}', '127.0.0.1', '2019-05-26 22:30:59', NULL),
(22, 3, 'funcionarios', 'D', 1, '{\"idfuncionario\":\"3\",\"nome\":\"AWDAWAWD\",\"dt_nasc\":null,\"sexo\":\"F\",\"cpf\":null,\"rg\":null,\"registro\":null,\"logradouro\":\"\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"\",\"estado\":\"SP\",\"cep\":\"\",\"telefones\":\"\",\"obs\":\"\",\"identidade\":\"3\",\"created_at\":\"2019-05-26 22:30:35\",\"updated_at\":\"2019-05-26 22:30:35\",\"deleted_at\":\"2019-05-26 22:30:59\"}', '{\"deleted_at\":\"2019-05-26 22:31:43\"}', '127.0.0.1', '2019-05-26 22:31:43', NULL),
(23, 1, 'adolescentes', 'C', 1, NULL, '{\"idadolescente\":\"\",\"nome\":\"11111111111111\",\"dt_nasc\":\"1111-11-11\",\"sexo\":\"F\",\"estado_civil\":\"C\",\"natural\":\"111111111\",\"responsavel\":\"111111111111\",\"pai\":\"1111111111111\",\"pai_natural\":\"111111111\",\"pai_nasc\":\"1111-11-11 00:00:00\",\"mae\":\"1111111111111\",\"mae_natural\":\"11111111111\",\"mae_nasc\":\"1111-11-11 00:00:00\",\"obs\":\"1111\",\"created_at\":\"2019-05-26 22:34:01\",\"updated_at\":\"2019-05-26 22:34:01\"}', '127.0.0.1', '2019-05-26 22:34:01', NULL),
(24, 1, 'documentos', 'C', 1, NULL, '{\"iddocumento\":\"\",\"cert_nasc\":\"1111111111\",\"cert_livro\":\"1\",\"cert_folhas\":\"11111\",\"bairro_cartorio\":\"1111\",\"cert_cartorio\":\"111\",\"municipio_cartorio\":\"11111\",\"CPF\":\"111.111.111-11\",\"RG\":\"11111111111\",\"RG_emissao\":\"1111-11-11 00:00:00\",\"CTPS\":\"111111111\",\"CTPS_serie\":\"11111111111\",\"titulo_eleitor\":\"111111111\",\"te_secao\":\"111111\",\"te_zona\":\"1111111\",\"CAM\":\"111111\",\"CDI_CR\":\"111111111\",\"providenciar\":\"1111111111\",\"idadolescente\":\"1\",\"created_at\":\"2019-05-26 22:34:01\",\"updated_at\":\"2019-05-26 22:34:01\"}', '127.0.0.1', '2019-05-26 22:34:01', NULL),
(25, 1, 'enderecos', 'C', 1, NULL, '{\"idendereco\":\"\",\"cep\":\"11.111-111\",\"logradouro\":\"11111111111\",\"numero\":\"1111111\",\"bairro\":\"11111\",\"estado\":\"AM\",\"cidade\":\"1111111111\",\"complemento\":\"11111\",\"referencia\":\"111111111111\",\"dt_mudanca\":null,\"motivo\":null,\"idadolescente\":\"1\",\"descricao\":\"11111111111\",\"created_at\":\"2019-05-26 22:39:24\",\"updated_at\":\"2019-05-26 22:39:24\"}', '127.0.0.1', '2019-05-26 22:39:24', NULL),
(26, 1, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"111@111\",\"idadolescente\":\"1\",\"ativo\":1,\"descricao\":\"111111111\",\"created_at\":\"2019-05-26 22:39:37\",\"updated_at\":\"2019-05-26 22:39:37\"}', '127.0.0.1', '2019-05-26 22:39:37', NULL),
(27, 2, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(11) 1 1111-1111\",\"idadolescente\":\"1\",\"ativo\":1,\"descricao\":\"111\",\"created_at\":\"2019-05-26 22:39:44\",\"updated_at\":\"2019-05-26 22:39:44\"}', '127.0.0.1', '2019-05-26 22:39:44', NULL),
(28, 1, 'adolescentes', 'U', 1, '{\"pai_nasc\":\"1111-11-11\",\"mae_nasc\":\"1111-11-11\",\"updated_at\":\"2019-05-26 22:34:01\"}', '{\"pai_nasc\":\"1111-11-11 00:00:00\",\"mae_nasc\":\"1111-11-11 00:00:00\",\"updated_at\":\"2019-05-26 22:39:56\"}', '127.0.0.1', '2019-05-26 22:39:56', NULL),
(29, 1, 'documentos', 'U', 1, '{\"RG_emissao\":\"1111-11-11\",\"updated_at\":\"2019-05-26 22:34:01\"}', '{\"RG_emissao\":\"1111-11-11 00:00:00\",\"updated_at\":\"2019-05-26 22:39:56\"}', '127.0.0.1', '2019-05-26 22:39:56', NULL),
(30, 1, 'adolescentes', 'U', 1, '{\"nome\":\"11111111111111\",\"dt_nasc\":\"1111-11-11\",\"sexo\":\"F\",\"estado_civil\":\"C\",\"natural\":\"111111111\",\"responsavel\":\"111111111111\",\"pai\":\"1111111111111\",\"pai_natural\":\"111111111\",\"pai_nasc\":\"1111-11-11\",\"mae\":\"1111111111111\",\"mae_natural\":\"11111111111\",\"mae_nasc\":\"1111-11-11\",\"obs\":\"1111\",\"updated_at\":\"2019-05-26 22:39:56\"}', '{\"nome\":\"222222222222\",\"dt_nasc\":\"2222-10-22\",\"sexo\":\"M\",\"estado_civil\":\"J\",\"natural\":\"22222222\",\"responsavel\":\"222222\",\"pai\":\"2222222\",\"pai_natural\":\"22222\",\"pai_nasc\":\"2222-10-22 00:00:00\",\"mae\":\"222222222\",\"mae_natural\":\"2222222222\",\"mae_nasc\":\"2222-10-22 00:00:00\",\"obs\":\"222221111\",\"updated_at\":\"2019-05-26 22:41:18\"}', '127.0.0.1', '2019-05-26 22:41:18', NULL),
(31, 1, 'documentos', 'U', 1, '{\"cert_nasc\":\"1111111111\",\"cert_livro\":\"1\",\"cert_folhas\":\"11111\",\"bairro_cartorio\":\"1111\",\"cert_cartorio\":\"111\",\"municipio_cartorio\":\"11111\",\"RG\":\"11111111111\",\"RG_emissao\":\"1111-11-11\",\"CTPS\":\"111111111\",\"CTPS_serie\":\"11111111111\",\"titulo_eleitor\":\"111111111\",\"te_secao\":\"111111\",\"te_zona\":\"1111111\",\"CAM\":\"111111\",\"CDI_CR\":\"111111111\",\"providenciar\":\"1111111111\",\"updated_at\":\"2019-05-26 22:39:56\"}', '{\"cert_nasc\":\"2222\",\"cert_livro\":\"2\",\"cert_folhas\":\"2\",\"bairro_cartorio\":\"2\",\"cert_cartorio\":\"2\",\"municipio_cartorio\":\"2\",\"RG\":\"2\",\"RG_emissao\":\"2222-10-22 00:00:00\",\"CTPS\":\"2\",\"CTPS_serie\":\"2222222222\",\"titulo_eleitor\":\"22222222\",\"te_secao\":\"2222\",\"te_zona\":\"222\",\"CAM\":\"22222\",\"CDI_CR\":\"2222222\",\"providenciar\":\"2222222222\",\"updated_at\":\"2019-05-26 22:41:18\"}', '127.0.0.1', '2019-05-26 22:41:18', NULL),
(32, 1, 'enderecos', 'U', 1, '{\"cep\":\"11.111-111\",\"logradouro\":\"11111111111\",\"numero\":\"1111111\",\"bairro\":\"11111\",\"estado\":\"AM\",\"cidade\":\"1111111111\",\"complemento\":\"11111\",\"referencia\":\"111111111111\",\"dt_mudanca\":null,\"motivo\":null,\"descricao\":\"11111111111\",\"updated_at\":\"2019-05-26 22:39:24\"}', '{\"cep\":\"22.222-222\",\"logradouro\":\"222222222\",\"numero\":\"222222\",\"bairro\":\"2222\",\"estado\":\"SP\",\"cidade\":\"222222222\",\"complemento\":\"2222222\",\"referencia\":\"22222\",\"dt_mudanca\":\"2222-10-22\",\"motivo\":\"2222222222222\",\"descricao\":\"2222222\",\"updated_at\":\"2019-05-26 22:42:03\"}', '127.0.0.1', '2019-05-26 22:42:03', NULL),
(33, 1, 'contatos', 'U', 1, '{\"contato\":\"111@111\",\"descricao\":\"111111111\",\"updated_at\":\"2019-05-26 22:39:37\"}', '{\"contato\":\"222@2222\",\"descricao\":\"2222222222\",\"updated_at\":\"2019-05-26 22:42:18\"}', '127.0.0.1', '2019-05-26 22:42:18', NULL),
(34, 2, 'contatos', 'U', 1, '{\"tipo_cont\":\"C\",\"contato\":\"(11) 1 1111-1111\",\"descricao\":\"111\",\"updated_at\":\"2019-05-26 22:39:44\"}', '{\"tipo_cont\":\"F\",\"contato\":\"(22) 2222-2222\",\"descricao\":\"22222\",\"updated_at\":\"2019-05-26 22:42:29\"}', '127.0.0.1', '2019-05-26 22:42:29', NULL),
(35, 1, 'enderecos', 'D', 1, '{\"idendereco\":\"1\",\"descricao\":\"2222222\",\"logradouro\":\"222222222\",\"numero\":\"222222\",\"complemento\":\"2222222\",\"bairro\":\"2222\",\"cidade\":\"222222222\",\"estado\":\"SP\",\"cep\":\"22.222-222\",\"referencia\":\"22222\",\"dt_mudanca\":\"2222-10-22\",\"motivo\":\"2222222222222\",\"idadolescente\":\"1\",\"created_at\":\"2019-05-26 22:39:24\",\"updated_at\":\"2019-05-26 22:42:03\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-27 09:56:34\"}', '127.0.0.1', '2019-05-27 09:56:34', NULL),
(36, 1, 'enderecos', 'U', 1, '{\"cep\":\"22.222-222\",\"logradouro\":\"222222222\",\"numero\":\"222222\",\"bairro\":\"2222\",\"cidade\":\"222222222\",\"complemento\":\"2222222\",\"referencia\":\"22222\",\"dt_mudanca\":\"2222-10-22\",\"motivo\":\"2222222222222\",\"descricao\":\"2222222\",\"updated_at\":\"2019-05-26 22:42:03\"}', '{\"cep\":\"\",\"logradouro\":\"aSDASdas\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"Ibitinga\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"descricao\":\"DASDAS\",\"updated_at\":\"2019-05-27 09:56:46\"}', '127.0.0.1', '2019-05-27 09:56:46', NULL),
(37, 1, 'enderecos', 'U', 1, '{\"logradouro\":\"aSDASdas\",\"cidade\":\"Ibitinga\",\"descricao\":\"DASDAS\",\"updated_at\":\"2019-05-27 09:56:46\"}', '{\"logradouro\":\"ASDASD\",\"cidade\":\"ASDASD\",\"descricao\":\"ASDASD\",\"updated_at\":\"2019-05-27 09:57:14\"}', '127.0.0.1', '2019-05-27 09:57:14', NULL),
(38, 2, 'enderecos', 'C', 1, NULL, '{\"idendereco\":\"\",\"cep\":\"12.312-312\",\"logradouro\":\"123aasdasd\",\"numero\":\"\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"asdasd\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"idadolescente\":\"1\",\"descricao\":\"asdasdasd\",\"created_at\":\"2019-05-27 10:10:22\",\"updated_at\":\"2019-05-27 10:10:22\"}', '127.0.0.1', '2019-05-27 10:10:22', NULL),
(39, 2, 'enderecos', 'U', 1, '{\"updated_at\":\"2019-05-27 10:10:22\"}', '{\"updated_at\":\"2019-05-27 10:10:28\"}', '127.0.0.1', '2019-05-27 10:10:28', NULL),
(40, 2, 'enderecos', 'U', 1, '{\"bairro\":\"\",\"updated_at\":\"2019-05-27 10:10:28\"}', '{\"bairro\":\"asdasasdasd\",\"updated_at\":\"2019-05-27 10:20:00\"}', '127.0.0.1', '2019-05-27 10:20:00', NULL),
(41, 2, 'enderecos', 'D', 1, '{\"idendereco\":\"2\",\"descricao\":\"asdasdasd\",\"logradouro\":\"123aasdasd\",\"numero\":\"\",\"complemento\":\"\",\"bairro\":\"asdasasdasd\",\"cidade\":\"asdasd\",\"estado\":\"SP\",\"cep\":\"12.312-312\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"idadolescente\":\"1\",\"created_at\":\"2019-05-27 10:10:22\",\"updated_at\":\"2019-05-27 10:20:00\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-27 10:20:04\"}', '127.0.0.1', '2019-05-27 10:20:04', NULL),
(42, 3, 'enderecos', 'C', 1, NULL, '{\"idendereco\":\"\",\"cep\":\"\",\"logradouro\":\"asdasdasd\",\"numero\":\"\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"idadolescente\":\"1\",\"descricao\":\"asdasd\",\"created_at\":\"2019-05-27 10:20:11\",\"updated_at\":\"2019-05-27 10:20:11\"}', '127.0.0.1', '2019-05-27 10:20:11', NULL),
(43, 2, 'contatos', 'U', 1, '{\"ativo\":\"1\",\"updated_at\":\"2019-05-26 22:42:29\"}', '{\"ativo\":0,\"updated_at\":\"2019-05-27 10:20:21\"}', '127.0.0.1', '2019-05-27 10:20:21', NULL),
(44, 2, 'contatos', 'U', 1, '{\"descricao\":\"22222\",\"updated_at\":\"2019-05-27 10:20:21\"}', '{\"descricao\":\"222221231241434\",\"updated_at\":\"2019-05-27 10:20:31\"}', '127.0.0.1', '2019-05-27 10:20:31', NULL),
(45, 2, 'contatos', 'D', 1, '{\"idcontato\":\"2\",\"descricao\":\"222221231241434\",\"tipo_cont\":\"F\",\"contato\":\"(22) 2222-2222\",\"ativo\":\"0\",\"idadolescente\":\"1\",\"created_at\":\"2019-05-26 22:39:44\",\"updated_at\":\"2019-05-27 10:20:31\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-27 10:20:34\"}', '127.0.0.1', '2019-05-27 10:20:34', NULL),
(46, 1, 'contatos', 'D', 1, '{\"idcontato\":\"1\",\"descricao\":\"2222222222\",\"tipo_cont\":\"E\",\"contato\":\"222@2222\",\"ativo\":\"1\",\"idadolescente\":\"1\",\"created_at\":\"2019-05-26 22:39:37\",\"updated_at\":\"2019-05-26 22:42:18\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-27 10:29:44\"}', '127.0.0.1', '2019-05-27 10:29:44', NULL),
(47, 3, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"asdasd@saddsa\",\"idadolescente\":\"1\",\"ativo\":1,\"descricao\":\"asdasd\",\"created_at\":\"2019-05-27 11:14:41\",\"updated_at\":\"2019-05-27 11:14:41\"}', '127.0.0.1', '2019-05-27 11:14:41', NULL),
(48, 1, 'adolescentes', 'D', 1, '{\"idadolescente\":\"1\",\"nome\":\"222222222222\",\"dt_nasc\":\"2222-10-22\",\"nome_tratamento\":null,\"sexo\":\"M\",\"estado_civil\":\"J\",\"natural\":\"22222222\",\"responsavel\":\"222222\",\"pai\":\"2222222\",\"pai_nasc\":\"2222-10-22\",\"pai_natural\":\"22222\",\"mae\":\"222222222\",\"mae_nasc\":\"2222-10-22\",\"mae_natural\":\"2222222222\",\"obs\":\"222221111\",\"created_at\":\"2019-05-26 22:34:01\",\"updated_at\":\"2019-05-26 22:41:18\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-27 11:19:07\"}', '127.0.0.1', '2019-05-27 11:19:07', NULL),
(49, 2, 'adolescentes', 'C', 1, NULL, '{\"idadolescente\":\"\",\"nome\":\"ASDASD\",\"dt_nasc\":null,\"sexo\":\"O\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"asdasd\",\"pai\":\"\",\"pai_natural\":\"\",\"pai_nasc\":null,\"mae\":\"\",\"mae_natural\":\"\",\"mae_nasc\":null,\"obs\":\"\",\"created_at\":\"2019-05-27 11:49:32\",\"updated_at\":\"2019-05-27 11:49:32\"}', '127.0.0.1', '2019-05-27 11:49:32', NULL),
(50, 2, 'documentos', 'C', 1, NULL, '{\"iddocumento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"CPF\":\"\",\"RG\":\"asdasd\",\"RG_emissao\":null,\"CTPS\":\"\",\"CTPS_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"CAM\":\"\",\"CDI_CR\":\"\",\"providenciar\":\"\",\"idadolescente\":\"2\",\"created_at\":\"2019-05-27 11:49:32\",\"updated_at\":\"2019-05-27 11:49:32\"}', '127.0.0.1', '2019-05-27 11:49:32', NULL),
(51, 2, 'adolescentes', 'D', 1, '{\"idadolescente\":\"2\",\"nome\":\"ASDASD\",\"dt_nasc\":null,\"nome_tratamento\":null,\"sexo\":\"O\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"asdasd\",\"pai\":\"\",\"pai_nasc\":null,\"pai_natural\":\"\",\"mae\":\"\",\"mae_nasc\":null,\"mae_natural\":\"\",\"obs\":\"\",\"created_at\":\"2019-05-27 11:49:32\",\"updated_at\":\"2019-05-27 11:49:32\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-05-27 11:49:50\"}', '127.0.0.1', '2019-05-27 11:49:50', NULL),
(52, 3, 'adolescentes', 'C', 1, NULL, '{\"idadolescente\":\"\",\"nome\":\"MONICA MEDEIROS DO NASCIMENTO\",\"dt_nasc\":\"1997-12-24\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"BARRA BONITA\",\"responsavel\":\"RONAN ADRIEL ZENATTI\",\"pai\":\"JOEL RAIMUNDO DO NASCIMENTO\",\"pai_natural\":\"BARRA BONITA\",\"pai_nasc\":\"1965-03-10 00:00:00\",\"mae\":\"ROSEMEIRE DA SILVA MEDEIROS DO NASCIMENTO\",\"mae_natural\":\"MACATUBA\",\"mae_nasc\":\"1977-12-10 00:00:00\",\"obs\":\"\",\"created_at\":\"2019-05-27 12:00:38\",\"updated_at\":\"2019-05-27 12:00:38\"}', '127.0.0.1', '2019-05-27 12:00:38', NULL),
(53, 3, 'documentos', 'C', 1, NULL, '{\"iddocumento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"CPF\":\"450.321.318-06\",\"RG\":\"50424337-8\",\"RG_emissao\":null,\"CTPS\":\"\",\"CTPS_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"CAM\":\"\",\"CDI_CR\":\"\",\"providenciar\":\"\",\"idadolescente\":\"3\",\"created_at\":\"2019-05-27 12:00:38\",\"updated_at\":\"2019-05-27 12:00:38\"}', '127.0.0.1', '2019-05-27 12:00:38', NULL),
(54, 4, 'enderecos', 'C', 1, NULL, '{\"idendereco\":\"\",\"cep\":\"17.340-000\",\"logradouro\":\"LEANDRO REGINATO\",\"numero\":\"42\",\"bairro\":\"JARDIM DAS ORQUIDEAS\",\"estado\":\"SP\",\"cidade\":\"BARRA BONITA\",\"complemento\":\"CASA\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"idadolescente\":\"3\",\"descricao\":\"CASA DO PAI\",\"created_at\":\"2019-05-27 12:01:18\",\"updated_at\":\"2019-05-27 12:01:18\"}', '127.0.0.1', '2019-05-27 12:01:18', NULL),
(55, 3, 'adolescentes', 'U', 1, '{\"pai_nasc\":\"1965-03-10\",\"mae_nasc\":\"1977-12-10\",\"updated_at\":\"2019-05-27 12:00:38\"}', '{\"pai_nasc\":\"1965-03-10 00:00:00\",\"mae_nasc\":\"1977-12-10 00:00:00\",\"updated_at\":\"2019-05-27 12:01:21\"}', '127.0.0.1', '2019-05-27 12:01:21', NULL),
(56, 3, 'documentos', 'U', 1, '{\"updated_at\":\"2019-05-27 12:00:38\"}', '{\"updated_at\":\"2019-05-27 12:01:21\"}', '127.0.0.1', '2019-05-27 12:01:21', NULL),
(57, 4, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(12) 9 9253-8153\",\"idadolescente\":\"3\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2019-05-27 12:01:38\",\"updated_at\":\"2019-05-27 12:01:38\"}', '127.0.0.1', '2019-05-27 12:01:38', NULL),
(58, 3, 'adolescentes', 'U', 1, '{\"pai_nasc\":\"1965-03-10\",\"mae_nasc\":\"1977-12-10\",\"updated_at\":\"2019-05-27 12:01:21\"}', '{\"pai_nasc\":\"1965-03-10 00:00:00\",\"mae_nasc\":\"1977-12-10 00:00:00\",\"updated_at\":\"2019-05-27 12:01:41\"}', '127.0.0.1', '2019-05-27 12:01:41', NULL),
(59, 3, 'documentos', 'U', 1, '{\"updated_at\":\"2019-05-27 12:01:21\"}', '{\"updated_at\":\"2019-05-27 12:01:42\"}', '127.0.0.1', '2019-05-27 12:01:42', NULL),
(60, 5, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"MONICA.MEDEIROSN97@GMAIL.COM\",\"idadolescente\":\"3\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2019-05-27 12:02:41\",\"updated_at\":\"2019-05-27 12:02:41\"}', '127.0.0.1', '2019-05-27 12:02:41', NULL),
(61, 6, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(14) 9 8157-5657\",\"idadolescente\":\"3\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2019-05-27 12:02:55\",\"updated_at\":\"2019-05-27 12:02:55\"}', '127.0.0.1', '2019-05-27 12:02:55', NULL),
(62, 7, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"MONICAMEDEIROSN1997@GMAIL.COM\",\"idadolescente\":\"3\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2019-05-27 12:03:16\",\"updated_at\":\"2019-05-27 12:03:16\"}', '127.0.0.1', '2019-05-27 12:03:16', NULL),
(63, 8, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"F\",\"contato\":\"(14) 3641-6493\",\"idadolescente\":\"3\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2019-05-27 12:04:03\",\"updated_at\":\"2019-05-27 12:04:03\"}', '127.0.0.1', '2019-05-27 12:04:03', NULL),
(64, 3, 'adolescentes', 'U', 1, '{\"pai_nasc\":\"1965-03-10\",\"mae_nasc\":\"1977-12-10\",\"updated_at\":\"2019-05-27 12:01:41\"}', '{\"pai_nasc\":\"1965-03-10 00:00:00\",\"mae_nasc\":\"1977-12-10 00:00:00\",\"updated_at\":\"2019-05-27 12:05:06\"}', '127.0.0.1', '2019-05-27 12:05:06', NULL),
(65, 3, 'documentos', 'U', 1, '{\"updated_at\":\"2019-05-27 12:01:42\"}', '{\"updated_at\":\"2019-05-27 12:05:06\"}', '127.0.0.1', '2019-05-27 12:05:06', NULL),
(66, 1, 'situacao_habitacional', 'C', 1, NULL, '{\"idendereco\":\"4\",\"agua\":\"1\",\"esgoto\":\"1\",\"energia\":\"1\",\"pavimento\":\"1\",\"coleta_lixo\":\"1\",\"tipo\":\"1\",\"situacao\":\"1\",\"valor\":\"1000000.00\",\"qtde_comodos\":\"11\",\"qtde_pessoas\":\"3\",\"espaco\":\"200.00\",\"obs\":\"<p>Casa do&nbsp;<strong>Meu&nbsp;<em><span style=\\\"color:#e74c3c\\\">Amor.<\\/span><\\/em><\\/strong><\\/p>\\r\\n\",\"created_at\":\"2019-05-27 12:26:37\",\"updated_at\":\"2019-05-27 12:26:37\"}', '127.0.0.1', '2019-05-27 12:26:37', NULL),
(67, 1, 'situacao_habitacional', 'U', 1, '{\"valor\":\"1000000.00\",\"qtde_pessoas\":\"3\",\"espaco\":\"99.99\",\"updated_at\":\"2019-05-27 12:26:37\"}', '{\"valor\":\"10000.00\",\"qtde_pessoas\":\"10\",\"espaco\":\"5000.00\",\"updated_at\":\"2019-05-27 12:28:55\"}', '127.0.0.1', '2019-05-27 12:28:55', NULL),
(68, 1, 'situacao_habitacional', 'U', 1, '{\"agua\":\"1\",\"esgoto\":\"1\",\"energia\":\"1\",\"pavimento\":\"1\",\"tipo\":\"1\",\"situacao\":\"1\",\"valor\":\"10000.00\",\"espaco\":\"5000.00\",\"obs\":\"<p>Casa do&nbsp;<strong>Meu&nbsp;<em><span style=\\\"color:#e74c3c\\\">Amor.<\\/span><\\/em><\\/strong><\\/p>\\r\\n\",\"updated_at\":\"2019-05-27 12:28:55\"}', '{\"agua\":0,\"esgoto\":0,\"energia\":0,\"pavimento\":0,\"tipo\":\"5\",\"situacao\":\"5\",\"valor\":\"1.00\",\"espaco\":\"0.05\",\"obs\":\"<p>sdfsdfsfsdf<\\/p>\\r\\n\",\"updated_at\":\"2019-06-02 19:54:08\"}', '127.0.0.1', '2019-06-02 19:54:08', NULL),
(69, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 19:54:08\"}', '{\"updated_at\":\"2019-06-02 19:54:57\"}', '127.0.0.1', '2019-06-02 19:54:57', NULL),
(70, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 19:54:57\"}', '{\"updated_at\":\"2019-06-02 19:57:18\"}', '127.0.0.1', '2019-06-02 19:57:18', NULL),
(71, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 19:57:18\"}', '{\"updated_at\":\"2019-06-02 19:57:29\"}', '127.0.0.1', '2019-06-02 19:57:29', NULL),
(72, 1, 'situacao_habitacional', 'U', 1, '{\"qtde_pessoas\":\"10\",\"updated_at\":\"2019-06-02 19:57:29\"}', '{\"qtde_pessoas\":\"6\",\"updated_at\":\"2019-06-02 19:58:31\"}', '127.0.0.1', '2019-06-02 19:58:31', NULL),
(73, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 19:58:31\"}', '{\"updated_at\":\"2019-06-02 19:58:43\"}', '127.0.0.1', '2019-06-02 19:58:43', NULL),
(74, 1, 'situacao_habitacional', 'U', 1, '{\"qtde_comodos\":\"5\",\"qtde_pessoas\":\"6\",\"updated_at\":\"2019-06-02 19:58:43\"}', '{\"qtde_comodos\":\"2\",\"qtde_pessoas\":\"2\",\"updated_at\":\"2019-06-02 19:58:55\"}', '127.0.0.1', '2019-06-02 19:58:55', NULL),
(75, 1, 'situacao_habitacional', 'U', 1, '{\"qtde_comodos\":\"2\",\"qtde_pessoas\":\"2\",\"updated_at\":\"2019-06-02 19:58:55\"}', '{\"qtde_comodos\":\"8\",\"qtde_pessoas\":\"8\",\"updated_at\":\"2019-06-02 19:59:06\"}', '127.0.0.1', '2019-06-02 19:59:06', NULL),
(76, 1, 'situacao_habitacional', 'U', 1, '{\"qtde_comodos\":\"8\",\"qtde_pessoas\":\"8\",\"updated_at\":\"2019-06-02 19:59:06\"}', '{\"qtde_comodos\":\"10\",\"qtde_pessoas\":\"10\",\"updated_at\":\"2019-06-02 20:01:02\"}', '127.0.0.1', '2019-06-02 20:01:02', NULL),
(77, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 20:01:02\"}', '{\"updated_at\":\"2019-06-02 20:01:17\"}', '127.0.0.1', '2019-06-02 20:01:17', NULL),
(78, 1, 'situacao_habitacional', 'U', 1, '{\"tipo\":\"5\",\"situacao\":\"5\",\"valor\":\"1.00\",\"qtde_comodos\":\"10\",\"qtde_pessoas\":\"10\",\"espaco\":\"0.05\",\"updated_at\":\"2019-06-02 20:01:17\"}', '{\"tipo\":\"3\",\"situacao\":\"2\",\"valor\":\"77.27\",\"qtde_comodos\":\"7\",\"qtde_pessoas\":\"7\",\"espaco\":\"770.05\",\"updated_at\":\"2019-06-02 20:03:17\"}', '127.0.0.1', '2019-06-02 20:03:17', NULL),
(79, 1, 'situacao_habitacional', 'U', 1, '{\"valor\":\"77.27\",\"qtde_comodos\":\"7\",\"qtde_pessoas\":\"7\",\"espaco\":\"770.05\",\"updated_at\":\"2019-06-02 20:03:17\"}', '{\"valor\":\"7.72\",\"qtde_comodos\":\"9\",\"qtde_pessoas\":\"9\",\"espaco\":\"77.00\",\"updated_at\":\"2019-06-02 20:08:59\"}', '127.0.0.1', '2019-06-02 20:08:59', NULL),
(80, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 20:08:59\"}', '{\"updated_at\":\"2019-06-02 20:11:14\"}', '127.0.0.1', '2019-06-02 20:11:14', NULL),
(81, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 20:11:14\"}', '{\"updated_at\":\"2019-06-02 20:11:27\"}', '127.0.0.1', '2019-06-02 20:11:27', NULL),
(82, 1, 'situacao_habitacional', 'U', 1, '{\"tipo\":\"3\",\"situacao\":\"2\",\"qtde_comodos\":\"9\",\"qtde_pessoas\":\"9\",\"obs\":\"<p>sdfsdfsfsdf<\\/p>\\r\\n\",\"updated_at\":\"2019-06-02 20:11:27\"}', '{\"tipo\":\"5\",\"situacao\":\"5\",\"qtde_comodos\":\"33\",\"qtde_pessoas\":\"933\",\"obs\":\"<p>333<\\/p>\\r\\n\",\"updated_at\":\"2019-06-02 20:29:08\"}', '127.0.0.1', '2019-06-02 20:29:08', NULL),
(83, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 20:29:08\"}', '{\"updated_at\":\"2019-06-02 20:31:58\"}', '127.0.0.1', '2019-06-02 20:31:58', NULL),
(84, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 20:31:58\"}', '{\"updated_at\":\"2019-06-02 20:32:56\"}', '127.0.0.1', '2019-06-02 20:32:56', NULL),
(85, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 20:32:56\"}', '{\"updated_at\":\"2019-06-02 20:33:24\"}', '127.0.0.1', '2019-06-02 20:33:24', NULL),
(86, 1, 'situacao_habitacional', 'U', 1, '{\"qtde_comodos\":\"33\",\"qtde_pessoas\":\"127\",\"updated_at\":\"2019-06-02 20:33:24\"}', '{\"qtde_comodos\":\"3\",\"qtde_pessoas\":\"20\",\"updated_at\":\"2019-06-02 20:35:29\"}', '127.0.0.1', '2019-06-02 20:35:29', NULL),
(87, 1, 'situacao_habitacional', 'U', 1, '{\"agua\":\"1\",\"pavimento\":\"1\",\"valor\":\"7.72\",\"qtde_comodos\":\"3\",\"qtde_pessoas\":\"20\",\"espaco\":\"77.00\",\"obs\":\"\",\"updated_at\":\"2019-06-02 20:35:29\"}', '{\"agua\":0,\"pavimento\":0,\"valor\":\"57.72\",\"qtde_comodos\":\"30\",\"qtde_pessoas\":\"2\",\"espaco\":\"7.70\",\"obs\":\"<p>ronan<\\/p>\\r\\n\",\"updated_at\":\"2019-06-02 20:36:41\"}', '127.0.0.1', '2019-06-02 20:36:41', NULL),
(88, 1, 'situacao_habitacional', 'U', 1, '{\"updated_at\":\"2019-06-02 20:36:41\"}', '{\"updated_at\":\"2019-06-02 20:36:53\"}', '127.0.0.1', '2019-06-02 20:36:53', NULL),
(89, 1, 'situacao_habitacional', 'U', 1, '{\"qtde_pessoas\":\"2\",\"updated_at\":\"2019-06-02 20:36:53\"}', '{\"qtde_pessoas\":\"20\",\"updated_at\":\"2019-06-02 20:55:23\"}', '127.0.0.1', '2019-06-02 20:55:23', NULL),
(90, 1, 'situacao_habitacional', 'U', 1, '{\"tipo\":\"1\",\"situacao\":\"1\",\"updated_at\":\"2019-06-02 20:55:23\"}', '{\"tipo\":\"2\",\"situacao\":\"2\",\"updated_at\":\"2019-06-02 20:55:41\"}', '127.0.0.1', '2019-06-02 20:55:41', NULL),
(91, 1, 'situacao_habitacional', 'U', 1, '{\"agua\":\"1\",\"esgoto\":\"1\",\"energia\":\"1\",\"pavimento\":\"1\",\"coleta_lixo\":\"1\",\"tipo\":\"2\",\"situacao\":\"2\",\"valor\":\"57.72\",\"espaco\":\"7.70\",\"obs\":\"<p>ronan<\\/p>\\r\\n\",\"updated_at\":\"2019-06-02 20:55:41\"}', '{\"agua\":0,\"esgoto\":0,\"energia\":0,\"pavimento\":0,\"coleta_lixo\":0,\"tipo\":\"5\",\"situacao\":\"5\",\"valor\":\"0.01\",\"espaco\":\"0.01\",\"obs\":\"<p>1<\\/p>\\r\\n\",\"updated_at\":\"2019-06-02 20:55:59\"}', '127.0.0.1', '2019-06-02 20:55:59', NULL),
(92, 1, 'composicao_familiar', 'C', 1, NULL, '{\"idcf\":\"\",\"nome\":\"RONAN ADRIEL ZENATTI\",\"parentesco\":\"9\",\"dt_nasc\":\"1988-02-25\",\"sexo\":\"M\",\"escolaridade\":\"8\",\"formacao_profissional\":\"Professor\",\"ocupacao\":\"7\",\"renda\":\"3400.00\",\"telefones\":\"1\",\"idendereco\":\"4\",\"obs\":\"1\",\"created_at\":\"2019-06-02 20:57:12\",\"updated_at\":\"2019-06-02 20:57:12\"}', '127.0.0.1', '2019-06-02 20:57:12', NULL),
(93, 1, 'composicao_familiar', 'U', 1, '{\"nome\":\"RONAN ADRIEL ZENATTI\",\"dt_nasc\":\"1988-02-25\",\"sexo\":\"M\",\"escolaridade\":\"8\",\"formacao_profissional\":\"Professor\",\"ocupacao\":\"7\",\"renda\":\"3400.00\",\"telefones\":\"1\",\"obs\":\"1\",\"updated_at\":\"2019-06-02 20:57:12\"}', '{\"nome\":\"1111111111111\",\"dt_nasc\":\"1111-11-11\",\"sexo\":\"O\",\"escolaridade\":\"5\",\"formacao_profissional\":\"11\",\"ocupacao\":\"2\",\"renda\":\"11.11\",\"telefones\":\"1111\",\"obs\":\"1111\",\"updated_at\":\"2019-06-02 20:57:46\"}', '127.0.0.1', '2019-06-02 20:57:46', NULL),
(94, 1, 'composicao_familiar', 'D', 1, '{\"idcf\":\"1\",\"idendereco\":\"4\",\"nome\":\"1111111111111\",\"parentesco\":\"4\",\"dt_nasc\":\"1111-11-11\",\"sexo\":\"O\",\"escolaridade\":\"5\",\"formacao_profissional\":\"11\",\"ocupacao\":\"2\",\"renda\":\"11.11\",\"telefones\":\"1111\",\"obs\":\"1111\",\"created_at\":\"2019-06-02 20:57:12\",\"updated_at\":\"2019-06-02 20:57:46\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-06-02 21:06:58\"}', '127.0.0.1', '2019-06-02 21:06:58', NULL),
(95, 4, 'cargos', 'C', 1, NULL, '{\"nome\":\"DIRETOR\",\"descricao\":\"\",\"created_at\":\"2019-06-04 16:48:24\",\"updated_at\":\"2019-06-04 16:48:24\"}', '127.0.0.1', '2019-06-04 16:48:24', NULL),
(96, 1, 'funcionarios', 'U', 1, '{\"nome\":\"Ronan Adriel Zenatti\",\"updated_at\":\"2019-05-26 21:44:26\"}', '{\"nome\":\"RONAN ADRIEL ZENATTI\",\"updated_at\":\"2019-06-14 14:53:56\"}', '127.0.0.1', '2019-06-14 14:53:56', NULL),
(97, 1, 'usuarios', 'U', 1, '{\"termo\":\"1\",\"updated_at\":\"2019-05-26 21:44:26\"}', '{\"termo\":0,\"updated_at\":\"2019-06-14 14:53:56\"}', '127.0.0.1', '2019-06-14 14:53:56', NULL),
(98, 4, 'adolescentes', 'C', 1, NULL, '{\"idadolescente\":\"\",\"nome\":\"MONIQUE\",\"dt_nasc\":null,\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"adasdasdasdasd\",\"pai\":\"\",\"pai_natural\":\"\",\"pai_nasc\":null,\"mae\":\"\",\"mae_natural\":\"\",\"mae_nasc\":null,\"obs\":\"\",\"created_at\":\"2019-06-19 20:37:52\",\"updated_at\":\"2019-06-19 20:37:52\"}', '127.0.0.1', '2019-06-19 20:37:52', NULL),
(99, 4, 'documentos', 'C', 1, NULL, '{\"iddocumento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"CPF\":\"999.999.999-99\",\"RG\":\"413249906\",\"RG_emissao\":null,\"CTPS\":\"\",\"CTPS_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"CAM\":\"\",\"CDI_CR\":\"\",\"providenciar\":\"\",\"idadolescente\":\"4\",\"created_at\":\"2019-06-19 20:37:52\",\"updated_at\":\"2019-06-19 20:37:52\"}', '127.0.0.1', '2019-06-19 20:37:52', NULL),
(100, 5, 'cargos', 'C', 1, NULL, '{\"nome\":\"ASDADA\",\"descricao\":\"asdasdasasd\",\"created_at\":\"2019-09-03 15:43:48\",\"updated_at\":\"2019-09-03 15:43:48\"}', '127.0.0.1', '2019-09-03 15:43:49', NULL),
(101, 5, 'cargos', 'U', 1, '{\"nome\":\"ASDADA\",\"updated_at\":\"2019-09-03 15:43:48\"}', '{\"nome\":\"FELIPE DA MASSA\",\"updated_at\":\"2019-09-03 15:44:21\"}', '127.0.0.1', '2019-09-03 15:44:21', NULL),
(102, 5, 'cargos', 'D', 1, '{\"idcargo\":\"5\",\"nome\":\"FELIPE DA MASSA\",\"descricao\":\"asdasdasasd\",\"created_at\":\"2019-09-03 15:43:48\",\"updated_at\":\"2019-09-03 15:44:21\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-09-03 15:45:40\"}', '127.0.0.1', '2019-09-03 15:45:40', NULL),
(103, 5, 'adolescentes', 'C', 1, NULL, '{\"idadolescente\":\"\",\"nome\":\"SDFSDF\",\"dt_nasc\":null,\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"sdafasdf\",\"pai\":\"\",\"pai_natural\":\"\",\"pai_nasc\":null,\"mae\":\"\",\"mae_natural\":\"\",\"mae_nasc\":null,\"obs\":\"\",\"created_at\":\"2019-09-03 15:48:45\",\"updated_at\":\"2019-09-03 15:48:45\"}', '127.0.0.1', '2019-09-03 15:48:45', NULL),
(104, 5, 'documentos', 'C', 1, NULL, '{\"iddocumento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"CPF\":\"\",\"RG\":\"432342\",\"RG_emissao\":null,\"CTPS\":\"\",\"CTPS_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"CAM\":\"\",\"CDI_CR\":\"\",\"providenciar\":\"\",\"idadolescente\":\"5\",\"created_at\":\"2019-09-03 15:48:45\",\"updated_at\":\"2019-09-03 15:48:45\"}', '127.0.0.1', '2019-09-03 15:48:45', NULL),
(105, 5, 'enderecos', 'C', 1, NULL, '{\"idendereco\":\"\",\"cep\":\"\",\"logradouro\":\"asdasddasasd\",\"numero\":\"\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"idadolescente\":\"5\",\"descricao\":\"casa\",\"created_at\":\"2019-09-03 15:49:16\",\"updated_at\":\"2019-09-03 15:49:16\"}', '127.0.0.1', '2019-09-03 15:49:16', NULL),
(106, 9, 'contatos', 'C', 1, NULL, '{\"idcontato\":\"\",\"tipo_cont\":\"O\",\"contato\":\"(32) 4232-33__\",\"idadolescente\":\"5\",\"ativo\":1,\"descricao\":\"mae\",\"created_at\":\"2019-09-03 15:50:09\",\"updated_at\":\"2019-09-03 15:50:09\"}', '127.0.0.1', '2019-09-03 15:50:09', NULL),
(107, 5, 'adolescentes', 'U', 1, '{\"updated_at\":\"2019-09-03 15:48:45\"}', '{\"updated_at\":\"2019-09-03 15:54:35\"}', '127.0.0.1', '2019-09-03 15:54:35', NULL),
(108, 5, 'documentos', 'U', 1, '{\"updated_at\":\"2019-09-03 15:48:45\"}', '{\"updated_at\":\"2019-09-03 15:54:35\"}', '127.0.0.1', '2019-09-03 15:54:35', NULL),
(109, 5, 'adolescentes', 'D', 1, '{\"idadolescente\":\"5\",\"nome\":\"SDFSDF\",\"dt_nasc\":null,\"nome_tratamento\":null,\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"sdafasdf\",\"pai\":\"\",\"pai_nasc\":null,\"pai_natural\":\"\",\"mae\":\"\",\"mae_nasc\":null,\"mae_natural\":\"\",\"obs\":\"\",\"created_at\":\"2019-09-03 15:48:45\",\"updated_at\":\"2019-09-03 15:54:35\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-09-03 16:18:24\"}', '127.0.0.1', '2019-09-03 16:18:24', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `idcargo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcargo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cargos`
--

INSERT INTO `cargos` (`idcargo`, `nome`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'Administrador do Sistema', '2019-05-26 21:44:26', '2019-05-26 21:44:26', NULL),
(2, '222222222222', '2222222222222', '2019-05-26 22:11:16', '2019-05-26 22:11:23', '2019-05-26 22:12:15'),
(3, 'PROMOTOR', '', '2019-05-26 22:12:21', '2019-05-26 22:12:21', NULL),
(4, 'DIRETOR', '', '2019-06-04 16:48:24', '2019-06-04 16:48:24', NULL),
(5, 'FELIPE DA MASSA', 'asdasdasasd', '2019-09-03 15:43:48', '2019-09-03 15:44:21', '2019-09-03 15:45:40');

-- --------------------------------------------------------

--
-- Estrutura para tabela `composicao_familiar`
--

CREATE TABLE IF NOT EXISTS `composicao_familiar` (
  `idcf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `composicao_familiar`
--

INSERT INTO `composicao_familiar` (`idcf`, `idendereco`, `nome`, `parentesco`, `dt_nasc`, `sexo`, `escolaridade`, `formacao_profissional`, `ocupacao`, `renda`, `telefones`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, '1111111111111', 4, '1111-11-11', 'O', 5, '11', 2, '11.11', '1111', '1111', '2019-06-02 20:57:12', '2019-06-02 20:57:46', '2019-06-02 21:06:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `composicao_familiar1`
--

CREATE TABLE IF NOT EXISTS `composicao_familiar1` (
  `idcf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `recebe_beneficio` tinyint(1) DEFAULT NULL,
  `beneficios` varchar(191) DEFAULT NULL,
  `obs` text,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `contatos`
--

INSERT INTO `contatos` (`idcontato`, `descricao`, `tipo_cont`, `contato`, `ativo`, `idadolescente`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2222222222', 'E', '222@2222', 1, 1, '2019-05-26 22:39:37', '2019-05-26 22:42:18', '2019-05-27 10:29:44'),
(2, '222221231241434', 'F', '(22) 2222-2222', 0, 1, '2019-05-26 22:39:44', '2019-05-27 10:20:31', '2019-05-27 10:20:34'),
(3, 'asdasd', 'E', 'asdasd@saddsa', 1, 1, '2019-05-27 11:14:41', '2019-05-27 11:14:41', NULL),
(4, '', 'C', '(12) 9 9253-8153', 1, 3, '2019-05-27 12:01:38', '2019-05-27 12:01:38', NULL),
(5, '', 'E', 'MONICA.MEDEIROSN97@GMAIL.COM', 1, 3, '2019-05-27 12:02:41', '2019-05-27 12:02:41', NULL),
(6, '', 'C', '(14) 9 8157-5657', 1, 3, '2019-05-27 12:02:55', '2019-05-27 12:02:55', NULL),
(7, '', 'E', 'MONICAMEDEIROSN1997@GMAIL.COM', 1, 3, '2019-05-27 12:03:16', '2019-05-27 12:03:16', NULL),
(8, '', 'F', '(14) 3641-6493', 1, 3, '2019-05-27 12:04:03', '2019-05-27 12:04:03', NULL),
(9, 'mae', 'O', '(32) 4232-33__', 1, 5, '2019-09-03 15:50:09', '2019-09-03 15:50:09', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `documentos`
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `documentos`
--

INSERT INTO `documentos` (`iddocumento`, `cert_nasc`, `cert_livro`, `cert_folhas`, `cert_cartorio`, `bairro_cartorio`, `municipio_cartorio`, `RG`, `RG_emissao`, `CTPS`, `CTPS_serie`, `CPF`, `titulo_eleitor`, `te_secao`, `te_zona`, `CAM`, `CDI_CR`, `providenciar`, `idadolescente`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2222, '2', '2', '2', '2', '2', '2', '2222-10-22', 2, '2222222222', '111.111.111-11', '22222222', 2222, 222, '22222', '2222222', '2222222222', 1, '2019-05-26 22:34:01', '2019-05-26 22:41:18', NULL),
(2, 0, '', '', '', '', '', 'asdasd', NULL, 0, '', '', '', 0, 0, '', '', '', 2, '2019-05-27 11:49:32', '2019-05-27 11:49:32', NULL),
(3, 0, '', '', '', '', '', '50424337-8', NULL, 0, '', '450.321.318-06', '', 0, 0, '', '', '', 3, '2019-05-27 12:00:38', '2019-05-27 12:05:06', NULL),
(4, 0, '', '', '', '', '', '413249906', NULL, 0, '', '999.999.999-99', '', 0, 0, '', '', '', 4, '2019-06-19 20:37:52', '2019-06-19 20:37:52', NULL),
(5, 0, '', '', '', '', '', '432342', NULL, 0, '', '', '', 0, 0, '', '', '', 5, '2019-09-03 15:48:45', '2019-09-03 15:54:35', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `enderecos`
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `enderecos`
--

INSERT INTO `enderecos` (`idendereco`, `descricao`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `referencia`, `dt_mudanca`, `motivo`, `idadolescente`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ASDASD', 'ASDASD', '', '', '', 'ASDASD', 'SP', '', '', NULL, NULL, 1, '2019-05-26 22:39:24', '2019-05-27 09:57:14', '2019-05-27 09:56:34'),
(2, 'asdasdasd', '123aasdasd', '', '', 'asdasasdasd', 'asdasd', 'SP', '12.312-312', '', NULL, NULL, 1, '2019-05-27 10:10:22', '2019-05-27 10:20:00', '2019-05-27 10:20:04'),
(3, 'asdasd', 'asdasdasd', '', '', '', '', 'SP', '', '', NULL, NULL, 1, '2019-05-27 10:20:11', '2019-05-27 10:20:11', NULL),
(4, 'CASA DO PAI', 'LEANDRO REGINATO', '42', 'CASA', 'JARDIM DAS ORQUIDEAS', 'BARRA BONITA', 'SP', '17.340-000', '', NULL, NULL, 3, '2019-05-27 12:01:18', '2019-05-27 12:01:18', NULL),
(5, 'casa', 'asdasddasasd', '', '', '', '', 'SP', '', '', NULL, NULL, 5, '2019-09-03 15:49:16', '2019-09-03 15:49:16', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `entidades`
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `entidades`
--

INSERT INTO `entidades` (`identidade`, `nome`, `cnpj`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `email`, `responsavel`, `resp_tel`, `resp_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ETEC de Ibitinga', '62.823.257/0161-02', 'R', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2019-05-26 21:44:26', '2019-05-26 21:44:26', NULL),
(2, '22222222222222222', '22.222.222/2222-22', 'S', '22222222222222222', '2222222222', '11111111111', '222222222', 'AP', '22.222-222', '2222222', '222222@22222222222', '2222222', '222222222222', '22222222@2222', '2019-05-26 21:52:12', '2019-05-26 21:55:16', '2019-05-26 22:10:01'),
(3, 'MPSP', '', 'M', '', '', '', 'Ibitinga', 'SP', '', '', '', 'Eduardo', '1', '1@1', '2019-05-26 22:12:56', '2019-05-26 22:12:56', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionario`, `nome`, `dt_nasc`, `sexo`, `cpf`, `rg`, `registro`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `obs`, `identidade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RONAN ADRIEL ZENATTI', '1988-02-25', 'M', '355.936.478-79', '41.324.990-6', '57852', 'Rua dos Lavradores', '302', 'Centro', 'Boracéia', 'SP', '17.270-000', '(14) 9 8157-5657', '', 1, '2019-05-26 21:44:26', '2019-06-14 14:53:56', NULL),
(2, '2222222222222222', '2222-10-22', 'M', NULL, NULL, NULL, '2222222222222', '2222222222', '22222222', '22222222', 'AP', '22.222-222', '22222222', '222222222222', 1, '2019-05-26 22:15:48', '2019-05-26 22:20:33', '2019-05-26 22:24:35'),
(3, 'AWDAWAWD', NULL, 'F', NULL, NULL, NULL, '', '', '', '', 'SP', '', '', '', 3, '2019-05-26 22:30:35', '2019-05-26 22:30:35', '2019-05-26 22:31:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico_logins`
--

CREATE TABLE IF NOT EXISTS `historico_logins` (
  `idhl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `navegador` varchar(30) NOT NULL,
  `so` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idhl`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `historico_logins`
--

INSERT INTO `historico_logins` (`idhl`, `idusuario`, `ip_address`, `navegador`, `so`, `created_at`, `deleted_at`) VALUES
(1, 1, '127.0.0.1', 'Chrome / 74.0.3729.169', 'Linux', '2019-06-04 16:48:06', NULL),
(2, 1, '127.0.0.1', 'Chrome / 74.0.3729.169', 'Android / Mobile', '2019-06-04 16:48:56', NULL),
(3, 1, '127.0.0.1', 'Safari / 11.0', 'iOS / Mobile', '2019-06-04 16:49:34', NULL),
(4, 1, '127.0.0.1', 'Safari / 11.0', 'iOS / Mobile', '2019-06-04 16:50:05', NULL),
(5, 1, '127.0.0.1', 'Edge / 14.14263', 'Windows Phone / Mobile', '2019-06-04 16:50:49', NULL),
(6, 1, '127.0.0.1', 'Internet Explorer / 10.0', 'Windows Phone / Mobile', '2019-06-04 16:51:09', NULL),
(7, 1, '127.0.0.1', 'Chrome / 75.0.3770.80', 'Linux', '2019-06-07 12:40:08', NULL),
(8, 1, '127.0.0.1', 'Chrome / 75.0.3770.80', 'Linux', '2019-06-10 10:17:51', NULL),
(9, 1, '127.0.0.1', 'Chrome / 75.0.3770.80', 'Linux', '2019-06-10 10:51:09', NULL),
(10, 1, '127.0.0.1', 'Chrome / 75.0.3770.80', 'Linux', '2019-06-14 14:51:38', NULL),
(11, 1, '127.0.0.1', 'Chrome / 75.0.3770.90', 'Linux', '2019-06-19 16:22:14', NULL),
(12, 1, '127.0.0.1', 'Chrome / 75.0.3770.100', 'Linux', '2019-06-19 19:18:06', NULL),
(13, 1, '127.0.0.1', 'Chrome / 75.0.3770.100', 'Linux', '2019-06-20 09:57:41', NULL),
(14, 1, '127.0.0.1', 'Chrome / 76.0.3809.132', 'Linux', '2019-09-03 15:43:27', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pia`
--

CREATE TABLE IF NOT EXISTS `pia` (
  `idpia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idadolescente` int(10) UNSIGNED NOT NULL,
  `data_recepcao` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idpia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `situacao_habitacional`
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
  `qtde_comodos` tinyint(4) DEFAULT NULL,
  `espaco` decimal(10,2) UNSIGNED DEFAULT NULL,
  `qtde_pessoas` tinyint(4) DEFAULT NULL,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
  `obs` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idsh`),
  KEY `fk_adolescente_sh` (`idendereco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `situacao_habitacional`
--

INSERT INTO `situacao_habitacional` (`idsh`, `tipo`, `situacao`, `valor`, `agua`, `esgoto`, `energia`, `pavimento`, `coleta_lixo`, `qtde_comodos`, `espaco`, `qtde_pessoas`, `idendereco`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 5, '0.01', b'0', b'0', b'0', b'0', b'0', 1, '0.01', 1, 4, '<p>1</p>\r\n', '2019-05-27 12:26:37', '2019-06-02 20:55:59', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `trabalhos`
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
-- Estrutura para tabela `usuarios`
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `ip_address`, `idfuncionario`, `idcargo`, `salt`, `email`, `password`, `username`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `last_login`, `active`, `termo`, `data_termo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '127.0.0.1', 1, 1, NULL, 'ronan.zenatti@etec.sp.gov.br', '$2y$08$9IBqHxaEu9CTN5hrRXFytenbAkw9YcS2q877eLvr.dQCpqJLRKlUS', NULL, NULL, NULL, NULL, NULL, 1567536207, 1, 0, NULL, '2019-05-26 21:44:26', '2019-06-14 14:53:56', NULL),
(2, '127.0.0.1', 2, 3, NULL, '222@222', '$2y$08$iQstRVRar0WjajpjkgXUheBqDTWwwINN9PfichFCyo37UYt6tW5zS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2019-05-26 22:15:48', '2019-05-26 22:20:33', NULL),
(3, '127.0.0.1', 3, 3, NULL, '111111@22', '$2y$08$AQb2ci6S7Wpn/wdOV/TBe.VBFeMQcejp8izDE2.BpZAotSXHYqV6e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2019-05-26 22:30:35', '2019-05-26 22:30:35', NULL);

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
