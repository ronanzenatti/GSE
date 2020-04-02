-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20/03/2020 às 20:50
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estrutura para tabela `adolescentes`
--

CREATE TABLE `adolescentes` (
  `id_adolescente` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `nome_tratamento` varchar(50) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `estado_civil` char(1) DEFAULT NULL,
  `natural` varchar(50) DEFAULT NULL,
  `responsavel` varchar(150) DEFAULT NULL,
  `obs` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `audit`
--

CREATE TABLE `audit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(50) NOT NULL,
  `tipo` char(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `antes` text DEFAULT NULL,
  `depois` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `audit`
--

INSERT INTO `audit` (`id`, `model_id`, `model`, `tipo`, `user_id`, `antes`, `depois`, `ip`, `created_at`, `deleted_at`) VALUES
(1, 1, 'entidades', 'C', 1, NULL, '{\"nome\":\"ETEC de Ibitinga\",\"cnpj\":\"62.823.257\\/0161-02\",\"tipo\":\"R\",\"logradouro\":\"Rua Rosalbino Tucci\",\"numero\":\"431\",\"bairro\":\"Centro\",\"cidade\":\"Ibitinga\",\"estado\":\"SP\",\"cep\":\"14.940-000\",\"telefones\":\"(16) 3341-7046 \\/ 3342-6039\",\"email\":\"e161dir@cps.sp.gov.br\",\"responsavel\":\"Patricia\",\"resp_tel\":\"(16) 3341-7046\",\"resp_email\":\"e161dir@cps.sp.gov.br\",\"created_at\":\"2020-03-20 20:38:58\",\"updated_at\":\"2020-03-20 20:38:58\"}', '127.0.0.1', '2020-03-20 20:38:58', NULL),
(2, 1, 'cargos', 'C', 1, NULL, '{\"nome\":\"Administrador\",\"descricao\":\"Administrador do Sistema\",\"created_at\":\"2020-03-20 20:38:58\",\"updated_at\":\"2020-03-20 20:38:58\"}', '127.0.0.1', '2020-03-20 20:38:58', NULL),
(3, 1, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"Ronan Adriel Zenatti\",\"dt_nasc\":\"1988-02-25\",\"sexo\":\"M\",\"cpf\":\"355.936.478-79\",\"rg\":\"41.324.990-6\",\"registro\":\"57852\",\"logradouro\":\"Rua dos Lavradores\",\"numero\":\"302\",\"bairro\":\"Centro\",\"cidade\":\"Boracéia\",\"estado\":\"SP\",\"cep\":\"17.270-000\",\"telefones\":\"(14) 9 8157-5657\",\"obs\":\"Cadastro Automático.\",\"entidade_id\":1,\"created_at\":\"2020-03-20 20:38:58\",\"updated_at\":\"2020-03-20 20:38:58\"}', '127.0.0.1', '2020-03-20 20:38:58', NULL),
(4, 1, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"cargo_id\":1,\"email\":\"ronan.zenatti@etec.sp.gov.br\",\"password\":\"$2y$08$dWnS4EWD0xusqhRUkNQF6.IskdaMreCL6J4nWRR4S0icsoUPr97E2\",\"active\":1,\"termo\":1,\"funcionario_id\":1,\"created_at\":\"2020-03-20 20:38:58\",\"updated_at\":\"2020-03-20 20:38:58\"}', '127.0.0.1', '2020-03-20 20:38:58', NULL),
(5, 2, 'funcionarios', 'C', 1, NULL, '{\"nome\":\"ADMINISTRADOR\",\"dt_nasc\":null,\"sexo\":\"O\",\"logradouro\":\"\",\"numero\":\"\",\"bairro\":\"\",\"cidade\":\"\",\"estado\":\"SP\",\"cep\":\"\",\"telefones\":\"\",\"obs\":\"\",\"entidade_id\":\"1\",\"created_at\":\"2020-03-20 20:47:36\",\"updated_at\":\"2020-03-20 20:47:36\"}', '127.0.0.1', '2020-03-20 20:47:36', NULL),
(6, 2, 'usuarios', 'C', 1, NULL, '{\"ip_address\":\"127.0.0.1\",\"cargo_id\":\"1\",\"email\":\"admin@admin.com\",\"password\":\"$2y$08$sS2MUPXBXEHZoGWYl2qYeOgvGSxMC1pB4N6J8sEDdeiPzVDmZgNsS\",\"active\":1,\"termo\":0,\"created_at\":\"2020-03-20 20:47:36\",\"updated_at\":\"2020-03-20 20:47:36\",\"funcionario_id\":2}', '127.0.0.1', '2020-03-20 20:47:36', NULL),
(7, 1, 'cargos', 'U', 2, '{\"nome\":\"Administrador\",\"updated_at\":\"2020-03-20 20:38:58\"}', '{\"nome\":\"ADMINISTRADOR\",\"updated_at\":\"2020-03-20 20:48:04\"}', '127.0.0.1', '2020-03-20 20:48:04', NULL),
(8, 1, 'entidades', 'U', 2, '{\"nome\":\"ETEC de Ibitinga\",\"tipo\":\"R\",\"updated_at\":\"2020-03-20 20:38:58\"}', '{\"nome\":\"ETEC DE IBITINGA\",\"tipo\":\"O\",\"updated_at\":\"2020-03-20 20:48:26\"}', '127.0.0.1', '2020-03-20 20:48:26', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `beneficios_familias`
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
-- Estrutura para tabela `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `nome`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ADMINISTRADOR', 'Administrador do Sistema', '2020-03-20 20:38:58', '2020-03-20 20:48:04', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `composicao_familiar`
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
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
-- Estrutura para tabela `documentos`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `encaminhamentos`
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
-- Estrutura para tabela `enderecos`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `entidades`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `entidades`
--

INSERT INTO `entidades` (`id_entidade`, `nome`, `cnpj`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `email`, `responsavel`, `resp_tel`, `resp_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ETEC DE IBITINGA', '62.823.257/0161-02', 'O', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2020-03-20 20:38:58', '2020-03-20 20:48:26', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
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
  `obs` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `entidade_id`, `nome`, `dt_nasc`, `sexo`, `cpf`, `rg`, `registro`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Ronan Adriel Zenatti', '1988-02-25', 'M', '355.936.478-79', '41.324.990-6', '57852', 'Rua dos Lavradores', '302', 'Centro', 'Boracéia', 'SP', '17.270-000', '(14) 9 8157-5657', 'Cadastro Automático.', '2020-03-20 20:38:58', '2020-03-20 20:38:58', NULL),
(2, 1, 'ADMINISTRADOR', NULL, 'O', NULL, NULL, NULL, '', '', '', '', 'SP', '', '', '', '2020-03-20 20:47:36', '2020-03-20 20:47:36', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `grupos_familiares`
--

CREATE TABLE `grupos_familiares` (
  `id_grupo_familiar` bigint(20) UNSIGNED NOT NULL,
  `adolescente_id` bigint(20) UNSIGNED NOT NULL,
  `outras_infomacoes` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico_logins`
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
-- Despejando dados para a tabela `historico_logins`
--

INSERT INTO `historico_logins` (`id_hl`, `usuario_id`, `ip_address`, `navegador`, `so`, `created_at`, `deleted_at`) VALUES
(1, 1, '127.0.0.1', 'Chrome / 80.0.3987.149', 'OS X', '2020-03-20 20:39:02', NULL),
(2, 2, '127.0.0.1', 'Chrome / 80.0.3987.149', 'OS X', '2020-03-20 20:47:49', NULL),
(3, 2, '127.0.0.1', 'Chrome / 80.0.3987.149', 'OS X', '2020-03-20 20:48:40', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `horarios_familiar`
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
-- Estrutura para tabela `internacoes`
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
-- Estrutura para tabela `lazeres_culturas_esportes`
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
-- Estrutura para tabela `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `metas`
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
-- Estrutura para tabela `pias`
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
  `motivacao` text DEFAULT NULL,
  `reflexao` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `planejamentos_atendimentos`
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
-- Estrutura para tabela `planejamentos_futuros`
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
-- Estrutura para tabela `profissionalizacao`
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
-- Estrutura para tabela `saude`
--

CREATE TABLE `saude` (
  `id_saude` int(10) UNSIGNED NOT NULL,
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
-- Estrutura para tabela `situacao_habitacional`
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
  `obs` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `situacoes_escolares`
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
-- Estrutura para tabela `trabalhos`
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
  `obs` text DEFAULT NULL,
  `motivo_recisao` text DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT '(F)ormal / (I)nformal',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `funcionario_id`, `cargo_id`, `ip_address`, `salt`, `email`, `password`, `username`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `last_login`, `active`, `termo`, `data_termo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '127.0.0.1', NULL, 'ronan.zenatti@etec.sp.gov.br', '$2y$08$dWnS4EWD0xusqhRUkNQF6.IskdaMreCL6J4nWRR4S0icsoUPr97E2', NULL, NULL, NULL, NULL, NULL, 1584747542, 1, 1, NULL, '2020-03-20 20:38:58', '2020-03-20 20:38:58', NULL),
(2, 2, 1, '127.0.0.1', NULL, 'admin@admin.com', '$2y$08$sS2MUPXBXEHZoGWYl2qYeOgvGSxMC1pB4N6J8sEDdeiPzVDmZgNsS', NULL, NULL, NULL, NULL, NULL, 1584748120, 1, 0, NULL, '2020-03-20 20:47:36', '2020-03-20 20:47:36', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `adolescentes`
--
ALTER TABLE `adolescentes`
  ADD PRIMARY KEY (`id_adolescente`);

--
-- Índices de tabela `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `beneficios_familias`
--
ALTER TABLE `beneficios_familias`
  ADD PRIMARY KEY (`id_beneficio_familia`),
  ADD KEY `fk_grupo_beneficio` (`grupo_familiar_id`);

--
-- Índices de tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Índices de tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  ADD PRIMARY KEY (`id_cf`),
  ADD KEY `fk_grupo_familia_composicao_familiar` (`grupo_familiar_id`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `fk_contatos_adolescentes_idx` (`adolescente_id`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_adolescente_curso` (`adolescente_id`);

--
-- Índices de tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `fk_documentos_adolescentes_idx` (`adolescente_id`);

--
-- Índices de tabela `encaminhamentos`
--
ALTER TABLE `encaminhamentos`
  ADD PRIMARY KEY (`id_encaminhamento`),
  ADD KEY `fk_pia_encaminhamento` (`pia_id`),
  ADD KEY `fk_entidade_encaminhamento` (`entidade_id`);

--
-- Índices de tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `fk_adolecente_endereco` (`adolescente_id`);

--
-- Índices de tabela `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`id_entidade`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `fk_entidade_funcionario` (`entidade_id`);

--
-- Índices de tabela `grupos_familiares`
--
ALTER TABLE `grupos_familiares`
  ADD PRIMARY KEY (`id_grupo_familiar`),
  ADD KEY `fk_adolescente_grupo_familiar` (`adolescente_id`);

--
-- Índices de tabela `historico_logins`
--
ALTER TABLE `historico_logins`
  ADD PRIMARY KEY (`id_hl`),
  ADD KEY `fk_hl_usuarios_idx` (`usuario_id`);

--
-- Índices de tabela `horarios_familiar`
--
ALTER TABLE `horarios_familiar`
  ADD PRIMARY KEY (`id_horario_familia`),
  ADD KEY `fk_adolescente_horario_familiar` (`adolescente_id`);

--
-- Índices de tabela `internacoes`
--
ALTER TABLE `internacoes`
  ADD PRIMARY KEY (`id_internacao`),
  ADD KEY `fk_adolescente_internacoes` (`adolescente_id`);

--
-- Índices de tabela `lazeres_culturas_esportes`
--
ALTER TABLE `lazeres_culturas_esportes`
  ADD PRIMARY KEY (`ld_lce`),
  ADD KEY `fk_adolescente_lce` (`adolescente_id`);

--
-- Índices de tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id_meta`);

--
-- Índices de tabela `pias`
--
ALTER TABLE `pias`
  ADD PRIMARY KEY (`id_pia`),
  ADD KEY `fk_adolescente_pia` (`adolescente_id`);

--
-- Índices de tabela `planejamentos_atendimentos`
--
ALTER TABLE `planejamentos_atendimentos`
  ADD PRIMARY KEY (`id_planejamento_atendimento`),
  ADD KEY `fk_pia_planejamento_atendimento` (`pia_id`);

--
-- Índices de tabela `planejamentos_futuros`
--
ALTER TABLE `planejamentos_futuros`
  ADD PRIMARY KEY (`id_planejamento_futuro`),
  ADD KEY `fk_adolescente_planejamento_futuro` (`adolescente_id`);

--
-- Índices de tabela `profissionalizacao`
--
ALTER TABLE `profissionalizacao`
  ADD PRIMARY KEY (`id_profissionalizacao`),
  ADD KEY `fk_adolescente_profissionalizacao` (`adolescente_id`);

--
-- Índices de tabela `saude`
--
ALTER TABLE `saude`
  ADD PRIMARY KEY (`id_saude`),
  ADD KEY `fk_adolescente_saude` (`adolescente_id`);

--
-- Índices de tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD PRIMARY KEY (`id_sh`),
  ADD KEY `fk_sh_enderecos_idx` (`endereco_id`);

--
-- Índices de tabela `situacoes_escolares`
--
ALTER TABLE `situacoes_escolares`
  ADD PRIMARY KEY (`id_situacao_escolar`),
  ADD KEY `fk_adolescente_escola` (`adolescente_id`);

--
-- Índices de tabela `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD PRIMARY KEY (`id_trabalho`),
  ADD KEY `fk_adolescente_trabalho` (`adolescente_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_usuario_funcionario_idx` (`funcionario_id`),
  ADD KEY `fk_usuario_cargo_idx` (`cargo_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `adolescentes`
--
ALTER TABLE `adolescentes`
  MODIFY `id_adolescente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `audit`
--
ALTER TABLE `audit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id_contato` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `encaminhamentos`
--
ALTER TABLE `encaminhamentos`
  MODIFY `id_encaminhamento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entidades`
--
ALTER TABLE `entidades`
  MODIFY `id_entidade` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `grupos_familiares`
--
ALTER TABLE `grupos_familiares`
  MODIFY `id_grupo_familiar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico_logins`
--
ALTER TABLE `historico_logins`
  MODIFY `id_hl` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `metas`
--
ALTER TABLE `metas`
  MODIFY `id_meta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pias`
--
ALTER TABLE `pias`
  MODIFY `id_pia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_saude` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  MODIFY `id_sh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `beneficios_familias`
--
ALTER TABLE `beneficios_familias`
  ADD CONSTRAINT `fk_grupo_beneficio` FOREIGN KEY (`grupo_familiar_id`) REFERENCES `grupos_familiares` (`id_grupo_familiar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  ADD CONSTRAINT `fk_grupo_familia_composicao_familiar` FOREIGN KEY (`grupo_familiar_id`) REFERENCES `grupos_familiares` (`id_grupo_familiar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `fk_contatos_adolescentes` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_adolescente_curso` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `fk_documentos_adolescentes` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `encaminhamentos`
--
ALTER TABLE `encaminhamentos`
  ADD CONSTRAINT `fk_entidade_encaminhamento` FOREIGN KEY (`entidade_id`) REFERENCES `entidades` (`id_entidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pia_encaminhamento` FOREIGN KEY (`pia_id`) REFERENCES `pias` (`id_pia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_enderecos_adolescentes` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `fk_funcionarios_entidades` FOREIGN KEY (`entidade_id`) REFERENCES `entidades` (`id_entidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `grupos_familiares`
--
ALTER TABLE `grupos_familiares`
  ADD CONSTRAINT `fk_adolescente_grupo_familiar` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `historico_logins`
--
ALTER TABLE `historico_logins`
  ADD CONSTRAINT `fk_hl_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `horarios_familiar`
--
ALTER TABLE `horarios_familiar`
  ADD CONSTRAINT `fk_adolescente_horario_familiar` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `internacoes`
--
ALTER TABLE `internacoes`
  ADD CONSTRAINT `fk_adolescente_internacoes` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `lazeres_culturas_esportes`
--
ALTER TABLE `lazeres_culturas_esportes`
  ADD CONSTRAINT `fk_adolescente_lce` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `pias`
--
ALTER TABLE `pias`
  ADD CONSTRAINT `fk_adolescente_pia` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `planejamentos_atendimentos`
--
ALTER TABLE `planejamentos_atendimentos`
  ADD CONSTRAINT `fk_pia_planejamento_atendimento` FOREIGN KEY (`pia_id`) REFERENCES `pias` (`id_pia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `planejamentos_futuros`
--
ALTER TABLE `planejamentos_futuros`
  ADD CONSTRAINT `fk_adolescente_planejamento_futuro` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `profissionalizacao`
--
ALTER TABLE `profissionalizacao`
  ADD CONSTRAINT `fk_adolescente_profissionalizacao` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `saude`
--
ALTER TABLE `saude`
  ADD CONSTRAINT `fk_adolescente_saude` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD CONSTRAINT `fk_sh_enderecos` FOREIGN KEY (`endereco_id`) REFERENCES `enderecos` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `situacoes_escolares`
--
ALTER TABLE `situacoes_escolares`
  ADD CONSTRAINT `fk_adolescente_escola` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD CONSTRAINT `fk_adolescente_trabalho` FOREIGN KEY (`adolescente_id`) REFERENCES `adolescentes` (`id_adolescente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_funcionario` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
