-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 22-Set-2020 às 20:35
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Estrutura da tabela `adolescentes`
--

CREATE TABLE `adolescentes` (
  `id_adolescente` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) DEFAULT NULL,
  `nome_tratamento` varchar(50) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `estado_civil` char(1) DEFAULT NULL,
  `natural` varchar(50) DEFAULT NULL,
  `responsavel` varchar(150) DEFAULT NULL,
  `obs` mediumtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adolescentes`
--

INSERT INTO `adolescentes` (`id_adolescente`, `nome`, `nome_tratamento`, `dt_nasc`, `sexo`, `estado_civil`, `natural`, `responsavel`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'MONICA MEDEIROS', NULL, '1997-12-24', 'F', 'S', '', 'Meire Medeiros Nascimento', '', '2020-04-08 21:40:23', '2020-04-11 21:28:10', '2020-04-15 15:56:28'),
(2, 'RONAN ADRIEL ZENATTI', NULL, '1988-02-25', 'M', 'S', 'Boracéia', 'José Antonio Zenatti', '', '2020-04-11 17:16:16', '2020-04-11 17:19:37', NULL),
(3, 'ALESSANDRA RIGOTTO', NULL, '2005-07-06', 'F', 'S', '', 'Ariane Rigotto', '', '2020-04-11 17:24:07', '2020-04-11 17:26:30', NULL),
(4, 'ALEXANDER LEON ENS', NULL, '2005-07-20', 'M', 'S', '', 'José Leon', '', '2020-04-11 17:29:40', '2020-04-11 17:30:51', NULL),
(5, 'DIOGO RENAN RODRIGUES', NULL, '2011-06-14', 'M', 'S', '', 'Daniela Heloisa', '', '2020-04-11 17:32:17', '2020-04-11 17:34:36', NULL),
(6, 'JÉSSICA DANIELA CASTRO', NULL, '2006-08-17', 'F', 'S', '', 'Jaqueline Josefa Isabel', '', '2020-04-11 17:36:21', '2020-04-11 18:10:52', NULL),
(7, 'DANIELA STEFANY MORAES', NULL, '2007-06-20', 'F', 'S', '', 'Julio Levi Moraes', '', '2020-04-11 17:40:31', '2020-04-11 17:49:20', NULL),
(8, 'SIMONE EMILLY PEIXOTO', NULL, '2006-09-19', 'F', 'S', '', 'Elisa Mariane', '', '2020-04-11 17:42:21', '2020-04-11 17:48:50', NULL),
(9, 'OLIVIA JULIA LAVÍNIA DE PAULA', NULL, '2006-07-04', 'F', 'S', '', 'Levi Oliver Theo de Paula', '', '2020-04-11 17:46:15', '2020-04-11 17:48:00', NULL),
(10, 'ELIANE ISADORA DA CONCEIÇÃO', NULL, '2004-08-03', 'F', 'S', '', 'Davi Diego da Conceição', '', '2020-04-11 18:12:32', '2020-04-11 18:14:27', NULL),
(11, 'CLÁUDIO VICTOR ROCHA', NULL, '2008-01-09', 'M', 'S', '', 'Alícia Liz Agatha', '', '2020-04-11 18:16:14', '2020-04-11 18:17:30', NULL),
(12, 'RODRIGO SÉRGIO SEBASTIÃO DA COSTA', NULL, '2006-07-29', 'M', 'S', '', 'Silvana Luciana Valentina', '', '2020-04-11 18:18:55', '2020-04-11 18:20:13', NULL),
(13, 'SOPHIE HELOISA CATARINA SALES', NULL, '2006-07-12', 'F', 'S', '', 'Raimunda Helena Elaine', '', '2020-04-11 18:21:31', '2020-04-11 18:23:41', NULL),
(14, 'NICOLAS GAEL FERNANDES', NULL, '2005-10-05', 'M', 'S', '', 'Diogo Felipe Fernandes', '', '2020-04-11 18:25:01', '2020-04-11 18:26:00', NULL),
(15, 'CAROLINA LAURA FERNANDA JESUS', NULL, '2006-08-14', 'F', 'S', '', 'Miguel Nathan Jesus', '', '2020-04-11 18:28:13', '2020-04-11 18:31:34', NULL),
(16, 'KEVIN RAUL FOGAÇA', NULL, '2006-02-23', 'M', 'S', '', 'Noah Diego Julio Fogaça', '', '2020-04-11 18:33:39', '2020-04-11 18:35:14', NULL),
(17, 'KAMILLY CAMILA NOGUEIRA', NULL, '2005-08-16', 'F', 'S', '', 'Noah Marcos Vinicius Gabriel Nogueira', '', '2020-04-11 18:47:54', '2020-04-11 18:51:29', NULL),
(18, 'MAYA CLÁUDIA GABRIELA APARÍCIO', NULL, '2006-03-08', 'F', 'S', '', 'Antonio Vicente Miguel Aparício', '', '2020-04-11 18:56:30', '2020-04-11 18:59:12', NULL),
(19, 'LÍVIA DAIANE ROCHA', NULL, '2006-11-22', 'F', 'S', '', 'Pietra Caroline Laís', '', '2020-04-11 19:00:30', '2020-04-11 19:02:30', NULL),
(20, 'IAGO NOAH DRUMOND', NULL, '2005-07-12', 'M', 'S', '', 'Cláudio Arthur Drumond', '', '2020-04-11 19:03:52', '2020-04-11 19:05:47', NULL),
(21, 'MÁRIO GUSTAVO CAUÊ APARÍCIO', NULL, '2006-06-09', 'M', 'S', '', 'Bento Thomas Aparício', '', '2020-04-11 19:07:27', '2020-04-11 19:08:41', NULL),
(22, 'ANDREIA MALU ANDREA MELO', NULL, '2006-10-13', 'F', 'S', '', 'Gabriel Daniel Ruan Melo', '', '2020-04-11 19:10:45', '2020-04-11 19:13:31', NULL),
(23, 'DANIEL ERICK DA COSTA', NULL, '2006-06-22', 'M', 'S', '', 'Elias Roberto da Costa', '', '2020-04-11 19:14:30', '2020-04-11 19:15:36', NULL),
(24, 'SEBASTIÃO GABRIEL RAMOS', NULL, '2005-12-04', 'M', 'S', '', 'Nelson Nicolas Calebe Ramos', '', '2020-04-11 19:16:41', '2020-04-11 19:16:54', NULL),
(25, 'MELISSA SABRINA AURORA FIGUEIREDO', NULL, '2006-07-13', 'F', 'S', '', 'Hadassa Giovanna', '', '2020-04-11 19:21:19', '2020-04-11 19:22:45', NULL),
(26, 'ISIS TEREZA ALINE DA ROCHA', NULL, '2006-07-20', 'F', 'S', '', 'Diego Augusto Márcio da Rocha', '', '2020-04-11 19:25:46', '2020-04-11 19:25:46', NULL),
(27, 'AGATHA PIETRA FOGAÇA', NULL, '2006-03-16', 'F', 'S', '', 'Clara Regina', '', '2020-04-11 19:44:04', '2020-04-11 19:45:40', NULL),
(28, 'AUGUSTO FILIPE MARCELO VIEIRA', NULL, '2006-02-23', 'M', 'S', '', 'Calebe Diogo Julio Vieira', '', '2020-04-11 19:47:26', '2020-04-11 19:48:24', NULL),
(29, 'ANTONIO CARLOS CALEBE MARTINS', NULL, '2006-07-13', 'M', 'S', '', 'Raimundo Pedro Martins', '', '2020-04-11 19:50:03', '2020-04-11 19:50:54', NULL),
(30, 'CARLA BIANCA ALVES', NULL, '2005-12-16', 'F', 'S', '', 'Jéssica Manuela', '', '2020-04-11 19:51:43', '2020-04-11 19:52:37', NULL),
(31, 'JOSE ANTONIO ZENATTI', NULL, '1988-02-25', 'M', 'S', 'Itapui', 'Carmelinda', '', '2020-04-13 21:50:03', '2020-04-13 21:50:03', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `audit`
--

CREATE TABLE `audit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(50) NOT NULL,
  `tipo` char(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `antes` mediumtext DEFAULT NULL,
  `depois` mediumtext NOT NULL,
  `ip` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `audit`
--

INSERT INTO `audit` (`id`, `model_id`, `model`, `tipo`, `user_id`, `antes`, `depois`, `ip`, `created_at`, `deleted_at`) VALUES
(1, 1, 'entidades', 'C', 1, NULL, '{\"nome\":\"ETEC de Ibitinga\",\"cnpj\":\"62.823.257\\/0161-02\",\"tipo\":\"R\",\"logradouro\":\"Rua Rosalbino Tucci\",\"numero\":\"431\",\"bairro\":\"Centro\",\"cidade\":\"Ibitinga\",\"estado\":\"SP\",\"cep\":\"14.940-000\",\"telefones\":\"(16) 3341-7046 \\/ 3342-6039\",\"email\":\"e161dir@cps.sp.gov.br\",\"responsavel\":\"Patricia\",\"resp_tel\":\"(16) 3341-7046\",\"resp_email\":\"e161dir@cps.sp.gov.br\",\"created_at\":\"2020-04-02 20:50:13\",\"updated_at\":\"2020-04-02 20:50:13\"}', '127.0.0.1', '2020-04-02 20:50:13', NULL),
(2, 1, 'cargos', 'C', 1, NULL, '{\"nome\":\"Administrador\",\"descricao\":\"Administrador do Sistema\",\"created_at\":\"2020-04-02 20:50:13\",\"updated_at\":\"2020-04-02 20:50:13\"}', '127.0.0.1', '2020-04-02 20:50:13', NULL),
(3, 1, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"Ronan Adriel Zenatti\",\"dt_nasc\":\"1988-02-25\",\"sexo\":\"M\",\"cpf\":\"355.936.478-79\",\"rg\":\"41.324.990-6\",\"registro\":\"57852\",\"logradouro\":\"Rua dos Lavradores\",\"numero\":\"302\",\"bairro\":\"Centro\",\"cidade\":\"Boracéia\",\"estado\":\"SP\",\"cep\":\"17.270-000\",\"telefones\":\"(14) 9 8157-5657\",\"obs\":\"Cadastro Automático.\",\"entidade_id\":1,\"created_at\":\"2020-04-02 20:50:13\",\"updated_at\":\"2020-04-02 20:50:13\"}', '127.0.0.1', '2020-04-02 20:50:13', NULL),
(4, 1, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"cargo_id\":1,\"email\":\"ronan.zenatti@etec.sp.gov.br\",\"password\":\"$2y$08$6W7T9apvPnyZ0lPKbJqdouR0G0W8jgi60SPFU8xSyBnsi73AoSDCa\",\"active\":1,\"termo\":1,\"funcionario_id\":1,\"created_at\":\"2020-04-02 20:50:13\",\"updated_at\":\"2020-04-02 20:50:13\"}', '127.0.0.1', '2020-04-02 20:50:13', NULL),
(5, 1, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"MONICA\",\"dt_nasc\":\"1997-12-24\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Meire\",\"obs\":\"\",\"created_at\":\"2020-04-08 21:40:23\",\"updated_at\":\"2020-04-08 21:40:23\"}', '127.0.0.1', '2020-04-08 21:40:23', NULL),
(6, 1, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"\",\"rg\":\"1\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"1\",\"created_at\":\"2020-04-08 21:40:23\",\"updated_at\":\"2020-04-08 21:40:23\"}', '127.0.0.1', '2020-04-08 21:40:23', NULL),
(7, 1, 'grupos_familiares', 'C', 1, NULL, '{\"adolescente_id\":\"1\",\"created_at\":\"2020-04-08 21:41:58\",\"updated_at\":\"2020-04-08 21:41:58\"}', '127.0.0.1', '2020-04-08 21:41:58', NULL),
(8, 1, 'composicao_familiar', 'C', 1, NULL, '{\"id_cf\":\"\",\"nome\":\"JOEL RAIMUNDO\",\"parentesco\":\"2\",\"dt_nasc\":\"1950-01-01\",\"sexo\":\"M\",\"escolaridade\":\"\",\"formacao_profissional\":\"\",\"ocupacao\":\"\",\"renda\":\"\",\"telefones\":\"\",\"grupo_familiar_id\":\"1\",\"obs\":\"\",\"created_at\":\"2020-04-08 21:43:22\",\"updated_at\":\"2020-04-08 21:43:22\"}', '127.0.0.1', '2020-04-08 21:43:22', NULL),
(9, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA\",\"updated_at\":\"2020-04-08 21:40:23\"}', '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 19:38:25\"}', '127.0.0.1', '2020-04-09 19:38:25', NULL),
(10, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-08 21:40:23\"}', '{\"updated_at\":\"2020-04-09 19:38:25\"}', '127.0.0.1', '2020-04-09 19:38:25', NULL),
(11, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 19:38:25\"}', '{\"nome\":\"MONICA MEDEIROS NASCIMENTO\",\"updated_at\":\"2020-04-09 22:02:35\"}', '127.0.0.1', '2020-04-09 22:02:35', NULL),
(12, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 19:38:25\"}', '{\"updated_at\":\"2020-04-09 22:02:35\"}', '127.0.0.1', '2020-04-09 22:02:35', NULL),
(13, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS NASCIMENTO\",\"updated_at\":\"2020-04-09 22:02:35\"}', '{\"nome\":\"MONICA MEDEIROS NASC\",\"updated_at\":\"2020-04-09 22:03:29\"}', '127.0.0.1', '2020-04-09 22:03:29', NULL),
(14, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:02:35\"}', '{\"updated_at\":\"2020-04-09 22:03:29\"}', '127.0.0.1', '2020-04-09 22:03:29', NULL),
(15, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS NASC\",\"updated_at\":\"2020-04-09 22:03:29\"}', '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 22:04:54\"}', '127.0.0.1', '2020-04-09 22:04:54', NULL),
(16, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:03:29\"}', '{\"updated_at\":\"2020-04-09 22:04:54\"}', '127.0.0.1', '2020-04-09 22:04:54', NULL),
(17, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 22:04:54\"}', '{\"nome\":\"MONICA MEDEIROS NASC\",\"updated_at\":\"2020-04-09 22:09:20\"}', '127.0.0.1', '2020-04-09 22:09:20', NULL),
(18, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:04:54\"}', '{\"updated_at\":\"2020-04-09 22:09:20\"}', '127.0.0.1', '2020-04-09 22:09:20', NULL),
(19, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS NASC\",\"updated_at\":\"2020-04-09 22:09:20\"}', '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 22:28:03\"}', '127.0.0.1', '2020-04-09 22:28:03', NULL),
(20, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:09:20\"}', '{\"updated_at\":\"2020-04-09 22:28:03\"}', '127.0.0.1', '2020-04-09 22:28:03', NULL),
(21, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 22:28:03\"}', '{\"nome\":\"MONICA MEDEIROS NASC\",\"updated_at\":\"2020-04-09 22:40:47\"}', '127.0.0.1', '2020-04-09 22:40:47', NULL),
(22, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:28:03\"}', '{\"updated_at\":\"2020-04-09 22:40:47\"}', '127.0.0.1', '2020-04-09 22:40:47', NULL),
(23, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS NASC\",\"updated_at\":\"2020-04-09 22:40:47\"}', '{\"nome\":\"MONICA MEDEIROS N\",\"updated_at\":\"2020-04-09 22:42:48\"}', '127.0.0.1', '2020-04-09 22:42:48', NULL),
(24, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:40:47\"}', '{\"updated_at\":\"2020-04-09 22:42:48\"}', '127.0.0.1', '2020-04-09 22:42:48', NULL),
(25, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS N\",\"updated_at\":\"2020-04-09 22:42:48\"}', '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 22:43:40\"}', '127.0.0.1', '2020-04-09 22:43:40', NULL),
(26, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:42:48\"}', '{\"updated_at\":\"2020-04-09 22:43:40\"}', '127.0.0.1', '2020-04-09 22:43:40', NULL),
(27, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS\",\"responsavel\":\"Meire\",\"updated_at\":\"2020-04-09 22:43:40\"}', '{\"nome\":\"MONICA MEDEIROS NASCIMENTO\",\"responsavel\":\"Meire medeiros\",\"updated_at\":\"2020-04-09 22:45:18\"}', '127.0.0.1', '2020-04-09 22:45:18', NULL),
(28, 1, 'documentos', 'U', 1, '{\"cpf\":\"\",\"rg\":\"1\",\"updated_at\":\"2020-04-09 22:43:40\"}', '{\"cpf\":\"355.906.478-79\",\"rg\":\"41.324.990-6\",\"updated_at\":\"2020-04-09 22:45:18\"}', '127.0.0.1', '2020-04-09 22:45:18', NULL),
(29, 1, 'adolescentes', 'U', 1, '{\"responsavel\":\"Meire medeiros\",\"updated_at\":\"2020-04-09 22:45:18\"}', '{\"responsavel\":\"Meire Medeiros Nascimento\",\"updated_at\":\"2020-04-09 22:48:25\"}', '127.0.0.1', '2020-04-09 22:48:25', NULL),
(30, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:45:18\"}', '{\"updated_at\":\"2020-04-09 22:48:26\"}', '127.0.0.1', '2020-04-09 22:48:26', NULL),
(31, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS NASCIMENTO\",\"updated_at\":\"2020-04-09 22:48:25\"}', '{\"nome\":\"MONICA MEDEIROS DO NASCIMENTO\",\"updated_at\":\"2020-04-09 22:54:36\"}', '127.0.0.1', '2020-04-09 22:54:36', NULL),
(32, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:48:26\"}', '{\"updated_at\":\"2020-04-09 22:54:37\"}', '127.0.0.1', '2020-04-09 22:54:37', NULL),
(33, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS DO NASCIMENTO\",\"updated_at\":\"2020-04-09 22:54:36\"}', '{\"nome\":\"MONICA MEDEIROS DO\",\"updated_at\":\"2020-04-09 23:00:07\"}', '127.0.0.1', '2020-04-09 23:00:07', NULL),
(34, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 22:54:37\"}', '{\"updated_at\":\"2020-04-09 23:00:07\"}', '127.0.0.1', '2020-04-09 23:00:07', NULL),
(35, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS DO\",\"updated_at\":\"2020-04-09 23:00:07\"}', '{\"nome\":\"MONICA MEDEIROS DO NASCIMENTO\",\"updated_at\":\"2020-04-09 23:01:56\"}', '127.0.0.1', '2020-04-09 23:01:56', NULL),
(36, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 23:00:07\"}', '{\"updated_at\":\"2020-04-09 23:01:56\"}', '127.0.0.1', '2020-04-09 23:01:56', NULL),
(37, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS DO NASCIMENTO\",\"updated_at\":\"2020-04-09 23:01:56\"}', '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 23:03:20\"}', '127.0.0.1', '2020-04-09 23:03:20', NULL),
(38, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 23:01:56\"}', '{\"updated_at\":\"2020-04-09 23:03:20\"}', '127.0.0.1', '2020-04-09 23:03:20', NULL),
(39, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 23:03:20\"}', '{\"nome\":\"MONICA MEDEIROS DO NASCIMENTO\",\"updated_at\":\"2020-04-09 23:06:36\"}', '127.0.0.1', '2020-04-09 23:06:36', NULL),
(40, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 23:03:20\"}', '{\"updated_at\":\"2020-04-09 23:06:37\"}', '127.0.0.1', '2020-04-09 23:06:37', NULL),
(41, 1, 'adolescentes', 'U', 1, '{\"nome\":\"MONICA MEDEIROS DO NASCIMENTO\",\"updated_at\":\"2020-04-09 23:06:36\"}', '{\"nome\":\"MONICA MEDEIROS\",\"updated_at\":\"2020-04-09 23:08:14\"}', '127.0.0.1', '2020-04-09 23:08:14', NULL),
(42, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 23:06:37\"}', '{\"updated_at\":\"2020-04-09 23:08:14\"}', '127.0.0.1', '2020-04-09 23:08:14', NULL),
(43, 1, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"1\",\"data_inicio\":null,\"data_recepcao\":null,\"created_at\":\"2020-04-10 12:40:32\",\"updated_at\":\"2020-04-10 12:40:32\"}', '127.0.0.1', '2020-04-10 12:40:32', NULL),
(44, 2, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"1\",\"data_inicio\":null,\"data_recepcao\":null,\"created_at\":\"2020-04-10 12:41:29\",\"updated_at\":\"2020-04-10 12:41:29\"}', '127.0.0.1', '2020-04-10 12:41:29', NULL),
(45, 3, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"1\",\"data_inicio\":null,\"data_recepcao\":null,\"created_at\":\"2020-04-10 12:42:30\",\"updated_at\":\"2020-04-10 12:42:30\"}', '127.0.0.1', '2020-04-10 12:42:30', NULL),
(46, 4, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"1\",\"data_inicio\":null,\"data_recepcao\":null,\"created_at\":\"2020-04-10 15:03:36\",\"updated_at\":\"2020-04-10 15:03:36\"}', '127.0.0.1', '2020-04-10 15:03:36', NULL),
(47, 5, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"1\",\"data_inicio\":\"2020-04-10\",\"data_recepcao\":\"2020-04-10\",\"created_at\":\"2020-04-10 15:04:56\",\"updated_at\":\"2020-04-10 15:04:56\"}', '127.0.0.1', '2020-04-10 15:04:56', NULL),
(48, 6, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"1\",\"data_inicio\":\"2020-04-10\",\"data_recepcao\":\"2020-04-10\",\"created_at\":\"2020-04-10 19:59:54\",\"updated_at\":\"2020-04-10 19:59:54\"}', '127.0.0.1', '2020-04-10 19:59:54', NULL),
(49, 1, 'entidades', 'U', 1, '{\"nome\":\"ETEC de Ibitinga\",\"cep\":\"14.940-000\",\"updated_at\":\"2020-04-02 20:50:13\"}', '{\"nome\":\"ETEC DE IBITINGA\",\"cep\":\"14.940-088\",\"updated_at\":\"2020-04-11 16:19:07\"}', '127.0.0.1', '2020-04-11 16:19:07', NULL),
(50, 1, 'funcionarios', 'U', 1, '{\"nome\":\"Ronan Adriel Zenatti\",\"bairro\":\"Centro\",\"cep\":\"17.270-000\",\"updated_at\":\"2020-04-02 20:50:13\"}', '{\"nome\":\"RONAN ADRIEL ZENATTI\",\"bairro\":\"Vila Nossa Senhora Aparecida\",\"cep\":\"17.270-032\",\"updated_at\":\"2020-04-11 16:19:31\"}', '127.0.0.1', '2020-04-11 16:19:31', NULL),
(51, 1, 'usuarios', 'U', 1, '{\"termo\":\"1\",\"updated_at\":\"2020-04-02 20:50:13\"}', '{\"termo\":0,\"updated_at\":\"2020-04-11 16:19:31\"}', '127.0.0.1', '2020-04-11 16:19:31', NULL),
(52, 1, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"17.340-000\",\"logradouro\":\"Rua Leandro Reginato\",\"numero\":\"42\",\"bairro\":\"Jd. das Orquideas\",\"estado\":\"SP\",\"cidade\":\"Barra Bonita\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"1\",\"descricao\":\"Genitores\",\"created_at\":\"2020-04-11 16:45:20\",\"updated_at\":\"2020-04-11 16:45:20\"}', '127.0.0.1', '2020-04-11 16:45:20', NULL),
(53, 1, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(14) 9 8805-8563\",\"adolescente_id\":\"1\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 16:46:00\",\"updated_at\":\"2020-04-11 16:46:00\"}', '127.0.0.1', '2020-04-11 16:46:00', NULL),
(54, 2, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"RONAN ADRIEL ZENATTI\",\"dt_nasc\":\"1988-02-25\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"Boracéia\",\"responsavel\":\"José Antonio Zenatti\",\"obs\":\"\",\"created_at\":\"2020-04-11 17:16:16\",\"updated_at\":\"2020-04-11 17:16:16\"}', '192.168.0.150', '2020-04-11 17:16:16', NULL),
(55, 2, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"355.936.478-79\",\"rg\":\"504243378\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"2\",\"created_at\":\"2020-04-11 17:16:16\",\"updated_at\":\"2020-04-11 17:16:16\"}', '192.168.0.150', '2020-04-11 17:16:16', NULL),
(56, 2, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:16:16\"}', '{\"updated_at\":\"2020-04-11 17:16:24\"}', '192.168.0.150', '2020-04-11 17:16:24', NULL),
(57, 2, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:16:16\"}', '{\"updated_at\":\"2020-04-11 17:16:24\"}', '192.168.0.150', '2020-04-11 17:16:24', NULL),
(58, 2, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"17.270-032\",\"logradouro\":\"Rua dos lavradores\",\"numero\":\"302\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"Boracéia\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"2\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 17:18:04\",\"updated_at\":\"2020-04-11 17:18:04\"}', '192.168.0.150', '2020-04-11 17:18:04', NULL),
(59, 2, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(14) 9 8157-5657\",\"adolescente_id\":\"2\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:19:01\",\"updated_at\":\"2020-04-11 17:19:01\"}', '192.168.0.150', '2020-04-11 17:19:01', NULL),
(60, 3, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"ronanzenatti@gmail.com\",\"adolescente_id\":\"2\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:19:31\",\"updated_at\":\"2020-04-11 17:19:31\"}', '192.168.0.150', '2020-04-11 17:19:31', NULL),
(61, 2, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:16:24\"}', '{\"updated_at\":\"2020-04-11 17:19:37\"}', '192.168.0.150', '2020-04-11 17:19:37', NULL),
(62, 2, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:16:24\"}', '{\"updated_at\":\"2020-04-11 17:19:37\"}', '192.168.0.150', '2020-04-11 17:19:37', NULL),
(63, 3, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"ALESSANDRA RIGOTTO\",\"dt_nasc\":\"2005-07-06\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Ariane Rigotto\",\"obs\":\"\",\"created_at\":\"2020-04-11 17:24:07\",\"updated_at\":\"2020-04-11 17:24:07\"}', '192.168.0.150', '2020-04-11 17:24:07', NULL),
(64, 3, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"837.843.010-37\",\"rg\":\"6575756677\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"3\",\"created_at\":\"2020-04-11 17:24:07\",\"updated_at\":\"2020-04-11 17:24:07\"}', '192.168.0.150', '2020-04-11 17:24:07', NULL),
(65, 3, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"15.346-888\",\"logradouro\":\"Rua 3 de maio\",\"numero\":\"32\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"3\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 17:24:39\",\"updated_at\":\"2020-04-11 17:24:39\"}', '192.168.0.150', '2020-04-11 17:24:39', NULL),
(66, 4, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(14) 9 8876-6544\",\"adolescente_id\":\"3\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:24:56\",\"updated_at\":\"2020-04-11 17:24:56\"}', '192.168.0.150', '2020-04-11 17:24:56', NULL),
(67, 5, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"alessandra@outlook.com\",\"adolescente_id\":\"3\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:25:17\",\"updated_at\":\"2020-04-11 17:25:17\"}', '192.168.0.150', '2020-04-11 17:25:17', NULL),
(68, 3, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:24:07\"}', '{\"updated_at\":\"2020-04-11 17:26:30\"}', '192.168.0.150', '2020-04-11 17:26:30', NULL),
(69, 3, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:24:07\"}', '{\"updated_at\":\"2020-04-11 17:26:30\"}', '192.168.0.150', '2020-04-11 17:26:30', NULL),
(70, 4, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"ALEXANDER LEON ENS\",\"dt_nasc\":\"2005-07-20\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"José Leon\",\"obs\":\"\",\"created_at\":\"2020-04-11 17:29:40\",\"updated_at\":\"2020-04-11 17:29:40\"}', '192.168.0.150', '2020-04-11 17:29:40', NULL),
(71, 4, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"555.392.900-89\",\"rg\":\"45037687422\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"4\",\"created_at\":\"2020-04-11 17:29:40\",\"updated_at\":\"2020-04-11 17:29:40\"}', '192.168.0.150', '2020-04-11 17:29:40', NULL),
(72, 4, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"13.434-665\",\"logradouro\":\"Primeiro de Marco\",\"numero\":\"222\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"4\",\"descricao\":\"Casa da Mae\",\"created_at\":\"2020-04-11 17:30:21\",\"updated_at\":\"2020-04-11 17:30:21\"}', '192.168.0.150', '2020-04-11 17:30:21', NULL),
(73, 6, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(12) 8 7676-5432\",\"adolescente_id\":\"4\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:30:37\",\"updated_at\":\"2020-04-11 17:30:37\"}', '192.168.0.150', '2020-04-11 17:30:37', NULL),
(74, 7, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"alexander@gmail.com\",\"adolescente_id\":\"4\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:30:49\",\"updated_at\":\"2020-04-11 17:30:49\"}', '192.168.0.150', '2020-04-11 17:30:49', NULL),
(75, 4, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:29:40\"}', '{\"updated_at\":\"2020-04-11 17:30:51\"}', '192.168.0.150', '2020-04-11 17:30:51', NULL),
(76, 4, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:29:40\"}', '{\"updated_at\":\"2020-04-11 17:30:51\"}', '192.168.0.150', '2020-04-11 17:30:51', NULL),
(77, 5, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"DIOGO RENAN RODRIGUES\",\"dt_nasc\":\"2011-06-14\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Daniela Heloisa\",\"obs\":\"\",\"created_at\":\"2020-04-11 17:32:17\",\"updated_at\":\"2020-04-11 17:32:17\"}', '192.168.0.150', '2020-04-11 17:32:17', NULL),
(78, 5, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"086.191.652-24\",\"rg\":\"45.359.604-6\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"5\",\"created_at\":\"2020-04-11 17:32:17\",\"updated_at\":\"2020-04-11 17:32:17\"}', '192.168.0.150', '2020-04-11 17:32:17', NULL),
(79, 5, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:32:17\"}', '{\"updated_at\":\"2020-04-11 17:32:24\"}', '192.168.0.150', '2020-04-11 17:32:24', NULL),
(80, 5, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:32:17\"}', '{\"updated_at\":\"2020-04-11 17:32:25\"}', '192.168.0.150', '2020-04-11 17:32:25', NULL),
(81, 5, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"75.096-270\",\"logradouro\":\"Rua S-064\",\"numero\":\"685\",\"bairro\":\"Anápolis City\",\"estado\":\"SP\",\"cidade\":\"Anápolis\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"5\",\"descricao\":\"Casa da mae\",\"created_at\":\"2020-04-11 17:33:38\",\"updated_at\":\"2020-04-11 17:33:38\"}', '192.168.0.150', '2020-04-11 17:33:38', NULL),
(82, 8, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(62) 3 8646-9052\",\"adolescente_id\":\"5\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:34:08\",\"updated_at\":\"2020-04-11 17:34:08\"}', '192.168.0.150', '2020-04-11 17:34:08', NULL),
(83, 9, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"diogorenanrodrigues..diogorenanrodrigues@hotmailo.com\",\"adolescente_id\":\"5\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:34:32\",\"updated_at\":\"2020-04-11 17:34:32\"}', '192.168.0.150', '2020-04-11 17:34:32', NULL),
(84, 5, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:32:24\"}', '{\"updated_at\":\"2020-04-11 17:34:36\"}', '192.168.0.150', '2020-04-11 17:34:36', NULL),
(85, 5, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:32:25\"}', '{\"updated_at\":\"2020-04-11 17:34:36\"}', '192.168.0.150', '2020-04-11 17:34:36', NULL),
(86, 6, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"JÉSSICA DANIELA CASTRO\",\"dt_nasc\":\"2008-07-09\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Jaqueline Josefa Isabel\",\"obs\":\"\",\"created_at\":\"2020-04-11 17:36:21\",\"updated_at\":\"2020-04-11 17:36:21\"}', '192.168.0.150', '2020-04-11 17:36:21', NULL),
(87, 6, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"409.767.157-08\",\"rg\":\"46.735.779-1\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"6\",\"created_at\":\"2020-04-11 17:36:21\",\"updated_at\":\"2020-04-11 17:36:21\"}', '192.168.0.150', '2020-04-11 17:36:21', NULL),
(88, 6, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"69.905-229\",\"logradouro\":\"Rua São Pedro\",\"numero\":\"939\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"6\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 17:37:10\",\"updated_at\":\"2020-04-11 17:37:10\"}', '192.168.0.150', '2020-04-11 17:37:10', NULL),
(89, 10, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(68) 2 8139-5029\",\"adolescente_id\":\"6\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:38:12\",\"updated_at\":\"2020-04-11 17:38:12\"}', '192.168.0.150', '2020-04-11 17:38:12', NULL),
(90, 11, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"jessicadanielacastro__jessicadanielacastro@mesquita.not.br\",\"adolescente_id\":\"6\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:38:31\",\"updated_at\":\"2020-04-11 17:38:31\"}', '192.168.0.150', '2020-04-11 17:38:31', NULL),
(91, 6, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:36:21\"}', '{\"updated_at\":\"2020-04-11 17:38:51\"}', '192.168.0.150', '2020-04-11 17:38:51', NULL),
(92, 6, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:36:21\"}', '{\"updated_at\":\"2020-04-11 17:38:52\"}', '192.168.0.150', '2020-04-11 17:38:52', NULL),
(93, 7, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"DANIELA STEFANY MORAES\",\"dt_nasc\":\"1950-07-23\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Julio Levi Moraes\",\"obs\":\"\",\"created_at\":\"2020-04-11 17:40:31\",\"updated_at\":\"2020-04-11 17:40:31\"}', '192.168.0.150', '2020-04-11 17:40:31', NULL),
(94, 7, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"565.988.037-13\",\"rg\":\"14.169.632-1\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"7\",\"created_at\":\"2020-04-11 17:40:31\",\"updated_at\":\"2020-04-11 17:40:31\"}', '192.168.0.150', '2020-04-11 17:40:31', NULL),
(95, 7, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"28.040-200\",\"logradouro\":\"Rua A -João Paulo\",\"numero\":\"973\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"7\",\"descricao\":\"Casa da mae\",\"created_at\":\"2020-04-11 17:41:02\",\"updated_at\":\"2020-04-11 17:41:02\"}', '192.168.0.150', '2020-04-11 17:41:02', NULL),
(96, 12, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(22) 9 8741-7215\",\"adolescente_id\":\"7\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:41:14\",\"updated_at\":\"2020-04-11 17:41:14\"}', '192.168.0.150', '2020-04-11 17:41:14', NULL),
(97, 13, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"danielastefanymoraes-77@redacaofinal.com.br\",\"adolescente_id\":\"7\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:41:25\",\"updated_at\":\"2020-04-11 17:41:25\"}', '192.168.0.150', '2020-04-11 17:41:25', NULL),
(98, 7, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:40:31\"}', '{\"updated_at\":\"2020-04-11 17:41:26\"}', '192.168.0.150', '2020-04-11 17:41:26', NULL),
(99, 7, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:40:31\"}', '{\"updated_at\":\"2020-04-11 17:41:26\"}', '192.168.0.150', '2020-04-11 17:41:26', NULL),
(100, 8, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"SIMONE EMILLY PEIXOTO\",\"dt_nasc\":\"1983-04-27\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Elisa Mariane\",\"obs\":\"\",\"created_at\":\"2020-04-11 17:42:21\",\"updated_at\":\"2020-04-11 17:42:21\"}', '192.168.0.150', '2020-04-11 17:42:21', NULL),
(101, 8, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"243.486.523-25\",\"rg\":\"32.402.450-2\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"8\",\"created_at\":\"2020-04-11 17:42:21\",\"updated_at\":\"2020-04-11 17:42:21\"}', '192.168.0.150', '2020-04-11 17:42:21', NULL),
(102, 8, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"75.054-255\",\"logradouro\":\"Rua Patrícia\",\"numero\":\"967\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"8\",\"descricao\":\"casa do pai\",\"created_at\":\"2020-04-11 17:43:20\",\"updated_at\":\"2020-04-11 17:43:20\"}', '192.168.0.150', '2020-04-11 17:43:20', NULL),
(103, 14, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(62) 3 7183-0515\",\"adolescente_id\":\"8\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:43:34\",\"updated_at\":\"2020-04-11 17:43:34\"}', '192.168.0.150', '2020-04-11 17:43:34', NULL),
(104, 15, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"simoneemillypeixoto__simoneemillypeixoto@cantinadafazenda.com.br\",\"adolescente_id\":\"8\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:43:47\",\"updated_at\":\"2020-04-11 17:43:47\"}', '192.168.0.150', '2020-04-11 17:43:47', NULL),
(105, 8, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:42:21\"}', '{\"updated_at\":\"2020-04-11 17:43:50\"}', '192.168.0.150', '2020-04-11 17:43:50', NULL),
(106, 8, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:42:21\"}', '{\"updated_at\":\"2020-04-11 17:43:50\"}', '192.168.0.150', '2020-04-11 17:43:50', NULL),
(107, 9, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"OLIVIA JULIA LAVÍNIA DE PAULA\",\"dt_nasc\":\"1956-12-09\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Levi Oliver Theo de Paula\",\"obs\":\"\",\"created_at\":\"2020-04-11 17:46:15\",\"updated_at\":\"2020-04-11 17:46:15\"}', '192.168.0.150', '2020-04-11 17:46:15', NULL),
(108, 9, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"699.690.605-97\",\"rg\":\"13.673.847-3\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"9\",\"created_at\":\"2020-04-11 17:46:16\",\"updated_at\":\"2020-04-11 17:46:16\"}', '192.168.0.150', '2020-04-11 17:46:16', NULL),
(109, 9, 'adolescentes', 'U', 1, '{\"dt_nasc\":\"1956-12-09\",\"updated_at\":\"2020-04-11 17:46:15\"}', '{\"dt_nasc\":\"2006-07-04\",\"updated_at\":\"2020-04-11 17:46:39\"}', '192.168.0.150', '2020-04-11 17:46:39', NULL),
(110, 9, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:46:16\"}', '{\"updated_at\":\"2020-04-11 17:46:39\"}', '192.168.0.150', '2020-04-11 17:46:39', NULL),
(111, 9, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"78.149-358\",\"logradouro\":\"Rua Bocaiúva\",\"numero\":\"812\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"9\",\"descricao\":\"casa da tia\",\"created_at\":\"2020-04-11 17:47:26\",\"updated_at\":\"2020-04-11 17:47:26\"}', '192.168.0.150', '2020-04-11 17:47:26', NULL),
(112, 16, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(65) 9 8282-8424\",\"adolescente_id\":\"9\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:47:39\",\"updated_at\":\"2020-04-11 17:47:39\"}', '192.168.0.150', '2020-04-11 17:47:39', NULL),
(113, 17, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"oliviajulialaviniadepaula..oliviajulialaviniadepaula@dhl.com\",\"adolescente_id\":\"9\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 17:47:50\",\"updated_at\":\"2020-04-11 17:47:50\"}', '192.168.0.150', '2020-04-11 17:47:50', NULL),
(114, 9, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:46:39\"}', '{\"updated_at\":\"2020-04-11 17:48:00\"}', '192.168.0.150', '2020-04-11 17:48:00', NULL),
(115, 9, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:46:39\"}', '{\"updated_at\":\"2020-04-11 17:48:00\"}', '192.168.0.150', '2020-04-11 17:48:00', NULL),
(116, 8, 'adolescentes', 'U', 1, '{\"dt_nasc\":\"1983-04-27\",\"updated_at\":\"2020-04-11 17:43:50\"}', '{\"dt_nasc\":\"2006-09-19\",\"updated_at\":\"2020-04-11 17:48:50\"}', '192.168.0.150', '2020-04-11 17:48:50', NULL),
(117, 8, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:43:50\"}', '{\"updated_at\":\"2020-04-11 17:48:51\"}', '192.168.0.150', '2020-04-11 17:48:51', NULL),
(118, 7, 'adolescentes', 'U', 1, '{\"dt_nasc\":\"1950-07-23\",\"updated_at\":\"2020-04-11 17:41:26\"}', '{\"dt_nasc\":\"2007-06-20\",\"updated_at\":\"2020-04-11 17:49:20\"}', '192.168.0.150', '2020-04-11 17:49:20', NULL),
(119, 7, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:41:26\"}', '{\"updated_at\":\"2020-04-11 17:49:20\"}', '192.168.0.150', '2020-04-11 17:49:20', NULL),
(120, 6, 'adolescentes', 'U', 1, '{\"dt_nasc\":\"2008-07-09\",\"updated_at\":\"2020-04-11 17:38:51\"}', '{\"dt_nasc\":\"2006-08-17\",\"updated_at\":\"2020-04-11 17:49:51\"}', '192.168.0.150', '2020-04-11 17:49:51', NULL),
(121, 6, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:38:52\"}', '{\"updated_at\":\"2020-04-11 17:49:51\"}', '192.168.0.150', '2020-04-11 17:49:51', NULL),
(122, 6, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 17:49:51\"}', '{\"updated_at\":\"2020-04-11 18:10:52\"}', '192.168.0.150', '2020-04-11 18:10:52', NULL),
(123, 6, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 17:49:51\"}', '{\"updated_at\":\"2020-04-11 18:10:52\"}', '192.168.0.150', '2020-04-11 18:10:52', NULL),
(124, 10, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"ELIANE ISADORA DA CONCEIÇÃO\",\"dt_nasc\":\"2004-08-03\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Davi Diego da Conceição\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:12:32\",\"updated_at\":\"2020-04-11 18:12:32\"}', '192.168.0.150', '2020-04-11 18:12:32', NULL),
(125, 10, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"555.704.704-25\",\"rg\":\"48.257.068-4\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"10\",\"created_at\":\"2020-04-11 18:12:32\",\"updated_at\":\"2020-04-11 18:12:32\"}', '192.168.0.150', '2020-04-11 18:12:32', NULL),
(126, 10, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"51.335-340\",\"logradouro\":\"Rua Serra Caiada\",\"numero\":\"398\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"10\",\"descricao\":\"casa do pai\",\"created_at\":\"2020-04-11 18:13:16\",\"updated_at\":\"2020-04-11 18:13:16\"}', '192.168.0.150', '2020-04-11 18:13:16', NULL),
(127, 18, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(81) 9 8540-8439\",\"adolescente_id\":\"10\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:14:09\",\"updated_at\":\"2020-04-11 18:14:09\"}', '192.168.0.150', '2020-04-11 18:14:09', NULL),
(128, 19, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"elianeisadoradaconceicao__elianeisadoradaconceicao@zipmail.com.br\",\"adolescente_id\":\"10\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:14:24\",\"updated_at\":\"2020-04-11 18:14:24\"}', '192.168.0.150', '2020-04-11 18:14:24', NULL),
(129, 10, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:12:32\"}', '{\"updated_at\":\"2020-04-11 18:14:27\"}', '192.168.0.150', '2020-04-11 18:14:27', NULL),
(130, 10, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:12:32\"}', '{\"updated_at\":\"2020-04-11 18:14:27\"}', '192.168.0.150', '2020-04-11 18:14:27', NULL),
(131, 11, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"CLÁUDIO VICTOR ROCHA\",\"dt_nasc\":\"2008-01-09\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Alícia Liz Agatha\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:16:14\",\"updated_at\":\"2020-04-11 18:16:14\"}', '192.168.0.150', '2020-04-11 18:16:14', NULL),
(132, 11, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"637.565.588-94\",\"rg\":\"34.973.283-8\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"11\",\"created_at\":\"2020-04-11 18:16:14\",\"updated_at\":\"2020-04-11 18:16:14\"}', '192.168.0.150', '2020-04-11 18:16:14', NULL),
(133, 11, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"77.024-478\",\"logradouro\":\"Quadra 1206 Sul Alameda 11\",\"numero\":\"972\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"11\",\"descricao\":\"casa do avo\",\"created_at\":\"2020-04-11 18:17:02\",\"updated_at\":\"2020-04-11 18:17:02\"}', '192.168.0.150', '2020-04-11 18:17:02', NULL),
(134, 20, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(63) 9 8895-9107\",\"adolescente_id\":\"11\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:17:14\",\"updated_at\":\"2020-04-11 18:17:14\"}', '192.168.0.150', '2020-04-11 18:17:14', NULL),
(135, 21, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"claudiovictorrocha-84@zipmail.com\",\"adolescente_id\":\"11\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:17:27\",\"updated_at\":\"2020-04-11 18:17:27\"}', '192.168.0.150', '2020-04-11 18:17:27', NULL),
(136, 11, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:16:14\"}', '{\"updated_at\":\"2020-04-11 18:17:30\"}', '192.168.0.150', '2020-04-11 18:17:30', NULL),
(137, 11, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:16:14\"}', '{\"updated_at\":\"2020-04-11 18:17:30\"}', '192.168.0.150', '2020-04-11 18:17:30', NULL),
(138, 12, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"RODRIGO SÉRGIO SEBASTIÃO DA COSTA\",\"dt_nasc\":\"2006-07-29\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Silvana Luciana Valentina\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:18:55\",\"updated_at\":\"2020-04-11 18:18:55\"}', '192.168.0.150', '2020-04-11 18:18:55', NULL),
(139, 12, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"812.654.763-49\",\"rg\":\"36.378.854-2\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"12\",\"created_at\":\"2020-04-11 18:18:55\",\"updated_at\":\"2020-04-11 18:18:55\"}', '192.168.0.150', '2020-04-11 18:18:55', NULL),
(140, 22, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(95) 9 9686-8773\",\"adolescente_id\":\"12\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:19:32\",\"updated_at\":\"2020-04-11 18:19:32\"}', '192.168.0.150', '2020-04-11 18:19:32', NULL),
(141, 12, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:18:55\"}', '{\"updated_at\":\"2020-04-11 18:19:36\"}', '192.168.0.150', '2020-04-11 18:19:36', NULL),
(142, 12, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:18:55\"}', '{\"updated_at\":\"2020-04-11 18:19:36\"}', '192.168.0.150', '2020-04-11 18:19:36', NULL),
(143, 12, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"69.314-214\",\"logradouro\":\"Avenida Padre Anchieta\",\"numero\":\"625\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"12\",\"descricao\":\"casa da mae\",\"created_at\":\"2020-04-11 18:20:09\",\"updated_at\":\"2020-04-11 18:20:09\"}', '192.168.0.150', '2020-04-11 18:20:09', NULL),
(144, 12, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:19:36\"}', '{\"updated_at\":\"2020-04-11 18:20:13\"}', '192.168.0.150', '2020-04-11 18:20:13', NULL),
(145, 12, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:19:36\"}', '{\"updated_at\":\"2020-04-11 18:20:13\"}', '192.168.0.150', '2020-04-11 18:20:13', NULL),
(146, 13, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"SOPHIE HELOISA CATARINA SALES\",\"dt_nasc\":\"2006-07-12\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Raimunda Helena Elaine\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:21:31\",\"updated_at\":\"2020-04-11 18:21:31\"}', '192.168.0.150', '2020-04-11 18:21:31', NULL),
(147, 13, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"183.171.156-74\",\"rg\":\"10.981.460-5\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"13\",\"created_at\":\"2020-04-11 18:21:31\",\"updated_at\":\"2020-04-11 18:21:31\"}', '192.168.0.150', '2020-04-11 18:21:31', NULL),
(148, 7, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"13\",\"data_inicio\":\"2020-04-11\",\"data_recepcao\":\"2020-04-11\",\"created_at\":\"2020-04-11 18:22:24\",\"updated_at\":\"2020-04-11 18:22:24\"}', '127.0.0.1', '2020-04-11 18:22:24', NULL),
(149, 13, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"68.909-049\",\"logradouro\":\"Avenida São Joaquim\",\"numero\":\"252\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"13\",\"descricao\":\"casa do pai\",\"created_at\":\"2020-04-11 18:22:41\",\"updated_at\":\"2020-04-11 18:22:41\"}', '192.168.0.150', '2020-04-11 18:22:41', NULL),
(150, 23, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(96) 9 9357-3144\",\"adolescente_id\":\"13\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:23:13\",\"updated_at\":\"2020-04-11 18:23:13\"}', '192.168.0.150', '2020-04-11 18:23:13', NULL),
(151, 24, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"sophieheloisacatarinasales__sophieheloisacatarinasales@riquefroes.com\",\"adolescente_id\":\"13\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:23:38\",\"updated_at\":\"2020-04-11 18:23:38\"}', '192.168.0.150', '2020-04-11 18:23:38', NULL),
(152, 13, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:21:31\"}', '{\"updated_at\":\"2020-04-11 18:23:41\"}', '192.168.0.150', '2020-04-11 18:23:41', NULL),
(153, 13, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:21:31\"}', '{\"updated_at\":\"2020-04-11 18:23:41\"}', '192.168.0.150', '2020-04-11 18:23:41', NULL),
(154, 14, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"NICOLAS GAEL FERNANDES\",\"dt_nasc\":\"2005-10-05\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Diogo Felipe Fernandes\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:25:01\",\"updated_at\":\"2020-04-11 18:25:01\"}', '192.168.0.150', '2020-04-11 18:25:01', NULL),
(155, 14, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"411.676.964-92\",\"rg\":\"44.214.221-3\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"14\",\"created_at\":\"2020-04-11 18:25:01\",\"updated_at\":\"2020-04-11 18:25:01\"}', '192.168.0.150', '2020-04-11 18:25:01', NULL),
(156, 14, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"57.085-450\",\"logradouro\":\"Rua Pirauá\",\"numero\":\"837\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"14\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 18:25:34\",\"updated_at\":\"2020-04-11 18:25:34\"}', '192.168.0.150', '2020-04-11 18:25:34', NULL),
(157, 25, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(82) 9 9650-5157\",\"adolescente_id\":\"14\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:25:47\",\"updated_at\":\"2020-04-11 18:25:47\"}', '192.168.0.150', '2020-04-11 18:25:47', NULL),
(158, 26, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"nicolasgaelfernandes..nicolasgaelfernandes@sandvik.com\",\"adolescente_id\":\"14\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:25:58\",\"updated_at\":\"2020-04-11 18:25:58\"}', '192.168.0.150', '2020-04-11 18:25:58', NULL),
(159, 14, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:25:01\"}', '{\"updated_at\":\"2020-04-11 18:26:00\"}', '192.168.0.150', '2020-04-11 18:26:00', NULL),
(160, 14, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:25:01\"}', '{\"updated_at\":\"2020-04-11 18:26:00\"}', '192.168.0.150', '2020-04-11 18:26:00', NULL),
(161, 15, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"CAROLINA LAURA FERNANDA JESUS\",\"dt_nasc\":\"2006-08-14\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Miguel Nathan Jesus\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:28:13\",\"updated_at\":\"2020-04-11 18:28:13\"}', '192.168.0.150', '2020-04-11 18:28:13', NULL),
(162, 15, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"061.160.326-80\",\"rg\":\"11.750.162-1\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"15\",\"created_at\":\"2020-04-11 18:28:13\",\"updated_at\":\"2020-04-11 18:28:13\"}', '192.168.0.150', '2020-04-11 18:28:13', NULL),
(163, 15, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:28:13\"}', '{\"updated_at\":\"2020-04-11 18:28:40\"}', '192.168.0.150', '2020-04-11 18:28:40', NULL),
(164, 15, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:28:13\"}', '{\"updated_at\":\"2020-04-11 18:28:40\"}', '192.168.0.150', '2020-04-11 18:28:40', NULL),
(165, 15, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"65.915-683\",\"logradouro\":\"Avenida João Lima\",\"numero\":\"993\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"15\",\"descricao\":\"casa do pai\",\"created_at\":\"2020-04-11 18:30:55\",\"updated_at\":\"2020-04-11 18:30:55\"}', '192.168.0.150', '2020-04-11 18:30:55', NULL),
(166, 27, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(98) 9 8569-9479\",\"adolescente_id\":\"15\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:31:18\",\"updated_at\":\"2020-04-11 18:31:18\"}', '192.168.0.150', '2020-04-11 18:31:18', NULL),
(167, 28, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"carolinalaurafernandajesus_@cotamtambores.com.br\",\"adolescente_id\":\"15\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:31:32\",\"updated_at\":\"2020-04-11 18:31:32\"}', '192.168.0.150', '2020-04-11 18:31:32', NULL),
(168, 15, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:28:40\"}', '{\"updated_at\":\"2020-04-11 18:31:34\"}', '192.168.0.150', '2020-04-11 18:31:34', NULL),
(169, 15, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:28:40\"}', '{\"updated_at\":\"2020-04-11 18:31:34\"}', '192.168.0.150', '2020-04-11 18:31:34', NULL),
(170, 16, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"KEVIN RAUL FOGAÇA\",\"dt_nasc\":\"2006-02-23\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Noah Diego Julio Fogaça\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:33:39\",\"updated_at\":\"2020-04-11 18:33:39\"}', '192.168.0.150', '2020-04-11 18:33:39', NULL),
(171, 16, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"929.085.510-04\",\"rg\":\"31.818.855-7\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"16\",\"created_at\":\"2020-04-11 18:33:39\",\"updated_at\":\"2020-04-11 18:33:39\"}', '192.168.0.150', '2020-04-11 18:33:39', NULL);
INSERT INTO `audit` (`id`, `model_id`, `model`, `tipo`, `user_id`, `antes`, `depois`, `ip`, `created_at`, `deleted_at`) VALUES
(172, 16, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"75.702-030\",\"logradouro\":\"Rua Mário Nicoleti\",\"numero\":\"734\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"16\",\"descricao\":\"casa do pai\",\"created_at\":\"2020-04-11 18:34:30\",\"updated_at\":\"2020-04-11 18:34:30\"}', '192.168.0.150', '2020-04-11 18:34:30', NULL),
(173, 29, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(64) 9 9563-8042\",\"adolescente_id\":\"16\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:34:43\",\"updated_at\":\"2020-04-11 18:34:43\"}', '192.168.0.150', '2020-04-11 18:34:43', NULL),
(174, 30, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"kevinraulfogaca..kevinraulfogaca@trincheira.com.br\",\"adolescente_id\":\"16\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:35:03\",\"updated_at\":\"2020-04-11 18:35:03\"}', '192.168.0.150', '2020-04-11 18:35:03', NULL),
(175, 16, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:33:39\"}', '{\"updated_at\":\"2020-04-11 18:35:14\"}', '192.168.0.150', '2020-04-11 18:35:14', NULL),
(176, 16, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:33:39\"}', '{\"updated_at\":\"2020-04-11 18:35:14\"}', '192.168.0.150', '2020-04-11 18:35:14', NULL),
(177, 17, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"KAMILLY CAMILA NOGUEIRA\",\"dt_nasc\":\"2005-08-16\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Noah Marcos Vinicius Gabriel Nogueira\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:47:54\",\"updated_at\":\"2020-04-11 18:47:54\"}', '192.168.0.150', '2020-04-11 18:47:54', NULL),
(178, 17, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"655.587.025-75\",\"rg\":\"10.936.212-3\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"17\",\"created_at\":\"2020-04-11 18:47:54\",\"updated_at\":\"2020-04-11 18:47:54\"}', '192.168.0.150', '2020-04-11 18:47:54', NULL),
(179, 17, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:47:54\"}', '{\"updated_at\":\"2020-04-11 18:48:00\"}', '192.168.0.150', '2020-04-11 18:48:00', NULL),
(180, 17, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:47:54\"}', '{\"updated_at\":\"2020-04-11 18:48:00\"}', '192.168.0.150', '2020-04-11 18:48:00', NULL),
(181, 17, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"88.122-046\",\"logradouro\":\"Rua José Benedito Petry\",\"numero\":\"861\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"17\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 18:48:44\",\"updated_at\":\"2020-04-11 18:48:44\"}', '192.168.0.150', '2020-04-11 18:48:44', NULL),
(182, 31, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(48) 9 8390-7463\",\"adolescente_id\":\"17\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:49:11\",\"updated_at\":\"2020-04-11 18:49:11\"}', '192.168.0.150', '2020-04-11 18:49:11', NULL),
(183, 17, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:48:00\"}', '{\"updated_at\":\"2020-04-11 18:49:14\"}', '192.168.0.150', '2020-04-11 18:49:14', NULL),
(184, 17, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:48:00\"}', '{\"updated_at\":\"2020-04-11 18:49:14\"}', '192.168.0.150', '2020-04-11 18:49:14', NULL),
(185, 32, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"kkamillycamilanogueira@gradu.if.ufrj.br\",\"adolescente_id\":\"17\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:51:26\",\"updated_at\":\"2020-04-11 18:51:26\"}', '192.168.0.150', '2020-04-11 18:51:26', NULL),
(186, 17, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:49:14\"}', '{\"updated_at\":\"2020-04-11 18:51:29\"}', '192.168.0.150', '2020-04-11 18:51:29', NULL),
(187, 17, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:49:14\"}', '{\"updated_at\":\"2020-04-11 18:51:29\"}', '192.168.0.150', '2020-04-11 18:51:29', NULL),
(188, 18, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"MAYA CLÁUDIA GABRIELA APARÍCIO\",\"dt_nasc\":\"2006-03-08\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Antonio Vicente Miguel Aparício\",\"obs\":\"\",\"created_at\":\"2020-04-11 18:56:30\",\"updated_at\":\"2020-04-11 18:56:30\"}', '192.168.0.150', '2020-04-11 18:56:30', NULL),
(189, 18, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"940.918.741-93\",\"rg\":\"30.703.674-1\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"18\",\"created_at\":\"2020-04-11 18:56:30\",\"updated_at\":\"2020-04-11 18:56:30\"}', '192.168.0.150', '2020-04-11 18:56:30', NULL),
(190, 18, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"57.306-871\",\"logradouro\":\"Rua Adolfo Bispo da Silva\",\"numero\":\"231\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"18\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 18:58:17\",\"updated_at\":\"2020-04-11 18:58:17\"}', '192.168.0.150', '2020-04-11 18:58:17', NULL),
(191, 33, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(82) 9 8251-3101\",\"adolescente_id\":\"18\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:58:55\",\"updated_at\":\"2020-04-11 18:58:55\"}', '192.168.0.150', '2020-04-11 18:58:55', NULL),
(192, 34, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"mayaclaudiagabrielaaparicio__mayaclaudiagabrielaaparicio@wikimetal.com.br\",\"adolescente_id\":\"18\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 18:59:10\",\"updated_at\":\"2020-04-11 18:59:10\"}', '192.168.0.150', '2020-04-11 18:59:10', NULL),
(193, 18, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 18:56:30\"}', '{\"updated_at\":\"2020-04-11 18:59:12\"}', '192.168.0.150', '2020-04-11 18:59:12', NULL),
(194, 18, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 18:56:30\"}', '{\"updated_at\":\"2020-04-11 18:59:12\"}', '192.168.0.150', '2020-04-11 18:59:12', NULL),
(195, 19, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"LÍVIA DAIANE ROCHA\",\"dt_nasc\":\"2006-11-22\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Pietra Caroline Laís\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:00:30\",\"updated_at\":\"2020-04-11 19:00:30\"}', '192.168.0.150', '2020-04-11 19:00:30', NULL),
(196, 19, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"374.727.058-10\",\"rg\":\"22.986.757-1\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"19\",\"created_at\":\"2020-04-11 19:00:30\",\"updated_at\":\"2020-04-11 19:00:30\"}', '192.168.0.150', '2020-04-11 19:00:30', NULL),
(197, 19, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"69.900-070\",\"logradouro\":\"Rua Quintino Bocaiúva\",\"numero\":\"967\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"19\",\"descricao\":\"casa da mae\",\"created_at\":\"2020-04-11 19:01:40\",\"updated_at\":\"2020-04-11 19:01:40\"}', '192.168.0.150', '2020-04-11 19:01:40', NULL),
(198, 35, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(68) 9 9504-5461\",\"adolescente_id\":\"19\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:02:11\",\"updated_at\":\"2020-04-11 19:02:11\"}', '192.168.0.150', '2020-04-11 19:02:11', NULL),
(199, 36, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"liviadaianerocha__liviadaianerocha@lordello.com.br\",\"adolescente_id\":\"19\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:02:28\",\"updated_at\":\"2020-04-11 19:02:28\"}', '192.168.0.150', '2020-04-11 19:02:28', NULL),
(200, 19, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:00:30\"}', '{\"updated_at\":\"2020-04-11 19:02:30\"}', '192.168.0.150', '2020-04-11 19:02:30', NULL),
(201, 19, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:00:30\"}', '{\"updated_at\":\"2020-04-11 19:02:30\"}', '192.168.0.150', '2020-04-11 19:02:30', NULL),
(202, 20, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"IAGO NOAH DRUMOND\",\"dt_nasc\":\"2005-07-12\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Cláudio Arthur Drumond\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:03:52\",\"updated_at\":\"2020-04-11 19:03:52\"}', '192.168.0.150', '2020-04-11 19:03:52', NULL),
(203, 20, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"707.283.945-37\",\"rg\":\"19.287.963-7\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"20\",\"created_at\":\"2020-04-11 19:03:52\",\"updated_at\":\"2020-04-11 19:03:52\"}', '192.168.0.150', '2020-04-11 19:03:52', NULL),
(204, 20, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"70.306-970\",\"logradouro\":\"SCS Quadra 6 Bloco A Loja 246\",\"numero\":\"193\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"20\",\"descricao\":\"casa da avó\",\"created_at\":\"2020-04-11 19:04:28\",\"updated_at\":\"2020-04-11 19:04:28\"}', '192.168.0.150', '2020-04-11 19:04:28', NULL),
(205, 20, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:03:52\"}', '{\"updated_at\":\"2020-04-11 19:04:31\"}', '192.168.0.150', '2020-04-11 19:04:31', NULL),
(206, 20, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:03:52\"}', '{\"updated_at\":\"2020-04-11 19:04:31\"}', '192.168.0.150', '2020-04-11 19:04:31', NULL),
(207, 37, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(61) 9 9351-5812\",\"adolescente_id\":\"20\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:04:44\",\"updated_at\":\"2020-04-11 19:04:44\"}', '192.168.0.150', '2020-04-11 19:04:44', NULL),
(208, 38, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"iagonoahdrumond..iagonoahdrumond@clubedorei.com.br\",\"adolescente_id\":\"20\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:05:00\",\"updated_at\":\"2020-04-11 19:05:00\"}', '192.168.0.150', '2020-04-11 19:05:00', NULL),
(209, 20, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:04:31\"}', '{\"updated_at\":\"2020-04-11 19:05:05\"}', '192.168.0.150', '2020-04-11 19:05:05', NULL),
(210, 20, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:04:31\"}', '{\"updated_at\":\"2020-04-11 19:05:05\"}', '192.168.0.150', '2020-04-11 19:05:05', NULL),
(211, 20, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:05:05\"}', '{\"updated_at\":\"2020-04-11 19:05:47\"}', '192.168.0.150', '2020-04-11 19:05:47', NULL),
(212, 20, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:05:05\"}', '{\"updated_at\":\"2020-04-11 19:05:47\"}', '192.168.0.150', '2020-04-11 19:05:47', NULL),
(213, 21, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"MÁRIO GUSTAVO CAUÊ APARÍCIO\",\"dt_nasc\":\"2006-06-09\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Bento Thomas Aparício\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:07:27\",\"updated_at\":\"2020-04-11 19:07:27\"}', '192.168.0.150', '2020-04-11 19:07:27', NULL),
(214, 21, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"674.481.558-06\",\"rg\":\"22.172.041-8\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"21\",\"created_at\":\"2020-04-11 19:07:27\",\"updated_at\":\"2020-04-11 19:07:27\"}', '192.168.0.150', '2020-04-11 19:07:27', NULL),
(215, 21, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"49.085-400\",\"logradouro\":\"Travessa Serigy\",\"numero\":\"560\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"21\",\"descricao\":\"casa do pai\",\"created_at\":\"2020-04-11 19:08:19\",\"updated_at\":\"2020-04-11 19:08:19\"}', '192.168.0.150', '2020-04-11 19:08:19', NULL),
(216, 39, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(79) 9 8750-2127\",\"adolescente_id\":\"21\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:08:28\",\"updated_at\":\"2020-04-11 19:08:28\"}', '192.168.0.150', '2020-04-11 19:08:28', NULL),
(217, 40, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"mariogustavocaueaparicio__mariogustavocaueaparicio@mectron.com.br\",\"adolescente_id\":\"21\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:08:39\",\"updated_at\":\"2020-04-11 19:08:39\"}', '192.168.0.150', '2020-04-11 19:08:39', NULL),
(218, 21, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:07:27\"}', '{\"updated_at\":\"2020-04-11 19:08:41\"}', '192.168.0.150', '2020-04-11 19:08:41', NULL),
(219, 21, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:07:27\"}', '{\"updated_at\":\"2020-04-11 19:08:41\"}', '192.168.0.150', '2020-04-11 19:08:41', NULL),
(220, 22, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"ANDREIA MALU ANDREA MELO\",\"dt_nasc\":\"2006-10-13\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Gabriel Daniel Ruan Melo\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:10:45\",\"updated_at\":\"2020-04-11 19:10:45\"}', '192.168.0.150', '2020-04-11 19:10:45', NULL),
(221, 22, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"152.645.316-92\",\"rg\":\"37.438.777-1\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"22\",\"created_at\":\"2020-04-11 19:10:45\",\"updated_at\":\"2020-04-11 19:10:45\"}', '192.168.0.150', '2020-04-11 19:10:45', NULL),
(222, 22, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"73.086-230\",\"logradouro\":\"Quadra Quadra 4\",\"numero\":\"949\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"22\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 19:11:45\",\"updated_at\":\"2020-04-11 19:11:45\"}', '192.168.0.150', '2020-04-11 19:11:45', NULL),
(223, 41, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(61) 9 8127-2220\",\"adolescente_id\":\"22\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:12:07\",\"updated_at\":\"2020-04-11 19:12:07\"}', '192.168.0.150', '2020-04-11 19:12:07', NULL),
(224, 42, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"aandreiamaluandreamelo@moppe.com.br\",\"adolescente_id\":\"22\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:12:24\",\"updated_at\":\"2020-04-11 19:12:24\"}', '192.168.0.150', '2020-04-11 19:12:24', NULL),
(225, 22, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:10:45\"}', '{\"updated_at\":\"2020-04-11 19:12:29\"}', '192.168.0.150', '2020-04-11 19:12:30', NULL),
(226, 22, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:10:45\"}', '{\"updated_at\":\"2020-04-11 19:12:30\"}', '192.168.0.150', '2020-04-11 19:12:30', NULL),
(227, 22, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:12:29\"}', '{\"updated_at\":\"2020-04-11 19:13:31\"}', '192.168.0.150', '2020-04-11 19:13:31', NULL),
(228, 22, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:12:30\"}', '{\"updated_at\":\"2020-04-11 19:13:31\"}', '192.168.0.150', '2020-04-11 19:13:31', NULL),
(229, 23, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"DANIEL ERICK DA COSTA\",\"dt_nasc\":\"2006-06-22\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Elias Roberto da Costa\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:14:30\",\"updated_at\":\"2020-04-11 19:14:30\"}', '192.168.0.150', '2020-04-11 19:14:30', NULL),
(230, 23, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"922.156.241-75\",\"rg\":\"19.917.324-2\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"23\",\"created_at\":\"2020-04-11 19:14:30\",\"updated_at\":\"2020-04-11 19:14:30\"}', '192.168.0.150', '2020-04-11 19:14:30', NULL),
(231, 23, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"76.961-838\",\"logradouro\":\"Rua Antônio Moreira Lima\",\"numero\":\"807\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"23\",\"descricao\":\"casa da mae\",\"created_at\":\"2020-04-11 19:15:06\",\"updated_at\":\"2020-04-11 19:15:06\"}', '192.168.0.150', '2020-04-11 19:15:06', NULL),
(232, 43, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(69) 9 9820-9411\",\"adolescente_id\":\"23\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:15:21\",\"updated_at\":\"2020-04-11 19:15:21\"}', '192.168.0.150', '2020-04-11 19:15:21', NULL),
(233, 44, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"ddanielerickdacosta@leiloesjudiciais.com.br\",\"adolescente_id\":\"23\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:15:33\",\"updated_at\":\"2020-04-11 19:15:33\"}', '192.168.0.150', '2020-04-11 19:15:33', NULL),
(234, 23, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:14:30\"}', '{\"updated_at\":\"2020-04-11 19:15:36\"}', '192.168.0.150', '2020-04-11 19:15:36', NULL),
(235, 23, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:14:30\"}', '{\"updated_at\":\"2020-04-11 19:15:36\"}', '192.168.0.150', '2020-04-11 19:15:36', NULL),
(236, 24, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"SEBASTIÃO GABRIEL RAMOS\",\"dt_nasc\":\"2005-12-04\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Nelson Nicolas Calebe Ramos\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:16:41\",\"updated_at\":\"2020-04-11 19:16:41\"}', '192.168.0.150', '2020-04-11 19:16:41', NULL),
(237, 24, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"999.537.039-57\",\"rg\":\"25.704.836-4\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"24\",\"created_at\":\"2020-04-11 19:16:41\",\"updated_at\":\"2020-04-11 19:16:41\"}', '192.168.0.150', '2020-04-11 19:16:41', NULL),
(238, 24, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:16:41\"}', '{\"updated_at\":\"2020-04-11 19:16:54\"}', '192.168.0.150', '2020-04-11 19:16:54', NULL),
(239, 24, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:16:41\"}', '{\"updated_at\":\"2020-04-11 19:16:54\"}', '192.168.0.150', '2020-04-11 19:16:54', NULL),
(240, 24, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"88.372-662\",\"logradouro\":\"Rua Fernando d\'Ávila Vieira\",\"numero\":\"997\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"24\",\"descricao\":\"casa do pai\",\"created_at\":\"2020-04-11 19:17:42\",\"updated_at\":\"2020-04-11 19:17:42\"}', '192.168.0.150', '2020-04-11 19:17:42', NULL),
(241, 45, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(49) 9 8103-3498\",\"adolescente_id\":\"24\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:19:31\",\"updated_at\":\"2020-04-11 19:19:31\"}', '192.168.0.150', '2020-04-11 19:19:31', NULL),
(242, 46, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"sebastiaogabrielramos..sebastiaogabrielramos@macaubas.com\",\"adolescente_id\":\"24\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:19:45\",\"updated_at\":\"2020-04-11 19:19:45\"}', '192.168.0.150', '2020-04-11 19:19:45', NULL),
(243, 25, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"MELISSA SABRINA AURORA FIGUEIREDO\",\"dt_nasc\":\"2006-07-13\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Hadassa Giovanna\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:21:19\",\"updated_at\":\"2020-04-11 19:21:19\"}', '192.168.0.150', '2020-04-11 19:21:19', NULL),
(244, 25, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"578.554.685-01\",\"rg\":\"25.319.464-7\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"25\",\"created_at\":\"2020-04-11 19:21:19\",\"updated_at\":\"2020-04-11 19:21:19\"}', '192.168.0.150', '2020-04-11 19:21:19', NULL),
(245, 25, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"74.989-010\",\"logradouro\":\"Rua Agenor Lopes Cansado Filho\",\"numero\":\"831\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"25\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 19:22:06\",\"updated_at\":\"2020-04-11 19:22:06\"}', '192.168.0.150', '2020-04-11 19:22:06', NULL),
(246, 47, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(62) 9 9683-6368\",\"adolescente_id\":\"25\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:22:31\",\"updated_at\":\"2020-04-11 19:22:31\"}', '192.168.0.150', '2020-04-11 19:22:31', NULL),
(247, 48, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"melissasabrinaaurorafigueiredo..melissasabrinaaurorafigueiredo@cntbrasil.com.br\",\"adolescente_id\":\"25\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:22:44\",\"updated_at\":\"2020-04-11 19:22:44\"}', '192.168.0.150', '2020-04-11 19:22:44', NULL),
(248, 25, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:21:19\"}', '{\"updated_at\":\"2020-04-11 19:22:45\"}', '192.168.0.150', '2020-04-11 19:22:45', NULL),
(249, 25, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:21:19\"}', '{\"updated_at\":\"2020-04-11 19:22:45\"}', '192.168.0.150', '2020-04-11 19:22:45', NULL),
(250, 26, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"ISIS TEREZA ALINE DA ROCHA\",\"dt_nasc\":\"2006-07-20\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Diego Augusto Márcio da Rocha\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:25:46\",\"updated_at\":\"2020-04-11 19:25:46\"}', '192.168.0.150', '2020-04-11 19:25:46', NULL),
(251, 26, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"076.246.876-90\",\"rg\":\"38.273.247-9\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"26\",\"created_at\":\"2020-04-11 19:25:47\",\"updated_at\":\"2020-04-11 19:25:47\"}', '192.168.0.150', '2020-04-11 19:25:47', NULL),
(252, 26, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"86.010-660\",\"logradouro\":\"Rua Bartolomeu Bueno\",\"numero\":\"820\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"26\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 19:26:34\",\"updated_at\":\"2020-04-11 19:26:34\"}', '192.168.0.150', '2020-04-11 19:26:34', NULL),
(253, 49, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(43) 9 9825-6824\",\"adolescente_id\":\"26\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:26:43\",\"updated_at\":\"2020-04-11 19:26:43\"}', '192.168.0.150', '2020-04-11 19:26:43', NULL),
(254, 50, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"iisisterezaalinedarocha@apso.org.br\",\"adolescente_id\":\"26\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:27:02\",\"updated_at\":\"2020-04-11 19:27:02\"}', '192.168.0.150', '2020-04-11 19:27:02', NULL),
(255, 27, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"AGATHA PIETRA FOGAÇA\",\"dt_nasc\":\"2006-03-16\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Clara Regina\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:44:04\",\"updated_at\":\"2020-04-11 19:44:04\"}', '192.168.0.150', '2020-04-11 19:44:04', NULL),
(256, 27, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"934.175.532-88\",\"rg\":\"14.306.952-4\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"27\",\"created_at\":\"2020-04-11 19:44:04\",\"updated_at\":\"2020-04-11 19:44:04\"}', '192.168.0.150', '2020-04-11 19:44:04', NULL),
(257, 27, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"13.052-474\",\"logradouro\":\"Rua Barra do Turvo\",\"numero\":\"226\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"27\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 19:44:44\",\"updated_at\":\"2020-04-11 19:44:44\"}', '192.168.0.150', '2020-04-11 19:44:44', NULL),
(258, 51, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(19) 9 8941-8771\",\"adolescente_id\":\"27\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:45:24\",\"updated_at\":\"2020-04-11 19:45:24\"}', '192.168.0.150', '2020-04-11 19:45:24', NULL),
(259, 52, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"agathapietrafogaca_@effem.com\",\"adolescente_id\":\"27\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:45:36\",\"updated_at\":\"2020-04-11 19:45:36\"}', '192.168.0.150', '2020-04-11 19:45:36', NULL),
(260, 27, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:44:04\"}', '{\"updated_at\":\"2020-04-11 19:45:40\"}', '192.168.0.150', '2020-04-11 19:45:40', NULL),
(261, 27, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:44:04\"}', '{\"updated_at\":\"2020-04-11 19:45:40\"}', '192.168.0.150', '2020-04-11 19:45:40', NULL),
(262, 28, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"AUGUSTO FILIPE MARCELO VIEIRA\",\"dt_nasc\":\"2006-02-23\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Calebe Diogo Julio Vieira\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:47:26\",\"updated_at\":\"2020-04-11 19:47:26\"}', '192.168.0.150', '2020-04-11 19:47:26', NULL),
(263, 28, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"932.777.912-62\",\"rg\":\"16.303.534-9\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"28\",\"created_at\":\"2020-04-11 19:47:26\",\"updated_at\":\"2020-04-11 19:47:26\"}', '192.168.0.150', '2020-04-11 19:47:26', NULL),
(264, 28, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"79.006-210\",\"logradouro\":\"Praça São Marcos\",\"numero\":\"346\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"28\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 19:48:00\",\"updated_at\":\"2020-04-11 19:48:00\"}', '192.168.0.150', '2020-04-11 19:48:00', NULL),
(265, 53, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(67) 9 9481-2493\",\"adolescente_id\":\"28\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:48:12\",\"updated_at\":\"2020-04-11 19:48:12\"}', '192.168.0.150', '2020-04-11 19:48:12', NULL),
(266, 54, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"aaugustofilipemarcelovieira@locare-eventos.com.br\",\"adolescente_id\":\"28\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:48:21\",\"updated_at\":\"2020-04-11 19:48:21\"}', '192.168.0.150', '2020-04-11 19:48:21', NULL),
(267, 28, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:47:26\"}', '{\"updated_at\":\"2020-04-11 19:48:24\"}', '192.168.0.150', '2020-04-11 19:48:24', NULL),
(268, 28, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:47:26\"}', '{\"updated_at\":\"2020-04-11 19:48:24\"}', '192.168.0.150', '2020-04-11 19:48:24', NULL),
(269, 29, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"ANTONIO CARLOS CALEBE MARTINS\",\"dt_nasc\":\"2006-07-13\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Raimundo Pedro Martins\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:50:03\",\"updated_at\":\"2020-04-11 19:50:03\"}', '192.168.0.150', '2020-04-11 19:50:03', NULL),
(270, 29, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"201.041.757-70\",\"rg\":\"29.805.256-8\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"29\",\"created_at\":\"2020-04-11 19:50:03\",\"updated_at\":\"2020-04-11 19:50:03\"}', '192.168.0.150', '2020-04-11 19:50:03', NULL),
(271, 29, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"51.190-510\",\"logradouro\":\"Rua Martins Pena\",\"numero\":\"927\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"29\",\"descricao\":\"casa da mae\",\"created_at\":\"2020-04-11 19:50:33\",\"updated_at\":\"2020-04-11 19:50:33\"}', '192.168.0.150', '2020-04-11 19:50:33', NULL),
(272, 55, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(81) 9 8279-4615\",\"adolescente_id\":\"29\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:50:41\",\"updated_at\":\"2020-04-11 19:50:41\"}', '192.168.0.150', '2020-04-11 19:50:41', NULL),
(273, 56, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"aantoniocarloscalebemartins@gimail.com\",\"adolescente_id\":\"29\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:50:52\",\"updated_at\":\"2020-04-11 19:50:52\"}', '192.168.0.150', '2020-04-11 19:50:52', NULL),
(274, 29, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:50:03\"}', '{\"updated_at\":\"2020-04-11 19:50:54\"}', '192.168.0.150', '2020-04-11 19:50:54', NULL),
(275, 29, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:50:03\"}', '{\"updated_at\":\"2020-04-11 19:50:54\"}', '192.168.0.150', '2020-04-11 19:50:54', NULL),
(276, 30, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"CARLA BIANCA ALVES\",\"dt_nasc\":\"2005-12-16\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Jéssica Manuela\",\"obs\":\"\",\"created_at\":\"2020-04-11 19:51:43\",\"updated_at\":\"2020-04-11 19:51:43\"}', '192.168.0.150', '2020-04-11 19:51:43', NULL),
(277, 30, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"056.022.260-28\",\"rg\":\"35.074.852-4\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"30\",\"created_at\":\"2020-04-11 19:51:43\",\"updated_at\":\"2020-04-11 19:51:43\"}', '192.168.0.150', '2020-04-11 19:51:43', NULL),
(278, 57, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"C\",\"contato\":\"(27) 9 8987-5993\",\"adolescente_id\":\"30\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:52:00\",\"updated_at\":\"2020-04-11 19:52:00\"}', '192.168.0.150', '2020-04-11 19:52:00', NULL),
(279, 58, 'contatos', 'C', 1, NULL, '{\"id_contato\":\"\",\"tipo_cont\":\"E\",\"contato\":\"carlabiancaalves__carlabiancaalves@zipmail.com\",\"adolescente_id\":\"30\",\"ativo\":1,\"descricao\":\"\",\"created_at\":\"2020-04-11 19:52:10\",\"updated_at\":\"2020-04-11 19:52:10\"}', '192.168.0.150', '2020-04-11 19:52:10', NULL),
(280, 30, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:51:43\"}', '{\"updated_at\":\"2020-04-11 19:52:12\"}', '192.168.0.150', '2020-04-11 19:52:12', NULL),
(281, 30, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:51:43\"}', '{\"updated_at\":\"2020-04-11 19:52:12\"}', '192.168.0.150', '2020-04-11 19:52:12', NULL),
(282, 30, 'enderecos', 'C', 1, NULL, '{\"id_endereco\":\"\",\"cep\":\"29.145-290\",\"logradouro\":\"Rua Rosa Paula Paulina\",\"numero\":\"669\",\"bairro\":\"\",\"estado\":\"SP\",\"cidade\":\"\",\"complemento\":\"\",\"referencia\":\"\",\"dt_mudanca\":null,\"motivo\":null,\"adolescente_id\":\"30\",\"descricao\":\"Casa do pai\",\"created_at\":\"2020-04-11 19:52:35\",\"updated_at\":\"2020-04-11 19:52:35\"}', '192.168.0.150', '2020-04-11 19:52:35', NULL),
(283, 30, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-11 19:52:12\"}', '{\"updated_at\":\"2020-04-11 19:52:37\"}', '192.168.0.150', '2020-04-11 19:52:37', NULL),
(284, 30, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-11 19:52:12\"}', '{\"updated_at\":\"2020-04-11 19:52:37\"}', '192.168.0.150', '2020-04-11 19:52:37', NULL),
(285, 1, 'adolescentes', 'U', 1, '{\"updated_at\":\"2020-04-09 23:08:14\"}', '{\"updated_at\":\"2020-04-11 21:28:10\"}', '127.0.0.1', '2020-04-11 21:28:10', NULL),
(286, 1, 'documentos', 'U', 1, '{\"updated_at\":\"2020-04-09 23:08:14\"}', '{\"updated_at\":\"2020-04-11 21:28:11\"}', '127.0.0.1', '2020-04-11 21:28:11', NULL),
(287, 8, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"1\",\"data_inicio\":\"2020-04-13\",\"data_recepcao\":\"2020-04-13\",\"created_at\":\"2020-04-13 18:45:52\",\"updated_at\":\"2020-04-13 18:45:52\"}', '127.0.0.1', '2020-04-13 18:45:52', NULL),
(288, 8, 'pias', 'U', 1, '{\"data_recepcao\":\"2020-04-13\",\"numero_processo\":null,\"ato_infracional\":null,\"updated_at\":\"2020-04-13\"}', '{\"data_recepcao\":\"2020-04-06\",\"numero_processo\":\"1234\",\"ato_infracional\":\"Roubo\",\"updated_at\":\"2020-04-13 19:46:05\"}', '127.0.0.1', '2020-04-13 19:46:05', NULL),
(289, 8, 'pias', 'U', 1, '{\"ass_juridico\":\"1\",\"medida_aplicada\":\"1\",\"updated_at\":\"2020-04-13\"}', '{\"ass_juridico\":\"2\",\"medida_aplicada\":\"2\",\"updated_at\":\"2020-04-13 19:54:00\"}', '127.0.0.1', '2020-04-13 19:54:00', NULL),
(290, 8, 'pias', 'U', 1, '{\"outros_processos\":\"\",\"updated_at\":\"2020-04-13\"}', '{\"outros_processos\":\"teste\",\"updated_at\":\"2020-04-13 19:54:20\"}', '127.0.0.1', '2020-04-13 19:54:20', NULL),
(291, 8, 'pias', 'U', 1, '{\"updated_at\":\"2020-04-13\"}', '{\"updated_at\":\"2020-04-13 19:54:47\"}', '127.0.0.1', '2020-04-13 19:54:47', NULL),
(292, 1, 'situacao_habitacional', 'C', 1, NULL, '{\"endereco_id\":\"1\",\"agua\":0,\"esgoto\":0,\"energia\":0,\"pavimento\":0,\"coleta_lixo\":0,\"tipo\":\"2\",\"situacao\":\"2\",\"valor\":\"1500.00\",\"qtde_comodos\":\"\",\"qtde_pessoas\":\"\",\"espaco\":\"\",\"obs\":\"\",\"created_at\":\"2020-04-13 20:02:49\",\"updated_at\":\"2020-04-13 20:02:49\"}', '127.0.0.1', '2020-04-13 20:02:49', NULL),
(293, 1, 'situacao_habitacional', 'U', 1, '{\"valor\":\"1500.00\",\"obs\":\"\",\"updated_at\":\"2020-04-13 20:02:49\"}', '{\"valor\":\"15000.00\",\"obs\":\"<p>Nome da <strong>monica<\\/strong><\\/p>\\r\\n\",\"updated_at\":\"2020-04-13 20:03:14\"}', '127.0.0.1', '2020-04-13 20:03:14', NULL),
(294, 8, 'pias', 'U', 1, '{\"motivacao\":\"\",\"reflexao\":\"\",\"updated_at\":\"2020-04-13\"}', '{\"motivacao\":\"<p>A <u>vontade <\\/u>de ter <strong>tudo<\\/strong><\\/p>\\n\",\"reflexao\":\"<p>teste<\\/p>\\n\",\"updated_at\":\"2020-04-13 20:19:27\"}', '127.0.0.1', '2020-04-13 20:19:27', NULL),
(295, 31, 'adolescentes', 'C', 1, NULL, '{\"id_adolescente\":\"\",\"nome\":\"JOSE ANTONIO ZENATTI\",\"dt_nasc\":\"1988-02-25\",\"sexo\":\"M\",\"estado_civil\":\"S\",\"natural\":\"Itapui\",\"responsavel\":\"Carmelinda\",\"obs\":\"\",\"created_at\":\"2020-04-13 21:50:03\",\"updated_at\":\"2020-04-13 21:50:03\"}', '127.0.0.1', '2020-04-13 21:50:03', NULL),
(296, 31, 'documentos', 'C', 1, NULL, '{\"id_documento\":\"\",\"cert_nasc\":\"\",\"cert_livro\":\"\",\"cert_folhas\":\"\",\"bairro_cartorio\":\"\",\"cert_cartorio\":\"\",\"municipio_cartorio\":\"\",\"cpf\":\"\",\"rg\":\"1\",\"rg_emissao\":null,\"ctps\":\"\",\"ctps_serie\":\"\",\"titulo_eleitor\":\"\",\"te_secao\":\"\",\"te_zona\":\"\",\"pis\":\"\",\"cartao_sus\":\"\",\"cam\":\"\",\"cdi_cr\":\"\",\"adolescente_id\":\"31\",\"created_at\":\"2020-04-13 21:50:03\",\"updated_at\":\"2020-04-13 21:50:03\"}', '127.0.0.1', '2020-04-13 21:50:03', NULL),
(297, 1, 'adolescentes', 'D', 1, '{\"id_adolescente\":\"1\",\"nome\":\"MONICA MEDEIROS\",\"nome_tratamento\":null,\"dt_nasc\":\"1997-12-24\",\"sexo\":\"F\",\"estado_civil\":\"S\",\"natural\":\"\",\"responsavel\":\"Meire Medeiros Nascimento\",\"obs\":\"\",\"created_at\":\"2020-04-08 21:40:23\",\"updated_at\":\"2020-04-11 21:28:10\",\"deleted_at\":null}', '{\"deleted_at\":\"2020-04-15 15:56:28\"}', '127.0.0.1', '2020-04-15 15:56:28', NULL),
(298, 9, 'pias', 'C', 1, NULL, '{\"adolescente_id\":\"28\",\"data_inicio\":\"2020-04-28\",\"data_recepcao\":\"2020-04-28\",\"created_at\":\"2020-04-28 21:10:30\",\"updated_at\":\"2020-04-28 21:10:30\"}', '127.0.0.1', '2020-04-28 21:10:30', NULL),
(299, 9, 'pias', 'U', 1, '{\"ass_juridico\":null,\"ato_infracional\":null,\"updated_at\":\"2020-04-28\"}', '{\"ass_juridico\":\"2\",\"ato_infracional\":\"sdsd\",\"updated_at\":\"2020-04-28 21:10:44\"}', '127.0.0.1', '2020-04-28 21:10:44', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `beneficios_familias`
--

CREATE TABLE `beneficios_familias` (
  `id_beneficio_familia` bigint(20) UNSIGNED NOT NULL,
  `grupo_familiar_id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `valor` decimal(12,2) DEFAULT NULL,
  `ativo` binary(1) DEFAULT '1',
  `motivo` varchar(191) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `nome`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'Administrador do Sistema', '2020-04-02 20:50:13', '2020-04-02 20:50:13', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao_familiar`
--

CREATE TABLE `composicao_familiar` (
  `id_cf` bigint(20) UNSIGNED NOT NULL,
  `grupo_familiar_id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) NOT NULL,
  `parentesco` tinyint(4) NOT NULL COMMENT '(Própria / Mãe / Pai / Madastra / Padastro / Irmã(o) / Avó(Avo) / Tia(o) / Prima(o) / Outros)',
  `dt_nasc` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `escolaridade` tinyint(4) DEFAULT NULL COMMENT '(Sem idade escolar, Creche, Pré-Escola, Ensino Fundamental, Ensino Médio, Ensino Fundamental EJA, Ensino Médio EJA, Alfabetização para Adultos, Superior/Aperfeiçoamento/Especialização/Doutorado, Nunca Frequentou mas le e escreve, Não sabe ler e escrever)',
  `formacao_profissional` varchar(191) DEFAULT NULL,
  `ocupacao` tinyint(4) DEFAULT NULL COMMENT '(Não Trabalha, Autônomo Formal, Autônomo Informal, Rural, Empregado sem Carteira, Empregado com Carteira, Doméstico, Trabalhador não remunerado, Militar ou Servidor Público)',
  `renda` decimal(12,2) DEFAULT NULL,
  `telefones` varchar(191) DEFAULT NULL,
  `obs` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `composicao_familiar`
--

INSERT INTO `composicao_familiar` (`id_cf`, `grupo_familiar_id`, `nome`, `parentesco`, `dt_nasc`, `sexo`, `escolaridade`, `formacao_profissional`, `ocupacao`, `renda`, `telefones`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'JOEL RAIMUNDO', 2, '1950-01-01', 'M', 0, '', 0, '0.00', '', '', '2020-04-08 21:43:22', '2020-04-08 21:43:22', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id_contato` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `tipo_cont` char(1) DEFAULT NULL,
  `contato` varchar(191) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id_contato`, `adolescente_id`, `descricao`, `tipo_cont`, `contato`, `ativo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '', 'C', '(14) 9 8805-8563', 1, '2020-04-11 16:46:00', '2020-04-11 16:46:00', NULL),
(2, 2, '', 'C', '(14) 9 8157-5657', 1, '2020-04-11 17:19:01', '2020-04-11 17:19:01', NULL),
(3, 2, '', 'E', 'ronanzenatti@gmail.com', 1, '2020-04-11 17:19:31', '2020-04-11 17:19:31', NULL),
(4, 3, '', 'C', '(14) 9 8876-6544', 1, '2020-04-11 17:24:56', '2020-04-11 17:24:56', NULL),
(5, 3, '', 'E', 'alessandra@outlook.com', 1, '2020-04-11 17:25:17', '2020-04-11 17:25:17', NULL),
(6, 4, '', 'C', '(12) 8 7676-5432', 1, '2020-04-11 17:30:37', '2020-04-11 17:30:37', NULL),
(7, 4, '', 'E', 'alexander@gmail.com', 1, '2020-04-11 17:30:49', '2020-04-11 17:30:49', NULL),
(8, 5, '', 'C', '(62) 3 8646-9052', 1, '2020-04-11 17:34:08', '2020-04-11 17:34:08', NULL),
(9, 5, '', 'E', 'diogorenanrodrigues..diogorenanrodrigues@hotmailo.com', 1, '2020-04-11 17:34:32', '2020-04-11 17:34:32', NULL),
(10, 6, '', 'C', '(68) 2 8139-5029', 1, '2020-04-11 17:38:12', '2020-04-11 17:38:12', NULL),
(11, 6, '', 'E', 'jessicadanielacastro__jessicadanielacastro@mesquita.not.br', 1, '2020-04-11 17:38:31', '2020-04-11 17:38:31', NULL),
(12, 7, '', 'C', '(22) 9 8741-7215', 1, '2020-04-11 17:41:14', '2020-04-11 17:41:14', NULL),
(13, 7, '', 'E', 'danielastefanymoraes-77@redacaofinal.com.br', 1, '2020-04-11 17:41:25', '2020-04-11 17:41:25', NULL),
(14, 8, '', 'C', '(62) 3 7183-0515', 1, '2020-04-11 17:43:34', '2020-04-11 17:43:34', NULL),
(15, 8, '', 'E', 'simoneemillypeixoto__simoneemillypeixoto@cantinadafazenda.com.br', 1, '2020-04-11 17:43:47', '2020-04-11 17:43:47', NULL),
(16, 9, '', 'C', '(65) 9 8282-8424', 1, '2020-04-11 17:47:39', '2020-04-11 17:47:39', NULL),
(17, 9, '', 'E', 'oliviajulialaviniadepaula..oliviajulialaviniadepaula@dhl.com', 1, '2020-04-11 17:47:50', '2020-04-11 17:47:50', NULL),
(18, 10, '', 'C', '(81) 9 8540-8439', 1, '2020-04-11 18:14:09', '2020-04-11 18:14:09', NULL),
(19, 10, '', 'E', 'elianeisadoradaconceicao__elianeisadoradaconceicao@zipmail.com.br', 1, '2020-04-11 18:14:24', '2020-04-11 18:14:24', NULL),
(20, 11, '', 'C', '(63) 9 8895-9107', 1, '2020-04-11 18:17:14', '2020-04-11 18:17:14', NULL),
(21, 11, '', 'E', 'claudiovictorrocha-84@zipmail.com', 1, '2020-04-11 18:17:27', '2020-04-11 18:17:27', NULL),
(22, 12, '', 'C', '(95) 9 9686-8773', 1, '2020-04-11 18:19:32', '2020-04-11 18:19:32', NULL),
(23, 13, '', 'C', '(96) 9 9357-3144', 1, '2020-04-11 18:23:13', '2020-04-11 18:23:13', NULL),
(24, 13, '', 'E', 'sophieheloisacatarinasales__sophieheloisacatarinasales@riquefroes.com', 1, '2020-04-11 18:23:38', '2020-04-11 18:23:38', NULL),
(25, 14, '', 'C', '(82) 9 9650-5157', 1, '2020-04-11 18:25:47', '2020-04-11 18:25:47', NULL),
(26, 14, '', 'E', 'nicolasgaelfernandes..nicolasgaelfernandes@sandvik.com', 1, '2020-04-11 18:25:58', '2020-04-11 18:25:58', NULL),
(27, 15, '', 'C', '(98) 9 8569-9479', 1, '2020-04-11 18:31:18', '2020-04-11 18:31:18', NULL),
(28, 15, '', 'E', 'carolinalaurafernandajesus_@cotamtambores.com.br', 1, '2020-04-11 18:31:32', '2020-04-11 18:31:32', NULL),
(29, 16, '', 'C', '(64) 9 9563-8042', 1, '2020-04-11 18:34:43', '2020-04-11 18:34:43', NULL),
(30, 16, '', 'E', 'kevinraulfogaca..kevinraulfogaca@trincheira.com.br', 1, '2020-04-11 18:35:03', '2020-04-11 18:35:03', NULL),
(31, 17, '', 'C', '(48) 9 8390-7463', 1, '2020-04-11 18:49:11', '2020-04-11 18:49:11', NULL),
(32, 17, '', 'E', 'kkamillycamilanogueira@gradu.if.ufrj.br', 1, '2020-04-11 18:51:26', '2020-04-11 18:51:26', NULL),
(33, 18, '', 'C', '(82) 9 8251-3101', 1, '2020-04-11 18:58:55', '2020-04-11 18:58:55', NULL),
(34, 18, '', 'E', 'mayaclaudiagabrielaaparicio__mayaclaudiagabrielaaparicio@wikimetal.com.br', 1, '2020-04-11 18:59:10', '2020-04-11 18:59:10', NULL),
(35, 19, '', 'C', '(68) 9 9504-5461', 1, '2020-04-11 19:02:11', '2020-04-11 19:02:11', NULL),
(36, 19, '', 'E', 'liviadaianerocha__liviadaianerocha@lordello.com.br', 1, '2020-04-11 19:02:28', '2020-04-11 19:02:28', NULL),
(37, 20, '', 'C', '(61) 9 9351-5812', 1, '2020-04-11 19:04:44', '2020-04-11 19:04:44', NULL),
(38, 20, '', 'E', 'iagonoahdrumond..iagonoahdrumond@clubedorei.com.br', 1, '2020-04-11 19:05:00', '2020-04-11 19:05:00', NULL),
(39, 21, '', 'C', '(79) 9 8750-2127', 1, '2020-04-11 19:08:28', '2020-04-11 19:08:28', NULL),
(40, 21, '', 'E', 'mariogustavocaueaparicio__mariogustavocaueaparicio@mectron.com.br', 1, '2020-04-11 19:08:39', '2020-04-11 19:08:39', NULL),
(41, 22, '', 'C', '(61) 9 8127-2220', 1, '2020-04-11 19:12:07', '2020-04-11 19:12:07', NULL),
(42, 22, '', 'E', 'aandreiamaluandreamelo@moppe.com.br', 1, '2020-04-11 19:12:24', '2020-04-11 19:12:24', NULL),
(43, 23, '', 'C', '(69) 9 9820-9411', 1, '2020-04-11 19:15:21', '2020-04-11 19:15:21', NULL),
(44, 23, '', 'E', 'ddanielerickdacosta@leiloesjudiciais.com.br', 1, '2020-04-11 19:15:33', '2020-04-11 19:15:33', NULL),
(45, 24, '', 'C', '(49) 9 8103-3498', 1, '2020-04-11 19:19:31', '2020-04-11 19:19:31', NULL),
(46, 24, '', 'E', 'sebastiaogabrielramos..sebastiaogabrielramos@macaubas.com', 1, '2020-04-11 19:19:45', '2020-04-11 19:19:45', NULL),
(47, 25, '', 'C', '(62) 9 9683-6368', 1, '2020-04-11 19:22:31', '2020-04-11 19:22:31', NULL),
(48, 25, '', 'E', 'melissasabrinaaurorafigueiredo..melissasabrinaaurorafigueiredo@cntbrasil.com.br', 1, '2020-04-11 19:22:44', '2020-04-11 19:22:44', NULL),
(49, 26, '', 'C', '(43) 9 9825-6824', 1, '2020-04-11 19:26:43', '2020-04-11 19:26:43', NULL),
(50, 26, '', 'E', 'iisisterezaalinedarocha@apso.org.br', 1, '2020-04-11 19:27:02', '2020-04-11 19:27:02', NULL),
(51, 27, '', 'C', '(19) 9 8941-8771', 1, '2020-04-11 19:45:24', '2020-04-11 19:45:24', NULL),
(52, 27, '', 'E', 'agathapietrafogaca_@effem.com', 1, '2020-04-11 19:45:36', '2020-04-11 19:45:36', NULL),
(53, 28, '', 'C', '(67) 9 9481-2493', 1, '2020-04-11 19:48:12', '2020-04-11 19:48:12', NULL),
(54, 28, '', 'E', 'aaugustofilipemarcelovieira@locare-eventos.com.br', 1, '2020-04-11 19:48:21', '2020-04-11 19:48:21', NULL),
(55, 29, '', 'C', '(81) 9 8279-4615', 1, '2020-04-11 19:50:41', '2020-04-11 19:50:41', NULL),
(56, 29, '', 'E', 'aantoniocarloscalebemartins@gimail.com', 1, '2020-04-11 19:50:52', '2020-04-11 19:50:52', NULL),
(57, 30, '', 'C', '(27) 9 8987-5993', 1, '2020-04-11 19:52:00', '2020-04-11 19:52:00', NULL),
(58, 30, '', 'E', 'carlabiancaalves__carlabiancaalves@zipmail.com', 1, '2020-04-11 19:52:10', '2020-04-11 19:52:10', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) DEFAULT NULL,
  `instituicao` varchar(191) DEFAULT NULL,
  `conclusao` year(4) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `cert_nasc` int(11) DEFAULT NULL,
  `cert_livro` varchar(10) DEFAULT NULL,
  `cert_folhas` varchar(15) DEFAULT NULL,
  `cert_cartorio` varchar(150) DEFAULT NULL,
  `bairro_cartorio` varchar(50) DEFAULT NULL,
  `municipio_cartorio` varchar(50) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `rg_emissao` date DEFAULT NULL,
  `ctps` int(11) DEFAULT NULL,
  `ctps_serie` varchar(15) DEFAULT NULL,
  `pis` varchar(45) DEFAULT NULL,
  `titulo_eleitor` varchar(20) DEFAULT NULL,
  `te_secao` int(11) DEFAULT NULL,
  `te_zona` int(11) DEFAULT NULL,
  `cam` varchar(20) DEFAULT NULL,
  `cdi_cr` varchar(20) DEFAULT NULL,
  `cartao_sus` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`id_documento`, `adolescente_id`, `cert_nasc`, `cert_livro`, `cert_folhas`, `cert_cartorio`, `bairro_cartorio`, `municipio_cartorio`, `cpf`, `rg`, `rg_emissao`, `ctps`, `ctps_serie`, `pis`, `titulo_eleitor`, `te_secao`, `te_zona`, `cam`, `cdi_cr`, `cartao_sus`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 0, '', '', '', '', '', '355.906.478-79', '41.324.990-6', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-08 21:40:23', '2020-04-11 21:28:11', NULL),
(2, 2, 0, '', '', '', '', '', '355.936.478-79', '504243378', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 17:16:16', '2020-04-11 17:19:37', NULL),
(3, 3, 0, '', '', '', '', '', '837.843.010-37', '6575756677', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 17:24:07', '2020-04-11 17:26:30', NULL),
(4, 4, 0, '', '', '', '', '', '555.392.900-89', '45037687422', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 17:29:40', '2020-04-11 17:30:51', NULL),
(5, 5, 0, '', '', '', '', '', '086.191.652-24', '45.359.604-6', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 17:32:17', '2020-04-11 17:34:36', NULL),
(6, 6, 0, '', '', '', '', '', '409.767.157-08', '46.735.779-1', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 17:36:21', '2020-04-11 18:10:52', NULL),
(7, 7, 0, '', '', '', '', '', '565.988.037-13', '14.169.632-1', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 17:40:31', '2020-04-11 17:49:20', NULL),
(8, 8, 0, '', '', '', '', '', '243.486.523-25', '32.402.450-2', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 17:42:21', '2020-04-11 17:48:51', NULL),
(9, 9, 0, '', '', '', '', '', '699.690.605-97', '13.673.847-3', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 17:46:16', '2020-04-11 17:48:00', NULL),
(10, 10, 0, '', '', '', '', '', '555.704.704-25', '48.257.068-4', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:12:32', '2020-04-11 18:14:27', NULL),
(11, 11, 0, '', '', '', '', '', '637.565.588-94', '34.973.283-8', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:16:14', '2020-04-11 18:17:30', NULL),
(12, 12, 0, '', '', '', '', '', '812.654.763-49', '36.378.854-2', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:18:55', '2020-04-11 18:20:13', NULL),
(13, 13, 0, '', '', '', '', '', '183.171.156-74', '10.981.460-5', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:21:31', '2020-04-11 18:23:41', NULL),
(14, 14, 0, '', '', '', '', '', '411.676.964-92', '44.214.221-3', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:25:01', '2020-04-11 18:26:00', NULL),
(15, 15, 0, '', '', '', '', '', '061.160.326-80', '11.750.162-1', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:28:13', '2020-04-11 18:31:34', NULL),
(16, 16, 0, '', '', '', '', '', '929.085.510-04', '31.818.855-7', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:33:39', '2020-04-11 18:35:14', NULL),
(17, 17, 0, '', '', '', '', '', '655.587.025-75', '10.936.212-3', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:47:54', '2020-04-11 18:51:29', NULL),
(18, 18, 0, '', '', '', '', '', '940.918.741-93', '30.703.674-1', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 18:56:30', '2020-04-11 18:59:12', NULL),
(19, 19, 0, '', '', '', '', '', '374.727.058-10', '22.986.757-1', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:00:30', '2020-04-11 19:02:30', NULL),
(20, 20, 0, '', '', '', '', '', '707.283.945-37', '19.287.963-7', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:03:52', '2020-04-11 19:05:47', NULL),
(21, 21, 0, '', '', '', '', '', '674.481.558-06', '22.172.041-8', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:07:27', '2020-04-11 19:08:41', NULL),
(22, 22, 0, '', '', '', '', '', '152.645.316-92', '37.438.777-1', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:10:45', '2020-04-11 19:13:31', NULL),
(23, 23, 0, '', '', '', '', '', '922.156.241-75', '19.917.324-2', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:14:30', '2020-04-11 19:15:36', NULL),
(24, 24, 0, '', '', '', '', '', '999.537.039-57', '25.704.836-4', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:16:41', '2020-04-11 19:16:54', NULL),
(25, 25, 0, '', '', '', '', '', '578.554.685-01', '25.319.464-7', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:21:19', '2020-04-11 19:22:45', NULL),
(26, 26, 0, '', '', '', '', '', '076.246.876-90', '38.273.247-9', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:25:47', '2020-04-11 19:25:47', NULL),
(27, 27, 0, '', '', '', '', '', '934.175.532-88', '14.306.952-4', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:44:04', '2020-04-11 19:45:40', NULL),
(28, 28, 0, '', '', '', '', '', '932.777.912-62', '16.303.534-9', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:47:26', '2020-04-11 19:48:24', NULL),
(29, 29, 0, '', '', '', '', '', '201.041.757-70', '29.805.256-8', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:50:03', '2020-04-11 19:50:54', NULL),
(30, 30, 0, '', '', '', '', '', '056.022.260-28', '35.074.852-4', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-11 19:51:43', '2020-04-11 19:52:37', NULL),
(31, 31, 0, '', '', '', '', '', '', '1', NULL, 0, '', '', '', 0, 0, '', '', 0, '2020-04-13 21:50:03', '2020-04-13 21:50:03', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `encaminhamentos`
--

CREATE TABLE `encaminhamentos` (
  `id_encaminhamento` bigint(20) UNSIGNED NOT NULL,
  `pia_id` bigint(20) UNSIGNED NOT NULL,
  `entidade_id` bigint(20) UNSIGNED NOT NULL,
  `parte_pia` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `data_limite` date DEFAULT NULL,
  `data_envio` datetime DEFAULT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_endereco` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `logradouro` varchar(150) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `dt_mudanca` date DEFAULT NULL,
  `motivo` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `adolescente_id`, `descricao`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `referencia`, `dt_mudanca`, `motivo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Genitores', 'Rua Leandro Reginato', '42', '', 'Jd. das Orquideas', 'Barra Bonita', 'SP', '17.340-000', '', NULL, NULL, '2020-04-11 16:45:20', '2020-04-11 16:45:20', NULL),
(2, 2, 'Casa do pai', 'Rua dos lavradores', '302', '', '', 'Boracéia', 'SP', '17.270-032', '', NULL, NULL, '2020-04-11 17:18:04', '2020-04-11 17:18:04', NULL),
(3, 3, 'Casa do pai', 'Rua 3 de maio', '32', '', '', '', 'SP', '15.346-888', '', NULL, NULL, '2020-04-11 17:24:39', '2020-04-11 17:24:39', NULL),
(4, 4, 'Casa da Mae', 'Primeiro de Marco', '222', '', '', '', 'SP', '13.434-665', '', NULL, NULL, '2020-04-11 17:30:21', '2020-04-11 17:30:21', NULL),
(5, 5, 'Casa da mae', 'Rua S-064', '685', '', 'Anápolis City', 'Anápolis', 'SP', '75.096-270', '', NULL, NULL, '2020-04-11 17:33:38', '2020-04-11 17:33:38', NULL),
(6, 6, 'Casa do pai', 'Rua São Pedro', '939', '', '', '', 'SP', '69.905-229', '', NULL, NULL, '2020-04-11 17:37:10', '2020-04-11 17:37:10', NULL),
(7, 7, 'Casa da mae', 'Rua A -João Paulo', '973', '', '', '', 'SP', '28.040-200', '', NULL, NULL, '2020-04-11 17:41:02', '2020-04-11 17:41:02', NULL),
(8, 8, 'casa do pai', 'Rua Patrícia', '967', '', '', '', 'SP', '75.054-255', '', NULL, NULL, '2020-04-11 17:43:20', '2020-04-11 17:43:20', NULL),
(9, 9, 'casa da tia', 'Rua Bocaiúva', '812', '', '', '', 'SP', '78.149-358', '', NULL, NULL, '2020-04-11 17:47:26', '2020-04-11 17:47:26', NULL),
(10, 10, 'casa do pai', 'Rua Serra Caiada', '398', '', '', '', 'SP', '51.335-340', '', NULL, NULL, '2020-04-11 18:13:16', '2020-04-11 18:13:16', NULL),
(11, 11, 'casa do avo', 'Quadra 1206 Sul Alameda 11', '972', '', '', '', 'SP', '77.024-478', '', NULL, NULL, '2020-04-11 18:17:02', '2020-04-11 18:17:02', NULL),
(12, 12, 'casa da mae', 'Avenida Padre Anchieta', '625', '', '', '', 'SP', '69.314-214', '', NULL, NULL, '2020-04-11 18:20:09', '2020-04-11 18:20:09', NULL),
(13, 13, 'casa do pai', 'Avenida São Joaquim', '252', '', '', '', 'SP', '68.909-049', '', NULL, NULL, '2020-04-11 18:22:41', '2020-04-11 18:22:41', NULL),
(14, 14, 'Casa do pai', 'Rua Pirauá', '837', '', '', '', 'SP', '57.085-450', '', NULL, NULL, '2020-04-11 18:25:34', '2020-04-11 18:25:34', NULL),
(15, 15, 'casa do pai', 'Avenida João Lima', '993', '', '', '', 'SP', '65.915-683', '', NULL, NULL, '2020-04-11 18:30:55', '2020-04-11 18:30:55', NULL),
(16, 16, 'casa do pai', 'Rua Mário Nicoleti', '734', '', '', '', 'SP', '75.702-030', '', NULL, NULL, '2020-04-11 18:34:30', '2020-04-11 18:34:30', NULL),
(17, 17, 'Casa do pai', 'Rua José Benedito Petry', '861', '', '', '', 'SP', '88.122-046', '', NULL, NULL, '2020-04-11 18:48:44', '2020-04-11 18:48:44', NULL),
(18, 18, 'Casa do pai', 'Rua Adolfo Bispo da Silva', '231', '', '', '', 'SP', '57.306-871', '', NULL, NULL, '2020-04-11 18:58:17', '2020-04-11 18:58:17', NULL),
(19, 19, 'casa da mae', 'Rua Quintino Bocaiúva', '967', '', '', '', 'SP', '69.900-070', '', NULL, NULL, '2020-04-11 19:01:40', '2020-04-11 19:01:40', NULL),
(20, 20, 'casa da avó', 'SCS Quadra 6 Bloco A Loja 246', '193', '', '', '', 'SP', '70.306-970', '', NULL, NULL, '2020-04-11 19:04:28', '2020-04-11 19:04:28', NULL),
(21, 21, 'casa do pai', 'Travessa Serigy', '560', '', '', '', 'SP', '49.085-400', '', NULL, NULL, '2020-04-11 19:08:19', '2020-04-11 19:08:19', NULL),
(22, 22, 'Casa do pai', 'Quadra Quadra 4', '949', '', '', '', 'SP', '73.086-230', '', NULL, NULL, '2020-04-11 19:11:45', '2020-04-11 19:11:45', NULL),
(23, 23, 'casa da mae', 'Rua Antônio Moreira Lima', '807', '', '', '', 'SP', '76.961-838', '', NULL, NULL, '2020-04-11 19:15:06', '2020-04-11 19:15:06', NULL),
(24, 24, 'casa do pai', 'Rua Fernando d\'Ávila Vieira', '997', '', '', '', 'SP', '88.372-662', '', NULL, NULL, '2020-04-11 19:17:42', '2020-04-11 19:17:42', NULL),
(25, 25, 'Casa do pai', 'Rua Agenor Lopes Cansado Filho', '831', '', '', '', 'SP', '74.989-010', '', NULL, NULL, '2020-04-11 19:22:06', '2020-04-11 19:22:06', NULL),
(26, 26, 'Casa do pai', 'Rua Bartolomeu Bueno', '820', '', '', '', 'SP', '86.010-660', '', NULL, NULL, '2020-04-11 19:26:34', '2020-04-11 19:26:34', NULL),
(27, 27, 'Casa do pai', 'Rua Barra do Turvo', '226', '', '', '', 'SP', '13.052-474', '', NULL, NULL, '2020-04-11 19:44:44', '2020-04-11 19:44:44', NULL),
(28, 28, 'Casa do pai', 'Praça São Marcos', '346', '', '', '', 'SP', '79.006-210', '', NULL, NULL, '2020-04-11 19:48:00', '2020-04-11 19:48:00', NULL),
(29, 29, 'casa da mae', 'Rua Martins Pena', '927', '', '', '', 'SP', '51.190-510', '', NULL, NULL, '2020-04-11 19:50:33', '2020-04-11 19:50:33', NULL),
(30, 30, 'Casa do pai', 'Rua Rosa Paula Paulina', '669', '', '', '', 'SP', '29.145-290', '', NULL, NULL, '2020-04-11 19:52:35', '2020-04-11 19:52:35', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidades`
--

CREATE TABLE `entidades` (
  `id_entidade` bigint(20) UNSIGNED NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entidades`
--

INSERT INTO `entidades` (`id_entidade`, `nome`, `cnpj`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `email`, `responsavel`, `resp_tel`, `resp_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ETEC DE IBITINGA', '62.823.257/0161-02', NULL, 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-088', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2020-04-02 20:50:13', '2020-04-11 16:19:07', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` bigint(20) UNSIGNED NOT NULL,
  `entidade_id` bigint(20) UNSIGNED NOT NULL,
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
  `obs` mediumtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `entidade_id`, `nome`, `dt_nasc`, `sexo`, `cpf`, `rg`, `registro`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'RONAN ADRIEL ZENATTI', '1988-02-25', 'M', '355.936.478-79', '41.324.990-6', '57852', 'Rua dos Lavradores', '302', 'Vila Nossa Senhora Aparecida', 'Boracéia', 'SP', '17.270-032', '(14) 9 8157-5657', 'Cadastro Automático.', '2020-04-02 20:50:13', '2020-04-11 16:19:31', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos_familiares`
--

CREATE TABLE `grupos_familiares` (
  `id_grupo_familiar` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `outras_infomacoes` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grupos_familiares`
--

INSERT INTO `grupos_familiares` (`id_grupo_familiar`, `adolescente_id`, `outras_infomacoes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, '2020-04-08', '2020-04-08', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_logins`
--

CREATE TABLE `historico_logins` (
  `id_hl` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `navegador` varchar(30) NOT NULL,
  `so` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico_logins`
--

INSERT INTO `historico_logins` (`id_hl`, `usuario_id`, `ip_address`, `navegador`, `so`, `created_at`, `deleted_at`) VALUES
(1, 1, '127.0.0.1', 'Chrome / 80.0.3987.132', 'Windows', '2020-04-02 20:50:20', NULL),
(2, 1, '127.0.0.1', 'Chrome / 80.0.3987.132', 'Windows', '2020-04-07 13:22:41', NULL),
(3, 1, '127.0.0.1', 'Chrome / 80.0.3987.132', 'Windows', '2020-04-07 17:09:10', NULL),
(4, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-08 15:35:52', NULL),
(5, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-08 19:51:47', NULL),
(6, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-08 20:10:12', NULL),
(7, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-09 11:44:49', NULL),
(8, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-09 19:33:35', NULL),
(9, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-10 09:27:30', NULL),
(10, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-10 19:57:37', NULL),
(11, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-11 16:16:59', NULL),
(12, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-11 16:47:31', NULL),
(13, 1, '192.168.0.150', 'Chrome / 80.0.3987.163', 'Windows', '2020-04-11 17:11:37', NULL),
(14, 1, '192.168.0.150', 'Chrome / 80.0.3987.163', 'Windows', '2020-04-11 17:12:32', NULL),
(15, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-12 21:08:47', NULL),
(16, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-13 18:39:40', NULL),
(17, 1, '127.0.0.1', 'Chrome / 81.0.4044.92', 'Windows', '2020-04-15 15:41:14', NULL),
(18, 1, '127.0.0.1', 'Chrome / 81.0.4044.122', 'Windows', '2020-04-28 21:00:42', NULL),
(19, 1, '127.0.0.1', 'Chrome / 83.0.4103.61', 'Windows', '2020-06-04 09:32:42', NULL),
(20, 1, '127.0.0.1', 'Chrome / 85.0.4183.102', 'Windows', '2020-09-22 15:13:10', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios_familiar`
--

CREATE TABLE `horarios_familiar` (
  `id_horario_familia` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `chega_tarde` binary(1) DEFAULT NULL,
  `compromissos` varchar(191) DEFAULT NULL,
  `periodo_rua` tinyint(4) DEFAULT NULL COMMENT '1 - Maior parte do dia / 2 - Meio Período / 3 - Raramente / 4 - Nunca\n',
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `internacoes`
--

CREATE TABLE `internacoes` (
  `id_internacao` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `quando` varchar(45) DEFAULT NULL,
  `onde` varchar(191) DEFAULT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lazeres_culturas_esportes`
--

CREATE TABLE `lazeres_culturas_esportes` (
  `ld_lce` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `cultural_participa` varchar(191) DEFAULT NULL,
  `cultural_interesse` varchar(191) DEFAULT NULL,
  `esportiva_participa` varchar(191) DEFAULT NULL,
  `esportiva_interesse` varchar(191) DEFAULT NULL,
  `lazer` varchar(191) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `metas`
--

CREATE TABLE `metas` (
  `id_meta` bigint(20) UNSIGNED NOT NULL,
  `pia_id` bigint(20) UNSIGNED NOT NULL,
  `parte_pia` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `data_limite` date DEFAULT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pias`
--

CREATE TABLE `pias` (
  `id_pia` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `data_recepcao` date DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_termino` date DEFAULT NULL,
  `numero_processo` varchar(45) DEFAULT NULL,
  `ato_infracional` varchar(45) DEFAULT NULL,
  `medida_aplicada` tinyint(4) DEFAULT NULL COMMENT '1 - LA / 2 - PSC / 0 - AMBAS',
  `ass_juridico` tinyint(4) DEFAULT NULL COMMENT '1 - Publico / 2 - Particular',
  `outros_processos` varchar(191) NOT NULL,
  `motivacao` text DEFAULT NULL,
  `reflexao` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pias`
--

INSERT INTO `pias` (`id_pia`, `adolescente_id`, `data_recepcao`, `data_inicio`, `data_termino`, `numero_processo`, `ato_infracional`, `medida_aplicada`, `ass_juridico`, `outros_processos`, `motivacao`, `reflexao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 1, '2020-04-10', '2020-04-10', NULL, NULL, NULL, 1, NULL, '', NULL, NULL, '2020-04-10', '2020-04-10', NULL),
(6, 1, '2020-04-10', '2020-04-10', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2020-04-10', '2020-04-10', NULL),
(7, 13, '2020-04-11', '2020-04-11', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2020-04-11', '2020-04-11', NULL),
(8, 1, '2020-04-06', '2020-04-13', NULL, '1234', 'Roubo', 2, 2, 'teste', '<p>A <u>vontade </u>de ter <strong>tudo</strong></p>\n', '<p>teste</p>\n', '2020-04-13', '2020-04-13', NULL),
(9, 28, '2020-04-28', '2020-04-28', NULL, '', 'sdsd', 0, 2, '', '', '', '2020-04-28', '2020-04-28', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `planejamentos_atendimentos`
--

CREATE TABLE `planejamentos_atendimentos` (
  `id_planejamento_atendimento` bigint(20) UNSIGNED NOT NULL,
  `pia_id` bigint(20) UNSIGNED NOT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `periodo` tinyint(4) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planejamentos_futuros`
--

CREATE TABLE `planejamentos_futuros` (
  `id_planejamento_futuro` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `futuro` varchar(191) DEFAULT NULL,
  `interesse_familia` varchar(191) DEFAULT NULL,
  `influencia_negativa` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionalizacao`
--

CREATE TABLE `profissionalizacao` (
  `id_profissionalizacao` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `registrado` binary(1) DEFAULT '0',
  `interesses_cursos` varchar(191) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saude`
--

CREATE TABLE `saude` (
  `id_saude` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `problemas_saude` text DEFAULT NULL,
  `tratamentos` text DEFAULT NULL,
  `psicologico_psiquiatrico` text DEFAULT NULL,
  `cigarro_inicio` varchar(45) DEFAULT NULL,
  `cigarros_frequencia` varchar(45) DEFAULT NULL,
  `cigarros_quantidade` int(11) DEFAULT NULL,
  `bebidas_inicio` varchar(45) DEFAULT NULL,
  `bebidas_frequencia` varchar(45) DEFAULT NULL,
  `bebidas_quantidade` int(11) DEFAULT NULL,
  `drogas` varchar(191) DEFAULT NULL,
  `drogas_inicio` varchar(45) DEFAULT NULL,
  `drogas_frequencia` varchar(45) DEFAULT NULL,
  `drogas_quantidade` int(11) DEFAULT NULL,
  `medicamentos` varchar(191) DEFAULT NULL,
  `doenca_familia` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_habitacional`
--

CREATE TABLE `situacao_habitacional` (
  `id_sh` bigint(20) UNSIGNED NOT NULL,
  `endereco_id` bigint(20) UNSIGNED NOT NULL,
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
  `obs` mediumtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `situacao_habitacional`
--

INSERT INTO `situacao_habitacional` (`id_sh`, `endereco_id`, `tipo`, `situacao`, `valor`, `agua`, `esgoto`, `energia`, `pavimento`, `coleta_lixo`, `qtde_comodos`, `espaco`, `qtde_pessoas`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 2, '15000.00', b'0', b'0', b'0', b'0', b'0', 0, '0.00', 0, '<p>Nome da <strong>monica</strong></p>\r\n', '2020-04-13 20:02:49', '2020-04-13 20:03:14', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacoes_escolares`
--

CREATE TABLE `situacoes_escolares` (
  `id_situacao_escolar` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `grau_escolaridade` varchar(45) DEFAULT NULL,
  `estudando` binary(1) DEFAULT NULL,
  `ano_abandono` year(4) DEFAULT NULL,
  `ultima_escola` varchar(191) DEFAULT NULL,
  `retornar` binary(1) DEFAULT NULL,
  `atestado_matricula` date DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhos`
--

CREATE TABLE `trabalhos` (
  `id_trabalho` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `empresa` varchar(191) DEFAULT NULL,
  `salario` decimal(14,2) DEFAULT NULL,
  `dt_inicio` datetime DEFAULT NULL,
  `horario_inicio` time DEFAULT NULL,
  `horario_fim` time DEFAULT NULL,
  `dt_recisao` datetime DEFAULT NULL,
  `obs` mediumtext DEFAULT NULL,
  `motivo_recisao` mediumtext DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT '(F)ormal / (I)nformal',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `funcionario_id` bigint(20) UNSIGNED NOT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `funcionario_id`, `cargo_id`, `ip_address`, `salt`, `email`, `password`, `username`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `last_login`, `active`, `termo`, `data_termo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '127.0.0.1', NULL, 'ronan.zenatti@etec.sp.gov.br', '$2y$08$6W7T9apvPnyZ0lPKbJqdouR0G0W8jgi60SPFU8xSyBnsi73AoSDCa', NULL, NULL, NULL, NULL, NULL, 1600798390, 1, 0, NULL, '2020-04-02 20:50:13', '2020-04-11 16:19:31', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adolescentes`
--
ALTER TABLE `adolescentes`
  ADD PRIMARY KEY (`id_adolescente`);

--
-- Índices para tabela `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `beneficios_familias`
--
ALTER TABLE `beneficios_familias`
  ADD PRIMARY KEY (`id_beneficio_familia`),
  ADD KEY `fk_grupo_beneficio` (`grupo_familiar_id`);

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Índices para tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  ADD PRIMARY KEY (`id_cf`),
  ADD KEY `fk_grupo_familia_composicao_familiar` (`grupo_familiar_id`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `fk_contatos_adolescentes_idx` (`adolescente_id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_adolescente_curso` (`adolescente_id`);

--
-- Índices para tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `fk_documentos_adolescentes_idx` (`adolescente_id`);

--
-- Índices para tabela `encaminhamentos`
--
ALTER TABLE `encaminhamentos`
  ADD PRIMARY KEY (`id_encaminhamento`),
  ADD KEY `fk_pia_encaminhamento` (`pia_id`),
  ADD KEY `fk_entidade_encaminhamento` (`entidade_id`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `fk_adolecente_endereco` (`adolescente_id`);

--
-- Índices para tabela `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`id_entidade`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `fk_entidade_funcionario` (`entidade_id`);

--
-- Índices para tabela `grupos_familiares`
--
ALTER TABLE `grupos_familiares`
  ADD PRIMARY KEY (`id_grupo_familiar`),
  ADD KEY `fk_adolescente_grupo_familiar` (`adolescente_id`);

--
-- Índices para tabela `historico_logins`
--
ALTER TABLE `historico_logins`
  ADD PRIMARY KEY (`id_hl`),
  ADD KEY `fk_hl_usuarios_idx` (`usuario_id`);

--
-- Índices para tabela `horarios_familiar`
--
ALTER TABLE `horarios_familiar`
  ADD PRIMARY KEY (`id_horario_familia`),
  ADD KEY `fk_adolescente_horario_familiar` (`adolescente_id`);

--
-- Índices para tabela `internacoes`
--
ALTER TABLE `internacoes`
  ADD PRIMARY KEY (`id_internacao`),
  ADD KEY `fk_adolescente_internacoes` (`adolescente_id`);

--
-- Índices para tabela `lazeres_culturas_esportes`
--
ALTER TABLE `lazeres_culturas_esportes`
  ADD PRIMARY KEY (`ld_lce`),
  ADD KEY `fk_adolescente_lce` (`adolescente_id`);

--
-- Índices para tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id_meta`);

--
-- Índices para tabela `pias`
--
ALTER TABLE `pias`
  ADD PRIMARY KEY (`id_pia`),
  ADD KEY `fk_adolescente_pia` (`adolescente_id`);

--
-- Índices para tabela `planejamentos_atendimentos`
--
ALTER TABLE `planejamentos_atendimentos`
  ADD PRIMARY KEY (`id_planejamento_atendimento`),
  ADD KEY `fk_pia_planejamento_atendimento` (`pia_id`);

--
-- Índices para tabela `planejamentos_futuros`
--
ALTER TABLE `planejamentos_futuros`
  ADD PRIMARY KEY (`id_planejamento_futuro`),
  ADD KEY `fk_adolescente_planejamento_futuro` (`adolescente_id`);

--
-- Índices para tabela `profissionalizacao`
--
ALTER TABLE `profissionalizacao`
  ADD PRIMARY KEY (`id_profissionalizacao`),
  ADD KEY `fk_adolescente_profissionalizacao` (`adolescente_id`);

--
-- Índices para tabela `saude`
--
ALTER TABLE `saude`
  ADD PRIMARY KEY (`id_saude`),
  ADD KEY `fk_adolescente_saude` (`adolescente_id`);

--
-- Índices para tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD PRIMARY KEY (`id_sh`),
  ADD KEY `fk_sh_enderecos_idx` (`endereco_id`);

--
-- Índices para tabela `situacoes_escolares`
--
ALTER TABLE `situacoes_escolares`
  ADD PRIMARY KEY (`id_situacao_escolar`),
  ADD KEY `fk_adolescente_escola` (`adolescente_id`);

--
-- Índices para tabela `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD PRIMARY KEY (`id_trabalho`),
  ADD KEY `fk_adolescente_trabalho` (`adolescente_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_usuario_funcionario_idx` (`funcionario_id`),
  ADD KEY `fk_usuario_cargo_idx` (`cargo_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adolescentes`
--
ALTER TABLE `adolescentes`
  MODIFY `id_adolescente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `audit`
--
ALTER TABLE `audit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT de tabela `beneficios_familias`
--
ALTER TABLE `beneficios_familias`
  MODIFY `id_beneficio_familia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  MODIFY `id_cf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id_contato` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `encaminhamentos`
--
ALTER TABLE `encaminhamentos`
  MODIFY `id_encaminhamento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `entidades`
--
ALTER TABLE `entidades`
  MODIFY `id_entidade` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `grupos_familiares`
--
ALTER TABLE `grupos_familiares`
  MODIFY `id_grupo_familiar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `historico_logins`
--
ALTER TABLE `historico_logins`
  MODIFY `id_hl` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `horarios_familiar`
--
ALTER TABLE `horarios_familiar`
  MODIFY `id_horario_familia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `internacoes`
--
ALTER TABLE `internacoes`
  MODIFY `id_internacao` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `lazeres_culturas_esportes`
--
ALTER TABLE `lazeres_culturas_esportes`
  MODIFY `ld_lce` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `metas`
--
ALTER TABLE `metas`
  MODIFY `id_meta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pias`
--
ALTER TABLE `pias`
  MODIFY `id_pia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `planejamentos_atendimentos`
--
ALTER TABLE `planejamentos_atendimentos`
  MODIFY `id_planejamento_atendimento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `planejamentos_futuros`
--
ALTER TABLE `planejamentos_futuros`
  MODIFY `id_planejamento_futuro` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `profissionalizacao`
--
ALTER TABLE `profissionalizacao`
  MODIFY `id_profissionalizacao` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saude`
--
ALTER TABLE `saude`
  MODIFY `id_saude` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  MODIFY `id_sh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `situacoes_escolares`
--
ALTER TABLE `situacoes_escolares`
  MODIFY `id_situacao_escolar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `trabalhos`
--
ALTER TABLE `trabalhos`
  MODIFY `id_trabalho` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `beneficios_familias`
--
ALTER TABLE `beneficios_familias`
  ADD CONSTRAINT `fk_grupo_beneficio` FOREIGN KEY (`grupo_familiar_id`) REFERENCES `grupos_familiares` (`id_grupo_familiar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  ADD CONSTRAINT `fk_grupo_familia_composicao_familiar` FOREIGN KEY (`grupo_familiar_id`) REFERENCES `grupos_familiares` (`id_grupo_familiar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `fk_contatos_adolescentes` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_adolescente_curso` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `fk_documentos_adolescentes` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `encaminhamentos`
--
ALTER TABLE `encaminhamentos`
  ADD CONSTRAINT `fk_entidade_encaminhamento` FOREIGN KEY (`entidade_id`) REFERENCES `entidades` (`id_entidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pia_encaminhamento` FOREIGN KEY (`pia_id`) REFERENCES `pias` (`id_pia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_enderecos_adolescentes` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `fk_funcionarios_entidades` FOREIGN KEY (`entidade_id`) REFERENCES `entidades` (`id_entidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `grupos_familiares`
--
ALTER TABLE `grupos_familiares`
  ADD CONSTRAINT `fk_adolescente_grupo_familiar` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `historico_logins`
--
ALTER TABLE `historico_logins`
  ADD CONSTRAINT `fk_hl_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `horarios_familiar`
--
ALTER TABLE `horarios_familiar`
  ADD CONSTRAINT `fk_adolescente_horario_familiar` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `internacoes`
--
ALTER TABLE `internacoes`
  ADD CONSTRAINT `fk_adolescente_internacoes` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `lazeres_culturas_esportes`
--
ALTER TABLE `lazeres_culturas_esportes`
  ADD CONSTRAINT `fk_adolescente_lce` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pias`
--
ALTER TABLE `pias`
  ADD CONSTRAINT `fk_adolescente_pia` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `planejamentos_atendimentos`
--
ALTER TABLE `planejamentos_atendimentos`
  ADD CONSTRAINT `fk_pia_planejamento_atendimento` FOREIGN KEY (`pia_id`) REFERENCES `pias` (`id_pia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `planejamentos_futuros`
--
ALTER TABLE `planejamentos_futuros`
  ADD CONSTRAINT `fk_adolescente_planejamento_futuro` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `profissionalizacao`
--
ALTER TABLE `profissionalizacao`
  ADD CONSTRAINT `fk_adolescente_profissionalizacao` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `saude`
--
ALTER TABLE `saude`
  ADD CONSTRAINT `fk_adolescente_saude` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD CONSTRAINT `fk_sh_enderecos` FOREIGN KEY (`endereco_id`) REFERENCES `enderecos` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `situacoes_escolares`
--
ALTER TABLE `situacoes_escolares`
  ADD CONSTRAINT `fk_adolescente_escola` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD CONSTRAINT `fk_adolescente_trabalho` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_funcionario` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
