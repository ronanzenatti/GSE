-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2020 às 22:21
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `adolescentes`
--

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
  `obs` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `audit`
--

CREATE TABLE `audit` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
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
-- Extraindo dados da tabela `audit`
--

INSERT INTO `audit` (`id`, `model_id`, `model`, `tipo`, `user_id`, `antes`, `depois`, `ip`, `created_at`, `deleted_at`) VALUES
(110, 6, 'cargos', 'C', 1, NULL, '{\"nome\":\"IASDI\",\"descricao\":\"Teste\",\"created_at\":\"2019-09-20 16:11:56\",\"updated_at\":\"2019-09-20 16:11:56\"}', '127.0.0.1', '2019-09-20 16:11:56', NULL),
(111, 6, 'cargos', 'D', 1, '{\"idcargo\":\"6\",\"nome\":\"IASDI\",\"descricao\":\"Teste\",\"created_at\":\"2019-09-20 16:11:56\",\"updated_at\":\"2019-09-20 16:11:56\",\"deleted_at\":null}', '{\"deleted_at\":\"2019-09-20 16:12:27\"}', '127.0.0.1', '2019-09-20 16:12:27', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `idcargo` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`idcargo`, `nome`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'Administrador do Sistema', '2019-03-15 11:16:13', '2019-03-15 11:16:13', NULL),
(2, 'Orientadora de Medida Socioeducativa', '', '2019-03-15 11:21:44', '2019-03-15 11:21:44', NULL),
(6, 'IASDI', 'Teste', '2019-09-20 16:11:56', '2019-09-20 16:11:56', '2019-09-20 16:12:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao_familiar`
--

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
  `obs` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao_familiar1`
--

CREATE TABLE `composicao_familiar1` (
  `idcf` bigint(20) UNSIGNED NOT NULL,
  `recebe_beneficio` tinyint(1) DEFAULT NULL,
  `beneficios` varchar(191) DEFAULT NULL,
  `obs` text DEFAULT NULL,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

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
-- Estrutura da tabela `documentos`
--

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
-- Estrutura da tabela `enderecos`
--

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
  `motivo` text DEFAULT NULL,
  `idadolescente` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidades`
--

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
-- Extraindo dados da tabela `entidades`
--

INSERT INTO `entidades` (`identidade`, `nome`, `cnpj`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `email`, `responsavel`, `resp_tel`, `resp_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ETEC de Ibitinga', '62.823.257/0161-02', 'R', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2019-03-15 11:16:13', '2019-03-15 11:16:13', NULL),
(2, 'Centro de Referência Especializado de Assistência Social - Ibitinga', '', 'C', 'Rua Rosalbino Tucci', '6200', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16)3341-8592', 'creas@ibitinga.sp.gov.br', 'Valquiria e Eliana', '(16) 3341-8592', 'creas-mse@ibitinga.sp.gov.br', '2019-03-15 11:21:20', '2019-03-15 11:21:20', NULL),
(4, 'ETEC de Ibitinga', '62.823.257/0161-02', 'R', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2019-09-18 21:45:06', '2019-09-18 21:45:06', NULL),
(5, 'ETEC de Ibitinga', '62.823.257/0161-02', 'R', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2019-09-18 21:56:59', '2019-09-18 21:56:59', NULL),
(6, 'ETEC de Ibitinga', '62.823.257/0161-02', 'R', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2019-09-18 21:57:02', '2019-09-18 21:57:02', NULL),
(7, 'ETEC de Ibitinga', '62.823.257/0161-02', 'R', 'Rua Rosalbino Tucci', '431', 'Centro', 'Ibitinga', 'SP', '14.940-000', '(16) 3341-7046 / 3342-6039', 'e161dir@cps.sp.gov.br', 'Patricia', '(16) 3341-7046', 'e161dir@cps.sp.gov.br', '2019-09-19 18:32:43', '2019-09-19 18:32:43', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

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
  `obs` text DEFAULT NULL,
  `identidade` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionario`, `nome`, `dt_nasc`, `sexo`, `cpf`, `rg`, `registro`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `obs`, `identidade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RONAN ADRIEL ZENATTI', '1988-02-25', 'M', '355,936,478-79', '41,324,990-6', '57852', 'Rua dos Lavradores', '302', 'Centro', 'Boracéia', 'SP', '17.270-000', '(14) 9 8157-5657', 'Cadastro Automático.', 1, '2019-03-15 11:16:13', '2019-03-15 11:24:59', NULL),
(2, 'ELIANA CAMPITELLI DE SOUZA', '1953-06-14', 'F', NULL, NULL, NULL, '', '', '', '', 'SP', '', '', '', 2, '2019-03-15 11:23:43', '2019-03-15 11:24:25', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_logins`
--

CREATE TABLE `historico_logins` (
  `idhl` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `navegador` varchar(30) NOT NULL,
  `so` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico_logins`
--

INSERT INTO `historico_logins` (`idhl`, `idusuario`, `ip_address`, `navegador`, `so`, `created_at`, `deleted_at`) VALUES
(16, 1, '127.0.0.1', 'Chrome / 77.0.3865.90', 'Windows', '2019-09-20 15:39:13', NULL),
(17, 1, '127.0.0.1', 'Chrome / 78.0.3904.108', 'Windows', '2020-02-11 21:52:50', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pia`
--

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
-- Estrutura da tabela `situacao_habitacional`
--

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
  `qtde_comodos` tinyint(4) DEFAULT NULL,
  `espaco` decimal(10,2) UNSIGNED DEFAULT NULL,
  `qtde_pessoas` tinyint(4) DEFAULT NULL,
  `idendereco` bigint(20) UNSIGNED NOT NULL,
  `obs` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhos`
--

CREATE TABLE `trabalhos` (
  `idtrabalho` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `empresa` varchar(250) DEFAULT NULL,
  `dt_inicio` datetime DEFAULT NULL,
  `dt_recisao` datetime DEFAULT NULL,
  `obs` longtext DEFAULT NULL,
  `motivo_recisao` longtext DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT '(F)ormal / (I)nformal',
  `idadolescente` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

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
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `ip_address`, `idfuncionario`, `idcargo`, `salt`, `email`, `password`, `username`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `last_login`, `active`, `termo`, `data_termo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '127.0.0.1', 1, 1, NULL, 'ronan.zenatti@etec.sp.gov.br', '$2y$08$9IBqHxaEu9CTN5hrRXFytenbAkw9YcS2q877eLvr.dQCpqJLRKlUS', NULL, NULL, NULL, NULL, NULL, 1581465170, 1, 0, NULL, '2019-05-26 21:44:26', '2019-06-14 14:53:56', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adolescentes`
--
ALTER TABLE `adolescentes`
  ADD PRIMARY KEY (`idadolescente`);

--
-- Índices para tabela `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`idcargo`);

--
-- Índices para tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  ADD PRIMARY KEY (`idcf`);

--
-- Índices para tabela `composicao_familiar1`
--
ALTER TABLE `composicao_familiar1`
  ADD PRIMARY KEY (`idcf`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`idcontato`),
  ADD KEY `fk_adolescente` (`idadolescente`);

--
-- Índices para tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`iddocumento`),
  ADD KEY `fk_adolecente_documento` (`idadolescente`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idendereco`),
  ADD KEY `fk_adolecente_endereco` (`idadolescente`);

--
-- Índices para tabela `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`identidade`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD KEY `fk_entidade_funcionario` (`identidade`);

--
-- Índices para tabela `historico_logins`
--
ALTER TABLE `historico_logins`
  ADD PRIMARY KEY (`idhl`);

--
-- Índices para tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pia`
--
ALTER TABLE `pia`
  ADD PRIMARY KEY (`idpia`);

--
-- Índices para tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD PRIMARY KEY (`idsh`),
  ADD KEY `fk_adolescente_sh` (`idendereco`);

--
-- Índices para tabela `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD PRIMARY KEY (`idtrabalho`),
  ADD KEY `fk_adolescente_trabalho` (`idadolescente`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_funcionario_usuario` (`idfuncionario`),
  ADD KEY `fk_cargo_usuario` (`idcargo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adolescentes`
--
ALTER TABLE `adolescentes`
  MODIFY `idadolescente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `idcargo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  MODIFY `idcf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `composicao_familiar1`
--
ALTER TABLE `composicao_familiar1`
  MODIFY `idcf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `idcontato` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `iddocumento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idendereco` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `entidades`
--
ALTER TABLE `entidades`
  MODIFY `identidade` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idfuncionario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `historico_logins`
--
ALTER TABLE `historico_logins`
  MODIFY `idhl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `pia`
--
ALTER TABLE `pia`
  MODIFY `idpia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  MODIFY `idsh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Restrições para despejos de tabelas
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
